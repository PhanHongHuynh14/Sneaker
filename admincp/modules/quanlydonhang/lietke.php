<p>Liệt kê đơn hàng</p>
<?php
	if ($_SESSION['role'] != 1 && $_SESSION['role'] != 2) header('Location:index.php');
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<div class="tabel-responsive">
  <table class="table table-bordered">
    <tr>
      <th>Id</th>
      <th>Mã đơn hàng</th>
      <th>Tên khách hàng</th>
      <th>Địa chỉ</th>
      <th>Email</th>
      <th>Số điện thoại</th>
      <th>Tình trạng</th>
      <th>Ngày đặt</th>
      <th>Quản lý</th>
    
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
      $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['code_cart'] ?></td>
      <td><?php echo $row['tenkhachhang'] ?></td>
      <td><?php echo $row['diachi'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['dienthoai'] ?></td>
      <td>
        <?php if($row['cart_status']==1){
          echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
        }else{
          echo 'Đã xem';
        }
        ?>
      </td>
      <td><?php echo $row['cart_date'] ?></td>
      <td class="text-nowrap">
        <a class="btn btn-primary text-nowrap" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
        <a class="btn btn-info text-nowrap" href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">In Đơn hàng</a> 
      </td>
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>
