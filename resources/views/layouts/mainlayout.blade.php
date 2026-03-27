<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Devita Properties</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Devita Properites" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/css/swiper.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/css/coloring.css') }}" rel="stylesheet" type="text/css" >
    <!-- custom-css -->
    <link href="{{ asset('/css/swiper-custom-1.css') }}" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="{{ asset('/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" >
    <link id="colors" href="{{ asset('/css/customizer.css') }}" rel="stylesheet" type="text/css" >

    @yield('page-css')
</head>

<body>
    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->
        
        <header class="transparent logo-center">
            <div class="container-fluid px-lg-5 px-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="de-flex">
                            <div class="col-start">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{route('home')}}">Home</a></li>
                                    <li class="menu-item-has-children has-child">
                                        <a class="menu-item" href="">Devita Collections</a><span></span>
                                        <ul>
                                            <li><a class="menu-item" href="">Devita Properties</a></li>
                                            <li><a class="menu-item" href="">Devita Villas</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children has-child">
                                        <a class="menu-item" href="">Communities</a><span></span>
                                        <ul>
                                            <li><a class="menu-item" href="">Community #1</a></li>
                                            <li><a class="menu-item" href="">Community #2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-center">
                                <a href="{{route('home')}}"><img src="images/footer-logo.svg" style="width:110px;" alt="" ></a>
                            </div>
                            <div class="col-end">
                                <ul id="mainmenu" class="mainmenu-end">
                                    <li><a class="menu-item" href="{{route('home')}}">About Us</a></li>
                                    <li><a class="menu-item" href="{{route('home')}}">NEWS</a></li>
                                    <li><a class="menu-item" href="{{route('home')}}">Contact</a></li>
                                    <li><a class="menu-item" href="{{route('login')}}">Member Access</a></li>
                                </ul>
                                <div class="menu_side_area">          
                                    <!-- <a href="#" class="btn-main btn-line bg-blur fx-slide sm-hide"><span>Schedule a Visit</span></a> -->
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('page-content')
    </div>

    <!-- footer begin -->
    <footer class="section-dark">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <img src="images/footer-logo.svg" style="width:170px;" class="w-300px" alt="">
                        <div class="spacer-single"></div>
                        <div class="fs-16">
                            Namibia Street, Bole, Addis Ababa<br>
                            Ethiopia
                        </div>
                    </div>
                </div>                
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-60 id-color icon_phone"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Call Us</h4>
                            <p>Call: +251911422011</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-60 id-color icon_clock"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Opening Hours</h4>
                            <p class="mb-0">Mon to Fri 08:00AM - 05:00PM</p>
                            <p>Saturday 08:00AM - 01:00PM</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-60 id-color icon_mail"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Email Us</h4>
                            <p>contact@devitaproperties.com</p>
                        </div>
                    </div>
                </div>                
            </div>

            <hr>

            
            <div class="row g-4">
                <div class="col-lg-2 col-md-6 mb-sm-30">
                    <div class="justify-content-center">
                        <h4 class="fs-16">
                            About Devita
                        </h4>
                        <a class="fs-12 d-block white-link">Our Story / Mission</a>
                        <a class="fs-12 d-block white-link">Leadership Team</a>
                        <a class="fs-12 d-block white-link">Careers / Work With Us</a>
                        <a class="fs-12 d-block white-link">Awards and Recognition</a>
                        <a class="fs-12 d-block white-link">Investor Relations</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-sm-30">
                    <div class="justify-content-center">
                        <h4 class="fs-16">
                            Communities
                        </h4>
                        <a class="fs-12 d-block white-link">Studio Apartments</a>
                        <a class="fs-12 d-block white-link">Villas for Sale</a>
                        <a class="fs-12 d-block white-link">Luxury Homes</a>
                        <a class="fs-12 d-block white-link">Investment Properties</a>
                        <a class="fs-12 d-block white-link">Property Locations</a>
                        <a class="fs-12 d-block white-link">View All Projects</a>
                        <a class="fs-12 d-block white-link">Completed Projects</a>
                        <a class="fs-12 d-block white-link">Upcoming Developments</a>
                        <a class="fs-12 d-block white-link">Master Plans</a>
                        <a class="fs-12 d-block white-link">Neighborhood Guides</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-sm-30">
                    <div class="justify-content-center">
                        <h4 class="fs-16">
                            Latest Launches
                        </h4>
                        <a class="fs-12 d-block white-link">Newest Properties Available</a>
                        <a class="fs-12 d-block white-link">Pre-Registration for Future Launches</a>
                        <a class="fs-12 d-block white-link">Special Offers</a>
                        <a class="fs-12 d-block white-link">Virtual Tours</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="justify-content-center">
                        <h4 class="fs-16">
                            Media Center
                        </h4>
                        <a class="fs-12 d-block white-link">Press Releases</a>
                        <a class="fs-12 d-block white-link">News and Announcements</a>
                        <a class="fs-12 d-block white-link">Image Gallery / Downloads</a>
                        <a class="fs-12 d-block white-link">In the News / Testimonials</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="justify-content-center">
                        <h4 class="fs-16">
                            Help & Center
                        </h4>
                        <a class="fs-12 d-block white-link">Contact Us</a>
                        <a class="fs-12 d-block white-link">FAQs (Frequently Asked Questions)</a>
                        <a class="fs-12 d-block white-link">Customer Service Portal</a>
                        <a class="fs-12 d-block white-link">Warranty & Maintenance</a>
                        <a class="fs-12 d-block white-link">Submit a Query</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        Copyright 2026 - Devita Properties
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="social-icons mb-sm-30 text-center">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <div class="connect-icons-ctrl" style="z-index: 1000;">
        <a href="#email-popup" class="connect-icons">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25">
                <title>Register your interest</title>
                <g id="email">
                    <path d="M23.89,3.59V19.71a2.18,2.18,0,0,1-2,2.3h-18a2.18,2.18,0,0,1-2-2.3V3.59" style="fill:none;stroke:#333333;stroke-linecap:round;stroke-linejoin:round"></path>
                    <path d="M23.89,3.59,14.07,15a1.8,1.8,0,0,1-2.35,0L1.89,3.59Z" style="fill:none;stroke:#333333;stroke-linecap:round;stroke-linejoin:round"></path>
                    <line x1="1.89" y1="3.59" x2="23.89" y2="3.59" style="fill:none;stroke:#333333;stroke-linecap:round;stroke-linejoin:round"></line>
                </g>
            </svg>
            Enquire
        </a>
        
        <a href="tel:+251911422011" class="connect-icons">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25">
                <title>Call us</title>
                <path id="handset" d="M6.63,15.05l.06.1.07.11C11,22,18.33,25.89,19.69,23.84l1.71-2.95a.78.78,0,0,0-.07-.83h0c-.24-.43-.46-.44-1.71-1.19-.65-.44-1.34-.92-1.79-1.28a1.23,1.23,0,0,0-1.45-.05l-.7.63a1.41,1.41,0,0,1-.91.33c-1,0-3-2.5-4-4-.3-.43-.54-.8-.68-1s-.37-.6-.63-1C8.5,10.78,7.13,8,7.62,7.24A1.17,1.17,0,0,1,8.4,6.7l.95-.24A1,1,0,0,0,10,5.32C9.91,4.77,9.81,4,9.72,3.25c-.08-1.35,0-1.53-.27-1.93h0A1,1,0,0,0,8.67.85L5,.63C2.33.65,2.39,8.35,6.63,15.05Z" style="fill:none;stroke:#333333;stroke-miterlimit:10"></path>
            </svg>
            CALL
        </a>
        
        <a class="connect-icons chat-button newfeature_deact" id="chatbot-popup" href="#" onclick="clickChatbubble(); return false;">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25">
                <title>Chat with us</title>
                <g id="chat">
                    <path d="M8.39,9.3h-5a2,2,0,0,0-2,2v7a2,2,0,0,0,2,2h9l3,3v-8" style="fill:none;stroke:#333333;stroke-linecap:round;stroke-linejoin:round"></path>
                    <path d="M22.39,13.3h-9l-3,3V4.3a2,2,0,0,1,2-2h10a2,2,0,0,1,2,2v7A2,2,0,0,1,22.39,13.3Z" style="fill:none;stroke:#333333;stroke-linecap:round;stroke-linejoin:round"></path>
                    <circle cx="14.39" cy="7.3" r="0.5" style="fill:#333333"></circle>
                    <circle cx="17.39" cy="7.3" r="0.5" style="fill:#333333"></circle>
                    <circle cx="20.39" cy="7.3" r="0.5" style="fill:#333333"></circle>
                </g>
            </svg>
            CHAT
            <!-- <div id="kenytChatBubble" class="style-embed position-right" style="color: rgb(255, 255, 255);">
                <div class="kchannels-container k-d-none">
                    <div class="kstrip"></div>
                    <div class="kchannel-group">    
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+97144540823&amp;text=" id="kenytWhatsappBubble" class="kchannel-icon">
                            <img src="https://www.kenyt.ai/botapp/api/botsetup/getimage?imagetype=whatsappbubble-icon&amp;botid=291923091" alt="whatsapp channel icon">
                            <span class="khighlight-background" style="position: relative; left: 0px; transform: none; margin: auto; background-color: rgb(0, 217, 95);"></span>
                        </a>
                    </div>
                </div>

                <div class="kpopup-container ksecondary-bg ktext-color k-d-none k-hide" style="animation-duration: 2s; color: rgb(0, 0, 0); background-image: linear-gradient(90deg, rgb(4, 4, 4), rgb(76, 76, 76));">
                    <div class="kpopup-text" style="min-width: 75px;"><p>Hello There 👋, chat with us!</p></div>
                </div>

                <div class="kbubble-container kprimary-bg" style="background-color: rgb(0, 0, 0);">
                    <div class="img-container">
                    <img src="https://www.kenyt.ai/botapp/api/botsetup/getimage?imagetype=chatbubble-icon&amp;botid=291923091" alt="Chatbot avatar"></div>
                </div>

                <div class="kconnectors-container kprimary-bg kprimary-border k-d-none" style="background-color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
                    <div id="krazorpay-btn" class="krazorpay-btn k-hide connector"></div>
                    <div id="kcashfree-btn" class="kcashfree-btn k-hide connector"></div>
                </div>

            </div> -->
        </a>
        
        <a href="https://api.whatsapp.com/send?phone=+251911410121&amp;text=Hi" class="connect-icons" target="_blank">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26 25" style="enable-background:new 0 0 26 25;" xml:space="preserve">
                <style type="text/css">.st0{fill:#333333;}</style>
                <path class="st0" d="M20.7,4.8c-2.1-2.1-4.8-3.2-7.7-3.2C7,1.7,2.2,6.5,2.2,12.5c0,1.8,0.4,3.5,1.3,5.1l-1.2,5c-0.1,0.2,0,0.4,0.2,0.6c0.2,0.2,0.4,0.2,0.6,0.2l5-1.2c1.6,0.8,3.3,1.3,5.1,1.3c2.9,0,5.6-1.1,7.7-3.2c2.1-2.1,3.2-4.8,3.2-7.7S22.7,6.9,20.7,4.8z M13,22.1c-1.6,0-3.2-0.4-4.7-1.2c-0.1-0.1-0.3-0.1-0.5-0.1l-4.2,1l1-4.2c0-0.2,0-0.3-0.1-0.5c-0.8-1.4-1.2-3-1.2-4.7c0-5.3,4.3-9.6,9.6-9.6s9.6,4.3,9.6,9.6S18.3,22.1,13,22.1z"></path>
                <path class="st0" d="M18.7,14.4c-0.4-0.4-0.9-0.8-1.4-1.1c-0.8-0.4-1.6-0.3-2.1,0.3c-0.3,0.3-0.6,0.8-0.8,1.1c-0.5-0.1-1.6-1-2.1-1.4c-0.4-0.4-1.3-1.5-1.4-2.1c0.3-0.2,0.8-0.6,1.1-0.8c0.6-0.6,0.7-1.3,0.3-2.1c-0.3-0.5-0.7-1-1.1-1.4C10.2,5.9,8.9,5.8,7.8,7c-0.9,0.9-1.6,2.4-0.4,5.1c0.7,1.6,1.9,3,2.5,3.6l0,0c0.6,0.6,2,1.7,3.6,2.5c1.8,0.8,3.7,1,5.1-0.4C19.7,16.6,19.6,15.3,18.7,14.4z M17.6,16.9c-0.8,0.8-2.1,0.9-3.7,0.1c-1.4-0.6-2.7-1.7-3.2-2.2c-0.5-0.5-1.6-1.8-2.2-3.2C7.8,9.9,7.8,8.7,8.6,7.9c0.5-0.5,1-0.7,1.5-0.2l0,0c1.1,1.1,1,1.5,0.8,1.8c-0.2,0.2-0.9,0.7-1.1,0.9c-0.5,0.5-0.4,1.3,0.3,2.3c0.4,0.6,1,1.2,1.2,1.5l0,0c0.3,0.3,0.9,0.8,1.5,1.2c1,0.7,1.8,0.8,2.3,0.3c0.2-0.2,0.7-0.9,0.9-1.1c0.2-0.2,0.3-0.2,0.7-0.1c0.4,0.2,0.9,0.6,1.1,0.9l0,0C18.3,15.8,18.1,16.4,17.6,16.9z"></path>
            </svg>
            WhatsApp
        </a>
        
        <!-- <a href="https://pay.ellingtonproperties.ae" class="connect-icons" target="_blank" style="padding: 0;margin-bottom: -23px;"> -->
        <a href="https://cbeib.cbe.com.et" class="connect-icons" target="_blank" style="padding: 0;margin-bottom: -23px;">
            <table width="100%" align="center">
                <tbody>
                    <tr>
                        <td style=" text-align: center; padding: 10.5px 0px; border:0px;"> PAY <br> NOW</td>
                    </tr>
                </tbody>
            </table>
        </a>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('/js/vendors.js') }}"></script>
    <script src="{{ asset('/js/designesia.js') }}"></script>
    <script src="{{ asset('/js/swiper.js') }}"></script>
    <script src="{{ asset('/js/custom-swiper-2.js') }}"></script>
</body>
</html>