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
	<title>Sửa tin tức</title>
</head>

<body>
	<h1>TRANG SỬA TIN TỨC</h1>
	<?php
		$id=$_GET["id"];

		// Kết nối đến CSDL
		require('../config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM tbl_tin_tuc WHERE tt_id=".$id;

		// Thực hiện truy vấn
		$tin_tuc=mysqli_query($con, $sql);
		$row = mysqli_fetch_array($tin_tuc);
	;?>

	<form action="../admin/sua_tin_tuc_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p style="font-weight: bold;">Tiêu đề bài viết:</p>
		<p><input type="text" name="txtTieuDe" value="<?php echo $row["tt_tieu_de"] ;?>" style="width:95%"></p>
		<p style="font-weight: bold;">Mô tả bài viết:</p>
		<p><textarea name="txtMoTa" style="width:95%"><?php echo $row["tt_mo_ta"] ;?></textarea></p>
		<p style="font-weight: bold;">Ảnh minh hoạ:</p>
		<p><input type="file" name="txtAnhMinhHoa"> (<b>Ảnh đã lưu: <?php echo $row["tt_anh_minh_hoa"] ;?></b>)</p>
		<p style="font-weight: bold;">Nội dung:</p>
		<p><textarea name="txtNoiDung" style="width:95%"><?php echo $row["tt_noi_dung"] ;?></textarea></p>
		<p style="text-align: center;"><input type="hidden" name="txtID" value="<?php echo $row["tt_id"] ;?>"><button type="submit">Cập nhật</button></p>
	</form>
</body>
</html>