<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showForm()
    {
        return view('user');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'email' => ['required', 'regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/']
        ]);

        $newUser = new User($validated);
        $newUser->save();

        return response()->json($newUser);
    }

    public function index()
    {
        return User::all();
    }

    public function get(Request $request, $id)
    {
        return User::where('id', $id)->first();
    }
}
