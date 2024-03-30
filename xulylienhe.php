<?php
    session_start();
    // Nếu không phải là sự kiện liên hệ thì không xử lý
    if (!isset($_POST['gui'])){
        die('');
    }
     
    //file kết nối với database
    include('conn.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ form 
    $ten   = $_POST['ten'];
    $email  = $_POST['email'];
    $sdt  = $_POST['sdt'];
    $noidung =  $_POST['nd'];
    
    $sql="INSERT INTO lienhe (ten,email,sdt,noidung) VALUE ('".$ten."', '".$email."', '".$sdt."', '".$noidung."')";
    if (isset($_SESSION['dcemail']) == NULL ) { 
        echo "Vui lòng đăng nhập để tiếp tục sử dụng dịch vụ. <a href='dangnhap.php'>Đăng nhập</a>";
    } else {
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$ten || !$email || ! $sdt || !$noidung  )
    {
        echo "Vui lòng nhập đầy đủ thông tin. 
                <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }else
	{
            $addlh = mysqli_query($conn,$sql);
            echo "Cảm ơn bạn đã liên hệ với chúng tôi. 
                <a href='javascript: history.go(-1)'>Trở lại</a>";
	} 
    }       
?>