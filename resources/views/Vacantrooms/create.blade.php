@extends('tenants.layout')
@section('content')
<div class="card">
  <div class="card-header">Tenants Page</div>
  <div class="card-body">
      
      <form action="{{ url('vacantrooms') }}" method="post">
        {!! csrf_field() !!}
        <label>House Number</label><br>
        <input type="text" name="houseno" id="houseno" class="form-control"><br>
        <label>Floor</label><br>
        <input type="text" name="floor" id="floor" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>
@stop