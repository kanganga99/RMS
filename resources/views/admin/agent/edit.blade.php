@extends('admin.layouts.app')
@section('headsection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
{{--
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}"> --}}

<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(document).ready(function (){
    $('.select2').select2();
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // });
  })
</script>
@endsection

@section('main-content')

<div class="content-wrapper">

    <div class="card ">
        <div class="row justify-content-center">

            <!-- /.card-header -->
            <!-- form start -->



            <form role="form" action="{{ route('agent.update',$agent->id) }}" method="post" class="col-lg-12">
                @csrf
                {{-- {{ csrf_field() }} --}}
                {{ method_field('PUT') }}

                <div class="col-lg-6  " style="align-items: center">

                    <div class="card-header">
                        <h3 class="card-title">Update Agent</h3>
                    </div>
                    <div class="card-body ">
                        {{-- @include('inc.messages') --}}
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="username" value="@if(old('name')){{ old('name') }}@else{{ $agent->name }}@endif">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="@if(old('email')){{ old('email') }}@else{{ $agent->email }}@endif">
                        </div>
                        {{-- <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password"  value="@if(old('password')){{ old('password') }}@else{{ $user->password }}@endif">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                        </div> --}}
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="phone number"  value="@if(old('phone')){{ old('phone') }}@else{{ $agent->phone }}@endif">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>

                        <div class="checkbox">
                            <label ><input type="checkbox" name="status" @if (old('status') == 1 || $agent->status ==1)
                               checked 
                            @endif value="1">Status</label>
                        </div>
                    </div>
                    <div class="form-group" data-select2-id="51">
                      <label>select property</label>
                        {{-- <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a property"
                          style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="post[]">

                          @foreach ($posts as $post)
                          <option value="{{ $agent->post_id }}"
                              {{ $agent->post_id == $agent->post_id ? 'selected' : '' }}>
                              {{ $post->title }}</option>
                      @endforeach
                                                       </select> --}}
                        <div class="row">
                            @foreach ($posts as $post)
                            <div class="col-lg-3">
                                <div class="checkbox">
                                    
                                    <label ><input type="checkbox" name="post_id" value="{{ $post->id }}"
                                        
                                        {{ $agent->post_id == $agent->post_id ? 'selected' : '' }}>
                                        {{ $post->title }}
                               
                                        </label>
                                </div>

                            </div>

                            @endforeach

                        </div>










                        {{-- <label>Select Location</label>
                        <div class="row">
                            @foreach ($categories as $category)
                            <div class="col-lg-3">
                                <div class="checkbox">
                                    <label ><input type="checkbox" name="category[]" value="{{ $category->id }}"
                                        
                                        @foreach($agent->categories as $agent_category)
                                            @if($agent_category->id == $category->id)
                                                checked
                                            @endif
                                        @endforeach>
                                        {{ $category->name }}</label>
                                </div>

                            </div>

                            @endforeach

                        </div> --}}
                      </div>
                    </div>
                    <div class="card-footer text-center form-group col-lg-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href='{{ route('agent.index') }}' class="btn btn-info">Back</a>

                    </div>
                </div>

            </form>

        </div>
    </div>
</div>



@endsection
