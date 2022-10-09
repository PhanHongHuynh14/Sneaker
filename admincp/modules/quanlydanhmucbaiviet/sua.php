<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
<p>Sửa danh mục sản phẩm</p>
 <form class="container-fluid" method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
 	?>
	  	<div class="container-fluid">
	  	<label class="form-label">Tên danh mục</label>
	  	<input class="form-control" type="text" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet">
	  </div>
	  	<div class="container-fluid">
	    <label class="form-label">Thứ tự</label>
	    <input class="form-control" type="text" value="<?php echo $dong['thutu'] ?>" name="thutu">
	  </div>
	   	<div class="container-fluid d-flex justify-content-center my-3">
	    <input class="btn btn-primary" type="submit" name="suadanhmucbaiviet" value="Sửa danh mục bài viết"></td>
	  </div>
	  <?php
	  } 
	  ?>

 </form>
</table>