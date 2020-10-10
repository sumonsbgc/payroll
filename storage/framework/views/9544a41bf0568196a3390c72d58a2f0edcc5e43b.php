
<?php $__env->startSection('title', __('Show Employee Award')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e(__('Show Employee Award')); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?> </a></li>
      <li><a><?php echo e(__('HRM')); ?> </a></li>
      <li><a href="<?php echo e(url('/hrm/employee-awards')); ?>"><?php echo e(__('Show Employee Award')); ?> </a></li>
      <li class="active"><?php echo e(__('Details')); ?> </li>
    </ol>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box bt-none">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Show Employee Award')); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <a href="<?php echo e(url('/hrm/employee-awards')); ?>" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i>
          <?php echo e(__('Back')); ?></a>

        <button type="button" class="btn btn-default btn-flat pull-right" onclick="printDiv('printable_area')">
          <i class="fa fa-print"></i> <?php echo e(__('Print')); ?></button>

        <hr>
        <div id="printable_area">
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <td><?php echo e(__('Employee Name')); ?></td>
                <td>
                  <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($employee['id'] == $employee_aword['employee_id']): ?>
                  <?php echo e($employee['name']); ?>

                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
              </tr>
              <tr>
                <td><?php echo e(__('Award Category')); ?></td>
                <td><?php echo e($employee_aword['award_title']); ?></td>
              </tr>
              <tr>
                <td><?php echo e(__('Gift Item')); ?></td>
                <td><?php echo e($employee_aword['gift_item']); ?></td>
              </tr>
              <tr>
                <td><?php echo e(__('Month')); ?> </td>
                <td><?php echo e(date("d F Y", strtotime($employee_aword['select_month']))); ?></td>
              </tr>
              <tr>
                <td><?php echo e(__('Award Details')); ?></td>
                <td><?php echo e($employee_aword['description']); ?></td>
              </tr>

              <tr>
                <td><?php echo e(__('Created at')); ?></td>
                <td><?php echo e(date("D d F Y h:ia", strtotime($employee_aword['created_at']))); ?></td>
              </tr>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/employee_awards/show_employee_award.blade.php ENDPATH**/ ?>