@extends("web.layouts.main")

@section("content")
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!-- Start Main Slider -->
    <section id="hero" class="main-slider style1">
        <div class="slider-box">
            <div
                class="slider-contact-info-box"
                data-aos="slide-left"
                data-aos-easing="linear"
                data-aos-duration="1500"
            >
                <div class="slider-contact-info">
                    <div class="icon">
                        <div class="inner">
                            <span class="icon-phone-call"></span>
                        </div>
                    </div>
                    <div class="text">
                        <h2><a href="tel:123456789">+ 1 (246) 333-0088</a></h2>
                        <p>
                            Butuh konsultasi? Hubungi Kami<br/>
                            <!-- untuk konsultasi ambulans yang sesuai dengan kebutuhan anda. -->
                        </p>
                    </div>
                </div>
            </div>
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div
                        class="image-layer"
                        style="
                  background-image: url(assets/images/resources/slide-content.png);
                "
                    ></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="sub-title">
                                <h3>
                                    Kualitas, Ketepatan, dan Kepuasan Adalah Prioritas Kami.
                                </h3>
                            </div>
                            <div class="big-title">
                                <h2>
                                    Ambulans yang Siap Beraksi:
                                    <br/>
                                    Kualitas, Kustomisasi, dan Keandalan
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                      <span class="txt">
                        Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div
                        class="image-layer"
                        style="
                  background-image: url(assets/images/resources/slide-content-2.png);
                "
                    ></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="sub-title">
                                <h3>
                                    Kualitas, Ketepatan, dan Kepuasan Adalah Prioritas Kami.
                                </h3>
                            </div>
                            <div class="big-title">
                                <h2>
                                    Dari Desain hingga Tugas<br/>
                                    Ambulans Unggul untuk Setiap Misi Penyelamatan
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                      <span class="txt">
                        Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div
                        class="image-layer"
                        style="
                  background-image: url(assets/images/resources/slide-content.png);
                "
                    ></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="sub-title">
                                <h3>
                                    Kualitas, Ketepatan, dan Kepuasan Adalah Prioritas Kami.
                                </h3>
                            </div>
                            <div class="big-title">
                                <h2>
                                    Rancangan Handal, Penyelamatan Maksimal<br/>
                                    Layanan Ambulans Unggulan
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                      <span class="txt">
                        Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!--Start Features Style1 Area-->
    <section class="features-style1-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-style1__content">
                        <ul>
                            <li>
                                <div class="single-features-style1">
                                    <div class="icon-holder">
                                        <div class="box"></div>
                                        <span class="icon-clinic"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="#">Perawatan</a></h3>
                                        <p>Perawatan menyeluruh agar ambulans anda terjaga.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-features-style1">
                                    <div class="icon-holder">
                                        <div class="box"></div>
                                        <span class="icon-diploma"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="#">Bersertifikasi</a></h3>
                                        <p>
                                            Sertifikasi ISO 9001:2015, ISO 45001:2018, ISO
                                            13485:2016, ISO 14001:2015.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-features-style1">
                                    <div class="icon-holder">
                                        <div class="box"></div>
                                        <span class="icon-ambulance-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="#">Karoseri</a></h3>
                                        <p>
                                            Sesuaikan body dan interior dengan kebutuhan anda.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Style1 Area-->

    <!--Start Service Style1 Area-->
    <section id="product" class="service-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <span class="icon-heartbeat"></span>
                </div>
                <div class="sub-title">
                    <h3>Apa yang anda butuhkan? Produk pilihan terbaik kami.</h3>
                </div>
                <h2 style="letter-spacing: 10px">PRODUK</h2>
            </div>

            <div class="row">
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <h3><a href="product-detail.html">Ambulans Suzuki</a></h3>
                            <p>Ambulans dibuat menggunakan body yang kuat dari Suzuki.</p>
                            <div class="btn-box">
                                <a href="product-detail.html"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <h3><a href="product-detail.html">Ambulans Suzuki</a></h3>
                            <p>Ambulans dibuat menggunakan body yang kuat dari Suzuki.</p>
                            <div class="btn-box">
                                <a href="product-detail.html"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <h3><a href="product-detail.html">Ambulans Suzuki</a></h3>
                            <p>Ambulans dibuat menggunakan body yang kuat dari Suzuki.</p>
                            <div class="btn-box">
                                <a href="product-detail.html"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <h3><a href="product-detail.html">Ambulans Suzuki</a></h3>
                            <p>Ambulans dibuat menggunakan body yang kuat dari Suzuki.</p>
                            <div class="btn-box">
                                <a href="product-detail.html"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <h3><a href="product-detail.html">Ambulans Suzuki</a></h3>
                            <p>Ambulans dibuat menggunakan body yang kuat dari Suzuki.</p>
                            <div class="btn-box">
                                <a href="product-detail.html"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <h3><a href="product-detail.html">Ambulans Suzuki</a></h3>
                            <p>Ambulans dibuat menggunakan body yang kuat dari Suzuki.</p>
                            <div class="btn-box">
                                <a href="product-detail.html"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
            </div>
            <div style="text-align: center">
                <div class="btns-box mx-auto">
                    <a class="btn-one" href="all-product.html">
                <span class="txt">
                  Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Service Style1 Area-->

    <!--Start Testimonial Style1 Area-->
    <section id="testimonial" class="testimonial-style1-area">
        <div
            class="shape wow slideInRight"
            data-wow-delay="400ms"
            data-wow-duration="3500ms"
        >
            <img class="zoom-fade" src="assets/images/shape/shape-1.png" alt=""/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="bg-color"></div>
                        <div
                            class="theme_carousel testimonial-carousel owl-theme owl-carousel owl-nav-style-one"
                            data-options='{
                                    "loop": true,
                                    "margin": 0,
                                    "autoheight":true,
                                    "lazyload":true,
                                    "nav": true,
                                    "dots": false,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "smartSpeed": 500,
                                    "navText": ["<span class=\"left icon-next\"></span>",
                                    "<span class=\"right icon-next\"></span>"],
                                    "responsive":{
                                    "0" :{ "items": "1" },
                                    "600" :{ "items" : "1" },
                                    "768" :{ "items" : "1" },
                                    "992":{ "items" : "1" },
                                    "1200":{ "items" : "1" }
                                }
                            }'
                        >
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="img-holder">
                                    <img
                                        src="assets/images/testimonial/testimonial-v1-1.jpg"
                                        alt=""
                                    />
                                    <div class="overlay-content">
                                        <div class="quote-icon">
                                            <img src="assets/images/icon/quote.png" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="sec-title sec-title--style2">
                                        <div class="icon">
                                            <span class="icon-heartbeat"></span>
                                        </div>
                                        <div class="sub-title">
                                            <h3>Testimoni</h3>
                                        </div>
                                        <h2>Apa kata mereka?</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            This is due to their excellent service, competitive
                                            pricing and customer support. It’s throughly refresing
                                            to get such a personal touch.
                                        </p>
                                        <h3>
                                            Ahmad Zulhan
                                            <span>- Kepala Dinas Kesehatan Kabupaten Bekasi</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="img-holder">
                                    <img
                                        src="assets/images/testimonial/testimonial-v1-1.jpg"
                                        alt=""
                                    />
                                    <div class="overlay-content">
                                        <div class="quote-icon">
                                            <img src="assets/images/icon/quote.png" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <div class="sec-title sec-title--style2">
                                        <div class="icon">
                                            <span class="icon-heartbeat"></span>
                                        </div>
                                        <div class="sub-title">
                                            <h3>Testimoni Kami</h3>
                                        </div>
                                        <h2>Apa kata mereka?</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            This is due to their excellent service, competitive
                                            pricing and customer support. It’s throughly refresing
                                            to get such a personal touch.
                                        </p>
                                        <h3>
                                            Ahmad Zulhan
                                            <span>- Kepala Dinas Kesehatan Kabupaten Bekasi</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Style1 Area-->

    <!--Start Features Style2 Area-->
    <section class="features-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-style2__title">
                        <div class="sec-title">
                            <div class="icon">
                                <span class="icon-heartbeat"></span>
                            </div>
                            <div class="sub-title">
                                <h3>Benefit</h3>
                            </div>
                            <h2>
                                Apa yang anda<br/>
                                dapatkan dari kami?
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Kami menjaga Kualitas, Ketepatan, dan Kepuasan pelanggan
                                agar kami dapat terus memberikan produk terbaik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="features-style2__content">
                        <!--Start single Features Style2-->
                        <li
                            class="single-features-style2"
                            data-aos="fade-left"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                        >
                            <div class="icon-holder">
                                <span class="icon-medal"></span>
                            </div>
                            <div class="text-holder">
                                <h3>
                                    <a href="#"
                                    >Produk<br/>
                                        Terbaik</a
                                    >
                                </h3>
                                <p>Ambulans Berkualitas untuk Keselamatan.</p>
                            </div>
                        </li>
                        <!--End single Features Style2-->
                        <!--Start single Features Style2-->
                        <li
                            class="single-features-style2"
                            data-aos="fade-right"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                        >
                            <div class="icon-holder">
                                <span class="icon-safety"></span>
                            </div>
                            <div class="text-holder">
                                <h3>
                                    <a href="#">Standar Tinggi </a>
                                </h3>
                                <p>Standar yang tinggi untuk keselamatan.</p>
                            </div>
                        </li>
                        <!--End single Features Style2-->
                        <!--Start single Features Style2-->
                        <li
                            class="single-features-style2"
                            data-aos="fade-left"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                        >
                            <div class="icon-holder">
                                <span class="icon-health-insurance"></span>
                            </div>
                            <div class="text-holder">
                                <h3>
                                    <a href="#"
                                    >Bedside to<br/>
                                        Bedside Care</a
                                    >
                                </h3>
                                <p>Ambulans Terpercaya untuk Setiap Misi.</p>
                            </div>
                        </li>
                        <!--End single Features Style2-->
                        <!--Start single Features Style2-->
                        <li
                            class="single-features-style2"
                            data-aos="fade-right"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                        >
                            <div class="icon-holder">
                                <span class="icon-money-exchange"></span>
                            </div>
                            <div class="text-holder">
                                <h3>
                                    <a href="#">Sepadan</a>
                                </h3>
                                <p>Ambulans Berkualitas dengan Harga Sepadan.</p>
                            </div>
                        </li>
                        <!--End single Features Style2-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Style2 Area-->

    <!--Start Partner Area-->
    <section class="partner-area">
        <div class="container">
            <div class="brand-content">
                <div
                    class="inner"
                    data-aos="slide-up"
                    data-aos-easing="linear"
                    data-aos-duration="1000"
                >
                    <ul
                        class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1 rtl-carousel"
                    >
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"
                            ><img
                                    src="assets/images/brand/omni.png"
                                    alt="Customer Logo"
                                /></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"
                            ><img
                                    src="assets/images/brand/sentra-medika.png"
                                    alt="Customer Logo"
                                    width="100%"
                                /></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"
                            ><img
                                    src="assets/images/brand/siloam.png"
                                    alt="Customer Logo"
                                    width="100%"
                                /></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Partner Area-->

    <!--Start slogan area-->
    <section class="slogan-area">
        <div
            class="map-box wow slideInRight"
            data-wow-delay="1400ms"
            data-wow-duration="5500ms"
        >
            <img class="float-bob" src="assets/images/shape/map.png" alt=""/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="slogan-img-box">
                        <div
                            class="inner wow slideInLeft"
                            data-wow-delay="400ms"
                            data-wow-duration="2000ms"
                        >
                            <img
                                class="float-bob-y"
                                src="assets/images/resources/slogan.png"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="slogan-text-box">
                        <h2>
                            Tertarik lebih dalam dengan <br/>
                            ambulans kami?
                        </h2>
                        <div class="slogan-btn-box mt-3">
                            <a class="btn-one" href="#">
                                <span class="txt">Unduh Brosur</span>
                            </a>
                        </div>
                        <h4>
                            Atau hubungi kami <br/>
                            <br/>
                            <a href="#">+ 1- (246) 333-0089</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->

    <!--Start Partner Area-->
    <section class="partner-area" style="margin-top: 100px">
        <div class="container">
            <div class="brand-content">
                <div
                    class="inner"
                    data-aos="slide-up"
                    data-aos-easing="linear"
                    data-aos-duration="1000"
                >
                    <ul
                        class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1 rtl-carousel"
                    >
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"
                            ><img
                                    src="assets/images/brand/omni.png"
                                    alt="Customer Logo"
                                /></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"
                            ><img
                                    src="assets/images/brand/sentra-medika.png"
                                    alt="Customer Logo"
                                    width="100%"
                                /></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"
                            ><img
                                    src="assets/images/brand/siloam.png"
                                    alt="Customer Logo"
                                    width="100%"
                                /></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Partner Area-->

    <!--Start Blog Style1 Area-->
    <section id="article" class="blog-style1-area">
        <div class="gray-bg"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <span class="icon-heartbeat"></span>
                </div>
                <div class="sub-title">
                    <h3>Berita dan artikel terbaru kami.</h3>
                </div>
                <h2 style="letter-spacing: 10px">ARTIKEL</h2>
            </div>
            <div class="row">
                <!--Start Single Blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-blog-style1"
                        data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1000"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <div class="meta-info">
                                <p>
                                    <span class="icon-calendar"></span> Senin, 12 September
                                    2024
                                </p>
                            </div>
                            <h3>
                                <a href="blog-detail.html"
                                >Trusted, International Air Ambulance Company</a
                                >
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, coned sectetur notte elit sed
                                do.
                            </p>
                            <div class="btn-box">
                                <a href="blog-detail.html">Baca Lebih Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Style1-->
                <!--Start Single Blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-blog-style1"
                        data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1000"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <div class="meta-info">
                                <p>
                                    <span class="icon-calendar"></span> Senin, 12 September
                                    2024
                                </p>
                            </div>
                            <h3>
                                <a href="blog-detail.html"
                                >Trusted, International Air Ambulance Company</a
                                >
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, coned sectetur notte elit sed
                                do.
                            </p>
                            <div class="btn-box">
                                <a href="blog-detail.html">Baca Lebih Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Style1-->
                <!--Start Single Blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-blog-style1"
                        data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1000"
                    >
                        <div class="img-holder">
                            <img src="assets/images/services/produk.jpg" alt=""/>
                        </div>
                        <div class="text-holder">
                            <div class="meta-info">
                                <p>
                                    <span class="icon-calendar"></span> Senin, 12 September
                                    2024
                                </p>
                            </div>
                            <h3>
                                <a href="blog-detail.html"
                                >Trusted, International Air Ambulance Company</a
                                >
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, coned sectetur notte elit sed
                                do.
                            </p>
                            <div class="btn-box">
                                <a href="blog-detail.html">Baca Lebih Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Style1-->
            </div>
            <div style="text-align: center">
                <div class="btns-box mx-auto">
                    <a class="btn-one" href="all-article.html">
                <span class="txt">
                  Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->

    <!--Start Features Style3 Area-->
    <section id="gallery" class="video-gallery-style1-area">
        <div
            class="video-gallery-style1__bg"
            style="
            background-image: url(assets/images/resources/slide-content.png);
          "
        ></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-gallery-style1__content">
                        <h2>
                            Kami Menyediakan Produk Terbaik,<br/>
                            Lihat Lebih Dekat.
                        </h2>
                        <iframe
                            class="mt-3"
                            style="width: 100%; height: 30rem"
                            src="https://www.youtube.com/embed/Xg8KYwl_2eU?si=MhPGqSbykrFmof_g&amp;controls=0"
                            title="Company Profile PT Ambulance Pintar Indonesia"
                            frameborder="1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                        <!-- <div class="video-gallery-style1">
                          <div
                            class="icon wow zoomIn animated"
                            data-wow-delay="300ms"
                            data-wow-duration="1500ms"
                          >
                            <a class="video-popup" title="Video Gallery" href="#">
                              <span class="icon-play-button"></span>
                            </a>
                          </div>
                        </div> -->
                        <div class="slogan-btn-box mt-3">
                            <a class="btn-one px-5" href="gallery.html">
                                <span class="txt">Lihat Galeri Kami</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Style3 Area-->

    <!--Start Features Style4 Area-->
    <section id="contact" class="features-style4-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="features-style4__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h3>Tentang Kami</h3>
                            </div>
                            <h2 class="notranslate">
                                PT Ambulance Pintar <br/>Indonesia
                            </h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p>#Deskripsi Perusahaan#</p>
                            </div>
                            <h3>Alamat Utama</h3>
                            <p>
                                Griya Asri Bahagia, Blok E2 No. 13, <br/>
                                Kel. Bahagia, Kec. Babelan, Bekasi 17610
                            </p>
                            <div class="header-social-link">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#" title="Email"
                                        ><i class="fa-solid fa-envelope"></i
                                            ></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Telepon"
                                        ><i class="fa-solid fa-phone-volume"></i
                                            ></a>
                                    </li>
                                    <li>
                                        <a href="#" title="WhatsApp"
                                        ><i class="fa-brands fa-whatsapp"></i
                                            ></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Facebook"
                                        ><i class="fa-brands fa-facebook"></i
                                            ></a>
                                    </li>
                                    <li>
                                        <a href="#" title="X"
                                        ><i class="fa-brands fa-x-twitter"></i
                                            ></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Youtube"
                                        ><i class="fa-brands fa-youtube"></i
                                            ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="features-style4__image-box">
                        <div class="top-text text-center">
                            <h3>
                                Kami Menjamin Pelanggan Mendapat <br/>
                                Standar Kualitas Tinggi
                            </h3>
                        </div>
                        <div class="inner-img-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.679339706034!2d107.02192737407803!3d-6.1736683604957445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894a3b26f3c9%3A0xd1041d4cde894037!2sPT.%20Ambulance%20Pintar%20Indonesia%20Official%20%2F%2F%20Jual%20Mobil%20Ambulance%20Ready%20Stock!5e0!3m2!1sid!2sid!4v1716826627078!5m2!1sid!2sid"
                                width="100%"
                                height="590"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Style4 Area-->

    <!--Start Faq Page One-->
    <section id="branch" class="faq-page-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-style2__title">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h3>Cabang</h3>
                            </div>
                            <h2>Dimana Anda Bisa Menemukan Kami?</h2>
                        </div>
                    </div>
                    <div class="faq-style1-content">
                        <ul class="accordion-box">
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>Bekasi</h3>
                                </div>
                                <div class="acc-content">
                                    <h3>Alamat</h3>
                                    <p>
                                        Griya Asri Bahagia, Blok E2 No. 13, <br/>
                                        Kel. Bahagia, Kec. Babelan, Bekasi 17610
                                    </p>
                                    <div class="header-social-link">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="#" title="Email"
                                                ><i class="fa-solid fa-envelope"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Telepon"
                                                ><i class="fa-solid fa-phone-volume"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="WhatsApp"
                                                ><i class="fa-brands fa-whatsapp"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Facebook"
                                                ><i class="fa-brands fa-facebook"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="X"
                                                ><i class="fa-brands fa-x-twitter"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Youtube"
                                                ><i class="fa-brands fa-youtube"></i
                                                    ></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inner-img-box mt-3">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.679339706034!2d107.02192737407803!3d-6.1736683604957445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894a3b26f3c9%3A0xd1041d4cde894037!2sPT.%20Ambulance%20Pintar%20Indonesia%20Official%20%2F%2F%20Jual%20Mobil%20Ambulance%20Ready%20Stock!5e0!3m2!1sid!2sid!4v1716826627078!5m2!1sid!2sid"
                                            width="100%"
                                            height="200"
                                            style="border: 0"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                        ></iframe>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>Cikarang</h3>
                                </div>
                                <div class="acc-content">
                                    <h3>Alamat</h3>
                                    <p>
                                        Griya Asri Bahagia, Blok E2 No. 13, <br/>
                                        Kel. Bahagia, Kec. Babelan, Bekasi 17610
                                    </p>
                                    <div class="header-social-link">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="#" title="Email"
                                                ><i class="fa-solid fa-envelope"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Telepon"
                                                ><i class="fa-solid fa-phone-volume"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="WhatsApp"
                                                ><i class="fa-brands fa-whatsapp"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Facebook"
                                                ><i class="fa-brands fa-facebook"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="X"
                                                ><i class="fa-brands fa-x-twitter"></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Youtube"
                                                ><i class="fa-brands fa-youtube"></i
                                                    ></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inner-img-box mt-3">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.679339706034!2d107.02192737407803!3d-6.1736683604957445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894a3b26f3c9%3A0xd1041d4cde894037!2sPT.%20Ambulance%20Pintar%20Indonesia%20Official%20%2F%2F%20Jual%20Mobil%20Ambulance%20Ready%20Stock!5e0!3m2!1sid!2sid!4v1716826627078!5m2!1sid!2sid"
                                            width="100%"
                                            height="200"
                                            style="border: 0"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                        ></iframe>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Faq Page One-->
    @include("web.layouts.footer")
@endsection
