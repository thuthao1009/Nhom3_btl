<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Mua bán tài liệu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/headicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

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
    $sql_dm="SELECT * FROM danhmucsp ";
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
                <img class="img-fluid" src="./assets/img/Orange Modern and Simple Book Store Banner.png" alt="" style="height: 40%; width: 100%;">
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
                    Những thứ bạn có thể kiếm được trong BAbook
                </p>
            </div>
        </div>
        <div class="row">
            <?php
                $i=0;
                while ($row_dm=mysqli_fetch_array($danh_muc)) {
                     $i++;
                  
             ?>
            <div class="col-12 col-md-3 col-sm-6 p-5 mt-3 text-center"  >
                <a href="#" class="text-center">
                    <img src="img/<?php echo $row_dm['dm_anh_minh_hoa'] ?>" class="rounded-circle img-fluid border" style="height: 120px; width: 120px;">
                </a>
                <div style="height: 70px;">
                    <h5 class="text-center mt-3 mb-3"><?php echo $row_dm['dm_ten_danh_muc'] ?></h5>
                </div>
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
                            <form method="POST" action="gio_hang.php" id="myform">
                            <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $row['sp_anh_minh_hoa'] ?>" style="height: 250px;" >
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">


                                        <li>
                                        <a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row['sp_id'] ?>">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <br>

                                    <!-- //nút add cart -->
                                    <li>
                                        <button value="Thêm vào giỏ hàng" name="addcart" class="btn btn-success text-white" type="submit">
                                            <i class="fas fa-cart-plus"></i>
                                        </button>
                                    </li>

                                    <!-- //lấy dữ liệu sản phẩm  -->  
                                    <input type="hidden" name="tensp" value="<?php echo $row['sp_tensp']?>">
                                    <input type="hidden" name="gia" value="<?php echo $row['sp_gia']?>">
                                    <input type="hidden" name="hinh" value="<?php  echo $row['sp_anh_minh_hoa'] ?>">
                                    <input type="hidden" name="idsp" value="<?php echo $row['sp_id'] ?>">
                                    <input type="hidden" name="nguoi_ban" value="<?php  echo $row['user_id_b'] ?>">
                                    <input type="hidden" name="soluong" value="1">





                                        
                                    </ul>
                                </div>
                            </div>
                        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>