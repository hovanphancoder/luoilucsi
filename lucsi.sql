-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 10:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nameAdmin` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nameAdmin`, `password`) VALUES
(1, 'hovanphan', 'phan@2011'),
(2, 'hovanphancoder', 'phan2011');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `tendanhmuc` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `img`) VALUES
(1, 'Lưới', ''),
(2, 'Bạt- Vải địa', '3.jpg'),
(3, 'dây', '1.jpg'),
(4, 'Khác', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `name`, `email`, `phone`, `address`, `content`, `time`) VALUES
(20, 'hovanphan', 'hovanphandev@gmail.com', 123456789, 'DFGHJ', 'DFGHJK', '2020-08-12 01:54:51'),
(21, 'hovanphan', 'hovanphandev@gmail.com', 123456789, 'DFGHJ', 'DFGHJK', '2020-08-12 01:55:22'),
(22, 'hovanphan', 'hovanphandev@gmail.com', 123456789, 'DFGHJ', 'DFGHJK', '2020-08-12 01:55:52'),
(23, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'dfgh', '.,mnbvc', '2020-08-12 21:01:21'),
(24, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'dfgh', 'mnbvc', '2020-08-12 21:01:25'),
(25, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'dfgh', 'mnbvc', '2020-08-12 21:05:16'),
(26, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'dfgh', 'mnbvc', '2020-08-12 21:08:15'),
(27, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'dfgh', 'mnbvc', '2020-08-12 21:09:03'),
(28, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'dfgh', 'mnbvc', '2020-08-12 21:09:40'),
(29, 'ẻtyui', 'dfghj@fghjk', 912345678, 'sdfgh', 'ưertyuio', '2020-08-12 21:10:07'),
(30, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:11:10'),
(31, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:13:12'),
(32, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:14:36'),
(33, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:16:21'),
(34, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:18:09'),
(35, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:18:30'),
(36, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:20:52'),
(37, 'hovanphan', 'hovanphan01@gmail.com', 912345678, 'lkjhgfds', 'kjhgfdsa', '2020-08-12 21:25:12'),
(38, 'phan', 'hovanphandev@gmail.com', 912345678, 'dfghj', 'abc', '2020-08-20 03:31:22'),
(39, '', '', 0, '', '', '2020-08-21 23:17:08'),
(40, '', '', 0, '', '', '2020-08-25 02:49:44'),
(41, '', '', 0, '', '', '2020-08-25 02:51:24'),
(42, '', '', 0, '', '', '2020-08-25 02:52:25'),
(43, '', '', 0, '', '', '2020-08-25 02:52:32'),
(44, '', '', 0, '', '', '2020-08-25 02:52:39'),
(45, '', '', 0, '', '', '2020-08-25 02:52:57'),
(46, '', '', 0, '', '', '2020-08-25 02:52:59'),
(47, '', '', 0, '', '', '2020-08-25 02:53:02'),
(48, 'fghj', 'hovanphandev@gmail.com', 912345678, 'dfgh', 'dfghj', '2020-08-25 02:53:37'),
(49, '', '', 0, '', '', '2020-08-25 02:55:28'),
(50, '', '', 0, '', '', '2020-08-25 02:55:33'),
(51, '', '', 0, '', '', '2020-08-25 02:55:35'),
(52, '', '', 0, '', '', '2020-08-25 02:55:37'),
(53, '', '', 0, '', '', '2020-08-25 02:55:40'),
(54, '', '', 0, '', '', '2020-08-25 02:56:19'),
(55, '', '', 0, '', '', '2020-08-25 02:56:23'),
(56, '', '', 0, '', '', '2020-08-25 21:55:39'),
(57, 'phan', 'hovanphanbest@gmail.com', 332519218, 'vgbhnm', 'fghjkl', '2020-08-26 21:04:55'),
(58, 'ftgh', 'hovanphan01@gmial.com', 912345678, 'fghj', 'dfghjk', '2020-08-27 03:44:23'),
(59, '', '', 0, '', '', '2020-08-27 04:01:28'),
(60, '', '', 0, '', '', '2020-08-27 04:01:31'),
(61, '', '', 0, '', '', '2020-08-27 04:04:57'),
(62, '', '', 0, '', '', '2020-08-27 04:05:05'),
(63, '', '', 0, '', '', '2020-08-27 04:05:44'),
(64, 'gfds', 'hovanphan01@gmail.com', 312345678, 'fdsa', 'fdsa', '2020-08-27 04:06:14'),
(65, 'hophan', 'hovanphancoder@gmail.com', 912345678, 'fghj', 'cfghj', '2020-08-27 04:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nameProduct` varchar(255) NOT NULL,
  `detailProduct` text NOT NULL,
  `mota` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_chil1` varchar(255) NOT NULL,
  `img_chil2` varchar(255) NOT NULL,
  `img_chil3` varchar(255) NOT NULL,
  `timeUp` date NOT NULL,
  `danhmuc` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nameProduct`, `detailProduct`, `mota`, `img`, `img_chil1`, `img_chil2`, `img_chil3`, `timeUp`, `danhmuc`) VALUES
(1, 'Lưới chắn côn trùng', '<p><b>Nguyên liệu:</b> nhựa HDPE nguyên sinh 100%, không phế liệu, ổn định với tia cực tím</p><br>\r\n<p>\r\n<b>Phụ liệu:</b> Chống nắng, chịu nước phèn, nhiễm mặn, tăng độ bền</p>\r\n<br>\r\n<p>\r\n<b>Màu:</b> trắng</p><br>\r\n<p>\r\n<b>Kích thước:</b> Khổ 1.05m - 1.5m - 2.1m - 3.1m</p><br>\r\n<p>\r\n<b>Quy cách:</b> Mesh 22 (lưới thưa) và Mesh 32 (lưới nhuyễn)</p>\r\n', '<h5 class=\"title-detail \">chi tiếc:</h5>\r\n<b>Mô tả</b><br>\r\n<p>Lưới chống côn trùng thương hiệu Lực Sĩ là lưới HDPE chất lượng cao cung cấp hiệu suất tối ưu để bảo vệ cây trồng chống lại sâu bệnh và thiệt hại tự nhiên. Bằng cách sử dụng lưới chống côn trùng, người trồng có thể áp dụng cách tiếp cận thân thiện với\r\n    môi trường để bảo vệ cây trồng đồng thời giảm đáng kể việc sử dụng thuốc bảo vệ thực vật trên các sản phẩm, do đó có lợi cho sức khỏe người tiêu dùng và môi trường tự nhiên.</p>\r\n<p>\r\n    Được làm bằng sợi monofilament được xử lý chống tia cực tím, giúp chống côn trùng và chống lại tác hại của ánh nắng mặt trời, chống bám bẩn.</p>\r\n<p>Lưới côn trùng của chúng tôi thường được áp dụng cho vườn cây ăn quả hoặc cây rau để ngăn ngừa sâu bệnh bao gồm nhóm rệp, rầy phấn trắng, bọ cánh cứng, bướm, ruồi đục trái và ngăn chặn chim, dơi. Với các tính năng chống rách, lưới cũng có thể bảo vệ cây\r\n    trồng chống lại mưa đá, vụ nổ và mưa lớn.</p>\r\n<b>\r\nCấu trúc</b><br> <p>Nhẹ, bền và ổn định với tia cực tím<br> Chống nắng biển, chống lão hóa<br> Chống ăn mòn và chống bẩn<br> Không có hiệu ứng nhiệt<br> Chống rách để bảo vệ tối ưu<br> Linh hoạt trong thời tiết khắc nghiệt<br> Không độc hại, thân thiện với\r\nmôi trường<br> Tăng hiệu suất và tiết kiệm chi phí<br> Dễ dàng lắp đặt và tiết kiệm lao động<br></p>\r\n<b>Ứng dụng:</b><br>\r\n<p>\r\n    Che phủ riêng từng cây</p>\r\n<p>\r\n    • Cây có hình dạng như bụi cây, cây có múi & cây có hạt cứng.<br> • Lưới được lắp đặt để che phủ toàn bộ vây và được cố định tại các gốc cây bằng dây cột;<br> • Lưới thích hợp để ngăn chặn côn trùng và chim, không có hiệu ứng nhiệt<br> • Chống rách<br>    • Ngăn ngừa mất trái do mưa lớn<br> • Dễ dàng che đậy và cất giữ.<br>\r\n</p>\r\n<p>\r\n    Che phủ toàn bộ cây trồng</p>\r\n<p>\r\n    Thích hợp che phủ cho toàn bộ cây cao, vườn cây ăn quả, vườn nho và vườn rau.<br> Nhà lưới: lưới được giữ cố định vào khung nhà cho toàn bộ khu vực cần che chắn.<br> Chống rách để ngăn chặn chim<br> Thích hợp để loại trừ sâu bệnh không có hiệu ứng\r\n    nhiệt\r\n    <br> Lắp đặt lưới phù hợp đễ có thể ngăn ngừa mất trái do mưa đá, mưa lớn.<br>\r\n</p>', 'luoichancontrung.jpg', '2.jpg', '3.jpg', '4.jpg', '0000-00-00', 1),
(2, 'Lưới CRV', 'Nguyên liệu: nhựa HDPE nguyên sinh 100%,<br> không phế liệu, ổn định với tia cực tím<br>\r\nPhụ liệu: Chống nắng biển, chịu nước phèn, nhiểm mặn, tăng độ bền<br>\r\nMàu: Xanh ngọc<br>\r\nKích thước: <br>\r\nKhổ 3ly: từ 0.5m đến 4.0m. Dài 150m<br>\r\nKhổ 5ly: từ 0.5m đến 4.0m. Dài 150m<br>\r\nKhổ 8ly: từ 1m đến 4.0m. Dài 150m<br>\r\nĐịnh lượng: 60-80-100-120 gram/m2<br>\r\n', '', 'crv.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 1),
(3, 'Lưới che nắng', '<p><b>Nguyên liệu:</b> nhựa PP nguyên sinh 100%, không phế liệu</p><br>\r\n<p><b>\r\nPhụ liệu:</b> Chống nắng biển, tăng độ bền</p>\r\n<br>\r\n<p><b>\r\nMàu:</b> xanh dương, màu đen</p>\r\n<p><b><br>\r\nKích thước:</b> Khổ 4,5m x 50m<br>\r\n-Mật độ che nắng 50%<br>\r\n-Mật độ che nắng 70%<br>\r\n</p>\r\n', '', 'luoichenang.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 1),
(4, 'Lưới nuôi trồng thủy sản', 'Nguyên liệu: nhựa HDPE nguyên sinh 100%, không phế liệu, ổn định với tia cực tím\r\nPhụ liệu: Chống nắng, tăng độ bền\r\nMàu: trắng (xỏ dây đen)\r\nKích thước: Khổ 1.0m -1.6m - 2m. Dài 100m\r\nQuy cách: 2x1 và 2x2\r\n\r\n', '', 'luoinuoitrongthuysan.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 1),
(5, 'Lưới xây dựng', '<p><b>Nguyên liệu:</b> nhựa HDPE nguyên sinh 100%, không phế liệu, ổn định với tia cực tím</p><br>\r\n<p><b>Phụ liệu:</b>Chống nắng, tăng độ bền</p><br>\r\n<p><b>Màu:</b>xanh dương, xanh ngọc</p><br>\r\n<p><b>Kích thước: </b> Khổ 2m – 3m. Dài 100m</p><br>\r\n<p><b>Định lượng:</b>\r\n 60-80-100-120 gram/m2</p><br>\r\n<p><b>Tỷ lệ bóng râm:</b> 50 – 90%</p><br>\r\n<p><b>Tùy chọn đặc biệt:</b>Lưới xây dựng chống cháy</p><br>\r\n\r\n \r\n', '<h5 class=\"title-detail \">chi tiếc:</h5>\r\n<p><b>Mô tả</b></p><br>\r\n<p>\r\n    Lưới xây dựng, còn gọi là Lưới phủ giàn giáo được làm nhựa HDPE nguyên sinh 100%, không phế liệu, ổn định với tia cực tím và phụ gia chống cháy (khi có yêu cầu) thỏa mãn tiêu chuẩn NFPA 701 - Phương pháp 1. Đối với ngành xây dựng, vì mục đích an toàn,\r\n    Lưới giàn giáo của chúng tôi tạo ra một hàng rào trực quan và bảo vệ đáng tin cậy chống lại các mảnh vỡ và các vật thể gây hại cho công nhân, người đi bộ và các tài sản xung quanh. Thông qua các sản phẩm chất lượng cao và đáng tin cậy, chúng tôi muốn\r\n    trở thành sự lựa chọn đầu tiên của bạn cho Lưới giàn giáo.\r\n</p>\r\n<p><b>Cấu trúc</b></p><br>\r\n<p>HDPE nhẹ, bền và ổn định tia cực tím</p>\r\n<p>\r\n    Chất chống cháy (FR) đáp ứng NFPA 701 – Phương pháp 1</p>\r\n<p>\r\n    Tạo ra 1 rào cản thị giác an toàn cho người lao động.</p>\r\n<p>\r\n    Cường lực chắc, độ đàn hồi tốt.</p>\r\n<p>\r\n    Chống ăn mòn, chắc bền trong điều kiện thời tiết khắc nghiệt.</p>\r\n<p>\r\n    Cản bớt sức gió, chống bụi, chống tiếng ồn.</p>\r\n<p>\r\n    Trọng lượng nhẹ, kinh tế, hiệu quả.</p>\r\n<p>\r\n    Thời gian sử dụng đến 5 năm tùy điều kiện thời tiết.</p>', 'luoixaydung.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 1),
(6, 'Lưới Chắn Gió', 'Nguyên liệu: nhựa HDPE nguyên sinh 100%, không phế liệu, ổn định với tia cực tím<br>\r\nPhụ liệu: Chống nắng biển, chống lão hóa<br>\r\nMàu: trắng<br>\r\nKích thước:  Khổ 2,2m-4,5m. Dài 100m. <br>\r\nKhuyến khích dùng trên 3,5 năm<br>\r\nLưới 90 ô/cm2 (Mesh 25): che vườn rau, vườn cây ăn trái<br>\r\nLưới 200 ô/cm2 (Mesh 50): dùng cho nhà màng, nhà lưới<br>', '<h5 class=\"title-detail \">chi tiếc:</h5>\r\n<b>Mô tả</b><br>\r\nLưới chống côn trùng thương hiệu Lực Sĩ là lưới HDPE chất lượng cao cung cấp hiệu suất tối ưu để bảo vệ cây trồng chống lại sâu bệnh và thiệt hại tự nhiên. Bằng cách sử dụng lưới chống côn trùng, người trồng có thể áp dụng cách tiếp cận thân thiện với môi trường để bảo vệ cây trồng đồng thời giảm đáng kể việc sử dụng thuốc bảo vệ thực vật trên các sản phẩm, do đó có lợi cho sức khỏe người tiêu dùng và môi trường tự nhiên.\r\n<br>\r\nĐược làm bằng sợi monofilament được xử lý chống tia cực tím, giúp chống côn trùng và chống lại tác hại của ánh nắng mặt trời, chống bám bẩn. \r\n<br>\r\nLưới côn trùng của chúng tôi thường được áp dụng cho vườn cây ăn quả hoặc cây rau để ngăn ngừa sâu bệnh bao gồm nhóm rệp, rầy phấn trắng, bọ cánh cứng, bướm, ruồi đục trái và ngăn chặn chim, dơi. Với các tính năng chống rách, lưới cũng có thể bảo vệ cây trồng chống lại mưa đá, vụ nổ và mưa lớn.\r\n<b><br>\r\nCấu trúc</b><br>\r\nNhẹ, bền và ổn định với tia cực tím <br>\r\nChống nắng biển, chống lão hóa <br>\r\nChống ăn mòn và chống bẩn<br>\r\nKhông có hiệu ứng nhiệt<br>\r\nChống rách để bảo vệ tối ưu<br>\r\nLinh hoạt trong thời tiết khắc nghiệt<br>\r\nKhông độc hại, thân thiện với môi trường<br>\r\nTăng hiệu suất và tiết kiệm chi phí<br>\r\nDễ dàng lắp đặt và tiết kiệm lao động<br>\r\n<br>\r\n<b>Ứng dụng</b><br>\r\nChe phủ riêng từng cây<br>\r\n \r\n• Cây có hình dạng như bụi cây, cây có múi & cây có hạt cứng.<br>\r\n• Lưới được lắp đặt để che phủ toàn bộ vây và được cố định tại các gốc cây bằng dây cột;<br>\r\n• Lưới thích hợp để ngăn chặn côn trùng và chim, không có hiệu ứng nhiệt<br>\r\n• Chống rách<br>\r\n• Ngăn ngừa mất trái do mưa lớn<br>\r\n• Dễ dàng che đậy và cất giữ.<br>\r\n\r\nChe phủ toàn bộ cây trồng\r\n \r\nThích hợp che phủ cho toàn bộ cây cao, vườn cây ăn quả, vườn nho và vườn rau.\r\nNhà lưới: lưới được giữ cố định vào khung nhà cho toàn bộ khu vực cần che chắn. \r\nChống rách để ngăn chặn chim\r\nThích hợp để loại trừ sâu bệnh không có hiệu ứng nhiệt\r\nLắp đặt lưới phù hợp đễ có thể ngăn ngừa mất trái do  mưa đá, mưa lớn.\r\n', 'luoichangio.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 1),
(7, 'Bạt chắn cỏ', 'Nguyên liệu: nhựa PP nguyên sinh 100%, không phế liệu<br>\r\nPhụ liệu: Chống nắng biển, tăng độ bền<br>\r\nMàu: xanh dương, màu đen<br>\r\nKích thước: Khổ 4,5m x 50m<br>\r\nMật độ che nắng 50%<br>\r\nMật độ che nắng 70%<br>\r\n', '', 'luoichanco.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 2),
(8, 'Bạt đa năng', 'Nguyên liệu: nhựa PP nguyên sinh 100%, không phế liệu<br>\r\nPhụ liệu: Chống nắng biển, tăng độ bền<br>\r\nMàu: xanh dương, màu đen<br>\r\nKích thước: Khổ 4,5m x 50m<br>\r\nMật độ che nắng 50%<br>\r\nMật độ che nắng 70%<br>', '', 'batdanang.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 2),
(9, 'Vải địa chất', 'Nguyên liệu: nhựa PP nguyên sinh 100%, không phế liệu<br>\r\nPhụ liệu: Chống nắng biển, tăng độ bền<br>\r\nMàu: xanh dương, màu đen<br>\r\nKích thước: Khổ 4,5m x 50m<br>\r\nMật độ che nắng 50%<br>\r\nMật độ che nắng 70%<br>', '', 'bat.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 2),
(10, 'Dây PP', '<p><b>Nguyên liệu:</b>nhựa HDPE nguyên sinh 100%, không phế liệu</p><br>\r\n<p><b>Phụ liệu:</b>Chống nắng, tăng độ bền</p><br>\r\n<p><b>Màu:</b>xanh ngọc, đen</p><br>\r\n<p><b>Kích thước:</b>3ly->6 ly</p><br>\r\n<p><b>Đường kính:</b>6/ 60-72 /90-120-150</p><br>', '', 'daypp.jpg', '2.jpg', '3.jpg', '4.jpg', '2020-02-02', 3),
(11, 'Túi lưới bao trái cây', '<p><b>Nguyên liệu:</b> nhựa HDPE nguyên sinh 100%, không phế liệu</p><br>\r\n<p><b>Phụ liệu:</b> Chống nắng, tăng độ bền</p><br>\r\n<p><b>Màu:</b> trắng</p><br>\r\n<p>Túi bao mãng cầu xiêm 30 x 40cm</p><br>\r\n<p>Túi bao bưởi 30 x 35cm</p><br>\r\n<p>Túi ươm giống 60 x 100cm</p><br>\r\n<p>Túi bao chuối 70 x 100cm</p><br>', '', 'sieu.jpg', '', '', '', '0000-00-00', 4),
(19, 'hgfds', '<p><br><strong>Phụ liệu:</strong> Chống nắng, chịu nước phèn, nhiễm mặn, tăng độ bền</p><p><strong>Màu:</strong> trắng</p><p><strong>Kích thước:</strong> Khổ 1.05m - 1.5m - 2.1m - 3.1m</p><p><strong>Quy cách:</strong> Mesh 22 (lưới thưa) và Mesh 32 (lưới nhuyễn)</p>', '<p>nhiên. Bằng cách sử dụng lưới chống côn trùng, người trồng có thể áp dụng cách tiếp cận thân thiện với môi trường để bảo vệ cây trồng đồng thời giảm đáng kể việc sử dụng thuốc bảo vệ thực vật trên các sản phẩm, do đó có lợi cho sức khỏe người tiêu dùng và môi trường tự nhiên.</p><p>Được làm bằng sợi monofilament được xử lý chống tia cực tím, giúp chống côn trùng và chống lại tác hại của ánh nắng mặt trời, chống bám bẩn.</p><p>Lưới côn trùng của chúng tôi thường được áp dụng cho vườn cây ăn quả hoặc cây rau để ngăn ngừa sâu bệnh bao gồm nhóm rệp, rầy phấn trắng, bọ cánh cứng, bướm, ruồi đục trái và ngăn chặn chim, dơi. Với các tính năng chống rách, lưới cũng có thể bảo vệ cây trồng chống lại mưa đá, vụ nổ và mưa lớn.</p>', 'bat.jpg', '', '', '', '2020-08-28', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
