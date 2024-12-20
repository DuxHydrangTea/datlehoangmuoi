-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.36 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table onghoangmuoi.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.abouts: ~2 rows (approximately)
INSERT INTO `abouts` (`id`, `subject`, `body`, `created_at`, `updated_at`) VALUES
	(1, 'dddd', '<p><strong>Website Đặt Lễ Ánh Hồng</strong> ra đời nhằm hỗ trợ quý khách trong việc đặt lễ và sắp xếp các nghi thức cúng bái tại Đền Ông Hoàng Mười, Nghệ An. Chúng tôi cung cấp dịch vụ đặt lễ trọn gói, phục vụ tận tâm, giúp quý khách dễ dàng chuẩn bị các nghi thức và dâng lễ mà không lo lắng về bất kỳ chi tiết nào.</p><h4><strong>Các Loại Lễ Dâng Tại Đền</strong></h4><ol><li><strong>Lễ dâng Ông Hoàng Mười</strong></li><li><strong>Lễ Mã Tam Tứ Phủ</strong></li><li><strong>Lễ Mã Hầu Đồng</strong>: gồm các nghi lễ đặc biệt như mở phủ, trả mã tứ phủ, mở cung tài lộc, khai đầu xe, cầu duyên, cầu danh, cầu tự.</li></ol><h4><strong>Dịch Vụ Tại Đền và Tại Gia</strong></h4><p><strong>Tại Đền Ông Hoàng Mười</strong>:</p><ul><li>Cung cấp các khóa lễ truyền thống tại đền, bao gồm dâng lễ mặn với xôi gà đã được chuẩn bị sẵn.</li><li>Có đội ngũ hướng dẫn chi tiết, đảm bảo quá trình lễ bái diễn ra thuận lợi và đúng nghi thức.</li></ul><p><strong>Tại Gia</strong>:</p><ul><li>Cung cấp dịch vụ cúng lễ tại nhà, giúp quý khách có thể thực hiện các nghi thức lễ bái ngay tại gia đình.</li></ul><h4><strong>Dịch Vụ Phục Vụ Tận Tâm</strong></h4><ul><li><strong>Hỗ trợ 24/24</strong>: Luôn có nhân viên trực để hỗ trợ quý khách bất kỳ thời điểm nào.</li><li><strong>Hướng dẫn quy trình lễ bái</strong>: Đội ngũ nhân viên am hiểu nghi thức sẽ hướng dẫn chi tiết từng bước để quý khách an tâm thực hiện lễ dâng.</li><li><strong>Bưng lễ, hạ lễ, hóa mã</strong>: Đảm bảo thực hiện nghi thức đầy đủ và trang nghiêm.</li><li><strong>Xe điện phục vụ vận chuyển</strong>: Dịch vụ xe điện đưa đón lễ và khách đến đền nhanh chóng, thuận tiện.</li></ul><p>Với dịch vụ chu đáo và sự chuyên nghiệp, Ánh Hồng mong muốn mang đến cho quý khách trải nghiệm trọn vẹn và trang nghiêm khi dâng lễ tại Đền Ông Hoàng Mười. Hãy ghé thăm website của chúng tôi để đặt lễ và nhận hỗ trợ chi tiết!</p>', '2024-11-04 08:58:50', '2024-11-04 08:58:50'),
	(2, 'Giới thiệu Website Đặt Lễ Ánh Hồng tại Đền Ông Hoàng Mười - Nghệ An', '<p><strong>Website Đặt Lễ Ánh Hồng</strong> ra đời nhằm hỗ trợ quý khách trong việc đặt lễ và sắp xếp các nghi thức cúng bái tại Đền Ông Hoàng Mười, Nghệ An. Chúng tôi cung cấp dịch vụ đặt lễ trọn gói, phục vụ tận tâm, giúp quý khách dễ dàng chuẩn bị các nghi thức và dâng lễ mà không lo lắng về bất kỳ chi tiết nào.</p><h4><strong>Các Loại Lễ Dâng Tại Đền</strong></h4><ol><li><strong>Lễ dâng Ông Hoàng Mười</strong></li><li><strong>Lễ Mã Tam Tứ Phủ</strong></li><li><strong>Lễ Mã Hầu Đồng</strong>: gồm các nghi lễ đặc biệt như mở phủ, trả mã tứ phủ, mở cung tài lộc, khai đầu xe, cầu duyên, cầu danh, cầu tự.</li></ol><h4><strong>Dịch Vụ Tại Đền và Tại Gia</strong></h4><p><strong>Tại Đền Ông Hoàng Mười</strong>:</p><ul><li>Cung cấp các khóa lễ truyền thống tại đền, bao gồm dâng lễ mặn với xôi gà đã được chuẩn bị sẵn.</li><li>Có đội ngũ hướng dẫn chi tiết, đảm bảo quá trình lễ bái diễn ra thuận lợi và đúng nghi thức.</li></ul><p><strong>Tại Gia</strong>:</p><ul><li>Cung cấp dịch vụ cúng lễ tại nhà, giúp quý khách có thể thực hiện các nghi thức lễ bái ngay tại gia đình.</li></ul><h4><strong>Dịch Vụ Phục Vụ Tận Tâm</strong></h4><ul><li><strong>Hỗ trợ 24/24</strong>: Luôn có nhân viên trực để hỗ trợ quý khách bất kỳ thời điểm nào.</li><li><strong>Hướng dẫn quy trình lễ bái</strong>: Đội ngũ nhân viên am hiểu nghi thức sẽ hướng dẫn chi tiết từng bước để quý khách an tâm thực hiện lễ dâng.</li><li><strong>Bưng lễ, hạ lễ, hóa mã</strong>: Đảm bảo thực hiện nghi thức đầy đủ và trang nghiêm.</li><li><strong>Xe điện phục vụ vận chuyển</strong>: Dịch vụ xe điện đưa đón lễ và khách đến đền nhanh chóng, thuận tiện.</li></ul><p>Với dịch vụ chu đáo và sự chuyên nghiệp, Ánh Hồng mong muốn mang đến cho quý khách trải nghiệm trọn vẹn và trang nghiêm khi dâng lễ tại Đền Ông Hoàng Mười. Hãy ghé thăm website của chúng tôi để đặt lễ và nhận hỗ trợ chi tiết!</p>', '2024-11-04 09:04:12', '2024-11-04 09:04:12');

-- Dumping structure for table onghoangmuoi.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No information',
  `parent_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` enum('show','hidden') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.categories: ~3 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `parent_id`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Sự tích', 'su-tich', 'Sự tích sự tích', 0, '', '', '', 'show', '2024-11-04 07:11:35', '2024-11-04 07:11:35'),
	(2, 'Cúng Lễ', 'cung-le', 'Cúng lễ', 0, '', '', '', 'show', '2024-11-04 07:58:47', '2024-11-04 07:58:47'),
	(3, 'Cúng chay', 'cung-chay', 'cúng chay 1', 2, '', '', '', 'show', '2024-11-06 01:12:58', '2024-11-06 02:53:37');

-- Dumping structure for table onghoangmuoi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table onghoangmuoi.forms
CREATE TABLE IF NOT EXISTS `forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agree` tinyint DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.forms: ~5 rows (approximately)
INSERT INTO `forms` (`id`, `fullname`, `email`, `phone`, `description`, `read_at`, `created_at`, `updated_at`, `agree`, `message`) VALUES
	(1, 'Nguyễn Ngọc Dũng', 'ngoc.dung.304.1975@gmail.com', '0368225831', NULL, NULL, '2024-11-04 09:27:28', '2024-11-05 02:40:03', 1, 'Tôi và anh Hoài Linh lúc đó chưa có quan hệ gì thân thiết, còn chưa biết nhau nhiều. Tôi lúc đó cũng chưa là gì cả, chỉ là một diễn viên bình thường còn anh Hoài Linh đã là nghệ sĩ nổi tiếng. Tôi không hiểu sao anh Hoài Linh phải làm vậy với tôi, phải nhiệt tình đến thế.'),
	(2, 'Nguyễn Ngọc Dũng', 'ngoc.dung.304.1975@gmail.com', '0368225831', NULL, '2024-11-05 12:56:46', '2024-11-04 09:28:59', '2024-11-05 12:56:46', 1, 'Tôi và anh Hoài Linh lúc đó chưa có quan hệ gì thân thiết, còn chưa biết nhau nhiều. Tôi lúc đó cũng chưa là gì cả, chỉ là một diễn viên bình thường còn anh Hoài Linh đã là nghệ sĩ nổi tiếng. Tôi không hiểu sao anh Hoài Linh phải làm vậy với tôi, phải nhiệt tình đến thế.'),
	(3, 'Nguyễn Ngọc Dũng', 'ngoc.dung.304.1975@gmail.com', '0368225831', NULL, NULL, '2024-11-04 09:29:47', '2024-11-05 02:37:35', 0, 'Tôi và anh Hoài Linh lúc đó chưa có quan hệ gì thân thiết, còn chưa biết nhau nhiều. Tôi lúc đó cũng chưa là gì cả, chỉ là một diễn viên bình thường còn anh Hoài Linh đã là nghệ sĩ nổi tiếng. Tôi không hiểu sao anh Hoài Linh phải làm vậy với tôi, phải nhiệt tình đến thế.'),
	(4, 'Nguyễn Ngọc Dũng', 'fakernguyen5831@gmail.com', '0368225831', NULL, '2024-11-05 03:41:20', '2024-11-05 01:53:13', '2024-11-05 03:41:20', 1, 'Tôi và anh Hoài Linh lúc đó chưa có quan hệ gì thân thiết, còn chưa biết nhau nhiều. Tôi lúc đó cũng chưa là gì cả, chỉ là một diễn viên bình thường còn anh Hoài Linh đã là nghệ sĩ nổi tiếng. Tôi không hiểu sao anh Hoài Linh phải làm vậy với tôi, phải nhiệt tình đến thế.'),
	(5, 'Nguyễn Ngọc Dũng', 'ngoc.dung.304.1975@gmail.com', '0368225831', NULL, NULL, '2024-11-05 01:53:44', '2024-11-05 01:53:44', 1, 'Tôi và anh Hoài Linh lúc đó chưa có quan hệ gì thân thiết, còn chưa biết nhau nhiều. Tôi lúc đó cũng chưa là gì cả, chỉ là một diễn viên bình thường còn anh Hoài Linh đã là nghệ sĩ nổi tiếng. Tôi không hiểu sao anh Hoài Linh phải làm vậy với tôi, phải nhiệt tình đến thế.');

-- Dumping structure for table onghoangmuoi.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.images: ~0 rows (approximately)

-- Dumping structure for table onghoangmuoi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(18, '2019_08_19_000000_create_failed_jobs_table', 1),
	(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(20, '2024_11_01_080559_create_categories_table', 1),
	(21, '2024_11_01_080560_create_posts_table', 1),
	(22, '2024_11_02_005929_create_images_table', 1),
	(23, '2024_11_04_154235_create_abouts_table', 2),
	(24, '2024_11_04_161746_create_forms_table', 3);

-- Dumping structure for table onghoangmuoi.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table onghoangmuoi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table onghoangmuoi.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expert` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('public','private','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint unsigned DEFAULT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_outstanding` tinyint(1) NOT NULL DEFAULT '0',
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `views` int DEFAULT '0',
  `comment_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.posts: ~2 rows (approximately)
INSERT INTO `posts` (`id`, `title`, `slug`, `expert`, `seo_title`, `thumbnail`, `content`, `status`, `user_id`, `category_id`, `is_hot`, `is_new`, `is_outstanding`, `tags`, `meta_description`, `meta_keywords`, `views`, `comment_enabled`, `created_at`, `updated_at`) VALUES
	(2, 'Tại sao có 2 đền Ông Hoàng Mười? Cách phân biệt 2 ngôi đền', 'tai-sao-co-2-den-ong-hoang-muoi-cach-phan-biet-2-ngoi-den-LTKhZ', 'Đền Ông Hoàng Mười là địa điểm du lịch tâm linh nổi tiếng của dải đất miền Trung. Sự cổ kính, linh thiêng của ngôi đền chính là điểm hút du khách thập phương đến tham quan, hành lễ, dâng hương và thành tâm cầu nguyện. Tuy nhiên, điều khiến nhiều người băn khoăn là tại Nghệ An và Hà Tĩnh đều có đền thờ Ông Hoàng Mười. Vậy đâu là đền chính? Cùng VinShop tìm hiểu lý do tại sao có 2 đền Ông Hoàng Mười và cách phân biệt chúng trong bài viết dưới đây nhé!', NULL, 'images/1028339image_upload_1710879700_tai-sao-co-2-den-hoang-ong-muoi-1.jpg', '<h2><strong>1. Giới thiệu về lịch sử đền Ông Hoàng Mười</strong></h2><p>Theo tích xưa kể lại, ông Hoàng Mười là một vị thần hạ phàm xuống chốn dân gian để giúp đỡ người dân. Người dân lưu truyền rất nhiều câu chuyện liên quan đến lịch sử đền Ông Hoàng Mười cũng như những đóng góp của ông với một số nhân vật có thật.</p><p>Họ truyền tai nhau rằng ông Hoàng Mười là quan lớn chốn Thiên Đình, thần tiên chốn Đào Nguyên. Nhận thấy chốn nhân gian còn nhiều cơ cực, ông giáng trần để giúp đỡ người dân.</p><p>Theo các nhà nghiên cứu văn hóa dân gian Việt Nam, ông Hoàng Mười là sự “thần thánh hóa” của một nhân vật có thật trong đời sống xa xưa, một người anh hùng có công với nhân dân. Về nhận định này, có khá nhiều dị bản khác nhau được lưu truyền về cuộc đời của Ngài.</p><p>Sử sách vùng Nghệ Tĩnh cho rằng, ông chính là Lê Khôi - vị tướng tài theo Lê Lợi chinh chiến chống giặc Minh, sau được phong làm quan lớn dưới triều Lê gia. Tuy nhiên, có một số dị bản khác truyền lại, ông Hoàng Mười chính là Nguyễn Xí - vị tướng giỏi thời vua Lê Thái Tổ. Ông công lớn dẹp giặc Minh, được giao trấn giữ vùng Nghệ Tĩnh và chăm lo đời sống cho người dân nơi đây.</p><p>Theo huyền tích dân gian, trong một lần du thuyền trên sông, đến đoạn chân núi Hồng Lĩnh thuyền của tướng quân Nguyễn Xí bị nhấn chìm. Trong lúc nhân dân thương tiếc, bỗng thấy thi thể ông nổi trên mặt nước, mặt vẫn hồng hào, người nhẹ tựa lông hồng. Trên trời bất ngờ xuất hiện mây ngũ sắc, kết thành hình xích mã cùng hàng ngàn thiên binh, thiên tướng đưa ông về trời. Nhân dân từ đó suy tôn là ông Hoàng Mười và lập đền thờ để tưởng nhớ.</p><figure class="image"><img src="https://cdn-merchant.vinid.net/images/gallery/vinshop-seo/image_upload_1710879700_tai-sao-co-2-den-hoang-ong-muoi-1.jpg" alt="Tại sao  có 2 đền Ông Hoàng Mười 1"><figcaption><i>Có nhiều dị bản liên quan đến sự tích đền Ông Hoàng Mười</i></figcaption></figure><h2><strong>2. Lý giải tại sao có 2 đền Ông Hoàng Mười</strong></h2><p>Hiện nay, không ít người thắc mắc tại sao có 2 đền Ông Hoàng Mười tại miền Trung. 1 ngôi đền thờ Ông Hoàng Mười tại tỉnh Nghệ An và 1 ngôi đền khác là Đền Củi tại tỉnh Hà Tĩnh. 2 ngôi đền chỉ cách nhau bởi dòng sông Lam nước xanh như mắt ngọc và đứng ở đền bên này có thể nhìn thấp thoáng đền bên kia.</p><h3><strong>2.1. Đền Ông Hoàng Mười Nghệ An</strong></h3><ul><li><strong>Địa chỉ: </strong>Làng Xuân Am, xã Hưng Thịnh, huyện Hưng Nguyên, tỉnh Nghệ An.</li></ul><p>Đền thờ chính ông Hoàng Mười nằm ở Nghệ An, cách trung tâm thành phố Vinh khoảng 7km. Mộ của Ông cũng nằm trong khuôn viên đền thờ, phía sau núi Quyết, gần cầu Bến Thủy.</p><p>Ngoài thờ, Ông Hoàng Mười nơi đây còn thờ các vị Phúc Thần như: Thánh Mẫu Liễu Hạnh, Mẫu Tứ phủ, Lê Khôi, Quận công Trịnh Trung, Song Đồng Ngọc Nữ,...</p><p>Hàng năm, đền Ông Hoàng Mười Nghệ An tổ chức 2 kỳ hội lớn: Lễ hội khai điểm vào ngày Rằm tháng 3 âm lịch và lễ hội giỗ Ông Hoàng Mười vào 10/10 âm lịch. Vào những ngày hội chính, nơi đây tấp nập du khách đến hành hương, cầu bình an, công danh, may mắn và đón nhiều tài lộc.</p><p>Đền Ông Hoàng Mười Nghệ An được xây dựng từ thời Hậu Lê và từng bị phá hủy bởi chiến tranh. Năm 1995, ngôi đền được chính quyền tỉnh Nghệ An phục dựng với kết cấu bao gồm: Tam quan, đài trung thiên, tắc môn, lầu cô, lầu cậu. Bên trong đền vẫn giữ được hệ thống tượng pháp, 21 đạo sắc phong và các bản thần tích chữ Hán có giá trị lịch sử, văn hóa, nghệ thuật.</p><p>Khu đền Quan Hoàng Mười gồm 3 tòa điện: Thượng điện, Trung điện, Hạ điện. Sau khi phục dựng, ngôi đền mang nét kiến trúc đặc trưng thời nhà Nguyễn. Vật liệu xây dựng chủ yếu làm bằng gỗ, sơn son và chạm trổ hình long, lân, quy, phụng công phu. Mái ngói bên trên được chạm trổ hình rồng, tam quan nằm liên tiếp nhau để du khách đi sâu vào bên trong.</p>', 'public', NULL, 1, 0, 1, 1, 'apple,baznana,cherry,dragonfruit', '', NULL, 0, 1, '2024-11-04 08:26:35', '2024-11-05 13:02:04'),
	(3, 'Lễ hội đền ông Hoàng Mười, xứng tầm Di sản văn hóa phi vật thể quốc gia', 'le-hoi-den-ong-hoang-muoi-xung-tam-di-san-van-hoa-phi-vat-the-quoc-gia-aptJt', 'Đền ông Hoàng Mười ở xã Hưng Thịnh - huyện Hưng Nguyên được Uỷ Ban Nhân Dân tỉnh Nghệ An xếp hạng Di tích Lịch sử văn hoá vào năm 2002; Công nhận điểm du lịch văn hóa tâm linh năm 2018. Đặc biệt năm 2019, Lễ hội Đền ông Hoàng Mười được Bộ Văn hóa - Thể thao và Du lịch công nhận là Di sản văn hóa phi vật thể quốc gia. Lễ hội đền ông Hoàng Mười hàng năm được tổ chức vào hai ngày 21 và 22/11( tức 9 và 10/10 Âm lịch). Để giữ gìn và phát huy giá trị Di sản văn hóa phi vật thể quốc gia, huyện Hưng Nguyên đã xác định Lễ hội Đền ông Hoàng Mười là điểm nhấn văn hóa, du lịch tâm linh, thu hút du khách thập phương tới tham quan, chiêm bãi.', NULL, 'images/7614858tải xuống.jpg', '<h2><strong>Đền ông Hoàng Mười được xây dựng năm 1634</strong></h2><p><strong>&nbsp;</strong>từ thời hậu Lê. Trải qua những biến cố lịch sử, sự tàn phá của chiến tranh và thiên tai, ngôi đền bị hư hỏng nhiều, các đồ tế khí như thần chủ, sắc…và nhiều bộ phận bằng gỗ của đền được chuyển về cất giữ trong làng Xuân Am. Đến năm 1995, đền được được tôn tạo và phục dựng trên cơ sở khung nhà cũ nền đất Mỏ Hạc xưa. Trong những năm qua đền được quan tâm đầu tư, tôn tạo và nâng cấp ngày càng khang trang hơn, phục vụ đời sống tâm linh của người dân. .<br>&nbsp;</p><figure class="image"><img src="https://datafiles.nghean.gov.vn/nan-ubnd/2936/quantritintuc202311/2638351363125773990.jpg" alt="Anh-tin-bai"></figure><p><strong>Đền ông Hoàng Mười, xã Hưng Thịnh, huyện Hưng Nguyên</strong></p><p>Toàn bộ kiến trúc của đền ông Hoàng Mười mang dáng dấp kiến trúc thời Nguyễn với hệ thống gỗ trong di tích được chạm trổ công phu, phản ánh được tư duy sáng tạo, sự tài hoa của nghệ nhân xứ Nghệ. Ngoài ra đền ông Hoàng Mười hiện còn lưu giữ nhiều hiện vật quý có giá trị lịch sử.&nbsp; Đặc biệt hiện nay còn lưu giữ &nbsp;21 sắc phong, bản thần tích chữ Hán.. và hệ thống tượng pháp có giá trị lịch sử và thẩm mỹ. &nbsp;Đền nằm ở vị trí cảnh quan đẹp với phong cảnh non xanh nước biếc hữu tình. Trước mặt là dòng sông Lam như một dải lụa xanh trải rộng, ôm ấp quanh Đền là sông Cồn Mộc quanh co, uốn khúc. Phía sau, bên kia sông Cồn Mộc là núi Dũng Quyết và Phượng Hoàng Trung Đô với những dấu tích lịch sử. Cảnh quan thiên nhiên của một vùng sông nước, mây núi vốn được coi là một trong những đại danh thắng ở hạ lưu sông Lam, hơi thở trong lành, tinh khiết đã tạo nên cảm giác vô cùng thoải mái cho du khách khi đến đây. Ngoài cảnh đẹp kỳ thú, từ lâu, đền ông Hoàng Mười đã nổi tiếng linh thiêng và có vị trí hết sức quan trọng trong đời sống tâm linh của người dân.</p><figure class="image"><img src="https://datafiles.nghean.gov.vn/nan-ubnd/2936/quantritintuc202311/3638351363306714266.jpg" alt="Anh-tin-bai"></figure><p><i><strong>Trong lòng nhân dân, ông Hoàng Mười là một “đức thánh minh” trong hàng các ông quan Hoàng của tín ngưỡng Đạo Mẫu</strong></i>, được nhiều người ngưỡng mộ và được thờ ở nhiều địa phương trong nước. Có rất nhiều giải thiết nói về nguồn gốc của nhân vật Hoàng Mười. Song đã được dân gian đưa vào ký ức cho rằng ông Hoàng Mười có nguồn gốc rõ ràng ở làng Xuân Am, Tổng Yên Trường, Phủ Hưng Nguyên gắn với ngôi đền thờ ông tại xã Hưng Thịnh, Hưng Nguyên. Và nơi đây, ông Hoàng Mười được nhân thế hóa với tích: Hoàng Mười con thứ 10 của vua cha Bát Hải Đại vương ở hồ Động Đình. Sau khi trở thành vị thần của đạo Mẫu, ông được thiên giới cho cai quản vùng đất Nghệ An với một bản lý lịch thân thế đầy đặn tương đồng với sự hóa thân của các nhân vật có thật như: Lê Khôi, Lý Nhật Quang Nguyễn Duy Lạc,…Đây là những nhân vật lịch sử xứ Nghệ hoặc găn bó với xứ Nghệ có những công trạng, tính cách tương tự như ông Hoàng Mười gắn với phong thái của người Nghệ kiên cường, thông minh và không kém phần hào hoa, phong nhã. Dù hóa thân là ai hình tượng Quan Hoàng Mười vẫn rất gần gủi, gắn bó được Nhân dân xứ Nghệ ngưỡng mộ và tôn vinh</p>', 'public', NULL, 2, 0, 1, 1, 'apple,banana1,cherry,dragonfruit', '', NULL, 0, 1, '2024-11-04 09:10:39', '2024-11-05 12:56:28');

-- Dumping structure for table onghoangmuoi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` bigint unsigned DEFAULT NULL,
  `facebook_id` bigint unsigned DEFAULT NULL,
  `cover_image` text COLLATE utf8mb4_unicode_ci,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('is actived','not actived','is banned') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'not actived',
  `role` enum('admin','creator','user','approver') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table onghoangmuoi.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `google_id`, `facebook_id`, `cover_image`, `avatar`, `status`, `role`, `bio`, `deleted_at`, `created_at`, `updated_at`, `last_login`) VALUES
	(1, NULL, 'ngoc.dung.304.1975@gmail.com', NULL, '$2y$12$FbQvs9EkJqdCcuS0r730De7GC0JdgrvbT0vyZmcMRXu3bHeJlFoaC', 'dVt0yLTwbjBhcABjKJXILZuhNvrF6lm1VUsRKn889sgyoT1oIuXwzWEhI6cL', NULL, NULL, NULL, NULL, 'not actived', 'admin', NULL, NULL, '2024-11-04 07:39:13', '2024-11-04 07:39:13', NULL),
	(3, '12345678', 'dasdad@gmaisdasd.c', NULL, '$2y$12$53koQvnOgXxhMIG5x5si8uwYSOyOa2rvPFMHdCaJMRxEejRXxB5iK', NULL, NULL, NULL, NULL, NULL, 'not actived', 'user', '12345678', NULL, '2024-11-07 06:48:31', '2024-11-07 06:48:31', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
