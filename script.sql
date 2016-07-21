create database crud;
use crud;


CREATE TABLE `alumno` (
  `codigo` int NOT NULL auto_increment primary key,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB 



INSERT INTO `alumno` (`codigo`, `nombres`, `apellidos`, `edad`, `avatar`)
 VALUES
('Pedro', 'Torres', 11, ''),
('Maria', 'rosa', 20, ''),
('Miguel ', 'Torres', 34, ''),
('maria', 'tello', 34, '');