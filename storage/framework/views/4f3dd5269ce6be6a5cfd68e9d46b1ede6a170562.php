<div class="col-md-offset-6 col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Total Salary Details')); ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group">
          <label for="gross_salary"><?php echo e(__('Gross Salary')); ?></label>
          <input type="number" disabled class="form-control" id="gross_salary">
        </div>
        <div class="form-group<?php echo e($errors->has('total_deduction') ? ' has-error' : ''); ?>">
          <label for="total_deduction"><?php echo e(__('Total Deduction')); ?></label>
          <input type="number" disabled class="form-control" id="total_deduction">
        </div>
        <div class="form-group">
          <label for="net_salary"><?php echo e(__('Net Salary')); ?></label>
          <input type="number" disabled class="form-control" id="net_salary">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> <?php echo e(__('Save Details')); ?></button>
      </div>
    </div>
  </div>
  <!-- /.end.col --><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/payroll/misc/misc.blade.php ENDPATH**/ ?>