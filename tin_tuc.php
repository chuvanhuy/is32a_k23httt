<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tin tức</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php require('menu.php');?>
	
	<h2>Trang tin tức</h2>

	<?php 
		// Kết nối đến CSDL
		require('config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM tbl_tin_tuc ORDER BY tt_id DESC";

		// Thực hiện truy vấn đến bảng dữ liệu
		$tin_tuc=mysqli_query($con, $sql);

		// In kết quả truy vấn ra màn hình
		$i=1;
		while ($row = mysqli_fetch_array($tin_tuc)) {
			echo $i.". ".$row["tt_tieu_de"]."<br>"; 
			echo "Mô tả: ".$row["tt_mo_ta"]."<br>"; 
			echo "Số người đọc: ".$row["tt_so_luot_doc"]."<br>"; 
			echo "Ngày tạo: ".$row["tt_created"]."<br>"; 
			echo "<hr>";
			$i++;
		}
	;?>

</body>
</html>