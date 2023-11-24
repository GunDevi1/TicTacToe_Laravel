<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\EnterRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class EnterInRoomController extends Controller
{
    public function __invoke()
    {
        return view('main.enter');
    }

    public function check(EnterRequest $request)
    {
        $data = $request->validated();

        $room = Room::where('room_number', $data['room_number'])
            ->where('room_code', $data['room_code'])
            ->first();

        if ($room) {
            return redirect()->route('main.room', $room->room_number);
        } else {
            return redirect()->back()->with('error', 'Комната не найдена');
        }
    }
}
