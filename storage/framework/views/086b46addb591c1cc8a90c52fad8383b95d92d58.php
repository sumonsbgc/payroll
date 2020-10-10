
<?php $__env->startSection('title', __('Salary Details')); ?>

<?php $__env->startSection('main_content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     <?php echo e(__('PAYROLL')); ?> 
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
      <li><a><?php echo e(__('Payroll')); ?></a></li>
      <li class="active"><?php echo e(__('Salary Details')); ?></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Employee Details')); ?></h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <!-- Notification Box -->
            <div class="col-md-offset-2 col-md-5 table-responsive">
              <table class="table borderless">
                <tr>
                  <td><?php echo e(__('Employee Name:')); ?></td>
                  <td><?php echo e($salary['name']); ?></td>
                </tr>
                <tr>
                  <td><?php echo e(__('Employee Type:')); ?></td>
                  <td>
                    <?php if($salary['employee_type'] == 1): ?>
                   <?php echo e(__('Provision')); ?> 
                    <?php elseif($salary['employee_type'] == 2): ?>
                   <?php echo e(__('Permanent')); ?> 
                    <?php elseif($salary['employee_type'] == 3): ?>
                   <?php echo e(__('Full Time')); ?> 
                    <?php elseif($salary['employee_type'] == 4): ?>
                   <?php echo e(__('Part Time')); ?> 
                    <?php else: ?>
                    <?php echo e(__('Adhoc')); ?>

                    <?php endif; ?>
                  </td>
                  <tr>
                    <td><?php echo e(__('Department:')); ?></td>
                    <td><?php echo e($salary['department']); ?></td>
                  </tr>
                  <tr>
                    <td><?php echo e(__('Designation:')); ?></td>
                    <td><?php echo e($salary['designation']); ?></td>
                  </tr>
                </tr>
              </table>
            </div>
            <!-- /. end col -->
            <div class="col-md-3">
              <?php if(!empty($salary['avatar'])): ?>
              <img src="<?php echo e(url('public/profile_picture/' . $salary['avatar'])); ?>" class="img-responsive img-thumbnail" width="250px">
              <?php else: ?>
              <img src="<?php echo e(url('public/profile_picture/blank_profile_picture.png')); ?>" alt="blank_profile_picture" class="img-responsive img-thumbnail" width="160px">
              <?php endif; ?>
            </div>
            <!-- /. end col -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.end.col -->

      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Salary Details')); ?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th><?php echo e(__('#SL')); ?></th>
                <th><?php echo e(__('Transection Type')); ?></th>
                <th><?php echo e(__('Debits')); ?></th>
                <th><?php echo e(__('Credits')); ?></th>
              </tr>
              <tr>
                <td>01.</td>
                <td><?php echo e(__('Basic Salary')); ?></td>
                <td></td>
                <td><?php echo e($salary['basic_salary']); ?></td>
              </tr>
              <tr>
                <td>02.</td>
                <td><?php echo e(__('House Rent Allowance')); ?></td>
                <td></td>
                <td><?php echo e($salary['house_rent_allowance']); ?></td>
              </tr>
              <tr>
                <td>03.</td>
                <td><?php echo e(__('Medical Allowance')); ?></td>
                <td></td>
                <td><?php echo e($salary['medical_allowance']); ?></td>
              </tr>
              <tr>
                <td>04.</td>
                <td><?php echo e(__('Special Allowance')); ?></td>
                <td></td>
                <td><?php echo e($salary['special_allowance']); ?></td>
              </tr>
              <tr>
                <td>05.</td>
                <td><?php echo e(__('Provident Fund Contribution')); ?></td>
                <td></td>
                <td><?php echo e($salary['provident_fund_contribution']); ?></td>
              </tr>
              <tr>
                <td>06.</td>
                <td><?php echo e(__('Other Allowance')); ?></td>
                <td></td>
                <td><?php echo e($salary['other_allowance']); ?></td>
              </tr>
              <tr>
                <td>07.</td>
                <td><?php echo e(__('Tax Deduction')); ?></td>
                <td>
                  <?php if(!empty($salary['tax_deduction'])): ?>
                -<?php echo e($salary['tax_deduction']); ?>

                <?php endif; ?>
              </td>
                <td></td>
              </tr>
              <tr>
                <td>08.</td>
                <td><?php echo e(__('Provident Fund Deduction')); ?></td>
                <td>-<?php echo e($salary['provident_fund_deduction']); ?></td>
                <td></td>
              </tr>
              <tr>
                <td>09.</td>
                <td><?php echo e(__('Other Deduction')); ?></td>
                <td>-<?php echo e($salary['other_deduction']); ?></td>
                <td></td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.end.col -->
      </div>
      <!-- /.end.col -->

      <div class="col-md-12">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Total Salary Details')); ?></h3>
          </div>
          <!-- /.box-header -->

          <?php ($total_deduction = $salary['tax_deduction'] + $salary['other_deduction']+ $salary['provident_fund_deduction']); ?>

          <?php ($gross_salary = $salary['basic_salary'] + $salary['house_rent_allowance'] + $salary['medical_allowance'] + $salary['special_allowance'] + $salary['other_allowance']); ?>

          <?php ($total_provident_fund = $salary['provident_fund_contribution'] + $salary['provident_fund_deduction']); ?>

          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <td><?php echo e(__('Gross Salary')); ?></td>
                <td>
                  <?php echo e($gross_salary); ?>

                </td>
              </tr>
              <tr>
                <td><?php echo e(__('Total Deduction')); ?></td>
                <td>
                  <?php echo e($total_deduction); ?>

                </td>
              </tr>
              <tr>
                <td><strong><?php echo e(__('Provident Fund')); ?></strong></td>
                <td><?php echo e($total_provident_fund); ?></td>
              </tr>
              <tr>
                <td><strong><?php echo e(__('Net Salary')); ?></strong></td>
                <td><?php echo e($gross_salary - $total_deduction); ?></td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.end.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/payroll/salary_details.blade.php ENDPATH**/ ?>