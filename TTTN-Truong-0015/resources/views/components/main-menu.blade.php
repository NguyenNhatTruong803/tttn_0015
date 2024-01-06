<div>
    <section class="tr-maincontent backgruond">
        <div class="container ">
            <nav class="navbar navbar-expand-lg backgruond">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="http://localhost/TTTN-Truong-0015/public/">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($list_menu as $row_menu)
                                        <x-sub1-main-menu :rowmenu="$row_menu"/>
                                    @endforeach
                                    {{-- <li><a class="dropdown-item" href="trong.html">Trống - Bộ gõ</a></li>
                                    <li><a class="dropdown-item" href="piano.html">PIANO - ORGANS</a></li> --}}
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link text-light">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Liên hệ</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="timkiem"
                                    aria-describedby=" qtimkiem">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </section>

</div>
