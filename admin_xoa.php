<?php
require_once("conn.php");

if(isset($_POST['submit'])) {
    if(isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        $id = $_POST['id'];

        // Xóa tour từ database
        $sql = "DELETE FROM tour WHERE IDtour = '$id'";
        if(mysqli_query($conn, $sql)) {
            header("Location: admin_tour.php"); // Chuyển hướng về trang admin sau khi xóa thành công
            exit();
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    } else {
        echo "Hành động xóa đã bị hủy.";
    }
} else {
    echo "Không có dữ liệu được gửi.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận xóa tour</title>
    <script>
        function confirmDelete() {
            return confirm("Bạn có chắc chắn muốn xóa tour này không?");
        }
    </script>
</head>
<body>

<?php
if(isset($_POST['id'])) {
    // Lấy ID tour cần xóa
    $id = $_POST['id'];

    // Hiển thị form xác nhận xóa
    echo "<h2>Xác nhận xóa tour</h2>";
    echo "<form method='post' action=''>";
    echo "<input type='hidden' name='id' value='$id'>";
    echo "<input type='hidden' name='confirm' value='no'>"; // Giá trị mặc định là 'no'
    echo "<input type='submit' name='submit' value='Yes' onclick='return confirmDelete();'>";
    echo "<input type='button' value='No' onclick='window.location.href=\"admin_tour.php\"'>";
    echo "</form>";
}
?>

</body>
</html>
