<?php $__env->startSection('title', __('Client Types')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('CLIENTS')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
            <li><a><?php echo e(__('People')); ?></a></li>
            <li><a href="<?php echo e(url('/people/clients')); ?>"><?php echo e(__('Clients')); ?></a></li>
            <li class="active"><?php echo e(__('Details')); ?></li>
        </ol>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box bt-none">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Details of client')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <a href="<?php echo e(url('/people/clients')); ?>" class="btn btn-primary btn-flat"><i
                        class="fa fa-arrow-left"></i><?php echo e(__('Back')); ?> </a>
                <hr>
                <div id="printable_area">
                    <table class="table table-bordered table-striped">
                        <tbody id="myTable">
                            <tr>
                                <td><?php echo e(__('Name')); ?></td>
                                <td><?php echo e($client->name); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Email')); ?></td>
                                <td><?php echo e($client->email); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Address')); ?></td>
                                <td><?php echo e($client->present_address); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Contact No')); ?></td>
                                <td><?php echo e($client->contact_no_one); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Contact No (Optional)')); ?></td>
                                <td><?php echo e($client->contact_no_two); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Web')); ?></td>
                                <td><?php echo e($client->web); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Gender')); ?></td>
                                <td>
                                    <?php if($client->gender == 'm'): ?>
                                    <p><?php echo e(__('Male')); ?></p>
                                    <?php else: ?>
                                    <p><?php echo e(__('Female')); ?></p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Date of Birth')); ?></td>
                                <td>
                                    <?php if($client->date_of_birth != NULL): ?>
                                    <?php echo e(date("d F Y", strtotime($client->date_of_birth))); ?>

                                    <?php endif; ?>

                                </td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Client Type')); ?></td>
                                <td><?php echo e($client->client_type); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Created By')); ?></td>
                                <td><?php echo e($created_by->name); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Date Added')); ?></td>
                                <td><?php echo e(date("D d F Y - h:ia", strtotime($client->created_at))); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Last Updated')); ?></td>
                                <td><?php echo e(date("D d F Y - h:ia", strtotime($client->updated_at))); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-group btn-group-justified">
                    <?php if($client->activation_status == 1): ?>
                    <div class="btn-group">
                        <a href="<?php echo e(url('/people/clients/deactive/' . $client->id)); ?>"
                            class="tip btn btn-success btn-flat" data-toggle="tooltip"
                            data-original-title="Click to deactive">
                            <i class="fa fa-arrow-down"></i>
                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Active')); ?></span>
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="btn-group">
                        <a href="<?php echo e(url('/people/clients/active/' . $client->id)); ?>" class="tip btn btn-warning btn-flat"
                            data-toggle="tooltip" data-original-title="Click to active">
                            <i class="fa fa-arrow-up"></i>
                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Deactive')); ?></span>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="btn-group">
                        <button type="button" class="tip btn btn-primary btn-flat" title="Print"
                            data-original-title="Label Printer" onclick="printDiv('printable_area')">
                            <i class="fa fa-print"></i>
                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Print')); ?></span>
                        </button>
                    </div>
                    <div class="btn-group">
                        <a href="<?php echo e(url('/people/clients/download-pdf/' . $client->id)); ?>"
                            class="tip btn btn-primary btn-flat" title="" data-original-title="PDF">
                            <i class="fa fa-file-pdf-o"></i>
                            <span class="hidden-sm hidden-xs"><?php echo e(__('PDF')); ?> </span>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="<?php echo e(url('/people/clients/edit/' . $client->id)); ?>"
                            class="tip btn btn-warning tip btn-flat" title="" data-original-title="Edit Product">
                            <i class="fa fa-edit"></i>
                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Edit')); ?></span>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="<?php echo e(url('/people/clients/delete/' . $client->id)); ?>" class="tip btn btn-danger btn-flat"
                            data-toggle="tooltip" data-original-title="Click to delete"
                            onclick="return confirm('Are you sure to delete this ?');">
                            <i class="fa fa-arrow-up"></i>
                            <span class="hidden-sm hidden-xs"> <?php echo e(__('Delete')); ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/people/client/show_client.blade.php ENDPATH**/ ?>