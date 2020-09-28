<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo e(__('Employee Salary List')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/print.css?ver='.time())); ?>" media="print">
</head>

<body onload="window.print();">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center py-5">
                <?php (get_compnay_name()); ?>
                <?php (ucwords(get_compnay_address())); ?>
            </div>
        </div>
    </div>

    <div id="printable_area" class="col-md-12 table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('sl#')); ?></th>
                    <th><?php echo e(__('Employee Name')); ?></th>
                    <th><?php echo e(__('Designation')); ?></th>
                    <th><?php echo e(__('Salary Month')); ?></th>
                    <th><?php echo e(__('Gross Salary')); ?></th>
                    <th><?php echo e(__('Total Deduction')); ?></th>
                    <th><?php echo e(__('Net Salary')); ?></th>
                    <th><?php echo e(__('Provident Fund')); ?></th>
                    <th><?php echo e(__('Payment Status')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php ($sl = 1); ?>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sl++); ?></td>
                    <td><?php echo e($employee['name']); ?></td>
                    <td><?php echo e($employee['designation']); ?></td>
                    <td><?php echo e(date("F Y", strtotime($salary_month))); ?></td>
                    <?php ($debits = 0); ?>
                    <?php ($credits = 0); ?>

                    <?php ($credits += ($employee['basic_salary'] + $employee['house_rent_allowance'] + $employee['medical_allowance'] + $employee['special_allowance'] + $employee['other_allowance'])); ?>
                    <?php ($debits += $employee['tax_deduction'] + $employee['provident_fund_deduction'] + $employee['other_deduction']); ?>

                    <?php $__currentLoopData = $bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bonus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($employee['user_id'] == $bonus['user_id']): ?>
                    <?php ($credits += $bonus['bonus_amount']); ?>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($employee['user_id'] == $deduction['user_id']): ?>
                    <?php ($debits += $deduction['deduction_amount']); ?>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($employee['user_id'] == $loan['user_id']): ?>
                    <?php ($installment = $loan['loan_amount'] / $loan['remaining_installments']); ?>
                    <?php ($debits += $installment); ?>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <td><?php echo e(number_format($credits, 2, '.', ',')); ?></td>
                    <td><?php echo e(number_format($debits, 2, '.', ',')); ?></td>
                    <td><?php echo e(number_format($credits - $debits, 2, '.', ',')); ?></td>
                    <td><?php echo e(number_format($employee['provident_fund_contribution'] + $employee['provident_fund_deduction'], 2, '.', ',')); ?></td>

                    <td>
                        <?php if(!empty($salary_payments)): ?>
                        <?php ($status = 0); ?>
                        <?php $__currentLoopData = $salary_payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary_payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($salary_payment['user_id'] == $employee['user_id']): ?>
                        <?php ($status = 1); ?>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 1): ?>
                        <p class="text-success"><?php echo e(__('Paid')); ?></p>
                        <?php else: ?>
                        <a href="<?php echo e(url('hrm/salary-payments/manage-salary/' . $employee['user_id'] . '/' . $salary_month)); ?>">
                            <p class="text-danger"><?php echo e(__('Make payment')); ?></p>
                        </a>
                        <?php endif; ?>
                        <?php else: ?>
                        <a href="<?php echo e(url('hrm/salary-payments/manage-salary/' . $employee['user_id'] . '/' . $salary_month)); ?>">
                            <p class="text-danger"><?php echo e(__('Make payment')); ?></p>
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</body>

</html><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/salary_payment/salary_list_pdf.blade.php ENDPATH**/ ?>