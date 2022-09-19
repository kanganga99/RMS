<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <title>p M s</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.layouts.header')

        @section('main-content')
             @show      
        @include('admin.layouts.footer')

    </div>

</body>
</html>

=======

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
>>>>>>> c59e1b22a9cf842f944bd6c5c113b155a80248b5
