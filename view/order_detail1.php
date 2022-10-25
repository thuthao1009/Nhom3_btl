<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang giỏ hàng</title>
</head>
<body>

    <h1>Trang giỏ hàng</h1>
    <form action="" method="POST">

    <table style="width: 100%; border-collapse: collapse;"border="1";>
        <thead>
            <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
         //   echo "<pre>";
         //   print_r($_SESSION['giohang']);
         //   echo "</pre";
             $i = 1;
            $_SESSION['sum_price']=0;
            if(isset($_SESSION['giohang'])&& !empty($_SESSION['giohang'])){
            foreach ($_SESSION['giohang'] as $key => $value) {
                // code...
            ;?>

            <tr>
            <td><?php echo (int)$i++;?></td>
            <td><img src="img/<?php echo $value['sp_anh_minh_hoa'] ?>"></td>
            <td><?php echo $value['sp_tensp'];?></td>
            <td>
            
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $value['sp_id']?>">
            <input type="number" name="" value= "<?php echo $value['qty'];?>">
            <button type="" name="">Cập nhật</button>
            </form>
            </td>
            <td><?php echo $value['sp_gia'];?></td>
             <td><?php
             $item_sum=$value['sp_gia']*$value['qty'];
             $_SESSION['sum_price']+=  $item_sum;
             echo $item_sum;
             ?>
            </td>
            <td><a href="" class="btn btn-danger">Xóa</a></td>
            </tr>
            <tr>               
            <?php
        }
        }
    ?>
    </tr>
            <tr>
                <th colspan="5">Tổng đơn hàng</th>
                <th>
                <div><?php echo  $_SESSION['sum_price']  ?></div>
                </th>
                <td><a href=""></td>
                </tr>
                
        </tbody>
        <tr>
                    <td>
                        <input type="submit" value="Cập nhật giỏ hàng" name="capnhatsoluong">
                    </td>
                </tr>
    </table>


      <a href="check_out.php" class="btn btn-danger">Chueck out</a>

</body>
</html>