<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="container">
            <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="col-md-3">
            <div class="panel">
                <a href="<?php echo e(route('socialsite.create')); ?>" class="btn btn-success btn-block space-below"><i class="fa fa-plus-square fa-btn" aria-hidden="true"></i>Add Site/Page</a>

                <a href="<?php echo e(route('socialsite.index')); ?>" class="btn btn-primary btn-block space-below"><i class="fa fa-list-ol fa-btn" aria-hidden="true"></i>My Sites</a>
                    
                <br/>
                <!--social llinks-->
                <a href="<?php echo e(route('socialsite.getpoint', 1)); ?>">Facebook follower</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 2)); ?>">Facebook page like</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 3)); ?>">Facebook share</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 4)); ?>">Facebook post like</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 5)); ?>">Twitter follower</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 6)); ?>">Twitter like</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 7)); ?>">Twitter tweet</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 8)); ?>">Twitter retweet</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 9)); ?>">Youtube subscribe</a><br/>
                <a href="<?php echo e(route('socialsite.getpoint', 10)); ?>">Youtube like</a><br/>
                <!--social llinks-->
            </div>

        </div>

        <div class="col-md-6">
            <?php echo $__env->yieldContent('content-homepage'); ?>
        </div>

        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>