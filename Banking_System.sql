CREATE DATABASE  IF NOT EXISTS `nour_bank` ;
USE `nour_bank`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: nour_bank
-- ------------------------------------------------------
-- Server version	8.0.26
--
-- Table structure for table `all_users`
--

DROP TABLE IF EXISTS `all_users`;

CREATE TABLE `all_users` (
  `User_ID` int NOT NULL,
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
)
;




