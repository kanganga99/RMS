@extends('admin.layouts.app')
{{-- @extends('vacantrooms.layout') --}}
@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="card">
                <div class="card-header">Vacant rooms Page</div>
                <div class="card-body">
                    <form action="{{ url('admin/vacantrooms/store') }}" method="post">
                        {!! csrf_field() !!}
                        <label>House Number</label><br>
                        <input type="text" name="houseno" id="houseno" class="form-control"><br>
                        <label>Floor</label><br>
                        <input type="text" name="floor" id="floor" class="form-control"><br>
                        <button type="submit" class="btn btn-success center" name="submit">Save</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop
