<?php $__env->startSection('main'); ?>
	<div id="siswa">
		<h2>Tambah Siswa</h2>
		<?php echo Form::open(['url' => 'siswa', 'files' => true]); ?>

			<?php echo $__env->make('siswa.form', ['submitButtonText' => 'Tambah Siswa'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>