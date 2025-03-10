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
<style>
    .dc_swiper_thumb {
        position: relative;
        z-index: 1;
    }
    .dc_swiper_thumb:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: url(/frontend/img/tuyen_duong_noi_bat_overlay.png) left bottom repeat-x;
    }
    .dc_swiper_thumb img {
        width: 100%;
    }

    .tuyen_duong_item {
        position: relative;
        z-index: 1;
    }
    .tuyen_duong_item ul {
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 10px;
        margin: 0;
        padding: 0 10px;
        z-index: 9;
    }

    .tuyen_duong_item ul li {
        list-style: none;
        display: block;
        width: calc(100%);
        float: left;
        color: #FFF;
    }
</style>
@endsection
@section('js')
@endsection
@section('content')
    <div class="breadcumb-wrapper background-image" data-overlay="title" data-opacity="4"
        style="background-image: url(&quot;{{ url('frontend/img/breadcumb-bg.jpg') }}&quot;);">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">{{ $category->name }}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li>{{ $category->name }}</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row gy-30 justify-content-center">
                        @foreach ($listService as $service)
                        <div class="col-md-3 col-lg-3 col-12">
                            <a class="tuyen_duong_item" href="{{ route('serviceDetail',['slug'=>$service->slug]) }}" title="{{ $service->name }}">
                                <div class="dc_swiper_thumb">
                                    <img alt="{{ $service->name }}" src="{{ url($service->image) }}" data-lazy-src="{{ url($service->image) }}" class="lazyloaded" data-was-processed="true">
                                    <noscript><img alt="{{ $service->name }}" src="{{ url($service->image) }}"></noscript>
                                </div>
                                <ul>
                                    <li><span style="color: #ffffff; font-size: 14px">{{ $service->name }}</span></li>
                                    {{-- <li><span style="color: #ff9000; font-size: 12px;"><del>900K</del></span> - <span style="color: #fff000; font-size: 14px;">750K</span></li> --}}
                                </ul>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pagination-wrapper">
                        {{$listService->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
