<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
	<p>Thêm sản phẩm</p>
	<div class="container-fluid">
		<label class="form-label">Tên sản phẩm</label>
		<input class="form-control" type="text" name="tensanpham">
	</div>
	<div class="container-fluid">
		<label class="form-label">Mã sp</label>
		<input class="form-control" type="text" name="masp">
	</div>
	<div class="container-fluid">
		<label class="form-label">Giá sp</label>
		<input class="form-control"type="text" name="giasp">
	</div>
	<div class="container-fluid">
		<label class="form-label">Số lượng</label>
		<input class="form-control" type="text" name="soluong">
	</div>
	<div class="container-fluid">
		<label class="form-label">Hình ảnh</label>
		<input class="form-control" type="file" name="hinhanh">
	</div>
	<div class="container-fluid">
		<label class="form-label">Tóm tắt</label>
		<textarea class="form-control" rows="10"  name="tomtat" style="resize: none"></textarea>
	</div>
	<div class="container-fluid">
		<label class="form-label">Nội dung</label>
		<textarea class="form-control" rows="10"  name="noidung" style="resize: none"></textarea>
	</div>
	<div class="container-fluid">
		<label class="form-label">Danh mục sản phẩm</label>
		<select class="form-select"  name="danhmuc">
			<?php
			$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
			$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
			while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
			?>
			<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
			<?php
			} 
			?>
		</select>
	</div>
	<div class="container-fluid">
		<label class="form-label">Tình trạng</label>
		<select class="form-select" name="tinhtrang">
			<option value="1">Kích hoạt</option>
			<option value="0">Ẩn</option>
		</select>
	</div>
	<div class="d-flex justify-content-center my-3">
		<input class="btn btn-primary" type="submit" name="themsanpham" value="Thêm sản phẩm">
	</div>
</form>