@extends("web.layouts.main")
@section("content")
    @include("web.layouts.preloader")
    @include("web.layouts.header")
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div
            class="breadcrumb-area-bg"
            style="
            background-image: url({{asset('assets/images/resources/api3.webp')}});
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
                            <h2 style="letter-spacing: 12px">Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Blog Page Two-->
    <section class="blog-page-two">
        <div class="container">
            <div class="row">
                @forelse($photos as $photo)
                <!-- Start Single Image Gallery -->
                <div
                    class="service-details__content p-2 m-0 col-xl-4 col-lg-4 col-md-6"
                >
                    <div class="img-box1">
                        <img src="{{asset('storage/' . $photo->content)}}" alt="{{$photo->caption}}" title="{{$photo->caption}}" />
                    </div>
                </div>
                <!-- End Single Image Gallery -->
                @empty
                    <div class="row container pt-5" style="min-height: 100%">
                        <h3 style="width: 100%" class="text-secondary text-center">Belum Ada Foto Galeri</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!--End Blog Page Two-->
    @include("web.layouts.footer")
@endsection
