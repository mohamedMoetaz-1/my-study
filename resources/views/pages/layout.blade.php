@extends('layout.master')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <p>Welcome to our home page</p>
@endsection

@section('header')
    @parent
    <p>home header</p>
@stop