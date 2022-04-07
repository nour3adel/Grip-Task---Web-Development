CREATE DATABASE  IF NOT EXISTS `nour_bank` ;
USE `nour_bank`;


-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: nour_bank
--
-- ------------------------------------------------------
-- Server version	8.0.26
--
-- Table structure for table `all_users`
--
DROP TABLE IF EXISTS `all_users`;

CREATE TABLE `all_users` (
  `USER_ID` int NOT NULL,
  `NAME` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` int DEFAULT NULL,
  PRIMARY KEY (`User_ID`)
) 

--
-- Table structure for table `transaction_history`
--

DROP TABLE IF EXISTS `transaction_history`;

CREATE TABLE `transaction_history` (

  `SNo` int NOT NULL AUTO_INCREMENT,
  `Sender_Name` varchar(25) DEFAULT NULL,
  `Receiver_Name` varchar(25) DEFAULT NULL,
  `Amount` int unsigned DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`SNo`)
);
-- ------------------------------------------------------
-- ------------------------------------------------------
-- ------------------------------------------------------
-- ------------------------------------------------------

Alter TABLE 'all_users' (

  'USER_ID' int(11) NOT NULL AUTO_INCREMENT;
)
-- ------------------------------------------------------
-- ------------------------------------------------------
-- ------------------------------------------------------
-- ------------------------------------------------------

INSERT INTO `all_users`(`USER_ID`, `NAME`, `Email`, `Balance`)

 VALUES (1,'Nour','Nour3del145@gmail.com',10000)
 VALUES (2,'Saif','Saif56@gmail.com',1520)
 VALUES (3,'mohamed','mohamed12@gmail.com',14632)
 VALUES (4,'ahmed','ahmed89@gmail.com',17853)
 VALUES (5,'kareem','kareem10@gmail.com',78286)

 -- ------------------------------------------------------
-- ------------------------------------------------------
-- ------------------------------------------------------
-- ------------------------------------------------------

INSERT INTO `transaction_history`(`SNo`, `Sender_Name`, `Receiver_Name`, `Amount`, `Date`)
 VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')