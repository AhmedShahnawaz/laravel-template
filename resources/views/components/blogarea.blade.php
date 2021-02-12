  <!-- blog area  -->
  <section id="blog-area">

    <div class="album py-3 py-md-5 bg-light">
        <div class="container">
            <div class="text-center">
                <h2>Our <span class="h-color">Blog</span> </h2>
                <p>this is service section area</p>
                <hr class="w-25">
            </div>
            <!-- Owl-carousel -->
            <div class="owl-carousel owl-theme">
                <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-3"> -->
                <div class="item p-1 col">
                    <div class="card shadow-sm">
                        <div class="blog-fixed-img" style=" background-image: url('{{asset('img/blog/blog-2.jpg')}}');"></div>

                        {{-- <a href="" class=""><img src="{{asset('img\blog\blog-1.jpg')}}" alt="banner" class="img-fluid"></a> --}}
                        <div class="card-body">
                            <a href="{{route('singleblog')}}">
                                <h6>this is the heading of the blog post area the blog post area ..</h6>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="footer pt-2">
                                    <small><i class="far fa-clock"></i><span class="px-2">March / 17
                                            /2021</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-1 col">
                    <div class="card shadow-sm">

                        <div class="blog-fixed-img" style=" background-image: url('{{asset('img/blog/blog-3.jpg')}}');"></div>

                        {{-- <a href="" class=""><img src="{{asset('img\blog\blog-3.jpg')}}" alt="banner" class="img-fluid"></a> --}}
                        <div class="card-body">
                            <a href="{{route('singleblog')}}">
                                <h6>this is the heading of the blog post area the blog post area ..</h6>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="footer pt-2">
                                    <small><i class="far fa-clock"></i><span class="px-2">March / 17
                                            /2021</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-1 col">
                    <div class="card shadow-sm">
                        <div class="blog-fixed-img" style=" background-image: url('{{asset('img/blog/blog-6.jpg')}}');"></div>
                        {{-- <a href="" class="" he><img src="{{asset('img\blog\blog-6.jpg')}}"  alt="banner" class="img-fluid"></a> --}}
                        <div class="card-body">
                            <a href="{{route('singleblog')}}">
                                <h6>this is the heading of the blog post area the blog post area ..</h6>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="footer pt-2">
                                    <small><i class="far fa-clock"></i><span class="px-2">March / 17
                                            /2021</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>
