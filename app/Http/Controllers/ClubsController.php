<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }

    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index')->with('clubs', $clubs);
    }

    public function admin()
    {
        $clubs = Club::all();
        return view('clubs.admin')->with('clubs', $clubs);
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->move('images/clubs', $name);
            $input['image'] = $name;
        }

        $input['slug'] = strtolower(str_replace(" ", "-", $input['name']));
        
        Club::create($input);
        return redirect('/admin/clubs'); 
    }

    public function show($slug)
    {
        $club = Club::where('slug', $slug)->firstOrFail();
        return view('clubs.club')->with('club', $club);
    }

    public function edit($id)
    {
        $club = Club::find($id);
        return view('clubs.edit')->with('club', $club);
    }

    public function update(Request $request, $id)
    {
        $club = Club::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->move('images/clubs', $name);
            $input['image'] = $name;
        }

        $input['slug'] = strtolower(str_replace(" ", "-", $input['name']));
        
        $club->update($input);
        return redirect('/admin/clubs');
    }

    public function destroy($id)
    {
        $club = Club::findOrFail($id);
        $club->delete();
        return redirect('/admin/clubs');
    }
}
