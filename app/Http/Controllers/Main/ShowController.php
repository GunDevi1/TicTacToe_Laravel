<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($room_number)
    {
        $room = Room::where('room_number', $room_number)->first();

        if ($room) {
            return view('main.show', compact('room'));
        } else {
            return redirect()->route('main.enter')->with('error', 'Комнаты не существует');
        }
    }
}
