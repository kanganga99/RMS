@extends('tenants.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            <form action="{{ url('tenants/update/' .$tenants->id) }}" method="post">
                {!! csrf_field() !!}
                {{-- @method('PATCH') --}}
                <input type="hidden" name="id" id="id" value="{{ $tenants->id }}" id="id">
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{ $tenants->name }}" class="form-control"><br>
                <label>Phone Number</label>
                <input type="text" name="phoneno" id="phoneno" value="{{ $tenants->phoneno }}" class="form-control"><br>
                <label>House Number</label>
                <input type="text" name="houseno" id="houseno" value="{{ $tenants->houseno }}"   class="form-control"><br>
                <label>ID Number</label>
                <input type="text" name="idno" id="idno" value="{{ $tenants->idno }}" class="form-control"><br>
                <label>Email</label>
                <input type="text" name="email" id="email" value="{{ $tenants->email }}" class="form-control"><br>
                <label>Password</label>
                <input type="text" name="password" id="password" value="{{ $tenants->password }}" class="form-control"><br>
                <button type="submit" class="btn btn-success" id="mybutton">Update</button>
                {{-- <input type="submit" value="Update" class="btn btn-success" id="mybutton"><br> --}}
                {{-- <script type="text/javascript">
                    document.getElementById("myButton").onclick = function() {
                        location.href = "{{ url('tenants') }}";
                    };
                </script> --}}
            </form>
        </div>
    </div>
@stop
