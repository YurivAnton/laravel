@extends('layouts.app')

@section('title')
    Станицы с {{ $id }} не существует!
@endsection

@section('main')
    <div class="text">
        Извините, страницы с {{ $id }} не существует!
    </div>
@endsection
