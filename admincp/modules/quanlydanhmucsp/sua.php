<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<form class="container-fluid" method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
	<p>Sửa danh mục sản phẩm</p>
 	<?php
 		while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
		<div class="container-fluid">
			<label class="form-label">Tên danh mục</label>
			<input class="form-control" type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc">
		</div>
		<div class="container-fluid">
			<label class="form-label">Thứ tự</label>
			<input class="form-control" type="text" value="<?php echo $dong['thutu'] ?>" name="thutu">
		</div>
		<div class="d-flex justify-content-center my-3">
			<input class="btn btn-primary" type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm">
		</div>
	<?php
		} 
	?>
</form>