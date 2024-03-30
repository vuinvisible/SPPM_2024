<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3B-2G Travel</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            background:rgba(255, 165, 0,.2);
            border-radius: 0.5rem;
            padding:.2rem 1rem;
        }

        .topic .space{
            background:none;
        }

        .btn{
            display: inline-block;
            margin-top: 1rem;
            background:#6699FF;
            color:#fff;
            padding:.8rem 3rem;
            cursor: pointer;
            font-size: 1.7rem;
        }

        header{
            position: fixed;
            top:0; left: 0; right:0;
            background:#333;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:2rem 9%;
        }

        header .logo{
            font-size: 2.5rem;
            font-weight: bolder;
            color:#fff;
            text-transform: uppercase;
        }

        header .logo span{
            color:#00FFFF;
        }

        header .navbar a{
            color:#fff;
            font-size: 2rem;
            margin:0 .8rem;
        }

        header .icons i{
            font-size: 2.5rem;
            color:#fff;
            cursor: pointer;
            margin-right: 2rem;
        }

        #menu-bar{
            color:#fff;
            border:.1rem solid #fff;
            border-radius: .5rem;
            font-size: 3rem;
            padding:.5rem 1.2rem;
            cursor: pointer;
            display: none;
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
            color: #33CCFF;
            text-transform: uppercase;
            text-shadow: 0 .3rem .5rem rgba(0,0,0,.1);
        }

        .home .content p{
            font-size: 2.5rem;
            color:#777777;
            padding:.5rem 0;
        }

        .book .row{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
            align-items: center;
        }

        .book .row .image{
            flex:1 1 40rem;
        }

        .book .row .image img{
            width:100%;
        }

        .book .row form{
            flex:1 1 40rem;
            padding:.8rem 1rem;
            box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
            border-radius: .5rem;
        }

        .book .row form .inputBox{
            padding:.5rem 0;
        }

        .book .row form .inputBox input ,select{
            width:100%;
            padding:1rem;
            border:.1rem solid rgba(0,0,0,.1);
            font-size: 1.7rem;
            color:black;
            text-transform: none;
        }

        .book .row form .inputBox h3{
            font-size: 2rem;
            padding:.8rem 0;
            color:#666;
        }

        .packages .box-container{
            display: flex;
            flex-wrap: wrap;
            gap:1rem;
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

        .packages .box-container .box .content{
            padding:2rem;
        }

        .packages .box-container .box .content h3{
            font-size:2rem;
            color:#333;
        }
        .packages .box-container .box .content p{
            font-size:1.7rem;
            color:#666;
            padding:1rem 0;
        }
        .packages .box-container .box .content input {
            font-size:2rem;
            color:#333;
        }
        .services .box-container{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
        }

        .services .box-container .box{
            flex: 1 1 30rem;
            border-radius: .5rem;
            padding:3rem;
            text-align: center;
        }
        .services .box-container .box h3{
            font-size: 3rem;
            color:#666;
            padding:1rem 0;
        }
        .services .box-container .box i{
            font-size: 2rem;
        }

        .services .box-container .box p{
            font-size: 2rem;
            color:#666;
            padding:1rem 0;
        }


        .gallery .box-container{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
        }

        .gallery .box-container .box{
            overflow: hidden;
            box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
            border:1rem solid #fff;
            border-radius: .5rem;
            flex:1 1 30rem;
            height: 25rem;
            position: relative;
        }

        .gallery .box-container .box img{
            height: 100%;
            width:100%;
            object-fit: cover;
        }

        .gallery .box-container .box .content{
            position: absolute;
            top:-100%; left:0;
            height: 100%;
            width:100%;
            text-align: center;
            background:rgba(0,0,0,.7);
            padding:2rem;
            padding-top: 5rem;
        }

        .gallery .box-container .box:hover .content{
            top:0;
        }

        .gallery .box-container .box .content h3{
            font-size: 2.5rem;
            color: black;
        }

        .gallery .box-container .box .content p{
            font-size: 1.5rem;
            color:#eee;
            padding:.5rem 0;
        }
        .contact .row{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
            align-items: center;
        }

        .contact .row .image{
            flex:1 1 35rem;
        }

        .contact .row .image img{
            width:100%;
        }

        .contact .row form{
            flex:1 1 50rem;
            padding:2rem;
            box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
            border-radius: .5rem;
        }

        .contact .row form .inputBox{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact .row form .inputBox input, .contact .row form textarea{
            width:49%;
            margin:1rem 0;
            padding:1rem;
            font-size: 1.7rem;
            color:#333;
            background:#f7f7f7;
            text-transform: none;
        }

        .contact .row form textarea{
            height: 15rem;
            resize: none;
            width:100%;
        }



        .footer{
            background:#333;
        }

        .footer .box-container{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
        }

        .footer .box-container .box{
            padding:1rem 1rem;
            flex:1 1 15rem;
        }

        .footer .box-container .box h3{
            font-size: 2.5rem;
            padding:.7rem 0;
            color:#fff;
        }

        .footer .box-container .box p{
            font-size: 1.5rem;
            padding:.7rem 0;
            color:#eee;
        }

        .footer .box-container .box a{
            display: block;
            font-size: 1.5rem;
            padding:.7rem 0;
            color:#eee;
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

        @media (max-width:768px){

            #menu-bar{
            display: initial;
            }

          header .navbar{
            position: absolute;
            top:100%; right:0; left: 0;
            background: #333;
            border-top: .1rem solid rgba(255,255,255,.2);
            padding:1rem 2rem;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
          }

          header .navbar a{
            display: block;
            border-radius: .5rem;
            padding:1.5rem;
            margin:1.5rem 0;    
            background:#222;
          }

    </style>

</head>
<body>  
<header>
    <div id="menu"></div>
    <a href="index.php" class="logo"><span>3B</span>-2G <span>Travel</span></a>
    <nav class="navbar">
        <a href="#home">Trang chủ</a>
        <a href="#book">Đặt ngay</a>
        <a href="#packages">Tour</a>
        <a href="#services">Dịch Vụ</a>
        <a href="#gallery">Địa điểm</a>
        <a href="#contact">Liên hệ</a>
        <?php if(isset($_SESSION['dcemail']) != NULL) { ?>
                <p style="color:#fff;font-size: 1rem;margin:0 .8rem;">Xin chào :<?php echo $_SESSION['dcemail']; ?></p>
                <a href="xldx.php">Đăng xuất</a>
        <?php } else { ?>
            <a href="dangnhap.php">Đăng nhập</a>
        <?php } ?>
    </nav>
    <div>
        
    </div>
</header>
<section class="home" id="home">

    <div class="content">
        <h3>DU LỊCH BÌNH ĐỊNH</h3>
        <p>TẬN HƯỞNG KỲ NGHỈ TUYỆT VỜI BÊN GIA ĐÌNH</p>  
    </div>

</section>
<section class="book" id="book">

    <h1 class="topic">
        Đặt tour ngay
    </h1>

    <div class="row">
        <div class="image">
            <img src="images/booking" alt="">
        </div>

        <form action="xulytour.php" method="post">
            <div class="inputBox">
                <h3>Tour hôm nay</h3>
                
				<select id="form" name="place" placeholder="Địa điểm">
                    <?php
                        $conn = mysqli_connect("localhost","root","","dulich");
                        $sql = "select * from tour";
                        $result = mysqli_query($conn, $sql);
                             while($row = mysqli_fetch_array($result)) {
                                ?>
                    <option><?php echo $row['tentour'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="inputBox">
                <h3>Bao nhiêu người?</h3>
                <input type="number" placeholder="Số lượng" min="1" name="sl">
            </div>
            <div class="inputBox">
                <h3>Email</h3>
                <input type="email" name="email">
            </div>
            <div class="inputBox">
                <h3>Ngày đặt</h3>
                <input type="date" name="ngaydat">
            </div>
            <div class="inputBox">
                <input type="submit" class="btn" value="Đặt ngay" name="dat">
            </div>
        </form>

    </div>

</section>
<section class="packages" id="packages">

    <h1 class="topic">
        Tour hàng tuần
    </h1>

    <div class="box-container">
        <?php
            // Kết nối tới cơ sở dữ liệu
            $conn = mysqli_connect('localhost', 'root', '', 'dulich') or die('Kết nối không thành công');

            // Xác định số lượng bản ghi trên mỗi trang và trang hiện tại
            $slmoitrang = 4;
            $tranghientai = isset($_GET['page']) ? $_GET['page'] : 1;

            // Tính toán vị trí bắt đầu của dữ liệu trong cơ sở dữ liệu
            $start = ($tranghientai - 1) * $slmoitrang;

            // Truy vấn dữ liệu với LIMIT
            $query = "SELECT * FROM tour LIMIT $start, $slmoitrang";
            $result = mysqli_query($conn, $query);

            // Hiển thị dữ liệu phân trang
            while ($row = mysqli_fetch_array($result)) { ?>
                <div class="box">
                    <img src="<?php echo $row['hinhanh']; ?>" alt="">
                    <div class="content">
                        <h3> <?php echo $row['tentour'];?> </h3>
                        <p>ID-TOUR:<?php echo $row['IDtour'];?></p>
                        <h4><?php echo $row['gia'];?></h4>
                        <a href="index.php#book" class="btn">Đặt ngay</a>
                    </div>
                </div>
            <?php }?>
    </div>
<?php
            // Tạo các liên kết phân trang
            $query = "SELECT COUNT(*) as total FROM tour";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $tong_kq = $row['total'];
            $tong_trang = ceil($tong_kq / $slmoitrang);

            for ($i = 1; $i <= $tong_trang; $i++) {
                echo '<a href="?page=' . $i . ' " style="text-decoration: none;
                                                         padding: 5px; 
                                                         margin-right: 5px; 
                                                         background-color: #ccc; 
                                                         color: #000;">' . $i . '</a> ';

        }
        ?>  
</section>
<section class="services" id="services">

    <h1 class="topic">
        Dịch vụ
    </h1>

    <div class="box-container">

        <div class="box">
            <a href="khachsan.php"><i class="fa fa-bars"></i></a>
            <h3>Khách sạn</h3>
            <p>Chúng tôi ở đây để phục vụ bạn!</p>
        </div>
      
    </div>

</section>
<section class="gallery" id="gallery">
    <h1 class="topic">
        Địa điểm
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

            // Truy vấn dữ liệu với LIMIT
            $query = "SELECT * FROM tour LIMIT $start, $slmoitrang";
            $result = mysqli_query($conn, $query);

            // Hiển thị dữ liệu phân trang
            while ($row = mysqli_fetch_array($result)) { ?>
                <div class="box">
                    <img src="<?php echo $row['hinhanh'];?>" alt="">
                    <div class="content">
                        <form action="chitiet.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['IDtour'];?>">
                            <h3><?php echo $row['tentour'];?></h3>
                            <input type="submit" name="submit" id="submit" value="Xem thêm" style="display: inline-block;
                                margin-top: 1rem;
                                background:#6699FF;
                                color:#fff;
                                padding:.8rem 1rem;
                                cursor: pointer;
                                font-size: 1.7rem;">
                        </form>
                    </div>
                </div>
            <?php }?>
    </div>
    <?php
            // Tạo các liên kết phân trang
            $query = "SELECT COUNT(*) as total FROM tour";
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

<section class="contact" id="contact">
    
    <h1 class="topic">
        Liên hệ
       
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact1" alt="">
        </div>

        <form action="xulylienhe.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="Tên" name="ten">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Số điện thoại" name="sdt">
              
            </div>
            <textarea placeholder="Nội dung"  id="" cols="30" rows="10" name="nd"></textarea>
            <input type="submit" class="btn" value="Gửi" name="gui">
        </form>

    </div>
    
</section>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Đường dẫn nhanh</h3>
            <a href="#home">Trang chủ</a>
            <a href="#book">Đặt ngay</a>
            <a href="#packages">Tour</a>
            <a href="#services">Dịch Vụ</a>
            <a href="#gallery">Địa điểm</a>
            <a href="#contact">Liên hệ</a>
        </div>
        <div class="box">
            <h3>follow </h3>
            <a href="https://www.facebook.com/XuanNgoc.IT.QNU">facebook</a>
            <a href="#">Instagram</a>
            <a href="#">TikTok</a>
        </div>

    </div>

    <h1 class="credit"> Được tạo bởi <span> 3B-2G </span> | Thank you! </h1>

</section>
</body>
</html>