-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 03:05 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `mabanner` int(10) NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET latin1 NOT NULL,
  `url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `maqt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`mabanner`, `hinhanh`, `url`, `maqt`) VALUES
(1, 'lenovo-laptop-thinkpad-banner-1143x357-1.jpg', 'fb.com/phuong1308', 1),
(3, 'thinkpadbanner.jpg', 'http://thegioididong.com', 1),
(4, '1366_521.jpg', 'stu.edu.vn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(10) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `makh` int(10) NOT NULL,
  `masp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`mabl`, `noidung`, `ngaydang`, `makh`, `masp`) VALUES
(1, 'hàng tốt,chất lượng cao', '2021-12-23', 2, 36),
(2, 'hàng cũ, kém chất lượng', '2021-12-24', 1, 11),
(3, 'Mới sử dụng máy chưa đuợc 24 tiếng, đã phát hiện ra lỗi màn hình. Màn 4k nhưng bị lỗi như thế này thì thực sự đáng buồn.', '2021-12-27', 2, 38),
(4, 'Hôm nay có sẵn Mac air M1 chính hãng chưa shop?', '2021-12-19', 2, 11),
(5, 'Sản phẩm tốt, Shop hỗ trợ nhiệt tình', '2021-12-30', 1, 11),
(11, 'Con hàng này chơi game rác Lửa Chùa được không vậy', '2022-01-02', 3, 34),
(12, 'Bộ lap này tán được mẹ vợ ko vậy ad', '2022-01-02', 3, 29),
(13, 'Hàng ngon đấy shop', '2022-01-02', 4, 36),
(14, 'mua con này đi cưa vợ thằng bạn thôi', '2022-01-02', 4, 35),
(15, 'Mua về xem phim 2 người đóng thôi', '2022-01-02', 4, 34),
(16, 'không thích con này lắm, ko đáng đồng tiền', '2022-01-02', 4, 38),
(17, 'con này ngon thế', '2022-01-02', 4, 29),
(18, 'Sản phẩm đẹp, rẻ, quá ok cho sinh viên', '2022-01-02', 5, 32),
(19, 'Ngành IT Việt Nam hiện nay ở đầu của sự phát triển. Có thể nói IT là vua của các nghề. Vừa có tiền, có quyền. Vừa kiếm được nhiều $ lại được xã hội trọng vọng.\r\nThằng em mình học bách khoa cơ khí, sinh năm 96. Tự mày mò học code rồi đi làm remote cho công ty Mỹ 2 năm nay. Mỗi tối online 3-4 giờ là xong việc. Lương tháng 3k6. Nhưng thu nhập chính vẫn là từ nhận các project bên ngoài làm thêm. Tuần làm 2,3 cái nhẹ nhàng 9,10k tiền tươi thóc thật không phải đóng thuế. Làm gần được 3 năm mà nhà xe nó đã mua đủ cả. Nghĩ mà thèm.\r\nGái gú thì cứ nghe nó bảo làm CNTT thì chảy nước. Có bé kia dân du học sinh Úc, về được cô chị giới thiệu làm ngân hàng VCB. Thế nào thằng ấy đi mở thẻ tín dụng gặp phải thế là hốt được cả chị lẫn em. 3 đứa nó sống chung một căn hộ cao cấp. Nhà con bé kia biết chuyện ban đầu phản đối sau biết thằng đấy học IT thì đổi thái độ, cách ba bữa hỏi thăm, năm bữa tặng quà lấy long, luôn giục cưới kẻo lỡ kèo ngon.', '2022-01-02', 5, 28),
(20, 'Sản phẩm gì mà kém chất lượng, mất niềm tin vào apple', '2022-01-02', 5, 30),
(21, 'Sản phẩm quá ngon, Tôi fan Sony mất', '2022-01-02', 5, 36),
(22, 'Nguyện dâng hiến tiền bạc để mua con hàng này', '2022-01-02', 5, 35),
(23, 'Hàng Nokia lúc nào cũng ngon', '2022-01-02', 5, 33),
(25, 'Factos', '2022-01-02', 6, 31),
(26, 'Factos', '2022-01-02', 6, 27),
(27, 'Factos', '2022-01-02', 6, 40),
(28, 'Factos', '2022-01-02', 6, 11),
(29, 'United là một đội bóng rất mạnh với những cầu thủ tuyệt vời. Cristiano đã biết rõ đội bóng này, nhưng đó là một giai đoạn khác và bây giờ anh ấy trở lại. Song anh ấy vẫn thích nghi đầy ấn tượng.', '2022-01-02', 7, 31),
(30, 'United là một đội bóng rất mạnh với những cầu thủ tuyệt vời. Cristiano đã biết rõ đội bóng này, nhưng đó là một giai đoạn khác và bây giờ anh ấy trở lại. Song anh ấy vẫn thích nghi đầy ấn tượng.', '2022-01-02', 7, 27),
(31, 'United là một đội bóng rất mạnh với những cầu thủ tuyệt vời. Cristiano đã biết rõ đội bóng này, nhưng đó là một giai đoạn khác và bây giờ anh ấy trở lại. Song anh ấy vẫn thích nghi đầy ấn tượng.', '2022-01-02', 7, 40),
(32, 'United là một đội bóng rất mạnh với những cầu thủ tuyệt vời. Cristiano đã biết rõ đội bóng này, nhưng đó là một giai đoạn khác và bây giờ anh ấy trở lại. Song anh ấy vẫn thích nghi đầy ấn tượng.', '2022-01-02', 7, 11),
(33, 'Cũng ngon phết đấy', '2022-01-02', 8, 11),
(34, 'Quá là ok', '2022-01-02', 8, 29),
(35, 'Vừa lấy chồng được anh mua ngay con này', '2022-01-02', 9, 40),
(36, 'Mua con này cho đứa con dùng học online', '2022-01-02', 9, 38),
(37, 'Mua con này cho gái thôi chứ mua cho bạn bè làm gì', '2022-01-02', 10, 28),
(38, 'Mua con này cho gái thôi chứ mua cho bạn bè làm gì.', '2022-01-02', 10, 30),
(39, 'Mới mua cho vợ sếp con này', '2022-01-02', 11, 35),
(40, 'Mới được vợ sếp tặng con này ngon phết', '2022-01-02', 11, 31),
(41, 'U là trời', '2022-01-02', 12, 11),
(42, 'U là trời', '2022-01-02', 12, 28),
(43, 'U là trời', '2022-01-02', 12, 29),
(44, 'U là trời', '2022-01-02', 12, 30),
(45, 'U là trời', '2022-01-02', 12, 36),
(46, 'U là trời', '2022-01-02', 12, 35),
(47, 'U là trời', '2022-01-02', 12, 34),
(48, 'U là trời', '2022-01-02', 12, 27),
(49, 'U là trời', '2022-01-02', 12, 40),
(50, 'U là trời', '2022-01-02', 12, 38);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `mactdh` int(11) NOT NULL,
  `madh` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`mactdh`, `madh`, `masp`, `soluong`, `thanhtien`) VALUES
(1, 6, 11, 1, 99990000),
(2, 6, 30, 3, 89990000),
(3, 6, 40, 5, 386950000),
(4, 7, 34, 1, 3950000),
(5, 7, 35, 1, 31990000),
(6, 7, 40, 1, 74990000),
(7, 8, 11, 2, 199990000),
(8, 8, 28, 2, 1980000),
(9, 8, 29, 2, 97000000),
(10, 8, 30, 3, 89990000),
(11, 9, 28, 1, 980000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `madg` int(10) NOT NULL,
  `sosao` int(1) NOT NULL,
  `ngaydang` date NOT NULL,
  `makh` int(10) NOT NULL,
  `masp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `tennguoinhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtnguoinhan` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ngaydat` date NOT NULL,
  `diachinhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhtien` int(100) NOT NULL,
  `phuongthucthanhtoan` tinyint(1) NOT NULL,
  `trangthai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `makh`, `tennguoinhan`, `sdtnguoinhan`, `ngaydat`, `diachinhan`, `thanhtien`, `phuongthucthanhtoan`, `trangthai`) VALUES
(6, 7, 'Vấp Cỏ Hôi Pen', '0999333777', '2022-01-03', 'Manchester United', 576930000, 1, 'Đang Chờ Xử Lý'),
(7, 7, 'Vấp Cỏ Hôi Pen', '0933213047', '2022-01-03', 'Manchester United', 110930000, 0, 'Đang Vận Chuyển'),
(8, 10, 'Trần Thị Ngọc Thuỳ', '0388654712', '2022-01-04', 'Bến Tre', 388960000, 1, 'Đang Chờ Xử Lý'),
(9, 10, 'Trần Thị Ngọc Thuỳ', '0388654712', '2022-01-04', 'Bến Tre', 980000, 1, 'Đã Huỷ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donnhaphang`
--

CREATE TABLE `donnhaphang` (
  `madnh` int(10) NOT NULL,
  `ngaynhap` date NOT NULL,
  `soluong` int(100) NOT NULL,
  `mansx` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `maqt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donnhaphang`
--

INSERT INTO `donnhaphang` (`madnh`, `ngaynhap`, `soluong`, `mansx`, `masp`, `maqt`) VALUES
(2, '2021-12-27', 100, 1, 11, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makm` int(10) NOT NULL,
  `tenkm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `masp` int(10) NOT NULL,
  `giagiam` int(100) NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`makm`, `tenkm`, `masp`, `giagiam`, `ngaybd`, `ngaykt`) VALUES
(1, 'Giảm 10000', 11, 10000, '2022-12-12', '2023-12-12'),
(2, 'Giảm 20000', 28, 20000, '2022-12-12', '2023-12-12'),
(3, 'Giảm 30000', 32, 30000, '2021-02-12', '2022-02-12'),
(6, 'Giảm 50000', 34, 50000, '2022-01-01', '2022-01-30'),
(7, 'Giảm 3000000', 35, 3000000, '2021-12-29', '2022-01-30'),
(8, 'Giảm 3000000', 36, 3000000, '2021-12-28', '2022-02-26'),
(9, 'Giảm 1000000', 31, 1000000, '2021-12-31', '2022-01-31'),
(10, 'Giảm 100000', 29, 3000000, '2021-12-28', '2022-01-15'),
(11, 'Giảm 10000', 30, 10000, '2022-01-01', '2022-01-30'),
(12, 'Giảm 5000000', 38, 5000000, '2021-12-29', '2022-01-30'),
(13, 'Giảm 3000000', 40, 3000000, '2021-12-29', '2022-01-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`) VALUES
(1, 'Laptop'),
(10, 'Card Màn Hình - GPU'),
(36, 'CPU'),
(37, 'Điện Thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` int(10) NOT NULL,
  `tennsx` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `diachi`) VALUES
(1, 'Apple', 'diachi'),
(3, 'Lenovo', 'diachi1'),
(4, 'Asus', 'diachi'),
(5, 'Aser', 'diachi'),
(6, 'Gigabyte', 'diachi'),
(7, 'Nokia', '180 Cao Lỗ'),
(8, 'Sony', 'Akihabara, Nhật Bản'),
(9, 'MSI', '180 Cao Lỗ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maloai` int(10) NOT NULL,
  `mansx` int(10) NOT NULL,
  `baohanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mausac` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dophangiai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocung` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trongluong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hedieuhanh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketnoi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongtonkho` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `hinhanh`, `maloai`, `mansx`, `baohanh`, `mausac`, `cpu`, `ram`, `gpu`, `dophangiai`, `ocung`, `pin`, `trongluong`, `hedieuhanh`, `ketnoi`, `camera`, `soluongtonkho`) VALUES
(11, 'MacBook Air 2020', 100000000, 'macbook_air_m1_s94h-4u.png', 1, 1, '24 thang', 'Trắng', 'Apple M1', '8gb', 'Apple 8 Cores', '1920x1080 - 144hz', '512GB - SSD', '90 WHM', '2 kg', 'MacOs', 'Bluetooth 5, Wifi 6, Type - C, HDMI', 'Full HD', 10),
(27, 'Card màn hình gigabyte', 10000000, '59242_card_man_hinh_gigabyte_gtx_1650_d6_oc_4g_1.jpg', 10, 6, '2 năm', 'đen', '', '4gb', 'Gtx Nvidia', '', '', '', '', '', '', '', 10),
(28, 'Macbook 13', 1000000, '2.jpg', 1, 1, '2 năm', 'Trắng', 'i5 10550H', '32gb', 'Apple 8 Cores', '1920x1080 - 144hz', '1TB - HDD', '10000MH', '3kg', 'Ubuntu', 'Bluetooth 5, Wifi 6, Type - C, HDMI', 'Full HD', 61),
(29, 'Macbook 11', 50000000, '4.jpg', 1, 1, '2 năm', 'Trắng', 'i7 10550H', '32gb', 'Apple 8 Cores', '1920x1080 - 60hz', '128GB - HDD', '10000MH', '3kg', 'MacOs', 'Bluetooth 4, Wifi 5, HDMI', 'Full HD', 97),
(30, 'Macbook 13 pro', 30000000, '6.jpg', 1, 1, '2 năm', 'Đen', 'i7 10550H', '16gb', 'Apple 8 Cores', '1920x1080 - 60hz', '128GB - SSD', '15000MH', '3kg', 'MacOs', 'Bluetooth 4, Wifi 5, HDMI', 'Full HD', 77),
(31, 'Nokia G10', 3490000, 'nokia-g10-4-2.jpg', 37, 7, '2 năm', 'Đen', 'MediaTek Helio G25 8 nhân', '4gb', 'IMG PowerVR GE8320', '1280x1024 - 60hz', '512GB - HDD', '5050 mAh', '194 g', 'Android', 'Bluetooth 5, Wifi 6, Type - C', 'FullHD 1080p@30fpsHD', 15),
(32, 'Nokia 3.4', 3290000, 'nokia-34-1-1-org.jpg', 37, 7, '2 năm', 'Đen', ' Snapdragon 460 8 nhân', '4gb', 'Adreno 610', '1280x1024 - 60hz', '128GB - HDD', '4000 mAh', '180 g', 'Android', 'Bluetooth 5, Wifi 6, Type - C', 'FullHD 1080p@30fps', 60),
(33, 'Nokia C20', 2290000, 'nokia-c20-xanhduong-4-org.jpg', 37, 7, '2 năm', 'Đen', ' Spreadtrum SC9863A 8 nhân', '4gb', ' Mali-G52 MC2', '1920x1080 - 144hz', '128GB - SSD', '2950 mAh', 'Nặng 191 g', 'Android', 'Bluetooth 5, Wifi 6, Type - C', 'FullHD 1080p@30fps, ', 205),
(34, 'Nokia 7.3 5G', 4000000, 'nokia-73-5g-new-1-600x600-1.jpg', 37, 7, '5 năm', 'Xám', 'Snapdragon 765 8 nhân', '4gb', ' Adreno 620', '1920x1080 - 144hz', '128GB - SSD', ' 4000 mAh', '191 g', 'Android', 'Bluetooth 5, Wifi 6, Type - C', ' FullHD 1080p@30fps,', 100),
(35, 'Xperia 1 III', 34990000, 'Xperia 1 III.jpg', 37, 8, '5 năm', 'Đen', 'Qualcomm® Snapdragon™ 888 5G', '32gb', '21:9 CinemaWide™ 6.5 inch', '1920x1080 - 144hz', '1TB - SSD', '4500 mAh', '186 g', 'Android', 'Bluetooth 5, Wifi 6, Type - C', '8 MP', 100),
(36, 'Xperia 5 III', 25990000, 'Xperia 5 III.jpg', 37, 8, '2 năm', 'Đen', 'Qualcomm® Snapdragon™ 888 5G', '16gb', '21:9 CinemaWide™ 6.1 inch', '1920x1080 - 144hz', '512GB - SSD', '4500 mAh', '180 g', 'Android', 'Bluetooth 5, Wifi 6, Type - C', '12 MP', 60),
(38, 'Lenovo Yoga 9', 49990000, 'lenovo-yoga-9-14itl5-i7-82bg006evn-17-org.jpg', 1, 3, '2 năm', 'Galaxy', 'Intel Core i7 Tiger Lake - 118', '32gb', ' Card tích hợp - Intel Iris Xe Graphics', '1920x1080 - 144hz', '1TB - SSD', ' Li-Polymer, 60 Wh', '1.37 kg', 'Window', 'Bluetooth 5, Wifi 6, Type - C, HDMI', 'HD webcam', 99),
(40, 'MSI Gaming GE66 Raider', 77990000, 'msi-gaming-ge66-raider-11uh-i7-259vn-12-2-org.jpg', 1, 9, '5 năm', 'Xám', 'Intel Core i7 Tiger Lake - 118', '32gb', 'NVIDIA GeForce RTX 3080, 16 GB', '1920x1080 - 144hz', '1TB - SSD', '4-cell, 99.9 Wh', '2.38 Kg', 'Window', 'Bluetooth 5, Wifi 6, Type - C, HDMI', ' FHD (30fps@1080p)', 67),
(43, 'Asus ROG Zephyrus G14 Alan Walker', 49490000, 'asus-rog-zephyrus-gaming-g14-ga401qec-r9-k2064t-1-org.jpg', 1, 4, '5 năm', 'Xám', 'AMD Ryzen 9 - 5900HS', '16gb', 'NVIDIA GeForce RTX3050Ti', '1920x1080 - 144hz', '1TB - SSD', ' 4-cell Li-ion, 76 W', '1.7 kg', 'Window', 'Bluetooth 5, Wifi 6, Type - C, HDMI', 'Không tích hợp', 45),
(44, 'Lenovo Ideapad 5 Pro', 27790000, 'lenovo-ideapad-5-pro.jpg', 1, 3, '2 năm', 'Xám', 'Intel Core i7 Tiger Lake - 116', '16gb', ' Card rời - NVIDIA GeForce MX450, 2 GB', '1920x1080 - 144hz', '512GB - SSD', '56.5 Wh', '1.41 kg', 'Window', 'Bluetooth 5, Wifi 6, Type - C, HDMI', 'Camera IR', 66);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `matb` int(10) NOT NULL,
  `tieude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `maqt` int(10) NOT NULL,
  `makh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`matb`, `tieude`, `noidung`, `ngaydang`, `maqt`, `makh`) VALUES
(1, 'Gần Hoàn Thành Admin', 'Hạn Nộp 5/1', '2021-12-26', 1, 1),
(2, 'Sắp Hoàn Thành Admin', 'Hạn Nộp 5/1', '2021-12-27', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matt` int(10) NOT NULL,
  `tieude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `maqt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matt`, `tieude`, `noidung`, `ngaydang`, `maqt`) VALUES
(1, 'tintuc', 'noidung', '2021-12-27', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_admin`
--

CREATE TABLE `user_admin` (
  `maqt` int(10) NOT NULL,
  `tendangnhap` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tenquantri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sdt` char(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_admin`
--

INSERT INTO `user_admin` (`maqt`, `tendangnhap`, `password`, `tenquantri`, `email`, `sdt`) VALUES
(1, 'admin', '123', 'phuong', 'admin@gmail.com', '123124141');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_kh`
--

CREATE TABLE `user_kh` (
  `makh` int(10) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sdt` char(10) CHARACTER SET latin1 NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_kh`
--

INSERT INTO `user_kh` (`makh`, `tenkh`, `email`, `password`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`) VALUES
(1, 'user', 'user@gmail.com', '123', '0933267713', 0, '2000-01-01', 'Los Angeles'),
(2, 'Nguyễn Nhị Long', 'long@gmail.com', '123', '0933213047', 1, '1998-03-07', '180 Cao Lỗ'),
(3, 'Yêu Thầm Mẹ Vợ', 'nguyennhatlong.07112000@gmail.com', 'kexaulatao711704', '0113114115', 1, '2022-01-07', 'Trong tim em'),
(4, 'Khoái Vợ Thằng Bạn', 'khoaivothangban@gmail.com', 'kexaulatao711704', '0168322442', 1, '2022-01-05', 'Paris'),
(5, 'Phạm Thị Dâng Hiến', 'danghien@gmail.com', '12345678', '0113234599', 0, '1993-06-24', 'Loạn Tinh Hải'),
(6, 'Vấp Cỏ Hôi Pen', 'ronaldo@yahoo.com', '12345678', '0999333777', 1, '1985-02-05', 'Bồ Đào Nha'),
(7, 'Đi Bộ Vuốt Râu', 'messi@yahoo.com', '123456', '0933546678', 1, '1987-06-24', 'Argentina'),
(8, 'Trần Như Nhộng', 'trannhunhong@gmail.com', '123', '0933213047', 1, '2003-02-12', 'Hà Nội'),
(9, 'Về Quê Lấy Chồng', 'vequelaychong@gmail.com', '123', '0933267713', 0, '2007-02-07', 'Thanh Hoá'),
(10, 'Vì Gái Quên Bạn', 'vigai@gmail.com', '12345', '0366214751', 1, '2000-10-13', 'Đắc Nông'),
(11, 'Nuôi Vợ Giùm Sếp', 'nuoivogiumsep@gmail.com', '1234', '0933267713', 1, '2003-02-06', '180 Cao Lỗ'),
(12, 'Gen Z', 'genz@gmail.com', '12345678', '0933213333', 0, '2004-06-17', 'Sài Gòn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`mabanner`),
  ADD KEY `maqt` (`maqt`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `masp` (`masp`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`mactdh`),
  ADD KEY `madh` (`madh`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`madg`),
  ADD KEY `masp` (`masp`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `donnhaphang`
--
ALTER TABLE `donnhaphang`
  ADD PRIMARY KEY (`madnh`),
  ADD KEY `mansx` (`mansx`),
  ADD KEY `maqt` (`maqt`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makm`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`mansx`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `mansx` (`mansx`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`matb`),
  ADD KEY `maqt` (`maqt`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matt`),
  ADD KEY `maqt` (`maqt`);

--
-- Chỉ mục cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`maqt`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- Chỉ mục cho bảng `user_kh`
--
ALTER TABLE `user_kh`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `mabanner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `mactdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `madg` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `donnhaphang`
--
ALTER TABLE `donnhaphang`
  MODIFY `madnh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `mansx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `matb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `maqt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_kh`
--
ALTER TABLE `user_kh`
  MODIFY `makh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`maqt`) REFERENCES `user_admin` (`maqt`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`makh`) REFERENCES `user_kh` (`makh`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`makh`) REFERENCES `user_kh` (`makh`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `user_kh` (`makh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donnhaphang`
--
ALTER TABLE `donnhaphang`
  ADD CONSTRAINT `donnhaphang_ibfk_1` FOREIGN KEY (`mansx`) REFERENCES `nhasanxuat` (`mansx`),
  ADD CONSTRAINT `donnhaphang_ibfk_2` FOREIGN KEY (`maqt`) REFERENCES `user_admin` (`maqt`),
  ADD CONSTRAINT `donnhaphang_ibfk_3` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisanpham` (`maloai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`mansx`) REFERENCES `nhasanxuat` (`mansx`);

--
-- Các ràng buộc cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `thongbao_ibfk_1` FOREIGN KEY (`maqt`) REFERENCES `user_admin` (`maqt`),
  ADD CONSTRAINT `thongbao_ibfk_2` FOREIGN KEY (`makh`) REFERENCES `user_kh` (`makh`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`maqt`) REFERENCES `user_admin` (`maqt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
