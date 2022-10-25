<?php  
      function showgiohang(){
      if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
        $tong=0;
        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
          $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
          $tong+=$tt;
          echo '<tr style="vertical-align: middle;">
                  
                  <td class="text-center" >'.($i+1).'</td>
                  <td class="text-center"><img style="width: 100px; height: 100px;" src="assets/img/'.$_SESSION['giohang'][$i][0].'" ></td>
                  <!-- mô tả sản phẩm -->
                  <td>'.$_SESSION['giohang'][$i][1].'</td>
                 <!--  giá -->
                  <td class="text-center">'.$_SESSION['giohang'][$i][2].'</td>
                  <td class="text-center">'.$_SESSION['giohang'][$i][3].'</td>
                  <!-- đơn giá -->
                  <td class="text-center">'.$tt.'</td>

                  <td class="text-center"><a href="gio_hang.php?delid='.$i.'" class="btn btn-success" >x</a></td>
                </tr>';
        }
        echo ' <tr>
                  <td colspan="5" class="alignR">Tổng </td>
                  <td class="label label-primary text-center "> '.$tong.'</td>
                </tr>';
      }
     }


     function showgiohang_tt(){
      if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
        $tong=0;
        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
          $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
          $tong+=$tt;
          echo '<tr style="vertical-align: middle;">
                  
                  <td class="text-center" >'.($i+1).'</td>
                  <td class="text-center"><img style="width: 100px; height: 100px;" src="assets/img/'.$_SESSION['giohang'][$i][0].'" ></td>
                  <!-- mô tả sản phẩm -->
                  <td>'.$_SESSION['giohang'][$i][1].'</td>
                 <!--  giá -->
                  <td class="text-center">'.$_SESSION['giohang'][$i][2].'</td>
                  <td class="text-center">'.$_SESSION['giohang'][$i][3].'</td>
                  <!-- đơn giá -->
                  <td class="text-center">'.$tt.'</td>
                </tr>';
        }
        echo ' <tr>
                  <td colspan="5" class="alignR">Tổng </td>
                  <td class="label label-primary text-center "> '.$tong.'</td>
                </tr>';
      }
     }

?>