<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TDB Mengajar</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav id="main-nav" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <div class="d-flex flex-row">
                    <img class="img-fluid mr-2" src="<?=base_url('assets/images/logo2.png')?>" />
                    <h3 class="align-self-center">
                        TDB <br /><span class="text-uppercase">Mengajar</span>
                    </h3>
                </div>
            </a>
            <button id="mybtn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- {{-- <span class="navbar-toggler-icon"></span> --}} -->
                <div class="animated-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger text-uppercase" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="profileDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>

                        <!-- TODO: one page scroll tentang item yang ada di bawah -->
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">Kata Sambutan</a>
                            <a class="dropdown-item" href="#">Sejarah</a>
                            <a class="dropdown-item" href="#">Visi & Misi</a>
                            <a class="dropdown-item" href="#">Struktur Organisasi</a>
                            <a class="dropdown-item" href="#">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger text-uppercase" href="#news">Berita</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="eduDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pendidikan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="eduDropdown">
                            <a class="dropdown-item js-scroll-trigger" href="#elementary">SD Elshaddai Mulia</a>
                            <a class="dropdown-item js-scroll-trigger" href="#kindergarden">TK Elshaddai Mulia</a>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger text-uppercase" href="#teacher">Pendidik</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger text-uppercase" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="eduDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bahasa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="eduDropdown">
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-id mr-2"></span> Indonesia
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-us mr-2"></span> English
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-kr mr-2"></span> Korean
                            </a>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" href="#">Login</a>
                    </li>
                    <!-- {{-- <li class="nav-item px-2">
                        <a class="nav-link text-uppercase" href="#">PMB</a>
                    </li> --}} -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome -->
    <header id="welcome" class="scroll-spy2">
        <div class="container d-flex h-100">
            <img src="<?=base_url('assets/images/graduation6.png')?>" alt="" class="img-fluid">
            <div class="row align-self-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <h1 class="display-4">Bingung mau sekolahkan anak anda dimana?</h1>
                    <h2 class="mb-4">Datang aja ke sekolah TDB Mengajar!</h2>
                    <a class="btn btn-primary btn-contact-us px-5 py-1" href="#">Jadwalkan Kunjungan</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Home -->
    <section id="home" class="scroll-spy2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 els-home-img"></div>
                <div class="col-md-7 py-5">
                    <div class="home-second-overlay"></div>
                    <div class="container text-center">
                        <h1 class="text-uppercase text-white mb-5">
                            TDB Mengajar
                        </h1>
                        <p class="py-3 text-justify">Elshaddai Mulia Pekanbaru mendampingi 
                            anak dalam belajar dan mengembangkan 
                            potensinya untuk menjadi manusia yang 
                            berakhlak mulia, cerdas dan terampil. 
                            Dengan motto "Bersekolah dengan Senang 
                            dan Senang di Sekolah" membuat setiap anak 
                            memiliki rasa senang saat waktu sekolah tiba. 
                            Elshaddai Mulia menyediakan sarana dan prasarana 
                            yang membuat anak menyukai sekolah dan mendukung 
                            setiap aktifitas anak karena Elshaddai Mulia percaya 
                            setiap individu adalah unik, sehingga ia mempunyai 
                            cara dan kemampuan masing-masing untuk berkembang 
                            menjadi dirinya sendiri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news" class="py-5 mt-sm-2 mt-md-3 scroll-spy2">
        <div class="container py-md-5">

            <!-- TODO: disebelah kanan ujung title terdapat pengganti view berita
                        pilihannya grid atau highlithed -->

            <!-- TODO: Ketika di hover gambar akan menjadi lebih besar -->
            <div class="section-title mb-5">
                <h1 class="text-uppercase">Berita Terbaru</h1>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="thumb">
                            <img src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="" class="img-fluid">
                        </div>

                        <div class="news-detail">
                            <a href="#" class="news-badge text-uppercase">Berita</a>

                            <div class="news-detail-content p-2">
                                <a class="h4" href="#">Lorem ipsum dolor vs bla bla bla</a>
                                <div class="d-flex flex-row align-item-end">
                                    <strong class="text-muted mr-2">2068x dilihat</strong>
                                    <span class="mr-2">&minus;</span>
                                    <strong class="text-muted mr-2">5 hari yang lalu</strong>
                                    <span class="mr-2">&minus;</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="thumb">
                            <img src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="" class="img-fluid">
                        </div>

                        <div class="news-detail">
                            <a href="#" class="news-badge text-uppercase">Berita</a>

                            <div class="news-detail-content p-2">
                                <a class="h4" href="#">Lorem ipsum dolor vs bla bla bla</a>
                                <div class="d-flex flex-row align-item-end">
                                    <strong class="text-muted mr-2">2068x dilihat</strong>
                                    <span class="mr-2">&minus;</span>
                                    <strong class="text-muted mr-2">5 hari yang lalu</strong>
                                    <span class="mr-2">&minus;</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="thumb">
                            <img src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="" class="img-fluid">
                        </div>

                        <div class="news-detail">
                            <a href="#" class="news-badge text-uppercase">Berita</a>

                            <div class="news-detail-content p-2">
                                <a class="h4" href="#">Lorem ipsum dolor vs bla bla bla</a>
                                <div class="d-flex flex-row align-item-end">
                                    <strong class="text-muted mr-2">2068x dilihat</strong>
                                    <span class="mr-2">&minus;</span>
                                    <strong class="text-muted mr-2">5 hari yang lalu</strong>
                                    <span class="mr-2">&minus;</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="thumb">
                            <img src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="" class="img-fluid">
                        </div>

                        <div class="news-detail">
                            <a href="#" class="news-badge text-uppercase">Berita</a>

                            <div class="news-detail-content p-2">
                                <a class="h4" href="#">Lorem ipsum dolor vs bla bla bla</a>
                                <div class="d-flex flex-row align-item-end">
                                    <strong class="text-muted mr-2">2068x dilihat</strong>
                                    <span class="mr-2">&minus;</span>
                                    <strong class="text-muted mr-2">5 hari yang lalu</strong>
                                    <span class="mr-2">&minus;</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="thumb">
                            <img src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="" class="img-fluid">
                        </div>

                        <div class="news-detail">
                            <a href="#" class="news-badge text-uppercase">Berita</a>

                            <div class="news-detail-content p-2">
                                <a class="h4" href="#">Lorem ipsum dolor vs bla bla bla</a>
                                <div class="d-flex flex-row align-item-end">
                                    <strong class="text-muted mr-2">2068x dilihat</strong>
                                    <span class="mr-2">&minus;</span>
                                    <strong class="text-muted mr-2">5 hari yang lalu</strong>
                                    <span class="mr-2">&minus;</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="thumb">
                            <img src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="" class="img-fluid">
                        </div>

                        <div class="news-detail">
                            <a href="#" class="news-badge text-uppercase">Berita</a>

                            <div class="news-detail-content p-2">
                                <a class="h4" href="#">Lorem ipsum dolor vs bla bla bla</a>
                                <div class="d-flex flex-row align-item-end">
                                    <strong class="text-muted mr-2">2068x dilihat</strong>
                                    <span class="mr-2">&minus;</span>
                                    <strong class="text-muted mr-2">5 hari yang lalu</strong>
                                    <span class="mr-2">&minus;</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- {{-- <div class="row mb-sm-3 mb-md-5">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-sm-4">
                    <div class="card">
                        <div class="img-news">
                            <div class="news-date">
                                <h1>14</h1>
                                <p>Juni, 2019</p>
                            </div>
                            <img class="card-img-top" src="images/gallery_6.jpeg" />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-center">Ini adalah judul berita</h2>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris
                            cupidatat non proident...</p>

                            <p class="text-right"><a class="text-uppercase" href="#">Selengkapnya >></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-sm-4">
                    <div class="card">
                        <div class="img-news">
                            <div class="news-date">
                                <h1>14</h1>
                                <p>Juni, 2019</p>
                            </div>
                            <img class="card-img-top" src="images/gallery_6.jpeg" />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-center">Ini adalah judul berita</h2>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris
                            cupidatat non proident...</p>

                            <p class="text-right"><a class="text-uppercase" href="#">Selengkapnya >></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-12 col-md-4 col-lg-4 mb-sm-4">
                    <div class="card">
                        <div class="img-news">
                            <div class="news-date">
                                <h1>14</h1>
                                <p>Juni, 2019</p>
                            </div>
                            <img class="card-img-top" src="images/gallery_6.jpeg" />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-center">Ini adalah judul berita</h2>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris
                            cupidatat non proident...</p>

                            <p class="text-right"><a class="text-uppercase" href="#">Selengkapnya >></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-sm-3 mb-md-5">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-sm-4">
                    <div class="card">
                        <div class="img-news">
                            <div class="news-date">
                                <h1>14</h1>
                                <p>Juni, 2019</p>
                            </div>
                            <img class="card-img-top" src="images/gallery_6.jpeg" />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-center">Ini adalah judul berita</h2>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris
                            cupidatat non proident...</p>

                            <p class="text-right"><a class="text-uppercase" href="#">Selengkapnya >></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-sm-4">
                    <div class="card">
                        <div class="img-news">
                            <div class="news-date">
                                <h1>14</h1>
                                <p>Juni, 2019</p>
                            </div>
                            <img class="card-img-top" src="images/gallery_6.jpeg" />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-center">Ini adalah judul berita</h2>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris
                            cupidatat non proident...</p>

                            <p class="text-right"><a class="text-uppercase" href="#">Selengkapnya >></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-sm-4">
                    <div class="card">
                        <div class="img-news">
                            <div class="news-date">
                                <h1>14</h1>
                                <p>Juni, 2019</p>
                            </div>
                            <img class="card-img-top" src="images/gallery_6.jpeg" />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title text-center">Ini adalah judul berita</h2>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris
                            cupidatat non proident...</p>

                            <p class="text-right"><a class="text-uppercase" href="#">Selengkapnya >></a></p>
                        </div>
                    </div>
                </div>
            </div> --}} -->

            <div class="w-100 text-center">
                <a class="btn btn-warning btn-more-news px-sm-4 px-md-5 py-md-2" href="{{ route('get_all_article') }}">Tampilkan Semua Berita</a>
            </div>
        </div>
    </section>

    <!-- Education -->
    <!-- TODO: Bikin background bisa diganti seperti slider -->
    <section id="education">
        <div class="edu-overlay"></div>
        <div id="elementary" class="container-fluid sd-content scroll-spy2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 offset-md-4 py-5 pr-lg-5"> <!--  -->
                    <h1 class="text-uppercase ml-auto display-3 mb-md-5 pt-5">Sekolah Dasar Elshaddai Mulia</h1>

                    <a href="#" class="btn btn-primary btn-learn-more text-uppercase">
                        Pelajari Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <div id="kindergarden" class="container-fluid tk-content scroll-spy2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 py-5 pl-lg-5">
                    <h1 class="text-uppercase mr-auto display-3 mb-5 pt-5">Taman Kanak-kanak Elshaddai Mulia</h1>

                    <a href="#" class="btn btn-primary btn-learn-more text-uppercase">
                        Pelajari Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Teacher -->
    <!-- {{-- disebelah ujung ada pagination untuk guru2 lainnya --}} -->
    <section id="teacher" class="py-5 scroll-spy2">
        <div class="container">
            <div class="section-title mb-5">
                <h1 class="text-uppercase">Tenaga Pendidik</h1>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="teacher-item text-center">
                            <img class="img-fluid teacher-photo" src="images/man.jpg" />
                            <div class="teacher-about py-3">
                                <h3>Bambang S.Pdi</h3>
                                <h5>Guru Matematika</h5>
                            </div>
                        </div>
                        <div class="teacher-item text-center">
                            <img class="img-fluid teacher-photo" src="images/woman.jpg" />
                            <div class="teacher-about py-3">
                                <h3>Bambang S.Pdi</h3>
                                <h5>Guru Matematika</h5>
                            </div>
                        </div>
                        <div class="teacher-item text-center">
                            <img class="img-fluid teacher-photo" src="images/man.jpg" />
                            <div class="teacher-about py-3">
                                <h3>Bambang S.Pdi</h3>
                                <h5>Guru Matematika</h5>
                            </div>
                        </div>
                        <div class="teacher-item text-center">
                            <img class="img-fluid teacher-photo" src="images/woman.jpg" />
                            <div class="teacher-about py-3">
                                <h3>Bambang S.Pdi</h3>
                                <h5>Guru Matematika</h5>
                            </div>
                        </div>
                        <div class="teacher-item text-center">
                            <img class="img-fluid teacher-photo" src="images/woman.jpg" />
                            <div class="teacher-about py-3">
                                <h3>Bambang S.Pdi</h3>
                                <h5>Guru Matematika</h5>
                            </div>
                        </div>
                        <div class="teacher-item text-center">
                            <img class="img-fluid teacher-photo" src="images/man.jpg" />
                            <div class="teacher-about py-3">
                                <h3>Bambang S.Pdi</h3>
                                <h5>Guru Matematika</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 text-center mt-sm-1 mt-md-3">
                <a class="btn btn-warning btn-more-teacher px-md-4 px-md-5 py-sm-1 py-md-2 text-uppercase" href="{{ route('get_all_teachers') }}">Tampilkan Semua Guru</a>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section id="testimonial" class="py-5 scroll-spy2">
        <div class="testimonial-overlay"></div>
        <div class="container pb-mb-5">
            <div class="section-title-secondary mb-5">
                <h1 class="text-uppercase">Testimoni Orangtua</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <blockquote class="lead mb-md-4"><em>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dicta 
                        perferendis iure eaque. Nulla harum placeat quod n esciunt ex tenetur perferendis 
                        architecto, nisi eius officia magnam impedit quia repellendus repudiandae.</em></blockquote>
                    
                    <h5>Bp. Mustafah</h5>
                    <strong>Programmer Bukalapak</strong>
                </div>
                <div class="col-md-4">
                    <blockquote class="lead mb-md-4"><em>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolorem 
                        vitae obcaecati praesentium suscipit amet aliquid, error dolorum voluptatibus 
                        repellendus, nihil omnis quos, sunt tempore inventore! Consequatur, consectetur 
                        nesciunt. Totam!</em></blockquote>

                    <h5>Bu. Siti</h5>
                    <strong>Perawat</strong>
                </div>
                <div class="col-md-4">
                    <blockquote class="lead mb-md-4"><em>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Id rerum asperiores fugit ipsum, explicabo sapiente. 
                        Quam non voluptate nemo reprehenderit minima. Dolorem 
                        laudantium voluptatem atque nemo maxime quas, eum eveniet.</em></blockquote>

                    <h5>Bp. Akhirta</h5>
                    <strong>CEO Medium</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- Visit Offer -->
    <section id="visit-offer" class="scroll-spy2">
        <div class="container-fluid">
            <div class="row py-lg-5">
                <div class="col-12 col-sm-12 col-md-6 py-md-5 py-lg-5">
                    <h1 class="mt-5 ml-md-5">Ingin Mengunjungi Sekolah? Ayo jadwalkan sekarang!</h1>

                    <a href="{{ route('get_appointment_making') }}" class="btn btn-primary ml-md-5">Jadwalkan Pertemuan</a>
                </div>
                <div class="col-md-6 text-center">
                    <div id="galleryIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#galleryIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#galleryIndicators" data-slide-to="1"></li>
                            <li data-target="#galleryIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="thumb">
                                    <img class="img-fluid" src="<?=base_url('assets/images/gallery_11.jpeg')?>" alt="Student">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="thumb">
                                    <img class="img-fluid" src="<?=base_url('assets/images/gallery_21.jpeg')?>" alt="Student">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="thumb">
                                    <img class="img-fluid" src="<?=base_url('assets/images/gallery_17.jpeg')?>" alt="Student">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5 mb-md-5 scroll-spy2">
        <div class="container">
            <div class="section-title mb-5">
                <h1 class="text-uppercase">Hubungi Kami</h1>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <h3 class="contact-title text-uppercase mb-4">Kontak</h3>
                    <div class="contact-list">
                        <div class="d-flex flex-row contact-list-item align-items-start mb-1">
                            <i class="fa fa-envelope mr-3"></i>
                            <div class="contact-list-item-desc w-100">
                                <h5>Email</h5>
                                <p>humas@elshaddaimulai.com</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row contact-list-item align-items-start mb-1">
                            <i class="fa fa-map-marker mr-3"></i>
                            <div class="contact-list-item-desc w-100">
                                <h5>Address</h5>
                                <p>Jln. Beringin Air Hitam No.8 CD Air Hitam No.8 CD Air Hitam No.8 CD Air Hitam No.8 CD</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row contact-list-item align-items-start mb-1">
                            <i class="fa fa-phone mr-3"></i>
                            <div class="contact-list-item-desc w-100">
                                <h5>Phone</h5>
                                <p>0274 - 513454</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row contact-list-item align-items-start mb-1">
                            <i class="fa fa-fax mr-3"></i>
                            <div class="contact-list-item-desc w-100">
                                <h5>Fax</h5>
                                <p>0274 - 542604</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <h3 class="contact-title text-uppercase mb-4">Lokasi Sekolah</h3>
                    <div id="elshaddai-map"></div>
                </div>
            </div>
        </div>
    </section>

    <footer id="main-footer" class="py-md-5 scroll-spy2">
        <div class="footer-overlay"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <!-- Logo dan Title -->
                    <div class="d-flex flex-row mb-3">
                        <img class="img-fluid logo-footer" src="<?=base_url('assets/images/logo2.png')?>" alt="">
                        <h1 class="align-self-center py-2">Elshaddai Mulia <br /><span>Pekanbaru</span></h1>
                    </div>
                    <!-- Deskripsi Sekolah -->
                    <p class="school-desc text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dicta provident 
                        velit error, debitis repudiandae eius earum iste, modi totam deserunt corporis min
                        ima at ipsa cumque. Dolor quo corrupti blanditiis!</p>
                    <!-- Divider -->
                    <!-- Social Media -->
                    <div class="social-media">
                        <a href="#"><i class="fa fa-facebook mr-3"></i></a>
                        <a href="#"><i class="fa fa-twitter mr-3"></i></a>
                        <a href="#"><i class="fa fa-instagram mr-3"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <!-- title -->
                    <h3 class="footer-list-title mb-4 text-white">Info Sekolah</h3>
                    <!-- Info Sekolah -->
                    <div class="d-flex footer-card">
                        <img class="img-fluid footer-card-img mr-3" src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="gallery 4">
                        <div class="footer-card-content">
                            <a href="#"><h3 class="mb-0">Siswa menjadi pemenang...</h3></a>
                            <strong>07 Juli 2019</strong>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. elit elit 
                                ...</p>
                        </div>
                    </div>

                    <div class="d-flex footer-card">
                        <img class="img-fluid footer-card-img mr-3" src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="gallery 4">
                        <div class="footer-card-content">
                            <a href="#"><h3 class="mb-0"">Siswa menjadi pemenang...</h3></a>
                            <strong>07 Juli 2019</strong>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. elit elit 
                                ...</p>
                        </div>
                    </div>

                    <div class="d-flex footer-card">
                        <img class="img-fluid footer-card-img mr-3" src="<?=base_url('assets/images/gallery_4.jpeg')?>" alt="gallery 4">
                        <div class="footer-card-content">
                            <a href="#"><h3 class="mb-0">Siswa menjadi pemenang...</h3></a>
                            <strong>07 Juli 2019</strong>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. elit elit 
                                ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <!-- title -->
                    <h3 class="footer-list-title mb-4 text-white">Agenda Sekolah</h3>
                    <!-- Agenda Sekolah -->
                    <div class="d-flex footer-card">
                        <img class="img-fluid footer-card-img mr-3" src="<?=base_url('assets/images/gallery_5.jpeg')?>" alt="gallery 4">
                        <div class="footer-card-content">
                            <a href="#"><h3 class="mb-0">Sekolah akan mengadakan...</h3></a>
                            <strong>07 Juli 2019</strong>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. elit elit 
                                ...</p>
                        </div>
                    </div>
                    <div class="d-flex footer-card">
                        <img class="img-fluid footer-card-img mr-3" src="<?=base_url('assets/images/gallery_5.jpeg')?>" alt="gallery 4">
                        <div class="footer-card-content">
                            <a href="#"><h3 class="mb-0">Sekolah akan mengadakan...</h3></a>
                            <strong>07 Juli 2019</strong>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. elit elit 
                                ...</p>
                        </div>
                    </div>
                    <div class="d-flex footer-card">
                        <img class="img-fluid footer-card-img mr-3" src="<?=base_url('assets/images/gallery_5.jpeg')?>" alt="gallery 4">
                        <div class="footer-card-content">
                            <a href="#"><h3 class="mb-0">Sekolah akan mengadakan...</h3></a>
                            <strong>07 Juli 2019</strong>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. elit elit 
                                ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- {{-- FOOTER NAVBAR --}} -->
    <section id="footer-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <p class="text-white py-3 mb-0">© Copyright 2020. All Rights Reserved By <a href="#">Elshaddai IT Team</a></p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="d-flex flex-row justify-content-center justify-content-sm-center justify-content-md-end py-3">
                        <a href="nav-link text-uppercase"><strong class="mr-4">Term of Users</strong></a>
                        <a href="nav-link text-uppercase"><strong class="mr-4">License</strong></a>
                        <a href="nav-link text-uppercase"><strong>Support</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        var map;

        function initMap() {
            let location = {lat: 0.5007333, lng: 101.3620647}
            let map = new google.maps.Map(document.getElementById('elshaddai-map'), {
                center: location,
                zoom: 16,
            });

            let marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Sekolah Elshaddai Mulia'
            });

            // TODO : Bikin window informasi sekolah seperti sma1yogyakarta.sch.id
            let infowindow = new google.maps.InfoWindow({
                content: "<img src='/images/logo2.png' alt='' style='width: 50px; position: relative; left: calc(65% - 50px);' /><h6 style='color: #333; text-align: center'>Sekolah Elshaddai Mulia</h6>"
            })

            infowindow.open(map, marker)
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgCDZEfOtO8rdgkWQ7L6I4ZsbrgkbiF8w&callback=initMap"
    async defer></script>
    <script>
    $(function() {
        "use strict"; // Start of use strict

        var bottomNav = $('#main-nav')
        var secondaryNav = $('#secondary-nav')
        
        $(window).scroll(function(){
            if($(window).scrollTop() <= 40){
                bottomNav.removeClass('navbar-scroll');
                secondaryNav.removeClass('navbar-scroll');
            } else {
                bottomNav.addClass('navbar-scroll');
                secondaryNav.addClass('navbar-scroll');
            }
        });

        $('#mybtn').on('click', function () {
            $('.animated-toggler').toggleClass('open');
            if ($('.animated-toggler').hasClass('open')) {
                $('#main-nav').addClass('add-background');
            } else {
                $('#main-nav').removeClass('add-background');
            }
        });
        
        $('#mybtn2').on('click', function () {
            $('.animated-toggler').toggleClass('open');
            if ($('.animated-toggler').hasClass('open')) {
                $('#secondary-nav').addClass('add-background');
            } else {
                $('#secondary-nav').removeClass('add-background');
            }
        });

        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                scrollTop: (target.offset().top - 56)
                }, 1000, "easeInOutExpo");
                return false;
                }
            }
        });

        $('.thumb2')
            // tile mouse actions
            .on('mouseover', function(){
                $(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
            })
            .on('mouseout', function(){
                $(this).children('.photo').css({'transform': 'scale(1)'});
            })
            .on('mousemove', function(e){
                $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
            })
            // tiles set up
            .each(function(){
                $(this)
                // add a photo container
                .append('<div class="photo"></div>')
                // some text just to show zoom level on current item in this example
                .append('<div class="txt"><div class="x">'+ $(this).attr('data-scale') +'x</div>ZOOM ON<br>HOVER</div>')
                // set up a background image for each tile based on data-image attribute
                .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
            })

            $('.thumb3').on('mousemove', function(e){
                $(this).find('.img-fluid').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
            })
    })
    </script>
</body>
</html>