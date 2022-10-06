<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php require('menu.php');?>
	
	<h2>Trang sản phẩm</h2>

	<?php 
		// Kết nối đến CSDL
		require('config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM tbl_san_pham ORDER BY sp_id DESC";

		// Thực hiện truy vấn đến bảng dữ liệu
		$san_pham=mysqli_query($con, $sql);

		// In kết quả truy vấn ra màn hình
		$i=1;
		while ($row = mysqli_fetch_array($san_pham)) {
			echo $i.". ".$row["sp_ten_san_pham"]."<br>"; 
			echo "<img src='./img/".$row["sp_anh_minh_hoa"]."'><br>"; 
			echo "Mô tả: ".$row["sp_mo_ta"]."<br>"; 
			echo "Số lượt xem: ".$row["sp_luot_xem"]."<br>"; 
			echo "Ngày tạo: ".$row["sp_created"]."<br>"; 
			echo "<hr>";
			$i++;
		}
	;?>

</body>
</html>