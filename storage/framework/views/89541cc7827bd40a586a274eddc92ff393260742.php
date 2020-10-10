
<?php $__env->startSection('title', __( 'Manage Salary')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e(__('PAYROLL')); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
      <li><a><?php echo e(__('Salary')); ?></a></li>
      <li class="active"><?php echo e(__('Manage Salary')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Employee Details')); ?></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-md-12">
              <a href="<?php echo e(url('/hrm/salary-payments')); ?>" class="btn btn-primary btn-flat"><i
                  class="fa fa-arrow-left"></i> <?php echo e(__('Back')); ?></a>
            </div>
            <!-- Notification Box -->
            <div class="col-md-12 table-responsive">

              <table class="table table-bordered table-striped">

                <tr>
                  <td><b><?php echo e(__('Employee Name:')); ?></b></td>
                  <td><?php echo e($user['name']); ?></td>
                </tr>
                <tr>
                  <td><b><?php echo e(__('Department:')); ?></b></td>
                  <td><?php echo e($user['department']); ?></td>
                </tr>
                <tr>
                  <td><b><?php echo e(__('Designation:')); ?></b></td>
                  <td><?php echo e($user['designation']); ?></td>
                </tr>
                <tr>
                  <td><b><?php echo e(__('Joining Date:')); ?></b></td>
                  <td><?php echo e(date("d F Y", strtotime($user['created_at']))); ?></td>
                </tr>
                </tr>
              </table>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.end.col -->
      <div class="col-md-3">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Payment For: ')); ?><strong><?php echo e(date("F Y", strtotime($salary_month))); ?></strong>
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form action="<?php echo e(url('/hrm/salary-payments/store')); ?>" method="post" id="called_btn_once">
              <?php echo e(csrf_field()); ?>


              <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
              <input type="hidden" name="payment_month" value="<?php echo e($salary_month); ?>">

              <!-- Forl loan id and remaining installment -->
              <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <input type="hidden" name="loan_id[]" value="<?php echo e($loan['id']); ?>">
              <input type="hidden" name="remaining_installments[]" value="<?php echo e($loan['remaining_installments']); ?>">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <div class="form-group">
                <label for="gross_salary"><?php echo e(__('Gross Salary')); ?></label>
                <input type="number" value="" class="form-control" id="gross_salary" disabled>
                <input type="hidden" name="gross_salary" id="gross_salary_1">
              </div>
              <!-- / .end form group -->

              <div class="form-group">
                <label for="total_deduction"><?php echo e(__('Total Deduction')); ?></label>
                <input type="number" value="" class="form-control" id="total_deduction" disabled>
                <input type="hidden" name="total_deduction" id="total_deduction_1">
              </div>
              <!-- / .end form group -->

              <div class="form-group">
                <label for="net_salary"><?php echo e(__('Net Salary')); ?></label>
                <input type="number" value="" class="form-control" id="net_salary" disabled>
                <input type="hidden" name="net_salary" id="net_salary_1">
              </div>


              <div class="form-group<?php echo e($errors->has('payment_amount') ? ' has-error' : ''); ?>">
                <label for="payment_amount"><?php echo e(__('Payment Amount')); ?></label>
                <input type="text" name="payment_amount" value="<?php echo e(old('payment_amount')); ?>" class="form-control"
                  id="payment_amount">
                <?php if($errors->has('payment_amount')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('payment_amount')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- / .end form group -->

              <div class="form-group<?php echo e($errors->has('payment_type') ? ' has-error' : ''); ?>">
                <label for="payment_type"><?php echo e(__('Payment Type')); ?></label>
                <select name="payment_type" id="payment_type" class="form-control">
                    <option selected disabled><?php echo e(__('Select One')); ?></option>
                  <?php $__currentLoopData = getPaymentType(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"><?php echo e(__($type)); ?></option>                      
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('payment_type')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('payment_type')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- / .end form group -->

              <div class="form-group<?php echo e($errors->has('note') ? ' has-error' : ''); ?>">
                <label for="note"><?php echo e(__('Note')); ?></label>
                <textarea name="note" class="form-control" id="note" rows="3"
                  placeholder="<?php echo e(__('Enter note..')); ?>"></textarea>
                <?php if($errors->has('note')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('note')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- / .end form group -->
              <button id="btnTest" type="submit" class="btn btn-danger btn-flat btn-block"><?php echo e(__('Make Payment')); ?></button>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.end.col -->
      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(__('Payment Details For:')); ?>

              <strong><?php echo e(date("F Y", strtotime($salary_month))); ?></strong></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr class="bg-info">
                <th><?php echo e(__('sl#')); ?></th>
                <th><?php echo e(__('Item Name')); ?></th>
                <th><?php echo e(__('Debits')); ?></th>
                <th><?php echo e(__('Credits')); ?></th>
              </tr>
              <?php 
                $sl = 1;
                $debits = 0;
                $credits = 0;
              ?>
              <tr>
                <td><?php echo e($sl++); ?></td>
                <td><?php echo e(__('Basic Salary')); ?></td>
                <td></td>
                <td>
                  <?php $credits += $salary['basic_salary']; ?>
                  <?php echo e($salary['basic_salary']); ?>

                  <input type="hidden" name="item_name[]" value="Basic Salary">
                  <input type="hidden" name="amount[]" value="<?php echo e($salary['basic_salary']); ?>">
                  <input type="hidden" name="status[]" value="credits">
                </td>
              </tr>

              <?php $__currentLoopData = $bonuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bonus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($sl++); ?></td>
                <td><?php echo e($bonus['bonus_name']); ?></td>
                <td></td>
                <td>
                  <?php $credits += $bonus['bonus_amount']; ?>
                  <?php echo e($bonus['bonus_amount']); ?>

                  <input type="hidden" name="item_name[]" value="<?php echo e($bonus['bonus_name']); ?>">
                  <input type="hidden" name="amount[]" value="<?php echo e($bonus['bonus_amount']); ?>">
                  <input type="hidden" name="status[]" value="credits">
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($sl++); ?></td>
                <td><?php echo e($deduction['deduction_name']); ?></td>
                <td>
                  <?php $debits += $deduction['deduction_amount']; ?>
                  -<?php echo e($deduction['deduction_amount']); ?>

                  <input type="hidden" name="item_name[]" value="<?php echo e($deduction['deduction_name']); ?>">
                  <input type="hidden" name="amount[]" value="<?php echo e($deduction['deduction_amount']); ?>">
                  <input type="hidden" name="status[]" value="debits">
                </td>
                <td></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($sl++); ?></td>
                <td><?php echo e($loan['loan_name']); ?></td>
                <td>
                  <?php 
                    $installment = $loan['loan_amount'] / $loan['number_of_installments']; 
                    $debits += $installment; 
                  ?>
                  -<?php echo e(number_format($installment, 2, '.', ',')); ?>

                  <input type="hidden" name="item_name[]" value="<?php echo e($loan['loan_name']); ?>">
                  <input type="hidden" name="amount[]" value="<?php echo e($installment); ?>">
                  <input type="hidden" name="status[]" value="debits">
                </td>
                <td></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
          </div>
          <!-- /.box-body -->
          </form>
        </div>
      </div>
      <!-- /.end.col -->
    </div>
  </section>
  <!-- /.content -->
</div>

<input type="hidden" id="debits" value="<?php echo e(number_format($debits, 2, '.', '')); ?>">
<input type="hidden" id="credits" value="<?php echo e(number_format($credits, 2, '.', '')); ?>">

<script type="text/javascript">
  $(document).ready(function(){
    var debits = $("#debits").val();
    var credits = $("#credits").val();
    var net_salary = (+credits - +debits);


    $("#gross_salary").val(credits);
    $("#total_deduction").val(debits);
    $("#net_salary").val(net_salary);

    $("#gross_salary_1").val(credits);
    $("#total_deduction_1").val(debits);
    $("#net_salary_1").val(net_salary);

    $("#payment_amount").val(net_salary);
    calculation();
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/salary_payment/make_salary.blade.php ENDPATH**/ ?>