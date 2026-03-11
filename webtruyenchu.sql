-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2026 at 03:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtruyenchu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuong`
--

CREATE TABLE `chuong` (
  `Id_chuong` int(11) NOT NULL,
  `Id_truyen` int(11) DEFAULT NULL,
  `TenChuong` varchar(255) DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `SoChuong` int(11) DEFAULT NULL,
  `NgayDang` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chuong`
--

INSERT INTO `chuong` (`Id_chuong`, `Id_truyen`, `TenChuong`, `NoiDung`, `SoChuong`, `NgayDang`) VALUES
(1, 1, 'Chương 1: Kinh trập(1)', '2 tháng 2, Long Sĩ Đầu. <br><br>Hoàng hôn, địa phương yên tĩnh trong trấn nhỏ tên là ngõ Nê Bình, có thiếu niên gầy ốm lẻ loi hiu quạnh, lúc này hắn đang dựa theo thói quen, một tay cầm ngọn nến, một tay cầm cành đào, chiếu rọi căn phòng, vách tường, giường gỗ các chỗ, dùng cành đào gõ đánh, ý đồ mượn cái này khu đuổi rắn rết, miệng lẩm bẩm, là cách ngôn trấn nhỏ này đời đời truyền xuống: 2 tháng 2, chiếu sáng nhà, đào đánh tường, rắn rết nhân gian không chỗ nấp. <br><br>Thiếu niên họ Trần, danh Bình An, cha mẹ sớm qua đời. Trấn nhỏ đồ sứ rất nổi danh, bản triều khai quốc tới nay, đã đảm đương trọng trách \"Phụng chiếu nung đồ cúng tế hiến lăng\", có quan viên triều đình hàng năm trú đóng nơi đây, quản lý sự vụ. Thiếu niên không chỗ dựa, từ rất sớm đã là một diêu tượng nung sứ, khởi điểm chỉ có thể làm chút việc nặng vặt vãnh, đi theo một sư phụ nửa đường tính tình khó chịu, vất vả nhịn vài năm, vừa mới thu được một chút đường lối về nung sứ, kết quả thế sự vô thường, trấn nhỏ đột nhiên mất đi lá bùa hộ mệnh nung sứ này, mấy chục cái lò nung hình như rồng nằm quanh thân trấn nhỏ, trong một đêm toàn bộ bị quan phủ cưỡng chế đóng cửa tắt lửa. <br><br>Trần Bình An buông cành đào mới bẻ, thổi tắt ngọn nến, đi ra khỏi phòng, ngồi ở bậc thềm, ngửa đầu nhìn, tinh không lấp lánh. <br><br>Thiếu niên đến nay vẫn nhớ rõ ràng, lão sư phụ chỉ chịu nhận mình là nửa đồ đệ kia, họ Diêu, ở sáng sớm tàn thu năm trước, bị người phát hiện ngồi ở trên một cái ghế trúc nhỏ, hướng đầu về phía lò nung, nhắm mắt. <br><br>Nhưng người để tâm vào chuyện vụn vặt như một người thợ già như vậy, chung quy là số ít. <br><br>Trấn nhỏ thợ thủ công đời đời chỉ biết nung sứ, vừa không dám đi quá giới hạn đi nung hàng cống phẩm, lại không dám mang đồ sứ cất trong kho ra buôn bán với dân chúng, chỉ phải đều tìm đường ra khác, Trần Bình An mười bốn tuổi cũng bị đuổi ra khỏi nhà, sau khi trở lại ngõ Nê Bình, tiếp tục thủ cái nhà cũ sớm rách nát không chịu nổi này, cảnh tượng không sai biệt lắm là chỉ có bốn bức tường ảm đạm, đó là Trần Bình An muốn làm bại gia tử, cũng không muốn ở. <br><br>Làm một đoạn thời gian cô hồn dã quỷ bay tới bay đi, thiếu niên thật sự tìm không được nghề nghiệp để kiếm tiền, dựa vào về chút tích góp ít ỏi, thiếu niên miễn cưỡng lấp đầy bụng, mấy ngày hôm trước nghe nói ở ngõ kỵ long ngoài phố, đến một lão thợ rèn họ Nguyễn vùng người, đối ngoại tuyên bố muốn thu bảy tám học đồ gõ sắt, không cho tiền công, nhưng quản cơm, Trần Bình An đã nhanh chạy tới tìm vận khí, chưa từng nghĩ lão nhân chỉ liếc mắt nhìn hắn, đã mang hắn cự ở ngoài cửa, lúc ấy Trần Bình An đã rất buồn, chẳng lẽ cái chuyện gõ sắt này, không phải xem lực cánh tay lớn nhỏ, mà là xem tướng mạo tốt xấu sao? <br><br>Phải biết rằng Trần Bình An tuy nhìn gầy yếu, nhưng khí lực không thể khinh thường, đây là thiếu niên từ nhỏ đã được rèn luyện trụ cột thân thể, trừ cái đó ra, Trần Bình An còn đi theo họ Diêu lão nhân, chạy khắp núi núi sông sông phạm vi trăm dặm khắp trấn nhỏ, biết tư vị các loại thổ nhưỡng bốn phía, chịu mệt nhọc, cái gì sống bẩn sống mệt đều nguyện ý làm, không chút nào chần chờ. Đáng tiếc lão Diêu thủy chung không thích Trần Bình An, ghét bỏ thiếu niên không có ngộ tính, là gỗ tạp không khai khiếu, xa xa không bằng đại đồ đệ Lưu Tiện Dương, cái này cũng trách không được lão nhân bất công, sư phụ đưa vào cửa, tu hành ở cá nhân, ví dụ như cùng là một cái chén đơn giản, Lưu Tiện Dương ngắn ngủn nửa năm công lực, đã ngang với tiêu chuẩn Trần Bình An vất vả ba năm. <br><br>Tuy đời này cũng chưa chắc đã cần tới cái tay nghề này nữa, nhưng Trần Bình An vẫn giống như dĩ vãng, nhắm mắt lại, tưởng tượng trước người mình lại có bàn đá cùng bánh xe, bắt đầu luyện tập làm chén, quen tay hay việc. <br><br>Đại khái qua mỗi một khắc, thiếu niên sẽ tạm nghỉ một chút, lắc lắc cổ tay, tuần hoàn lặp lại như thế, thẳng đến cả người hoàn toàn tinh bì lực tẫn, Trần Bình An lúc này mới đứng dậy, vừa tản bộ ở trong viện, vừa chậm rãi giãn ra gân cốt. Cho tới bây giờ không có ai dạy Trần Bình An cái này, là chính hắn tự tìm ra môn đạo. <br><br>Trong thiên địa nguyên bản vạn vật yên tĩnh, Trần Bình An nghe được một tiếng cười châm chọc chói tai, dừng bước chân lại, quả nhiên, nhìn thấy bạn cùng lứa tuổi ngồi xổm trên đầu tường, nhếch miệng, không chút nào che dấu thần sắc khinh rẻ của hắn. <br><br>Người này là hàng xóm cũ của Trần Bình An, nghe nói là con tư sinh Giam tạo đại nhân tiền nhiệm, vị đại nhân nọ e sợ bị thanh lưu cười chê, ngôn quan buộc tội, cuối cùng độc thân trở lại kinh thành báo cáo công tác, mang đứa nhỏ giao cho quan viên tiếp nhận chức vụ rất có quan hệ tình nghĩa cá nhân, giúp đỡ trông coi. Nay trấn nhỏ đã mất đi tư cách làm đồ sứ cho triều đình một cách khó hiểu, đốc tạo đại nhân phụ trách thay triều đình quản lý ở nơi này, chính mình cũng là Bồ Tát bùn qua sông bản thân khó bảo toàn, nào còn lo lắng con tư sinh đồng nghiệp quan trường, để lại một ít tiền mà cấp tốc chạy về kinh thành đả thông quan hệ. <br><br>Thiếu niên hàng xóm bất tri bất giác đã trở thành thứ bị vứt bỏ, qua ngày thật ra vẫn khá thoải mái, cả ngày dẫn theo nha hoàn bên người, dạo chơi ở trong ngoài trấn nhỏ, quanh năm suốt tháng chơi bời lêu lổng, cũng chưa bao giờ từng vì tóc bạc mà quá sầu. <br><br>Ngõ Nê Bình nhà nhà tường viện đất vàng đều rất thấp, thật ra thiếu niên hàng xóm không cần kiễng gót chân cũng có thể nhìn thấy cảnh tượng sân bên này, nhưng mỗi lần cùng Trần Bình An nói chuyện, cố tình thích ngồi xổm ở đầu tường. <br><br>So sánh với Trần Bình An thô thiển tục khí, thì thiếu niên hàng xóm lịch sự tao nhã hơn rất nhiều, kêu Tống Tập Tân, ngay cả tỳ nữ cùng hắn sống nương tựa lẫn nhau, cũng xưng hô có vẻ nho nhã, Trĩ Khuê. <br><br>Cô gái lúc này đứng ở bên kia tường viện, nàng có một đôi mắt hạnh, rụ rè sợ hãi. <br><br>Bên kia cửa viện, có tiếng nói vang lên, \"Tỳ nữ này của ngươi có bán hay không?\" <br><br>Tống Tập Tân ngẩn người, theo thanh âm quay đầu nhìn lại, là một thiếu niên cẩm y mặt mày mỉm cười, đứng ở ngoài viện, một gương mặt hoàn toàn xa lạ. <br><br>Bên cạnh thiếu niên cẩm y đứng một vị lão giả thân hình cao lớn, khuôn mặt trắng nõn, sắc mặt hòa ái, nhẹ nhàng hí mắt đánh giá thiếu nhiên thiếu nữ trong hai tòa nhà giáp sân. <br><br>Tầm mắt lão giả đảo qua Trần Bình An, cũng không đình trệ, nhưng mà ở trên người Tống Tập Tân cùng tỳ nữ, hơi có dừng lại, ý cười dần dần nồng đậm. <br><br>Tống Tập Tân liếc mắt nói: \"Bán! Sao lại không bán!\" <br><br>Thiếu niên nọ mỉm cười nói: \"Vậy ngươi nói cái giá.\" <br><br>Cô gái trừng lớn đôi mắt, vẻ mặt không thể tưởng tượng, giống một con nai con. <br><br>Tống Tập Tân liếc cái xem thường, vươn một ngón tay, lắc lắc, \"Bạc trắng một vạn lượng!\" <br><br>Thiếu niên cẩm y sắc mặt như thường, gật đầu nói: \"Tốt.\" <br><br>Tống Tập Tân thấy thiếu niên nọ bộ dáng không giống như là nói đùa, vội vàng sửa lời nói: \"Là hoàng kim vạn lượng!\" <br><br>Thiếu niên cẩm y khóe miệng nhếch lên, nói: \"Chọc ngươi thôi.\" <br><br>Tống Tập Tân sắc mặt âm trầm.', 1, '2026-03-11 20:54:46'),
(2, 1, 'Chương 2: Kinh trập(2)', 'Cẩm y thiếu niên không hề để ý tới Tống Tập Tân, chếch đi tầm mắt, nhìn về phía Trần Bình An, \"Hôm nay ít nhiều có ngươi, ta mới có thể mua được cá chép kia, sau khi mua trở về, ta càng xem càng thích, nghĩ nhất định phải giáp mặt với ngươi nói một tiếng cảm ơn, vì thế bảo Ngô gia gia đưa ta suốt đêm tới tìm ngươi.\" <br><br>Hắn đưa ra một cái túi thêu nặng trịch, vứt cho Trần Bình An, khuôn mặt tươi cười sáng lạn nói: \"Đây là tạ ơn, ngươi ta tính là xong.\" <br><br>Trần Bình An vừa muốn nói, thiếu niên cẩm y đã xoay người rời đi. <br><br>Trần Bình An nhíu nhíu chân mày. <br><br>Ban ngày mình trong lúc vô tình nhìn thấy một người trung niên, mang theo lồng cá đi ở trên đường cái, bắt được một con cá chép vàng óng ánh dài chừng bàn tay, nó ở trong lồng trúc nhảy bắn lợi hại, Trần Bình An chỉ liếc mắt một cái, đã cảm thấy thực thích, vì thế mở miệng hỏi, có thể dùng mười văn tiền mua nó hay không, người trung niên vốn chỉ để ăn, mắt thấy có thể có lợi, nên đã lên giá, công phu sư tử ngoạm, tới ba mươi văn tiền mới bằng lòng bán. Trần Bình An trong túi ngượng ngùng nào có nhiều tiền nhàn rỗi như vậy, thật sự luyến tiếc cá chép ánh vàng rực rỡ kia, liền đi theo người trung niên, cố gắng trả giá, muốn mang giá hạ xuống mười lăm văn, cho dù là hai mươi văn cũng được, ngay tại thời điểm người trung niên có dấu hiệu nhả ra, thiếu niên cẩm y cùng lão nhân cao lớn vừa lúc đi ngang qua, bọn họ không nói hai lời, dùng năm mươi văn tiền mua đi cá chép cùng lồng cá, Trần Bình An chỉ có thể trơ mắt nhìn bọn họ nghênh ngang đi, không thể làm gì. <br><br>Gắt gao nhìn thẳng bóng lưng hai người đi càng lúc càng xa, Tống Tập Tân sau khi thu hồi ánh mắt hung tợn, nhảy xuống đầu tường, tựa như nhớ lại cái gì, nói với Trần Bình An: \"Ngươi còn nhớ rõ bốn chân hồi tháng giêng kia không?\" <br><br>Trần Bình An gật gật đầu. <br><br>Sao lại không nhớ rõ, quả thực chính là ký ức hãy còn mới mẻ. <br><br>Dựa theo phong tục truyền thừa mấy trăm năm của trấn nhỏ này, nếu có rắn rết chui vào nhà mình, là dấu hiệu tốt, chủ nhân tuyệt đối không được khu trục đánh giết. Tống Tập Tân ở thời điểm đầu tháng giêng, ngồi ở cửa phơi nắng, sau đó có con thằn lằn nhỏ tục xưng là rắn bốn chân, ở dưới mí mắt hắn chạy vào trong phòng, Tống Tập Tân bắt được liền quẳng ra ngoài viện, không nghĩ tới con thằn lằn kia dù cho rơi tới thất điên bát đảo, lại càng vứt càng dũng cứ đâm đầu chạy vào, làm cho Tống Tập Tân chưa bao giờ tin thuyết quỷ thần tức giận đến nhịn không được, giận dữ mang nó quẳng vào sân nhà Trần Bình An, nào nghĩ đến, Tống Tập Tân ngày hôm sau ngay ở dưới giường mình, thấy được con thằn lằn kia cuộn mình chiếm cứ. <br><br>Tống Tập Tân nhận thấy cô gái kéo kéo tay áo mình. <br><br>Thiếu niên cùng nàng lòng có linh tê, theo bản năng mang lời nói đã đến bên miệng, một lần nữa nuốt về bụng. <br><br>Hắn muốn nói là, con thằn lằn vô cùng xấu kia, gần đây trên trán hở ra, như đỉnh đầu mọc sừng. <br><br>Tống Tập Tân thay đổi một câu khác, \"Ta cùng Trĩ Khuê khả năng tháng sau sẽ rời khỏi nơi này.\" <br><br>Trần Bình An thở dài, \"Đi đường cẩn thận.\" <br><br>Tống Tập Tân nửa thật nửa giả nói: \"Có chút vật ta khẳng định dời không đi, ngươi cũng đừng thừa dịp nhà của ta không có người, liền không kiêng nể mà trộm mất.\" <br><br>Trần Bình An lắc lắc đầu. <br><br>Tống Tập Tân bỗng nhiên cười ha ha, lấy tay chỉ điểm điểm Trần Bình An, cợt nhả nói: \"Nhát như chuột, khó trách hàn môn vô quý tử, đừng nói là đời này nghèo hèn, nói không chừng kiếp sau cũng trốn không thoát.\" <br><br>Trần Bình An im lặng không lên tiếng. <br><br>Đều tự quay về phòng ở, Trần Bình An đóng cửa lại, nằm ở trên tấm ván gỗ cứng rắn, thiếu niên bần hàn nhắm mắt lại, nhỏ giọng lẩm bẩm nói: \"Toái toái bình, tuế tuế an, toái toái bình an, tuế tuế bình an...\" <hr> <br><br>Trời hơi hơi sáng, gà chưa gáy, Trần Bình An đã rời giường, đệm chăn đơn bạc, thật sự lưu không được nhiệt khí, hơn nữa Trần Bình An ở thời điểm làm học đồ, cũng dưỡng thành thói quen ngủ sớm dậy sớm. Trần Bình An mở ra cửa phòng, đi vào tiểu viện bùn đất xốp, sau khi hít sâu một hơi, duỗi cái lưng mỏi, đi ra sân, quay đầu nhìn thấy một bóng người gầy yếu, cong thắt lưng, hai tay mang theo một cái thùng gỗ đựng nước, đang dùng bả vai đẩy ra cửa viện nhà mình, đúng là tỳ nữ Tống Tập Tân, nàng hẳn là mới từ thiết khóa tỉnh bên kia ngõ Hạnh Hoa múc nước trở về. <br><br>Trần Bình An thu hồi tầm mắt, xuyên phố qua ngõ, một đường chạy chậm hướng phía đông trấn nhỏ, ngõ Nê Bình ở phía tây trấn nhỏ, ở phía đông nhất của cửa thành, có người phụ trách thương lữ trấn nhỏ ra vào cùng tuần phòng cấm đêm, bình thường cũng thu, chuyển giao một ít thư nhà từ bên ngoài gởi về, việc Trần Bình An cần làm kế tiếp, chính là mang thư này đưa cho dân chúng trấn nhỏ, trả thù lao là một phong thơ một đồng tiền, cái này là phương pháp kiếm tiền hắn thật vất vả cầu được, Trần Bình An đã cùng bên kia giao hẹn, ở sau 2 tháng 2 Long Sĩ Đầu, sẽ bắt đầu tiếp nhận vụ mua bán này. <br><br>Dùng lời Tống Tập Tân nói chính là trời sinh cùng khổ mệnh, chẳng sợ có phúc khí vào gia môn, Trần Bình An hắn cũng lưu không được. Tống Tập Tân thường xuyên nói một ít lời tối nghĩa khó hiểu, ước chừng là nội dung từ trong sách mang ra, Trần Bình An luôn nghe không hiểu cho lắm, ví dụ như hai ngày trước nhắc tới cái gì se lạnh xuân hàn đông lạnh giết thiếu niên, Trần Bình An là hoàn toàn không rõ ràng, về phần hàng năm sống qua mùa đông, sau khi nhập xuân có đoạn thời gian là càng lạnh hơn, thiếu niên thật ra thiết thân thể hội, Tống Tập Tân nói cái gọi là rét tháng ba, cùng hồi mã thương trên sa trường là lợi hại giống nhau, cho nên rất nhiều người sẽ chết ở quỷ môn quan này. <br><br>Trấn nhỏ không có tường thành vây quanh, dù sao đừng nói giặc cỏ đạo tặc, chính là trộm vặt cũng ít có, cho nên trên danh nghĩa là cửa thành, thật ra chính là một loạt hàng rào cũ ngã trái ngã phải, là nơi qua loa để có cái cho người xe thông qua, cũng tính là thể diện tòa trấn nhỏ này. <br><br>Trần Bình An thời điểm chạy chậm ngang qua ngõ Hạnh Hoa, nhìn thấy không ít phụ nữ trẻ con tụ ở bên thiết tỏa tỉnh, bánh xe giếng nước luôn luôn kẽo kẹt rung động. <br><br>Lại vòng qua một con phố, Trần Bình An chợt nghe thấy cách đó không xa truyền đến một trận tiếng đọc sách quen thuộc, nơi đó có tòa hương thục, là vài nhà giàu trấn nhỏ này kết phường gom tiền mở ra, tiên sinh dạy học là người bên ngoài, Trần Bình An khi nhỏ thường xuyên chạy tới trốn ở ngoài cửa sổ, vụng trộm ngồi, vểnh tai nghe. Vị tiên sinh kia tuy thời điểm dạy học cực kỳ khắc nghiệt, nhưng đối với Trần Bình An đứa nhỏ \"đọc sách chống mù chữ\" này, cũng không nói gì, sau đó Trần Bình An đi một long diêu (lò nung hàng cống phẩm cho vua) ở ngoài trấn nhỏ làm học đồ, không đi đến ngôi trường này nữa. <br><br>Lại đi về phía trước, Trần Bình An đi ngang qua một cái bài phường đá, bởi vì bài phường xây có mười hai cột đá, dân bản xứ thích gọi nó là bài phường con cua, tên chân thật tòa bài phường này, cách nói của Tống Tập Tân cùng Lưu Dương Tiện thực không giống nhanh, Tống Tập Tân thề thốt nói ở trên một quyển sách cũ gọi là Địa phương huyện chí, gọi nơi này là Đại học sĩ phường, là bài phường hoàng đế lão gia ngự ban, để kỷ niệm một vị đại quan văn trì vũ công trên lịch sử.', 2, '2026-03-11 20:56:14'),
(3, 1, 'Chương 3: Mở cửa', 'Còn Lưu Dương Tiện là dân nhà quê như Trần Bình An, thì nói đây là bàng giải phường, chúng ta đã gọi mấy trăm năm, không lý do gọi là cái gì Đại học sĩ phường rắm chó không kêu. Lưu Dương Tiện còn hỏi Tống Tập Tân một vấn đề, \"Đại học sĩ quan mũ đến cùng là lớn bao nhiêu, có phải so với miệng thiết khóa tỉnh còn lớn hơn hay không \", hỏi Tống Tập Tân mặt đỏ lên. <br><br>Lúc này Trần Bình An vòng quanh bài phường mười hai chân một vòng, mỗi một mặt đều có bốn chữ to, tự thể cổ quái, có vẻ không giống nhau, phân biệt là \"Đương nhân bất nhượng\", \"Hi ngôn tự nhiên\", \"Mạc hướng ngoại cầu\" cùng \"Khí trùng đấu ngưu\". Nghe Tống Tập Tân nói, trừ bỏ bốn chữ này, ba tấm biển đá còn lại, đều từng bị vẽ loạn, bóp méo qua. Trần Bình An đối với cái này tỉnh tỉnh mê mê, chưa bao giờ suy nghĩ sâu xa, đương nhiên, cho dù thiếu niên muốn hỏi đến cùng, cũng là phí công, hắn ngay cả Địa phương huyện chí mà Tống Tập Tân thường xuyên nói ở bên miệng, đến cùng là sách gì cũng không biết. <br><br>Qua bài phường không quá xa, rất nhanh nhìn thấy một gốc hòe thụ già cành lá xum xuê, dưới cây, có một thân cây không biết bị ai dời tới đây, sau khi hơi hơi vạt đi, đầu đuôi đều bằng phẳng, được đặt lên hai tảng đá, đoạn đại thụ này liền được xem là một cái ghế dài giản dị. Thời điểm mùa hè hàng năm, dân chúng trấn nhỏ đều thích ở đây tránh nóng, người gia cảnh giàu có, trưởng bối còn có thể từ trong giếng nước kéo lên một rổ dưa và trái cây ướp lạnh, bọn nhỏ ăn uống no đủ, liền lập bang kết phái, ở dưới bóng cây chơi đùa. <br><br>Trần Bình An đã quen lên núi xuống sông, chạy đến phụ cận hàng rào cửa, dừng lại ở dưới cái cửa màu vàng đất đứng cô đơn kia, tim không đập nhanh thở không mạnh. <br><br>Trấn nhỏ người ngoài lui tới không nhiều, theo lý thuyết, hôm nay cây rung ra tiền chỗ này đã ngã, thì càng không có gương mặt nào mới. Thời điểm Diêu lão nhân còn trên đời, từng có lần hô cao, nói cùng Trần Bình An cùng Lưu Tiện Dương các đồ đệ, chúng ta làm là phần làm ăn độc nhất trên đời này, là đồ sứ cho hoàng đế bệ hạ cùng hoàng hậu nương nương ngự dụng, dân chúng khác chẳng sợ có tiền, chẳng sợ làm quan có lớn, dám can đảm động tới, đó đều là muốn bị chém đầu. Diêu lão nhân ngày đó, tinh thần khí hết sức dâng cao. <br><br>Hôm nay Trần Bình An nhìn về phía ngoài hàng rào, lại phát hiện có nhiều người đang chờ cửa thành mở, không dưới bảy tám người, nam nữ già trẻ, đều có. <br><br>Hơn nữa đều là người xa lạ, dân chúng địa phương trấn nhỏ ra ra vào vào, vô luận là đi lò nung làm chút đồ kiếm sống, đều rất ít đi cửa đông, lý do rất đơn giản, cửa đông trấn nhỏ đường kéo dài ra ngoài, không có lò nung cùng ruộng đất nào. <br><br>Lúc này Trần Bình An cùng người bên ngoài này, hai bên cách một đạo hàng rào gỗ, hai bên nhìn nhau. <br><br>Một khắc nọ, thiếu niên mang giầy rơm tự làm, là có chút hâm mộ quần áo thực dầy trên người những người này, khẳng định thực ấm áp, có thể chống lạnh. <br><br>Những người ngoài cửa, rõ ràng phân thành vài nhóm, cũng không phải một đám người, nhưng đều nhìn về phía thiếu niên gầy ốm trong cửa, phần lớn sắc mặt hờ hững, ngẫu nhiên có một hai người, tầm mắt sớm lướt qua bóng dáng thiếu niên, nhìn về phía chỗ xa hơn trong trấn nhỏ. <br><br>Trần Bình An có chút kỳ quái, chẳng lẽ những người này còn không biết triều đình đã phong cấm toàn bộ lò nung? Hay là nói bọn họ vì biết chân tướng, cho nên cảm thấy có cơ hội có thể lợi dụng? <br><br>Có một người trẻ tuổi đầu đội cao quan cổ quái, dáng người thon dài, bên hông mang một khối ngọc bội màu xanh lục, hắn tựa như chờ không kiên nhẫn, một mình đi ra khỏi đám người, muốn đi đẩy ra cửa lớn hàng rào không có khóa, chỉ là ở thời điểm ngón tay hắn muốn chạm vào cửa gỗ, hắn đột nhiên dừng lại, chậm rãi thu hồi tay, hai tay chắm sau lưng, cười tủm tỉm nhìn về phía thiếu niên giầy rơm trong cửa, cũng không nói gì, chỉ cười. <br><br>Trần Bình An dư quang khóe mắt, trong lúc vô tình phát hiện những phía sau người trẻ tuổi, giống như có người thất vọng, có người nghiền ngẫm, có người nhíu mày, có người châm chọc, cảm xúc vi diệu, đều không giống nhau. <br><br>Vào lúc này, một trung niên hán tử tóc lộn xộn đột nhiên mở cửa ra, hùng hùng hổ hổ nói với Trần Bình An: \"Tiểu vương bát đản, có phải trong mắt chỉ có tiền hay không? Sớm như vậy đã gọi hồn đòi mạng, ngươi vội vàng đầu thai đi gặp cha mẹ ma quỷ của ngươi à?!\" <br><br>Trần Bình An liếc mắt xem thường, đối với ngôn ngữ chanh chua này, thiếu niên cũng không để ý, thứ nhất là vẫn sinh hoạt ở vùng quê tổng cộng độc không được mấy quyển sách này, nếu bị người mắng vài câu liền nổi giận, rõ ràng tìm miệng giếng nhảy xuống cho xong, bớt lo bớt việc. Thứ hai trung niên quang côn trông cửa này, thân mình chính là đối tượng thường xuyên bị dân chúng trấn nhỏ giễu cợt trêu ghẹo, nhất là phụ nhân gan lớn mạnh mẽ, đừng nói ngoài miệng mắng hắn, động thủ đánh hắn đều có không ít. Hơn nữa người này còn cực kỳ thích mặc quần yếm trẻ nhỏ mà khoác lác, ví dụ như cái gì lão tử năm đó ở cửa thành, một hồi chém giết, đánh cho năm sáu đại hán răng rơi đầy đất, đầy đất đều là máu, cả con đường rộng hai trượng trước cửa thành, cùng trời mưa đường lầy lội là không mấy khác biệt! <br><br>Tức giận nói với Trần Bình An: \"Chút chuyện cỏn con của ngươi, đợi lát nữa nói sau.\" <br><br>Trấn nhỏ không ai xem người kia là cái gì. <br><br>Nhưng mà người bên ngoài có thể tiến vào trấn nhỏ hay không, nam nhân này lại nắm giữ quyền to sinh sát. <br><br>Hắn vừa đi hướng cửa hàng rào gỗ, vừa đưa tay gãi đ*ng q**n. <br><br>Nam nhân này đưa lưng về phía Trần Bình An, sau khi mở cửa, thường thường cùng người thu một cái túi nhỏ, cho vào tay áo của mình, sau đó nhất nhất cho đi. <br><br>Trần Bình An từ sớm đã nhường ra con đường, tám người đại khái phân ra năm nhóm, đi hướng trấn nhỏ, trừ bỏ người trẻ tuổi đầu đội cao quan, lưng đeo lục bội kia, còn trước sau đi qua đứa nhỏ hai bảy tám tuổi, nam hài mặc một cái áo choàng màu đỏ, nữ hài thì má phấn phúng phính, thật giống như đồ sứ vậy. <br><br>Nam hài so với Trần Bình An còn thấp hơn nửa cái đầu, đứa nhỏ thời điểm đi qua sát bên người hắn, há miệng ra, tuy cũng không có phát ra tiếng gì, nhưng mà có khẩu hình rõ ràng, hẳn là nói hai chữ, tràn ngập khiêu khích. <br><br>Trung niên phụ nhân dắt nam hài, nhẹ nhàng ho khan một cái, đứa nhỏ lúc này mới thoáng thu liễm. <br><br>Tiểu cô nương phía sau phụ nhân nam hài, được một vị lão nhân khôi ngô đầu đầy sương tuyết dắt, nàng quay đầu nói với Trần Bình An một chuỗi dài, không quên chỉ trỏ đối với nam hài cùng lứa tuổi phía trước. <br><br>Trần Bình An căn bản nghe không hiểu cô gái đang nói cái gì, nhưng đoán được, nàng là đang cáo trạng. <br><br>Lão nhân khôi ngô liếc liếc mắt nhìn thiếu niên giầy rơm một cái. <br><br>Chỉ là bị người vô tình nhìn thoáng qua, Trần Bình An thuần túy theo bản năng lui về phía sau một bước. <br><br>Như chuột gặp mèo. <br><br>Sau khi thấy một màn như vậy, tiểu cô nương nguyên bản líu ríu giống như một con se sẻ, nhất thời không có hưng trí châm ngòi thổi gió, quay đầu không hề liếc mắt nhìn Trần Bình An một cái nào nữa, giống như lại liếc mắt nhìn thêm một cái sẽ ô uế mắt của nàng vậy.', 3, '2026-03-11 21:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id_Comment` int(11) NOT NULL,
  `Id_user` int(11) DEFAULT NULL,
  `Id_truyen` int(11) DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `NgayDang` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Id_rating` int(11) NOT NULL,
  `Id_user` int(11) DEFAULT NULL,
  `Id_truyen` int(11) DEFAULT NULL,
  `Diem` int(11) DEFAULT NULL,
  `NgayDanhGia` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `Id_truyen` int(11) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `TacGia` varchar(255) DEFAULT NULL,
  `TheLoai` varchar(255) DEFAULT NULL,
  `TongSoChuong` int(11) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `GioiThieu` text DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `AnhBia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`Id_truyen`, `Ten`, `TacGia`, `TheLoai`, `TongSoChuong`, `TrangThai`, `GioiThieu`, `NgayTao`, `AnhBia`) VALUES
(1, 'Kiếm Lai', 'Phong Hỏa Hí Chư Hầu', 'Huyền Huyễn, Tiên Hiệp, Kiếm Hiệp', NULL, 'Đang ra', 'Thiên địa mênh mông, vạn vật tồn tại. Ta - Trần Bình An - chỉ với một kiếm, phá thành, chắn sông, hái sao, lấp biển, hàng yêu, diệt ma, phong thần, khai thiên, làm nên tất cả! ', '2026-03-11 20:33:07', 'kiemlai.jpg'),
(2, 'Mao Sơn Tróc Quỷ Nhân', 'Thanh Tử', 'Linh Dị, Đô Thị, Huyền Huyễn', 3665, 'Hoàn thành', 'Diệp Thiếu Dương vốn là một Mao Sơn tróc quỷ nhân, dũng cảm tiến vào đô thị, gặp người đấu người, gặp quỷ đấu quỷ, gặp yêu đấu yêu, gặp hồ đấu hồ...<br><br>Tương tây Thi vương, Tà Thần bất tử, điệp tiên hung linh, tứ phương quỷ khấu.<br><br>Nữ minh tinh nuôi tiểu quỷ, công chúa hoàng thất hút máu, nữ giám đốc là hồ yêu,...<br><br>Thi triển Mao Sơn thần thuật, đánh lui tất cả!', '2026-03-11 20:36:58', 'maosontrocquynhan.jpg'),
(3, 'Lạn Kha Kỳ Duyên', 'Chân Phí Sự', 'Tiên Hiệp, Dị Giới, Huyền Huyễn, Cổ Đại', 1070, 'Hoàn thành', 'Lạn Kha ngồi bên ván cờ lá rụng, tại giữa trúc lâm không người đánh cờ.<br>Hưng sở trí Thiên Nguyên một cờ, lại xoay người sông núi thênh thang.<br><br>...<br><br>Thức giấc sau cơn mơ, Kế Duyên trở thành một tên hành khất gần như mù mắt trong một cái miếu sơn thần cũ nát.<br><br>Thực lực không đủ thì dùng miệng lưỡi để kiếm ăn, chân nhân dùng kiếm, lừa đảo dùng mồm, Kế Duyên nhờ vào bản thân kiếm sống tại cái thế giới đáng sợ này.<br><br>...<br><br><b>Du Lạn Kha Sơn</b><br>Giản lai huề trượng thượng toàn ngoan,<br>Tứ nhập vân tiêu nhãn giới khoan.<br>Phong động viễn lâm thu sắt sắt,<br>Giản thông u cốc thuỷ sàn sàn.<br>Bình không tử lạc tiên kì tĩnh,<br>Vật hoán tinh di Phật cốt hàn.<br>Duyệt thế du du kim kỷ hử,<br>Không tồn di tích hậu nhân khan.<br><br><b>Review Truyện:</b><br><br>Tiên hiệp cổ điển rất khó viết. Một bộ tiên hiệp hay là một bộ truyện phải được viết sao cho thật dễ hiểu, thật thú vị, thật tiêu sái cũng như phải có cái hồn của tiên hiệp. Chỉ một điều kiện thôi đã khó, chứ đừng nói phải có đầy đủ các điều kiện trên. Có lẽ vì vậy mà tiên hiệp bắt đầu suy tàn.<br><br>Kể từ sau <a target=\"_blank\" rel=\"nofollow\" href=\"https://truyenfull.vn/hoang-dinh/\">Hoàng Đình</a>, cũng thật lâu rồi mình mới thấy lại một bộ tiên hiệp cổ điển thuần túy như Lạn Kha Kỳ Duyên. Có yếu tố lãng mạn, thoải mái tiêu sái của tiên hiệp cổ điển trường phái phi thăng, chi tiết truyện vừa xuất sắc lại dân dã. Có yếu tố truyền thuyết phàm tục mang lại cảm giác của những câu chuyện thần thoại cổ xưa. Nam chính ở trong trò chơi hồng trần này, tuy rằng pháp lực tu vi không cao, nhưng cách xử sự làm người lại có trước có sau, thần bí khó lường, có ý cảnh, có tâm cảnh, thực sự đã mang lại cảm giác thần bí của tiên nhân. Đoạn mở đầu, khi nam chính nghèo túng cũng sợ chết như người thường, lời ăn tiếng nói cũng hơi tùy tiện. Trong truyện mỗi người đều rất lý tưởng, không dây dưa lợi ích quá nhiều, cũng không có quá nhiều cơ quan tính toán, nhiều khi đọc mà không nhịn được cười.<br><br>Trước mắt thì thấy đây là một thể loại truyền kỳ du ký cổ đại, có giang hồ, có tu sĩ, có tiên thần, có võ lâm cao thủ, có người phàm. Bàn tay vàng rất có ý tứ, tựa như thay đổi vận mệnh nhân vật. Mỗi khi nam chính thúc đẩy vận mệnh một người, hoặc là dạy người hướng thiện, trên ván cờ sẽ ngưng tụ ra một quân cờ mới. Người đọc bị cuốn hút dần bởi những câu chuyện xung quanh Kế Duyên, muốn biết rốt cuộc quân cờ mà nam chính đã gieo sẽ trở thành những gì.', '2026-03-11 20:38:56', 'lankhakyduyen.jpg'),
(4, 'Ta Thân Ái Pháp Y Tiểu Thư', 'Tửu Noãn Xuân Thâm', 'Trinh Thám, Nữ Cường, Bách Hợp', NULL, 'Đang ra', 'Bạn đang đọc truyện<b> Ta Thân Ái Pháp Y Tiểu Thư</b> của tác giả <b>Tửu Noãn Xuân Thâm</b>. Trong \"Nỗi bi thảm của thế giới\", Victor Hugo viết rằng<br><br>\"Nhân tâm, vừa có thể tỏa ra muôn vàn quang minh, đồng thời cũng dựng lên vô tận hắc ám.<br><br>Ánh sáng cùng bóng tối, đan xen nhau, tranh đấu, tàn sát nhau.<br><br>Cũng là nguyên do mà ta lưu luyến nhân gian, đồng thời dâng lên niềm tiếc hận\".<br><br>Hồ ly Pháp y tạc mao miệng phun bom X Cảnh sát nội liễm cấm dục (lúc đầu thôi:)))<br><br>Tra án, đoán tâm, thăm dò.<br><br>\"Ngươi biết nhân sinh khó khăn nhất là gì không?\"<br><br>\"Không phải tương ngộ, là cửu biệt trùng phùng.', '2026-03-11 20:42:14', 'tathanaiphapytieuthu.jpg'),
(5, 'Ván Cờ Ẩn Danh', 'Nguyên Thanh Đại', 'Trinh Thám, Ngôn Tình', 148, 'Hoàn thành', '1. Cô là Chu Uẩn, cũng là Thẩm Uẩn.</p><p dir=\"ltr\" data-rm-block-id=\"block-7\">Năm tám tuổi, vì một tai nạn bất ngờ, nhà họ Chu đã nhận nuôi cô. Người người đều nói cô một bước bước chân vào chốn hào môn, từ nay cuộc đời sang trang, một bước lên mây.</p><p dir=\"ltr\" data-rm-block-id=\"block-8\">Nhưng chẳng ai hay biết, đằng sau sự nhận nuôi ấy là những lời dối trá chất chồng, cho cô một thân phận hiển hách chỉ để tô vẽ thêm cho danh tiếng và sự kính trọng của người đời dành cho nhà họ Chu.</p><p dir=\"ltr\" data-rm-block-id=\"block-9\">Cô từng tưởng rằng, bản thân mình đối với Chu Vực là khác biệt.</p><p dir=\"ltr\" data-rm-block-id=\"block-10\">Anh ta đối xử tốt với cô hơn tất thảy mọi người, tốt đến mức không gì sánh bằng, tốt đến nỗi khiến cô mụ mị đầu óc, nảy sinh thứ tình cảm không nên có với anh ta.</p><p dir=\"ltr\" data-rm-block-id=\"block-11\">Ngay khoảnh khắc cô trao đi chân tình, cô lại nghe thấy anh ta giải thích với người khác, cũng là định vị rõ ràng cho mối quan hệ này:</p><p dir=\"ltr\" data-rm-block-id=\"block-12\">“Đã nhận nuôi thì phải có trách nhiệm, không thể để người đời đàm tiếu được.”</p><p dir=\"ltr\" data-rm-block-id=\"block-13\">Lúc ấy cô mới biết, bên cạnh Chu Vực chưa bao giờ thiếu phụ nữ, chỉ là anh ta quá giỏi ngụy trang mà thôi. Cô dùng cách thức quyết tuyệt nhất để vạch rõ giới hạn, rời khỏi nhà họ Chu.</p><p dir=\"ltr\" data-rm-block-id=\"block-14\">2. Khi tất cả mọi người đều dè bỉu, dùng những lời lẽ châm biếm mỉa mai cô, cô đã gặp được một người có danh tiếng không kém gì mình.</p><p dir=\"ltr\" data-rm-block-id=\"block-15\">Anh là sự tồn tại bí ẩn nhất ở Túc Nguyên, là nhân vật thần bí mà giới truyền thông tranh nhau phỏng vấn nhưng không thể tiếp cận, là Văn tổng của Thịnh Hoằng – người được đồn đại là nửa chính nửa tà, khen chê lẫn lộn.</p><p dir=\"ltr\" data-rm-block-id=\"block-16\">Anh không có tin đồn tình ái, không tham gia bất kỳ tiệc rượu nào, báo chí bên ngoài đưa tin về anh chỉ gói gọn trong thân phận Tổng giám đốc Thịnh Hoằng.</p><p dir=\"ltr\" data-rm-block-id=\"block-17\">Ngày hôm đó, anh đã giúp cô. Sau này cô mới hiểu, đó là sự tiếp cận đã được toan tính từ trước.</p><p dir=\"ltr\" data-rm-block-id=\"block-18\">3. Anh thừa nhận email ẩn danh kia là do anh gửi, dụ cô quay lại Túc Nguyên, mục đích lợi dụng cô quá đỗi rõ ràng.</p><p dir=\"ltr\" data-rm-block-id=\"block-19\">Điều kiện hợp tác anh đưa ra là: Giúp cô thoát khỏi sự kiểm soát của nhà họ Chu, trở lại cuộc sống bình yên, và công bố sự thật ra ánh sáng. Cái giá phải trả là cô phải nghe theo mệnh lệnh của anh như một con rối gỗ.</p><p dir=\"ltr\" data-rm-block-id=\"block-20\">Cô chưa bao giờ là người cam chịu, nhưng lại hiểu đạo lý “hư tình giả ý” để sinh tồn.</p><p dir=\"ltr\" data-rm-block-id=\"block-21\">Anh hiểu cô, cô liền trước mặt anh giả vờ bộc lộ chân tính; Anh tính kế cô, cô liền giả vờ không biết mà ngoan ngoãn chui vào rọ.</p><p dir=\"ltr\" data-rm-block-id=\"block-22\">Đêm đó, người hiếm khi tham dự tiệc tối như anh lại đích thân đến hiện trường. Giữa chốn phồn hoa nâng ly cạn chén, anh kéo cô vào một góc khuất, trầm giọng chất vấn:</p><p dir=\"ltr\" data-rm-block-id=\"block-23\">“Ở trước mặt anh trai em mà vội vã phủ nhận quan hệ như thế, coi tôi là lốp dự phòng sao?”</p><p dir=\"ltr\" data-rm-block-id=\"block-24\">Về sau, ánh mắt anh nhìn cô ngày càng khác lạ. Cô biết, cuộc phản công của con mồi đã chính thức bắt đầu.</p><p dir=\"ltr\" data-rm-block-id=\"block-25\">4. Cô hoàn toàn biến mất, không ai tìm thấy. Nửa năm sau, màn kịch “chết đi sống lại” khiến tất cả mọi người phải trố mắt, bao gồm cả anh.</p><p dir=\"ltr\" data-rm-block-id=\"block-26\">Anh mất đi vẻ bình tĩnh, liệu việc như thần của ngày xưa, đi trong đêm để đến nơi, phong trần mệt mỏi chỉ để tận mắt thấy cô còn sống.</p><p dir=\"ltr\" data-rm-block-id=\"block-27\">Anh nghiêng đầu quan sát kỹ người trong lòng “Nếu tôi đưa ra giá cao để mua chuộc em, em có đồng ý không?”</p><p dir=\"ltr\" data-rm-block-id=\"block-28\">Chu Uẩn rũ mi mắt, nghe lời anh nói thì bật cười từ tận đáy lòng: “Mua chuộc tôi cái gì? Cơ thể hay tình cảm?”</p><p dir=\"ltr\" data-rm-block-id=\"block-29\">Đôi mắt hẹp dài của Văn Chú phủ lên một tầng nghiêm túc sau khi suy tính kỹ càng: “Nếu tôi muốn cả hai thì sao?”</p><p dir=\"ltr\" data-rm-block-id=\"block-30\">“Chỉ để nhìn thấy tôi cúi đầu cầu xin anh? Hay là thỏa mãn dục vọng chinh phục của anh?”</p><p dir=\"ltr\" data-rm-block-id=\"block-31\">“Tôi biết em cố ý dụ tôi đến Vụ Sơn cũng biết em có toan tính riêng của mình, nhưng vậy thì đã sao, em thích chơi tôi sẽ chơi cùng em, nhưng em cũng biết thời gian của người như tôi rất quý giá, thời gian lâu rồi cũng phải thu chút thù lao chứ.”</p><p dir=\"ltr\" data-rm-block-id=\"block-32\"> ***Xin lưu ý</p><ul><li dir=\"ltr\"><p dir=\"ltr\" data-rm-block-id=\"block-33\">Nữ chính thuộc kiểu thông minh (giai đoạn đầu chưa bộc lộ rõ, về sau sẽ cực kỳ bản lĩnh, đại sát tứ phương).</p></li><li dir=\"ltr\"><p dir=\"ltr\" data-rm-block-id=\"block-34\">Nam chính tâm cơ thâm sâu, từng bước toan tính.</p></li><li dir=\"ltr\"><p dir=\"ltr\" data-rm-block-id=\"block-35\">Lợi dụng qua lại, đừng vội đánh giá thiết lập nhân vật chỉ qua một chương truyện (tác giả không chịu trách nhiệm nếu độc giả tự suy diễn quá đà).</p></li><li dir=\"ltr\"><p dir=\"ltr\" data-rm-block-id=\"block-36\">Thương trường quyền mưu / Hướng báo thù / Có tình tiết h.ă.c*k não (nếu đọc lướt hoặc bỏ chương có thể sẽ không hiểu mạch truyện).', '2026-03-11 20:48:52', 'vancoandanh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `Pass_word` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `NgayDangKy` datetime DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `Id_user` int(11) DEFAULT NULL,
  `Id_truyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`Id_chuong`),
  ADD KEY `Id_truyen` (`Id_truyen`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id_Comment`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_truyen` (`Id_truyen`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`Id_rating`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_truyen` (`Id_truyen`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`Id_truyen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_truyen` (`Id_truyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuong`
--
ALTER TABLE `chuong`
  MODIFY `Id_chuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id_Comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `Id_rating` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `Id_truyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `chuong_ibfk_1` FOREIGN KEY (`Id_truyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`Id_truyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`Id_truyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE;

--
-- Constraints for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `yeuthich_ibfk_2` FOREIGN KEY (`Id_truyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
