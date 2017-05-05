@extends('layouts.homepage')

@section('title', 'My Sites | The Refferal System')

@section('stylesheet')
  {!!Html::style('')!!}
@endsection

@section('content-homepage')

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
			@foreach($socialsites as $socialsite)
			<tr>
				<td>{{ $socialsite->type->name }}</td>
				<td><a href="{{ $socialsite->url }}" target="_blank">{{ $socialsite->title }}</a></td>
				<td>{{ $socialsite->cpc }}</td>
				<td>{{ date('F d, Y', strtotime($socialsite->created_at ))}}</td>
				<td width="20%">
					<a href="{{ route('socialsite.edit', $socialsite->id) }}" class="btn btn-primary btn-xs">Edit</a>
					<button class="btn btn-warning btn-xs">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
    
@endsection

@section('script')
    {!!Html::script('')!!}
@endsection