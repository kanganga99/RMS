<!DOCTYPE html>
<html lang="en">
<head>
    @include('agent.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('agent.layouts.header')

        @section('main-content')
             @show      
        @include('agent.layouts.footer')

    </div>

</body>
</html>

