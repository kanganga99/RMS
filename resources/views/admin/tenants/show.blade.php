@extends('admin.layouts.app')
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
@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="column left" style="background-color:#aaa;  30%">
                            <h5>Tenant Personal Info</h5>
                            <div class="container" align="center">
                                <div style="padding:10px">
                                    <label>Name: {{ $tenants->name }}</label>
                                </div>
                                <div style="padding:10px">
                                    <label>Phone Number: {{ $tenants->phoneno }}</label>
                                </div>
                                <div style="padding:10px">
                                    <label>House Number: {{ $tenants->houseno }}</label>
                                </div>
                                <div style="padding:10px">
                                    <label>ID Number: {{ $tenants->idno }}</label>
                                </div>
                                <div style="padding:10px">
                                    <label>Email: {{ $tenants->email }}</label>
                                </div>
                                {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                    Pay Now
                                  </button> --}}
                            
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Make Payment</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" name="phonenumber" class="form-control" style="border-width:2px; border-style: solid ;" placeholder="Tenant phonenumber"><br>
                                           <input type="text" name="roomno" class="form-control" style="border-width:2px; border-style;" placeholder="Room Number"><br>
                                            <input type="text" name="amount" class="form-control" style="border-width:2px; border-style: solid ;" placeholder="Amount"><br>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                     <a href="{{ url('tenants/') }}" title="Transactions"><button class="btn btn-success btn-sm">Send Money</button></a>          
                            {{-- <button type="submit" class="btn btn-success" name="submit" value="submit"> Send Money</button>                                         --}}
                                    </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column right" style="background-color:#bbb;">
                            <h5>Payment Information</h5>
                            <table class="table-stripped bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>Billing For</th>
                                        <th>Expected Amount</th>
                                        <th>Amount Paid</th>
                                        <th>Balance</th>
                                        <th>Paid Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>March</td>
                                        <td>7500</td>
                                        <td>4500</td>
                                        <td>3000</td>
                                        <td>5/3/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>7500</td>
                                        <td>7500</td>
                                        <td>0</td>
                                        <td>7/4/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>7500</td>
                                        <td>6000</td>
                                        <td>1500</td>
                                        <td>5/5/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>7500</td>
                                        <td>7500</td>
                                        <td>0</td>
                                        <td>5/6/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>7500</td>
                                        <td>6500</td>
                                        <td>1000</td>
                                        <td>5/7/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>7500</td>
                                        <td>4500</td>
                                        <td>3000</td>
                                        <td>5/3/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>7500</td>
                                        <td>7500</td>
                                        <td>0</td>
                                        <td>7/4/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>7500</td>
                                        <td>6000</td>
                                        <td>1500</td>
                                        <td>5/5/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>7500</td>
                                        <td>7500</td>
                                        <td>0</td>
                                        <td>5/6/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>7500</td>
                                        <td>6500</td>
                                        <td>1000</td>
                                        <td>5/7/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>7500</td>
                                        <td>4500</td>
                                        <td>3000</td>
                                        <td>5/3/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>7500</td>
                                        <td>7500</td>
                                        <td>0</td>
                                        <td>7/4/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>7500</td>
                                        <td>6000</td>
                                        <td>1500</td>
                                        <td>5/5/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>7500</td>
                                        <td>7500</td>
                                        <td>0</td>
                                        <td>5/6/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>7500</td>
                                        <td>6500</td>
                                        <td>1000</td>
                                        <td>5/7/2022</td>
                                        <td>Paid</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
