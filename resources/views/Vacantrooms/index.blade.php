@extends('admin.layouts.app')

@section('headsection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}

    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    {{-- <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> --}}
    <script>
        table = $('#example1').DataTable({
            "paging": true,
            "ordering": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        });
    </script>
@endsection
@section('main-content')
    <section class="content">
        {{-- <div class="container-fluid"> --}}
        {{-- <div class="row"> --}}
        <div class="col-12">

            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <a href="{{ url('vacantrooms/create') }}" class="btn btn-success btn-sm" title="Add Vacant Room"
                        data-toggle="modal" data-target="#modal-default">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </div>
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add New</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('vacantrooms/store') }}" method="post">

                                    {!! csrf_field() !!}
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label>House Number</label><br>
                                            <input type="text" name="houseno" id="houseno" class="form-control"><br>
                                        </div>
                                        <div class="col">
                                            <label>Floor</label><br>
                                            <input type="text" name="floor" id="floor" class="form-control"><br>
                                        </div>
                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>House Number</th>
                            <th>Floor</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacantrooms as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->houseno }}</td>
                                <td>{{ $item->floor }}</td>
                                <td>
                                    <a href="{{ url('vacantrooms/edit/' .$item->id )}}" title="Edit vacant room"><button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    {{-- <button type="button" class="btn btn-primary" href="{{ url('vacantrooms/edit/' . $item->id) }}" data-toggle="modal" data-target="#modal-edit">
                                        Edit
                                    </button> --}}
                                    {{-- <div class="modal fade" id="modal-edit">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Default Modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('vacantrooms/update/' .$vacantrooms->id) }}" method="post">
                                                        {!! csrf_field() !!}
                                                        <input type="hidden" name="id" id="id" value="{{ $vacantrooms->id }}" id="id">
                                                        <label>House Number</label>
                                                        <input type="text" name="houseno" id="houseno" value="{{ $vacantrooms->houseno }}"
                                                            class="form-control"><br>
                                                        <label>Floor</label>
                                                        <input type="text" name="floor" id="floor" value="{{ $vacantrooms->floor }}"
                                                            class="form-control"><br>
                                                        <button type="submit" class="btn btn-success" id="mybutton">Update</button>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div> --}}
                                    <form method="POST" action="{{ url('vacantrooms' . '/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete vacant room"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </section>
@endsection
