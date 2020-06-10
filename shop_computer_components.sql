-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 05:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_computer_components`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_status` tinyint(4) NOT NULL DEFAULT 1,
  `a_author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `a_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_name_slug`, `a_description`, `a_content`, `a_status`, `a_author_id`, `a_image`, `a_view`, `created_at`, `updated_at`) VALUES
(2, 'Hướng dẫn cách check bảo hành ổ cứng SSD Samsung chính hãng', 'huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang', 'Samsung là một hãng công nghệ nổi tiếng trên thế giới. Và trong phân khúc SSD thì Samsung chính là biểu tượng của chất lượng cũng như giá thành đắt đỏ. Vì vậy, việc bảo hành cũng như xem thông tin của chiếc ổ cứng này là rất cần thiết. Bài viết nè sẽ hướng dẫn các bạn cách check bảo hành SSD Samsung chính hãng.', '<h3><strong>1. Bước 1 :Truy cập trang web bảo h&agrave;nh của Seagate</strong></h3>\r\n\r\n<p>Bạn truy cập&nbsp;<strong><a href=\"http://support.seagate.com/apps/customer/en-US/warranty_validation.jsp\" target=\"_blank\">Tại đ&acirc;y</a></strong></p>\r\n\r\n<p><img alt=\"Truy cập trang web bảo hành SEAGATE\" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-10.jpg\" title=\"Truy cập trang web bảo hành SEAGATE\" /></p>\r\n\r\n<p><img alt=\"Điền thông tin tại trang web \" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-11.jpg\" title=\"Điền thông tin tại trang web \" /></p>\r\n\r\n<p>( Bạn chỉ cần thực hiện như hướng dẫn ở h&igrave;nh)</p>\r\n\r\n<h3><strong>2. Bước 2: G&otilde; Serial Number v&agrave; số Model để tiến h&agrave;nh check thời hạn bảo h&agrave;nh</strong></h3>\r\n\r\n<p>Sản phẩm lu&ocirc;n ghi r&otilde;&nbsp;<strong>Serial Number</strong>&nbsp;v&agrave; số&nbsp;<strong>Model</strong>&nbsp;ở th&acirc;n n&ecirc;n bạn chỉ việc đọc v&agrave; điền v&agrave;o đ&uacute;ng những &ocirc; y&ecirc;u cầu.</p>\r\n\r\n<p><img alt=\" Ghi rõ Serial Number và số Model\" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-110.jpg\" title=\" Ghi rõ Serial Number và số Model\" /></p>\r\n\r\n<p>Sau khi đ&atilde; điền đầy đủ th&ocirc;ng tin bạn chỉ cần&nbsp;<strong>Submit</strong>&nbsp;l&agrave; trang chủ đ&atilde; cho bạn kết bản t&igrave;nh trạng bảo h&agrave;nh của SSD.</p>\r\n\r\n<h3><strong>3. Bước 3: Đọc kết quả v&agrave; kiểm tra thời hạn bảo h&agrave;nh</strong></h3>\r\n\r\n<p>Sau khi đ&atilde; thực hiện bước thứ 2 th&igrave; bạn chỉ việc đọc kết quả v&agrave; kiểm tra thời gian bảo h&agrave;nh của chiếc SSD của m&igrave;nh. Nếu c&oacute; vấn đề g&igrave; bạn c&oacute; thể đem chiếc SSD đến với c&aacute;c trung t&acirc;m bảo h&agrave;nh Samsung ở Việt Nam.</p>\r\n\r\n<p><img alt=\"Tình trạng bảo hành \" src=\"//cdn.tgdd.vn/hoi-dap/1235620/huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-6.jpg\" title=\"Tình trạng bảo hành \" /></p>\r\n\r\n<h3><strong>4. C&aacute;c trung t&acirc;m bảo h&agrave;nh ổ cứng Samsung</strong></h3>\r\n\r\n<p><strong>1.</strong>&nbsp;<strong>Hồ Ch&iacute; Minh:</strong>&nbsp;Seacare Centre - 028 3914 326731</p>\r\n\r\n<p>Hồ Hảo Hớn, Phường C&ocirc; Giang, Quận 1</p>\r\n\r\n<p>Thứ 2 - 6 từ 8.30AM - 5PM</p>\r\n\r\n<p><strong>2. H&agrave; Nội:</strong>&nbsp;Seacare Centre - 04 3747 6470111</p>\r\n\r\n<p>Nguyễn Ch&iacute; Thanh, Phường L&aacute;ng Hạ, Quận Đống Đa</p>\r\n\r\n<p>Thứ 2 - 6 từ 8.30AM - 5PM</p>\r\n\r\n<p>Hy vọng b&agrave;i viết n&agrave;y bổ &iacute;ch với bạn v&agrave; gi&uacute;p kiểm tra được th&ocirc;ng tin bảo h&agrave;nh chiếc ổ cứng Samsung của m&igrave;nh.</p>', 1, NULL, 'mVc_huong-dan-cach-check-bao-hanh-o-cung-ssd-samsung-chinh-hang-thumb.jpg', 0, '2020-05-03 06:07:39', '2020-05-03 06:07:39'),
(3, 'Cách thêm và cài đặt tiện ích thời tiết trên điện thoại Samsung', 'cach-them-va-cai-dat-tien-ich-thoi-tiet-tren-dien-thoai-samsung', 'Nếu bạn đang sử dụng điện thoại Samsung, chắc hẳn đôi khi bạn cũng sẽ nhận được thông báo về điều kiện thời tiết hiện tại. Nhấn vào đó sẽ vào một ứng dụng thời tiết độc quyền của Samsung nhưng sẽ không thể tìm kiếm được nó đó trong kho ứng dụng. Bài viết này sẽ giúp bạn tạo phím tắt ứng dụng thời tiết một cách đơn giản nhất!', '<h3><strong>1. Th&ecirc;m tiện &iacute;ch thời tiết v&agrave;o m&agrave;n h&igrave;nh chủ</strong></h3>\r\n\r\n<p>Ch&uacute;ng ta sẽ c&oacute; hai c&aacute;ch để th&ecirc;m tiện &iacute;ch v&agrave;o m&agrave;n h&igrave;nh chủ.</p>\r\n\r\n<h4><strong>C&aacute;ch 1:&nbsp;</strong>V&agrave;o phần c&agrave;i đặt của m&aacute;y</h4>\r\n\r\n<p>- Bước 1:<strong>&nbsp;Vuốt cạnh m&agrave;n h&igrave;nh ph&iacute;a tr&ecirc;n xuống</strong>&nbsp;=&gt; nhấn v&agrave;o biểu tượng h&igrave;nh&nbsp;<strong>b&aacute;nh răng</strong>&nbsp;(phần c&agrave;i đặt) =&gt; ch&uacute;ng ta t&igrave;m đến phần&nbsp;<strong>ứng dụng</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>​​</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Bước 2: V&agrave;o phần&nbsp;<strong>t&igrave;m kiếm</strong>&nbsp;của phần&nbsp;<strong>ứng dụng&nbsp;</strong>để t&igrave;m<strong>&nbsp;ứng dụng thời tiết&nbsp;</strong>=&gt; nhấn v&agrave;o biểu tượng&nbsp;<strong>răng cưa</strong>&nbsp;(phần c&agrave;i đặt của ứng dụng thời tiết) =&gt; t&igrave;m đến phần&nbsp;<strong>th&ecirc;m biểu tượng Thời tiết</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Bước 3: Nhấn v&agrave;o c&aacute;i n&uacute;t cạnh phần&nbsp;<strong>th&ecirc;m biểu tượng thời tiết&nbsp;</strong>cho n&oacute; chuyển sang&nbsp;<strong>m&agrave;u xanh&nbsp;</strong>như h&igrave;nh minh họa dưới đ&acirc;y =&gt; v&agrave; thế l&agrave; ứng dụng&nbsp;<strong>thời tiết</strong>&nbsp;đ&atilde; xuất hiện trong kho ứng dụng</p>\r\n\r\n<p><img alt=\"Bước 3\" src=\"//cdn.tgdd.vn/hoi-dap/1251271/cach-them-va-cai-dat-tien-ich-thoi-tiet-tren-dien-thoai-3.jpg\" title=\"Bước 3\" /></p>\r\n\r\n<h4><strong>C&aacute;ch 2:&nbsp;</strong>Nhấn giữ m&agrave;n h&igrave;nh ch&iacute;nh</h4>\r\n\r\n<p>Bước 1:&nbsp;<strong>Nhấn giữ m&agrave;n h&igrave;nh ch&iacute;nh</strong>&nbsp;để được giao diện như h&igrave;nh minh họa v&agrave; nhấn v&ocirc; phần&nbsp;<strong>Widget</strong>&nbsp;=&gt; vuốt từ cạnh phải qua để kiếm phần&nbsp;<strong>Thời tiết&nbsp;</strong>=&gt; nhấn v&agrave;o&nbsp;<strong>widget Thời tiết</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bước 2: giao diện&nbsp;<strong>widget thời tiết&nbsp;</strong>hiện ra =&gt;&nbsp;<strong>chạm v&agrave; giữ&nbsp;</strong>một widget bất k&igrave; m&agrave; bạn muốn =&gt;&nbsp;<strong>k&eacute;o v&agrave; thả</strong>&nbsp;widget ra m&agrave;n h&igrave;nh ch&iacute;nh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Ứng dụng sẽ tự động chọn vị tr&iacute; hiện tại của bạn nếu bạn bật vị tr&iacute;, để ứng dụng sẽ tự cập nhật th&ocirc;ng tin thời tiết nơi bạn đang ở hiện tại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>2. C&agrave;i đặt tiện &iacute;ch thời tiết</strong></h3>\r\n\r\n<p>-&nbsp;<strong>Đơn vị:</strong>&nbsp;Bạn c&oacute; thể chọn đơn vị nhiệt độ m&agrave; bạn muốn hiển thị (độ C hoặc độ F).</p>\r\n\r\n<p>-&nbsp;<strong>Sử dụng vị tr&iacute; hiện tại:</strong>&nbsp;Nếu bật n&oacute; l&ecirc;n sẽ gi&uacute;p nh&agrave; cung cấp dịch vụ dự b&aacute;o thời tiết đưa đến cho bạn th&ocirc;ng tin thời tiết của vị tr&iacute; hiện tại (việc n&agrave;y đ&ograve;i hỏi phải bật vị tr&iacute; m&aacute;y).</p>\r\n\r\n<p>-&nbsp;<strong>Tự động l&agrave;m mới</strong>: C&oacute; nhiều t&ugrave;y chọn mốc thời gian để m&aacute;y cập nhật th&ocirc;ng tin mới nhất (việc n&agrave;y đ&ograve;i hỏi kết nối mạng).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-<strong>&nbsp;L&agrave;m mới khi mở ứng dụng:</strong>&nbsp;Bật phần n&agrave;y l&ecirc;n sẽ gi&uacute;p m&aacute;y tự cập nhật th&ocirc;ng tin thời tiết mới nhất khi ứng dụng đang mở.</p>\r\n\r\n<p>-&nbsp;<strong>Th&ocirc;ng b&aacute;o:</strong>&nbsp;B&aacute;n sẽ nhận những th&ocirc;ng tin thay đổi thời tiết tr&ecirc;n th&ocirc;ng b&aacute;o của điện thoại.</p>\r\n\r\n<p>-&nbsp;<strong>Th&ocirc;ng tin thời tiết:&nbsp;</strong>Th&ocirc;ng tin về ứng dụng thời tiết (phi&ecirc;n bản mới nhất được cập nhật của ứng dụng).</p>\r\n\r\n<h3><strong>3. Một số lưu &yacute; khi sử dụng tiện &iacute;ch thời tiết</strong></h3>\r\n\r\n<p>- Phải c&oacute; mạng mới cập nhật thời tiết dc, v&iacute; dụ bạn c&agrave;i l&agrave;m mới sau 1h m&agrave; l&uacute;c đ&oacute; bạn ko mở mạng th&igrave; sẽ ko update dc th&ocirc;ng tin mới</p>\r\n\r\n<p>- Thời tiết chỉ mang t&iacute;nh tham khảo</p>\r\n\r\n<p>- Nếu m&aacute;y hiển thị sai vị tr&iacute; của bạn, h&atilde;y bật GPS l&agrave; load lại app thời tiết hoặc c&agrave;i đặt lại th&agrave;nh phố, khu vực trong app thời tiết (Use current location - ON)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC\" width=\"1\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mong l&agrave; những th&ocirc;ng tin n&agrave;y đ&atilde; gi&uacute;p bạn l&agrave;m được những thứ m&igrave;nh muốn!</p>', 1, NULL, '46Q_cach-them-va-cai-dat-tien-ich-thoi-tiet-tren-dien-thoai-3.jpg', 0, '2020-05-03 06:33:20', '2020-05-03 06:33:20'),
(4, 'Top 5 ứng dụng hẹn hò giúp bạn thoát ế dễ dàng nhất!', 'top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat', 'Trong thời đại công nghệ hiện nay, những ứng dụng hẹn hò đang ngày càng phổ biến trên điện thoại và laptop. Bài viết dưới đây sẽ giới thiệu cho bạn top 5 phần mềm hẹn hò qua mạng giúp bạn thoát ế và tìm kiếm được người yêu phù hợp với mình.', '<h3><strong>1. TInder - Ứng dụng hẹn h&ograve; phổ biến nhất tr&ecirc;n to&agrave;n thế giới</strong></h3>\r\n\r\n<p><strong><img alt=\"Tinder\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat.jpg\" title=\"Tinder\" /></strong></p>\r\n\r\n<p><a href=\"http://tinder.com/\" target=\"_blank\"><strong>Tinder</strong></a>&nbsp;l&agrave; ứng dụng hẹn h&ograve; hiện đang c&oacute; số lượng người d&ugrave;ng lớn nhất tr&ecirc;n to&agrave;n thế giới. Chỉ v&agrave;i thao t&aacute;c dễ đ&agrave;ng bạn đ&atilde; c&oacute; thể đăng k&yacute; th&ocirc;ng tin để sử dụng ứng dụng n&agrave;y.</p>\r\n\r\n<p><img alt=\"Giao diện tinder\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-2.jpg\" title=\"Giao diện tinder\" /></p>\r\n\r\n<p><strong>Giao diện</strong>&nbsp;của ứng dụng n&agrave;y<strong>&nbsp;th&acirc;n thiện v&agrave; dễ sử dụng</strong>. Người d&ugrave;ng chỉ cần vuốt th&iacute;ch hoặc kh&ocirc;ng th&iacute;ch dựa tr&ecirc;n h&igrave;nh ảnh, tiểu sử v&agrave; những sở th&iacute;ch của người kh&aacute;c. Nếu hai bạn ph&ugrave; hợp với nhau, hai bạn c&oacute; thể bắt đầu trao đổi bằng tin nhắn.</p>\r\n\r\n<h3><strong>2. Ứng dụng hẹn h&ograve; của Facebook - Facebook Dating</strong></h3>\r\n\r\n<p>​<img alt=\"Facebook Dating\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-4.jpg\" title=\"Facebook Dating\" /></p>\r\n\r\n<p><a href=\"http://www.facebook.com/dating\" target=\"_blank\"><strong>Facebook Dating</strong></a>&nbsp;l&agrave; một c&ocirc;ng cụ được Facebook cho ra mắt v&agrave;o th&aacute;ng 5 năm 2019 v&agrave; nhận được sự đ&oacute;n nhận t&iacute;ch cực từ người d&ugrave;ng. Đ&acirc;y l&agrave; một c&ocirc;ng cụ v&ocirc; c&ugrave;ng hữu &iacute;ch v&agrave; được t&iacute;ch hợp trong mạng x&atilde; hội của&nbsp;<strong><a href=\"http://www.facebook.com/\" target=\"_blank\">Facebook</a></strong>. T&iacute;nh năng nay dựa tr&ecirc;n những sở th&iacute;ch, hoạt động, nh&oacute;m v&agrave; sự kiện để đưa ra những gợi &yacute; c&oacute; thể ph&ugrave; hợp với bạn.</p>\r\n\r\n<p><img alt=\"Secret Crush\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-5.jpg\" title=\"Secret Crush\" /></p>\r\n\r\n<p><strong>Secret Crush</strong>&nbsp;cũng l&agrave; một t&iacute;nh năng kh&aacute; hay của Facebook Dating. Bạn sẽ th&ecirc;m những người bạn quan t&acirc; nhất v&agrave;o danh s&aacute;ch n&agrave;y. Nếu &quot;Crush&quot; cũng th&ecirc;m bạn v&agrave;o danh s&aacute;ch th&igrave; hai người sẽ nhận được th&ocirc;ng b&aacute;o v&agrave; v&agrave;o ph&ograve;ng chat ri&ecirc;ng tư với nhau. Tuy vậy t&iacute;nh năng n&agrave;y vẫn c&ograve;n hạn chế đ&oacute; l&agrave; chỉ &aacute;p dụng được với những người trong danh s&aacute;ch bạn b&egrave; v&agrave; c&oacute; sử dụng&nbsp;<strong>Facebook Dating</strong>.</p>\r\n\r\n<h3><strong>3. Ymeetme - Ứng dụng hẹn h&ograve; d&agrave;nh ri&ecirc;ng cho người Việt</strong></h3>\r\n\r\n<p><strong>​<img alt=\"YmeetMe\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-6.jpg\" title=\"YmeetMe\" /></strong></p>\r\n\r\n<p><a href=\"http://m.ymeet.me/\" target=\"_blank\"><strong>Ymeetme</strong></a>&nbsp;l&agrave; ứng dụng hẹn h&ograve; được thiết kế d&agrave;nh ri&ecirc;ng cho người Việt. Ứng dụng sẽ ph&acirc;n t&iacute;ch hồ sơ, hoạt động của c&aacute;c th&agrave;nh vi&ecirc;n từ đ&oacute; đề xuất những ứng vi&ecirc;n tiềm năng ph&ugrave; hợp với nhu cầu của người d&ugrave;ng..&nbsp;<strong>Ymeetme</strong>&nbsp;đ&atilde; chứng tỏ m&igrave;nh dẫn đầu trong c&aacute;c ứng dụng hẹn h&ograve; trực tuyến, tạo ra một m&ocirc;i trường hẹn h&ograve; nghi&ecirc;m t&uacute;c cho người d&ugrave;ng.</p>\r\n\r\n<h3><strong>4. Grindr &ndash; Ứng dụng hẹn h&ograve; cho LGBT</strong></h3>\r\n\r\n<p><strong><img alt=\"Grindr\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-7.jpg\" title=\"Grindr\" />​</strong></p>\r\n\r\n<p><strong><a href=\"http://www.grindr.com/\" target=\"_blank\">Grindr</a></strong>&nbsp;l&agrave; ứng dụng kh&ocirc;ng xa lạ với&nbsp;<a href=\"http://en.wikipedia.org/wiki/LGBT\" target=\"_blank\"><strong>LGBT</strong></a>. Kể từ khi ra mắt,&nbsp;<strong>Grindr</strong>&nbsp;thu h&uacute;t nhiều sự ch&uacute; &yacute; của người d&ugrave;ng v&agrave; số lượng th&agrave;nh vi&ecirc;n của ứng dụng n&agrave;y l&ecirc;n tới hơn 6 triệu th&agrave;nh vi&ecirc;n. Hiện nay cộng đồng&nbsp;<strong>LGBT</strong>&nbsp;vẫn bị sự kỳ thị ở nhiều khu vực tr&ecirc;n thế giới ch&iacute;nh v&igrave; vậy sự ra mắt của ứng dụng n&agrave;y gi&uacute;p cho cộng đồng&nbsp;<strong>LGBT</strong>&nbsp;c&oacute; thể dễ d&agrave;ng t&igrave;m kiếm đối tượng ph&ugrave; hợp hơn m&agrave; kh&ocirc;ng nhận sự k&igrave; thi hay ph&acirc;n biệt đối xử của những người kh&aacute;c.</p>\r\n\r\n<h3><strong>5. Jack&rsquo;d &ndash; Ứng dụng hẹn h&ograve; cho người đồng t&iacute;nh v&agrave; lưỡng t&iacute;nh</strong></h3>\r\n\r\n<p><img alt=\"Jack\'D\" src=\"//cdn.tgdd.vn/hoi-dap/1237761/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-8.jpg\" title=\"Jack\'D\" /></p>\r\n\r\n<p><a href=\"http://www.jackd.com/\" target=\"_blank\"><strong>Jack&rsquo;d</strong></a>&nbsp;l&agrave; nơi quy tụ của hơn 5 triệu th&agrave;nh vi&ecirc;n tr&ecirc;n to&agrave;n thế giới v&agrave; l&agrave; một trong 4 ứng dụng hẹn h&ograve; tốt nhất d&agrave;nh cho cộng đồng&nbsp;<strong>LGBT</strong>. Người d&ugrave;ng khi tham gia ứng dụng n&agrave;y sẽ biết được ai vừa đọc qua hồ sơ của m&igrave;nh để từ đ&oacute; chủ động li&ecirc;n lạc nếu c&oacute; cảm t&igrave;nh.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; top&nbsp;<strong><a href=\"http://www.thegioididong.com/hoi-dap/top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat-1237761\" target=\"_blank\">5 ứng dụng gi&uacute;p bạn &#39;tho&aacute;t ế&#39;</a></strong>. Hy vọng b&agrave;i viết sẽ mang lại th&ocirc;ng tin hữu &iacute;ch cho bạn.</p>', 1, NULL, '5Wl_top-5-ung-dung-hen-ho-giup-ban-thoat-e-de-dang-nhat.jpg', 0, '2020-05-03 06:34:52', '2020-05-03 06:34:52'),
(5, 'Cách bật tính năng giữ chờ cuộc gọi trên Samsung Galaxy J7 Prime', 'cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-galaxy-j7-prime', 'Trong khi bạn đang nói chuyện điện thoại với một người, nhưng lại có một người khác gọi đến bạn, bạn sẽ không thể biết được nếu không bật tính năng chờ cuộc gọi. Vậy thì bài viết này mình sẽ hướng dẫn bạn cách bật tính năng giữ chờ cuộc gọi trên Samsung Galaxy J7 Prime nhé!', '<h3><strong>1. Lợi &iacute;ch của việc bật t&iacute;nh năng giữ chờ cuộc gọi tr&ecirc;n điện thoại</strong></h3>\r\n\r\n<p>- Để bạn kh&ocirc;ng phải bỏ lỡ cuộc gọi đến.</p>\r\n\r\n<h3><strong>2. Hướng dẫn c&aacute;ch bật t&iacute;nh năng giữ chờ cuộc gọi tr&ecirc;n Samsung Galaxy</strong><strong>&nbsp;J7 Prime</strong></h3>\r\n\r\n<p><strong>Hướng dẫn nhanh:&nbsp;</strong>Điện thoại &gt; Biểu tượng 3 chấm &gt; C&agrave;i đặt &gt; Nhiều c&agrave;i đặt hơn &gt; Bật Chờ cuộc gọi.</p>\r\n\r\n<h4><strong>- Bước 1: Chọn Điện thoại</strong></h4>\r\n\r\n<p>Đầu ti&ecirc;n tại m&agrave;n h&igrave;nh ch&iacute;nh bạn chọn&nbsp;<strong>Điện thoại.</strong></p>\r\n\r\n<p><img alt=\"Chọn Điện thoại\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-01.jpg\" title=\"Chọn Điện thoại\" /></p>\r\n\r\n<h4><strong>- Bước 2: Chọn biểu tượng 3 chấm</strong></h4>\r\n\r\n<p>Tiếp theo bạn chọn<strong>&nbsp;biểu tượng 3 chấm</strong>&nbsp;ở g&oacute;c tr&ecirc;n b&ecirc;n phải.</p>\r\n\r\n<p><img alt=\"Chọn biểu tượng 3 chấm\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-02.jpg\" title=\"Chọn biểu tượng 3 chấm\" /></p>\r\n\r\n<h4><strong>- Bước 3: Chọn C&agrave;i đặt</strong></h4>\r\n\r\n<p>L&uacute;c n&agrave;y bạn chọn v&agrave;o mục&nbsp;<strong>C&agrave;i đặt</strong>&nbsp;như h&igrave;nh b&ecirc;n dưới để tiếp tục.</p>\r\n\r\n<p><img alt=\"Chọn Cài đặt\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-03.jpg\" title=\"Chọn Cài đặt\" /></p>\r\n\r\n<h4><strong>- Bước 4: Chọn Nhiều c&agrave;i đặt hơn</strong></h4>\r\n\r\n<p>Sau đ&oacute; bạn k&eacute;o xuống v&agrave; chọn&nbsp;<strong>Nhiều hơn c&agrave;i đặt.</strong></p>\r\n\r\n<p><img alt=\"Chọn Nhiều cài đặt hơn\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-04.jpg\" title=\"Chọn Nhiều cài đặt hơn\" /></p>\r\n\r\n<h4><strong>- Bước 5: Bật Chờ cuộc gọi</strong></h4>\r\n\r\n<p>Cuối c&ugrave;ng bạn bật&nbsp;<strong>Chờ cuộc gọi&nbsp;</strong>l&ecirc;n.</p>\r\n\r\n<p><img alt=\"Bật Chờ cuộc gọi\" src=\"//cdn.tgdd.vn/hoi-dap/905094/cach-bat-tinh-nang-giu-cho-cuoc-goi-tren-samsung-j-05.jpg\" title=\"Bật Chờ cuộc gọi\" />​</p>\r\n\r\n<p>Như vậy với v&agrave;i thao t&aacute;c đơn giản bạn c&oacute; thể sử dụng t&iacute;nh năng giữ chờ cuộc gọi tr&ecirc;n Samsung Galaxy​ J7 Prime rồi. Hy vọng b&agrave;i viết n&agrave;y sẽ gi&uacute;p &iacute;ch cho bạn.</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng.</p>', 1, NULL, 'Nei_galaxy-note-10-plus_800x450.jpg', 0, '2020-05-03 06:35:46', '2020-05-03 06:35:46'),
(6, 'Công nghệ JTech Inverter trên máy lạnh SHARP là gì? Có lợi ích gì?12', 'cong-nghe-jtech-inverter-tren-may-lanh-sharp-la-gi-co-loi-ich-gi12', 'Sharp là thương hiệu nổi tiếng, các sản phảm máy lạnh của Sharp được đánh giá cao về chất lượng tích hợp với những công nghệ thông minh. Đặc biệt, công nghệ J-Tech đem lại cho người dùng những trãi nghiệm hữu ích. Hãy cùng theo dõi bài viết để tìm hiểu rõ hơn về công nghệ J-Tech nhé.', '<h3><strong>1. C&ocirc;ng nghệ J-Tech Inverter tr&ecirc;n m&aacute;y lạnh Sharp</strong></h3>\r\n\r\n<h4><strong>- C&ocirc;ng nghệ J-Tech l&agrave; g&igrave;?</strong></h4>\r\n\r\n<p>C&ocirc;ng nghệ J-Tech l&agrave; c&ocirc;ng nghệ được t&iacute;ch hợp tr&ecirc;n những d&ograve;ng m&aacute;y lạnh của Sharp, gi&uacute;p&nbsp;<strong>tự động điều chỉnh nhiệt độ&nbsp;</strong>ph&ograve;ng ph&ugrave; hợp,<strong>&nbsp;tiết kiệm điện năng tối đa</strong>.</p>\r\n\r\n<p><img alt=\"Công nghệ J-Tech là gì?\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-1.jpg\" title=\"Công nghệ J-Tech là gì?\" /></p>\r\n\r\n<p><em>C&ocirc;ng nghệ J-Tech - tự động điều chỉnh nhiệt độ ph&ugrave; hợp, tiết kiệm điển tối đa</em></p>\r\n\r\n<h4><strong>- Cơ chế hoạt động</strong></h4>\r\n\r\n<p>Kh&ocirc;ng giống như những d&ograve;ng m&aacute;y lạnh th&ocirc;ng thường để điều chỉnh nhiệt độ m&aacute;y sẽ chuyển chế độ bật, tắt. C&ocirc;ng nghệ J-Tech gi&uacute;p m&aacute;y lạnh c&oacute; thể&nbsp;<strong>tự động điều chỉnh nhiệt độ</strong>&nbsp;<strong>ph&ograve;ng bằng c&aacute;ch chuyển bộ phận n&eacute;n giữa chế độ hoạt động cao v&agrave; thấp nhờ v&agrave;o mạch điện đổi chiều.</strong></p>\r\n\r\n<p>Việc&nbsp;<strong>hạn chế được hoạt động bật/tắt</strong>&nbsp;gi&uacute;p m&aacute;y lạnh<strong>&nbsp;tiết kiệm điện năng&nbsp;</strong>vượt trội hơn.</p>\r\n\r\n<p><img alt=\"Cơ chế hoạt động\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-02.jpg\" title=\"Cơ chế hoạt động\" /></p>\r\n\r\n<p><em>Tự điều chỉnh nhiệt độ nhờ mạch điện đổi chiều</em></p>\r\n\r\n<h3><strong>2. C&aacute;c lợi &iacute;ch m&agrave; c&ocirc;ng nghện J-Tech mang lại</strong></h3>\r\n\r\n<h4><strong>- Tiết kiệm điện năng</strong></h4>\r\n\r\n<p><strong>C&ocirc;ng nghệ J-Tech Inverter t&iacute;ch hợp với chế độ Eco</strong>&nbsp;th&ocirc;ng minh gi&uacute;p m&aacute;y&nbsp;<strong>vận h&agrave;nh &ecirc;m, tiết kiệm điện năng ti&ecirc;u thụ đến tận 60%</strong>&nbsp;so với m&aacute;y lạnh th&ocirc;ng thường.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; ti&ecirc;u ch&iacute; được nhiều người ti&ecirc;u d&ugrave;ng đ&aacute;nh gi&aacute; cao, bạn sẽ kh&ocirc;ng phải lo về chi ph&iacute; chi trả điện h&agrave;ng th&aacute;ng khi sử dụng m&aacute;y lạnh.</p>\r\n\r\n<p><img alt=\"Tiết kiệm điện năng\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-03.jpg\" title=\"Tiết kiệm điện năng\" /></p>\r\n\r\n<p><em>C&ocirc;ng nghệ J-Tech Inverter + Chế độ Eco gi&uacute;p tiết kiệm điện năng tới 60%</em></p>\r\n\r\n<h4><strong>- L&agrave;m lạnh cực mạnh</strong></h4>\r\n\r\n<p>Ngo&agrave;i ra, c&ocirc;ng nghệ J-Tech inverter gi&uacute;p thiết bị c&oacute; thể<strong>&nbsp;thay đổi c&ocirc;ng suất l&agrave;m lạnh với 15 cấp độ&nbsp;</strong>kh&aacute;c nhau trong khi những d&ograve;ng c&ocirc;ng nghệ inverter th&ocirc;ng thường chỉ c&oacute; 7 cấp độ.</p>\r\n\r\n<p><img alt=\"Làm lạnh cực mạnh\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-4.jpg\" title=\"Làm lạnh cực mạnh\" /></p>\r\n\r\n<p><em>Chế độ l&agrave;m lạnh với c&ocirc;ng suất 15 cấp độ kh&aacute;c nhau</em></p>\r\n\r\n<h4><strong>- Tiện nghi, thoải m&aacute;i</strong></h4>\r\n\r\n<p>Những d&ograve;ng m&aacute;y lạnh Sharp t&iacute;ch hợp c&ocirc;ng nghệ -Tech Inverter đem lại cho bạn sự tiện nghi v&agrave; thoải m&aacute;i khi c&oacute; thể sử dụng nhiều chế độ kh&aacute;c nhau t&ugrave;y theo nhu cầu sử dụng.</p>\r\n\r\n<p><strong>Chế độ Comfort</strong>&nbsp;gi&uacute;p m&aacute;y lạnh sẽ&nbsp;<strong>hoạt động ở c&ocirc;ng suất tối đa&nbsp;</strong>gi&uacute;p căn ph&ograve;ng được&nbsp;<strong>l&agrave;m lạnh nhanh ch&oacute;ng v&agrave; duy tr&igrave; nhiệt độ ở mức ổn định</strong>. Từ đ&oacute; c&oacute; thể l&agrave;m&nbsp;<strong>giảm thất tho&aacute;t nhiệt độ 20% v&agrave; giảm thời gian bật/tắt 30%</strong>&nbsp;so với những d&ograve;ng m&aacute;y lạnh th&ocirc;ng thường.</p>\r\n\r\n<p><img alt=\"duy trì nhiệt độ ổn định\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-05.jpg\" title=\"duy trì nhiệt độ ổn định\" /></p>\r\n\r\n<p><em>Giảm thất tho&aacute;t nhiệt 20%, giảm 30% thời gian bật/tắt</em></p>\r\n\r\n<p><strong>Chế độ Best Sleep:</strong>&nbsp;gi&uacute;p<strong>&nbsp;tự điều chỉnh nhiệt độ ph&ograve;ng khi bạn ngủ&nbsp;</strong>một c&aacute;ch ph&ugrave; hợp, gi&uacute;p bạn ngủ ngon v&agrave; s&acirc;u hơn trong một kh&ocirc;ng kh&iacute; dịu m&aacute;t.</p>\r\n\r\n<p><strong>Chế độ Baby Mode</strong>&nbsp;gi&uacute;p<strong>&nbsp;điều chỉnh luồng gi&oacute; kh&ocirc;ng thổi trực tiếp v&agrave;o em b&eacute;, nhiệt độ ph&ugrave; hợp với cơ thể của b&eacute;</strong>. Gi&uacute;p b&eacute; ngủ ngon, cảm gi&aacute;c dễ chịu v&agrave; m&aacute;t mẻ.</p>\r\n\r\n<p><img alt=\"Nhiều chế độ tùy chọn\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-7.jpg\" title=\"Nhiều chế độ tùy chọn\" /></p>\r\n\r\n<p><em>Chế độ Baby Mode gi&uacute;p điều chỉnh nhiệt độ ph&ugrave; hợp cho cơ thể b&eacute;</em></p>\r\n\r\n<h4><strong>- Vận h&agrave;nh bền bỉ</strong></h4>\r\n\r\n<p>M&aacute;y lạnh J-Tech Inverter vận h&agrave;nh trong&nbsp;<strong>dải điện &aacute;p rộng từ 130V đến 264V</strong>,<strong>&nbsp;</strong>đem đến cho bạn&nbsp;<strong>độ an to&agrave;n cao</strong>, kh&ocirc;ng phải lo lắng về việc<strong>&nbsp;tăng giảm điện &aacute;p đột ngột</strong>. Nhờ vậy&nbsp;<strong>m&aacute;y vận h&agrave;nh &ecirc;m v&agrave; bền bỉ, duy tr&igrave; tuổi thọ cao.</strong></p>\r\n\r\n<p><strong>Chế độ vận h&agrave;nh &ecirc;m &aacute;i:</strong>&nbsp;<strong>Độ ồn chỉ 21 dB</strong>, người d&ugrave;ng sẽ kh&ocirc;ng kh&oacute; chịu bởi tiếng ồn của động cơ khi vận h&agrave;nh so với những d&ograve;ng m&aacute;y lạnh th&ocirc;ng thường kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Vận hành bền bỉ\" src=\"//cdn.tgdd.vn/hoi-dap/1252372/cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-8.jpg\" title=\"Vận hành bền bỉ\" /></p>\r\n\r\n<p><em>Vận h&agrave;nh &ecirc;m, bền bỉ, tuổi thọ m&aacute;y cao</em></p>\r\n\r\n<p>Sau b&agrave;i viết n&agrave;y, bạn c&oacute; thể hiểu hơn về C&ocirc;ng nghệ J-Tech Inverter tr&ecirc;n m&aacute;y lạnh SHARP va những lợi &iacute;ch m&agrave; J-Tech đem lại. Hẹn gặp bạn ở những b&agrave;i viết sau.</p>', 1, NULL, 'QvD_cong-nghe-j-tech-inverter-tren-may-lanh-sharp-la-gi-co-loi-1.jpg', 0, '2020-05-03 06:37:29', '2020-05-12 07:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `at_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `at_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `at_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `at_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `at_name`, `at_name_slug`, `at_type`, `at_value`, `created_at`, `updated_at`) VALUES
(6, 'Dung lượng ổ cứng(ROM)', 'dung-luong-o-cungrom', 'select', '128Gb;512Gb;1Tb;2Tb', '2020-03-25 07:48:22', '2020-03-28 06:31:28'),
(7, 'Nhà sản xuất', 'nha-san-xuat', 'text', NULL, '2020-03-25 07:48:35', '2020-03-25 07:48:35'),
(8, 'GPU', 'gpu', 'text', NULL, '2020-03-25 07:50:18', '2020-03-25 07:50:18'),
(9, 'Bộ nhớ(RAM)', 'bo-nhoram', 'select', '512Mb;1Gb;2Gb;4Gb;8Gb', '2020-03-25 07:51:12', '2020-03-25 09:28:58'),
(10, 'Kích thước', 'kich-thuoc', 'text', NULL, '2020-03-25 09:32:10', '2020-03-25 09:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `atv_attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `atv_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `atv_attribute_id`, `atv_value`, `created_at`, `updated_at`) VALUES
(36, 6, '128Gb', '2020-03-31 01:51:08', '2020-03-31 01:51:08'),
(37, 7, 'abc123', '2020-03-31 01:51:08', '2020-03-31 01:51:08'),
(38, 7, 'co j dau', '2020-03-31 01:51:41', '2020-03-31 01:51:41'),
(39, 6, '512Gb', '2020-03-31 18:44:39', '2020-03-31 18:44:39'),
(40, 7, '512Gb', '2020-03-31 18:44:39', '2020-03-31 18:44:39'),
(41, 6, '1Tb', '2020-03-31 19:17:36', '2020-03-31 19:17:36'),
(42, 7, '1Tb nè', '2020-03-31 19:17:36', '2020-03-31 19:17:36'),
(43, 6, '2Tb', '2020-03-31 19:19:40', '2020-03-31 19:19:40'),
(44, 7, '1Tb nè 123', '2020-03-31 19:23:17', '2020-03-31 19:23:17'),
(45, 10, '123', '2020-03-31 20:08:25', '2020-03-31 20:08:25'),
(46, 7, 'ấdaa', '2020-04-01 19:58:50', '2020-04-01 19:58:50'),
(47, 7, 'aaaa', '2020-04-03 19:21:07', '2020-04-03 19:21:07'),
(48, 8, '123', '2020-04-03 19:21:26', '2020-04-03 19:21:26'),
(49, 9, '512Mb', '2020-04-03 19:21:26', '2020-04-03 19:21:26'),
(50, 7, '123', '2020-04-06 07:22:56', '2020-04-06 07:22:56'),
(51, 10, 'k biet', '2020-04-29 07:20:53', '2020-04-29 07:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_name_slug`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Card', 'card', 1, '2020-03-23 10:05:48', '2020-03-25 09:28:46'),
(2, 'Ổ Cứng', 'o-cung', 1, '2020-03-23 10:15:11', '2020-03-23 10:15:11'),
(3, 'Màn hình', 'man-hinh', 1, '2020-03-23 10:16:23', '2020-03-23 10:16:23'),
(11, 'Có gì đâu', 'co-gi-dau', 1, '2020-03-25 09:21:53', '2020-03-25 09:21:53'),
(12, 'Test1', 'test1', 1, '2020-04-05 07:28:03', '2020-04-05 07:28:03'),
(13, 'Test2', 'test2', 1, '2020-04-05 07:28:10', '2020-04-05 07:28:10'),
(20, '12312321', '12312321', 1, '2020-05-11 20:32:29', '2020-05-11 20:32:29'),
(22, 'tesss111', 'tesss111', 1, '2020-05-11 21:04:22', '2020-05-11 21:04:22'),
(23, 'tes1235454', 'tes1235454', 1, '2020-05-27 06:54:40', '2020-05-27 06:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `category_attribute`
--

CREATE TABLE `category_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_a_category_id` int(10) UNSIGNED DEFAULT NULL,
  `c_a_attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_attribute`
--

INSERT INTO `category_attribute` (`id`, `c_a_category_id`, `c_a_attribute_id`, `created_at`, `updated_at`) VALUES
(4, 3, 7, '2020-03-25 09:28:05', '2020-03-25 09:28:05'),
(33, 11, 6, '2020-03-28 09:06:46', '2020-03-28 09:06:46'),
(34, 11, 10, '2020-03-28 09:06:46', '2020-03-28 09:06:46'),
(35, 2, 6, '2020-03-31 20:12:22', '2020-03-31 20:12:22'),
(36, 2, 7, '2020-03-31 20:12:22', '2020-03-31 20:12:22'),
(37, 2, 8, '2020-03-31 20:12:22', '2020-03-31 20:12:22'),
(38, 2, 9, '2020-03-31 20:12:22', '2020-03-31 20:12:22'),
(39, 22, NULL, '2020-05-11 21:04:22', '2020-05-11 21:04:22'),
(40, 23, 7, '2020-05-27 06:54:40', '2020-05-27 06:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_product`
--

CREATE TABLE `favorite_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `fp_product_id` int(10) UNSIGNED DEFAULT NULL,
  `fp_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorite_product`
--

INSERT INTO `favorite_product` (`id`, `fp_product_id`, `fp_user_id`, `created_at`, `updated_at`) VALUES
(22, 10, 1, '2020-05-11 06:44:27', '2020-05-11 06:44:27'),
(24, 1, 1, '2020-05-11 06:55:44', '2020-05-11 06:55:44'),
(25, 2, 1, '2020-05-11 07:07:15', '2020-05-11 07:07:15'),
(26, 10, 5, '2020-05-23 08:07:58', '2020-05-23 08:07:58'),
(27, 8, 5, '2020-05-23 08:10:20', '2020-05-23 08:10:20'),
(28, 4, 5, '2020-05-23 08:10:24', '2020-05-23 08:10:24'),
(29, 14, 1, '2020-05-27 06:48:50', '2020-05-27 06:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_23_163504_create_categories_table', 1),
(5, '2020_03_24_152140_create_attributes_table', 2),
(7, '2020_03_25_145934_create_category_attribute_table', 3),
(8, '2020_03_26_150518_create_products_table', 4),
(9, '2020_03_27_162530_create_attribute_value', 5),
(10, '2020_03_29_161236_create_product_attribute_table', 6),
(12, '2020_04_02_130001_create_articles_table', 7),
(13, '2020_04_09_143103_create_transactions_table', 8),
(14, '2020_04_09_143511_create_orders_table', 9),
(15, '2020_04_23_141548_create_ratings_table', 10),
(16, '2020_04_26_140729_create_favorite_product', 11),
(17, '2020_05_04_132355_alter_column_table_user', 12),
(18, '2020_05_23_140221_create_nofitication_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `nofitication`
--

CREATE TABLE `nofitication` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nof_sender` bigint(20) UNSIGNED DEFAULT NULL,
  `nof_receiver` bigint(20) UNSIGNED DEFAULT NULL,
  `nof_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nofitication`
--

INSERT INTO `nofitication` (`id`, `nof_sender`, `nof_receiver`, `nof_content`, `created_at`, `updated_at`) VALUES
(5, 1, 5, 'Giao dịch mã số 22 với nội dung \"\" đã bị hủy ! Có thể do thiếu số lượng sản phẩm bạn yêu cầu, liên hệ lại chủ cửa hàng để biết thêm chi tiết !!!', '2020-05-23 08:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(10) UNSIGNED DEFAULT NULL,
  `or_product_id` int(10) UNSIGNED DEFAULT NULL,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` bigint(20) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(3, NULL, 13, 1, 10000, 12, '2020-04-10 07:39:43', '2020-04-10 07:39:43'),
(4, 3, 5, 1, 11, 1, '2020-04-14 07:23:23', '2020-04-14 07:23:23'),
(5, 3, 10, 1, 123, 11, '2020-04-14 07:23:23', '2020-04-14 07:23:23'),
(6, 3, 13, 1, 10000, 12, '2020-04-14 07:23:23', '2020-04-14 07:23:23'),
(7, 4, 11, 1, 1, 1, '2020-04-15 06:02:29', '2020-04-15 06:02:29'),
(8, 5, 2, 1, 1, 1, '2020-04-16 01:22:24', '2020-04-16 01:22:24'),
(9, 5, 13, 1, 10000, 12, '2020-04-16 01:22:24', '2020-04-16 01:22:24'),
(10, 5, 9, 4, 123, 11, '2020-04-16 01:22:24', '2020-04-16 01:22:24'),
(11, 6, 14, 5, 1000000000000, 0, '2020-05-06 06:46:26', '2020-05-06 06:46:26'),
(12, NULL, 13, 1, 10000, 12, '2020-05-11 07:22:05', '2020-05-11 07:22:05'),
(13, NULL, 1, 6, 123, 10, '2020-05-11 07:22:05', '2020-05-11 07:22:05'),
(14, NULL, 2, 1, 1, 1, '2020-05-11 07:22:05', '2020-05-11 07:22:05'),
(15, NULL, 13, 1, 10000, 12, '2020-05-11 07:22:18', '2020-05-11 07:22:18'),
(16, NULL, 10, 1, 123, 11, '2020-05-11 07:23:39', '2020-05-11 07:23:39'),
(17, NULL, 13, 1, 10000, 12, '2020-05-11 07:47:48', '2020-05-11 07:47:48'),
(18, NULL, 10, 1, 123, 11, '2020-05-12 09:00:14', '2020-05-12 09:00:14'),
(19, 12, 13, 1, 10000, 12, '2020-05-14 08:08:30', '2020-05-14 08:08:30'),
(22, NULL, 8, 1, 123, 1, '2020-05-21 07:35:19', '2020-05-21 07:35:19'),
(30, 21, 12, 1, 1, 1, '2020-05-23 08:05:28', '2020-05-23 08:05:28'),
(32, 23, 14, 2, 1000000000000, 0, '2020-05-27 06:50:51', '2020-05-27 06:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(10) UNSIGNED DEFAULT NULL,
  `pro_price` bigint(20) NOT NULL DEFAULT 0,
  `pro_author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pro_sale` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `pro_status` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_pay` int(11) NOT NULL DEFAULT 0,
  `pro_number` int(11) NOT NULL DEFAULT 0,
  `pro_number_of_reviewers` int(11) NOT NULL DEFAULT 0,
  `pro_total_star` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_name_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_status`, `pro_hot`, `pro_description`, `pro_content`, `pro_image`, `pro_pay`, `pro_number`, `pro_number_of_reviewers`, `pro_total_star`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd', 11, 123, NULL, 10, 1, 0, 'aa', 'aaaa', NULL, 0, 23, 1, 5, '2020-03-26 09:51:50', '2020-05-11 06:50:28'),
(2, 'GVN Titan M', 'gvn-titan-m', 1, 1, NULL, 1, 1, 1, 'aaa', 'aaa', NULL, 1, 0, 2, 8, '2020-03-29 09:24:29', '2020-05-11 08:06:48'),
(4, 'abc', 'abc', 2, 123, NULL, 12, 1, 1, 'abc', 'abc', NULL, 0, 12, 0, 0, '2020-03-31 01:51:08', '2020-03-31 01:51:08'),
(5, 'lan 2', 'lan-2', 2, 11, NULL, 1, 1, 0, '123', '123', 'Scp_31_Jane87d04d3acfe73b320b993e533ddcca8.png', 1, 111, 0, 0, '2020-03-31 01:51:41', '2020-04-15 06:14:15'),
(8, 'asdád', 'asdad', 3, 123, NULL, 1, 1, 1, 'ádasd', 'ádsad', 'GLj_20_Feb6c276b519b276580003a6fc452bb219c.jpg', 1, 0, 0, 0, '2020-04-01 19:56:29', '2020-05-21 07:41:48'),
(9, 'GVN Titan Mâ', 'gvn-titan-ma', 3, 123, NULL, 11, 1, 0, 'áaaa', 'aaaaa', 'qAm_20_Feb6c276b519b276580003a6fc452bb219c.jpg', 4, 119, 0, 0, '2020-04-01 19:58:50', '2020-05-23 07:40:47'),
(10, 'abvc', 'abvc', 3, 123, NULL, 11, 1, 1, '123', '123', 'wZf_ban-phim-chuyen-van-phong-logitech-k120-2_01eb4c93f70d4e9181cf140cebcea8a3.webp', 1, 11, 0, 0, '2020-04-03 19:21:07', '2020-04-15 06:14:15'),
(11, 'asd', 'asd', 3, 1, NULL, 1, 1, 0, '12312', '123123', 'gCL_250_47015_asus_gaming_g531gd_1.png', 1, 0, 0, 0, '2020-04-06 07:22:56', '2020-04-15 06:20:25'),
(12, '121', '121', 3, 1, NULL, 1, 1, 0, '123', '111', 'Rpi_aminlogin.jpg', 0, 0, 1, 5, '2020-04-06 07:23:19', '2020-05-23 08:06:10'),
(13, 'Thử 1', 'thu-1', 3, 10000, NULL, 12, 1, 1, 'Thử 1', 'aaaa', 'YJE_a702_800x450.jpg', 4, 0, 2, 9, '2020-04-06 19:29:34', '2020-05-14 08:08:44'),
(14, 'Gia cao', 'gia-cao', 3, 1000000000000, NULL, 0, 1, 0, 'gia sp nay cao lam', 'gia sp nay cao lam', 'MHp_ios-13-1.jpg', 7, 3, 1, 5, '2020-04-16 06:11:41', '2020-05-27 06:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `pa_product_id` int(10) UNSIGNED DEFAULT NULL,
  `pa_attribute_value_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `pa_product_id`, `pa_attribute_value_id`, `created_at`, `updated_at`) VALUES
(1, 4, 36, '2020-03-31 01:51:08', '2020-03-31 01:51:08'),
(2, 4, 37, '2020-03-31 01:51:08', '2020-03-31 01:51:08'),
(33, 9, 46, '2020-04-01 19:58:50', '2020-04-01 19:58:50'),
(34, 8, 38, '2020-04-02 06:51:37', '2020-04-02 06:51:37'),
(35, 10, 47, '2020-04-03 19:21:07', '2020-04-03 19:21:07'),
(36, 5, 41, '2020-04-03 19:21:26', '2020-04-03 19:21:26'),
(37, 5, 38, '2020-04-03 19:21:26', '2020-04-03 19:21:26'),
(38, 5, 48, '2020-04-03 19:21:26', '2020-04-03 19:21:26'),
(39, 5, 49, '2020-04-03 19:21:26', '2020-04-03 19:21:26'),
(40, 11, 50, '2020-04-06 07:22:56', '2020-04-06 07:22:56'),
(41, 12, 50, '2020-04-06 07:23:19', '2020-04-06 07:23:19'),
(44, 14, 50, '2020-04-16 06:15:14', '2020-04-16 06:15:14'),
(45, 1, 36, '2020-04-29 07:20:53', '2020-04-29 07:20:53'),
(46, 1, 51, '2020-04-29 07:20:53', '2020-04-29 07:20:53'),
(48, 13, 50, '2020-05-14 08:07:31', '2020-05-14 08:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ra_product_id` int(10) UNSIGNED DEFAULT NULL,
  `ra_number` tinyint(4) NOT NULL DEFAULT 0,
  `ra_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `ra_product_id`, `ra_number`, `ra_content`, `ra_user_id`, `created_at`, `updated_at`) VALUES
(4, 2, 5, 'Cũng được đấy', 1, '2020-04-23 07:47:53', '2020-04-23 07:47:53'),
(5, 2, 3, 'dk k', 1, '2020-04-25 06:49:32', '2020-04-25 06:49:32'),
(7, 12, 5, 'cũng được', 1, '2020-05-01 07:15:24', '2020-05-01 07:15:24'),
(8, 1, 5, 'được', 1, '2020-05-11 06:50:28', '2020-05-11 06:50:28'),
(9, 13, 5, 'Sản phẩm này được', 1, '2020-05-11 07:00:07', '2020-05-11 07:00:07'),
(10, 13, 4, 'Cũng được !!', 1, '2020-05-11 07:00:55', '2020-05-11 07:00:55'),
(12, 14, 5, 'aa', 1, '2020-05-27 06:49:06', '2020-05-27 06:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tr_total` bigint(20) NOT NULL DEFAULT 0,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(3, 1, 8920, '3 sản phẩm', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '0942674663', 2, '2020-04-14 07:23:23', '2020-05-05 06:14:15'),
(4, 1, 1, 'Thử', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '0942674663', 2, '2020-04-15 06:02:29', '2020-04-15 06:20:25'),
(5, 1, 9239, '1231', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '123', 2, '2020-04-16 01:22:24', '2020-05-11 08:06:48'),
(6, 4, 5000000000000, 'xả tiền', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '0942674663', 2, '2020-05-06 06:46:26', '2020-05-06 06:47:56'),
(12, 1, 8800, '21321321', '123123', '213213', 2, '2020-05-14 08:08:30', '2020-05-14 08:08:44'),
(21, 5, 1, '123123123', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '123213', 1, '2020-05-23 08:05:28', '2020-05-23 08:06:10'),
(23, 1, 2000000000000, 'aaaaaa', 'Thôn Vân Động Nam, Xã Vũ Lạc, Thành phố Thái Bình, Tỉnh Thái Bình', '0942674663', 2, '2020-05-27 06:50:51', '2020-05-27 06:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `avatar`, `role`, `code`, `time_code`) VALUES
(1, 'Lê Tiến Trung', 'trungle87864@gmail.com', NULL, '$2y$10$0sAw01X1fGJ1DQsL662aReYdabvH9aXbBrBAwtc1DBzfmeyb5u9Bi', NULL, '2020-04-07 06:41:31', '2020-04-07 06:41:31', NULL, NULL, 1, NULL, NULL),
(4, 'Nguyễn Văn Trọng', 'nguyentrong@gmail.com', NULL, '$2y$10$BehcLJNv5OPL7z6IUwm9o.c9kmDpTVCA1UIn0NGqC5FLKMF8jPX8C', NULL, '2020-05-04 07:40:42', '2020-05-12 08:55:01', '0913752662', NULL, 1, NULL, NULL),
(5, 'Thử thôi mà', 'thuthoima@gmail.com', NULL, '$2y$10$tnQx40.xunIfnCRLGL.xl.cpiqiujiZPmud5jLBObMk2AbQqVPhvu', NULL, '2020-05-23 08:04:27', '2020-05-23 08:04:27', NULL, NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_author_id_foreign` (`a_author_id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_at_name_unique` (`at_name`);

--
-- Indexes for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_value_atv_attribute_id_foreign` (`atv_attribute_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`);

--
-- Indexes for table `category_attribute`
--
ALTER TABLE `category_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_attribute_c_a_category_id_foreign` (`c_a_category_id`),
  ADD KEY `category_attribute_c_a_attribute_id_foreign` (`c_a_attribute_id`);

--
-- Indexes for table `favorite_product`
--
ALTER TABLE `favorite_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_product_fp_product_id_foreign` (`fp_product_id`),
  ADD KEY `favorite_product_fp_user_id_foreign` (`fp_user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nofitication`
--
ALTER TABLE `nofitication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nofitication_nof_sender_foreign` (`nof_sender`),
  ADD KEY `nofitication_nof_receiver_foreign` (`nof_receiver`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_foreign` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_foreign` (`or_product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_category_id_foreign` (`pro_category_id`),
  ADD KEY `products_pro_author_id_foreign` (`pro_author_id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attribute_pa_product_id_foreign` (`pa_product_id`),
  ADD KEY `product_attribute_pa_attribute_value_id_foreign` (`pa_attribute_value_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_product_id_foreign` (`ra_product_id`),
  ADD KEY `ratings_ra_user_id_foreign` (`ra_user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_foreign` (`tr_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category_attribute`
--
ALTER TABLE `category_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `favorite_product`
--
ALTER TABLE `favorite_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nofitication`
--
ALTER TABLE `nofitication`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_a_author_id_foreign` FOREIGN KEY (`a_author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD CONSTRAINT `attribute_value_atv_attribute_id_foreign` FOREIGN KEY (`atv_attribute_id`) REFERENCES `attributes` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `category_attribute`
--
ALTER TABLE `category_attribute`
  ADD CONSTRAINT `category_attribute_c_a_attribute_id_foreign` FOREIGN KEY (`c_a_attribute_id`) REFERENCES `attributes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `category_attribute_c_a_category_id_foreign` FOREIGN KEY (`c_a_category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `favorite_product`
--
ALTER TABLE `favorite_product`
  ADD CONSTRAINT `favorite_product_fp_product_id_foreign` FOREIGN KEY (`fp_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `favorite_product_fp_user_id_foreign` FOREIGN KEY (`fp_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `nofitication`
--
ALTER TABLE `nofitication`
  ADD CONSTRAINT `nofitication_nof_receiver_foreign` FOREIGN KEY (`nof_receiver`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `nofitication_nof_sender_foreign` FOREIGN KEY (`nof_sender`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_or_product_id_foreign` FOREIGN KEY (`or_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_or_transaction_id_foreign` FOREIGN KEY (`or_transaction_id`) REFERENCES `transactions` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_pro_author_id_foreign` FOREIGN KEY (`pro_author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_pro_category_id_foreign` FOREIGN KEY (`pro_category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `product_attribute_pa_attribute_value_id_foreign` FOREIGN KEY (`pa_attribute_value_id`) REFERENCES `attribute_value` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_attribute_pa_product_id_foreign` FOREIGN KEY (`pa_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ra_product_id_foreign` FOREIGN KEY (`ra_product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `ratings_ra_user_id_foreign` FOREIGN KEY (`ra_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_tr_user_id_foreign` FOREIGN KEY (`tr_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
