@extends('tenants.layout')
@section('content')
    <div class="card">
        <div class="card-header">Tenants Page</div>
        <div class="card-body">

            <form action="{{ url('tenants/store') }}" method="post">
                {!! csrf_field() !!}
                <div class="row mb-3">
                    <div class="col">
                        <label>Name</label><br>
                        <input type="text" name="name" id="name" class="form-control"><br>
                    </div>
                    <div class="col">
                        <label>Phonenumber</label><br>
                        <input type="text" name="phoneno" id="phoneno" class="form-control"><br>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label>House Number </label><br>
                        <input type="text" name="houseno" id="houseno" class="form-control"><br>
                    </div>
                    <div class="col">
                        <label>ID Number</label><br>
                        <input type="text" name="idno" id="idno" class="form-control"><br>
                    </div>
                </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Email</label><br>
                            <input type="text" name="email" id="email" class="form-control"><br>
                        </div>
                        <div class="col">
                            <label>Password</label><br>
                            <input type="text" name="password" id="password" class="form-control"><br>
                        </div>
                    </div>
                    <div style="text-align:center;">
                        <button type="submit" class="btn btn-success center" name="submit">Save</button>
                    </div>
            </form>
        </div>
    </div>
@stop
