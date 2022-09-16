@extends('agents.layout')
@section('content')
<div class="card">
  <div class="card-header">Agents Page</div>
  <div class="card-body">
      <form action="{{ url('agent') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>
        <label>Property Name</label><br>
        <input type="text" name="propertyname" id="propertyname" class="form-control"><br>
        <label>Location</label><br>
        <input type="text" name="location" id="location" class="form-control"><br>
        <label>Vacant Rooms</label><br>
        <input type="text" name="vacantrooms" id="vacantrooms" class="form-control"><br>
        <label>Occupied Rooms</label><br>
        <input type="text" name="occupiedrooms" id="occupiedrooms" class="form-control"><br>
        <label>Damaged Room</label><br>
        <input type="text" name="damagedrooms" id="damagedrooms" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>
@stop