<?php $__env->startSection('title', __('Designations')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('DESIGNATIONS')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
            <li><a><?php echo e(__('Setting')); ?></a></li>
            <li><a href="<?php echo e(url('/setting/designations')); ?>"><?php echo e(__('Designations')); ?></a></li>
            <li class="active"><?php echo e(__('Details')); ?></li>
        </ol>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box bt-none">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Details of designation')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <a href="<?php echo e(url('/setting/designations')); ?>" class="btn btn-primary btn-flat"><i
                        class="fa fa-arrow-left"></i><?php echo e(__('Back')); ?> </a>
                <hr>
                <table class="table table-bordered table-striped">
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo e(__('Designation')); ?></td>
                            <td><?php echo e($designation['designation']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Department')); ?></td>
                            <td><?php echo e($designation['department']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Designation Description')); ?></td>
                            <td><?php echo e($designation['designation_description']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Create By')); ?></td>
                            <td><?php echo e($designation['name']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Date Added')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($designation['created_at']))); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Last Updated')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($designation['updated_at']))); ?></td>
                        </tr>

                        <tr>
                            <td><?php echo e(__('Last Updated')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($designation['updated_at']))); ?></td>
                        </tr>


                        <tr>

                            <div class="btn-group btn-group-justified">
                                <?php if($designation['publication_status'] == 1): ?>
                                <div class="btn-group">
                                    <a href="<?php echo e(url('/setting/designations/unpublished/' . $designation['id'])); ?>"
                                        class="tip btn btn-success btn-flat" data-toggle="tooltip"
                                        data-original-title="Unpublished">
                                        <i class="fa fa-arrow-down"></i>
                                        <span class="hidden-sm hidden-xs"> <?php echo e(__('Published')); ?></span>
                                    </a>
                                </div>
                                <?php else: ?>
                                <div class="btn-group">
                                    <a href="<?php echo e(url('/setting/designations/published/' . $designation['id'])); ?>"
                                        class="tip btn btn-warning btn-flat" data-toggle="tooltip"
                                        data-original-title="Published">
                                        <i class="fa fa-arrow-up"></i>
                                        <span class="hidden-sm hidden-xs"><?php echo e(__('Unpublished')); ?> </span>
                                    </a>
                                </div>
                                <?php endif; ?>

                                <div class="btn-group">
                                    <a href="<?php echo e(url('/setting/designations/edit/' . $designation['id'])); ?>"
                                        class="tip btn btn-success tip btn-flat" title=""
                                        data-original-title="Edit Product">
                                        <i class="fa fa-edit"></i>
                                        <span class="hidden-sm hidden-xs"> <?php echo e(__('Edit')); ?></span>
                                    </a>
                                </div>

                            </div>


                        </tr>


                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/setting/designation/show_designation.blade.php ENDPATH**/ ?>