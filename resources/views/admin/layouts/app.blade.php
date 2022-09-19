<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.layouts.header')
        <div class="content-wrapper">
        @section('main-content')
        @show
        </div>
        @include('admin.layouts.footer')
</body>

</html>
