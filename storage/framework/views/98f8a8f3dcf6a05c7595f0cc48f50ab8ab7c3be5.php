<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo e($employee->name); ?> <?php echo e(__('Details')); ?></title>
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

    <!--<div class="header">
        <img src="<?php echo e(url('public/backend/img/logo.png')); ?>">
    </div>-->
    <div class="footer">
        <p><?php echo e(__('Page:')); ?> <span class="pagenum"></span></p>
    </div>
    <div class="container">
        <table>
            <tr>
                <td>
                    <p>
                        <?php echo e($employee->name); ?>

                        <br>
                        <?php echo e($employee->employee_id); ?>

                        <br>
                        <?php echo e($employee->designation); ?>

                    </p>
                </td>
                <td>
                    <?php if(!empty($employee->avatar)): ?>
                    <img src="<?php echo e(url('public/profile_picture/' . $employee->avatar)); ?>" class="img-responsive img-thumbnail">
                    <?php else: ?>
                    <img src="<?php echo e(url('public/profile_picture/blank_profile_picture.png')); ?>" alt="blank_profile_picture" class="img-responsive img-thumbnail">
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tbody>
                <tr>
                    <td><?php echo e(__('Father's Name')); ?></td>
                    <td><?php echo e($employee->father_name); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Mother's Name')); ?></td>
                    <td><?php echo e($employee->mother_name); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Spouse Name')); ?></td>
                    <td><?php echo e($employee->spouse_name); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Present Address')); ?></td>
                    <td><?php echo e($employee->present_address); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Permanent Address')); ?></td>
                    <td><?php echo e($employee->permanent_address); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Home District')); ?></td>
                    <td><?php echo e($employee->home_district); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Email')); ?></td>
                    <td><?php echo e($employee->email); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Web')); ?></td>
                    <td><?php echo e($employee->web); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Contact No')); ?></td>
                    <td><?php echo e($employee->contact_no_one); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Emergency Contact')); ?></td>
                    <td><?php echo e($employee->emergency_contact); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('ID Name')); ?></td>
                    <td>
                        <?php if($employee->id_name == 1): ?>
                        <?php echo e(__('NID')); ?>

                        <?php elseif($employee->id_name == 2): ?>
                        <?php echo e(__('Passport')); ?>

                        <?php elseif($employee->id_name == 3): ?>
                        <?php echo e(__('Driving License')); ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo e(__('ID Number')); ?></td>
                    <td><?php echo e($employee->id_number); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Gender')); ?></td>
                    <td>
                        <?php if($employee->gender == 'm'): ?>
                        <?php echo e(__('Male')); ?>

                        <?php else: ?>
                        <?php echo e(__('Female')); ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo e(__('Marital Status')); ?></td>
                    <td>
                        <?php if($employee->marital_status == 1): ?>
                        <?php echo e(__('Married')); ?>

                        <?php elseif($employee->marital_status == 2): ?>
                        <?php echo e(__('Single')); ?>

                        <?php elseif($employee->marital_status == 3): ?>
                        <?php echo e(__('Divorced')); ?>

                        <?php elseif($employee->marital_status == 4): ?>
                        <?php echo e(__('Separated')); ?>

                        <?php elseif($employee->marital_status == 5): ?>
                        <?php echo e(__('Widowed')); ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo e(__('Date of Birth')); ?></td>
                    <td>
                        <?php if($employee->date_of_birth != NULL): ?>
                        <?php echo e(date("d F Y", strtotime($employee->date_of_birth))); ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo e(__('Academic Qualification')); ?></td>
                    <td><?php echo e($employee->academic_qualification); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Profession Qualification')); ?></td>
                    <td><?php echo e($employee->professional_qualification); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Joining Position')); ?></td>
                    <td>
                        <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($employee->joining_position == $designation->id): ?>
                        <?php echo e($designation->designation); ?>

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo e(__('Experience')); ?></td>
                    <td><?php echo e($employee->experience); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Reference')); ?></td>
                    <td><?php echo e($employee->reference); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Joining Date')); ?></td>
                    <td><?php echo e(date("D d F Y", strtotime($employee->joining_date))); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html><?php /**PATH /var/www/projects/payroll/resources/views/administrator/people/employee/pdf.blade.php ENDPATH**/ ?>