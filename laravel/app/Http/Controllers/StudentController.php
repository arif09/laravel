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
}
