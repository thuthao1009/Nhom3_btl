<?php 

    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
     session_start();
     ob_start();
     
    

;?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Detail Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/headicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- css đăng nhập, đăng ký -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Load fonts style after rendering the layout styles -->
    <!-- Tải kiểu phông chữ sau khi hiển thị các kiểu bố cục -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
</head>

<body>
    <?php 
 
    $id=$_GET['id'];
    require('config.php');
    require('menu.php');
    //cập nhật số lượt xem
    $sql_update="UPDATE sanpham SET so_luot_xem=so_luot_xem +1 WHERE sp_id=".$id;
    $update=mysqli_query($con,$sql_update);
   


    $sql = "SELECT * FROM `sanpham` JOIN theloai ON sanpham.tl_id=theloai.tl_id JOIN user ON user.user_id=sanpham.user_id JOIN danhmucsp ON `danhmucsp`.`dm_id`=  `sanpham`.`dm_id`   WHERE sanpham.sp_id=".$id;
    $san_pham=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($san_pham);
    $sql_lq ="SELECT * FROM sanpham WHERE sp_id<>'".$id."' AND tl_id LIKE (SELECT tl_id FROM sanpham WHERE sp_id='".$id."') ORDER BY `sanpham`.`created_at` DESC ";
        // echo $sql_lq; exit();
    $lien_quan=mysqli_query($con,$sql_lq);
    $sql_anh="SELECT * FROM `thumucanh` WHERE sp_id='".$id."' ORDER BY `thumucanh`.`tma_id` ASC ";
    $anh=mysqli_query($con,$sql_anh);
    $row_anh=mysqli_fetch_array($anh);
    $sql_sl_anh="SELECT COUNT(*) FROM `thumucanh` WHERE sp_id='".$id."' ORDER BY `thumucanh`.`tma_id` ASC ";
    $sl_anh=mysqli_query($con,$sql_sl_anh);
    $row_sl_anh=mysqli_fetch_array($sl_anh);
    ?>

    <!-- Start Article -->
 <!-- Start Article -->
 
    <!-- End Article -->

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row" >
                <!-- slide ảnh -->
                 <div class="col-lg-5 mt-5">
                        <div class="container product-links-wap ">
                            <div class="card  mb-3 " >  
                                <img class="card-img img-fluid"  src="assets/img/<?php  echo $row_anh['anhminhhoa'] ?>" alt="Card image cap" id="product-detail" style="height: 550px;">
                            </div>
                            <br>
                           

                            <!--Start Carousel Wrapper-->
                            <div id="carousel-image" >
                                <?php for ($i=0; $row_anh=mysqli_fetch_array($anh) ; $i++) { ?>
                                    <div class="col-3 ">
                                        <a href="#" >
                                            <img class="card-img img-fluid " onclick="currentSlide(<?php  echo $i ?>)" src="assets/img/<?php  echo $row_anh['anhminhhoa'] ?>" alt="Product Image 1">
                                        </a>
                                    </div>
                                <?php }; ?>
                            </div>
                        </div>
                </div>
               <!--  slide ảnh -->
                <!-- col end -->

                
                <div class="col-lg-7 mt-5">
                    
                    <div class="card">
                        <div class="card-body" >
                            <h1 class="h2">&nbsp<?php echo $row['sp_tensp']?></h1>
                            <p class="h3 py-2">&nbsp<?php echo $row['sp_gia']?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>&nbsp&nbsp Người đăng: </h6>
                                </li>
                                <li class="list-inline-item">
                                    <a href="nguoi_dang.php?id=<?php echo $row['user_id']?>" class=" text-decoration-none" style=" color: black;"><?php echo $row['user_hoten']  ?>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>&nbsp&nbsp Môn học:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class=""><?php echo $row['tl_ten_tl']  ?></p>
                                </li>
                            </ul>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>&nbsp&nbsp Tình trạng:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="">
                                        <strong>
                                            <?php echo $row['sp_tinh_trang']  ?>
                                            </strong>
                                    </p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>&nbsp&nbsp Năm xuất bản:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="">
                                        <strong><?php echo $row['sp_namxb']  ?></strong>
                                    </p>
                                </li>
                            </ul>

                            <h6> &nbsp&nbsp Mô tả</h6>
                            <div class="content hideContent text-decoration-none" style="height: 240px;"> &nbsp&nbsp<?php echo $row['sp_mo_ta']  ?></div>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Còn lại:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="">
                                        <strong><?php echo $row['sp_soluong']  ?></strong>
                                    </p>
                                </li>
                            </ul>
                            <form method="POST" action="gio_hang.php">
                                <input type="hidden" name="tensp" value="<?php echo $row['sp_tensp']?>">
                                <input type="hidden" name="gia" value="<?php echo $row['sp_gia']?>">
                                <input  type="hidden" name="hinh" value="<?php  echo $row['sp_anh_minh_hoa'] ?>">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Số lượng
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item">
                                                <input  type="number" name="soluong" min="1" max="<?php echo $row['sp_soluong']  ?>" value="1">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <!-- nút mua ngay -->
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Mua ngay</button>
                                    </div>
                                    <!-- nút thêm vào giỏ hàng -->
                                    <div class="col d-grid">
                                        <input type="submit" value="Thêm vào giỏ hàng" class="them_gio_hang btn btn-success btn-lg" name="addcart">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>                
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Sản phẩm liên quan</h4>
            </div>
            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
                <?php 
                    $i=0;
                    while ($row_lq = mysqli_fetch_array($lien_quan)) {
                        $i++;
                ;?>
                
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <form method="POST" action="gio_hang.php" id="myform">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="assets/img/shop_08.jpg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">

                                    <!-- //nút xem thêm -->
                                    <li>
                                        <a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row_lq['sp_id'] ?>">
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
                                    <input type="hidden" name="tensp" value="<?php echo $row_lq['sp_tensp']?>">
                                    <input type="hidden" name="gia" value="<?php echo $row_lq['sp_gia']?>">
                                    <input type="hidden" name="hinh" value="<?php  echo $row_lq['sp_anh_minh_hoa'] ?>">
                                    <input type="hidden" name="soluong" value="1">
     
                                </ul>

                            </div>
                        </div>
                        </form>
                        <div class="card-body">
                            <div class="content hideContent text-decoration-none" style="text-align: center;">
                                <a href="shop-single.php?id=<?php echo $row_lq['sp_id'] ?>" class="content hideContent text-decoration-none">
                                    <?php echo $row_lq['sp_tensp']?>
                                </a>
                            </div>
                            <p class="text-center mb-0"><?php echo $row_lq['sp_gia']?></p>
                            <div class="show-more" style="text-align: center;">
                                <a href="shop-single.php?id=<?php echo $row_lq['sp_id'] ?>" class="h3 text-decoration-none">Xem thêm</a>
                            </div>
                                
                        </div>
                    </div>
                </div>
            
<?php } ?>
            </div>
        </div>
    </section>
    <!-- End Article -->
    <?php require('footer.php');?>


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>




    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: false,
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
    <script>
        $('#carousel-image').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: false,
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
    <script>
    function submitForm(){
        document.getElementById('myform').submit();
    }
</script>
    <!-- End Slider Script -->

</body>

</html>