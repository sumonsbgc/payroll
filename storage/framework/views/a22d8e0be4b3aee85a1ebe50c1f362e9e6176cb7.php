<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(__('Reset Password')); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/dist/css/AdminLTE.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/iCheck/square/blue.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b><?php echo e(__('TLC')); ?></b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg"><?php echo e(__('Reset Password')); ?></p>

            <form action="<?php echo e(route('password.email')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> has-feedback">
                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Send Password Reset Link')); ?></button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
                 <a href="<?php echo e(url('login')); ?>"><?php echo e(__('Login')); ?></a><br>
                
                </div>
                <!-- /.login-box-body -->
            </div>
            <!-- /.login-box -->

            <!-- jQuery 3 -->
            <script src="<?php echo e(asset('public/backend/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="<?php echo e(asset('public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
            <!-- iCheck -->
            <script src="<?php echo e(asset('public/backend/plugins/iCheck/icheck.min.js')); ?>"></script>
            <script>
                $(function () {
                    $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
                });
            </script>
        </body>
        </html>
<?php /**PATH /var/www/projects/payroll/resources/views/administrator/passwords/email.blade.php ENDPATH**/ ?>