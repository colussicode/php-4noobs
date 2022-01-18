<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
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

    public function test(TestRequest $request)
    {
    }
}
