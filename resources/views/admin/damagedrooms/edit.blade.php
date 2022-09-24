@extends('admin.layouts.app')
@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="card">
                <div class="card-header">Edit Damaged room</div>
                <div class="card-body">
                    <form action="{{ url('admin/damagedrooms/update/' . $damagedrooms->id) }}" method="post">
                        {!! csrf_field() !!}
                        {{-- @method('PATCH') --}}
                        <input type="hidden" name="id" id="id" value="{{ $damagedrooms->id }}" id="id">
                        <label>House Number</label>
                        <input type="text" name="houseno" id="houseno" value="{{ $damagedrooms->houseno }}"
                            class="form-control"><br>
                        <label>Floor</label>
                        <input type="text" name="floor" id="floor" value="{{ $damagedrooms->floor }}"
                            class="form-control"><br>
                        <label>Description</label>
                        <input type="text" name="description" id="description" value="{{ $damagedrooms->description }}"
                            class="form-control"><br>
                            <textarea name="description" id="description" cols="" rows="10"></textarea>
                        {{-- <label>Description</label><br>
                            <textarea id="description" name="description" rows="4" cols="50" value="{{ $damagedrooms->description }}" class="form-control">
                            </textarea><br> --}}
                        <button type="submit" class="btn btn-success" id="mybutton">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop
