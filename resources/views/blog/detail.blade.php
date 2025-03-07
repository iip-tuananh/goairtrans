@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper background-image" data-overlay="title" data-opacity="4" style="background-image: url(&quot;{{url('frontend/img/breadcumb-bg.jpg')}}&quot;);">
   <div class="container z-index-common">
      <h1 class="breadcumb-title">{{languageName($blog_detail->title)}} </h1>
      <ul class="breadcumb-menu">
         <li><a href="{{route('home')}}">Trang chủ</a></li>
         <li>Tin tức</li>
         <li>{{languageName($blog_detail->title)}} </li>
      </ul>
   </div>
</div>
<section class="th-blog-wrapper space-top space-extra-bottom">
   <div class="container">
      <div class="row gx-60">
         <div class="col-lg-8">
            <div class="th-blog blog-single has-post-thumbnail">
               <div class="blog-content">
                  <h2 class="blog-title">{{languageName($blog_detail->title)}}</h2>
                  {!!languageName($blog_detail->content)!!}
               </div>
            </div>
         </div>
         <div class="col-lg-4 ps-lg-2">
            @include('layouts.main.sidebar')
         </div>
      </div>
   </div>
</section>
@endsection