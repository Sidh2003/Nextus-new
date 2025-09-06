@extends('layouts.frontend')
@section('title')
    About US | Nextus global services
@endsection
@section('content')
    <style>
        .services-section-three {
            position: relative;
            padding: 0px 0px 60px;
        }

        .sec-title h2 {
            position: relative;
            font-size: 28px;
            font-weight: 700;
            color: #45a9ba;
            line-height: 1.3em;
            text-transform: uppercase;
        }

        .services-block .inner-box .icon-box {
            position: relative;
            font-size: 45px;
            line-height: 1em;
            color: #45a9ba;
            font-weight: 300;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
        }

        .blocks-column {
            position: relative;
            padding-top: 0px;
            margin-top: 50px;
            padding-bottom: 10px;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .sec-title {
            position: relative;
            margin-bottom: 40px;
            padding-bottom: 18px;
            border-bottom: none;
        }
    </style>

    <section class="page-title style-two" style="background-image:url(/frontend/images/background/9.jpg)">
        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>

    <section class="consulting-section-two">

        <div class="inner-container">


            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12 ">
                <div class="inner-column">
                    <h2 style="color:#45a9b3; font-size: 38px;">Who Are We?</h2>
                    <div class="text"><strong>Nextus Global</strong> is a professional services firm that produces
                        business results that transform industries and shape the future.</div>
                    <div class="text">We work with the world’s most innovative companies to transform their biggest
                        challenges into resilience, opportunities, and growth – from building hyper-connected supply chains
                        to revolutionizing customer and employee experiences.</div>
                    <div class="text">Our team brings together deep industry knowledge, advanced technologies, and a
                        passion for innovation to deliver meaningful, measurable impact. At Nextus Global, we don’t just
                        solve problems we create forward-looking strategies that help our clients stay ahead in a rapidly
                        evolving digital landscape.</div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="/frontend/my_img/about-1.jpg" alt="about-img" style="height:400px;" width="350px" />
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>




    <section class="services-section-five">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Title Column-->
                <div class="title-column column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="title">Hence, we offer</div>
                        <div class="text">Security is paramount to our business. We ensure that every client experiences
                            total reliability and assurance with us</div>
                        <div class="image-container text-center">
                            <img src="/frontend/my_img/image-768x559.png" alt="Our Services Overview"
                                class="responsive-img">
                        </div>
                    </div>
                </div>




                <!--Services Block Six-->
                <div class="column services-block-six col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-3d-printing-software"></span>
                        </div>
                        <div class="lower-box">
                            <h3>Robust CRM integration capabilities</h3>
                        </div>
                    </div>
                </div>

                <!--Services Block Six-->
                <div class="column services-block-six col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-employee"></span>
                        </div>
                        <div class="lower-box">
                            <h3>Multi-Channel/Omnichannel support</h3>
                        </div>
                    </div>
                </div>

                <!--Services Block Six-->
                <div class="column services-block-six col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-travel-guide"></span>
                        </div>
                        <div class="lower-box">
                            <h3>Compliant service solutions</h3>
                        </div>
                    </div>
                </div>

                <!--Services Block Six-->
                <div class="column services-block-six col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-medal"></span>
                        </div>
                        <div class="lower-box">
                            <h3>High uptime reliability</h3>
                        </div>
                    </div>
                </div>

                <div class="column services-block-six col-md-8 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-medal"></span>
                        </div>
                        <div class="lower-box">
                            <h3>Powerful and customizable security options</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="company-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered" style=" color: #45a9ba !important; ">

                <h2 style=" color: #45a9ba !important;">About Our Company</h2>
            </div>

            <!--Blocks Column-->
            <div class="blocks-column" style="background-image:url(images/background/1.jpg)">
                <!--Blocks Columns-->
                <div class="row clearfix">

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-headset"></span>
                            </div>
                            <h3><a href="#0">Customer Services</a></h3>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-network-wired"></span>
                            </div>
                            <h3><a href="#0">BPO Services</a></h3>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-user-cog"></span>
                            </div>
                            <h3><a href="#0">Back-Office Support</a></h3>
                        </div>
                    </div>

                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-phone-volume"></span>
                            </div>
                            <h3><a href="#0">Inbound & Outbound</a></h3>
                        </div>
                    </div>

                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-code"></span>
                            </div>
                            <h3><a href="#0">Web Design & Development</a></h3>
                        </div>
                    </div>

                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-bullhorn"></span>
                            </div>
                            <h3><a href="#0">Digital Marketing Services</a></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .services-section-three .services-block-four .image {
            width: 268px;
            height: 181px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f9f9f9;
            /* fallback */
        }

        .services-section-three .services-block-four .image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            display: block;
        }

        /* Tablet (below 992px) */
        @media (max-width: 991px) {
            .services-section-three .services-block-four .image {
                width: 200px;
                height: 140px;
            }
        }

        /* Mobile (below 576px) */
        @media (max-width: 575px) {
            .services-section-three .services-block-four .image {
                width: 100%;
                /* full width of container */
                height: auto;
                /* maintain aspect ratio */
                max-width: 100%;
                /* prevent overflow */
            }

            .services-section-three .services-block-four .image img {
                width: 100%;
                height: auto;
                object-fit: contain;
            }
        }
    </style>

    <section class="services-section-three">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2 style="font-size: 28px; font-weight: 700;">Our Mission Value</h2>
            </div>

            <div class="row clearfix">

                <!--Services Block Four-->
                <div class="services-block-four col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/frontend/my_img/about-s-1.jpg" alt="" />
                            <div class="icon-box">
                                <span class="icon fas fa-check-circle"></span>
                            </div>
                            <div class="overlay-box">
                                <div class="overlay-icon">
                                    <span class="icon fas fa-check-circle"></span>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#0">Quality</a></h3>
                            <div class="text">Our business practices, the facilities we run, & people we hire, & the
                                technology we use are cutting-edge and best-in-class.</div>
                        </div>
                    </div>
                </div>

                <!--Services Block Four-->
                <div class="services-block-four col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/frontend/my_img/about-s-2.jpg" alt="" />
                            <div class="icon-box">
                                <span class="icon fas fa-users"></span>
                            </div>
                            <div class="overlay-box">
                                <div class="overlay-icon">
                                    <span class="icon fas fa-users"></span>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#0">Clients</a></h3>
                            <div class="text">The essence of our business is meeting our client's needs and assisting
                                them in reaching their goals.</div>
                        </div>
                    </div>
                </div>

                <!--Services Block Four-->
                <div class="services-block-four col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/frontend/my_img/about-s-3.jpg" alt="" />
                            <div class="icon-box">
                                <span class="icon fas fa-handshake"></span>
                            </div>
                            <div class="overlay-box">
                                <div class="overlay-icon">
                                    <span class="icon fas fa-handshake"></span>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#0">Community</a></h3>
                            <div class="text">We prioritize positive impact beyond profits, making thoughtful decisions
                                that benefit our community and environment.</div>
                        </div>
                    </div>
                </div>

                <!--Services Block Four-->
                <div class="services-block-four col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/frontend/my_img/about-s-4.jpg" alt="" />
                            <div class="icon-box">
                                <span class="icon fas fa-briefcase"></span>
                            </div>
                            <div class="overlay-box">
                                <div class="overlay-icon">
                                    <span class="icon fas fa-briefcase"></span>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#0">Business Services</a></h3>
                            <div class="text">Mistaken idea of denouncing pleasure & praising pain was born and will
                                gives complete of the system.</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <!--Image Column-->
            <div class="image-column" style="background-image:url(/frontend/images/resource/image-1.png);">
                <figure class="image-box"><img src="/frontend/images/resource/image-1.png" alt=""></figure>
            </div>
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <div class="title">Our Vision</div>
                        <h2 style="color: #303030;">We are dedicated Team of Consultants</h2>

                    </div>
                    <div class="text">
                        <p>We harness our people’s strength, expertise, and passion for making a difference in our
                            communities.</p>
                        <p><strong> Nextus Global</strong> embraces the diversity of thought, experience, and background
                            skills to deliver lasting results for our clients and communities.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
