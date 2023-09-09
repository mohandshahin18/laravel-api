<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('controlPanel.head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('controlPanel.main-header')
@include('controlPanel.main-sidebar')

@yield('content')

@include('controlPanel.footer')


</div>
<!-- ./wrapper -->
@include('controlPanel.footer-scripts')

</body>
</html>
