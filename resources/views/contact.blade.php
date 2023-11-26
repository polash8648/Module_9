@extends('master')

@section('content')
  
   <div class="col-md-12">
   <div class="col-md-3">
    <label for="exampleInputEmail1">Name :</label>
    <input type="name" class="form-control" id="txtName"  placeholder="Name">
    </div>
    <div class="col-md-3">
    <label for="exampleInputEmail1">Email address :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="col-md-3">
    <label for="exampleInputEmail1">Message :</label>
    <input type="Message" class="form-control" id="txtMessage"  placeholder="Message">
    </div></br>
    <div class="col-md-3">   
    <button type="submit" style="float: right;" class="btn btn-primary">Submit</button>
    </div>

   </div>

@endsection