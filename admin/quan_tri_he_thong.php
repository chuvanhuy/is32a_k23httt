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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị hệ thống</title>
</head>
<body>
	<ul>
		<li><a href="../admin/quan_tri_tin_tuc.php">Quản trị tin tức</a></li>
		<li><a href="../admin/quan_tri_san_pham.php">Quản trị sản phẩm</a></li>
		<li><a href="../admin/quan_tri_tai_khoan.php">Quản trị tài khoản</a></li>
		<li><a href="../admin/quan_tri_lien_he.php">Quản trị liên hệ</a></li>
	</ul>
</body>
</html>