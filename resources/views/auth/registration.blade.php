@extends('layouts.master')

@section('content')

    <div class="mx-auto max-w-10xl px-4 py-6 sm:px-6 lg:px-8 block text-center space-y-6">
    <img 
        src="{{ asset('/img/fl_logo.png') }}" 
        class="mx-auto h-48 w-48 object-contain"
        alt="Логотип"
    >

    <h1 class="text-3xl font-bold text-gray-900">Регистрация</h1>

    <form method="post" action="{{ route('auth.registration') }}" class="max-w-md mx-auto space-y-6">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium mb-1 text-left pl-1">
                    Адрес электронной почты:
                </label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full px-3 py-2 border rounded-md shadow-sm"
                >
            </div>

            <div>
                <label for="name" class="block text-sm font-medium mb-1 text-left pl-1">
                    Имя:
                </label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="w-full px-3 py-2 border rounded-md shadow-sm"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-1 text-left pl-1">
                    Пароль:
                </label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="w-full px-3 py-2 border rounded-md shadow-sm"
                >
            </div>

            <div>
                <label for="repeat-password" class="block text-sm font-medium mb-1 text-left pl-1">
                    Повторите пароль:
                </label>
                <input 
                    type="password" 
                    name="repeat-password" 
                    id="repeat-password" 
                    class="w-full px-3 py-2 border rounded-md shadow-sm"
                >
            </div>
        </div>

        <div class="space-y-4">
            <button type="submit" class="w-full text-white btn btn-primary py-2 px-4 rounded-md">
                Зарегистрироваться
            </button>
            
            <div class="flex items-center justify-between">
                <a href="{{ route('auth.login.show') }}" class="text-sm text-gray-600 hover:text-gray-800">
                    Уже зарегистрированы?
                </a>
            </div>
        </div>
    </form>

    @if($errors->any())
        <div class="space-y-4 max-w-md mx-auto">
            @foreach($errors->all() as $error)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded flex items-center">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ $error }}</span>
                </div>
            @endforeach
        </div>
    @endif
</div>



@endsection