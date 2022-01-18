<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getMeProfile()
    {
        $username = 'joaohe4rt';
        return view('users', compact('username'));
    }

    public function getProfile(string $username)
    {
        return view('users', compact('username'));
    }

    public function test()
    {
        //return  response()->json(["name" => 'joaocolussi']);
        return redirect(route('user-profile', ['username' => 'joaohe4rt']));
    }
}
