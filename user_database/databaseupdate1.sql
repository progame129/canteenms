-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 06:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteenms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `date_order` datetime NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'Đồ Ăn', '2019-04-07 19:51:28', '2019-04-07 19:51:28', NULL),
(16, 'Đồ Uống', '2019-04-07 19:51:47', '2019-04-07 19:51:47', NULL),
(17, 'Thuôc Lá', '2019-04-07 19:52:14', '2019-04-07 19:52:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_25_161920_create_category', 1),
(4, '2019_03_25_161935_create_product', 1),
(5, '2019_03_25_163022_create_customer', 1),
(6, '2019_03_25_163219_create_feedback', 1),
(7, '2019_03_25_163518_create_bills', 1),
(8, '2019_03_25_163840_create_bill_details', 1),
(9, '2019_03_25_165043_create_order', 1),
(10, '2019_03_25_165113_create_oder_detaill', 1),
(11, '2019_03_26_154826_add_img_to_product', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `img`, `description`, `id_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'bánh mì kẹp thịt', 20, 'https://media.cooky.vn/recipe/g4/31623/s800x500/cooky-recipe-cover-r31623.jpg', 'Bánh mì là một thực phẩm chế biến từ bột mì từ ngũ cốc được nghiền ra trộn với nước, thường là bằng cách nướng. Trong suốt quá trình lịch sử nó đã được phổ biến trên toàn thế giới và là một trong những loại thực phẩm nhân tạo lâu đời nhất, và rất quan trọng kể từ lúc ban đầu của ngành nông nghiệp.', 15, '2019-04-07 19:53:41', '2019-04-07 19:53:41', NULL),
(16, 'Bánh mì kẹp thịt gà chiên áp chảo', 25, 'https://media.cooky.vn/recipe/g4/38789/s800x500/cooky-recipe-cover-r38789.jpg', 'Bánh mì kẹp thịt gà chiên áp chảo với thịt gà ướp ít nguyên liệu rồi chiên áp chảo cho chín, thái nhỏ. Bánh mì kẹp thịt gà đồ chua cùng các phụ liệu ớt, ngò rí tùy thích.', 15, '2019-04-07 19:55:14', '2019-04-07 19:55:14', NULL),
(17, 'thuốc lá thăng long', 10, 'http://honghagroup.com.vn/profiles/honghagroupcomvn/uploads/attach/thumbnail/1460689297_vinatab%C3%A1.png', 'Hoạt động trong một ngành sản xuất có tính cạnh tranh cao, Công ty Thuốc lá Thăng Long lấy kim chỉ nam “Sản xuất - Chất lượng - Hiệu quả” làm mục tiêu xuyên suốt.', 17, '2019-04-07 20:01:22', '2019-04-07 20:01:22', NULL),
(18, 'Thuốc lá 555', 30, 'https://congtythanhnghi.com/wp-content/uploads/2018/11/2-1-1080x675.jpg', 'Thuốc lá 555 được sản xuất và đóng gói tại Singapore, đây là một trong những loại thuốc lá điếu có giá thành cao nhất là đối với thị trường buôn bán lẻ tại Việt Nam. Thuốc lá 555 được nhiều người yêu thích nhất là đối với những người nghiện thuốc lá lâu năm vì, trong điếu thuốc lá 555 có một lượng nicotine khá cao và nặng làm cho người hút có cảm giác thoải mái.', 17, '2019-04-07 20:02:59', '2019-04-07 20:02:59', NULL),
(19, '7 up', 8, 'https://s1.marquis.vn/assets/2017/2017-09/31277e951a0d25f38e30f3bc495e21ab.jpg', '7UP là một nhãn hiệu đồ uống nhẹ vị chanh không chứa caffein. Bản quyền nhãn hiệu thuộc về Dr Pepper Snapple Group của Mỹ và PepsiCo (được nhượng giấy phép) ở bên ngoài nước Mỹ. Logo 7Up bao gồm một chấm đỏ nằm giữa \"7\" và \"Up\".', 16, '2019-04-07 20:04:12', '2019-04-07 20:04:12', NULL),
(20, 'bo huc', 9, 'data:image/jpeg;base64,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', 'Nước uống tăng lực Redbull là sản phẩm nước tăng lực chất lượng cao của Công ty TNHH RedBull Việt Nam. Sản phẩm được chế biến từ những thành phần chính như: nước, đường, hương liệu tổng hợp, vitamin B3, B5, B6, B12, taurin... Do đó, không chỉ là một loại nước tăng lực đơn thuần, sản phẩm còn có tác dụng bồi bổ sức khỏe, giải nhiệt cơ thể hiệu quả.', 16, '2019-04-07 20:04:36', '2019-04-07 20:04:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trung', 'trungtran230899@gmail.com', NULL, '$2y$10$MeR4.iUUkefRCOqoTDNTuebv/johmIdgonTow5So09uvORIkO6Llq', NULL, '2019-04-04 09:08:12', '2019-04-04 09:08:12'),
(2, 'trung', 'trungtran99@gmail.com', NULL, '$2y$10$BLR/b8VLg8ZqlT12wMIL0uXH2vike3DD0q02PIRp4JKjOcN.gE9aS', 'bIUDXeHtqUoWKVbvF8V1FE4d7Q4HUh9aqm2qY9NRwoPHse6VsYwMfvSodo3e', '2019-04-07 18:20:14', '2019-04-07 18:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_id_order_foreign` (`id_order`),
  ADD KEY `order_detail_id_product_foreign` (`id_product`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_category_foreign` (`id_category`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `order_detail_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
