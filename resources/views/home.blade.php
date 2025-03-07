@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('js')
<script>
    $('#submitFormDiduongdai').validate({
        rules: {
            // "namediduongdai": {
            //     required: true,
            // },
            // "phonediduongdai": {
            //     required: true,
            //     minlength: 8
            // },
            "loaixediduongdai": {
                required: true,
            },
            "diemdididuongdai": {
                required: true,
            },
            "diemdendiduongdai": {
                required: true,
            },
            "ngaydididuongdai": {
                required: true,
            }
        },
        messages: {
            // "namediduongdai": {
            //     required: "Tên bạn là gì?",
            // },
            // "phonediduongdai": {
            //     required: "Nhập sdt liên hệ",
            // },
            "loaixediduongdai": {
                required: "Chọn loại xe"
            },
            "diemdididuongdai": {
                required: "Tôi đón bạn ở đâu?"
            },
            "diemdendiduongdai": {
                required: "Chọn điểm đến của bạn"
            },
            "ngaydididuongdai": {
                required: "Bạn muốn đi hôm nào?"
            }
        },
        errorPlacement: function(error, element) {
            // Tạo hoặc tìm thẻ <span> để hiển thị lỗi
            var errorSpan = $(element).next("span.error-message");
            if (errorSpan.length === 0) {
                errorSpan = $("<span class='error-message w-100'></span>").insertAfter(element);
            }
            errorSpan.text(error.text());
        },
        success: function(label, element) {
            $(element).next("span.error-message").remove(); // Xóa thông báo lỗi khi nhập đúng
        },
        submitHandler: function(form) {
            $.ajax({
                url: "{{ route('get-price') }}",
                type: "get",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#submitFormDiduongdai").serializeArray(),
                success: function(response) {
                    $('#popup_price').html(response.price);
                },
                error: function() {
                    jQuery.notify("Gửi thông tin thất bại", "error");
                }
            });
            $('#bookingModal').modal('show');
            // $.ajax({
            //     url: "https://script.google.com/macros/s/AKfycbzltqWuUhsTC9P5N18VsoWyztOIVtKRbP7Yy0kqQUZfR2gG3RzhgSaDYIiNb9MTK7hX/exec",
            //     type: "post",
            //     data: $("#submitFormDiduongdai").serializeArray(),
            //     success: function() {
            //         jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
            //     },
            //     error: function() {
            //         jQuery.notify("Gửi thông tin thất bại", "error");
            //     }
            // });
        }
    });
    $('#submitFormDisanbay').validate({
        rules: {
            "loaixe": {
                required: true,
            },
            "diemdi": {
                required: true,
            },
            "diemden": {
                required: true,
            },
            "ngaydi": {
                required: true,
            }
        },
        messages: {
            "loaixe": {
                required: "Chọn loại xe"
            },
            "diemdi": {
                required: "Tôi đón bạn ở đâu?"
            },
            "diemden": {
                required: "Chọn điểm đến của bạn"
            },
            "ngaydi": {
                required: "Bạn muốn đi hôm nào?"
            }
        },
        errorPlacement: function(error, element) {
            // Tạo hoặc tìm thẻ <span> để hiển thị lỗi
            var errorSpan = $(element).next("span.error-message");
            if (errorSpan.length === 0) {
                errorSpan = $("<span class='error-message w-100'></span>").insertAfter(element);
            }
            errorSpan.text(error.text());
        },
        success: function(label, element) {
            $(element).next("span.error-message").remove(); // Xóa thông báo lỗi khi nhập đúng
        },
        submitHandler: function(form) {
            $.ajax({
                url: "{{ route('get-price') }}?province_id=2",
                type: "get",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#submitFormDisanbay").serializeArray(),
                success: function(response) {
                    $('#popup_price').html(response.price);
                },
                error: function() {
                    jQuery.notify("Gửi thông tin thất bại", "error");
                }
            });
            $('#bookingModal').modal('show');
            // $.ajax({
            //     url: "https://script.google.com/macros/s/AKfycbzltqWuUhsTC9P5N18VsoWyztOIVtKRbP7Yy0kqQUZfR2gG3RzhgSaDYIiNb9MTK7hX/exec",
            //     type: "post",
            //     data: $("#submitFormDisanbay").serializeArray(),
            //     success: function() {
            //         jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
            //     },
            //     error: function() {
            //         jQuery.notify("Gửi thông tin thất bại", "error");
            //     }
            // });
        }
    });
    $('#rotate_btn').click(function() {
        var diemdi = $('input[name="diemdi"]').val();
        var diemden = $('input[name="diemden"]').val();
        $('input[name="diemdi"]').val(diemden).trigger('change');
        $('input[name="diemden"]').val(diemdi).trigger('change');
    });

    $('#rotate_btn_duongdai').click(function() {
        var diemdi = $('input[name="diemdididuongdai"]').val();
        var diemden = $('input[name="diemdendiduongdai"]').val();
        $('input[name="diemdididuongdai"]').val(diemden).trigger('change');
        $('input[name="diemdendiduongdai"]').val(diemdi).trigger('change');
    });
</script>
@endsection
@section('content')
    <div class="th-hero-wrapper hero-8">
        <div class="hero-slider-8 th-carousel" id="heroSlide8" data-slide-show="1" data-md-slide-show="1" data-fade="true">
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="{{ $banner[0]->image }}">
                    <img src="{{ url('frontend/img/hero_overlay_2.png') }}" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="hero-style8">
                        <div class="card shadow" style="max-width: 600px; border: none;">
                            <nav class="bookback">
                                <div class="nav nav-tabs" id="nav-tabFormSubmitDisanbay" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true"><i class="fas fa-plane"></i> Sân bay</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false"><i class="fas fa-road"></i> Đường dài</button>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="navFormSubmitDisanbay-tabContent">
                                <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form id="submitFormDisanbay" class="booking-form4 wow fadeInUp background-image "
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="row">
                                            <div class="form-group col-sm-12 d-flex align-items-center input-group">
                                                <label for="locationInputFrom"> Điểm đi</label>
                                                <input type="text" class="form-control" name="diemdi" id="locationInputFrom"
                                                    placeholder="Điểm đi">
                                            </div>
                                            <div class="form-group col-sm-12 d-flex align-items-center input-group">
                                                <label for="locationInputTo"> &nbsp;&nbsp;&nbsp;Điểm đến</label>
                                                <input type="text" class="form-control" value="Nội Bài" name="diemden"
                                                    id="locationInputTo" placeholder="Điểm đến">
                                            </div>
                                            <button type="button" class="btn btn-primary" id="rotate_btn" rel="tooltip" data-placement="top" title="Đảo chiều" data-bs-toggle="tooltip">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                            </button>
                                            <hr>
                                            <div class="form-group col-md-4">
                                                <input type="checkbox" name="twoway" id="twoWay" value="1">
                                                <label for="twoWay">Hai chiều</label>
                                            </div>
                                            <div class="form-group col-md-8 input-group w-66">
                                                <label for="loaixe" class="w-50">Loại xe</label>
                                                <select name="loaixe" id="loaixe" class="form-select w-50">
                                                    <option value="" selected="selected">Loại xe</option>
                                                    @foreach ($carTypes as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <input type="text" class="date-pick form-control" name="ngaydi"
                                                    id="date-pick" placeholder="Ngày đi">
                                                <i class="fa-light fa-calendar-days"></i>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <input type="text" class="time-pick form-control" name="giodi"
                                                    id="time-pick" placeholder="Giờ đi">
                                                <i class="fa-light fa-clock"></i>
                                            </div>
                                            <div class="form-btn col-12 text-center mt-3"><button type="submit"
                                                    class="th-btn radius-btn bookdisanbay w-50">Kiểm tra giá<i
                                                        class="fa-regular fa-arrow-right ms-2"></i></button></div>
                                        </div>
                                        <p class="form-messages mb-0 mt-3"></p>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <form id="submitFormDiduongdai" class="booking-form4 wow fadeInUp background-image "
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="row">
                                            <div class="form-group col-sm-6 input-group">
                                                <label for="locationInputFrom"> Điểm đi</label>
                                                <input type="text" class="form-control" name="diemdididuongdai"
                                                    id="locationInputFrom" placeholder="Điểm đi">
                                            </div>
                                            <div class="form-group col-sm-6 input-group">
                                                <label for="locationInputTo"> &nbsp;&nbsp;&nbsp;Điểm đến</label>
                                                <input type="text" class="form-control" name="diemdendiduongdai"
                                                    id="locationInputTo" placeholder="Điểm đến">
                                            </div>
                                            <button type="button" class="btn btn-primary" id="rotate_btn_duongdai" rel="tooltip" data-placement="top" title="Đảo ngược" data-bs-toggle="tooltip">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                            </button>
                                            <hr>
                                            <div class="form-group col-md-4">
                                                <input type="checkbox" name="twowayduongdai" id="twoWayDuongdai" value="1">
                                                <label for="twoWayDuongdai">Hai chiều</label>
                                            </div>
                                            <div class="form-group col-md-8 input-group w-66">
                                                <label for="loaixediduongdai" class="w-50">Loại xe</label>
                                                <select name="loaixediduongdai" id="loaixediduongdai" class="form-select w-50">
                                                    <option value="" selected="selected">Loại xe</option>
                                                    @foreach ($carTypes as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <input type="text" class="date-pick form-control"
                                                    name="ngaydididuongdai" id="date-pick" placeholder="Ngày đi">
                                                <i class="fa-light fa-calendar-days"></i>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <input type="text" class="time-pick form-control"
                                                    name="giodididuongdai" id="time-pick" placeholder="Giờ đi">
                                                <i class="fa-light fa-clock"></i>
                                            </div>
                                            <div class="form-btn col-12 text-center mt-3"><button type="submit"
                                                    class="th-btn radius-btn bookdisanbay w-50">Kiểm tra giá<i
                                                        class="fa-regular fa-arrow-right ms-2"></i></button></div>
                                        </div>
                                        <p class="form-messages mb-0 mt-3"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-box"><button data-slick-prev="#heroSlide8" class="slick-arrow default"><i
                    class="fa-regular fa-arrow-left"></i></button> <button data-slick-next="#heroSlide8"
                class="slick-arrow default"><i class="fa-regular fa-arrow-right"></i></button></div>
    </div>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #0066a4;">
            <h5 class="modal-title text-white text-center" style="width: 100%;" id="bookingModalLabel"><i class="fa-solid fa-info-circle"></i> XÁC NHẬN THÔNG TIN</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body text-center">
            <p>Giá cước đã bao gồm phí ra, vào sân bay Nội Bài, chưa bao gồm phí cầu đường khác</p>
            <h3 id="popup_price" class="text-warning">190,000₫</h3>
            <p>Nhận báo giá chi tiết xin vui lòng liên hệ</p>
            <a class="btn btn-danger" href="tel:{{ str_replace(' ', '', $setting->phone1) }}"><i class="fa-thin fa-phone"></i> {{ $setting->phone1 }}</a>
            <hr>
            <p class="text-muted">Vui lòng đặt xe 45 phút trước giờ đón để đảm bảo giá này!</p>
            <p>Để lại số điện thoại của Quý khách, chúng tôi sẽ liên lạc lại ngay!</p>
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Điện thoại" required style="border-radius: 10px; height: 46px; background-color: #efefef; ::placeholder { opacity: 0.5; }">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Họ và tên" required style="border-radius: 10px; height: 46px; background-color: #efefef; ::placeholder { opacity: 0.5; }">
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-warning">XÁC NHẬN ĐẶT CHUYẾN</button>
            </div>
        </div>
        </div>
    </div>
    <section class="position-relative overflow-hidden space space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2"><img class="lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                        data-src="{{ url('frontend/img/title_shape_1.svg') }}" alt="shape"><span
                        class="sub-title2">Booking</span></span>
                <h2 class="sec-title">Hình thức đặt xe</h2>
            </div>
            <div class="process-box-wrapper style2">
                <div class="row gy-30 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="process-item wow fadeInLeft"
                            data-bg-src="{{ url('frontend/img/process_shape.png') }}">
                            <div class="process-item_icon"><img class="lazy"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ url('frontend/img/support.png') }}" alt=""></div>
                            <h3 class="process-item_title">Gọi điện trực tiếp 24/7</h3>
                            <p class="process-item_text">Gọi trực tiếp qua tổng đài <a
                                    href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a></p>
                            <span class="process-item_num">01</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="process-item wow fadeInUp" data-bg-src="{{ url('frontend/img/process_shape.png') }}">
                            <div class="process-item_icon"><img class="lazy"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ url('frontend/img/register.png') }}" alt=""></div>
                            <h3 class="process-item_title">Đăng ký trên website</h3>
                            <p class="process-item_text">Truy cập web và nhập số điện thoại, chúng tôi sẽ liên lạc lại ngay
                                trong ít phút.</p>
                            <span class="process-item_num">02</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="process-item wow fadeInRight"
                            data-bg-src="{{ url('frontend/img/process_shape.png') }}">
                            <div class="process-item_icon"><img class="lazy"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ url('frontend/img/mess.png') }}" alt=""></div>
                            <h3 class="process-item_title">Chat Online</h3>
                            <div class="th-social style2">
                                <a target="_blank" href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://zalo.me/{{ $setting->phone1 }}">Zalo</a>
                                <a href="tel:{{ $setting->phone1 }}"><i class="fa-thin fa-phone"></i></a>
                            </div>
                            <p class="process-item_text">Nhắn ngay cho chúng tôi thông qua:</p>

                            <span class="process-item_num">03</span>
                        </div>
                    </div>
                    <span class="process-line"><img src="{{ url('frontend/img/process_line_3.png') }}"
                            alt="line"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative overflow-hidden space space-bottom"
        data-bg-src="{{ url('frontend/img/taxi_bg_3.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2"><img class="lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                        data-src="{{ url('frontend/img/title_shape_1.svg') }}" alt="shape"><span
                        class="sub-title2">Price</span></span>
                <h2 class="sec-title">Bảng giá</h2>
            </div>
            <div class="process-box-wrapper style2">
                <div class="row gy-30 justify-content-center">
                    @foreach ($groupCarTypes as $carType)
                    <div class="col-md-6 col-lg-6 col-12">
                        <table
                            style="width: 100%; border-collapse: collapse; background-color: #ffffff; border-style: solid; border-color: #efefef;"
                            border="1" cellpadding="5">
                            <tbody>
                                <tr style="height: 24px;background: #0066a4;">
                                    <td style="width: 100%; height: 24px; text-align: center;    color: white;"
                                        colspan="2"><b>{{$carType->name}}</b></td>
                                </tr>
                                @foreach ($carType->sortedCarServicePrices as $price)
                                    @if (!isset($price['parent_id']))
                                        <tr style="height: 24px;">
                                            <td style="width: 46.2511%; height: 24px;">{{$price['place_from']}} =&gt; {{$price['place_to']}}</td>
                                            @if (isset($price->price_min) && isset($price->price_max) && $price->price_max > 0)
                                                <td style="width: 53.7489%; height: 24px;">từ {{number_format($price->price_min)}}đ đến {{number_format($price->price_max)}}đ</td>
                                            @else
                                                <td style="width: 53.7489%; height: 24px;">từ {{number_format($price->price_min)}}đ</td>
                                            @endif
                                        </tr>
                                    @else
                                        <tr style="height: 24px;">
                                            <td style="width: 46.2511%; height: 24px;">{{$price['place_from']}}</td>
                                            <td style="width: 53.7489%; height: 24px;">từ {{number_format($price['price_2_way'])}}đ</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="taxi-area2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-xxl-6 wow fadeInLeft">
                    <div class="title-area">
                        <span class="sub-title style2"><img class="lazy"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{ url('frontend/img/title_shape_1.svg') }}" alt="shape"><span
                                class="sub-title2">Pay</span></span>
                        <h2 class="sec-title">Hình thức thanh toán</h2>
                    </div>
                    <div class="taxi-tabs-wrapper">
                        <div class="nav nav-tabs taxi-tabs-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-step1-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-step1" type="button">Tiền mặt</button>
                            <button class="nav-link" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2"
                                type="button">Chuyển khoản</button>
                            <button class="nav-link" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3"
                                type="button">Trực tiếp tại văn phòng</button>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                                <div class="taxi-list">
                                    <p class="taxi-title">Sau khi kết thúc hành trình, Quý khách vui lòng thanh toán trực
                                        tiếp cho lái xe chi phí của chuyến đi bằng tiền mặt.</p>
                                    <div class="taxi-list_wrapper">
                                        <div class="taxi-img"><img class="lazy"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ url('frontend/img/taxi-img.jpg') }}" alt=""></div>
                                        <div class="checklist">
                                            <ul>
                                                <li>Đặt xe nhanh nhất</li>
                                                <li>Lái xe an toàn</li>
                                                <li>Đi đến nơi</li>
                                                <li>Về đến chốn</li>
                                            </ul>
                                            <a href="" class="th-btn radius-btn">Đặt xe<i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                                <div class="taxi-list">
                                    <p class="taxi-title">Quý khách có thể thanh toán bằng cách chuyển khoản vào một trong
                                        các tài khoản do công ty chỉ định: danh sách tài khoản</p>
                                    <div class="taxi-list_wrapper">
                                        <div class="taxi-img"><img class="lazy"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ url('frontend/img/taxi-img_2.jpg') }}" alt=""></div>
                                        <div class="checklist">
                                            <ul>
                                                <li>Đặt xe nhanh nhất</li>
                                                <li>Lái xe an toàn</li>
                                                <li>Đi đến nơi</li>
                                                <li>Về đến chốn</li>
                                            </ul>
                                            <a href="" class="th-btn radius-btn">Đặt xe<i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                                <div class="taxi-list">
                                    <p class="taxi-title">Quý khách vui lòng đến văn phòng công ty tại địa chỉ tại
                                        {{ $setting->address1 }}</p>
                                    <div class="taxi-list_wrapper">
                                        <div class="taxi-img"><img class="lazy"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ url('frontend/img/taxi-img_3.jpg') }}" alt=""></div>
                                        <div class="checklist">
                                            <ul>
                                                <li>Đặt xe nhanh nhất</li>
                                                <li>Lái xe an toàn</li>
                                                <li>Đi đến nơi</li>
                                                <li>Về đến chốn</li>
                                            </ul>
                                            <a href="" class="th-btn radius-btn">Đặt xe<i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6">
                    <div class="taxi-image wow fadeInRight"><img class="lazy"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                            data-src="{{ url('frontend/img/taxi_map.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>


    <section class="space-top" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-40 mb-xl-0">
                    <div class="img-box8 wow fadeInLeft">
                        <div class="img1"><img src="{{ $gioithieu->image }}" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight">
                    <div class="title-area mb-35">
                        <span class="sub-title style2"><img class="lazy"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{ url('frontend/img/title_shape_1.svg') }}" alt="shape"><span
                                class="sub-title2">Giới thiệu</span></span>
                        <h2 class="sec-title">{{ $setting->company }}</h2>
                        <div class="line_12">
                            {!! $gioithieu->content !!}
                        </div>

                    </div>
                    <div class="btn-group style2">
                        <a href="{{ route('pagecontent', ['slug' => 'gioi-thieu']) }}" class="th-btn radius-btn">Xem thêm<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <span class="about-call-text">
                            <a href="tel:{{ $setting->phone1 }}" class="about-call-btn"><i
                                    class="fa-solid fa-phone"></i></a>{{ $setting->phone1 }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <section class="testi-area bg-top-center space-top" data-bg-src="{{ url('frontend/img/testimonial_bg_2.jpg') }}">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-lg-8">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title style2"><img class="lazy"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{ url('frontend/img/title_shape_1.svg') }}" alt="shape"><span
                                class="sub-title2">Khách hàng </span></span>
                        <h2 class="sec-title text-white">Khách hàng nói gì</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-item">
                            <button data-slick-prev="#testiSlide2" class="slick-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slick-next="#testiSlide2" class="slick-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="testiSlide2" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2">
                @foreach ($reviewcus as $item)
                    <div class="col-md-6 col-xl-4">
                        <div class="testi-item style2 wow fadeInUp">
                            <div class="testi-item_star"><i class="fa-solid fa-star-sharp"></i> <i
                                    class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i
                                    class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i></div>
                            <p class="testi-item_text">{!! languageName($item->content) !!}</p>
                            <div class="testi-item_wrapp">
                                <div class="testi-item_profile">
                                    <div class="testi-item_img"><img width="50" height="50" class="lazy"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="{{ $item->avatar }}" alt="Avater"></div>
                                    <div class="media-body">
                                        <h3 class="testi-item_name">{{ languageName($item->name) }}</h3>
                                        <p class="testi-item_desig">{{ languageName($item->position) }}</p>
                                    </div>
                                    <div class="testi-item_quote"><img class="lazy"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="{{ url('frontend/img/quote_2.svg') }}" alt="quote"></div>
                                </div>
                            </div>
                            <div class="testi-shape"><img class="lazy"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ url('frontend/img/testi_shape.png') }}" alt=""></div>
                            <div class="testi-shape2"><img class="lazy"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ url('frontend/img/testi_map.png') }}" alt=""></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="blog-area space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2"><img class="lazy"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                        data-src="{{ url('frontend/img/title_shape_1.svg') }}" alt="shape"><span
                        class="sub-title2">News</span></span>
                <h2 class="sec-title">Tin tức cập nhật</h2>
            </div>
            <div class="row th-carousel slider-shadow" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2"
                data-sm-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
                @foreach ($hotnews as $item)
                    <div class="col-md-6 col-xl-4">
                        <div class="blog-item style3 wow fadeInUp">
                            <div class="blog-img"><img height="200" class="lazy"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ $item->image }}" alt="blog image"> <a class="blog-date"
                                    href="{{ route('detailBlog', ['slug' => $item->slug]) }}"><span
                                        class="month">{{ date_format($item->created_at, 'd') }}</span>
                                    {{ date_format($item->created_at, 'm/Y') }}</a></div>
                            <div class="blog-content">
                                <div class="blog-meta style2"><a
                                        href="{{ route('detailBlog', ['slug' => $item->slug]) }}">by Admin</a></div>
                                <h3 class="blog-item_title"><a href="{{ route('detailBlog', ['slug' => $item->slug]) }}"
                                        class="line_2">{{ languageName($item->title) }}</a></h3>
                                <a href="{{ route('detailBlog', ['slug' => $item->slug]) }}" class="link-btn">Đọc tiếp <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="brand-title"><span class="counter-card_number"><span
                            class="counter-number">10</span>+<span class="counter-title">Đối tác</span></span></span>
            </div>
            <div class="row brand-slide th-carousel" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3"
                data-sm-slide-show="2" data-xs-slide-show="2">
                @foreach ($partner as $item)
                    <div class="col-auto brand-img style2 wow fadeInLeft">
                        <img class="lazy"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                            data-src="{{ $item->image }}" alt="Brand Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
