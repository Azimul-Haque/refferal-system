<?php $__env->startSection('title', 'User Profile'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <?php echo Html::style(''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-dashboard'); ?>
        <div class="col-md-4">
          <div class="panel">
          	<div class="panel-body">
          		<center>
                <?php if(!$user->image == NULL): ?>
                    <?php if(strpos($user->image, 'http') !== false): ?>
                      <img class="img-responsive img-circle img-profile" src="<?php echo e($user->image); ?>">
                    <?php else: ?>
                      <img class="img-responsive img-circle img-profile" src="<?php echo e(asset('images/profilepicture/'.$user->image)); ?>">
                    <?php endif; ?>
                <?php else: ?>
                <img class="img-responsive img-circle img-profile" src="<?php echo e(asset('images/profile.png')); ?>">
                <?php endif; ?>  
              </center>
          		<table class="table">
          			<thead>
          				<tr>
          					<th>Name:</th>
          					<td><?php echo e($user->name); ?></td>
          				</tr>
          				<tr>
          					<th>Email:</th>
          					<td><?php echo e($user->email); ?></td>
          				</tr>
          				<tr>
          					<th>Phone:</th>
          					<td><?php echo e($user->phone); ?></td>
          				</tr>    
          			</thead>
          		</table>
          	</div>
          </div>
        </div>

        <div class="col-md-8">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#infoChangeTab">Edit Info.</a></li>
            <li><a data-toggle="tab" href="#passwordChangeTAb">Change Password</a></li>
          </ul>

          <div class="tab-content">            
            <div id="infoChangeTab" class="tab-pane fade in active">
              <h3>Edit information</h3>
              <?php echo Form::model($user, ['route' => ['profile.updateprofile', $user->id], 'data-parsley-validate' => '', 'files' => 'true', 'enctype' => 'multipart/form-data', 'method'=>'PUT', 'class' => 'form-horizontal']); ?>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <?php echo e(Form::label('name', 'Name:', ['class' => 'control-label col-sm-2'])); ?>

                      <div class="col-sm-10">
                        <?php echo e(Form::text('name', null, ['class'=>'form-control', 'required' => ''])); ?>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <?php echo e(Form::label('email', 'Email:', ['class' => 'control-label col-sm-2'])); ?>

                        <div class="col-sm-10">
                          <?php echo e(Form::text('email', null, ['class'=>'form-control', 'required' => '', 'disabled' => ''])); ?>

                        </div>
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <?php echo e(Form::label('phone', 'Phone:', ['class' => 'control-label col-sm-2'])); ?>

                      <div class="col-sm-10">
                        <?php echo e(Form::text('phone', null, ['class'=>'form-control', 'required' => ''])); ?>

                      </div>
                    </div>
                  </div>
                </div>
                <hr>

                  <div class="form-group">
                  <div class="col-sm-4"><b>Photo (within 400KB, square)</b></div>
                      <div class="col-sm-8">
                        <?php echo e(Form::file('image', ['data-parsley-filemaxmegabytes' => '0.4', 'data-parsley-trigger' => 'change', 'data-parsley-filemimetypes' => 'image/jpeg, image/png'])); ?>

                      </div>
                  </div>
                  <hr>

                  <div class="form-group">
                  <div class="col-sm-1"></div>
                      <div class="col-sm-11">
                        <button class="btn btn-success btn-block form-spacing-top" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Information</button>
                      </div>
                  </div>

                  

              <?php echo Form::close(); ?>

            </div>

            <div id="passwordChangeTAb" class="tab-pane fade">
              <h3>Change password</h3>
              <?php echo Form::open(['route' => ['profile.changepassword', Auth::user()->id], 'data-parsley-validate' => '', 'method'=>'PUT', 'class' => 'form-horizontal']); ?>

                  <div class="form-group">
                    <?php echo Form::label('password', 'New Password', ['class' => 'control-label col-sm-2']); ?>

                    <div class="col-sm-10">
                    <?php echo Form::password('password', array('class' => 'form-control', 'required' => '', 'placeholder' => 'Type Password')); ?>

                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label col-sm-2']); ?>

                    <div class="col-sm-10">
                    <?php echo Form::password('password_confirmation', array('class' => 'form-control', 'required' => '', 'placeholder' => 'Confirm Password', 'data-parsley-equalto' => '#password')); ?>


                    <?php echo Form::submit('Change Password', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px;')); ?>

                    </div>
                  </div>
              <?php echo Form::close(); ?>

            </div>
          </div>
          
        </div>
        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <?php echo Html::script(''); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userdashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>