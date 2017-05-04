@extends('layouts.app')

@section('title', 'The Refferal System')

@section('stylesheet')
  {!!Html::style('')!!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            @include('partials._messages')
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    {!!Html::script('')!!}
@endsection