@extends('agents.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            <form action="{{ url('agent/' . $agents->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $agents->id }}" id="id">
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{ $agents->name }}" class="form-control"><br>
                <label>Property Name</label>
                <input type="text" name="propertyname" id="propertyname" value="{{ $agents->propertyname }}" class="form-control"><br>
                <label>Location</label>
                <input type="text" name="location" id="location" value="{{ $agents->location }}" class="form-control"><br>
                <label>Vacant Rooms</label>
                <input type="text" name="vacantrooms" id="vacantrooms" value="{{ $agents->vacantrooms }}" class="form-control"><br>
                <label>Occupied Rooms</label>
                <input type="text" name="occupiedrooms" id="occupiedrooms" value="{{ $agents->occupiedrooms }}" class="form-control"><br>
                <label>Damaged Rooms</label>
                <input type="text" name="damagedrooms" id="damagedrooms" value="{{ $agents->damagedrooms }}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@stop