<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .left-side .berita img {
            height: 50%;
            width: 100%;
        }

        .left-side .more-news .image {
            overflow: hidden;
            height: 20rem;
        }

        .left-side .more-news .wrap {
            width: 14rem;
        }

        .left-side .text {
            text-align: justify;
        }

        .left-side .more-news .card-text {
            text-align: justify;
        }

        .left-side .more-news .detail {
            font-weight: bolder;
            font-size: smaller;
            color: gray;
        }

        .image-wrap {
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .left-side .image-wrap {
            height: 20rem;
        }

        .right-side .image-wrap {
            width: 8rem;
            height: 10rem;
        }


        /* RESPONSIVING */
        @media screen and (max-width: 1000px) {
            .right-side {
                font-size: smaller;
            }

            .right-side .image-wrap {
                width: 10rem;
                height: 9rem;
            }
        }

        @media screen and (max-width: 768px) {
            .left-side .wrap {
                font-size: small;
            }

            .right-side {
                display: none;
            }
        }
    </style>

</head>

<body>
    <!-- MAIN SECTION STARTED -->
    <section>

        <div class="d-flex">
            <!-- LEFT SIDE DIV -->
            <div class="left-side container-fluid col-md-9 col-12 ps-5 p-2">
                <div class="berita mb-5">
                    <img src="https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg"
                        class="rounded mb-3" alt="...">
                    <div class="detail px-4">
                        <h3>Addicted to Lonely Kind of Love</h3>
                        <p><span class="fw-bold">15 May 2024 8:00 AM</span> - Author</p>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci labore unde,
                                nemo
                                veritatis distinctio tempora doloribus vitae molestias nihil in quo quis excepturi fugit
                                tenetur ipsam nesciunt consequuntur dolorum? Fugiat a iure totam, dignissimos aliquid
                                sint
                                autem harum odio vero soluta ea minima commodi officia aspernatur incidunt culpa in
                                reprehenderit! Eligendi, optio distinctio. Dignissimos, repellendus! Aut, autem rem,
                                eaque
                                sunt veniam natus odio illo laborum velit eligendi veritatis enim quibusdam. Rerum
                                veniam,
                                quidem enim ipsum similique aliquam nobis ducimus perspiciatis voluptas maiores vitae
                                quod
                                impedit voluptatum dolores temporibus ratione laboriosam iusto molestiae, soluta
                                delectus
                                nam suscipit cumque alias fuga!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae hic, ea consectetur
                                non
                                recusandae commodi placeat dicta illo et reprehenderit quia repellat atque? Quia libero
                                doloremque doloribus, dolorem voluptatem molestiae suscipit dolore dignissimos ad
                                consectetur dolor nostrum illo cumque, ea odio officiis deserunt facere similique amet
                                aliquid consequuntur, quasi atque? Magnam iusto esse accusamus. Placeat aliquid cumque
                                ipsum
                                maiores, et accusamus maxime, provident architecto quo adipisci optio minima, autem quas
                                quam porro voluptates! Minima, repudiandae recusandae illum quis consequuntur
                                perferendis
                                dolore, aut nostrum, in a deleniti nam provident voluptatum facere? Culpa quasi
                                similique
                                numquam! Similique sit tenetur ducimus culpa ipsa!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nemo odit rem quas eos
                                fuga
                                quae quis ratione dignissimos. Impedit sunt maiores similique autem. Delectus, quo ipsum
                                totam suscipit impedit error labore, voluptatem quaerat, officiis incidunt ad qui quam.
                                Voluptate aut libero, eum, eaque magni nesciunt harum quod quas perspiciatis est
                                assumenda,
                                exercitationem recusandae eos ex obcaecati maxime dolore hic! Ea illo quo tempora itaque
                                facilis aut commodi consequatur aperiam facere eius odit delectus fuga dolore aliquam
                                praesentium similique reprehenderit quis, dolor sed ratione quaerat? Voluptatum dicta a
                                ut
                                maxime aliquid laudantium necessitatibus libero, optio nulla mollitia officiis, iusto
                                perspiciatis?</p>
                        </div>
                    </div>
                </div>

                <h3>More News</h3>
                <div class="more-news d-flex flex-wrap justify-content-evenly align-items-center">
                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="wrap mb-4 p-3">
                        <div class="image-wrap rounded"
                            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                        </div>
                        <div class="card-body">
                            <div class="detail">15 May 2024 8:00 AM</div>
                            <h5 class="card-title mb-1">Lorem, ipsum.</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores
                                expedita esse quo perspiciatis consequuntur voluptatem!</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE DIV -->
            <div class="right-side container-fluid p-2 col-md-3 col-0">
                <h3 class="">More News</h3>
                <!-- CARD -->
                <div class="wrap d-flex mb-4" style="width: 100%;">
                    <div class="image-wrap rounded"
                        style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                    </div>
                    <div class="card-body ps-1">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- CARD -->
                <div class="wrap d-flex mb-4" style="width: 100%;">
                    <div class="image-wrap rounded"
                        style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                    </div>
                    <div class="card-body ps-1">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- CARD -->
                <div class="wrap d-flex mb-4" style="width: 100%;">
                    <div class="image-wrap rounded"
                        style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                    </div>
                    <div class="card-body ps-1">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- CARD -->
                <div class="wrap d-flex mb-4" style="width: 100%;">
                    <div class="image-wrap rounded"
                        style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                    </div>
                    <div class="card-body ps-1">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <!-- CARD -->
                <div class="wrap d-flex mb-4" style="width: 100%;">
                    <div class="image-wrap rounded"
                        style="background-image: url('https://c4.wallpaperflare.com/wallpaper/450/840/999/bring-me-the-horizon-that-s-the-spirit-wallpaper-preview.jpg')">
                    </div>
                    <div class="card-body ps-1">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

            </div>

    </section>
    <!-- MAIN SECTION ENDED -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
</body>

</html>