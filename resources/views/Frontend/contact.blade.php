@extends('layouts.frontend')
@section('title') Contact Us | Nextus global services @endsection
@section('content')

<style>
    .appointment-section {
    position: relative;
    padding: 0px 0px;
}
</style>

<section class="page-title style-two" style="background-image:url(/frontend/images/background/9.jpg)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>

   <section class="contact-info-section">
    <div class="auto-container">
       <!-- Get in Touch Section -->
<div class="sec-title centered">
    <div class="title">Get in Touch</div>
    <p>This is a short description elaborating the reason that you have mentioned above. <br> Tell them why you are good!</p>

    <!-- Social Media Icons -->
<div class="social-icons" style="text-align: center; margin-top: 20px;">
    <a href="#" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="#" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="#" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
        <i class="fab fa-youtube"></i>
    </a>
    <a href="#" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
        <i class="fab fa-linkedin-in"></i>
    </a>
</div>
</div>





        <div class="row clearfix">

            <!-- Location Block -->
            <div class="hours-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="flaticon-location-pin"></span> <!-- Replace with your icon class -->
                    </div>
                </br>
                    <h2>Our Location</h2>
                    <div class="text">
                        4th Floor, Gate no 2, Soman Sun City, Bhoirwadi, opp Skydeck Hotel, Kalyan (W) 421301.
                    </div>
                </div>
            </div>

            <!-- Phone Block -->
            <div class="hours-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="flaticon-technology-2"></span> <!-- Replace with your icon class -->
                    </div>
                    </br>
                    <h2>Call Us On</h2>
                    <div class="text">
                        <a href="tel:+918956666659">+91 895 666 6659</a>
                    </div>
                    </br>
                    </br>
                </div>
            </div>

            <!-- Email Block -->
            <div class="hours-block col-md-4 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="flaticon-web"></span> <!-- Replace with your icon class -->
                    </div>
                    </br>
                    <h2>Email us</h2>
                    <div class="text">
                        <a href="mailto:hr@nextusglobalservices.com">hr@nextusglobalservices.com</a>
                    </div>
                    </br>
                </br>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .icon-box {
    font-size: 40px;
    color: #45a9b3;
    margin-bottom: 10px;
}
.inner-box {
    text-align: center;
    padding: 30px 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

</style>

<section style="background:#fff; padding:40px 20px; ">
  <div style="max-width: 650px; margin: 0 auto; border: 1px solid #e3e3e3; padding: 30px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
    <h2 style="text-align:center; font-weight: 700; font-size: 18px; text-transform: uppercase; margin-bottom: 8px; color: #222;">SEND US A MESSAGE</h2>
    <p style="text-align:center; font-size: 13px; color: #888; margin-bottom: 25px;">We would love to hear from you!</p>
    <form method="post" action="https://t.commonsupport.com/ikon/blog.html" style="display:flex; flex-direction: column; gap: 15px;">
      
      <input type="text" name="firstname" placeholder="Your Name*" required
             style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;"/>
      
      <input type="email" name="email" placeholder="Your Email" required
             style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;"/>
      
      <input type="text" name="phone" placeholder="Subject*" required
             style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;"/>
      
      <textarea name="message" placeholder="Your Message..."
                style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; min-height: 100px; resize: vertical;"></textarea>
      
      <div class="form-group col-md-12 col-sm-12 col-xs-12" style="text-align: center">
                                            <button type="submit" class="theme-btn btn-style-two">Submit</button>
                                        </div>  
    </form>
  </div>
</section>


@endsection