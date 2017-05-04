@if (count($errors) > 0)
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    <strong>Errors</strong> 
	    <ul>
	    	@foreach ($errors->all() as $error)
	    		<li>{{ $error }}</li>
	    	@endforeach

	    </ul>
	</div>	
@endif


<div class="flash-message">
	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
		@if(Session::has($msg))
			<div class="alert alert-{{ $msg }}">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    {{ Session::get($msg) }}
			</div>
		@endif
	@endforeach
</div>



