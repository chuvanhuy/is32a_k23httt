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

	<div id="NoiDungBoSung">...</div>

	<script type="text/javascript">
		// Dòng mã lệnh in dữ liệu ra màn hình
		document.write("THỬ NGHIỆM VUI VẺ");

		// Dòng mã lệnh in dữ liệu theo kiểu ẩn (hiển thị ở TAB console)
		console.log("Muốn làm GAME để chinh phục bạn gái");

		// Dòng mã lệnh để khai báo biến a & biến ty_gia
		var a=1000;
		var ty_gia=60000;

		// Dòng mã lệnh in dữ liệu theo kiểu ẩn (hiển thị ở TAB console)
		console.log("Chúng ta đang có số PI = "+a);
		console.log("Quy tiền VNĐ = "+a*ty_gia);
	</script>

	<button onclick="document.getElementById('NoiDungBoSung').innerHTML='TỚ THÍCH CẬU'">TEST THỬ</button>

</body>
</html>