<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kurale&family=Nunito:wght@200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kurale&family=Nunito:wght@200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="css/navfoot.css">
    @stack('halaman3css')
    @stack('latestcss')

</head>
<body>
     <header>
        <div class="background">
            <img src="images/hadi-utama.svg" alt="">
        </div>
        <div class="content container-fluid position-relative">
            <img src="images/logo.svg" alt="" class="img-fluid logo">
            <img src="images/Group21.svg" alt="" class="img-fluid txt">
            <div class="cta fw-bold d-flex align-items-center justify-content-center">
                <div class="search container-fluid d-flex justify-content-end">
                    <a href="#" role="button" id="bts">
                        <i class="bi bi-search"></i>
                    </a>
                    <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" id="fs">
                        <button class="btn btn-outline-success" type="submit" style="display: none;">Search</button>
                    </form>
                </div>
                <div class="dropdown menu">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </a>

                    <ul class="dropdown-menu mt-2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="sosmed d-flex align-items-center justify-content-evenly position-absolute top-50 end-0 translate-middle-y">
                <div class="icons pe-2" style="height: 100%">
                    <a href="" class="d-block"><i class="bi bi-twitter"></i></a>
                    <a href="" class="d-block"><i class="bi bi-youtube"></i></a>
                    <a href="" class="d-block"><i class="bi bi-instagram"></i></a>
                </div>
                <img src="images/foll.svg" alt="">
            </div>
        </div>
    </header>

    @yield('content')

     {{-- FOOTER SECTION STARTED --}}
    <footer class="mt-5 p-3">
        <div class="row">
            <div class="logo col-lg-6 col-md-12 d-flex align-items-center justify-content-center my-4">
                <img src="images/Palembang_CoA.svg" class="img-fluid" alt="">
                <h3 class="fw-bold fs-1 ps-5">Portal Berita <br>
                    Kota Palembang</h3>
            </div>
            <div class="info col-lg-6 col-md-12 d-flex align-items-center justify-content-evenly">
                <ul>
                    <li class="fw-bold">Our Page</li>
                    <li>Our Page</li>
                    <li>Our Page</li>
                    <li>Our Page</li>
                </ul>
                <ul>
                    <li class="fw-bold">Contact Us</li>
                    <li>Contact Us</li>
                    <li>Contact Us</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </footer> 
    {{-- FOOTER SECTION ENDED --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
        
        <script>
        const icon = document.getElementById('bts');
        const form = document.getElementById('fs');

        icon.addEventListener('click', function () {
            form.classList.toggle('show');
            icon.classList.toggle('move');
        });
    </script>
    @stack('halaman3js')
    @stack('latestjs')

</body>
</html>