-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 25, 2018 at 10:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `industry_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `industry_name`) VALUES
(1, 'Industry'),
(2, 'Accounting '),
(3, 'Airlines/Aviation'),
(4, 'Alternative Dispute Resolution'),
(5, 'Alternative Medicine'),
(6, 'Animation'),
(7, 'Apparel/Fashion'),
(8, 'Architecture/Planning'),
(9, 'Arts/Crafts'),
(10, 'Automotive'),
(11, 'Aviation/Aerospace'),
(12, 'Banking/Mortgage'),
(13, 'Biotechnology/Greentech'),
(14, 'Broadcast Media'),
(15, 'Building Materials'),
(16, 'Business Supplies/Equipment'),
(17, 'Capital Markets/Hedge Fund/Private Equity'),
(18, 'Chemicals'),
(19, 'Civic/Social Organization'),
(20, 'Civil Engineering'),
(21, 'Commercial Real Estate'),
(22, 'Computer Games'),
(23, 'Computer Hardware'),
(24, 'Computer Networking'),
(25, 'Computer Software/Engineering'),
(26, 'Computer/Network Security'),
(27, 'Construction'),
(28, 'Consumer Electronics'),
(29, 'Consumer Goods'),
(30, 'Consumer Services'),
(31, 'Cosmetics'),
(32, 'Dairy'),
(33, 'Defense/Space'),
(34, 'Design'),
(35, 'E-Learning'),
(36, 'Education Management'),
(37, 'Electrical/Electronic Manufacturing'),
(38, 'Entertainment/Movie Production'),
(39, 'Environmental Services'),
(40, 'Events Services'),
(41, 'Executive Office'),
(42, 'Facilities Services'),
(43, 'Farming'),
(44, 'Financial Services'),
(45, 'Fine Art'),
(46, 'Fishery'),
(47, 'Food Production'),
(48, 'Food/Beverages'),
(49, 'Fundraising'),
(50, 'Furniture'),
(51, 'Gambling/Casinos'),
(52, 'Glass/Ceramics/Concrete'),
(53, 'Government Administration'),
(54, 'Government Relations'),
(55, 'Graphic Design/Web Design'),
(56, 'Health/Fitness'),
(57, 'Higher Education/Acadamia'),
(58, 'Hospital/Health Care'),
(59, 'Hospitality'),
(60, 'Human Resources/HR'),
(61, 'Import/Export'),
(62, 'Individual/Family Services'),
(63, 'Industrial Automation'),
(64, 'Information Services'),
(65, 'Information Technology/IT'),
(66, 'Insurance'),
(67, 'International Affairs'),
(68, 'International Trade/Development'),
(69, 'Internet'),
(70, 'Investment Banking/Venture'),
(71, 'Investment Management/Hedge Fund/Private Equity'),
(72, 'Judiciary'),
(73, 'Law Enforcement'),
(74, 'Law Practice/Law Firms'),
(75, 'Legal Services'),
(76, 'Legislative Office'),
(77, 'Leisure/Travel'),
(78, 'Library'),
(79, 'Logistics/Procurement'),
(80, 'Luxury Goods/Jewelry'),
(81, 'Machinery'),
(82, 'Management Consulting'),
(83, 'Maritime'),
(84, 'Market Research'),
(85, 'Marketing/Advertising/Sales'),
(86, 'Mechanical or Industrial Engineering'),
(87, 'Media Production'),
(88, 'Medical Equipment'),
(89, 'Medical Practice'),
(90, 'Mental Health Care'),
(91, 'Military Industry'),
(92, 'Mining/Metals'),
(93, 'Motion Pictures/Film'),
(94, 'Museums/Institutions'),
(95, 'Music'),
(96, 'Nanotechnology'),
(97, 'Newspapers/Journalism'),
(98, 'Non-Profit/Volunteering'),
(99, 'Oil/Energy/Solar/Greentech'),
(100, 'Online Publishing'),
(101, 'Other Industry'),
(102, 'Outsourcing/Offshoring'),
(103, 'Package/Freight Delivery'),
(104, 'Packaging/Containers'),
(105, 'Paper/Forest Products'),
(106, 'Performing Arts'),
(107, 'Pharmaceuticals'),
(108, 'Philanthropy'),
(109, 'Photography'),
(110, 'Plastics'),
(111, 'Political Organization'),
(112, 'Primary/Secondary Education'),
(113, 'Printing'),
(114, 'Professional Training'),
(115, 'Program Development'),
(116, 'Public Relations/PR'),
(117, 'Public Safety'),
(118, 'Publishing Industry'),
(119, 'Railroad Manufacture'),
(120, 'Ranching'),
(121, 'Real Estate/Mortgage'),
(122, 'Recreational Facilities/Services'),
(123, 'Religious Institutions'),
(124, 'Renewables/Environment'),
(125, 'Research Industry'),
(126, 'Restaurants'),
(127, 'Retail Industry'),
(128, 'Security/Investigations'),
(129, 'Semiconductors'),
(130, 'Shipbuilding'),
(131, 'Sporting Goods'),
(132, 'Sports'),
(133, 'Staffing/Recruiting'),
(134, 'Supermarkets'),
(135, 'Telecommunications'),
(136, 'Textiles'),
(137, 'Think Tanks'),
(138, 'Tobacco'),
(139, 'Translation/Localization'),
(140, 'Transportation'),
(141, 'Utilities'),
(142, 'Venture Capital/VC'),
(143, 'Veterinary'),
(144, 'Warehousing'),
(145, 'Wholesale'),
(146, 'Wine/Spirits'),
(147, 'Wireless'),
(148, 'Writing/Editing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
