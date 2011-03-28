--
-- Table structure for table `Quotes`
--

CREATE TABLE IF NOT EXISTS `Quotes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `Uploader` varchar(60) default NULL,
  `When` date NOT NULL,
  `Quote` varchar(10000) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Where` varchar(60) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `Uploader` (`Uploader`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `Name` varchar(60) NOT NULL,
  `Password` char(100) NOT NULL,
  `LastSignIn` date default NULL,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

