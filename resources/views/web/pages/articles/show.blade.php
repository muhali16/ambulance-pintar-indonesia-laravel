@extends("web.layouts.main")
@section("content")
    <style>
        /* Mengembalikan elemen ul dan ol ke gaya default HTML */
        #notStyled ul {
            /* Menghilangkan margin dan padding */
            margin-bottom: 5px; /* Jarak antara item daftar */
            padding-left: 20px; /* Jarak dari sisi kiri ke konten item */
            /* Mengembalikan list-style-type ke default */
            list-style-type: disc; /* Untuk unordered list */
        }

        #notStyled ol {
            /* Menghilangkan margin dan padding */
            margin-bottom: 5px; /* Jarak antara item daftar */
            padding-left: 20px; /* Jarak dari sisi kiri ke konten item */
            list-style-type: decimal; /* Untuk ordered list */
        }

        #notStyled ol li {
            /* Menghilangkan margin dan padding */
            margin: 0;
            padding: 0;
            list-style: decimal;
        }

        #notStyled ul li {
            /* Menghilangkan margin dan padding */
            margin: 0;
            padding: 0;
            list-style: disc;
        }

    </style>
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!--Start Blog Page Three-->
    <section class="blog-details-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details-content">
                        <div class="single-blog-style1 single-blog-style1--instyle3 overflow-hidden">
                            <div class="img-holder" style="width: 770px; height: 420px; background-image: url({{asset('storage/' . $article->thumbnail)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                                <div class="date-box p-3">
                                    <h6>
                                        {{date('d M', strtotime($article->created_at))}}
                                    </h6>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li>
                                        <i class="fa-solid fa-user mr-2" aria-hidden="true"></i>
                                        <a href="#">{{$article->user->name}}</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-layer-group mr-2" aria-hidden="true"></i>
                                        <a href="{{route('articles.index')}}?category={{$article->category->id}}">{{$article->category->name}}</a>
                                    </li>
                                    <li>
                                        <i
                                            class="fa-solid fa-calendar mr-2"
                                            aria-hidden="true"
                                        ></i>
                                        <a href="#">{{date('d M Y', strtotime($article->created_at))}}</a>
                                    </li>
                                </ul>
                                <div class="text-inner">
                                    <h3 class="blog-title">
                                        {{$article->title}}
                                    </h3>
                                </div>
                                <div id="notStyled">
                                    {!! $article->body !!}
                                </div>
                            </div>
                        </div>

                        <div class="tag-social-share-box">
                            <div class="tag-box">
                                <div class="title">
                                    <h3>Tags:</h3>
                                </div>
                                <ul class="tag-list">
                                    @foreach($tags as $tag)
                                    <li><a href="#">{{$tag}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="post-social-share">
                                <div class="post-social-share-links clearfix">
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
                                            <a href="{{$youtube1->link ?? "#"}}" title="{{$youtube1->body}}"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{$youtube2->link ?? "#"}}" title="{{$youtube2->body}}"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Karoseri Section -->
                        <div class="row">
                            <div class="single-sidebar-box col-sm-6">
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
                            <div class="single-sidebar-box col-sm-6">
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
                        </div>
                        <!-- End Karoseri Section -->
                        <div class="add-comment-box">
                            <div class="inner-title">
                                <h2>Leave a Comment</h2>
                            </div>
                            <form id="add-comment-form" action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <input
                                                        type="text"
                                                        name="fname"
                                                        value=""
                                                        placeholder="Your name"
                                                        required=""
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <input
                                                        type="email"
                                                        name="femail"
                                                        value=""
                                                        placeholder="Email address"
                                                        required=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-box">
                                                    <textarea
                                                        name="fcomments"
                                                        placeholder="Write message"
                                                        required="true"
                                                    ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="button-box">
                                                    <button class="btn-one" type="submit">
                                                        <span class="txt">Submit Comment</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Start Thm Sidebar Box-->
                <div class="col-xl-4 col-lg-5">
                    <div class="thm-sidebar-box">
                        <div class="single-sidebar-box">
                            <div class="sidebar-title">
                                <h3>Berita Terbaru</h3>
                            </div>
                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    @foreach($latestArticles as $article)
                                    <li>
                                        <div class="inner">
                                            <div class="img-box" style="width: 70px; height: 70px; background-image: url({{asset('storage/' . $article->thumbnail)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                                                <div class="overlay-content">
                                                    <a href="{{route('articles.show', ['article' => $article->slug])}}"
                                                    ><i
                                                            class="fa-solid fa-link"
                                                            aria-hidden="true"
                                                        ></i
                                                        ></a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <h4>
                                                    <a href="{{route('articles.show', ['article' => $article->slug])}}"
                                                    >{{$article->title}}</a
                                                    >
                                                </h4>
                                                <div class="admin pt-2">
                                                    <i class="fa-solid fa-clock mr-1"></i> {{now()->carbonize($article->created_at)->diffForHumans()}}
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
                                <h3>Artikel Popular</h3>
                            </div>
                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    @foreach($popularArticlesInMonth as $article)
                                        <li>
                                            <div class="inner">
                                                <div class="img-box" style="width: 70px; height: 70px; background-image: url({{asset('storage/' . $article->thumbnail)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                                                    <div class="overlay-content">
                                                        <a href="{{route('articles.show', ['article' => $article->slug])}}"
                                                        ><i
                                                                class="fa-solid fa-link"
                                                                aria-hidden="true"
                                                            ></i
                                                            ></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4>
                                                        <a href="{{route('articles.show', ['article' => $article->slug])}}"
                                                        >{{$article->title}}</a
                                                        >
                                                    </h4>
                                                    <div class="admin pt-2">
                                                        <span class="fa-regular fa-eye mr-1"></span> {{$article->views}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-box mt-5">
                            <div class="sidebar-title">
                                <h3>Kategori</h3>
                            </div>
                            <ul class="sidebar-categories-box">
                                @foreach($categories as $category)
                                <li><a href="{{route('articles.index')}}?category={{$category->id}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Thm Sidebar Box-->
            </div>
        </div>
    </section>
    <!--End Blog Page Three-->
    @include("web.layouts.footer")
@endsection
