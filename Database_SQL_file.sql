-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2021 at 02:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `account_management`
--

DROP TABLE IF EXISTS `account_management`;
CREATE TABLE IF NOT EXISTS `account_management` (
  `Customer_id` int(4) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(30) NOT NULL,
  `Login_Password` varchar(30) NOT NULL,
  `Account_Type_ID` int(1) DEFAULT NULL,
  PRIMARY KEY (`Customer_id`),
  KEY `Account_Type_ID` (`Account_Type_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_management`
--

INSERT INTO `account_management` (`Customer_id`, `email_address`, `Login_Password`, `Account_Type_ID`) VALUES
(1, 'JohnDoe@gmail.com', 'Password', 1),
(2, 'Jane.Roe@outlook.com', 'Password', 1),
(3, 'Andrew.Brown@yahoo.co.uk', 'Password', 1),
(4, 'Mary.Smith@hotmail.com', 'password', 1),
(5, 'ryan45@gmail.com', 'Password123', 1),
(6, 'emmajackson@dahlslibrary.com', 'Admin123', 2),
(7, 'danielpeterson@dahllibrary.com', 'Admin456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

DROP TABLE IF EXISTS `account_type`;
CREATE TABLE IF NOT EXISTS `account_type` (
  `Account_Type_ID` int(1) NOT NULL,
  `Account_Role` varchar(15) NOT NULL,
  PRIMARY KEY (`Account_Type_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`Account_Type_ID`, `Account_Role`) VALUES
(1, 'Customer'),
(2, 'staff'),
(3, 'Management');

-- --------------------------------------------------------

--
-- Stand-in structure for view `adventure_books`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `adventure_books`;
CREATE TABLE IF NOT EXISTS `adventure_books` (
`Book_Name` varchar(50)
,`book_genre` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `ISBN` varchar(15) NOT NULL,
  `Book_Name` varchar(50) NOT NULL,
  `Book_Author` varchar(20) NOT NULL,
  `Book_Price` decimal(3,2) NOT NULL,
  `Book_Genre` varchar(10) NOT NULL,
  `Booktype_ID` int(10) NOT NULL,
  PRIMARY KEY (`ISBN`),
  UNIQUE KEY `Booktype_ID` (`Booktype_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `Book_Name`, `Book_Author`, `Book_Price`, `Book_Genre`, `Booktype_ID`) VALUES
(' 9780141365459 ', 'James and the Giant Peach', 'Roald Dahl', '5.99', 'Adventure', 176),
('9780141364372', 'The Magic Finger', 'Roald Dahl', '6.99', 'Fantasy', 20),
('9780141364431', 'The Enormous Crocodile', 'Roald Dahl', '6.99', 'Fantasy', 391),
('9780141364516', 'George\'s Marvellous Medicine', 'Roald Dahl', '6.99', 'Fiction', 67),
('9780141364519', 'Fantastic Mr Fox', 'Roald Dahl', '5.99', 'Fantasy', 371),
('9780141364521', 'Revolting Rhymes', 'Roald Dahl', '3.99', 'Humour', 74),
('9780141364529', 'The Giraffe and the Pelly and Me', 'Roald Dahl', '5.99', 'Fiction', 147),
('9780141365374', 'Charlie and the Chocolate Factory', 'Roald Dahl', '5.99', 'Fantasy', 208),
('9780141365428', 'The BFG', 'Roald Dahl', '6.99', 'Fantasy', 224),
('9780141365466', 'Matilda', 'Roald Dahl', '6.99', 'Comedy', 256),
('9780141365473', 'The Witches', 'Roald Dahl', '6.99', 'Fantasy', 368),
('9780141365478', 'The Gremlins', 'Roald Dahl', '6.99', 'Fantasy', 187),
('9780141365480', 'Esio Trot', 'Roald Dahl', '4.99', 'Comedy', 80);

-- --------------------------------------------------------

--
-- Stand-in structure for view `books_between_5_and_10`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `books_between_5_and_10`;
CREATE TABLE IF NOT EXISTS `books_between_5_and_10` (
`Book_Name` varchar(50)
,`Book_Price` decimal(3,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `books_less_than_5`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `books_less_than_5`;
CREATE TABLE IF NOT EXISTS `books_less_than_5` (
`Book_Name` varchar(50)
,`Book_Price` decimal(3,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

DROP TABLE IF EXISTS `book_order`;
CREATE TABLE IF NOT EXISTS `book_order` (
  `Order_ID` int(4) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `Quantity` int(3) NOT NULL,
  PRIMARY KEY (`Order_ID`,`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`Order_ID`, `ISBN`, `Quantity`) VALUES
(1000, '9780141365459', 5);

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

DROP TABLE IF EXISTS `book_type`;
CREATE TABLE IF NOT EXISTS `book_type` (
  `BookType_ID` int(10) NOT NULL,
  `BookType_Description` text NOT NULL,
  PRIMARY KEY (`BookType_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`BookType_ID`, `BookType_Description`) VALUES
(80, 'In a tall building, in a small flat, lives Mr Hoppy and in the flat below him lives Mrs Silver. Mr Hoppy has always lived alone; he’s a very quiet sort of chap. His only loves are the flowers he grows on his balcony and the secret love he harbours for the lovely Mrs Silver. For a while though, it seems as though that’s all his love is destined to be, a secret.\r\n\r\nMrs Silver has a love of her own, her tortoise Alfie. All she wants is for Alfie to grow just a little bit bigger and that gives Mr Hoppy a grand idea. Perhaps if he can find a way to make Alfie grow just as quickly as his flowers do, then he might also be able to bring himself closer to Mrs Silver. He just has to find the magic words.'),
(176, 'For Mr and Mrs Trotter and their son James, life is pretty marvellous. Until, that is, Mr and Mrs Trotter are eaten by an angry rhinoceros. Poor Mr and Mrs Trotter you might say, but really you should say poor James. For when his parents die, he’s left to the care of his miserable, selfish, cruel aunts in a falling-down house on a hill in the south of England and for a while it looks as though that’s just where he’ll stay.\r\n\r\nThen, one day, James meets a strange old man who gives him a bag full of magical crystals and James’ life takes a most extraordinary turn. For when the magical crystals come into contact with a withered old peach tree, it starts to grow an enormous peach, bigger than anyone has ever seen, as big as a house, big enough to roll away all by itself and most certainly big enough for a small boy to crawl inside. Which is exactly what James decides to do.'),
(208, 'For Charlie Bucket, life isn’t very easy. He and his mother and father live in a very small house with Charlie’s four grandparents who all share one bed between them. There isn’t much to eat besides cabbage soup and not even very much of that. What Charlie really longs for, is chocolate and not just any chocolate but Willy Wonka’s chocolate, made in the chocolate factory Charlie can almost see from his house.\r\n\r\nMr Wonka is a mystery, a conundrum, one day he was there and the next day he suddenly vanished and nobody has been into his factory or cast eyes upon him ever since. Now Mr Wonka has offered five lucky children the chance to step inside the factory, five Golden Tickets hidden inside five bars of chocolate. All Charlie needs is one tiny, near-impossible stroke of luck.'),
(224, 'When the young orphan Sophie finds herself seemingly kidnapped by a strange, cloaked giant, initial alarm finally gives way to the deepest of friendships and the discovery of wisdom and courage in the smallest of places. Held aloft by Roald Dahl’s ceaseless invention and power of wordplay, The BFG ranks as one of his greatest triumphs and for over three decades has been a treasured part of children’s lives the world over.'),
(256, 'It’s a funny thing about mothers and fathers. Even when their own child is the most disgusting little blister you could ever imagine, they still think that he or she is wonderful\r\n\r\nThat might be true of most parents, but for Matilda Wormwood, it couldn’t be further from the truth. Matilda’s parents hardly notice her at all; they’re much more interested with fiddling customers at Mr Wormwood’s second-hand car business, playing bingo or eating their dinner in front of the TV. Even at school it’s not much better, the headmistress, Miss Trunchbull is a fearsome gorgon of a woman who likes nothing better than throwing small children out of the window at the smallest provocation.\r\n\r\nMatilda is no ordinary child though; Matilda is something special and she’s had enough with the grown-up’s bullying ways. With the help of her wonderful teacher Miss Honey, Matilda might just be able to change things for the better.'),
(368, 'How do you spot a real witch?\r\n\r\nListen carefully and I will tell you. A witch is very hard to spot because most of the time, they look just like ordinary people. Look closely though and you may be able to spot the signs; witches are bald as an egg, although they cover their heads with itchy wigs, they wear gloves to hide the talons they have where fingernails should be and beneath their shoes they hide stumps instead of toes.\r\n\r\nChildren should beware for what witches hate more than anything is a clean child, they can smell a clean child from a mile away and nothing stinks worse to a witch than a lovely, soapy child. To a witch, you probably smell like dog’s droppings and sewer water.\r\n\r\nNow the Grand High Witch has a plan to get rid of every child in England, can anybody stop her?');

-- --------------------------------------------------------

--
-- Stand-in structure for view `comedy_books`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `comedy_books`;
CREATE TABLE IF NOT EXISTS `comedy_books` (
`Book_Name` varchar(50)
,`book_genre` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_id` int(4) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address_line` varchar(30) NOT NULL,
  `Town` varchar(15) NOT NULL,
  `County` varchar(15) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Postcode` varchar(8) NOT NULL,
  PRIMARY KEY (`Customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `First_name`, `Last_name`, `gender`, `address_line`, `Town`, `County`, `Country`, `Postcode`) VALUES
(1, 'John', 'Doe', 'M', '209 Roden St', 'Belfast', 'Antrim', 'N.Ireland', 'BT12 5QB'),
(2, 'Jane', 'Roe', 'F', '12 St James\'s Place', 'Belfast', 'Antrim', 'N.Ireland', 'BT12 6EH'),
(3, 'Andrew', 'Brown', 'M', '27 Boucher Road', 'Belfast', 'Antrim', 'N.Ireland', 'BT12 6HR'),
(4, 'Mary', 'Smith', 'F', '105 St. James\'s Rd', 'Belfast', 'Antrim', 'N.Ireland', 'BT12 6EB');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

DROP TABLE IF EXISTS `customer_payment`;
CREATE TABLE IF NOT EXISTS `customer_payment` (
  `Payment_ID` int(5) NOT NULL,
  `Card_Number` int(16) NOT NULL,
  `Customer_ID` int(4) NOT NULL,
  `Payment_method_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Payment_ID`),
  UNIQUE KEY `Customer_ID` (`Customer_ID`,`Payment_method_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payment`
--

INSERT INTO `customer_payment` (`Payment_ID`, `Card_Number`, `Customer_ID`, `Payment_method_ID`) VALUES
(11111, 1234567891, 1, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `fantasy_books`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `fantasy_books`;
CREATE TABLE IF NOT EXISTS `fantasy_books` (
`Book_Name` varchar(50)
,`book_genre` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `fiction_books`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `fiction_books`;
CREATE TABLE IF NOT EXISTS `fiction_books` (
`Book_Name` varchar(50)
,`book_genre` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `humour_books`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `humour_books`;
CREATE TABLE IF NOT EXISTS `humour_books` (
`Book_Name` varchar(50)
,`book_genre` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Order_ID` int(4) NOT NULL,
  `Order_Date` date NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Customer_ID` int(4) NOT NULL,
  `Order_Status_ID` int(4) NOT NULL,
  PRIMARY KEY (`Order_ID`),
  UNIQUE KEY `Customer_ID` (`Customer_ID`,`Order_Status_ID`),
  KEY `Order_Status_ID` (`Order_Status_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Order_Date`, `Delivery_Date`, `Customer_ID`, `Order_Status_ID`) VALUES
(1000, '2021-03-24', '2021-03-31', 1, 1010);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

DROP TABLE IF EXISTS `order_status`;
CREATE TABLE IF NOT EXISTS `order_status` (
  `Order_Status_ID` int(4) NOT NULL,
  `Order_Status` varchar(15) NOT NULL,
  PRIMARY KEY (`Order_Status_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`Order_Status_ID`, `Order_Status`) VALUES
(1010, 'Processing'),
(2020, 'Dispatched'),
(3030, 'Delivering'),
(4040, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

DROP TABLE IF EXISTS `payment_method`;
CREATE TABLE IF NOT EXISTS `payment_method` (
  `Payment_Method_ID` int(5) NOT NULL,
  `Payment_method_Description` varchar(30) NOT NULL,
  PRIMARY KEY (`Payment_Method_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `Review_ID` int(4) NOT NULL,
  `Customer_ID` int(4) NOT NULL,
  `ISBN` int(15) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`Review_ID`),
  UNIQUE KEY `Customer_ID` (`Customer_ID`,`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `adventure_books`
--
DROP TABLE IF EXISTS `adventure_books`;

DROP VIEW IF EXISTS `adventure_books`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `adventure_books`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Genre` AS `book_genre` from `books` where (`books`.`Book_Genre` = 'Adventure') ;

-- --------------------------------------------------------

--
-- Structure for view `books_between_5_and_10`
--
DROP TABLE IF EXISTS `books_between_5_and_10`;

DROP VIEW IF EXISTS `books_between_5_and_10`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `books_between_5_and_10`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Price` AS `Book_Price` from `books` where ((`books`.`Book_Price` > 5.00) and (`books`.`Book_Price` < 10.00)) ;

-- --------------------------------------------------------

--
-- Structure for view `books_less_than_5`
--
DROP TABLE IF EXISTS `books_less_than_5`;

DROP VIEW IF EXISTS `books_less_than_5`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `books_less_than_5`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Price` AS `Book_Price` from `books` where (`books`.`Book_Price` < 5.00) ;

-- --------------------------------------------------------

--
-- Structure for view `comedy_books`
--
DROP TABLE IF EXISTS `comedy_books`;

DROP VIEW IF EXISTS `comedy_books`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comedy_books`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Genre` AS `book_genre` from `books` where (`books`.`Book_Genre` = 'Comedy') ;

-- --------------------------------------------------------

--
-- Structure for view `fantasy_books`
--
DROP TABLE IF EXISTS `fantasy_books`;

DROP VIEW IF EXISTS `fantasy_books`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fantasy_books`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Genre` AS `book_genre` from `books` where (`books`.`Book_Genre` = 'Fantasy') ;

-- --------------------------------------------------------

--
-- Structure for view `fiction_books`
--
DROP TABLE IF EXISTS `fiction_books`;

DROP VIEW IF EXISTS `fiction_books`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fiction_books`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Genre` AS `book_genre` from `books` where (`books`.`Book_Genre` = 'Fiction') ;

-- --------------------------------------------------------

--
-- Structure for view `humour_books`
--
DROP TABLE IF EXISTS `humour_books`;

DROP VIEW IF EXISTS `humour_books`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `humour_books`  AS  select `books`.`Book_Name` AS `Book_Name`,`books`.`Book_Genre` AS `book_genre` from `books` where (`books`.`Book_Genre` = 'Humour') ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
