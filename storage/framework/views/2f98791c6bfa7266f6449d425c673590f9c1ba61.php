<?php $__env->startSection('title', 'Edit Site/Page | The Refferal System'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style('css/parsley.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-homepage'); ?>

	<?php echo Form::model($socialsite, array('route' => array('socialsite.update', $socialsite->id), 'data-parsley-validate' => '', 'method' => 'PUT', 'class' => 'form-horizontal')); ?>


		<div class="form-group">
			<?php echo Form::label('type_id', 'Type', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo e(Form::select('type_id', $types, null, ['class' => 'form-control'])); ?>

			</div>
		</div>

		<div class="form-group">
			<?php echo Form::label('country', 'Country', ['class' => 'control-label col-sm-3']); ?>

			<div class="col-sm-9">
				<?php echo Form::text('country', null, ['class' => 'form-control', 'required' => '']); ?>

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