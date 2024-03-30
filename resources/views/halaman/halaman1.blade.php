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
                        <a href="" class="swiper-slide"><img src="/bertama_thumb/{{ $image->thumb }}" alt=""></a>
                    @endforeach
                    <a href="" class="swiper-slide"><img src="" alt=""></a>
                    <a href="" class="swiper-slide"><img src="" alt=""></a>
                    <a href="" class="swiper-slide"><img src="" alt=""></a>
                    <a href="" class="swiper-slide"><img src="" alt=""></a>
                    <a href="" class="swiper-slide"><img src="" alt=""></a>
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
                        <a href="" class="image-container">
                            <img class="img-fluid" src="bertama_thumb/{{ $data->thumb }}" alt="">
                            <div class="text-block">
                                <h5 class="headtittle" style="color: white;">{{ $data->title }}</h5>
                                <p style="color: white;"><i class="bi bi-clock">
                                    </i>{{ $data->created_at }}</p>
                                <p class="headtext" style="color: white;">{{ $data->description }}</p>
                                <button class="button" type="submit">Read More</button>
                            </div>
                        </a>
                    @endforeach
                    <div class="col" id="col">
                        @foreach ($data5 as $image)
                            <a href="" class="card">
                                <img src="/bertama_thumb/{{ $image->thumb }}" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">{{ $image->title }}</p>
                                </div>
                            </a>
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
                        <a href="" >
                            <div class="card col-4">
                                <img src="/bertama_thumb/{{ $berita->thumb }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title tittle-left">{{ $berita->title }}</h5>
                                    <p class="card-text desc-left">{{ $berita->description }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <a href="" class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text desc-left">Some quick example text to build on the card title and make
                                    up the
                                    bulk of the card's content.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box-right">
                    News Spotlight Here >
                    <div class="container-right">
                        @foreach ($data5 as $berita)
                            <a href="" class="card">
                                <img src="/bertama_thumb/{{ $berita->thumb }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="card-date"><i class="bi bi-clock">
                                        </i>{{ $berita->created_at }}</p>
                                    <h5 class="card-title tittle-right">{{ $berita->title }}</h5>
                                    <p class="card-text desc-right">{{ $berita->description }}</p>
                                </div>
                            </a>
                        @endforeach
                        <a href="" class="card">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-date"><i class="bi bi-clock">
                                    </i>date</p>
                                <h5 class="card-title tittle-right">Card title</h5>
                                <p class="card-text desc-right">Some quick example text to build on the card title and make
                                    up the
                                    bulk of the card's content.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end news -->
    </div>
@endsection
