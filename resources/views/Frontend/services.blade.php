@extends('layouts.frontend')
@section('title') Our Services | Nextus global services @endsection
@section('content')

<style>
    .company-section {
  margin-top: 0rem; /* equivalent of mt-5 */

  
}

.company-section .title-content-column .title-column-inner {
    position: relative;
    padding-left: 0px;
}


</style>
 <section class="page-title style-two" style="background-image:url(/frontend/images/background/9.jpg)">
    	<div class="auto-container">
        	<h1>We serve you better.</h1>
           <p style="color: white;">We transform bold ideas into Remarkable business solutions for a technologically-driven future.</p>

            <ul class="page-breadcrumb">
            	<li><a href="/">Home</a></li>
                <li>Our Services</li>
            </ul>
        </div>
    </section>


<section class="company-section" style="padding: 40px 20px; background: #fff;">
  <div class="auto-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px;">
    <!-- Left Content -->
    <div style="flex: 1 1 50%; min-width: 320px;">
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px; color: #45a9b3;">Customer Support Services</h2>
      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        As the world becomes more digital, there is a greater need than ever for businesses to establish genuine human connections with their customers. At <strong>Nexus Global Services</strong>, we believe every customer interaction is an opportunity to build your brand. Our support networks are integrated with aspects of data and experience to provide the customer with an intelligent, effective, and low-effort solution.
      </p>

      <p style="font-weight: bold; padding: 10px 15px; border-radius: 5px; display: inline-block; margin-bottom: 20px;">
        Support options include:
      </p>

      <ul style="list-style: none; padding: 0; margin: 0 0 30px 0; display: grid; grid-template-columns: repeat(2, minmax(140px, 1fr)); gap: 15px;">
        <li style="display: flex; align-items: center; gap: 10px;">
          <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-comment" aria-hidden="true"></i>
          </div>
          <strong>Chat</strong>
        </li>
        <li style="display: flex; align-items: center; gap: 10px;">
          <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-headset" aria-hidden="true"></i>
          </div>
          <strong>Voice</strong>
        </li>
        <li style="display: flex; align-items: center; gap: 10px;">
          <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-envelope" aria-hidden="true"></i>
          </div>
          <strong>Email</strong>
        </li>
        <li style="display: flex; align-items: center; gap: 10px;">
          <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-robot" aria-hidden="true"></i>
          </div>
          <strong>Web, self–service, and bots</strong>
        </li>
        <li style="display: flex; align-items: center; gap: 10px;">
          <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-truck" aria-hidden="true"></i>
          </div>
          <strong>Text</strong>
        </li>
        <li style="display: flex; align-items: center; gap: 10px;">
          <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
            <i class="fas fa-video" aria-hidden="true"></i>
          </div>
          <strong>Video</strong>
        </li>
      </ul>
    </div>

    <!-- Right Image -->
    <div style="flex: 1 1 40%; min-width: 280px; text-align: center;">
      <img src="/frontend/my_img/service-1.png" alt="Customer Support" style="max-width: 100%; height: auto; border-radius: 10px;">
    </div>
  </div>
</section>


<section class="company-section" style="padding: 40px 20px; font-family: Arial, sans-serif; background: #fff;">
  <div class="auto-container" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">

    <!-- Left Column -->
    <div style="display: flex; flex-direction: column; gap: 20px;">
      <img src="/frontend/my_img/service-2.svg" alt="BPO Services" style="max-width: 100%; height: auto; border-radius: 10px;">

      {{-- <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- First 2 cards under image -->
        <div style="background: #f0f9fa; padding: 20px 15px; border-radius: 8px; flex: 1; min-width: 140px; max-width: 220px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: flex-start; min-height: 170px;">
          <strong style="color: #045d71; display: block; margin-bottom: 10px;">
            <i class="fas fa-building" style="margin-right: 8px;"></i> Back Office
          </strong>
          <p style="font-size: 1.3rem; color: #444; margin: 0;">Our back-office outsourcing assistance empowers your customer-facing teams.</p>
        </div>
        <div style="background: #f0f9fa; padding: 20px 15px; border-radius: 8px; flex: 1; min-width: 140px; max-width: 220px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: flex-start; min-height: 170px;">
          <strong style="color: #045d71; display: block; margin-bottom: 10px;">
            <i class="fas fa-user-friends" style="margin-right: 8px;"></i> Recruitment Process 
          </strong>
          <p style="font-size: 1.3rem; color: #444; margin: 0;">We find, recruit, onboard, and manage the talent streams in your organization.</p>
        </div>
      </div> --}}
    </div>

    <!-- Right Column -->
    <div>
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px; color: #45a9b3;">BPO Services</h2>
      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        <strong>Nexus Global Services</strong> recruit, develop, and retain the most exemplary individuals in business process outsourcing to serve your customers as if they were our own. We equip every agent with robust technologies and training programs to provide world-class customer experiences. Technology is essential to our data-driven, CX-first approach to delivering exceptional customer experiences that propel your brand forward.
      </p>
      <p style="font-weight: bold; margin-bottom: 20px; color: #555;">
        We deliver exceptional customer experiences in the realm of:
      </p>

      {{-- <div style="display: flex; gap: 20px;">
        <!-- 2 cards under paragraph -->
        <div style="background: #f0f9fa; padding: 20px 15px; border-radius: 8px; flex: 1; min-width: 140px; max-width: 220px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: flex-start; min-height: 170px;">
          <strong style="color: #045d71; display: block; margin-bottom: 10px;">
            <i class="fas fa-chart-line" style="margin-right: 8px;"></i> Business Transformation
          </strong>
          <p style="font-size: 1.3rem; color: #444; margin: 0;">We dive deep into your company's operations and create exceptional customer service experiences.</p>
        </div>
        <div style="background: #f0f9fa; padding: 20px 15px; border-radius: 8px; flex: 1; min-width: 140px; max-width: 220px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: flex-start; min-height: 170px;">
          <strong style="color: #045d71; display: block; margin-bottom: 10px;">
            <i class="fas fa-university" style="margin-right: 8px;"></i> Banking Operations
          </strong>
          <p style="font-size: 1.3rem; color: #444; margin: 0;">Flexible onboarding, fraud prevention, and compliance management—all while keeping customers satisfied.</p>
        </div>
      </div> --}}

      <ul style="list-style: none; padding: 0; margin: 0 0 30px 0; display: grid; grid-template-columns: repeat(2, minmax(140px, 1fr)); gap: 15px;">
  <li style="display: flex; align-items: center; gap: 10px;">
    <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
      <i class="fas fa-chart-line" aria-hidden="true"></i> <!-- Business Transformation -->
    </div>
    <strong>Business Transformation</strong>
  </li>
  <li style="display: flex; align-items: center; gap: 10px;">
    <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
      <i class="fas fa-building" aria-hidden="true"></i> <!-- Back Office -->
    </div>
    <strong>Back Office</strong>
  </li>
  <li style="display: flex; align-items: center; gap: 10px;">
    <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
      <i class="fas fa-university" aria-hidden="true"></i> <!-- Banking Operations -->
    </div>
    <strong>Banking Operations</strong>
  </li>
  <li style="display: flex; align-items: center; gap: 10px;">
    <div style="background: #45a9ba; color: white; border-radius: 50%; width: 36px; height: 36px; display: flex; justify-content: center; align-items: center;">
      <i class="fas fa-user-tie" aria-hidden="true"></i> <!-- Recruitment Process Outsourcing -->
    </div>
    <strong>Recruitment Process Outsourcing</strong>
  </li>
</ul>

    </div>

  </div>
</section>




<section class="company-section" style="padding: 40px 20px; background: #fff;">
  <div class="auto-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px;">
    <!-- Left Content -->
    <div style="flex: 1 1 50%; min-width: 320px;">
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px; color: #45a9b3;">Back-Office Support</h2>
      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        Back Office Support services are available to assist you in expanding your strategic planning operations support or simply meeting your payroll or other monthly obligations.
      </p>

       <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
       <strong>Nexus Global Services</strong> is ready to assist you in achieving your goals and objectives.
      </p>

      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
      Our human resources support staff is highly qualified and keeps up to date with continuous certifications & seminars to make sure we are up to date on the latest information, techniques, and regulations in our field and across various industries.
      </p>

      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
       We assist you in achieving your business goals and objectives. Our team will be there for you every step, offering guidance and expertise as your strategic partner to help you grow your business.
      </p>
    </div>

    <!-- Right Image -->
    <div style="flex: 1 1 40%; min-width: 280px; text-align: center;">
      <img src="/frontend/my_img/service-3.svg" alt="Back-Office Support" style="max-width: 100%; height: auto; border-radius: 10px;">
    </div>
  </div>
</section>

<section class="company-section" style="padding: 40px 20px; background: #fff;">
  <div class="auto-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px;">

    <!-- Left Image -->
    <div style="flex: 1 1 40%; min-width: 280px; text-align: center;">
      <img src="/frontend/my_img/service-4.svg" alt="Inbound & Outbound" style="max-width: 100%; height: auto; border-radius: 10px;">
    </div>

    <!-- Right Content -->
    <div style="flex: 1 1 50%; min-width: 320px;">
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px; color: #45a9b3;">Inbound & Outbound</h2>
      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        <strong>Nexus Global Services</strong> is a cloud-based call center solution that uses Voice over Internet Protocol (VoIP). It offers a straightforward method for starting a call center from scratch. You do not need to invest in costly hardware or prolonged agent training.
      </p>
<p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
  Our platform is designed to scale with your business, providing flexible features that enhance customer interactions and improve agent productivity. With seamless integration and real-time analytics, you can manage your call center efficiently from anywhere.
</p>

      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        Our VoIP call center solution supports outbound and inbound communication. It includes many useful features, such as:
      </p>
      
    </div>
  </div>
</section>

<section class="services-section-two">
    <div class="auto-container">
        <div class="outer-container">
            <div class="clearfix">
                
                <!--Services Block three-->
                <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-headset"></span> <!-- Customer Services -->
                            </div>
                            <h2><a href="#0">Customer Services</a></h2>
                        </div>
                    </div>
                </div>
                
                <!--Services Block three-->
                <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-briefcase"></span> <!-- BPO Services -->
                            </div>
                            <h2><a href="#0">BPO Services</a></h2>
                        </div>
                    </div>
                </div>
                
                <!--Services Block three-->
                <div class="services-block-three col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box">
                                <span class="fas fa-headset"></span> <!-- Back-Office Support -->
                            </div>
                            <h2><a href="#0">Back-Office Support</a></h2>
                        </div>
                    </div>
                </div>
                
            </div>

             <div class="clearfix">
                
                <!--Services Block three-->
                <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-phone-call"></span> <!-- Inbound & Outbound -->
                            </div>
                            <h2><a href="#0">Inbound & Outbound</a></h2>
                        </div>
                    </div>
                </div>
                
                <!--Services Block three-->
                <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box">
                                <span class="fab fa-figma"></span> <!-- Web Design & Development -->
                            </div>
                            <h2><a href="#0">Web Design & Development</a></h2>
                        </div>
                    </div>
                </div>
                
                <!--Services Block three-->
                <div class="services-block-three col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box">
                                <span class="fas fa-bullhorn"></span> <!-- Digital Marketing Services -->
                            </div>
                            <h2><a href="#0">Digital Marketing Services</a></h2>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>




<section class="company-section" style="padding: 40px 20px; background: #fff;">
  <div class="auto-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px;">
    <!-- Left Content -->
    <div style="flex: 1 1 50%; min-width: 320px;">
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px; color: #45a9b3;">Web Design & Development</h2>
      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        We are committed to providing innovative solutions that meet your requirements. Our expert PHP developers work on back-end or front-end development for web & mobile apps, as well as code customization and legacy code migration.
      </p>

       <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        We are ready to begin your next project. Listed below are some of our most recent PHP projects.
      </p>

      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
     <strong>Nexus Global Services</strong> can work on every aspect of the project (from front-end design to back-end integration) or specific parts based on your needs, whether you are starting a new project from scratch or need development on an existing product.
      </p>

    </div>

    <!-- Right Image -->
    <div style="flex: 1 1 40%; min-width: 280px; text-align: center;">
      <img src="/frontend/my_img/service-5.png" alt="Back-Office Support" style="max-width: 100%; height: auto; border-radius: 10px;">
    </div>
  </div>
</section>

<section class="company-section" style="padding: 40px 20px; background: #fff;">
  <div class="auto-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px;">

    <!-- Left Image -->
    <div style="flex: 1 1 40%; min-width: 280px; text-align: center;">
      <img src="/frontend/my_img/service-6.svg" alt="Digital Marketing Services" style="max-width: 100%; height: auto; border-radius: 10px;">
    </div>

    <!-- Right Content -->
    <div style="flex: 1 1 50%; min-width: 320px;">
      <h2 style="font-size: 3.5rem; font-weight: bold; margin-bottom: 20px; color: #45a9b3;">Digital Marketing Services</h2>
      <p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
        We get your business in front of people who need your services using our search engine optimization and digital marketing services. Get your fully customizable and all-inclusive online marketing strategies.
      </p>
<p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
  <strong>Nexus Global Services</strong> displays the exact work that is being paid for, and our programs are designed to accomplish a specific number of tasks.
</p>

<p style="font-size: 1.6rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
  The team is dedicated to forming long-term relationships with each client. We collaborate with you to develop a unique strategy for your company. Our tried-and-true strategies and methodologies produce results while maximizing your return on investment.
</p>

      
    </div>
  </div>
</section>




@endsection