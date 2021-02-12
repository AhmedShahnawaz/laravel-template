@extends('layout.app')

@section('banner')
        <!-- backgroung fixd image area -->
        <section id="fixed-bg-service">
            <div id="contect-img" class="d-flex justify-content-center align-items-center p-5">
                <div class="text-white m-md-5">
                    <h1 class="text-center">Services </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                            <li class="breadcrumb-item" aria-current="page">Service Name</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
@endsection


@section('content')

<main id="service-area">


    <!-- about aouther area  -->
    <section id="about-text-area" class="d-flex justify-content-center align-items-center py-5">
        <div class="container">
            <div class="bg-light shadow">
                <p class="p-md-5 p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eos in suscipit
                    vitae
                    dolorum temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque velit quisquam quod,
                    magni
                    qui accusantium veritatis reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ad eos in suscipit vitae
                    dolorum temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque velit quisquam quod,
                    magni
                    dolorum temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque velit quisquam quod,
                    magni
                    qui accusantium veritatis reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ad eos in suscipit vitae
                    dolorum temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque velit quisquam quod,
                    magni
                    dolorum temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque velit quisquam quod,
                    magni
                    qui accusantium veritatis reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ad eos in suscipit vitae
                    dolorum temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque velit quisquam quod,
                    magni
                    qui accusantium veritatis reprehenderit</p>
            </div>
        </div>

    </section>


    <!-- service department area start -->
    <section id="recent-services">
        <div class="container py-5 pb-5">
            <div class="">
                <h1>Related <span class="h-color">Services</span></h1>
                <hr class="w-75">
            </div>

            <divv class="owl-carousel owl-theme">
                <div class="item py-2 color-card">
                    <div class="product text-center p-2" id="img-rounded">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <a href="" class="g"><img src="{{asset('img/service/s-card-1.png')}}" alt="baner" class="img-fluid"></a>
                            <br>
                        </div>
                        <div class="second p-1">
                           <a href=""><h5 class="">health care </h5></a>
                            <small><span> this is peragraph section fghg and so more many things</span></small>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="item py-2 color-card">
                    <div class="product text-center p-2" id="img-rounded">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <a href="" class="g"><img src="{{asset('img/service/s-card-2.png')}}" alt="baner" class="img-fluid"></a>
                            <br>
                        </div>
                        <div class="second p-1">
                            <a href=""><h5 class="">health care </h5></a>
                            <small><span> this is peragraph section fghg and so more many things</span></small>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="item py-2 color-card">
                    <div class="product text-center p-2" id="img-rounded">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <a href="" class="g"><img src="{{asset('img/service/s-card-3.png')}}" alt="baner" class="img-fluid"></a>
                            <br>
                        </div>
                        <div class="second p-1">
                            <a href=""><h5 class="">health care </h5></a>
                            <small><span> this is peragraph section fghg and so more many things</span></small>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="item py-2 color-card">
                    <div class="product text-center p-2" id="img-rounded">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <a href="" class="g"><img src="{{asset('img/service/s-card-4.png')}}" alt="baner" class="img-fluid"></a>
                            <br>
                        </div>
                        <div class="second p-1">
                            <a href=""><h5 class="">health care </h5></a>
                            <small><span> this is peragraph section fghg and so more many things</span></small>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="item py-2 color-card">
                    <div class="product text-center p-2" id="img-rounded">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <a href="" class="g"><img src="{{asset('img/service/s-card-5.png')}}" alt="baner" class="img-fluid"></a>
                            <br>
                        </div>
                        <div class="second p-1">
                            <a href=""><h5 class="">health care </h5></a>
                            <small><span> this is peragraph section fghg and so more many things</span></small>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="item py-2 color-card">
                    <div class="product text-center p-2" id="img-rounded">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <a href="" class="g"><img src="{{asset('img/service/s-card-6.png')}}" alt="baner" class="img-fluid"></a>
                            <br>
                        </div>
                        <div class="second p-1">
                            <a href=""><h5 class="">health care </h5></a>
                            <small><span> this is peragraph section fghg and so more many things</span></small>
                            <br>
                        </div>
                    </div>
                </div>
            </divv>

        </div>
    </section>
    <!-- service department area end  -->

</main>

@endsection
