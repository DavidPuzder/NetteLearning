-- --------------------------------------------------------
-- Hostiteľ:                     db101.websupport.sk
-- Verze serveru:                10.1.30-MariaDB-1~xenial - mariadb.org binary distribution
-- OS serveru:                   debian-linux-gnu
-- HeidiSQL Verzia:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportování dat pro tabulku dpuzder1820.blog_category: ~6 rows (přibližně)
/*!40000 ALTER TABLE `blog_category` DISABLE KEYS */;
REPLACE INTO `blog_category` (`id`, `title`, `lang`, `alias`, `description`, `params`, `image`, `status`, `created`, `updated`) VALUES
	(1, 'Kryty na mobil', 'sk', 'kryty-na-mobil', 'Najlepšie kryty na mobil.', NULL, 'phonecase.jpeg', 1, '2019-03-11 18:00:20', '2019-03-11 20:26:27'),
	(2, 'Náramky', 'sk', 'naramky', 'Originálne náramky, ktoré záujmú aj vaše okolie.', NULL, 'bracelet.jpeg', 1, '2019-03-11 18:10:20', '2019-03-11 20:26:24'),
	(3, 'Redukcie', 'sk', 'redukcie', 'Redukcie na nabíjačky a iné káble.', NULL, 'reduction.jpeg', 1, '2019-03-11 18:20:20', '2019-03-11 20:26:21'),
	(4, 'Hodinky', 'sk', 'hodinky', 'Štýlové a elegantné hodinky za super cenu.', NULL, 'watch.jpeg', 1, '2019-03-11 18:30:20', '2019-03-11 20:26:18'),
	(5, 'Ochranné skla', 'sk', 'ochranne-skla', 'Ochranné skla a fólie na ochranu mobilu proti pádu.', NULL, 'protective_glass.jpg', 1, '2019-03-11 18:40:20', '2019-03-11 19:31:40'),
	(6, 'Nabíjačky', 'sk', 'nabijacky', 'Nabíjačky na telefóny, notebooky, sieťove káble.', NULL, 'charger.jpg', 1, '2019-03-11 18:21:26', '2019-03-11 19:33:31');
/*!40000 ALTER TABLE `blog_category` ENABLE KEYS */;

-- Exportování dat pro tabulku dpuzder1820.phinxlog: ~5 rows (přibližně)
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
REPLACE INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
	(20190308104833, 'CreateUserTable', '2019-03-09 16:36:59', '2019-03-09 16:36:59', 0),
	(20190309153748, 'CreateTranslationTable', '2019-03-09 16:40:35', '2019-03-09 16:40:35', 0),
	(20190311124541, 'CreateCategoryTable', '2019-03-11 17:57:06', '2019-03-11 17:57:07', 0),
	(20190312130738, 'CreateSiteSettingsTable', '2019-03-12 14:08:52', '2019-03-12 14:08:52', 0),
	(20190312133957, 'CreateSiteOpenTable', '2019-03-12 15:09:48', '2019-03-12 15:09:48', 0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;

-- Exportování dat pro tabulku dpuzder1820.site_open: ~0 rows (přibližně)
/*!40000 ALTER TABLE `site_open` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_open` ENABLE KEYS */;

-- Exportování dat pro tabulku dpuzder1820.site_settings: ~2 rows (přibližně)
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
REPLACE INTO `site_settings` (`id`, `title`, `lang`, `alias`, `description`, `params`, `status`, `created`, `updated`) VALUES
	(1, 'Nette Learning', 'sk', 'site-name', 'Názov stránky', NULL, 1, '2019-03-12 14:10:16', '2019-03-12 14:28:38'),
	(2, 'Počítadlo otvorení', 'sk', 'open-counter', 'Zaznamenáva počet otvorení stránky', NULL, 0, '2019-03-12 14:33:55', '2019-03-13 22:26:47');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;

-- Exportování dat pro tabulku dpuzder1820.translation: ~0 rows (přibližně)
/*!40000 ALTER TABLE `translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `translation` ENABLE KEYS */;

-- Exportování dat pro tabulku dpuzder1820.user: ~0 rows (přibližně)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `password`, `email`, `role`, `activated`, `image`, `status`, `created`) VALUES
	(1, 'Dávid Puzder', '$2y$10$AhOpqn4hCGBnUa09bj/ic.qZaaP1HfDZbHQ3dt6HxqcngtpA9oexq', 'davidpuzder@icloud.com', 'Registered', 0, 'null', 1, '2019-03-12 16:08:47');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
