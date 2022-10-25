<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Quy trình giao dịch </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/headicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <?php 
    require('config.php');
    require('menu.php');
    ?>



    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Quy trình giao dịch   </h1>
            <p>
                
            </p>
        </div>
    </div>

 
    <h5>1.Quy trình dành cho người bán hàng (“Người Bán”) </h5>
    <ul>
        <li> Chuẩn bị tin bài bằng chữ và hình ảnh: </li>

        <ol>
        <li> Các tin bài cần đăng phải được chia thành 2 phần được phân theo định dạng bằng chữ và hình ảnh.
Các nội dung bằng chữ nên được đánh máy sẵn trên một chương trình soạn thảo văn bản (MS Word, OpenOffice).
Các nội dung bằng hình ảnh được định dạng theo dạng ảnh jpg, bmp hoặc có thể chụp trực tiếp sản phẩm khi đăng bán.</li></ol>
        
        <li>
            Đưa nội dung lên Website:
        </li>
        <ol>
            <li>Bước 1: Đăng ký tài khoản nếu chưa có tài khoản trên BAbook</li>
            <li>Bước 2: Đăng nhập</li>
            <li>Bước 3: Tiến hành đăng tin mua bán:
 Viết bài liên quan đến sản phẩm (mô tả chi tiết sản phẩm, hình ảnh, giá và thông tin liên hệ của người bán) theo đúng cấu trúc mà người bán muốn đăng. Ban quản trị sẽ tiến hành kiểm duyệt nội dung tin đăng trong thời gian 24h kể từ khi người bán đăng tin. Những tin nào sai quy định đăng tin sẽ được phản hồi yêu cầu chỉnh sửa qua email cho thành viên. Khi nào thành viên sửa lại tin đăng theo đúng quy định ban quản trị mới cho hiển thị lên BAbook.</li>
        </ol>
    


    </ul>

    <h5> 2. Quy trình dành cho người mua hàng (“Người Mua”)</h5>
    <ul>
        
        <li>Tìm kiếm, tham khảo thông tin sản phẩm, dịch vụ và các người bán mà người mua đang quan tâm;  </li>
        <li>ham khảo thông tin giá và chính sách hỗ trợ của bên bán sản phẩm, dịch vụ mà người mua đang có nhu cầu mua. Có thể tham khảo mặt hàng tương tự của những người bán khác trên website BAbook (để đưa ra quyết định mua sản phẩm, dịch vụ đó); </li>
        <li>Dựa trên thông tin tham khảo được từ người bán sản phẩm, dịch vụ người mua liên hệ với người bán qua thông tin liên hệ đăng tải trong nội dung tin bán hàng hóa để hỏi thêm về thông tin sản phẩm, dịch vụ hoặc đến gặp trực tiếp người bán hoặc tiếp xúc trực tiếp để xem và mua sản phẩm, dịch vụ;</li>
        <li>Sau khi đã trao đổi được với người bán, người mua có thể quyết định đặt hàng;</li>
        <li>Người mua lựa chọn cách thức giao dịch (tùy vào thỏa thuận của người mua và người bán)</li>
        <li>Người mua nhận sản phẩm, dịch vụ.</li>
<li> Người mua thắc mắc, khiếu nại người bán .</li>
    </ul>

<h5>3.Quy trình giao nhận vận chuyển </h5>
<ul>
    
        <li> Người mua toàn quyền thỏa thuận với người bán về phương thức giao hàng với món hàng mình đã đặt mua, có thể giao trực tiếp, có thể gửi qua bưu điện, thuê bên thứ ba chuyển phát tùy thuộc vào 2 bên thỏa thuận với nhau về việc giao nhận. </li>
        <li>BAbook yêu cầu người bán khi đăng tin bài rao bán sản phẩm phải đưa đầy đủ thông tin về chính sách vận chuyển, thanh toán.</li>
    <li>Người mua cần đọc kỹ những chính sách vận chuyển của người bán.</li>

</ul>
<h5>4.Quy trình xác nhận/hủy đơn hàng</h5>
<li>Người Mua và Người Bán tự liên lạc với nhau qua thông tin được Người Bán cung cấp khi rao tin để xác nhận việc mua hàng hay hủy mua hàng.</li>
<h5>5. Quy định khác</h5>
<ul> <li>Quy trình giải quyết tranh chấp, khiếu nại: </li> 
<ol>
    <li>Mọi tranh chấp, khiếu nại liên quan đến các giao dịch trên BAbook giữa Người mua và Người bán sẽ được hai bên phải tự giải quyết với nhau.</li>
    <li>Về phía BAbook có cơ chế thông báo tin quảng cáo sai sự thật. Nếu xác định được Người bán có hành vi vi phạm, BAbook có quyền xử lý theo Quy chế này.</li>
</ol>
</ul>
 

    <?php require('footer.php');?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</body>


</html>