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
	<title>Thêm mới sản phẩm</title>
</head>

<body>
	<h1>TRANG THÊM MỚI SẢN PHẨM</h1>

	<form action="../admin/them_moi_san_pham_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p style="font-weight: bold;">Tên sản phẩm:</p>
		<p><input type="text" name="txtTenSanPham" value="" style="width:95%"></p>
		<p style="font-weight: bold;">Mô tả sản phẩm:</p>
		<p><textarea name="txtMoTa" style="width:95%"></textarea></p>
		<p style="font-weight: bold;">Ảnh minh hoạ:</p>
		<p><input type="file" name="txtAnhMinhHoa"></p>
		<p style="font-weight: bold;">Giá bán:</p>
		<p><input type="text" name="txtGiaBan" value="" style="width:95%"></p>
		<p style="font-weight: bold;">Số lượng:</p>
		<p><input type="text" name="txtSoLuong" value="" style="width:95%"></p>
		<p style="text-align: center;"><button type="submit">Thêm mới</button></p>
	</form>
</body>
</html>