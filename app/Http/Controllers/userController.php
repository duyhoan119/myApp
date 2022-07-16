<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::paginate(7);
        // $users = User::select('id', 'name', 'birthday', 'username', 'email')->get();
        return view('admin.user.userlist', ['users' => $users]);
    }
    public function Form(User $user = null)
    {
        $rooms = Room::all();
        if ($user) {
            return view('admin.user.Form', [
                'user' => $user,
                'rooms' => $rooms,
            ]);
        }
        return view('admin.user.Form', ['rooms' => $rooms]);
    }
    public function store(Request $request, User $id = null)
    {
        if ($id) {
            $data = $request->except('_token');
            $data['role'] = 1;
            $data['status'] = 1;
            $id->update($data);
            return redirect()->route('users.list');
        }
        $data = $request->except('_token');
        $data['role'] = 1;
        $data['status'] = 1;
        User::create($data);
        return redirect()->back();
    }
    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back();
    }
}
