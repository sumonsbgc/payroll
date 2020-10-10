        <!-- /.end.col -->
        <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Allowances')); ?></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group<?php echo e($errors->has('house_rent_allowance') ? ' has-error' : ''); ?>">
                  <label for="house_rent_allowance"><?php echo e(__('House Rent Allowance')); ?></label>
                  <input type="number" name="house_rent_allowance" value="<?php echo e($salary['house_rent_allowance']); ?>"
                    class="form-control" id="house_rent_allowance" placeholder="<?php echo e(__('Enter house rent allowance..')); ?>">
                  <?php if($errors->has('house_rent_allowance')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('house_rent_allowance')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('medical_allowance') ? ' has-error' : ''); ?>">
                  <label for="medical_allowance"><?php echo e(__('Medical Allowance')); ?></label>
                  <input type="number" name="medical_allowance" value="<?php echo e($salary['medical_allowance']); ?>"
                    class="form-control" id="medical_allowance" placeholder="<?php echo e(__('Enter medical allowance..')); ?>">
                  <?php if($errors->has('medical_allowance')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('medical_allowance')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('special_allowance') ? ' has-error' : ''); ?>">
                  <label for="special_allowance"><?php echo e(__('Special Allowance')); ?></label>
                  <input type="number" name="special_allowance" value="<?php echo e($salary['special_allowance']); ?>"
                    class="form-control" id="special_allowance" placeholder="<?php echo e(__('Enter special allowance..')); ?>">
                  <?php if($errors->has('special_allowance')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('special_allowance')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('provident_fund_contribution') ? ' has-error' : ''); ?>">
                  <label for="provident_fund_contribution"><?php echo e(__('Provident Fund Contribution')); ?></label>
                  <input type="number" name="provident_fund_contribution"
                    value="<?php echo e($salary['provident_fund_contribution']); ?>" class="form-control"
                    id="provident_fund_contribution" placeholder="<?php echo e(__('Enter special allowance..')); ?>">
                  <?php if($errors->has('provident_fund_contribution')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('provident_fund_contribution')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('other_allowance') ? ' has-error' : ''); ?>">
                  <label for="other_allowance"><?php echo e(__('Other Allowance')); ?></label>
                  <input type="number" name="other_allowance" value="<?php echo e($salary['other_allowance']); ?>"
                    class="form-control" id="other_allowance" placeholder="<?php echo e(__('Enter other allowance..')); ?>">
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
          <!-- /.end.col -->
          <div class="col-md-6">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Deductions')); ?></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group<?php echo e($errors->has('tax_deduction') ? ' has-error' : ''); ?>">
                  <label for="tax_deduction"><?php echo e(__('Tax Deduction')); ?></label>
                  <input type="number" name="tax_deduction" value="<?php echo e($salary['tax_deduction']); ?>" class="form-control"
                    id="tax_deduction" placeholder="<?php echo e(__('Enter tax deduction..')); ?>">
                  <?php if($errors->has('tax_deduction')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('tax_deduction')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('provident_fund_deduction') ? ' has-error' : ''); ?>">
                  <label for="provident_fund_deduction"><?php echo e(__('Provident Fund Deduction')); ?></label>
                  <input type="number" name="provident_fund_deduction" value="<?php echo e($salary['provident_fund_deduction']); ?>"
                    class="form-control" id="provident_fund_deduction" placeholder="<?php echo e(__('Enter tax deduction..')); ?>">
                  <?php if($errors->has('provident_fund_deduction')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('provident_fund_deduction')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('other_deduction') ? ' has-error' : ''); ?>">
                  <label for="other_deduction"><?php echo e(__('Other Deduction')); ?></label>
                  <input type="number" name="other_deduction" value="<?php echo e($salary['other_deduction']); ?>"
                    class="form-control" id="other_deduction" placeholder="<?php echo e(__('Enter other deduction..')); ?>">
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
          <!-- /.end.col -->
  
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Provident Fund')); ?></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label for="total_provident_fund"><?php echo e(__('Total Provident Fund')); ?></label>
                  <input type="number" class="form-control" id="total_provident_fund" readonly>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.end.col -->
  
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
                <button type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-edit"></i>
                  <?php echo e(__('Update Details')); ?></button>
              </div>
            </div>
          </div>
          <!-- /.end.col --><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/payroll/misc/edit.salary.blade.php ENDPATH**/ ?>