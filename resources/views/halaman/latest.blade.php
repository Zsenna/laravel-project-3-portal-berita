<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style-type: none;
        }

        #sec-3 {
            padding: 3rem 6%;
        }

        #sec-3 h3 {
            display: inline;
            border-bottom: 2px solid orange;
            padding-right: 10%;
        }

        #sec-3 .left .item {
            width: 100%;
            height: 30.3%;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        #sec-3 .left .after {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        #sec-3 .left .date {
            position: absolute;
            left: 5%;
            bottom: 18%;
            color: white;
        }

        #sec-3 .left .title {
            position: absolute;
            left: 5%;
            bottom: 3%;
            color: white;
        }

        #sec-3 .right .item .img {
            width: 5rem;
            height: 5rem;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        #sec-3 .right .item {
            width: 90%;
        }

        #sec-3 .cta {
            position: absolute;
            width: 5%;
            height: 5%;
            gap: 50%;
            right: 0;
            top: 0;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #f5a623;
            --swiper-navigation-size: 2em;
            width: 1%;
        }

        .bd {
            border: 2px solid red;
        }

        /* RESPONSIVE */
        @media screen and (max-width: 910px) {
            #sec-3 .cta {
                width: 10%;
            }
        }

        @media screen and (max-width: 556px) {
            #sec-3 .cta {
                width: 17%;
            }
        }
    </style>

</head>

<body>
    <main>
        <div class="sec-3 position-relative" id="sec-3">
            <div class="position-relative container-fluid">
                <div class="top d-flex align-items-center justify-content-between mb-4">
                    <h3 class="pb-2">LATEST</h3>
                    <div class="cta d-flex align-items-center justify-content-between">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="wrap position-relative ps-3 row">
                    <div class="left position-relative col-6 col-md-4">
                        <div class="item position-relative rounded mb-3 shadow"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <img src="__after.svg" alt="" class="after">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </div>
                        <div class="item position-relative rounded mb-3 shadow"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <img src="__after.svg" alt="" class="after">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </div>
                        <div class="item position-relative rounded mb-3 shadow"
                            style="background-image: url('https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/band-oasis.jpg');">
                            <img src="__after.svg" alt="" class="after">
                            <p class="date"><i class="bi bi-clock"> </i>74 - Olarius - 3339</p>
                            <h5 class="title">She Sets Up High</h5>
                        </div>
                    </div>
                    <div class="right position-relative col-6 col-md-8 swiper mySwiper row ps-3">
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
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
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
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>