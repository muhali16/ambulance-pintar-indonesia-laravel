@extends("web.layouts.main")
@section("content")
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!--Start Service Details area -->
    <section class="service-details-area">
        <div class="container">
            <div class="row">
                <!--Start Service Details Sidebar -->
                <div class="col-xl-4 col-lg-5 order-box-2">
                    <div class="service-details__sidebar">
                        <div
                            class="view-all-service"
                            data-aos="slide-up"
                            data-aos-easing="linear"
                            data-aos-duration="1000"
                        >
                            <ul class="service-pages">
                                <li class="active">
                                    <a href="#">
                                        Spesifikasi Ekonomi <span class="icon-next-1"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        Spesifikasi Standar 1 <span class="icon-next-1"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        Spesifikasi Standar 2 <span class="icon-next-1"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        Spesifikasi Deluxe <span class="icon-next-1"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        Spesifikasi Mobil Jenazah
                                        <span class="icon-next-1"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="service-details-contact-info"
                            data-aos="slide-up"
                            data-aos-easing="linear"
                            data-aos-duration="1000"
                        >
                            <div
                                class="sidebar-info-box-bg"
                                style="
                          background-image: url(assets/images/services/produk.jpg);
                        "
                            ></div>
                            <h3>Butuh bantuan?</h3>
                            <p>Konsultasikan ambulans sesuai dengan kebutuhan anda.</p>
                            <h2><a href="#">+ 1- (246) 333-0089</a></h2>
                        </div>

                        <div
                            class="info-download-box"
                            data-aos="slide-up"
                            data-aos-easing="linear"
                            data-aos-duration="1000"
                        >
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-checked-1"></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="#">Download our Broucher</a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Service Details Sidebar -->

                <!--Start Service Details Content -->
                <div class="col-xl-8 col-lg-7 order-box-1">
                    <div class="service-details__content">
                        <div class="img-box1">
                            <img
                                src="assets/images/services/service-details-1-img1.jpg"
                                alt=""
                            />
                        </div>

                        <div class="text-box1">
                            <h2>Ambulans Suzuki</h2>
                            <p>
                                Lorem ipsum is simply free text used by copytyping
                                refreshing. Neque porro est qui dolorem ipsum quia quaed
                                inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Aelltes port lacus quis enim var sed
                                efficitur turpis gilla sed sit amet finibus eros. Lorem
                                Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the ndustry standard dummy
                                text ever since the 1500s.
                            </p>
                            <p>
                                It has survived not only five centuries. Lorem Ipsum is
                                simply dummy text of the new design printng and type setting
                                Ipsum take a look at our round. When an unknown printer took
                                a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the
                                leap into electronic typesetting.
                            </p>
                        </div>

                        <div class="text-box2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div
                                        class="text-box2-single"
                                        data-aos="fade-right"
                                        data-aos-easing="linear"
                                        data-aos-duration="2500"
                                    >
                                        <h4>
                                            <span class="icon-right-arrow"></span> Help us Save a
                                            Life
                                        </h4>
                                        <p>
                                            Nullam mollis elit quis dusto is lacinia efficitur
                                        </p>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div
                                        class="text-box2-single"
                                        data-aos="fade-left"
                                        data-aos-easing="linear"
                                        data-aos-duration="2500"
                                    >
                                        <h4>
                                            <span class="icon-right-arrow"></span> Join our Big
                                            Family
                                        </h4>
                                        <p>
                                            Nullam mollis elit quis dusto is lacinia efficitur
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-box3">
                            <p>
                                When an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic
                                typesetting. Lorem Ipsum has been the ndustry standard dummy
                                text ever since the 1500s.
                            </p>
                        </div>

                        <div class="text-box4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="content-box">
                                        <h2>Service Benefits</h2>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum.
                                        </p>

                                        <ul>
                                            <li>
                                                <span class="icon-checked"></span> In id diam nec
                                                nisi congue tincidunt
                                            </li>
                                            <li>
                                                <span class="icon-checked"></span> Pn malesuada
                                                purus a ligula dapibus
                                            </li>
                                            <li>
                                                <span class="icon-checked"></span> Vestibulum
                                                tincidunt arcu vel nisl
                                            </li>
                                            <li>
                                                <span class="icon-checked"></span> Sed tristique
                                                lorem non tesque
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="img-box">
                                        <img
                                            src="assets/images/services/service-details-img2.jpg"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-style1__content">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Interdum et malesuada fames ac ante ipsum</h3>
                                    </div>
                                    <div class="acc-content current">
                                        <p>
                                            Suspendisse finibus urna mauris, vitae consequat quam
                                            vel. Vestibulum leo ligula, vit commodo nisl Sed
                                            luctus venenatis pellentesque.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Maecenas condimentum sollicitudin ligula.</h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>
                                            Suspendisse finibus urna mauris, vitae consequat quam
                                            vel. Vestibulum leo ligula, vit commodo nisl Sed
                                            luctus venenatis pellentesque.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Duis rhoncus orci ut metus rhoncus.</h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>
                                            Suspendisse finibus urna mauris, vitae consequat quam
                                            vel. Vestibulum leo ligula, vit commodo nisl Sed
                                            luctus venenatis pellentesque.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Service Details Content -->
            </div>
        </div>
    </section>
    <!--End Service Details area -->
    @include("web.layouts.footer")
@endsection
