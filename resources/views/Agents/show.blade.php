@extends('agents.layout')
@section('content')
    <div class="card">
        <div class="card-header">agents Page</div>
        <div class="card-body">
            @extends('agents.layout')
                    <p class="card-title">Name: {{ $agents->name }}</p>
                    <p class="card-title">Property Name: {{ $agents->propertyname }}</p>
                    <p class="card-title">Location: {{ $agents->location }}</p>
                    <p class="card-title">Vacant Rooms: {{ $agents->vacantrooms }}</p>
                    <p class="card-text">Occupied Rooms: {{ $agents->occupiedrooms }}</p>
                    <p class="card-text">Damaged Rooms: {{ $agents->damagedrooms }}</p>
                </div>
            </div>
