<?php $__env->startSection('title', 'My Sites | The Refferal System'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style(''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-homepage'); ?>

<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Type</th>
				<th>Title</th>
				<th>CPC</th>
				<th>Created at</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($socialsites as $socialsite): ?>
			<tr>
				<td><?php echo e($socialsite->type->name); ?></td>
				<td><a href="<?php echo e($socialsite->url); ?>" target="_blank"><?php echo e($socialsite->title); ?></a></td>
				<td><?php echo e($socialsite->cpc); ?></td>
				<td><?php echo e(date('F d, Y', strtotime($socialsite->created_at ))); ?></td>
				<td width="20%">
					<a href="<?php echo e(route('socialsite.edit', $socialsite->id)); ?>" class="btn btn-primary btn-xs">Edit</a>
					<button class="btn btn-warning btn-xs">Delete</button>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo Html::script(''); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>