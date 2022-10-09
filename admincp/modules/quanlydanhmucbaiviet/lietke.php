<?php
	if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) header('Location:index.php');
	$sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
	$query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
<p>Liệt kê danh mục bài viết</p>
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th>Id</th>
      <th>Tên danh mục</th>
      <th>Quản lý</th>
    
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
      $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
      <td>
        <a class="btn btn-danger" href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xoá</a> 
        <a class="btn btn-info" href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a> 
      </td>
    
    </tr>
    <?php
    } 
    ?>
  </table>
</div>

 
