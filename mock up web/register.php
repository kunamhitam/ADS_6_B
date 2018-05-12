<?php

require_once("connect.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $pasien_nama = filter_input(INPUT_POST, 'pasien_nama', FILTER_SANITIZE_STRING);
    $pasien_alamat = filter_input(INPUT_POST, 'pasien_alamat', FILTER_SANITIZE_STRING);
    $pasien_notelp = filter_input(INPUT_POST, 'pasien_notelp', FILTER_SANITIZE_STRING);
	$pasien_keluhan = filter_input(INPUT_POST, 'pasien_keluhan', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO profilpasien (pasien_nama, pasien_alamat, pasien_notelp, pasien_keluhan) 
    VALUES (:pasien_nama, :pasien_alamat, :pasien_notelp, :pasien_keluhan)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":pasien_nama" => $pasien_nama,
        ":pasien_alamat" => $pasien_alamat,
        ":pasien_notelp" => $pasien_notelp,
        ":pasien_keluhan" => $pasien_keluhan
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: listantrian.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Medica - Health &amp; Medical Template | Contact</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="img/core-img/plus.png" alt="logo">
    </div>

    
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                                <div class="collapse navbar-collapse" id="medicaMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                       <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.html">Home</a>
                                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                                <a class="dropdown-item" href="services.html">Services</a>
                                                <a class="dropdown-item" href="blog.html">News</a>
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                                <a class="dropdown-item" href="elements.html">Elements</a>
                                            </div>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="jadwaldokter.php">Profil Dokter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="listantrian.php">List Antrian</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">Jadwal Prektek</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Daftar</a>
                                        </li>
                                    </ul>
                                    <!-- Search Form -->
                                    <div class="header-search-form ml-auto">
                                        <form action="#">
                                            <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                            <input class="d-none" type="submit" value="submit">
                                        </form>
                                    </div>
                                    <!-- Search btn -->
                                    <div id="searchbtn">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

   <!-- <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/hero5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title 
                        <h3 class="breadcumb-title">Contact</h3>-->
                        <!-- Breadcumb 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="medica-contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h5 class="mb-50">Isi data diri Anda untuk mulai mengantri</h5>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="pasien_nama" placeholder="Nama">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="pasien_notelp"  placeholder="No. Telepon">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="pasien_alamat" placeholder="Alamat">
                                </div>
                                <div class="col-12">
                                    <textarea name="pasien_keluhan" class="form-control" cols="30" rows="10" placeholder="Keluhan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="register" class="btn medica-btn btn-3 mt-3">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Medica Emergency Card -->
                        <div class="medica-emergency-card mb-4">
                            <h5>For Emergencies</h5>
                            <h4>+0080 954 4557 884</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <!-- Medica Appointment Card -->
                        <div class="medica-contact-card">
                            <h5>Useful Information</h5>
                            <div class="mt-50"></div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/alarm-clock.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Monday - Friday 08:00 - 21:00 <br> Saturday and Sunday - CLOSED</p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/envelope.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>673 729 766 | 234 5678 900 <br> contact@business.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/map-pin.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Lamas Carbajal Str, no 14-18 <br> 41770 Montellano</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps 
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div> -->

 
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="bottom-footer-content h-100 d-md-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                            </div>
                            <!-- Footer Menu -->
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Doctors</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>