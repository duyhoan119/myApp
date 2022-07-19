<?php

namespace App\Http\Controllers;

use App\Http\Requests\PositionRequest;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $Positions = Position::all();
        return view('admin.position.list', ['positions' => $Positions]);
    }
    public function Form($id = null)
    {
        if ($id) {
            $Position = Position::find($id);
            return view('admin.position.Form', ['position' => $Position]);
        }
        return view('admin.position.Form');
    }
    public function store(PositionRequest $request,$id = null)
    {
        $data = $request->except('_token');
        $data['status'] = 1;
        // dd($id);
        if ($id) {
            $Position = Position::find($id);
            $Position->update($data);
            return redirect()->route('position.list');
        }
        Position::create($data);
        return redirect()->route('position.list');
    }
    public function delete($id)
    {
        Position::destroy($id);
        return redirect()->back();
    }
}
