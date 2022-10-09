<?php
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql_dangky = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['email'] = $row_data['email'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>
<form action="" autocomplete="off" method="POST">
		<table style="width:600px;" class="table table-bordered my-3">
			<tr>
				<td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" size="50" name="email" placeholder="Email..."></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" size="50" name="password" placeholder="Mật khẩu..."></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table>
	</form>