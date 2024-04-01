<?php
// Khai báo sử dụng session
session_start();

// Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

// Xử lý đăng nhập
if (isset($_POST['dangnhap'])) {
    // Kết nối tới database
    include('conn.php');
    // Lấy dữ liệu nhập vào
    $ademail = $_POST['email'];
    $password = $_POST['password'];
    // Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$ademail || !$password) {
        echo "Vui lòng nhập đầy đủ Email và mật khẩu. 
            <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    // Sử dụng prepared statement để tránh SQL Injection
    $sql = "SELECT email, matkhau, vaitro FROM nguoidung WHERE email = ? AND matkhau = ?";
    $stmt = mysqli_prepare($conn, $sql);
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $ademail, $password);
    // Execute statement
    mysqli_stmt_execute($stmt);
    // Lấy kết quả
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $email, $matkhau, $vaitro);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_fetch($stmt);
        $_SESSION['dcemail'] = $email;
        // Kiểm tra vai trò của người dùng và chuyển hướng đến trang tương ứng
        if ($vaitro == '1') {
            header('location: admin_tour.php');
        } else {
            header('location: index.php');
        }
    } else {
        echo "Email hoặc mật khẩu không đúng. 
            <a href='javascript: history.go(-1)'>Trở lại</a> ";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

