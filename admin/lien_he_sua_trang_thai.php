<?php
    #Kiểm tra quyền truy nhập | check SESSTION
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cập nhật trạng thái xử lý liên hệ </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
        //1.Tạo kết nối với máy chủ DL
        include("../config.php");

        $id = $_GET['id'];
        $trangthai = $_GET['status'];

        // 2.Câu lệnh truy vấn
        $sql = "UPDATE `lienhe`
                SET `lh_trang_thai` = '".$trangthai ."'
                WHERE `lienhe`.`lh_id` = '" .$id."';
                ";
                
        mysqli_query($con, $sql);
//echo ($sql); exit();
        
    ?>
    <script type="text/javascript">
    window.alert("Cập nhật trạng thái xử lí liên hệ thành công!");
    window.location.href = "../admin/quan_tri_lien_he.php";

</script>
</body>

</html>