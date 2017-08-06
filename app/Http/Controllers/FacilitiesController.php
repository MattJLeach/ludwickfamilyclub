<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;

class FacilitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }

    public function index()
    {
        $facilities = Facility::all();
        return view('facilities.index')->with('facilities', $facilities);
    }

    public function admin()
    {
        $facilities = Facility::all();
        return view('facilities.admin')->with('facilities', $facilities);
    }

    public function create()
    {
        return view('facilities.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        if($file1 = $request->file('file1')) {
            $name1 = $file1->getClientOriginalName();
            $file1->move('images/facilities', $name1);
            $input['image1'] = $name1;
        }

        if($file2 = $request->file('file2')) {
            $name2 = $file2->getClientOriginalName();
            $file2->move('images/facilities', $name2);
            $input['image2'] = $name2;
        }

        Facility::create($input);
        return redirect('/admin/facilities');
    }

    public function edit($id)
    {
        $facility = Facility::find($id);
        return view('facilities.edit')->with('facility', $facility);
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);

        $input = $request->all();
        
        if($file1 = $request->file('file1')) {
            $name1 = $file1->getClientOriginalName();
            $file1->move('images/facilities', $name1);
            $input['image1'] = $name1;
        }

        if($file2 = $request->file('file2')) {
            $name2 = $file2->getClientOriginalName();
            $file2->move('images/facilities', $name2);
            $input['image2'] = $name2;
        }

        $facility->update($input);
        return redirect('/admin/facilities');
    }

    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);
        $facility->delete();
        return redirect('/admin/facilities');
    }
}
