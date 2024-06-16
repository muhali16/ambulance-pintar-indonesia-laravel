<div class="bottom-parallax">
    <!--Start footer area -->
    <footer class="footer-area">
        <div
            class="footer-area-shape float-bob"
            style="background-image: url({{asset('assets/images/shape/shape-2.png')}})"
        ></div>
        <!--Start Footer-->
        <div class="footer">
            <div class="container">
                <div class="row text-right-rtl">
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget marbtm50">
                            <div class="our-company-info">
                                <div class="footer-logo">
                                    <a href="{{route('web.index')}}">
                                        <img
                                            style="width: 30rem"
                                            src="{{asset('assets/images/resources/logo.png')}}"
                                            alt="Logo perusahaan"
                                            title="PT Ambulance Pintar Indonesia"
                                        />
                                    </a>
                                </div>
                                <div class="text-box">
                                    <p>
                                        Spesialis ambulance, ambulance care, modifikasi, 4x4
                                        system, rental, equipment dan donation.
                                    </p>
                                </div>
                                <div class="footer-widget-contact-info mt-4">
                                    <ul>
                                        <li>
                                            <div class="inner">
                                                <div class="icon phone">
                                                    <span class="icon-email"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        <a href="{{$contactEmail->link}}"
                                                        >{{$contactEmail->body}}</a
                                                        >
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="icon">
                                                    <span class="icon-telephone"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        <a href="{{$contactWhatsapp->link}}">{{$contactWhatsapp->body}}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="icon mapmarker">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{$address->body}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                        <div
                            class="single-footer-widget single-footer-widget--link-box margintop marbtm50"
                        >
                            <div class="title">
                                <h3>Tautan</h3>
                            </div>
                            <div class="footer-widget-links">
                                <ul>
                                    <li><a href="/#hero">Beranda</a></li>
                                    <li><a href="/#product">Produk</a></li>
                                    <li><a href="/#testimonial">Testimoni</a></li>
                                    <li><a href="/#article">Artikel</a></li>
                                    <li><a href="/#gallery">Galeri</a></li>
                                    <li><a href="/#contact">Kontak</a></li>
                                    <li><a href="/#branch">Cabang</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget margintop">
                            <div class="title">
                                <h3>Produk Kami</h3>
                            </div>
                            <div class="footer-widget-links">
                                <ul>
                                    @foreach($activeProductCategory as $productCategory)
                                        <li><a href="{{route('products.index', ['productCategory' => $productCategory->id])}}">{{$productCategory->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget margintop pdtop20">
                            <div class="footer-widget-quote-box mt-2">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.679339706034!2d107.02192737407803!3d-6.1736683604957445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894a3b26f3c9%3A0xd1041d4cde894037!2sPT.%20Ambulance%20Pintar%20Indonesia%20Official%20%2F%2F%20Jual%20Mobil%20Ambulance%20Ready%20Stock!5e0!3m2!1sid!2sid!4v1716826627078!5m2!1sid!2sid" frameborder="0"
                                    width="100%"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>

                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
        </div>
        <!--End Footer-->
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-inner">
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
                                <a href="{{$youtube1->link ?? "#"}}" title="{{$youtube1->body}}"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="{{$youtube2->link ?? "#"}}" title="{{$youtube2->body}}"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>
                            Copyright &copy; 2024
                            <a href="/">PT Ambulance Pintar Indonesia</a> All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer area-->
</div>

<style>
    /* Custom styles */
    /*.fixed-dropdown {*/
    /*    position: fixed;*/
    /*    bottom: 20px;*/
    /*    right: 20px;*/
    /*    z-index: 1000; !* Ensure dropdown stays on top *!*/
    /*}*/
    .dropdown-menu {
        width: fit-content;
        display: none; /* Hide dropdown by default */
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        transform-origin: top right; /* Set origin for transform */
        transform: translateY(-100%) translateX(-100%); /* Initially move menu up and left */
    }
    .dropup:hover .dropdown-menu {
        display: block; /* Show dropdown on hover */
        animation: fadeInUp 0.5s ease forwards; /* Apply animation */
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

{{--<button class="scroll-top scroll-to-target" data-target="html">--}}
{{--    <span class="flaticon-up-arrow"></span>--}}
{{--</button>--}}

<!-- Fixed dropdown in bottom right corner -->
<div class="dropup fixed-dropdown scroll-top" style="border: 3px solid #990000">
    <span id="dropdownMenuButton" data-toggle="dropdown">
        <i class="fa-solid fa-hashtag"></i>
    </span>
    <div class="dropdown-menu" style="color: #990000">
        <a class="dropdown-item" href="{{$contactEmail->link}}"><i class="fa-solid fa-envelope"></i></a>
        <a class="dropdown-item" href="{{$contactWhatsapp->link}}"><i class="fa-brands fa-whatsapp"></i></a>
        <a class="dropdown-item" href="{{$facebook->link}}"><i class="fa-brands fa-facebook"></i></a>
        <a class="dropdown-item" href="{{$youtube1->link}}"><i class="fa-brands fa-youtube"></i></a>
        <a class="dropdown-item" href="{{$youtube2->link}}"><i class="fa-brands fa-youtube"></i></a>
    </div>
</div>
