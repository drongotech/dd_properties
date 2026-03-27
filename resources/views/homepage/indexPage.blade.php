@extends('layouts/mainlayout')

@section('page-css')
@endsection

@section('page-content')
    <section id="section-hero" class="section-dark text-light no-top no-bottom relative overflow-hidden z-1000">
        <div class="abs w-80 bottom-10 z-2 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="fs-120 text-uppercase fs-sm-10vw mb-4 lh-1">Devita Properties</h1>
                        <h3 class=text-uppercase>Where Ethiopian heritage meets contemporary elegance</h3>
                        <div class="d-flex align-items-center">
                            <!-- <h4 class="fw-500 mb-0 me-4">Namibia Street, Bole, Addis Ababa, Ethiopia</h4> -->
                            <a class="btn-main btn-line fx-slide py-1 lh-1-6 fw-400 mt-2 " href="#"><span>Explore Our Projects</span></a>
                        </div>
                        <span>&nbsp;</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mh-800">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url(images/slider/apt-1.png)">
                            <div class="sw-overlay op-4"></div>
                        </div>
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url(images/slider/apt-2.png)">
                            <div class="sw-overlay op-4"></div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    
    <section class="relative pb-0">
        <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12 text-center">
                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Devita Properties is a design-led developer of residences, communities and lifestyles</h3>
                </div>
            </div>

            <div class="row g-4 justify-content-center mt-3">
                <div class="col-lg-4">
                    <img src="images/misc/left-big.png" class="w-100 rounded-1" alt="">
                    <p class="mt-3">Our curated portfolio of some of the world’s most exclusive and extraordinary homes features only destinations that genuinely inspire us as we redefine living</p>
                </div>
                <div class="col-lg-8">
                    <img src="images/misc/right-big.png" class="w-100 rounded-1" alt="">
                    <p class="mt-3">When it comes down to it, what we truly yearn for is a sense of connection – connections to like-minded people, to nature, to exceptional design, and to the best version of ourselves. The Ellington ethos brings people together in beautifully crafted properties that are designed to lift the spirits and stir the soul. Step out of the everyday world and indulge in life’s true pleasures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="section-overview">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="relative">
                        <div class="w-100 pe-5 pb-5 wow scaleIn">
                            <img src="images/misc/l1.webp" class="w-100 rounded-1" alt="">
                        </div>
                        <img src="images/misc/s1.webp" class="w-40 rounded-1 abs end-0 bottom-0 z-2 wow scaleIn" data-wow-delay=".2s" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-3">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Home Overview</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Comfort Meet Elegance</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Non anim in pariatur in ex excepteur commodo do officia amet incididunt ullamco nostrud aliquip minim magna esse dolore ea quis laborum eiusmod dolore ex pariatur ut cillum non excepteur irure dolore reprehenderit dolor id ut ut in ut occaecat culpa minim dolore elit non ut tempor ut in ex ut tempor.</p>

                        <ul class="ul-check text-dark mb-4 wow fadeInUp" data-wow-delay=".6s">
                            <li>Contemporary design with high ceilings</li>
                            <li>Spacious bedrooms with built-in wardrobes</li>
                            <li>Fully integrated smart home system</li>
                            <li>Gagarage with electric vehicle charging port</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="relative">
        <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12 text-center">
                    <h3 class="wow fadeInUp" data-wow-delay=".2s">Featured real estate projects in Addis Ababa</h3>
                    <p>Discover exceptional living spaces crafted with intention and designed for those who appreciate the finer things in life.</p>
                </div>
            </div>

            <div class="row g-4 text-white">
                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/1.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="{{route('project')}}"><span>View Project</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 top-0 p-30 w-100 hover-op-0" style="text-align: left;">
                            <div class="bg-dark px-3 py-2 d-inline-block">
                                <p class="text-left mb-0 text-white" style="line-height: 1.4; font-size: 15px; font-weight: 300;">NOW SELLING</p>
                            </div>
                        </div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <p class="text-left mb-2 text-white d-none d-md-block" style="text-align: left; line-height: 1.4; font-weight: 250;">Bole, Addis Ababa</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-2">The Mandevilla</h3>
                            </div>
                            <p class="text-left text-white ellipsis-multiline" style="text-align: left; line-height: 1.4; font-weight: 250;">A collection of 24 meticulously designed luxury residences offering unparalleled elegance in the heart of Ethiopia's capital.</p>
                            <p class="text-left mb-0" style="text-align: left; line-height: 1.4; font-weight: 250;">24 Exclusive Residences</p>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/1.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href=""><span>Register Interest</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 top-0 p-30 w-100 hover-op-0" style="text-align: left;">
                            <div class="bg-dark px-3 py-2 d-inline-block">
                                <p class="text-left mb-0 text-white" style="line-height: 1.4; font-size: 15px; font-weight: 300;">COMING SOON</p>
                            </div>
                        </div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <p class="text-left mb-2 text-white d-none d-md-block" style="text-align: left; line-height: 1.4; font-weight: 250;">Coming Soon</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-2">Al Aperto</h3>
                            </div>
                            <p class="text-left text-white ellipsis-multiline" style="text-align: left; line-height: 1.4; font-weight: 250;">An exclusive new development by De Vita Properties. Register your interest to be the first to know when details are announced.</p>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                    </div>
                </div>

                <!-- <div class="col-md-3">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn h-100" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden h-100">
                            <img src="images/apartment/3.jpg" class="hover-scale-1-1 w-100 h-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Project</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #3</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/4.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Project</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #4</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="hover overflow-hidden relative text-light text-center zoomIn h-100" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden h-100">
                            <img src="images/apartment/5.jpg" class="hover-scale-1-1 w-100 h-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Project</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #5</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                    </div>
                </div> -->
                
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <a class="btn-main fx-slide" href="02_apartment-contact.html"><span>More Projects</span></a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>

    <!-- <section id="section-rooms" class="bg-color-op-1">
        <div class="container">
            <div class="row g-4 gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Room Details</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Discover Rooms</h2>
                </div>
            </div>

            <div class="row g-4 gx-5 justify-content-center wow fadeInUp">
                <div class="col-lg-12">
                    <div class="de-tab plain">
                        <ul class="d-tab-nav mb-4 border-bottom pb-4 d-flex justify-content-between">
                            <li class="active-tab">Living Room</li>
                            <li>Dinning Room</li>
                            <li>Kitchen</li>
                            <li>Master Bedroom</li>
                            <li>Bathroom</li>
                        </ul>
                        <ul class="d-tab-content pt-3">
                            <li>
                                <div class="row g-4 gx-5 align-items-center justify-content-between">
                                    <div class="col-lg-3">
                                        <h3 class="fs-32 text-dark mb-4">Living Room</h3>
                                        <p>A cozy, social hub with plush seating and entertainment. Ideal for relaxing, gatherings, and family time.</p>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="relative">
                                            <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                <h4 class="mb-0">20 m²</h4>
                                            </div>
                                            <img src="images/discover-rooms/l1.webp" class="w-100 rounded-1" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row g-4 gx-5 align-items-center justify-content-between">
                                    <div class="col-lg-3">
                                        <h3 class="fs-32 text-dark mb-4">Dinning Room</h3>
                                        <p>A modern space for cooking and creativity. Equipped with appliances and a central island for easy meal prep.</p>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="relative">
                                            <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                <h4 class="mb-0">15 m²</h4>
                                            </div>
                                            <img src="images/discover-rooms/l2.webp" class="w-100 rounded-1" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row g-4 gx-5 align-items-center justify-content-between">
                                    <div class="col-lg-3">
                                        <h3 class="fs-32 text-dark mb-4">Kitchen</h3>
                                        <p>A warm, inviting area to share meals and conversations. Positioned between the kitchen and living room.</p>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="relative">
                                            <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                <h4 class="mb-0">15 m²</h4>
                                            </div>
                                            <img src="images/discover-rooms/l3.webp" class="w-100 rounded-1" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row g-4 gx-5 align-items-center justify-content-between">
                                    <div class="col-lg-3">
                                        <h3 class="fs-32 text-dark mb-4">Master Bedroom</h3>
                                        <p>The bedroom is your personal sanctuary—a calming space designed for deep rest and peaceful beginnings.</p>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="relative">
                                            <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                <h4 class="mb-0">16 m²</h4>
                                            </div>
                                            <img src="images/discover-rooms/l4.webp" class="w-100 rounded-1" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row g-4 gx-5 align-items-center justify-content-between">
                                    <div class="col-lg-3">
                                        <h3 class="fs-32 text-dark mb-4">Bathroom</h3>
                                        <p>A compact wellness zone with spa-like touches. Features sleek fixtures and a relaxing ambiance.</p>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="relative">
                                            <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                <h4 class="mb-0">6 m²</h4>
                                            </div>
                                            <img src="images/discover-rooms/l5.webp" class="w-100 rounded-1" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="section-overview">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="ps-lg-3">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Home Overview</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Luxury living where comfort meets timeless style, effortlessly</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Eu eiusmod ut ut dolore nulla in incididunt nulla elit ea aute in adipisicing officia ullamco qui proident non est laboris commodo deserunt magna deserunt voluptate laborum irure cillum dolor mollit ea cupidatat occaecat.</p>
                        <a class="btn-main fx-slide" href="02_apartment-contact.html"><span>Schedule Visit</span></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <img src="images/misc/s2.webp" class="img-fluid mb-4 w-70 ms-30 wow scaleIn" alt="">
                            <img src="images/misc/s3.webp" class="img-fluid wow scaleIn" alt="">
                        </div>
                        <div class="col-6">
                            <div class="spacer-single sm-hide"></div>
                            <img src="images/misc/s4.webp" class="img-fluid mb-4 wow scaleIn" alt="">
                            <img src="images/misc/s5.webp" class="img-fluid w-70 wow scaleIn" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="section-dark bg-dark text-light">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 relative z-3">
                    <div class="me-lg-3">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Facilities</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Amenities Designed for Your Lifestyle</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="spacer-single spacer-double"></div>
                    <div class="row">
                        <div class="col-md-5 wow fadeInUp" data-wow-delay=".2s">
                            <ul class="ul-check fs-500 text-light">
                                <li>Swimming Pools</li>
                                <li>Fitness Center</li>
                                <li>Rooftop Lounge</li>
                                <li>Community Event Spaces</li>
                                <li>Play Areas</li>
                            </ul>
                        </div>

                        <div class="col-md-5 wow fadeInUp" data-wow-delay=".4s">
                            <ul class="ul-check fs-500 text-light">
                                <li>Tennis and Sports Courts</li>
                                <li>Restaurant and Café</li>
                                <li>Business Center</li>
                                <li>Sauna and Spa</li>
                                <li>Parking Facilities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="section-dark p-0">
        <div class="relative">
            <img src="images/background/1.webp" class="w-100" alt="">
            <div class="de-dot mt-20" style="left:61%; top:10%">
                <div class="d-content text-light">
                    <h5>Office Area</h5>
                    Eiusmod quis est do id excepteur ut mollit cupidatat quis consequat cillum aute culpa aliqua ut dolor.
                </div>
            </div>
            <div class="de-dot mt-20" style="left:68%; top:77%">
                <div class="d-content text-light">
                    <h5>City Garden</h5>
                    Eiusmod quis est do id excepteur ut mollit cupidatat quis consequat cillum aute culpa aliqua ut dolor.
                </div>
            </div>
            <div class="de-dot mt-20" style="left:30%; top:35%">
                <div class="d-content text-light">
                    <h5>Sports Center</h5>
                    Eiusmod quis est do id excepteur ut mollit cupidatat quis consequat cillum aute culpa aliqua ut dolor.
                </div>
            </div>
            <div class="de-dot mt-20" style="left:4%; top:58%">
                <div class="d-content text-light">
                    <h5>Lake</h5>
                    Eiusmod quis est do id excepteur ut mollit cupidatat quis consequat cillum aute culpa aliqua ut dolor.
                </div>
            </div>
        </div>                
    </section> -->

    <!-- <section class="relative">
        <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Elevated Comfort</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Choose a Room</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/1.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">The Cozy Studio</h3>
                                <div>Size 37 m²</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/2.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">The Nook Alcove</h3>
                                <div>Size 46 m²</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/3.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">The Junior Suite</h3>
                                <div>Size 60 m²</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/4.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">The Urban Retreat</h3>
                                <div>Size 93 m²</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/5.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">The Family Haven</h3>
                                <div>Size 139 m²</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/6.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">The Penthouse Oasis</h3>
                                <div>Size 186 m²</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-dark section-dark text-light relative no-top no-bottom overflow-hidden">
        <div class="container-fluid position-relative half-fluid">
            <div class="container">
                <div class="row gx-5">
                    <!-- Image -->
                    <div class="col-lg-6 position-lg-absolute right-half h-100 overflow-hidden">
                        <div class="image" data-bgimage="url(images/misc/l4.png) center"></div>
                    </div>
                    <!-- Text -->
                    <div class="col-lg-6 relative z-3">
                        <div class="me-lg-5 pe-lg-5 py-5 my-5">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Facilities</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Comfort. Style. Location</h2>
                            <p>Discover modern, light-filled apartments that blend style, comfort, and convenience in every detail. Choose from cozy studios to spacious three-bedrooms, each designed to suit your lifestyle. Enjoy exclusive amenities like rooftop lounges and a fitness center, all in a vibrant city location. Welcome to a community where luxury living meets urban energy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark section-dark text-light  relative no-top no-bottom overflow-hidden">
        <div class="container-fluid position-relative half-fluid">
            <div class="container">
                <div class="row gx-5">
                    <!-- Image -->
                    <div class="col-lg-6 position-lg-absolute left-half h-100 overflow-hidden">
                        <div class="image" data-bgimage="url(images/misc/l5.png) center"></div>
                    </div>
                    <!-- Text -->
                    <div class="col-lg-6 offset-lg-6 relative z-3">
                        <div class="ms-lg-5 ps-lg-5 py-5 my-5">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Facilities</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Live. Laugh. Lounge.</h2>
                            <p>Discover modern, light-filled apartments that blend style, comfort, and convenience in every detail. Choose from cozy studios to spacious three-bedrooms, each designed to suit your lifestyle. Enjoy exclusive amenities like rooftop lounges and a fitness center, all in a vibrant city location. Welcome to a community where luxury living meets urban energy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   

    <section class="text-center pt60 pb50">
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

    <!-- <section class="relative">
        <div class="container relative z-2">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/1.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #1</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/2.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #2</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn h-100" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden h-100">
                            <img src="images/apartment/3.jpg" class="hover-scale-1-1 w-100 h-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #3</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="hover overflow-hidden relative text-light text-center wow zoomIn" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden">
                            <img src="images/apartment/4.jpg" class="hover-scale-1-1 w-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #4</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="hover overflow-hidden relative text-light text-center zoomIn h-100" data-wow-delay=".0s">
                        <div class="wow scaleIn overflow-hidden h-100">
                            <img src="images/apartment/5.jpg" class="hover-scale-1-1 w-100 h-100" alt="">
                        </div>
                        <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                            <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                        </div>
                        <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="mb-0">Property #5</h3>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                    </div>
                </div>
                
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <a class="btn-main fx-slide" href="02_apartment-contact.html"><span>View Properties</span></a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section> -->

    <section class="bg-color-op-1">
        <div class="container relative z-2">
            <div class="row g-4 gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Near by Places</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Highlights Nearby</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="bg-light overflow-hidden pb-0 mb-4 rounded-1 bottom-0 text-center z-index-2 wow scaleIn" data-wow-delay=".0s">
                        <img src="images/facilities-nearby/1.webp" class="w-100 mb-2" alt="">
                        <div class="py-3">
                            <h4 class="no-bottom">Airport</h4>
                            <p class="small mb-1">18 miles</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-light overflow-hidden pb-0 mb-4 rounded-1 bottom-0 text-center z-index-2 wow scaleIn" data-wow-delay=".2s">
                        <img src="images/facilities-nearby/2.webp" class="w-100 mb-2" alt="">
                        <div class="py-3">
                            <h4 class="no-bottom">School</h4>
                            <p class="small mb-1">5 miles</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-light overflow-hidden pb-0 mb-4 rounded-1 bottom-0 text-center z-index-2 wow scaleIn" data-wow-delay=".4s">
                        <img src="images/facilities-nearby/3.webp" class="w-100 mb-2" alt="">
                        <div class="py-3">
                            <h4 class="no-bottom">University</h4>
                            <p class="small mb-1">10 miles</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-light overflow-hidden pb-0 mb-4 rounded-1 bottom-0 text-center z-index-2 wow scaleIn" data-wow-delay=".6s">
                        <img src="images/facilities-nearby/4.webp" class="w-100 mb-2" alt="">
                        <div class="py-3">
                            <h4 class="no-bottom">Shopping Mall</h4>
                            <p class="small mb-1">6 miles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section" class="section-dark relative p-0 text-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a class="d-block hover popup-youtube" href="#">
                        <div class="relative overflow-hidden z-3">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <div class="player circle wow scaleIn"><span></span></div>
                            </div> 
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="images/background/7.webp" class="w-100 hover-scale-1-1" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="abs w-80 bottom-10 z-2 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="fs-120 text-uppercase fs-sm-10vw mb-4 lh-1">Virtual Tour</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="bg-dark section-dark text-light">
        <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Elevated Comfort</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Choose an Unit</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-custom-nav menu-float" data-target="#room-carousel">
                        <a class="btn-next"></a>
                        <a class="btn-prev"></a>                                

                        <div id="room-carousel" class="owl-2-cols-center owl-carousel owl-theme">
                            <div class="item">
                                <div class="hover overflow-hidden relative text-light text-center">
                                    <div class="overflow-hidden">
                                        <img src="images/apartment/1.jpg" class="hover-scale-1-1 w-100" alt="">
                                    </div>
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                                    </div>
                                    <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">The Cozy Studio</h3>
                                            <div>Size 37 m²</div>
                                        </div>
                                    </div>
                                    <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                                </div>
                            </div>
                                                    
                            <div class="item">
                                <div class="hover overflow-hidden relative text-light text-center">
                                    <div class="overflow-hidden">
                                        <img src="images/apartment/2.jpg" class="hover-scale-1-1 w-100" alt="">
                                    </div>
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                                    </div>
                                    <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">The Nook Alcove</h3>
                                            <div>Size 46 m²</div>
                                        </div>
                                    </div>
                                    <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="hover overflow-hidden relative text-light text-center">
                                    <div class="overflow-hidden">
                                        <img src="images/apartment/3.jpg" class="hover-scale-1-1 w-100" alt="">
                                    </div>
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                                    </div>
                                    <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">The Junior Suite</h3>
                                            <div>Size 60 m²</div>
                                        </div>
                                    </div>
                                    <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="hover overflow-hidden relative text-light text-center">
                                    <div class="overflow-hidden">
                                        <img src="images/apartment/4.jpg" class="hover-scale-1-1 w-100" alt="">
                                    </div>
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                                    </div>
                                    <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">The Urban Retreat</h3>
                                            <div>Size 93 m²</div>
                                        </div>
                                    </div>
                                    <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="hover overflow-hidden relative text-light text-center">
                                    <div class="overflow-hidden">
                                        <img src="images/apartment/5.jpg" class="hover-scale-1-1 w-100" alt="">
                                    </div>
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                                    </div>
                                    <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">The Family Haven</h3>
                                            <div>Size 139 m²</div>
                                        </div>
                                    </div>
                                    <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="hover overflow-hidden relative text-light text-center">
                                    <div class="overflow-hidden">
                                        <img src="images/apartment/6.jpg" class="hover-scale-1-1 w-100" alt="">
                                    </div>
                                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <a class="btn-main btn-line fx-slide" href="02_apartment-room-single.html"><span>View Details</span></a>
                                    </div>
                                    <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 p-30 w-100 text-center hover-op-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0">The Penthouse Oasis</h3>
                                            <div>Size 186 m²</div>
                                        </div>
                                    </div>
                                    <div class="gradient-edge-bottom abs w-100 h-40 bottom-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="contact" class="relative">
        <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Contact Us</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Talk to a Sales Agent</h2>
                </div>
            </div>

            <div class="row g-4 gx-5">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="images/agents/1.webp" class="w-60 circle" alt="">

                        <div class="mt-3">
                            <h4 class="mb-0">Emily Rodriguez</h4>
                            <div class="fw-500">(555) 234-5678</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="images/agents/2.webp" class="w-60 circle" alt="">

                        <div class="mt-3">
                            <h4 class="mb-0">Michael Chen</h4>
                            <div class="fw-500">(555) 345-6789</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="images/agents/3.webp" class="w-60 circle" alt="">

                        <div class="mt-3">
                            <h4 class="mb-0">Jessica Patel</h4>
                            <div class="fw-500">(555) 567-8901</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection

@section('page-js')
@endsection