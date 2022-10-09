
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	
?>
	<h3 style="text-align: center;text-transform: uppercase;padding-top:10px">Tin tức</h3>	
<div class="row">
	
		<?php
		while($row_bv = mysqli_fetch_array($query_bv)){ 
		?>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
			<p style="text-align:center;">
				<img style="width:200px" src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
			</p>
			<p class="title_product">Tên bài viết : <?php echo $row_bv['tenbaiviet'] ?></p>
			</a>
			<p style="margin:10px" class="title_product"><?php echo $row_bv['tomtat'] ?></p>
		</div>
		<?php
		} 
		?>
		
</div>
