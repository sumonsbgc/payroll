<?php $__env->startSection('title', __('Details of job type')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('JOB TYPES')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li><a><?php echo e(__('Setting')); ?></a></li>
            <li><a href="<?php echo e(url('/setting/job-types')); ?>"><?php echo e(__('Job types')); ?></a></li>
            <li class="active"><?php echo e(__('Details')); ?></li>
        </ol>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box bt-none">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Details of job type')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <a href="<?php echo e(url('/setting/job-types')); ?>" class="btn btn-primary btn-flat"><i
                        class="fa fa-arrow-left"></i> <?php echo e(__('Back')); ?></a>
                <hr>
                <table class="table table-bordered table-striped">
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo e(__('Job Type')); ?></td>
                            <td><?php echo e($job_type->job_type); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Job Type Description')); ?></td>
                            <td><?php echo e($job_type->job_type_description); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Create By')); ?></td>
                            <td><?php echo e($job_type->name); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Date Added')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($job_type->created_at))); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Last Updated')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($job_type->updated_at))); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="btn-group btn-group-justified">
                                    <?php if($job_type->publication_status == 1): ?>
                                    <div class="btn-group">
                                        <a href="<?php echo e(url('/setting/job-types/unpublished/' . $job_type->id)); ?>"
                                            class="tip btn btn-success btn-flat" data-toggle="tooltip"
                                            data-original-title="Unpublished">
                                            <i class="fa fa-arrow-down"></i>
                                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Published')); ?></span>
                                        </a>
                                    </div>
                                    <?php else: ?>
                                    <div class="btn-group">
                                        <a href="<?php echo e(url('/setting/job-types/published/' . $job_type->id)); ?>"
                                            class="tip btn btn-warning btn-flat" data-toggle="tooltip"
                                            data-original-title="Published">
                                            <i class="fa fa-arrow-up"></i>
                                            <span class="hidden-sm hidden-xs"><?php echo e(__('Unpublished')); ?> </span>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    <div class="btn-group">
                                        <a href="#" class="tip btn btn-primary btn-flat" title=""
                                            data-original-title="Label Printer">
                                            <i class="fa fa-print"></i>
                                            <span class="hidden-sm hidden-xs"><?php echo e(__('Print')); ?> </span>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="tip btn btn-primary btn-flat" title=""
                                            data-original-title="PDF">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <span class="hidden-sm hidden-xs"><?php echo e(__('PDF')); ?> </span>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo e(url('/setting/job-types/edit/' . $job_type->id)); ?>"
                                            class="tip btn btn-warning tip btn-flat" title=""
                                            data-original-title="Edit Product">
                                            <i class="fa fa-edit"></i>
                                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Edit')); ?></span>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo e(url('/setting/job-types/delete/' . $job_type->id)); ?>"
                                            onclick="return confirm('Are you sure to delete this ?');"
                                            class="tip btn btn-danger bpo btn-flat" title=""
                                            data-content="<div><p><?php echo e(__('Are you sure?')); ?></p><a class='btn btn-danger' href='https://btrc.gunitok.com/products/delete/1'><?php echo e(__('Yes I am sure')); ?></a> <button class='btn bpo-close'><?php echo e(__('No')); ?></button></div>"
                                            data-html="true" data-placement="top"
                                            data-original-title="<b><?php echo e(__('Delete Product')); ?></b>">
                                            <i class="fa fa-trash-o"></i>
                                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Delete')); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </td>
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
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/setting/job_type/show_job_type.blade.php ENDPATH**/ ?>