@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            @include('partials._messages')
        </div>

        <div class="col-md-3">
            <div class="panel">
                <a href="{{ route('socialsite.create') }}" class="btn btn-success btn-block space-below"><i class="fa fa-plus-square fa-btn" aria-hidden="true"></i>Add Site/Page</a>

                <a href="{{ route('socialsite.index') }}" class="btn btn-primary btn-block space-below"><i class="fa fa-list-ol fa-btn" aria-hidden="true"></i>My Sites</a>
                    
                <br/>
                <!--social llinks-->
                <a href="{{ route('socialsite.getpoint', 1) }}">Facebook follower</a><br/>
                <a href="{{ route('socialsite.getpoint', 2) }}">Facebook page like</a><br/>
                <a href="{{ route('socialsite.getpoint', 3) }}">Facebook share</a><br/>
                <a href="{{ route('socialsite.getpoint', 4) }}">Facebook post like</a><br/>
                <a href="{{ route('socialsite.getpoint', 5) }}">Twitter follower</a><br/>
                <a href="{{ route('socialsite.getpoint', 6) }}">Twitter like</a><br/>
                <a href="{{ route('socialsite.getpoint', 7) }}">Twitter tweet</a><br/>
                <a href="{{ route('socialsite.getpoint', 8) }}">Twitter retweet</a><br/>
                <a href="{{ route('socialsite.getpoint', 9) }}">Youtube subscribe</a><br/>
                <a href="{{ route('socialsite.getpoint', 10) }}">Youtube like</a><br/>
                <!--social llinks-->
            </div>

        </div>

        <div class="col-md-6">
            @yield('content-homepage')
        </div>

        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    
                </div>
            </div>
        </div>

    </div>
</div>
@endsection