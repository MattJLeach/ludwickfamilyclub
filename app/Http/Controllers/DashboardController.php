<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactOption;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $options = ContactOption::all();
        return view('dashboard.index')->with('options', $options);
    }

    public function addOption(Request $request) {
        ContactOption::create($request->all());
        return redirect('/admin');
    }
}
