<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sidenav Light - SB Admin</title>
    
    <link href="{{ asset('assets/backend/css/styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/js/all.js')}}" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    <!-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark"> -->
        @include('backend.admin.layouts.header')
        @include('backend.admin.layouts.sidebar')
        @yield('container')
        @include('backend.admin.layouts.footer')
</body>

</html>