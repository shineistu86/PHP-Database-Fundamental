CREATE DATABASE db_students;
USE db_students;


CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `students` (`id`, `fullname`, `nim`) VALUES
(1, 'Budi Santoso', '123456789'),
(2, 'Ani Lestari', '123456790'),
(3, 'Rudi Hartono', '123456791'),
(4, 'Siti Nurhaliza', '123456792'),
(5, 'Agus Salim', '123456793'),
(6, 'Dewi Kartika', '123456794'),
(7, 'Joko Prasetyo', '123456795'),
(8, 'Lina Marlina', '123456796'),
(9, 'Ahmad Fauzi', '123456797'),
(10, 'Maya Sari', '123456798');
