<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }

    public function index()
    {
        $people = Person::all();
        return view('people.index')->with('people', $people);
    }

    public function admin()
    {
        $people = Person::all();
        return view('people.admin')->with('people', $people);
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->move('images/uploads/people', $name);
            $input['image'] = $name;
        }
        Person::create($input);
        return redirect('/admin/people'); 
    }

    public function edit($id)
    {
        $person = Person::find($id);
        return view('people.edit')->with('person', $person);
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->move('images/uploads/people', $name);
            $input['image'] = $name;
        }

        $person->update($input);
        return redirect('/admin/people');
    }

    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        return redirect('/admin/people');
    }
}
