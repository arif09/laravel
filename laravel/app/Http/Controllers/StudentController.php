<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function index(){
		$students = Student::latest()->paginate(5);

		return view('students.index', compact('students'));
	}

	 public function create(){

    	return view('students.create');
    }

    public function store(Request $request){
    	$request->validate([
    		'name'=>'required',
    		'student_id' => 'required',
    		'batch'=>'required'
    	]);

    	Student::create($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Created Successflly!');
    }
}
