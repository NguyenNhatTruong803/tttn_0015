<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layer.css') }}">
    @yield('header')
</head>

<body>
    <section class="tr-header header ">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 bottom-left">
                        <img src="images/logo.png" alt="LOGO" class="m-1 logo">
                    </div>
                    <div class="col-12 col-md-4 text-center top-right">
                        <div class="row">
                            <div class="col col-md text-light mt-1 tit">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span>Đăng nhập</span>
                            </div>
                            <div class="col col-md text-light mt-1 tit">
                                <i class="fa-solid fa-user"></i>
                                <span>Đăng ký</span>
                            </div>
                            <div class="col col-md text-light m-1 giohang tit d-none d-sm-block">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <span>Giỏ hàng (0)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- tr-header-->
    {{-- @includeIf('frontend.mod-mainmenu') --}}
    @yield('content')
    <!----sanpham--------------------------------------------------------------------------------->

    <!------------------------------------------------------------------->
    <section class="tr-copyright bg-dark" >
        <div class="day bg-warning"></div>
        <div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col">
                        <img src="images/logo.png" alt="LOGO" class="m-1 logo1 ms-0">
                        <p class="text-white-50">Vmusical chuyên kinh doanh sản phẩm âm nhạc thời thượng đẳng cấp. Với
                            tiêu chi CHẤT LƯỢNG cho từng khách hàng, chúng tôi đang nỗ lực để ngày một hoàn thiện,cảm ơn
                            quý khách hàng đã luôn đồng hành hỗ trợ.</p>
                    </div>
                    <div class="col">
                        <p></p>
                        <h3 class="text-white-50 lienhe">Liên hệ</h3>
                        <p class="text-white-50">
                            A12, Đinh Tiên Hoàng, Q. Hoàn Kiếm, Hà Nội <br>
                            Điện thoại: <span class="sdt">0123456789 </span><br>
                            Website: <a href="https://vmusical.exdomain.net/"
                                class="link">https://vmusical.exdomain.net/</a> <br>
                            Email: <a href="contact@yourdomain.com" class="mail">contact@yourdomain.com</a>
                        </p>
                    </div>
                    <div class="col">
                        <ul>
                            <p></p>
                            <h3 class="text-white-50">Thông tin</h3>
                            <li class="text-white-50 ms-3">Về chúng tôi</li>
                            <li class="text-white-50 ms-3">Chính sách bảo mật</li>
                            <li class="text-white-50 ms-3">Quy định sử dụng</li>
                            <li class="text-white-50 ms-3">Thông tin giao hàng</li>
                            <li class="text-white-50 ms-3">Liên hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- tr-copyright-->
    @yield('footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
