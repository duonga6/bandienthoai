-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2023 lúc 05:01 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `matkhau` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `ten`, `matkhau`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id` int(11) NOT NULL,
  `tentaikhoan` varchar(20) NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id`, `tentaikhoan`, `sodienthoai`, `email`, `matkhau`, `diachi`) VALUES
(1, 'duc', '012345', 'askdjas@gmail.com', '1', 'da'),
(3, 'a', '123', 'shenmurai1st@gmail.com', '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `hinhthucthanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hangsp`
--

CREATE TABLE `tbl_hangsp` (
  `id_hangsp` int(11) NOT NULL,
  `tenhangsp` varchar(30) DEFAULT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hangsp`
--

INSERT INTO `tbl_hangsp` (`id_hangsp`, `tenhangsp`, `stt`) VALUES
(1, 'Samsung', 1),
(2, 'IPhone', 2),
(3, 'OPPO', 3),
(4, 'Vsmart', 4),
(5, 'Xiaomi', 5),
(6, 'LG', 6),
(7, 'Lenovo', 7),
(8, 'OnePlus', 11),
(9, 'Realme', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_mucgia`
--

CREATE TABLE `tbl_mucgia` (
  `id_mucgia` int(11) NOT NULL,
  `mucgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_mucgia`
--

INSERT INTO `tbl_mucgia` (`id_mucgia`, `mucgia`) VALUES
(2, 6),
(3, 10),
(5, 20),
(6, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `ma_sp` varchar(50) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `id_hangsp` int(11) NOT NULL,
  `gia` int(15) NOT NULL,
  `hinhanh` varchar(150) NOT NULL,
  `kt_mh` float NOT NULL,
  `camera` varchar(200) NOT NULL,
  `chipset` varchar(30) NOT NULL,
  `ram` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `sim` varchar(30) NOT NULL,
  `heDH` varchar(20) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `soluong` int(11) NOT NULL,
  `daban` int(11) NOT NULL DEFAULT 0,
  `trangthai` int(11) NOT NULL,
  `time_rammat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ma_sp`, `ten_sp`, `id_hangsp`, `gia`, `hinhanh`, `kt_mh`, `camera`, `chipset`, `ram`, `rom`, `pin`, `sim`, `heDH`, `mota`, `soluong`, `daban`, `trangthai`, `time_rammat`) VALUES
(4, 'ip_14_prm', 'IPhone 14 Pro Max', 2, 18000000, '1685802465_1_251_1.webp', 6.7, 'Camera chính: 48 MP, f/1.8, 24mm, 1.22µm, PDAF, OIS Camera góc siêu rộng: 12 MP, f/2.2, 13mm, 120˚, 1.4µm, PDAF Camera tele: 12 MP, f/2.8, 77mm (telephoto), PDAF, OIS, 3x optical zoom Cảm biến độ sâu ', 'Apple A16', 6, 128, 4323, '2 SIM (nano‑SIM và eSIM)', 'IOS 16', 'iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt', 10, 0, 0, '2023-05-01'),
(7, '', 'iPhone 14 128GB', 2, 19190000, '1685751856_3_51_1_7.webp', 6.1, 'Camera góc rộng: 12MPCamera góc siêu rộng: 12MP12MP, ƒ/1.9', 'Apple A15', 6, 128, 3279, '2 SIM (nano‑SIM và eSIM)', 'iOS 16', 'Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13 trước đó nhưng vẫn có nhiều nâng cấp khác biệt. Điện thoại sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng sẽ được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.', 25, 0, 0, '2022-06-06'),
(8, '', 'iPhone 14 Pro 128GB', 2, 18700000, '1685802027_1_252.webp', 6.1, 'Camera chính: 48 MP, f/1.8, 24mm, OISCamera góc siêu rộng: 12 MP, f/2.2, 120˚, 1.4µmCamera tele: 12 MP, f/2.8, PDAF, OIS, 3x optical zoomCảm biến độ sâu TOF 3D LiDAR', 'Apple A16', 6, 128, 3200, '2 SIM (nano‑SIM và eSIM)', 'iOS 16', 'iPhone 14 Pro sở hữu màn hình Dynamic Island cùng công nghệ Super Retina XDR mang lại trải nghiệm hình ảnh ấn tượng. Camera trên iPhone 14 Pro cũng được nâng cấp lên đến 48MP với nhiều công nghệ chụp mang lại hình ảnh chuẩn nhiếp ảnh gia. Hiệu năng iPhone 14 Pro cũng mạnh mẽ với con chip hàng đầu Apple A16 Bionic giúp các thao tác diễn ra nhanh chóng, bộ nhớ RAM 6GB mang lại đa nhiệm mượt mà và ổn định trong mọi tác vụ.', 32, 0, 0, '2022-11-15'),
(9, '', 'iPhone 12 Pro Max 128GB', 2, 19200000, '1685751878_iphone-14-pro-max-den-thumb-600x600.jpg', 6.7, 'Camera chính: 12 MP, f/1.6, 26mm, 1.4µm, dual pixel PDAF, OISCamera tele: 12 MP, f/2.0, 52mm, 1/3.4', 'Apple A14', 6, 128, 3825, '2 SIM (nano‑SIM và eSIM)', 'iOS 14.1', 'Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là iPhone 12 Pro Max, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.', 12, 0, 0, '2021-03-09'),
(10, '', 'iPhone 12 64GB', 2, 14900000, '1685751888_iphone-14-storage-select-202209-6-1inch-y889.webp', 6.1, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixel PDAF, OIS12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6', 'Apple A14', 4, 64, 3215, '2 SIM (nano‑SIM và eSIM)', 'iOS 14.1', 'Dù Apple vừa giới thiệu dòng điện thoại iPhone 13 series tuy nhiên iPhone 12 vẫn đang là một trong những sự lựa chọn hàng đầu ở thời điểm hiện tại. Chiếc flagship năm 2020 của \"Táo khuyết\" đang nhận được rất nhiều sự quan tâm của người dùng bởi mức giá dễ tiếp cận hơn so với thời điểm ra mắt, đồng thời được trang bị cấu hình, màn hình, camera ấn tượng trong tầm giá.', 18, 0, 0, '2022-07-04'),
(11, '', 'iPhone 12 Pro 256GB', 2, 19000000, '1685751898_4_187_1.webp', 6.1, '12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixel PDAF, OIS12 MP, f/2.0, 52mm (telephoto), 1/3.4', 'Apple A14 ', 6, 256, 3245, ' 2 SIM (nano‑SIM và eSIM)', 'iOS 14.1', 'Mẫu iPhone 2020 mới nhất của Apple được thiết kế khung viền vuông sang trọng được nhiều người dùng yêu thích. Trong đó, phiên bản iPhone 12 Pro 256GB chính hãng VNA hứa hẹn là một trong những sự lựa chọn lý tưởng.', 14, 0, 0, '2020-06-24'),
(12, '', 'iPhone 11 64GB', 2, 10350000, '1685751907_0007808_iphone-14-pro-max-128gb.png', 6.1, 'Camera kép 12MP:- Camera góc rộng: ƒ/1.8 aperture- Camera siêu rộng: ƒ/2.4 aperture', 'A13', 4, 64, 3110, ' Nano-SIM + eSIM', 'iOS 13', 'iPhone 11 sở hữu hiệu năng khá mạnh mẽ, ổn định trong thời gian dài nhờ được trang bị chipset A13 Bionic. Màn hình LCD 6.1 inch sắc nét cùng chất lượng hiển thị Full HD của máy cho trải nghiệm hình ảnh mượt mà và có độ tương phản cao. Hệ thống camera hiện đại được tích hợp những tính năng công nghệ mới kết hợp với viên Pin dung lượng 3110mAh, giúp nâng cao trải nghiệm của người dùng.', 25, 0, 0, '2020-01-07'),
(13, '', 'iPhone 11 128GB', 2, 12080000, '1685752465_1685737959_sp1.jpg', 6.1, 'Camera kép 12MP:- Camera góc rộng: ƒ/1.8 aperture- Camera siêu rộng: ƒ/2.4 aperture', 'A13', 4, 128, 3110, 'Nano-SIM + eSIM', 'iOS 13', 'iP 11 128GB giá bao nhiêu là điều được nhiều iFan và các tín đồ công nghệ quan tâm. Từ thời điểm ra mắt cho đến nay, giá bán đã giảm sâu xuống còn khoảng hơn 12 triệu đồng, nhờ đó khách hàng có thể dễ dàng sở hữu. Tham khảo bảng giá iPhone 11 128GB chi tiết sau đây nhé!', 23, 0, 0, '2021-01-04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_hangsp`
--
ALTER TABLE `tbl_hangsp`
  ADD PRIMARY KEY (`id_hangsp`);

--
-- Chỉ mục cho bảng `tbl_mucgia`
--
ALTER TABLE `tbl_mucgia`
  ADD PRIMARY KEY (`id_mucgia`),
  ADD UNIQUE KEY `mucgia` (`mucgia`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_hangsp`
--
ALTER TABLE `tbl_hangsp`
  MODIFY `id_hangsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_mucgia`
--
ALTER TABLE `tbl_mucgia`
  MODIFY `id_mucgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
