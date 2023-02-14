-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometeq`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Swoon Gilbert Sideboard', 'curboardsml.png', 'curboardlag.png', 'John Lewis + Swoon Gilbert Sideboard, Gold/Brown\r\nDesigned by Swoon, made by us. With a shared commitment to exceptional design and quality, we\'ve collaborated to create an exclusive furniture collection for the modern home.', 'Designed by Swoon, made by us. With a shared commitment to exceptional design and quality, we\'ve collaborated to create an exclusive furniture collection for the modern home. \'The spiral of life\' is the creative concept behind this bold sideboard, which is made from acacia wood in a walnut finish with striking brass cladding on the doors. Its distinctive textured front and robust wood panels have been hand-crafted, assembled and rendered by dedicated artisans, which is visible in the sideboard\'s precise clean lines and delicate spindle-shaped legs.', '4000.00', 10),
(2, 'John Lewis Cara Nest of 2 Tabl', 'tablesml.png', 'tablelag.png', 'John Lewis\r\nThis nest of 2 Cara tables has a statement design with a retro feel.', 'This nest of 2 Cara tables has a statement design with a retro feel. Slender legs and slim line tops give them a light, airy appearance, while the durable nature of the wood makes them suitable for everyday use in your living room. The frame is made from solid American black walnut.', '2500.00', 10),
(3, 'John Lewis Blocky Armchair', 'chairsml.png', 'chairlag.png', 'A sculptural silhouette and cut-out sides give Blocky a clear contemporary edge, with piping along the arm perimeter adding a final flourish. There\'s no doubt it\'s meant as a statement addition to any living space.', 'A sculptural silhouette and cut-out sides give Blocky a clear contemporary edge, with piping along the arm perimeter adding a final flourish. There\'s no doubt it\'s meant as a statement addition to any living space.\r\n\r\nIt\'s the little things\r\nWe care about our furniture; how it\'s designed, the materials used and the people who make it. That\'s why every detail is carefully considered, with more than 20 quality checks, to ensure you\'re as proud of it as we are.\r\n\r\nTry before you buy\r\nWe\'re confident in our furniture\'s quality, but it\'s always a good idea to check that it\'s a good personal fit for you. We can\'t display all of our pieces in all of our stores – they just won\'t fit – but call us on 03452 661805 and we can help you find a nearby location to see, sit or even lie on it before ordering.', '6500.00', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
