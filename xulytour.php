<?php
    session_start();
    // Nếu không phải là sự kiện đặt tour thì không xử lý
    if (!isset($_POST['dat'])){
        die('');
    }
     
    //file kết nối với database
    include('conn.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ form 
    $tour = $_POST['place'];
	$soluong = $_POST['sl'];
    $dcemail = $_POST['email'];
    $ngaydat = $_POST['ngaydat'];

    $sql="INSERT INTO dattour (tentour, soluong, email, ngaydat) VALUE ('".$tour."', '".$soluong."', '".$dcemail."', '".$ngaydat."')";
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa

    if (isset($_SESSION['dcemail']) == NULL ) { 
        echo "Vui lòng đăng nhập để tiếp tục sử dụng dịch vụ. <a href='dangnhap.php'>Đăng nhập</a>";
        
    }
    else {
        if (!$tour || !$soluong || !$dcemail || !$ngaydat  )
        {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
    }else
	{
            $addt = mysqli_query($conn,$sql);
            echo "Đặt tour thành công. 
                    <a href='javascript: history.go(-1)'>Trở lại</a> ";        
            exit();
	}}
?>