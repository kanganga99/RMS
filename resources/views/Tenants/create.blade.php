@extends('tenants.layout')
@section('content')
<div class="card">
  <div class="card-header">Tenants Page</div>
  <div class="card-body">
      
      <form action="{{ url('tenants') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>
        <label>Phonenumber</label><br>
        <input type="text" name="phoneno" id="phoneno" class="form-control"><br>
        <label>House Number </label><br>
        <input type="text" name="houseno" id="houseno" class="form-control"><br>
        <label>ID Number</label><br>
        <input type="text" name="idno" id="idno" class="form-control"><br>
        <label>Email</label><br>
        <input type="text" name="email" id="email" class="form-control"><br>
        <label>Password</label><br>
        <input type="text" name="password" id="password" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>
@stop