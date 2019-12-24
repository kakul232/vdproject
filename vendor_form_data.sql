-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 01:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendor_form_data`
--

CREATE TABLE `vendor_form_data` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `date_enrollment` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `teliphone` varchar(20) NOT NULL,
  `orgname` varchar(200) NOT NULL,
  `regadd` varchar(200) NOT NULL,
  `officeno` varchar(200) NOT NULL,
  `acc_email` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `file` varchar(1000) DEFAULT NULL,
  `file1` varchar(1000) DEFAULT NULL,
  `file2` varchar(1000) NOT NULL,
  `file3` varchar(500) NOT NULL,
  `file4` varchar(500) NOT NULL,
  `file5` varchar(500) NOT NULL,
  `file6` varchar(500) NOT NULL,
  `file7` varchar(500) NOT NULL,
  `file8` varchar(500) NOT NULL,
  `file9` varchar(500) NOT NULL,
  `file10` varchar(500) NOT NULL,
  `file11` varchar(500) NOT NULL,
  `file12` varchar(500) NOT NULL,
  `file13` varchar(500) NOT NULL,
  `file14` varchar(500) NOT NULL,
  `file15` varchar(500) NOT NULL,
  `file16` varchar(500) NOT NULL,
  `file17` varchar(500) NOT NULL,
  `gst` varchar(200) NOT NULL,
  `cst` varchar(200) NOT NULL,
  `pan` varchar(200) NOT NULL,
  `vat_no` varchar(200) NOT NULL,
  `feesamount` varchar(200) NOT NULL,
  `gstamount` varchar(200) NOT NULL,
  `netamount` varchar(200) NOT NULL,
  `bankname` varchar(200) NOT NULL,
  `branchname` varchar(200) NOT NULL,
  `accountname` varchar(200) NOT NULL,
  `accountno` varchar(100) NOT NULL,
  `retypeaccount` varchar(100) NOT NULL,
  `ifsccode` varchar(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `representive_name` varchar(100) NOT NULL,
  `select1` varchar(10) NOT NULL,
  `gold_purity` varchar(500) NOT NULL,
  `select2` varchar(10) NOT NULL,
  `name_of_certificate` varchar(500) NOT NULL,
  `select3` varchar(10) NOT NULL,
  `name_of_logistics_service_providers` varchar(500) NOT NULL,
  `select4` varchar(10) NOT NULL,
  `name_of_jewellary` varchar(500) NOT NULL,
  `terms` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_form_data`
--

INSERT INTO `vendor_form_data` (`id`, `user_id`, `date_enrollment`, `name`, `email`, `dob`, `mobile`, `teliphone`, `orgname`, `regadd`, `officeno`, `acc_email`, `type`, `file`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`, `file10`, `file11`, `file12`, `file13`, `file14`, `file15`, `file16`, `file17`, `gst`, `cst`, `pan`, `vat_no`, `feesamount`, `gstamount`, `netamount`, `bankname`, `branchname`, `accountname`, `accountno`, `retypeaccount`, `ifsccode`, `package_name`, `representive_name`, `select1`, `gold_purity`, `select2`, `name_of_certificate`, `select3`, `name_of_logistics_service_providers`, `select4`, `name_of_jewellary`, `terms`) VALUES
(21, 'VITAAZ-21', '17-12-2019:17:06:17', 'Pooja nakhale', 'poojanakhale20@gmail.com', '2019-12-01', '9834331201', '2345678', 'sdfgjhk', 'TUIIO', '23456789', 'sdfg@gmail.com', 'company', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dedfdfed', 'xcvn3455676', '3456789', 'fgfvghjnhkm45678', '345678', '34567', '234567', 'dfghjn', 'xcvbnm', 'gujhio', '1234', '', 'cgv12', '', '', '', '', '', '', '', '', '', '', 'yes'),
(22, 'VITAAZ-22', '17-12-2019:17:25:30', 'aarzoo', 'manish.singh@vdnetworks.com', '2019-12-13', '8484077763', '758769', 'sdfgjhk', 'zsxdcvbnm', '23456789', 'sdfg@gmail.com', 'individual', '56615-bg.jpg', '6324-bg_body.jpg', '65285-bg_body.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dedfdfed', 'xcvn3455676', '34567', 'ert576y7', '345678', '34567', '234567', 'fjlkh', 'xcvbnm', 'zxcvbnm', '0000', '', 'HJKH', '', '', '', '', '', '', '', '', '', '', 'yes'),
(23, 'VITAAZ-23', '17-12-2019:17:38:10', 'sachhu', 'vitaazdiamond@gmail.com', '2019-12-05', '', '', '', '', '', '', 'individual', '22587-form2.php', '98937-formserver.php', '15262-bg_body.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes'),
(24, 'VITAAZ00-24', '18-12-2019:10:55:29', 'dds dsa', 'amoli.barbhaya@vdnetworks.com', '0000-00-00', '21412424124', '21412424124', 'VD NETWORKS INDIA PRIVATE LIMITED', 'dasdd', '21412424124', 'a@d', 'company', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '15.29', '5523', '6436246', '536', '34', '445', '5443', ' ICICI Bank', 'sdgsd', 'sdgsg', '123', '', 'sgg', '', '', '', '', '', '', '', '', '', '', 'yes'),
(25, 'VITAAZ00-25', '18-12-2019:11:18:37', 'dsff', 'vikash1up@gmail.com', '2019-12-02', '35235', '325235', 'cvxcv', 'Unit 313, SS Plaza, Sector 47', '455', 'fdscf', 'company', '80283-', '39894-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6346', '646', '4646', '646', '65', '45', '110', 'ICICI BANK', 'faf', 'sfdsdf', '123', '', 'sdgsdg', '', '', '', '', '', '', '', '', '', '', 'yes'),
(26, 'VITAAZ00-26', '18-12-2019:11:20:34', 'Amoli1', 'a@gmail2.com', '2019-12-02', '79090', '78998', 'cxzxc', 'Unit 313, SS Plaza, Sector 47', '43548', 'dsad', 'company', '11111-', '70481-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4643636', '6346', '45435', '5435', '454', '5345', '4545', ' ICICI Bank', 'fsdf', 'sfdsdf', '123', '', 'ewe', '', '', '', '', '', '', '', '', '', '', 'yes'),
(27, 'VITAAZ00-27', '18-12-2019:11:25:33', 'pooja', 'p@gma', '2019-12-01', '343254', '53325', 'cxzxc', 'Unit 313, SS Plaza, Sector 47', '21412424124', '', 'individual', '74080-', '44902-', '44902-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '325235', 'sdfgdg', '35325', '433', '4', '4', '45', 'ICICI BANK', 'sdgsd', 'gfdg', '123', '', 'safs', '', '', '', '', '', '', '', '', '', '', 'yes'),
(28, 'VITAAZ00-28', '18-12-2019:11:27:10', 'asd@', 'a23@', '0000-00-00', '12345', '3456', 'cxzxc', 'Unit 313, SS Plaza, Sector 47', '2356', 'a@g', 'company', '62919-', '47986-', '47986-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '466', '1234', '2478', '4677', '456', '565', '636', 'sfasdf', 'fsdf', 'gfdg', '123', '', 'frdsaf', '', '', '', '', '', '', '', '', '', '', 'yes'),
(29, 'VITAAZ00-29', '18-12-2019:12:06:49', 'ad', 'dharti.patel@vdnetworks.com', '2019-12-02', '35325', '423', 'cvxcv', 'Unit 313, SS Plaza, Sector 47', '32354', 'dsad', 'individual', '62605-', '42552-', '91180-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '545', '523', '235235', '5235', '45', '5435', '54355', 'sfasdf', 'faf', 'gfdg', '123', '', 'sgg', '', '', '', '', '', '', '', '', '', '', 'yes'),
(30, 'VITAAZ00-30', '18-12-2019:12:22:01', 'ghfgh', 'vikash1up@gmail.com', '2019-12-10', '46466', '436', 'cxzxc', 'Unit 313, SS Plaza, Sector 47', '21412424124', 'a@d', 'individual', '55550-', '11681-', '87339-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5325', '', '3535', '', '43', '3', '53', ' ICICI Bank', 'sdgsd', 'gfdg', '123', '', 'dgsg', '', '', '', '', '', '', '', '', '', '', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor_form_data`
--
ALTER TABLE `vendor_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor_form_data`
--
ALTER TABLE `vendor_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
