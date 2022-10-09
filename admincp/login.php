<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$result = $row->fetch_array(MYSQLI_ASSOC);
			$_SESSION['dangnhap'] = $taikhoan;
			$_SESSION['role'] = $result['role'];
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
	<title>Đăng nhập Admincp</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
		}
		.wrapper-login {
		    width: 25%;
			height: 260px;
		    margin: 0 auto;
			border-radius: 8px;
	
		}
		h3{
			font-size: 20px;
			padding-top: 5px;
		}

	</style>
</head>
<body>
<div class="wrapper-login bg-white my-3 ">
	<form class="container-fluid" action="" autocomplete="off" method="POST">
			<div class="d-flex justify-content-center">
				<h3>Đăng nhập Admin</h3>
			</div>
			<div>
				<p>Tài khoản</p>
				<input class="form-control" type="text" name="username">
			</div>
			<div>
				<p>Mật khẩu</p>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="d-flex justify-content-center my-3">
				<input class="btn btn-primary" type="submit" name="dangnhap" value="Đăng nhập">
			</div>
	</table>
	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
