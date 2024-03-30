<?php
    session_start();
    // Nếu không phải là sự kiện khách sạn thì không xử lý
    if (!isset($_POST['datngay'])){
        die('');
    }
     
    //file kết nối với database
    include('conn.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ form 
    $dcemail = $_POST['email'];
    $tenks =  $_POST["hotel"];
    $ngaydat = $_POST['ngaydat'];
    $soluong =  $_POST['sl'];
    
    $sql="INSERT INTO datphong (email, tenks, ngaydat, soluongnguoi)VALUE ('".$dcemail."', '".$tenks."', '".$ngaydat."', '".$soluong."')";

    if (isset($_SESSION['dcemail']) == NULL ) { 
        echo "Vui lòng đăng nhập để tiếp tục sử dụng dịch vụ. <a href='dangnhap.php'>Đăng nhập</a>";
    } else {     
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$dcemail || ! $tenks || !$ngaydat || !$soluong )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }else
	{
        $addks = mysqli_query($conn,$sql);
        echo "Đặt phòng thành công. Vui lòng đến Lễ Tân khách sạn để nhận phòng <a href='javascript: history.go(-1)'>Trở lại</a>";
	}
}
 
?>