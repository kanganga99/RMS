@extends('admin.layouts.app')
@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="card">
                <div class="card-header">Damaged rooms Page</div>
                <div class="card-body">
                    <form action="{{ url('admin/damagedrooms/store') }}" method="post">
                        {!! csrf_field() !!}
                        <label>House Number</label><br>
                        <input type="text" name="houseno" id="houseno" class="form-control"><br>
                        <label>Floor</label><br>
                        <input type="text" name="floor" id="floor" class="form-control"><br>
                        <label>Description</label><br>
                        <textarea id="description" name="description" rows="4" cols="50" class="form-control">
                        {{-- <input type="text" name="description" id="description" class="form-control"><br> --}}
                        </textarea><br>
                        {{-- <div style="text-align:center;"> --}}
                        <button type="submit" class="btn btn-success toastrDefaultSuccess" name="submit">Save</button>
                        {{-- </div> --}}
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop
