@extends("web.layouts.main")
@section("content")
    @include("web.layouts.preloader")
    @include("web.layouts.header")

    @if(!is_null($articles))
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
    @endif

    @if(!isset(request()->category) || !isset(request()->search))
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div
            class="breadcrumb-area-bg"
            style="
            width: 1920px;
            height: 400px;
            background-image: url({{asset('assets/images/resources/api3.webp')}});
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover
          "
        ></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div
                            class="title"
                            data-aos="fade-up"
                            data-aos-easing="linear"
                            data-aos-duration="1500"
                        >
                            <h2>Artikel & Berita</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->
    @endif

    <!--Start Blog Page Two-->
    <section class="blog-page-two">
        <div class="container" style="min-height: 100%">
            @if(isset(request()->category)) <h2 class="mb-5">Category: {{$category->name}}</h2> @endif
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
                        <h3 style="width: 100%" class="text-secondary text-center">Belum Ada Artikel</h3>
                    </div>
                @endforelse
            </div>

            <div class="row">
                <div class="col-xl-12">
                    {{$articles->links()}}
{{--                    <ul class="styled-pagination text-center clearfix">--}}
{{--                        <li class="arrow prev">--}}
{{--                            <a href="#"><span class="icon-right-arrow left"></span></a>--}}
{{--                        </li>--}}
{{--                        <li class="active"><a href="#">1</a></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li class="arrow next">--}}
{{--                            <a href="#"><span class="icon-right-arrow"></span></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Page Two-->
    @include("web.layouts.footer")
@endsection
