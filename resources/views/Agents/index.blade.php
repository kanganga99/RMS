@extends('agents.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Agent Table</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/agent/create') }}" class="btn btn-success btn-sm" title="Add New Agent">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Property Name</th>
                                        <th>Location</th>
                                        <th>Vacant Rooms</th>
                                        <th>Occupied Rooms</th>
                                        <th>Damaged Rooms</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($agents as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->propertyname }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->vacantrooms }}</td>
                                        <td>{{ $item->occupiedrooms }}</td>
                                        <td>{{ $item->damagedrooms }}</td>
                                        <td>
                                            <a href="{{ url('/agent/' . $item->id)}}" title="View agent"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/agent/' . $item->id . '/edit')}}" title="Edit agent"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/agent' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete agent" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection