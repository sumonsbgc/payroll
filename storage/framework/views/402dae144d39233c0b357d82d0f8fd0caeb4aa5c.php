<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo e(__('Job Report')); ?></title>
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
                    <th><?php echo e(__('SL#')); ?></th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Designation')); ?></th>
                    <th><?php echo e(__('Email')); ?></th>
                    <th><?php echo e(__('Contact No')); ?></th>
                    <th><?php echo e(__('Join Date')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php ($sl = 1); ?>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sl++); ?></td>
                    <td><?php echo e($employee['name']); ?></td>
                    <td><?php echo e($employee['designation']); ?></td>
                    <td><?php echo e($employee['email']); ?></td>
                    <td><?php echo e($employee['contact_no_one']); ?></td>
                    <td><?php echo e(date("d F Y", strtotime($employee['created_at']))); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html><?php /**PATH /var/www/projects/payroll/resources/views/administrator/people/employee/employees_print.blade.php ENDPATH**/ ?>