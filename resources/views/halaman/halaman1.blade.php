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
                    <div class="swiper-slide"><img src="" alt=""></div>
                    <div class="swiper-slide"><img src="" alt=""></div>
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
        <section id="sec-2">
            <div id="headline" class="col align-self-center">
                <div class="box">
                    <div class="row">
                        <div class="image-container">
                            <img class="img-fluid" src="" alt="">
                            <div class="text-block">
                                <h5 style="color: white;">Headline News</h5>
                                <p style="color: white;">date</p>
                                <p style="color: white;">description description description description description description description</p>
                                <button class="button" type="submit">Read More</button>
                            </div>
                        </div>
                        <div class="col" id="col">
                            <div class="card">
                                <img src="" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">Headline News 1</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">Headline News 2</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">Headline News 3</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">Headline News 4</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">Headline News 5</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" class="card-img-left" alt="tes">
                                <div class="card-body">
                                    <p class="card-text">Headline News 6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end headline news -->

        <!-- news -->
        <div id="news" class="col align-self-center">
            <div class="box-news">
                <div class="box-left">
                    News Spotlight Here >
                    <div class="container-left row" id="container-left">
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-4">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-right">
                    News Spotlight Here >
                    <div class="container-right" id="container-right">
                        <div class="card">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-date">date</p>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-date">date</p>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-date">date</p>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end news -->
    </div>
@endsection