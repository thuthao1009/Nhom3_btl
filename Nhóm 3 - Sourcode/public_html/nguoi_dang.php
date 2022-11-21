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
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>
<body>
    <?php 
    $id=$_GET['id'];
    require('config.php');
    require('menu.php');
    $tl     = isset($_GET['id_tl'])? $_GET['id_tl'] : '';
    $dm     = isset($_GET['id_dm'])? $_GET['id_dm'] : '';
    $sapxep = isset($_GET['sort'])?  $_GET['sort'] : '';
    $so_sp_1_trang=20;
     if(isset($_GET['trang'])){
        $trang=$_GET['trang'];
        settype($trang, "int");
     }else{
        $trang=1;
     }
        $from=($trang-1)*$so_sp_1_trang;

    $sql="SELECT * FROM sanpham WHERE user_id_b='".$id."'";
    if($tl==''){
            $sql=$sql;
    } else{
            $sql=$sql."AND tl_id='".$tl."' ";
    }
    if($dm==''){
            $sql=$sql;
    } else
    {
            $sql=$sql."AND dm_id='".$dm."' ";
    }
    if ($sapxep == '') {
            $sql = $sql ."ORDER BY sp_id ";
    } else {
            $sql = $sql ."ORDER BY " .$sapxep;
    }
     $sql=$sql." LIMIT $from, $so_sp_1_trang" ;
     // echo $sql; exit();
    $san_pham=mysqli_query($con,$sql);

    
    ?>




    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
<!-- thông tin người đăng -->
            <div class="col-lg-3">
                <div id="img-avt">
                    <!-- lấy ra thông tin người đăng -->
                    <?php 
                        $sql_nguoi_dang="SELECT * FROM user WHERE user_id='".$id."'";
                        $nguoi_dang=mysqli_query($con,$sql_nguoi_dang);
                        $row_nguoi_dang=mysqli_fetch_array($nguoi_dang); 
                    ?>
                    <h1 class="h2 pb-4 "><p style="text-align: center;"><img  src="assets/img/user.png" class="rounded-circle img-avt border" align="middle" ></p></h1>
                    <p style="text-align: center;"><?php echo $row_nguoi_dang['user_hoten'] ?></p>
                    <p style="text-align: center;"><?php echo $row_nguoi_dang['email'] ?></p>
                </div>
                <br>
                <hr>
<!-- danh mục sản phẩm -->
                <h1 class="h2 pb-4" id="moveto">Danh mục</h1>
                <?php  
                    $sql_dm= "SELECT DISTINCT dm_ten_danh_muc ,danhmucsp.dm_id FROM  danhmucsp  ";
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
                            <li><a class="text-decoration-none" href="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $row_tl['tl_id'] ?>&id_dm=<?php echo $row_dm['dm_id'] ?>&sort=&trang=1"><?php echo $row_tl['tl_ten_tl'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                 <?php } ?>
                 </ul>
            </div>
            <div class="col-lg-9">

                <div class="row">
                    <!-- sắp xếp sản phẩm -->
                    <div class="col-md-6 pb-4">

                        <div class="d-flex">
                            <select name="select-sort" class="select-sort" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=&trang=1"<?php if($sapxep=='') echo "selected"; ?>>Liên quan</option>
                                <option value="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_tensp &trang=1"<?php if($sapxep=='sp_tensp ') echo "selected"; ?>>A tới Z</option>
                                <option value="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_tensp DESC &trang=1"<?php if($sapxep=='sp_tensp DESC ') echo "selected"; ?>>Z tới A</option>
                                <option value="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_gia &trang=1"<?php if($sapxep=='sp_gia ') echo "selected"; ?>>Giá, thấp đến cao</option>
                                <option value="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_gia DESC &trang=1"<?php if($sapxep=='sp_gia DESC ') echo "selected"; ?>>Giá, cao đến thấp</option>
                                
                            </select>
                        </div>
                    </div>


                </div>
                <div class="row ">

                    <!-- ô sản phẩm  -->
                    <?php 
       
                $i=0;
                while ($row = mysqli_fetch_array($san_pham)) {
                    $i++;
                ;?>
                        <div class="col-md-3 col-sm-6 " >
                        <div class="card mb-4 product-wap rounded-0" >
                            <form method="POST" action="gio_hang.php" id="myform">
                            <div class="card rounded-0" >
                                <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $row['sp_anh_minh_hoa'] ?>" style="height: 250px;" >
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                          <!-- //nút xem thêm -->
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
                                    <input type="hidden" name="hinh" value="<?php echo $row['sp_anh_minh_hoa'] ?>">
                                    <input type="hidden" name="idsp" value="<?php echo $row['sp_id'] ?>">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="nguoi_ban" value="<?php  echo $row['user_id_b'] ?>">

                                        
                                    </ul>
                                </div>
                            </div>
                        </form>
                            <div class="card-body">
                                    <div class="content hideContent text-decoration-none text-center" >
                                        <a href="shop-single.php?id=<?php echo $row['sp_id'] ?>" class="content hideContent text-decoration-none"><?php echo $row['sp_tensp']  ?>  
                                        </a>
                                    </div>
                                    <p class="text-center mb-0"><?php echo $row['sp_gia']  ?></p>
                                    <div class="show-more text-center ">
                                        <a href="shop-single.php?id=<?php echo $row['sp_id'] ?>" class="h3 text-decoration-none">Xem thêm</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                ;?>
                </div>
                <!-- hết ô sản phẩm  -->

                <!-- số trang -->
                  <div div="row">
                    <ul class="pagination pagination-lg justify-content-center">
                    <?php 
                            #Lấy ID của page
                    if(isset($_GET['trang'])){
        $trang=$_GET['trang'];
        settype($trang, "int");
     }else{
        $trang=1;
     }
    $from=($trang-1)*$so_sp_1_trang;
    $tong="SELECT * FROM sanpham WHERE user_id_b='".$id."'";
    
    if($tl==''){
            $tong=$tong;
    } else{
            $tong=$tong." AND tl_id='".$tl."' ";
    }
    if($dm==''){
            $tong=$tong;
    }else 
    {
            $tong=$tong." AND dm_id='".$dm."' ";
    }
    if ($sapxep == '') {
            $tong = $tong ." ORDER BY sp_id ";
    } else {
            $tong = $tong ." ORDER BY " .$sapxep;
    }
     $tong=$tong;
                        
                            $tong_sp = mysqli_query($con, $tong)->num_rows;

                            $so_trang= ceil($tong_sp/$so_sp_1_trang);

                                 // echo $so_trang; exit();
                            for ($t=1; $t <=$so_trang ; $t++) { ?>
                                    <li class="page-item ">
                                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="nguoi_dang.php?id=<?php echo $id?>&id_tl=<?php echo $tl?>&id_dm=<?php echo $dm?>&sort=<?php echo $sapxep?>&trang=<?php echo $t?>" tabindex="-1"><?php echo "$t" ?></a>
                                   <!--  // echo " 
                                    // <a href='index.php?trang=$t'>$t</a> " ; -->
                    <?php  }?>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <?php require ('footer.php') ?>


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>