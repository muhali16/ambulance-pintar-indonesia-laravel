@extends("web.layouts.main")
@section("content")
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!-- Search Box Section -->
    <div class="sidebar-search-box">
        <form class="search-form container" action="{{route('web.search')}}" method="get">
            <input placeholder="Cari Artikel" name="search"  value="{{request()->search ?? ""}}" type="text" />
            <button type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <!-- End Search Box Section -->

    <!--Start Blog Page Two-->
    <section class="blog-page-two">
        <div class="container" style="min-height: 100%">
            <div class="mb-3">
                <h2>Produk Ambulans & Lainnya</h2>
                <hr class="border border-2" style="border-color: #990000">
            </div>
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
                        <h3 style="width: 100%" class="text-secondary text-center">Tidak ada produk ambulans dan lainnya untuk {{request()->search}}</h3>
                    </div>
                @endforelse
            </div>

            <div class="row">
                <div class="col-xl-12">
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Page Two-->

    <!--Start Blog Page Two-->
    <section class="blog-page-two">
        <div class="container" style="min-height: 100%">
            <div class="mb-3">
                <h2>Artikel & Berita</h2>
                <hr class="border border-2" style="border-color: #990000">
            </div>
            <div class="row">
                @forelse($articles as $article)
                    <!--Start Single Blog Style1-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div
                            class="single-blog-style1"
                        >
                            <div class="img-holder overflow-hidden" style="width: 370px; height: 290px; background-image: url({{asset('storage/' . $article->thumbnail)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                            </div>
                            <div class="text-holder">
                                <div class="meta-info">
                                    <p><span class="icon-user"></span> {{$article->user->name}}</p>
                                    <p><span class="icon-calendar"></span> {{date('j F, Y', strtotime($article->created_at))}}</p>
                                </div>
                                <h3>
                                    <a href="{{route('articles.show', ['article' => $article->slug])}}"
                                    >{{$article->title}}</a
                                    >
                                </h3>
                                <div class="btn-box">
                                    <a class="btn-one" href="{{route('articles.show', ['article' => $article->slug])}}">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog Style1-->
                @empty
                    <div class="row container pt-5" style="min-height: 100%">
                        <h3 style="width: 100%" class="text-secondary text-center">Tidak ada artikel untuk {{request()->search}}</h3>
                    </div>
                @endforelse
            </div>

            <div class="row">
                <div class="col-xl-12">
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Page Two-->
    @include("web.layouts.footer")
@endsection
