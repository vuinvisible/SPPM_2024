-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2023 at 04:33 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `datphong`
--

DROP TABLE IF EXISTS `datphong`;
CREATE TABLE IF NOT EXISTS `datphong` (
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tenks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `soluongnguoi` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datphong`
--

INSERT INTO `datphong` (`email`, `tenks`, `ngaydat`, `soluongnguoi`) VALUES
('xuanngoczxc@gmail.com', 'KHÁCH SẠN HOÀNG YẾN', '2023-05-26', 5),
('xuanngoczxc@gmail.com', 'KHÁCH SẠN HẢI ÂU', '2023-06-02', 5),
('abc@gmail.co', 'KHÁCH SẠN MƯỜNG THANH', '2023-06-06', 3),
('dtlx@gmail.com', 'KHÁCH SẠN HẢI ÂU', '2023-06-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dattour`
--

DROP TABLE IF EXISTS `dattour`;
CREATE TABLE IF NOT EXISTS `dattour` (
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `tentour` text NOT NULL,
  `soluong` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dattour`
--

INSERT INTO `dattour` (`email`, `ngaydat`, `tentour`, `soluong`) VALUES
('xuanngoczxc@gmail.com', '2023-05-26', 'Tour Vũng Bồi - Đề Gi', 3),
('xuanngoczxc@gmail.com', '2023-06-01', 'Dã Ngoại Trung Lương', 5),
('quynh@gmail.com', '2023-06-02', 'Bãi Tắm Hoàng Hậu', 3),
('xuanngoczxc@gmail.com', '2023-06-05', 'Bãi Tắm Hoàng Hậu', 4);

-- --------------------------------------------------------

--
-- Table structure for table `khachsan`
--

DROP TABLE IF EXISTS `khachsan`;
CREATE TABLE IF NOT EXISTS `khachsan` (
  `tenks` text NOT NULL,
  `mota` text NOT NULL,
  `gia` text NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khachsan`
--

INSERT INTO `khachsan` (`tenks`, `mota`, `gia`, `hinhanh`) VALUES
('KHÁCH SẠN HOÀNG YẾN', '05 An Dương Vương,Thành Phố Quy Nhơn, Bình Định, Việt Nam\r\n\r\nHotline: (+84-256) 3746 900\r\n\r\nView sát biển hàng đầu và hiện đại nhất.\r\n\r\nHoàng Yến Hotel hứa hẹn sẽ mang đến bạn một chuyến đi vui vẻ và trọn vẹn niềm vui ở thiên đường biển đảo Quy Nhơn.', '1.775.000/VNĐ', 'images/kshoangyen.jpg'),
('CĂN HỘ BIỂN FLC SEA TOWER QUY NHƠN', '28 Võ Thị Yến,Thành Phố Quy Nhơn, Bình Định, Việt Nam\r\n\r\nTọa lạc tại thành phố Quy Nhơn, Căn Hộ View Biển có chỗ nghỉ, nhà hàng, trung tâm thể dục, quầy bar và tầm nhìn ra biển.\r\n\r\nĐều được bố trí ban công, khu vực bếp ăn nhỏ đầy đủ tiện nghi , khu vực ghế ngồi, TV màn hình phẳng, máy giặt và phòng tắm riêng.', '1.775.000/VNĐ', 'images/seatower'),
('KHÁCH SẠN HẢI ÂU', '9 An Dương Vương, Phố Quy Nhơn, Bình Định, Việt Nam\r\n\r\nHotline: 0256 6547 277\r\n\r\nView sát biển Quy Nhơn xinh đẹp, chỉ cần bước chân đã tới ngay “thiên đường biển xanh”.\r\n\r\nThiết kế theo kiến trúc Châu Âu hiện đại,cung cấp các dịch vụ tiện nghi và thoải mái.', '1.475.000/VNĐ', 'images/haiau'),
('KHÁCH SẠN MƯỜNG THANH', '2 Nguyễn Huệ, Phường Lê Lợi, Thành Phố Quy Nhơn, Bình Định, Việt Nam\r\n\r\nHotline: 0256 6529 466\r\n\r\nHệ thống bể bơi ngoài trời cùng khuôn viên thoáng mát, rất thích hợp cho các gia đình.\r\n\r\nMỗi phòng đều có cửa sổ hướng trọn view biển.', '1.575.000/VNĐ', 'images/muongthanh'),
('CROWN RETREAT QUY NHƠN RESORT', 'Thôn Trung Lương, Quang Trung, Huyện Phù Cát, Bình Định, Việt Nam\r\n\r\nCrown Retreat Quy Nhon Resort có nhà hàng, hồ bơi ngoài trời, quán bar và vườn.\r\n\r\nKhách nghỉ tại resort có thể tham gia các hoạt động trong và xung quanh thành phố Quy Nhơn, như đi bộ đường dài và đi xe đạp.', '1.247.000/VNĐ', 'images/crown'),
('THE KILA BOUTIQUE HOTEL', '06 Trương Văn Của Phường Nguyễn Văn Cừ, Quy Nhơn, Việt Nam\r\n\r\nThe Kila Boutique Hotel phục vụ bữa sáng buffet và bữa sáng kiểu Á hàng ngày.\r\n\r\nTọa lạc tại thành phố Quy Nhơn, cách Bãi biển Quy Nhơn 450 m, The Kila Boutique Hotel cung cấp chỗ nghỉ với nhà hàng, chỗ đỗ xe riêng miễn phí, hồ bơi ngoài trời', '775.000/VNĐ', 'images/kila'),
('AURORA VILLAS AND RESORT', 'Km 15, National Road 1D, Ghenh Rang, Quy Nhơn, Việt Nam\r\n\r\nCó tầm nhìn ra biển, các biệt thự sang trọng của resort được trang bị TV truyền hình cáp màn hình phẳng, máy lạnh, két an toàn, điện thoại gọi quốc tế trực tiếp và tiện nghi pha trà/cà phê.\r\n\r\nNhiều hoạt động được tổ chức , chẳng hạn như lặn với ống thở và lặn biển.', '1.875.000/VNĐ', 'images/aurora'),
('ROSELLA APARTMENT', 'Khu Biệt Thự Đại Phú Gia, phương Nhơn Bình, Quy Nhơn, Việt Nam\r\n\r\nCác căn tại đây có sàn lát gạch, khu vực bếp ăn đầy đủ tiện nghi với tủ lạnh, khu vực ăn uống, TV truyền hình cáp màn hình phẳng và phòng tắm riêng đi kèm vòi sen cùng dép đi trong phòng\r\n\r\nMột số căn được bố trí ban công và/hoặc sân hiên nhìn ra hồ nước hoặc dòng sông.', '1.978.000/VNĐ', 'images/rosella');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

DROP TABLE IF EXISTS `lienhe`;
CREATE TABLE IF NOT EXISTS `lienhe` (
  `ten` text NOT NULL,
  `email` text NOT NULL,
  `sdt` int NOT NULL,
  `noidung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`ten`, `email`, `sdt`, `noidung`) VALUES
('Lê Xuân Ngọc', 'xuanngoczxc@gmail.com', 335057747, 'Tuyệt'),
('Bùi Nguyễn Diêm Quỳnh', 'quynh@gmail.com', 335057747, 'Còn thiếu sót nhiều'),
('Lê Xuân Ngọc', 'xuanngoczxc@gmail.com', 335057747, '....');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `matkhau` text NOT NULL,
  `tennd` text NOT NULL,
  `diachi` text NOT NULL,
  `email` text NOT NULL,
  `sdt` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`matkhau`, `tennd`, `diachi`, `email`, `sdt`) VALUES
('12345', 'Lê Xuân Ngọc', 'Quy Nhơn', 'xuanngoczxc@gmail.com', 335057747),
('1234', 'Trần Ngọc Giàu', 'Quy Nhơn', 'giau@gmail.com', 335057757),
('1111', 'Đinh Thị Lưu Xuyến', 'Bình Định', 'dtlx@gmail.com', 335057747),
('123', 'Bùi Nguyễn Diễm Quỳnh', 'Bình Định', 'quynh@gmail.com', 267854636);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `IDtour` text NOT NULL,
  `tentour` text NOT NULL,
  `mota` text NOT NULL,
  `ngaykhoihanh` date NOT NULL,
  `gia` text NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `chitiet` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`IDtour`, `tentour`, `mota`, `ngaykhoihanh`, `gia`, `hinhanh`, `chitiet`) VALUES
('T01', 'Kỳ Co-Eo Gió', 'Kỳ Co - Eo Gió là những địa điểm du lịch nổi tiếng nhất ở Quy Nhơn, được ví như Maldives “phiên bản Việt” với bãi biển xanh, bờ cát trắng lung linh lấp lánh dưới nắng. Kỳ Co là một hòn đảo một mặt hướng biển, một mặt tựa lưng vào dãy núi cao hùng vĩ. Nước biển ở Kỳ Co rất xanh và trong với 3 gam màu ngọc bích, lấp lánh dưới nắng, có thể nhìn được san hô và sinh vật biển dưới đáy đại dương. \r\n\r\nTrong khi đó, Eo Gió là hệ thống mỏm đá hùng vĩ, nằm sát bờ đại dương, ôm trọn khung cảnh trời - biển - núi vào cùng một khung hình. \r\n\r\nNếu bạn có ý định du lịch Kỳ Co - Eo Gió, MoMo khuyên bạn nên đi vào thời gian từ tháng 3 - tháng 9. Đây là thời điểm tiết trời nắng đẹp, mây xanh, ít mưa ít bão, cực kì thích hợp để chụp cực nhiều ảnh sống ảo chất ngất hay vui chơi, tắm biển ngoài trời. \r\n\r\nĐịa chỉ: Thôn Lý Lương, Nhơn Lý, Quy Nhơn, Bình Định. ', '2023-05-23', 'Người lớn(Từ 10+ tuổi) : 540.000đ/ Khách\r\nTrẻ em(Từ 5-9 tuổi) : 270.000đ/ Khách\r\nTrẻ em(Dưới 5 tuổi): Miễn phí', 'images/kyco', 'Kỳ Co Eo Gió – Một Maldives Thu Nhỏ Say Đắm Lòng Người\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô, cano\r\nĐịểm đến: Kỳ Co – Eo Gió - Lặn Biển Ngắm San Hô- Đồi Cát\r\nKhởi hành: Quy Nhơn'),
('T02', 'Cù Lao Xanh', 'Cù Lao Xanh hay còn có tên gọi khác là đảo Vân Phi, là một hải đảo gần với vịnh Xuân Đài, xã Nhơn Châu, TP. Quy Nhơn, tỉnh Bình Định. Cù lao này nằm cách bờ biển nội thành Quy Nhơn khoảng 24 km về phía tây bắc và bờ biển tỉnh Phú Yên 22 km về phía tây. Với tổng diện tích gần 365 ha, cù lao được chia thành 3 thôn là Thôn Tây (trung tâm), Thôn Đông và Thông Trung. Từ xa xa, du khách có thể nhìn thấy một hòn đảo xanh ngắt giữa biển. Làng chài của ngư dân thì nép mình dưới chân núi, bên bờ cát trắng trải dài. Trên đỉnh núi là ngọn hải đăng uy nghiêm, sừng sững, nổi bật giữa biển trời bao la. Chính khung cảnh thanh bình, yên ả đó đã tạo nên một điểm đến hấp dẫn cho những ai muốn tận hưởng trọn vẹn cảnh sắc thiên nhiên.', '2023-06-01', 'Giá vé: 10.000 đồng/ Khách', 'images/culao', 'Tham quan Cù Lao Xanh Bình Định\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô, cano\r\nĐịểm đến: Hải đăng Cù Lao Xanh - Mũi Hoàng Bằng - Cầu cảng Cù Lao Xanh\r\nKhởi hành: Quy Nhơn'),
('T03', 'Vùng Bồi-Đề Gi', 'Đề Gi, thuộc xã Cát Khánh, huyện Phù Cát, Bình Định là một vùng vịnh kín. Được mệnh danh là \"công chúa ngủ quên\" của Quy Nhơn, Đề Gi sở hữu vẻ đẹp hoang sơ với bãi biển xanh, đồi cát trắng, có cửa biển, làng chài và sinh vật biển phong phú. Đề Gi cách thành phố Quy Nhơn khoảng 50 km, là một cảng cá còn hoang sơ và thưa người. Tuy nhiên khi đi sâu vào phía tàu cập bến, cảng Đề Gi hiện ra với một bức tranh sống động hơn. Ở đây tấp nập ghe thuyền, người người bận rộn đóng những mẻ cá bắt được buổi tối vào thùng để chuyển đi các tỉnh lân cận như: Phú Yên, Quy Nhơn...\r\n\r\nĐể ra được đảo Vũng Bồi nằm nép mình dưới chân núi Vĩnh Lợi, du khách di chuyển thêm 8 km bằng ca nô. Tại đây, tour Đề Gi - Vũng Bồi được nhiều trekker ưa thích bởi lịch trình khám phá độc đáo, được hoà mình vào thiên nhiên và trải nghiệm cảm giác bình yên như vùng biển đó là của riêng mình.\r\n\r\nTận dụng sự hoang sơ, vắng vẻ của Đề Gi, những hướng dẫn viên bản địa đã tạo ra nhiều hoạt động mang tính đặc sản của vùng đất này như: cắm trại qua đêm trên bờ biển, khám phá những hòn đảo xa thành phố... hay các tour đi về trong ngày: sáng chở khách ra đảo, sau đó tham gia các hoạt động như lặn biển săn cá, ngắm san hô đa sắc màu, và nghỉ trưa với các món ăn chế biến ngay trên biển...', '2023-05-28', 'Người lớn(Từ 10+ tuổi) : 450.000đ/ Khách\r\nTrẻ em(Từ 5-9 tuổi) : 225.000đ/ Khách\r\nTrẻ em(Dưới 5 tuổi): Miễn phí', 'images/degi', 'Vũng Bồi - Khám phá vẻ đẹp trữ tình, thơ mộng\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô\r\nĐịểm đến: Vũng Bồi - Đề Gi\r\nKhởi hành: Quy Nhơn'),
('T04', 'Bãi Tắm Hoàng Hậu', 'Bãi tắm Hoàng  Hậu được thiên nhiên ưu ái ban tặng cho vẻ đẹp  nên thơ, với địa thế thuận  lợi, gần  các khu nghỉ dưỡng resort nên nó đã trở thành một trong những  địa  điểm  thu hút khách du lịch trong và ngoài nước đến. Bãi biển Hoàng Hậu nằm trong Ghềnh Ráng. Từ đỉnh Ghềnh Ráng có thể phóng tầm mắt nhìn rộng cả bốn bề. Xa xa bãi tắm xanh mướt, những đoàn thuyền đánh cá nhấp nhô trong làn sương mờ ảo. Đẹp như một bức tranh thủy mặc của một nghệ nhân nổi tiếng.\r\n\r\nMang trong mình bao truyền thuyết  về tiên dáng trần bởi vẻ đẹp nên thơ của mình. Cũng bởi trong tâm thức của mỗi người mỗi lần nhắc đến cảnh đẹp đều có sựu dính líu của thần  tiên, đẹp thoát tục. Bãi tắm hoàng hậu còn được ví như bãi trắng chim, bởi ở đây có những phiến đá to tròn, láng mịn nhìn xa trông giống những quả trứng chim khổng lồ. Còn gì thích thú hơn khi bạn được dẫm đôi bàn chân trần đi trên những phiến đá ấy. Tuy có chút mạo hiểm nhưng đó thực sự sẽ là một trải nghiệm lý thú dành cho bạn.', '2023-06-02', 'Người lớn(Từ 10+ tuổi) : 250.000đ/ Khách\r\nTrẻ em(Từ 5-9 tuổi) : 125.000đ/ Khách\r\nTrẻ em(Dưới 5 tuổi): Miễn phí', 'images/hoanghau', 'Bãi Tắm Hoàng Hậu - Khám phá vẻ đẹp thiên nhiên tươi đẹp, trữ tình\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô\r\nĐịểm đến: Bĩ Tắm Hoàng Hậu - Quy Nhơn\r\nKhởi hành: Quy Nhơn'),
('T05', 'Tháp Đôi', 'Bạn có biết! Tháp Đôi có nhiều tên gọi khác nhau. Vì tháp nằm trên vùng đất thuộc làng Hưng Thạnh xưa nên còn có tên gọi Tháp Hưng Thạnh. Theo Quách Tấn trong sách “Nước non Bình Định”, người Pháp gọi tháp này là Tour Kh’mer. Đây là một trong tám cụm tháp Chăm còn lại trên đất Bình Định ngày nay. Tháp được xây dựng vào khoảng cuối thế kỷ 11 – đầu thế kỷ 13. Đây là thời kỳ vương quốc Chăm Pa gặp nhiều biến động. Trải qua nhiều biến cố lịch sử thăng trầm, tháp đã bị phá hủy nặng nề. Tuy nhiên, từ năm 1990 đến năm 1997, Tháp Đôi ở Quy Nhơn đã được trùng tu. Tôn tạo bởi những người thợ lành nghề. Cùng với sự giúp đỡ của các nhà khoa học, khảo cổ học trong nước, các chuyên gia đến từ Ba La. Và sự đầu tư của Nhà nước nên địa điểm này lấy lại được dáng vẻ gần như ban đầu.\r\n\r\nHiện nay, Tháp Đôi tọa lạc trên khu đất đẹp, bằng phẳng, rộng hơn 6.000 m2. Thấp thoáng trong bóng những cây dừa, cau và hoa đại (những loài cây gắn liền với văn hóa Chăm). Tháp cũng trở thành một trong những điểm du lịch nổi tiếng của Quy Nhơn, Bình Định. Trải qua nhiều biến cố lịch sử thăng trầm, tháp đã bị phá hủy nặng nề. Tuy nhiên, từ năm 1990 đến năm 1997, Tháp Đôi ở Quy Nhơn đã được trùng tu. Tôn tạo bởi những người thợ lành nghề. Cùng với sự giúp đỡ của các nhà khoa học, khảo cổ học trong nước, các chuyên gia đến từ Ba La. Và sự đầu tư của Nhà nước nên địa điểm này lấy lại được dáng vẻ gần như ban đầu. Nhiều du khách xa gần khi đến với Tháp Đôi ở Quy Nhơn đều băn khoăn câu hỏi Tháp Đôi Quy Nhơn thờ ai? Ý nghĩa của Tháp Đôi là gì?”. Theo như lời các cô chú quản lý tại đây kể rằng bên trong tháp thờ các linh vật LINGA và YONI, tượng trưng cho tín ngưỡng phồn thực, xa xưa. Dân làng nơi đây thờ tụng để mong muốn sự phồn thịnh, mùa màng bội thu, sự xung túc.\r\n\r\nNếu bạn có dự định đi Du lịch Quy Nhơn thì đừng bỏ qua Tháp Đôi nhé!  Hãy đến đây để chiêm ngưỡng công trình nghệ thuật, tôn giáo độc đáo từ trí tuệ và bàn tay tài hoa của người Chăm xưa. Ngậm ngùi trước phế tích còn lại của một vương triều đã mất, lắng lòng trước sự khắc nghiệt của thời gian. Đây sẽ là một trải nghiệm khó quên dành cho bạn khi đến đây.', '2023-05-20', 'Giá vé: 8.000 đồng/ Khách\r\nThêm 5.000 đồng/xe giữ xe cho các bạn nữa.', 'images/thapdoi', 'Tham quan Tháp Đôi Quy Nhơn\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô, xe máy\r\nĐịểm đến: Tháp Đôi\r\nKhởi hành: Quy Nhơn'),
('T06', 'Dã Ngoại Trung Lương', 'Nhiều du khách xa gần khi đến với Tháp Đôi ở Quy Nhơn đều băn khoăn câu hỏi Tháp Đôi Quy Nhơn thờ ai? Ý nghĩa của Tháp Đôi là gì?”. Theo như lời các cô chú quản lý tại đây kể rằng bên trong tháp thờ các linh vật LINGA và YONI, tượng trưng cho tín ngưỡng phồn thực, xa xưa. Dân làng nơi đây thờ tụng để mong muốn sự phồn thịnh, mùa màng bội thu, sự xung túc.\r\n\r\nNếu bạn có dự định đi Du lịch Quy Nhơn thì đừng bỏ qua Tháp Đôi nhé!  Hãy đến đây để chiêm ngưỡng công trình nghệ thuật, tôn giáo độc đáo từ trí tuệ và bàn tay tài hoa của người Chăm xưa. Ngậm ngùi trước phế tích còn lại của một vương triều đã mất, lắng lòng trước sự khắc nghiệt của thời gian. Đây sẽ là một trải nghiệm khó quên dành cho bạn khi đến đây. Điều mới mẻ nhất ở đây là các bạn có thể cắm trại tại một thung lũng nhỏ, nằm giữa lưng chừng núi, bao bọc xung quanh là núi đá và có chiều hướng ra biển. Những mái lều nhấp nhô, những hàng ghế xanh đỏ, điểm thêm vào màu vàng của nắng tạo nên một khung cảnh cực kỳ thơ mộng khiến bạn chỉ muốn lao ngay xuống dưới cầm máy ảnh lên và chụp cho mình những khung hình đẹp nhất. Bãi biển Trung Lương toát lên cái vẻ hoang sơ, bình dị. Nước biển thì trong vắt, có màu xanh ngọc bích. Vì vậy, mọi người đến đây có thể dễ dàng lặn ngắm những bãi san hô tuyệt đẹp mà không cần dùng đến thiết bị hỗ trợ chuyên nghiệp. Sắp tới, khu dã ngoại Trung Lương sẽ phát triển thêm các loại hình, trò chơi dưới nước, điều này chắc chắn sẽ thu hút rất nhiều khách du lịch đến đây.', '2023-06-01', 'Người lớn(Từ 10+ tuổi) : 580.000đ/ Khách\r\nTrẻ em(Từ 5-10 tuổi) : 290.000đ/ Khách\r\nTrẻ em(Dưới 5 tuổi): Miễn phí', 'images/trungluong', 'Khu Dã Ngoại Trung Lương - Điểm Sống Ảo Siêu Chất Và Bầu Không Khí Vô Cùng Trong Lành\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô,xe điện\r\nĐịểm đến: Quy Nhơn - Đồi Cát Phương Mai - Khu Dã Ngoại Trung Lương - Nhơn Lý\r\nKhởi hành: Quy Nhơn'),
('T07', 'Chùa Ông Núi-Linh Phong Thiền Tự', 'Chùa Ông Núi còn có tên gọi khác là Linh Phong Sơn tự, tọa lạc trên đỉnh Chóp Vung, huyện Phù Cát, cách thành phố Quy Nhơn khoảng 30km. Theo các bộ sử cũ, chùa được hình thành vào năm 1702 dưới thời chúa Nguyễn Phúc Chu. Khi này một nhà sư có tên tục là Lê Ban đã tới hang đá phía đông núi Bà để ẩn tu. Tại đây ông đã dựng lên một am nhỏ đặt tên là chùa Dũng Tuyền. Thiền sư Lê Ban là bậc tiên phong đạo cốt, quanh năm chỉ ở trên núi tu luyện, mặc đồ bằng vỏ cây, chuyên hái thuốc chữa bệnh cứu người. Nhân dân trong vùng rất kính trọng gọi là Ông Núi. Ở nơi sườn núi phía bắc vẫn còn di tích một hang đá rộng lớn ăn sâu vào lòng núi mà ngày nay người ta gọi là hang Tổ. Ðó là nơi Ông Núi tu trì ngày trước.\r\n\r\nTới năm 1733, chúa Nguyễn vì mến mộ tài đức của nhà sư nên đã ban cho ông hiệu Tịnh Giác Thiện Trì đại lão thiền sư, đồng thời cho xây cất lại Dũng Tuyền tự thành một ngôi chùa lớn hơn đặt tên là Linh Phong thiền tự. Thời nhà Nguyễn, chùa lại được các vua cho trùng tu lại to đẹp hơn. Tuy nhiên sau đó trải qua một thời gian dài chiến tranh, chùa Ông Núi bị tàn phá nặng nề, chỉ còn lại cổng tam quan ở mặt phía đông và một bửu tháp.  Đến năm 1990 chùa được xây mới lại với kiến trúc mái cổ lầu, lợp ngói ống. Ở trên nóc chùa có lưỡng long tranh châu, đôi cột trước điện có hình rồng cuộn. Trong chùa có tượng Phật cao 2,5 m, đại hồng chung nặng 1,2 tấn. Chùa có kiến trúc trang nghiêm, cổ kính, hài hòa với thiên nhiên.', '2023-05-27', 'Người lớn(Từ 10+ tuổi) : 250.000đ/ Khách\r\nTrẻ em(Từ 5-9 tuổi) : 125.000đ/ Khách\r\nTrẻ em(Dưới 5 tuổi): Miễn phí\r\n', 'images/chua', 'Chùa Ông Núi - Khám phá vẻ đẹp thiêng liêng, hùng vĩ\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô\r\nĐịểm đến: Chùa Ông Núi - Linh Phong Thiền tự\r\nKhởi hành: Quy Nhơn'),
('T08', 'Cù Lao Xanh', 'Cù Lao Xanh hay còn có tên gọi khác là đảo Vân Phi, là một hải đảo gần với vịnh Xuân Đài, xã Nhơn Châu, TP. Quy Nhơn, tỉnh Bình Định. Cù lao này nằm cách bờ biển nội thành Quy Nhơn khoảng 24 km về phía tây bắc và bờ biển tỉnh Phú Yên 22 km về phía tây. Với tổng diện tích gần 365 ha, cù lao được chia thành 3 thôn là Thôn Tây (trung tâm), Thôn Đông và Thông Trung. Từ xa xa, du khách có thể nhìn thấy một hòn đảo xanh ngắt giữa biển. Làng chài của ngư dân thì nép mình dưới chân núi, bên bờ cát trắng trải dài. Trên đỉnh núi là ngọn hải đăng uy nghiêm, sừng sững, nổi bật giữa biển trời bao la. Chính khung cảnh thanh bình, yên ả đó đã tạo nên một điểm đến hấp dẫn cho những ai muốn tận hưởng trọn vẹn cảnh sắc thiên nhiên.', '2023-06-05', 'Giá vé: 10.000 đồng/ Khách', 'images/culao', 'Tham quan Cù Lao Xanh Bình Định\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô, cano\r\nĐịểm đến: Hải đăng Cù Lao Xanh - Mũi Hoàng Bằng - Cầu cảng Cù Lao Xanh\r\nKhởi hành: Quy Nhơn'),
('T09', 'Hầm Hô', 'Khu du lịch sinh thái Hầm Hô Rosa Alba tọa lạc tại xã Tây Phú, huyện Tây Sơn, cách thành phố Qui Nhơn 50km về phía Tây Bắc, cách Bảo Tàng Quang Trung 5km. Là một điểm tham quan lý tưởng không thể bỏ qua của du khách khi đến với quê hương Bình Định, miền đất địa linh nhân kiệt.\r\n\r\n     Giữa ngút ngàn của rừng xanh dưới chân dãy Trường Sơn hùng vĩ. Hầm Hô một Danh Thắng thiên nhiên tuyệt mỹ, một điều kỳ diệu của tạo hóa với khúc sông Trời Lấp, với Hòn Chuông, Hòn Bóng, với Đá Thành, Bàn Cờ Tiên, Dấu Chân Khổng Lồ và một hệ sinh thái rừng đa dạng.\r\nĐến với Khu du lịch Hầm Hô Rosa Alba, du khách như được trở về với thiên nhiên hùng vĩ, được đắm mình trong thế giới Bồng lai tiên cảnh và như được trút bỏ mọi lo toan của cuộc sống hiện đại.\r\n\r\n     Trong thời gian qua Khu du lịch sinh thái Hầm Hô Rosa Alba đã không ngừng hoàn thiện và nâng cao chất lượng phục vụ. Với đội ngũ nhân viên được đào tạo chuyên nghiệp, có kinh nghiệm, với phong cách phục vụ lịch sự sẽ để lại ấn tượng trong lòng du khách.', '2023-06-12', 'Người lớn(Từ 10+ tuổi) : 640.000đ/ Khách\r\nTrẻ em(Từ 5-10 tuổi) : 320.000đ/ Khách\r\nTrẻ em(Dưới 5 tuổi): Miễn phí', 'images/hamho', 'Tour Du Lịch Hầm Hô Tây Sơn - Khám Phá Nét Đẹp Miền Dất Võ\r\n620.000VND 550.000VND\r\nThời gian: 1 ngày\r\nPhương tiện: Ôtô, xe điện\r\nĐịểm đến: Quy Nhơn - Bảo Tàng Quang Trung - Hầm Hô - Chùa Thiên Hưng\r\nKhởi hành: Quy Nhơn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
