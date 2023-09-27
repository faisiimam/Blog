 <!-- page First Navigation -->
 <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{'assets/frontend/imgs/logo.svg'}}" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">                     
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('singlepost') }}">Single Post</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('single.blog')}}">Politics</a>
                            <a class="dropdown-item" href="#">Immigration</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Travel</a>
                            <a class="dropdown-item" href="#">Sports</a>
                        </div>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="components.html" class="ml-4 btn btn-dark mt-1 btn-sm">Button</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Of Page Second Navigation -->
    
    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->