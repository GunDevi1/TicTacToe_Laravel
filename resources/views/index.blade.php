@extends('layouts.main')

@section('title', 'Tic Tac Toe')
@section('content')

    <div class="container">
        <div class='main-menu'>
            <h1>Tic Tac Toe</h1>
            <ul>
                <a href="{{ route('main.new-room') }}" class="main-menu__link"><li>Создать комнату</li></a>
                <a href="{{ route('main.enter') }}" class="main-menu__link"><li>Войти в комнату</li></a>
            </ul>
        </div>
        <div class="main-block">
            <div class="grid-container">
                <div class="grid-item" id='1'></div>
                <div class="grid-item" id='2'></div>
                <div class="grid-item" id='3'></div>
                <div class="grid-item" id='4'></div>
                <div class="grid-item" id='5'></div>
                <div class="grid-item" id='6'></div>
                <div class="grid-item" id='7'></div>
                <div class="grid-item" id='8'></div>
                <div class="grid-item" id='9'></div>
            </div>
            <div class="event">
                <h1 class='event__message'></h1>
            </div>
        </div>
    </div>

@endsection
