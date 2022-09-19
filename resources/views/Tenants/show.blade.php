{{-- @extends('admin.layouts.app') --}}
{{-- @extends('tenants.layout') --}}
@section('content')
    <div class="card">
        <div class="card-body">

            {{-- <div class="container" align="center" style="padding-top:100px">

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
                <p class="card-text">Email: {{ $tenants->email }}</p>
                <div style="padding:15px">
                    <label>Password: {{ $tenants->password }}</label>
                </div>
                <div style="padding:15px">
                    <label>Password Veerify: {{ $tenants->passwordverify }}</label>
                </div>
                <button type="submit" class="btn btn-danger">Pay Now</button>
                <button class="btn btn-success btn-sm">Pay Now</button></a>

                @include('tenants.payments')
            </div> --}}
        </div>
    </div>


    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            padding: 10px;
            height: 800px;
        }

        .left {
            width: 25%;
        }

        .right {
            width: 75%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    </head>

    <body>
        <div class="row">
            <div class="column left" style="background-color:#aaa;">
            <h3>Tenant Personal Info</h3>
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
                        <label>Password Verify: {{ $tenants->passwordverify }}</label>
                    </div>
                    <button class="btn btn-success btn-sm">Pay Now</button></a>

                </div>
            </div>
            <div class="column right" style="background-color:#bbb;">
                <h3>Payment Information</h3>
                <table class="table-stripped bordered">
                    <thead>
                        <tr>
                            <th>Rent</th>
                            <th>Amount</th>
                            <th>Due Date</th>
                            <th>Amount Due</th>
                            <th>Prepayments</th>
                            <th>Deposit</th>
                        </tr>
                    </thead>
                 {{-- <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->rent }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->duedate }}</td>
                        <td>{{ $item->amountdue }}</td>
                        <td>{{ $item->prepayments }}</td>
                        <td>{{ $item->deposit }}</td>
                    </tr>
                 </tbody> --}}
                </table>
            </div>
        </div>
    </body>
