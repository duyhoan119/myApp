<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(UserRequest $request, User $id = null)
    {
        $data = $request->except('_token');
        if ($request->hasFile('avatar')) {
            //su ly ten file
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            // dd($avatarName);
            $avatarName = $request->username . '_' . $avatarName;
            //luu file vaof trong bo nho
            $data['avatar'] = $avatar->storeAs('images/users', $avatarName);
        } else {
            $data['avatar'] = '';
        }
        if ($id) {

            $data['role'] = 1;
            $data['status'] = 1;
            $id->update($data);
            return redirect()->route('users.list');
        }
        $data['role'] = 1;
        $data['status'] = 1;

        User::create($data);
        return redirect()->route('users.list');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $image_path = $user->avatar;
        if (Storage::delete($image_path)) {
            User::destroy($id);
        }
        return redirect()->back();
    }
}
