?php 
    include("check_dang_nhap.php");
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
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#txtMoTa'
            });
        </script>
        
    </head>
    <body class="sb-nav-fixed">
        <?php
            include("header1.php");
        ;?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php
                    include("menu.php");
                ;?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị sản phẩm</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item active">Quản trị sản phẩm</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách sản phẩm | <a href="san_pham_them_moi.php">Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="san_pham_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtID" name="txtID" type="text" placeholder="ID sản phẩm" />
                                        <label for="txtID">ID sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTenSanPham" name="txtTenSanPham" type="text" placeholder="Tên sản phẩm" />
                                        <label for="txtTenSanPham">Tên sản phẩm</label>
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
                                        <input class="form-control" id="txtChatLieu" name="txtChatLieu" type="text" placeholder="Chất liệu sản phẩm" />
                                        <label for="txtChatLieu">Chất liệu sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtAnhMinhHoa" type="file" name="txtAnhMinhHoa" placeholder="Ảnh minh họa" />
                                        <label for="txtAnhMinhHoa">Ảnh minh họa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtMoTa" name="txtMoTa" type="text" placeholder="Mô tả sản phẩm" />
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
                    include("footer1.php");
                ;?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
