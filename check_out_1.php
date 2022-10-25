<?php  
    ob_start();
    session_start();
    include("config.php");
    // ktra thông tin sản phẩm trong giỏ
    $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
    $wishlist = (isset($_SESSION["wishlist"]))?$_SESSION["wishlist"] : [];
    // in thử coi hiện mảng đúng k
    // echo "<pre>";
    // print_r($cart);
  /*  if(!isset($_SESSION['login_success'])) {
        echo "<script type='text/javascript'>
            window.alert('Bạn phải đăng nhập tài khoản');
            window.location.href='login.php';
        </script>";
    } 
    include("config.php");*/
;?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Gsore | Grocery and Organic Food Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugin/jquery.lineProgressbar.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Thư viện này để hiển thị đc modal tương úng với masanpham -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- ::::::  Start Header Section  ::::::  -->
      

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
  
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <?php 
                if(isset($_POST["addNew"])){
                    // echo "<prE>";
                    // print_r($_POST);
                    $ngaydat = date("Y-m-d H:i:s");
                    $maphuongthucthanhtoan = isset($_POST["return-and-refund"][0])?$_POST["return-and-refund"][0]:1;
                    $ghichudonhang = $_POST["ghichudonhang"];
                    $tenkhachdathang = $_POST["tenkhachdathang"];
                    $diachikhachdathang = $_POST["diachikhachdathang"];
                    $sodienthoaikhachdathang = $_POST["sodienthoaikhachdathang"];
                    $emailkhachdathang = $_POST["emailkhachdathang"];
                    $trangthai = 0;

                    $sqlkhachdathang = "INSERT INTO `khachdathang` (`makhachdathang`, `tenkhachdathang`, `diachikhachdathang`, `sodienthoaikhachdathang`, `emailkhachdathang`) 
                     VALUES (NULL, '$tenkhachdathang', '$diachikhachdathang', '$sodienthoaikhachdathang', '$emailkhachdathang');";
                    //  die($sqlkhachdathang);
                    mysqli_query($ket_noi,$sqlkhachdathang) or die("Lỗi câu lệnh thêm mới khách đặt hàng");
                    // lấy id vừa insert
                    $makhachdathang = mysqli_insert_id($ket_noi);
                   
                    $sqlHoaDon = "INSERT INTO `hoadon` (`mahoadon`, `makhachdathang`, `ngaydat`, `tongtien`, `tongsoluong`, `trangthai`)
                    VALUES (NULL, '$makhachdathang', '$ngaydat', '0', '0', '$trangthai');";
                    mysqli_query($ket_noi,$sqlHoaDon) or die("Lỗi câu lệnh thêm mới hóa đơn");

                    $mahoadon = mysqli_insert_id($ket_noi);

                    if(isset($_SESSION["cart"])){
                        $number = 0;
                        $total = 0;
                        foreach($_SESSION["cart"] as $key => $row){
                            $dongia = $row["dongia"];
                            $soluongmua = $row["soluongmua"];
                            $soluongton = (int)$row["soluong"] - (int)$soluongmua;
                            $sqlInsertChiTietHoaDon = "INSERT INTO `chitiethoadon` (`mahoadon`, `masanpham`, `soluongmua`, `dongia`, `maphuongthucthanhtoan`, `ghichudonhang`, `makhachdathang`) 
                             VALUES ('$mahoadon', '".$row['masanpham']."', '$soluongmua', '$dongia', '$maphuongthucthanhtoan', '$ghichudonhang', '$makhachdathang');";
                            // echo $sqlInsertChiTietHoaDon;
                            mysqli_query($ket_noi,$sqlInsertChiTietHoaDon) or die("Lỗi câu lệnh thêm mới chi tiết hóa đơn");

                            // // tổng số lượng sản phẩm trong giỏ và tổng tiền                            
                                $number +=(int)$row["soluongmua"];
                                $total +=(int)$row["soluongmua"]*(float)$row["dongia"];
                            $sqlSoluong = "UPDATE `sanpham` SET `soluong` = '$soluongton' where `masanpham` = '".$row['masanpham']."'";
                            mysqli_query($ket_noi,$sqlSoluong) or die("Lỗi câu lệnh update số lượng sản phẩm");
                            
                        }
                            $sqlTongTienHoaDon = "UPDATE `hoadon` SET `tongtien` = '$total',`tongsoluong`= '$number' where `mahoadon` = $mahoadon";
                            mysqli_query($ket_noi,$sqlTongTienHoaDon) or die("Lỗi câu lệnh update số lượng và tổng tiền của hóa đơn");


                        echo "
                            <script type='text/javascript'>
                                window.alert('Bạn đã thanh toán thành công');
                                window.location.href='index.php';
                            </script>

                        ";
                    }
                    // xóa hết giỏ hàng
                    unset($_SESSION["cart"]);

                }
            ?>
            <form action="#" method="post" class="form-box">
                <div class="row">
                    <!-- Start Client Shipping Address -->
                    <div class="col-lg-7">
                        <div class="section-content">
                            <h5 class="section-content__title">Chi Tiết Hóa Đơn</h5>
                        </div>                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-company-name">* Họ và tên</label>
                                    <input type="text" id="tenkhachdathang" name="tenkhachdathang" placeholder="Họ tên người nhận" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-address-1">* Địa chỉ</label>
                                    <input type="text" id="diachikhachdathang" name="diachikhachdathang" placeholder="Địa chỉ nhận hàng" required>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-phone">* Số điện thoại</label>
                                    <input type="text" id="sodienthoaikhachdathang" name="sodienthoaikhachdathang" placeholder="Số điện thoại" required>
                                </div>
                            </div>                    
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-email">Địa Chỉ Email *</label>
                                    <input type="email" id="emailkhachdathang" name="emailkhachdathang" placeholder="Email liên hệ" required>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <br>
                                    <label for="form-additional-info">Ghi chú đơn hàng</label>
                                    <textarea  id="ghichudonhang" name="ghichudonhang" rows="5" placeholder="Điền ghi chú của bạn với đơn hàng và người giao hàng."></textarea>
                                </div>
                            </div>                            
                        </div>
                    </div> <!-- End Client Shipping Address -->
                    
                    <!-- Start Order Wrapper -->
                    <div class="col-lg-5">
                        <div class="your-order-section">
                            <div class="section-content">
                                <h5 class="section-content__title">Đơn hàng của bạn</h5>
                            </div>

                            <?php
                                if(isset($_SESSION["cart"])){
                                    $total = 0;
                                    $totalFull = 0;
                                    $ship = 35000;
                                    foreach($_SESSION["cart"] as $key => $row){
                                        $total += $row['dongia']*$row['soluongmua'];
                                        $totalFull = $ship + $total;
                                    }
                            ?>

                                <div class="your-order-box gray-bg m-t-40 m-b-30">
                                    <div class="your-order-product-info">
                                        <div class="your-order-top d-flex justify-content-between">
                                            <h6 class="your-order-top-left font--bold">Sản Phẩm</h6>
                                            <h6 class="your-order-top-right font--bold">Tổng</h6>
                                        </div>
                                        <ul class="your-order-middle">
                                            <?php
                                                foreach($_SESSION["cart"] as $key => $row){
                                            ?>
                                                <li class="d-flex justify-content-between">
                                                    <span class="your-order-middle-left font--semi-bold"><?php echo $row['tensanpham']?> x <?php echo $row['soluongmua']?></span>
                                                    <span class="your-order-middle-right font--semi-bold"><?php echo $row['dongia']*$row['soluongmua']?> VND</span>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                            
                                        </ul>
                                        <div class="your-order-bottom d-flex justify-content-between">
                                            <h6 class="your-order-bottom-left font--bold">Phí Giao Hàng</h6>
                                            <span class="your-order-bottom-right font--semi-bold"><?php echo $ship?> VND</span>
                                        </div>
                                        <div class="your-order-total d-flex justify-content-between">
                                            <h5 class="your-order-total-left font--bold">Tổng Cộng</h5>
                                            <h5 class="your-order-total-right font--bold"><?php echo $totalFull?> VND</h5>
                                        </div>
            
                                        <div class="return-and-refund-method">
                                            <div class="return-and-refund-accordion element-mrg">
                                                <div class="panel-group" id="accordion">
                                                    <div class="panel return-and-refund-accordion">
                                                        <div class="panel-heading" id="method-one">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-parent="#accordion" href="#method1" aria-expanded="false">
                                                                    Hình thức thanh toán <i class="far fa-chevron-down"></i>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="method1" class="panel-collapse collapse">
                                                            <?php
                                                                include("config.php");
                                                                $sql = "select * from phuongthucthanhtoan";
                                                                $phuong_thuc_thanh_toan = mysqli_query($ket_noi,$sql) or die("Lỗi truy vấn dữ liệu");
                                                                if(mysqli_num_rows($phuong_thuc_thanh_toan) > 0){
                                                                    while($row = mysqli_fetch_assoc($phuong_thuc_thanh_toan)){
                                                            ?>
                                                                        <div class="m-tb-20">
                                                                            <div class="panel-body">
                                                                                <label for="check-return-and-refund">
                                                                                    <input type="checkbox" name="return-and-refund[]"  id="return-and-refund[]" value="<?php echo $row['maphuongthucthanhtoan']?>">
                                                                                    <span><?php echo $row['tenphuongthucthanhtoan']?></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            <div class="text-center">
                                <button class="btn btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--bold" type="submit" name="addNew">ĐẶT HÀNG</button>
                            </div>
                        </div>
                    </div> <!-- End Order Wrapper -->
                </div>
            </form> 
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

<!-- ::::::  Start  Footer ::::::  -->
<footer class="footer m-t-100">
    <div class="container">
        <!-- Start Footer Top Section --> 
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="index.php" class="footer__logo-link">
                                <img src="assets/img/logo/logo.png" alt="" class="footer__logo-img">
                            </a>
                        </div>
                        <ul class="footer__social-nav">
                            <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                            <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li>
                            <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5">
                    <div class="footer__about1">
                        <ul class="footer__address">
                            <li class="footer__address-item"><i class="fa fa-home"></i>Địa chỉ: 12 Chùa Bộc, Q. Đống Đa, Hà Nội, Việt Nam</li>
                            <li class="footer__address-item"><i class="fa fa-phone-alt"></i>+84 9999 9999</li>
                            <li class="footer__address-item"><i class="fa fa-envelope"></i>support@gsoreoriganicfood.com</li>
                        </ul>
                    </div>
                </div> 
                
                <div class="col-lg-4 col-md-5">
                    <div class="footer__menu">
                        <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">Thời gian mở cửa</h4>
                        <ul class="footer__nav">
                            <li class="footer__list">Thứ 2 - Thứ 6: 8h - 22h</li>
                            <li class="footer__list">Thứ 7: 9h - 20h</li>
                            <li class="footer__list">Chủ nhật: 14h - 18h</li>
                            <li class="footer__list">Chúng tôi làm việc tất cả các ngày lễ</li>
                        </ul>
                    </div>
                </div>

                
            </div>
        </div> <!-- End Footer Top Section -->
        <!-- Start Footer Bottom Section --> 
        <div class="footer__bottom">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12">
                    <!-- Start Footer Copyright Text -->
                    <div class="footer__copyright-text">
                        <p>Bản quyền &copy; <a href="https://gsoreoriganicfood.com/">Gsore Origanic Food</a>. Đã đăng ký Bản quyền</p>
                    </div> <!-- End Footer Copyright Text -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                     <!-- Start Footer return-and-refund Logo -->
                    <div class="footer__return-and-refund">
                        <a href="#" class="footer__return-and-refund-link">
                            <img src="assets/img/company-logo/return-and-refund.png" alt="" class="footer__return-and-refund-img">
                        </a>
                    </div>  <!-- End Footer return-and-refund Logo -->
                </div>
            </div>
        </div> <!-- End Footer Bottom Section --> 
    </div>
</footer> <!-- ::::::  End  Footer ::::::  -->
    
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
    <!-- Shipping-->
   

   <div class="modal fade" id="shipping" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-end">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Thêm vào giỏ hàng thành công</div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="view-cart.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">Xem giỏ hàng</a>
                                        <a href="checkout.php" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left"><i class="icon-shopping-cart"></i> Có 5 mặt hàng trong giỏ của bạn [số 5 lấy từ code]</li>
                                <li>TỔNG TIỀN <span>$187.00</span></li>
                                <li><a href="#" class="btn text-underline color-green" data-bs-dismiss="modal">TIẾP TỤC MUA SẮM</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Add cart -->

    
    <!-- Vendor JS Files -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS Files -->
    <script src="assets/js/plugin/slick.min.js"></script>
    <script src="assets/js/plugin/jquery.countdown.min.js"></script>
    <script src="assets/js/plugin/material-scrolltop.js"></script>
    <script src="assets/js/plugin/price_range_script.js"></script>
    <script src="assets/js/plugin/in-number.js"></script>
    <script src="assets/js/plugin/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="assets/js/plugin/venobox.min.js"></script>
    <script src="assets/js/plugin/jquery.waypoints.js"></script>
    <script src="assets/js/plugin/jquery.lineProgressbar.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

</html>
