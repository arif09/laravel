@extends('students.layout')

@section('content')

<div>

	<h1> Student Profiles </h1>

	
	<br>
	<hr>

	<table border="2" width="800">
		<tr>
			<th> Student ID </th>
			<th> Full Name </th>
			<th> Batch </th>
			 
		</tr>

		@foreach ($students as $student)
		<tr> 
			<td>{{$student->student_id}} </td>
			<td>{{$student->name}} </td>
			<td>{{$student->batch}} </td>
			 
		</tr>
		@endforeach 

	</table>

</div>