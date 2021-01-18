@extends('layout')
@include('navbar')
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<h1> This is list blade php for home page </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->fullname}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      <td>
      <a href="deleteUser/{{$item->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
      <a href="edit/{{$item->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop              