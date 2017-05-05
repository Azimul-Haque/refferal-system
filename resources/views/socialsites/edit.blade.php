@extends('layouts.homepage')

@section('title', 'Edit Site/Page | The Refferal System')

@section('stylesheet')
  {!!Html::style('css/parsley.css')!!}
@endsection

@section('content-homepage')

	{!! Form::model($socialsite, array('route' => array('socialsite.update', $socialsite->id), 'data-parsley-validate' => '', 'method' => 'PUT', 'class' => 'form-horizontal')) !!}

		<div class="form-group">
			{!! Form::label('type_id', 'Type', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{{ Form::select('type_id', $types, null, ['class' => 'form-control']) }}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('country', 'Country', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!!Form::text('country', null, ['class' => 'form-control', 'required' => ''])!!}
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