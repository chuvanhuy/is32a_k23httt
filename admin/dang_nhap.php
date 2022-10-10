<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập hệ thống</title>

	<script type="text/javascript">
		function check_du_lieu() {
			// Lấy dữ liệu hiện có trong ô Username & Password
			var	ten_dang_nhap = document.getElementById("txtUserName").value;
			var mat_khau = document.getElementById("txtPassword").value;

			if (ten_dang_nhap=="") {
				window.alert("Bạn chưa nhập Tên đăng nhập");
				return false;
			}

			if (mat_khau=="") {
				window.alert("Bạn chưa nhập Mật khẩu");
				return false;
			}

			return true;
		}
	</script>
</head>

<body>
	<h1>ĐĂNG NHẬP HỆ THỐNG</h1>
	
	<form action="../admin/kiem_tra_dang_nhap.php" method="POST" onsubmit="return check_du_lieu()">
	<table>
		<tr>
			<td style="width: 130px;">Tên đăng nhập</td>
			<td><input type="text" name="txtUserName" id="txtUserName" value="" style="width: 400px;"></td>
		</tr>
		<tr>
			<td style="width: 130px;">Mật khẩu</td>
			<td><input type="password" name="txtPassword" id="txtPassword" value="" style="width: 400px;"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" name="sbtLogin" value="Đăng nhập"></td>
		</tr>
	</table>
	</form>
</body>
</html>