<?php
     session_start();
     ob_start();
     // Kiểm tra xem có tồn tại biến đã đăng nhập không
     if(!isset($_SESSION['da_dang_nhap'])) {
;?>
  <script type="text/javascript">
    window.alert("Bạn chưa đăng nhập. Vui lòng đăng nhập trước khi thêm sản phẩm vào giỏ hàng!");
    window.location.href = "admin/dang_nhap.php";
  </script>
<?php
  }
;?>
<?php
     // echo $_POST['addcart']; exit();
     if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[]; 
     //kiểm tra xem 
     
     
     if(isset($_GET['delcart'])&&($_GET['delcart']==1)) {unset($_SESSION['giohang']);};

     // xóa sản phẩm trong giỏ hàng
      if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
      }
     //lấy duex liệu từ form
     if(isset($_POST['addcart']) && ($_POST['addcart'])){
        $hinh=$_POST['hinh'] ;
        $ten=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
        // echo $hinh, $ten, $gia, $soluong; exit();
        

        // kiểm tra sản phẩm có trong giỏ hàng k

        $fl=0;// kiểm tra sp có trùng trong giỏ hàng không


        for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
          if ($_SESSION['giohang'][$i][1]==$ten) {

            $fl=1;
            $soluongnew=$soluong+$_SESSION['giohang'][$i][3];

            $_SESSION['giohang'][$i][3]=$soluongnew;
            break;
          }
        }
        // nếu không trùng san rphaamr trong giỏ thì thêm mới
        if($fl==0){

          //thêm mới sp vào giỏ hàng
        $sp=[$hinh,$ten,$gia,$soluong];
        $_SESSION['giohang'][]=$sp;
        // var_dump($_SESSION['giohang']); exit();

        }

        
     } 



     function showgiohang(){
      if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
        $tong=0;
        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
          $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
          $tong+=$tt;
          echo '<tr style="vertical-align: middle;">
                  
                  <td class="text-center" >'.($i+1).'</td>
                  <td class="text-center"><img style="width: 100px; height: 100px;" src="assets/img/'.$_SESSION['giohang'][$i][0].'" ></td>
                  <!-- mô tả sản phẩm -->
                  <td>'.$_SESSION['giohang'][$i][1].'</td>
                 <!--  giá -->
                  <td class="text-center">'.$_SESSION['giohang'][$i][2].'</td>
                  <td class="text-center">'.$_SESSION['giohang'][$i][3].'</td>
                  <!-- đơn giá -->
                  <td class="text-center">'.$tt.'</td>

                  <td class="text-center"><a href="gio_hang.php?delid='.$i.'" class="btn btn-success" >x</a></td>
                </tr>';
        }
        echo ' <tr>
                  <td colspan="5" class="alignR">Tổng </td>
                  <td class="label label-primary text-center "> '.$tong.'</td>
                </tr>';
      }
     }
?>

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
  ?>



<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>


<!--
Navigation Bar Section 
-->

<!-- 
Body Section 
-->
  <div class="row">
  <div class="span12">
    <ul class="list-inline text-center">
      <br>
    <li class="list-inline-item"><a href="index.php">Trang chủ</a> <span class="divider">/</span></li>
    <li class="active list-inline-item">Giỏ hàng</li>
    </ul>
  <div class="well well-small">
  
  <hr class="soften"/>  

  <table class="table table-bordered table-condensed">
              <thead>
                <!-- tiêu dề bảng -->
                <tr class="text-center" style="vertical-align: middle;">
                  <th>STT</th>
                  <th>Hình</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá</th>
                  <th>Số lượng </th>
                  <th>Đơn giá</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php showgiohang(); ?>

        </tbody>
            </table><br/>
    
    
      <!-- nút mua tiếp  -->
  <a href="shop.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Tiếp tục mua </a>
  <a href="gio_hang.php?delcart=1" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Xóa giỏ hàng </a>
  <a href="thanh_toan.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Thanh toán </a>


</div>
</div>
</div>


</div><!-- /container -->


<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
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
