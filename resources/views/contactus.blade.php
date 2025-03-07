@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper background-image" data-overlay="title" data-opacity="4" style="background-image: url(&quot;{{url('frontend/img/breadcumb-bg.jpg')}}&quot;);">
   <div class="container z-index-common">
      <h1 class="breadcumb-title">Liên hệ với chúng tôi </h1>
      <ul class="breadcumb-menu">
         <li><a href="{{route('home')}}">Trang chủ</a></li>
         <li>Tin tức</li>
         <li>Liên hệ với chúng tôi </li>
      </ul>
   </div>
</div>
<section class="space">
   <div class="container">
      <div class="tab-content">
         <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
            <div class="row gy-30 justify-content-center">
               <div class="col-md-6 col-lg-4">
                  <div class="contact-box style2">
                     <div class="contact-box_content">
                        <div class="contact-box_icon"><i class="fa-light fa-map-location-dot"></i></div>
                        <div class="contact-box_info">
                           <p class="contact-box_text">Địa chỉ</p>
                           <h5 class="contact-box_link">{{$setting->address1}}</h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="contact-box style2">
                     <div class="contact-box_content">
                        <div class="contact-box_icon"><i class="fa-light fa-phone-arrow-up-right"></i></div>
                        <div class="contact-box_info">
                           <p class="contact-box_text">Số điện thoại</p>
                           <h5 class="contact-box_link"><a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="contact-box style2">
                     <div class="contact-box_content">
                        <div class="contact-box_icon"><i class="fa-light fa-envelopes-bulk"></i></div>
                        <div class="contact-box_info">
                           <p class="contact-box_text">Email</p>
                           <h5 class="contact-box_link"><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="space-bottom position-relative">
   <div class="container">
      <div class="contact-form-wrapper">
         <div class="row justify-content-center">
            <div class="col-lg-6">
               <div class="map-sec">{!!$setting->iframe_map!!}</div>
            </div>
            <div class="col-lg-6">
               <form action="{{route('postcontact')}}" id="contact" method="post" class="contact-form ajax-contact">
                  @csrf
                  <div class="title-area mb-30 text-center text-lg-start">
                     <h2 class="sec-title">Gửi thông tin cho chúng tôi</h2>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên" required>  <i class="fal fa-user"></i>
                     </div>
                     <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"> <i class="fal fa-envelope"></i>
                     </div>
                     <div class="form-group col-md-12">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number" required> <i class="fa-light fa-phone"></i>
                     </div>
                     <div class="form-group col-12"><textarea name="mess" id="message" cols="30" rows="3" class="form-control" placeholder="Lời nhắn"></textarea> <i class="fal fa-comment"></i></div>
                     <div class="form-btn col-12 text-center"><button class="th-btn fw-btn">Gửi<i class="fa-regular fa-arrow-right"></i></button></div>
                  </div>
                  <p class="form-messages mb-0 mt-3"></p>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection