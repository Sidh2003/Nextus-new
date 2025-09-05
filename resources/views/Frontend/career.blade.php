@extends('layouts.frontend')
@section('title')
    Career | Nextus global services
@endsection
@section('content')

<style>
    .sec-title .title {
    position: relative;
    font-size: 30px;
    color: #45a9b3;
    font-weight: 600;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
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

    <section class="page-title style-two" style="background-image:url(/frontend/images/background/9.jpg)">
        <div class="auto-container">
            <h1>Careers</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Careers</li>
            </ul>
        </div>
    </section>


    <section class="appointment-section">
        <div class="auto-container">
            <div class="sec-title">
            	<div class="title text-center">Grow With Us</div>
            </br>
                <p class="text-center">At Nextus Global, ideas are meant to be shared and brought to life to make an impact. It’s where curiosity gets noticed, efforts turned into opportunity. You’ll work with people who care about doing work, asking the right questions, and getting better together. Be it your first role or your next step, there’s space to do something and to enjoy the process while you’re at it.</p>
                <p class="text-center">The work is fast-paced, and so is the energy around it. Ideas move quickly, feedback is thoughtful, and your input is always part of the process. We thrive on teamwork, support, and the kind of creative energy that makes work feel a little less like work. From small wins to shared goals, there’s always something to break the usual routine. Often, the most meaningful conversations come from the moments</p>
            </div>
            <div class="inner-container">
                <div class="clearfix">

                    <!--Image Column-->
                    <div class="image-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="/frontend/images/resource/appointment.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <div class="icon-box">
                                                <span class="icon flaticon-manager"></span>
                                            </div>
                                            <h2>Let's Work</h2>
                                            <div class="title" style="font-size: 30px;">Together</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2> </br> </h2>
                            <div class="text"></div>
                            <!--Default Form-->
                            <div class="default-form">
                                <form id="career_form" name="career_form" action="{{ route('career.enquiry.store') }}"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="full_name" value="{{ old('full_name') }}"
                                                placeholder="Name*">
                                            <div class="field_error" id="full_name-error" style="color:#f33838">
                                                @error('full_name')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                placeholder="Email*">
                                            <div class="field_error" id="email-error" style="color:#f33838">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="mobile" value="{{ old('mobile') }}"
                                                placeholder="Phone*">
                                            <div class="field_error" id="mobile-error" style="color:#f33838">
                                                @error('mobile')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <select class="custom-select-box" name="function">
                                                <option value="">Select Function</option>
                                                <option value="Customer Support/Service"
                                                    {{ old('function') == 'Customer Support/Service' ? 'selected' : '' }}>Customer Support/Service
                                                </option>
                                                <option value="Operations"
                                                    {{ old('function') == 'Operations' ? 'selected' : '' }}>Operations
                                                </option>
                                                <option value="Human Resources (HR)"
                                                    {{ old('function') == 'Human Resources (HR)' ? 'selected' : '' }}>Human Resources (HR)
                                                </option>
                                                <option value="Digital Marketing"
                                                    {{ old('function') == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing
                                                </option>
                                                <option value="IT/Technology"
                                                    {{ old('function') == 'IT/Technology' ? 'selected' : '' }}>IT/Technology
                                                </option>
                                                <option value="Finance & Accounting"
                                                    {{ old('function') == 'Finance & Accounting' ? 'selected' : '' }}>Finance & Accounting
                                                </option>
                                                <option value="Legal & Compliance"
                                                    {{ old('function') == 'Legal & Compliance' ? 'selected' : '' }}>Legal & Compliance
                                                </option>
                                                <option value="Admin & Support"
                                                    {{ old('function') == 'Admin & Support' ? 'selected' : '' }}>Admin & Support
                                                </option>
                                                <option value="Business Strategy & Development"
                                                    {{ old('function') == 'Business Strategy & Development' ? 'selected' : '' }}>Business Strategy & Development
                                                </option>
                                            </select>
                                            <div class="field_error" id="function-error" style="color:#f33838">
                                                @error('function')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="portfolio_link" value="{{ old('portfolio_link') }}"
                                                placeholder="Portfolio Link">
                                            <div class="field_error" id="portfolio_link-error" style="color:#f33838">
                                                @error('portfolio_link')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="location" value="{{ old('location') }}"
                                                placeholder="Your Location*">
                                            <div class="field_error" id="location-error" style="color:#f33838">
                                                @error('location')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="message" placeholder="Message (Optional)...">{{ old('message') }}</textarea>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label style="display: block; margin-bottom: 5px; font-weight: 600;">
                                                Upload Resume*
                                            </label>
                                            <label for="upload_resume"
                                                style="display: block; border: 2px dashed #45a9ba; padding: 20px; text-align: center; color: #45a9ba; cursor: pointer; border-radius: 5px; font-family: Arial, sans-serif;">
                                                Click to Upload
                                            </label>
                                            <input type="file" id="upload_resume" name="upload_resume"
                                                style="display: none;">
                                            <div class="field_error" id="upload_resume-error" style="color:#f33838">
                                                @error('upload_resume')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label style="display: block; margin-bottom: 5px; font-weight: 600;">
                                                Upload Portfolio* (Optional)
                                            </label>
                                            <label for="upload_portfolio"
                                                style="display: block; border: 2px dashed #45a9ba; padding: 20px; text-align: center; color: #45a9ba; cursor: pointer; border-radius: 5px; font-family: Arial, sans-serif;">
                                                Click to Upload
                                            </label>
                                            <input type="file" id="upload_portfolio" name="upload_portfolio"
                                                style="display: none;">
                                            <div class="field_error" id="upload_portfolio-error" style="color:#f33838">
                                                @error('upload_portfolio')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" class="theme-btn btn-style-two">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!--End Default Form-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#career_form').submit(function(e) {
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
                        $('#career_form_btn').attr('disabled', true).hide();
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
                        $('#career_form_btn').attr('disabled', false).show();
                        $('#form_loader').hide();
                    }
                });
            });
        });
    </script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const resumeInput = document.getElementById('upload_resume');
        const portfolioInput = document.getElementById('upload_portfolio');

        const resumeLabel = document.querySelector('label[for="upload_resume"]');
        const portfolioLabel = document.querySelector('label[for="upload_portfolio"]');

        resumeInput.addEventListener('change', function () {
            const fileName = resumeInput.files.length > 0 ? resumeInput.files[0].name : "Click to Upload";
            resumeLabel.textContent = fileName;
        });

        portfolioInput.addEventListener('change', function () {
            const fileName = portfolioInput.files.length > 0 ? portfolioInput.files[0].name : "Click to Upload";
            portfolioLabel.textContent = fileName;
        });
    });
</script>


@endsection
