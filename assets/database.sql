-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2024 lúc 05:07 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lego_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idquocgia` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idquocgia`, `dongia`, `soluongmua`, `soluongton`, `hinh`, `giamgia`, `percent`) VALUES
(1, 2, 1269000, 126, 87, 'xuongkhunglong.jpg', 0, 0),
(2, 1, 299000, 412, 6, 'tructhangcuhoa.jpg', 90000, 30),
(3, 2, 2659000, 597, 43, 'phico.jpg', 0, 0),
(4, 3, 629000, 457, 32, 'chiecxemonster.jpg', 189000, 30),
(5, 4, 309000, 900, 4, 'tauconthoi.jpg', 93000, 30),
(6, 4, 149000, 126, 31, 'maychuphinh.jpg', 0, 0),
(7, 1, 59000, 213, 98, 'mockhoa.jpg', 18000, 31),
(8, 1, 709000, 999, 55, 'thietkethoitrang.jpg', 215000, 30),
(9, 4, 449000, 459, 58, 'SUPERHEROES.jpg', 0, 0),
(10, 1, 1269000, 437, 12, 'legothoitrang.jpg', 0, 0),
(11, 4, 129000, 31, 54, 'xevespa.jpg', 0, 0),
(12, 1, 499000, 21, 32, 'xebieudien.jpg', 123940, 25),
(13, 3, 379000, 126, 32, 'xeminivan.jpg', 94180, 25),
(14, 3, 129000, 432, 12, 'mohinhquaivat.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `sohoadon` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `quocgia` varchar(20) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`sohoadon`, `mahh`, `soluongmua`, `quocgia`, `thanhtien`, `tinhtrang`) VALUES
(1, 1, 1, 'Việt Nam', 1269000, 0),
(2, 1, 1, 'Việt Nam', 1269000, 0),
(3, 1, 1, 'Việt Nam', 1269000, 0),
(4, 1, 1, 'Việt Nam', 1269000, 0),
(5, 11, 1, 'Việt Nam', 129000, 0),
(6, 4, 1, 'Việt Nam', 440000, 0),
(7, 4, 1, 'Việt Nam', 440000, 0),
(8, 4, 1, 'Việt Nam', 440000, 0),
(9, 3, 1, 'Việt Nam', 2659000, 0),
(9, 4, 1, 'Việt Nam', 440000, 0),
(10, 3, 1, 'Việt Nam', 2659000, 0),
(10, 4, 1, 'Việt Nam', 440000, 0),
(11, 3, 2, 'Việt Nam', 5318000, 0),
(11, 4, 1, 'Việt Nam', 440000, 0),
(12, 3, 2, 'Việt Nam', 5318000, 0),
(12, 4, 1, 'Việt Nam', 440000, 0),
(13, 3, 2, 'Việt Nam', 5318000, 0),
(13, 4, 1, 'Việt Nam', 440000, 0),
(13, 6, 1, 'Việt Nam', 149000, 0),
(13, 7, 1, 'Việt Nam', 41000, 0),
(14, 3, 2, 'Việt Nam', 5318000, 0),
(14, 4, 1, 'Việt Nam', 440000, 0),
(14, 6, 1, 'Việt Nam', 149000, 0),
(14, 7, 1, 'Việt Nam', 41000, 0),
(15, 3, 2, 'Việt Nam', 5318000, 0),
(15, 4, 1, 'Việt Nam', 440000, 0),
(15, 6, 1, 'Việt Nam', 149000, 0),
(15, 7, 1, 'Việt Nam', 41000, 0),
(16, 3, 2, 'Việt Nam', 5318000, 0),
(16, 4, 1, 'Việt Nam', 440000, 0),
(16, 6, 1, 'Việt Nam', 149000, 0),
(16, 7, 1, 'Việt Nam', 41000, 0),
(17, 3, 2, 'Việt Nam', 5318000, 0),
(17, 4, 1, 'Việt Nam', 440000, 0),
(17, 6, 1, 'Việt Nam', 149000, 0),
(17, 7, 1, 'Việt Nam', 41000, 0),
(18, 3, 2, 'Việt Nam', 5318000, 0),
(18, 4, 1, 'Việt Nam', 440000, 0),
(18, 6, 1, 'Việt Nam', 149000, 0),
(18, 7, 1, 'Việt Nam', 41000, 0),
(19, 3, 2, 'Việt Nam', 5318000, 0),
(19, 4, 1, 'Việt Nam', 440000, 0),
(19, 6, 1, 'Việt Nam', 149000, 0),
(19, 7, 1, 'Việt Nam', 41000, 0),
(20, 3, 2, 'Việt Nam', 5318000, 0),
(20, 4, 1, 'Việt Nam', 440000, 0),
(20, 6, 1, 'Việt Nam', 149000, 0),
(20, 7, 1, 'Việt Nam', 41000, 0),
(21, 3, 2, 'Việt Nam', 5318000, 0),
(21, 4, 1, 'Việt Nam', 440000, 0),
(21, 6, 1, 'Việt Nam', 149000, 0),
(21, 7, 1, 'Việt Nam', 41000, 0),
(22, 3, 2, 'Việt Nam', 5318000, 0),
(22, 4, 1, 'Việt Nam', 440000, 0),
(22, 6, 1, 'Việt Nam', 149000, 0),
(22, 7, 1, 'Việt Nam', 41000, 0),
(23, 3, 2, 'Việt Nam', 5318000, 0),
(23, 4, 1, 'Việt Nam', 440000, 0),
(23, 6, 1, 'Việt Nam', 149000, 0),
(23, 7, 1, 'Việt Nam', 41000, 0),
(24, 3, 2, 'Việt Nam', 5318000, 0),
(24, 4, 1, 'Việt Nam', 440000, 0),
(24, 6, 1, 'Việt Nam', 149000, 0),
(24, 7, 1, 'Việt Nam', 41000, 0),
(25, 3, 2, 'Việt Nam', 5318000, 0),
(25, 4, 1, 'Việt Nam', 440000, 0),
(25, 6, 1, 'Việt Nam', 149000, 0),
(25, 7, 1, 'Việt Nam', 41000, 0),
(26, 3, 2, 'Việt Nam', 5318000, 0),
(26, 4, 1, 'Việt Nam', 440000, 0),
(26, 6, 1, 'Việt Nam', 149000, 0),
(26, 7, 1, 'Việt Nam', 41000, 0),
(27, 5, 1, 'Việt Nam', 216000, 0),
(28, 5, 1, 'Việt Nam', 216000, 0),
(29, 5, 1, 'Việt Nam', 216000, 0),
(30, 5, 1, 'Việt Nam', 216000, 0),
(31, 5, 1, 'Việt Nam', 216000, 0),
(32, 5, 1, 'Việt Nam', 216000, 0),
(33, 5, 1, 'Việt Nam', 216000, 0),
(34, 5, 1, 'Việt Nam', 216000, 0),
(35, 5, 1, 'Việt Nam', 216000, 0),
(36, 5, 1, 'Việt Nam', 216000, 0),
(37, 5, 1, 'Việt Nam', 216000, 0),
(38, 5, 1, 'Việt Nam', 216000, 0),
(39, 5, 1, 'Việt Nam', 216000, 0),
(40, 5, 1, 'Việt Nam', 216000, 0),
(41, 5, 1, 'Việt Nam', 216000, 0),
(42, 5, 1, 'Việt Nam', 216000, 0),
(43, 5, 1, 'Việt Nam', 216000, 0),
(44, 5, 1, 'Việt Nam', 216000, 0),
(45, 5, 1, 'Việt Nam', 216000, 0),
(46, 5, 1, 'Việt Nam', 216000, 0),
(47, 5, 1, 'Việt Nam', 216000, 0),
(48, 5, 1, 'Việt Nam', 216000, 0),
(49, 5, 1, 'Việt Nam', 216000, 0),
(50, 5, 1, 'Việt Nam', 216000, 0),
(51, 5, 1, 'Việt Nam', 216000, 0),
(52, 5, 1, 'Việt Nam', 216000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(50) NOT NULL,
  `maloai` int(11) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaydang` date NOT NULL,
  `mota` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `soluotxem`, `ngaydang`, `mota`) VALUES
(1, 'Đồ chơi lắp ráp Bộ khảo cổ xương khủng long LEGO J', 1, 132, '2024-02-15', 'Đồ Chơi Lắp Ráp Bộ Khảo Cổ Xương Khủng Long LEGO JURASSIC 76964 (577 Chi Tiết)\r\nTrải nghiệm lắp ráp chiếc đầu của bộ xương T. rex! Khám phá ngay LEGO® Jurassic World và lắp ráp phiên bản xương khủng long cực ngầu của riêng bạn. Chiếc đầu có hàm có thể mở hoặc đóng. Ngoài ra còn có một dấu chân \'hóa thạch\' và mảnh \'hổ phách\' để trưng bày.\r\n• Đồ chơi lắp ráp Bộ khảo cổ xương khủng long – Khơi dậy niềm đam mê khám phá loài động vật thời tiền sử - khủng long. Bộ lắp ráp dành cho lứa tuổi từ 9 trở lên\r\n• Bộ trò chơi gồm bộ xương đầu của khủng long T. rex, dấu chân \'hóa thạch\' và giá đỡ để giữ chúng, cùng một tấm bảng và một mảnh \'hổ phách\' bí mật.\r\n• Bộ LEGO® Jurassic World – Món quà tuyệt vời này sẽ mang đến cho bé một cuộc phiêu lưu vào thế giới cổ đại, hóa thân thành một nhà sinh vật học hoặc trở thành một người anh hùng\r\n• Hướng dẫn lắp ráp qua ứng dụng – Ứng dụng LEGO® Builder sẽ hướng dẫn bé tham gia cuộc phiêu lưu và lắp ráp dễ dàng hơn với các công cụ cho phép bé có thể phóng to và xoay mô hình ở chế độ 3D, lưu quá trình và theo dõi tiến trình của bé.\r\n• Bộ lắp ráp LEGO® Jurassic World – Mang đến cho bé một bộ trò chơi đầy lôi cuốn. Trải nghiệm khám phá những loài động vật đã tuyệ chủng - khủng long, giúp bé mở rộng khả năng sáng tạo và phát triển kỹ năng tư duy của mình\r\n• Kích thước – Bộ lắp ráp này gồm 577 mảnh ghép, sau khi hoàn thiện cao hơn 8 inch (21 cm), rộng 7 inch (18 cm) và sâu 6,5 inch (16 cm)'),
(2, 'Đồ chơi lắp ráp Trực thăng cứu hỏa LEGO CITY 60411', 1, 654, '2023-12-08', 'Sẵn sàng cho các nhiệm vụ chữa cháy ly kỳ với Bộ LEGO® City Đồ chơi lắp ráp Trực thăng cứu hỏa! Lấy mũ bảo hiểm cứu hỏa và ống nhòm trinh sát từ ngăn chứa đồ, nhảy vào buồng lái và quay cánh quạt để bay lên không trung. Tiếp cận vùng nguy hiểm và kích hoạt các khẩu pháo nước mạnh mẽ để dập tắt ngọn lửa trong nháy mắt! Những nhiệm vụ chữa cháy thú vị đang chờ đợi bé ở Thành phố LEGO.\r\n\r\n• Đồ chơi lắp ráp Trực thăng cứu hỏa – Bộ trò chơi này mang đến cho bé những cuộc phiêu lưu cứu hộ đầy hành động\r\n\r\n• Có gì trong bộ trò chơi này nào? – Bao gồm mọi thứ bé cần để chế tạo một chiếc trực thăng cứu hỏa đồ chơi và mô hình minifigure phi công lính cứu hỏa\r\n\r\n• Trò chơi giàu trí tưởng tượng – Trẻ em có thể đưa phi công vào buồng lái, quay cánh quạt và dùng nước vòi phun đồ chơi của trực thăng\r\n\r\n• Bộ đồ chơi máy bay trực thăng có hướng dẫn tương tác – Khám phá ứng dụng LEGO® Builder nơi trẻ em có thể phóng to và xoay mô hình ở chế độ 3D, theo dõi tiến trình xây dựng cũng như khám phá và lưu các bộ đồ chơi ảo\r\n\r\n• Món quà tuyệt vời cho bé yêu – Bộ trò chơi này chắc chắn sẽ là một món quà thú vị dành cho những bé yêu thích những pha giải cứu mạo hiểm, hoặc yêu thích ô tô, máy bay và các phương tiện khác.\r\n\r\n• Biến mọi thứ trở nên thú vị – Bộ trò chơi xây dựng LEGO® City giúp trẻ phát triển sự tự tin và các kỹ năng sống quan trọng thông qua trò chơi và thể hiện sự sáng tạo không giới hạn\r\n\r\n• Kích thước – Bộ trò chơi này gồm 85 mảnh, sau khi hoàn thiện có chiều cao trên 3,5 inch (9 cm), dài 8,5 inch (22 cm) và rộng 2,5 inch (6 cm).'),
(3, 'Đồ chơi lắp ráp Phi cơ Blackbird của X-Men LEGO SU', 1, 338, '2023-12-08', 'Wolverine, Cyclops, Rogue và Magneto bước vào buồng lái của chiếc phản lực LEGO® Marvel X-Jet và tiến vào cuộc chiến! Chiếc phản lực với 2 khẩu súng lớn ở 2 bên và 2 súng bắn lò xo dưới cánh, bạn có thể bắn đạn vào bất kỳ kẻ thù nào bạn gặp trong chuyến nhiệm vụ của mình.\r\n• Đồ chơi lắp ráp Phi cơ Blackbird của X-Men – Mang đến cho bé chiếc phản lực X-Jet đến từ loạt phim hoạt hình X-Men ’97 của Marvel Studios với bộ lắp ráp mô hình máy bay siêu cool ngầu này. Bộ lắp ráp dành cho lứa tuổi từ 8 trở lên\r\n• 4 nhân vật – Đồ chơi máy bay chiến đấu này có chỗ trong buồng lái dành cho các nhân vật X-Men quen thuộc như Wolverine, Cyclops, Rogue và Magneto\r\n• Siêu phản lực chiến đấu của nhóm X-men – X-Jet có 2 ụ súng lớn ở hai bên, 2 súng bắn lò xo bên dưới và 2 chiếc hộp có thể tháo rời, bên trong là đạn và móng vuốt của Người Sói\r\n• Chơi và trưng bày – Khi cuộc chiến của các Siêu anh hùng kết thúc, bé có thể trưng bày chiếc máy bay này trong phòng để mọi người cùng chiêm ngưỡng\r\n• Quà tặng LEGO® Marvel cho người hâm mộ – Mang đến cho những người hâm mộ bộ phim X-Men 97’ của Marvel Studios món đồ chơi Máy bay phản lực siêu đỉnh với chi tiết được lấy từ chính bộ phim này.\r\n• Hướng dẫn lắp ráp qua ứng dụng – Ứng dụng LEGO® Builder sẽ hướng dẫn bạn tham gia cuộc phiêu lưu và lắp ráp dễ dàng hơn với các công cụ cho phép bạn có thể phóng to và xoay mô hình ở chế độ 3D, lưu quá trình và theo dõi tiến trình của bạn.\r\n• Đồ chơi LEGO® Marvel – Những bộ lắp ráp LEGO Marvel được thiết kế để mang đến cho bạn những trải nghiệm lắp ráp tuyệt vời với những Siêu anh hùng mà bạn yêu thích nhất như Người Nhện, Người Sắt. Thor,…\r\n• Kích thước – Bộ lắp ráp gồm 359 chi tiết, sau khi hoàn thiện có chiều cao trên 3 inch (8 cm), dài 11 inch (30 cm) và rộng 10 inch (25 cm)'),
(4, 'Chiến Xe Monster Jam™ Megalodon™', 1, 553, '2024-02-18', 'Khám phá bản sao đích thực dành cho người hâm mộ Monster Jam ™ với bộ mô hình LEGO® Technic ™ Chiến Xe Monster Jam™ Megalodon™ (42134) dành cho trẻ em từ 7 tuổi trở lên.\r\n\r\nVới phần đồ họa và màu sắc chân thực, chiếc xe này có nhiều chi tiết để khám phá. Hành động kéo lùi khiến thời gian vui chơi trở nên thú vị khi vào cuộc đua và thực hiện các trò hay. Các vây chuyển động khi xe chạy, trong khi răng cá mập trông như thật và lốp xe lớn tăng thêm tính chân thực cho hàng giờ vui chơi.\r\n\r\nĐồ chơi 2 trong 1 đậm chất hành động. Đã đến lúc đón nhận thử thách mới, chiếc xe tải đồ chơi 2 trong 1 này sẽ lắp ráp lại thành xe đua khung thấp (Low Racer). Lấy cảm hứng từ quái vật biển trong thần thoại, đồ chơi ô tô hạ thấp khung này kết hợp cá mập và mực để tạo ra một phương tiện ấn tượng. Truyền cảm hứng cho các kỹ sư của tương lai\r\n\r\nVới các phương tiện có hình dáng và hoạt động giống như thật, các mô hình của LEGO Technic mang đến lời giới thiệu thú vị về kỹ thuật và cơ khí cho những người hâm mộ LEGO nhỏ tuổi.'),
(5, 'Tàu Con Thoi Vũ Trụ', 1, 874, '2024-02-19', 'LEGO® khác nhau trong 1 bộ trò chơi. Phóng lên quỹ đạo bằng Tàu con thoi và vệ tinh có thể mở rộng. Sau đó, xây dựng lại nó thành một phi hành gia với tay và chân có thể cử động được – sẵn sàng chinh phục các hành tinh – hoặc xây dựng lại nó thành một con tàu vũ trụ siêu ngầu với đôi cánh đang di chuyển. Việc du hành giữa các vì sao vô tận là chuyện nhỏ với bộ đồ chơi 3 trong 1 tuyệt vời này.\r\n\r\n• Đồ chơi 3 trong 1 – Những người hâm mộ trò chơi ngoài không gian có thể tận hưởng chuyến du hành giữa các thiên hà với bộ đồ chơi LEGO® Creator Tàu Con Thoi Vũ Trụ 3 trong 1 (31134), bao gồm Tàu con thoi, phi hành gia và tàu vũ trụ\r\n\r\n• Vô số tùy chọn chơi – bé yêu có thể chọn chơi hành động với đồ chơi Tàu con thoi, hình đồ chơi phi hành gia với tay và chân có thể điều chỉnh được và tàu vũ trụ siêu ngầu\r\n\r\n• Được đóng gói với các phụ kiện – Tàu con thoi có một cửa sập mở chứa một vệ tinh có thể tháo rời và nhân vật phi hành gia có một bộ phản lực và một lá cờ để cắm trên giá đỡ'),
(6, 'Máy Chụp Hình Bong Bóng - Thỏ Munchkin COOLKIDS BC', 2, 99, '2024-02-13', 'Các bạn nhỏ yêu thích trò chơi bong bóng xà phòng thì chắc chắn không thể bỏ qua món đồ chơi Đồ Chơi Máy Chụp Hình Bong Bóng Thỏ Munchkin Coolkids BC2672 siêu đáng yêu này đâu nha.\r\nSản phẩm được thiết kế bé gái đội nón hình chú thỏ cực kỳ ngộ nghĩnh. Sản phẩm sử dụng 3 PIN 2A 1.5V. Khi ấn nút sẽ bắn ra hàng trăm bong bòng xà phòng tí hon lấp lánh. Có thể pha nước với xà phòng để chơi lại nhiều lần. Ngoài ra còn có dây đeo để bé có thể mang theo mọi nơi.\r\nSản phẩm được làm từ chất liệu cao cấp, thiết kế vừa tay bé, không góc cạnh, rất dễ cầm nắm. Bình đựng xà phòng thiết kế chắc chắn, đảm bảo không bị dây ra tay bé cưng.\r\nMáy chụp hình bong bóng chắc chắn sẽ mang đến cho bé những giây phút vui chơi thú vị cùng những người bạn của mình.'),
(7, 'Móc Khóa Pop It - Dino', 2, 987, '2024-02-19', 'Long Siêu Đẳng kết hợp với hình dáng chữ cái POPIT độc đáo, phù hợp cho các bé trai làm phụ kiện trang trí balo.\r\n\r\nThông số kỹ thuật:\r\n- Chất liệu: silicone và kim loại\r\n- Trọng lượng: 20 grams\r\n\r\nCánh báo! Có chi tiết nhỏ. Không phù hợp cho trẻ dưới 3 tuổi.\r\nLưu ý: Kí tự móc khóa sẽ được giao ngẫu nhiên khi mua hàng online.'),
(8, 'Nhà Thiết Kế Thời Trang Tương Lai STYLE4EVER OFG27', 2, 487, '2024-02-18', 'chơi đến từ Pháp. Bộ sản phẩm mang đến mọi thứ bé cần từ bảng vẽ, khung model, bút màu, giấy và cả vải thật. Bé sẽ đắm chìm trong thế giới sáng tạo vô tận.\r\n\r\nBộ sản phẩm bao gồm:\r\n\r\n- 1 khung vẽ\r\n\r\n- 6 bút chì màu\r\n\r\n- 20 trang giấy vẽ sẵn hình người mẫu\r\n\r\n- 6 cuộn giấy màu in họa tiết\r\n\r\n- 1 bút highlight\r\n\r\n- 3 khuôn tô hình quần áo và phụ kiện\r\n\r\n- 5 tấm vải thật\r\n\r\n- 10 tờ giấy màu in họa tiết\r\n\r\n- 50 hạt ngọc trang trí\r\n\r\n- 1 keo dán giấy\r\n\r\n- 2 tấm sticker\r\n\r\n- 1 cuốn sách hướng dẫn sử dụng'),
(9, 'Đồ Chơi Lắp Ráp Chiến Giáp War Machine LEGO SUPERH', 1, 583, '2024-02-11', 'Giải phóng sức mạnh của chiến giáp, đưa War Machine vào và biến anh hùng thành một bộ giáp chiến đấu khổng lồ. Với 3 khẩu pháo – 1 trên vai và 2 trên tay – và một hộp đựng sau lưng để đựng thêm đạn, không gì có thể ngăn cản LEGO® Marvel chiến giáp War Machine hùng mạnh!\r\n\r\n• Đồ chơi lắp ráp Chiến giáp War Machine –Mang đến cho bé bộ trò chơi đầy hành động với LEGO® Marvel\r\n\r\n• Chiến giáp có thể điều khiển được – Với cánh tay, chân và bàn tay có khớp nối và mô hình minifigure LEGO® Marvel War Machine ở khoang điều khiển, đồ chơi lắp ráp rô-bốt này được thiết kế để thực hiện các hành động chiến đấu tuyệt vời\r\n\r\n• Phụ kiện đa dạng – Trẻ em đặt minifigure vào buồng lái và đưa nó vào trận chiến với 1 súng bắn trên vai, 2 súng trên tay và một chiếc hộp sau lưng để lấy thêm đạn dược\r\n\r\n• Quà tặng dành cho những siêu anh hùng nhí – Bộ trò chơi này là một món quà sinh nhật tuyệt vời cho những bé yêu thích những vị siêu anh hùng, đặc biệt là những siêu anh hùng Marvel như Iron Man, Spider-Man, Thor,…\r\n\r\n• Đồ chơi LEGO® Marvel – Những bộ lắp ráp LEGO Marvel được thiết kế để mang đến cho bé những trải nghiệm lắp ráp tuyệt vời với những Siêu anh hùng mà bé yêu thích nhất như Người Nhện, Người Sắt. Thor,…\r\n\r\n• Kích thước – Bộ lắp ráp với 154 mảnh ghép, sau khi hoàn thiện cao hơn 4,5 inch (11 cm)'),
(10, 'Đồ Chơi Lắp Ráp Cửa Hàng Thời Trang Cổ Điển LEGO F', 2, 395, '2024-02-18', 'Olly thích may những bộ trang phục mới từ quần áo cũ. Đó là cách anh ấy tận hưởng sự sáng tạo và bảo vệ môi trường. Hôm nay anh ấy đang làm việc tại Cửa hàng thời trang cổ điển, nơi luôn có điều gì đó thú vị để khám phá. Liann khám phá cửa hàng và đi đến phòng thử đồ để thử trang phục. Trong khi đó, Olly đi lên xưởng, nơi đồ quyên góp được đưa vào máy giặt trước khi được tái chế.\r\n\r\n• Bộ LEGO® Friends Cửa hàng thời trang cổ điển – Bộ trò chơi này gồm một cửa hàng với xưởng may quần áo, 3 minifigure, chú mèo cùng với nhiều phụ kiện thời trang dành khác\r\n\r\n• Chọn trang phục mới – Bộ đồ chơi trẻ em này bao gồm nhiều món đồ thời trang tái chế dành cho minifigure, bao gồm mũ, quần, váy, một đôi giày, túi xách và túi đeo hông\r\n\r\n• Các nhân vật dễ thương – Bộ bao gồm 3 nhân vật minifigure LEGO® Friends cùng với chú mèo dễ thương.\r\n\r\n• Phòng thử đồ và xưởng may – Bộ lắp ráp có phòng thử đồ, nơi các nhân vật có thể thay đổi trang phục, cộng với xưởng may đồ với các phụ kiện như máy giặt và máy may\r\n\r\n• Món quà tuyệt vời cho bé – Bộ lắp ráp LEGO® Friends này chắc chắn sẽ là món quà sinh nhật hoặc ngày lễ thú vị dành cho các bé yêu thích các hoạt động sáng tạo và có sở thích vui chơi cũng những người bạn của mình\r\n\r\n• Đồ chơi xây dựng sáng tạo – Các bé hãy sưu tập ngay những bộ LEGO® Friends và cùng khám phá các nhân vật đa dạng và cùng tham gia các cuộc phiêu lưu không kém phần hấp dẫn\r\n\r\n• Kích thước – Bộ lắp ráp gồm 409 mảnh ghép, sau khi hoàn thiện có chiều cao trên 7,5 inch (19 cm), rộng 7 inch (18 cm) và sâu 4,5 inch (11 cm)\r\n'),
(11, 'Xe Vespa 125 GTS Super SIKU 1296', 3, 41, '2024-02-12', '“Dolce Vita” – Biểu trưng cho một lối sống tươi đẹp, trân trọng tình yêu thương và lấp đầy mọi khoảnh khắc trong cuộc đời bằng sự ngọt ngào và lãng mạn. Đó là những gì đẹp nhất mà người ta truyền tải về dòng xe 125 Vespa GTS Super.\r\n\r\n- Kiểu dáng nổi bật, chân thực từ những chi tiết nhỏ nhất\r\n\r\n- Thân xe được làm bằng kim loại chất lượng cao, logo Vespa, đèn pha và lốp cao su được thiết kế sắc nét, hoàn hảo giống với nguyên bản\r\n- Màu xanh bạc hà của sản phẩm mang lại sự ngọt và lãng mạn đậm chất Ý\r\n- Màu nâu của yên xe tương phản cực kì bắt mắt\r\n- Phần tay lái và chân chống của xe có thể chuyển động linh hoạt\r\nTHÔNG TIN VỀ SẢN PHẨM:\r\n\r\nKích thước hộp hàng: 5.6 x 2.2 x 3.9 cm\r\n\r\nChủ đề: SIKU BLISTERS10\r\n\r\nNăm sản xuất: 2024\r\n\r\nXuất xứ thương hiệu: Đức\r\n\r\nChất liệu: Kim loại cao cấp và một số chi tiết được làm bằng nhựa ABS (Theo tiêu chuẩn Châu Âu, an toàn tuyệt đối với mọi lứa tuổi)\r\n\r\nĐẶC ĐIỂM NỔI BẬT CỦA MÔ HÌNH KIM LOẠI SIKU:\r\n\r\n• CHẤT LƯỢNG ĐỨC – Được sản xuất bằng kim loại cao cấp, đạt tiêu chuẩn Châu Âu về an toàn đồ chơi.\r\n\r\n• ĐỒ CHƠI GIÁO DỤC – Thiết kế mô phỏng dựa trên các mẫu xe và phương tiện ngoài đời thật.\r\n\r\n• BẢN QUYỀN- Các dòng xe đều có bản quyền từ thương hiệu xe nổi tiếng trên thế giới.\r\n\r\n• CHI TIẾT TINH XẢO – dàn đèn, vỏ xe, một số dòng xe có thể mở cửa.\r\n\r\n• ĐA DẠNG MẪU MÃ – hơn 300 mẫu xe khác nhau\r\n\r\nNhững chiếc xe mô hình luôn khơi gợi trí tò mò và là nguồn cảm hứng cho các bé trai thỏa sức chơi, khơi sáng tạo.\r\nChính vì thế dòng đồ chơi xe mô hình luôn giữ vững vị trí hàng đầu trong Top đồ chơi được bé trai yêu thích. Không chỉ là một thú vui sưu tập, xe mô hình SIKU còn giúp bé học hỏi thêm về thế giới xung quanh, đồng thời phát triển trí tuệ, thế giới quan của mình.'),
(12, 'Đồ Chơi Siêu Xe Biểu Diễn Twisting Điều Khiển Từ X', 3, 156, '2024-02-20', 'với nhiều chức năng biểu diễn ngoạn mục cho bé chơi thật vui:\r\n\r\n+ Thân xe có thể nâng hạ linh hoạt bằng điều khiển\r\n\r\n+ Khả năng di chuyển uốn lượn như loài rắn độc đáo: vừa chạy thẳng, vừa chạy theo kiểu uốn lượn\r\n\r\n+ Di chuyển đa hướng: tiến lùi, trái phải, trượt ngang, trượt xéo, xoay 360 độ\r\n\r\n+ Tự động trình diễn\r\n\r\n+ Có đèn và âm thanh sống động\r\n\r\n+ Sử dụng pin sạc, cáp sạc USB đi kèm\r\n\r\n \r\n\r\nTHÔNG TIN VỀ SẢN PHẨM:\r\n\r\nKích thước hộp hàng: 33.0 x 16.5 x 13.0 cm\r\n\r\nChủ đề: VECTO REMOTE CONTROL\r\n\r\nNăm sản xuất: 2024\r\n\r\nXuất xứ thương hiệu: Việt Nam\r\n\r\nChất liệu: Nhựa và kim loại (An toàn tuyệt đối cho bé)\r\n\r\nBộ đồ chơi bao gồm:\r\n\r\n1 x Siêu xe biểu diễn Twisting (Sử dụng pin sạc, có kèm pin)\r\n\r\n1 x Remote điều khiển từ xa (Sử dụng pin sạc, không kèm pin)\r\n\r\n1 x Cáp sạc USB\r\n\r\n1 x Hướng dẫn sử dụng\r\n\r\nVECTO - THẾ GIỚI ĐỒ CHƠI BÉ TRAI CỰC ĐỈNH\r\n\r\nVECTO là thương hiệu đồ chơi dành riêng cho các bé trai, với các dòng đồ chơi trải dài từ điều khiển từ xa đến lắp ráp. Với mong muốn giúp các bé trai có sự phát triển toàn diện từ trí não đến thể chất, Vecto đã phát triển đa dạng các loại đồ chơi nhằm mang đến cho bé nhiều lựa chọn nhất có thể, một số dòng đồ chơi nổi bật:\r\n\r\n- ROBOT ĐIỀU KHIỂN – PHÁT TRIỂN TƯ DUY SÁNG TẠO\r\n\r\n- XE ĐIỀU KHIỂN – PHÁT TRIỂN TƯ DUY PHƯƠNG HƯỚNG\r\n\r\n- ĐỒ CHƠI BAY – PHÁT TRIỂN TƯ DUY LOGIC\r\n\r\n- ĐỒ CHƠI LẮP RÁP DIY – PHÁT TRIỂN KỸ NĂNG VẬN ĐỘNG TINH\r\n\r\nVà còn nhiều dòng đồ chơi khác từ VECTO đang đợi bé khám phá.'),
(13, 'Xe Minivan VW T1 SIKU 2361', 3, 33, '2024-02-28', 'Volkswagen.\r\n\r\nMô hình xe minivan VW T1 từ SIKU là mô hình với tỉ lệ 1:50 so với kích thước xe ngoài đời thật, mô phỏng chi tiết và được làm bằng nhựa và kim loại cao cấp.\r\n\r\nMẫu xe này hoàn hảo cho trẻ em yêu thích xe buýt Volkswagen cũng như cho những nhà sưu tập người lớn.\r\n\r\nTHÔNG TIN VỀ SẢN PHẨM:\r\n\r\nKích thước hộp hàng: 9.9 x 3.9 x 4.2 cm\r\n\r\nChủ đề: SIKU SUPER1:50\r\n\r\nNăm sản xuất: 2023\r\n\r\nXuất xứ thương hiệu: Đức\r\n\r\nChất liệu: Kim loại cao cấp và một số chi tiết làm bằng nhựa ABS (Theo tiêu chuẩn Châu Âu an toàn tuyệt đối với mọi lứa tuổi)\r\n\r\nĐẶC ĐIỂM NỔI BẬT CỦA MÔ HÌNH KIM LOẠI SIKU:\r\n• CHẤT LƯỢNG ĐỨC – Được sản xuất bằng kim loại cao cấp, đạt tiêu chuẩn Châu Âu về an toàn đồ chơi.\r\n• ĐỒ CHƠI GIÁO DỤC – Thiết kế mô phỏng dựa trên các mẫu xe và phương tiện ngoài đời thật.\r\n• BẢN QUYỀN- Các dòng xe đều có bản quyền từ thương hiệu xe nổi tiếng trên thế giới.\r\n• CHI TIẾT TINH XẢO – dàn đèn, vỏ xe, một số dòng xe có thể mở cửa.\r\n• ĐA DẠNG MẪU MÃ – hơn 300 mẫu xe khác nhau\r\n\r\nNhững chiếc xe mô hình luôn khơi gợi trí tò mò và là nguồn cảm hứng cho các bé trai thỏa sức chơi, khơi sáng tạo.\r\nChính vì thế dòng đồ chơi xe mô hình luôn giữ vững vị trí hàng đầu trong Top đồ chơi được bé trai yêu thích. Không chỉ là một thú vui sưu tập, xe mô hình SIKU còn giúp bé học hỏi thêm về thế giới xung quanh, đồng thời phát triển trí tuệ, thế giới quan của mình.'),
(14, 'Mô Hình Stretchapalz Kéo Giãn Quái Vật Băng Giá Pe', 4, 543, '2024-02-17', 'Mô hình Stretchapalz kéo giãn - Món đồ chơi \"kì lạ\" nhưng cực kì thú vị dành cho bé.\r\n\r\nHãy thử thách xem bạn có thể kéo dài các nhân vật Stretchapalz đến mức nào!\r\n\r\nThỏa sức tạo nắn những người bạn Stretchapalz này thành các hình dạng mà bạn muốn. Đừng lo, vì nhân vật Stretchapalz sẽ trở lại hình dạng ban đầu ngay thôi!\r\n\r\nMô hình Stretchapalz kéo giãn - Dòng Quái vật Băng giá 146969 với 6 nhân vật khác nhau để sưu tầm.\r\n\r\nCẢNH BÁO!\r\n\r\nKhông quấn hoặc cột sản phẩm quanh đầu, cổ, tay hoặc chân của bất kỳ ai. Giữ chúng cách xa các loài thú cưng. Chi tiết nhỏ có nguy cơ gây ngạt thở - Không thích hợp cho trẻ em dưới 3 tuổi. Không đâm thủng lớp vỏ ngoài. Tránh ánh nắng trực tiếp mặt trời. Nếu vô tình để tiếp xúc, hãy rửa sạch bằng nước ấm và xà phòng. Màu sắc và nội dung bên trong có thể khác so với hình minh họa. Vui lòng giữ lại bao bì sản phẩm để tham khảo thêm trong tương lai.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `sohoadon` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`sohoadon`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 1, '2024-02-20', 1269000),
(2, 1, '2024-02-20', 0),
(3, 1, '2024-02-20', 1269000),
(4, 1, '2024-02-20', 0),
(5, 2, '2024-02-20', 129000),
(6, 2, '2024-02-20', 0),
(7, 2, '2024-02-20', 0),
(8, 2, '2024-02-20', 0),
(9, 2, '2024-02-20', 3099000),
(10, 2, '2024-02-20', 3099000),
(11, 2, '2024-02-20', 5758000),
(12, 2, '2024-02-20', 5758000),
(13, 2, '2024-02-20', 5948000),
(14, 2, '2024-02-20', 5948000),
(15, 2, '2024-02-20', 5948000),
(16, 2, '2024-02-20', 5948000),
(17, 2, '2024-02-20', 5948000),
(18, 2, '2024-02-20', 5948000),
(19, 2, '2024-02-20', 5948000),
(20, 2, '2024-02-20', 5948000),
(21, 2, '2024-02-20', 5948000),
(22, 2, '2024-02-20', 5948000),
(23, 2, '2024-02-20', 5948000),
(24, 2, '2024-02-20', 5948000),
(25, 2, '2024-02-20', 5948000),
(26, 2, '2024-02-20', 5948000),
(27, 1, '2024-02-20', 216000),
(28, 1, '2024-02-20', 216000),
(29, 1, '2024-02-20', 216000),
(30, 1, '2024-02-20', 216000),
(31, 1, '2024-02-20', 216000),
(32, 1, '2024-02-20', 216000),
(33, 1, '2024-02-20', 216000),
(34, 1, '2024-02-20', 216000),
(35, 1, '2024-02-20', 216000),
(36, 1, '2024-02-20', 216000),
(37, 1, '2024-02-20', 216000),
(38, 1, '2024-02-20', 216000),
(39, 1, '2024-02-20', 216000),
(40, 1, '2024-02-20', 216000),
(41, 1, '2024-02-20', 216000),
(42, 1, '2024-02-20', 216000),
(43, 1, '2024-02-20', 216000),
(44, 1, '2024-02-20', 216000),
(45, 1, '2024-02-20', 216000),
(46, 1, '2024-02-20', 216000),
(47, 1, '2024-02-20', 216000),
(48, 1, '2024-02-20', 216000),
(49, 1, '2024-02-20', 216000),
(50, 1, '2024-02-20', 216000),
(51, 1, '2024-02-20', 216000),
(52, 1, '2024-02-20', 216000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `email`, `sodienthoai`, `matkhau`) VALUES
(1, 'Nhân', 'huynhthanhnhan632004@gmail.com', 787584517, '86386a88ae17e87ea1b7c6ecd58278a1'),
(2, '', '', 0, '7a48f8dde948278863078d1a9cda3ad4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `iploai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `iploai`) VALUES
(1, 'ĐỒ CHƠI LẮP RÁP', 'LR1'),
(2, 'ĐỒ CHƠI THỜI TRANG', 'TR2'),
(3, 'ĐÒ CHƠI PHƯƠNG TIỆN', 'PT3'),
(4, 'ĐỒ CHƠI SƯU TẬP', 'ST4'),
(5, 'ĐỒ CHƠI MẦM NON', 'MN5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `idquocgia` int(11) NOT NULL,
  `maquocgia` varchar(50) NOT NULL,
  `tenquocgia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`idquocgia`, `maquocgia`, `tenquocgia`) VALUES
(1, 'VN1', 'Việt Nam'),
(2, 'CN2', 'Trung Quốc'),
(3, 'AM3', 'Mỹ'),
(4, 'DM', 'Đan Mạch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`),
  ADD KEY `percent` (`percent`),
  ADD KEY `FK_QG` (`idquocgia`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`sohoadon`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_Loai` (`maloai`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`sohoadon`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`idquocgia`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  MODIFY `idhanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `sohoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `sohoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `idquocgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD CONSTRAINT `FK_QG` FOREIGN KEY (`idquocgia`) REFERENCES `quocgia` (`idquocgia`),
  ADD CONSTRAINT `FK_hh` FOREIGN KEY (`idhanghoa`) REFERENCES `hanghoa` (`mahh`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_Loai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
