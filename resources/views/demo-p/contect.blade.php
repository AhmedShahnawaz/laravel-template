@extends('demo-layout.app')

@section('banner')

    <!-- backgroung fixd image area -->
    <section id="fixed-bg-contect">
        <div class="d-flex justify-content-center align-items-center p-5">
            <div class="text-white m-md-5">
                <h1 class="">Contect Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Contect</li>
                    </ol>
                </nav>
            </div>

        </div>
    </section>

@endsection

@section('content')

    <!-- start  contect area  -->
    <main id="">
        <section id="contect-area">
            <div class="container-fluid">
                <div class="row py-5 pb-5">

                    <div class="col-12 col-md-6 p-md-5">
                        <div class="row">
                            <div class="col-6">
                                <h3>New York</h3>
                                <hr class="w-50">
                                <div>198 West 21th Street, Suite 721</div>
                                <div>New York NY 10010</div>
                                <div>Email: <span> office@example.com</span></div>
                                <div>Phone: <span> +91-452112541</span></div>
                            </div>
                            <div class="col-6">
                                <h3>New York</h3>
                                <hr class="w-50">
                                <div>198 West 21th Street, Suite 721</div>
                                <div>New York NY 10010</div>
                                <div>Email: <span> office@example.com</span></div>
                                <div>Phone: <span> +91-452112541</span></div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-6">
                                <h3>New York</h3>
                                <hr class="w-50">
                                <div>198 West 21th Street, Suite 721</div>
                                <div>New York NY 10010</div>
                                <div>Email: <span> office@example.com</span></div>
                                <div>Phone: <span> +91-452112541</span></div>
                            </div>
                            <div class="col-6">
                                <h3>New York</h3>
                                <hr class="w-50">
                                <div>198 West 21th Street, Suite 721</div>
                                <div>New York NY 10010</div>
                                <div>Email: <span> office@example.com</span></div>
                                <div>Phone: <span> +91-452112541</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <form class="row g-3 py-5 pb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light" id="floatingInput" placeholder="Name"
                                    required>
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light" id="floatingPassword" placeholder="Email"
                                    required>
                                <label for="floatingPassword">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="form-control bg-light" id="floatingPassword"
                                    placeholder="Mobile No" required>
                                <label for="floatingPassword">Phone</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control bg-light" placeholder="comment" id="floatingTextarea2"
                                    style="height: 100px" required></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning col-6">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15282226.34598746!2d73.7249218583731!3d20.750295893437976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1612269062134!5m2!1sen!2sin"
                width="100%" height="450" frameborder="0" style="border:0; margin-bottom: 0%;" allowfullscreen=""
                aria-hidden="false" tabindex="0"></iframe>
        </section>
    </main>
    <!-- end contect area  -->

@endsection
