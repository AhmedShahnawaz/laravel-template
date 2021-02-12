@extends('layout.app')

@section('banner')
    <!-- backgroung fixd image area -->
    <section id="fixed-bg-about">
        <div class="d-flex justify-content-center align-items-center p-5">
          <div class="text-white m-md-5">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">About</li>
              </ol>
            </nav>
          </div>
        </div>
      </section>
@endsection


@section('content')

  <!-- start  about area  -->
  <main id="about-area">
    <!-- start content info area with image  -->
    <section id="about-content-area1">
      <div class="container py-5 pb-5">
        <div class="row">
          <!-- content area  -->
          <div class="col-12 col-md-6 py-3">
            <h1><span class="text-muted">Checkmate.</span></h1>
            <h1>Care & Amenities</h1>

            <div class="row py-3 pb-3">
              <!-- left side info area  -->
              <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
              </div>

              <!-- right side info area  -->
              <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-1">
                  <div class="col-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">Ut wisi enim ad minim dolore</div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary col-6">click here</button>
          </div>
          <!-- image area  -->
          <div class="col-12 col-md-6">
            <img src="{{asset('img/h-c-1.png')}}" alt="banner" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- end content info area with image  -->

    <!-- about aouther area  -->
    <section id="about-text-area" class="d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="bg-light shadow">
          <p class="p-3 p-md-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eos in
            suscipit vitae dolorum temporibus numquam? Sapiente aspernatur rem
            dolorem beatae itaque velit quisquam quod, magni qui accusantium
            veritatis reprehenderit.Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ad eos in suscipit vitae dolorum temporibus
            numquam? Sapiente aspernatur rem dolorem beatae itaque velit
            quisquam quod, magni dolorum temporibus numquam? Sapiente
            aspernatur rem dolorem beatae itaque velit quisquam quod, magni
            qui accusantium veritatis reprehenderit.Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Ad eos in suscipit vitae dolorum
            temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque
            velit quisquam quod, magni dolorum temporibus numquam? Sapiente
            aspernatur rem dolorem beatae itaque velit quisquam quod, magni
            qui accusantium veritatis reprehenderit.Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Ad eos in suscipit vitae dolorum
            temporibus numquam? Sapiente aspernatur rem dolorem beatae itaque
            velit quisquam quod, magni qui accusantium veritatis reprehenderit
          </p>
        </div>
      </div>
    </section>

    @include('components.clientarea')

  </main>
  <!-- end about area  -->

@endsection
