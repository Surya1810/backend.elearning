<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $attribute = $request->validate([
            'name' => ['required','string'],
            'username' => ['required','string','unique:users,username'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8','confirmed'],
        ]);

        $attribute['password'] = bcrypt($request->password);

        User::create($attribute);

        return response()->json([
            'message' => "your're registered, please login"
        ]);
    }
}
