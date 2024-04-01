<?php
require_once("conn.php");

if(isset($_POST['id'])) {
    // Xác định idtour cần sửa
    $id = $_POST['id'];

    // Kiểm tra xem các trường dữ liệu được gửi từ form có tồn tại và hợp lệ không
    $fields = [];
    if(isset($_POST['tentour'])) $fields[] = "tentour = '" . $_POST['tentour'] . "'";
    if(isset($_POST['mota'])) $fields[] = "mota = '" . $_POST['mota'] . "'";
    if(isset($_POST['gia']) && is_numeric($_POST['gia'])) $fields[] = "gia = " . $_POST['gia']; // Kiểm tra giá trị là số
    if(isset($_POST['chitiet'])) $fields[] = "chitiet = '" . $_POST['chitiet'] . "'";

    // Kiểm tra xem có trường dữ liệu nào cần cập nhật không
    if(!empty($fields)) {
        // Tạo câu truy vấn SQL
        $sql = "UPDATE tour SET " . implode(", ", $fields) . " WHERE IDtour = ?";
        
        // Sử dụng Prepared Statements để thực hiện truy vấn SQL
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        // Thực thi truy vấn
        if(mysqli_stmt_execute($stmt)) {
            // Kiểm tra xem có bản ghi nào bị ảnh hưởng bởi truy vấn không
            if(mysqli_affected_rows($conn) > 0) {
                header("Location: admin_tour.php"); // Chuyển hướng về trang admin sau khi sửa thành công
                exit();
            } else {
                echo "Không có bản ghi nào được cập nhật.";
            }
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Không có dữ liệu nào được gửi để cập nhật.";
    }
} else {
    echo "Không có dữ liệu được gửi.";
}
?>
