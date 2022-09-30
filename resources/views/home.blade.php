@extends('user.layouts.app')
{{-- @section('bg-img3', asset('images/post/' . $post->image)) --}}
@section('bg-img3', asset('user/images/reg.jpg'))

@section('main-content')
    {{-- <div class="site-wrap"> --}}

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(@yield('bg-img3')" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5 mx-auto mt-lg-5 text-center">
                    {{-- <h1>{{ $post->title }}</h1> --}}
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
                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- @if(session()->has('category_id')){ --}}
                        {{-- // session()->get('category_id'); --}}
                        {{-- {{ session()->get('category_id') }} --}}

                        {{-- // echo $request->session()->get('category_id'); --}}
                    {{-- } --}}
                    {{-- @endif --}}
                    {{-- xxx {{ Session::get( $category->category_id) }} <br> --}}
                   {{-- session <h1>{{ Session::get('post_id')}}</h1> --}}
                   {{-- session <h1>{{ Session::get(is_array($variable)&& array_key_exists('category_id', $variable)) }}</h1> --}}

                  
                 
                    {{-- @foreach ( $user->categories as $category )
                    {{ $category->category_id }}</p>
                    @endforeach --}}

                    {{-- <p>{{ $data->name }}</p> --}}

                     {{-- {{ Auth::user()->name }}
                    <br>
                    {{ $msg }} --}}

                    {{-- {{ __('You are logged in!') }} --}}

            <p>Water:</p><br>
            <p> Trash:</p><br>
            <p>House Rent:</p><br>
            {{-- @foreach ( $users as $row )
            <p>myyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy{{ $row->name }}</p>
            @endforeach      --}}
    <div class="mt-5">
        <img src="{{ asset('user/images/person_1.jpg') }}" alt="Image" class="w-25 mb-3 rounded-circle">
        <h4 class="text-black">Elijah Moses</h4>

    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
