
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FiinStore | Giỏ hàng</title>
    
    <!-- Font awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="../assets/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/dark-red-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="../assets/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="../assets/css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    

  </head>

    <body>
         <?php
      session_start();
      if (!isset($_SESSION['da_dang_nhap']) && !($_SESSION['da_dang_nhap'] == 1)) {
      echo "
        <script type='text/javascript'>
            window.alert('Bạn chưa đăng nhập');
            window.location.href='dang_nhap.php?callback=thanh_toan.php';
        </script>";
    }
      include('../components/header.php');
             ?>
        
        
            </div>
            <div id="layoutSidenav_content">
                <main>
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
                                   
                                    <div><a><br></a></div>

                                    <div class="col-md-6">
                                        <input class="form-control" id="inputHovaten" type="text" placeholder="Họ và tên*" name="txtHovaten"/>

                                        
                                    </div >
                                    

                                    <div class="col-md-6">
                                        <input class="form-control" id="inputSDT" type="text" placeholder="Số điện thoại*" name="txtSDT" />
                                        
                                    </div>
                                    <div><a><br></a></div>
                                    <div class="col-md-12">
                                        <input class="form-control" id="inputDiachi" type="text" placeholder="Địa chỉ*" name="txtDiachi" />
                                        
                                    </div>
                                    <div><a><br></a></div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="" value="<?php echo $_GET['so_luong_sp']; ?>" type="hidden" placeholder="Số lượng" name="txtSoluong" />
                                        
                                    </div>
                                  
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="" value="<?php echo $_GET['tong_tien']; ?>" type="hidden" placeholder="tổng tiền"  name="txtTongtien" />

                                    </div>  
                                      
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit">ĐẶT HÀNG</button></a></div>
                                    </div>          
                                 </form>
                            </div>
                            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <div><a><br></a></div>
        <div><a><br></a></div>
        <?php
      include('../components/footer.php');
  ?>
    </body>
</html>

