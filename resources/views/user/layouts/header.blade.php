<div class="fh5co-loader"></div>
<div id="page">
<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-2">
                <div id="fh5co-logo"><a href="index.html">Shop.</a></div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1">
                <ul>
                    <li class="has-dropdown">
                        <a href="product.html">Shop</a>
                        <ul class="dropdown">
                            <li><a href="single.html">Single Shop</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="has-dropdown">
                        <a href="services.html">Services</a>
                        <ul class="dropdown">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">API</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>

                </ul>
            </div>
            <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                <ul>
                    <li class="search">
                        <div class="input-group">
                            <input type="text" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                            </span>
                        </div>
                    </li>
                    <li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
          
            {{-- <li style="background-image: url(images/img_bg_2.jpg);">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <span class="price">$530</span>
                                <h2>The Haluz Rocking Chair</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li> --}}
            <li style="background-image: url(images/img_bg_3.jpg);">
            <li style="background-image: url(@yield('bg-img'));">

                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <span class="price">$750</span>
                                <h2>Alato Cabinet</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_4.jpg);">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <span class="price">$540</span>
                                <h2>The WW Chair</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
