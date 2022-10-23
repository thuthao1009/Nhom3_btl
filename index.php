<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Mua bán tài liệu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body>

    <?php 
    require('config.php');
    require('menu.php');
    $sql="SELECT * FROM sanpham ORDER BY so_luot_xem DESC LIMIT 0,8";
    $san_pham_noi_bat=mysqli_query($con,$sql);
    $sql_dm="SELECT DISTINCT danhmucsp.dm_ten_danh_muc, danhmucsp.dm_id FROM danhmucsp ";
    $danh_muc=mysqli_query($con,$sql_dm);
    ?>
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="./assets/img/3.jpg" alt="" style="height: 40%; width: 100%;">
            </div>
            <div class="carousel-item" >
                <img class="img-fluid" src="./assets/img/2.jpg" alt="" style="height: 40%; width: 100%;">
            </div>
            <div class="carousel-item" >
                <img class="img-fluid" src="./assets/img/1.jpg" alt="" style="height: 40%; width: 100%;">
            </div>
            
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->



    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Danh mục sản phẩm</h1>
                <p>
                    Những thứ bạn có thể kiếm được trong LazaBA
                </p>
            </div>
        </div>
        <div class="row">
            <?php
                $i=0;
                while ($row_dm=mysqli_fetch_array($danh_muc)) {
                     $i++;
                  
             ?>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="#">
                    <img src="./assets/img/<?php echo $row['sp_anh_minh_hoa'] ?>" class="rounded-circle img-fluid border">
                </a>
                <h5 class="text-center mt-3 mb-3"><?php echo $row_dm['dm_ten_danh_muc'] ?></h5>
                <p class="text-center">
                    <a class="btn btn-success" href="shop.php?id_tl=&id_dm=<?php echo $row_dm['dm_id'] ?>&sort=&trang=1">Xem thêm</a>
                </p>
            </div>
            <?php } ?>
        </div>
    </section>



    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <!-- giới thiệu hàng sản phẩm nổi bật -->
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sản phẩm nổi bật</h1>
                    <p>Những sản phẩm được xem nhiều nhất</p>
                </div>
            </div>
            <!-- giới thiệu hàng sản phẩm nổi bật -->

            <!-- sản phẩm nổi bật -->
          

            <div class="row  carousel-related-product">
                <?php 
                $i=0;
                while ($row = mysqli_fetch_array($san_pham_noi_bat)) {
                    $i++;
                ;?>
                    <div class="col-md-3 col-sm-6 " >
                        <div class="card mb-4 product-wap rounded-0" >
                            <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $row['sp_anh_minh_hoa'] ?>" style="height: 250px;" >
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.php?id=<?php echo $row['sp_id'] ?>"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row['sp_id'] ?>"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row['sp_id'] ?>"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content hideContent text-decoration-none text-center">
                                    <a href="shop-single.php?id=<?php echo $row['sp_id'] ?>" class="content hideContent text-decoration-none"><?php echo $row['sp_tensp']  ?></a>
                                </div>
                                <p class="text-center mb-0 "><?php echo $row['sp_gia']  ?></p>
                            <div class="show-more text-center">
                                <a href="shop-single.php?id=<?php echo $row['sp_id'] ?>" class="h3 text-decoration-none">Xem thêm</a>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php };?>
    </div>

    </section>
    <!-- End Featured Product -->


    <?php require('footer.php');?>


    <!-- Start Script -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    
    <!-- End Script -->
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
</body>

</html>