<?php $__env->startSection('title', __('Error 403')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>403 <?php echo e(__('Error Page')); ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Home')); ?></a></li>
            <li class="active">404 <?php echo e(__('error')); ?></li>
        </ol>
    </section>

    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"> 403</h2>

            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> <?php echo e(__('Oops! Forbidden')); ?></h3>
                <p><?php echo e(__('You don't have permission to access this page.')); ?></p>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH /var/www/projects/payroll/resources/views/errors/403.blade.php ENDPATH**/ ?>