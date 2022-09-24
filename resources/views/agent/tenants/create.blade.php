@extends('agent.layouts.app')
@section('main-content')
<div class="content-wrapper">
    <section class="content-header"> 
    <div class="card">
        <div class="card-header">Tenants Page</div>
        <div class="card-body">
   
            <form action="{{ url('agent/tenants/store') }}" method="post">
                {!! csrf_field() !!}
                <div class="row mb-3">
                    <div class="col">
                        <label>Name</label><br>
                        <input type="text" name="name" id="name" class="form-control" required><br>
                    </div>
                    <div class="col">
                        <label>Phonenumber</label><br>
                        <input type="text" name="phoneno" id="phoneno" class="form-control"><br>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="inputhouseno">Houseno</label><br>
                        <input type="text" name="houseno" id="houseno" class="form-control">
                    </div>
                    <div class="col">
                        <label>ID Number</label><br>
                        <input type="text" name="idno" id="idno" class="form-control" required><br>
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

                {{-- <h5>Next Of Keen Incase Of Emergency</h5>
                <div class="row mb-3">
                    <div class="col">
                        <label>Name</label>
                        <input type="text" name="kname" id="kname" class="form-control">
                    </div>
                    <div class="col">
                        <label>Phone Number</label>
                        <input type="text" name="kphoneno" id="kphone" class="form-control">
                    </div>
                    <div class="col">
                        <label>Residence</label>
                        <input type="text" name="residence" id="residence" class="form-control">
                    </div>
                </div> --}}

                <div style="text-align:center;">
                    <button type="submit" class="btn btn-success center" name="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    </section>
</div>
@stop
