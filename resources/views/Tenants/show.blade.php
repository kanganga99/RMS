{{-- @extends('admin.layouts.app') --}}
<div class="card-header">Tenants Details</div>
{{-- @extends('tenants.layout') --}}
@section('content')
    <div class="card">
        <div class="card-body">
            <style>
                label {
                    display: inline-block;
                    width: 200px;
                }
            </style>
            <div class="container" align="center" style="padding-top:100px">

                <div style="padding:15px">
                    <label>Name: {{ $tenants->name }}</label>
                </div>
                <div style="padding:15px">
                    <label>Phone Number: {{ $tenants->phoneno }}</label>
                </div>
                <div style="padding:15px">
                    <label>House Number: {{ $tenants->houseno }}</label>
                </div>
                <div style="padding:15px">
                    <label>ID Number: {{ $tenants->idno }}</label>
                </div>
                <div style="padding:15px">
                    <label>Email: {{ $tenants->email }}</label>
                </div>
                {{-- <p class="card-text">Email: {{ $tenants->email }}</p> --}}
                <div style="padding:15px">
                    <label>Password: {{ $tenants->password }}</label>
                </div>
                <div style="padding:15px">
                    <label>Password Veerify: {{ $tenants->passwordverify }}</label>
                </div>
                {{-- <button type="submit" class="btn btn-danger">Pay Now</button> --}}
                <button class="btn btn-success btn-sm">Pay Now</button></a>
            </div>

            {{-- <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Invoices</th>
                                <th>Due date</th>
                                <th>Pre Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tenants as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->invoices }}</td>
                                <td>{{ $item->duepayment }}</td>
                                <td>{{ $item->prepayment }}</td>
                                <td>
                    </table>
                </div>
            </div> --}}
        </div>
