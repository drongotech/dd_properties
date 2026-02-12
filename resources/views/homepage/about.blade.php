@extends('layouts/mainlayout')

@section('page-css')
@endsection

@section('page-content')
    <section id="section-hero" class="section-dark text-light no-top no-bottom relative overflow-hidden mh-600 jarallax">
        <img src="images/background/5.webp" class="jarallax-img" alt="">
        <div class="gradient-edge-top op-6"></div>
        <div class="abs w-80 bottom-10 z-2 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="relative overflow-hidden">
                            <div class="wow fadeInUpBig" data-wow-duration="1.5s">
                                <h1 class="fs-120 text-uppercase fs-sm-10vw mb-2 lh-1">About Us</h1>
                                <h3>Creating Spaces You Love to Live In</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw-overlay op-5"></div>
    </section>
    
    <section>
        <div class="container relative z-1">
            <div class="row g-4 gx-5 align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class=" overflow-hidden wow zoomIn">
                                        <img src="images/misc/p1.webp" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row g-4">
                                <div class="spacer-single sm-hide"></div>
                                <div class="col-lg-12">
                                    <div class=" overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                        <img src="images/misc/p2.webp" class="w-100 wow scaleIn" alt="" data-wow-delay=".3s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">About Us</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Welcome to Devita, Where Comfort Meets Community</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">At Devita, we believe that home is more than just a place — it’s where your story unfolds. Located in the heart of Addis Ababa, our apartments are designed to offer a perfect blend of modern living, convenience, and community. Whether you’re a young professional, a growing family, or someone looking to downsize, we provide a living experience that fits your lifestyle.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark section-dark text-light relative no-top no-bottom overflow-hidden">
        <div class="container-fluid position-relative half-fluid">
            <div class="container">
                <div class="row gx-5">
                    <!-- Image -->
                    <div class="col-lg-6 position-lg-absolute right-half h-100 overflow-hidden">
                        <div class="image" data-bgimage="url(images/misc/l9.webp) center"></div>
                    </div>
                    <!-- Text -->
                    <div class="col-lg-6 relative z-3">
                        <div class="me-lg-5 pe-lg-5 py-5 my-5">
                            <div class="subtitle">Our Mission</div>
                            <h3 class="fs-40 lh-1-3">To create welcoming, well-maintained, and thoughtfully designed living spaces where residents feel proud to call home.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center pt60 pb50 relative">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 mb-sm-30">
                    <div class="de_count relative fs-15 wow fadeInRight" data-wow-delay=".0s">
                        <h3 class="fs-60 mb-0"><span class="timer" data-to="25000" data-speed="3000">0</span></h3>
                        <div>Square Areas</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-sm-30">
                    <div class="de_count relative fs-15 wow fadeInRight" data-wow-delay=".2s">
                        <h3 class="fs-60 mb-0"><span class="timer" data-to="150" data-speed="3000">0</span></h3>
                        <div>Luxurious Unit</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-sm-30">
                    <div class="de_count relative fs-15 wow fadeInRight" data-wow-delay=".4s">
                        <h3 class="fs-60 mb-0"><span class="timer" data-to="300" data-speed="3000">0</span></h3>
                        <div>Parking Spaces</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-sm-30">
                    <div class="de_count relative fs-15 wow fadeInRight" data-wow-delay=".6s">
                        <h3 class="fs-60 mb-0"><span class="timer" data-to="20" data-speed="3000">0</span></h3>
                        <div>Public Facilities</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color section-dark text-light pt-50 pb-50">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-9">
                    <h3 class="mb-0 fs-32">Ready to make your next move?</h3>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a class="btn-main fx-slide btn-line" href="02_apartment-contact.html"><span>Schedule a Visit</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-js')
@endsection