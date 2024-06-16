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
                            <div class="img-holder" style="width: 770px; height: 420px; background-image: url({{asset('assets/images/blog/gedung-1.jpg')}}); background-repeat: no-repeat; background-position: center; background-size: cover">
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li>
                                        <i class="fa-solid fa-user mr-2" aria-hidden="true"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <i
                                            class="fa-solid fa-calendar mr-2"
                                            aria-hidden="true"
                                        ></i>
                                        <a href="#">Senin, 17 Juni 2024</a>
                                    </li>
                                </ul>
                                <div class="text-inner">
                                    <h3 class="blog-title">
                                        Sejarah PT Ambulance Pintar Indonesia
                                    </h3>
                                </div>
                                <div class="text">
                                    <p>
                                        PT. Ambulance Pintar Indonesia (API) adalah salah satu pelopor dalam industri karoseri ambulance di Indonesia. Didirikan dengan visi untuk meningkatkan standar layanan kesehatan di Indonesia, perusahaan ini telah mengalami perjalanan yang mengesankan sejak awal berdirinya hingga menjadi salah satu penyedia ambulance terkemuka di Indonesia.
                                    </p><br>
                                    <h5>AWAL BERDIRI</h5>
                                    <P>
                                        PT. Ambulance Pintar Indonesia didirikan pada tahun [tahun pendirian] oleh sekelompok profesional yang memiliki pengalaman luas dalam industri otomotif dan kesehatan. Para pendiri menyadari kebutuhan akan kendaraan ambulance yang berkualitas tinggi di Indonesia, yang mampu memberikan pelayanan medis darurat dengan efisien dan aman. Dengan modal pengalaman dan keahlian, mereka memulai perusahaan dengan fokus utama pada kualitas dan inovasi.
                                    </P><br>
                                    <h5>PENGEMBANGAN PRODUK DAN INOVASI</h5>
                                    <p>
                                        Pada tahap awal, PT. Ambulance Pintar Indonesia memulai dengan memproduksi beberapa unit ambulance untuk rumah sakit dan klinik di wilayah Jakarta. Produk pertama mereka diterima dengan sangat baik, berkat kualitas yang superior dan desain yang fungsional. Keberhasilan ini mendorong perusahaan untuk terus berinovasi dan memperluas lini produk mereka
                                    </p>
                                    <p>
                                        Dalam beberapa tahun pertama, PT. Ambulance Pintar Indonesia menginvestasikan banyak sumber daya dalam penelitian dan pengembangan. Mereka bekerja sama dengan berbagai ahli medis dan teknisi otomotif untuk mengembangkan fitur-fitur canggih yang dibutuhkan dalam layanan medis darurat. Salah satu inovasi awal mereka adalah sistem suspensi khusus yang dirancang untuk memberikan kenyamanan maksimal bagi pasien selama perjalanan.
                                    </p><br>
                                    <h5>EKSPANSI DAN PERTUMBUHAN</h5>
                                    <p>
                                        Seiring berjalannya waktu, PT. Ambulance Pintar Indonesia mulai memperluas jangkauan pasarnya ke berbagai daerah di Indonesia. Mereka tidak hanya menyediakan ambulance untuk rumah sakit dan klinik, tetapi juga untuk institusi pemerintah, perusahaan, dan organisasi non-profit yang membutuhkan layanan medis darurat
                                    </p>
                                    <p>
                                        Pada tahun [2011], PT. Ambulance Pintar Indonesia membuka fasilitas produksi baru yang lebih besar untuk memenuhi permintaan yang semakin meningkat. Fasilitas ini dilengkapi dengan peralatan produksi canggih dan ruang uji yang memungkinkan mereka untuk memastikan setiap unit yang diproduksi memenuhi standar kualitas yang ketat.
                                    </p><br>
                                    <h5>KOMITMEN SOSIAL DAN LINGKUNGAN</h5>
                                    <p>
                                        PT. Ambulance Pintar Indonesia juga memiliki komitmen terhadap tanggung jawab sosial dan lingkungan. Mereka aktif terlibat dalam berbagai kegiatan sosial, termasuk donasi ambulance ke daerah-daerah terpencil yang membutuhkan. Selain itu, perusahaan ini juga berupaya mengurangi dampak lingkungan dari operasional mereka dengan menerapkan praktik produksi yang ramah lingkungan.
                                    </p><br>
                                    <h5>MASA KINI DAN MASA DEPAN</h5>
                                    <p>
                                        Hingga saat ini, PT. Ambulance Pintar Indonesia terus tumbuh dan berinovasi. Dengan tim yang terdiri dari para ahli terbaik di bidangnya, mereka terus mengembangkan produk-produk baru yang lebih canggih dan efisien. Perusahaan ini bertekad untuk terus menjadi yang terdepan dalam industri karoseri ambulance di Indonesia, dengan tujuan utama meningkatkan kualitas layanan kesehatan di seluruh negeri.
                                    </p>
                                    <p>
                                        Dengan sejarah yang kaya dan dedikasi terhadap kualitas, PT. Ambulance Pintar Indonesia siap untuk menghadapi tantangan masa depan dan terus memberikan kontribusi positif bagi masyarakat Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tag-social-share-box">
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
                            <div class="col-sm-6">
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">AMBULANCE</h5>
                                        <img src="assets/images/blog/blog-v1-4.jpg" alt="">
                                        <br><br>
                                        <div style="text-align: center">
                                            <div class="btns-box mx-auto">
                                                <a class="btn-one" href="/#product">
                                                    <span class="txt">
                                                        Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">NON AMBULANCE</h5>
                                        <img src="assets/images/blog/blog-v1-4.jpg" alt="">
                                        <br><br>
                                        <div style="text-align: center">
                                            <div class="btns-box mx-auto">
                                                <a class="btn-one" href="/#product">
                                                    <span class="txt">Temukan Lebih Banyak<i class="icon-refresh arrow"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
