<?php

namespace App\Http\Controllers;
use App\Models\Biotbl;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        $bio=new Biotbl();

        $bio->name=$request->name;
        $bio->email=$request->email;
        $bio->phone=$request->phone;
        $bio->address=$request->address;
        $bio->save();
        
        return redirect()->back()->with('success','Record Added Successfully');
    }

    public function list()
    {
        $list = Biotbl::all();
        return view('list', ['show'=>$list]);
    }

    public function delete($id){

        $del=Biotbl::find($id);
        $del->delete();

        return redirect()->back()->with('warning', 'BioData Deleted Successfully');
    }

    public function edit($id)
    {
        $edit=Biotbl::find($id);

        return view('edit', ['edit'=>$edit]);
    }

    public function update(Request $request, $id)
    {
        $update=Biotbl::find($id);

        $update->name=$request->input('name');
        $update->email=$request->input('email');
        $update->phone=$request->input('phone');
        $update->address=$request->input('address');

        $update->update();
        return redirect('list')->with('success', 'Record is updated successful');
    }

    public function about()
    {
        return view('about_us');
    }

   

}
