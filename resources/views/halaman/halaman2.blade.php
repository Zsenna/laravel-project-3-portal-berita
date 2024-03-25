@extends('layouts.index')

@push('halaman2css')
    <link rel="stylesheet" href="css/halaman2.css">
@endpush

@section('content')
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
                    @foreach ($data as $berita)
                        <div class="wrap mb-4 p-3">
                            <div class="image-wrap rounded"
                                style="background-image: url('bertama_thumb/{{ $berita->thumb }}')">
                            </div>
                            <div class="card-body">
                                <div class="detail">{{ $berita->created_at }}</div>
                                <h5 class="card-title">{{ $berita->title }}</h5>
                                <p class="card-text">{{ $berita->description }}</p>
                            </div>
                        </div>
                    @endforeach

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
                @foreach ($data as $berita)
                    <div class="wrap d-flex mb-4" style="width: 100%;">
                        <div class="image-wrap rounded" style="background-image: url('bertama_thumb/{{ $berita->thumb }}')">
                        </div>
                        <div class="card-body ps-1">
                            <h5 class="card-title">{{ $berita->title }}</h5>
                            <p class="card-text">{{ $berita->description }}</p>
                        </div>
                    </div>
                @endforeach

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
@endsection
