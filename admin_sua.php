<!DOCTYPE html>
<html>
<head>
    <title>Sửa Tour</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container">

<?php
require_once("conn.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lấy thông tin của tour từ database
    $result = mysqli_query($conn, "SELECT * FROM tour WHERE IDtour='$id'");
    
    // Kiểm tra xem có dòng nào trả về không
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    
        // Hiển thị form để sửa thông tin tour
        echo "<h2>Sửa Tour</h2>";
        echo "<form method='post' action='admin_sua_process.php'>";
        echo "<input type='hidden' name='id' value='{$row['IDtour']}'>";
        echo "Tên Tour: <input type='text' name='tentour' value='{$row['tentour']}'><br><br>";
        echo "Mô tả: <textarea name='mota'>{$row['mota']}</textarea><br><br>";
        echo "Giá: <input type='text' name='gia' value='{$row['gia']}'><br><br>";
        echo "Hình ảnh: <input type='file' name='hinhanh' value = {$row['hinhanh']}><br><br>";
        echo "Chi tiết: <textarea name='chitiet'>{$row['chitiet']}</textarea><br><br>";
        echo "<input type='submit' name='submit' value='Lưu' class='btn btn-primary'>";
        echo "</form>";
    } else {
        echo "Không tìm thấy tour với ID này.";
    }
} else {
    echo "Không có ID được cung cấp.";
}
?>

</body>
</html>
