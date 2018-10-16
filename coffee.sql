-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Okt 2018 pada 10.52
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `addressline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', '2018-10-13 23:07:56', '2018-10-13 23:07:56'),
(3, 'Other', '2018-10-13 23:09:18', '2018-10-13 23:09:18'),
(4, 'Main Course', '2018-10-13 23:09:26', '2018-10-13 23:09:26'),
(5, 'Dessert', '2018-10-13 23:09:36', '2018-10-13 23:09:36'),
(6, 'Tea', '2018-10-13 23:10:18', '2018-10-13 23:10:18'),
(7, 'Beans', '2018-10-13 23:24:00', '2018-10-13 23:24:00'),
(8, 'Dripper', '2018-10-13 23:24:45', '2018-10-13 23:24:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cat_posts`
--

CREATE TABLE `cat_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkouts`
--

CREATE TABLE `checkouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'coffeeshop.jpg', '2018-10-14 00:30:17', '2018-10-14 00:30:17'),
(2, 'slider1.jpg', '2018-10-14 00:30:24', '2018-10-14 00:30:24'),
(3, 'other.jpg', '2018-10-14 00:30:31', '2018-10-14 00:30:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_menus_id` int(11) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `name`, `cat_menus_id`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Caffe Latte', 1, '50000', 'Full authentic caffe latte coffee', '2018-10-13 23:18:05', '2018-10-13 23:18:05'),
(2, 'Thai Tea', 6, '40000', 'Tea from thailand', '2018-10-13 23:18:49', '2018-10-13 23:18:49'),
(3, 'Strawberry Cheese', 3, '100000', 'Strawberry Cheese drink with many topings', '2018-10-13 23:19:38', '2018-10-13 23:19:38'),
(4, 'Nasi Goreng', 4, '50000', 'Spicy HotRice cook', '2018-10-13 23:20:20', '2018-10-13 23:20:20'),
(5, 'Salad', 5, '50000', 'The authentic salad', '2018-10-13 23:20:48', '2018-10-13 23:20:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2018_09_25_034512_create_cat_menus_table', 1),
(55, '2014_10_12_000000_create_users_table', 2),
(56, '2014_10_12_100000_create_password_resets_table', 2),
(57, '2018_09_23_093614_create_products_table', 2),
(58, '2018_09_23_100146_create_categories_table', 2),
(59, '2018_09_24_151019_create_menus_table', 2),
(60, '2018_09_27_053436_create_product_images_table', 2),
(61, '2018_10_02_020406_create_orders_table', 2),
(62, '2018_10_02_054244_add_admin_column_to_users', 2),
(63, '2018_10_02_133824_create_order_product_table', 2),
(64, '2018_10_02_134134_create_addresses_table', 2),
(65, '2018_10_09_003850_add_user_id_to_address_table_new', 2),
(66, '2018_10_09_034913_create_checkouts_table', 2),
(67, '2018_10_10_152742_add_image_column_to_orders', 2),
(68, '2018_10_12_134124_create_posts_table', 2),
(69, '2018_10_12_135540_create_cat_posts_table', 2),
(70, '2018_10_14_032925_create_galleries_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `status`, `address`, `phone`, `receipt`, `created_at`, `updated_at`, `image`) VALUES
(3, 1, '450,000.00', 1, 'jl.pln nnsnsnasn', '342343242432', 'jams', '2018-10-13 23:42:27', '2018-10-14 00:02:46', 'gayo1.jpeg'),
(4, 1, '800,000.00', 0, 'jl.pln gg.bhotonasad', '3453443535', 'jemss', '2018-10-13 23:45:51', '2018-10-13 23:45:51', 'not.jpg'),
(5, 1, '400,000.00', 1, 'jl. sdsdsdsdsdsds', '3434343434', 'Tn, duaaa', '2018-10-14 01:24:12', '2018-10-14 01:25:18', 'ian.janu_BXsCI7Qh6d2-600x600.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `order_id`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '270000', NULL, NULL),
(2, 2, 1, 4, '400000', NULL, NULL),
(3, 21, 1, 6, '600000', NULL, NULL),
(4, 1, 2, 3, '270000', NULL, NULL),
(5, 2, 2, 4, '400000', NULL, NULL),
(6, 21, 2, 6, '600000', NULL, NULL),
(7, 2, 3, 3, '300000', NULL, NULL),
(8, 3, 3, 1, '50000', NULL, NULL),
(9, 4, 3, 1, '100000', NULL, NULL),
(10, 2, 4, 5, '500000', NULL, NULL),
(11, 4, 4, 3, '300000', NULL, NULL),
(12, 4, 5, 3, '300000', NULL, NULL),
(13, 3, 5, 2, '100000', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('cust1@co.com', '$2y$10$pIG34EY0hJoVl8NAQexk9OouuFaoiotJCbmwPRkpJ5Y3FEBkft/vm', '2018-10-14 01:26:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Balada Barista di Negara Dunia Ketiga EDITED', 1, '<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><em><strong>EDITED</strong></em>Mungkin <strong>beberapa dari Kita masih banyak</strong> yang belum mengetahui apa sebenarnya profesi barista dan bagaimana perannya secara status pekerjaan di negara dunia ketiga seperti Indonesia? Berdasarkan status, pekerjaan terbagi menjadi dua jenis, Sektor Formal&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">(White Collar)</em>dan Informal&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">(Blue Collar)</em>, sektor formal merupakan status pekerjaan yang terdiri dari tenaga profesional, teknisi, tenaga kepemimpinan, tenaga tata usaha, tenaga jasa usaha, tenaga usaha penjualan. Secara general pekerjaan sektor formal mengedepankan keterampilan dan profesionalitas yang terstandar oleh negara. Sedangkan, pekerjaan sektor informal ialah mudah masuk, artinya siapapun dapat kapan saja terjun ke dalam sektor ini, keterampilan diperoleh dari luar sistem sekolah formal, dan tidak diatur oleh pasar yang kompetitif. Jadi, dimana posisi pekerjan barista di Indonesia?<br /><br /></p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Secara etimologi, kata barista memiliki arti&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">Bartender</em>, yaitu mereka yang menyajikan segala macam minuman, bukan hanya kopi. Barista berarti juga pelayan bar (dalam bahasa italia). Kata ini mulai di gunakan dan diadopsi secara spesifik oleh beberapa negara sebagai orang yang menyajikan kopi. Terlepas dari hal di atas, barista memiliki beberapa tugas dan peran yang membedakan dengan profesi lain yang sejenis. Perkembangan kedai-kedai kopi yang pesat memaksa barista untuk lebih terampil dan mahir dalam meracik kopi. Tak sampai di sini, barista memiliki tugas seperti, mampu mengoperasikan mesin&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">espresso</em>, mengusai&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">latte art</em>, memahami prinsip seduh manual&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">(Manual Brew)</em>, mampu membuat inovasi resep dengan menambahkan bahan lain untuk campuran kopi, barista harus memiliki pengetahuan yang baik tentang seluruh proses yang ada pada rantai kopi&nbsp;<em style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;\">(Coffee Chain)</em>, satu hal yang tak kalah penting, barista harus melayani pelanggan dengan ramah dan suka cita.<br /><br /></p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Perlahan tapi pasti, profesi barista kini memiliki banyak peminat. Kedai kopi yang semakin menjamur menjadikan profesi ini penuh gengsi. Melihat kenyataan profesi barista yang ada di Indonesia, profesi ini dapat dikategorikan ke dalam sektor formal, yang menuntut bahwa seorang barista harus memiliki standar profesional. Kontranya, di Indonesia siapapun dapat menjadi barista, terlepas dari memenuhi standar atau tidak. Dari sisi pendapatan, masih banyak barista di Indonesia pendapatannya jauh dari standar yang telah dipatenkan. Dengan begini, profesi barista juga dapat dikatakan sektor pekerjaan informal. Bagi barista, profesionalitas dan dedikasi adalah segalanya. Rata-rata pendapatan barista yang tersertifikasi secara profesional di Eropa dan Australia sangat fantastis, mereka mampu mengantongi $35 per jamnya. Hal ini semakin menegaskan bahwa profesi barista bukanlah sekadar &lsquo;Tukang Kopi&rsquo;, mereka melalui banyak tahapan ujian dan evaluasi untuk meraih suatu pekerjaan yang terbayarkan dengan harga setimpal</p>\r\n<p>&nbsp;</p>', 'slider2.jpg', '2018-10-14 00:05:23', '2018-10-14 00:29:10'),
(2, 'Kedai kopi yang semakin menjamur menjadikan profesi', 1, '<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Perlahan tapi pasti, <strong>profesi barista</strong> kini memiliki banyak peminat. Kedai kopi yang semakin menjamur menjadikan profesi ini penuh gengsi. Melihat kenyataan profesi barista yang ada di Indonesia, profesi ini dapat dikategorikan ke dalam sektor formal, yang menuntut bahwa seorang barista harus memiliki standar profesional. Kontranya, di Indonesia siapapun dapat menjadi barista, terlepas dari memenuhi standar atau tidak. Dari sisi pendapatan, masih banyak barista di Indonesia pendapatannya jauh dari standar yang telah dipatenkan. Dengan begini, profesi barista juga dapat dikatakan sektor pekerjaan informal. Bagi barista, profesionalitas dan dedikasi adalah segalanya. Rata-rata pendapatan barista yang tersertifikasi secara profesional di Eropa dan Australia sangat fantastis, mereka mampu mengantongi $35 per jamnya. Hal ini semakin menegaskan bahwa profesi barista bukanlah sekadar &lsquo;Tukang Kopi&rsquo;, mereka melalui banyak tahapan ujian dan evaluasi untuk meraih suatu pekerjaan yang terbayarkan dengan harga setimpal</p>\r\n<p style=\"box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Dilematis memang, pekerjaan yang menuntut ketelitian dan keterampilan seperti barista masih dipandang sebelah mata di Indonesia. Terkadang, kapasitas yang dimiliki seorang barista tidak sesuai dengan standar dan mereka yang terstandar secara profesional luput dari apresiasi. Barista di negara dunia ketiga, masih menyisakan banyak pilu.</p>', 'slider3.jpg', '2018-10-14 00:34:45', '2018-10-14 00:34:45'),
(3, 'Bagi barista, profesionalitas dan dedikasi', 1, '<p><span style=\"color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Dengan begini, profesi barista juga dapat dikatakan sektor pekerjaan informal. Bagi barista, profesionalitas dan dedikasi adalah segalanya. Rata-rata pendapatan barista yang tersertifikasi secara profesional di Eropa dan Australia sangat fantastis, mereka mampu mengantongi $35 per jamnya. Hal ini semakin menegaskan bahwa profesi barista bukanlah sekadar &lsquo;Tukang Kopi&rsquo;, mereka melalui banyak tahapan ujian dan evaluasi untuk meraih suatu pekerjaan yang terbayarkan dengan harga setimpal</span></p>\r\n<p><br /><span style=\"color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Dengan begini, profesi barista juga dapat dikatakan sektor pekerjaan informal. Bagi barista, profesionalitas dan dedikasi adalah segalanya. Rata-rata pendapatan barista yang tersertifikasi secara profesional di Eropa dan Australia sangat fantastis, mereka mampu mengantongi $35 per jamnya. Hal ini semakin menegaskan bahwa profesi barista bukanlah sekadar &lsquo;Tukang Kopi&rsquo;, mereka melalui banyak tahapan ujian dan evaluasi untuk meraih suatu pekerjaan yang terbayarkan dengan harga setimpal</span></span></p>\r\n<p><span style=\"color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span style=\"color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><br /></span></span><span style=\"color: #444444; font-family: \'AvantGarde Bk BT\', Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Dengan begini, profesi barista juga dapat dikatakan sektor pekerjaan informal. Bagi barista, profesionalitas dan dedikasi adalah segalanya. Rata-rata pendapatan barista yang tersertifikasi secara profesional di Eropa dan Australia sangat fantastis, mereka mampu mengantongi $35 per jamnya. Hal ini semakin menegaskan bahwa profesi barista bukanlah sekadar &lsquo;Tukang Kopi&rsquo;, mereka melalui banyak tahapan ujian dan evaluasi untuk meraih suatu pekerjaan yang terbayarkan dengan harga setimpal</span></p>', 'slider4.jpg', '2018-10-14 00:48:57', '2018-10-14 00:53:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Gayo Roasted', 7, '100000', 'img.jpg', '<p>The authentic roasted beans from us</p>', '2018-10-13 23:26:21', '2018-10-13 23:26:21'),
(3, 'Kintamani Roasted', 7, '50000', 'img.jpg', '<p>The authentic<strong> coffe</strong> from bali islands</p>', '2018-10-13 23:29:06', '2018-10-13 23:29:06'),
(4, 'V60 Dripper', 8, '100000', 'img.jpg', '<p>original originaloriginaloriginaloriginaloriginaloriginaloriginaloriginaloriginaloriginaloriginal<br />originaloriginaloriginaloriginaloriginaloriginal<br /><br />originaloriginaloriginaloriginal</p>', '2018-10-13 23:30:26', '2018-10-13 23:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'images/ian.janu_BXsCI7Qh6d2-600x600.jpg', 1, '2018-10-13 23:14:24', '2018-10-13 23:14:24'),
(2, 'images/bg-latte.jpg', 1, '2018-10-13 23:14:24', '2018-10-13 23:14:24'),
(3, 'images/ian.janu_BXsCI7Qh6d2-600x600.jpg', 2, '2018-10-13 23:26:30', '2018-10-13 23:26:30'),
(4, 'images/bg-latte.jpg', 2, '2018-10-13 23:26:30', '2018-10-13 23:26:30'),
(5, 'images/other.jpg', 3, '2018-10-13 23:29:18', '2018-10-13 23:29:18'),
(6, 'images/slider3.jpg', 3, '2018-10-13 23:29:18', '2018-10-13 23:29:18'),
(7, 'images/art-latte2.jpg', 3, '2018-10-13 23:29:19', '2018-10-13 23:29:19'),
(8, 'images/gayo1.jpeg', 4, '2018-10-13 23:31:35', '2018-10-13 23:31:35'),
(9, 'images/gayo2.jpg', 4, '2018-10-13 23:31:38', '2018-10-13 23:31:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'customer 1', 'cust1@co.com', '$2y$10$1PLgN6BOI7I/g1iANDawA.1JcyvJmhQOxK1k/F0s8xPR77A3kQsza', '9rC4mqb0ftlxYkZ4lknske7MnLbxgJBTJXm2Zo3bk3m03BuuvYQDnEncR4WT', '2018-10-13 22:40:15', '2018-10-13 22:40:15', NULL),
(2, 'Admin', 'admin@coffee.com', '$2y$10$PrQMraQVbfRM8KgscxpJEOgmkXnfYmi9O.jvzaTy0gxZETkqIIrga', 'ZtXW4dVem0tb0Mrrwg5KqG6Wt4PG2TvskQ5bDNnhtsgG01aaIOrqKBfGrXm5', '2018-10-13 23:03:11', '2018-10-13 23:03:11', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cat_posts`
--
ALTER TABLE `cat_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `cat_posts`
--
ALTER TABLE `cat_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
