@extends('master')

@section('contect')
    <h1>contact 2</h1>

    <ul>
        @foreach ([1,2,3,4,5] as $item)
        {{$item}}
        @endforeach
    </ul>
@endsection