<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Thông tin Tour</title>
    <meta charset="UTF-8">
    <!-- ĐÂY LÀ TRANG CHỈ DÀNH CHO ADMIN -->
</head>

<body class="container"> 
    
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <!-- BẢNG BOOTSTRAP -->
            <table class="table table-striped ">
                <tr>
                    <th>ID Tour</th>
                    <th>Tên Tour</th>
                    <th>Mô tả</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Chi tiết</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php
                require_once("conn.php");
                
                // Nếu có phương thức post được thiết lập, có nghĩa là trang được tải và một bài viết có id này cần được xóa khỏi db
                if (isset($_POST['submit'])){
                    $idTour = $_POST['IDtour'];
                    mysqli_query($conn, "DELETE FROM tour WHERE IDtour='$idTour'");
                }
                
                // Liệt kê tất cả các tour từ db, đặt chúng vào một mảng và sau đó lặp qua mảng đó để viết mỗi dòng trong bảng
                $result = mysqli_query($conn, "SELECT * FROM tour");
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>{$row['IDtour']}</td>";
                    echo "<td>{$row['tentour']}</td>";
                    echo "<td>{$row['mota']}</td>";
                    echo "<td>{$row['gia']}</td>";
                    echo "<td><img class='group list-group-image img-fluid' style='width:100%' src='{$row['hinhanh']}' alt='' /></td>";
                    echo "<td>{$row['chitiet']}</td>";
                    echo "<td><a href='admin_sua.php?id={$row["IDtour"]}' class='btn btn-success' role='button'>Sửa</a></td>";
                    echo "<td>
                            <form method='post' action='admin_xoa.php'>
                                <input type='hidden' name='id' value='{$row['IDtour']}'>
                                <input type='submit' name='submit' value='Xóa' class='btn btn-danger'>
                            </form>
                          </td>";
                    echo "</tr>";
                }
                ?>
                
            </table>
        </div>
    </div>
</body>
</html>
