<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LaravelApp</title>
	
	<?php /* menampilkan bootstrap */ ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

	<!--[if 1t IE 9]>
	<script src="<?php echo e(asset('http:laravelapp.dev/js/html5shiv.min.js')); ?>"></script>
	<script src="<?php echo e(asset('http:laravelapp.dev/js/respond.min.js')); ?>"></script>
	<![endif]-->
</head>
<body>
<div class="container">
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('main'); ?>
</div>

<?php echo $__env->yieldContent('footer'); ?>
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>
</html>