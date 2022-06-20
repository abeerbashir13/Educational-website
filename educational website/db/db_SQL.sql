-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: June 18, 2022 at 10:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


 --
 -- Database: `learn` 


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password` , `role`) VALUES
(1, 'Abeer', 'bashir', 'abeer@gmail.com', 123, 1);



CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `courseId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `catId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



/* Indexes for table `users` */

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


/* Indexes for table `course` */

ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);


/* Indexes for table `lecture`*/

ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

/* Indexes for table `category`*/

ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);


/* Indexes for table `users` */

ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

/* AUTO_INCREMENT for dumped tables

 AUTO_INCREMENT for table `users`
*/

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/* AUTO_INCREMENT for table `course` */

ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/* AUTO_INCREMENT for table `lecture` */

ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/* AUTO_INCREMENT for table `category` */

ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


 /*AUTO_INCREMENT for table `teacher`*/

ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;





