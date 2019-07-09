SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `shoutbox` (
  `entryid` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `text` varchar(500) NOT NULL,
  `user` varchar(32) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
