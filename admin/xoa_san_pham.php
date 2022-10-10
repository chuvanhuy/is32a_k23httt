<?php 
	// Mục đích kiểm tra xem người dùng đăng nhập hệ thống hay chưa. Nếu $_SESSION['da_dang_nhap']=1 --> cho phép người dùng truy cập trang này. Ngược lại đẩy người dùng về trang đăng nhập.

	session_start();

	if(!isset($_SESSION['da_dang_nhap'])) {
	;?>
	
	<script type="text/javascript">
		window.alert("Bạn không có quyền truy cập trang này. Vui lòng đăng nhập hệ thống");
		window.location.href = "../admin/dang_nhap.php";
	</script>
	
	<?php
	}
;?>

<?php
	$id=$_GET["id"];

	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$sql="DELETE FROM tbl_san_pham WHERE sp_id=".$id;

	// Thực hiện xoá dữ liệu
	mysqli_query($con, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn xoá thành công
;?>
<script type="text/javascript">
	window.alert("Xoá dữ liệu thành công!");
	window.location.href = "../admin/quan_tri_san_pham.php";
</script>