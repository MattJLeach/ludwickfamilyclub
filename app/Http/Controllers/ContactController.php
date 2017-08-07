<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactOption;
use App\Message;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }

    public function index() {
        $options = ContactOption::all();
        return view('contact.index')->with('options', $options);
    }

    public function store(Request $request) {
        Message::create($request->all());
        return redirect('contact/thank-you');
    }

    public function thanks() {
        return view('contact.thanks');
    }

    public function admin() {
        $messages = Message::orderBy('id', 'desc')->paginate(15);
        return view('contact.admin')->with('messages', $messages);
    }
}
