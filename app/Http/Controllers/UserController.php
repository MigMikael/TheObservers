<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function scoreBoard()
    {
        $users = User::orderBy('score', 'desc')->get();
        return view('score_board', ['users' => $users]);
    }
}
