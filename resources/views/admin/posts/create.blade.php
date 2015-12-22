@extends('template')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h1>Create New Posts</h1>
    </div>
</div>

@if($errors->any())
<ul class="alert alert-danger">
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
</ul>
@endif

<div class="row">
    <div class="col-md 12">
		{!! Form::open(['method'=>'post','route' => 'admin.posts.store' ]) !!}

		@include('admin.posts._form')

		<div class="form-group">
			{!! Form::label('tags','Tags',['class' => 'control-label']) !!}
			{!! Form::text('tags','',['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
    </div>
</div>



@endsection