@extends('layouts.master')

@section('content')

    

    <div class="mx-auto max-w-10xl px-4 py-6 sm:px-6 lg:px-8">

    Здесь будет главная страница

    <a class="btn" href="{{ route('auth.login') }}">Войти</a>
       
    </div>


@endsection