-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 12:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20123076`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(4) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `psword` varchar(30) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `age` date NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `userName`, `psword`, `firstName`, `lastName`, `age`, `phoneNum`, `email`) VALUES
(1, 'tamgar743', '\"$(f?X3W', 'Tamar', 'Garrison', '1993-12-25', '07843534251', 'taga@phoneixnst.com'),
(2, 'penpa984', '5+>Vn\"sQ', 'Penny', 'Padilla', '2000-02-21', '07042320816', 'pend@phoneixnst.com'),
(3, 'rosros23', 'Dsk7,Bxn', 'Rosalyn', 'Ross', '1999-04-06', '07057541504', 'roaRs@phoneixnst.com'),
(4, 'davtay503', '5j\'W_Cwd', 'David', 'Taylor', '1988-11-08', '07855828342', 'dvTl@phoneixnst.com'),
(5, 'raythac347', '/nQX2S7A', 'Raymond', ' Thackeray', '1998-10-06', '07049902857', 'rythc@phoneixnst.com'),
(7, 'martpay34', '5#v&M~t4', 'Marty', 'Payne', '2001-01-08', '07819608670', 'martPay@phoneixnst.com'),
(8, 'lestmir894', '\'6sK4r2B', 'Lester', 'Miranda', '1995-04-27', '07822169083', 'lesteMir@phoneixnst.com'),
(9, 'maxswan94', 'Tp57{Hxb', 'Maximo', 'Swanson', '1979-09-17', '07815820792', 'maxio@phoneixnst.com'),
(10, 'cyhous03', 'h+5qVB)E', 'Coy', 'House', '1986-06-19', '07035279499', 'coyhous@phoneixnst.com'),
(12, 'demoAcc', '123', 'John', 'Smith', '2000-09-13', '075186846213', 'jsmith@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(4) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `firstName`, `lastName`, `phoneNum`, `email`, `rol`) VALUES
(11, 'Trevor', 'Aldridge', '07705350644 ', 'trevalRidge@phoneixnst.com', 'bartender'),
(12, 'John', 'Smith', '07431710960', 'jsmith007@phoneixnst.com', 'bartender'),
(13, 'David', 'Bark', '07049748826', 'davbark@phoneixnst.com', 'barback'),
(14, 'Simon', 'Bourne', '07717828668', 'simbo@phoneixnst.com', 'floortender'),
(15, 'Julia', 'Dell', '07013803373', 'juilidel@phoneixnst.com', 'bartender'),
(16, 'Wayne', 'Honey', '07005326347', 'wayneH@phoneixnst.com', 'floortender'),
(17, 'Philip', 'James', '07932560455', 'philJms@phoneixnst.com', 'floortender'),
(18, 'Sean', 'Kirby', '07741709406', 'seanKb@phoneixnst.com', 'bartender'),
(19, 'Timothy', 'Luscombe', '07017532246', 'timLusco@phoneixnst.com', 'bartender'),
(20, 'Rosalind', 'Main', '07079152025', 'rosalin@phoneixnst.com', 'bartender'),
(21, 'Joanna', 'Martin', '07847105828', 'joanmaR@phoneixnst.com', 'barback'),
(22, 'Frederick', 'Parsons', '07055365583', 'fredickPar@phoneixnst.com', 'barback'),
(23, 'Charles', 'Persaud', '07842458022', 'charlPer@phoneixnst.com', 'barback'),
(24, 'Carole', 'Petty', '07046500114', 'carloPet@phoneixnst.com', 'barback'),
(25, 'Matthew', 'Tan', '07004953467', 'mattheTn@phoneixnst.com', 'floortender');

-- --------------------------------------------------------

--
-- Table structure for table `frievent`
--

CREATE TABLE `frievent` (
  `friEvent` int(4) NOT NULL,
  `customerID` int(4) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `stdQty` int(4) NOT NULL,
  `totalPrice` float NOT NULL,
  `paystatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frievent`
--

INSERT INTO `frievent` (`friEvent`, `customerID`, `firstName`, `lastName`, `stdQty`, `totalPrice`, `paystatus`) VALUES
(1, 12, 'John', 'Smith', 2, 60, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerID` int(4) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `psword` varchar(30) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerID`, `userName`, `psword`, `firstName`, `lastName`, `phoneNum`, `email`) VALUES
(1, 'lencast93', 'ah9L6>WR', 'Lenny', 'Castaneda', '07848181811', 'lenCast@phoneixnst.com'),
(2, 'mondan23', '~5#MeG(z', 'Mona', 'Daniels', '07038079834', 'monaDn@phoneixnst.com'),
(3, 'adecur32', 'mDHz79+s', 'Adeline', 'Curtis', '07781737664', 'adelCurt@phoneixnst.com'),
(4, 'markslo334', '&6}w]QW-', 'Markus', 'Sloan', '07958590702', 'markslo@phoneixnst.com'),
(5, 'losanta27', '7y@bXW@>', 'Lola', 'Santana', '07976349024', 'lolSant@phoneixnst.com'),
(7, 'admin', '12345', 'Adam', 'Striker', '07057541504', 'admin@phoneixnst.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `typ` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `descrip` text NOT NULL,
  `image` text NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemID`, `name`, `typ`, `price`, `descrip`, `image`, `category`) VALUES
(1, 'The Keivs Splash', 'food', 11.99, 'This delicious meal provides you with a keivs splashed with cheese and tomatoe sauce, with a side of salad in addition to a bowl of chips and a beverage from a given selection ', 'images\\2_Meals\\meal-1.jpg', 'Non-Vegan'),
(2, 'Toad on a Bus', 'food', 8.99, 'You\'ve heard of toad in the hole, get ready for toad on a bus. This is one of our signiture light meals. It consists of a sausage that has been placed on top of a lightly toasted bun, which has then been coated with cheese.', 'images\\2_Meals\\meal-2.jpg', 'Non-Vegan'),
(3, 'Towering Burger', 'food', 9.99, 'This is a common favourite among many of our guests, as it always receives positive praise. Burger that has been topped with cheese, beef, bacon and eggs with a sweet bun resulting in an explosion of flavours. ', 'images\\2_Meals\\meal-3.jpg', 'Non-Vegan'),
(4, 'Cheesy Blocks', 'food', 8.99, 'This meal offers you the chance to endulge in some of our cheese blocks that were deep fried, then covered cheese flakes accompanied by some salad. Its a meal you can\'t miss out on.', 'images\\2_Meals\\meal-4.jpg', 'Non-Vegan'),
(5, 'Dairy Pig Delite', 'food', 6.99, 'This is a simple britsh snack consisting of cheese and ham between two slices of brown bread, but do not be fooled as the meal may seem simplistic you will be surprise about how great the flavour is.', 'images\\2_Meals\\meal-5.jpg', 'Non-Vegan'),
(6, 'Chicken & Mac', 'food', 6.99, 'This meal offers you a combination of chicken with mac\'n\'cheese to fill your stomach. A meal that seems relatively simple offers a sustaining fullness to many of our customers.', 'images\\2_Meals\\meal-6.jpg', 'Non-Vegan'),
(7, 'British Classic', 'food', 5.99, 'Fish and chips is a staple in british culture, so we decided to add it to our menu as it\'s universal appeal all over the uk is sure to be recognised. ', 'images\\2_Meals\\meal-7.png', 'Non-Vegan'),
(8, 'Botanical Bowl', 'food', 7.99, 'This is our signature vegan meal that provides those of our guest that have more of a leafy green palette. It\'s a mix of vegatables with stir fryed noodles blended into a sweet, crunchy and nutritious meal. ', 'images\\2_Meals\\meal-8.jpg', 'Vegan'),
(9, 'Autum Bellini', 'drink', 7.95, 'Prosecco marries with richly spiced mulled cider and a splash of fig vodka in this seasonal take on the classic Bellini served at New York’s Caffe Storico.', 'images\\3_Drinks\\non-alcoholic\\autum_bellini.jpg', 'Non-Alcoholic'),
(10, 'Prom Queen', 'drink', 8.99, 'Get into the summer vibe with this fruity mocktail featuring red berries, lemonade, mint, and cucumber. Cool and refreshing, it\'s fabulous on hot summer days', 'images\\3_Drinks\\non-alcoholic\\prom_queen.jpg', 'Non-Alcoholic'),
(11, 'Virgin Espresso', 'drink', 7.95, 'Enjoy the kick and flavour of espresso, without the hangover! it\'s the perfect gift for non-alcoholics and those embracing wellness. ', 'images\\3_Drinks\\non-alcoholic\\virgin_espresso.png', 'Non-Alcoholic'),
(12, 'Cranberry & Orange G', 'drink', 7.95, 'The distinctive indigo color comes from butterfly pea blossoms. 100% natural, it’s infused with eight different kinds of botanicals. As a nod to its namesake and inspiration.', 'images\\3_Drinks\\alcoholic\\gin_cocktails\\cranberry.jpg', 'Gin'),
(13, 'Rose Gin', 'drink', 8.99, 'A delightfully Light, delicate Gin with a hint of Citrus. The Juniper and Coriander provide a complex depth and warmth. The colour is a Golden amber that Changes to beautiful Pink when mixed with tonic.', 'images\\3_Drinks\\alcoholic\\gin_cocktails\\rose_gin.jpg', 'Gin'),
(14, 'Savory Gin', 'drink', 8.99, 'Savory cocktails showcasing herbaceous flavors, and even salt or spice, have risen from a niche oddity to a menu mainstay. When combined properly, savory flavors can beautifully complementry. ', 'images\\3_Drinks\\alcoholic\\gin_cocktails\\savory_gin.jpg', 'Gin'),
(15, 'Strawberry Gin', 'drink', 7.95, 'This homemade strawberry gin is the perfect summer drink and can be ready in a matter of days. You can play around with flavour combinations or some sprigs of fresh thyme, mint or basil are all great pairings with strawberry.', 'images\\3_Drinks\\alcoholic\\gin_cocktails\\strawberry_gin.jpg', 'Gin'),
(16, 'Little Zombie', 'drink', 10, 'Little Zombie is a reasonable take on the original, it’s still strong. Most cocktails call for two ounces of base booze, but this one gets three. I mean, it has to earn its Zombie name somehow, right?', 'images\\3_Drinks\\alcoholic\\rum_cocktails\\little_zombie.jpg', 'Rum');

-- --------------------------------------------------------

--
-- Table structure for table `satevent`
--

CREATE TABLE `satevent` (
  `satEvent` int(4) NOT NULL,
  `customerID` int(4) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `stdQty` int(5) NOT NULL,
  `totalPrice` int(10) NOT NULL,
  `paystatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satevent`
--

INSERT INTO `satevent` (`satEvent`, `customerID`, `firstName`, `lastName`, `stdQty`, `totalPrice`, `paystatus`) VALUES
(1, 12, 'John', 'Smith', 3, 90, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `frievent`
--
ALTER TABLE `frievent`
  ADD PRIMARY KEY (`friEvent`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `satevent`
--
ALTER TABLE `satevent`
  ADD PRIMARY KEY (`satEvent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `frievent`
--
ALTER TABLE `frievent`
  MODIFY `friEvent` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `satevent`
--
ALTER TABLE `satevent`
  MODIFY `satEvent` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
