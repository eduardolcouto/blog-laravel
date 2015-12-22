@extends('template')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h1>Admin Posts</h1>
    </div>
</div>
<div class="row">
<div class="col-md-12">
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}" title = 'New Post'><span class="glyphicon glyphicon-file"></span></a>
    </div>
</div>
<div class="row">
    <div class="col-md 12">

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>
                    {{$post->title}}
                    <span class="badge">Comments: {{$post->comments()->count()}}</span>
                    <span class="badge">Tags: {{$post->tags()->count()}}</span>
                </td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{route('admin.posts.edit',['id'=>$post->id])}}" title="Edit the post '{{$post->title}}'"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.posts.delete',['id'=>$post->id])}}" title="Delete forever the post '{{$post->title}}'"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! $posts->render() !!}
    </div>
</div>


@endsection