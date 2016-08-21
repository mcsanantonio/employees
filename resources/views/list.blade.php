@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <table class="table table-striped table-hover" style="margin-top: 60px;">
			  <thead>
			    <tr>
			      <th>Name</th>
			      <th>Email</th>
			      <th>Department</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($employees as $employee )
			    <tr>
			      <td><a href="{{ url('/'.$employee->id ) }}">{{ $employee->name }}</a></td>
			      <td>{{ $employee->email }}</td>
			      <td>{{ $employee->department }}</td>
			      <td><a href="{{ url('/delete/'.$employee->id ) }}">Delete</a></td>
			    </tr>
			    @endforeach
			   </tbody>
			</table>
		</div>
	</div>
@stop