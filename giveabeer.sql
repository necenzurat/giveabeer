--
-- Table structure for table `beggers`
--

CREATE TABLE IF NOT EXISTS `beggers` (
  `user` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `beers` bigint(255) NOT NULL DEFAULT '0',
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;