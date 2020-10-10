<?php $__env->startSection('title', __('Deduction Details')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('DEDUCTION')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__(' Dashboard')); ?> </a></li>
            <li><a href="<?php echo e(url('/hrm/deductions')); ?>"><?php echo e(__(' Manage Deductiones')); ?></a></li>
            <li class="active"><?php echo e(__('Deduction Details')); ?></li>
        </ol>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box bt-none">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Deduction Details')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <a href="<?php echo e(url('/hrm/deductions')); ?>" class="btn btn-primary btn-flat"><i
                            class="fa fa-arrow-left"></i> <?php echo e(__('Back')); ?></a>
                </div>

                <div class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="<?php echo e(__('Search..')); ?>">
                </div>
                <table class="table table-bordered table-striped">
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo e(__('Employee Name')); ?></td>
                            <td><?php echo e($deduction['name']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Designation')); ?></td>
                            <td><?php echo e($deduction['designation']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Deduction Name')); ?></td>
                            <td><?php echo e($deduction['deduction_name']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Deduction Month')); ?></td>
                            <td><?php echo e(date("F Y", strtotime($deduction['deduction_month']))); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Deduction Amount')); ?></td>
                            <td><?php echo e($deduction['deduction_amount']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Description')); ?></td>
                            <td><?php echo e($deduction['deduction_description']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Create By')); ?></td>
                            <td>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user['id'] == $deduction['created_by']): ?>
                                <?php echo e($user['name']); ?>

                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Date Added')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($deduction['created_at']))); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('Last Updated')); ?></td>
                            <td><?php echo e(date("D d F Y h:ia", strtotime($deduction['updated_at']))); ?></td>
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
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/administrator/hrm/deduction/show_deduction.blade.php ENDPATH**/ ?>