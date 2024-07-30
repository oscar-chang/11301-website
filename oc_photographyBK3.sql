-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-29 14:38:58
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `oc_photography`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `img`, `description`, `sh`, `title`) VALUES
(1, '887fe64c27c3918de4569a9a876a6389.png', '以客戶滿意為首要目標，我們的攝影服務涵蓋多個領域， 從個人寫真到企業形象照，無論是婚禮、家庭、商業攝影， 我們都確保每一張照片都達到最高標準，呈現出最完美的效果。', 1, '關於我們');

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `sh`, `title`, `description`, `img`) VALUES
(1, 1, '聯繫方式', '有任何問題，歡迎和我們聯絡詢問。', '—Pngtree—a camera_4491254.png');

-- --------------------------------------------------------

--
-- 資料表結構 `contact_item`
--

CREATE TABLE `contact_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `line` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `contact_item`
--

INSERT INTO `contact_item` (`id`, `line`, `tel`, `facebook`, `instagram`, `sh`) VALUES
(1, 'karentseng2002', '0919413308', 'https://www.facebook.com/profile.php?id=100064190432986&sk=about&locale=zh_TW', 'oscar_photography_studio', 1),
(2, 'TEST', '8888', 'TEST2', 'TEST3', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `cooperation`
--

CREATE TABLE `cooperation` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `cooperation`
--

INSERT INTO `cooperation` (`id`, `img`, `sh`, `title`, `description`) VALUES
(1, '887fe64c27c3918de4569a9a876a6389.png', 1, '異業合作', '誠摯歡迎各界廠商跨領域合作');

-- --------------------------------------------------------

--
-- 資料表結構 `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `footer` varchar(100) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `footer`
--

INSERT INTO `footer` (`id`, `footer`, `sh`) VALUES
(1, 'Copyright © 2024 Oscar_Photography    All rights reserved.', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(30) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `gallery`
--

INSERT INTO `gallery` (`id`, `description`, `sh`, `title`) VALUES
(1, '回首，載著滿滿的回憶。', 1, '作品 Gallery');

-- --------------------------------------------------------

--
-- 資料表結構 `gallery_item`
--

CREATE TABLE `gallery_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `gallery_item`
--

INSERT INTO `gallery_item` (`id`, `img`, `sh`) VALUES
(2, '887fe64c27c3918de4569a9a876a6389.png', 1),
(4, '1704563820649.jpg', 1),
(5, '006_c.png', 1),
(6, '000_gr.png', 1),
(7, '011_c.png', 1),
(8, '000_cover.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `header`
--

CREATE TABLE `header` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `header`
--

INSERT INTO `header` (`id`, `title`, `subtitle`, `img`, `sh`) VALUES
(1, 'O.C Photography', 'Capture the landscape of the soul.', 'cool-background.png', 1),
(2, 'O.C Photography!', '!Capture the landscape of the soul.', 'cool-background.png', 0),
(3, '', '', '887fe64c27c3918de4569a9a876a6389.png', 0),
(4, 'TEST', 'TEST!!', '—Pngtree—a camera_4491254.png', 0),
(5, 'TT', 'TTTT', '—Pngtree—a camera_4491254.png', 0),
(6, 'aaa', 'aaa', '887fe64c27c3918de4569a9a876a6389.png', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL,
  `en_title` varchar(20) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `title`, `en_title`, `sh`) VALUES
(1, '標頭', 'header', 0),
(2, '選單', 'menu', 0),
(3, '關於奧攝', 'about', 1),
(4, '服務項目', 'service', 1),
(5, '作品', 'gallery', 1),
(6, '異業合作', 'cooperation', 1),
(7, '聯絡我們', 'contact', 1),
(8, '頁尾版權', 'footer', 0),
(9, '管理權限', 'admin', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `service`
--

INSERT INTO `service` (`id`, `description`, `title`, `sh`) VALUES
(1, '高品質創意攝影，獨特呈現。', '服務項目', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `service_item`
--

CREATE TABLE `service_item` (
  `id` int(10) NOT NULL,
  `img` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `service_item`
--

INSERT INTO `service_item` (`id`, `img`, `description`, `title`, `sh`) VALUES
(1, '887fe64c27c3918de4569a9a876a6389.png', '婚禮紀錄婚禮紀錄婚禮紀錄婚禮紀錄婚禮紀錄婚禮紀錄婚禮紀錄', '婚禮紀錄', 1),
(2, '—Pngtree—a camera_4491254.png', '寵物攝影寵物攝影寵物攝影寵物攝影寵物攝影寵物攝影寵物攝影寵物攝影', '寵物攝影', 1),
(3, '887fe64c27c3918de4569a9a876a6389.png', '情境攝影情境攝影情境攝影情境攝影情境攝影情境攝影情境攝影情境攝影。', '情境攝影', 1),
(4, '', '產品攝影產品攝影產品攝影產品攝影產品攝影產品攝影產品攝影產品攝影產品攝影。', '產品攝影', 1),
(5, '', '食物攝影食物攝影食物攝影食物攝影食物攝影食物攝影食物攝影食物攝影食物攝影。', '食物攝影', 1),
(6, '', '抓週紀錄抓週紀錄抓週紀錄抓週紀錄抓週紀錄抓週紀錄抓週紀錄抓週紀錄抓週紀錄。', '抓週紀錄', 1),
(7, '', '人像攝影創作人像攝影創作人像攝影創作人像攝影創作人像攝影創作人像攝影創作人像攝影創作。', '人像攝影創作', 1),
(8, '', '表演紀錄表演紀錄表演紀錄表演紀錄表演紀錄表演紀錄表演紀錄表演紀錄表演紀錄表演紀錄。', '表演紀錄', 1),
(9, '001.png', 'TETET', 'TETT', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact_item`
--
ALTER TABLE `contact_item`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cooperation`
--
ALTER TABLE `cooperation`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `gallery_item`
--
ALTER TABLE `gallery_item`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `service_item`
--
ALTER TABLE `service_item`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact_item`
--
ALTER TABLE `contact_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cooperation`
--
ALTER TABLE `cooperation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gallery_item`
--
ALTER TABLE `gallery_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `header`
--
ALTER TABLE `header`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `service_item`
--
ALTER TABLE `service_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
