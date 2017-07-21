←
 phpMyAdmin
HomeEmpty session dataphpMyAdmin documentationDocumentationNavigation panel settingsReload navigation panel
RecentFavorites
Collapse allUnlink from main panel
New
Expand/CollapseDatabase operationsinformation_schema
Expand/CollapseDatabase operationsmysql
Expand/CollapseDatabase operationsperformance_schema
Database operationstest
NewNew
Expand/CollapseStructuretask
Server: localhost:8889 »Database: test
Structure Structure
SQL SQL
Search Search
Query Query
Export Export
Import Import
Operations Operations
Privileges Privileges
Routines Routines
Events Events
Triggers Triggers
Designer Designer
Click on the bar to scroll to top of page
SQL Query ConsoleConsole
ascendingdescendingOrder:Debug SQLExecution orderTime takenOrder by:Group queries
OptionsSet default
Always expand query messages
Show query history at start
Show current browsing query
Execute queries on Enter and insert new line with Shift + Enter. To make this permanent, view settings.
Switch to dark theme
[ Back ]


-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 21, 2017 at 08:09 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `slug`, `status`) VALUES
(13, 'Buy salad and mayo', 'buy-salad-and-mayo', 'Completed'),
(14, 'Buy washing powder', 'buy-washing-powder', 'In Progress'),
(15, 'Buy milk', 'buy-milk', 'In Progress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
[ Back ]

Open new phpMyAdmin window