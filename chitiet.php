<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <style type="text/css">
    
        * {
            margin :0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto',sans-serif;
        }

        .container {
            margin: 100px;
        }
        .h1-style{
            font-size: 50px;
            text-align: center;

        }
        .btn{
          display: inline-block;
          margin-top: 1rem;
          background:#6699FF;
          color:#fff;
          padding:.8rem 3rem;
          border:.2rem solid ;
          cursor: pointer;
          font-size: 1.7rem;
          text-decoration: none
        }
        li{
            list-style: none;
           
        }
        span{
        font-size: 12pt;
         font-family: arial, helvetica, sans-serif;
        }
        .text {
            margin-top: 100px;
        }
        
        p{
            font-size: 20px;
            line-height: 45px;
        }
        .end {
            color:#6699FF ;
        }
        ul{
            font-size: 25px;
        }
        img{
         width: 600px;
         height: 400px;
        }
    </style>
</head>
<body> 
    <?php
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
            $conn = mysqli_connect("localhost","root","","dulich");
            $sql = "select * from tour where IDtour = '".$id."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
        }
        
    ?>
        <div class="container">
                <li><a href="index.php">Trang chủ</a> >> <?php echo $row['tentour'];?></li>
             <br><br>
        <h1 class="h1-style"><?php echo $row['tentour'];?></h1><br><br>
        <table align="center">
            <tr>
                <td style="width: 50%;" align="center">
                    <img src="<?php echo $row['hinhanh'];?>" >  
                </td>
                <td style="width: 50%;" align="left">
                    <h2 class="h2-style"><?php echo $row['chitiet'];?></h2>             
                    <span><?php echo $row['gia']?></span>
                    <ul>
                </ul><br>
               <a  class="btn" href="index.php#book">Đặt ngay</a>
                </td>
            </tr>
        </table>
        <div class="text"></div>
        <p>
            <?php echo $row['mota'];?>
        </p>
    <p class="end" align="center"><b> 3B2G travel </b></p>
    </div>
</body>
</html>