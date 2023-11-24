<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class CreateRoomController extends Controller
{
    public function __invoke(Request $request)
    {
        $room_number = random_int(10000, 99999);
        $room_code = random_int(1000, 9999);

        // Проверка уникальности номера комнаты
        while (Room::where('room_number', $room_number)->exists()) {
            $room_number = random_int(10000, 99999);
        }

        $room = Room::create([
            'room_number' => $room_number,
            'room_code' => $room_code,
        ]);

        return redirect()->route('main.room', $room_number);
    }
}
