-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 10:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `categories`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `quantity`, `price`, `type`) VALUES
(1, 'Corn', 'images/corn.jpg', '2 pcs', 30, 'veggies'),
(2, 'Cucumber', 'images/cucumber.jpg', '500 g', 10, 'veggies'),
(3, 'Lemon', 'images/lemon.jpg', '500', 20, 'veggies'),
(4, 'Mango', 'images/mango.jpg', '2 pcs', 180, 'veggies'),
(5, 'Onion', 'images/onion.jpg', '1 kg', 30, 'veggies'),
(6, 'Orange', 'images/orange.jpg', '6 pcs', 180, 'veggies'),
(7, 'Potato', 'images/potato.jpg', '1 kg', 50, 'veggies'),
(8, 'Tomato', 'images/tomato.jpg\r\n', '1 kg', 50, 'veggies'),
(9, 'Biscuit', 'images/biscuit.jpg', '120 g', 60, 'packed'),
(10, 'KitKat', 'images/kitkat.jpg', '27.5 g', 25, 'packed'),
(11, 'Maggi', 'images/maggi.jpg', '70 g', 12, 'packed'),
(12, 'Pasta', 'images/pasta.jpg', '130 g', 40, 'packed'),
(13, 'Rice', 'images/rice.jpg', '1 kd', 100, 'packed'),
(14, 'Tomato Sauce', 'images/sauce.jpg', '200 g', 50, 'packed'),
(15, 'Soya Sauce', 'images/soyasauce.jpg', '200 g', 45, 'packed'),
(16, 'Whole Wheat', 'images/wheat.jpg', '1 kg', 60, 'packed'),
(17, 'Bucket', 'images/bucket.jpg', '17 lt', 109, 'household'),
(18, 'Detergent', 'images/detergent.jpg', '1 kg', 70, 'household'),
(19, 'Dishwash Bar', 'images/dishwash_bar.jpg', '200 g', 45, 'household'),
(20, 'Glass Cleaner', 'images/glass_cleaner.jpg', '500 ml', 90, 'household'),
(21, 'Mop', 'images/mop.jpg', '1 pc', 220, 'household'),
(22, 'Mosquito Repellent', 'images/mosquito_repellent.jpg', '45 ml', 120, 'household'),
(23, 'Paper Napkins', 'images/napkins.jpg', '100 pcs', 32, 'household'),
(24, 'Wipes', 'images/wipes.jpg', '5 pcs', 220, 'household'),
(25, 'Bread', 'images/bread.jpg', '1 pc', 40, 'bakery'),
(26, 'Butter', 'butter.jpg', '100 g', 40, 'bakery'),
(27, 'Cheese', 'cheese.jpg', '200 g', 130, 'bakery'),
(28, 'Cheese Spread', 'cheese_spread.jpg', '150 g', 150, 'bakery'),
(29, 'Curd', 'curd.jpg', '200 g', 30, 'bakery'),
(30, 'Paneer', 'paneer.jpg', '200 g', 80, 'bakery'),
(31, 'Shrikhand', 'shrikhand.jpg', '500 g', 100, 'bakery'),
(32, 'Strawberry Milkshake', 'strawberry_milkshake.jpg', '200 g', 35, 'bakery'),
(35, 'Pure Eggs Premium Eggs', 'pure_eggs.png', '6 units', 45, 'non veg'),
(36, 'Eggon Omega 3 White Grade A Eggs', 'eggon.png', '6 units', 60, 'non veg'),
(37, 'Meatzza Chicken Nuggets', 'meatzza.png', '500 g', 275, 'non veg'),
(38, 'ITC Masterchef Prawns- Large & Peeled', 'itc.png', '200 g', 250, 'non veg'),
(39, 'Prasuma Chicken Momos, Spicy', 'prasuma.png', '24 pieces', 270, 'non veg'),
(40, 'Meatzza Chicken Seek Kebab', 'chicken.png', '500 g', 325, 'non veg'),
(41, 'Fresho Frozen Prawns -Small (Pouch)', 'prawns.png', '250 g', 183, 'non veg'),
(42, 'La Carne Chicken Tandoori Tikka', 'tandoori.png', '500 g', 370, 'non veg'),
(43, 'Dettol Hand Wash Original           \r\n(Pump)\r\n    ', 'dettol_handwash.png', '200 ml', 79, 'personal care'),
(44, 'Dettol Hand Sanitizer (Bottle)', 'dettol_hand_sanitizer.png', '500 ml', 250, 'personal care'),
(45, 'Savlon Antiseptic Liquid (Bottle)', 'savlon_antiseptic_bottle.png', '1L', 259, 'personal care'),
(46, 'Lifebuoy Total 10 Handwash (Pump)', 'lifebouy_handwash.png', '200 ml', 83, 'personal care'),
(47, 'Sunsilk Stunning Black Shampoo', 'sunsilk_stunning_black_shampoo.png', '1L', 315, 'personal care'),
(48, 'Tresemme Smooth & Shine Conditioner', 'tresmme.png', '190 ml', 130, 'personal care'),
(49, 'Clinic Plus Strong & Long Hair Shampoo', 'clinic_plus_shampoo.png', '340 ml', 170, 'personal care'),
(50, 'Parachute Coconut Hair Oil', 'parachute.png', '500 ml', 150, 'personal care'),
(51, 'Himalaya Purifying Neem Facewash', 'himalaya.png', '300 ml', 250, 'personal care'),
(52, 'Cinthol Refreshing Lime Soap (6 piece)', 'cinthol.png', '6x100 g', 170, 'personal care'),
(53, 'Everyuth Natural Glow Facemask', 'everyuth.png', '90g', 100, 'personal care'),
(54, 'Vaseline Total Moisture Body Lotion', 'vaseline.png', '400 ml', 240, 'personal care'),
(55, 'Thumbs Up Soft Drink (Bottle)', 'thumbs.png', '750 ml', 30, 'beverages'),
(56, 'Sprite Soft Drink (Bottle)', 'sprite.png', '750 ml', 35, 'beverages'),
(57, 'Pepsi Soft Drink (Bottle)', 'pepsi.png', '750 ml', 35, 'beverages'),
(58, 'Fanta Soft Drink (Bottle)', 'fanta.png', '750 ml', 38, 'beverages'),
(59, 'Amul Lassi Tetrapack', 'lassi.png', '1L', 70, 'beverages'),
(60, 'Amul Masti Spiced Buttermilk', 'buttermilk.png', '1L', 50, 'beverages'),
(61, 'Tang Lemon Instant Drink', 'tang.png', '500 g', 124, 'beverages'),
(62, 'Glucon-D Instant Energy Drink', 'glucon.png', '450 g', 130, 'beverages'),
(63, 'Wagh Bakri Premium Tea (Pouch)', 'tea.png', '500 g', 240, 'beverages'),
(64, 'Brooke Bond Taaza Tea (Pouch)', 'taaza.png', '1 kg', 290, 'beverages'),
(65, 'Nescafe Classic Coffee (Jar)', 'nescafe.png', '100 g', 260, 'beverages'),
(66, 'BRU Instant Coffee (Pouch)', 'bru.png', '100 g', 135, 'beverages');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
