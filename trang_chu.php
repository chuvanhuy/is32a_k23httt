<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đây là Website đầu tiên của tôi!!!</title>
	<style type="text/css">
		p {
			font-family: tahoma;
			color: green;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/k23httt.js"></script>
</head>
<body>
	<?php require('menu.php');?>

	<?php 
		$trieu_tap="Triệu tập sinh viên K23HTTTQL tham dự sự kiện cuộc thi từ 18:00 tối nay 29/09/2022 tại Hội trường lớn";
		echo $trieu_tap;
		// print_r($trieu_tap);
		// var_dump($trieu_tap); exit();
		// echo phpinfo();

		$a="Hài lòng";
		$b="Bình thường";
		$c="Không hài lòng";

		$str="";
		$j=0;
		if ($j==0) {
			$str=$str.$a;
			$j=1;
		} else {
			$str=$str.", ".$b;
		}
		if ($j==0) {
			$str=$str.$a;
			$j=1;
		} else {
			$str=$str.", ".$b;
		}
		if ($j==0) {
			$str=$str.$a;
			$j=1;
		} else {
			$str=$str.", ".$c;
		}
		echo $str;

		$i=1;
		if (isset($i)) {
			echo "Biến $i đã được gán giá trị";
		} else {
			echo "Biến $i chưa được gán giá trị";
		}

	;?>

	<br>

	<h3 style="text-align: center; text-transform: uppercase; color: red;">Giá xăng giữ nguyên, dầu tăng</h3>

	<p style="text-align: right;"><i>Ngày đăng: 22/08/2022</i></p>

	<p style="font-family: tahoma;"><b>Sau 5 kỳ giảm liên tiếp, giá xăng hôm nay không thay đổi trong khi giá mỗi lít dầu tăng 730 -850 đồng (trừ dầu mazut).</b></p>

	<p style="text-align: center;"><img src="./img/xang-dau.jpg" style="width: 600px; height: auto;"></p>

	<p>Sau điều chỉnh của liên Bộ Công Thương - Tài chính, từ 15h hôm nay, mỗi lít xăng RON 95-III và E5 RON 92 vẫn ổn định ở mức giá như cách đây 10 ngày, lần lượt là 24.660 đồng và 23.720 đồng một lít. Như vậy, giá xăng trong nước đứt mạch đi xuống sau 5 kỳ giảm liên tiếp trong tháng 7.</p>

	<p>Trong khi đó, dầu diesel tăng 850 đồng một lít, lên mức 23.750 đồng. Mỗi lít dầu hoả cũng đắt thêm 730 đồng, có giá mới là 24.050 đồng. Riêng dầu mazut giữ nguyên giá bán, 16.540 đồng một kg như cách đây 10 ngày.</p>

	<p style="text-align: right;"><b><i>Tác giả: Nguyễn Văn Tèo</i></b></p>

	<hr>
	<p id="phong_cach_thong_bao">Tin tức liên quan</p>
	<p class="phong_cach_tieu_de">Tin số 1</p>
	<p class="phong_cach_tieu_de">Tin số 2</p>
	<p class="phong_cach_tieu_de">Tin số 3</p>
	<p class="phong_cach_tieu_de">Tin số 4</p>
	<p class="phong_cach_tieu_de">Tin số 5</p>
	<button type="button" onclick="window.alert('Xin chào')">Thử nghiệm JavaScript</button>

	<script type="text/javascript">
		window.alert('Xin chào, chúc bạn buổi chiều vui vẻ!');
	</script>
</body>
</html>