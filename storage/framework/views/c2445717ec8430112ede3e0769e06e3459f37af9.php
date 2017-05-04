<?php $__env->startSection('title', 'Add Site/Page | The Refferal System'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style('css/parsley.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-homepage'); ?>
	
	<?php echo Form::open(['route' => 'socialsite.store', 'data-parsley-validate' => '', 'method' => 'POST', 'class' => 'form-horizontal']); ?>

		<div class="form-group">
			<?php echo Form::label('type_id', 'Type', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<select class="form-control" name="type_id" required="">
			 			<option value="" selected="" disabled="">Choose type</option>
			 		<?php foreach($types as $type): ?>
						<option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
					<?php endforeach; ?>
			 	</select>
			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('country', 'Country', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<select name="country" class="form-control" required="">
					<option selected disabled="">Select your country</option>
					<?php echo $__env->make('partials._countries', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('title', 'Title', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo Form::text('title', null, array('class' => 'form-control', 'required' => '')); ?>

			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('url', 'Page Url', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo Form::text('url', null, array('class' => 'form-control', 'required' => '')); ?>

			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('clicklimit', 'Click Limit', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo Form::number('clicklimit', null, array('class' => 'form-control', 'required' => '')); ?>

			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('cpc', 'Cost Per Click (CPC)', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo Form::number('cpc', null, array('class' => 'form-control', 'required' => '', 'min' => '1', 'max' => '10')); ?>

			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('', '', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo Form::submit('Save', array('class' => 'btn btn-success btn-block')); ?>

			</div>
		</div>
		
			 	
	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo Html::script('js/parsley.min.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>