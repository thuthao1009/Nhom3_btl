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

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>
<body>
    <?php 
    require('config.php');
    require('menu.php');
    $id_tl=$_GET['id_tl'];
    $id_dm=$_GET['id_dm'];
    echo $id_dm;
    echo $id_tl;
    exit();
     $so_sp_1_trang=20;
     if(isset($_GET['trang'])){
        $trang=$_GET['trang'];
        settype($trang, "int");
     }else{
        $trang=1;

     }
          $from=($trang-1)*$so_sp_1_trang;
    $sql="SELECT * FROM sanpham WHERE tl_id='".$id_tl."' AND dm_id='".$id_dm."' ORDER BY sp_id DESC LIMIT $from, $so_sp_1_trang ";
    $san_pham=mysqli_query($con,$sql);
    ?>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Danh mục</h1>
                <?php  
                    $sql_dm= "SELECT DISTINCT dm_ten_danh_muc ,danhmucsp.dm_id FROM sanpham JOIN danhmucsp ON sanpham.dm_id=danhmucsp.dm_id ";
                    $danh_muc=mysqli_query($con,$sql_dm);
                ?>
                <ul class="list-unstyled templatemo-accordion"  >
                    <?php
                        $i=0;
                        while ($row_dm=mysqli_fetch_array($danh_muc)) {
                            $i++;
                    ?>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none"  href="#">
                            <?php echo $row_dm['dm_ten_danh_muc'] ?>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1" ></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <?php 
                                $sql_tl="SELECT DISTINCT theloai.tl_id, theloai.tl_ten_tl FROM sanpham JOIN danhmucsp ON sanpham.dm_id=danhmucsp.dm_id JOIN theloai ON theloai.tl_id=sanpham.tl_id WHERE danhmucsp.dm_id='".$row_dm['dm_id']."'";
                                $the_loai=mysqli_query($con,$sql_tl);
                                $t=0;
                                    while ($row_tl=mysqli_fetch_array($the_loai)) {
                            $t++;
                             ?>
                            <li><a class="text-decoration-none" href="shop.php?id=<?php echo $row_tl['tl_id'] ?>"><?php echo $row_tl['tl_ten_tl'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="row">
                   <!--  <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul>
                    </div> -->

                    <!-- sắp xếp sản phẩm -->
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Sắp xếp</option>
                                <option>Tất cả</option>
                                <option>Mới nhất</option>
                                <option>A to Z</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- ô sản phẩm  -->
                    <?php 
                        $i=0;
                        while ($row = mysqli_fetch_array($san_pham)) {
                                $i++;
                    ;?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="assets/img/shop_01.jpg">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.php?id=<?php echo $row['sp_id'] ?>"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row['sp_id'] ?>"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?id=<?php echo $row['sp_id'] ?>"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                    <div class="content hideContent text-decoration-none"><a href="shop-single.php?id=<?php echo $row['sp_id'] ?>" class="content hideContent text-decoration-none"><?php echo $row['sp_tensp']  ?></a></div>
                                  
                                    <div class="content hideContent h3 text-decoration-none"> <?php echo $row['sp_mo_ta']  ?></div>
                                    <div class="show-more">
                                        <a href="shop-single.php?id=<?php echo $row['sp_id'] ?>" class="h3 text-decoration-none">Xem thêm</a>
                                    </div>

                                     <p class="text-center mb-0"><?php echo $row['sp_gia']  ?></p>
                            </div>
                        </div>
                    </div>
                    <?php };?>
                </div>
                <!-- số trang -->
                 <div div="row">
                    <ul class="pagination pagination-lg justify-content-center">

                    <?php 
                        $tong="SELECT sp_id FROM sanpham";
                        $tong_sp = mysqli_query($con, $tong)->num_rows;
                                // echo $tong_sp; exit();
                        $so_trang= ceil($tong_sp/$so_sp_1_trang);
                                 // echo $so_trang; exit();
                            for ($t=1; $t <=$so_trang ; $t++) { ?>
                                    <li class="page-item ">
                                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="shop.php?trang=<?php echo $t ?>" tabindex="-1"><?php echo "$t" ?></a>
                                   <!--  // echo " 
                                    // <a href='index.php?trang=$t'>$t</a> " ; -->
                    <?php } ?>   
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>