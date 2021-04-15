@extends('demo-layout.app')

@section('blogarea')
    blog-nav
@endsection

@section('content')

    <!-- start post area  -->
    <main id="post-area" class="bg-white">

        <div class="container py-5 post-width">
            <!-- post link area  -->
            <div class="user-info-area">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">post</li>
                    </ol>
                </nav>
            </div>
            <hr>

            <!-- start articale area  -->
            <div class="post-content-area">
                <!-- articale or content section area  -->
                <article class="content-area">
                    <div class="">
                        <h1>Top 5 Beaches in Corfu, Greece</h1>
                        <p>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and
                            entices your audience to continue reading Create a blog post subtitle that summarizes your
                            post in a few short, punchy sentences and
                            entices your audience to continue reading Create a blog post subtitle that summarizes your
                            post in a few short, punchy sentences and
                            entices your audience to continue reading.</p>
                    </div>
                    <div class="py-4 pb-4">
                        <img src="./img/Banner1.png" alt="banner" class="img-fluid">
                    </div>

                    <p class=""><span>Welcome to your blog post. Use this space to connect with your readers and
                            potential
                            customers in a way that’s current and interesting. Think of it as an ongoing conversation
                            where you can share updates about business, trends, news, and more.</span><br></p>


                    <div class="border-start border-2 border-info bg-light">
                        <p class="p-3 display-6">Welcome to your blog post. Use this space to connect with your readers
                            and potential
                            Think of it as an ongoing conversation
                            .</p>
                    </div>
                    <p class=""><span>Welcome to your blog post. Use this space to connect with your readers and
                            potential
                            customers in a way that’s current and interesting. Think of it as an ongoing conversation
                            where you can share updates about business, trends, news, and more Think of it as an ongoing
                            conversation
                            where you can share updates about business, trends, news, and more. Think of it as an
                            ongoing conversation
                            where you can share updates about business, trends, news, and more..</span><br></p>

                    <h2>Create Relevant Content</h2>
                    <p class=""><span>Welcome to your blog post. Use this space to connect with your readers and
                            potential
                            customers in a way that’s current and interesting. Think of it as an ongoing conversation
                            where you can share updates about business, trends, news, and more Think of it as an ongoing
                            conversation
                            where you can share updates about business, trends, news, and more. Think of it as an
                            ongoing conversation
                            where you can share updates about business, trends, news, and more..</span><br></p>

                    <p class=""><span>Welcome to your blog post. Use this space to connect with your readers and
                            potential
                            customers in a way that’s current and interesting. Think of it as an ongoing conversation
                            where you can share updates about business, trends, news, and more Think of it as an ongoing
                            conversation
                            where you can share updates about business, trends, news, and more. Think of it as an
                            ongoing conversation
                            where you can share updates about business, trends, news, and more..</span><br></p>

                </article>

                <!-- social sharing buttons area  -->
                <section id="social-icon-share" class="py-3 pb-3">
                    <hr>
                    <div class="f-social-icon d-flex pb-2" id="footer-icon-post">
                        <a href="" class=""><i class="fab fa-facebook-f"></i></a>
                        <a href="" class=""><i class="fab fa-twitter"></i></a>
                        <a href="" class=""><i class="fab fa-instagram"></i></a>
                        <a href="" class=""><i class="fab fa-linkedin"></i></a>
                    </div>
                    <hr>
                </section>
            </div>
            <!-- end articale area  -->

            <!-- start recent post area with Owl-carousel   -->

            {{-- bblog area --}}
            @include('demo-comp.post-r')

            <!-- end recent post area with Owl-carousel   -->
        </div>

    </main>
    <!-- end post area  -->

@endsection
