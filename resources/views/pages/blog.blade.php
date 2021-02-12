@extends('layout.app')

@section('blogarea')
blog-nav
@endsection

@section('content')

<main id="blog-area-main" class="">
    <div class="container blog-width">
        <!-- blog heading area  -->
        <div class="">
            <!-- post link area  -->
            <div class="user-info-area">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
            <hr>
        </div>
        <div class="row">
            <!--start left side main area of articales -->
            <div class="col-12 col-lg-8">
                <div class="row bg-white p-3 mb-2">
                    <!-- image area  -->
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-1.jpg')}}" alt=""
                                class="img-fluid"></a>
                    </div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>

                            <small><span>by</span class="text-warning"> ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-2.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-4.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-5.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-7.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-8.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-2.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>
                <div class="row bg-white p-3 mb-2">
                    <div class="col-12 col-md-4"><a href="" class="s"><img src="{{asset('img/blog/blog-4.jpg')}}" alt=""
                                class="img-fluid"></a></div>
                    <!-- heading and content area  -->
                    <div class="col-12 col-md-8 px-md-1 px-2">
                        <a href="{{route('singleblog')}}" class="">
                            <h4 class="mt-2 mt-md-0">this is headinf dream car for every one</h4>
                        </a>
                        <p>Lorem ipsum, ratione reprehenderit, rem ipsum, ratione
                            ratione reprehenderit,
                            nulla ducimus nemo. ...</p>
                        <footer class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-outline-primary btn-sm col-4" href="{{route('singleblog')}}">read more</a>
                            <small><span>by</span class="text-warning"> shahnawaz ahmed
                                <span>21/05/2021</span></small>
                        </footer>
                    </div>
                </div>

                <!-- pagination area  -->
                <div class="pagination-area py-4 pb-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end  left side main area of articales -->

            <!-- stsrt right sidebar area   -->
            <div class="col-12 col-lg-4">
                <!-- search bar area  -->
                <div class="col-12 d-flex bg-white py-4 pb-4 px-2 mb-3" id="search-group">
                    <input type="text" class="w-75 form-control rounded-0" placeholder="Search"
                        aria-label="Promo code" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary w-25 rounded-0" type="button"
                        id="button-addon2">Apply</button>
                    <span class="input-combined_indicator"></span>
                </div>

                <!-- recent post  -->
                <div class="bg-white p-2 mb-3">
                    <div class="py-1">
                        <h4>Recent <span class="h-color">Post</span></h4>
                        <hr>
                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="{{asset('img/blog/blog-1.jpg')}}" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="./img/blog/blog-3.jpg" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="{{asset('img/blog/blog-5.jpg')}}" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="{{asset('img/blog/blog-8.jpg')}}" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                </div>

                <!-- popular post  -->
                <div class="bg-white p-2 mb-3">
                    <div class="py-1">
                        <h4 class="">Latest <span class="h-color">Post</span></h4>
                        <hr>
                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="{{asset('img/blog/blog-2.jpg')}}" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="{{asset('img/blog/blog-4.jpg')}}" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="./img/blog/blog-3.jpg" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                    <div class="row py-2 pb-2">
                        <div class="col-4"><a href="" class="s"><img src="{{asset('img/blog/blog-7.jpg')}}" alt=""
                                    class="img-fluid"></a></div>
                        <div class="col-8 px-1">
                            <a href="{{route('singleblog')}}" class="">
                                <h6 class="">this is headinf sdohsdhf sodhf soidhf osidh
                                </h6>
                            </a>
                            <small><span>by</span class="text-warning"> ahmed
                                <span class="px-2">21/05/2021</span></small>
                        </div>

                    </div>
                </div>

            </div>
            <!-- end right sidebar area  -->
        </div>
    </div>


</main>
@endsection
