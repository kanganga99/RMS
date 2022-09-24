
<div class="site-block-wrap">
    <div class="owl-carousel with-dots">
        <div class="site-blocks-cover overlay overlay-2"
         {{-- style="background-image: url({{ asset('user/images/hero_1.jpg') }});"  --}}
         style="background-image: url(@yield('bg-img'))"
         data-aos="fade" id="home-section">


            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 mt-lg-5 text-center">
                        <h1 class="text-shadow">
                            @yield('heading')

                            {{-- Buy &amp; Sell Property Here --}}
                        </h1>
                        <p class="mb-5 text-shadow">
                            @yield('sub-heading')

                            {{-- Free website template for Real Estate websites by the fine folks at --}}
                        </p>
                        <p><a href=""  class="btn btn-primary px-5 py-3">Get Started</a></p>

                    </div>
                </div>
            </div>


        </div>

        <div class="site-blocks-cover overlay overlay-2" 
        {{-- <h1>@yield('title')</h1>
        <span class="subheading">@yield('sub-heading')</span> --}}
        style="background-image: url(@yield('bg-img2'))"

        {{-- style="background-image: url({{ asset('user/images/hero_2.jpg') }});"  --}}
        data-aos="fade" id="home-section">


            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 mt-lg-5 text-center">
                        <h1 class="text-shadow">
                            @yield('heading2')
                            {{-- Find Your Perfect Property For Your Home --}}
                        </h1>
                        <p class="mb-5 text-shadow">
                            @yield('sub-heading2')
                            {{-- Free website template for Real Estate websites by the fine folks at --}}
                             </p>
                        <p><a href="" class="btn btn-primary px-5 py-3">Get Started</a></p>

                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
