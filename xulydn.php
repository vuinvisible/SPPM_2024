<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('conn.php');
     
    //Lấy dữ liệu nhập vào
    $ademail = $_POST['email'];
    $password = $_POST['password'];
     
    $sql="SELECT email, matkhau FROM nguoidung WHERE email = '$ademail' AND matkhau ='$password'";

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$ademail || !$password) {
        echo "Vui lòng nhập đầy đủ Email và mật khẩu. 
                <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if($kq = mysqli_query($conn, $sql))
    {
        if($row = mysqli_fetch_array($kq))
        {
            $_SESSION['dcemail'] = $row['email'];
            header('location: index.php');        
        } else {
            echo " Nhập mật khẩu không đúng. 
                    <a href='javascript: history.go(-1)'>Trở lại</a> ";
        }
    } else {
        echo "Tài khoản không tồn tại. 
                    <a href='javascript: history.go(-1)'>Trở lại</a> ";
        }

    mysqli_close($conn);
    }

?>
