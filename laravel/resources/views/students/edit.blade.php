@extends('students.layout')

@section('content')
@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div>
	<form action="{{route('students.update',$student->id) }}" method="POST">
 	 	@csrf
 	 	@method('PUT')
 	 	
		Student ID:<input type="text" name="student_id" placeholder="Student ID (XXX-XXX-XXX)" value="{{$student->student_id}}"> 
		<br>
		Student Name:<input type="text" name="name" placeholder="Full Name"
		 value="{{$student->name}}">
		<br>

		Student Batch: <input type="text" name="batch" placeholder="Batch" value="{{$student->batch}}">
	
		<br> <br>
		<button type="submit" >Update</button>

		


	</form>

</div>