CREATE TABLE IF NOT EXISTS `shoutbox` (
  `entryid` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `text` varchar(500) NOT NULL,
  `user` varchar(32) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;