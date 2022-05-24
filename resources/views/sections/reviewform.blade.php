@extends('layouts.app')

@section('title', 'Review Form')

@section('content')
<div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
	<div class="bg-white w-96 shadow-x1 rounded p-5">
		<h1 class="text-3x1 font-medium">Форма оставления отзыва</h1>
		<form action="{{ route('review_process') }}" class="space-y-5 mt-5" method="POST">
            @csrf
			<input type="text" name="name" id="name" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Your name">
			@error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
			
			<input type="text" name="email" id="email" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email">
			@error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

			<textarea name="message" id="message" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Message..."></textarea> 
			@error('message')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

			<button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Отправить</button>
		</form>
	</div>
</div>
@endsection