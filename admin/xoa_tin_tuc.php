<?php
	$id=$_GET["id"];

	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$sql="DELETE FROM tbl_tin_tuc WHERE tt_id=".$id;

	// Thực hiện xoá dữ liệu
	mysqli_query($con, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn xoá thành công
;?>
<script type="text/javascript">
	window.alert("Xoá dữ liệu thành công!");
	window.location.href = "../admin/quan_tri_tin_tuc.php";
</script>