
<?php $__env->startSection('title', __('Client Types')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('CLIENT TYPES')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li><a><?php echo e(__('Setting')); ?></a></li>
            <li><a href="<?php echo e(url('/setting/client-types')); ?>"><?php echo e(__('Client types')); ?></a></li>
            <li class="active"><?php echo e(__('Edit')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default bt-none">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Edit client type')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo e(url('/setting/client-types/update/'. $client_type['id'])); ?>" method="post"
                name="client_type_edit_form">
                <?php echo e(csrf_field()); ?>

                <div class="box-body">
                    <div class="row">
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

                        <div class="col-md-6">
                            <label for="client_type"><?php echo e(__('Client Type')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('client_type') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="client_type" id="client_type" class="form-control"
                                    value="<?php echo e($client_type['client_type']); ?>"
                                    placeholder="<?php echo e(__('Enter client name..')); ?>">
                                <?php if($errors->has('client_type')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('client_type')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            <label for="publication_status"><?php echo e(__('Publication Status')); ?> <span
                                    class="text-danger">*</span></label>
                            <div
                                class="form-group<?php echo e($errors->has('publication_status') ? ' has-error' : ''); ?> has-feedback">
                                <select name="publication_status" id="publication_status" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <option value="1"><?php echo e(__('Published')); ?></option>
                                    <option value="0"><?php echo e(__('Unpublished')); ?></option>
                                </select>
                                <?php if($errors->has('publication_status')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('publication_status')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <label for="client_type_description"><?php echo e(__('Client Type Description')); ?> <span
                                    class="text-danger">*</span></label>
                            <div
                                class="form-group<?php echo e($errors->has('client_type_description') ? ' has-error' : ''); ?> has-feedback">
                                <textarea class="textarea text-description" name="client_type_description"
                                    id="client_type_description"
                                    placeholder="<?php echo e(__('Enter client description..')); ?>"><?php echo e($client_type['client_type_description']); ?></textarea>
                                <?php if($errors->has('client_type')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('client_type_description')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?php echo e(url('/setting/client-types')); ?>" class="btn btn-danger btn-flat"><i
                            class="icon fa fa-close"></i> <?php echo e(__('Cancel')); ?></a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-edit"></i>
                        <?php echo e(__('Update client type')); ?></button>
                </div>
            </form>
        </div>
        <!-- /.box -->


    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['client_type_edit_form'].elements['publication_status'].value = "<?php echo e($client_type['publication_status']); ?>";
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/setting/client_type/edit_client_type.blade.php ENDPATH**/ ?>