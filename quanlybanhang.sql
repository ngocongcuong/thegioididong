-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2021 lúc 03:11 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính bảng'),
(3, 'Laptop'),
(4, 'Đồng hồ thông minh'),
(5, 'Đồng hồ thời trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `name` text DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `id` int(11) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`name`, `rating`, `id`, `tel`, `email`, `content`, `id_product`) VALUES
('ngo cong cuong', 4.5, 8, '09090909', 'skybn81993@gmail.com', 'tốt', 7),
('Vũ', 4, 9, '0962531555', '', 'Mua chưa đc 15 ngày mà gọi face hay zalo là bên kia k nghe nói j . Bảo hành thì nói k lỗi j', 7),
('Nguyễn Tấn Thanh', 2.3, 10, '0353000444', '', 'Sài ngon nói chung là ổn 😊😊😊nhưng có cái chơi game dễ nóng máy Mong iPhone sẻ sửa được lổi này', 7),
('Nguyễn Trung Dũng', 4, 11, '0353000444', '', 'Mình mới mua cách đây mấy ngày .sao khi sạc pin máy rất nóng.tgdd tư vấn dùm', 7),
('Nguyễn Thị Thanh Huyền', 3, 12, '09090909', '', 'Lúc mới mua về khi nghe gọi thì loa đàm thoại hơi rè.. gửi về hãng test máy xem có bị lỗi ko.. nhưng hãng báo ko lỗi gửi về lại giờ thì gọi nói chuyện lúc nghe lúc ko luôn 😭😭 cần hỗ trợ', 7),
('Trần Duyên', 5, 13, '032599342', '', 'Rất ưng nha. Có nhân viên hỗ trợ nhanh gọn . Nói chung mình mua bên DMX cảm thấy rất yên tâm', 7),
('Pi Pi', 4, 14, '043500634', '', 'Mua dk 3 tuần thấy mọi thứ cũg ok .mà có cái bật 4g mà mạng vẫn yếu hơn cái note 10+ cũ ... tìm mọi cách rồi thấy vẫn vậy', 7),
('Lý Nhã Kỳ', 4.5, 15, '0962531555', '', 'lkjl;kj;lkj;lkjkljghgh', 7),
('Ngô Công Cường edit', 3.8, 16, '09090909', 'skybnred@gmail.com', 'ádfasdfasdf', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gt` char(10) DEFAULT NULL,
  `ns` year(4) DEFAULT NULL,
  `luongcoban` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hesoluong` float NOT NULL,
  `ngayvaocongty` date DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `name`, `gt`, `ns`, `luongcoban`, `email`, `hesoluong`, `ngayvaocongty`, `tel`) VALUES
(7, 'Ngô Công Phước', 'nam', 1993, 3907459, 'skybn8193@gmail.com', 1, '2020-04-05', '03435353643'),
(11, 'Nguyễn Thị Xuân', 'Nữ', 1994, 4000000, 'ngocongcuong1993@gmail.com', 1.5, '2021-05-06', '08897786756'),
(13, 'Cao Tùng Anh', 'Nữ', 1999, 5000000, 'skybnred@gmail.com', 2.2, '2019-04-07', '09654564534'),
(15, 'Ngô Công Cường edit', 'nữ', 1980, 3200000, 'skybn81993@gmail.com', 1.4, '2021-07-03', '0962531262'),
(16, 'Lý Nhã Kỳ', 'nữ', 1998, 1000000, 'skybnred@yahoo.com', 1.4, '2019-06-13', '09090909'),
(18, 'Triệu Tử Long', 'nữ', 1980, 6000000, 'ngocongcuong1993@gmail.com', 1.4, '2021-07-02', '0962531555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_`
--

CREATE TABLE `order_` (
  `id_order` int(11) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `order_amount` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_`
--

INSERT INTO `order_` (`id_order`, `customer`, `address`, `tel`, `order_amount`, `trangthai`) VALUES
(1, 'ngô công cường', 'Hà Nội', 962531262, 1001301111, 1),
(2, 'Ngô Thị Hằng', 'Gia Lâm', 962531555, 42988000, 0),
(4, 'Ngô Văn Duy', 'Hồ Chí Minh', 353000444, 33330000, 0),
(8, 'đơn hàng test', 'Đà Nẵng', 923452345, 221350000, 0),
(16, 'Nguyễn Thị Mai', 'Hà Nội', 2147483647, 2890000, 1),
(32, 'hdfgh', 'dhgh', 45645, 10990000, 0),
(64, 'ngô công cường', 'Thuận Thành', 962531262, 65940000, 0),
(128, 'ngô công cường', 'Thuận Thành', 962531262, 0, 0),
(256, 'ngô công cường', 'Hồ Chí Minh', 962531262, 10990000, 0),
(512, 'ngô công cường', 'Gia Lâm', 962531262, 4500000, 0),
(1024, 'ngô công cường', 'bắc ninh', 962531262, 2190000, 0),
(2048, 'ngô công cường', 'Hồ Chí Minh', 962531262, 32970000, 0),
(4096, 'ngô công cường', 'Hồ Chí Minh', 962531262, 0, 0),
(8192, 'ngô công cường', 'Gia Lâm', 962531262, 10990000, 0),
(16384, 'ngô công cường', 'bắc ninh', 962531262, 4500000, 0),
(32768, 'ngô công cường', 'bắc ninh', 962531262, 4500000, 0),
(65536, 'ngô công cường', 'Hồ Chí Minh', 962531262, 4500000, 0),
(131072, 'ngô công cường', 'Bắc Ninh', 962531262, 41490000, 1),
(262144, 'Ngô Thị Hằng', 'Hà Nội', 353000444, 13380000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_order`, `id_product`, `qty`, `amount`, `price`) VALUES
(1, 1, 7, 1, 999111111, 999111111),
(2, 1, 11, 1, 2190000, 2190000),
(3, 2, 15, 1, 2890000, 2890000),
(4, 2, 13, 2, 40098000, 20049000),
(5, 4, 34, 1, 8690000, 8690000),
(6, 4, 33, 1, 23990000, 23990000),
(7, 4, 31, 1, 650000, 650000),
(8, 8, 29, 19, 221350000, 11650000),
(9, 16, 15, 1, 2890000, 2890000),
(10, 32, 7, 1, 10990000, 10990000),
(11, 64, 7, 6, 65940000, 10990000),
(12, 256, 7, 1, 10990000, 10990000),
(13, 512, 9, 1, 4500000, 4500000),
(14, 1024, 11, 1, 2190000, 2190000),
(15, 2048, 7, 3, 32970000, 10990000),
(16, 8192, 7, 1, 10990000, 10990000),
(17, 16384, 9, 1, 4500000, 4500000),
(18, 32768, 9, 1, 4500000, 4500000),
(19, 65536, 9, 1, 4500000, 4500000),
(20, 131072, 40, 1, 41490000, 41490000),
(21, 262144, 11, 2, 4380000, 2190000),
(22, 262144, 9, 2, 9000000, 4500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `img_link` varchar(100) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `price_after` int(11) NOT NULL,
  `manhinh` varchar(100) DEFAULT NULL,
  `hedieuhanh` varchar(100) DEFAULT NULL,
  `camerasau` varchar(100) DEFAULT NULL,
  `cameratruoc` varchar(50) DEFAULT NULL,
  `chip` varchar(50) DEFAULT NULL,
  `ram` varchar(20) DEFAULT NULL,
  `rom` varchar(20) DEFAULT NULL,
  `sim` varchar(50) DEFAULT NULL,
  `pin` varchar(30) DEFAULT NULL,
  `sac` varchar(50) DEFAULT NULL,
  `ketnoi` varchar(50) DEFAULT NULL,
  `hang` varchar(30) DEFAULT NULL,
  `cpu` varchar(100) DEFAULT NULL,
  `harddrive` varchar(100) DEFAULT NULL,
  `card` varchar(100) DEFAULT NULL,
  `connector` varchar(100) DEFAULT NULL,
  `dacbiet` varchar(100) DEFAULT NULL,
  `thietke` varchar(50) DEFAULT NULL,
  `kichthuoc` varchar(100) DEFAULT NULL,
  `thoiluongpin` varchar(100) DEFAULT NULL,
  `matdongho` varchar(50) DEFAULT NULL,
  `chucnang` varchar(500) DEFAULT NULL,
  `ngayramat` year(4) DEFAULT NULL,
  `tienich` varchar(500) DEFAULT NULL,
  `catalog_id` int(11) DEFAULT NULL,
  `thuonghieu` int(11) DEFAULT NULL,
  `mota_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_product`, `name`, `price`, `amount`, `img_link`, `content`, `price_after`, `manhinh`, `hedieuhanh`, `camerasau`, `cameratruoc`, `chip`, `ram`, `rom`, `sim`, `pin`, `sac`, `ketnoi`, `hang`, `cpu`, `harddrive`, `card`, `connector`, `dacbiet`, `thietke`, `kichthuoc`, `thoiluongpin`, `matdongho`, `chucnang`, `ngayramat`, `tienich`, `catalog_id`, `thuonghieu`, `mota_link`) VALUES
(7, 'Samsung Galaxy A52 5G testtttttttt', 10490000, 7763, './public/img/sanpham/samsung-galaxy-a52-5g-thumb-black-600x600-600x600.jpg', 'Samsung Galaxy A52 5G', 10990000, 'Super AMOLED6.5\"Full HD+', 'Android 11', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', '32 MP', 'Snapdragon 750G 5G', '8 GB', '128 GB', '2 Nano SIMHỗ trợ 5G', '4500 mAh', '25 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(9, 'Xiaomi Redmi 9T (6GB/128GB)', 4590000, 120, './public/img/sanpham/4.jpg', 'Xiaomi Redmi 9T (6GB/128GB', 4500000, 'IPS LCD6.53\"Full HD+', 'Android 10', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '8 MP', 'Snapdragon 662', '6 GB', '128 GB', '\r\n2 Nano SIMHỗ trợ 4G', '6000 mAh', '18 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL),
(11, 'Realme C20', 2290000, 186, './public/img/sanpham/5.jpg', 'Real C20', 2190000, 'LCD6.5\"HD+', 'Android 10', '8 MP', '5 MP', 'MediaTek Helio G35', '2 GB', '32 GB', '2 Nano SIMHỗ trợ 4G', '\r\n5000 mAh', '10 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(13, 'Samsung Galaxy S21 5G', 20990000, 1, './public/img/sanpham/6.jpg', 'Samsung Galaxy S21 5G', 20049000, 'Dynamic AMOLED 2X6.2\"Full HD+', 'Android 11', 'Chính 12 MP & Phụ 64 MP, 12 MP', '10 MP', 'Exynos 2100', '8 GB', '128 GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G', '4000 mAh', '25 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(15, 'Vivo Y12s (3GB/32GB)', 2990000, 11, './public/img/sanpham/7.jpg', 'Vivo Y12s (3GB/32GB)', 2890000, 'IPS LCD6.51\"HD+', 'Android 10', 'Chính 13 MP & Phụ 2 MP', '8 MP', 'MediaTek Helio P35', '3 GB', '32 GB', '2 Nano SIMHỗ trợ 4G', '5000 mAh', '10 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL),
(17, 'Iphone 12 128GB', 23990000, 45, './public/img/sanpham/8.jpg', 'Iphone 12 128GB', 23890000, 'OLED6.1\"Super Retina XDR', 'iOS 14', '2 camera 12 MP', '12 MP', 'Apple A14 Bionic', '4 GB', '128 GB', '1 Nano SIM & 1 eSIMHỗ trợ 5G', '2815 mAh', '20 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(19, 'Vivo V20', 7790000, 45, './public/img/sanpham/9.jpg', 'Vivo V20', 7690000, 'AMOLED6.44\"Full HD+', 'Android 11', 'Chính 64 MP & Phụ 8 MP, 2 MP', '44 MP', 'Snapdragon 720G', '\r\n8 GB', '128 GB', '2 Nano SIMHỗ trợ 4G', '4000 mAh', '33 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL),
(21, 'OPPO Reno4 Pro', 10190000, 56, './public/img/sanpham/10.jpg', 'OPPO Reno4 Pro', 10090000, 'AMOLED6.5\"Full HD+', '\r\nAndroid 10', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '32 MP', 'Snapdragon 720G', '8 GB', '256 GB', '2 Nano SIMHỗ trợ 4G', '4000 mAh', '65 W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL),
(23, 'Huawei Watch GT2 Pro 46mm dây da', 8290000, 45, './public/img/sanpham/11.jpg', 'Huawei Watch GT2 Pro 46mm dây da', 8190000, 'AMOLED, 1.39 inch', 'Android 4.4 trở lên, iOS 9 trở lên', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khoảng 14 ngày, Khoảng 30 giờ khi sử dụng GPS', 'Kính Saphire, 46 mm', 'Chế độ luyện tập, Theo dõi giấc ngủ, Theo dõi mức độ stress, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo lượng tiêu thụ oxy tối đa, Đo nhịp tim, Đo nồng độ oxy trong máu, Đếm số bước chân', NULL, NULL, 4, 10, NULL),
(25, 'Samsung Galaxy Watch 3 LTE 45mm viền thép dây da', 7140000, 76, './public/img/sanpham/12.jpg', 'Samsung Galaxy Watch 3 LTE 45mm viền thép dây da', 7100000, 'SUPER AMOLED, 1.4 inch', 'Android 5.0 trở lên, iOS 9 trở lên', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khoảng 2 ngày', 'Kính cường lực Gorrilla Glass Dx+, 45 mm', 'Đo nồng độ oxy trong máu, Đo nhịp tim, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đếm số bước chân, Chế độ luyện tập', NULL, NULL, 4, 2, NULL),
(27, 'Ipad Air 4 Wifi 256GB (2020)', 20690000, 50, './public/img/sanpham/13.jpg', 'Ipad Air 4 Wifi 256GB (2020)', 20030000, '10.9\", Liquid Retina', 'iPadOS 14', '\r\n12 MP', '7 MP', 'Apple A14 Bionic', '4 GB', '256 GB', NULL, '28.65 Wh (~ 7600 mAh)', NULL, 'Nghe gọi qua FaceTime', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL),
(29, 'Lenovo ThinkBook 15IIL i3 1005G1', 11690000, 1, './public/img/sanpham/14.jpg', 'Lenovo ThinkBook 15IIL i3 1005G1', 11650000, '15.6\", Full HD (1920 x 1080)', 'Windows 10 Home SL', NULL, NULL, NULL, '4 GB, DDR4 (1 khe), ', NULL, NULL, NULL, NULL, NULL, NULL, '\r\nIntel Core i3 Ice Lake, 1005G1, 1.20 GHz', 'SSD 512 GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', 'Card tích hợp, Intel UHD Graphics', '2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, 2 x USB Type-C', NULL, '\r\nVỏ kim loại', 'Dày 18.9 mm, 1.8 Kg', NULL, NULL, NULL, 2020, NULL, 3, 17, NULL),
(31, 'Mi Band 5', 690000, 16, './public/img/sanpham/15.jpg', 'Mi Band 5', 650000, 'AMOLED, 1.1 inch', 'Android 5.0 trở lên, iOS 10 trở lên', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khoảng 14 ngày', 'Kính cường lực, 19 mm', 'Đo nhịp tim, Theo dõi giấc ngủ, Tính quãng đường chạy, Đếm số bước chân, Chế độ luyện tập', NULL, 'Điều khiển chụp ảnh, Đồng hồ bấm giờ, Rung thông báo, Thay mặt đồng hồ, Báo thức, Dự báo thời tiết, Từ chối cuộc gọi', 4, 5, NULL),
(33, 'Samsung Galaxy S21+ 5G 256GB', NULL, 86, './public/img/sanpham/samsung-galaxy-s21-plus-256gb-bac-600x600-600x600.jpg', NULL, 23990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(34, 'OPPO Reno5', NULL, 176, './public/img/sanpham/oppo-reno5-trang-600x600-1-600x600.jpg', NULL, 8690000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL),
(35, 'Samsung Galaxy S20 FE (8GB/256GB)', 15490000, 1000, './public/img/sanpham/samsung-galaxy-s20-fan-edition-090320-040338-600x600.jpg', NULL, 15490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(36, 'Realme C21Y 4GB', 3990000, 1500, './public/img/sanpham/realme-c21y-black-600x600.jpg', NULL, 3990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(37, 'OPPO Reno5 Marvel', 9690000, 1500, './public/img/sanpham/oppo-reno5-marvel-thumb-600x600-600x600.jpg', NULL, 8230000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL),
(38, 'Samsung Galaxy Z Fold2 5G', 50000000, 1000000, './public/img/sanpham/samsung-galaxy-z-fold-2-den-600x600.jpg', NULL, 50000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(39, 'Samsung Galaxy Z Fold2 5G Đặc Biệt', 50000000, 1000, './public/img/sanpham/samsung-galaxy-z-fold-2-den-600x600-600x600.jpg', NULL, 50000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(40, 'iPhone 12 Pro Max 512GB', 42990000, 1000, './public/img/sanpham/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', NULL, 41490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(41, 'iPhone 12 Pro 512GB', 38990000, 1000, './public/img/sanpham/iphone-12-pro-xanh-duong-new-600x600-600x600.jpg', NULL, 36990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(42, 'iPhone 12 Pro Max 256GB', 37490000, 1200, './public/img/sanpham/iphone-12-pro-max-vang-new-600x600-1-600x600.jpg', NULL, 35990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(43, 'iPhone 12 Pro Max 128GB', 32990000, 1300, './public/img/sanpham/iphone-12-pro-xanh-duong-new-600x600-600x6001.jpg', NULL, 30990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(44, 'iPhone 12 Pro 256GB ', 31990000, 1100, './public/img/sanpham/iphone-12-pro-xam-new-600x600-600x600.jpg', NULL, 28490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(45, 'iPhone 12 Pro 128GB', 30990000, 1500, './public/img/sanpham/iphone-12-pro-bac-new-600x600-600x600.jpg', NULL, 28490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(46, 'Samsung Galaxy Note 20 Ultra 5G Trắng', 32990000, 1500, './public/img/sanpham/samsunggalaxynote20ultratrangnew-600x600-600x600.jpg', NULL, 23990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(47, 'Xiaomi Mi 11 5G', 21990000, 1500, './public/img/sanpham/xiaomi-mi-11-xanhduong-600x600-600x600.jpg', NULL, 18490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL),
(48, 'Xiaomi Mi 10T Pro 5G', 12990000, 1000, './public/img/sanpham/xiaomi-mi-11-xanhduong-600x600-600x6001.jpg', NULL, 12490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL),
(49, 'OPPO Reno5 5G', 11990000, 2000, './public/img/sanpham/oppo-reno5-5g-thumb-600x600.jpg', NULL, 10990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL),
(50, ' Samsung Galaxy A52 (8GB/256GB) ', 10290, 1500, './public/img/sanpham/samsung-galaxy-a52-8gb-256gb-thumb-blue-600x600-600x6001.jpg', NULL, 10290000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(51, 'Vivo V21 5G', 9990000, 2000, './public/img/sanpham/vivo-v21-5g-xanh-den-600x600.jpg', NULL, 9490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL),
(52, 'Samsung Galaxy A52 (8GB/128GB)', 9290000, 3333, './public/img/sanpham/samsung-galaxy-a52-8gb-256gb-thumb-blue-600x600-600x600.jpg', NULL, 8810000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(53, 'Realme 8 Pro Vàng Rực Rỡ', 8690000, 3000, './public/img/sanpham/realme-8-pro-vang-600x600.jpg', NULL, 8690000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(54, 'Realme 7 Pro ', 8990000, 4777, './public/img/sanpham/realme-7-pro-bac-600x600.jpg', NULL, 8190000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(55, 'Vivo V20 (2021)', 8490000, 4000, './public/img/sanpham/vivov202021xanhhong-600x600.jpg', NULL, 7790000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL),
(56, 'Vivo Y72 5G', 7990000, 3600, './public/img/sanpham/vivo-y72-5g-blue-600x600.jpg', NULL, 7590000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL),
(57, 'Xiaomi Mi 11 Lite', 7990000, 3555, './public/img/sanpham/xiaomi-mi-11-lite-4g-blue-600x600.jpg', NULL, 7590000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL),
(58, 'Xiaomi Redmi Note 10 Pro (8GB/128GB)', 7490000, 5000, './public/img/sanpham/xiaomi-redmi-note-10-pro-thumb-xam-600x600-600x600.jpg', NULL, 7490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, NULL),
(59, 'OPPO A94 ', 7690000, 5666, './public/img/sanpham/oppo-a94-black-thumb-600x600-1-600x600.jpg', NULL, 7290000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL),
(60, 'Realme 8 ', 7290000, 5664, './public/img/sanpham/realme-8-silver-600x600.jpg', NULL, 7290000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(61, 'Samsung Galaxy A51 (6GB/128GB)', 7990000, 1500, './public/img/sanpham/samsung-galaxy-a51-silver-600x600.jpg', NULL, 7090000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(62, 'Realme 6 Pro', 6990000, 7000, './public/img/sanpham/realme-6-pro-do-600x600.jpg', NULL, 6990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(63, 'Samsung Galaxy A32', 6690000, 2000, './public/img/sanpham/samsung-galaxy-a32-4g-thumb-tim-600x600-600x600.jpg', NULL, 6690000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL),
(64, 'Realme 7', 6990000, 2000, './public/img/sanpham/realme-7-blue-600x600.jpg', NULL, 6490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL),
(65, 'Vsmart Aris Pro ', 8490000, 1000, './public/img/sanpham/vsmart-aris-pro-green-600jpg-600x600.jpg', NULL, 6490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(66, 'Vsmart Aris (8GB/128GB)', 6690000, 1000, './public/img/sanpham/vsmart-aris-xanhduong-600x600-600x600.jpg', NULL, 5690000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(67, 'Vsmart Live 4 6GB', 4290000, 1000, './public/img/sanpham/vsmart-live-4-den-600x600.jpg', NULL, 3890000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(68, 'Vsmart Star 5 (3GB/64GB)', 2890000, 1000, './public/img/sanpham/vsmart-star-5-thumb-green-600x600.jpg', NULL, 2590000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(69, 'Vsmart Active 3 (6GB/64GB)', 3990000, 1000, './public/img/sanpham/vsmart-active-3-tim-600x600-600x600.jpg', NULL, 3390000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(70, 'Vsmart Joy 4 (4GB/64GB) ', 3590000, 1000, './public/img/sanpham/vsmart-joy-4-xanh-600x600.jpg', NULL, 3180000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(71, 'Vsmart Joy 4 (3GB/64GB) ', 3290000, 1000, './public/img/sanpham/vsmart-joy-4-den-600x600.jpg', NULL, 2890000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, NULL),
(72, 'Lenovo Legion 5 15IMH05 i7 10750H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (82AU0051VN)', 28990000, 500, './public/img/sanpham/lenovo-legion-5-15imh05-i7-82au0051vn-210520-040515-600x600.jpg', NULL, 25990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 17, NULL),
(73, 'Lenovo Ideapad Gaming 3 15IMH05 i7 10750H/8GB/512GB/4GB GTX1650Ti/120Hz/Win10 (81Y4013UVN)', 26990000, 1000, './public/img/sanpham/lenovo-ideapad-gaming-3-15imh05-i7-81y4013uvn-600x600.jpg', NULL, 22940000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 17, NULL),
(74, 'Acer Nitro 5 AN515 45 R3SM R5 5600H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (NH.QBMSV.005) ', 23490000, 1000, './public/img/sanpham/acer-nitro-5-an515-45-r3sm-r5-nhqbmsv005-600x600.jpg', NULL, 22310000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 18, NULL),
(75, 'Lenovo IdeaPad 3 15ITL6 i5 1135G7/8GB/512GB/Win10 (82H80042VN) ', 17990000, 1500, './public/img/sanpham/lenovo-ideapad-3-15itl6-i5-82h80042vn-600x600.jpg', NULL, 17090000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 17, NULL),
(76, 'HP 340s G7 i3 1005G1/4GB/512GB/Win10 (224L1PA)', 13590000, 2000, './public/img/sanpham/hp-340s-g7-i3-224l1pa-302720-092751-600x600.jpg', NULL, 12910000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 16, NULL),
(77, 'Acer Aspire 7 A715 42G R4ST R5 5500U/8GB/256GB/4GB GTX1650/Win10 (NH.QAYSV.004)', 19990000, 1500, './public/img/sanpham/acer-aspire-7-a715-42g-r4st-r5-nhqaysv004-16-600x600.jpg', NULL, 18990000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 18, NULL),
(78, 'HP Pavilion Gaming 15 dk1159TX i7 10750H/8GB/32GB+512GB/4GB GTX1650Ti/Win10 (31J36PA)', 28990000, 500, './public/img/sanpham/hp-pavilion-gaming-15-dk1159tx-i7-10750h-8gb-32gb-600x600.jpg', NULL, 24640000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 16, NULL),
(79, 'HP EliteBook X360 1040 G8 i7 1165G7/16GB/512GB/Touch/Pen/Win10 Pro (3G1H4PA)', 49590000, 1000, './public/img/sanpham/hp-elitebook-x360-1040-g8-i7-1165g7-16gb-512gb-600x600.jpg', NULL, 49590000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 16, NULL),
(80, 'HP Envy 15 ep0145TX i7 10750H/16GB/1TB SSD/6GB GTX 1660Ti Max-Q/Office H&S2019/Touch/Win10 (231V7PA)', 54990000, 1000, './public/img/sanpham/hp-envy-15-ep1045tx-i7-231v7pa-15-600x600.jpg', NULL, 46740000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 16, NULL),
(81, 'HP Omen 15 ek0079TX i7 10750H/16GB/1TB SSD/6GB RTX2060/300Hz/Office H&S2019/Win10 (26Y69PA)', 54990000, 100, './public/img/sanpham/hp-omen-15-ek0079tx-i7-26y69pa-600x600.jpg', NULL, 46740000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 16, NULL),
(82, 'HP EliteBook X360 1040 G7 i7 10710U/16GB/512GB+32GB/Pen/Touch/Win10 Pro (230P8PA)', 48990000, 600, './public/img/sanpham/hp-elitebook-x360-1040-g7-i7-230p8pa-23-600x600.jpg', NULL, 41640000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 16, NULL),
(83, 'Dell Inspiron 3501 i5 1135G7/4GB/512GB/Win10 (P90F005N3501B)', 17290000, 1000, './public/img/sanpham/5-600x600.jpg', NULL, 17290000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 19, NULL),
(84, 'Dell Inspiron 7501 i5 10300H/8GB/512GB/4GB GTX1650Ti/Win10 (N5I5012W)', 30490000, 1500, './public/img/sanpham/dell-inspiron-7501-i5-n5i5012w-600x600.jpg', NULL, 30490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 19, NULL),
(85, 'Dell G5 15 5500 i7 10750H/8GB/512GB/120Hz/6GB GTX1660Ti/Win10 (70225485)', 31290000, 100, './public/img/sanpham/dell-g5-15-5500-i7-70225485-094921-024956-600x600.jpg', NULL, 29720000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 19, NULL),
(86, 'Dell Inspiron 7306 i5 1135G7/8GB/512GB/Touch/Pen/Win10 (N3I5202W)', 28490000, 1000, './public/img/sanpham/dell-inspiron-7306-i5-n3i5202w-155321-025356-600x600.jpg', NULL, 28490000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 19, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `name`) VALUES
(1, 'APPLE'),
(2, 'SAMSUNG'),
(3, 'OPPO'),
(4, 'VIVO'),
(5, 'XIAOMI'),
(6, 'REALME'),
(7, 'Vsmart'),
(8, 'GOOGLE'),
(9, 'NOKIA'),
(10, 'HUAWEI'),
(11, 'MOBELL'),
(12, 'ITEL'),
(13, 'MASSTEL'),
(14, 'ENERGIZER'),
(15, 'ASUS'),
(16, 'HP'),
(17, 'LENOVO'),
(18, 'ACER'),
(19, 'DELL'),
(20, 'LG'),
(21, 'MSI'),
(22, 'CANON'),
(23, 'SONY');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lv` int(11) DEFAULT NULL,
  `gioitinh` varchar(10) DEFAULT NULL,
  `ns` year(4) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lv`, `gioitinh`, `ns`, `email`, `code`) VALUES
(4433, 'cuong', '111111', 'Ngô Công Cường', 1, 'nam', 1993, 'ngocongcuong1993@gmail.com', 749557),
(4440, 'nguyenvanhoang', '123456', 'Nguyễn Văn Hoàng', 1, 'nam', 1999, 'skybn81993@gmail.com', NULL),
(4441, 'admin', 'admin', 'Ngô Công Cường edit', 1, 'nữ', 2000, 'giac_mo_toi@yahoo.com', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_`
--
ALTER TABLE `order_`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `img_link` (`img_link`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4447;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
