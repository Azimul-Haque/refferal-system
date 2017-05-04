<?php $__env->startSection('title', 'Admin Panel'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style(''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-dashboard'); ?>
        <div class="col-md-10">
            <div class="panel">
                <div class="panel-heading"><h4>Users' List</h4></div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Joined</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($users as $user): ?>
                            <tr>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->created_at); ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-warning btn-sm">Delete</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<?php echo Html::script(''); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admindashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>