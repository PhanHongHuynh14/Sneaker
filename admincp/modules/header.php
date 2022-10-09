<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<nav class="navbar navbar-expand-lg bg-white shadow-sm px-2 mb-3">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">AdminCP</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto ms-2 mb-lg-0">
				<ul class="dropdown-menu">
				</ul>
			</ul>
		</div>
		<ul class="navbar-nav me-auto ms-2 mb-lg-0">
			<li> <a href="index.php?dangxuat=1" class="btn btn-primary">
				Đăng xuất: 
				<?php if(isset($_SESSION['dangnhap'])) { echo $_SESSION['dangnhap'];} ?>
			</a> </li>
		</ul>
  	</div>
</nav>