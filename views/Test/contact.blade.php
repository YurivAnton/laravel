@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('aside')
    @parent

    <br>
    aside-contact
@endsection

@section('main')
    Main-contact
@endsection
