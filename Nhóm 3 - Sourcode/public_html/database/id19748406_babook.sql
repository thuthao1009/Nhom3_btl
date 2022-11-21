-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 28, 2022 lúc 01:39 PM
-- Phiên bản máy phục vụ: 10.5.16-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id19748406_babook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_hoten` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_hoten`, `email`, `sdt`, `password`, `created_at`) VALUES
(1, 'Lê Văn A', 'levana@gmail.com', '012345678', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-08 15:08:59'),
(2, 'Lê Thương', 't@gmai.com', '', '202cb962ac59075b964b07152d234b70', '2022-10-26 03:30:00'),
(3, 'Lê Thương', 'th@gmai.com', '', '202cb962ac59075b964b07152d234b70', '2022-10-26 03:32:18'),
(4, '123', '12345@gmail.com', '', '202cb962ac59075b964b07152d234b70', '2022-10-26 14:37:13'),
(5, 'BAbook', 'babook@gmail.com', '', '202cb962ac59075b964b07152d234b70', '2022-10-26 19:05:02'),
(6, 'Lê Thương', 'lethuong1702.hvnh@gmail.com', '', '202cb962ac59075b964b07152d234b70', '2022-10-27 09:08:20'),
(7, 'tran van anh', 'anh@gmail.com', '12345567', '202cb962ac59075b964b07152d234b70', '2022-10-27 14:46:16'),
(8, 'hoang dat', 'hoangdat@gmail.com', '1234567', '202cb962ac59075b964b07152d234b70', '2022-10-27 15:07:31'),
(9, 'Duyên', 'hduyen@gmail.com', '1', '202cb962ac59075b964b07152d234b70', '2022-10-28 10:14:54'),
(10, 'Lê Thương', 'lethuong@gmai.com', '012345678', '202cb962ac59075b964b07152d234b70', '2022-10-28 11:23:41'),
(11, 'Lê Thương', 'thuong@gmail.com', '012345678', '202cb962ac59075b964b07152d234b70', '2022-10-28 11:24:35'),
(12, 'hoang dat', 'hoangdat@gmail.com', '1234567', '202cb962ac59075b964b07152d234b70', '2022-10-28 11:55:39'),
(13, 'Nhóm 3', 'nhom3@gmail.com', '', '202cb962ac59075b964b07152d234b70', '2022-10-28 13:12:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `dm_id` int(11) NOT NULL,
  `dm_ten_danh_muc` varchar(200) NOT NULL,
  `dm_anh_minh_hoa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`dm_id`, `dm_ten_danh_muc`, `dm_anh_minh_hoa`) VALUES
(1, 'Tài liệu học tập', 'notebook.png'),
(11, 'Giáo trình', 'book.png'),
(13, 'Sách bài tập', 'homework.png'),
(14, 'Slide', 'file.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_id` int(11) NOT NULL,
  `user_id_m` int(11) NOT NULL,
  `user_id_b` int(11) NOT NULL,
  `hd_ghi_chu` varchar(500) DEFAULT NULL,
  `hd_ngay_dat_hang` timestamp NOT NULL DEFAULT current_timestamp(),
  `tong_tien` int(11) NOT NULL,
  `hd_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`hd_id`, `user_id_m`, `user_id_b`, `hd_ghi_chu`, `hd_ngay_dat_hang`, `tong_tien`, `hd_status`) VALUES
(18, 42, 29, '', '2022-10-28 13:09:00', 20000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `hd_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `gia` int(11) DEFAULT NULL,
  `cthd_soluong` int(11) NOT NULL,
  `cthd_tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `lh_id` int(11) NOT NULL,
  `lh_hoten` varchar(200) NOT NULL,
  `lh_email` varchar(100) NOT NULL,
  `lh_tieude` varchar(300) NOT NULL,
  `lh_noidung` text NOT NULL,
  `lh_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `lh_trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`lh_id`, `lh_hoten`, `lh_email`, `lh_tieude`, `lh_noidung`, `lh_created_at`, `lh_trang_thai`) VALUES
(1, 'Lê Văn D', 'levand@gmail.com', 'Tôi muốn trả hàng', 'Hàng không đúng hình ảnh', '2022-10-08 16:52:10', 1),
(2, 'le van a', 'levana@gmail.com', 'trả sách', 'trả sách lần 3', '2022-10-19 15:53:38', 1),
(3, 'nguyen van a', 'a@gmail.com', 'd', 'd', '2022-10-19 15:56:07', 1),
(4, 'họtên', 'email', 'tiêuđề', 'nộidung', '2022-10-26 15:44:29', 1),
(5, 'Hoàng Thảo', 'thuthao021009@gmail.com', '123', '123', '2022-10-26 15:48:42', 0),
(6, 'Hoàng Thảo', 'thuthao021009@gmail.com', '123', '123', '2022-10-26 15:49:04', 0),
(7, 'BAbookG3', 'webba.web@gmail.com', '123', '12345', '2022-10-26 19:01:31', 1),
(8, '', '', '', '', '2022-10-27 13:57:26', 0),
(9, '', '', '', '', '2022-10-27 13:57:31', 0),
(10, 'hoang dat', 'hoangdatq@gmail.com', 'mua sách bài tập', 'tôi cần mua sách bài tập', '2022-10-27 15:05:50', 0),
(11, 'Hoàng Văn Đạt', 'hoangdatq@gmail.com', 'mua sách tiếng anh 3', 'tôi cần gấp giáo trình tiếng anh 3', '2022-10-28 13:10:07', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(11) NOT NULL,
  `dm_id` int(11) NOT NULL,
  `tl_id` int(11) NOT NULL,
  `sp_tensp` varchar(250) NOT NULL,
  `sp_anh_minh_hoa` varchar(500) DEFAULT NULL,
  `sp_gia` int(11) NOT NULL,
  `sp_mo_ta` text DEFAULT NULL,
  `sp_tinh_trang` varchar(100) DEFAULT NULL,
  `sp_namxb` int(11) DEFAULT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `so_luot_xem` int(11) DEFAULT NULL,
  `user_id_b` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `dm_id`, `tl_id`, `sp_tensp`, `sp_anh_minh_hoa`, `sp_gia`, `sp_mo_ta`, `sp_tinh_trang`, `sp_namxb`, `sp_soluong`, `so_luot_xem`, `user_id_b`, `created_at`) VALUES
(39, 11, 10, 'Giáo trình tài chính quốc tế', '313383841_4064962333729715_8176343599256623674_n.jpg', 30000, 'Giáo trình tài chính quốc tế', 'Đã sử dụng', 2021, 2, 0, 40, '2022-10-28 12:45:24'),
(40, 11, 10, 'Giáo trình Tài chính doanh nghiệp', '313359485_4064962287063053_5324094840806069065_n.jpg', 30000, 'Giáo trình Tài chính doanh nghiệp năm 2022', 'Đã sử dụng', 2022, 2, 2, 40, '2022-10-28 12:46:47'),
(41, 11, 3, 'Giáo trình phân tích và đầu tư chứng khoán', '5f9c9733c5532d9795e3e8af827a7f21.jpg', 40000, 'Giáo trình phân tích và đầu tư chứng khoán năm 2021', 'Đã sử dụng', 2021, 1, 1, 40, '2022-10-28 12:47:40'),
(42, 1, 4, 'Tài liệu học tập tin học đại cương', '302246749_3414110438826520_3455521228163044733_n.jpg', 15000, 'Tài liệu học tập tin học đại cương năm ngoái', 'Đã sử dụng', 2021, 1, 3, 40, '2022-10-28 12:52:08'),
(43, 1, 4, 'Tài liệu học tập nhập môn HTTT', '304770161_153970257311767_5356684024386384139_n.jpg', 20000, 'môn HTTT', 'Đã sử dụng', 2021, 1, 4, 40, '2022-10-28 12:53:13'),
(46, 1, 1, 'Văn bản quy phạm PLDC', 'c57c48d6a18767d93e96.jpg', 30000, '', 'Cũ', 2019, 2, 2, 41, '2022-10-28 13:01:20'),
(47, 13, 1, 'Bài tập PLDC', '8c0d2f31cd600b3e5271.jpg', 20000, '', 'Mới', 2021, 2, 2, 41, '2022-10-28 13:02:25'),
(48, 1, 1, 'Giáo trình PLDC', '94c03bd8c48902d75b98.jpg', 20000, '', 'Cũ', 2019, 1, 0, 41, '2022-10-28 13:04:12'),
(49, 13, 3, 'Bài tập toán kinh tế 1', '301137496_608430360828084_7463697203432505560_n.jpg', 25000, '2 quyển bài tập toán kinh tế 1', 'Đã sử dụng', 2021, 2, 0, 40, '2022-10-28 13:04:18'),
(50, 14, 11, 'Slide MARKETING', 'b1b75c3848688e36d779.jpg', 13000, '', 'Cũ', 2020, 1, 0, 41, '2022-10-28 13:05:28'),
(51, 1, 9, 'Tiếng anh 1', '300852351_1852419381777230_5041722876675784681_n.jpg', 20000, '3 cuốn Tiếng anh 1', 'Đã sử dụng', 2021, 1, 0, 40, '2022-10-28 13:06:01'),
(52, 13, 9, 'Anh II', '299658692_600103138356848_6663886994641489787_n.jpg', 25000, '', 'Mới', 2020, 1, 0, 41, '2022-10-28 13:09:36'),
(53, 13, 3, 'Bài tập kinh tế vi mô', '300566993_1852419051777263_4145789981992584817_n.jpg', 0, 'mua giáo trình tặng bài tập', 'Đã sử dụng', 2022, 1, 2, 40, '2022-10-28 13:10:33'),
(54, 13, 2, 'BT Lịch sử Đảng', '302275790_3414110415493189_6922267714180476869_n.jpg', 10000, '', 'Cũ', 2021, 1, 0, 41, '2022-10-28 13:11:18'),
(55, 1, 3, 'Kế toán tài chính 2', '296380103_1750779768607629_5618969401865949231_n.jpg', 40000, '', 'Mới', 2022, 1, 0, 41, '2022-10-28 13:13:01'),
(56, 1, 3, 'Kiếm toán căn bản', '296377311_1750779845274288_3023930472990648703_n.jpg', 15000, '', 'Cũ', 2021, 1, 0, 41, '2022-10-28 13:13:58'),
(57, 13, 9, 'Anh III', '296677241_1750780611940878_2693403808100211292_n.jpg', 15000, '', 'Cũ', 2021, 1, 0, 41, '2022-10-28 13:14:56'),
(58, 1, 3, '', '313297195_4064962323729716_4339981021353475545_n.jpg', 20000, 'mới 90%', 'mới ', 2021, 1, 1, 29, '2022-10-28 13:15:59'),
(59, 11, 3, 'Kinh tế lượng', '311635257_1829930490689546_2076242455902447824_n.jpg', 30000, '', 'Cũ', 2019, 1, 0, 41, '2022-10-28 13:16:32'),
(60, 1, 3, 'Kế toán tài chính 1', '279590591_163558546082537_1201134505025960943_n.jpg', 20000, '', 'Cũ', 2021, 1, 0, 41, '2022-10-28 13:18:46'),
(61, 11, 12, 'Giáo trình chủ nghĩa xã hội khoa học', '308489097_1125055615091491_8793356966703742307_n.jpg', 20000, 'mới 90%', 'mới', 2021, 1, 1, 29, '2022-10-28 13:19:56'),
(62, 11, 10, 'Tài chính doanh nghiệp', '312812728_1436103786880691_3011706330963244599_n (1).jpg', 25000, '', 'Đã ua sử dụng', 2021, 1, 0, 29, '2022-10-28 13:38:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `tl_id` int(11) NOT NULL,
  `tl_ten_tl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`tl_id`, `tl_ten_tl`) VALUES
(1, 'Môn pháp luật đại cương'),
(2, 'Môn tư tưởng Hồ Chí Minh'),
(3, 'Kinh tế'),
(4, 'Công nghệ'),
(9, 'Tiếng Anh'),
(10, 'Tài chính doanh nghiệp'),
(11, 'Marketing'),
(12, 'Chủ nghĩa xã hội khoa học'),
(13, 'Triết học Mác - Lênin'),
(14, 'Tài chính'),
(15, 'Toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thumucanh`
--

CREATE TABLE `thumucanh` (
  `tma_id` int(11) NOT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `anhminhhoa` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thumucanh`
--

INSERT INTO `thumucanh` (`tma_id`, `sp_id`, `anhminhhoa`) VALUES
(15, 39, '313383841_4064962333729715_8176343599256623674_n.jpg'),
(16, 40, '313359485_4064962287063053_5324094840806069065_n.jpg'),
(17, 41, 'ee9d07d1868747391273a4ec8350bcd2.jpg'),
(18, 41, '5f9c9733c5532d9795e3e8af827a7f21.jpg'),
(19, 41, '047d78a81509c31f37cb955465b77f93.jpg_720x720q80.jpg_.webp'),
(20, 42, '302246749_3414110438826520_3455521228163044733_n.jpg'),
(21, 43, '304770161_153970257311767_5356684024386384139_n.jpg'),
(25, 46, 'c57c48d6a18767d93e96.jpg'),
(26, 47, '8c0d2f31cd600b3e5271.jpg'),
(27, 48, '94c03bd8c48902d75b98.jpg'),
(28, 49, '301137496_608430360828084_7463697203432505560_n.jpg'),
(29, 49, '312736597_1466758180496341_6054678567608870176_n.jpg'),
(30, 49, '312414545_806195500632991_6302960082856342831_n.jpg'),
(31, 50, 'b1b75c3848688e36d779.jpg'),
(32, 51, '300852351_1852419381777230_5041722876675784681_n.jpg'),
(34, 52, '299658692_600103138356848_6663886994641489787_n.jpg'),
(35, 53, '300566993_1852419051777263_4145789981992584817_n.jpg'),
(36, 54, '302275790_3414110415493189_6922267714180476869_n.jpg'),
(37, 55, '296380103_1750779768607629_5618969401865949231_n.jpg'),
(38, 56, '296377311_1750779845274288_3023930472990648703_n.jpg'),
(39, 57, '296677241_1750780611940878_2693403808100211292_n.jpg'),
(40, 58, ''),
(41, 59, '311635257_1829930490689546_2076242455902447824_n.jpg'),
(42, 60, '279590591_163558546082537_1201134505025960943_n.jpg'),
(43, 61, '308489097_1125055615091491_8793356966703742307_n.jpg'),
(46, 62, '312812728_1436103786880691_3011706330963244599_n (1).jpg'),
(47, 62, '312908569_831722867955440_7679333158176768474_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `tt_id` int(11) NOT NULL,
  `tt_tieu_de` varchar(300) NOT NULL,
  `tt_mo_ta` text NOT NULL,
  `tt_noi_dung` text NOT NULL,
  `anh_minh_hoa` varchar(500) DEFAULT NULL,
  `so_luot_doc` int(11) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `tt_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`tt_id`, `tt_tieu_de`, `tt_mo_ta`, `tt_noi_dung`, `anh_minh_hoa`, `so_luot_doc`, `ad_id`, `tt_created_at`) VALUES
(4, 'Ấn tượng Lễ Khai giảng năm học mới Học viện Ngân hàng 2022-2023: Đoàn kết – Đổi mới – Kỷ cương', 'Trong không khí vui mừng, phấn khởi chào đón năm học mới, sáng ngày 20/10/2022, Học viện Ngân hàng long trọng tổ chức Lễ Khai giảng năm học 2022 - 2023.', 'https://hvnh.edu.vn/hvnh/vi/ban-tin-hoc-vien-ngan-hang/an-tuong-le-khai-giang-nam-hoc-moi-hoc-vien-ngan-hang-20222023-doan-ket-doi-moi-ky-cuong-2001.html', 'thumb.a0baf423-755d-405d-bacd-396a847de04f.jpg', 0, 1, '2022-10-27 13:01:07'),
(7, 'Những thói quen cần tránh của sinh viên khi ôn thi', 'Nếu bạn đã cố gắng hết sức mà hiệu quả ôn thi không cao thì có thể đó là do những thói quen cố hữu đã cản trở bạn, hãy từ bỏ những thói quen xấu này đi nhé!', 'https://hvnh.edu.vn/tuyensinh/vi/tin-tuc/nhung-thoi-quen-can-tranh-cua-sinh-vien-khi-on-thi-308.html', 'thumb.582b8350-aa8e-4c2d-bfdd-727a4614ee8a.jpg', 0, 1, '2022-10-27 13:46:01'),
(8, 'Tọa đàm “Người trẻ và quản lý tài chính cá nhân trong thời đại công nghệ số”', 'Sáng ngày 21/10/2022, tại Hội trường lớn D1, Học viện Ngân hàng tổ chức Tọa đàm “Người trẻ và quản lý tài chính cá nhân trong thời đại công nghệ số”', 'https://hvnh.edu.vn/hvnh/vi/ban-tin-hoc-vien-ngan-hang/toa-dam-nguoi-tre-va-quan-ly-tai-chinh-ca-nhan-trong-thoi-dai-cong-nghe-so-2003.html', 'thumb.551edb19-7b8f-4666-a949-6fb8a18e07f7.jpg', 0, 1, '2022-10-27 13:47:36'),
(9, 'Khai mạc Triển lãm ảnh “Sinh viên Học viện Ngân hàng với biển đảo quê hương”', 'CLB Tuổi trẻ vì biển đảo quê hương, Bảo tàng Tuổi trẻ Việt Nam phối hợp cùng Học viện Ngân hàng tổ chức Lễ khai mạc triển lãm ảnh “Sinh viên HVNH với biển đảo quê hương”', 'https://hvnh.edu.vn/hvnh/vi/ban-tin-hoc-vien-ngan-hang/khai-mac-trien-lam-anh-sinh-vien-hoc-vien-ngan-hang-voi-bien-dao-que-huong-1990.html', 'thumb.dedcd5cd-f6f0-476e-9489-2dd07c7e8557.jpg', 0, 1, '2022-10-27 13:48:38'),
(12, 'Hội nghị lần thứ mười Hội đồng Học viện Ngân hàng nhiệm kỳ 2020-2025', 'Hội nghị lần thứ mười Hội đồng Học viện Ngân hàng nhiệm kỳ 2020-2025', 'https://www.hvnh.edu.vn/hvnh/vi/ban-tin-hoc-vien-ngan-hang/hoi-nghi-lan-thu-muoi-hoi-dong-hoc-vien-ngan-hang-nhiem-ky-20202025-1998.html', '563093d7_IMG_5957.jpg', 0, 1, '2022-10-28 12:10:27'),
(13, 'Kiểm tra công tác Đảng tại Đảng bộ Học viện Ngân hàng', 'Kiểm tra công tác Đảng', 'https://www.hvnh.edu.vn/hvnh/vi/ban-tin-hoc-vien-ngan-hang/kiem-tra-cong-tac-dang-tai-dang-bo-hoc-vien-ngan-hang-1996.html', 'fbb4c868_IMG_5414 - Copy.jpg', 0, 1, '2022-10-28 12:13:44'),
(14, 'Đoàn công tác của Học viện Ngân hàng CHDCND Lào đến thăm và làm việc tại Học viện Ngân hàng', 'Giao lưu hợp tác hữu nghị', 'https://www.hvnh.edu.vn/hvnh/vi/hop-tac-quoc-te/doan-cong-tac-cua-hoc-vien-ngan-hang-chdcnd-lao-den-tham-va-lam-viec-tainbsphoc-vien-ngan-hang-1991.html', '3363dfe5_IMG_5134.jpg', 0, 1, '2022-10-28 12:16:52'),
(17, 'Lễ Ký kết thỏa thuận hợp tác và cắt băng khánh thành Phòng thực hành tin học giữa Học viện Ngân hàng và Ngân hàng thương mại cổ phần Ngoại thương Việt Nam', 'Hợp tác', 'https://www.hvnh.edu.vn/hvnh/vi/hop-tac-trong-nuoc/le-ky-ket-thoa-thuan-hop-tac-va-cat-bang-khanh-thanh-phong-thuc-hanh-tin-hoc-giua-hoc-vien-ngan-hang-va-ngan-hang-thuong-mai-co-phan-ngoai-thuong-viet-nam-1880.html', 'e0f0a140_IMG_6808.jpg', 0, 1, '2022-10-28 12:23:41'),
(18, 'Hoạt động giao lưu quốc tế giữa sinh viên ISBA - HVNH và ĐH Northampton - UK', 'Hợp tác quốc tế', 'https://www.hvnh.edu.vn/hvnh/vi/hop-tac-quoc-te/hoat-dong-giao-luu-quoc-te-giua-sinh-vien-isba-hvnh-va-dh-northampton-uk-1847.html', 'a9521e15_z3325520542053_a20a638fa95858bef5a9d5018bdbbbeb.jpg', 0, 1, '2022-10-28 12:26:05'),
(19, 'Thông báo tập trung, Sơ đồ phòng thi và Lịch thi tuyển sinh sau đại học năm 2022 (Đợt 2)', 'Tuyển sinh đợt 2', 'https://www.hvnh.edu.vn/hvnh/vi/thong-tin-tuyen-sinh/thong-bao-tap-trung-so-do-phong-thi-va-lich-thi-tuyen-sinh-sau-dai-hoc-nam-2022-dot-2-1993.html', '2d67a5d9_0f1d42f8_DSC_7372.jpg', 0, 1, '2022-10-28 12:28:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_hoten` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `dia_chi` varchar(300) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_hoten`, `email`, `sdt`, `dia_chi`, `password`, `created_at`) VALUES
(29, 'Lê Thương', 'lethuong1702.hvnh@gmail.com', '012345678', NULL, '202cb962ac59075b964b07152d234b70', '2022-10-28 08:02:41'),
(40, 'Thu Thảo', 'thao1009@gmail.com', '123', NULL, '202cb962ac59075b964b07152d234b70', '2022-10-28 12:43:16'),
(41, 'Ngô thế Huân', 'huan@gmail.com', '0868301245', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2022-10-28 12:53:22'),
(42, 'Nhóm 3', 'nhom3@gmail.com', '1234567', NULL, '202cb962ac59075b964b07152d234b70', '2022-10-28 13:06:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hd_id`),
  ADD KEY `hoadon_ibfk_1` (`user_id_m`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD KEY `hoadonchitiet_ibfk_1` (`hd_id`),
  ADD KEY `hoadonchitiet_ibfk_2` (`sp_id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`lh_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `sanpham_ibfk_1` (`user_id_b`),
  ADD KEY `sanpham_ibfk_2` (`dm_id`),
  ADD KEY `sanpham_ibfk_3` (`tl_id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`tl_id`);

--
-- Chỉ mục cho bảng `thumucanh`
--
ALTER TABLE `thumucanh`
  ADD PRIMARY KEY (`tma_id`),
  ADD KEY `thumucanh_ibfk_1` (`sp_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`tt_id`),
  ADD KEY `tintuc_ibfk_1` (`ad_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `thumucanh`
--
ALTER TABLE `thumucanh`
  MODIFY `tma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`user_id_m`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`hd_id`) REFERENCES `hoadon` (`hd_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadonchitiet_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`user_id_b`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`dm_id`) REFERENCES `danhmucsp` (`dm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`tl_id`) REFERENCES `theloai` (`tl_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thumucanh`
--
ALTER TABLE `thumucanh`
  ADD CONSTRAINT `thumucanh_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`ad_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
