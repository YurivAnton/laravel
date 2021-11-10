@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('aside')
    @parent

    <br>
    aside-home
@endsection

@section('main')
    Main
@endsection
