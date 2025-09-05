@extends('layouts.frontend')
@section('title') Contact Us | Nextus global services @endsection
@section('content')

<style>
    .appointment-section {
    position: relative;
    padding: 0px 0px;
}
 .sec-title .title {
    position: relative;
    font-size: 30px;
    color: #45a9b3;
    font-weight: 600;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.contact-info-section {
    position: relative;
    padding: 80px 0px 0px;
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
<div class="sec-title ">
    <div class="title text-center">Get in Touch</div>
</br>
    <p class="text-center">This is a short description elaborating the reason that you have mentioned above. <br> Tell them why you are good!</p>

    <!-- Social Media Icons -->
<div class="social-icons" style="text-align: center; margin-top: 20px;">
    <a href="https://www.facebook.com/nextus.global.services" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com/nextus.in/" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.linkedin.com/company/nextus-global-services-pvt-ltd/" style="margin: 0 10px; color: #55bfc5; font-size: 24px;">
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
input[type="text"],
input[type="email"],
input[type="file"],
input[type="tel"],
textarea,
select {
    color: #000 !important; /* Force black text */
}


</style>

<section style="background:#fff; padding:40px 20px;">
  <div class="container">
    <div class="row" style="display: flex; min-height: 500px;">

      <!-- Left Side: Map -->
      <div class="col-md-6 d-flex" style="padding: 0;">
        <div style="flex: 1; height: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1); width: 100%;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.772273508725!2d73.14041397425633!3d19.248754046528433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be797af0d62892b%3A0x39baafde300fec67!2sNextus%20Global%20Services%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1757103284206!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Right Side: Contact Form -->
      <div class="col-md-6 d-flex" style="padding: 0 15px;">
        <div style="flex: 1; height: 100%; border: 1px solid #e3e3e3; padding: 30px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); display: flex; flex-direction: column; justify-content: center;">

          <!-- Title -->
          <h2 style="text-align:center; font-weight:700; font-size:18px; text-transform:uppercase; margin-bottom:8px; color:#222;">
            SEND US A MESSAGE
          </h2>
          <p style="text-align:center; font-size:13px; color:#888; margin-bottom:25px;">
            We would love to hear from you!
          </p>

          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" action="{{ route('contact.enquiry.store') }}"
                enctype="multipart/form-data" method="POST">
            @csrf

            <!-- Full Name -->
            <div style="margin-bottom: 15px;">
              <input type="text" name="full_name" id="full_name" placeholder="Your Name*" 
                     style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
              <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
            </div>

            <!-- Email -->
            <div style="margin-bottom: 15px;">
              <input type="email" name="email" id="email" placeholder="Your Email" 
                     style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
              <div class="field_error" id="email-error" style="color:#ff0000;"></div>
            </div>

            <!-- Subject -->
            <div style="margin-bottom: 15px;">
              <input type="text" name="subject" id="subject" placeholder="Subject*" 
                     style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
              <div class="field_error" id="subject-error" style="color:#ff0000;"></div>
            </div>

            <!-- Message -->
            <div style="margin-bottom: 20px;">
              <textarea name="message" id="message" placeholder="Your Message..."
                        style="padding: 10px 15px; font-size: 14px; border: 1.5px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; min-height: 100px; resize: vertical;"></textarea>
            </div>

            <!-- Submit Button -->
            <div style="text-align: center;">
              <button type="submit" 
                      style="background-color: #3ab3b3; border: none; color: #fff; font-weight: bold; padding: 12px 30px; border-radius: 5px; font-size: 14px; cursor: pointer;">
                SUBMIT
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</section>






  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contact_form').submit(function(e) {
                e.preventDefault();
                $('div[id$="-error"]').empty();

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('#contact_form_btn').attr('disabled', true).hide();
                        $('#form_loader').show();
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message || 'Message sent successfully.', '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        } else {
                            toastr.error(data.message || 'Something went wrong.', '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                $('#' + key + '-error').html(errorText);
                            });

                            const firstError = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: $('#' + firstError + '-error').offset().top -
                                    200
                            }, 500);
                        }
                    },
                    complete: function() {
                        $('#contact_form_btn').attr('disabled', false).show();
                        $('#form_loader').hide();
                    }
                });
            });
        });
    </script>

@endsection