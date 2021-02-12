@extends('layout.app')

@section('banner')
        <!-- banner area start -->
        <section id="banner-area">
            <!-- Owl-carousel -->
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('img/banner/Banner-h-3.jpg')}}" alt="Banner1" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('img/banner/Banner-h-2.jpg')}}" alt="Banner2" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('img/banner/Banner-h-1.jpg')}}" alt="Banner3" class="img-fluid">
                </div>
            </div>
            <!--  Owl-carousel -->
        </section>
        <!-- banner area end -->
@endsection


@section('content')
<main id="main-area">
        <!-- top section card area  -->
        <section id="home-card-area">
            <div class="container py-md-5 pb-md-5">
                <div class="text-center py-3">
                    <h2>Why people need a <span class="h-color">Health Coach</span> </h2>
                    <small class="sub-h">Why people need a Health Coach</small>
                </div>
                <div class="row">
                    <!-- card 1  -->
                    <div class="col-12 col-md-3 pb-1">
                        <div class="card text-center">
                            <div class="d-flex justify-content-center align-items-center pt-5">
                                <a href="" class=""> <img src="{{asset('img/service/s-card-1.png')}}" class="img-fluid" alt="banner"></a>
                            </div>

                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <!-- card 2  -->
                    <div class="col-12 col-md-3 pb-1">
                        <div class="card text-center">
                            <div class="d-flex justify-content-center align-items-center pt-5">
                                <a href="" class=""><img src="{{asset('img/service/s-card-2.png')}}" class="img-fluid" alt="banner"></a>
                            </div>

                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <!-- card 3  -->
                    <div class="col-12 col-md-3 pb-1">
                        <div class="card text-center">
                            <div class="d-flex justify-content-center align-items-center pt-5">
                                <a href="" class=""><img src="{{asset('img/service/s-card-3.png')}}" class="img-fluid" alt="banner"></a>
                            </div>

                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <!-- card 4  -->
                    <div class="col-12 col-md-3 pb-1">
                        <div class="card text-center">
                            <div class="d-flex justify-content-center align-items-center pt-5"> <a href="" class=""><img
                                        src="{{asset('img/service/s-card-4.png')}}" class="img-fluid" alt="banner"></a>
                            </div>

                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- home content area section  -->
        <section id="home-content-area" class="bg-light py-3 ">
            <div class="container">
                <div class="text-center py-md-5">
                    <h1>content <span class="h-color">area</span></h1>
                    <small class="sub-h"> text to build on the card</small>
                </div>

                <!-- home content area -->
                <div class="row">
                    <!-- left side content area  -->
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center py-5">
                        <div class="">
                            <h2>text to build on the card</h2>
                            <hr class="w-25">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sequi voluptate animi
                                ipsam totam possimus dicta commodi cupiditate explicabo, corporis illum voluptatem
                                beatae obcaecati numquam mollitia temporibus molestiae exceptur commodi cupiditate
                                explicabo, corporis illum voluptatem
                                beatae obcaecati numquam mollitia temporibus molestiae excepturi commodi cupiditate
                                explicabo, corporis illum voluptatem
                            </p>
                        </div>
                    </div>
                    <!-- acordion content right area  -->
                    <div class="col-12 col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- clint info area home page  --}}
        @include('components.clientarea')

        {{-- blog area home page  --}}
        @include('components.blogarea')

</main>
@endsection
