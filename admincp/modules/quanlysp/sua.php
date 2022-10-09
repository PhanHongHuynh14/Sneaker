<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form class="container-fluid" method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
	  <div>
	  	<label class="form-label">Tên sản phẩm</label>
	  	<input class="form-control" type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham">
	  </div>
	   <div>
	  	<label class="form-label">Mã sp</label>
	  	<input class="form-control" type="text" value="<?php echo $row['masp'] ?>" name="masp">
	  </div>
	  <div>
	  	<label class="form-label">Giá sp</label>
	  	<input class="form-control" type="text" value="<?php echo $row['giasp'] ?>" name="giasp">
	  </div>
	  <div>
	  	<label class="form-label">Số lượng</label>
	  	<input class="form-control" type="text" value="<?php echo $row['soluong'] ?>" name="soluong">
	  </div>
	   <div>
	  	<label class="form-label">Hình ảnh</label>
		<input class="form-control" type="file" name="hinhanh">
		<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  </div>
	  <div>
	  	<label class="form-label">Tóm tắt</label>
		<textarea class="form-control" rows="10"  name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea>
	  </div>
	   <div>
	  	<label class="form-label">Nội dung</label>
	  	<textarea class="form-control" rows="10"  name="noidung" style="resize: none"><?php echo  $row['noidung'] ?></textarea>
	  </div>
	  <div>
	    <label class="form-label">Danh mục sản phẩm</label>
	    	<select class="form-select" name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	  </div>
	  <div>
	    <label class="form-label">Tình trạng</label>
	    	<select class="form-select" name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	  </div>
	   <div class="d-flex justify-content-center my-3">
	   <input class="btn btn-primary" type="submit" name="suasanpham" value="Sửa sản phẩm">
	  </div>
 </form>
 <?php
 } 
 ?>
