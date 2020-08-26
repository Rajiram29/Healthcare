@extends('layouts.app')

@section('content')
  <div class="st-content">
    <!-- Start Hero Seciton -->
    <div class="st-height-b125 st-height-lg-b80"></div>
    <!-- Start Hero Seciton -->
   
    <!-- Start Service Section -->
    <section id="appointment" class="st-shape-wrap st-gray-bg">
      <div class="st-shape4">
        <img src="{{url('/')}}/public/assets/img/shape/section_shape.png" alt="shape1">
      </div>
      <div class="st-shape6">
        <img src="{{url('/')}}/public/assets/img/shape/contact-shape3.svg" alt="shape3">
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">Please feel free to Contact Us</h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="{{url('/')}}/public/assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
         
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <form method="POST"  class="st-appointment-form" id="" style="margin-bottom: 100px;">
              <div id="st-alert1"></div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>Name *</label>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>Email</label>
                    <input type="email" id="email_id" name="email_id" placeholder="Email"  >
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject"  >
                  </div>
                </div>
                
                
                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>Message</label>
                    <textarea cols="30" rows="10" id="umsg" name="umsg" placeholder="Write something here..."></textarea>
                  </div>
                </div>

                
                <div class="col-lg-12">
                  <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="appointment-submit" name="submit">Submit</button>
                </div>
              </div>
            </form>  
          </div>
        </div>        
      </div>
    </section>
    <!-- End Service Section -->

  </div>
@endsection

@section('script')
  
@endsection

