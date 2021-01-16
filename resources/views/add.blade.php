@extends('layout')
@section('content')
<div class="col-sm-6">
<form method="post" action="">
@csrf
<div class="form-group">
    <label>ID Number</label>
    <input type="text" name="id"class="form-control" placeholder="Enter ID number">
    
  </div>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name"class="form-control" placeholder="Enter Name">
    
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email"class="form-control" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address"class="form-control" placeholder="Enter address">
  </div>

 <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>

@stop