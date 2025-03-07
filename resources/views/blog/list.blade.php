@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcumb-wrapper background-image" data-overlay="title" data-opacity="4" style="background-image: url(&quot;{{url('frontend/img/breadcumb-bg.jpg')}}&quot;);">
   <div class="container z-index-common">
      <h1 class="breadcumb-title">{{$title_page}} </h1>
      <ul class="breadcumb-menu">
         <li><a href="{{route('home')}}">Trang chủ</a></li>
         <li>Tin tức</li>
         <li>{{$title_page}} </li>
      </ul>
   </div>
</div>
<section class="th-blog-wrapper space-top space-extra-bottom">
   <div class="container">
      <div class="row gx-60">
         <div class="col-lg-8">
            <div class="row">
               @foreach ($blog as $item)
               <div class="col-lg-6">
                  <div class="th-blog blog-single has-post-thumbnail">
                     <div class="blog-img">
                        <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                           <img height="200" src="{{$item->image}}" alt="Blog Image">
                        </a>
                        <a class="blog-date" href="blog.html">
                           <span class="month">{{date_format($item->created_at,'d')}}</span> {{date_format($item->created_at,'m/Y')}}
                        </a>
                     </div>
                     <div class="blog-content">
                        <h2 class="blog-title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h2>
                        <p class="line_3">{{languageName($item->description)}}</p>
                     </div>
                  </div>
               </div>
               @endforeach
               
            </div>
            <div class="th-pagination">
              {{$blog->links()}}
            </div>
         </div>
         <div class="col-lg-4 ps-lg-2">
            @include('layouts.main.sidebar')
         </div>
      </div>
   </div>
</section>
@endsection