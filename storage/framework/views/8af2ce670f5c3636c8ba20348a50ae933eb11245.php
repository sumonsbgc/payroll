<?php $__env->startSection('title', __('Application Options')); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo e(__('Application Options')); ?>

            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
                <li><a><?php echo e(__('Setting')); ?></a></li>
                <li><a href="<?php echo e(route('setting.option.index')); ?>"><?php echo e(__('Options')); ?></a></li>
                <li class="active"><?php echo e(__('Add App Options')); ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default bt-none">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(__('Add New App Options')); ?></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <form action="<?php echo e(route('setting.option.store')); ?>" method="post" name="option_type_form">
                    <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                        <div class="row">
                            <!-- Notification Box -->
                            <div class="col-md-12">
                                <?php if(!empty(Session::get('message'))): ?>
                                    <div class="alert alert-success alert-dismissible" id="notification_box">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <i class="icon fa fa-check"></i> <?php echo e(Session::get('message')); ?>

                                    </div>
                                <?php elseif(!empty(Session::get('exception'))): ?>
                                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <i class="icon fa fa-warning"></i> <?php echo e(Session::get('exception')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- /.Notification Box -->
                            <div class="col-md-6">
                                <label for="logo"><?php echo e(__('Upload Logo')); ?> <span class="text-danger">*</span></label>
                                <div class="form-group<?php echo e($errors->has('logo') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="file" name="logo" id="logo" class="form-control">
                                    <?php if($errors->has('logo')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('logo')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="site-title"><?php echo e(__('Application Title')); ?> <span
                                        class="text-danger">*</span></label>
                                <div class="form-group<?php echo e($errors->has('site-title') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="site-title" id="site-title" class="form-control"
                                        placeholder="Application Title">
                                    <?php if($errors->has('site-title')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('site-title')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class="col-md-6">
                                <label for="office_address"><?php echo e(__('Office Address')); ?> <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group<?php echo e($errors->has('office_address') ? ' has-error' : ''); ?> has-feedback">
                                    <textarea class="textarea text-description" name="office_address" id="office_address"
                                        placeholder="<?php echo e(__('Office Address..')); ?>" style="height: 90px;"><?php echo e(old('office_address')); ?></textarea>
                                    <?php if($errors->has('office_address')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('office_address')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->

                            <div class="col-md-6">
                                <label for="company-name"><?php echo e(__('Company Name (For Invoice)')); ?> <span
                                        class="text-danger">*</span></label>
                                <div class="form-group<?php echo e($errors->has('company-name') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="company-name" id="company-name" class="form-control"
                                        placeholder="Company Name">
                                    <?php if($errors->has('company-name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('company-name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="mobile"><?php echo e(__('Mobile Number')); ?> <span class="text-danger">*</span></label>
                                <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        placeholder="Mobile Number">
                                    <?php if($errors->has('mobile')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('mobile')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="late-count-status"><?php echo e(__('Late Count Status')); ?></label> <span
                                    class="text-danger">*</span></label>
                                <div class="form-group <?php echo e($errors->has('late-count-status' ? ' has-error' : '')); ?> has-feedback">
                                    <input type="radio" class="custom-control-input" name="late-count-status" value="1" checked> Yes <br>
                                    <input type="radio" class="custom-control-input" name="late-count-status" value="0"> No <br>

                                    <?php if($errors->has('late-count-status')): ?>
                                        <span>
                                            <strong><?php echo e($errors->first('late-count-status')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="overtime-count-status"><?php echo e(__('Overtime Count Status')); ?></label> <span
                                    class="text-danger">*</span></label>
                                <div class="form-group <?php echo e($errors->has('overtime-count-status' ? ' has-error' : '')); ?> has-feedback">

                                    <input type="radio" class="custom-control-input"  name="overtime-count-status" value="1"> Yes <br>
                                    <input type="radio" class="custom-control-input" name="overtime-count-status" value="0" checked> No <br>

                                    <?php if($errors->has('overtime-count-status')): ?>
                                        <span>
                                            <strong><?php echo e($errors->first('overtime-count-status')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="entry-time"><?php echo e(__('Exact Entry Time (AM)')); ?> <span
                                        class="text-danger">*</span></label>
                                <div class="form-group<?php echo e($errors->has('entry-time') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="entry-time" id="entry-time" class="form-control"
                                        placeholder="e.g. 9:00">
                                    <?php if($errors->has('entry-time')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('entry-time')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="late-day-count"><?php echo e(__('Late Day Count Number')); ?> <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group<?php echo e($errors->has('late-day-count') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="late-day-count" id="late-day-count" class="form-control"
                                        placeholder="e.g. 3">
                                    <?php if($errors->has('late-day-count')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('late-day-count')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="late-count-start-titme"><?php echo e(__('Late count Start Time (AM)')); ?> <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group<?php echo e($errors->has('late-count-start-titme') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="late-count-start-titme" id="late-count-start-titme"
                                        class="form-control" placeholder="e.g. 9:15">
                                    <?php if($errors->has('late-count-start-titme')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('late-count-start-titme')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="overtime-count-time"><?php echo e(__('Overtime Count time')); ?> <span
                                        class="text-danger">*</span></label>
                                <div
                                    class="form-group<?php echo e($errors->has('overtime-count-time') ? ' has-error' : ''); ?> has-feedback">
                                    <input type="text" name="overtime-count-time" id="overtime-count-time"
                                        class="form-control" placeholder="Overtime Count time">
                                    <?php if($errors->has('overtime-count-time')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('overtime-count-time')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?php echo e(route('setting.option.index')); ?>" class="btn btn-danger btn-flat">
                            <i class="icon fa fa-close"></i> <?php echo e(__('Cancel')); ?>

                        </a>
                        <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i>
                            <?php echo e(__('Add App Options')); ?></button>
                    </div>
                </form>
            </div>
            <!-- /.box -->


        </section>
        <!-- /.content -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/setting/option/app_options.blade.php ENDPATH**/ ?>