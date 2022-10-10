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
	<title>Sửa sản phẩm</title>
</head>

<body>
	<h1>TRANG SỬA SẢN PHẨM</h1>
	<?php
		$id=$_GET["id"];

		// Kết nối đến CSDL
		require('../config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM tbl_san_pham WHERE sp_id=".$id;

		// Thực hiện truy vấn
		$san_pham=mysqli_query($con, $sql);
		$row = mysqli_fetch_array($san_pham);
	;?>

	<form action="../admin/sua_san_pham_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p style="font-weight: bold;">Tên sản phẩm:</p>
		<p><input type="text" name="txtTenSanPham" value="<?php echo $row['sp_ten_san_pham'];?>" style="width:95%"></p>
		<p style="font-weight: bold;">Mô tả sản phẩm:</p>
		<p><textarea name="txtMoTa" style="width:95%"><?php echo $row['sp_mo_ta'];?></textarea></p>
		<p style="font-weight: bold;">Ảnh minh hoạ:</p>
		<p><input type="file" name="txtAnhMinhHoa">  (<b>Ảnh đã lưu: <?php echo $row["sp_anh_minh_hoa"] ;?></b>)</p>
		<p style="font-weight: bold;">Giá bán:</p>
		<p><input type="text" name="txtGiaBan" value="<?php echo $row['sp_gia_ban'];?>" style="width:95%"></p>
		<p style="font-weight: bold;">Số lượng:</p>
		<p><input type="text" name="txtSoLuong" value="<?php echo $row['sp_so_luong'];?>" style="width:95%"></p>
		<p style="text-align: center;"><input type="hidden" name="txtID" value="<?php echo $row['sp_id'];?>"><button type="submit">Cập Nhật</button></p>
	</form>
</body>
</html>