@extends('agent.layouts.app')
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
        <div class="content-wrapper">
          <section class="content-header">
        
        <div class="card">
          <div class="card-header">
            <a href="{{ url('agent/transactions/create') }}" class="btn btn-success btn-sm" title="Add New Tenant">
              <i class="fa fa-plus" aria-hidden="true"></i> Make Payment
          </a>          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>House Number</th>
                        <th>Billing For</th>
                        <th>Expected Amount</th>
                        <th>Amount Paid</th>
                        <th>Balance</th>
                        <th>Date Paid</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($transactions as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->houseno }}</td>
                        <td>{{ $item->billingfor }}</td>
                        <td>{{ $item->expectedamount }}</td>
                        <td>{{ $item->amountpaid }}</td>
                        <td>{{ $item->balance }}</td>
                        <td>{{ $item->datepaid }}</td>
                        <td>
                            {{-- <a href="{{ url('agent/transactions/show/' . $item->id )}}" title="View transaction"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                            <a href="{{ url('agent/transactions/edit/' . $item->id )}}" title="Edit transaction"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                           {{-- <form method="POST" action="{{ url('agent/transactions' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {!! csrf_field() !!}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete tenant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form> --}}
                        
                          </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>
        </div>
          </section>
        </div>
@endsection