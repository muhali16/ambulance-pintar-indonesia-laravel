<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-language" content="ID" />
    <meta
        name="description"
        content="PT Ambulance Pintar Indonesia adalah perusahaan yang bergerak di bidang spesialis ambulance, ambulance care, modifikasi, 4x4 system, rental, equipment dan donation."
    />
    <meta
        name="keyword"
        content="{{$article->tags ?? 'ambulance, buat ambulance, ambulance pintar, ambulance pintar indonesia, karoseri ambulance'}}"
    />
    <meta
        name="robots"
        content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"
    />
    <meta
        name="googlebot"
        content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"
    />
    <meta
        name="bingbot"
        content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"
    />
    <meta name="title" content="PT Ambulance Pintar Indonesia" />
    <title>{{$title ?? "No Title"}}</title>
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="{{$title ?? "No Title"}}" />
    <meta
        property="og:description"
        content="PT Ambulance Pintar Indonesia adalah perusahaan yang bergerak di bidang spesialis ambulance, ambulance care, modifikasi, 4x4 system, rental, equipment dan donation."
    />
    <meta property="og:url" content="{{request()->getBaseUrl()}}" />
    <meta property="og:site_name" content="Ambulance Pintar Indonesia" />
    <!-- <meta property="og:image" content="" /> -->
    <meta name="dc.title" content="{{$title ?? "No Title"}}" />
    <meta
        name="dc.description"
        content="PT Ambulance Pintar Indonesia adalah perusahaan yang bergerak di bidang spesialis ambulance, ambulance care, modifikasi, 4x4 system, rental, equipment dan donation."
    />
    <meta name="dc.relation" content="https://ambulancepintar.com" />
    <meta name="dc.source" content="https://ambulancepintar.com" />
    <meta name="dc.language" content="id_ID" />
    <!-- <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="PT. Ambulance Pintar Indonesia" />
    <meta
      name="twitter:description"
      content="Ambulance Pintar Indonesia Karoseri dan modifikasi mobil ambulance untuk segala jenis mobil. Harga murah dan SKRB lengkap."
    /> -->
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{request()->getUri()}}" />
    <meta property="twitter:title" content="{{$title ?? "No Title"}}" />
    <meta
        property="twitter:description"
        content="PT Ambulance Pintar Indonesia adalah perusahaan yang bergerak di bidang spesialis ambulance, ambulance care, modifikasi, 4x4 system, rental, equipment dan donation."
    />
    <!-- <meta
      property="twitter:image"
      content="https://metatags.io/images/meta-tags.png"
    /> -->

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <link
        href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/imp.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.bootstrap-touchspin.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />

    <!-- Module css -->
    <link rel="stylesheet" href="{{asset('assets/css/module-css/header-section.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/banner-section.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/about-section.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/blog-section.css')}}" />
    <link
        rel="stylesheet"
        href="{{asset('assets/css/module-css/fact-counter-section.css')}}"
    />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/faq-section.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/contact-page.css')}}" />
    <link
        rel="stylesheet"
        href="{{asset('assets/css/module-css/breadcrumb-section.css')}}"
    />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/team-section.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/partner-section.css')}}" />
    <link
        rel="stylesheet"
        href="{{asset('assets/css/module-css/testimonial-section.css')}}"
    />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/services-section.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/footer-section.css')}}" />

    <link
        href="{{asset('assets/css/color/theme-color.css')}}"
        id="jssDefault"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <!-- Favicon -->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{asset('assets/images/favicon/apple-touch-icon.png')}}"
    />
    <link
        rel="icon"
        type="image/png"
        href="{{asset('assets/images/favicon/favicon-32x32.png')}}"
        sizes="32x32"
    />
    <link
        rel="icon"
        type="image/png"
        href="{{asset('assets/images/favicon/favicon-16x16.png')}}"
        sizes="16x16"
    />
</head>
<body>
<div class="boxed_wrapper ltr">
    @yield("content")
</div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/font-awesome.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/js/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.event.move.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-sidebar-content.js')}}"></script>
<script src="{{asset('assets/js/knob.js')}}"></script>
<script src="{{asset('assets/js/map-script.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/pagenav.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/tilt.jquery.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/validation.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>

<script src="{{asset('assets/js/jquery-1color-switcher.min.js')}}"></script>

<!-- thm custom script -->
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
