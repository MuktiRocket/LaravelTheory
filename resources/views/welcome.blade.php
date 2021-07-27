@extends('layout.app')
@section('title','Welcome')
@section('body')
    Welcome
    @foreach ($user as $item)
        {{$item -> name}}
    @endforeach
@endsection