Create database test;

use test;

CREATE TABLE `pengguna` (
  `login` CHAR(30) NOT NULL,
  `pswd` CHAR(100) NOT NULL DEFAULT,
  `email` CHAR(100 NOT NULL),
  `deskripsi` CHAR(150) NOT NULL DEFAULT,
  PRIMARY KEY (`login`, `email`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;