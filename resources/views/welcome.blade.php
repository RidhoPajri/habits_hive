<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Samudra Bahari</title>
        <link rel="icon" href="{{asset('frontend/assets/img/sb.jpg')}}" type="image/png">

        <!-- Font Awesome (CDN) -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google Fonts (CDN) -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        @include('include.frontend.sidebar')

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand">
                    <img src="{{asset('frontend/assets/img/sb2.jpg')}}" width="40" height="40" alt="">
                </a>
                <a class="navbar-brand">BASO IKAN SAMUDRA BAHARI</a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button> --}}
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('artikel')}}">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('produk')}}">Produk</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('agen')}}">Agen</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('layanan')}}">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead" style="background-image: url('frontend/assets/img/sb2.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-left">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>“Mengkonsumsi baso ikan membantu mencerdaskan otak”</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a>
                            <h2 class="post-title">Bagaimana kami mempersiapkan produk baso ikan unggulan?</h2>
                        </a>
                    </div>
                    <br>
                    <br>
                    <div class="container">
                        <div class="item">
                            <img src="{{asset('frontend/assets/img/images.png')}}" alt="Ikan Segar">
                            <h5>IKAN SEGAR PILIHAN</h5>
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/assets/img/koki.jpg')}}" alt="Ikan Segar">
                            <h5>BERSIH DAN HIGENIS</h5>
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/assets/img/bahan2.png')}}" alt="Ikan Segar">
                            <h5>BAHAN PENYERTA BERKUALITAS</h5>
                        </div>
                    </div>


                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a><h2 class="post-title">Bahan Dan Komposisi Terbaik Yang </h2></a>
                    </div>
                    <div class="container">
                        <div class="item">
                            <img src="{{asset('frontend/assets/img/bahan2.png')}}" alt="Ikan Segar">
                            <br>
                            <br>
                            <h5>Kualitas Bahan Baku</h5>
                            <p>Baso ikan Samudra Bahari menggunakan ikan segar berkualitas tinggi sebagai bahan baku utamanya.
                               Ikan segar memberikan cita rasa yang lebih enak dan juga lebih sehat. Samudra Bahari
                               menjaga kualitas ikan yang digunakan sehingga menghasilkan baso ikan yang lezat dan bergizi.</p>
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/assets/img/kimia.png')}}" alt="Ikan Segar">
                            <br>
                            <br>
                            <h5>Tanpa Pengawet Dan Pewarna Buatan</h5>
                            <p>Samudra Bahari berkomitmen untuk menggunakan bahan-bahan alami tanpa tambahan pengawet dan
                                 pewarna buatan. Dengan demikian, baso ikan ini lebih sehat dan aman dikonsumsi.</p>
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/assets/img/gizi.jpg')}}" alt="Ikan Segar">
                            <br>
                            <br>
                            <h5>Kandungan Gizi Yang Tinggi</h5>
                            <p>Baso ikan Sinar Bahari kaya akan nutrisi penting seperti protein, omega-3, dan vitamin. Protein dalam
                              baso ikan berguna untuk pembentukan otot dan pertumbuhan, sedangkan omega-3 membantu meningkatkan fungsi otak dan jantung.</p>
                        </div>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a>
                            <h2 class="post-title">Apa Yang Kami Hasilkan?</h2>
                        </a>
                        <p>
                            “Dalam setiap gigitan baso Ikan Sinar Bahari, Anda akan merasakan harmoni sempurna antara cita rasa ikan segar dan kelembutan tekstur yang menggoda.”
                        </p>
                        <div class="container">
                            <img src="{{asset('frontend/assets/img/baso.jpeg')}}" alt="Ikan Segar">
                        </div>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-tiktok fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Baso Ikan Samudra Bahari 2025</div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS (CDN) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom Theme JS -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
