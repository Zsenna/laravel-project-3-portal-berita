@extends('layouts.header')

@push('latestcss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="css/latest.css">
@endpush

@section('content')
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
                    <div class="swiper-slide">
                        <div class="item rounded card container-lg p-0 shadow">
                            <div class="image-wrap rounded">
                                <img class="img-fluid rounded" src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                            </div>
                            <div class="card-body">
                                <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                    </i>08.12.2022</p>
                                <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item rounded card container-lg p-0 shadow">
                            <div class="image-wrap rounded">
                                <img class="img-fluid rounded" src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                            </div>
                            <div class="card-body">
                                <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                    </i>08.12.2022</p>
                                <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item rounded card container-lg p-0 shadow">
                            <div class="image-wrap rounded">
                                <img class="img-fluid rounded" src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                            </div>
                            <div class="card-body">
                                <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                    </i>08.12.2022</p>
                                <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item rounded card container-lg p-0 shadow">
                            <div class="image-wrap rounded">
                                <img class="img-fluid rounded" src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                            </div>
                            <div class="card-body">
                                <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                    </i>08.12.2022</p>
                                <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item rounded card container-lg p-0 shadow">
                            <div class="image-wrap rounded">
                                <img class="img-fluid rounded" src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                            </div>
                            <div class="card-body">
                                <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                    </i>08.12.2022</p>
                                <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item rounded card container-lg p-0 shadow">
                            <div class="image-wrap rounded">
                                <img class="img-fluid rounded" src="https://cdn1-production-images-kly.akamaized.net/-QPz19toWHRasRoqlGcvy5extnk=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/802294/original/062926800_1422423099-oasis-1.jpg">
                            </div>
                            <div class="card-body">
                                <p class="info"><span class="cat rounded">Tech</span><i class="bi bi-clock">
                                    </i>08.12.2022</p>
                                <h5 class="card-title" style="height: 2.8em; overflow: hidden">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                                <p class="card-text" style="height: 5em; overflow: hidden">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TRENDING SECTION ENDED -->

    <!-- LATEST SECTION STARTED -->
        <section class="sec-3 position-relative" id="sec-3">
            <div class="position-relative container-fluid">
                <div class="top d-flex align-items-center justify-content-between mb-3">
                    <h3 class="pb-2">LATEST</h3>
                    <div class="cta d-flex align-items-center justify-content-between">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="wrap position-relative ps-4 row">
                    <div class="left col-12 col-md-4 col-sm-6 row">
                        <div class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </div>
                        <div class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </div>
                        <div class="item position-relative rounded mb-3 shadow col-4 col-sm-12"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </div>
                    </div>
                    <div class="right position-relative col-12 col-md-8 col-sm-6 swiper mySwiper row ps-3">
                        <div class="swiper-wrapper p-0">
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
@endsection


@push('latestjs')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper2 = new Swiper("#sec-2 .mySwiper", {
        slidesPerView: 2,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            450: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            },
        },
        navigation: {
            nextEl: "#sec-2 .swiper-button-next",
            prevEl: "#sec-2 .swiper-button-prev",
        },
    });

    var swiper3 = new Swiper("#sec-3 .mySwiper", {
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesPerGroup: 1,
            },
        },
        navigation: {
            nextEl: "#sec-3 .swiper-button-next",
            prevEl: "#sec-3 .swiper-button-prev",
        },
    });
</script>
@endpush