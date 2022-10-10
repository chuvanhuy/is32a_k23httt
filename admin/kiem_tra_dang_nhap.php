<?php
	// Lấy các dữ liệu được chuyển sang
	$username=$_POST['txtUserName'];
	$password=md5($_POST['txtPassword']);

	// Kiểm tra xem Username & Password có khớp với thông tin lưu trong CSDL hay không?
	$sql="
		SELECT *
		FROM tbl_tai_khoan
		WHERE tk_ten_tai_khoan='".$username."' AND tk_mat_khau='".$password."'
	";
	// echo $sql; exit();

	
	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$tai_khoan = mysqli_query($con, $sql)->num_rows;

	if ($tai_khoan==1) {
		session_start();
		$_SESSION['da_dang_nhap']=1;
;?>
	<script type="text/javascript">
		window.alert("Bạn đã đăng nhập thành công!");
		window.location.href = "../admin/quan_tri_he_thong.php";
	</script>
<?php
	} else {
;?>
	<script type="text/javascript">
		window.alert("Bạn chưa nhập đúng thông tin! Vui lòng nhập lại!");
		window.location.href = "../admin/dang_nhap.php";
	</script>
<?php
	}
;?>