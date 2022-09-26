<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kiểm tra đăng nhập</title>
	<script type="text/javascript">
		// Khai báo một mảng
		var xe_hoi = ["BMW", "Toyota", "Mazda", "Vinfast", "Kia"];

		// Lấy ra 1 phần tử mong muốn trong mảng (cụ thể xe Vinfast)
		window.alert(xe_hoi[3]);

		// Khai báo một đối tượng xe hơi; có các thuộc tính màu sắc, cân nặng, hãng xe, dòng xe, giá bán
		var xe = {hang_xe:"Toyota", dong_xe:"Vios 2022 G", gia_ban:"620.000.000 VND", mau_sac:"Trắng Ngọc Trai", can_nang:"950 Kg"};

		// Truy cập tới 1 thuộc tính nào đó (Dòng xe + Màu Sắc) trong đối tượng "xe"
		window.alert("Xe của bạn là: "+xe.hang_xe+" màu "+xe.mau_sac);
	</script>
</head>
<body>
	<h1>Ở ĐÂY, TÔI SẼ CHECK XEM USERNAME & PASSWORD CỦA BẠN NHẬP CÓ CHÍNH XÁC KHÔNG?</h1>
	<h1>- NẾU CHÍNH XÁC --> CHO TRUY CẬP TRANG QUẢN TRỊ</h1>
	<h1>- NẾU KHÔNG CHÍNH XÁC --> QUAY VỀ TRANG ĐĂNG NHẬP</h1>
</body>
</html>