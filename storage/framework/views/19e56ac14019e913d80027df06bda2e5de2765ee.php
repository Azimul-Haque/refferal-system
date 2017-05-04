<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="row">
              <div class="btn-group-vertical col-md-12">
                <button type="button" class="btn btn-success btn-block"><i class="fa fa-pencil-square" aria-hidden="true"></i> User Profile</button>
                <a type="button" class="btn btn-default btngroup btn-block" href="/profile"><i class="fa fa-wrench" aria-hidden="true"></i> Profile</a>
                <a type="button" class="btn btn-default btngroup btn-block" href="<?php echo e(url('/logout')); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Logout</b></a>
              </div> 
            </div>
            <br/><br/>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
           		<?php echo $__env->yieldContent('content-dashboard'); ?>
        	</div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>