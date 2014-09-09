SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `idCustomers` int(11) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Address` text,
  `FavoriteCuisine` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCustomers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`idCustomers`, `FirstName`, `LastName`, `Address`, `FavoriteCuisine`) VALUES
(1, 'Xavier ', 'Cunningham ', NULL, 'ltalian'),
(2, 'Kailah ', 'Sanders ', NULL, 'American'),
(3, 'Ahmed ', 'Bondagjy ', NULL, NULL),
(4, 'Dylan ', 'Moats ', NULL, NULL),
(5, 'Zachary ', 'Brown ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE IF NOT EXISTS `dish` (
  `idDish` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`idDish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`idDish`, `name`) VALUES
(1, 'Chips & Salsa '),
(2, 'Biscuits & Gravy'),
(3, 'Deviled Eggs'),
(4, 'Fried Green Tomatoes'),
(5, 'Black Bean Nachos ');

-- --------------------------------------------------------

--
-- Table structure for table `dish_rating`
--

CREATE TABLE IF NOT EXISTS `dish_rating` (
  `idRating` int(11) NOT NULL AUTO_INCREMENT,
  `idDish` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`idRating`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dish_rating`
--

INSERT INTO `dish_rating` (`idRating`, `idDish`, `rating`) VALUES
(1, 1, 8),
(2, 1, 5),
(3, 3, 2),
(4, 5, 10),
(5, 2, 1),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dish_reviews`
--

CREATE TABLE IF NOT EXISTS `dish_reviews` (
  `idReviews` int(11) NOT NULL,
  `idCustomer` int(11) DEFAULT NULL,
  `idDish` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`idReviews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dish_reviews`
--

INSERT INTO `dish_reviews` (`idReviews`, `idCustomer`, `idDish`, `content`) VALUES
(1, 1, 1, 'Good'),
(2, 3, 2, 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `idPrice` int(11) NOT NULL,
  `idDish` int(11) NOT NULL,
  `idCustomers` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`idPrice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`idPrice`, `idDish`, `idCustomers`, `price`) VALUES
(1, 2, 1, 3.39),
(2, 1, 1, 8.79),
(3, 2, 1, 5.69),
(4, 3, 4, 5.36),
(5, 1, 1, 2.79);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `idRestaurant` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Type` varchar(45) NOT NULL,
  `SpecificDishes` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idRestaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`idRestaurant`, `Name`, `Type`, `SpecificDishes`) VALUES
(1, 'Buffalo Wild Wings', 'American', 'Deviled Eggs'),
(2, 'Kd''s Allegro Pizzeria', 'American', '0'),
(3, 'Eagles Nest', 'American', NULL),
(4, 'Burger King', 'American', '0'),
(5, 'Fiesta Chara', 'Italian', '0');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_rating`
--

CREATE TABLE IF NOT EXISTS `restaurant_rating` (
  `idRating` int(11) NOT NULL AUTO_INCREMENT,
  `idRestaurant` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`idRating`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `restaurant_rating`
--

INSERT INTO `restaurant_rating` (`idRating`, `idRestaurant`, `rating`) VALUES
(1, 2, 9),
(2, 3, 1),
(3, 3, 2),
(4, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_reviews`
--

CREATE TABLE IF NOT EXISTS `restaurant_reviews` (
  `idReviews` int(11) NOT NULL,
  `idCustomer` int(11) DEFAULT NULL,
  `idRestaurant` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`idReviews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_reviews`
--

INSERT INTO `restaurant_reviews` (`idReviews`, `idCustomer`, `idRestaurant`, `content`) VALUES
(1, 2, 3, 'Good'),
(2, 3, 2, 'Bad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
