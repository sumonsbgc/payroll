
<?php $__env->startSection('title', __('Manage Salary Details')); ?>

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
      <li class="active"><?php echo e(__('Manage Salary Details')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary bt-none">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Manage Salary Details')); ?></h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <!-- Notification Box -->
            <div class="col-md-12">
              <?php if(!empty(Session::get('message'))): ?>
              <div class="alert alert-success alert-dismissible" id="notification_box">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i> <?php echo e(Session::get('message')); ?>

              </div>
              <?php elseif(!empty(Session::get('exception'))): ?>
              <div class="alert alert-warning alert-dismissible" id="notification_box">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-warning"></i> <?php echo e(Session::get('exception')); ?>

              </div>
              <?php endif; ?>
            </div>
            <!-- /.Notification Box -->
            <div class="col-md-12">
              <form class="form-horizontal" name="employee_select_form" action="<?php echo e(url('/hrm/payroll/go')); ?>"
                method="post">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : ''); ?>">
                  <label for="user_id" class="col-sm-3 control-label"><?php echo e(__('Employee Name')); ?></label>
                  <div class="col-sm-6">
                    <select name="user_id" class="form-control" id="user_id">
                      <option selected disabled><?php echo e(__('Select One')); ?></option>
                      <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($employee['id']); ?>"><?php echo e($employee['name']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('user_id')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('user_id')); ?></strong>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group<?php echo e($errors->has('basic_salary') ? ' has-error' : ''); ?>">
                  <div class=" col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info btn-flat"><i class="icon fa fa-arrow-right"></i>
                      <?php echo e(__('Go')); ?></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /. end col -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix"></div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.end.col -->

      <form name="employee_salary_form" id="employee_salary_form"
        action="<?php echo e(url('/hrm/payroll/update/' . $salary['id'])); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e(__('Salary Details')); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group<?php echo e($errors->has('employee_type') ? ' has-error' : ''); ?>">
                  <label for="employee_type" class="col-sm-3 control-label"><?php echo e(__('Employee Type')); ?></label>
                  <div class="col-sm-6">
                    <select name="employee_type" class="form-control" id="employee_type">
                      <option selected disabled><?php echo e(__('Select One')); ?></option>
                      <option value="1"><?php echo e(__('Provision')); ?></option>
                      <option value="2"><?php echo e(__('Permanent')); ?></option>
                      <option value="3"><?php echo e(__('Full Time')); ?></option>
                      <option value="4"><?php echo e(__('Part Time')); ?></option>
                      <option value="5"><?php echo e(__('Adhoc')); ?></option>
                    </select>
                    <?php if($errors->has('employee_type')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('employee_type')); ?></strong>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group<?php echo e($errors->has('basic_salary') ? ' has-error' : ''); ?>">
                  <label for="basic_salary" class="col-sm-3 control-label"><?php echo e(__('Basic Salary')); ?></label>
                  <div class="col-sm-6">
                    <input type="number" name="basic_salary" class="form-control" id="basic_salary"
                      value="<?php echo e($salary['basic_salary']); ?>" placeholder="<?php echo e(__('Enter basic salary..')); ?>">
                    <?php if($errors->has('basic_salary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('basic_salary')); ?></strong>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
      </form>

    </div>
  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
  // For Kepp Data After Reload
  document.forms['employee_select_form'].elements['user_id'].value = "<?php echo e($employee_id); ?>";
  document.forms['employee_salary_form'].elements['employee_type'].value = "<?php echo e($salary['employee_type']); ?>";

  $(document).ready(function(){
    calculation();
  });


  //For Calculation
  $(document).on("keyup", "#employee_salary_form", function() {
    calculation();
  });

  function calculation() {
    var sum = 0;
    var basic_salary = $("#basic_salary").val();
    var house_rent_allowance = $("#house_rent_allowance").val();
    var medical_allowance = $("#medical_allowance").val();
    var special_allowance = $("#special_allowance").val();
    var provident_fund_contribution = $("#provident_fund_contribution").val();
    var provident_fund = $("#provident_fund").val();
    var other_allowance = $("#other_allowance").val();
    var tax_deduction = $("#tax_deduction").val();
    var provident_fund_deduction = $("#provident_fund_deduction").val();
    var other_deduction = $("#other_deduction").val();

    var gross_salary = (+basic_salary + +house_rent_allowance + +medical_allowance + +special_allowance + +other_allowance);

    var total_deduction = (+tax_deduction + +provident_fund_deduction + +other_deduction);

    $("#total_provident_fund").val(+provident_fund_contribution + +provident_fund_deduction);

    $("#gross_salary").val(gross_salary);
    $("#total_deduction").val(total_deduction);
    $("#net_salary").val(+gross_salary - +total_deduction);
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/payroll/edit_salary.blade.php ENDPATH**/ ?>