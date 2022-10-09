<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-2" style="width: 100%">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a  class="nav-link" href="index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color: #fff;" class="nav-link" href="index.php?quanly=giohang">GIỎ HÀNG</a>
      </li>
      <li class="nav-item"><a style="color: #fff;"  class="nav-link" href="index.php?quanly=tintuc">TIN TỨC</a></li>
	<li class="nav-item"><a style="color: #fff;"  class="nav-link" href="index.php?quanly=lienhe">LIÊN HỆ</a></li>

      <li class="nav-item dropdown">
        <a style="color: #fff;"  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          DANH MỤC SẢN PHẨM
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
          <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
        <?php
				} 
				?>
        </div>
      </li>

      	<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li style="color: #fff;"  class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
				<li style="color: #fff;"  class="nav-item"><a class="nav-link" href="index.php?quanly=thaydoimatkhau">THAY ĐỔI MẬT KHẨU</a></li>
				<li style="color: #fff;" class="nav-item"><a class="nav-link" href="index.php?quanly=lichsudonhang">LỊCH SỬ ĐƠN HÀNG</a></li>
				<?php
				}else{ 
				?>
				<li   class="nav-item"><a style="color: #fff;" class="nav-link" href="index.php?quanly=dangky">ĐĂNG KÝ</a></li>
				<?php
				} 
				?>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Từ khóa..." name="tukhoa" aria-label="Search">
      <input class="btn btn-light my-2 my-sm-0" name="timkiem" type="submit" value="Tìm kiếm"></input>
    </form>
  </div>
</nav>


<!-- 
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>

				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				} 
				?>
				

				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				<li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
				
					
				
			</ul>
			<p>
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" value="Tìm kiếm">
				</form>
			</p>
		</div> -->