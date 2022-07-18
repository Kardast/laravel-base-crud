@extends('front.templates.base')

@section('pageTitle', 'Home')

@section('pageMain')
    <main>

        <h2>honk di prova</h2>
        <a href="{{ route('about') }}">Vai ad about</a>
        <a href="{{ route('contacts') }}">Vai a contacts</a>
    </main>
@endsection
