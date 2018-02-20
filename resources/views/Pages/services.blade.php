@extends('Layouts.default')

@section('content')
    <h1>{{$title}}</h1>
    <p>The secvices we are providing :</p>

        @if(count($services)>0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
@endsection