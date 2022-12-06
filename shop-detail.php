<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Ikanhiasrahmania</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <!-- Start Main Top -->
        <div class="main-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="text-slid-box">
                            <div id="offer-box" class="carouselTicker">
                                <ul class="offer-box">
                                </ul>
                            </div>
                        </div>
                    </div>
                        <div class="right-phone-box">
                        </div>
                        <div class="our-link">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="beranda.php"><img src="images/logo-ikanhias.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="beranda.php">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Kategori</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Kategori</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Harga</a></li>
                                                    <li><a href="shop.php">Kota</a></li>
                                                    <li><a href="shop.php">Favorit</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Belanja</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Keranjang</a></li>
                                <li><a href="checkout.php">Buat Pesanan</a></li>
                                <li><a href="wishlist.php">Favorit</a></li>
                                <li><a href="shop-detail.php">Detail Produk</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Bantuan</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/ikan-maskoki.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Ikan Mas Koki </a></h6>
                            <p>1x - <span class="price">10.000</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/ikan-cupang.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Ikan Cupang Halfmoon</a></h6>
                            <p>1x - <span class="price">30.000</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/ikan-lemon.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Ikan Lemon</a></h6>
                            <p>1x - <span class="price">5.000</span></p>
                        </li>
                        <li class="total">
                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">LIHAT KERANJANG</a>
                            <span class="float-right"><strong>Total</strong>: 45.000</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Detail Produk</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="beranda.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Detail Produk </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="images/ikanmas-kecil.jpg" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/ikanmas-kecil1.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/ikanmas-kecil2.jpg" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="images/ikanmas-besar.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="images/ikanmas-besar1.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="images/ikanmas-besar2.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>Ikan Mas Koki</h2>
                        <h5>10.000</h5>
                        <p class="available-stock"><span> Lebih dari 20 tersedia / <a href="#">8 terjual </a></span>
                            <p>
                                <h4>Deskripsi:</h4>
                                <p>Ready Ikan Hias Mas Koki Oranda</p>
                                <p>Size 6,7 cm, Ikan Real Pick Pastinya, Ikan Sehat Bebas Dari Kutu & Virus, Ikan Mewah Bosku Cocok Di Jadikan Hiasan Di Aquarium , Ikan Grade A+ ( High Quality ), Ikan Sudah Sortiran Ketat</p>
                                <p>Stok Ready . </p>

                                    <li>
                                        <div class="form-group quantity-box">
                                            <label class="control-label">Jumlah</label>
                                            <input class="form-control" value="0" min="0" max="20" type="number">
                                        </div>
                                    </li>

                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#">Beli Baru</a>
                                        <a class="btn hvr-hover" data-fancybox-close="" href="cart.php">Keranjang</a>
                                        <a class="btn hvr-hover" href="wishlist.php"><i class="fas fa-heart"></i> Tambah ke Favorit</a>
                                    </div>
                                </div>

                                <div class="add-to-btn">
                                    <div class="add-comp">
                                    </div>
                                    <div class="share-bar">
                                        <div class="col-md-6">
                                <h2 class="mb-4">1 review untuk "Ikan Mas Koki"</h2>
                                <div class="media mb-4">
                                    <img src="images/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                        <div class="text-primary mb-2">
                                        </div>
                                        <p>Saya baru beli ikan koki ini beberapa minggu dan kondisinya masih lincah dan sehat sampai sekarang sudah lumayan agak besar.</p>
                                    </div>
                                </div>
                            </div>

                                <h4 class="mb-4">Tinggalkan Review</h4>
                                <small>Alamat email Anda tidak akan dipublikasikan. Bidang yang wajib diisi ditandai *</small>
                                <div class="d-flex my-3">
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Review Anda *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama Anda *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Anda *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Tinggalkan Review Anda" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End Cart -->

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Tentang Ikan Hias Rahmania</h4>
                            <p>Ikan Hias Rahmania adalah sebuah website penjualan ikan hias untuk mempermudah orang-orang mencari ikan hias</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="beranda.php">Beranda</li>
                                    <li><a href="about.php">Tentang</a></li>
                                    <li><a href="contact-us.php">Bantuan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Bantuan</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Alamat: Jalan Laks Martadinata<br>Malang,<br> Jawa Timur </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+62 838-3042-3112">+62 838-3042-3112</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="ikanhiasrahmania@gmail.com">ikanhiasrahmania@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#">Ikan Hias Rahmania</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>