<?php
	$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<p>Sửa bài viết</p>
<?php
while($row = mysqli_fetch_array($query_sua_bv)) {
?>
 <form class="container-fluid" method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <div>
	  	<label class="form-label">Tên bài viết</label>
	  	<input class="form-control" type="text" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet">
	  </div>
	 
	   <div>
	  	<label class="form-label">Hình ảnh</label>
	  		<input class="form-control" type="file" name="hinhanh">
	  		<img class="my-3" src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
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
	    <label class="form-label">Danh mục bài viết</label>
	    	<select class="form-select" name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){

	    			if($row_danhmuc['id_baiviet']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
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
	   <div class="d-flex justify-content-center my-3" >
	    <input class="btn btn-primary" type="submit" name="suabaiviet" value="Sửa bài viết">
	  </div>
 </form>
 <?php
 } 
 ?>

</table>