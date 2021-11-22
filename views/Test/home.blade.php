@extends('layouts.app')

@section('title')
   {{-- {{ $title }}--}}
@endsection

@section('aside')
    @parent

    <br>
    aside-home
@endsection

@section('main')
    Main
    {{--{{ $time }}--}}{{-- - {{ $counter }}--}}{{--
    {{ var_dump($arr) }}
    {{ var_dump($arr1) }}--}}
    {{--{{ $sessionHas }}--}}
    {{ $value }}
@endsection
