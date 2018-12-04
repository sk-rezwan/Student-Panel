@extends('layouts.app')

@section('content')

<div class="container">

  @if($errors->any())
    @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        <strong>Error!</strong> {{ $error }}
      </div>
    @endforeach
  @endif
  <div class="panel panel-default" style="padding: 0px;">
    <div class="panel-heading" style="padding: 2px;">
      <h3 class="panel-title" style="text-align: center;">Add New Student</h3>
    </div>
    <div class="panel-body">
       <div class="row">
    <form class="col s12" method="POST" action="{{route('update', $student->id)}}">
      {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" name="firstname" type="text" class="validate" value="{{$student->first_name}}">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="lastname" class="validate" value="{{$student->last_name}}">
          <label for="last_name" >Last Name</label>
        </div>
      </div>
    
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate" value="{{$student->email}}">
          <label for="email">Email</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
          <input id="phone" type="text" name="phone" class="validate" value="{{$student->phone}}">
          <label for="phone">Phone Number</label>
        </div>
      </div>

        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-default pull-right" >SUBMIT</button>
                </div>
            </div>

    </form>
  </div>
    </div>    
  </div>
</div>
@endsection