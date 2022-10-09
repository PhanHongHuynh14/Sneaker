
<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>
	<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	 	?>
 <form class="container-fluid" method="POST" action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data">
	  
	   <div class="container-fluid">
	  	<label class="form-label">Thông tin liên hệ</label>
	  	<textarea class="form-control" rows="10"  name="thongtinlienhe" style="resize: none"><?php echo $dong['thongtinlienhe'] ?></textarea>
	  </div>
	  
	  <div class="d-flex justify-content-center my-3">
	    <input class="btn btn-primary" type="submit" name="submitlienhe" value="Cập nhật">
	  </div>
	  <?php 
		}
	  ?>
 </form>
</table>
