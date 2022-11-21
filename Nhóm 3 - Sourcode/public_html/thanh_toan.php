<?php
     session_start();
     ob_start();
     // Kiểm tra xem có tồn tại biến đã đăng nhập không
     if(!isset($_SESSION['da_dang_nhap'])) {
;?>
  <script type="text/javascript">
    window.alert("Bạn chưa đăng nhập. Vui lòng đăng nhập!");
    window.location.href = "admin/dang_nhap.php";
  </script>
<?php
  }
;?>
<?php
    require('thu_vien.php');
    if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){

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


    
  <div class="well well-small">
    <div class="container-fluid px-4">
                        
                        <div><a><br></a></div>
                        <div><a><br></a></div>
                        <div class="card mb-4">
                            <div class="panel-heading">
                        <h4 class="panel-title">
                         
                        <div text-align:cente>
                              <a><font color="#61a6ab" ><b><u>ĐIỀN THÔNG TIN ĐẶT HÀNG</u></b></form></a>
                        </div>
                          
                        </h4>
                        <div><a><br></a></div>
                        <div><a><br></a></div>

                    </div>
                           <div class="card-body">
                                <form method="POST" action="thanh_toan_thuc_hien.php" enctype="multipart/form-data">
                                    
                                    
                                    <div class="card-body">
                                    <div class="col-md-12">
                                         <input class="form-control" id="inputEmail" type="email" placeholder="Email*" name="txtEmail" />
                                         
                                   </div> 
                                   
                                    <div>
                                        <a>
                                            <br>
                                        </a>
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control" id="inputHovaten" type="text" placeholder="Họ và tên*" name="txtHovaten"/>
                                    </div >
                                    <div>
                                        <a>
                                            <br>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputSDT" type="text" placeholder="Số điện thoại*" name="txtSDT" />
                                    </div>

                                    <div>
                                        <a>
                                            <br>
                                        </a>
                                    </div>

                                   
                                    <div>
                                        <a>
                                            <br>
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" id="inputDiachi" type="text" placeholder="Ghi chú" name="txtghichu" />
                                    </div>
                                    <div>
                                        <a>
                                            <br>
                                        </a>
                                    </div>
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
                                                <?php showgiohang_tt(); ?> 
                                                <input type="hidden" name="txtTongtien" value="<?php echo $tong; ?>">

                                             </tbody>
                                    </table>
                                  
                                     
                                      
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit">ĐẶT HÀNG</button></a></div>
                                    </div>          
                                 </form>
                        </div>
  
  <hr class="soften"/>  

  <br/>
    
    
   
  


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
