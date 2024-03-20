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
    {{-- CSS --}}
    <link rel="stylesheet" href="css/navfoot.css">
    @stack('halaman2css')
    @stack('halaman1css')

</head>

<body>
    <!-- NAVBAR SECTION STARTED -->
    <nav>
        <div class="top p-3 d-flex align-items-center justify-content-center position-relative fs-5">
            <div class="icon">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter mx-2"></i>
                <i class="bi bi-facebook"></i>
            </div>
            <div class="title fw-bold">NEWS</div>
        </div>
        <div class="bt py-3 ps-5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex position-relative badge rounded-pill" role="search">
                        <button class="btn bts" type="submit"><i class="bi bi-search"></i></button>
                        <input class="form-control" type="search" placeholder="Search News" aria-label="Search">
                    </form>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!-- NAVBAR SECTION ENDED -->


    <!-- CONTENT SECTION STARTED -->
    @yield('content')
    <!-- CONTENT SECTION ENDED -->

    {{-- FOOTER SECTION STARTED --}}
    <footer class="mt-5 p-3">
        <div class="row">
            <div class="logo col-lg-6 col-md-12 d-flex align-items-center justify-content-center my-4">
                <img src="images/Palembang_CoA.svg" alt="">
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
    {{-- FOOTER SECTION STARTED --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    @stack('halaman2js')
</body>

</html>