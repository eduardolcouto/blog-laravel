@extends('template')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h1>Editing Post "{{$post->title}}"</h1>
    </div>
</div>

<div class="row">
    <div class="col-md 12">
		{!! Form::model($post,['method'=>'put','route' => ['admin.posts.update',$post->id] ]) !!}
		
		@include('admin.posts._form')

		<div class="form-group">
			{!! Form::label('tags','Tags',['class' => 'control-label']) !!}
			{!! Form::text('tags',$post->tagList,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Save Post',['class'=>'btn btn-success']) !!}
		</div>

		{!! Form::close() !!}
    </div>
</div>



@endsection