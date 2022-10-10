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

<?php
	// Lấy các dữ liệu được chuyển sang
	$ten_san_pham=$_POST['txtTenSanPham'];
	$mo_ta=$_POST['txtMoTa'];
	$gia_ban=$_POST['txtGiaBan'];
	$so_luong=$_POST['txtSoLuong'];

	// Đẩy FILE lên SERVER
	$noi_dat_file_anh_minh_hoa = "../img/".basename($_FILES['txtAnhMinhHoa']['name']);
	$file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
	$tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
	if (!$tai_anh_len_he_thong) {
		$anh_minh_hoa=NULL;
	} else {
		$anh_minh_hoa=$_FILES['txtAnhMinhHoa']['name'];
	}

	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$sql="
		INSERT INTO `tbl_san_pham` (`sp_id`, `sp_ten_san_pham`, `sp_anh_minh_hoa`, `sp_mo_ta`, `sp_gia_ban`, `sp_so_luong`, `sp_luot_xem`, `tk_id`, `sp_created`) VALUES (NULL, '".$ten_san_pham."', '".$anh_minh_hoa."', '".$mo_ta."', '".$gia_ban."', '".$so_luong."', '0', '1', current_timestamp())
	";
	// echo $sql; exit();

	// Thực hiện thêm mới dữ liệu
	mysqli_query($con, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<script type="text/javascript">
	window.alert("Thêm mới dữ liệu thành công!");
	window.location.href = "../admin/quan_tri_san_pham.php";
</script>