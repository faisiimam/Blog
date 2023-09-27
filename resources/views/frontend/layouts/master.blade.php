<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>JoeBLog | Free Bootstrap 4.3.x template</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{'assets/frontend/vendors/themify-icons/css/themify-icons.css'}}">
    <link rel="stylesheet" href="{{'assets/frontend/css/joeblog.css'}}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('frontend.layouts.header')

    @yield('container')

    @include('frontend.layouts.footer')
</body>

</html>