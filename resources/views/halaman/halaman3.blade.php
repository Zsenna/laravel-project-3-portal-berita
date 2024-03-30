@extends('layouts.header')

@push('halaman3css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/hal3.css">
    <link rel="stylesheet" href="css/latest.css">
@endpush

@push('halaman3js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="\js\swiper.js"></script>
    <script src="\js\responsiveView.js"></script>
@endpush

@section('content')
    <div id="main" class="box pt-5">
        <!-- headline -->
        <section id="sec-1">
            <div id="headline" class="col align-self-center">
                <div class="top d-flex align-items-center justify-content-between mb-3">
                    <h3 class="pb-2">HEADLINE</h3>
                    <div class="cta d-flex align-items-center justify-content-between">
                    </div>
                </div>
                <div class="box">
                    <div class="row">
                        <div class="card card-left">
                            <div class="swiper mySwiper1">
                                <div class="swiper-wrapper">
                                    <a href="" class="swiper-slide">
                                        <img src="\image\headline\Link - link description → berpacu-lawan-waktu-selamatkan-korban-gempa-di-jepang-5_43.jpeg.svg"
                                            class="card-img-top img-left" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title tittle-left">Jumlah Korban Tewas Gempa Jepang Bertambah
                                                Lagi Jadi 110
                                                Orang</h5>
                                            <p class="card-date"><i class="bi bi-clock">
                                                </i>15 May 2020 8:00 am</p>
                                            <p class="card-text desc-left">Korban tewas gempa Jepang bertambah lagi jadi 110
                                                orang,
                                                210 orang lainnya masih dinyatakan hilang.</p>
                                        </div>
                                    </a>
                                    <a href="" class="swiper-slide">
                                        <img src="\image\headline\Link - link description → berpacu-lawan-waktu-selamatkan-korban-gempa-di-jepang-5_43.jpeg.svg"
                                            class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title tittle-left">Jumlah Korban Tewas Gempa Jepang Bertambah
                                                Lagi Jadi 110
                                                Orang</h5>
                                            <p class="card-date"><i class="bi bi-clock">
                                                </i>15 May 2020 8:00 am</p>
                                            <p class="card-text desc-left">Korban tewas gempa Jepang bertambah lagi jadi 110
                                                orang,
                                                210 orang lainnya masih dinyatakan hilang.</p>
                                        </div>
                                    </a>
                                    @foreach ($data as $berita)
                                        <a href="/detail/{{ $berita->id }}" class="swiper-slide">
                                            <img src="/bertama_thumb/{{ $berita->thumb }}" class="card-img-top"
                                                alt="">
                                            <div class="card-body">
                                                <h5 class="card-title tittle-left">{{ $berita->title }}</h5>
                                                <p class="card-date"><i class="bi bi-clock">
                                                    </i>{{ $berita->created_at }}</p>
                                                <p class="card-text desc-left">{{ $berita->description }}.</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="continer">
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col" id="col">
                            @foreach ($data as $berita)
                                <a href="/detail/{{ $berita->id }}" class="card card-col">
                                    <img src="/bertama_thumb/{{ $berita->thumb }}" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">{{ $berita->created_at }}</p>
                                        <p class="card-text desc-right"><i class="bi bi-clock">
                                            </i>{{ $berita->title }}</p>
                                    </div>
                                </a>
                            @endforeach
                            <a href="" class="card card-col">
                                <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                <div class="card-body">
                                    <p class="card-text-date"><i class="bi bi-clock">
                                        </i>08.22.2023</p>
                                    <p class="card-text desc-right">Thailand makes it mandatory for tourists to stay</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end headline news -->

        <!-- trending -->
        {{-- <div id="carosel" class="col align-self-center">
            <div class="swiper mySwiper">
                <div class="text-wrapper mb-5">
                    <h1 class="tittle-trend">TRENDING</h1>
                    <img class="img-fluid" src="\image\headline\Vector 10.svg" alt="">
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card card-trend">
                            <img src="\image\trending\8.png.svg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <h5 class="card-title">Uttarakhand’s Hemkund Sahib yatra to start from September 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi
                                    sicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card-trend">
                            <img src="\image\trending\8.png.svg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <h5 class="card-title">Uttarakhand’s Hemkund Sahib yatra to start from September 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi
                                    sicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card-trend">
                            <img src="\image\trending\8.png.svg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <h5 class="card-title">Uttarakhand’s Hemkund Sahib yatra to start from September 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi
                                    sicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card-trend">
                            <img src="\image\trending\8.png.svg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <h5 class="card-title">Uttarakhand’s Hemkund Sahib yatra to start from September 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi
                                    sicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="continer-fluid">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div> --}}
        <!-- TRENDING SECTION STARTED -->
        <section class="sec-2 position-relative" id="sec-2">
            <div class="position-relative container-fluid">
                <div class="top d-flex align-items-center justify-content-between mb-3">
                    <h3 class="pb-2">TRENDING</h3>
                    <div class="cta d-flex align-items-center justify-content-between">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="swiper mySwiper container-fluid">
                    <div class="swiper-wrapper position-relative d-flex align-items-center">
                        {{-- CARD --}}
                        @foreach ($data as $berita)
                            <a href="/detail/{{ $berita->id }}" class="swiper-slide">
                                <div class="item rounded card container-lg p-0 shadow">
                                    <div class="image-wrap rounded">
                                        <img class="img-fluid rounded" src="/bertama_thumb/{{ $berita->thumb }}">
                                    </div>
                                    <div class="card-body">
                                        <p class="info"><span class="cat rounded">{{ $berita->type }}</span><i
                                                class="bi bi-clock">
                                            </i>{{ $berita->created_at }}</p>
                                        <h5 class="card-title" style="height: 2.8em; overflow: hidden">{{ $berita->title }}
                                        </h5>
                                        <p class="card-text" style="height: 5em; overflow: hidden"><i class="bi bi-clock">
                                            </i>{{ $berita->description }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <a href="" class="swiper-slide">
                            <div class="item rounded card container-lg p-0 shadow">
                                <div class="image-wrap rounded">
                                    <img class="img-fluid rounded"
                                        src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                                </div>
                                <div class="card-body">
                                    <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                        </i>08.12.2022</p>
                                    <h5 class="card-title trend-tittle">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </h5>
                                    <p class="card-text trend-desc">Some quick example text to build on the card title and
                                        make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="item rounded card container-lg p-0 shadow">
                                <div class="image-wrap rounded">
                                    <img class="img-fluid rounded"
                                        src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                                </div>
                                <div class="card-body">
                                    <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                        </i>08.12.2022</p>
                                    <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit
                                        amet consectetur adipisicing.</h5>
                                    <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to
                                        build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="item rounded card container-lg p-0 shadow">
                                <div class="image-wrap rounded">
                                    <img class="img-fluid rounded"
                                        src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                                </div>
                                <div class="card-body">
                                    <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                        </i>08.12.2022</p>
                                    <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit
                                        amet consectetur adipisicing.</h5>
                                    <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to
                                        build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="item rounded card container-lg p-0 shadow">
                                <div class="image-wrap rounded">
                                    <img class="img-fluid rounded"
                                        src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                                </div>
                                <div class="card-body">
                                    <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                        </i>08.12.2022</p>
                                    <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit
                                        amet consectetur adipisicing.</h5>
                                    <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to
                                        build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="item rounded card container-lg p-0 shadow">
                                <div class="image-wrap rounded">
                                    <img class="img-fluid rounded"
                                        src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                                </div>
                                <div class="card-body">
                                    <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                        </i>08.12.2022</p>
                                    <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit
                                        amet consectetur adipisicing.</h5>
                                    <p class="card-text desc-right" style="height: 5em; overflow: hidden">Some quick
                                        example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- TRENDING SECTION ENDED -->
        <!-- end trending -->

        <!-- lastest -->
        {{-- <div id="lastest" class="col align-self-center">
            <div class="text-wrapper mb-5">
                <h1 class="tittle-lastest">LASTEST</h1>
                <img class="img-fluid" src="\image\headline\Vector 10.svg" alt="">
            </div>
            <div class="box-lastest">
                <div class="box-left">
                    <div class="container-left">
                        <div class="image-container">
                            <img class="img-fluid" src="\image\lastest\Group 384.svg" alt="">
                            <div class="text-block">
                                <p style="color: white;">December 26, 2018</p>
                                <h5 style="color: white;">The FAA will test drone</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container-left">
                        <div class="image-container">
                            <img class="img-fluid" src="\image\lastest\Group 384.svg" alt="">
                            <div class="text-block">
                                <p style="color: white;">December 26, 2018</p>
                                <h5 style="color: white;">The FAA will test drone</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container-left">
                        <div class="image-container">
                            <img class="img-fluid" src="\image\lastest\Group 384.svg" alt="">
                            <div class="text-block">
                                <p style="color: white;">December 26, 2018</p>
                                <h5 style="color: white;">The FAA will test drone</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-right">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-col">
                                    <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                                    <div class="card-body">
                                        <p class="card-text-date">08.22.2023</p>
                                        <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="continer-fluid">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>  
                </div>
            </div>
        </div> --}}
        <!-- LATEST SECTION STARTED -->
        <section class="sec-3 position-relative mt-5" id="sec-3">
            <div class="position-relative container-fluid">
                <div class="top d-flex align-items-center justify-content-between mb-3">
                    <h3 class="pb-2">LATEST</h3>
                    <div class="cta d-flex align-items-center justify-content-between">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="wrap position-relative ps-4 row">
                    <div class="left col-12 col-md-4 col-sm-6 row" id="latescol">
                        @foreach ($data3 as $berita)
                            <a href="/detail/{{ $berita->id }}"
                                class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                                style="background-image: url('/bertama_thumb/{{ $berita->thumb }}');">
                                <p class="date"><i class="bi bi-clock"> </i>{{ $berita->created_at }}</p>
                                <h5 class="title">{{ $berita->title }}</h5>
                            </a>
                        @endforeach
                        <a href="" class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </a>
                        <a href="" class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </a>
                        <a href="" class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </a>
                        <a href="" class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </a>
                    </div>
                    <div class="right position-relative col-12 col-md-8 col-sm-6 swiper mySwiper2 row ps-3">
                        <div class="swiper-wrapper p-0">
                            <div class="swiper-slide col-6">
                                @foreach ($data6 as $berita)
                                    <a href="/detail/{{ $berita->id }}"
                                        class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                        <div class="img rounded"
                                            style="background-image: url('bertama_thumb/{{ $berita->thumb }}');">
                                        </div>
                                        <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                            <p class="m-0"><i class="bi bi-clock"> </i>{{ $berita->created_at }}</p>
                                            <p class="fw-bold m-0 tittle-right">{{ $berita->title }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="swiper-slide col-6">
                                <a href=""
                                    class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0 tittle-right">Thailand makes it mandatory for tourists to
                                            stay</p>
                                    </div>
                                </a>
                                <a href=""
                                    class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </a>
                                <a href=""
                                    class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </a>
                                <a href=""
                                    class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </a>
                                <a href=""
                                    class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </a>
                                <a href=""
                                    class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide col-6">
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-6">
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-evenly mb-3 rounded shadow">
                                    <div class="img rounded"
                                        style="background-image: url('https://m.media-amazon.com/images/M/MV5BODc3NjU3Y2YtZmZkMC00MWIzLTlhNjEtNDZkZTZhMjQ0OWFjXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_.jpg');">
                                    </div>
                                    <div class="detail ps-2" style="width: 70%; font-size: smaller;">
                                        <p class="m-0"><i class="bi bi-clock"> </i>09.14.7742</p>
                                        <p class="fw-bold m-0">Thailand makes it mandatory for tourists to stay</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LATEST SECTION ENDED -->
        <!-- end lastest -->
    </div>
@endsection
