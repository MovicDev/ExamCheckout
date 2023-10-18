--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `ject` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `ject_name` varchar(255) NOT NULL COMMENT 'ject name',
  `ject_email` double NOT NULL COMMENT 'ject email',
	 `ject_tele` double NOT NULL COMMENT 'ject tele',
  `ject_course` int(11) NOT NULL COMMENT 'ject course',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=64 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `vote` (`id`, `vote_name`, `vote_email`, `vote_tele`, `vote_course` ) VALUES
