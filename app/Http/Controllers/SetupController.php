<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class SetupController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        if(!$userCount) {
            return view('auth.setup');
        }
        return redirect('/login');
    }

    public function store(Request $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make($user['password']);
        User::create($user);
        return redirect('/login');
    }
}
