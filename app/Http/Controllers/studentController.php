<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    public function index()
    {
    	$students = student::all();

        return view('welcome', compact('students'));
    }

     public function create()
    {
        return view('create');
    }

    public function store(Request $request)


    {
    	//$request->all();

    	$this->validate($request,[
    		'firstname'=>'required',
    		'lastname'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    	]);

    	$student = new student;

    	$student->first_name = $request->firstname;
    	$student->last_name = $request->lastname;
    	$student->email = $request->email;
    	$student->phone = $request->phone;
    	

    	$student->save();

    	return redirect(route('home'))->with('msg','successfully added');


    }

    public function edit($id)
    {
    	$student = student::find($id);
    	return view('edit', compact('student'));
    }

    public function update(Request $request,$id)


    {

    	$this->validate($request,[
    		'firstname'=>'required',
    		'lastname'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    	]);

    	$student = student::find($id);

    	$student->first_name = $request->firstname;
    	$student->last_name = $request->lastname;
    	$student->email = $request->email;
    	$student->phone = $request->phone;
    	

    	$student->save();

    	return redirect(route('home'))->with('msg','successfully updated');
    }

    public function delete($id)
    {
    	student::find($id)->delete();

    	return redirect(route('home'))->with('msg','successfully deleted');
    }

}
