-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: door
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Electronics`
--

DROP TABLE IF EXISTS `Electronics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Electronics` (
  `project_name` text,
  `detail` text,
  `completion_detail` text,
  `members` text,
  `link_to_project` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Electronics`
--

LOCK TABLES `Electronics` WRITE;
/*!40000 ALTER TABLE `Electronics` DISABLE KEYS */;
INSERT INTO `Electronics` VALUES ('Water Level Controller','Using 8051 Microcontroller we controlled the water level','completed','Anonymous','OPEN SOURCE'),('MY MOVE','We used Arduino and microcontroller along with RF-technology to move mouse with hand gesture','completed','Himanshu Jaideep Deepu','OPEN SOURCE');
/*!40000 ALTER TABLE `Electronics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Energy_Resources`
--

DROP TABLE IF EXISTS `Energy_Resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Energy_Resources` (
  `project_name` text,
  `detail` text,
  `completion_detail` text,
  `members` text,
  `link_to_project` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Energy_Resources`
--

LOCK TABLES `Energy_Resources` WRITE;
/*!40000 ALTER TABLE `Energy_Resources` DISABLE KEYS */;
INSERT INTO `Energy_Resources` VALUES ('Solar Labs','AI powered software for solar system Designing','currently going','Alumni of IIT MANDI','NOT OPEN SOURCE'),('Solar Inverter for Home','Solar inverter uses solar energy and stores it for further use','completed but better designs are most welcome','Anonymous','OPEN SOURCE');
/*!40000 ALTER TABLE `Energy_Resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ideas`
--

DROP TABLE IF EXISTS `Ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ideas` (
  `Name` text,
  `Email` text,
  `Topic` text,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ideas`
--

LOCK TABLES `Ideas` WRITE;
/*!40000 ALTER TABLE `Ideas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Machine_Learning`
--

DROP TABLE IF EXISTS `Machine_Learning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Machine_Learning` (
  `project_name` text,
  `detail` text,
  `completion_detail` text,
  `members` text,
  `link_to_project` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Machine_Learning`
--

LOCK TABLES `Machine_Learning` WRITE;
/*!40000 ALTER TABLE `Machine_Learning` DISABLE KEYS */;
INSERT INTO `Machine_Learning` VALUES (' Iris Flowers Classification','From a big data about flowers you need to teach the machine using ML algorithms and then the machine needs to identify the species of flower','completed','Hitesh Kanodia','OPEN SOURCE'),('Deepfire','Model produced musically sound beats and synthesize a rap track given a backing track','completed','stanford university students','OPEN SOURCE'),('Music Genre Classification via ML','Classification of songs based on genre achieved more than 30% accuracy compared to previously proposed models','completed','stanford university students','OPEN SOURCE'),('Automated Curriculum Learning','We propose a methodology for automating curriculum learning using simple classifiers to estimate the difficulty of training examples and therby automatically design a curriculum','completed','stanford university students','OPEN SOURCE');
/*!40000 ALTER TABLE `Machine_Learning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computer_science`
--

DROP TABLE IF EXISTS `computer_science`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `computer_science` (
  `project_name` text,
  `detail` text,
  `completion_detail` text,
  `members` text,
  `link_to_project` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computer_science`
--

LOCK TABLES `computer_science` WRITE;
/*!40000 ALTER TABLE `computer_science` DISABLE KEYS */;
INSERT INTO `computer_science` VALUES ('Voting system','Digital voting system that requires login credentials and will help to recognise fraud','completed','Himanshu','NOT OPEN SOURCE'),('Face Detection using OpenCV','Detects faces in live stream from webcam using OpenCV library','completed','Shashwat Jain','NOT OPEN SOURCE'),('Simple Ball Game using OpenGL','Using 2D and 3D graphics of OpenGL made a simple game to catch a ball','completed','Aaditya Kumar','NOT OPEN SOURCE'),('Web Based online Blood Donatiion system','You need to build a system that records blood grup,blood sugar and other critical data and inform them about they can donate blood or not','pending','No one yet working','NOT OPEN SOURCE');
/*!40000 ALTER TABLE `computer_science` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-18 19:49:50
