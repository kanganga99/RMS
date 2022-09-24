@extends('admin.layouts.app')
@section('headsection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script>
  table = $('#example').DataTable( {
    "paging": true,
      "ordering": true,
    "responsive": true,
       "lengthChange": false, 
       "autoWidth": false
} );
</script>

@endsection
@section('main-content')
{{-- <section class="content"> --}}
  {{-- <div class="container-fluid"> --}}
    {{-- <div class="row"> --}}
      {{-- <div class="col-12"> --}}
       
        <!-- /.card -->
        <div class="content-wrapper">
          <section class="content">

        <div class="card">
          <div class="card-header">
            <a href="{{ url('/tenants/create') }}" class="btn btn-success btn-sm" title="Add New Tenant">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New
          </a>          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>House Number</th>
                        <th>ID Number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tenants as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phoneno }}</td>
                        <td>{{ $item->houseno }}</td>
                        <td>{{ $item->idno }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td>
                            <a href="{{ url('tenants/show/' . $item->id )}}" title="View tenant"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('tenants/edit/' . $item->id )}}" title="Edit tenant"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <form method="POST" action="{{ url('/tenants' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{-- {{ method_field('PATCH') }}
                                {{ csrf_field() }} --}}
                                
                                {!! csrf_field() !!}
                                {{-- @method('PATCH') --}}

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete tenant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>
        </div>
      {{-- </div> --}}
    {{-- </div> --}}
  {{-- </div> --}}
</section>
</div>
@endsection