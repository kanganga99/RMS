<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.layouts.head')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @include('user.layouts.header')
<div class="site-wrap">

    @include('user.layouts.landing')



 
        @section('main-content')
             @show 
            </div>          
        @include('user.layouts.footer')
        <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

</body> 
</html>
