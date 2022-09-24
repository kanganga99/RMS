{{-- @extends('tenants.layout') --}}
@extends('admin.layouts.app')

@section('main-content')
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
<div class="content-wrapper">
    <section class="content">
    <div class="card">
        <div class="card-header">Tenants Page</div>
        <div class="card-body">

            <form action="{{ url('tenants/store') }}" method="post">
                {!! csrf_field() !!}
                <div class="row mb-3">
                    <div class="col">
                        <label>Name</label><br>
                        <input type="text" name="name" id="name" class="form-control"><br>
                    </div>
                    <div class="col">
                        <label>Phonenumber</label><br>
                        <input type="text" name="phoneno" id="phoneno" class="form-control"><br>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label>House Number </label><br>
                        <input type="text" name="houseno" id="houseno" class="form-control"><br>
                    </div>
                    <div class="col">
                        <label>ID Number</label><br>
                        <input type="text" name="idno" id="idno" class="form-control"><br>
                    </div>
                </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Email</label><br>
                            <input type="text" name="email" id="email" class="form-control"><br>
                        </div>
                        <div class="col">
                            <label>Password</label><br>
                            <input type="text" name="password" id="password" class="form-control"><br>
                        </div>
                        
                    </div>
              
                    <div class="form-group" data-select2-id="51">
                        <label>Select Location</label>
                        <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="categories[]">
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div style="text-align:center;">
                        <button type="submit" class="btn btn-success center" name="submit">Save</button>
                    </div>
  
            </form>
        </div>
    </div>
    </section>
</div>
@stop
