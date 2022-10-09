<form class="container-fluid" method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
	 <p>Thêm bài viết</p>
	  <div>
	  	<label class="form-label">Tên bài viết</label>
	 	<input class="form-control" type="text" name="tenbaiviet">
	  </div>

	   <div>
	  	<label class="form-label">Hình ảnh</label>
	  	<input class="form-control" type="file" name="hinhanh">
	  </div>
	  <div>
	  	<label class="form-label">Tóm tắt</label>
	  	<textarea class="form control" rows="8"  name="tomtat" style="resize: none"></textarea>
	  </div>
	   <div>
	  	<label class="form-label">Nội dung</label>
	  	<textarea class="form-control" rows="10"  name="noidung" style="resize: none"></textarea>
	  </div>
	  <div>
	    <label class="form-label">Danh mục bài viết</label>
	    	<select class="form-select" name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	  </div>
	  <div>
	    <label class="form-label">Tình trạng</label>
	    	<select class="form-control" name="tinhtrang">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	  </div>
	   <div class="d-flex justify-content-center my-3">
	    <input class="btn btn-primary" type="submit" name="thembaiviet" value="Thêm bài viết">
	  </div>
 </form>
</table>