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

     require('thu_vien.php');
     // echo $_POST['addcart']; exit();

     
     if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[]; 
     
     //kiểm tra xem 
     
     
     if(isset($_GET['delcart'])&&($_GET['delcart']==1)) {unset($_SESSION['giohang']);};

     // xóa sản phẩm trong giỏ hàng
      if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
      }
     //lấy dữ liệu từ form
     if(isset($_POST['addcart']) && ($_POST['addcart'])){
        $hinh=$_POST['hinh'] ;
        $ten=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
        $sp_id=$_POST['idsp'];
        $nguoi_ban=$_POST['nguoi_ban'];

        // var_dump($_SESSION['giohang']); exit();
        // echo $hinh, $ten, $gia, $soluong; exit();
        // kiểm tra xem có trùng người bán k
        if ($_SESSION['giohang']==[]) {
          $sp=[$hinh,$ten,$gia,$soluong,$sp_id,$nguoi_ban];
          $_SESSION['giohang'][]=$sp;
        }else{
          for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++){
            if ($_SESSION['giohang'][$i][5] ==$nguoi_ban) {
              $fl=0;// kiểm tra sp có trùng trong giỏ hàng không
                for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
                  if ($_SESSION['giohang'][$i][4]==$sp_id) {
                      $fl=1;
                      $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                      $_SESSION['giohang'][$i][3]=$soluongnew;
                      break;
                  }
                }
                // nếu không trùng sản phẩm trong giỏ thì thêm mới
                if($fl==0){
                  //thêm mới sản phẩm vào giỏ hàng
                  $sp=[$hinh,$ten,$gia,$soluong,$sp_id,$nguoi_ban];
                  $_SESSION['giohang'][]=$sp;
                  // var_dump($_SESSION['giohang']); exit();
                }
            }
            else{
              ?>
              <script type="text/javascript">
                if (confirm("Bạn đang chọn sản phẩm từ 2 người bán khác nhau! Bạn có muốn xóa sản phẩm của giỏ hàng cũ để thêm sản phẩm mới vào không?") == true) {
                  <?php 
                    unset($_SESSION['giohang']);
                    $sp=[$hinh,$ten,$gia,$soluong,$sp_id,$nguoi_ban];
                    $_SESSION['giohang'][]=$sp;
                  ?>

                }else{
                  <?php  ?>
                }
                
              </script>
              <?php 
            }
          }
        }

        // for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
        //   if ($_SESSION['giohang'][$i][5] !=$nguoi_ban) {
        //     echo $_SESSION['giohang'][$i][5]; exit();
        //     echo "khác"; exit();
            
        //   }
        // }



        // // kiểm tra sản phẩm có trong giỏ hàng k
        // $fl=0;// kiểm tra sp có trùng trong giỏ hàng không
        // for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
        //   if ($_SESSION['giohang'][$i][4]==$sp_id) {
        //     $fl=1;
        //     $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
        //     $_SESSION['giohang'][$i][3]=$soluongnew;
        //     break;
        //   }
        // }
        // // nếu không trùng sản phẩm trong giỏ thì thêm mới
        // if($fl==0){
        //   //thêm mới sản phẩm vào giỏ hàng
        //   $sp=[$hinh,$ten,$gia,$soluong,$sp_id,$nguoi_ban];
        //   $_SESSION['giohang'][]=$sp;
        //   // var_dump($_SESSION['giohang']); exit();
        // }
        
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
      <br/>
      <h1 class="h1 text-center">Giỏ hàng</h1>

      <form action="thanh_toan.php" method="">
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
            </table>

    
    
      <!-- nút mua tiếp  -->
      <br>
      <div class="text-center">
            <a href="shop.php" class=" btn btn-success btn-lg"><span class="icon-arrow-left"></span> Tiếp tục mua   </a>
            <input type="submit" name="dongydathang" value="Thanh toán" class="btn btn-success btn-lg">
            <a href="gio_hang.php?delcart=1" class=" btn btn-success btn-lg"><span class="icon-arrow-left"></span> Xóa giỏ hàng   </a>
            
      </div>
  
  </div>

    </form>


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
