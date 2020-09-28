<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo e(__('Dashboard')); ?></div>
                    
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <?php
                            asort($start);
                            asort($end);

                                echo "<pre>";
                                    print_r($start);
                                    print_r($end);
                                echo "</pre>";
                                
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/payroll/resources/views/home.blade.php ENDPATH**/ ?>