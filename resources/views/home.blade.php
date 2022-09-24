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
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}

                        <section>
                            <table>
                                <tbody>
                                    <tr>
                                        <label>Name:Kamau</label><br>
                                        <label>House Number:340B-C2<label>
                                       <label>Rent Payable:45000</label>
                                    </tr><br>
                                    <tr>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#modal-default">
                                            Pay Now
                                        </button>
                                    </tr>

                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
