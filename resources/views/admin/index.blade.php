@extends('layouts.admindashboard')

@section('title', 'Admin Panel')

@section('stylesheet')
  {!!Html::style('')!!}
@endsection

@section('content-dashboard')
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
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-warning btn-sm">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
@endsection

@section('script')
	{!!Html::script('')!!}
@endsection
