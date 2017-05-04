<?php $__env->startSection('title', 'My Sites | The Refferal System'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style(''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-homepage'); ?>

	<a href="<?php echo e($socialsite->url); ?>"><?php echo e($socialsite->url); ?></a>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo Html::script(''); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>