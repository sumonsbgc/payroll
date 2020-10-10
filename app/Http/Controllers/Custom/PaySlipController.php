<?php

namespace App\Http\Controllers\Custom;

use App\Loan;
use App\User;
use App\Bonus;
use App\Deduction;
use App\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Increment;
use App\Payroll;
use App\SalaryPayment;
use App\SalaryPaymentDetails;
use Illuminate\Support\Facades\DB;

class PaySlipController extends Controller
{

    public function getMonthlyAttendence()
    {

        $monthlyAtt = Attendance::where('attendance_date', 'LIKE', date('Y-m') . '%')->get();
        $employees = User::where('role', 2)->get(['id', 'fingerprint_user_id']);
        $check_in_time = '09:15:00'; // Need to query from options table

        foreach ($employees as $emp) {

            $payroll = Payroll::where('user_id', $emp->id)->first(['basic_salary']);
            
            if (!empty($payroll) && !is_null($payroll->basic_salary ?? null)) {

                $data = $monthlyAtt->where('user_id', $emp->id);
                $total_presents = $data->where('attendance_status', 1);
                $total_lates = $total_presents->where('check_in', '>', $check_in_time); // 
                $total_absents = $data->where('attendance_status', 0)->where('leave_category_id', 0);
                $total_leaves = $data->where('attendance_status', 0)->where('leave_category_id', '>', 0);

                $absents = $total_absents->count() + number_format(floor($total_lates->count() / 3)); // 5
                $presents = ($total_presents->count() + $total_leaves->count()) - number_format(floor($total_lates->count() / 3));

                $details = [];
                $debits = 0;
                $credits = 0;

                //Loan Management
                $loans = Loan::where('user_id', $emp->id)
                    ->where('remaining_installments', '>', 0)
                    ->get(['id', 'loan_name', 'loan_amount', 'remaining_installments', 'number_of_installments']);

                foreach ($loans as $loan) {
                    $installment = $loan->loan_amount / $loan->number_of_installments;
                    $debits += $installment;

                    $loan->update([
                        'remaining_installments' => $loan->remaining_installments - 1,
                        'deletion_status' => $loan->remaining_installments == 1 ? 1 : 0
                    ]);
                    array_push($details, ['item_name' => $loan->loan_name, 'amount' => $installment, 'status' => 'debits']);
                }

                //Bonus Management
                $bonuses = Bonus::where('bonus_month', 'LIKE', date('Y-m') . '%')
                    ->where('user_id', '=', $emp->id)
                    ->where('deletion_status', '=', 0)
                    ->get(['id','bonus_name', 'bonus_amount']);

                foreach ($bonuses as $bonus) {
                    $b_amount = $bonus->bonus_amount;
                    $credits += $b_amount;

                    $bonus->update([
                        'deletion_status' => 1
                    ]);
                    array_push($details, ['item_name' => $bonus->bonus_name, 'amount' => $b_amount, 'status' => 'credits']);
                }

                //Deduction Management

                $deductions = Deduction::where('deduction_month', 'LIKE', date('Y-m') . '%')
                    ->where('user_id', '=', $emp->id)
                    ->where('deletion_status', '=', 0)
                    ->get(['id', 'deduction_name', 'deduction_amount']);

                foreach ($deductions as $deduction) {
                    $d_amount = $deduction->deduction_amount;
                    $debits += $d_amount;

                    $deduction->update([
                        'deletion_status' => 1
                    ]);

                    array_push($details, ['item_name' => $deduction->deduction_name, 'amount' => $d_amount, 'status' => 'debits']);
                }

                //Increment Management
                $increments = Increment::where('date', 'LIKE', date('Y-m') . '%')
                    ->where('emp_id', '=', $emp->id)
                    ->where('increment_status', '=', 0)
                    ->get(['id','amount', 'incr_purpose', 'increment_status', 'date']);
                $i_amount = 0;
                foreach ($increments as $increment) {
                    if ($increment->date == date('Y-m') && $increment->status == 0) {
                        $i_amount += $increment->amount;
                        $increment->update([
                            'increment_status' => 1
                        ]);

                        array_push($details, ['item_name' => $increment->incr_purpose, 'amount' => $increment->amount, 'status' => 'credits']);
                    }
                }
                array_push($details, ['item_name' => 'Basic Salary', 'amount' => $payroll->basic_salary, 'status' => 'credits']);

                $payroll->update([
                    'basic_salary' => $payroll->basic_salary + $i_amount
                ]);

                $basic_salary = $payroll->basic_salary;
                $deductable_salary = ($basic_salary / date('t')) * $absents;
                $payable_salary = $basic_salary - $deductable_salary;

                $gross_salary = $payable_salary + $credits;
                $net_salary = $gross_salary - $debits;

                    // dd($presents);
                $salary_payments = SalaryPayment::create([
                    'created_by' => 1,
                    'user_id' => $emp->id,
                    'gross_salary' => $gross_salary,
                    'total_deduction' => $debits,
                    'net_salary' => $net_salary,
                    'payment_amount' => $net_salary,
                    'payment_month' => date('Y-m-d'),
                    'payment_type' => 3,
                    'total_presents' => $presents ?? 0,
                    'total_absents' => $absents ?? 0,
                    'total_late_days' => $total_lates->count() ?? 0,
                    'total_leave_days' => $total_leaves->count() ?? 0
                ]);
                
                foreach(array_reverse($details) as $value){
                    SalaryPaymentDetails::create([
                        'salary_payment_id' => $salary_payments->id,
                        'item_name' => $value['item_name'] ?? "Item Name",
                        'amount' => $value['amount'],
                        'status' => $value['status']
                    ]);
                }
                
                

            }
        }
    }
}
