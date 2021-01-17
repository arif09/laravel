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
	<form action="{{route('students.store')}}" method="POST">
 	 	@csrf
 	 	
		 <input type="text" name="student_id" placeholder="Student ID (XXX-XXX-XXX)"> 
		<br>
		 <input type="text" name="name" placeholder="Full Name">
		<br>

		  <input type="text" name="batch" placeholder="Batch">

		<br><br>
		<button type="submit" >Register</button>

		


	</form>

</div>