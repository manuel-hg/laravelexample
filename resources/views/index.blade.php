@extends('layouts.layout')

@section('title', 'Home')
@section('content')
    <h1>Index</h1>
    <a href="{{ route('services') }}">Services</a>
    <img src="{{ asset('diagrama.png') }}"></img>
@endsection