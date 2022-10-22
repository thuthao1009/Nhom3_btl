<?php 
/*
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
     session_start();
     ob_start();
    if(!isset($_SESSION['da_dang_nhap'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dang_nhap.php';
            </script>
        ";
    }*/
;?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ba Book|Quản trị tài khoản</title>
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
     <!--       <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dangki.php">Đăng kí</a></li>
                        <li><a class="dropdown-item" href="dangxuat.php">Đăng xuất</a></li>
                       
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
                            <a class="nav-link collapsed" href="quan_tri_tai_khoan.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Quản trị tài khoản
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                 
                            </nav>
                            </div>

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
                            <!--Quản trị người dùng-->
                            <a class="nav-link" href="quan_tri_nguoi_dung.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Quản trị người dùng
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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị tài khoản</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách tài khoản
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ Tên</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Password</th>
                                            <th>ngày tạo</th>
                                            
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>STT</th>
                                           <th>Họ Tên</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Password</th>
                                            <th>ngày tạo</th> 
                                            <th>Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                        include("../config.php");
 
                                        // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                                        $sql = "
                                                  SELECT *
                                                  FROM admin
                                                  ORDER BY ad_id  DESC 
                                        ";
                                        // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                                        $admin = mysqli_query($con, $sql);
                                        // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                                        $i=0;
                                        while ($row = mysqli_fetch_array($admin)) {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row["ad_hoten"];?></td>
                                            <td><?php echo $row["email"];?></td>
                                            <td><?php echo $row["sdt"];?></td>
                                           
                                            <td><?php echo $row["password"];?></td>
                                            <td><?php echo $row["created_at"];?></td>
                                            
                                            
                                        </tr>
                                    <?php
                                        }
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer  class="py-4 bg-light mt-auto" >
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Bản Quyền &copy; Trang Web của bạn 2022</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>