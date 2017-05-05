@extends('layouts.homepage')

@section('title', 'My Sites | The Refferal System')

@section('stylesheet')
  {!!Html::style('')!!}
@endsection

@section('content-homepage')

	<a href="{{ $socialsite->url }}">{{ $socialsite->url }}</a>
    
@endsection

@section('script')
    {!!Html::script('')!!}
@endsection