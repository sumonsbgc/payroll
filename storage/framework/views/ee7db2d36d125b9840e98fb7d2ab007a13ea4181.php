<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo e($user['name']); ?> <?php echo e(__('Details')); ?></title>  
</head>
<body>
  <div class="header">
    <img src="<?php echo e(url('public/backend/img/logo.png')); ?>">
  </div>
  <div class="footer"><p><?php echo e(__('Page:')); ?> <span class="pagenum"></span></p></div>
  <div class="container">
    <table>
      <tr>
        <td>
          <h3><?php echo e(__('MONTHLY PAYROLL')); ?></h3>
          <p>
            <?php echo e($user['employee_id']); ?>

            <br>
            <?php echo e($user['name']); ?>

            <br>
            (<?php echo e($user['designation']); ?>)
            <br>
            <?php echo e(__('Department of ')); ?><?php echo e($user['department']); ?>

            <br>
            <?php echo e(__('Date: ')); ?><?php echo e(date("d F Y", strtotime(now()))); ?>

          </p>
        </td>
        <td>
          <?php if(!empty($user['avatar'])): ?>
          <img src="<?php echo e(url('public/profile_picture/' . $user['avatar'])); ?>" class="img-responsive img-thumbnail" width="140px">
          <?php else: ?>
          <img src="<?php echo e(url('public/profile_picture/blank_profile_picture.png')); ?>" alt="blank_profile_picture" class="img-responsive img-thumbnail" width="160px">
          <?php endif; ?>
        </td>
      </tr>
    </table>
    <br>
    <table>
      <tr class="bg-info">
        <th><?php echo e(__('sl#')); ?></th>
        <th><?php echo e(__('Description')); ?></th>
        <th><?php echo e(__('Debits')); ?></th>
        <th><?php echo e(__('Credits')); ?></th>
      </tr>
      <?php ($sl = 1); ?>
      <?php $__currentLoopData = $salary_payment_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($sl++); ?></td>
        <td><?php echo e($data->item_name); ?></td>
        <td>
          <?php if($data->status == 'debits'): ?>
          -<?php echo e($data->amount); ?>

          <?php endif; ?>
        </td>
        <td>
          <?php if($data->status == 'credits'): ?>
          <?php echo e($data->amount); ?>

          <?php endif; ?>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td> &nbsp; </td>
      </tr>
      <tr class="success">
        <td><strong class="pull-right"><?php echo e(__('Gross Salary:')); ?></strong></td>
        <td>
          <strong>
            <?php echo e(number_format($salary_payment->gross_salary, 2, '.', '')); ?>

          </strong>
        </td>
      </tr>
      <tr class="success">
        <td><strong class="pull-right"><?php echo e(__('Total Deduction:')); ?></strong></td>
        <td><strong><?php echo e(number_format($salary_payment->total_deduction, 2, '.', '')); ?></strong></td>
      </tr>
      <tr class="success">
        <td><strong class="pull-right"><?php echo e(__('Net Salary:')); ?></strong></td>
        <td><strong><?php echo e(number_format($salary_payment->net_salary, 2, '.', '')); ?></strong></td>
      </tr>
      <tr class="success">
        <td><strong class="pull-right"><?php echo e(__('Provident Fund:')); ?></strong></td>
        <td><strong><?php echo e(number_format($salary_payment->provident_fund, 2, '.', '')); ?></strong></td>
      </tr>

    </table>

    <table>
      <tr>
        <td><?php echo e(__('Prepared By')); ?></td>
        <td><?php echo e(__('Receiver Signature')); ?></td>
        <td"><?php echo e(__('Approval Signature')); ?></td>
      </tr>
    </table>

  </div>
</body>
</html><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/salary_payment/pdf.blade.php ENDPATH**/ ?>