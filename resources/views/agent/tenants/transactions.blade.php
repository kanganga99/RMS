@extends('agent.layouts.app')
@section('headsection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table-stripped">
        <thead>
            <tr>
                <th>Rent</th>
                <th>Month</th>
                <th>Amount Due</th>
                <th>Due date</th>
                <th>Prepayments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $item)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->rent }}</td>
                <td>{{ $item->month }}</td>
                <td>{{ $item->amountdue }}</td>
                <td>{{ $item->duedate}}</td>
                <td>{{ $item->prepayments }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>
