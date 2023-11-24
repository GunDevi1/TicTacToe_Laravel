@extends('layouts.main')

@section('title', 'Tic Tac Toe')
@section('content')

    <div class="container">
        <div class="main-header">
            <h2>Номер комнаты - {{ $room->room_number }}</h2>
            <h2>Код комнаты - {{ $room->room_code }}</h2>
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
