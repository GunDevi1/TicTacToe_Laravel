@extends('layouts.main')

@section('title', 'Tic Tac Toe')
@section('content')

    <div class="container">
        <div class="enter-block">
            <form action="{{ route('main.check') }}" method="GET">
                @csrf
                <h2>Вход в комнату</h2>
                <div class="input-group">
                    <label for="room_number">Номер комнаты</label>
                    <input type="text" id="room_number" name="room_number" class="enter-input">
                </div>

                <div class="input-group">
                    <label for="room_code">Код комнаты</label>
                    <input type="text" id="room_code" name="room_code" class="enter-input">
                </div>

                @if(session('error'))
                    <div class="error-block">
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                <button type="submit" class="enter-button">Войти</button>
            </form>
        </div>
    </div>

@endsection
