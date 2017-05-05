@extends('layouts.homepage')

@section('title', 'Add Site/Page | The Refferal System')

@section('stylesheet')
  {!!Html::style('css/parsley.css')!!}
@endsection

@section('content-homepage')
	
	{!! Form::open(['route' => 'socialsite.store', 'data-parsley-validate' => '', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
		<div class="form-group">
			{!! Form::label('type_id', 'Type', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				<select class="form-control" name="type_id" required="">
			 			<option value="" selected="" disabled="">Choose type</option>
			 		@foreach($types as $type)
						<option value="{{ $type->id }}">{{ $type->name }}</option>
					@endforeach
			 	</select>
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('country', 'Country', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				<select name="country" class="form-control" required="">
					<option selected disabled="">Select your country</option>
					@include('partials._countries')
				</select>
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('title', 'Title', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!! Form::text('title', null, array('class' => 'form-control', 'required' => '')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('url', 'Page Url', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!! Form::text('url', null, array('class' => 'form-control', 'required' => '')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('clicklimit', 'Click Limit', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!! Form::number('clicklimit', null, array('class' => 'form-control', 'required' => '')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('cpc', 'Cost Per Click (CPC)', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!! Form::number('cpc', null, array('class' => 'form-control', 'required' => '', 'min' => '1', 'max' => '10')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('', '', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!! Form::submit('Save', array('class' => 'btn btn-success btn-block')) !!}
			</div>
		</div>
		
			 	
	{!! Form::close() !!}

@endsection

@section('script')
    {!! Html::script('js/parsley.min.js')!!}
@endsection