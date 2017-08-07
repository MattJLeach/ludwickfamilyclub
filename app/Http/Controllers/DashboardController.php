<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactOption;
use App\Message;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $messageCount = Message::count();
        $options = ContactOption::all();
        return view('dashboard.index')->with('options', $options)->with('messageCount', $messageCount);
    }

    public function addOption(Request $request) {
        ContactOption::create($request->all());
        return redirect('/admin');
    }
}
