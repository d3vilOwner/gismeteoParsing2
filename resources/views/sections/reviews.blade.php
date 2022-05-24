@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <h1>Reviews</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->name }}</h3>
            <p>{{ $el->email }}</p>
            <p>{{ $el->message }}</p>
        </div>
    @endforeach
@endsection