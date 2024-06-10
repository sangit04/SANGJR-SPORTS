-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2024 lúc 04:23 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau2022`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(200) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(25, 'Quá đẹp', 24, 32, '02:57:59pm 18/10/2023'),
(26, 'Lịch lãm', 24, 33, '02:58:11pm 18/10/2023'),
(27, 'Ngầu', 24, 38, '02:58:25pm 18/10/2023'),
(28, 'nice', 25, 43, '01:54:44pm 19/10/2023'),
(29, 'nice', 24, 36, '03:03:12pm 19/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(23, 'Đồng hồ'),
(24, 'Trang phục'),
(25, 'Phụ kiện'),
(26, 'Giày'),
(27, 'Túi xách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double(10,5) DEFAULT 0.00000,
  `img` varchar(200) DEFAULT NULL,
  `mota` text DEFAULT '0',
  `luotxem` int(11) DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(32, 'ÁO SƠ MI NGẮN TAY XIÊN', 99999.99999, 'ao2.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24),
(33, 'ÁO KHOÁC CÓ TÚI CÀI NÚT', 99999.99999, 'ao1.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24),
(34, 'TÚI HỘP CÓ DÂY ĐEO', 10000.00000, 'tui1.jpg', 'Thông tin chi tiết sản phẩm:\r\n\r\nVới các góc được đinh tán và hình hộp, túi Mini Soft Trunk bằng da Taurillon in nổi Monogram màu đen là hậu duệ trực tiếp của những chiếc cốp nguyên bản của Louis Vuitton. Hai dây chuyền màu đen mờ, một dây nối với khóa kéo và dây còn lại dùng làm dây đeo vai, mang đến sự hiện đại cho chiếc túi nhỏ này.\r\n\r\n18,5 x 13 x 8 cm (Dài x cao x rộng)\r\nĐen\r\nDa bò Taurillon\r\nLớp lót dệt\r\nViền da bò\r\nPhần cứng màu đen mờ\r\nTúi có khóa kéo bên ngoài\r\nBên trong túi phẳng\r\nDây đeo: Không thể tháo rời, có thể điều chỉnh\r\nĐộ thả dây đeo: 42,0 cm\r\nDây đeo thả tối đa: 58,0 cm', NULL, 27),
(35, 'GIÀY CARLO DERBY', 99999.99999, 'giay1.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nGiày derby LV Flex được chế tác từ một miếng da bê sáp đặc biệt dẻo dai. Mẫu này có cấu trúc Goodyear Flex: cấu trúc truyền thống, cao cấp kết hợp với lớp lót nút chai cải tiến ở đế để mang lại sự thoải mái tối đa. Các chi tiết tinh tế, bao gồm dây buộc bằng da, miếng vải canvas Monogram ở phía sau và Hoa Monogram ở gót chân, đã hoàn thiện thiết kế này.\r\n\r\nĐen\r\nDa bê sáp\r\nDây da\r\nĐế đệm\r\nXây dựng Goodyear Flex\r\nĐế ngoài bằng da có chữ ký chủ yếu của đồ may sẵn Louis Vuitton\r\nTrang trí bằng canvas chữ lồng\r\nHoa Monogram ở gót chân\r\nSản xuất tại Ý', NULL, 26),
(36, 'NHẪN ĐÍNH KIM CƯƠNG', 99999.99999, 'nhan1.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nNhẫn LV Diamonds Pavé V được chế tác bằng bạch kim đánh bóng bằng tay nạm kim cương rực rỡ. Hình dáng độc đáo của nó gợi nhớ đến chữ “V” lịch sử của Louis Vuitton do Gaston-Louis Vuitton, cháu trai của người sáng lập Maison bắt nguồn. Được tạo ra để đánh dấu những cột mốc quan trọng trong cuộc đời, vật kỷ niệm này có thể trở nên quý giá hơn nữa bằng cách khắc tùy chỉnh những chữ cái đầu, ngày tháng hoặc một cụm từ chân thành.\r\n\r\nBạch kim (950)\r\n16 viên kim cương, ~ 0,30 ct\r\nChiều rộng đầu tip: ~ 3,9 mm\r\nChiều rộng mặt sau: ~ 2,7 mm\r\nNếu có bất kỳ câu hỏi nào liên quan đến hướng dẫn bảo quản Trang sức Cao cấp của Louis Vuitton, vui lòng tham khảo tờ rơi Trang sức Cao cấp.\r\n\r\nMỗi sản phẩm từ đồ trang sức và đồng hồ của Louis Vuitton đều độc đáo. Thông tin về caratage và trọng lượng kim loại chỉ được cung cấp để tham khảo và có thể thay đổi đôi chút tùy theo từng sản phẩm.', NULL, 25),
(37, 'GIÀY CHẠY BỘ B31', 99999.99999, 'giay2.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nĐược chế tác từ da bê màu trắng dẻo dai, phiên bản giày sneaker LV Trainer này là một phần của bộ sưu tập viên nang may sẵn Rainbow của mùa. Mẫu giày đình đám này được thiết kế bởi Giám đốc nghệ thuật Louis Vuitton Virgil Abloh và lấy cảm hứng từ giày thể thao bóng rổ cổ điển. Phần trên được chế tạo công phu, có chữ ký LV và Vuitton bằng cao su, phải mất bảy giờ để khâu.\r\n\r\nTrắng\r\nDa bê\r\n7 giờ khâu cho một đôi\r\nĐế giày cao su\r\nChữ viết tắt LV trên lưỡi, mặt sau và mặt bên\r\nChữ ký Vuitton ở bên cạnh\r\nHoa Monogram ở đế ngoài\r\nSản xuất tại Ý', NULL, 26),
(38, 'ĐỒNG HỒ CƠ', 99999.99999, 'dongho1.jpeg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc đồng hồ Tambour Slim Monogram Dentelle này kỷ niệm Hoa Monogram. Được làm giàu bằng những viên kim cương rực rỡ, những bông hoa bạc lấp lánh trên mặt số sơn mài màu đen không bị gián đoạn bởi các vạch chỉ giờ tạo nên nét tinh tế. Viền đính kim cương càng tôn lên vẻ đẹp của chiếc đồng hồ nữ tính này, được gắn trên dây đeo cá sấu có thể thay thế được.\r\n\r\nSự chuyển động\r\nTrường hợp\r\nQuay số\r\nVòng đeo tay\r\n\r\nChuyển động thạch anh có độ chính xác cao\r\nChức năng: giờ, phút', NULL, 23),
(39, 'SƠ MI CÓ CHI TIẾT ', 99999.99999, 'ao5.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24),
(40, 'QUẦN XẾP LY', 99999.99999, 'quan1.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24),
(41, 'ÁO DA MỀM', 99999.99999, 'ao4.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24),
(42, 'ÁO SƠ MI TRẮNG', 10000.00000, 'ao3.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24),
(43, 'ÁO LV', 99999.99999, 'ao6.jpg', 'Thông tin chi tiết sản phẩm\r\n\r\nChiếc áo sơ mi họa tiết này có vải denim kẻ ca-rô tích hợp chữ ký Louis Vuitton một cách tinh tế. Món đồ hàng ngày này có thể được kết hợp với quần short phù hợp để có vẻ ngoài giản dị.\r\n\r\nVừa vặn thường xuyên\r\nChữ ký Louis Vuitton được kết hợp trong họa tiết ca-rô\r\nNút đóng bằng phần cứng bằng vàng\r\nVá túi trên ngực\r\nCổ áo cổ điển\r\nĐen\r\n100% chất liệu cotton\r\nSản xuất tại Pháp\r\n\r\nchăm sóc sản phẩm', NULL, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(24, 'admin', '1', 'pvsang04@gmail.com', 'Nam Định1', '03255610011', 1),
(25, 'admin1', '1', 'pvsang205@gmail.com', '18 Nam Định', '0325561001', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
