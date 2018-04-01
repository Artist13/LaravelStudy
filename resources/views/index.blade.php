@extends('layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('side-bar')
    @parent
@endsection

@section('content')
    @include('default.content')
@endsection

@section('footer')
    @parent
@endsection