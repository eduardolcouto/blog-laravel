@extends('template')

@section('content')

<h1>Posts </h1>
<p>
	{!! $posts->render() !!}
</p>

@foreach($posts as $post)
	<h2>{{$post->title}}</h2>
	<p>{{$post->content}}</p>
	<h3>Tags</h3>
	<ul>
	@foreach($post->tags as $tag)
		<li>{{$tag->name}}</li>
	@endforeach
	</ul>
	<h3>Comments</h3>
	@foreach($post->comments as $comment)
		<b>Nome: </b> {{$comment->name}}
		<b>Comment: </b> {{$comment->comment}}
		<br>
	@endforeach
	<hr>
@endforeach


@endsection

