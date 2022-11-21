<?php 
$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
$quantity= (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
   include("../public/connect.php");
   if(isset($_GET['id'])){
   $id_san_pham = $_GET['id'];}
    $sql=             "
                    SELECT * 
                    FROM tbl_san_pham  
                    WHERE id_san_pham = '".$id_san_pham."'
          ";
           // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          if($noi_dung_san_pham){
          $row = mysqli_fetch_array($noi_dung_san_pham);}
          //5. Giu o gio hang 
          $item = 
          [
          'id_san_pham'=>$row['id_san_pham'],
          'ten_san_pham'=>$row['ten_san_pham'],
          'so_luong'=>$row['so_luong'],
          'gia_tien'=>$row['gia_tien'],
          'ten_anh'=>$row['ten_anh'],
          'quantity'=>$quantity,
          ];
          if(isset($_SESSION['gio_hang'][$id_san_pham])){
          $_SESSION['gio_hang'][$id_san_pham]['quantity']+=1;
        }
        else{
           $_SESSION['gio_hang'][$id_san_pham]=$item;
       }
         if ($action == 'delete'){
                unset($_SESSION['gio_hang'][$id_san_pham]);
                }     
       ;?>
