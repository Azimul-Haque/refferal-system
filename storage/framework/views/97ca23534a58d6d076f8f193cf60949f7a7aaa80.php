<?php $__env->startSection('title', 'Home | The Refferal System'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style(''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-homepage'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo Html::script(''); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>