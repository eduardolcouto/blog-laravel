@extends('template')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h1>Do you really delete the post "{{$post->title}}"</h1>
    </div>
</div>

<div class="row">
    <div class="col-md 12">
		{!! Form::open(['method'=>'post','route' => ['admin.posts.destroy',$post->id] ]) !!}
		<div class="form-group">
			{!! Form::submit('Yes!!!',['class'=>'btn btn-danger']) !!}
			{!! Form::button('No!',['class'=>'btn btn-primary','onclick'=>'window.history.back()']) !!}
		</div>
		{!! Form::close() !!}
    </div>
</div>



@endsection