<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:10|max:45',
            'username' =>'required|min:3|max:15',
            'password' => 'required|min:8|max:20',
            'address' => 'required',
            'phonenumber' => 'required',
            'age' => 'required',
            'birthdate' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successfull! Please Log In!');
    }
}
