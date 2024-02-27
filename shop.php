<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Shop -</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/logohome1.png" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Pe Icon 7 Min Icons CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.min.css" rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href="assets/css/ionicons.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet" />
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Slick CSS ==-->
    <link href="assets/css/slick.css" rel="stylesheet" />
    <!--== Rangeslider CSS ==-->
    <link href="assets/css/rangeslider.css" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper page-shop-wrapper">

        <!-- header -->

        <?php include 'components/header.php' ?>

        <main class="main-content">
            <!--== Start Page Title Area ==-->
            <section class="page-title-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 m-auto">
                            <div class="page-title-content text-center">
                                <h2 class="title">Product</h2>
                                <div class="bread-crumbs"><a href="index.php"> Home </a><span class="breadcrumb-sep"> // </span><span class="active"> Product</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Page Title Area ==-->

            <!--== Start Shop Area Wrapper ==-->
            <div class="product-area product-grid-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-0 order-lg-1">
                            <div class="shop-toolbar-wrap">
                                <div class="product-showing-status">
                                    <p class="count-result"><span>Produk  </span>Ditemukan sebanyak <span> 30</span></p>
                                </div>
                                <div class="product-view-mode">
                                    <nav>
                                        <div class="nav nav-tabs active" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab" data-bs-target="#column-three" type="button" role="tab" aria-controls="column-three" aria-selected="true"><i class="fa fa-th"></i></button>

                                            <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>

                                        </div>
                                    </nav>
                                </div>
                                <div class="product-sorting-menu product-sorting">
                                    <span class="current">Filter: <span> Default <i class="fa fa-angle-down"></i></span></span>
                                    <ul>
                                        <li class="active"><a href="shop.php" class="active">Filter by Default</a></li>
                                        <li><a href="shop.php">Filter by Popularity</a></li>
                                        <li><a href="shop.php">Filter by Rated</a></li>
                                        <li><a href="shop.php">Filter by Latest</a></li>
                                        <li><a href="shop.php">Filter by Price: <i class="lastudioicon-arrow-up"></i></a></li>
                                        <li><a href="shop.php">Filter by Price: <i class="lastudioicon-arrow-down"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="column-three" role="tabpanel" aria-labelledby="column-three-tab">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">

                                            <!-- Start Product Item shop -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/16.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title">Tenda Oren</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/17.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Alat Masak</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/18.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Matras</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.5.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/19.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Kursi Lipat</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.15.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/20.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Carrier</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/21.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Sepatu Gunung</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/22.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Kompor Gas</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/23.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Tenda Abu Hijau</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/24.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Tenda Hijau</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/25.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Tenda Kap 15</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/26.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Tenda Biru Kuning</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/27.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Tenda Biru Oren</a></h4>
                                                    <div class="prices">
                                                        <span class="price">Rp.50.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                                    <div class="row">
                                        <div class="col-12 product-items-list">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="column-two" role="tabpanel" aria-labelledby="column-two-tab">
                                    <div class="row">
                                        <div class="col-sm-6">
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-area mb-md-50">
                                        <nav>
                                            <ul class="page-numbers justify-content-end">
                                                <li>
                                                    <a class="page-number active" href="#">1</a>
                                                </li>
                                                <li>
                                                    <a class="page-number" href="#">2</a>
                                                </li>
                                                <li>
                                                    <a class="page-number" href="#">3</a>
                                                </li>
                                                <li>
                                                    <a class="page-number next" href="#">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-1 order-lg-0">
                            <div class="sidebar-area shop-sidebar-area">
                                <div class="widget-item">
                                    <div class="widget-title">
                                        <h3 class="title">Kategori Produk</h3>
                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-categories">
                                            <ul>
                                                <li><a href="shop.php">Aksesories <span>(6)</span></a></li>
                                                <li><a href="shop.php">Tenda<span>(4)</span></a></li>
                                                <li><a href="shop.php">Alat Masak <span>(2)</span></a></li>
                                                <li><a href="shop.php">Electronics <span>(6)</span></a></li>
                                                <li><a href="shop.php">Matras <span>(12)</span></a></li>
                                                <li><a href="shop.php">Kursi Camping <span>(7)</span></a></li>
                                                <li><a href="shop.php">Carrier <span>(9)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Shop Area Wrapper ==-->
        </main>

        <!--== Start Footer Area Wrapper ==-->
        <?php include 'components/footer.php'  ?>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>


        <!--== Start Aside Search Menu ==-->
        <div class="search-box-wrapper">
            <div class="search-box-content-inner">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form action="#" method="post">
                        <div class="search-form position-relative">
                            <label for="search-input" class="sr-only">Search</label>
                            <input type="search" class="form-control" placeholder="Search" id="search-input">
                            <button class="search-button"><i class="pe-7s-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!--== End Aside Search Menu ==-->
            <a href="javascript:;" class="search-close"><i class="pe-7s-close"></i></a>
        </div>
        <!--== End Aside Search Menu ==-->

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay d-none"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-close"><i class="pe-7s-close"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                    <!-- Off Canvas Footer -->
                    <div class="off-canvas-footer"></div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="assets/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== jquery Appear Js ===-->
    <script src="assets/js/jquery.appear.js"></script>
    <!--=== jquery Swiper Min Js ===-->
    <script src="assets/js/swiper.min.js"></script>
    <!--=== jquery Fancybox Min Js ===-->
    <script src="assets/js/fancybox.min.js"></script>
    <!--=== jquery Aos Min Js ===-->
    <script src="assets/js/aos.min.js"></script>
    <!--=== jquery Slicknav Js ===-->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!--=== jquery Countdown Js ===-->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!--=== jquery Tippy Js ===-->
    <script src="assets/js/tippy.all.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--=== Parallax Min Js ===-->
    <script src="assets/js/parallax.min.js"></script>
    <!--=== Slick  Min Js ===-->
    <script src="assets/js/slick.min.js"></script>
    <!--=== jquery Wow Min Js ===-->
    <script src="assets/js/wow.min.js"></script>
    <!--=== RangeSlider  Min Js ===-->
    <script src="assets/js/rangeSlider.js"></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="assets/js/jquery-zoom.min.js"></script>

    <!--=== Custom Js ===-->
    <script src="assets/js/custom.js"></script>

</body>

</html>