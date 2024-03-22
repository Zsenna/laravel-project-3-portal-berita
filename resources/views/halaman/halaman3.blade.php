@extends('layouts.header')

@push('halaman3css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="css/hal3.css">
@endpush

@push('halaman3js')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="\js\swiper.js"></script>
<script src="\js\responsiveView.js"></script>
@endpush

@section('content')
    <div id="main" class="box pt-5">
        <!-- headline -->
        <div id="headline" class="col align-self-center">
            <div class="text-wrapper mb-5">
                    <h1 class="tittle-headline">HEADLINE</h1>
                    <img class="img-fluid" src="\image\headline\Vector 10.svg" alt="">
            </div>
            <div class="box">
                <div class="row">
                    <div class="card card-left">
                        <div class="swiper mySwiper1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="\image\headline\Link - link description → berpacu-lawan-waktu-selamatkan-korban-gempa-di-jepang-5_43.jpeg.svg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Korban Tewas Gempa Jepang Bertambah Lagi Jadi 110 Orang</h5>
                                        <p class="card-date">15 May 2020 8:00 am</p>
                                        <p class="card-text">Korban tewas gempa Jepang bertambah lagi jadi 110 orang, 210 orang lainnya masih dinyatakan hilang.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="\image\headline\Link - link description → berpacu-lawan-waktu-selamatkan-korban-gempa-di-jepang-5_43.jpeg.svg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Korban Tewas Gempa Jepang Bertambah Lagi Jadi 110 Orang</h5>
                                        <p class="card-date">15 May 2020 8:00 am</p>
                                        <p class="card-text">Korban tewas gempa Jepang bertambah lagi jadi 110 orang, 210 orang lainnya masih dinyatakan hilang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="continer">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="col">
                        <div class="card card-col">
                            <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                            </div>
                        </div>
                        <div class="card card-col">
                            <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                            </div>
                        </div>
                        <div class="card card-col">
                            <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                            </div>
                        </div>
                        <div class="card card-col">
                            <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                            </div>
                        </div>
                        <div class="card card-col">
                            <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                            </div>
                        </div>
                        <div class="card card-col">
                            <img src="\image\headline\5.png.svg" class="card-img-left" alt="">
                            <div class="card-body">
                                <p class="card-text-date">08.22.2023</p>
                                <p class="card-text">Thailand makes it mandatory for tourists to stay</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end headline news -->

        <!-- trending -->
        <div id="carosel" class="col align-self-center">
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
        </div>
        <!-- end trending -->

        <!-- lastest -->
        <div id="lastest" class="col align-self-center">
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
        </div>
        <!-- end lastest -->
    </div>
@endsection