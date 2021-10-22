<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User([
            'first_name' => request()->input('first_name'),
            'last_name' => request()->input('last_name'),
            'email' => request()->input('email'),
            'password' => bcrypt(request()->input('password'))
        ]);

        // $user = User::create(request(['first_name', 'last_name', 'email', 'password']));

        $user->save();

        // auth()->login($user);

        return response()->json([
            'messsage' => 'user successfully created!'
        ], 201);
    }
}
