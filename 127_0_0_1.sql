-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 01:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`, `input_transformation`, `input_transformation_options`) VALUES
(1, 'sm', 'enquiry', 'Refrence', '', 'text_plain', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"sm","table":"home"},{"db":"sm","table":"registration"},{"db":"sm","table":"feedback"},{"db":"sm","table":"enquiry"},{"db":"sm","table":"sulekha"},{"db":"sm","table":"Home"},{"db":"sm","table":"login"},{"db":"sm","table":"Registration"},{"db":"sm","table":"Enquiry"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'sm', 'enquiry', '{"sorted_col":"`enquiry`.`JoiningDate`  DESC"}', '2017-01-05 06:53:46'),
('root', 'sm', 'home', '{"sorted_col":"`CallDate` ASC"}', '2017-02-17 06:09:01'),
('root', 'sm', 'login', '{"sorted_col":"`login`.`password` ASC"}', '2016-12-27 12:33:48'),
('root', 'sm', 'registration', '{"sorted_col":"`Fees` DESC"}', '2017-01-07 12:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-11-04 04:35:58', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `sm`
--
CREATE DATABASE IF NOT EXISTS `sm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sm`;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `RegistrationNo` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` int(13) NOT NULL,
  `College` text NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `PreferredTime` time(6) NOT NULL,
  `JoiningDate` int(13) NOT NULL,
  `Refrence` text NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`RegistrationNo`, `Name`, `Course`, `Email`, `ContactNo`, `College`, `Qualification`, `Semester`, `Address`, `PreferredTime`, `JoiningDate`, `Refrence`, `Feedback`) VALUES
(49, 'niru', 'java', 's@s.com', 2147483647, 'HR', 'B.E', 'completed', 'Geeta Bhawan', '11:00:00.000000', 12, 'Herself', 'WEb Bhumi'),
(50, 'nirupama', 'java', 's@s.com', 2147483647, 'HR', 'B.E', 'completed', 'Geeta Bhawan', '11:00:00.000000', 12, 'Herself', 'WEb Bhumi'),
(51, 'nirupama', 'C&C++', 'niru@webbhumi.com', 29817453, 'owner', 'B.E in IT', 'job', 'Geeta Bhawan Sq.', '10:00:00.000000', 12, 'Her Dream', 'WEb Bhumi must be best'),
(52, 'Aruna', 'C&C++', 'aruna@webbhumi.com', 986874287, 'doveloper', 'MCA', '3rd', 'coral palace', '09:00:00.000000', 7, 'Abhishek', 'This is the best ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `RegistrationNo` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `updateDate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `RegistrationNo` int(5) NOT NULL,
  `Name` text NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `BatchTime` text,
  `College` varchar(100) DEFAULT NULL,
  `Qualification` text,
  `Email` text,
  `Date` varchar(10) NOT NULL,
  `CallDate` varchar(10) NOT NULL,
  `Address` text,
  `Fee` varchar(20) DEFAULT NULL,
  `Refrence` text NOT NULL,
  `PaidFee` varchar(20) DEFAULT NULL,
  `NID` varchar(10) NOT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Feedback` text NOT NULL,
  `UserName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`RegistrationNo`, `Name`, `ContactNo`, `Course`, `BatchTime`, `College`, `Qualification`, `Email`, `Date`, `CallDate`, `Address`, `Fee`, `Refrence`, `PaidFee`, `NID`, `Status`, `Feedback`, `UserName`) VALUES
(2, 'aruna', 1234567890, 'HTML', '12:00', 'MRSC', 'MCA', 'arunasharma2723@gmailcom', '', '2017-12-25', 'mayank blue water park toad', NULL, 'DXA', NULL, '', NULL, 'web bhumi', ''),
(3, 'niru', 1234567891, 'HTML', '12:30', 'pta nhi', 'BE', 'niru@gmail.com', '', '2016-04-23', 'web bhumi', NULL, 'her self', NULL, '', NULL, 'I am the best', ''),
(4, 'mayank', 1234567892, 'angulerJS', '12:30', 'IET', 'M.tech', 'mayank@webbhumi.com', '', '2016-04-19', 'pta nhi', NULL, 'prasanna sir', NULL, '', NULL, 'I am always available', ''),
(6, 'jayvika', 1234567893, ' vhrfnv', '12:30', 'dds', 'MCA', 'bsjxfxv@gmail.com', '04-02-17', '2016-11-28', 'f6cufscsv', NULL, 'her self', NULL, '', NULL, 'web bhumi', ''),
(7, 'jayvika', 1234567893, ' vhrfnv', '12:30', 'dds', 'MCA', 'bsjxfxv@gmail.com', '04-02-17', '2016-11-28', 'f6cufscsv', NULL, 'her self', NULL, '', NULL, 'web bhumi', ''),
(14, 'niru', 1234567894, 'JS', '11:00', 'vhjthnvnhtfhnvmnbj', 'ky7cjg', 'bsjxfxv@gmail.com', '06-02-17', '2017-01-28', 'f6cufscsv', NULL, 'tfhhm', NULL, '', NULL, 'web bhumi', 'aruna'),
(15, 'niru', 1234567894, 'JS', '11:00', 'vhjthnvnhtfhnvmnbj', 'ky7cjg', 'bsjxfxv@gmail.com', '07-02-17', '2017-01-28', 'f6cufscsv', NULL, 'tfhhm', NULL, '', NULL, 'web bhumi', 'aruna'),
(94, '', 1234567892, 'angulerJS', NULL, 'IET', 'mca', 'mayank@webbhumi.com', '', '', 'mayank blue water park toad', '5000', 'prasanna sir', '', '12/3/17', NULL, 'join', ''),
(96, '', 1234567892, 'angulerJS', NULL, 'IET', 'M tec', 'mayank@webbhumi.com', '', '', 'asshgh', '8000', 'prasanna sir', '', '5/04/17', NULL, 'join', ''),
(97, '', 1234567892, 'angulerJS', NULL, 'IET', 'M tec', 'mayank@webbhumi.com', '', '', 'asshgh', '8000', 'prasanna sir', '', '5/04/17', NULL, 'join', ''),
(98, '', 1234567892, 'angulerJS', NULL, 'IET', 'M.tech', 'mayank@webbhumi.com', '', '', 'ajhakbbs', '9999', 'prasanna sir', '', '12/3/17', NULL, 'ghfghv', ''),
(99, '', 0, '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', ''),
(100, '', 1234567892, 'angulerJS', NULL, 'IET', 'M.tech', 'mayank@webbhumi.com', '', '', 'f6cufscsv', '8000', 'prasanna sir', '', '12/3/17', NULL, 'jgfjygfjygu', ''),
(101, '', 1234567892, 'angulerJS', NULL, 'IET', 'M.tech', 'mayank@webbhumi.com', '', '', 'f6cufscsv', '8000', 'prasanna sir', '8000', '12/3/17', NULL, 'jgfjygfjygu', ''),
(102, '', 1234567892, 'angulerJS', NULL, 'IET', 'BA LLB', 'mayank@webbhumi.com', '', '', 'web bhumi', '8000', 'prasanna sir', '4000', '5/04/17', NULL, 'gcfyfjhgvjhvbjh k jhh uhu hu', ''),
(103, '', 0, '', 'aruna', '', '', '', '17-02-17', '', '', '', '', '', '', NULL, '', ''),
(104, '', 1234567894, 'JS', 'aruna', 'vhjthnvnhtfhnvmnbj', 'tg', 'bsjxfxv@gmail.com', '17-02-17', '', 'dh', '9999', 'tfhhm', '909', '5/04/17', NULL, 'gytagv', '67'),
(105, '', 1234567894, 'JS', '63', 'vhjthnvnhtfhnvmnbj', 'MA', 'bsjxfxv@gmail.com', '17-02-17', '', 'delhi', '9999', 'tfhhm', '909', '5/04/17', NULL, 'utgcftrhfc', 'aruna'),
(106, '', 0, '', '', '', '', '', '', '', '', NULL, '', NULL, '', NULL, '', ''),
(107, '', 0, '', '', '', '', '', '', '', '', NULL, '', NULL, '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `UserName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `UserName`) VALUES
('arunasharma2723@gmail.com', 'aru', 'aruna'),
('mayankmandloi009@gmail.com', '*19', 'Mayank'),
('nirupamatandi14@gmail.com', 'niru', 'nirupama');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `RegistrationNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ContactNo` int(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Fees` int(10) NOT NULL,
  `Installment1` int(10) NOT NULL,
  `submissionDate1` date NOT NULL,
  `Installment2` int(11) NOT NULL,
  `submissionDate2` date NOT NULL,
  `College` text,
  `Qualification` text NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Refrence` text,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`RegistrationNo`, `Name`, `ContactNo`, `Email`, `Address`, `Course`, `Fees`, `Installment1`, `submissionDate1`, `Installment2`, `submissionDate2`, `College`, `Qualification`, `Semester`, `Refrence`, `Feedback`) VALUES
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'sd', 0, 'jtyfhn@gmail.com', 'buyfdcjn', 'jgfdyrtgfvbc', 0, 0, '0000-00-00', 0, '0000-00-00', 'vytrfhc', 'vghjfcn', 'vtfcjm', 'tfhhm', 'ytghjhu'),
(0, 'ojisahcsak', 24333, 'bsjxfxv@gmail.com', 'f6cufscsv', 'hjtjwysg', 0, 0, '0000-00-00', 0, '0000-00-00', 'guegfcjchv n', 'ky7cjg', 'jkysjgcbmk', 'DXA', 'bjysatxfjgmnx,k'),
(0, 'ojisahcsak', 24333, 'bsjxfxv@gmail.com', 'f6cufscsv', 'hjtjwysg', 0, 0, '0000-00-00', 0, '0000-00-00', 'guegfcjchv n', 'ky7cjg', 'jkysjgcbmk', 'DXA', 'bjysatxfjgmnx,k'),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', 'hyrfn', 'mcstu6yjgv', '', ''),
(0, 'niru', 0, 's@s.com', 'vhgdhnh', 'afhhhha', 978, 131, '0000-00-00', 24, '0000-00-00', 'cgrytfcxt4', 'hyrfn', 'vhyrhfvjut', 'fhbfd', 'fgdfbfcvnghn'),
(0, 'niru', 111111, 's@s.com', 'vhgdhnh', 'afhhhha', 978, 131, '0000-00-00', 24, '0000-00-00', 'cgrytfcxt4', 'hyrfn', 'vhyrhfvjut', 'fhbfd', 'fgdfbfcvnghn'),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sulekha`
--

CREATE TABLE `sulekha` (
  `Name` text NOT NULL,
  `ContactNo` text NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Reference` varchar(20) NOT NULL,
  `Feedback` text NOT NULL,
  `username` text NOT NULL,
  `Date` text NOT NULL,
  `CallDate` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`RegistrationNo`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `RegistrationNo` (`RegistrationNo`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`RegistrationNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `RegistrationNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
