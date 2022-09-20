@extends('tenants.layout')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ url('vacantrooms/update/' . $vacantrooms->id) }}" method="post">
                {!! csrf_field() !!}
                {{-- @method('PATCH') --}}
                <input type="hidden" name="id" id="id" value="{{ $vacantrooms->id }}" id="id">
                <label>House Number</label>
                <input type="text" name="houseno" id="houseno" value="{{ $vacantrooms->houseno }}"
                    class="form-control"><br>
                <label>Floor</label>
                <input type="text" name="floor" id="floor" value="{{ $vacantrooms->floor }}"
                    class="form-control"><br>
                <button type="submit" class="btn btn-success" id="mybutton">Update</button>
                {{-- <input type="submit" value="Update" class="btn btn-success" id="mybutton"><br>
                <script type="text/javascript">
                    document.getElementById("myButton").onclick = function() {
                        location.href = "{{ url('tenants') }}";
                    };
                </script> --}}
            </form>

            {{-- <div class="modal fade" id="modal-edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('vacantrooms/update/' . $vacantrooms->id) }}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" id="id" value="{{ $vacantrooms->id }}"
                                    id="id">
                                <label>House Number</label>
                                <input type="text" name="houseno" id="houseno" value="{{ $vacantrooms->houseno }}"
                                    class="form-control"><br>
                                <label>Floor</label>
                                <input type="text" name="floor" id="floor" value="{{ $vacantrooms->floor }}"
                                    class="form-control"><br>
                                <button type="submit" class="btn btn-success" id="mybutton">Update</button>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div> --}}

        </div>
    </div>
@stop
