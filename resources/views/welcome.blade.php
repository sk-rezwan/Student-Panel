@extends('layouts.app')

@section('content')

	@if(session('msg'))
	
	
	<div class="alert alert-primary" role="alert">
  		{{session('msg')}}  <!-- flash msg -->
    </div>

	@endif

	<div class="container">
	<div class="panel panel-default col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   
      @foreach ($students as $student)
       <tr class="table-active">
      	<td>{{ $student->id }}</td>
      	<td>{{ $student->first_name }}</td>
      	<td>{{ $student->last_name }}</td>
      	<td>{{ $student->email }}</td>
      	<td>{{ $student->phone }}</td>
      	<td><button class="btn btn-info" href="{{route('edit',$student->id)}}">Edit</button> |
		<form method="POST" id="delete-form-{{ $student->id }}" action="{{route('delete',$student->id)}}">
			{{csrf_field()}}
            {{method_field('DELETE')}}
			
		</form>
      	<button class="btn btn-danger"onClick="if(confirm('Are you sure want to delete this?')){
			event.preventDefault();
			document.getElementById('delete-form-{{ $student->id }}').submit();
      }else{
      event.preventDefault();
  }">Delete</button>
      </td>
	   </tr>
      @endforeach
			
   

  </tbody>
</table>
</div>
</div>

@endsection