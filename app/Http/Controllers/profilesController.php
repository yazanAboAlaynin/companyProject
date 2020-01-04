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

        if(request()->has('firstName')){
            $data = request()->validate([
                'firstName' => 'required',

            ]);
        }
        if(request()->has('lastName')){
            $data = request()->validate([
                'lastName' => 'required',

            ]);
        }
        if(request()->has('mobile')){
            $data = request()->validate([
                'mobile' => 'required',

            ]);
        }
        if(request()->has('phone')){
            $data = request()->validate([
                'phone' => 'required',

            ]);
        }
        if(request()->has('address')){
            $data = request()->validate([
                'address' => 'required',

            ]);
        }
        if(request()->has('company')){
            $data = request()->validate([
                'company' => 'required',

            ]);
        }


        auth()->user()->update($data);

        return;
    }
}
