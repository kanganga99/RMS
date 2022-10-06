@extends('user.layouts.app')
@section('bg-img3', asset('user/images/reg.jpg'))

@section('main-content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(@yield('bg-img3')" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5 mx-auto mt-lg-5 text-center">
                    <p class="mb-5"><strong class="text-white">Welcome</strong></p>

                </div>
            </div>
        </div>

        <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Bills') }}</div>
                    {{ Session::get('post_id') }}
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
                                    </tr>
                                </thead> 
                                <tbody >
                                    
                                </tbody>          
                            </table>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                            {{-- <a href="{{ url('agent/tenants/create') }}"></a> --}}
                            Make Payment
                        </button>
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
                                        <section class="content-header">
                                            <div class="card">
                                                <div class="card-header">Tenants Page</div>
                                                <div class="card-body">
                                                    <form action="{{ url('transactions/store') }}" method="post">
                                                        {!! csrf_field() !!}
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <label>Name</label><br>
                                                                <input type="text" name="name" id="name"
                                                                    class="form-control" required><br>
                                                            </div>
                                                            <div class="col">
                                                                <label>Expected Amount</label><br>
                                                                <input type="text" name="expectedamount"
                                                                    id="expectedamount" class="form-control" required><br>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <label>House Number</label><br>
                                                                <input type="text" name="houseno" id="houseno"
                                                                    class="form-control"><br>
                                                            </div>
                                                            <div class="col">
                                                                <label>Amount Paid</label><br>
                                                                <input type="text" name="amountpaid" id="amountpaid"
                                                                    class="form-control"><br>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <label class="form-label" for="inputreligion">Billing
                                                                    For</label><br>
                                                                <select class="form-control" type="billingfor"
                                                                    name="billingfor">
                                                                    <option value="">Select Month</option>
                                                                    <option name="religion1">January</option>
                                                                    <option name="religion2">February</option>
                                                                    <option name="religion3">March</option>
                                                                    <option name="religion3">April</option>
                                                                    <option name="religion3">May</option>
                                                                    <option name="religion3">June</option>
                                                                    <option name="religion3">July</option>
                                                                    <option name="religion3">August</option>
                                                                    <option name="religion3">September</option>
                                                                    <option name="religion3">October</option>
                                                                    <option name="religion3">November</option>
                                                                    <option name="religion3">December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label>Balance</label><br>
                                                                <input type="text" name="balance" id="balance"
                                                                    class="form-control"><br>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <label> Date Paid</label>
                                                                <input type="date" id="datepaid" name="datepaid"
                                                                    class="for-control">
                                                            </div>

                                                        </div>
                                                        <div style="text-align:center;">
                                                            <button type="submit" class="btn btn-success center"
                                                                name="submit">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    {{-- <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="mt-5">
                            <img src="{{ asset('user/images/person_1.jpg') }}" alt="Image"
                                class="w-25 mb-3 rounded-circle">
                            <h4 class="text-black">Elijah Moses</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
