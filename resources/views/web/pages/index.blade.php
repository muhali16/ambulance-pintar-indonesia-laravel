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
                        <h2><a href="{{$contactWhatsapp->link}}">{{$contactWhatsapp->body}}</a></h2>
                        <p>
                            Butuh konsultasi? Hubungi Kami<br />
                        </p>
                    </div>
                </div>
            </div>
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                @forelse($heroSliders as $slide)
                <!-- Slide -->
                <div class="slide">
                    <div
                        class="image-layer"
                        style="
                            width: 1920px;
                            height: 800px;
                            background-image: url({{asset('storage/' . $slide->thumbnail)}});
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
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
                                    {{$slide->caption}}
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#produk">
                                    <span class="txt">
                                        Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide  -->
                @empty
                    <h2>Set Slider First!</h2>
                @endforelse
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

    @forelse($productCategories as $category)
    <!--Start Ambulance Style1 Area-->
    <section id="product" class="service-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <span class="icon-heartbeat"></span>
                </div>
                <div class="text-center">
                    <img class="rounded mx-auto d-block my-3" style="width: 30rem" src="{{asset('assets/images/resources/ecatalogue.png')}}" alt="LKPP E-Catalogue Logo">
                </div>
                <div class="sub-title">
                    <h3>Produk ambulans dan lainnya sudah tersedia di LKPP E-Catalogue.</h3>
                </div>
                <h2 style="letter-spacing: 10px">{{$category->name}}</h2>
            </div>
            <div class="row">
                @forelse($category->products()->where('is_publish', 1)->limit(3)->get() as $product)
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img src="{{asset('storage/' . $product->photo)}}" alt="{{$product->name}}" />
                        </div>
                        <div class="text-holder">
                            <h3><a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}">{{$product->name}}</a></h3>
                            <p>{{$product->caption}}</p>
                            <div class="btn-box">
                                <a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}"
                                >Lihat Lebih Detail <span class="icon-right-arrow"></span
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style1-->
                @empty
                    <div class="row container pt-5" style="min-height: 100%">
                        <h3 style="width: 100%" class="text-secondary text-center">Belum Produk Ambulans dan Lainnya</h3>
                    </div>
                @endforelse
            </div>
            <div style="text-align: center">
                <div class="btns-box mx-auto">
                    <a class="btn-one" href="{{route('products.index', ['productCategory' => $category->id])}}">
                <span class="txt">
                  Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Ambulance Style1 Area-->
    @empty
        <h1>Set Product Category First!</h1>
    @endforelse

{{--    <!--Start Non Ambulance Style1 Area-->--}}
{{--    <section class="service-style1-area">--}}
{{--        <div class="container">--}}
{{--            <div class="sec-title text-center">--}}
{{--                <div class="icon">--}}
{{--                    <span class="icon-heartbeat"></span>--}}
{{--                </div>--}}
{{--                <div class="text-center">--}}
{{--                    <img class="rounded mx-auto d-block my-3" style="width: 30rem" src="{{asset('assets/images/resources/ecatalogue.png')}}" alt="LKPP E-Catalogue Logo">--}}
{{--                </div>--}}
{{--                <div class="sub-title">--}}
{{--                    <h3>Produk ambulans dan lainnya sudah tersedia di LKPP E-Catalogue.</h3>--}}
{{--                </div>--}}
{{--                <h2 style="letter-spacing: 10px">NON AMBULANS</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @forelse($nonAmbulances as $product)--}}
{{--                    <!--Start Single Service Style1-->--}}
{{--                    <div class="col-xl-4 col-lg-4">--}}
{{--                        <div--}}
{{--                            class="single-service-style1 wow fadeInUp"--}}
{{--                            data-wow-delay="100ms"--}}
{{--                            data-wow-duration="1500ms"--}}
{{--                        >--}}
{{--                            <div class="img-holder">--}}
{{--                                <img src="{{asset('storage/' . $product->photo)}}" alt="{{$product->name}}" />--}}
{{--                            </div>--}}
{{--                            <div class="text-holder">--}}
{{--                                <h3><a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}">{{$product->name}}</a></h3>--}}
{{--                                <p>{{$product->caption}}</p>--}}
{{--                                <div class="btn-box">--}}
{{--                                    <a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}"--}}
{{--                                    >Lihat Lebih Detail <span class="icon-right-arrow"></span--}}
{{--                                        ></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--End Single Service Style1-->--}}
{{--                @empty--}}
{{--                    <div class="row container pt-5" style="min-height: 100%">--}}
{{--                        <h3 style="width: 100%" class="text-secondary text-center">Belum Produk Ambulans dan Lainnya</h3>--}}
{{--                    </div>--}}
{{--                @endforelse--}}
{{--            </div>--}}
{{--            <div style="text-align: center">--}}
{{--                <div class="btns-box mx-auto">--}}
{{--                    <a class="btn-one" href="all-product.html">--}}
{{--                <span class="txt">--}}
{{--                  Temukan Lebih Banyak<i class="icon-refresh arrow"></i>--}}
{{--                </span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--End Non Ambulance Style1 Area-->--}}

    <!--Start Testimonial Style1 Area-->
    <div class="sec-title text-center">
        <div class="icon">
            <span class="icon-heartbeat"></span>
        </div>
        <h2 style="letter-spacing: 10px">TESTIMONI</h2>
    </div>
    <section id="testimonial" class="testimonial-style1-area">
        <div
            class="shape wow slideInRight"
            data-wow-delay="400ms"
            data-wow-duration="3500ms"
        >
            <img class="zoom-fade" src="{{asset('assets/images/shape/shape-1.png')}}" alt="" />
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
                            @forelse($testimonies as $testy)
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text-fluid mt-4">
                                    <div class="sec-title sec-title--style2">
                                        <div class="icon">
                                            <span class="icon-heartbeat"></span>
                                        </div>
                                        <div class="sub-title">
                                            <h3>Testimoni</h3>
                                        </div>
                                        <h2>Apa kata mereka?</h2>
                                    </div>
                                    <div class="img-fluid">
                                        <img
                                            style="width: 50rem"
                                            src="{{asset('storage/' . $testy->thumbnail)}}"
                                            alt="{{$testy->institution_name}}"
                                        />
                                    </div>
                                    <div class="text mt-5">
                                        <p>
                                            {{$testy->body}}
                                        </p>
                                        <p class="text-white">
                                            <span>- {{$testy->institution_name}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Start Single Testimonial Style1-->
                            @empty
                                <h2>Set Testimony First!</h2>
                            @endforelse
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
                                Apa yang anda<br />
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
                                    >Produk<br />
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
                                    >Bedside to<br />
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

    <!-- Gallery -->
    <section id="gallery" class="blog-page-two">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <span class="icon-heartbeat"></span>
                </div>
                <h2 style="letter-spacing: 10px">GALLERY</h2>
            </div>

            <div class="row">
                @forelse($galleryPhotos as $photo)
                <!-- Start Single Image Gallery -->
                <div
                    class="service-details__content p-2 m-0 col-xl-4 col-lg-4 col-md-6"
                >
                    <div class="img-box1">
                        <img src="{{asset('storage/' . $photo->content)}}" alt="{{$photo->caption}}" />
                    </div>
                </div>
                <!-- End Single Image Gallery -->
                @empty
                    <h1>No Gallery Found</h1>
                @endforelse
            </div>
            <div style="text-align: center; padding: 20px;">
                <div class="btns-box mx-auto">
                    <a class="btn-one" href="{{route('gallery.index')}}">
                <span class="txt">
                  Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery -->

    <!--Start COMPONY PROFIL-->
    <section  class="service-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 ">
                    <div class="service-style1 ">
                        <div class="sec-title text-center">
                            <div class="icon">
                                <span class="icon-heartbeat"></span>
                            </div>
                            <div class="sub-title">
                                <h3></h3>
                            </div>
                            <h2 style="letter-spacing: 10px">COMPANNY PROFILE</h2>
                        </div>
                        <!-- Start yotube 1 -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="">
                                    <div class="single-features-style1 wow fadeInUp">
                                        <iframe
                                            class="mt-3"
                                            style="width: 100%; height: 30rem"
                                            src="https://www.youtube.com/embed/Qu6jI9auRJQ?si=MhPGqSbykrFmof_g&amp;controls=0"
                                            title="Company Profile PT Ambulance Pintar Indonesia"
                                            frameborder="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- End start youtube 1 -->

                            <!-- Start youtube 2 -->
                            <div class="col-sm-6">
                                <div class="">
                                    <div class="single-features-style1 wow fadeInUp">
                                        <iframe
                                            class="mt-3"
                                            style="width: 100%; height: 30rem"
                                            src="https://www.youtube.com/embed/elIjp0YQjsk?si=MhPGqSbykrFmof_g&amp;controls=0"
                                            title="Company Profile PT Ambulance Pintar Indonesia"
                                            frameborder="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Style3 Area-->

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
                @forelse($popularArticles as $article)
                <!--Start Single Blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div
                        class="single-blog-style1"
                        data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1000"
                    >
                        <div class="img-holder">
                            <img src="{{asset('storage/' . $article->thumbnail)}}" alt="{{$article->title}}" />
                        </div>
                        <div class="text-holder">
                            <div class="meta-info">
                                <p>
                                    <span class="icon-calendar"></span> {{date('l, j F Y', strtotime($article->created_at))}}
                                </p>
                            </div>
                            <h3>
                                <a href="{{route('articles.show', ['article' => $article->slug])}}"
                                >{{$article->title}}</a
                                >
                            </h3>
                            <p>
                                {!! str($article->body)->limit(50) !!}
                            </p>
                            <div class="btn-box">
                                <a href="{{route('articles.show', ['article' => $article->slug])}}">Baca Lebih Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Style1-->
                @empty
                    <div class="row container pt-5" style="min-height: 100%">
                        <h3 style="width: 100%" class="text-secondary text-center">Belum Ada Artikel</h3>
                    </div>
                @endforelse
            </div>
            <div style="text-align: center">
                <div class="btns-box mx-auto">
                    <a class="btn-one" href="{{route('articles.index')}}">
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
            background-image: url({{asset('assets/images/resources/slide-content.png')}});
          "
        ></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-gallery-style1__content">
                        <h2>
                            Kerja Sama API X BAZNAS YOUTUBE,<br />
                            Lihat Lebih Dekat.
                        </h2>
                        <iframe
                            class="mt-3"
                            style="width: 100%; height: 30rem"
                            src="https://www.youtube.com/embed/Qu6jI9auRJQ?si=MhPGqSbykrFmof_g&amp;controls=0"
                            title="Company Profile PT Ambulance Pintar Indonesia"
                            frameborder="1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                        <br>
                        <iframe
                            class="mt-3"
                            style="width: 100%; height: 30rem"
                            src="https://www.youtube.com/embed/elIjp0YQjsk?si=MhPGqSbykrFmof_g&amp;controls=0"
                            title="Company Profile PT Ambulance Pintar Indonesia"
                            frameborder="1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
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
                                {{$companyName->body ?? "Set Company Name"}}
                            </h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <div class="btn-box" >
                                    <a href="{{route('web.about')}}" style="color: rgb(228, 82, 82);"
                                    ><b>Tentang Kami</b> <span class="icon-right-arrow"></span
                                        ></a>
                                </div>
                            </div>
                            <h3>{{$address->description ?? "Set Address"}}</h3>
                            <p>
                                {{$address->body ?? "Set Address"}}
                            </p>
                            <div class="header-social-link">
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
                                        <a href="{{$facebook->link ?? "#"}}" title="{{$facebook->body}}"
                                        ><i class="fa-brands fa-facebook"></i
                                            ></a>
                                    </li>
                                    <li>
                                        <a href="{{$youtube1->link ?? "#"}}" title="{{$youtube1->body ?? "Set Youtube 1"}}"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$youtube2->link ?? "#"}}" title="{{$youtube2->body ?? "Set Youtube 2"}}"><i class="fa-brands fa-youtube"></i></a>
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
                                Kami Menjamin Pelanggan Mendapat <br />
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
                            @forelse($branchOffices as $branch)
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>{{$branch->city_name}}</h3>
                                </div>
                                <div class="acc-content">
                                    <h3>Alamat</h3>
                                    <p>
                                        {!! $branch->contact_address !!}
                                    </p>
                                    <div class="inner-img-box mt-3">
                                        <iframe
                                            src="{{$branch->maps_link}}"
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
                            @empty
                                <div class="row container pt-5" style="min-height: 100%">
                                    <h3 style="width: 100%" class="text-secondary text-center">Belum Cabang</h3>
                                </div>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Faq Page One-->
    @include("web.layouts.footer")
@endsection
