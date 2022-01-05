-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2021 lúc 02:25 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thoitrangnam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `noidung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `ten`, `email`, `sdt`, `noidung`) VALUES
(3, 'Đỗ Văn Việt', 'dovanvien@gmail.com', 987364531, 'Sản phẩm đẹp, giá tốt                    '),
(4, 'Nguyễn Quang Huy', 'huynguyen@gmail.com', 987612345, 'Chất lượng dịch vụ tốt             '),
(5, 'Trương Thi Thuỳ Linh', 'tlinh@gmail.com', 746893628, 'Dịch vụ tốt quần áo đẹp, phù hợp để mua cho người yêu\r\n            '),
(6, 'Vũ Thị Huê', 'hue1407@gmail.com', 342383585, 'Dịch vụ tốt hơn mình kì vọng   '),
(7, 'Đinh Trường Giang', 'homnaytoibuon@gmail.com', 485298374, 'a little sadness in hanoi                ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thongtin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `img`, `tensp`, `thongtin`, `gia`) VALUES
(1, 'img/sanpham/1.jpg', 'Áo hoodie nam ANHTK205', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  đen,be\r\n– Size: M – L – XL – XXL', 390000),
(2, 'img/sanpham/2.jpg', 'Áo hoodie nam AHHTK205', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 480000),
(3, 'img/sanpham/3.jpg', 'Áo hoodie nam AHHTK204', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 460000),
(4, 'img/sanpham/4.jpg', 'Áo hoodie nam AHHTK201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 480000),
(5, 'img/sanpham/5.jpg', 'Áo khoác nam ADLTK203', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 849000),
(6, 'img/sanpham/6.jpg', 'Áo khoác nam ADLTK201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 829000),
(7, 'img/sanpham/7.jpg', 'QUẦN jogger nam QGNTK204', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 390000),
(8, 'img/sanpham/8.jpg', 'QUẦN jogger nam QGNTK201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 450000),
(9, 'img/sanpham/9.jpg', 'Quần âu nam QASTK204', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 380000),
(10, 'img/sanpham/10.jpg', 'Áo sơ mi nam SDKTK251', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 450000),
(11, 'img/sanpham/11.jpg', 'Áo khoác nam KMNTK201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 490000),
(12, 'img/sanpham/12.jpg', 'Áo thun dài tay ATDTK202', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 299000),
(13, 'img/sanpham/13.jpg', 'Áo nỉ nam ANHTK206', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 419000),
(14, 'img/sanpham/14.jpg', 'Áo len nam ALECN203', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 419000),
(15, 'img/sanpham/15.jpg', 'Áo len nam ALECN202', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 479000),
(16, 'img/sanpham/16.jpg', 'Áo len nam ALECN201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 449000),
(17, 'img/sanpham/17.jpg', 'Áo khoác nam AKHTK201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 850000),
(18, 'img/sanpham/18.jpg', 'Áo hoodie nam AHHTK202', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 480000),
(19, 'img/sanpham/19.jpg', 'Quần jeans nam QJDTK224', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 490000),
(20, 'img/sanpham/20.jpg', 'Quần jeans nam QJDTK223', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 480000),
(21, 'img/sanpham/21.jpg', 'Quần jeans nam QJDTK222', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 520000),
(22, 'img/sanpham/22.jpg', 'Quần jeans nam QJDTK221', '', 390000),
(23, 'img/sanpham/23.jpg', 'Quần jeans nam QJDTK219', '', 499000),
(24, 'img/sanpham/24.jpg', 'Quần jeans nam QJDTK220', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 550000),
(25, 'img/sanpham/25.jpg', 'Quần jeans nam QJDTK218', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 380000),
(26, 'img/sanpham/26.jpg', 'Quần jeans nam QJDTK217', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 380000),
(27, 'img/sanpham/27.jpg', 'QUẦN jogger nam QGGTK202', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 380000),
(28, 'img/sanpham/28.jpg', 'Áo len nam CARCN201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 580000),
(29, 'img/sanpham/29.jpg', 'Áo thun dài tay ATDTK201', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 299000),
(30, 'img/sanpham/30.jpg', 'Áo nỉ nam ANTTK217', '– Chất liệu: Nỉ da cá\r\n– Dáng: Relax\r\n– Màu:  trắng, xanh than\r\n– Size: M – L – XL – XXL', 399000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `taikhoan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`taikhoan`, `ten`, `email`, `diachi`, `sdt`, `matkhau`) VALUES
('Long123', 'Phạm Phúc Long', 'phuclong2310.lp@gmail.com', 'Long Biên, Hà Nội', 984657480, '123'),
('makeets', 'Phan Đức Thắng', 'phanducthang789@gmail.com', 'Hà Đông, Hà Nội', 814406569, '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`taikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
