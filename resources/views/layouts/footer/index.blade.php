<div class="z-index-common contact-area wow fadeInUp" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="contact-card style2">
            <div class="info-card style3 active">
                <div class="footer-logo"><a href="{{ route('home') }}"><img style="width: 200px;" src="{{ $setting->logo }}"
                            alt="Taxiar" loading="lazy"></a></div>
            </div>
            <div class="info-card style3">
                <div class="border-line" data-bg-src="{{ url('frontend/img/line.svg') }}"></div>
                <div class="info-card_icon"><i class="fal fa-location-dot"></i></div>
                <div class="info-card_content">
                    <p class="info-card_text">Địa chỉ</p>
                    <a href="" class="info-card_link">{{ $setting->address1 }}</a>
                </div>
            </div>
            <div class="info-card style3">
                <div class="border-line" data-bg-src="{{ url('frontend/img/line.svg') }}"></div>
                <div class="info-card_icon"><i class="fal fa-envelope"></i></div>
                <div class="info-card_content">
                    <p class="info-card_text">Email</p>
                    <a href="mailto:{{ $setting->email }}" class="info-card_link">{{ $setting->email }}</a>
                </div>
            </div>
            <div class="info-card style3">
                <div class="border-line" data-bg-src="{{ url('frontend/img/line.svg') }}"></div>
                <div class="info-card_icon"><i class="fal fa-phone"></i></div>
                <div class="info-card_content">
                    <p class="info-card_text">Phone</p>
                    <a href="tel:{{ $setting->phone1 }}" class="info-card_link">{{ $setting->phone1 }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-wrapper footer-layout7" data-bg-src="{{ url('frontend/img/footer_bg_2.jpg') }}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-6">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">{{ $setting->company }}</h3>
                        <div class="th-widget-about">
                            <p class="footer-text">{{ $setting->webname }}</p>
                            <h4 class="footer-info-title mb-15">Giờ làm việc</h4>
                            <p class="footer-text">Phục vụ 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Chính sách</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach ($pageContent as $item)
                                    @if ($item->type == 'ho-tro-khanh-hang')
                                        <li><a
                                                href="{{ route('pagecontent', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Vị trí</h4>
                        <div class="newsletter-widget">
                            {!! $setting->iframe_map !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap style2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p class="copyright-text"><i class="fal fa-copyright"></i> 2025<a
                            href=""> {{ $setting->company }}</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
</footer>
