

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `cuentas` (
  `id` int(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tdocumento` varchar(250) NOT NULL,
  `documento` int(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `dinero` (
  `id` int(11) NOT NULL,
  `dinero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `dinero`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cuentas`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


ALTER TABLE `dinero`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;


