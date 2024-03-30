<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<style type="text/css">
	.dangnhap {
	margin: 10px auto;
	height: 250px;
    width:  500px;
    background: #33CCFF;
    border-radius: 10px;
	text-align: center;
	}
	input[type=text], input[type=password] {
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
	}
	.button:hover {
	opacity: 0.8;
	}

</style>
</head> 
<body> 
	<form action='xulydn.php' class="dangnhap" method='POST'> 
		<h3>Đăng nhập</h3>
		<input type='text' name='email' placeholder="Nhập Email" /> 
		<input type='password' name='password' placeholder="Nhập mật khẩu" /> 
		<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
		<p>Bạn chưa có tài khoản? <a href="dangky.php" id="dangky">Đăng ký ngay</a></p> 
<form> 
</body> 
</html>