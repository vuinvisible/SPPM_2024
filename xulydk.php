<?php
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['dangky'])){
        die('');
    }
    // Nếu là sự kiện đăng ký thì xử lý
    if (isset($_POST['dangky'])){
        
    //file kết nối với database
    include('conn.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
    //Lấy dữ liệu
    $dcemail = $_POST['email'];
    $password = $_POST['pass'];
    $repassword = $_POST['repass'];
    $fullname = $_POST['txtten'];
    $adress = $_POST['adress'];
    $phone = $_POST['sdt'];
    
    $sql="INSERT INTO nguoidung (email,matkhau,tennd,diachi,sdt) VALUES ('".$dcemail."', '".$password."', '".$fullname."', '".$adress."', '".$phone."')";

    $check_email="SELECT * FROM nguoidung WHERE email = '$dcemail'";
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$dcemail || !$password || !$repassword || !$fullname || !$adress  || !$phone)
    {
        echo "Vui lòng nhập đầy đủ thông tin. 
            <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }else 
    {
        if($checkem = mysqli_query($conn, $check_email))
        {
            if($row = mysqli_fetch_array($checkem)){
                echo "Email đã có người sử dụng. 
                        <a href='javascript: history.go(-1)'>Trở lại</a> ";
            }else{
                if($password != $repassword){
                    echo "Nhập lại mật khẩu không khớp. 
                        <a href='javascript: history.go(-1)'>Trở lại</a>";
                }else{
                    $adddangky = mysqli_query($conn, $sql);
                    echo "Đăng ký thành công. 
                        <a href='dangnhap.php'>Đăng nhập</a>";
                        
                }
            }
        } 
    }
    // Đóng kết nối
    mysqli_close($conn);
}
?>