<?php
use Carbon\Carbon;
?>

<?php $__env->startSection('title', __('Show Leave Application Lists')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e(__('Show Leave Application Lists')); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
      <li><a><?php echo e(__('Leave')); ?></a></li>
      <li><a href="<?php echo e(url('/hrm/application_lists')); ?>"><?php echo e(__('Manage Leave Application Lists')); ?></a></li>
      <li class="active"><?php echo e(__('Details')); ?></li>
    </ol>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box bt-none">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Show of Leave Application Lists')); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body table-responsive">
        <a href="<?php echo e(url('/hrm/application_lists')); ?>" class="btn btn-primary btn-flat"><i
            class="fa fa-arrow-left"></i><?php echo e(__('Back')); ?> </a>
        <hr>
        <table class="table table-bordered table-striped">
          <tbody id="myTable">


            <tr>
              <td><?php echo e(__('Leave Reason')); ?></td>
              <td><?php echo e($leave_application['reason']); ?></td>
            </tr>
            <tr>
              <td><?php echo e(__('Start Date')); ?></td>
              <td><?php echo e(date("d F Y", strtotime( $leave_application['start_date'] ))); ?></td>
            </tr>
            <tr>
              <td><?php echo e(__('End date')); ?></td>
              <td><?php echo e(date("d F Y", strtotime($leave_application['end_date']))); ?></td>
            </tr>
            <tr>
              <td><?php echo e(__('Leave Days')); ?></td>
              <td>
                <?php ($leave_days =
                Carbon::parse($leave_application['start_date'])->diffInDays(Carbon::parse($leave_application['end_date']))+1); ?>
                <?php echo e($leave_days); ?>

              </td>
            </tr>
            <tr>
              <td><?php echo e(__('Leave Category')); ?></td>
              <td><?php echo e($leave_application['leave_category']); ?></td>
            </tr>
            <tr>
              <td><?php echo e(__('Created By')); ?></td>
              <td><?php echo e($leave_application['name']); ?></td>
            </tr>

            <tr>
              <td><?php echo e(__('Apply date')); ?></td>
              <td><?php echo e(date("D d F Y h:ia", strtotime($leave_application['created_at']))); ?></td>
            </tr>
            <tr>
            <tr>
              <td colspan="2">
                <div class="btn-group btn-group-justified">
                  <?php if($leave_application['publication_status'] == 1): ?>
                  <div class="btn-group">
                    <a href="" class="tip btn btn-success btn-flat" data-toggle="tooltip"
                      data-original-title="Accepted">
                      <i class="icon fa fa-smile-o"></i>
                      <span class="hidden-sm hidden-xs"><?php echo e(__('Accepted')); ?> </span>
                    </a>
                  </div>
                  <?php elseif($leave_application['publication_status'] == 2): ?>
                  <div class="btn-group">
                    <a href="" class="tip btn btn-danger btn-flat" data-toggle="tooltip"
                      data-original-title="Not Accepted">
                      <i class="icon fa fa-flag"></i>
                      <span class="hidden-sm hidden-xs"><?php echo e(__(' Not Accepted')); ?></span>
                    </a>
                  </div>
                  <?php else: ?>
                  <div class="btn-group">
                    <a href="" class="tip btn btn-warning btn-flat" data-toggle="tooltip" data-original-title="Pending">
                      <i class="icon fa fa-hourglass-2"></i>
                      <span class="hidden-sm hidden-xs"><?php echo e(__('Pending')); ?></span>
                    </a>
                  </div>
                  <?php endif; ?>

                  <div class="btn-group">
                    <a href="#" class="tip btn btn-primary btn-flat" title="" data-original-title="Label Printer">
                      <i class="fa fa-print"></i>
                      <span class="hidden-sm hidden-xs"> <?php echo e(__('Print')); ?></span>
                    </a>
                  </div>
                  <div class="btn-group">
                    <a href="#" class="tip btn btn-primary btn-flat" title="" data-original-title="PDF">
                      <i class="fa fa-file-pdf-o"></i>
                      <span class="hidden-sm hidden-xs"> <?php echo e(__('PDF')); ?></span>
                    </a>
                  </div>


                </div>
              </td>
            </tr>


          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/leave_application/show_application_lists.blade.php ENDPATH**/ ?>