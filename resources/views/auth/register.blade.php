@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
<div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
	<div class="bg-white w-96 shadow-x1 rounded p-5">
		<h1 class="text-3x1 font-medium">Регистрация</h1>
		
        <form action="{{ route('register_process') }}" class="space-y-5 mt-5" method="POST">
			@csrf

            <input type="text" name="name" id="name" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Name">
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <input type="text" name="surname" id="surname" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Second name">
            @error('surname')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <input type="text" name="email" id="email" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <select name="gender" placeholder="Gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <input type="date" id="bdate" name="bdate"> 
            
			<input type="password" name="password" id="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Password">
			@error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Confirm Password">
            @error('password_confirmation')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
			
            <div>
				<a href="{{ route('login') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>
			</div>

			<button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Зарегистрироваться</button>
		</form>
	</div>
</div>
@endsection