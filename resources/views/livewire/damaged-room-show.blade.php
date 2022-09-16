<div>

    @include('livewire.studentmodal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentModal">
                                Add vacant room
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>House Number</th>
                                    <th>Floor</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($vacantrooms as $vacantroom)
                                    <tr>
                                        <td>{{ $vacantroom->id }}</td>
                                        <td>{{ $vacantroom->houseno }}</td>
                                        <td>{{ $vacantroom->floor }}</td>
                                        <td>{{ $vacantroom->description }}</td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateVacantRoomModal" wire:click="editVacantRoom({{$vacantroom->id}})" class="btn btn-primary">
                                                Edit
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteVacantRoomModal" wire:click="deleteVacantRoom({{$vacantroom->id}})" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $vacantrooms->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>