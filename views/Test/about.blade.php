@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('aside')
    @parent

    <br>
    aside-about
@endsection

@section('main')
    Main-about
    {{--{{ $session ?? ''}}--}}
    {{ $value }}
@endsection
