<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm mới tin tức</title>
</head>

<body>
	<h1>TRANG THÊM MỚI TIN TỨC</h1>

	<form action="../admin/them_moi_tin_tuc_thuc_hien.php" method="POST" enctype="multipart/form-data">
		<p style="font-weight: bold;">Tiêu đề bài viết:</p>
		<p><input type="text" name="txtTieuDe" value="" style="width:95%"></p>
		<p style="font-weight: bold;">Mô tả bài viết:</p>
		<p><textarea name="txtMoTa" style="width:95%"></textarea></p>
		<p style="font-weight: bold;">Ảnh minh hoạ:</p>
		<p><input type="file" name="txtAnhMinhHoa"></p>
		<p style="font-weight: bold;">Nội dung:</p>
		<p><textarea name="txtNoiDung" style="width:95%"></textarea></p>
		<p style="text-align: center;"><button type="submit">Thêm mới</button></p>
	</form>
</body>
</html>