<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Samudra Bahari</title>
        <link rel="icon" href="{{asset('frontend/assets/img/sb.jpg')}}" type="image/png">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        @include('include.frontend.sidebar')
    </head>
    <body>
        <style>
           .card-group {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    flex: 1;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    margin-bottom: 20px;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 2px solid #ddd;
}

.card-body {
    padding: 15px;
    background: #fff;
}

.card-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
}

.card-text {
    font-size: 1rem;
    color: #555;
}

.text-muted {
    font-size: 0.9rem;
    color: #777;
}

        </style>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                 <a class="navbar-brand">
                    <img src="{{asset('frontend/assets/img/sb2.jpg')}}" width="40" height="40" alt="">
                </a>
                <a class="navbar-brand">Baso Ikan Samudra Bahari</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
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
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('frontend/assets/img/sb2.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Layanan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <div class="col-12 mb-4 text-center">
                    <h2>Produk Dan Pelayanan</h2>
                </div>
        <div class="card-group">
            <div class="card">
                <img src="{{asset('frontend/assets/img/p.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-center">Produk</h5>
                    <p class="card-text text-white">Baso Ikan Samudra Bahari memproduksi empat varian ukuran yaitu ukuran kecil,
                         ukuran sedang, ukuran besar dan ukuran Jumbo (Mohai)</p>
                </div>
            </div>
        <div class="card">
            <img src="{{asset('frontend/assets/img/kj.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-center">Kemasan</h5>
                    <p class="card-text text-white">Tersedia dalam kemasan ballan dan kemasan packing</p>
                </div>
        </div>
        <div class="card">
            <img src="{{asset('frontend/assets/img/box.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-center">Distribusi</h5>
                    <p class="card-text text-white">Pengiriman langsung dari pabrik ke berbagai kota di Jawa-Barat</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card-group">
            <div class="card">
                <img src="{{asset('frontend/assets/img/layanan.webp')}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-center">Layanan</h5>
                    <p class="card-text text-white">Produk resmi dapat diperoleh di toko online store.basoikansamudrabahari.com (masih dalam pengembangan), kontak web, sosial media dan agen resmi kami</p>
                </div>
            </div>
        <div class="card">
            <img src="{{asset('frontend/assets/img/tas.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-center">Pengalaman</h5>
                    <p class="card-text text-white">Baso Ikan Samudra Bahari berpengalaman dan terpercaya lebih dari 19 tahun dalam memproduksi baso</p>
                </div>
        </div>
        <div class="card">
            <img src="{{asset('frontend/assets/img/emote.webp')}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-center">Favorit</h5>
                    <p class="card-text text-white">Baso Ikan Sinar Bahari digemari semua kalangan serta tidak mengenal musim</p>
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
                                <a href="https://www.tiktok.com/@samudrabaharibdg1">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-tiktok fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://wa.me/6282115789179">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/samudrabaharibdg/">
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
