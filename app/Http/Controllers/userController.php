<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function index()
    {
        $users = array(
            array(
                'name' => 'hoan',
                'email' => '1@gmail.com',
                'class' => 'web16306',
                'address' => 'HN',
                'date' => '11/9/2002'
            ),
            array(
                'name' => 'hoan1',
                'email' => '1@gmail.com',
                'class' => 'web16306',
                'address' => 'HN',
                'date' => '11/9/2002'
            )
        );
        return view('user', ['users' => $users]);
    }
}
