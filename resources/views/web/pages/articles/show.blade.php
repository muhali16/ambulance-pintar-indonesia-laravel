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
                        <div class="single-blog-style1 single-blog-style1--instyle3">
                            <div class="img-holder" style="width: 770px; height: 420px; background-image: url({{asset('storage/' . $article->thumbnail)}}); background-repeat: no-repeat; background-position: center; background-size: cover">
{{--                                <img--}}
{{--                                    src="{{asset('storage/' . $article->thumbnail)}}"--}}
{{--                                    alt=""--}}
{{--                                />--}}
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
                                            <a href="mailto:azmbkhry@gmail.com" title="Email"
                                            ><i class="fa-solid fa-envelope"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a href="tel:+6285893210906" title="Telepon"
                                            ><i class="fa-solid fa-phone-volume"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/6285173110904" title="WhatsApp"
                                            ><i class="fa-brands fa-whatsapp"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=61550623351891" title="Facebook"
                                            ><i class="fa-brands fa-facebook"></i
                                                ></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@ambulancepintarindonesia6897"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@1979imron"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

{{--                        <!-- Comment Box -->--}}
{{--                        <div class="comment-box">--}}
{{--                            <div class="inner-title">--}}
{{--                                <h2>2 Comments</h2>--}}
{{--                            </div>--}}
{{--                            <div class="outer-box">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <!--Start single comment-->--}}
{{--                                        <div class="single-comment">--}}
{{--                                            <div class="single-comment-box">--}}
{{--                                                <div class="img-holder">--}}
{{--                                                    <img src="{{asset('assets/images/blog/author-2.jpg')}}" alt="Awesome Image">--}}
{{--                                                </div>--}}
{{--                                                <div class="text-holder">--}}
{{--                                                    <div class="top">--}}
{{--                                                        <div class="name">--}}
{{--                                                            <h3>Kevin Martin</h3>--}}
{{--                                                            <p class="text-sm">From PT Sultan Ageng</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="text">--}}
{{--                                                        <p>Lorem ipsum is simply free text used by copytyping--}}
{{--                                                            refreshing. Neque porro est qui dolorem ipsum quia quaed--}}
{{--                                                            inventore veritatis et quasi architecto beatae vitae--}}
{{--                                                            dicta sunt explicabo porro est qui dolorem.</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-holder mt-4">--}}
{{--                                                    <div class="top">--}}
{{--                                                        <div class="name">--}}
{{--                                                            <h6 class="mb-3"><i class="fa-solid fa-reply mr-2"></i>Reply</h6>--}}
{{--                                                            <h3 class="text-sm">Admin</h3>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="text">--}}
{{--                                                        <p>Lorem ipsum is simply free text used by copytyping--}}
{{--                                                            refreshing. Neque porro est qui dolorem ipsum quia quaed--}}
{{--                                                            inventore veritatis et quasi architecto beatae vitae--}}
{{--                                                            dicta sunt explicabo porro est qui dolorem.</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--End single comment-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Comment Box -->--}}

{{--                        <div class="add-comment-box">--}}
{{--                            <div class="inner-title">--}}
{{--                                <h2>Leave a Comment</h2>--}}
{{--                            </div>--}}
{{--                            <form id="add-comment-form" action="#">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="input-box">--}}
{{--                                                    <input--}}
{{--                                                        type="text"--}}
{{--                                                        name="fname"--}}
{{--                                                        value=""--}}
{{--                                                        placeholder="Your name"--}}
{{--                                                        required=""--}}
{{--                                                    />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="input-box">--}}
{{--                                                    <input--}}
{{--                                                        type="email"--}}
{{--                                                        name="femail"--}}
{{--                                                        value=""--}}
{{--                                                        placeholder="Email address"--}}
{{--                                                        required=""--}}
{{--                                                    />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="input-box">--}}
{{--                                                    <textarea--}}
{{--                                                        name="fcomments"--}}
{{--                                                        placeholder="Write message"--}}
{{--                                                        required="true"--}}
{{--                                                    ></textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="button-box">--}}
{{--                                                    <button class="btn-one" type="submit">--}}
{{--                                                        <span class="txt">Submit Comment</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
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
{{--                                                <img--}}
{{--                                                    src="{{asset('storage/' . $article->thumbnail)}}"--}}
{{--                                                    alt="Article Thumbnail"--}}
{{--                                                    style="height: 100%"--}}
{{--                                                />--}}
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
