<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{ route('home') }}"><img width="137" src="{{ $setting->logo }}"
                    alt="Taxiar"></a></div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li>
                    <a href="{{ route('pagecontent', ['slug' => 'gioi-thieu']) }}">Giới thiệu</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="">Dịch vụ</a>
                    <ul class="sub-menu">
                        @foreach ($servicehome as $item)
                            <li><a href="{{ route('serviceDetail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{ route('carType') }}">Loại xe</a>
                </li>
                <li>
                    <a href="{{ route('banggia') }}">Bảng giá</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="">Tin tức</a>
                    <ul class="sub-menu">
                        @foreach ($blogCate as $item)
                            <li><a
                                    href="{{ route('listCateBlog', ['slug' => $item->slug]) }}">{{ languageName($item->name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('lienHe') }}">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" placeholder="Bạn muốn tìm gì?"> <button type="submit"><i
                class="fal fa-search"></i></button></form>
</div>
<header class="th-header header-layout8 header-absolute">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto">
                    <div class="header-social">
                        <span class="social-title">Theo dõi:</span>
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.twitter.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-right">
                        <div class="header-links">
                            <ul>
                                <li><i class="fa-thin fa-envelope"></i><a
                                        href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                                <li><i class="fa-thin fa-phone"></i><a
                                        href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="header-logo"><a href="{{ route('home') }}"><img width="137"
                                    src="{{ $setting->logo }}" alt="Taxiar"></a></div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="{{ route('pagecontent', ['slug' => 'gioi-thieu']) }}">Giới thiệu</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">Dịch vụ</a>
                                    <ul class="sub-menu">
                                        @foreach ($servicehome as $item)
                                            <li><a
                                                    href="{{ route('serviceDetail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('carType') }}">Loại xe</a>
                                </li>
                                <li>
                                    <a href="{{ route('banggia') }}">Bảng giá</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">Tin tức</a>
                                    <ul class="sub-menu">
                                        @foreach ($blogCate as $item)
                                            <li><a
                                                    href="{{ route('listCateBlog', ['slug' => $item->slug]) }}">{{ languageName($item->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('lienHe') }}">Liên hệ</a></li>
                            </ul>
                        </nav>
                        <button class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="icon-btn searchBoxToggler">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-bg"></div>
    </div>
</header>
