<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#d70018">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="Content-Language" content="vi" />
    <link rel="alternate" href="{{ url()->current() }}" hreflang="vi-vn" />
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="@yield('title')" />
    <meta name="rating" content="General">
    <meta name="application-name" content="@yield('title')" />
    <meta name="theme-color" content="#ed3235" />
    <meta name="msapplication-TileColor" content="#ed3235" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="{{ url()->current() }}" />
    <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
    <meta property="og:url" content="">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="@yield('title')">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@{{ url() - > current() }}" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <meta name="twitter:url" content="" />
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="">
    <link rel="canonical" href="{{ \Request::url() }}">
    <!-- <link rel="amphtml" href="amp/" /> -->
    <link rel="image_src" href="@yield('image')" />
    <link rel="image_src" href="@yield('image')" />
    <link rel="shortcut icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/bootstrap.min.css">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/fontawesome.min.css">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/magnific-popup.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/magnific-popup.min.css">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/slick.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/slick.min.css">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/jquery.datetimepicker.min.css"
        type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/jquery.datetimepicker.min.css">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/style.css">
    <link rel="preload" as="style" href="{{ env('AWS_R2_URL') }}/frontend/css/callbutton.css" type="text/css">
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/callbutton.css">
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/jquery-3.6.0.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/notify.min.js" defer></script>
    <script>
        (function() {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
                false);
        })();
    </script>
    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
    @yield('css')
</head>

<body class="home2">
    @include('layouts.header.index')
    @yield('content')

    @include('layouts.footer.index')
    <div onclick="window.location.href= 'tel:{{ $setting->phone1 }}'" class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:{{ $setting->phone1 }}" class="pps-btn-img">
                    <img src="{{ url('frontend/img/phone.png') }}" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
        <a href="tel:{{ $setting->phone1 }}">
        </a>
        <div class="hotline-bar"><a href="tel:{{ $setting->phone1 }}">
            </a><a href="tel:{{ $setting->phone1 }}">
                <span class="text-hotline">{{ $setting->phone1 }}</span>
            </a>
        </div>

    </div>
    <div class="inner-fabs">
        <a target="blank" href="https://www.tiktok.com/@nhadepanhduong" class="fabs roundCool" id="challenges-fab"
            data-tooltip="Kênh tiktok">
            <img class="inner-fab-icon" src="{{ url('frontend/img/tiktok.png') }}" alt="challenges-icon"
                border="0">
        </a>
        <a target="blank" href="https://zalo.me/{{ $setting->phone1 }}" class="fabs roundCool" id="chat-fab"
            data-tooltip="Nhắn tin Zalo">
            <img class="inner-fab-icon" src="{{ url('frontend/img/zalo.png') }}" alt="chat-active-icon"
                border="0">
        </a>
        <a target="blank" href="https://www.youtube.com/@NhaDepAnhDuong" class="fabs roundCool" id="chat-fab"
            data-tooltip="Youtube">
            <img class="inner-fab-icon" src="{{ url('frontend/img/youtubeicon.png') }}" alt="chat-active-icon"
                border="0">
        </a>
        <a target="blank" href="{{ $setting->facebook }}" class="fabs roundCool" id="chat-fab"
            data-tooltip="Nhắn tin facebook">
            <img class="inner-fab-icon" src="{{ url('frontend/img/messenger-icon.png') }}" alt="chat-active-icon"
                border="0">
        </a>
    </div>
    <div class="fabs roundCool call-animation" id="main-fab">
        <img class="img-circle" src="{{ url('frontend/img/lienhe.png') }}" alt="" width="135">
    </div>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/slick.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/slick.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/bootstrap.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/bootstrap.min.js" defer></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/jquery.magnific-popup.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/jquery.magnific-popup.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/jquery.counterup.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/jquery.counterup.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/imagesloaded.pkgd.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/imagesloaded.pkgd.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/isotope.pkgd.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/isotope.pkgd.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/nice-select.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/nice-select.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/jquery.datetimepicker.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/jquery.datetimepicker.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/wow.min.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/wow.min.js"></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/main.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/main.js" defer></script>
    <link rel="preload" as="script" href="{{ env('AWS_R2_URL') }}/frontend/js/callbutton.js" />
    <script src="{{ env('AWS_R2_URL') }}/frontend/js/callbutton.js" defer></script>
    @yield('js')
</body>

</html>
