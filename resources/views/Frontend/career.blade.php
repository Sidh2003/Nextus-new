@extends('layouts.frontend')
@section('title') Career | Nextus global services @endsection
@section('content')
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
                                            <h2>Lets Work</h2>
                                            <div class="title">Together</div>
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
                                <form method="post" action="https://t.commonsupport.com/ikon/blog.html">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="firstname" value="" placeholder="Name*" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" value="" placeholder="Email*" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Phone*" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <select class="custom-select-box">
                                                <option>Select Function</option>
                                                <option>Service One</option>
                                                <option>Service Two</option>
                                                <option>Service Three</option>
                                                <option>Service Four</option>
                                            </select>
                                        </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" value="" placeholder="Portfolio Link" >
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Your Location*" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="message" placeholder="Message (Optional)..."></textarea>
                                        </div>

                                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label style="display: block; margin-bottom: 5px; font-weight: 600;">
                    Upload Resume* 
                  </label>
                  <label for="portfolio-upload" 
                         style="display: block; border: 2px dashed #aaa; padding: 20px; text-align: center; color: #666; cursor: pointer; border-radius: 5px; font-family: Arial, sans-serif;">
                    Drag & Drop or Click to Upload
                  </label>
                  <input type="file" id="portfolio-upload" name="portfolio" style="display: none;">
                </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label style="display: block; margin-bottom: 5px; font-weight: 600;">
                    Upload Portfolio* (Optional)
                  </label>
                  <label for="portfolio-upload" 
                         style="display: block; border: 2px dashed #aaa; padding: 20px; text-align: center; color: #666; cursor: pointer; border-radius: 5px; font-family: Arial, sans-serif;">
                    Drag & Drop or Click to Upload
                  </label>
                  <input type="file" id="portfolio-upload" name="portfolio" style="display: none;">
                </div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
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
@endsection