<div class="col-md-6">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Deductions')); ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group<?php echo e($errors->has('tax_deduction') ? ' has-error' : ''); ?>">
          <label for="tax_deduction"><?php echo e(__('Tax Deduction')); ?></label>
          <input type="number" name="tax_deduction" value="<?php echo e(old('tax_deduction')); ?>" class="form-control" id="tax_deduction" placeholder="<?php echo e(__('Enter tax deduction..')); ?>">
          <?php if($errors->has('tax_deduction')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('tax_deduction')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('provident_fund_deduction') ? ' has-error' : ''); ?>">
          <label for="provident_fund_deduction"><?php echo e(__('Provident Fund Deduction')); ?></label>
          <input type="number" name="provident_fund_deduction" value="<?php echo e(old('provident_fund_deduction')); ?>" class="form-control" id="provident_fund_deduction" placeholder="<?php echo e(__('Enter provident fund deduction..')); ?>">
          <?php if($errors->has('provident_fund_deduction')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('provident_fund_deduction')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('other_deduction') ? ' has-error' : ''); ?>">
          <label for="other_deduction"><?php echo e(__('Other Deduction')); ?></label>
          <input type="number" name="other_deduction" value="<?php echo e(old('other_deduction')); ?>" class="form-control" id="other_deduction" placeholder="<?php echo e(__('Enter other deduction..')); ?>">
          <?php if($errors->has('other_deduction')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('other_deduction')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.end.col --><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/payroll/misc/deduction.blade.php ENDPATH**/ ?>