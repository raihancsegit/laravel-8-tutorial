<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class studentController extends Controller
{
    public function index(){
        $result = Student::orderBy('id','DESC')->get();
        return view('crud',compact('result'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'class'=>'required',
            'roll'=>'required',
        ],[
            'name.required' => "Enter Your Name",
            'calss.required' => "Enter Your Class",
            'roll.required' => "Enter Your Roll",
        ]);

        Student::insert([
            'name'=>$request->name,
            'class'=>$request->class,
            'roll'=>$request->roll,
        ]);

        return redirect()->back()->with('success',"Data Insert Successfully");
    }

    public function edit($id){
        $result = Student::findOrFail($id);
        return view('edit',compact('result'));
    }

    public function update(Request $request,$id){
        Student::findOrFail($id)->update([
            'name'=>$request->name,
            'class'=>$request->class,
            'roll'=>$request->roll,
        ]);

        return redirect()->to('/crud')->with('update',"Data Update Successfully");
    }

    public function delete($id){
        Student::findOrFail($id)->delete();

        return redirect()->back()->with('delete',"Data Delete Successfully");
    }
}
