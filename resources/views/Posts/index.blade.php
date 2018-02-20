@extends('Layouts.default')

@section('content')
    <h1>Posts</h1>
    @if(count($postss)>0)
        @foreach($postss as $post)
            <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
                            
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on:<b> {{$post->created_at}}</b>  by: <b> {{$post->user->name}}</b></small>
                        </div>
                    </div>
            </div>

        @endforeach
        {{$postss->links()}}
    @else
        <p>No Post Found !!!</p>
    @endif

@endsection