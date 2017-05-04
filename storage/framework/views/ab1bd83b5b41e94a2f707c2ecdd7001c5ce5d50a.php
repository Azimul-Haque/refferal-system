<?php if(count($errors) > 0): ?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    <strong>Errors</strong> 
	    <ul>
	    	<?php foreach($errors->all() as $error): ?>
	    		<li><?php echo e($error); ?></li>
	    	<?php endforeach; ?>

	    </ul>
	</div>	
<?php endif; ?>


<div class="flash-message">
	<?php foreach(['danger', 'warning', 'success', 'info'] as $msg): ?>
		<?php if(Session::has($msg)): ?>
			<div class="alert alert-<?php echo e($msg); ?>">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <?php echo e(Session::get($msg)); ?>

			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>



