@extends("web.layouts.main")
@section("content")
    <style>
        #notStyled ol li {
            /* Menghilangkan margin dan padding */
            margin-bottom: 5px; /* Jarak antara item daftar */
            padding-left: 10px; /* Jarak dari sisi kiri ke konten item */
            margin-left: 20px;
            /* Mengembalikan list-style-type ke default */
            /*list-style-type: disc; !* Untuk unordered list *!*/
            list-style: decimal;
        }

        /* Mengembalikan elemen ul dan ol ke gaya default HTML */
        #notStyled ul li {
            /* Menghilangkan margin dan padding */
            margin-bottom: 5px; /* Jarak antara item daftar */
            padding-left: 10px; /* Jarak dari sisi kiri ke konten item */
            margin-left: 20px;
            /* Mengembalikan list-style-type ke default */
            /*list-style-type: disc; !* Untuk unordered list *!*/
            list-style-image: url({{asset('assets/icon/check.svg')}});
        }
    </style>
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!--Start Service Details area -->
    <section class="service-details-area">
        <div class="container">
            <div class="row">
                <!--Start Service Details Sidebar -->
                <div class="col-xl-4 col-lg-5 order-box-2">
                    <div class="service-details__sidebar">

                        <div class="single-sidebar-box">
                            <div class="sidebar-title">
                                <h3>Produk Terbaik</h3>
                            </div>
                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    @foreach($bestAmbulanceProducts as $productA)
                                        <li>
                                            <div class="inner">
                                                <div class="img-box" style="width: 70px; height: 70px; background-image: url({{asset('storage/' . $productA->photo)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                                                    <div class="overlay-content">
                                                        <a href="{{route('products.show', ['productCategory' => $productA->product_category_id, 'product' => $productA->id])}}"
                                                        ><i
                                                                class="fa-solid fa-link"
                                                                aria-hidden="true"
                                                            ></i
                                                            ></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4>
                                                        <a href="{{route('products.show', ['productCategory' => $productA->product_category_id, 'product' => $productA->id])}}"
                                                        >{{$productA->name}}</a
                                                        >
                                                    </h4>
                                                    <div class="admin pt-2">
                                                        <p>{{$productA->caption}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="single-sidebar-box mt-3">
                            <div class="sidebar-title">
                                <h3>Non Ambulance</h3>
                            </div>
                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    @foreach($bestNonAmbulaceProducts as $productNA)
                                        <li>
                                            <div class="inner">
                                                <div class="img-box" style="width: 70px; height: 70px; background-image: url({{asset('storage/' . $productNA->photo)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                                                    <div class="overlay-content">
                                                        <a href="{{route('products.show', ['productCategory' => $productNA->product_category_id, 'product' => $productNA->id])}}"
                                                        ><i
                                                                class="fa-solid fa-link"
                                                                aria-hidden="true"
                                                            ></i
                                                            ></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4>
                                                        <a href="{{route('products.show', ['productCategory' => $productNA->product_category_id, 'product' => $productNA->id])}}"
                                                        >{{$productNA->name}}</a
                                                        >
                                                    </h4>
                                                    <div class="admin pt-2">
                                                        <p>{{$productNA->caption}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div
                            class="service-details-contact-info mt-5"
                        >
                            <div
                                class="sidebar-info-box-bg"
                                style="
                          background-image: url({{asset('assets/images/services/produk.jpg')}});
                        "
                            ></div>
                            <h3>Butuh bantuan?</h3>
                            <p>Konsultasikan ambulans sesuai dengan kebutuhan anda.</p>
                            <h2><a href="{{$contactWhatsapp->link}}">{{$contactWhatsapp->body}}</a></h2>
                        </div>

                        <div
                            class="info-download-box"
                        >
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-checked-1"></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="{{$productDetail->brosure}}">Download Brosur Produk</a></h5>
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
                                src="{{asset('storage/' . $productDetail->photo)}}"
                                alt="{{$productDetail->name}}"
                            />
                        </div>
                        <div class="text-box1">
                            <h2>{{$productDetail->name}}</h2>
                            <div id="notStyled">
                                {!! $productDetail->specification !!}
                            </div>
                        </div>

                        @if($productDetail->is_use_product_specification)
                        <div class="faq-style1__content">
                            <ul class="accordion-box">
                                @foreach($productCategories as $category)
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>{{$category->name}}</h3>
                                    </div>
                                    <div class="acc-content">
                                        <div id="notStyled">
                                            {!! $category->specification !!}
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
{{--                       <div class="text-box2">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-6">--}}
{{--                                    <div--}}
{{--                                        class="text-box2-single"--}}
{{--                                        data-aos="fade-right"--}}
{{--                                        data-aos-easing="linear"--}}
{{--                                        data-aos-duration="2500"--}}
{{--                                    >--}}
{{--                                        <h4>--}}
{{--                                            <span class="icon-right-arrow"></span> Help us Save a--}}
{{--                                            Life--}}
{{--                                        </h4>--}}
{{--                                        <p>--}}
{{--                                            Nullam mollis elit quis dusto is lacinia efficitur--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-xl-6">--}}
{{--                                    <div--}}
{{--                                        class="text-box2-single"--}}
{{--                                        data-aos="fade-left"--}}
{{--                                        data-aos-easing="linear"--}}
{{--                                        data-aos-duration="2500"--}}
{{--                                    >--}}
{{--                                        <h4>--}}
{{--                                            <span class="icon-right-arrow"></span> Join our Big--}}
{{--                                            Family--}}
{{--                                        </h4>--}}
{{--                                        <p>--}}
{{--                                            Nullam mollis elit quis dusto is lacinia efficitur--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="text-box3">--}}
{{--                            <p>--}}
{{--                                When an unknown printer took a galley of type and scrambled--}}
{{--                                it to make a type specimen book. It has survived not only--}}
{{--                                five centuries, but also the leap into electronic--}}
{{--                                typesetting. Lorem Ipsum has been the ndustry standard dummy--}}
{{--                                text ever since the 1500s.--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                        <div class="text-box4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-6">--}}
{{--                                    <div class="content-box">--}}
{{--                                        <h2>Service Benefits</h2>--}}
{{--                                        <p>--}}
{{--                                            Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                            velit esse cillum.--}}
{{--                                        </p>--}}

{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <span class="icon-checked"></span> In id diam nec--}}
{{--                                                nisi congue tincidunt--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <span class="icon-checked"></span> Pn malesuada--}}
{{--                                                purus a ligula dapibus--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <span class="icon-checked"></span> Vestibulum--}}
{{--                                                tincidunt arcu vel nisl--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <span class="icon-checked"></span> Sed tristique--}}
{{--                                                lorem non tesque--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-xl-6">--}}
{{--                                    <div class="img-box">--}}
{{--                                        <img--}}
{{--                                            src="assets/images/services/service-details-img2.jpg"--}}
{{--                                            alt=""--}}
{{--                                        />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                    </div>
                </div>
                <!--End Service Details Content -->
            </div>
        </div>
    </section>
    <!--End Service Details area -->
    @include("web.layouts.footer")
@endsection
