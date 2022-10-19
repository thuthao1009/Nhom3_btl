-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 07:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_hoten`, `email`, `sdt`, `password`, `created_at`) VALUES
(1, 'Lê Văn A', 'levana@gmail.com', '012345678', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-08 15:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `dm_id` int(11) NOT NULL,
  `dm_ten_danh_muc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`dm_id`, `dm_ten_danh_muc`) VALUES
(1, 'Tài liệu môn học'),
(2, 'Tiểu luận'),
(3, 'Ngiên cứu khoa học'),
(4, 'Sách bài tập'),
(8, 'Slide 2');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hd_ghi_chu` varchar(500) DEFAULT NULL,
  `hd_ngay_dat_hang` timestamp NOT NULL DEFAULT current_timestamp(),
  `hd_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`hd_id`, `user_id`, `hd_ghi_chu`, `hd_ngay_dat_hang`, `hd_status`) VALUES
(1, 2, NULL, '2022-10-08 16:17:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `hd_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `gia` int(11) DEFAULT NULL,
  `cthd_soluong` int(11) NOT NULL,
  `cthd_tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`hd_id`, `sp_id`, `gia`, `cthd_soluong`, `cthd_tongtien`) VALUES
(1, 1, 30000, 1, 30000),
(1, 2, 20000, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
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
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`lh_id`, `lh_hoten`, `lh_email`, `lh_tieude`, `lh_noidung`, `lh_created_at`, `lh_trang_thai`) VALUES
(1, 'Lê Văn D', 'levand@gmail.com', 'Tôi muốn trả hàng', 'Hàng không đúng hình ảnh', '2022-10-08 16:52:10', 0),
(2, 'le van a', 'levana@gmail.com', 'trả sách', 'trả sách lần 3', '2022-10-19 15:53:38', 0),
(3, 'nguyen van a', 'a@gmail.com', 'd', 'd', '2022-10-19 15:56:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
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
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `dm_id`, `tl_id`, `sp_tensp`, `sp_anh_minh_hoa`, `sp_gia`, `sp_mo_ta`, `sp_tinh_trang`, `sp_namxb`, `sp_soluong`, `so_luot_xem`, `user_id`, `created_at`) VALUES
(1, 1, 1, 'Hệ thống văn bản quy phạm pháp luật', NULL, 30000, NULL, 'Mới', 2021, 2, 1, 1, '2022-10-11 22:26:51'),
(2, 1, 2, 'Bài tập tư tưởng Hồ Chí Minh', NULL, 20000, NULL, NULL, 2021, 1, 1, 1, '2022-10-11 22:26:51'),
(4, 2, 4, 'Hệ thống ngân hàng', 'add.png', 30000, NULL, NULL, 2021, 1, 1, 1, '2022-10-11 22:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `tl_id` int(11) NOT NULL,
  `tl_ten_tl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`tl_id`, `tl_ten_tl`) VALUES
(1, 'Môn pháp luật đại cương'),
(2, 'Môn tư tưởng Hồ Chí Minh'),
(3, 'Kinh tế'),
(4, 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `thumucanh`
--

CREATE TABLE `thumucanh` (
  `tma_id` int(11) NOT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `anhminhhoa` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
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
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`tt_id`, `tt_tieu_de`, `tt_mo_ta`, `tt_noi_dung`, `anh_minh_hoa`, `so_luot_doc`, `ad_id`, `tt_created_at`) VALUES
(1, 'Các môn học thay đổi sách', 'Môn học thay đổi sách trong chương trình học năm 2022', 'Môn tin học đại cương chuyển thành môn năng lực số ứng dụng', NULL, 1, 1, '2022-10-08 16:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_hoten` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_hoten`, `email`, `sdt`, `password`, `created_at`) VALUES
(1, 'Lê Văn B', 'levanb@gmail.com', '0987654321', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-08 15:22:55'),
(2, 'Lê Văn C', 'levanc@gmail.com', '567890123', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-08 15:29:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hd_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`hd_id`,`sp_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `hd_id` (`hd_id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`lh_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dm_id` (`dm_id`),
  ADD KEY `tl_id` (`tl_id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`tl_id`);

--
-- Indexes for table `thumucanh`
--
ALTER TABLE `thumucanh`
  ADD PRIMARY KEY (`tma_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`tt_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thumucanh`
--
ALTER TABLE `thumucanh`
  MODIFY `tma_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`hd_id`) REFERENCES `hoadon` (`hd_id`),
  ADD CONSTRAINT `hoadonchitiet_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`dm_id`) REFERENCES `danhmucsp` (`dm_id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`tl_id`) REFERENCES `theloai` (`tl_id`);

--
-- Constraints for table `thumucanh`
--
ALTER TABLE `thumucanh`
  ADD CONSTRAINT `thumucanh_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`ad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
