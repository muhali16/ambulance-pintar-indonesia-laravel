@extends("web.layouts.main")
@section("content")
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!-- Search Box Section -->
    <section>
        <div class="sidebar-search-box" style="padding-top: 6rem">
            <form class="search-form container" action="{{route('web.search')}}" method="get">
                <input placeholder="Cari Artikel" name="search"  value="{{request()->search ?? ''}}" type="text" />
                <button type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </section>
    <!-- End Search Box Section -->

    @if($productCategory->name === "Ambulance")
    <!--Start Blog Style2 Area-->
    <section class="mt-5 ltr" style="position: relative;display: block;padding: 10px 0 10px;background: #ffffff;z-index: 10;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="blog-style2__title">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h3>{{$productCategory->name}}</h3>
                            </div>
                            <h2>
                                {{$productCategory->name . " "}} Terbaik<br />
                                Dari Kami
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="blog-style2-custom-nav">
                            <button class="owl-nav-prev">
                                <span class="icon-next"></span>
                            </button>
                            <button class="owl-nav-next">
                                <span class="icon-next"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="blog-style2__content">
                        <div
                            class="theme_carousel blog-style2-carousel owl-theme owl-carousel owl-nav-style-one thm-owl__carousel--custom-nav rtl-carousel"
                            data-owl-nav-prev=".owl-nav-prev"
                            data-owl-nav-next=".owl-nav-next"
                            data-options='{
                                "loop": true,
                                "margin": 30,
                                "autoheight":true,
                                "lazyload":true,
                                "nav": false,
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
                                "992":{ "items" : "2" },
                                "1200":{ "items" : "2.06" }
                            }
                        }'
                        >
                            @foreach($bestProducts as $product)
                            <!--Start Single Service Style1-->
                            <div>
                                <div
                                    class="single-service-style1 wow fadeInUp"
                                    data-wow-delay="100ms"
                                    data-wow-duration="1500ms"
                                >
                                    <div class="img-holder">
                                        <img src="{{asset('storage/' . $product->photo)}}" alt="{{$product->name}}" />
                                    </div>
                                    <div class="text-holder">
                                        <h3>
                                            <a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}">{{$product->name}}</a>
                                        </h3>
                                        <p>
                                            {{$product->caption}}
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}"
                                            >Lihat Lebih Detail
                                                <span class="icon-right-arrow"></span
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style1-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Style2 Area-->
    @endif

    <!--Start Service page-->
    <section class="service-page">
        <div class="container">
            <div class="row">
                @forelse($products as $product)
                <!--Start Single Service Style1-->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div
                        class="single-service-style1 wow fadeInUp"
                        data-wow-delay="100ms"
                        data-wow-duration="500ms"
                    >
                        <div class="img-holder">
                            <img src="{{asset('storage/' . $product->photo)}}" alt="{{$product->name}}" />
                        </div>
                        <div class="text-holder">
                            <h3><a href="{{route('products.show', ['productCategory' => $product->product_category_id, 'product' => $product->id])}}">{{$product->name}}</a></h3>
                            <p>Jadikan lebih banyak ahli dengan</p>
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
                        <h3 style="width: 100%" class="text-secondary text-center">Belum Ada Produk</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!--Start Service page-->
    @include("web.layouts.footer")
@endsection
