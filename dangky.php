<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.dangky {
		margin: 10px auto;
		height: 390px;
    	width:  500px;
    	background: #33CCFF;
    	border-radius: 10px;
		text-align: center;
		}
		input[type=text], input[type=password], input[type=date], input[type=number] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
		}
		h3{
			text-align: center;
		}
		.button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		border-radius: 10px;
		}
		  
		.button:hover {
		opacity: 0.8;
		}
		
	</style>
</head>
<body>
    <form action="xulydk.php" method="POST" class="dangky">

        <h3>Đăng ký tài khoản</h3>
        <input type="text" class="box" placeholder="Email" name="email">
        <input type="password" class="box" placeholder="Nhập mật khẩu" name="pass">
        <input type="password" class="box" placeholder="Nhập lại mật khẩu" name="repass">
        <input type="text" class="box" placeholder="Họ tên" name="txtten">
        <input type="text" class="box" placeholder="Địa chỉ" name="adress">
        <input type="number" class="box" placeholder="Số điện thoại" name="sdt">
        <input type="submit" value="Đăng ký" class="button" name="dangky">
     
    </form>
</body>
</html>