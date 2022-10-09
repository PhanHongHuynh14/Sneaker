
<nav style="height:100%" class="nav flex-column bg-dark border me-2 mt-2">
	<a style="color:white;" class="nav-link" href="index.php">Thống kê</a>
	<?php if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2){ ?>
	<a style="color:white;" class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a>
	<a style="color:white;" class="nav-link" href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a>
	<a style="color:white;" class="nav-link" href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a>
	<?php } ?>
	<?php if ($_SESSION['role'] == 1 || $_SESSION['role'] == 3){ ?>
	<a style="color:white;" class="nav-link" href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a>
	<a style="color:white;" class="nav-link" href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a>
	<?php } ?>
	<?php if ($_SESSION['role'] == 1){ ?>
	<a style="color:white;" class="nav-link" href="index.php?action=quanlyweb&query=capnhat">Thông tin liên hệ</a>
	<?php } ?>
</nav>
