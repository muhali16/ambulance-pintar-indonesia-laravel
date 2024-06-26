<!-- Main header-->
<header class="main-header header-style-one">
    <!--Start Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="outer-box">
                <div class="header-top__left">
                    <div class="main-logo-box">
                        <a href="{{route('web.index')}}">
                            <img
                                style="width: 16rem"
                                src="{{asset('assets/images/resources/logo.webp')}}"
                                alt="Logo perusahaan"
                                title="{{$companyName->body ?? "PT Ambulance Pintar Indonesia"}}"
                            />
                        </a>
                    </div>
                </div>

                <div class="header-top__right">
                    <div class="header-contact-info-style1">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p>Telepon</p>
                                    <h5><a href="{{$contactTelephone->link ?? '#'}}">{{$contactTelephone->body ?? "Set Phone Number"}}</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p>WhatsApp</p>
                                    <h5><a href="{{$contactWhatsapp->link ?? "#"}}">{{$contactWhatsapp->body ?? "Set WhatsApp Number"}}</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Email</p>
                                    <h5>
                                        <a href="{{$contactEmail->link ?? "#"}}">{{$contactEmail->body ?? "Set Email"}}</a>
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Top-->

    <!--Start Header-->
    <div class="header">
        <div class="auto-container">
            <div class="outer-box">
                <!--Start Header Left-->
                <div class="header-left">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div
                                class="collapse navbar-collapse show clearfix"
                                id="navbarSupportedContent"
                            >
                                <ul class="navigation clearfix scroll-nav">
                                    <li><a href="/#hero">Beranda</a></li>
                                    <li class="dropdown">
                                        <a href="/#product">Produk</a>
                                        <ul>
                                            @foreach($activeProductCategory as $productCategory)
                                            <li><a href="{{route('products.index', ['productCategory' => $productCategory->id])}}">{{$productCategory->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="/#testimonial">Testimoni</a></li>
                                    <li><a href="/#article">Artikel</a></li>
                                    <li><a href="/#gallery">Galeri</a></li>
                                    <li><a href="/#contact">Kontak</a></li>
                                    <li><a href="/#branch">Cabang</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
                <!--End Header Left-->

                <!--Start Header Right-->
                <div class="header-right">
                    <div class="header-social-link">
                        <ul class="clearfix">
                            <li>
                                <a href="{{$contactWhatsapp->link ?? "#"}}" title="WhatsApp"
                                ><i class="fa-brands fa-whatsapp"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="{{$facebook->link ?? "#"}}" title="{{$facebook->body ?? "#"}}"
                                ><i class="fa-brands fa-facebook"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="{{$youtube1->link ?? "#"}}" title="{{$youtube1->body ?? "#"}}"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="{{$youtube2->link ?? "#"}}" title="{{$youtube2->body ?? "#"}}"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Header Right-->
            </div>
        </div>
    </div>
    <!--End header-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="/" class="img-responsive">
                        <img
                            style="width: 16rem"
                            src="{{asset('assets/images/resources/logo.webp')}}"
                            alt="Logo perusahaan"
                            title="PT Ambulance Pintar Indonesia"
                        />
                    </a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
            <span class="icon fa fa-times-circle"></span>
        </div>
        <nav class="menu-box">
            <div class="nav-logo">
                <a href="/"
                ><img
                        src="{{asset('assets/images/resources/logo.webp')}}"
                        alt="Logo perusahaan"
                        title="PT Ambulance Pintar Indonesia"
                    /></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li>
                        <a href="{{$contactEmail->link ?? "#"}}" title="Email"
                        ><i class="fa-solid fa-envelope"></i
                            ></a>
                    </li>
                    <li>
                        <a href="{{$contactTelephone->link ?? "#"}}" title="Telepon"
                        ><i class="fa-solid fa-phone-volume"></i
                            ></a>
                    </li>
                    <li>
                        <a href="{{$contactWhatsapp->link ?? "#"}}" title="WhatsApp"
                        ><i class="fa-brands fa-whatsapp"></i
                            ></a>
                    </li>
                    <li>
                        <a href="{{$facebook->link ?? "#"}}" title="{{$facebook->body ?? "Set Social Media"}}"
                        ><i class="fa-brands fa-facebook"></i
                            ></a>
                    </li>
                    <li>
                        <a href="{{$youtube1->link ?? "#"}}" title="{{$youtube1->body ?? "Set Social Media"}}"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="{{$youtube2->link ?? "#"}}" title="{{$youtube2->body ?? "Set Social Media"}}"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
<!-- End Main header-->
