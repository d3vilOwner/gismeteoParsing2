@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')
<div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
	<div class="bg-white w-96 shadow-x1 rounded p-5">
		<h1 class="text-3x1 font-medium">Вход</h1>

		<form method="POST" action="{{ route ('login_process') }}" class="space-y-5 mt-5">
			@csrf

			<input type="text" name="email" id="email" class="w-full h-12 border border-red-500 rounded px-3" placeholder="Email">
			@error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

			<p class="text-red-500">Ошибка ввода</p>

			<input type="password" name="password" id="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Password">
			@error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

			<div>
				<a href="#" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
			</div>

			<div>
				<a href="{{ route('register') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
			</div>

			<button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
		</form>
	</div>
</div>
@endsection