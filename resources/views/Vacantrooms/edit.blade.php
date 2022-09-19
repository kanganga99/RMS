@extends('tenants.layout')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ url('vacantrooms/update/' .$vacantrooms->id) }}" method="post">
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

            {{-- <div class="modal fade" id="edit_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('vacantrooms/update'.$vacantrooms->id) }}" method="post">

                                {!! csrf_field() !!}
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="hidden" name="id" id="id" value="{{ $vacantrooms->id }}"id="id">
                                        <label>House Number</label><br>
                                        <input type="text" name="houseno" id="houseno" value="{{ $vacantrooms->houseno }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>Floor</label><br>
                                        <input type="text" name="floor" id="floor" value="{{ $vacantrooms->floor }}" class="form-control">
                                    </div>
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-success" id="mybutton">Update</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@stop
