<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ __('Employee Salary List') }}</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/print.css?ver='.time()) }}" media="print">
</head>

<body onload="window.print();">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center py-5">
                @php(get_compnay_name())
                @php(ucwords(get_compnay_address()))
            </div>
        </div>
    </div>

    <div id="printable_area" class="col-md-12 table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('sl#') }}</th>
                    <th>{{ __('Employee Name') }}</th>
                    <th>{{ __('Designation') }}</th>
                    <th>{{ __('Salary Month') }}</th>
                    <th>{{ __('Gross Salary') }}</th>
                    <th>{{ __('Total Deduction') }}</th>
                    <th>{{ __('Net Salary') }}</th>
                    <th>{{ __('Provident Fund') }}</th>
                    <th>{{ __('Payment Status') }}</th>
                </tr>
            </thead>
            <tbody>
                @php($sl = 1)
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $employee['name'] }}</td>
                    <td>{{ $employee['designation'] }}</td>
                    <td>{{ date("F Y", strtotime($salary_month)) }}</td>
                    @php($debits = 0)
                    @php($credits = 0)

                    @php($credits += ($employee['basic_salary'] + $employee['house_rent_allowance'] + $employee['medical_allowance'] + $employee['special_allowance'] + $employee['other_allowance']))
                    @php($debits += $employee['tax_deduction'] + $employee['provident_fund_deduction'] + $employee['other_deduction'])

                    @foreach($bonuses as $bonus)
                    @if($employee['user_id'] == $bonus['user_id'])
                    @php($credits += $bonus['bonus_amount'])
                    @endif
                    @endforeach

                    @foreach($deductions as $deduction)
                    @if($employee['user_id'] == $deduction['user_id'])
                    @php($debits += $deduction['deduction_amount'])
                    @endif
                    @endforeach

                    @foreach($loans as $loan)
                    @if($employee['user_id'] == $loan['user_id'])
                    @php($installment = $loan['loan_amount'] / $loan['remaining_installments'])
                    @php($debits += $installment)
                    @endif
                    @endforeach

                    <td>{{ number_format($credits, 2, '.', ',') }}</td>
                    <td>{{ number_format($debits, 2, '.', ',') }}</td>
                    <td>{{ number_format($credits - $debits, 2, '.', ',') }}</td>
                    <td>{{ number_format($employee['provident_fund_contribution'] + $employee['provident_fund_deduction'], 2, '.', ',') }}</td>

                    <td>
                        @if(!empty($salary_payments))
                        @php($status = 0)
                        @foreach($salary_payments as $salary_payment)
                        @if($salary_payment['user_id'] == $employee['user_id'])
                        @php($status = 1)
                        @endif
                        @endforeach
                        @if($status == 1)
                        <p class="text-success">{{ __('Paid') }}</p>
                        @else
                        <a href="{{ url('hrm/salary-payments/manage-salary/' . $employee['user_id'] . '/' . $salary_month) }}">
                            <p class="text-danger">{{ __('Make payment') }}</p>
                        </a>
                        @endif
                        @else
                        <a href="{{ url('hrm/salary-payments/manage-salary/' . $employee['user_id'] . '/' . $salary_month) }}">
                            <p class="text-danger">{{ __('Make payment') }}</p>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>