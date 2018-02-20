@extends('Layouts.default')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
    <br/>
    <br/>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on: <b> {{$post->created_at}}<b>  by: <b> {{$post->user->name}}</b></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::Open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}} 
            {!!Form::close()!!}
        @endif
    @endif
@endsection