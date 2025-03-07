@extends('layouts.main.master')
@section('title')
Dịch vụ của {{$setting->company}}
@endsection
@section('description')
Dịch vụ của {{$setting->company}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="content-block ">
    <div class="container-bg with-bgcolor" data-style="background-image: url({{url('frontend/images/photodune-5004243-luxury-home-m.jpg')}});background-color: #F4F4F4">
       <div class="container-bg-overlay">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="page-item-title">
                      <h1 style="color: white">Dịch vụ của chúng tôi</h1>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="breadcrumbs-container-wrapper">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                      <!-- Breadcrumb NavXT 6.2.1 -->
                      <span property="itemListElement" typeof="ListItem">
                         <a property="item" typeof="WebPage" title="Go to TheBuilt." href="{{route('home')}}" class="home"><span property="name">Home</span></a>
                         <meta property="position" content="1">
                      </span>
                      &gt; 
                      <span property="itemListElement" typeof="ListItem">
                         <span property="name">Dịch vụ của chúng tôi</span>
                         <meta property="position" content="2">
                      </span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="page-container container">
       <div class="row">
          <div class="col-md-12 entry-content">
             <article>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1464186137917">
                    @foreach ($list as $key => $item)
                   <div class="wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner">
                         <div class="wpb_wrapper">
                            <style scoped='scoped'>.mgt-promo-block-47315338164.mgt-promo-block.darken .mgt-promo-block-content {background-color: rgba(10,10,10,0.3)!important;}.mgt-promo-block-47315338164.mgt-promo-block.animated:hover .mgt-promo-block-content {background-color: rgba(42,47,53,0.5)!important;}</style>
                            <div class="mgt-promo-block animated white-text cover-image text-size-normal darken mgt-promo-block-47315338164 wpb_content_element" data-style="background-image: url({{$item->image}});background-repeat: no-repeat;width: 100%; height: 220px;">
                               <div class="mgt-promo-block-content va-bottom">
                                  <div class="mgt-promo-block-content-inside vc_custom_1464196727384">
                                     <i class="fa fa-2 fa-building">
                                        <!-- Icon -->
                                     </i>
                                     <h3 style="font-size: 25px">{{$item->name}}
                                     </h3>
                                     <div class="mgt-button-wrapper mgt-button-wrapper-align-left mgt-button-wrapper-display-newline mgt-button-top-margin-disable"><a class="btn hvr-icon-wobble-horizontal mgt-button mgt-style-textwhite mgt-size-normal mgt-align-left mgt-display-newline mgt-text-size-small mgt-button-icon-position-right mgt-text-transform-uppercase " href="{{route('serviceDetail',['slug'=>$item->slug])}}">Chi tiết<i class="fa fa-arrow-right"></i></a></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach
                </div>
             </article>
          </div>
       </div>
    </div>
 </div>
@endsection