@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <h1>Погода на сегодня в городе Запорожье</h1>
        <div>
            <h3>Минимальная температура: {{ $data[0]->textContent }}</h3>
            <h3>Максимальная температура: {{ $data[2]->textContent }}</h3>
        </div>
@endsection