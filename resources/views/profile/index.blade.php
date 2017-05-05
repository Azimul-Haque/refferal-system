@extends('layouts.userdashboard')

@section('title', 'User Profile')

@section('stylesheet')
  {!!Html::style('')!!}
@endsection

@section('content-dashboard')
        <div class="col-md-4">
          <div class="panel">
          	<div class="panel-body">
          		<center>
                @if(!$user->image == NULL)
                    @if(strpos($user->image, 'http') !== false)
                      <img class="img-responsive img-circle img-profile" src="{{ $user->image }}">
                    @else
                      <img class="img-responsive img-circle img-profile" src="{{ asset('images/profilepicture/'.$user->image) }}">
                    @endif
                @else
                <img class="img-responsive img-circle img-profile" src="{{ asset('images/profile.png') }}">
                @endif  
              </center>
          		<table class="table">
          			<thead>
          				<tr>
          					<th>Name:</th>
          					<td>{{ $user->name }}</td>
          				</tr>
          				<tr>
          					<th>Email:</th>
          					<td>{{ $user->email }}</td>
          				</tr>
          				<tr>
          					<th>Phone:</th>
          					<td>{{ $user->phone }}</td>
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
              {!! Form::model($user, ['route' => ['profile.updateprofile', $user->id], 'data-parsley-validate' => '', 'files' => 'true', 'enctype' => 'multipart/form-data', 'method'=>'PUT', 'class' => 'form-horizontal']) !!}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('name', 'Name:', ['class' => 'control-label col-sm-2']) }}
                      <div class="col-sm-10">
                        {{ Form::text('name', null, ['class'=>'form-control', 'required' => '']) }}
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('email', 'Email:', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                          {{ Form::text('email', null, ['class'=>'form-control', 'required' => '', 'disabled' => '']) }}
                        </div>
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('phone', 'Phone:', ['class' => 'control-label col-sm-2']) }}
                      <div class="col-sm-10">
                        {{ Form::text('phone', null, ['class'=>'form-control', 'required' => '']) }}
                      </div>
                    </div>
                  </div>
                </div>
                <hr>

                  <div class="form-group">
                  <div class="col-sm-4"><b>Photo (within 400KB, square)</b></div>
                      <div class="col-sm-8">
                        {{ Form::file('image', ['data-parsley-filemaxmegabytes' => '0.4', 'data-parsley-trigger' => 'change', 'data-parsley-filemimetypes' => 'image/jpeg, image/png']) }}
                      </div>
                  </div>
                  <hr>

                  <div class="form-group">
                  <div class="col-sm-1"></div>
                      <div class="col-sm-11">
                        <button class="btn btn-success btn-block form-spacing-top" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Information</button>
                      </div>
                  </div>

                  

              {!! Form::close() !!}
            </div>

            <div id="passwordChangeTAb" class="tab-pane fade">
              <h3>Change password</h3>
              {!! Form::open(['route' => ['profile.changepassword', Auth::user()->id], 'data-parsley-validate' => '', 'method'=>'PUT', 'class' => 'form-horizontal']) !!}
                  <div class="form-group">
                    {!! Form::label('password', 'New Password', ['class' => 'control-label col-sm-2']) !!}
                    <div class="col-sm-10">
                    {!! Form::password('password', array('class' => 'form-control', 'required' => '', 'placeholder' => 'Type Password')) !!}
                    </div>
                  </div>
                  <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label col-sm-2']) !!}
                    <div class="col-sm-10">
                    {!! Form::password('password_confirmation', array('class' => 'form-control', 'required' => '', 'placeholder' => 'Confirm Password', 'data-parsley-equalto' => '#password')) !!}

                    {!! Form::submit('Change Password', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px;')) !!}
                    </div>
                  </div>
              {!! Form::close() !!}
            </div>
          </div>
          
        </div>
        
@endsection

@section('script')
  {!!Html::script('')!!}
@endsection
