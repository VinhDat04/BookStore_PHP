-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 26, 2024 lúc 08:14 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idsach` int NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idsach`, `dongia`, `soluongton`) VALUES
(1, 50000, 100),
(2, 128000, 100),
(3, 108000, 100),
(4, 87000, 100),
(5, 270000, 100),
(6, 135000, 100),
(7, 72000, 100),
(8, 140000, 100),
(9, 100000, 100),
(10, 71000, 100),
(11, 72000, 100),
(12, 115000, 100),
(13, 320000, 100),
(14, 126000, 100),
(15, 12000, 100),
(16, 16000, 100),
(17, 20000, 100),
(18, 396000, 100),
(19, 20000, 100),
(20, 125000, 100),
(21, 62000, 100),
(22, 108000, 100),
(23, 150000, 100),
(24, 76000, 100),
(25, 100000, 100),
(26, 6000, 100),
(27, 120000, 100),
(28, 10000, 100),
(29, 85000, 100),
(30, 210000, 100),
(31, 100000, 100),
(32, 115000, 100),
(33, 80000, 100),
(34, 120000, 100),
(35, 150000, 100),
(36, 45000, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int NOT NULL,
  `masach` int NOT NULL,
  `soluongmua` int NOT NULL,
  `thanhtien` int NOT NULL,
  `tinhtrang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `masach`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(3, 16, 2, 32000, 0),
(3, 23, 1, 150000, 0),
(4, 6, 3, 405000, 0),
(16, 22, 1, 108000, 0),
(18, 24, 1, 76000, 0),
(19, 22, 3, 324000, 0),
(20, 18, 1, 396000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `masach` int NOT NULL,
  `tensach` varchar(60) NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `matheloai` varchar(5) NOT NULL,
  `soluotxem` int NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(5000) NOT NULL,
  `tacgia` varchar(50) NOT NULL,
  `nhaxuatban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`masach`, `tensach`, `giamgia`, `hinh`, `matheloai`, `soluotxem`, `ngaylap`, `mota`, `tacgia`, `nhaxuatban`) VALUES
(1, 'Đường Thời Đại - Những Cú Đấm Thép', 0, '1.webp', 'TT', 1, '2023-12-08', 'Đường Thời Đại - Những Cú Đấm Thép” (Tập 6) là một phần của \r\ntiểu thuyết lịch sử của tác giả Đặng Đình Loan. Trong tập này, câu chuyện xoay quanh nhân vật Út Tân, một cô gái xinh đẹp và mạnh mẽ, phải đối mặt với\r\nnhững tình huống khó khăn và thách thức. Cô bị những người đàn ông đểu cáng trêu ghẹo, nhưng Út Tân tỏ ra rất bình tĩnh và không để bị lung lay bởi họ. \r\nCâu chuyện cũng tiết lộ mối quan hệ giữa Út Tân và người cậu của cô, Phan Văn Liễu, người có vị trí quan trọng trong tổng nha cảnh sát', 'Đặng Đình Loan', 'NXB Quân Đội Nhân Dân'),
(2, 'Chồn Mật', 0, '2.webp', 'TT', 3, '2023-12-08', 'Chồn \"Chồn Mật\" được coi là **cuốn tiểu thuyết cuối cùng** của Robert Ruark. Đây là câu chuyện về một người đàn ông, một nhà văn tài năng, bị giằng xé giữa công việc và đàn bà. Cuốn sách không mang dáng vẻ của một hồi ký, mặc dù có nhắc đến các nhân vật tiếng tăm có thực như nhà báo E.Pyle, nhà văn E.Hemingway. Một trích dẫn nổi bật từ cuốn sách: \"Hãy kiềm chế cảm xúc của bạn. Vì những cảm xúc mạnh mẽ sẽ bùng nổ trong tâm trí.\" (Chicago Tribune).', 'Robert Ruark ', 'NXB Văn Học'),
(3, 'Phù Dao Hoàng Hậu', 0, '3.webp', 'TT', 4, '2023-12-08', '“Phù Dao Hoàng Hậu” là một tác phẩm của tác giả Thiên Hạ Quy Nguyên. Cuốn sách kể về một người con gái trước khi trở thành hoàng hậu được người dân yêu mến, cô là một cô gái chân to thô kệch, chỉ là người dân bình thường. Trong một lần vua thi hành di khảo sát dân chúng, nàng đã cứu vua trong lúc nguy hiểm và từ đó hai người bắt đầu có mối quan hệ. Văn phong của tác giả được mô tả là mới lạ, có phong cách và hài hước. Đây là một tác phẩm thuộc thể loại Ngôn Tình, Huyền Huyễn, Dã Sử', 'Thiên Hạ Quy Nguyên', 'NXB Văn Học'),
(4, 'Quỳnh Dao - Cánh Nhạn Trên Cành Cao', 0, '4.webp', 'TT', 1, '2023-12-08', 'Tiểu thuyết “Cánh Nhạn Trên Cành Cao” của Quỳnh Dao là một tác phẩm lãng mạn, nổi tiếng với cách kể chuyện sâu lắng và những tình tiết đầy cảm xúc. Quỳnh Dao được biết đến là một tác giả có khả năng miêu tả tinh tế về tình yêu, gia đình và những mối quan hệ xã hội trong các tác phẩm của mình. Đây là một câu chuyện đẹp, đầy chất thơ và mang đậm dấu ấn cá nhân của tác giả. Nếu bạn muốn biết thêm chi tiết, tôi khuyên bạn nên đọc trực tiếp cuốn tiểu thuyết để trải nghiệm đầy đủ vẻ đẹp của ngôn từ và cốt truyện mà Quỳnh Dao đã tạo nên.', 'Quỳnh Dao', 'NXB Văn Hóa Văn Nghệ Thuật'),
(5, 'Những Người Khốn Khổ ', 200000, '5.webp', 'TT', 1, '2023-12-08', '\"Những Người Khốn Khổ\" (tiếng Pháp: Les Misérables) là một trong những tác phẩm nổi tiếng nhất của văn hào Pháp Victor Hugo, xuất bản năm 1862. Tiểu thuyết này được đánh giá là một trong những tác phẩm văn học lớn của thế kỷ 19. \r\nTác phẩm mô tả xã hội nước Pháp trong khoảng hơn 20 năm đầu thế kỷ 19, từ thời điểm Napoléon I lên ngôi và vài thập niên sau đó¹. Nhân vật chính là Jean Valjean, một cựu tù nhân tìm cách chuộc lại những lỗi lầm của mình sau khi được thả tự do. \r\nTiểu thuyết không chỉ khắc họa bản chất của cái tốt, cái xấu, và luật pháp, mà còn là một cuốn bách khoa toàn thư về lịch sử, kiến trúc Paris, chính trị, triết lý, và tín ngưỡng của nước Pháp nửa đầu thế kỷ 19. \"Những Người Khốn Khổ\" cũng nổi tiếng vì đã được chuyển thể thành nhiều vở kịch, bộ phim và nhạc kịch.', 'Victor Hugo', 'NXB Văn Học'),
(6, 'Thi Pháp Tiểu Thuyết Hiện Đại', 0, '6.jpg', 'TT', 1, '2023-12-08', 'Cuốn \"Thi Pháp Tiểu Thuyết Hiện Đại\" của Bùi Việt Thắng là một công trình nghiên cứu giá trị, phản ánh sâu sắc về truyện ngắn và tiểu thuyết hiện đại. Tác phẩm này được Nhà xuất bản Thanh niên phát hành và đã nhận được giải thưởng hạng B của Hội đồng Lý luận phê bình Văn học Nghệ thuật Trung ương.\r\nCuốn sách gồm hai phần chính: \"Truyện ngắn Việt Nam hiện đại – Cảnh quan và tác giả\" và \"Những sắc cầu vồng truyện ngắn\". Phần đầu tiên giới thiệu về truyện ngắn Việt Nam từ giai đoạn 1945-1975 và sau năm 1975, cung cấp cái nhìn tổng quan về dòng chảy liên tục của truyện ngắn trong lịch sử văn học Việt Nam.\r\n', 'Bùi Việt Thắng', 'NXB Thanh Niên'),
(7, 'Sóng Tình Phương Nam', 0, '7.jpg', 'TT', 1, '2023-12-08', '“Sóng Tình Phương Nam” là một tiểu thuyết của Danielle Steel, một tác giả nổi tiếng với những tác phẩm lãng mạn và cảm động. Cuốn sách kể về câu chuyện của Alexa, một người phụ nữ tốt nghiệp luật khoa và làm việc tại phòng công tố quận, cùng con gái Savannah, người sắp thi vào đại học.\r\nTrong cuốn tiểu thuyết, Alexa phải đối mặt với một phiên tòa quan trọng và cuộc sống cá nhân của cô bị xáo trộn bởi một loạt thư đe dọa. Cô buộc phải gửi con gái trở lại nơi mà cô đã thề sẽ không bao giờ quay trở lại: nơi mà cuộc hôn nhân của cô kết thúc trong đau khổ.\r\nCâu chuyện cũng khám phá mối quan hệ phức tạp giữa Alexa và cô vợ cũ của chồng cũ, Luisa, người tìm cách quay lại với sự giúp đỡ đầy mưu mô và tàn nhẫn của bà mẹ chồng Eugenie để loại bỏ mẹ con Alexa, do thành kiến Bắc Nam còn ảnh hưởng nặng nề sau cuộc nội chiến....', 'Danielle Steel', 'NXB Văn Học'),
(8, 'Nhật Ký Săn Đuổi Tội Ác - Nhạc Dũng ', 100000, '8.jpg', 'TT', 1, '2023-12-08', '\"Nhật Ký Săn Đuổi Tội Ác\" là một tiểu thuyết trinh thám hấp dẫn của tác giả Nhạc Dũng, nổi bật với những vụ án kỳ bí và đầy thách thức. Cuốn sách gồm 4 truyện, tương đương với 4 vụ án khác nhau, mỗi vụ án đều mang một thông điệp sâu sắc và được phá án bởi thần thám Long Nghị.\r\nTrong tiểu thuyết, bạn sẽ theo chân Long Nghị trên hành trình phá án, tìm ra chân lý sự thật qua các vụ án đẫm máu và li kì. Những vụ án này không chỉ là những câu chuyện trinh thám thông thường mà còn vạch trần những mảng tối của xã hội hiện đại, khi mà con người ta vì đồng tiền sẵn sàng từ bỏ tình nghĩa, lương tâm....', ' Nhạc Dũng', 'NXB Văn Học'),
(9, 'Điểm Hẹn Đen', 0, '9.webp', 'TT', 1, '2023-12-08', '“Điểm Hẹn Đen” là một tiểu thuyết trinh thám đen đầy kịch tính của Cornell Woolrich, được xuất bản vào năm 1948. Tác phẩm này nổi bật với cách xây dựng tình tiết và kết cấu ngược, khác biệt so với trinh thám truyền thống.\r\nTrong tiểu thuyết, chúng ta theo dõi câu chuyện của Johnny Marr, một người đàn ông trải qua bi kịch mất đi người phụ nữ anh yêu ngay trước ngày cưới. Vụ tai nạn đột ngột này đã biến anh thành một con người khác, sống chỉ để trả thù1. Mỗi năm vào ngày 31/5, Johnny thi hành “bản án” của mình đối với những kẻ anh cho là đã gây ra cái chết cho người con gái anh yêu, khiến họ phải nếm trải cùng một nỗi đau.\r\nĐộc giả sớm biết hung thủ là ai và động cơ gây án ngay từ những chương đầu tiên, tạo nên một trải nghiệm đọc sách độc đáo khi “công lý” không phải đến từ pháp luật mà từ chính tay kẻ giết người. “Điểm Hẹn Đen” không chỉ là một cuốn trinh thám mà còn là một cuộc suy ngẫm về công lý, hận thù và sự tuyệt vọng trong lòng một con người.', 'Cornell Woolrich', 'NXB Văn Học'),
(10, 'Cô Dâu Đen', 0, '10.jpg', 'TT', 1, '2023-12-08', '\"Cô Dâu Đen\" là một tiểu thuyết trinh thám hình sự của Cornell Woolrich, nổi tiếng với những bí ẩn kinh dị theo kiểu cổ điển. Cuốn sách kể về một người phụ nữ xinh đẹp và bí ẩn, người ra tay mưu sát những người đàn ông theo nhiều cách thức. \r\nCâu chuyện bắt đầu với sự xuất hiện của một cô gái trẻ rời bỏ ngôi nhà thân thuộc, rũ bỏ thân phận trước đây và bắt đầu một cuộc sống mới. Tiếp đến là lần lượt từng cái chết bất ngờ, các cuộc điều tra đi vào ngõ cụt của cảnh sát. Những người đàn ông không biết cô là ai, cô đến từ đâu hay tại sao cô bước vào cuộc đời họ. Trước mắt họ, cô hóa thân thành nàng thơ kiều diễm, người tình trong mộng, nữ thần săn bắn Diana lừa con mồi vào chỗ chết². Mỗi khi cô xuất hiện, một người đàn ông sẽ bị bỏ bùa. Mỗi khi cô biến mất, một kẻ xấu số sẽ phải bỏ mạng.\r\nCuốn sách được đánh giá là rùng mình, li kì, hồi hộp và có khả năng ám ảnh người đọc trong một thời gian dài sau khi đọc¹. Đằng sau tấm khăn choàng cô dâu, hung thủ thật sự là ai? Câu hỏi này là một trong những điểm nhấn chính của câu chuyện, khiến người đọc không thể không tò mò về kết cục.', 'Cornell Woolrich', 'NXB Văn Học'),
(11, 'Chiếc Tất Nhuộm Bùn', 0, '11.jpg', 'TT', 1, '2023-12-08', '“Chiếc Tất Nhuộm Bùn” là một tiểu thuyết thuộc series Thám tử Kỳ Phát của tác giả Phạm Cao Củng. Trong tác phẩm này, từ một chiếc tất nhuộm bùn, nhân vật chính Kỳ Phát đã khám phá ra việc mẹ kế tư thông với nhân tình và gói ghém nữ trang toan bỏ trốn. Tuy nhiên, bà ta lại vu cho Kỳ Phát tội ăn cắp, khiến anh phải chịu tủi nhục và bị mọi người khinh ghét.\r\nCuốn sách còn khám phá tuổi thơ xa mẹ của Kỳ Phát, nếm chịu nhiều đắng cay, và mong muốn được biết tung tích của mẹ. Nhưng đau đớn thay, anh lại gặp mẹ trong hoàn cảnh vô cùng trớ trêu, và câu chuyện hai mươi năm về trước dần được hé lộ.\r\n“Chiếc Tất Nhuộm Bùn” không chỉ là một tiểu thuyết trinh thám hấp dẫn mà còn chứa đựng những thông điệp sâu sắc về gia đình và xã hội, đồng thời phản ánh những mảng tối trong cuộc sống qua những vụ án mà Kỳ Phát phải giải quyết.', 'Phạm Cao Củng', 'NXB Công An Nhân Dân'),
(12, 'Câm Lặng', 0, '12.jpg', 'TT', 1, '2023-12-08', '“Câm Lặng” là một tiểu thuyết trinh thám của Eric Rickstad, nổi tiếng với bối cảnh mùa đông chết chóc ở Vermont và những tình tiết hồi hộp, kịch tính. Trong cuốn sách, Frank Rath, một cựu cảnh sát đã trở thành thám tử tư, dành phần lớn thời gian để chăm sóc con gái của mình1. Anh cho rằng mình đã không còn dính dáng tới án mạng kể từ khi rời khỏi lực lượng cảnh sát.\r\nCuốn tiểu thuyết mang lại cho người đọc cảm giác hồi hộp như khi xem phim của Alfred Hitchcock, với những diễn biến bất ngờ và sự phát triển của các nhân vật đầy thú vị. “Câm Lặng” không chỉ là một câu chuyện trinh thám mà còn là một cuộc suy ngẫm sâu sắc về công lý và sự đấu tranh nội tâm của những nhân vật trong cuốn sách.', 'Eric Rickstad', 'NXB Văn Học'),
(13, 'Tam Quốc Diễn Nghĩa', 0, '13.webp', 'TT', 5, '2023-12-08', 'Tiểu thuyết là một dạng văn học dài, tập trung vào việc phát triển các nhân vật, cốt truyện và bối cảnh. Thể loại này thường mô tả các tình tiết phức tạp và phong phú về tâm lý con người, tạo nên một không gian ảo để độc giả có thể đắm chìm trong thế giới tưởng tượng. Các tiểu thuyết có thể chia thành nhiều thể loại như lãng mạn, huyền bí, khoa học viễn tưởng, phiêu lưu, lịch sử, hài hước, tâm lý và nhiều thể loại khác nhau để phục vụ sở thích của đa dạng độc giả.', 'La Hán Trung', 'NXB Thanh Niên'),
(14, 'Trở Về Eden', 0, '14.webp', 'TT', 5, '2023-12-08', 'Tiểu thuyết là một dạng văn học dài, tập trung vào việc phát triển các nhân vật, cốt truyện và bối cảnh. Thể loại này thường mô tả các tình tiết phức tạp và phong phú về tâm lý con người, tạo nên một không gian ảo để độc giả có thể đắm chìm trong thế giới tưởng tượng. Các tiểu thuyết có thể chia thành nhiều thể loại như lãng mạn, huyền bí, khoa học viễn tưởng, phiêu lưu, lịch sử, hài hước, tâm lý và nhiều thể loại khác nhau để phục vụ sở thích của đa dạng độc giả.', 'Rosalind Miles', 'NXB Văn Học'),
(15, 'Khoa Học 4', 0, '15.webp', 'GK', 5, '2023-12-08', 'Sách giáo khoa là tài liệu giáo dục chính thức được sử dụng trong các cơ sở giáo dục từ cấp tiểu học đến trung học phổ thông. Chúng được thiết kế để cung cấp kiến thức và kỹ năng cơ bản trong các lĩnh vực như toán học, ngữ văn, khoa học, xã hội học và nhiều lĩnh vực khác. Sách giáo khoa thường tuân theo chương trình học được xác định bởi bộ giáo dục và có tính cấp thiết trong việc giảng dạy và học tập.', 'Bộ Giáo Dục Và Đào Tạo', 'NXB Giáo Dục Việt Nam'),
(16, 'Giáo Dục Thể Chất Lớp 1', 0, '16.webp', 'GK', 5, '2023-12-08', 'Sách giáo khoa là tài liệu giáo dục chính thức được sử dụng trong các cơ sở giáo dục từ cấp tiểu học đến trung học phổ thông. Chúng được thiết kế để cung cấp kiến thức và kỹ năng cơ bản trong các lĩnh vực như toán học, ngữ văn, khoa học, xã hội học và nhiều lĩnh vực khác. Sách giáo khoa thường tuân theo chương trình học được xác định bởi bộ giáo dục và có tính cấp thiết trong việc giảng dạy và học tập.', 'Bộ Giáo Dục Và Đào Tạo', 'NXB Giáo Dục Việt Nam'),
(17, 'Truyện Vịt Con Xấu Xí', 0, '17.webp', 'TN', 5, '2023-12-08', 'Sách thiếu nhi là những tác phẩm văn học, truyện tranh hoặc tư liệu được thiết kế đặc biệt để phù hợp với lứa tuổi và sở thích của trẻ em. Các cuốn sách thiếu nhi thường chứa các câu chuyện kích thích tưởng tượng, hình ảnh sáng tạo và thông điệp tích cực. Chúng có thể bao gồm truyện cổ tích, sách học tập, truyện tranh và cuốn sách giáo dục khác nhau để giúp trẻ phát triển văn hóa đọc và kiến thức sơ cấp.', 'Truyện Cổ Tích', 'NXB Thanh Niên'),
(18, 'Từ Điển Văn Hóa Lịch Sử', 0, '18.webp', 'LS', 5, '2023-12-08', 'Sách lịch sử là những tác phẩm văn học hoặc tư liệu chuyên ngành tập trung vào việc nghiên cứu, phân tích và truyền đạt kiến thức về các sự kiện, nhân vật và thời kỳ lịch sử. Chúng có thể bao gồm các tác phẩm khoa học, sách giáo trình và các tư liệu nghiên cứu, giúp người đọc hiểu rõ hơn về quá khứ, xây dựng cách nhìn đa chiều về lịch sử và hỗ trợ trong quá trình nghiên cứu và giảng dạy.', 'GS.TS Nguyễn Như Ý', 'NXB Chính Trị Quốc Gia Sự Thật'),
(19, 'Truyện Cô Bé Lọ Lem', 0, '19.webp', 'TN', 5, '2023-12-08', 'Sách thiếu nhi là những tác phẩm văn học, truyện tranh hoặc tư liệu được thiết kế đặc biệt để phù hợp với lứa tuổi và sở thích của trẻ em. Các cuốn sách thiếu nhi thường chứa các câu chuyện kích thích tưởng tượng, hình ảnh sáng tạo và thông điệp tích cực. Chúng có thể bao gồm truyện cổ tích, sách học tập, truyện tranh và cuốn sách giáo dục khác nhau để giúp trẻ phát triển văn hóa đọc và kiến thức sơ cấp.', 'Truyện Cổ Tích', 'NXB Thanh Niên'),
(20, 'Lịch Sử Thế Giới Toàn Tập', 0, '20.webp', 'LS', 5, '2023-12-08', 'Sách lịch sử là những tác phẩm văn học hoặc tư liệu chuyên ngành tập trung vào việc nghiên cứu, phân tích và truyền đạt kiến thức về các sự kiện, nhân vật và thời kỳ lịch sử. Chúng có thể bao gồm các tác phẩm khoa học, sách giáo trình và các tư liệu nghiên cứu, giúp người đọc hiểu rõ hơn về quá khứ, xây dựng cách nhìn đa chiều về lịch sử và hỗ trợ trong quá trình nghiên cứu và giảng dạy.', 'Nguyễn Hiến Lê - Thiên Giang', 'NXB Tổng Hợp TP. HCM'),
(21, 'Tư Duy Kinh Doanh Vượt Trội', 0, '21.webp', 'KD', 5, '2023-12-08', 'Sách kinh doanh là những tác phẩm tập trung vào các chủ đề liên quan đến quản lý, doanh nghiệp, tiếp thị, tài chính và phát triển kỹ năng cá nhân trong lĩnh vực kinh doanh. Chúng cung cấp kiến thức, chiến lược và kinh nghiệm từ các chuyên gia trong ngành giúp độc giả hiểu rõ hơn về cách thức hoạt động của doanh nghiệp và cách thức xây dựng một mô hình kinh doanh thành công.', 'KEN BAUM & BOB ANDELMAN ', 'NXB Thanh Hóa'),
(22, 'Minh Triết Trong Đời Sống', 0, '22.webp', 'DS', 5, '2023-12-08', 'Sách đời sống tập trung vào các chủ đề liên quan đến phát triển cá nhân, sức khỏe, quan hệ, tâm lý học và cách thức tận hưởng cuộc sống. Chúng cung cấp kiến thức, kinh nghiệm và phương pháp thực tiễn để giúp độc giả tìm hiểu về bản thân, tạo dự định và cải thiện chất lượng cuộc sống cá nhân.', 'Wisdom, Bliss and Common Sense', 'NXB Thế Giới'),
(23, 'Kinh Doanh Chắc Thắng', 0, '23.webp', 'KD', 5, '2023-12-08', 'Sách kinh doanh là những tác phẩm tập trung vào các chủ đề liên quan đến quản lý, doanh nghiệp, tiếp thị, tài chính và phát triển kỹ năng cá nhân trong lĩnh vực kinh doanh. Chúng cung cấp kiến thức, chiến lược và kinh nghiệm từ các chuyên gia trong ngành giúp độc giả hiểu rõ hơn về cách thức hoạt động của doanh nghiệp và cách thức xây dựng một mô hình kinh doanh thành công.', 'Derek Lidow', 'NXB Đà Nẵng'),
(24, 'Những Quyết Định Thay Đổi Cuộc Sống', 0, '24.webp', 'DS', 5, '2023-12-08', 'Sách đời sống tập trung vào các chủ đề liên quan đến phát triển cá nhân, sức khỏe, quan hệ, tâm lý học và cách thức tận hưởng cuộc sống. Chúng cung cấp kiến thức, kinh nghiệm và phương pháp thực tiễn để giúp độc giả tìm hiểu về bản thân, tạo dự định và cải thiện chất lượng cuộc sống cá nhân.', 'SPENCER JOHNSON, M.D.', 'NXB Tổng hợp TPHCM'),
(25, 'Mùa Hè Giá Buốt', 60000, '25.webp', 'TT', 1, '2023-12-08', 'Tiểu thuyết là một dạng văn học dài, tập trung vào việc phát triển các nhân vật, cốt truyện và bối cảnh. Thể loại này thường mô tả các tình tiết phức tạp và phong phú về tâm lý con người, tạo nên một không gian ảo để độc giả có thể đắm chìm trong thế giới tưởng tượng. Các tiểu thuyết có thể chia thành nhiều thể loại như lãng mạn, huyền bí, khoa học viễn tưởng, phiêu lưu, lịch sử, hài hước, tâm lý và nhiều thể loại khác nhau để phục vụ sở thích của đa dạng độc giả.', 'Văn Lê', 'NXB Văn Hóa Sài Gòn'),
(26, 'Giáo Dục Công Dân 9', 4000, '26.webp', 'GK', 1, '2023-12-08', 'Sách giáo khoa là tài liệu giáo dục chính thức được sử dụng trong các cơ sở giáo dục từ cấp tiểu học đến trung học phổ thông. Chúng được thiết kế để cung cấp kiến thức và kỹ năng cơ bản trong các lĩnh vực như toán học, ngữ văn, khoa học, xã hội học và nhiều lĩnh vực khác. Sách giáo khoa thường tuân theo chương trình học được xác định bởi bộ giáo dục và có tính cấp thiết trong việc giảng dạy và học tập.', 'Bộ Giáo Dục Và Đào Tạo', 'NXB Giáo Dục Việt Nam'),
(27, 'Lãn Ông', 70000, '27.jpg', 'TT', 1, '2023-12-08', 'Tiểu thuyết là một dạng văn học dài, tập trung vào việc phát triển các nhân vật, cốt truyện và bối cảnh. Thể loại này thường mô tả các tình tiết phức tạp và phong phú về tâm lý con người, tạo nên một không gian ảo để độc giả có thể đắm chìm trong thế giới tưởng tượng. Các tiểu thuyết có thể chia thành nhiều thể loại như lãng mạn, huyền bí, khoa học viễn tưởng, phiêu lưu, lịch sử, hài hước, tâm lý và nhiều thể loại khác nhau để phục vụ sở thích của đa dạng độc giả.', 'Yveline Féray', 'NXB Văn Hóa - Văn Nghệ TPHCM'),
(28, 'Giáo Dục Quốc Phòng 10', 8000, '28.webp', 'GK', 1, '2023-12-08', 'Sách giáo khoa là tài liệu giáo dục chính thức được sử dụng trong các cơ sở giáo dục từ cấp tiểu học đến trung học phổ thông. Chúng được thiết kế để cung cấp kiến thức và kỹ năng cơ bản trong các lĩnh vực như toán học, ngữ văn, khoa học, xã hội học và nhiều lĩnh vực khác. Sách giáo khoa thường tuân theo chương trình học được xác định bởi bộ giáo dục và có tính cấp thiết trong việc giảng dạy và học tập.', 'Bộ Giáo Dục Và Đào Tạo', 'NXB Giáo Dục Việt Nam'),
(29, 'Câu Chuyện Của Những Giọt Nước', 60000, '29.webp', 'TN', 1, '2023-12-08', 'Sách thiếu nhi là những tác phẩm văn học, truyện tranh hoặc tư liệu được thiết kế đặc biệt để phù hợp với lứa tuổi và sở thích của trẻ em. Các cuốn sách thiếu nhi thường chứa các câu chuyện kích thích tưởng tượng, hình ảnh sáng tạo và thông điệp tích cực. Chúng có thể bao gồm truyện cổ tích, sách học tập, truyện tranh và cuốn sách giáo dục khác nhau để giúp trẻ phát triển văn hóa đọc và kiến thức sơ cấp.', ' Ichitaro Soga', 'NXB Kim Đồng'),
(30, 'Bí Quyết Hóa Rồng - Lịch Sử Singapore 1965-2000 ', 195000, '30.webp', 'LS', 1, '2023-12-08', ' Sách lịch sử là những tác phẩm văn học hoặc tư liệu chuyên ngành tập trung vào việc nghiên cứu, phân tích và truyền đạt kiến thức về các sự kiện, nhân vật và thời kỳ lịch sử. Chúng có thể bao gồm các tác phẩm khoa học, sách giáo trình và các tư liệu nghiên cứu, giúp người đọc hiểu rõ hơn về quá khứ, xây dựng cách nhìn đa chiều về lịch sử và hỗ trợ trong quá trình nghiên cứu và giảng dạy.', 'Tiểu Giàu', 'NXB Trẻ'),
(31, 'Chiếc Mũ Của Ông Trăng', 85000, '31.webp', 'TN', 1, '2023-12-08', 'Sách thiếu nhi là những tác phẩm văn học, truyện tranh hoặc tư liệu được thiết kế đặc biệt để phù hợp với lứa tuổi và sở thích của trẻ em. Các cuốn sách thiếu nhi thường chứa các câu chuyện kích thích tưởng tượng, hình ảnh sáng tạo và thông điệp tích cực. Chúng có thể bao gồm truyện cổ tích, sách học tập, truyện tranh và cuốn sách giáo dục khác nhau để giúp trẻ phát triển văn hóa đọc và kiến thức sơ cấp.', 'Ichitaro Soga', 'NXB Kim Đồng'),
(32, 'Lịch Sử Văn Học Trung Quốc - Tập 2', 0, '32.webp', 'LS', 1, '2023-12-08', ' Sách lịch sử là những tác phẩm văn học hoặc tư liệu chuyên ngành tập trung vào việc nghiên cứu, phân tích và truyền đạt kiến thức về các sự kiện, nhân vật và thời kỳ lịch sử. Chúng có thể bao gồm các tác phẩm khoa học, sách giáo trình và các tư liệu nghiên cứu, giúp người đọc hiểu rõ hơn về quá khứ, xây dựng cách nhìn đa chiều về lịch sử và hỗ trợ trong quá trình nghiên cứu và giảng dạy.  ', 'Bộ Giáo Dục Và Đào Tạo', 'NXB Giáo Dục Việt Nam'),
(33, 'Giao Tiếp Hiệu Quả Trong Kinh Doanh', 65000, '33.webp', 'KD', 1, '2023-12-08', ' Sách kinh doanh là những tác phẩm tập trung vào các chủ đề liên quan đến quản lý, doanh nghiệp, tiếp thị, tài chính và phát triển kỹ năng cá nhân trong lĩnh vực kinh doanh. Chúng cung cấp kiến thức, chiến lược và kinh nghiệm từ các chuyên gia trong ngành giúp độc giả hiểu rõ hơn về cách thức hoạt động của doanh nghiệp và cách thức xây dựng một mô hình kinh doanh thành công.  ', 'Peter E. Friedes & David H. Maister', 'NXB Thanh Niên'),
(34, 'Stay Positive - Sống Tích Cực, Đời Hết Bực', 100000, '34.webp', 'DS', 1, '2023-12-08', 'Sách đời sống tập trung vào các chủ đề liên quan đến phát triển cá nhân, sức khỏe, quan hệ, tâm lý học và cách thức tận hưởng cuộc sống. Chúng cung cấp kiến thức, kinh nghiệm và phương pháp thực tiễn để giúp độc giả tìm hiểu về bản thân, tạo dự định và cải thiện chất lượng cuộc sống cá nhân.', 'Jon Gordon - Daniel Decker', 'NXB Văn hóa- Văn nghệ TPHCM'),
(35, 'Thương Gia Do Thái - Bậc Thầy Kinh Doanh', 130000, '35.webp', 'KD', 1, '2023-12-08', ' Sách kinh doanh là những tác phẩm tập trung vào các chủ đề liên quan đến quản lý, doanh nghiệp, tiếp thị, tài chính và phát triển kỹ năng cá nhân trong lĩnh vực kinh doanh. Chúng cung cấp kiến thức, chiến lược và kinh nghiệm từ các chuyên gia trong ngành giúp độc giả hiểu rõ hơn về cách thức hoạt động của doanh nghiệp và cách thức xây dựng một mô hình kinh doanh thành công.  ', 'Doanh nghiệp sách Thành Nghĩa ', 'NXB Thanh Niên'),
(36, 'Những Mẫu Chuyện Hấp Dẫn Trong Đời Sống', 36000, '36.webp', 'DS', 1, '2023-12-08', 'Sách đời sống tập trung vào các chủ đề liên quan đến phát triển cá nhân, sức khỏe, quan hệ, tâm lý học và cách thức tận hưởng cuộc sống. Chúng cung cấp kiến thức, kinh nghiệm và phương pháp thực tiễn để giúp độc giả tìm hiểu về bản thân, tạo dự định và cải thiện chất lượng cuộc sống cá nhân.', 'Hà Thiện Thuyên', 'NXB Thanh Hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int NOT NULL,
  `makh` int NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(3, 17, '2024-01-17', 182000),
(4, 17, '2024-01-17', 405000),
(5, 17, '2024-01-17', 0),
(6, 17, '2024-01-17', 0),
(7, 17, '2024-01-17', 0),
(8, 17, '2024-01-17', 0),
(9, 17, '2024-01-17', 0),
(10, 17, '2024-01-17', 0),
(11, 17, '2024-01-17', 0),
(12, 17, '2024-01-17', 0),
(13, 17, '2024-01-17', 0),
(14, 17, '2024-01-17', 0),
(15, 17, '2024-01-17', 0),
(16, 17, '2024-01-17', 108000),
(17, 17, '2024-01-17', 0),
(18, 17, '2024-01-17', 76000),
(19, 17, '2024-01-17', 324000),
(20, 17, '2024-01-24', 396000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text,
  `sodienthoai` varchar(12) DEFAULT NULL,
  `phanquyen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `phanquyen`) VALUES
(17, 'Huỳnh Vĩnh Đạt', 'dathuynh123', 'abfe0bee82a1ed49eaf0543545781507', 'anhnghiep250218@gmail.com', 'trinh dinh thao', '0386469934', '1'),
(20, 'Admin', 'admin', 'abfe0bee82a1ed49eaf0543545781507', 'vinhdat998@gmail.com', 'trinh dinh thao', '8358686556', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idtheloai` int NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `matheloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idtheloai`, `tenloai`, `matheloai`) VALUES
(1, 'Tiểu Thuyết', 'TT'),
(2, 'Sách Giáo Khoa', 'GK'),
(3, 'Thiếu Nhi', 'TN'),
(4, 'Lịch Sử', 'LS'),
(5, 'Kinh Doanh', 'KD'),
(6, 'Đời Sống', 'DS');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idsach`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`masach`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`masach`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idtheloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
