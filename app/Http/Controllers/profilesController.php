<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(\App\User $user)
    {
        return view('profiles/index', compact('user'));
    }

    public function edit(\App\User $user)
    {

        //$this->authorize('update', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        //$this->authorize('update', $user);

        $data = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'company' => 'required',
            'address' => 'required',
        ]);

        auth()->user()->update($data);

        return redirect("/profile/{$user->id}");
    }
}
