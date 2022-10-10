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
	<title>Quản trị sản phẩm</title>
</head> 

<body>
	<h3>Tất cả sản phẩm</h3>
	<?php 
		// Kết nối đến CSDL
		require('../config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM tbl_san_pham ORDER BY sp_id DESC";

		// Thực hiện truy vấn đến bảng dữ liệu
		$san_pham=mysqli_query($con, $sql);
	;?>
	<p style="text-align: right;"><a href="../admin/them_moi_san_pham.php"><img src="../img/add.png" style="width: 30px; height: auto;"></a></p>
	<table>
		<tr>
			<td style="width: 50px; text-align: center; font-weight: bold;">STT</td>
			<td style="width: 600px; text-align: center; font-weight: bold;">Tên sản phẩm</td>
			<td style="width: 90px; text-align: center; font-weight: bold;">Số lượng sản phẩm</td>
			<td style="width: 90px; text-align: center; font-weight: bold;">Ngày đăng</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Sửa</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Xoá</td>
		</tr>
		<?php 
		// In kết quả truy vấn ra màn hình
		$i=0;
		while ($row = mysqli_fetch_array($san_pham)) {
			$i++;
		;?>
		<tr>
			<td style="text-align: center;"><?php echo $i;?></td>
			<td><?php echo $row["sp_ten_san_pham"];?></td>
			<td style="text-align: center;"><?php echo $row["sp_so_luong"];?></td>
			<td style="text-align: center;"><?php echo $row["sp_created"];?></td>
			<td style="text-align: center;"><a href="../admin/sua_san_pham.php?id=<?php echo $row["sp_id"];?>"><img src="../img/edit.png" style="width: 30px; height: auto;"></a></td>
			<td style="text-align: center;"><a href="../admin/xoa_san_pham.php?id=<?php echo $row["sp_id"];?>"><img src="../img/delete.png" style="width: 30px; height: auto;"></a></td>
		</tr>
		<?php 
		}
		;?>
	</table>
</body>
</html>