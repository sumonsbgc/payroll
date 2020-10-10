
<div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Allowances')); ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group<?php echo e($errors->has('house_rent_allowance') ? ' has-error' : ''); ?>">
          <label for="house_rent_allowance"><?php echo e(__('House Rent Allowance')); ?></label>
          <input type="number" name="house_rent_allowance" value="<?php echo e(old('house_rent_allowance')); ?>" class="form-control" id="house_rent_allowance" placeholder="<?php echo e(__('Enter house rent allowance..')); ?>">
          <?php if($errors->has('house_rent_allowance')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('house_rent_allowance')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('medical_allowance') ? ' has-error' : ''); ?>">
          <label for="medical_allowance"><?php echo e(__('Medical Allowance')); ?></label>
          <input type="number" name="medical_allowance" value="<?php echo e(old('medical_allowance')); ?>" class="form-control" id="medical_allowance" placeholder="<?php echo e(__('Enter medical allowance..')); ?>">
          <?php if($errors->has('medical_allowance')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('medical_allowance')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('special_allowance') ? ' has-error' : ''); ?>">
          <label for="special_allowance"><?php echo e(__('Special Allowance')); ?></label>
          <input type="number" name="special_allowance" value="<?php echo e(old('special_allowance')); ?>" class="form-control" id="special_allowance" placeholder="<?php echo e(__('Enter special allowance..')); ?>">
          <?php if($errors->has('special_allowance')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('special_allowance')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('provident_fund_contribution') ? ' has-error' : ''); ?>">
          <label for="provident_fund_contribution"><?php echo e(__('Provident Fund Contribution')); ?></label>
          <input type="number" name="provident_fund_contribution" value="<?php echo e(old('provident_fund_contribution')); ?>" class="form-control" id="provident_fund_contribution" placeholder="<?php echo e(__('Enter provident fund contribution..')); ?>">
          <?php if($errors->has('provident_fund_contribution')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('provident_fund_contribution')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
        <div class="form-group<?php echo e($errors->has('other_allowance') ? ' has-error' : ''); ?>">
          <label for="other_allowance"><?php echo e(__('Other Allowance')); ?></label>
          <input type="number" name="other_allowance" value="<?php echo e(old('other_allowance')); ?>" class="form-control" id="other_allowance" placeholder="<?php echo e(__('Enter other allowance..')); ?>">
          <?php if($errors->has('other_allowance')): ?>
          <span class="help-block">
            <strong><?php echo e($errors->first('other_allowance')); ?></strong>
          </span>
          <?php endif; ?>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.end.col --><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/payroll/misc/allowance.blade.php ENDPATH**/ ?>