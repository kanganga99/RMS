@extends('tenants.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            <form action="{{ url('vacantrooms/update') }}" method="post">
                {!! csrf_field() !!}
                {{-- @method('PATCH') --}}
                <input type="hidden" name="id" id="id" value="{{ $vacantrooms->id }}" id="id">
                <label>House Number</label>
                <input type="text" name="houseno" id="houseno" value="{{ $vacantrooms->houseno }}" class="form-control"><br>
                <label>Floor</label>
                <input type="text" name="floor" id="floor" value="{{ $vacantrooms->floor }}" class="form-control"><br>
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
