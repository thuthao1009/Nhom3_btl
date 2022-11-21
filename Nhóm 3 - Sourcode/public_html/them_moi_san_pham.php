<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
;?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới sản phẩm</title>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#txtMoTa'
            });
        </script>
        
    </head>
    <body class="sb-nav-fixed">
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php
                    require('config.php');
                    include("menu.php");
                    $sql_dm="SELECT * FROM danhmucsp";
                    $danh_muc=mysqli_query($con,$sql_dm);
                    $sql_dm="SELECT * FROM theloai";
                    $the_loai=mysqli_query($con,$sql_dm);
                ;?>

            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Đăng bán sản phẩm</h1>
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
                                <form method="POST" action="san_pham_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                    
                                    <!-- <div class="form-floating mb-3">
                                        <input class="form-control" id="txtID" name="txtID" type="text" placeholder="ID sản phẩm" />
                                        <label for="txtID">ID sản phẩm</label>
                                    </div> -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTenSanPham" name="txtTenSanPham" type="text" placeholder="Tên sản phẩm" />
                                        <label for="txtTenSanPham">Tên sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name="txtTenDanhMuc">
                                            <option value="">-- Chọn Danh Mục --</option>
                                            <?php 
                                                while ($row_dm=mysqli_fetch_array($danh_muc)) {
                                                    ?>

                                                <option value="<?php echo $row_dm['dm_id'] ?>"><?php echo $row_dm['dm_ten_danh_muc'] ?></option>
                                                <?php };
                                             ?>
                                        </select>   
                                       
                                    </div>
                                     <div class="form-floating mb-3">
                                        <select name="txtTenTheLoai">
                                            <option value="">-- Chọn Môn Học --</option>
                                            <?php 
                                                while ($row_tl=mysqli_fetch_array($the_loai)) {
                                                    ?>

                                                <option value="<?php echo $row_tl['tl_id'] ?>"><?php echo $row_tl['tl_ten_tl'] ?></option>
                                                <?php };
                                             ?>
                                        </select>   
                                       
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txttinhtrang" name="txttinhtrang" type="text" placeholder="Tình trạng" />
                                        <label for="txttinhtrang">Tình trạng</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtnam" name="txtnam" type="text" placeholder="Năm xuất bản" />
                                        <label for="txtnam">Năm xuất bản</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtSoLuong" name="txtSoLuong" type="text" placeholder="Số lượng" />
                                        <label for="txtSoLuong">Số lượng sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtGia" name="txtGia" type="text" placeholder="Giá sản phẩm" />
                                        <label for="txtGia">Giá sản phẩm</label>
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtAnhMinhHoa" type="file" name="txtAnhMinhHoa" placeholder="Ảnh minh họa" />
                                        <label for="txtAnhMinhHoa">Ảnh minh họa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtAnhMT" type="file" name="txtAnhMT[]" multiple="multipart"  placeholder="Ảnh mô tả" />
                                        <label for="txtAnhMinhHoa">ẢNh mô tả</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <p ><textarea class="form-control" name="txtMoTa" style="width: 100%; height: 400px"></textarea></p>
                                        <label for="txtMoTa">Mô tả sản phẩm</label>
                                    </div>
                                    
                                    
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit">Thêm mới</button></a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                    
                ;?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>