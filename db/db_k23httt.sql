-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2022 at 11:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_k23httt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `sp_id` int(11) NOT NULL,
  `sp_ten_san_pham` varchar(200) NOT NULL,
  `sp_anh_minh_hoa` varchar(200) DEFAULT NULL,
  `sp_mo_ta` varchar(500) DEFAULT NULL,
  `sp_gia_ban` int(11) DEFAULT NULL,
  `sp_so_luong` int(11) DEFAULT NULL,
  `sp_luot_xem` int(11) NOT NULL DEFAULT 0,
  `tk_id` int(11) NOT NULL,
  `sp_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`sp_id`, `sp_ten_san_pham`, `sp_anh_minh_hoa`, `sp_mo_ta`, `sp_gia_ban`, `sp_so_luong`, `sp_luot_xem`, `tk_id`, `sp_created`) VALUES
(1, 'Trà sữa Trân châu Hoàng Gia', NULL, 'Sản phẩm rất tuyệt, đem lại cho các bạn cảm giác ngon bất tận,...', 70000, 50, 0, 1, '2022-09-26 09:48:01'),
(2, 'Trà sữa 3 anh em', NULL, 'Sản phẩm rất tuyệt, đem lại cho các bạn cảm giác ngon bất tận,...', 65000, 65, 0, 1, '2022-09-26 09:48:01'),
(3, 'Trà đào', NULL, 'Sản phẩm đem lại cho các bạn cảm giác thanh mát cơ thể khi thưởng thức', 50000, 40, 0, 1, '2022-09-26 09:49:35'),
(4, 'Trà Nhài', NULL, 'Sản phẩm đem lại cho các bạn cảm giác thanh mát cơ thể khi thưởng thức', 40000, 17, 0, 1, '2022-09-26 09:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tai_khoan`
--

CREATE TABLE `tbl_tai_khoan` (
  `tk_id` int(11) NOT NULL,
  `tk_ten_tai_khoan` varchar(100) NOT NULL,
  `tk_email` varchar(100) DEFAULT NULL,
  `tk_dien_thoai` varchar(50) DEFAULT NULL,
  `tk_mat_khau` varchar(100) NOT NULL,
  `tk_ngay_sinh` date DEFAULT NULL,
  `tk_ghi_chu` text DEFAULT NULL,
  `tk_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tai_khoan`
--

INSERT INTO `tbl_tai_khoan` (`tk_id`, `tk_ten_tai_khoan`, `tk_email`, `tk_dien_thoai`, `tk_mat_khau`, `tk_ngay_sinh`, `tk_ghi_chu`, `tk_created`) VALUES
(1, 'admin', NULL, NULL, '71ca9079d08bfa85e1e803427d25205a', '2002-09-22', NULL, '2022-09-22 08:08:13'),
(2, 'huycv', NULL, NULL, '9336ebf25087d91c818ee6e9ec29f8c1', '2000-09-22', NULL, '2022-09-22 08:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `tt_id` int(11) NOT NULL,
  `tt_tieu_de` varchar(200) NOT NULL,
  `tt_mo_ta` varchar(500) NOT NULL,
  `tt_noi_dung` text NOT NULL,
  `tt_anh_minh_hoa` varchar(200) DEFAULT NULL,
  `tt_so_luot_doc` int(11) NOT NULL DEFAULT 0,
  `tk_id` int(11) NOT NULL,
  `tt_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`tt_id`, `tt_tieu_de`, `tt_mo_ta`, `tt_noi_dung`, `tt_anh_minh_hoa`, `tt_so_luot_doc`, `tk_id`, `tt_created`) VALUES
(1, 'Chứng khoán giảm gần 30 điểm phiên đầu tuần', 'VN-Index hôm nay có lúc giảm 43 điểm so với tham chiếu, vượt ngoài mọi dự đoán từ chuyên gia, nhưng cuối phiên biên độ thu hẹp còn gần 30 điểm.', 'Trước phiên giao dịch hôm nay, hầu hết công ty chứng khoán cho rằng VN-Index tuần này tiếp tục điều chỉnh khi bên bán đang nắm quyền kiểm soát thị trường. Tuy nhiên, không nhiều chuyên gia nghĩ đến kịch bản chỉ số đại diện cho sàn TP HCM giảm sâu ngay sáng đầu tuần.\r\n\r\nSau phiên khớp lệnh xác định giá mở cửa (ATO), VN-Index thủng mốc 1.190 điểm. Đà giảm kéo đến hết phiên sáng với biên độ ngày càng được nới rộng bởi áp lực xả hàng ồ ạt. Chỉ số nghỉ trưa tại 1.173,64 điểm, giảm 30 điểm so với tham chiếu, xuống mức thấp nhất trong hai tháng rưỡi.\r\n\r\nChưa dừng lại, chỉ số tiếp tục lao dốc và thủng mốc 1.160 điểm trong phiên chiều, tức mất hơn 43 điểm so với tham chiếu. Số lượng cổ phiếu giảm thời điểm đó lên đến 480 mã, gấp 19 lần lượng cổ phiếu tăng. Tuy nhiên, dòng tiền bắt đáy nhanh chóng nhập cuộc nên diễn biến này không kéo dài lâu. Một số cổ cổ phiếu trụ từ mức sàn đã thu hẹp biên độ tăng, nhờ đó VN-Index hồi phục lên 1.175,35 điểm khi đóng cửa, giảm 29 điểm so với tham chiếu.\r\n\r\nBên bán chiếm ưu thế ở tất cả các nhóm cổ phiếu, trong đó mạnh nhất là nhóm bất động sản khi có đến hàng chục mã như HDG, DXG, NLG, DXS, LDG... chạm sàn và \"trắng bên bán\". Cổ phiếu ngành dầu khí, chứng khoán và thép cũng đối mặt áp lực xả hàng gay gắt khi phần lớn đều giảm trên 5%.\r\n\r\nRổ vốn hoá lớn hôm nay có 27 mã giảm. VRE dẫn đầu về biên độ giảm điểm khi mất 6,5%, tiếp đến là CTG, SSI và KDH. Trong khi đó, GAS và VIB ngược dòng thị trường tăng 1% và 1,1%, trở thành trụ đỡ cho VN-Index.\r\n\r\nThanh khoản thị trường tăng vọt những phút cuối phiên. Sàn TP HCM ghi nhận 757 triệu cổ phiếu được sang tay, trị giá hơn 17.550 tỷ đồng, tăng 6.000 tỷ đồng so với cuối tuần trước. Đây là phiên có giá trị giao dịch cao nhất trong hai tuần qua.\r\n\r\nHPG đứng đầu về thanh khoản với 574 tỷ đồng, tiếp sau là DIG, HAG, VND. Điểm chung của 10 cổ phiếu đứng đầu về thanh khoản là cùng giảm điểm, thậm chí một số mã giảm sâu như DGC, NLG, FRT cùng mất 7%.\r\n\r\nNhà đầu tư nước ngoài nối dài chuỗi bán ròng phiên thứ tư liên tiếp khi giá trị xả hàng xấp xỉ 1.660 tỷ đồng, tập trung ở các mã giảm sâu như NLG, DXG và VNM. Ở chiều ngược lại, khối ngoại mua vào gần 1.100 tỷ đồng.', NULL, 0, 1, '2022-09-26 09:28:48'),
(2, 'Dự kiến trình phương án nghỉ Tết 7 ngày', 'Cơ quan chuyên môn chọn phương án nghỉ Tết Âm lịch từ 29 tháng chạp để trình Chính phủ, sau gần một tháng lấy ý kiến.', 'Ngày 26/9, lãnh đạo Cục An toàn lao động cho biết đã báo cáo tổng hợp góp ý thời gian nghỉ Tết Âm lịch lên Bộ Lao động Thương binh và Xã hội để trình Chính phủ, trên cơ sở đồng tình từ nhiều bộ ngành.\r\n\r\nPhương án được chọn là nghỉ 7 ngày, gồm 5 ngày chính thức và hai ngày nghỉ bù, kéo dài từ 29 tháng chạp năm Nhâm Dần đến hết mùng 5 tháng giêng năm Quý Mão (từ thứ sáu 20/1/2023 đến hết thứ năm 26/1/2023). Công chức, viên chức sẽ đi làm trở lại vào ngày thứ sáu, mùng 6 tháng giêng (27/1/2023).\r\n\r\nTheo lãnh đạo Cục, với ngày làm việc xen kẽ nghỉ Tết với cuối tuần, doanh nghiệp, các cơ quan có thể tự bố trí nghỉ bù để công chức, lao động có kỳ nghỉ kéo dài. Còn lịch nghỉ Tết vẫn sẽ được thông báo chung.\r\n\r\nThời điểm nghỉ Tết như trên có thể chưa phải là phương án cuối cùng khi Bộ Lao động Thương binh và Xã hội còn nghiên cứu, điều chỉnh trước khi trình Thủ tướng vào cuối tháng này.\r\n\r\nCuối tháng 8, Bộ Lao động Thương binh và Xã hội đưa hai phương án nghỉ Tết Nguyên đán để lấy ý kiến góp ý của 16 cơ quan, bộ ngành. Các bộ Nội vụ, Giao thông Vận tải, Giáo dục và Đào tạo, Tài nguyên Môi trường đồng tình nghỉ 7 ngày, từ 29 tháng chạp đến hết mùng 5 tháng giêng.\r\n\r\nBộ Tài chính chọn 9 ngày, nghỉ từ 30 tháng chạp đến hết mùng 8 tháng giêng. Liên đoàn Thương mại và Công nghiệp Việt Nam VCCI đồng tình 9 ngày, song kiến nghị điều chỉnh nghỉ sớm hơn. Tổng liên đoàn lao động Việt Nam kiến nghị 8 ngày, nghỉ từ 28 tháng chạp tới hết mùng 5 tháng giêng, đi làm bù thứ bảy (19 - 26/1/2023, làm bù 28/1/2023).\r\n\r\nPhương án nghỉ Tết Âm lịch năm nay gây nhiều băn khoăn. Chuyên gia cho rằng cơ quan chuyên môn nên sắp xếp nghỉ sớm trước Tết để giảm tải giao thông, tạo điều kiện cho lao động di cư về quê sớm. Cả hai phương án mà Bộ Lao động Thương binh và Xã hội đưa ra đều có thời gian nghỉ trước Tết ngắn, rơi vào 29 và 30 tháng chạp.\r\n\r\nVnExpress khảo sát trực tuyến gần 12.200 độc giả từ ngày 13/9, có 5% chọn phương án nghỉ 7 ngày; 40% muốn nghỉ 8 ngày và 55% chọn nghỉ 9 ngày.', NULL, 0, 2, '2022-09-26 09:28:48'),
(3, '4 vùng Ukraine công bố tỷ lệ cử tri bỏ phiếu sáp nhập Nga ', 'Chính quyền thân Nga ở 4 vùng tại Ukraine tuyên bố ghi nhận hơn 50% cử tri đủ điều kiện đã đi bỏ phiếu trưng cầu dân ý sáp nhập Nga.', 'Chính quyền Cộng hòa Nhân dân Lugansk tự xưng (LPR) hôm 25/9 cho biết 76% cử tri đủ điều kiện trong khu vực đã bỏ phiếu trưng cầu dân ý sáp nhập Nga. Cuộc trưng cầu dân ý ở Cộng hòa Nhân dân Donetsk tự xưng (DPR) cũng đang diễn ra với tốc độ tương tự, khi khoảng 77% cử tri đủ điều kiện đã tham gia bỏ phiếu.\r\n\r\nGalina Katyshenko, lãnh đạo ủy ban bầu cử vùng Zaporizhia, cho biết số cử tri đã bỏ phiếu ở khu vực này là 51,55%. Trong 4 khu vực tổ chức trưng cầu dân ý ở Ukraine, Kherson là nơi duy nhất tỷ lệ cử tri đi bầu chưa vượt quá 50%, với khoảng 49% cử tri đã tham gia bỏ phiếu.\r\n\r\nCác cuộc bỏ phiếu trưng cầu dân ý về sáp nhập Nga tại Lugansk, Donetsk, Zaporizhia và Kherson sẽ được tổ chức tới ngày 27/9.\r\n\r\nHoạt động bỏ phiếu được chia làm hai giai đoạn. Trong 4 ngày đầu, quan chức bầu cử đến gõ cửa từng nhà hoặc tổ chức ở khu dân cư để người dân bỏ phiếu nhằm \"đảm bảo an ninh\", theo giới chức thân Nga. Ngày 27/9, người dân bỏ phiếu trực tiếp tại các điểm tiếp nhận.\r\n\r\nỦy ban Bầu cử Trung ương Nga (CEC) hôm 25/9 cho biết hơn 100 quan sát viên quốc tế từ 40 nước tham gia giám sát các cuộc trưng cầu dân ý tại 4 vùng lãnh thổ ở Ukraine.\r\n\r\nChính phủ Ukraine cùng các nước phương Tây chỉ trích đây là những cuộc trưng cầu dân ý dàn dựng và khẳng định sẽ không công nhận kết quả. Trong khi đó, Ngoại trưởng Nga Sergey Lavrov nói việc sáp nhập vào Nga là vấn đề do người dân tại các tỉnh của Ukraine tự quyết.\r\n\r\nHơn 8 năm trước, chính quyền bán đảo Crimea ngày 16/3/2014 tổ chức trưng cầu dân ý và sau đó thông báo 97% cử tri đồng ý ly khai khỏi Ukraine để sáp nhập vào Nga. Thỏa thuận sáp nhập được ký kết với Nga vào ngày 18/3/2014, ba ngày sau đó hạ viện Nga thông qua đạo luật hiện thực hóa thỏa thuận này.', NULL, 0, 1, '2022-09-26 09:32:43'),
(4, 'Nổ súng tại văn phòng tuyển quân Nga ', 'Một thanh niên nổ súng ở văn phòng tuyển quân tại tỉnh Irkutsk của Nga, khiến người đứng đầu bộ phận tuyển mộ bị thương nặng.', 'Igor Kobzev, tỉnh trưởng tỉnh Irkutsk ở miền nam Nga, cho biết nghi phạm bị bắt sau vụ nổ súng tại văn phòng tuyển quân ở thị trấn Ust-Ilimsk và cam kết \"trừng trị thích đáng\" người này. Ông thêm rằng người đứng đầu văn phòng tuyển quân bị trúng đạn và đang được điều trị tại bệnh viện trong tình trạng nguy kịch.\r\n\r\n\"Thật xấu hổ khi điều này xảy ra vào thời điểm đáng lẽ chúng ta phải đoàn kết\", Tỉnh trưởng Kobzev viết trên Telegram. \"Chúng ta không được đấu đá với nhau, mà phải cùng chống lại những mối đe dọa thực sự. Tôi đã chỉ thị tăng cường các biện pháp an ninh và đề nghị mọi người giữ bình tĩnh\".\r\n\r\nHình ảnh được chia sẻ trên mạng xã hội cho thấy một người tự xưng là Ruslan Zinin, 25 tuổi, nổ súng về phía sĩ quan tuyển quân tại văn phòng, trong lúc những người khác ngồi đợi bên dưới. Sau tiếng súng, đám đông hoảng loạn tháo chạy khỏi văn phòng tuyển quân.\r\n\r\nGiới chức tỉnh Irkutsk cho biết nhóm điều tra đã có mặt tại hiện trường, nghi phạm đang bị thẩm vấn để xác định động cơ nổ súng.\r\n\r\nCơ quan báo chí của Vệ binh Quốc gia Nga tại tỉnh Irkutsk thông báo nghi phạm tìm cách lẩn trốn khi lính vệ binh được triển khai tới hiện trường. \"Nghi phạm không phải chủ sở hữu hợp pháp của khẩu súng được thu giữ tại văn phòng tuyển quân\", cơ quan này cho hay.\r\n\r\nMột số văn phòng tuyển quân tại Nga đã bị tấn công kể từ khi Tổng thống Vladimir Putin phát lệnh \"động viên một phần\" hôm 21/9, triệu tập lực lượng dự bị khoảng 300.000 người chủ yếu là quân nhân giải ngũ, có chuyên môn và kinh nghiệm quân sự. Đây là lần đầu tiên Nga ban bố lệnh động viên quân kể từ sau Thế chiến II.\r\n\r\nBộ Quốc phòng Nga hôm 23/9 thông báo các đối tượng được miễn trừ lệnh động viên, trong đó có nhân sự công nghệ, ngân hàng và nhà báo. Cơ quan này cũng lưu ý các doanh nghiệp lập danh sách nhân viên đáp ứng các tiêu chí.\r\n\r\nNhiều người Nga đã tìm cách rời khỏi đất nước sau khi chính phủ phát lệnh động viên quân. Theo Reuters, khoảng 7.000 người đã vượt biên từ Nga sang Phần Lan hôm 22/9, khoảng 6.000 người trong số họ là công dân Nga, tăng 107% so với một tuần trước đó.\r\n\r\nNhiều người đang bày tỏ tức giận khi các sĩ quan phụ trách tuyển binh Nga gửi giấy gọi nhập ngũ sai đối tượng cùng hàng loạt vấn đề khác. Reuters nhận định lệnh động viên ở Nga đang chịu chỉ trích từ cả những người ủng hộ Điện Kremlin, điều gần như chưa xảy ra tại nước này kể từ khi Moskva thông báo mở chiến dịch quân sự ở Ukraine.\r\n', NULL, 0, 1, '2022-09-26 09:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `tk_lien_he`
--

CREATE TABLE `tk_lien_he` (
  `lh_id` int(11) NOT NULL,
  `lh_tieu_de` varchar(200) NOT NULL,
  `lh_noi_dung_lien_he` text NOT NULL,
  `lh_nguoi_lien_he` text NOT NULL,
  `lh_dien_thoai` int(50) DEFAULT NULL,
  `lh_email` varchar(100) DEFAULT NULL,
  `lh_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tk_lien_he`
--

INSERT INTO `tk_lien_he` (`lh_id`, `lh_tieu_de`, `lh_noi_dung_lien_he`, `lh_nguoi_lien_he`, `lh_dien_thoai`, `lh_email`, `lh_created`) VALUES
(1, 'Tôi muốn hỏi làm sao để xin tuyển dụng tại công ty', 'Tôi có ước ao cháy bỏng được làm việc tại quý công ty. Nếu công ty có nhu cầu, hãy cho tôi 1 cơ hội.', 'Nguyễn Văn Tèo', 989999999, 'teonv@chinhphu.vn', '2022-09-26 09:59:24'),
(2, 'Hẹn gặp để trao đổi hợp tác', 'Tôi muốn xin lịch làm việc của Ban giám đốc công ty để có thể hẹn trao đổi hợp tác trong thời gian tới.', 'Nguyễn Thị Nở', 988888888, 'nont@chinhphu.vn', '2022-09-26 09:59:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `tbl_tai_khoan`
--
ALTER TABLE `tbl_tai_khoan`
  ADD PRIMARY KEY (`tk_id`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`tt_id`);

--
-- Indexes for table `tk_lien_he`
--
ALTER TABLE `tk_lien_he`
  ADD PRIMARY KEY (`lh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tai_khoan`
--
ALTER TABLE `tbl_tai_khoan`
  MODIFY `tk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tk_lien_he`
--
ALTER TABLE `tk_lien_he`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
