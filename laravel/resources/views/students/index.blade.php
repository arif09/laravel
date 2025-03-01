@extends('students.layout')

@section('content')

<div>

	<h1> Student Profiles </h1>

	<br>
	<a href="{{ route('students.create') }}"> Register Student </a>

	<br>
	<hr>

	<table border="2" width="800">
		<tr>
			<th> Student ID </th>
			<th> Full Name </th>
			<th> Batch </th>
			<th> Action </th>
		</tr>

		@foreach ($students as $student)
		<tr> 
			<td>{{$student->student_id}} </td>
			<td>{{$student->name}} </td>
			<td>{{$student->batch}} </td>
			<td>
				<form action="{{ route('students.destroy', $student->id)}}" method="POST">
					<a href="{{ route('students.edit', $student->id)}}" > Edit </a>					
					@csrf
                    @method('DELETE') 

					<button type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		@endforeach 

	</table>

</div>