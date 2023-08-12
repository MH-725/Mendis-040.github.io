-- Database: web

-- Create Table Statements

-- Table structure for the table `contact`

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Features that are added for the Table

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);



-- Records inserted for the `contact` table
INSERT INTO `contact` (`id`, `Name`, `Email`, `Message`) VALUES
(1, 'user 1', 'admin01@gmail.com', 'test1'),
(2, 'user 2', 'admin02@gmail.com', 'test2'),
(3, 'user 3', 'admin03@gmail.com', 'test3'),
(4, 'user 4', 'admin04@gmail.com', 'test4'),
(5, 'user 5', 'admin05@gmail.com','test5');