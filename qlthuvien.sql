-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 06:20 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sach`
--

CREATE TABLE `tbl_sach` (
  `id` int(11) NOT NULL,
  `masach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tensach` text COLLATE utf8_unicode_ci NOT NULL,
  `nhaxb` text COLLATE utf8_unicode_ci NOT NULL,
  `namxb` text COLLATE utf8_unicode_ci NOT NULL,
  `chubien` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `sotrang` int(100) NOT NULL,
  `taiban` text COLLATE utf8_unicode_ci NOT NULL,
  `tacgia2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sach`
--

INSERT INTO `tbl_sach` (`id`, `masach`, `tensach`, `nhaxb`, `namxb`, `chubien`, `mota`, `sotrang`, `taiban`, `tacgia2`) VALUES
(1, 'S001', 'Khoa học', 'Việt Nam', '2021', 'Nguyễn Văn Phong', 'Sách rất hay', 100, '1', 'Nguyễn A và Nguyễn B'),
(4, 'S001', 'Khoa học', 'Việt Nam', '2021', 'Nguyễn Văn Phong', 'Sách rất hay', 100, '1', 'Nguyễn A và Nguyễn B'),
(5, 'S003', 'Thiếu Nhi', 'Việt Nam', '2021', 'Nguyễn Văn H', 'Sách rất hay và hay', 100, '1', 'Nguyễn C và Nguyễn b'),
(6, 'S004', 'Tự Nhiên', 'Việt Nam', '2021', 'Nguyễn Văn Q', 'Sách rất hay', 100, '1', 'Nguyễn H và Nguyễn K'),
(7, 'S001', 'Khoa học', 'Việt Nam', '2021', 'Nguyễn Văn Phong', 'Sách rất hay', 100, '1', 'Nguyễn A và Nguyễn B'),
(8, 'S001', 'Khoa học', 'Việt Nam', '2021', 'Nguyễn Văn Phong', 'Sách rất hay', 100, '1', 'Nguyễn A và Nguyễn B'),
(9, 'S003', 'Thiếu Nhi', 'Việt Nam', '2021', 'Nguyễn Văn H', 'Sách rất hay và hay', 100, '1', 'Nguyễn C và Nguyễn b'),
(10, 'S004', 'Tự Nhiên', 'Việt Nam', '2021', 'Nguyễn Văn Q', 'Sách rất hay', 100, '1', 'Nguyễn H và Nguyễn K');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sach`
--
ALTER TABLE `tbl_sach`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sach`
--
ALTER TABLE `tbl_sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
