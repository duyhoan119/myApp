<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room.list', ['rooms' => $rooms]);
    }
    public function Form($id = null)
    {
        if ($id) {
            $room = Room::find($id);
            return view('admin.room.Form', ['room' => $room]);
        }
        return view('admin.room.Form');
    }
    public function store(RoomRequest $request,$id = null)
    {
        $data = $request->except('_token');
        $data['parent_id'] = 1;
        $data['status'] = 1;
        // dd($id);
        if ($id) {
            $room = Room::find($id);
            $room->update($data);
            return redirect()->route('rooms.list');
        }
        Room::create($data);
        return redirect()->route('rooms.list');
    }
    public function delete($id)
    {
        Room::destroy($id);
        return redirect()->back();
    }
}
