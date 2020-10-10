
<?php $__env->startSection('title', __('Add File')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo e(__('FILES')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?> </a></li>
            <li><a href="<?php echo e(url('/files/' . $folder_id)); ?>"> <?php echo e(__('Files')); ?></a></li>
            <li class="active"> <?php echo e(__('Add file')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"> <?php echo e(__('Add File')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo e(url('/files/store/'.$folder_id)); ?>" method="post" name="file_name_add_form" enctype="multipart/form-data">
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
                            <?php else: ?>
                            <p class="text-yellow"><?php echo e(__('Enter file details. All field are required. ')); ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="caption"><?php echo e(__('Caption')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('caption') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="caption" id="caption" class="form-control" value="<?php echo e(old('caption')); ?>" placeholder="<?php echo e(__('Enter caption..')); ?>">
                                <?php if($errors->has('caption')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('caption')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="file_name"><?php echo e(__('Chose File')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('file_name') ? ' has-error' : ''); ?> has-feedback">
                                <input type="file" name="file_name" id="file_name" class="form-control" value="<?php echo e(old('file_name')); ?>" placeholder="<?php echo e(__('Enter client name..')); ?>">
                                <?php if($errors->has('file_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('file_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="publication_status"><?php echo e(__('Publication Status')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('publication_status') ? ' has-error' : ''); ?> has-feedback">
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
                        </div>
                    </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo e(url('/files/' . $folder_id)); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i> <?php echo e(__('Cancel')); ?></a>
                <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo e(__('Add file')); ?></button>
            </div>
        </form>
    </div>
    <!-- /.box -->


</section>
<!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['file_name_add_form'].elements['publication_status'].value = "<?php echo e(old('publication_status')); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/file/add_file.blade.php ENDPATH**/ ?>