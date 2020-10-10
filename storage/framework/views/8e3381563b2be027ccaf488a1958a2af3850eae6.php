<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e(__('Job Report')); ?></title>

 
</head>
<body onload="window.print();">
    <div class="container">
       <table class="border">
        <thead>
            <tr>
                <th><?php echo e(__('SL#')); ?></th>
                <th><?php echo e(__('Client Name')); ?></th>
                <th><?php echo e(__('Client Type')); ?></th>
                <th><?php echo e(__('Contact No')); ?></th>
                <th><?php echo e(__('Address')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php ($sl = 1); ?>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($sl++); ?></td>
                <td><?php echo e($client['name']); ?></td>
                <td><?php echo e($client['client_type']); ?></td>
                <td><?php echo e($client['contact_no_one']); ?></td>
                <td><?php echo e($client['present_address']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html><?php /**PATH /var/www/projects/payroll/resources/views/administrator/people/client/clients_print.blade.php ENDPATH**/ ?>