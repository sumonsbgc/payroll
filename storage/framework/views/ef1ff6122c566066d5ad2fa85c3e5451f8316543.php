<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo e(__('Job Report')); ?></title>



</head>

<body onload="window.print();">
    <div class="container table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?php echo e(__('SL#')); ?></th>
                    <th><?php echo e(__('Reference Name')); ?></th>
                    <th><?php echo e(__('Address')); ?></th>
                    <th><?php echo e(__('Contact No')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php ($sl = 1); ?>
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sl++); ?></td>
                    <td><?php echo e($reference['name']); ?></td>
                    <td><?php echo e($reference['present_address']); ?></td>
                    <td><?php echo e($reference['contact_no_one']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html><?php /**PATH /var/www/projects/payroll/resources/views/administrator/people/reference/references_print.blade.php ENDPATH**/ ?>