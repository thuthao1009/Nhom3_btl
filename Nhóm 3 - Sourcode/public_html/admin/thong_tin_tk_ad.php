<?php 

    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
     session_start();
     ob_start();
    if(!isset($_SESSION['da_dang_nhap_ad'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dangnhap.php';
            </script>
        ";
    }
;?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ba Book|Quản trị hệ thống</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Quản trị hệ thống</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                  <div class="form-control"><?php  echo $_SESSION['ten_dang_nhap'];?>  </div>                 
                </div> 
            </form>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dangki.php">Đăng kí</a></li>
                        <li><a class="dropdown-item" href="dangxuat.php">Đăng xuất</a></li>
                        <li><a class="dropdown-item" href="thong_tin_tk_ad.php">Thông tin tài khoản</a></li>
                       
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">BA BOOK</div>
                            <a class="nav-link" href="./index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Bảng điểu khiển
                            </a>

                            <!-- Quản trị tài khoản -->
                            
                            <a class="nav-link" href="quan_tri_tai_khoan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    Quản trị tài khoản
                            </a>
                            

                            <!--Quản trị sản phẩm-->
                            <a class="nav-link collapsed" href="quan_tri_san_pham.php" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                Quản trị sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="quan_tri_san_pham.php">Sản phẩm </a>
                                    <a class="nav-link" href="quan_tri_danh_muc.php">Danh mục</a>
                                    <a class="nav-link" href="quan_tri_the_loai.php">Thể loại </a> 

                                </nav>
                             </div>   
                            <!-- Quản trị tin tức-->
                             <a class="nav-link" href="quan_tri_tin_tuc.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                    Quản trị tin tức
                            </a>
                            
                            <!--Quản trị hóa đơn -->
                             <a class="nav-link" href="quan_tri_hoa_don.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                    Quản trị hóa đơn
                            </a>

                            <a class="nav-link" href="quan_tri_lien_he.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                                    Quản trị liên hệ
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

             <div id="layoutSidenav_content">
                <?php
                  include("../config.php");
                  
                  $id = $_SESSION['admin_id'];
                  $sql = "
                          SELECT * 
                          from admin 
                          where ad_id = '".$id."'
                          ";
                      //  echo ($sql); exit();
                  $thong_tin = mysqli_query($con, $sql);
                  $row = mysqli_fetch_array($thong_tin);
                 // var_dump($row);exit();
                 // while ($row = mysqli_fetch_array($thông_tin)) {
            ;?>

    <div class="container"> 
    <h1 class="text-center">Thông tin tài khoản</h1> 
        <div class="container"> 
            <div class="row profile">        
                <div class="col-md-3">          
                    <div class="profile-sidebar">                      
                    <div> 
                    <p style="text-align:center; font-weight: bold;">Tên đăng nhập</p>
                    <p style="text-align:center;"><?php echo $row["email"];?></p> 
                    </div>                                             
                </div>     
            </div>      
    
                <div class="col-md-9"> 
                <div class="profile-content">
                <form action="thuc_hien_thay_doi_thong_tin_ad.php" method="post" enctype="multipart/form-data">

                <label style="font-weight: bold;">Họ và tên </label>
                <p><input type="text" name="txtHoten" value="<?php echo $row["ad_hoten"] ;?>" style=" width:95%;"></p>

                <label style="font-weight: bold;">Email </label>
                <p><input type="text" name="txtEmail" value="<?php echo $row["email"] ;?>" style=" width:95%;"></p>


                <p style="text-align: center;"><button class="btn btn-success" name="admin_id"
                value="<?php echo $row["ad_id"];?>" type="submit" >Thay đổi thông tin</button></p>

                </form>

                <h5>Đổi mật khẩu</h5>
                <form action="thay_doi_mk_ad.php" method="post" enctype="multipart/form-data">

                <label style="font-weight: bold;">Mật khẩu hiện tại </label>
                <p><input type="password" name="oldpass" style=" width:95%;"></p>

                <label style="font-weight: bold;">Mật khẩu mới </label>
                <p><input type="password" name="newpass" style=" width:95%;"></p>

                <label style="font-weight: bold;">Xác nhận mật khẩu</label>
                <p><input type="password" name="cfpass"  style=" width:95%;"></p>

                <p style="text-align: center;"><button class="btn btn-success" name="admin_id"
                value="<?php echo $row["ad_id"];?>" type="submit" >Thay đổi mật khẩu</button></p>

                </form>


                 </div>     
               </div>  
              </div>
             </div> 
            </div>



            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Trang Web của bạn 2022</div>
                            <div>
                                <a href="chinhsachbaomat.php">Chính sách bảo mật</a>
                                &middot;
                                <a href="chinhsachbaomat.php">Điều khoản và điều kiện</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

</html>