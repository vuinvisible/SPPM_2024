<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
        *{
          font-family: 'Nunito', sans-serif;
          margin:0; padding:0;
          box-sizing: border-box;
          text-transform: capitalize;
          outline: none; border:none;
          text-decoration: none;
          transition: all .2s linear;
        }

        html{
          font-size: 62.5%;
          overflow-x: hidden;
          scroll-padding-top: 6rem;
          scroll-behavior: smooth;
        }

        section{
          padding:2rem 9%;
        }

        .topic {
          text-align: center;
          font-size: 3.5rem;
          background:rgba(227, 147, 100, 0.2);
          color:black;
          border-radius: .5rem;
          padding:.2rem 1rem;
        }

        .btn{
          display: inline-block;
          margin-top: 1rem;
          background:#6699FF;
          color:#fff;
          padding:.8rem 3rem;
          border:.2rem solid;
          cursor: pointer;
          font-size: 1.7rem;
        }

        .home{
          min-height: 40vh;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-flow: column;
          position: relative;
          z-index: 0;
        }

        .home .content{
          text-align: center;
        }

        .home .content h3{
          font-size: 4.5rem;
          color:#00CC00;
          text-transform: uppercase;
          text-shadow: 0 .3rem .5rem rgba(0,0,0,.1);
        }

        .home .content p{
          font-size: 3rem;
          color:#fff;
          padding:.5rem 0;
        }

        .book .row{
          display: flex;
          flex-wrap: wrap;
          gap:1.5rem;
          align-items: center;
          width: 600px;
          
        }
        .book .row form .inputBox select{
          width:100%;
          padding:1rem;
          border:.1rem solid rgba(0,0,0,.1);
          font-size: 1.7rem;
          color:rgb(9, 2, 2);
          text-transform: none;
        }

        .book .row form{
          flex:1 1 40rem;
          padding:2rem;
          box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
          border-radius: .5rem;
        }

        .book .row form .inputBox{
          padding:.5rem 0;
        }

        .book .row form .inputBox input{
          width:100%;
          padding:1rem;
          border:.1rem solid rgba(0,0,0,.1);
          font-size: 1.7rem;
          color:#333;
          text-transform: none;
        }

        .book .row form .inputBox h3{
          font-size: 2rem;

          color:#666;
        }
        .book .row form .btn{
          text-align: center;
        }

        .packages .box-container{
          display: flex;
          flex-wrap: wrap;
          gap:2rem;

        }

        .packages .box-container .box{
          flex:1 1 30rem;
          border-radius: .5rem;
          overflow: hidden;
          box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
        }

        .packages .box-container .box img{
          height: 25rem;
          width:100%;
          object-fit: cover;
        }
        .packages .box-container .box .content .price{
          font-size: 2rem;
          color:red;
          padding-top: 1rem;
        }

        .packages .box-container .box .content .price span{
          color:red;
          font-size: 2rem;
          padding-top: 1rem;
        }
        .footer{
          background:#333;
        }
        .footer .credit{
          text-align: center;
          padding:2rem 1rem;
          margin-top: 1rem;
          font-size: 2rem;
          font-weight: normal;
          color:#fff;
          border-top: .1rem solid rgba(255,255,255,.2);
        }
        .footer .credit span{
          color:white;
        }
    </style>
</head>
<body>
<section class="home" id="home">

    <div class="content">
        <h3>KHÁCH SẠN TẠI BÌNH ĐỊNH</h3>
    </div>

</section>
<section class="book" id="book">
    <h1 class="topic">
        Đặt ngay
    </h1>
    <div class="row">
        <form action="xulyks.php" id="dat" method="POST">
            <div class="inputBox">
                <h3>Email của bạn</h3>
                <input type="text" placeholder="Email" name="email">
            </div>
			<div class="inputBox">
                <h3>Khách sạn</h3>
				<select id="form" name="hotel">
                    <?php
                        $conn = mysqli_connect("localhost","root","","dulich");
                        $sql = "select * from khachsan";
                        $result = mysqli_query($conn, $sql);
                             while($row = mysqli_fetch_array($result)) {
                                ?>
                    <option><?php echo $row['tenks'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="inputBox">
                <h3>Ngày đặt</h3>
                <input type="date" name="ngaydat">
            </div>
            <div class="inputBox">
                <h3>Số lượng người </h3>
                <input type="number" placeholder="Số lượng người" min="1"name="sl">
            </div>
            <input type="submit" class="btn" value="Đặt ngay" name="datngay">
        </form>
    </div>
</section>
<section class="packages" id="packages">
    <h1 class="topic">
        Khách sạn
    </h1>
    
    <div class="box-container">
        <?php
            // Kết nối tới cơ sở dữ liệu
            $conn = mysqli_connect('localhost', 'root', '', 'dulich');

            // Xác định số lượng bản ghi trên mỗi trang và trang hiện tại
            $slmoitrang = 4;
            $tranghientai = isset($_GET['page']) ? $_GET['page'] : 1;

            // Tính toán vị trí bắt đầu của dữ liệu trong cơ sở dữ liệu
            $start = ($tranghientai - 1) * $slmoitrang;

            // Truy vấn dữ liệu với LIMIT và OFFSET
            $query = "SELECT * FROM khachsan LIMIT $start, $slmoitrang";
            $result = mysqli_query($conn, $query);

            // Hiển thị dữ liệu phân trang
            while ($row = mysqli_fetch_array($result)) { ?>
        <div class="box">
            <img src="<?php echo $row['hinhanh'];?>" alt="">
            <div class="content">
                <h3> <?php echo $row['tenks'];?> </h3>
            
                <p> <?php echo $row['mota'];?> </p>
                <div class="price"><span><?php echo $row['gia'];?></span> </div>
                <a class="btn" href="#dat">Đặt ngay</a>
            </div>
        </div>
        <?php }?>
    </div> 
    <?php
            // Tạo các liên kết phân trang
            $query = "SELECT COUNT(*) as total FROM khachsan";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $tong_kq = $row['total'];
            $tong_trang = ceil($tong_kq / $slmoitrang);

            for ($i = 1; $i <= $tong_trang; $i++) {
                
                echo '<a href="?page=' . $i . '" style="text-decoration: none;
                                                         padding: 5px; 
                                                         margin-right: 5px; 
                                                         background-color: #ccc; 
                                                         color: #000;">' . $i . '</a> ';
        }
        ?>  
</section>
<section class="footer">
    <h1 class="credit"> Được tạo bởi <span> 3B-2G </span> | Thank-you! </h1>
</section>
</body>
</html>