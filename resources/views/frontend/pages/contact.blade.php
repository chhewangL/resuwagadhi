@extends('frontend.index')
@section('main-content')
<!-- <div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/banner/banner3.jpg')}})">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li><a href="#">Contact</a></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
   </div> -->
    <section id="main-container" class="main-container">
      <div class="container">

         <div class="row text-center">
            <h2 class="section-title">Rasuwagadhi Hydropower Company Limited</h2>
            <h3 class="section-sub-title">Contact Us</h3>
         </div><!--/ Title row end -->

         <div class="row">
            <div class="col-md-3">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Visit Our Office</h4>
                     <p>House No: 223, Kapan Marg, Ward No-3, Chakrapath Maharajgunj, Kathmandu, Nepal</p>
                 </div>
               </div>
            </div><!-- Col 1 end -->

            <div class="col-md-3">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Email Us</h4>
                     <p>info@rghpcl.com.np</p>
                 </div>
               </div>
            </div><!-- Col 2 end -->

            <div class="col-md-3">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Call Us</h4>
                     <p>+977 (1) 4371744, 4371794</p>
                 </div>
               </div>
            </div><!-- Col 3 end -->
            <div class="col-md-3">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Fax Us</h4>
                     <p>+9774371794</p>
                 </div>
               </div>
            </div>

         </div><!-- 1st row end -->

         <div class="gap-60"></div>

         <div id="map" class="map"></div>

         <div class="gap-40"></div>

         <div class="row">

            <!-- <div class="col-md-12">
               
               <h3 class="column-title">We love to hear</h3>

               <form id="contact-form" action="contact-form.php" method="post" role="form">
                  <div class="error-container"></div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Name</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control form-control-email" name="email" id="email" 
                           placeholder="" type="email" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Subject</label>
                           <input class="form-control form-control-subject" name="subject" id="subject" 
                           placeholder="" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message</label>
                     <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                  </div>
                  <div class="text-right"><br>
                     <button class="btn btn-primary solid blank" type="submit">Send Message</button> 
                  </div>
               </form>
            </div> -->
         
         </div><!-- Content row -->
      </div><!-- Conatiner end -->
   </section>
@endsection