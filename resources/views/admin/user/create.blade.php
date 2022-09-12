@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">

    <div class="card ">
        <div class="row justify-content-center">

            <!-- /.card-header -->
            <!-- form start -->



            <form role="form" action="{{ route('user.store') }}" method="post" class="col-lg-12">
                @csrf
                {{-- {{ csrf_field() }} --}}

                <div class="col-lg-6  " style="align-items: center">

                    <div class="card-header">
                        <h3 class="card-title">Add user</h3>
                    </div>
                    <div class="card-body ">
                        @include('admin.inc.messages')
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="username" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password"  value="{{ old('password') }}">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="phone number"  value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>

                        <div class="checkbox">
                            <label ><input type="checkbox" name="status" @if (old('status') == 3)
                               checked 
                            @endif value="1">Status</label>
                        </div>
                    </div>
                        <div class="form-group">
                            {{-- <label for="role">Assign Role</label>
                                <select name="role" id="" class="form-control">
                                  <option value="0">Editor</option>
                                  <option value="1">Publisher</option>
                                  <option value="3">Writer</option>
                                </select> --}}
                            <label>Assign Role</label>
                            {{-- <div class="row">
                                @foreach ($roles as $role)
                                <div class="col-lg-3">
                                    <div class="checkbox">
                                        <label for=""><input type="checkbox" name="role[]" value="{{ $role->id }}"> name{{ $role->name }}</label>
                                    </div>

                                </div>

                                @endforeach

                            </div> --}}
                        </div>
                    </div>
                    <div class="card-footer text-center form-group col-lg-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href='{{ route('user.index') }}' class="btn btn-info">Back</a>

                    </div>
                </div>

            </form>

        </div>
    </div>
</div>



@endsection
