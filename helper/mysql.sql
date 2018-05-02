
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `displayName` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `email`, `displayName`, `password`) VALUES
(1, 'root@163.com', 'root', '123'),
(2, 'new@new.com', 'New', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE tbl_places(place_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  place_name VARCHAR(20),
  addr_line1 VARCHAR(35),
  addr_line2 VARCHAR(35),
  open_time TIME,
  close_time TIME,
  add_info VARCHAR(35),
  add_info_url VARCHAR(35));

INSERT INTO tbl_places (place_name, addr_line1, addr_line2, open_time, close_time, add_info, add_info_url) VALUES
('Keller Hall', 'Minneapolis', 'Minnesota', '00:00:00', '23:59:59', 'CSE Department', 'https://cse.umn.edu'),
('Chipotle', '800 Washington Ave', 'Minnesota', '09:00:00', '22:00:00', 'Amazing Salad Place', 'https://www.chipotle.com'),
('Yosemite', 'Sierra Nevada', 'California', '08:00:00', '18:00:00', 'Trekking Place', ''),
('Afro Deli', 'Saint Paul', 'Minnesota', '10:00:00', '20:00:00', 'Delicious sandwich', 'http://www.afrodeli.com'),
('Blaze Pizza', 'Minneapolis', 'Minnesota', '12:00:00', '22:00:00', 'Amazing Pizza Place', 'http://www.blazepizza.com/');
