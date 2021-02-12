
        <!-- header info area start-->
        <div id="top-heade-bar">
            <div class="fixed-top head-top">
                <div class="container">
                    <div class="row">
                        <!-- right info area -->
                        <div class="col-6 col-md-6 d-flex justify-content-start align-items-center">
                            <div class="row">
                                <span class="col-2"><a href="" type="button" class="p-md-2 m-2 m-md-0"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                            class="fas fa-phone"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-body">
                                                        <div class="row" style="width: 200px;">
                                                            <div class="col-2"><i class="fas fa-phone"></i></div>
                                                            <div class="col-10" id="clipboardExample1"> +91 825412541
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>

                                <!-- model end   -->
                                <span class="col-8 px-md-3 d-none d-md-table pt-2">8290044522</span>
                            </div>

                            <div class="row">
                                <span class="col-2"><a href="" type="button" class="p-md-2 m-2 m-md-0"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><i
                                            class="fas fa-envelope"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-body">
                                                        <div class="row" style="width: 200px;">
                                                            <div class="col-2"><i class="fas fa-envelope"></i></div>
                                                            <div class="col-10"> Example@gmail.com</div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>

                                <span class="col-8 px-md-3 d-none d-md-grid pt-2">example@gmail.com</span>
                            </div>
                        </div>
                        <!-- left social icon area -->
                        <div class="col-6 col-md-6 d-flex justify-content-md-end justify-content-center"
                            id="top-social-icon">
                            <a href="" class=""><i class="fab fa-facebook-f"></i></a>
                            <a href="" class=""><i class="fab fa-twitter"></i></a>
                            <a href="" class=""><i class="fab fa-instagram"></i></a>
                            <a href="" class=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header info area end -->

        <!-- Primary Navigation bar start -->
        <nav class="navbar navbar-expand-lg navbar-light @yield('blogarea') " id="navbar-area">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/logo.svg')}}" alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="m-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('services')}}">Department</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 1</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 2</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 3</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 4</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 5</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 6</a></li>
                                <li><a class="dropdown-item" href="{{route('singleservice')}}">list 7</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Primary Navigation bar end -->
