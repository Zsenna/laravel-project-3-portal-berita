@extends('layouts.index')

@push('halaman2css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/hal1.css">
@endpush

@push('halaman2js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="\js\swiper.js"></script>
    <script src="\js\responsiveView.js"></script>
@endpush

@section('content')
    <div id="main" class="box pt-5">
        <!-- carosel -->
        <div id="carosel" class="col align-self-center">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($datas as $image)
                        <div class="swiper-slide"><img src="/bertama_thumb/{{ $image->thumb }}" alt=""></div>
                    @endforeach
                    <div class="swiper-slide"><img src="" alt=""></div>
                    <div class="swiper-slide"><img src="" alt=""></div>
                    <div class="swiper-slide"><img src="" alt=""></div>
                    <div class="swiper-slide"><img src="" alt=""></div>
                    <div class="swiper-slide"><img src="" alt=""></div>
                </div>
                <div class="continer">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- end carousel -->

        <!-- headline news -->
        <div id="headline" class="col align-self-center">
            <div class="box">
                <div class="row">
                    @foreach ($data1 as $data)
                        <div class="image-container">
                            <img class="img-fluid" src="bertama_thumb/{{ $data->thumb }}" alt="">
                            <div class="text-block">
                                <h5 style="color: white;">{{ $data->title }}</h5>
                                <p style="color: white;">{{ $data->create_at }}</p>
                                <p class="headtext" style="color: white;">{{ $data->description }}</p>
                                <button class="button" type="submit">Read More</button>
                            </div>
                        </div>
                    @endforeach
                    <div class="col" id="col">
                        @foreach ($data5 as $image)
                            <div class="card">
                                <img src="/bertama_thumb/{{ $image->thumb }}" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">{{ $image->title }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end headline news -->

        <!-- news -->
        <div id="news" class="col align-self-center">
            <div class="box-news">
                <div class="box-left">
                    News Spotlight Here >
                    <div class="container-left row">
                        @foreach ($data5 as $berita)
                            <div class="card col-4">
                                <img src="/bertama_thumb/{{ $berita->thumb }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $berita->title }}</h5>
                                    <p class="card-text desc-left">{{ $berita->description }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text desc-left">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-right">
                    News Spotlight Here >
                    <div class="container-right">
                        @foreach ($data5 as $berita)
                            <div class="card">
                                <img src="/bertama_thumb/{{ $berita->thumb }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="card-date">{{ $berita->create_at }}</p>
                                    <h5 class="card-title">{{ $berita->title }}</h5>
                                    <p class="card-text desc-right">{{ $berita->description }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="card">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-date">date</p>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end news -->
    </div>
@endsection
