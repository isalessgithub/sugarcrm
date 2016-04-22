-- MySQL dump 10.13  Distrib 5.5.25a, for osx10.5 (i386)
--
-- Host: localhost    Database: sugar_professional
-- ------------------------------------------------------
-- Server version	5.5.25a

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` char(36) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `account_type` varchar(50) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `annual_revenue` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `billing_address_street` varchar(150) DEFAULT NULL,
  `billing_address_city` varchar(100) DEFAULT NULL,
  `billing_address_state` varchar(100) DEFAULT NULL,
  `billing_address_postalcode` varchar(20) DEFAULT NULL,
  `billing_address_country` varchar(255) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `phone_office` varchar(100) DEFAULT NULL,
  `phone_alternate` varchar(100) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `ownership` varchar(100) DEFAULT NULL,
  `employees` varchar(10) DEFAULT NULL,
  `ticker_symbol` varchar(10) DEFAULT NULL,
  `shipping_address_street` varchar(150) DEFAULT NULL,
  `shipping_address_city` varchar(100) DEFAULT NULL,
  `shipping_address_state` varchar(100) DEFAULT NULL,
  `shipping_address_postalcode` varchar(20) DEFAULT NULL,
  `shipping_address_country` varchar(255) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `sic_code` varchar(10) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_accounts_tmst_id` (`team_set_id`),
  KEY `idx_accnt_id_del` (`id`,`deleted`),
  KEY `idx_accnt_name_del` (`name`,`deleted`),
  KEY `idx_accnt_assigned_del` (`deleted`,`assigned_user_id`),
  KEY `idx_accnt_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts_audit`
--

DROP TABLE IF EXISTS `accounts_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_accounts_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_audit`
--

LOCK TABLES `accounts_audit` WRITE;
/*!40000 ALTER TABLE `accounts_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts_bugs`
--

DROP TABLE IF EXISTS `accounts_bugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts_bugs` (
  `id` varchar(36) NOT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  `bug_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_acc_bug_acc` (`account_id`),
  KEY `idx_acc_bug_bug` (`bug_id`),
  KEY `idx_account_bug` (`account_id`,`bug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_bugs`
--

LOCK TABLES `accounts_bugs` WRITE;
/*!40000 ALTER TABLE `accounts_bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts_cases`
--

DROP TABLE IF EXISTS `accounts_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts_cases` (
  `id` varchar(36) NOT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  `case_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_acc_case_acc` (`account_id`),
  KEY `idx_acc_acc_case` (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_cases`
--

LOCK TABLES `accounts_cases` WRITE;
/*!40000 ALTER TABLE `accounts_cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts_contacts`
--

DROP TABLE IF EXISTS `accounts_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts_contacts` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_account_contact` (`account_id`,`contact_id`),
  KEY `idx_contid_del_accid` (`contact_id`,`deleted`,`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_contacts`
--

LOCK TABLES `accounts_contacts` WRITE;
/*!40000 ALTER TABLE `accounts_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts_opportunities`
--

DROP TABLE IF EXISTS `accounts_opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts_opportunities` (
  `id` varchar(36) NOT NULL,
  `opportunity_id` varchar(36) DEFAULT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_account_opportunity` (`account_id`,`opportunity_id`),
  KEY `idx_oppid_del_accid` (`opportunity_id`,`deleted`,`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_opportunities`
--

LOCK TABLES `accounts_opportunities` WRITE;
/*!40000 ALTER TABLE `accounts_opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_actions`
--

DROP TABLE IF EXISTS `acl_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_actions` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `acltype` varchar(100) DEFAULT NULL,
  `aclaccess` int(3) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aclaction_id_del` (`id`,`deleted`),
  KEY `idx_category_name` (`category`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_actions`
--

LOCK TABLES `acl_actions` WRITE;
/*!40000 ALTER TABLE `acl_actions` DISABLE KEYS */;
INSERT INTO `acl_actions` VALUES ('10452762-949b-16e9-397c-510bec060415','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Notifications','module',90,0),('1092d709-8ca7-99da-bb7d-510bec8ec906','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Notifications','module',90,0),('10ef9605-fa6e-b226-37bd-510becbad830','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Notifications','module',90,0),('1201096e-a37e-ce08-ca79-510bec3074bf','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','TrackerSessions','TrackerSession',-99,0),('156c00c8-8ae6-0e5f-f1f4-510bec981d6a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','TrackerSessions','TrackerSession',-99,0),('16fb8b9b-3eb6-6fa0-9e86-510becaeb734','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','EAPM','module',1,0),('17611d49-4221-20ec-a9d6-510becf72792','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','EAPM','module',89,0),('17b8c9d2-7569-ef8e-331e-510becfb79d4','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','EAPM','module',90,0),('17ff95ae-acdc-b700-c333-510becc2ab8f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','EAPM','module',90,0),('1864a738-01b7-3f7c-bbb0-510bec76545b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','EAPM','module',90,0),('18aaaa0d-c7e8-05a6-31f7-510bece48978','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','EAPM','module',90,0),('18f14520-f06a-9ef6-093e-510bec99a56c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','EAPM','module',90,0),('19396801-82fd-4bbe-57da-510beca7f575','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','EAPM','module',90,0),('1980025c-f830-ffc9-a828-510beced082e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','TrackerSessions','TrackerSession',-99,0),('19864922-efd9-8740-1a59-510bec8efb2d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','EAPM','module',90,0),('1ed6037d-0597-fcb0-7ff5-510beca6b597','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','TrackerSessions','TrackerSession',-99,0),('229f0378-eb2b-7c1c-bdda-510bec2d992b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','TrackerSessions','TrackerSession',-99,0),('264b0fbb-eadc-6b03-3f89-510becb6e259','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','TrackerSessions','TrackerSession',90,0),('2aa203fc-a5d1-1939-82a4-510bec297c00','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','TrackerPerfs','TrackerPerf',-99,0),('2c4d4847-7207-e84d-e36a-510bec3f7bb5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Leads','module',1,0),('2dd05c7f-9772-33e0-4ff3-510bec09880e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Leads','module',89,0),('2de6be77-1698-85bd-c312-510becc20e6f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Documents','module',1,0),('2e2da28a-b0f2-7223-35e3-510bec8162b1','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Documents','module',89,0),('2e437253-8cd1-b26d-091d-510bec389153','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Leads','module',90,0),('2e5b0cba-f0e3-ac5f-6f74-510bec6bcac5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','TrackerPerfs','TrackerPerf',-99,0),('2e698730-360a-c911-961e-510becaa1cb8','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Documents','module',90,0),('2ea7b36f-a41b-2661-3c36-510becf6a18f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Leads','module',90,0),('2ea80043-6db0-b4f3-a04b-510bec257930','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Documents','module',90,0),('2ee1a921-ce2c-5888-9183-510bec837fb6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Documents','module',90,0),('2f19e125-074f-2726-c49e-510bec0f0dc6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Documents','module',90,0),('2f21e6b3-9e48-4a24-85be-510bec20da3e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Leads','module',90,0),('2f5153a6-8b78-e033-2d7e-510becdb3d78','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Documents','module',90,0),('2f5dd714-18b0-ef58-ef41-510bec3851f2','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Leads','module',90,0),('2f89765d-5411-eb3a-ded6-510becd1a491','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Documents','module',90,0),('2fae9358-b1cf-b8b8-64c2-510becfc1b97','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Leads','module',90,0),('2fc14a98-fb32-3e52-4148-510bece02c00','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Documents','module',90,0),('2feb2c6a-033c-410b-08ef-510bec0d7df5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Leads','module',90,0),('304bea1a-53aa-7320-5e7e-510becc86b72','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Leads','module',90,0),('31b30d77-638a-eb22-b996-510bec7cde56','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','TrackerPerfs','TrackerPerf',-99,0),('355f005d-5e0e-22e7-9659-510becc09603','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','TrackerPerfs','TrackerPerf',-99,0),('37400a3c-d8e4-0ece-5998-510becb8f53c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','TrackerSessions','TrackerSession',-99,0),('39310d03-3425-839f-db16-510bec56f1e8','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','TrackerPerfs','TrackerPerf',-99,0),('3b888cf1-2bf9-6c3e-36b0-510bece9066a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Cases','module',1,0),('3bfb12a5-688f-31af-a449-510bec92bb42','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Cases','module',89,0),('3c5e3024-e302-fc56-12e4-510becfb389e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Cases','module',90,0),('3cb4d4c9-198a-8aed-ee4a-510bec9e05ab','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Cases','module',90,0),('3ce40ce6-40f4-b935-4872-510becee594d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','TrackerPerfs','TrackerPerf',-99,0),('3cf017c3-629d-a469-530f-510becf268e0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Cases','module',90,0),('3d2b45af-91e7-9715-fc5c-510bec0b3ee0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Cases','module',90,0),('3dbb13c9-6afe-2cf0-ff10-510bec11764c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Cases','module',90,0),('3e131011-c679-cb11-b205-510beca4bc1c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Cases','module',90,0),('3e8aa8d7-6799-c31f-2b63-510bec3cde7e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Cases','module',90,0),('41d205c4-4b52-c3ae-6114-510becb00112','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','TrackerPerfs','TrackerPerf',-99,0),('46d302e2-5d5b-a205-428f-510beccf7995','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','TrackerPerfs','TrackerPerf',-99,0),('48fbef08-dc12-8266-6e83-510bec091586','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Bugs','module',1,0),('495e0de9-9820-5c57-decb-510bec2d7f18','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Bugs','module',89,0),('49a46fdf-b18f-906c-71fb-510bece458a6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Bugs','module',90,0),('49fd4ddf-e243-f2e2-ac0d-510becdd2e6a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Bugs','module',90,0),('4a6f09ec-7ec4-6ffe-f084-510bec3c45d9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Bugs','module',90,0),('4aa20fd7-870c-231a-bc67-510bec9b33cc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','TrackerPerfs','TrackerPerf',90,0),('4ae2581d-7ba4-891f-de43-510bec9822f3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Bugs','module',90,0),('4b208011-3e20-d209-9d25-510bec139e9b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Bugs','module',90,0),('4b70bad8-f506-ef30-70f5-510bec40a6fc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Bugs','module',90,0),('4bcefb03-fc6d-c4f0-38b9-510becd88830','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Reports','module',1,0),('4bdc35d0-3648-af14-005f-510bec907948','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Bugs','module',90,0),('4c1aa824-ab91-022b-7962-510bec97ac42','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Reports','module',89,0),('4c63c8c2-d4fd-fb10-7e70-510beca5cbfa','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Reports','module',90,0),('4ccfaf52-38b2-1f06-6509-510bec1caeaf','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Reports','module',90,0),('4d192f52-d1a6-7138-0d22-510bec656c87','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Reports','module',90,0),('4d56ca55-0c40-0cf0-4f89-510bec2fac5a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Reports','module',90,0),('4d95ce32-c630-8097-3295-510bec0f773f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Reports','module',90,0),('4dd7896b-3658-ff36-fb9c-510bec577a6a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Reports','module',90,0),('4e155fba-16bc-93a6-0060-510bec1ef969','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Reports','module',90,0),('4e580882-50eb-7dce-c375-510bece90611','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','TrackerQueries','TrackerQuery',-99,0),('521109e0-be10-b69a-0055-510bec1a9bd7','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','TrackerQueries','TrackerQuery',-99,0),('5551bf2a-2bd2-8a1b-3a92-510bec61f3b9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Contracts','module',1,0),('55810dbc-3758-2965-0b0c-510becb85b65','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','TrackerQueries','TrackerQuery',-99,0),('55a4de54-c829-432a-ab26-510becd16138','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Contracts','module',89,0),('560244f5-1409-83a8-08de-510bec3aa0e9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Contracts','module',90,0),('561748fa-b326-7967-63d9-510becfb770b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Users','module',1,0),('564d88e4-03c8-cbb5-a9dc-510bec346fcc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Contracts','module',90,0),('5662670b-83ac-5eb1-0221-510bec7dcda4','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Users','module',89,0),('5693ca5a-5227-f8d8-3b86-510bec3323cd','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Contracts','module',90,0),('56ae636f-9ff9-0b09-6eb1-510bec7a9783','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Users','module',90,0),('56e35a53-afdf-2860-5bfd-510becf24c60','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Contracts','module',90,0),('56ff4c1b-8379-f2c6-62a1-510beca0e583','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Users','module',90,0),('5734732c-d581-2cc1-7170-510bec1a03af','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Contracts','module',90,0),('573b11e4-77b6-3dbb-54e9-510beca5a137','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Users','module',90,0),('5778fd04-4e83-b757-73f5-510bec4229ab','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Users','module',90,0),('577e41ce-627e-53e0-8938-510bec3903c9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Contracts','module',90,0),('57bfacd6-8d6b-9eed-5b8f-510bec035680','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Contracts','module',90,0),('57ce58d7-b479-d94e-a2e9-510bec3e93ee','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Users','module',90,0),('5821e40c-4877-6fb8-4b91-510bec6c4829','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Users','module',90,0),('5860afcd-2b51-29fe-22de-510bec36f842','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Users','module',90,0),('592306e4-bc7a-4119-060a-510bec52767d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','TrackerQueries','TrackerQuery',-99,0),('5caf05dd-3ef7-e267-398a-510becf14253','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','TrackerQueries','TrackerQuery',-99,0),('610aaa2e-cff6-b241-3cbc-510bec946bc9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Project','module',1,0),('6163cec9-5780-059b-000d-510bec259c39','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Project','module',89,0),('61ad0d2f-9910-62ce-0988-510becc15c52','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','TrackerQueries','TrackerQuery',-99,0),('61bf7ece-0248-12e4-f7c6-510bec962dcf','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Project','module',90,0),('623005dd-cd99-a5d0-60a3-510bec776525','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Project','module',90,0),('6273cae4-1e74-d4e7-b965-510bec4f6962','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Project','module',90,0),('62c12c67-9e80-b9d0-f1ee-510bec7db34f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Project','module',90,0),('62fe790d-30f8-7b28-5c0f-510becb25a69','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Project','module',90,0),('633a44e5-6e03-5720-04df-510becbbfffc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Project','module',90,0),('63759048-3f7d-e235-4ec5-510bec1840f5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Project','module',90,0),('65e60fb6-7159-db4a-0e0b-510bec156bbb','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','TrackerQueries','TrackerQuery',-99,0),('698283fa-d46d-3db2-9a55-510becbe8a1a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','ProjectTask','module',1,0),('69c5b055-a224-eaba-9b7a-510becf7e118','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','ProjectTask','module',89,0),('6a03c402-fc57-8bb6-2938-510bec274bec','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','ProjectTask','module',90,0),('6a4c412a-5a01-9ca8-0240-510bec3784d3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','ProjectTask','module',90,0),('6a842f8a-537e-071c-7b75-510becbf2c85','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','ProjectTask','module',90,0),('6ab9cc7c-870b-e486-dc7d-510bec6e719c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','ProjectTask','module',90,0),('6af0b931-5fbf-ca53-63df-510bec54e33e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','ProjectTask','module',90,0),('6b2d6997-12b7-c527-198e-510bec2a2cb0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','ProjectTask','module',90,0),('6b550420-ae7e-ef99-db65-510becbc2bd2','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','TrackerQueries','TrackerQuery',-99,0),('6b67d88e-8124-4fd7-339c-510bec449fb5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','ProjectTask','module',90,0),('6f3e00d9-a8ff-b3b4-8ccd-510beca4a3f8','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','TrackerQueries','TrackerQuery',90,0),('73a384ff-2d10-0f63-94a2-510bec293970','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Campaigns','module',1,0),('73e58b24-fa13-7462-26c8-510bec6a99ca','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Campaigns','module',89,0),('741bb9a9-ce4c-6796-2935-510becd8f662','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Campaigns','module',90,0),('74530ff6-7067-dc39-f974-510becd13780','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Campaigns','module',90,0),('748d5b71-be82-98bb-c968-510becdbd14b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Campaigns','module',90,0),('74c5c7bd-5676-edeb-599a-510bec45b382','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Campaigns','module',90,0),('75045057-d769-12b9-9e34-510bec249295','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Campaigns','module',90,0),('753f9d2e-1b57-5110-cb71-510bec2d1e7c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Campaigns','module',90,0),('757e4fe5-a336-a652-beea-510becba5bed','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Campaigns','module',90,0),('7ecd92a0-3009-2649-ea79-510bec6288ca','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','ProspectLists','module',1,0),('7ee4ae20-e85c-e251-57bf-510becf4e576','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Quotes','module',1,0),('7f132dde-9d2e-6443-90f6-510bec992e60','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','ProspectLists','module',89,0),('7f3a30aa-34d7-73f0-a9ea-510bec3788d3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Quotes','module',89,0),('7f51f0e3-5027-7440-663a-510bec585956','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','ProspectLists','module',90,0),('7f8554dd-9435-a56f-1ae2-510becc858e4','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Quotes','module',90,0),('7f893db6-041b-5613-8d64-510bec6a949b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','ProspectLists','module',90,0),('7fcb1e9e-7c90-cf2d-9c0c-510becc00100','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Quotes','module',90,0),('7fd8718d-60e3-3331-db33-510becfea5d2','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','ProspectLists','module',90,0),('800d1cbb-33e5-3694-59e8-510becadf1e0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Quotes','module',90,0),('801198dc-eebb-570a-bb3a-510becad07ad','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','ProspectLists','module',90,0),('804683a5-f9e3-135d-7b2c-510becf433ec','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','ProspectLists','module',90,0),('8058f6eb-9ef5-eb05-444f-510bec9b886c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Quotes','module',90,0),('8082183e-b3cd-a945-35e2-510bec423f8e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','ProspectLists','module',90,0),('809b8810-241f-bf0a-12aa-510bec716e59','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Quotes','module',90,0),('80e2b969-651d-7eb7-9752-510bec703c27','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Quotes','module',90,0),('81196754-c72e-ecd9-67f1-510bec62b602','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','ProspectLists','module',90,0),('813d3476-8512-52ad-3957-510bec2fdb87','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Quotes','module',90,0),('85402208-e51b-d140-c28f-510bec62d9d4','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Prospects','module',1,0),('8586a130-8dce-f46e-74ee-510becec05ab','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Prospects','module',89,0),('85c79e27-ab1d-ac64-5cb8-510bec2978c3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Prospects','module',90,0),('860363cc-1629-17b2-0f2d-510bec0f0b4f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Prospects','module',90,0),('8652f3f8-c151-95ca-21d9-510bec30f224','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Prospects','module',90,0),('868e2f40-fe1f-c9ee-b919-510bec5786c6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Prospects','module',90,0),('86cc17c5-4dd7-cc51-103d-510becc7ee1a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Prospects','module',90,0),('87067165-c4fd-df1a-c3e9-510becfad5d6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Prospects','module',90,0),('874648e3-4394-e65c-e8ae-510beca5536c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Prospects','module',90,0),('8d8d79d5-3902-fcee-9789-510bec48395a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','EmailMarketing','module',1,0),('8ddcfb1d-381b-7999-2734-510bec1ed8f3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','EmailMarketing','module',89,0),('8e3a542d-bd24-3922-f031-510bec7d59e5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','EmailMarketing','module',90,0),('8e8c42c9-f330-a05c-fb97-510becbb6841','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','EmailMarketing','module',90,0),('8ed37db3-d3e5-4320-3bb0-510bec393c36','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','EmailMarketing','module',90,0),('8f107cf7-1bcf-c185-a3f0-510bec469696','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','EmailMarketing','module',90,0),('8f71dc35-f3ad-604b-d60c-510bec8ff33b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','EmailMarketing','module',90,0),('8fcadbee-5d1e-6e19-98d6-510bec1d275d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','EmailMarketing','module',90,0),('900788a1-af26-7c1a-271c-510bec49e6a3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','EmailMarketing','module',90,0),('94c0b5e6-5537-73ae-222c-510bec3e13f0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Products','module',1,0),('9512dc3e-00c7-fc91-441a-510becad36e5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Products','module',89,0),('955f79be-0b5c-bed7-f0cc-510becfbb134','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Products','module',90,0),('95ab5253-cb6b-8ae3-5dc7-510bec543395','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Products','module',90,0),('9602d4a4-16f0-17a7-185d-510bec67787e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Products','module',90,0),('966755e3-a133-545f-6dc5-510bec4df4b2','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Products','module',90,0),('96c9896a-d08b-1eb3-ffc4-510becedb40f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Products','module',90,0),('971a6295-ee77-2e08-2884-510becfef773','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Products','module',90,0),('9768d141-4588-1169-3701-510becc1fa15','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Products','module',90,0),('9ddb0cdf-0d79-3273-3e43-510becaf4a41','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Trackers','Tracker',-99,0),('9ee00eb6-4cfa-ed74-826e-510becee9fe4','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','TrackerSessions','TrackerSession',-99,0),('a23401ae-f7dc-c425-00c1-510bec3f392c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Trackers','Tracker',-99,0),('a3870e61-4d05-3e97-0571-510bece0d046','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Contacts','module',1,0),('a3cf044f-3137-4a65-ddbc-510bec6b1b4e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Contacts','module',89,0),('a40841c2-1814-46bd-6e8b-510bec90f18c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Contacts','module',90,0),('a44d4755-c242-0086-f55c-510bec2ec284','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Contacts','module',90,0),('a4961103-9976-27e3-4701-510bec4ae591','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Contacts','module',90,0),('a4d3d785-d9a9-dd0e-a177-510bec8dcba5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Contacts','module',90,0),('a50e297b-2306-dc4d-a22f-510bece70f6b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Contacts','module',90,0),('a54e26d6-41ae-c248-89a2-510bec4051a4','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Contacts','module',90,0),('a58819e6-44a8-8682-25bd-510becca907e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Contacts','module',90,0),('a7690b9a-175f-1ff2-d408-510bec87093d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Trackers','Tracker',-99,0),('ac0166b2-3d34-e27e-9a17-510bece071bc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Forecasts','module',1,0),('ac4de355-c9bf-5bd6-2a17-510bec50642d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Forecasts','module',89,0),('ac9c6c1d-b029-4e9c-fd80-510becd71e88','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Forecasts','module',90,0),('acb904cf-65e8-5d30-2bb7-510bec5e4451','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Trackers','Tracker',-99,0),('ad57bd3f-8e9b-3718-011f-510bec95868f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Forecasts','module',90,0),('adaa1363-e38d-40c6-a5f8-510bec3b7437','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Forecasts','module',90,0),('adce7bbd-5f5e-b07f-7091-510bec428b32','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Accounts','module',1,0),('adeee9df-40db-b9bf-9b51-510becb23239','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Forecasts','module',90,0),('ae1a46a5-37f8-6fc4-0399-510bece320ab','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Accounts','module',89,0),('ae3b81aa-94d6-0806-2c70-510beccb036a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Forecasts','module',90,0),('ae5ac0f2-6e25-a9aa-bc66-510becc494cd','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Accounts','module',90,0),('ae86bae9-9c79-112d-aaf0-510bec567a10','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Forecasts','module',90,0),('ae924b4a-4723-b0e4-799b-510becaa5401','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Accounts','module',90,0),('aeca370c-59bb-ed27-3d9d-510becd301f6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Accounts','module',90,0),('aed024f0-21e7-ac51-8196-510bec57a57a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Forecasts','module',90,0),('af012913-6f97-7488-d09a-510bec099fdd','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Accounts','module',90,0),('af483bda-854c-983d-3484-510bec4ee31f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Accounts','module',90,0),('af80bd29-1aa4-281e-8a85-510becd0cb83','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Accounts','module',90,0),('afbc131e-b7d7-116f-9956-510becc4b66a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Accounts','module',90,0),('b1610e47-eb13-b092-6b48-510bec2b312a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Trackers','Tracker',-99,0),('b2bbe6cf-ed06-8e58-595c-510bec7645cf','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','ForecastSchedule','module',1,0),('b30c881d-f08f-c549-27d5-510becd8a9b1','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','ForecastSchedule','module',89,0),('b3608796-253d-f1e7-a384-510bec94cfb0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','ForecastSchedule','module',90,0),('b3b05024-c3fa-4c50-948d-510beceeff98','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','ForecastSchedule','module',90,0),('b4145cfc-edd8-bdac-3fe8-510becf4de9b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','ForecastSchedule','module',90,0),('b45971b5-3eeb-aa10-7658-510bec187205','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','ForecastSchedule','module',90,0),('b4a23848-7b30-1682-0671-510becc10c2c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','ForecastSchedule','module',90,0),('b4e7eaa9-6e0c-a11a-3ced-510beced874e','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','ForecastSchedule','module',90,0),('b527c8ec-f9fd-f7e4-c08c-510bec4ef2b5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','ForecastSchedule','module',90,0),('b57e018f-b6b5-155f-ed2c-510bec820bfc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Trackers','Tracker',-99,0),('b93d079e-8af6-b9a7-8c86-510bece53263','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Trackers','Tracker',-99,0),('be0c0bdf-5eeb-c2aa-936a-510becd759bc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Trackers','Tracker',-99,0),('bf019435-81b7-46d7-4cda-510bece16cab','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Opportunities','module',1,0),('bf4b66e6-9f37-4e76-acf8-510bec456302','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Opportunities','module',89,0),('bf8679fb-39e2-08e9-83b9-510bec2716ae','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Opportunities','module',90,0),('bfdffcd3-cdb2-b7aa-0c24-510bec8f2e2b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Opportunities','module',90,0),('c021cce5-0449-cc4a-9334-510becec7005','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Opportunities','module',90,0),('c060f81b-7ac5-1373-7a85-510bec1a6c57','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Opportunities','module',90,0),('c09ac1b9-688c-3a4a-7296-510bec23b8ac','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Opportunities','module',90,0),('c0d7daf6-7752-dea0-6311-510bec3188d1','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Opportunities','module',90,0),('c11792a5-e3cf-e4a8-6729-510bec64f5a3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Opportunities','module',90,0),('c1a90d90-5876-1446-b1a8-510bec29753b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Trackers','Tracker',90,0),('cb0cf3bc-2119-56f8-92c5-510bece9598a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','EmailTemplates','module',1,0),('cb565b4c-d789-eaba-ed0e-510bec6fd4aa','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','EmailTemplates','module',89,0),('cb964ef1-9c25-c29d-130d-510becc8240a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','EmailTemplates','module',90,0),('cbd5ac2f-f701-f34b-b4ad-510becd2c985','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','EmailTemplates','module',90,0),('cc1166d4-360d-c9a2-77a9-510becf82cb0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','EmailTemplates','module',90,0),('cc4d8e81-472a-de69-7350-510bece119a7','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','EmailTemplates','module',90,0),('cc966477-af25-e66f-3c5e-510bec233ff3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','EmailTemplates','module',90,0),('ccd2e267-4eb6-34a4-c60e-510bec5c53e5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','EmailTemplates','module',90,0),('cd10a874-1964-7824-2417-510bec084dc9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','EmailTemplates','module',90,0),('d166ac38-1923-afc7-5bde-510bec6ca46f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Notes','module',1,0),('d1abc8c2-9e97-6cb1-4a23-510bec382308','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Notes','module',89,0),('d1e77229-e59d-3c2d-0b26-510bec03d492','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Notes','module',90,0),('d2363b28-380d-b9d5-71c3-510beccd902a','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Notes','module',90,0),('d270877c-b9c4-1bab-c6d9-510bece4f5df','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Notes','module',90,0),('d2b16491-55ac-691b-a1d9-510bec007dcc','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Notes','module',90,0),('d2e9d7b8-68e0-1fb6-a39c-510bec206bd0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Notes','module',90,0),('d31f6c28-1d14-e497-1668-510bec57c943','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Notes','module',90,0),('d35b50af-f9fc-07fd-d339-510becc1c849','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Notes','module',90,0),('d816af00-06fd-2691-837f-510bec9dc4bd','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Calls','module',1,0),('d8596865-abcc-6476-190f-510bec7f6c54','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Calls','module',89,0),('d89a7054-89f6-e813-7a88-510bec661b72','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Calls','module',90,0),('d8e3af0a-d34a-1d72-543a-510bec5abdc9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Calls','module',90,0),('d91a7273-42d7-1f2a-2b1f-510bec3d5056','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Calls','module',90,0),('d95227e2-b701-3247-bf33-510beca402d9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Calls','module',90,0),('d98ca495-2afe-1c97-c6a9-510bec2dff82','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Calls','module',90,0),('d9c4f006-05c8-2557-e60a-510becb0ad44','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Calls','module',90,0),('da026f94-83f8-e49a-18be-510bec3eae11','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Calls','module',90,0),('dde90bb8-8d7a-060e-9bf4-510becd3e9fd','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','KBDocuments','module',1,0),('de82ec32-2a60-49cd-44f7-510bec5c28a0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','KBDocuments','module',89,0),('dea79444-c8fa-70ee-ab0b-510bec0f0e87','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Emails','module',1,0),('dedd8d67-9178-1b89-464a-510becbebf63','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','KBDocuments','module',90,0),('def3bc9a-63bc-30dc-df10-510bec0b9f36','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Emails','module',89,0),('df20003f-e10e-5f4a-bfd0-510bec147ab2','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','TrackerSessions','TrackerSession',-99,0),('df330810-a625-a8e5-4783-510bece481c6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Emails','module',90,0),('df421181-c371-d603-970e-510becc36d04','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','KBDocuments','module',90,0),('df6ccdbf-bb41-3293-4ff6-510bec6e1a8d','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Emails','module',90,0),('df8d6470-a7a7-fa28-1c29-510becede8c1','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','KBDocuments','module',90,0),('dfa6b29f-33cb-b0f3-0a82-510bec9facf5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Emails','module',90,0),('dfd2b004-6d9f-1354-b4e8-510bec6ce4bf','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','KBDocuments','module',90,0),('dfddb8b0-bfe4-b4ee-8809-510bec02ac13','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Emails','module',90,0),('e015b65b-af54-8e69-5d0f-510bec073cc1','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Emails','module',90,0),('e01956c9-436f-9401-0cee-510becd482e5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','KBDocuments','module',90,0),('e05eef53-3cbb-91f1-ecf7-510bec028191','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Emails','module',90,0),('e062cfb5-7724-b2b6-9d76-510becbf0b39','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','KBDocuments','module',90,0),('e098d481-f6ec-6858-423b-510beceddb33','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Emails','module',90,0),('e0b6dab0-315e-26f6-cfed-510bec4d84b7','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','KBDocuments','module',90,0),('e5ed8ddc-7a03-dd65-669a-510bec1ebdaa','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Meetings','module',1,0),('e60a0a85-dddd-e454-ca06-510bec6066e6','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Notifications','module',1,0),('e646a074-5839-80e0-c07a-510beca986a0','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Meetings','module',89,0),('e6882f93-c867-25cc-4b1d-510bec75ee1b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Meetings','module',90,0),('e6be7f26-77cf-e340-ec8e-510bec9e962b','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Meetings','module',90,0),('e700b928-b644-72ce-6c25-510bec3bec18','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Meetings','module',90,0),('e7484c0c-0ffd-0eaa-9d2a-510bec2a6e80','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Meetings','module',90,0),('e7807e73-bc26-29fc-c65d-510beca8ac2c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Meetings','module',90,0),('e7bf76ad-9f1e-d073-12ee-510bec3be935','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Meetings','module',90,0),('e80171d3-d2bc-c9fb-9682-510becb7421f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Meetings','module',90,0),('eafe046b-a6bc-3dd0-cd26-510bec8bf488','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Notifications','module',89,0),('ed0a1851-f185-4db5-f083-510bec1c3c3f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','admin','Tasks','module',1,0),('ed4ddc33-a53e-f9ef-969f-510bec211335','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','access','Tasks','module',89,0),('ed934ca7-ccf6-aa83-71e7-510bec9dd8b9','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Tasks','module',90,0),('edcc935d-d94a-24da-224b-510bec500734','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Tasks','module',90,0),('ee1aeaef-fcdf-2eaa-3994-510bec60b6d5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Tasks','module',90,0),('ee5c4343-04fe-3ca6-b9ba-510becb84059','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Tasks','module',90,0),('ee9b63ad-7df7-91c7-5e19-510bec9a6c95','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','import','Tasks','module',90,0),('eed2b0c4-1452-1012-bf5d-510bec02b01f','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','export','Tasks','module',90,0),('ef0e2579-0ea9-6cdf-7316-510becab1ef5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','massupdate','Tasks','module',90,0),('efd30352-38ee-d8f5-f4d1-510bec828a43','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','view','Notifications','module',90,0),('f4e90fc1-80ba-c07d-a18f-510beccf8ec5','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','list','Notifications','module',90,0),('fb320351-600a-4be5-b247-510bec72f05c','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','edit','Notifications','module',90,0),('ffda0b73-3525-2f89-9f8f-510bec390b74','2013-02-01 16:23:38','2013-02-01 16:23:38','1','','delete','Notifications','module',90,0);
/*!40000 ALTER TABLE `acl_actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_fields`
--

DROP TABLE IF EXISTS `acl_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_fields` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `aclaccess` int(3) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `role_id` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aclfield_role_del` (`role_id`,`category`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_fields`
--

LOCK TABLES `acl_fields` WRITE;
/*!40000 ALTER TABLE `acl_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles`
--

DROP TABLE IF EXISTS `acl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aclrole_id_del` (`id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles`
--

LOCK TABLES `acl_roles` WRITE;
/*!40000 ALTER TABLE `acl_roles` DISABLE KEYS */;
INSERT INTO `acl_roles` VALUES ('619a6803-75ca-3708-281e-510bec39d6e3','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Tracker','Tracker Role',0),('6896d00d-cdf6-0bc5-2028-510bec78f0a1','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Sales Administrator','Sales Administrator Role',0),('6bc650a5-532d-905d-dceb-510bec304962','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Marketing Administrator','Marketing Administrator Role',0),('6eb21a06-7222-0af1-76e1-510bec528ef8','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Customer Support Administrator','Customer Support Administrator Role',0);
/*!40000 ALTER TABLE `acl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles_actions`
--

DROP TABLE IF EXISTS `acl_roles_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles_actions` (
  `id` varchar(36) NOT NULL,
  `role_id` varchar(36) DEFAULT NULL,
  `action_id` varchar(36) DEFAULT NULL,
  `access_override` int(3) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_acl_role_id` (`role_id`),
  KEY `idx_acl_action_id` (`action_id`),
  KEY `idx_aclrole_action` (`role_id`,`action_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles_actions`
--

LOCK TABLES `acl_roles_actions` WRITE;
/*!40000 ALTER TABLE `acl_roles_actions` DISABLE KEYS */;
INSERT INTO `acl_roles_actions` VALUES ('621fbbe1-e310-362b-d4f0-510becfefff7','619a6803-75ca-3708-281e-510bec39d6e3','9ddb0cdf-0d79-3273-3e43-510becaf4a41',1,'2013-02-01 16:23:38',0),('625ad11c-13b6-a4e1-3922-510bec39e7a1','619a6803-75ca-3708-281e-510bec39d6e3','a23401ae-f7dc-c425-00c1-510bec3f392c',89,'2013-02-01 16:23:38',0),('6293c7ba-9af2-cafd-e9f1-510bec3f9bb4','619a6803-75ca-3708-281e-510bec39d6e3','a7690b9a-175f-1ff2-d408-510bec87093d',90,'2013-02-01 16:23:38',0),('62c3e5c8-e1ba-b510-4c60-510becabbbb4','619a6803-75ca-3708-281e-510bec39d6e3','acb904cf-65e8-5d30-2bb7-510bec5e4451',90,'2013-02-01 16:23:38',0),('62f7728d-392d-3aae-f6e1-510bec88e158','619a6803-75ca-3708-281e-510bec39d6e3','b1610e47-eb13-b092-6b48-510bec2b312a',90,'2013-02-01 16:23:38',0),('6328239e-ab77-e4e9-4a5c-510bec67cf86','619a6803-75ca-3708-281e-510bec39d6e3','b57e018f-b6b5-155f-ed2c-510bec820bfc',90,'2013-02-01 16:23:38',0),('63547d04-b8c0-2181-ca57-510beca30e03','619a6803-75ca-3708-281e-510bec39d6e3','b93d079e-8af6-b9a7-8c86-510bece53263',90,'2013-02-01 16:23:38',0),('63821b17-dc16-adb2-197b-510bec170fa4','619a6803-75ca-3708-281e-510bec39d6e3','be0c0bdf-5eeb-c2aa-936a-510becd759bc',90,'2013-02-01 16:23:38',0),('63b77fa9-7f57-53d2-55a1-510bec94b669','619a6803-75ca-3708-281e-510bec39d6e3','4e580882-50eb-7dce-c375-510bece90611',1,'2013-02-01 16:23:38',0),('63e8ad97-f7cc-d71e-7b3c-510bec878fd0','619a6803-75ca-3708-281e-510bec39d6e3','521109e0-be10-b69a-0055-510bec1a9bd7',89,'2013-02-01 16:23:38',0),('6433f016-1738-6deb-15c5-510becb92a29','619a6803-75ca-3708-281e-510bec39d6e3','55810dbc-3758-2965-0b0c-510becb85b65',90,'2013-02-01 16:23:38',0),('646972a2-e53e-4421-d04c-510bec879d80','619a6803-75ca-3708-281e-510bec39d6e3','592306e4-bc7a-4119-060a-510bec52767d',90,'2013-02-01 16:23:38',0),('649a544b-0836-3fd8-40bf-510beca2d466','619a6803-75ca-3708-281e-510bec39d6e3','5caf05dd-3ef7-e267-398a-510becf14253',90,'2013-02-01 16:23:38',0),('64c96c30-c19d-d1be-562b-510bec30ea3f','619a6803-75ca-3708-281e-510bec39d6e3','61ad0d2f-9910-62ce-0988-510becc15c52',90,'2013-02-01 16:23:38',0),('64f547e0-2b3b-3f7b-ddd8-510bec0fbc29','619a6803-75ca-3708-281e-510bec39d6e3','65e60fb6-7159-db4a-0e0b-510bec156bbb',90,'2013-02-01 16:23:38',0),('65295829-0445-d774-0b21-510becfb9a1d','619a6803-75ca-3708-281e-510bec39d6e3','6b550420-ae7e-ef99-db65-510becbc2bd2',90,'2013-02-01 16:23:38',0),('655bf93a-652b-30b9-0b2d-510bec4d7cf1','619a6803-75ca-3708-281e-510bec39d6e3','2aa203fc-a5d1-1939-82a4-510bec297c00',1,'2013-02-01 16:23:38',0),('65916335-a5db-afac-c398-510bec0bf83d','619a6803-75ca-3708-281e-510bec39d6e3','2e5b0cba-f0e3-ac5f-6f74-510bec6bcac5',89,'2013-02-01 16:23:38',0),('65cb009a-a984-0783-39ff-510bec1aaca5','619a6803-75ca-3708-281e-510bec39d6e3','31b30d77-638a-eb22-b996-510bec7cde56',90,'2013-02-01 16:23:38',0),('65fe712c-18be-5bf5-35ca-510becccb4c9','619a6803-75ca-3708-281e-510bec39d6e3','355f005d-5e0e-22e7-9659-510becc09603',90,'2013-02-01 16:23:38',0),('662c9dfe-bf52-0e77-09fb-510bec6d46b1','619a6803-75ca-3708-281e-510bec39d6e3','39310d03-3425-839f-db16-510bec56f1e8',90,'2013-02-01 16:23:38',0),('66598d31-ec0a-6fb8-ad55-510bec798dcf','619a6803-75ca-3708-281e-510bec39d6e3','3ce40ce6-40f4-b935-4872-510becee594d',90,'2013-02-01 16:23:38',0),('668939e0-47ab-5fb7-cba1-510becc9f573','619a6803-75ca-3708-281e-510bec39d6e3','41d205c4-4b52-c3ae-6114-510becb00112',90,'2013-02-01 16:23:38',0),('66b75c0b-14f3-a760-abd0-510bec6618a2','619a6803-75ca-3708-281e-510bec39d6e3','46d302e2-5d5b-a205-428f-510beccf7995',90,'2013-02-01 16:23:38',0),('66e9ef0a-ca19-8eba-5627-510becf04e5c','619a6803-75ca-3708-281e-510bec39d6e3','37400a3c-d8e4-0ece-5998-510becb8f53c',1,'2013-02-01 16:23:38',0),('672d446e-919e-ed10-76a7-510bec024cc3','619a6803-75ca-3708-281e-510bec39d6e3','9ee00eb6-4cfa-ed74-826e-510becee9fe4',89,'2013-02-01 16:23:38',0),('675c386c-7074-f0dc-a8fa-510bec402e70','619a6803-75ca-3708-281e-510bec39d6e3','df20003f-e10e-5f4a-bfd0-510bec147ab2',90,'2013-02-01 16:23:38',0),('6790ac4d-40c1-5862-8f92-510bec866c2c','619a6803-75ca-3708-281e-510bec39d6e3','1201096e-a37e-ce08-ca79-510bec3074bf',90,'2013-02-01 16:23:38',0),('67c77878-1a18-a761-fedd-510becfd3605','619a6803-75ca-3708-281e-510bec39d6e3','156c00c8-8ae6-0e5f-f1f4-510bec981d6a',90,'2013-02-01 16:23:38',0),('67fd8ea5-2437-7d39-c82d-510becbc4fab','619a6803-75ca-3708-281e-510bec39d6e3','1980025c-f830-ffc9-a828-510beced082e',90,'2013-02-01 16:23:38',0),('682f8f67-cf19-3ff6-ccaf-510bec648944','619a6803-75ca-3708-281e-510bec39d6e3','1ed6037d-0597-fcb0-7ff5-510beca6b597',90,'2013-02-01 16:23:38',0),('686504d6-8e17-11d1-14e0-510bec5e8566','619a6803-75ca-3708-281e-510bec39d6e3','229f0378-eb2b-7c1c-bdda-510bec2d992b',90,'2013-02-01 16:23:38',0),('691d9c81-88f8-ebc2-18cf-510bec69ce4d','6896d00d-cdf6-0bc5-2028-510bec78f0a1','adce7bbd-5f5e-b07f-7091-510bec428b32',100,'2013-02-01 16:23:38',0),('6952baf0-6988-a7d6-a583-510becda0573','6896d00d-cdf6-0bc5-2028-510bec78f0a1','ae1a46a5-37f8-6fc4-0399-510bece320ab',89,'2013-02-01 16:23:38',0),('69814edd-b78f-0150-4e98-510becaba764','6896d00d-cdf6-0bc5-2028-510bec78f0a1','a3870e61-4d05-3e97-0571-510bece0d046',100,'2013-02-01 16:23:38',0),('69b2a600-e72c-4a62-20b0-510bec7d1f5c','6896d00d-cdf6-0bc5-2028-510bec78f0a1','a3cf044f-3137-4a65-ddbc-510bec6b1b4e',89,'2013-02-01 16:23:38',0),('69e293e2-5f65-32c5-bf06-510bec35c052','6896d00d-cdf6-0bc5-2028-510bec78f0a1','ac0166b2-3d34-e27e-9a17-510bece071bc',100,'2013-02-01 16:23:38',0),('6a1546ac-f5ce-1466-3b19-510becedfaa1','6896d00d-cdf6-0bc5-2028-510bec78f0a1','ac4de355-c9bf-5bd6-2a17-510bec50642d',89,'2013-02-01 16:23:38',0),('6a425e47-43ce-b030-b3fa-510bec39c602','6896d00d-cdf6-0bc5-2028-510bec78f0a1','b2bbe6cf-ed06-8e58-595c-510bec7645cf',100,'2013-02-01 16:23:38',0),('6a86f6a8-163b-38df-a9b7-510bec5267b5','6896d00d-cdf6-0bc5-2028-510bec78f0a1','b30c881d-f08f-c549-27d5-510becd8a9b1',89,'2013-02-01 16:23:38',0),('6abaa457-89f1-3782-3f25-510bec233e7a','6896d00d-cdf6-0bc5-2028-510bec78f0a1','2c4d4847-7207-e84d-e36a-510bec3f7bb5',100,'2013-02-01 16:23:38',0),('6aee6d95-fb2d-070b-a3fe-510bec1d73bd','6896d00d-cdf6-0bc5-2028-510bec78f0a1','2dd05c7f-9772-33e0-4ff3-510bec09880e',89,'2013-02-01 16:23:38',0),('6b1a1ff3-c81a-c293-0de3-510bece8bc8c','6896d00d-cdf6-0bc5-2028-510bec78f0a1','7ee4ae20-e85c-e251-57bf-510becf4e576',100,'2013-02-01 16:23:38',0),('6b45a1ac-1c49-9c6f-d785-510becd33331','6896d00d-cdf6-0bc5-2028-510bec78f0a1','7f3a30aa-34d7-73f0-a9ea-510bec3788d3',89,'2013-02-01 16:23:38',0),('6b786471-8718-c06f-3b52-510bec442ed7','6896d00d-cdf6-0bc5-2028-510bec78f0a1','bf019435-81b7-46d7-4cda-510bece16cab',100,'2013-02-01 16:23:38',0),('6ba7ff25-3629-83f7-5d7c-510bec3c9528','6896d00d-cdf6-0bc5-2028-510bec78f0a1','bf4b66e6-9f37-4e76-acf8-510bec456302',89,'2013-02-01 16:23:38',0),('6c481a3e-fc04-2c9d-929a-510bec7fe72d','6bc650a5-532d-905d-dceb-510bec304962','adce7bbd-5f5e-b07f-7091-510bec428b32',100,'2013-02-01 16:23:38',0),('6c7b9a46-b03e-8542-bbfb-510bec79d4d1','6bc650a5-532d-905d-dceb-510bec304962','ae1a46a5-37f8-6fc4-0399-510bece320ab',89,'2013-02-01 16:23:38',0),('6ca8849c-25e7-51f7-68cc-510becc53379','6bc650a5-532d-905d-dceb-510bec304962','a3870e61-4d05-3e97-0571-510bece0d046',100,'2013-02-01 16:23:38',0),('6cda60a7-31cf-72aa-3438-510bece2d8f3','6bc650a5-532d-905d-dceb-510bec304962','a3cf044f-3137-4a65-ddbc-510bec6b1b4e',89,'2013-02-01 16:23:38',0),('6d085665-9ab5-05fd-5ee6-510becb533b1','6bc650a5-532d-905d-dceb-510bec304962','73a384ff-2d10-0f63-94a2-510bec293970',100,'2013-02-01 16:23:38',0),('6d3a9f48-de79-01d7-446d-510bec4c3888','6bc650a5-532d-905d-dceb-510bec304962','73e58b24-fa13-7462-26c8-510bec6a99ca',89,'2013-02-01 16:23:38',0),('6d6cbec5-a293-4897-6da1-510bece1de95','6bc650a5-532d-905d-dceb-510bec304962','7ecd92a0-3009-2649-ea79-510bec6288ca',100,'2013-02-01 16:23:38',0),('6d9d2ffb-c1e9-4a4e-a3b6-510bec6f3a0d','6bc650a5-532d-905d-dceb-510bec304962','7f132dde-9d2e-6443-90f6-510bec992e60',89,'2013-02-01 16:23:38',0),('6dee4bfe-2635-100a-b999-510becb01bf9','6bc650a5-532d-905d-dceb-510bec304962','2c4d4847-7207-e84d-e36a-510bec3f7bb5',100,'2013-02-01 16:23:38',0),('6e26ddfd-eb66-6bb0-c679-510bec866e3e','6bc650a5-532d-905d-dceb-510bec304962','2dd05c7f-9772-33e0-4ff3-510bec09880e',89,'2013-02-01 16:23:38',0),('6e5ccd24-51fc-ce88-d415-510bec21951d','6bc650a5-532d-905d-dceb-510bec304962','85402208-e51b-d140-c28f-510bec62d9d4',100,'2013-02-01 16:23:38',0),('6e90ed9f-6bd1-519b-ff9a-510bec411aad','6bc650a5-532d-905d-dceb-510bec304962','8586a130-8dce-f46e-74ee-510becec05ab',89,'2013-02-01 16:23:38',0),('6f33bd17-9703-f36b-ccce-510becbdd861','6eb21a06-7222-0af1-76e1-510bec528ef8','adce7bbd-5f5e-b07f-7091-510bec428b32',100,'2013-02-01 16:23:38',0),('6f69736b-5bc8-bb08-4fd0-510bec457be0','6eb21a06-7222-0af1-76e1-510bec528ef8','ae1a46a5-37f8-6fc4-0399-510bece320ab',89,'2013-02-01 16:23:38',0),('6fa404f6-5f53-4e82-c480-510bec606891','6eb21a06-7222-0af1-76e1-510bec528ef8','a3870e61-4d05-3e97-0571-510bece0d046',100,'2013-02-01 16:23:38',0),('6fddb186-f188-e390-aa80-510bec595423','6eb21a06-7222-0af1-76e1-510bec528ef8','a3cf044f-3137-4a65-ddbc-510bec6b1b4e',89,'2013-02-01 16:23:38',0),('7011087b-5873-7186-2c3a-510becdd65b5','6eb21a06-7222-0af1-76e1-510bec528ef8','48fbef08-dc12-8266-6e83-510bec091586',100,'2013-02-01 16:23:38',0),('703ecb20-4f80-995e-2cbc-510bec881037','6eb21a06-7222-0af1-76e1-510bec528ef8','495e0de9-9820-5c57-decb-510bec2d7f18',89,'2013-02-01 16:23:38',0),('707194b7-d28c-33e3-3c1f-510bec01b85b','6eb21a06-7222-0af1-76e1-510bec528ef8','3b888cf1-2bf9-6c3e-36b0-510bece9066a',100,'2013-02-01 16:23:38',0),('70a4242c-a91b-9a16-ff93-510becf58311','6eb21a06-7222-0af1-76e1-510bec528ef8','3bfb12a5-688f-31af-a449-510bec92bb42',89,'2013-02-01 16:23:38',0),('70d84fc1-e00b-33eb-d7f4-510bece34a49','6eb21a06-7222-0af1-76e1-510bec528ef8','dde90bb8-8d7a-060e-9bf4-510becd3e9fd',100,'2013-02-01 16:23:38',0),('710e5e61-d425-952a-62e5-510bec26cef4','6eb21a06-7222-0af1-76e1-510bec528ef8','de82ec32-2a60-49cd-44f7-510bec5c28a0',89,'2013-02-01 16:23:38',0);
/*!40000 ALTER TABLE `acl_roles_actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles_users`
--

DROP TABLE IF EXISTS `acl_roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles_users` (
  `id` varchar(36) NOT NULL,
  `role_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_aclrole_id` (`role_id`),
  KEY `idx_acluser_id` (`user_id`),
  KEY `idx_aclrole_user` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles_users`
--

LOCK TABLES `acl_roles_users` WRITE;
/*!40000 ALTER TABLE `acl_roles_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address_book`
--

DROP TABLE IF EXISTS `address_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_book` (
  `assigned_user_id` char(36) NOT NULL,
  `bean` varchar(50) DEFAULT NULL,
  `bean_id` char(36) NOT NULL,
  KEY `ab_user_bean_idx` (`assigned_user_id`,`bean`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_book`
--

LOCK TABLES `address_book` WRITE;
/*!40000 ALTER TABLE `address_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address_book_list_items`
--

DROP TABLE IF EXISTS `address_book_list_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_book_list_items` (
  `list_id` char(36) NOT NULL,
  `bean_id` char(36) NOT NULL,
  KEY `abli_list_id_idx` (`list_id`),
  KEY `abli_list_id_bean_idx` (`list_id`,`bean_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_book_list_items`
--

LOCK TABLES `address_book_list_items` WRITE;
/*!40000 ALTER TABLE `address_book_list_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_book_list_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address_book_lists`
--

DROP TABLE IF EXISTS `address_book_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_book_lists` (
  `id` char(36) NOT NULL,
  `assigned_user_id` char(36) NOT NULL,
  `list_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abml_user_bean_idx` (`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_book_lists`
--

LOCK TABLES `address_book_lists` WRITE;
/*!40000 ALTER TABLE `address_book_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_book_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bugs`
--

DROP TABLE IF EXISTS `bugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bugs` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `bug_number` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `priority` varchar(100) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `system_id` int(11) DEFAULT NULL,
  `work_log` text,
  `found_in_release` varchar(255) DEFAULT NULL,
  `fixed_in_release` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bugsnumk` (`bug_number`),
  UNIQUE KEY `bug_number` (`bug_number`,`system_id`),
  KEY `idx_bugs_tmst_id` (`team_set_id`),
  KEY `idx_bug_name` (`name`),
  KEY `idx_bugs_assigned_user` (`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bugs`
--

LOCK TABLES `bugs` WRITE;
/*!40000 ALTER TABLE `bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bugs_audit`
--

DROP TABLE IF EXISTS `bugs_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bugs_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_bugs_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bugs_audit`
--

LOCK TABLES `bugs_audit` WRITE;
/*!40000 ALTER TABLE `bugs_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `bugs_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calls`
--

DROP TABLE IF EXISTS `calls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calls` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `duration_hours` int(2) DEFAULT NULL,
  `duration_minutes` int(2) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Planned',
  `direction` varchar(100) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `reminder_time` int(11) DEFAULT '-1',
  `email_reminder_time` int(11) DEFAULT '-1',
  `email_reminder_sent` tinyint(1) DEFAULT '0',
  `outlook_id` varchar(255) DEFAULT NULL,
  `repeat_type` varchar(36) DEFAULT NULL,
  `repeat_interval` int(3) DEFAULT '1',
  `repeat_dow` varchar(7) DEFAULT NULL,
  `repeat_until` date DEFAULT NULL,
  `repeat_count` int(7) DEFAULT NULL,
  `repeat_parent_id` char(36) DEFAULT NULL,
  `recurring_source` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_calls_tmst_id` (`team_set_id`),
  KEY `idx_call_name` (`name`),
  KEY `idx_status` (`status`),
  KEY `idx_calls_date_start` (`date_start`),
  KEY `idx_calls_par_del` (`parent_id`,`parent_type`,`deleted`),
  KEY `idx_calls_assigned_del` (`deleted`,`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calls`
--

LOCK TABLES `calls` WRITE;
/*!40000 ALTER TABLE `calls` DISABLE KEYS */;
/*!40000 ALTER TABLE `calls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calls_contacts`
--

DROP TABLE IF EXISTS `calls_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calls_contacts` (
  `id` varchar(36) NOT NULL,
  `call_id` varchar(36) DEFAULT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `required` varchar(1) DEFAULT '1',
  `accept_status` varchar(25) DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_call_call` (`call_id`),
  KEY `idx_con_call_con` (`contact_id`),
  KEY `idx_call_contact` (`call_id`,`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calls_contacts`
--

LOCK TABLES `calls_contacts` WRITE;
/*!40000 ALTER TABLE `calls_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `calls_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calls_leads`
--

DROP TABLE IF EXISTS `calls_leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calls_leads` (
  `id` varchar(36) NOT NULL,
  `call_id` varchar(36) DEFAULT NULL,
  `lead_id` varchar(36) DEFAULT NULL,
  `required` varchar(1) DEFAULT '1',
  `accept_status` varchar(25) DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_lead_call_call` (`call_id`),
  KEY `idx_lead_call_lead` (`lead_id`),
  KEY `idx_call_lead` (`call_id`,`lead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calls_leads`
--

LOCK TABLES `calls_leads` WRITE;
/*!40000 ALTER TABLE `calls_leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `calls_leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calls_users`
--

DROP TABLE IF EXISTS `calls_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calls_users` (
  `id` varchar(36) NOT NULL,
  `call_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `required` varchar(1) DEFAULT '1',
  `accept_status` varchar(25) DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_usr_call_call` (`call_id`),
  KEY `idx_usr_call_usr` (`user_id`),
  KEY `idx_call_users` (`call_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calls_users`
--

LOCK TABLES `calls_users` WRITE;
/*!40000 ALTER TABLE `calls_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `calls_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign_log`
--

DROP TABLE IF EXISTS `campaign_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign_log` (
  `id` char(36) NOT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  `target_tracker_key` varchar(36) DEFAULT NULL,
  `target_id` varchar(36) DEFAULT NULL,
  `target_type` varchar(100) DEFAULT NULL,
  `activity_type` varchar(100) DEFAULT NULL,
  `activity_date` datetime DEFAULT NULL,
  `related_id` varchar(36) DEFAULT NULL,
  `related_type` varchar(100) DEFAULT NULL,
  `archived` tinyint(1) DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `list_id` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `more_information` varchar(100) DEFAULT NULL,
  `marketing_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_camp_tracker` (`target_tracker_key`),
  KEY `idx_camp_campaign_id` (`campaign_id`),
  KEY `idx_camp_more_info` (`more_information`),
  KEY `idx_target_id` (`target_id`),
  KEY `idx_target_id_deleted` (`target_id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_log`
--

LOCK TABLES `campaign_log` WRITE;
/*!40000 ALTER TABLE `campaign_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign_trkrs`
--

DROP TABLE IF EXISTS `campaign_trkrs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaign_trkrs` (
  `id` char(36) NOT NULL,
  `tracker_name` varchar(30) DEFAULT NULL,
  `tracker_url` varchar(255) DEFAULT 'http://',
  `tracker_key` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` char(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `is_optout` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `campaign_tracker_key_idx` (`tracker_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_trkrs`
--

LOCK TABLES `campaign_trkrs` WRITE;
/*!40000 ALTER TABLE `campaign_trkrs` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaign_trkrs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaigns` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `tracker_key` int(11) NOT NULL AUTO_INCREMENT,
  `tracker_count` int(11) DEFAULT '0',
  `refer_url` varchar(255) DEFAULT 'http://',
  `tracker_text` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `impressions` int(11) DEFAULT '0',
  `currency_id` char(36) DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `expected_cost` double DEFAULT NULL,
  `actual_cost` double DEFAULT NULL,
  `expected_revenue` double DEFAULT NULL,
  `campaign_type` varchar(100) DEFAULT NULL,
  `objective` text,
  `content` text,
  `frequency` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_campaigns_tmst_id` (`team_set_id`),
  KEY `camp_auto_tracker_key` (`tracker_key`),
  KEY `idx_campaign_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaigns_audit`
--

DROP TABLE IF EXISTS `campaigns_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaigns_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_campaigns_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns_audit`
--

LOCK TABLES `campaigns_audit` WRITE;
/*!40000 ALTER TABLE `campaigns_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `campaigns_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `case_number` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `priority` varchar(100) DEFAULT NULL,
  `resolution` text,
  `system_id` int(11) DEFAULT NULL,
  `work_log` text,
  `account_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `casesnumk` (`case_number`),
  UNIQUE KEY `case_number` (`case_number`,`system_id`),
  KEY `idx_cases_tmst_id` (`team_set_id`),
  KEY `idx_case_name` (`name`),
  KEY `idx_account_id` (`account_id`),
  KEY `idx_cases_stat_del` (`assigned_user_id`,`status`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases`
--

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases_audit`
--

DROP TABLE IF EXISTS `cases_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_cases_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases_audit`
--

LOCK TABLES `cases_audit` WRITE;
/*!40000 ALTER TABLE `cases_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `cases_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases_bugs`
--

DROP TABLE IF EXISTS `cases_bugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases_bugs` (
  `id` varchar(36) NOT NULL,
  `case_id` varchar(36) DEFAULT NULL,
  `bug_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_cas_bug_cas` (`case_id`),
  KEY `idx_cas_bug_bug` (`bug_id`),
  KEY `idx_case_bug` (`case_id`,`bug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases_bugs`
--

LOCK TABLES `cases_bugs` WRITE;
/*!40000 ALTER TABLE `cases_bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cases_bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_tree`
--

DROP TABLE IF EXISTS `category_tree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_tree` (
  `self_id` varchar(36) DEFAULT NULL,
  `node_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_node_id` int(11) DEFAULT '0',
  `type` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`node_id`),
  KEY `idx_categorytree` (`self_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_tree`
--

LOCK TABLES `category_tree` WRITE;
/*!40000 ALTER TABLE `category_tree` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_tree` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `category` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `value` text,
  KEY `idx_config_cat` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES ('notify','fromaddress','do_not_reply@example.com'),('notify','fromname','SugarCRM'),('notify','send_by_default','1'),('notify','on','1'),('notify','send_from_assigning_user','0'),('info','sugar_version','6.5.10'),('MySettings','tab','YToxOTp7aTowO3M6NDoiSG9tZSI7aToxO3M6ODoiQWNjb3VudHMiO2k6MjtzOjg6IkNvbnRhY3RzIjtpOjM7czoxMzoiT3Bwb3J0dW5pdGllcyI7aTo0O3M6NToiTGVhZHMiO2k6NTtzOjg6IkNhbGVuZGFyIjtpOjY7czo3OiJSZXBvcnRzIjtpOjc7czo2OiJRdW90ZXMiO2k6ODtzOjk6IkRvY3VtZW50cyI7aTo5O3M6NjoiRW1haWxzIjtpOjEwO3M6OToiQ2FtcGFpZ25zIjtpOjExO3M6NToiQ2FsbHMiO2k6MTI7czo4OiJNZWV0aW5ncyI7aToxMztzOjU6IlRhc2tzIjtpOjE0O3M6NToiTm90ZXMiO2k6MTU7czo5OiJGb3JlY2FzdHMiO2k6MTY7czo1OiJDYXNlcyI7aToxNztzOjk6IlByb3NwZWN0cyI7aToxODtzOjEzOiJQcm9zcGVjdExpc3RzIjt9'),('portal','on','0'),('tracker','Tracker','1'),('tracker','tracker_perf','1'),('tracker','tracker_sessions','1'),('tracker','tracker_queries','1'),('system','system_id','1'),('system','skypeout_on','1'),('license','users','36'),('license','expire_date','2013-08-29'),('license','key','7e4ca99f860880fc851b05da69a16d30'),('license','num_lic_oc','0'),('MySettings','hide_subpanels','YTo0OntzOjc6InByb2plY3QiO3M6NzoicHJvamVjdCI7czo0OiJidWdzIjtzOjQ6ImJ1Z3MiO3M6ODoicHJvZHVjdHMiO3M6ODoicHJvZHVjdHMiO3M6OToiY29udHJhY3RzIjtzOjk6ImNvbnRyYWN0cyI7fQ=='),('sugarfeed','enabled','1'),('sugarfeed','module_UserFeed','1'),('sugarfeed','module_Cases','1'),('sugarfeed','module_Contacts','1'),('sugarfeed','module_Leads','1'),('sugarfeed','module_Opportunities','1'),('Update','CheckUpdates','automatic'),('system','name','SugarCRM'),('license','num_portal_users','50'),('license','validation_key','YTo4OntzOjE5OiJsaWNlbnNlX2V4cGlyZV9kYXRlIjtzOjEwOiIyMDEzLTA4LTI5IjtzOjE4OiJlbmZvcmNlX3VzZXJfbGltaXQiO3M6MToiMCI7czoxMzoibGljZW5zZV91c2VycyI7aTozNjtzOjE4OiJsaWNlbnNlX251bV9saWNfb2MiO2k6MDtzOjI0OiJsaWNlbnNlX251bV9wb3J0YWxfdXNlcnMiO3M6MjoiNTAiO3M6MjU6ImVuZm9yY2VfcG9ydGFsX3VzZXJfbGltaXQiO3M6MToiMSI7czoxOToibGljZW5zZV92a19lbmRfZGF0ZSI7czoxMDoiMjAxMy0wNS0wMiI7czoxMToibGljZW5zZV9rZXkiO3M6MzI6IjdlNGNhOTlmODYwODgwZmM4NTFiMDVkYTY5YTE2ZDMwIjt9'),('license','vk_end_date','2013-05-02'),('license','last_validation_success','2013-02-01 16:23:55'),('license','validation_notice',''),('license','enforce_portal_user_limit','1'),('license','enforce_user_limit','0'),('license','msg_admin',''),('license','msg_all',''),('license','last_validation','success'),('license','latest_versions','YToxOntpOjA7YToyOntzOjc6InZlcnNpb24iO3M6NToiNi41LjUiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjE2MjoiVGhlIGxhdGVzdCB2ZXJzaW9uIG9mIFN1Z2FyQ1JNIGlzIDYuNS41LiAgUGxlYXNlIHZpc2l0IDxhIGhyZWY9Imh0dHA6Ly9zdXBwb3J0LnN1Z2FyY3JtLmNvbSIgdGFyZ2V0PSJfbmV3Ij5zdXBwb3J0LnN1Z2FyY3JtLmNvbTwvYT4gdG8gYWNxdWlyZSB0aGUgbGF0ZXN0IHZlcnNpb24uIjt9fQ=='),('Update','last_check_date','1359735835'),('system','adminwizard','1');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(100) DEFAULT NULL,
  `phone_work` varchar(100) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `primary_address_street` varchar(150) DEFAULT NULL,
  `primary_address_city` varchar(100) DEFAULT NULL,
  `primary_address_state` varchar(100) DEFAULT NULL,
  `primary_address_postalcode` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(255) DEFAULT NULL,
  `alt_address_street` varchar(150) DEFAULT NULL,
  `alt_address_city` varchar(100) DEFAULT NULL,
  `alt_address_state` varchar(100) DEFAULT NULL,
  `alt_address_postalcode` varchar(20) DEFAULT NULL,
  `alt_address_country` varchar(255) DEFAULT NULL,
  `assistant` varchar(75) DEFAULT NULL,
  `assistant_phone` varchar(100) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `lead_source` varchar(255) DEFAULT NULL,
  `reports_to_id` char(36) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_contacts_tmst_id` (`team_set_id`),
  KEY `idx_cont_last_first` (`last_name`,`first_name`,`deleted`),
  KEY `idx_contacts_del_last` (`deleted`,`last_name`),
  KEY `idx_cont_del_reports` (`deleted`,`reports_to_id`,`last_name`),
  KEY `idx_reports_to_id` (`reports_to_id`),
  KEY `idx_del_id_user` (`deleted`,`id`,`assigned_user_id`),
  KEY `idx_cont_assigned` (`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts_audit`
--

DROP TABLE IF EXISTS `contacts_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_contacts_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_audit`
--

LOCK TABLES `contacts_audit` WRITE;
/*!40000 ALTER TABLE `contacts_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts_bugs`
--

DROP TABLE IF EXISTS `contacts_bugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts_bugs` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `bug_id` varchar(36) DEFAULT NULL,
  `contact_role` varchar(50) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_bug_con` (`contact_id`),
  KEY `idx_con_bug_bug` (`bug_id`),
  KEY `idx_contact_bug` (`contact_id`,`bug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_bugs`
--

LOCK TABLES `contacts_bugs` WRITE;
/*!40000 ALTER TABLE `contacts_bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts_cases`
--

DROP TABLE IF EXISTS `contacts_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts_cases` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `case_id` varchar(36) DEFAULT NULL,
  `contact_role` varchar(50) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_case_con` (`contact_id`),
  KEY `idx_con_case_case` (`case_id`),
  KEY `idx_contacts_cases` (`contact_id`,`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_cases`
--

LOCK TABLES `contacts_cases` WRITE;
/*!40000 ALTER TABLE `contacts_cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts_users`
--

DROP TABLE IF EXISTS `contacts_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts_users` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_users_con` (`contact_id`),
  KEY `idx_con_users_user` (`user_id`),
  KEY `idx_contacts_users` (`contact_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_users`
--

LOCK TABLES `contacts_users` WRITE;
/*!40000 ALTER TABLE `contacts_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contract_types`
--

DROP TABLE IF EXISTS `contract_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contract_types` (
  `id` char(36) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `list_order` int(4) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract_types`
--

LOCK TABLES `contract_types` WRITE;
/*!40000 ALTER TABLE `contract_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `contract_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `reference_code` varchar(255) DEFAULT NULL,
  `account_id` char(36) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  `total_contract_value` decimal(26,6) DEFAULT NULL,
  `total_contract_value_usdollar` decimal(26,6) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `customer_signed_date` date DEFAULT NULL,
  `company_signed_date` date DEFAULT NULL,
  `expiration_notice` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_contracts_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts`
--

LOCK TABLES `contracts` WRITE;
/*!40000 ALTER TABLE `contracts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts_audit`
--

DROP TABLE IF EXISTS `contracts_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_contracts_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts_audit`
--

LOCK TABLES `contracts_audit` WRITE;
/*!40000 ALTER TABLE `contracts_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts_contacts`
--

DROP TABLE IF EXISTS `contracts_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts_contacts` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `contract_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `contracts_contacts_alt` (`contact_id`,`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts_contacts`
--

LOCK TABLES `contracts_contacts` WRITE;
/*!40000 ALTER TABLE `contracts_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts_opportunities`
--

DROP TABLE IF EXISTS `contracts_opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts_opportunities` (
  `id` varchar(36) NOT NULL,
  `opportunity_id` varchar(36) DEFAULT NULL,
  `contract_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `contracts_opp_alt` (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts_opportunities`
--

LOCK TABLES `contracts_opportunities` WRITE;
/*!40000 ALTER TABLE `contracts_opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts_opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts_products`
--

DROP TABLE IF EXISTS `contracts_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts_products` (
  `id` varchar(36) NOT NULL,
  `product_id` varchar(36) DEFAULT NULL,
  `contract_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `contracts_prod_alt` (`contract_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts_products`
--

LOCK TABLES `contracts_products` WRITE;
/*!40000 ALTER TABLE `contracts_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts_quotes`
--

DROP TABLE IF EXISTS `contracts_quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts_quotes` (
  `id` varchar(36) NOT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  `contract_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `contracts_quot_alt` (`contract_id`,`quote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts_quotes`
--

LOCK TABLES `contracts_quotes` WRITE;
/*!40000 ALTER TABLE `contracts_quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts_quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currencies` (
  `id` char(36) NOT NULL,
  `name` varchar(36) DEFAULT NULL,
  `symbol` varchar(36) DEFAULT NULL,
  `iso4217` varchar(3) DEFAULT NULL,
  `conversion_rate` double DEFAULT '0',
  `status` varchar(100) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_currency_name` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_fields`
--

DROP TABLE IF EXISTS `custom_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom_fields` (
  `bean_id` varchar(36) DEFAULT NULL,
  `set_num` int(11) DEFAULT '0',
  `field0` varchar(255) DEFAULT NULL,
  `field1` varchar(255) DEFAULT NULL,
  `field2` varchar(255) DEFAULT NULL,
  `field3` varchar(255) DEFAULT NULL,
  `field4` varchar(255) DEFAULT NULL,
  `field5` varchar(255) DEFAULT NULL,
  `field6` varchar(255) DEFAULT NULL,
  `field7` varchar(255) DEFAULT NULL,
  `field8` varchar(255) DEFAULT NULL,
  `field9` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  KEY `idx_beanid_set_num` (`bean_id`,`set_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_fields`
--

LOCK TABLES `custom_fields` WRITE;
/*!40000 ALTER TABLE `custom_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `custom_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_revisions`
--

DROP TABLE IF EXISTS `document_revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_revisions` (
  `id` varchar(36) NOT NULL,
  `change_log` varchar(255) DEFAULT NULL,
  `document_id` varchar(36) DEFAULT NULL,
  `doc_id` varchar(100) DEFAULT NULL,
  `doc_type` varchar(100) DEFAULT NULL,
  `doc_url` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file_ext` varchar(100) DEFAULT NULL,
  `file_mime_type` varchar(100) DEFAULT NULL,
  `revision` varchar(100) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documentrevision_mimetype` (`file_mime_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_revisions`
--

LOCK TABLES `document_revisions` WRITE;
/*!40000 ALTER TABLE `document_revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `doc_id` varchar(100) DEFAULT NULL,
  `doc_type` varchar(100) DEFAULT 'Sugar',
  `doc_url` varchar(255) DEFAULT NULL,
  `active_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `category_id` varchar(100) DEFAULT NULL,
  `subcategory_id` varchar(100) DEFAULT NULL,
  `status_id` varchar(100) DEFAULT NULL,
  `document_revision_id` varchar(36) DEFAULT NULL,
  `related_doc_id` char(36) DEFAULT NULL,
  `related_doc_rev_id` char(36) DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT '0',
  `template_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_documents_tmst_id` (`team_set_id`),
  KEY `idx_doc_cat` (`category_id`,`subcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_accounts`
--

DROP TABLE IF EXISTS `documents_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_accounts` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_accounts_account_id` (`account_id`,`document_id`),
  KEY `documents_accounts_document_id` (`document_id`,`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_accounts`
--

LOCK TABLES `documents_accounts` WRITE;
/*!40000 ALTER TABLE `documents_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_bugs`
--

DROP TABLE IF EXISTS `documents_bugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_bugs` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `bug_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_bugs_bug_id` (`bug_id`,`document_id`),
  KEY `documents_bugs_document_id` (`document_id`,`bug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_bugs`
--

LOCK TABLES `documents_bugs` WRITE;
/*!40000 ALTER TABLE `documents_bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_cases`
--

DROP TABLE IF EXISTS `documents_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_cases` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `case_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_cases_case_id` (`case_id`,`document_id`),
  KEY `documents_cases_document_id` (`document_id`,`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_cases`
--

LOCK TABLES `documents_cases` WRITE;
/*!40000 ALTER TABLE `documents_cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_contacts`
--

DROP TABLE IF EXISTS `documents_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_contacts` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_contacts_contact_id` (`contact_id`,`document_id`),
  KEY `documents_contacts_document_id` (`document_id`,`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_contacts`
--

LOCK TABLES `documents_contacts` WRITE;
/*!40000 ALTER TABLE `documents_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_opportunities`
--

DROP TABLE IF EXISTS `documents_opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_opportunities` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `opportunity_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_docu_opps_oppo_id` (`opportunity_id`,`document_id`),
  KEY `idx_docu_oppo_docu_id` (`document_id`,`opportunity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_opportunities`
--

LOCK TABLES `documents_opportunities` WRITE;
/*!40000 ALTER TABLE `documents_opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_products`
--

DROP TABLE IF EXISTS `documents_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_products` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `product_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_products_product_id` (`product_id`,`document_id`),
  KEY `documents_products_document_id` (`document_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_products`
--

LOCK TABLES `documents_products` WRITE;
/*!40000 ALTER TABLE `documents_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_quotes`
--

DROP TABLE IF EXISTS `documents_quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_quotes` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) DEFAULT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_quotes_quote_id` (`quote_id`,`document_id`),
  KEY `documents_quotes_document_id` (`document_id`,`quote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_quotes`
--

LOCK TABLES `documents_quotes` WRITE;
/*!40000 ALTER TABLE `documents_quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eapm`
--

DROP TABLE IF EXISTS `eapm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eapm` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `application` varchar(100) DEFAULT 'webex',
  `api_data` text,
  `consumer_key` varchar(255) DEFAULT NULL,
  `consumer_secret` varchar(255) DEFAULT NULL,
  `oauth_token` varchar(255) DEFAULT NULL,
  `oauth_secret` varchar(255) DEFAULT NULL,
  `validated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_app_active` (`assigned_user_id`,`application`,`validated`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eapm`
--

LOCK TABLES `eapm` WRITE;
/*!40000 ALTER TABLE `eapm` DISABLE KEYS */;
/*!40000 ALTER TABLE `eapm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_addr_bean_rel`
--

DROP TABLE IF EXISTS `email_addr_bean_rel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_addr_bean_rel` (
  `id` char(36) NOT NULL,
  `email_address_id` char(36) NOT NULL,
  `bean_id` char(36) NOT NULL,
  `bean_module` varchar(100) DEFAULT NULL,
  `primary_address` tinyint(1) DEFAULT '0',
  `reply_to_address` tinyint(1) DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_email_address_id` (`email_address_id`),
  KEY `idx_bean_id` (`bean_id`,`bean_module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_addr_bean_rel`
--

LOCK TABLES `email_addr_bean_rel` WRITE;
/*!40000 ALTER TABLE `email_addr_bean_rel` DISABLE KEYS */;
INSERT INTO `email_addr_bean_rel` VALUES ('86263271-cad7-98bd-c8af-510becb0b2b9','863c7908-2a44-bca2-65ce-510bec4b056c','1','Users',1,0,'2013-02-01 16:24:07','2013-02-01 16:24:07',0);
/*!40000 ALTER TABLE `email_addr_bean_rel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_addresses`
--

DROP TABLE IF EXISTS `email_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_addresses` (
  `id` char(36) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `email_address_caps` varchar(255) DEFAULT NULL,
  `invalid_email` tinyint(1) DEFAULT '0',
  `opt_out` tinyint(1) DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_ea_caps_opt_out_invalid` (`email_address_caps`,`opt_out`,`invalid_email`),
  KEY `idx_ea_opt_out_invalid` (`email_address`,`opt_out`,`invalid_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_addresses`
--

LOCK TABLES `email_addresses` WRITE;
/*!40000 ALTER TABLE `email_addresses` DISABLE KEYS */;
INSERT INTO `email_addresses` VALUES ('863c7908-2a44-bca2-65ce-510bec4b056c','ccassity@intricity.com','CCASSITY@INTRICITY.COM',0,0,'2013-02-01 16:24:07','2013-02-01 16:24:07',0);
/*!40000 ALTER TABLE `email_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_cache`
--

DROP TABLE IF EXISTS `email_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_cache` (
  `ie_id` char(36) DEFAULT NULL,
  `mbox` varchar(60) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `fromaddr` varchar(100) DEFAULT NULL,
  `toaddr` varchar(255) DEFAULT NULL,
  `senddate` datetime DEFAULT NULL,
  `message_id` varchar(255) DEFAULT NULL,
  `mailsize` int(10) unsigned DEFAULT NULL,
  `imap_uid` int(10) unsigned DEFAULT NULL,
  `msgno` int(10) unsigned DEFAULT NULL,
  `recent` tinyint(4) DEFAULT NULL,
  `flagged` tinyint(4) DEFAULT NULL,
  `answered` tinyint(4) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT NULL,
  `seen` tinyint(4) DEFAULT NULL,
  `draft` tinyint(4) DEFAULT NULL,
  KEY `idx_ie_id` (`ie_id`),
  KEY `idx_mail_date` (`ie_id`,`mbox`,`senddate`),
  KEY `idx_mail_from` (`ie_id`,`mbox`,`fromaddr`),
  KEY `idx_mail_subj` (`subject`),
  KEY `idx_mail_to` (`toaddr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_cache`
--

LOCK TABLES `email_cache` WRITE;
/*!40000 ALTER TABLE `email_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_marketing`
--

DROP TABLE IF EXISTS `email_marketing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_marketing` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `from_name` varchar(100) DEFAULT NULL,
  `from_addr` varchar(100) DEFAULT NULL,
  `reply_to_name` varchar(100) DEFAULT NULL,
  `reply_to_addr` varchar(100) DEFAULT NULL,
  `inbound_email_id` varchar(36) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `template_id` char(36) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  `all_prospect_lists` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_emmkt_name` (`name`),
  KEY `idx_emmkit_del` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_marketing`
--

LOCK TABLES `email_marketing` WRITE;
/*!40000 ALTER TABLE `email_marketing` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_marketing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_marketing_prospect_lists`
--

DROP TABLE IF EXISTS `email_marketing_prospect_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_marketing_prospect_lists` (
  `id` varchar(36) NOT NULL,
  `prospect_list_id` varchar(36) DEFAULT NULL,
  `email_marketing_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `email_mp_prospects` (`email_marketing_id`,`prospect_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_marketing_prospect_lists`
--

LOCK TABLES `email_marketing_prospect_lists` WRITE;
/*!40000 ALTER TABLE `email_marketing_prospect_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_marketing_prospect_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templates`
--

DROP TABLE IF EXISTS `email_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templates` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `published` varchar(3) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `subject` varchar(255) DEFAULT NULL,
  `body` text,
  `body_html` text,
  `deleted` tinyint(1) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `base_module` varchar(50) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `from_address` varchar(255) DEFAULT NULL,
  `text_only` tinyint(1) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_email_templates_tmst_id` (`team_set_id`),
  KEY `idx_email_template_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templates`
--

LOCK TABLES `email_templates` WRITE;
/*!40000 ALTER TABLE `email_templates` DISABLE KEYS */;
INSERT INTO `email_templates` VALUES ('2c742790-0147-af73-cdee-510becee5efc','2c742790-0147-af73-cdee-510becee5efc','82708ad7-a31f-1bd0-c1e1-510bec269d29','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','off','System-generated password email','This template is used when the System Administrator sends a new password to a user.','New account information','\nHere is your account username and temporary password:\nUsername : $contact_user_user_name\nPassword : $contact_user_user_hash\n\n$config_site_url\n\nAfter you log in using the above password, you may be required to reset the password to one of your own choice.','<div><table width=\"550\"><tbody><tr><td><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br /><p>$config_site_url</p><br /><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td></td>         </tr></tbody></table></div>',0,NULL,NULL,NULL,NULL,0,NULL),('2c742790-0147-af73-cdee-510becee5efc','2c742790-0147-af73-cdee-510becee5efc','84dae2e2-3e25-8df2-499c-510bec5a25af','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','off','Forgot Password email','This template is used to send a user a link to click to reset the user\'s account password.','Reset your account password','\nYou recently requested on $contact_user_pwd_last_changed to be able to reset your account password.\n\nClick on the link below to reset your password:\n\n$contact_user_link_guid','<div><table width=\"550\"><tbody><tr><td><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td></td>         </tr></tbody></table></div>',0,NULL,NULL,NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `email_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emailman`
--

DROP TABLE IF EXISTS `emailman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emailman` (
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_id` char(36) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` char(36) DEFAULT NULL,
  `marketing_id` char(36) DEFAULT NULL,
  `list_id` char(36) DEFAULT NULL,
  `send_date_time` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `in_queue` tinyint(1) DEFAULT '0',
  `in_queue_date` datetime DEFAULT NULL,
  `send_attempts` int(11) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `related_id` char(36) DEFAULT NULL,
  `related_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_eman_list` (`list_id`,`user_id`,`deleted`),
  KEY `idx_eman_campaign_id` (`campaign_id`),
  KEY `idx_eman_relid_reltype_id` (`related_id`,`related_type`,`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emailman`
--

LOCK TABLES `emailman` WRITE;
/*!40000 ALTER TABLE `emailman` DISABLE KEYS */;
/*!40000 ALTER TABLE `emailman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  `message_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `flagged` tinyint(1) DEFAULT NULL,
  `reply_to_status` tinyint(1) DEFAULT NULL,
  `intent` varchar(100) DEFAULT 'pick',
  `mailbox_id` char(36) DEFAULT NULL,
  `parent_type` varchar(100) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_emails_tmst_id` (`team_set_id`),
  KEY `idx_email_name` (`name`),
  KEY `idx_message_id` (`message_id`),
  KEY `idx_email_parent_id` (`parent_id`),
  KEY `idx_email_assigned` (`assigned_user_id`,`type`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails_beans`
--

DROP TABLE IF EXISTS `emails_beans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails_beans` (
  `id` char(36) NOT NULL,
  `email_id` char(36) DEFAULT NULL,
  `bean_id` char(36) DEFAULT NULL,
  `bean_module` varchar(100) DEFAULT NULL,
  `campaign_data` text,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_emails_beans_bean_id` (`bean_id`),
  KEY `idx_emails_beans_email_bean` (`email_id`,`bean_id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails_beans`
--

LOCK TABLES `emails_beans` WRITE;
/*!40000 ALTER TABLE `emails_beans` DISABLE KEYS */;
/*!40000 ALTER TABLE `emails_beans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails_email_addr_rel`
--

DROP TABLE IF EXISTS `emails_email_addr_rel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails_email_addr_rel` (
  `id` char(36) NOT NULL,
  `email_id` char(36) NOT NULL,
  `address_type` varchar(4) DEFAULT NULL,
  `email_address_id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_eearl_email_id` (`email_id`,`address_type`),
  KEY `idx_eearl_address_id` (`email_address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails_email_addr_rel`
--

LOCK TABLES `emails_email_addr_rel` WRITE;
/*!40000 ALTER TABLE `emails_email_addr_rel` DISABLE KEYS */;
/*!40000 ALTER TABLE `emails_email_addr_rel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails_text`
--

DROP TABLE IF EXISTS `emails_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails_text` (
  `email_id` char(36) NOT NULL,
  `from_addr` varchar(255) DEFAULT NULL,
  `reply_to_addr` varchar(255) DEFAULT NULL,
  `to_addrs` text,
  `cc_addrs` text,
  `bcc_addrs` text,
  `description` longtext,
  `description_html` longtext,
  `raw_source` longtext,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`email_id`),
  KEY `emails_textfromaddr` (`from_addr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails_text`
--

LOCK TABLES `emails_text` WRITE;
/*!40000 ALTER TABLE `emails_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `emails_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expressions`
--

DROP TABLE IF EXISTS `expressions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expressions` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `lhs_type` varchar(15) DEFAULT NULL,
  `lhs_field` varchar(50) DEFAULT NULL,
  `lhs_module` varchar(50) DEFAULT NULL,
  `lhs_value` varchar(100) DEFAULT NULL,
  `lhs_group_type` varchar(10) DEFAULT NULL,
  `operator` varchar(15) DEFAULT NULL,
  `rhs_group_type` varchar(10) DEFAULT NULL,
  `rhs_type` varchar(15) DEFAULT NULL,
  `rhs_field` varchar(50) DEFAULT NULL,
  `rhs_module` varchar(50) DEFAULT NULL,
  `rhs_value` varchar(255) DEFAULT NULL,
  `parent_id` char(36) NOT NULL,
  `exp_type` varchar(100) DEFAULT NULL,
  `exp_order` int(4) DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  `parent_exp_id` char(36) DEFAULT NULL,
  `parent_exp_side` int(8) DEFAULT NULL,
  `ext1` varchar(50) DEFAULT NULL,
  `ext2` varchar(50) DEFAULT NULL,
  `ext3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_exp` (`parent_id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expressions`
--

LOCK TABLES `expressions` WRITE;
/*!40000 ALTER TABLE `expressions` DISABLE KEYS */;
/*!40000 ALTER TABLE `expressions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fields_meta_data`
--

DROP TABLE IF EXISTS `fields_meta_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fields_meta_data` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vname` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `help` varchar(255) DEFAULT NULL,
  `custom_module` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `len` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT '0',
  `default_value` varchar(255) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `audited` tinyint(1) DEFAULT '0',
  `massupdate` tinyint(1) DEFAULT '0',
  `duplicate_merge` smallint(6) DEFAULT '0',
  `reportable` tinyint(1) DEFAULT '1',
  `importable` varchar(255) DEFAULT NULL,
  `ext1` varchar(255) DEFAULT NULL,
  `ext2` varchar(255) DEFAULT NULL,
  `ext3` varchar(255) DEFAULT NULL,
  `ext4` text,
  PRIMARY KEY (`id`),
  KEY `idx_meta_id_del` (`id`,`deleted`),
  KEY `idx_meta_cm_del` (`custom_module`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fields_meta_data`
--

LOCK TABLES `fields_meta_data` WRITE;
/*!40000 ALTER TABLE `fields_meta_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `fields_meta_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folders`
--

DROP TABLE IF EXISTS `folders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folders` (
  `id` char(36) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `folder_type` varchar(25) DEFAULT NULL,
  `parent_folder` char(36) DEFAULT NULL,
  `has_child` tinyint(1) DEFAULT '0',
  `is_group` tinyint(1) DEFAULT '0',
  `is_dynamic` tinyint(1) DEFAULT '0',
  `dynamic_query` text,
  `assign_to_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_parent_folder` (`parent_folder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folders`
--

LOCK TABLES `folders` WRITE;
/*!40000 ALTER TABLE `folders` DISABLE KEYS */;
/*!40000 ALTER TABLE `folders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folders_rel`
--

DROP TABLE IF EXISTS `folders_rel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folders_rel` (
  `id` char(36) NOT NULL,
  `folder_id` char(36) NOT NULL,
  `polymorphic_module` varchar(25) DEFAULT NULL,
  `polymorphic_id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_poly_module_poly_id` (`polymorphic_module`,`polymorphic_id`),
  KEY `idx_fr_id_deleted_poly` (`folder_id`,`deleted`,`polymorphic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folders_rel`
--

LOCK TABLES `folders_rel` WRITE;
/*!40000 ALTER TABLE `folders_rel` DISABLE KEYS */;
/*!40000 ALTER TABLE `folders_rel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folders_subscriptions`
--

DROP TABLE IF EXISTS `folders_subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folders_subscriptions` (
  `id` char(36) NOT NULL,
  `folder_id` char(36) NOT NULL,
  `assigned_user_id` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_folder_id_assigned_user_id` (`folder_id`,`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folders_subscriptions`
--

LOCK TABLES `folders_subscriptions` WRITE;
/*!40000 ALTER TABLE `folders_subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `folders_subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forecast_schedule`
--

DROP TABLE IF EXISTS `forecast_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forecast_schedule` (
  `id` char(36) NOT NULL,
  `timeperiod_id` char(36) DEFAULT NULL,
  `user_id` char(36) DEFAULT NULL,
  `cascade_hierarchy` tinyint(1) DEFAULT NULL,
  `forecast_start_date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forecast_schedule`
--

LOCK TABLES `forecast_schedule` WRITE;
/*!40000 ALTER TABLE `forecast_schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `forecast_schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forecasts`
--

DROP TABLE IF EXISTS `forecasts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forecasts` (
  `id` char(36) NOT NULL,
  `timeperiod_id` char(36) DEFAULT NULL,
  `forecast_type` varchar(100) DEFAULT NULL,
  `opp_count` int(5) DEFAULT NULL,
  `opp_weigh_value` int(11) DEFAULT NULL,
  `best_case` bigint(20) DEFAULT NULL,
  `likely_case` bigint(20) DEFAULT NULL,
  `worst_case` bigint(20) DEFAULT NULL,
  `user_id` char(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forecasts`
--

LOCK TABLES `forecasts` WRITE;
/*!40000 ALTER TABLE `forecasts` DISABLE KEYS */;
/*!40000 ALTER TABLE `forecasts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fts_queue`
--

DROP TABLE IF EXISTS `fts_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fts_queue` (
  `bean_id` char(36) DEFAULT NULL,
  `bean_module` varchar(100) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `processed` tinyint(1) DEFAULT '0',
  KEY `idx_beans_bean_id` (`bean_module`,`bean_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fts_queue`
--

LOCK TABLES `fts_queue` WRITE;
/*!40000 ALTER TABLE `fts_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `fts_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `holidays`
--

DROP TABLE IF EXISTS `holidays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `holidays` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `holiday_date` date DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT NULL,
  `person_id` char(36) DEFAULT NULL,
  `person_type` varchar(255) DEFAULT NULL,
  `related_module` varchar(255) DEFAULT NULL,
  `related_module_id` char(36) DEFAULT NULL,
  `resource_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_holiday_id_del` (`id`,`deleted`),
  KEY `idx_holiday_id_rel` (`related_module_id`,`related_module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `holidays`
--

LOCK TABLES `holidays` WRITE;
/*!40000 ALTER TABLE `holidays` DISABLE KEYS */;
/*!40000 ALTER TABLE `holidays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `import_maps`
--

DROP TABLE IF EXISTS `import_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `import_maps` (
  `id` char(36) NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `source` varchar(36) DEFAULT NULL,
  `enclosure` varchar(1) DEFAULT ' ',
  `delimiter` varchar(1) DEFAULT ',',
  `module` varchar(36) DEFAULT NULL,
  `content` text,
  `default_values` text,
  `has_header` tinyint(1) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `is_published` varchar(3) DEFAULT 'no',
  PRIMARY KEY (`id`),
  KEY `idx_owner_module_name` (`assigned_user_id`,`module`,`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `import_maps`
--

LOCK TABLES `import_maps` WRITE;
/*!40000 ALTER TABLE `import_maps` DISABLE KEYS */;
/*!40000 ALTER TABLE `import_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbound_email`
--

DROP TABLE IF EXISTS `inbound_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbound_email` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` varchar(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Active',
  `server_url` varchar(100) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `email_password` varchar(100) DEFAULT NULL,
  `port` int(5) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `mailbox` text,
  `delete_seen` tinyint(1) DEFAULT '0',
  `mailbox_type` varchar(10) DEFAULT NULL,
  `template_id` char(36) DEFAULT NULL,
  `stored_options` text,
  `group_id` char(36) DEFAULT NULL,
  `is_personal` tinyint(1) DEFAULT '0',
  `groupfolder_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_inbound_email_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbound_email`
--

LOCK TABLES `inbound_email` WRITE;
/*!40000 ALTER TABLE `inbound_email` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbound_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbound_email_autoreply`
--

DROP TABLE IF EXISTS `inbound_email_autoreply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbound_email_autoreply` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `autoreplied_to` varchar(100) DEFAULT NULL,
  `ie_id` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_ie_autoreplied_to` (`autoreplied_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbound_email_autoreply`
--

LOCK TABLES `inbound_email_autoreply` WRITE;
/*!40000 ALTER TABLE `inbound_email_autoreply` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbound_email_autoreply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbound_email_cache_ts`
--

DROP TABLE IF EXISTS `inbound_email_cache_ts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbound_email_cache_ts` (
  `id` varchar(255) NOT NULL,
  `ie_timestamp` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbound_email_cache_ts`
--

LOCK TABLES `inbound_email_cache_ts` WRITE;
/*!40000 ALTER TABLE `inbound_email_cache_ts` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbound_email_cache_ts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_queue`
--

DROP TABLE IF EXISTS `job_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_queue` (
  `assigned_user_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `scheduler_id` char(36) DEFAULT NULL,
  `execute_time` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `resolution` varchar(20) DEFAULT NULL,
  `message` text,
  `target` varchar(255) DEFAULT NULL,
  `data` text,
  `requeue` tinyint(1) DEFAULT '0',
  `retry_count` tinyint(4) DEFAULT NULL,
  `failure_count` tinyint(4) DEFAULT NULL,
  `job_delay` int(11) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `percent_complete` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_status_scheduler` (`status`,`scheduler_id`),
  KEY `idx_status_time` (`status`,`execute_time`,`date_entered`),
  KEY `idx_status_entered` (`status`,`date_entered`),
  KEY `idx_status_modified` (`status`,`date_modified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_queue`
--

LOCK TABLES `job_queue` WRITE;
/*!40000 ALTER TABLE `job_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbcontents`
--

DROP TABLE IF EXISTS `kbcontents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbcontents` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `kbdocument_body` longtext,
  `document_revision_id` char(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `modified_user_id` char(36) DEFAULT NULL,
  `kb_index` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fts_unique_idx` (`kb_index`),
  KEY `idx_kbcontents_tmst_id` (`team_set_id`),
  FULLTEXT KEY `kbdocument_body` (`kbdocument_body`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbcontents`
--

LOCK TABLES `kbcontents` WRITE;
/*!40000 ALTER TABLE `kbcontents` DISABLE KEYS */;
/*!40000 ALTER TABLE `kbcontents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbcontents_audit`
--

DROP TABLE IF EXISTS `kbcontents_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbcontents_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_kbcontents_parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbcontents_audit`
--

LOCK TABLES `kbcontents_audit` WRITE;
/*!40000 ALTER TABLE `kbcontents_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `kbcontents_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbdocument_revisions`
--

DROP TABLE IF EXISTS `kbdocument_revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbdocument_revisions` (
  `id` varchar(36) NOT NULL,
  `change_log` varchar(255) DEFAULT NULL,
  `kbdocument_id` varchar(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file_ext` varchar(100) DEFAULT NULL,
  `file_mime_type` varchar(100) DEFAULT NULL,
  `revision` varchar(100) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `latest` tinyint(1) DEFAULT '0',
  `kbcontent_id` varchar(36) DEFAULT NULL,
  `document_revision_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_del_latest_kbcontent_id` (`deleted`,`latest`,`kbcontent_id`),
  KEY `idx_cont_id_doc_id` (`kbcontent_id`,`kbdocument_id`),
  KEY `idx_name_rev_id_del` (`document_revision_id`,`kbdocument_id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbdocument_revisions`
--

LOCK TABLES `kbdocument_revisions` WRITE;
/*!40000 ALTER TABLE `kbdocument_revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `kbdocument_revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbdocuments`
--

DROP TABLE IF EXISTS `kbdocuments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbdocuments` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` varchar(36) NOT NULL,
  `kbdocument_name` varchar(255) DEFAULT NULL,
  `active_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `status_id` varchar(100) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `is_external_article` tinyint(1) DEFAULT '0',
  `description` text,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `kbdocument_revision_id` varchar(36) DEFAULT NULL,
  `kbdocument_revision_number` varchar(100) DEFAULT NULL,
  `mail_merge_document` varchar(3) DEFAULT 'off',
  `related_doc_id` char(36) DEFAULT NULL,
  `related_doc_rev_id` char(36) DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT '0',
  `template_type` varchar(100) DEFAULT NULL,
  `kbdoc_approver_id` char(36) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_kbdocuments_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbdocuments`
--

LOCK TABLES `kbdocuments` WRITE;
/*!40000 ALTER TABLE `kbdocuments` DISABLE KEYS */;
/*!40000 ALTER TABLE `kbdocuments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbdocuments_kbtags`
--

DROP TABLE IF EXISTS `kbdocuments_kbtags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbdocuments_kbtags` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` varchar(36) NOT NULL,
  `kbdocument_id` varchar(36) DEFAULT NULL,
  `kbtag_id` varchar(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `revision` varchar(100) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_kbdocuments_kbtags_tmst_id` (`team_set_id`),
  KEY `idx_doc_id_tag_id` (`kbdocument_id`,`kbtag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbdocuments_kbtags`
--

LOCK TABLES `kbdocuments_kbtags` WRITE;
/*!40000 ALTER TABLE `kbdocuments_kbtags` DISABLE KEYS */;
/*!40000 ALTER TABLE `kbdocuments_kbtags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbdocuments_views_ratings`
--

DROP TABLE IF EXISTS `kbdocuments_views_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbdocuments_views_ratings` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `kbdocument_id` varchar(36) DEFAULT NULL,
  `views_number` int(11) DEFAULT '0',
  `ratings_number` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_kbvr_kbdoc` (`kbdocument_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbdocuments_views_ratings`
--

LOCK TABLES `kbdocuments_views_ratings` WRITE;
/*!40000 ALTER TABLE `kbdocuments_views_ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `kbdocuments_views_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kbtags`
--

DROP TABLE IF EXISTS `kbtags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kbtags` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` varchar(36) NOT NULL,
  `parent_tag_id` varchar(36) DEFAULT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `root_tag` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `revision` varchar(100) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_kbtags_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kbtags`
--

LOCK TABLES `kbtags` WRITE;
/*!40000 ALTER TABLE `kbtags` DISABLE KEYS */;
INSERT INTO `kbtags` VALUES (NULL,NULL,'FAQs',NULL,'FAQs',0,NULL,NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `kbtags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leads` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(100) DEFAULT NULL,
  `phone_work` varchar(100) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `primary_address_street` varchar(150) DEFAULT NULL,
  `primary_address_city` varchar(100) DEFAULT NULL,
  `primary_address_state` varchar(100) DEFAULT NULL,
  `primary_address_postalcode` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(255) DEFAULT NULL,
  `alt_address_street` varchar(150) DEFAULT NULL,
  `alt_address_city` varchar(100) DEFAULT NULL,
  `alt_address_state` varchar(100) DEFAULT NULL,
  `alt_address_postalcode` varchar(20) DEFAULT NULL,
  `alt_address_country` varchar(255) DEFAULT NULL,
  `assistant` varchar(75) DEFAULT NULL,
  `assistant_phone` varchar(100) DEFAULT NULL,
  `converted` tinyint(1) DEFAULT '0',
  `refered_by` varchar(100) DEFAULT NULL,
  `lead_source` varchar(100) DEFAULT NULL,
  `lead_source_description` text,
  `status` varchar(100) DEFAULT NULL,
  `status_description` text,
  `reports_to_id` char(36) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_description` text,
  `contact_id` char(36) DEFAULT NULL,
  `account_id` char(36) DEFAULT NULL,
  `opportunity_id` char(36) DEFAULT NULL,
  `opportunity_name` varchar(255) DEFAULT NULL,
  `opportunity_amount` varchar(50) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `portal_name` varchar(255) DEFAULT NULL,
  `portal_app` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_leads_tmst_id` (`team_set_id`),
  KEY `idx_lead_acct_name_first` (`account_name`,`deleted`),
  KEY `idx_lead_last_first` (`last_name`,`first_name`,`deleted`),
  KEY `idx_lead_del_stat` (`last_name`,`status`,`deleted`,`first_name`),
  KEY `idx_lead_opp_del` (`opportunity_id`,`deleted`),
  KEY `idx_leads_acct_del` (`account_id`,`deleted`),
  KEY `idx_del_user` (`deleted`,`assigned_user_id`),
  KEY `idx_lead_assigned` (`assigned_user_id`),
  KEY `idx_lead_contact` (`contact_id`),
  KEY `idx_reports_to` (`reports_to_id`),
  KEY `idx_lead_phone_work` (`phone_work`),
  KEY `idx_leads_id_del` (`id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads`
--

LOCK TABLES `leads` WRITE;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leads_audit`
--

DROP TABLE IF EXISTS `leads_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leads_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_leads_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads_audit`
--

LOCK TABLES `leads_audit` WRITE;
/*!40000 ALTER TABLE `leads_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linked_documents`
--

DROP TABLE IF EXISTS `linked_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linked_documents` (
  `id` varchar(36) NOT NULL,
  `parent_id` varchar(36) DEFAULT NULL,
  `parent_type` varchar(25) DEFAULT NULL,
  `document_id` varchar(36) DEFAULT NULL,
  `document_revision_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_parent_document` (`parent_type`,`parent_id`,`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linked_documents`
--

LOCK TABLES `linked_documents` WRITE;
/*!40000 ALTER TABLE `linked_documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `linked_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturers`
--

DROP TABLE IF EXISTS `manufacturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturers` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `list_order` int(4) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_manufacturers` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturers`
--

LOCK TABLES `manufacturers` WRITE;
/*!40000 ALTER TABLE `manufacturers` DISABLE KEYS */;
/*!40000 ALTER TABLE `manufacturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetings` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `join_url` varchar(200) DEFAULT NULL,
  `host_url` varchar(400) DEFAULT NULL,
  `displayed_url` varchar(400) DEFAULT NULL,
  `creator` varchar(50) DEFAULT NULL,
  `external_id` varchar(50) DEFAULT NULL,
  `duration_hours` int(3) DEFAULT NULL,
  `duration_minutes` int(2) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `parent_type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Planned',
  `type` varchar(255) DEFAULT 'Sugar',
  `parent_id` char(36) DEFAULT NULL,
  `reminder_time` int(11) DEFAULT '-1',
  `email_reminder_time` int(11) DEFAULT '-1',
  `email_reminder_sent` tinyint(1) DEFAULT '0',
  `outlook_id` varchar(255) DEFAULT NULL,
  `sequence` int(11) DEFAULT '0',
  `repeat_type` varchar(36) DEFAULT NULL,
  `repeat_interval` int(3) DEFAULT '1',
  `repeat_dow` varchar(7) DEFAULT NULL,
  `repeat_until` date DEFAULT NULL,
  `repeat_count` int(7) DEFAULT NULL,
  `repeat_parent_id` char(36) DEFAULT NULL,
  `recurring_source` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_meetings_tmst_id` (`team_set_id`),
  KEY `idx_mtg_name` (`name`),
  KEY `idx_meet_par_del` (`parent_id`,`parent_type`,`deleted`),
  KEY `idx_meet_stat_del` (`assigned_user_id`,`status`,`deleted`),
  KEY `idx_meet_date_start` (`date_start`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings`
--

LOCK TABLES `meetings` WRITE;
/*!40000 ALTER TABLE `meetings` DISABLE KEYS */;
/*!40000 ALTER TABLE `meetings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings_contacts`
--

DROP TABLE IF EXISTS `meetings_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetings_contacts` (
  `id` varchar(36) NOT NULL,
  `meeting_id` varchar(36) DEFAULT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `required` varchar(1) DEFAULT '1',
  `accept_status` varchar(25) DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_mtg_mtg` (`meeting_id`),
  KEY `idx_con_mtg_con` (`contact_id`),
  KEY `idx_meeting_contact` (`meeting_id`,`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings_contacts`
--

LOCK TABLES `meetings_contacts` WRITE;
/*!40000 ALTER TABLE `meetings_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `meetings_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings_leads`
--

DROP TABLE IF EXISTS `meetings_leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetings_leads` (
  `id` varchar(36) NOT NULL,
  `meeting_id` varchar(36) DEFAULT NULL,
  `lead_id` varchar(36) DEFAULT NULL,
  `required` varchar(1) DEFAULT '1',
  `accept_status` varchar(25) DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_lead_meeting_meeting` (`meeting_id`),
  KEY `idx_lead_meeting_lead` (`lead_id`),
  KEY `idx_meeting_lead` (`meeting_id`,`lead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings_leads`
--

LOCK TABLES `meetings_leads` WRITE;
/*!40000 ALTER TABLE `meetings_leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `meetings_leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings_users`
--

DROP TABLE IF EXISTS `meetings_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetings_users` (
  `id` varchar(36) NOT NULL,
  `meeting_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `required` varchar(1) DEFAULT '1',
  `accept_status` varchar(25) DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_usr_mtg_mtg` (`meeting_id`),
  KEY `idx_usr_mtg_usr` (`user_id`),
  KEY `idx_meeting_users` (`meeting_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings_users`
--

LOCK TABLES `meetings_users` WRITE;
/*!40000 ALTER TABLE `meetings_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `meetings_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file_mime_type` varchar(100) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `contact_id` char(36) DEFAULT NULL,
  `portal_flag` tinyint(1) DEFAULT NULL,
  `embed_flag` tinyint(1) DEFAULT '0',
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_notes_tmst_id` (`team_set_id`),
  KEY `idx_note_name` (`name`),
  KEY `idx_notes_parent` (`parent_id`,`parent_type`),
  KEY `idx_note_contact` (`contact_id`),
  KEY `idx_notes_assigned_del` (`deleted`,`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications_audit`
--

DROP TABLE IF EXISTS `notifications_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_notifications_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications_audit`
--

LOCK TABLES `notifications_audit` WRITE;
/*!40000 ALTER TABLE `notifications_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_consumer`
--

DROP TABLE IF EXISTS `oauth_consumer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_consumer` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `c_key` varchar(255) DEFAULT NULL,
  `c_secret` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ckey` (`c_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_consumer`
--

LOCK TABLES `oauth_consumer` WRITE;
/*!40000 ALTER TABLE `oauth_consumer` DISABLE KEYS */;
INSERT INTO `oauth_consumer` VALUES ('77c100ab-f72e-0386-cf54-510bec7d5650','SNIPOAuthKey','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Email Archiving OAuth key. Used for acessing this instance for purposes of importing emails.',0,NULL,'SNIPOAuthKey','8b34002a4ae72ca289b6bd07ac9133ec');
/*!40000 ALTER TABLE `oauth_consumer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_nonce`
--

DROP TABLE IF EXISTS `oauth_nonce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_nonce` (
  `conskey` varchar(32) NOT NULL,
  `nonce` varchar(32) NOT NULL,
  `nonce_ts` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`conskey`,`nonce`),
  KEY `oauth_nonce_keyts` (`conskey`,`nonce_ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_nonce`
--

LOCK TABLES `oauth_nonce` WRITE;
/*!40000 ALTER TABLE `oauth_nonce` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_nonce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_tokens`
--

DROP TABLE IF EXISTS `oauth_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_tokens` (
  `id` char(36) NOT NULL,
  `secret` varchar(32) DEFAULT NULL,
  `tstate` varchar(1) DEFAULT NULL,
  `consumer` char(36) NOT NULL,
  `token_ts` bigint(20) DEFAULT NULL,
  `verify` varchar(32) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `callback_url` varchar(255) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`,`deleted`),
  KEY `oauth_state_ts` (`tstate`,`token_ts`),
  KEY `constoken_key` (`consumer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_tokens`
--

LOCK TABLES `oauth_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_tokens` DISABLE KEYS */;
INSERT INTO `oauth_tokens` VALUES ('911b89ff73e9','4f473f37c5dd','2','77c100ab-f72e-0386-cf54-510bec7d5650',1359735822,NULL,0,NULL,'7630be13-8cf2-0397-bbce-510bec040c07');
/*!40000 ALTER TABLE `oauth_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities`
--

DROP TABLE IF EXISTS `opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opportunities` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `opportunity_type` varchar(255) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  `lead_source` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `amount_usdollar` double DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  `date_closed` date DEFAULT NULL,
  `next_step` varchar(100) DEFAULT NULL,
  `sales_stage` varchar(255) DEFAULT NULL,
  `probability` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_opportunities_tmst_id` (`team_set_id`),
  KEY `idx_opp_name` (`name`),
  KEY `idx_opp_assigned` (`assigned_user_id`),
  KEY `idx_opp_id_deleted` (`id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities`
--

LOCK TABLES `opportunities` WRITE;
/*!40000 ALTER TABLE `opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities_audit`
--

DROP TABLE IF EXISTS `opportunities_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opportunities_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_opportunities_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities_audit`
--

LOCK TABLES `opportunities_audit` WRITE;
/*!40000 ALTER TABLE `opportunities_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunities_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities_contacts`
--

DROP TABLE IF EXISTS `opportunities_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opportunities_contacts` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `opportunity_id` varchar(36) DEFAULT NULL,
  `contact_role` varchar(50) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_opp_con` (`contact_id`),
  KEY `idx_con_opp_opp` (`opportunity_id`),
  KEY `idx_opportunities_contacts` (`opportunity_id`,`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities_contacts`
--

LOCK TABLES `opportunities_contacts` WRITE;
/*!40000 ALTER TABLE `opportunities_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunities_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outbound_email`
--

DROP TABLE IF EXISTS `outbound_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outbound_email` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(15) DEFAULT 'user',
  `user_id` char(36) NOT NULL,
  `mail_sendtype` varchar(8) DEFAULT 'smtp',
  `mail_smtptype` varchar(20) DEFAULT 'other',
  `mail_smtpserver` varchar(100) DEFAULT NULL,
  `mail_smtpport` int(5) DEFAULT '0',
  `mail_smtpuser` varchar(100) DEFAULT NULL,
  `mail_smtppass` varchar(100) DEFAULT NULL,
  `mail_smtpauth_req` tinyint(1) DEFAULT '0',
  `mail_smtpssl` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oe_user_id_idx` (`id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outbound_email`
--

LOCK TABLES `outbound_email` WRITE;
/*!40000 ALTER TABLE `outbound_email` DISABLE KEYS */;
INSERT INTO `outbound_email` VALUES ('1ac307e2-5d71-d786-1975-510becd57e0f','system','system','1','SMTP','other','',25,'','',1,0);
/*!40000 ALTER TABLE `outbound_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_bundle_note`
--

DROP TABLE IF EXISTS `product_bundle_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_bundle_note` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `bundle_id` varchar(36) DEFAULT NULL,
  `note_id` varchar(36) DEFAULT NULL,
  `note_index` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_pbn_bundle` (`bundle_id`),
  KEY `idx_pbn_note` (`note_id`),
  KEY `idx_pbn_pb_nb` (`note_id`,`bundle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_bundle_note`
--

LOCK TABLES `product_bundle_note` WRITE;
/*!40000 ALTER TABLE `product_bundle_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_bundle_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_bundle_notes`
--

DROP TABLE IF EXISTS `product_bundle_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_bundle_notes` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_bundle_notes`
--

LOCK TABLES `product_bundle_notes` WRITE;
/*!40000 ALTER TABLE `product_bundle_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_bundle_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_bundle_product`
--

DROP TABLE IF EXISTS `product_bundle_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_bundle_product` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `bundle_id` varchar(36) DEFAULT NULL,
  `product_id` varchar(36) DEFAULT NULL,
  `product_index` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_pbp_bundle` (`bundle_id`),
  KEY `idx_pbp_quote` (`product_id`),
  KEY `idx_pbp_bq` (`product_id`,`bundle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_bundle_product`
--

LOCK TABLES `product_bundle_product` WRITE;
/*!40000 ALTER TABLE `product_bundle_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_bundle_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_bundle_quote`
--

DROP TABLE IF EXISTS `product_bundle_quote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_bundle_quote` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `bundle_id` varchar(36) DEFAULT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  `bundle_index` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_pbq_bundle` (`bundle_id`),
  KEY `idx_pbq_quote` (`quote_id`),
  KEY `idx_pbq_bq` (`quote_id`,`bundle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_bundle_quote`
--

LOCK TABLES `product_bundle_quote` WRITE;
/*!40000 ALTER TABLE `product_bundle_quote` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_bundle_quote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_bundles`
--

DROP TABLE IF EXISTS `product_bundles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_bundles` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bundle_stage` varchar(255) DEFAULT NULL,
  `description` text,
  `tax` decimal(26,6) DEFAULT NULL,
  `tax_usdollar` decimal(26,6) DEFAULT NULL,
  `total` decimal(26,6) DEFAULT NULL,
  `total_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_usdollar` decimal(26,6) DEFAULT NULL,
  `deal_tot` decimal(26,2) DEFAULT NULL,
  `deal_tot_usdollar` decimal(26,2) DEFAULT NULL,
  `new_sub` decimal(26,6) DEFAULT NULL,
  `new_sub_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal` decimal(26,6) DEFAULT NULL,
  `shipping` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_product_bundles_tmst_id` (`team_set_id`),
  KEY `idx_products_bundles` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_bundles`
--

LOCK TABLES `product_bundles` WRITE;
/*!40000 ALTER TABLE `product_bundles` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_bundles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `list_order` int(4) DEFAULT NULL,
  `description` text,
  `parent_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_productcategories` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_product`
--

DROP TABLE IF EXISTS `product_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_product` (
  `id` varchar(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `parent_id` varchar(36) DEFAULT NULL,
  `child_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_pp_parent` (`parent_id`),
  KEY `idx_pp_child` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_product`
--

LOCK TABLES `product_product` WRITE;
/*!40000 ALTER TABLE `product_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_templates`
--

DROP TABLE IF EXISTS `product_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_templates` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `type_id` char(36) DEFAULT NULL,
  `manufacturer_id` char(36) DEFAULT NULL,
  `category_id` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mft_part_num` varchar(50) DEFAULT NULL,
  `vendor_part_num` varchar(50) DEFAULT NULL,
  `date_cost_price` date DEFAULT NULL,
  `cost_price` decimal(26,6) DEFAULT NULL,
  `discount_price` decimal(26,6) DEFAULT NULL,
  `list_price` decimal(26,6) DEFAULT NULL,
  `cost_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_usdollar` decimal(26,6) DEFAULT NULL,
  `list_usdollar` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tax_class` varchar(100) DEFAULT NULL,
  `date_available` date DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `weight` decimal(12,2) DEFAULT NULL,
  `qty_in_stock` int(5) DEFAULT NULL,
  `description` text,
  `support_name` varchar(50) DEFAULT NULL,
  `support_description` varchar(255) DEFAULT NULL,
  `support_contact` varchar(50) DEFAULT NULL,
  `support_term` varchar(100) DEFAULT NULL,
  `pricing_formula` varchar(100) DEFAULT NULL,
  `pricing_factor` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_product_template` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_templates`
--

LOCK TABLES `product_templates` WRITE;
/*!40000 ALTER TABLE `product_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_types`
--

DROP TABLE IF EXISTS `product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_types` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `list_order` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_producttypes` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_types`
--

LOCK TABLES `product_types` WRITE;
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `product_template_id` char(36) DEFAULT NULL,
  `account_id` char(36) DEFAULT NULL,
  `contact_id` char(36) DEFAULT NULL,
  `type_id` char(36) DEFAULT NULL,
  `quote_id` char(36) DEFAULT NULL,
  `manufacturer_id` char(36) DEFAULT NULL,
  `category_id` char(36) DEFAULT NULL,
  `mft_part_num` varchar(50) DEFAULT NULL,
  `vendor_part_num` varchar(50) DEFAULT NULL,
  `date_purchased` date DEFAULT NULL,
  `cost_price` decimal(26,6) DEFAULT NULL,
  `discount_price` decimal(26,6) DEFAULT NULL,
  `discount_amount` decimal(26,6) DEFAULT NULL,
  `discount_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_select` tinyint(1) DEFAULT NULL,
  `deal_calc` decimal(26,6) DEFAULT NULL,
  `deal_calc_usdollar` decimal(26,6) DEFAULT NULL,
  `list_price` decimal(26,6) DEFAULT NULL,
  `cost_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_usdollar` decimal(26,6) DEFAULT NULL,
  `list_usdollar` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tax_class` varchar(100) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `weight` decimal(12,2) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `support_name` varchar(50) DEFAULT NULL,
  `support_description` varchar(255) DEFAULT NULL,
  `support_contact` varchar(50) DEFAULT NULL,
  `support_term` varchar(100) DEFAULT NULL,
  `date_support_expires` date DEFAULT NULL,
  `date_support_starts` date DEFAULT NULL,
  `pricing_formula` varchar(100) DEFAULT NULL,
  `pricing_factor` int(4) DEFAULT NULL,
  `serial_number` varchar(50) DEFAULT NULL,
  `asset_number` varchar(50) DEFAULT NULL,
  `book_value` decimal(26,6) DEFAULT NULL,
  `book_value_usdollar` decimal(26,6) DEFAULT NULL,
  `book_value_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_products_tmst_id` (`team_set_id`),
  KEY `idx_products` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_audit`
--

DROP TABLE IF EXISTS `products_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_products_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_audit`
--

LOCK TABLES `products_audit` WRITE;
/*!40000 ALTER TABLE `products_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `estimated_start_date` date DEFAULT NULL,
  `estimated_end_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_project_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_resources`
--

DROP TABLE IF EXISTS `project_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_resources` (
  `id` char(36) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `project_id` char(36) DEFAULT NULL,
  `resource_id` char(36) DEFAULT NULL,
  `resource_type` varchar(20) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_resources`
--

LOCK TABLES `project_resources` WRITE;
/*!40000 ALTER TABLE `project_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_task`
--

DROP TABLE IF EXISTS `project_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_task` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `project_id` char(36) NOT NULL,
  `project_task_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `description` text,
  `resource_id` text,
  `predecessors` text,
  `date_start` date DEFAULT NULL,
  `time_start` int(11) DEFAULT NULL,
  `time_finish` int(11) DEFAULT NULL,
  `date_finish` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `duration_unit` text,
  `actual_duration` int(11) DEFAULT NULL,
  `percent_complete` int(11) DEFAULT NULL,
  `date_due` date DEFAULT NULL,
  `time_due` time DEFAULT NULL,
  `parent_task_id` int(11) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `milestone_flag` tinyint(1) DEFAULT NULL,
  `order_number` int(11) DEFAULT '1',
  `task_number` int(11) DEFAULT NULL,
  `estimated_effort` int(11) DEFAULT NULL,
  `actual_effort` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `utilization` int(11) DEFAULT '100',
  PRIMARY KEY (`id`),
  KEY `idx_project_task_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_task`
--

LOCK TABLES `project_task` WRITE;
/*!40000 ALTER TABLE `project_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_task_audit`
--

DROP TABLE IF EXISTS `project_task_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_task_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_project_task_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_task_audit`
--

LOCK TABLES `project_task_audit` WRITE;
/*!40000 ALTER TABLE `project_task_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_task_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_accounts`
--

DROP TABLE IF EXISTS `projects_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_accounts` (
  `id` varchar(36) NOT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_acct_proj` (`project_id`),
  KEY `idx_proj_acct_acct` (`account_id`),
  KEY `projects_accounts_alt` (`project_id`,`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_accounts`
--

LOCK TABLES `projects_accounts` WRITE;
/*!40000 ALTER TABLE `projects_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_bugs`
--

DROP TABLE IF EXISTS `projects_bugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_bugs` (
  `id` varchar(36) NOT NULL,
  `bug_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_bug_proj` (`project_id`),
  KEY `idx_proj_bug_bug` (`bug_id`),
  KEY `projects_bugs_alt` (`project_id`,`bug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_bugs`
--

LOCK TABLES `projects_bugs` WRITE;
/*!40000 ALTER TABLE `projects_bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_cases`
--

DROP TABLE IF EXISTS `projects_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_cases` (
  `id` varchar(36) NOT NULL,
  `case_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_case_proj` (`project_id`),
  KEY `idx_proj_case_case` (`case_id`),
  KEY `projects_cases_alt` (`project_id`,`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_cases`
--

LOCK TABLES `projects_cases` WRITE;
/*!40000 ALTER TABLE `projects_cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_contacts`
--

DROP TABLE IF EXISTS `projects_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_contacts` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_con_proj` (`project_id`),
  KEY `idx_proj_con_con` (`contact_id`),
  KEY `projects_contacts_alt` (`project_id`,`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_contacts`
--

LOCK TABLES `projects_contacts` WRITE;
/*!40000 ALTER TABLE `projects_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_opportunities`
--

DROP TABLE IF EXISTS `projects_opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_opportunities` (
  `id` varchar(36) NOT NULL,
  `opportunity_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_opp_proj` (`project_id`),
  KEY `idx_proj_opp_opp` (`opportunity_id`),
  KEY `projects_opportunities_alt` (`project_id`,`opportunity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_opportunities`
--

LOCK TABLES `projects_opportunities` WRITE;
/*!40000 ALTER TABLE `projects_opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_products`
--

DROP TABLE IF EXISTS `projects_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_products` (
  `id` varchar(36) NOT NULL,
  `product_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_prod_project` (`project_id`),
  KEY `idx_proj_prod_product` (`product_id`),
  KEY `projects_products_alt` (`project_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_products`
--

LOCK TABLES `projects_products` WRITE;
/*!40000 ALTER TABLE `projects_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_quotes`
--

DROP TABLE IF EXISTS `projects_quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects_quotes` (
  `id` varchar(36) NOT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  `project_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_proj_quote_proj` (`project_id`),
  KEY `idx_proj_quote_quote` (`quote_id`),
  KEY `projects_quotes_alt` (`project_id`,`quote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_quotes`
--

LOCK TABLES `projects_quotes` WRITE;
/*!40000 ALTER TABLE `projects_quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects_quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospect_list_campaigns`
--

DROP TABLE IF EXISTS `prospect_list_campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prospect_list_campaigns` (
  `id` varchar(36) NOT NULL,
  `prospect_list_id` varchar(36) DEFAULT NULL,
  `campaign_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_pro_id` (`prospect_list_id`),
  KEY `idx_cam_id` (`campaign_id`),
  KEY `idx_prospect_list_campaigns` (`prospect_list_id`,`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospect_list_campaigns`
--

LOCK TABLES `prospect_list_campaigns` WRITE;
/*!40000 ALTER TABLE `prospect_list_campaigns` DISABLE KEYS */;
/*!40000 ALTER TABLE `prospect_list_campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospect_lists`
--

DROP TABLE IF EXISTS `prospect_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prospect_lists` (
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `list_type` varchar(100) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `description` text,
  `domain_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_prospect_lists_tmst_id` (`team_set_id`),
  KEY `idx_prospect_list_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospect_lists`
--

LOCK TABLES `prospect_lists` WRITE;
/*!40000 ALTER TABLE `prospect_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `prospect_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospect_lists_prospects`
--

DROP TABLE IF EXISTS `prospect_lists_prospects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prospect_lists_prospects` (
  `id` varchar(36) NOT NULL,
  `prospect_list_id` varchar(36) DEFAULT NULL,
  `related_id` varchar(36) DEFAULT NULL,
  `related_type` varchar(25) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_plp_pro_id` (`prospect_list_id`),
  KEY `idx_plp_rel_id` (`related_id`,`related_type`,`prospect_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospect_lists_prospects`
--

LOCK TABLES `prospect_lists_prospects` WRITE;
/*!40000 ALTER TABLE `prospect_lists_prospects` DISABLE KEYS */;
/*!40000 ALTER TABLE `prospect_lists_prospects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospects`
--

DROP TABLE IF EXISTS `prospects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prospects` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(100) DEFAULT NULL,
  `phone_work` varchar(100) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `primary_address_street` varchar(150) DEFAULT NULL,
  `primary_address_city` varchar(100) DEFAULT NULL,
  `primary_address_state` varchar(100) DEFAULT NULL,
  `primary_address_postalcode` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(255) DEFAULT NULL,
  `alt_address_street` varchar(150) DEFAULT NULL,
  `alt_address_city` varchar(100) DEFAULT NULL,
  `alt_address_state` varchar(100) DEFAULT NULL,
  `alt_address_postalcode` varchar(20) DEFAULT NULL,
  `alt_address_country` varchar(255) DEFAULT NULL,
  `assistant` varchar(75) DEFAULT NULL,
  `assistant_phone` varchar(100) DEFAULT NULL,
  `tracker_key` int(11) NOT NULL AUTO_INCREMENT,
  `birthdate` date DEFAULT NULL,
  `lead_id` char(36) DEFAULT NULL,
  `account_name` varchar(150) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_prospects_tmst_id` (`team_set_id`),
  KEY `prospect_auto_tracker_key` (`tracker_key`),
  KEY `idx_prospects_last_first` (`last_name`,`first_name`,`deleted`),
  KEY `idx_prospecs_del_last` (`last_name`,`deleted`),
  KEY `idx_prospects_id_del` (`id`,`deleted`),
  KEY `idx_prospects_assigned` (`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospects`
--

LOCK TABLES `prospects` WRITE;
/*!40000 ALTER TABLE `prospects` DISABLE KEYS */;
/*!40000 ALTER TABLE `prospects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotas`
--

DROP TABLE IF EXISTS `quotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotas` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `timeperiod_id` char(36) NOT NULL,
  `quota_type` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `amount_base_currency` int(11) DEFAULT NULL,
  `currency_id` char(36) NOT NULL,
  `committed` tinyint(1) DEFAULT '0',
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotas`
--

LOCK TABLES `quotas` WRITE;
/*!40000 ALTER TABLE `quotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `shipper_id` char(36) DEFAULT NULL,
  `currency_id` char(36) DEFAULT NULL,
  `taxrate_id` char(36) DEFAULT NULL,
  `show_line_nums` tinyint(1) DEFAULT '1',
  `calc_grand_total` tinyint(1) DEFAULT '1',
  `quote_type` varchar(100) DEFAULT NULL,
  `date_quote_expected_closed` date DEFAULT NULL,
  `original_po_date` date DEFAULT NULL,
  `payment_terms` varchar(128) DEFAULT NULL,
  `date_quote_closed` date DEFAULT NULL,
  `date_order_shipped` date DEFAULT NULL,
  `order_stage` varchar(100) DEFAULT NULL,
  `quote_stage` varchar(100) DEFAULT NULL,
  `purchase_order_num` varchar(50) DEFAULT NULL,
  `quote_num` int(11) NOT NULL AUTO_INCREMENT,
  `subtotal` decimal(26,6) DEFAULT NULL,
  `subtotal_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping` decimal(26,6) DEFAULT NULL,
  `shipping_usdollar` decimal(26,6) DEFAULT NULL,
  `discount` decimal(26,6) DEFAULT NULL,
  `deal_tot` decimal(26,2) DEFAULT NULL,
  `deal_tot_usdollar` decimal(26,2) DEFAULT NULL,
  `new_sub` decimal(26,6) DEFAULT NULL,
  `new_sub_usdollar` decimal(26,6) DEFAULT NULL,
  `tax` decimal(26,6) DEFAULT NULL,
  `tax_usdollar` decimal(26,6) DEFAULT NULL,
  `total` decimal(26,6) DEFAULT NULL,
  `total_usdollar` decimal(26,6) DEFAULT NULL,
  `billing_address_street` varchar(150) DEFAULT NULL,
  `billing_address_city` varchar(100) DEFAULT NULL,
  `billing_address_state` varchar(100) DEFAULT NULL,
  `billing_address_postalcode` varchar(20) DEFAULT NULL,
  `billing_address_country` varchar(100) DEFAULT NULL,
  `shipping_address_street` varchar(150) DEFAULT NULL,
  `shipping_address_city` varchar(100) DEFAULT NULL,
  `shipping_address_state` varchar(100) DEFAULT NULL,
  `shipping_address_postalcode` varchar(20) DEFAULT NULL,
  `shipping_address_country` varchar(100) DEFAULT NULL,
  `system_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quote_num` (`quote_num`,`system_id`),
  KEY `idx_quotes_tmst_id` (`team_set_id`),
  KEY `idx_qte_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes_accounts`
--

DROP TABLE IF EXISTS `quotes_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes_accounts` (
  `id` varchar(36) NOT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  `account_id` varchar(36) DEFAULT NULL,
  `account_role` varchar(20) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_acc_qte_acc` (`account_id`),
  KEY `idx_acc_qte_opp` (`quote_id`),
  KEY `idx_quote_account_role` (`quote_id`,`account_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes_accounts`
--

LOCK TABLES `quotes_accounts` WRITE;
/*!40000 ALTER TABLE `quotes_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes_audit`
--

DROP TABLE IF EXISTS `quotes_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes_audit` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `before_value_string` varchar(255) DEFAULT NULL,
  `after_value_string` varchar(255) DEFAULT NULL,
  `before_value_text` text,
  `after_value_text` text,
  PRIMARY KEY (`id`),
  KEY `idx_quotes_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes_audit`
--

LOCK TABLES `quotes_audit` WRITE;
/*!40000 ALTER TABLE `quotes_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes_contacts`
--

DROP TABLE IF EXISTS `quotes_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes_contacts` (
  `id` varchar(36) NOT NULL,
  `contact_id` varchar(36) DEFAULT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  `contact_role` varchar(20) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_con_qte_con` (`contact_id`),
  KEY `idx_con_qte_opp` (`quote_id`),
  KEY `idx_quote_contact_role` (`quote_id`,`contact_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes_contacts`
--

LOCK TABLES `quotes_contacts` WRITE;
/*!40000 ALTER TABLE `quotes_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes_opportunities`
--

DROP TABLE IF EXISTS `quotes_opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes_opportunities` (
  `id` varchar(36) NOT NULL,
  `opportunity_id` varchar(36) DEFAULT NULL,
  `quote_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_opp_qte_opp` (`opportunity_id`),
  KEY `idx_quote_oportunities` (`quote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes_opportunities`
--

LOCK TABLES `quotes_opportunities` WRITE;
/*!40000 ALTER TABLE `quotes_opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes_opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relationships`
--

DROP TABLE IF EXISTS `relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relationships` (
  `id` char(36) NOT NULL,
  `relationship_name` varchar(150) DEFAULT NULL,
  `lhs_module` varchar(100) DEFAULT NULL,
  `lhs_table` varchar(64) DEFAULT NULL,
  `lhs_key` varchar(64) DEFAULT NULL,
  `rhs_module` varchar(100) DEFAULT NULL,
  `rhs_table` varchar(64) DEFAULT NULL,
  `rhs_key` varchar(64) DEFAULT NULL,
  `join_table` varchar(64) DEFAULT NULL,
  `join_key_lhs` varchar(64) DEFAULT NULL,
  `join_key_rhs` varchar(64) DEFAULT NULL,
  `relationship_type` varchar(64) DEFAULT NULL,
  `relationship_role_column` varchar(64) DEFAULT NULL,
  `relationship_role_column_value` varchar(50) DEFAULT NULL,
  `reverse` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_rel_name` (`relationship_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relationships`
--

LOCK TABLES `relationships` WRITE;
/*!40000 ALTER TABLE `relationships` DISABLE KEYS */;
INSERT INTO `relationships` VALUES ('13951e82-64fa-fa08-0b8e-510bec3bed88','tracker_user_id','Users','users','id','TrackerSessions','tracker','user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('13d8f1c6-fe7c-6fc7-f5d0-510bec686489','notifications_modified_user','Users','users','id','Notifications','notifications','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('140b30cf-e058-0c70-ce78-510becca1deb','notifications_created_by','Users','users','id','Notifications','notifications','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('142d0fb5-2fe7-7af7-4e78-510bec9099c9','notifications_assigned_user','Users','users','id','Notifications','notifications','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('14f71fc4-057f-586a-e8ad-510bec0f18b4','users_holidays','Users','users','id','Holidays','holidays','person_id',NULL,NULL,NULL,'one-to-many','related_module',NULL,0,0),('1a27a894-ea06-e9bc-b318-510becfe28af','eapm_modified_user','Users','users','id','EAPM','eapm','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('1a520108-7339-cde5-2562-510bec2db067','eapm_created_by','Users','users','id','EAPM','eapm','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('1a8e7c66-3f49-64d5-8577-510bec2e7529','eapm_assigned_user','Users','users','id','EAPM','eapm','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('1d794506-6be2-a74a-9055-510bec532ba3','oauthkeys_modified_user','Users','users','id','OAuthKeys','oauthkeys','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('1dac11af-5c2a-c64d-1d92-510becd2d83c','oauthkeys_created_by','Users','users','id','OAuthKeys','oauthkeys','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('1dd7503d-301b-da96-d926-510bec8b9fe5','oauthkeys_assigned_user','Users','users','id','OAuthKeys','oauthkeys','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('20f5f5d2-efd3-3a03-831b-510bec1db8b0','consumer_tokens','OAuthKeys','oauth_consumer','id','OAuthTokens','oauth_tokens','consumer',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('218b672b-66f8-cf6f-2aaa-510becc8796a','oauthtokens_assigned_user','Users','users','id','OAuthTokens','oauth_tokens','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('249b7069-4ad8-d735-a439-510bec530244','sugarfavorites_modified_user','Users','users','id','SugarFavorites','sugarfavorites','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('24ceee40-f70f-84f1-17f8-510bec461749','sugarfavorites_created_by','Users','users','id','SugarFavorites','sugarfavorites','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('2500197b-9708-ba2a-02b5-510beccdbb2d','sugarfavorites_assigned_user','Users','users','id','SugarFavorites','sugarfavorites','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('306e519e-3e31-25ba-20e6-510bec221531','documents_modified_user','Users','users','id','Documents','documents','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('309e80f7-d78a-61d1-72c8-510bec3d7668','documents_created_by','Users','users','id','Documents','documents','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('30c89a0d-0d42-492c-4cde-510bece54363','documents_assigned_user','Users','users','id','Documents','documents','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('30ea6fec-5fab-7c07-4b0b-510bec849f88','documents_team_count_relationship','Teams','team_sets','id','Documents','documents','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('31107663-9643-b43d-cea6-510bec8ddbe2','documents_teams','Documents','documents','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('31341d2e-99e0-72b2-0b82-510becfba5c2','documents_team','Teams','teams','id','Documents','documents','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('31548db2-6992-19ff-c9f0-510bec36ff8b','document_revisions','Documents','documents','id','DocumentRevisions','document_revisions','document_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3458ed07-f795-1014-7c40-510becb6acd4','revisions_created_by','Users','users','id','DocumentRevisions','document_revisions','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('34b6df0f-a889-28a9-fe0f-510beca37cff','leads_modified_user','Users','users','id','Leads','leads','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3532b3de-e554-d11c-06f6-510becdae530','leads_created_by','Users','users','id','Leads','leads','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('356fb539-31d2-936f-2d8d-510becb1d00c','leads_assigned_user','Users','users','id','Leads','leads','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3599a0df-0652-2674-4294-510bec5f340c','leads_team_count_relationship','Teams','team_sets','id','Leads','leads','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('35c88b0d-affd-2de2-65d2-510bec5925d4','leads_teams','Leads','leads','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('36087229-250b-94d0-d37e-510beccd21ce','leads_team','Teams','teams','id','Leads','leads','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3660b664-96cf-0730-72ed-510becdf10d1','leads_email_addresses','Leads','leads','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','bean_module','Leads',0,0),('3687b677-ee12-a59f-a7ce-510bec1c7cc6','leads_email_addresses_primary','Leads','leads','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','primary_address','1',0,0),('36e7d740-4708-abfa-7754-510bec3ed809','lead_direct_reports','Leads','leads','id','Leads','leads','reports_to_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('371338cc-e918-cdd0-fa99-510bec376453','lead_tasks','Leads','leads','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Leads',0,0),('376723f8-5f1e-550e-0296-510becc642da','lead_notes','Leads','leads','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Leads',0,0),('37c33836-c232-4837-6a52-510beccc6d3b','lead_meetings','Leads','leads','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Leads',0,0),('381d42bd-1b7c-174c-ba9a-510becaaa71b','lead_calls','Leads','leads','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Leads',0,0),('3844e749-a30e-22ba-92e9-510bec257d17','lead_emails','Leads','leads','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Leads',0,0),('387f3c17-ebdb-7cbb-f2a2-510bec67f922','lead_campaign_log','Leads','leads','id','CampaignLog','campaign_log','target_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3b7818f1-59e2-6e8f-8a2f-510bec5d294b','inboundemail_team_count_relationship','Teams','team_sets','id','InboundEmail','inbound_email','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3ba30dcb-b3d0-9ec8-9347-510bec6bcbd8','inboundemail_teams','InboundEmail','inbound_email','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('3bd009c1-8f5d-6bf0-c336-510becece154','inboundemail_team','Teams','teams','id','InboundEmail','inbound_email','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3bfd2331-e75b-3695-5348-510becb1a7be','inbound_email_created_by','Users','users','id','InboundEmail','inbound_email','created_by',NULL,NULL,NULL,'one-to-one',NULL,NULL,0,0),('3c1e68f4-bb37-8da4-52f6-510bec2739fe','inbound_email_modified_user_id','Users','users','id','InboundEmail','inbound_email','modified_user_id',NULL,NULL,NULL,'one-to-one',NULL,NULL,0,0),('3ee841e2-3a75-d68e-4a7f-510becb1fc9a','savedsearch_team_count_relationship','Teams','team_sets','id','SavedSearch','saved_search','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3f0bc870-485c-b470-7a01-510bec20bf98','savedsearch_teams','SavedSearch','saved_search','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('3f2e348e-e72b-7f90-bdec-510bec766342','savedsearch_team','Teams','teams','id','SavedSearch','saved_search','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('3f5170c2-4b46-bd4f-20eb-510bec9c5423','saved_search_assigned_user','Users','users','id','SavedSearch','saved_search','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('41e8043f-602f-1ffa-2fc8-510becb89a95','team_sets_teams','TeamSets','team_sets','id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('42ac2027-88fd-1708-39b1-510bec5dd15c','cases_modified_user','Users','users','id','Cases','cases','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('43123dd1-6707-77c3-72f6-510bec503ad9','cases_created_by','Users','users','id','Cases','cases','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('436b3597-b28e-5fc7-9dc1-510becb0af62','cases_assigned_user','Users','users','id','Cases','cases','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('439427f8-f1c6-f348-71d5-510bece80225','cases_team_count_relationship','Teams','team_sets','id','Cases','cases','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('439640ab-d34f-93d5-fcea-510becbffe62','accounts_bugs','Accounts','accounts','id','Bugs','bugs','id','accounts_bugs','account_id','bug_id','many-to-many',NULL,NULL,0,0),('43e68409-0866-02d2-2251-510bec898601','cases_teams','Cases','cases','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('440e3b81-c01f-c2d2-e149-510becf0b053','cases_team','Teams','teams','id','Cases','cases','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4434dfbf-1785-b874-97f9-510bec6420c3','case_calls','Cases','cases','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Cases',0,0),('4458eda7-1a51-2af7-b57c-510becb653c0','case_tasks','Cases','cases','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Cases',0,0),('44afadca-a3a5-6b29-2d97-510bec19876f','case_notes','Cases','cases','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Cases',0,0),('44ed1297-ed2e-b289-4e81-510bec554ba6','case_meetings','Cases','cases','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Cases',0,0),('451acc54-2e1a-7201-5019-510becb11a53','case_emails','Cases','cases','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Cases',0,0),('48db1d48-9419-6cee-4441-510bec4e5806','accounts_contacts','Accounts','accounts','id','Contacts','contacts','id','accounts_contacts','account_id','contact_id','many-to-many',NULL,NULL,0,0),('4b9633b2-5464-0ad7-9cfc-510becf9574c','accounts_opportunities','Accounts','accounts','id','Opportunities','opportunities','id','accounts_opportunities','account_id','opportunity_id','many-to-many',NULL,NULL,0,0),('4e06a706-ac1d-3261-2450-510bec599275','acl_roles_actions','ACLRoles','acl_roles','id','ACLActions','acl_actions','id','acl_roles_actions','role_id','action_id','many-to-many',NULL,NULL,0,0),('4e95fa0e-a1c1-962a-6148-510bec44ee77','reports_team_count_relationship','Teams','team_sets','id','Reports','saved_reports','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4ebfd3c7-d9d1-60f6-0185-510bec1b55d6','reports_teams','Reports','saved_reports','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('4ee1a535-e285-a593-6d19-510bec0a1446','reports_team','Teams','teams','id','Reports','saved_reports','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4f0965e1-0f23-5e64-ad53-510bec6843d1','report_assigned_user','Users','users','id','Reports','saved_reports','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4f4f0b6a-01e4-742e-fa3e-510becd4e42b','bugs_modified_user','Users','users','id','Bugs','bugs','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4f7f44ed-d2d7-f918-2b02-510becad05b8','bugs_created_by','Users','users','id','Bugs','bugs','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4fb5aa82-5909-5c26-86dc-510bec31fd69','bugs_assigned_user','Users','users','id','Bugs','bugs','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('4ff35ed9-f5a5-804e-b47b-510bec49b250','bugs_team_count_relationship','Teams','team_sets','id','Bugs','bugs','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('504a8f65-6a15-c2c1-1bfb-510becdc6432','bugs_teams','Bugs','bugs','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('5071f244-a58d-4abf-f1b8-510becee7f28','bugs_team','Teams','teams','id','Bugs','bugs','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5074c90c-03fb-3805-f5c9-510becde7902','acl_roles_users','ACLRoles','acl_roles','id','Users','users','id','acl_roles_users','role_id','user_id','many-to-many',NULL,NULL,0,0),('50990659-204a-2dd1-6798-510bec98689c','bug_tasks','Bugs','bugs','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Bugs',0,0),('50cbe50a-1cdd-cea3-9a31-510bec75dae0','bug_meetings','Bugs','bugs','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Bugs',0,0),('50eeff59-bd93-1555-7580-510bec4bfb40','bug_calls','Bugs','bugs','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Bugs',0,0),('5111b423-60b6-90c4-a507-510bec1fe32c','bug_emails','Bugs','bugs','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Bugs',0,0),('513360af-4266-6e93-6b1f-510bec5c9012','bug_notes','Bugs','bugs','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Bugs',0,0),('5151c89d-9987-b581-784f-510bec7a2e72','bugs_release','Releases','releases','id','Bugs','bugs','found_in_release',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('51763593-f62a-b535-4ac4-510bec0b7257','bugs_fixed_in_release','Releases','releases','id','Bugs','bugs','fixed_in_release',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('53245fdc-0ef9-b09b-c4ec-510bec0bb509','calls_contacts','Calls','calls','id','Contacts','contacts','id','calls_contacts','call_id','contact_id','many-to-many',NULL,NULL,0,0),('55b748ba-1839-e817-7d1b-510becce45db','calls_leads','Calls','calls','id','Leads','leads','id','calls_leads','call_id','lead_id','many-to-many',NULL,NULL,0,0),('58478acc-42a4-602b-95b7-510bec492354','calls_users','Calls','calls','id','Users','users','id','calls_users','call_id','user_id','many-to-many',NULL,NULL,0,0),('58e3d612-64f9-d993-a912-510bec68fe96','user_direct_reports','Users','users','id','Users','users','reports_to_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('590a1e3f-42df-e3ce-7352-510bec53747a','users_email_addresses','Users','users','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','bean_module','Users',0,0),('593a13f6-aff3-bb9a-f339-510bec135638','users_email_addresses_primary','Users','users','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','primary_address','1',0,0),('595babcb-9cd0-2657-3867-510bec694c0c','users_team_count_relationship','Teams','team_sets','id','Users','users','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5988842a-837f-209d-e49d-510bec001b95','users_teams','Users','users','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('59b811bb-c70d-6286-5cbd-510bec9b441f','users_team_sets','Teams','teams','id','Users','users','team_set_id','team_sets_teams','team_id','team_set_id','many-to-many',NULL,NULL,0,0),('59dd0068-22eb-4c33-e0bb-510bece001fc','users_team','Teams','teams','id','Users','users','default_team',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5ade6b1e-bba6-2ea4-72e7-510becf7030f','contracts_modified_user','Users','users','id','Contracts','contracts','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5b0d2a10-c545-1536-5522-510becb1dc14','contracts_created_by','Users','users','id','Contracts','contracts','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5b3f6fd1-4dd4-f45a-e327-510bec931961','contracts_assigned_user','Users','users','id','Contracts','contracts','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5b65dcfd-57d9-e18f-0f7b-510becac4e50','contracts_team_count_relationship','Teams','team_sets','id','Contracts','contracts','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5b89c404-5664-bfc5-a586-510bec89dd23','contracts_teams','Contracts','contracts','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('5baa8855-5354-9c00-d719-510becc2681e','cases_bugs','Cases','cases','id','Bugs','bugs','id','cases_bugs','case_id','bug_id','many-to-many',NULL,NULL,0,0),('5bb9a3fe-6713-6390-a97d-510beced5619','contracts_team','Teams','teams','id','Contracts','contracts','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5bdcef08-d492-3d8b-8075-510bec2e51f3','contracts_contract_types','Contracts','contracts','type','ContractTypes','contract_types','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5bfe5627-301a-c4ea-66fe-510bec7e65f4','contract_notes','Contracts','contracts','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Contracts',0,0),('5c233784-babc-85e1-4cc3-510becc2d6bb','account_contracts','Accounts','accounts','id','Contracts','contracts','account_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5d7dceac-bf62-bb90-2729-510bec009ee8','campaignlog_contact','CampaignLog','campaign_log','related_id','Contacts','contacts','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5da53972-6b5c-a7aa-37d7-510becddbc41','campaignlog_lead','CampaignLog','campaign_log','related_id','Leads','leads','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5dd8b352-ff2b-c4dc-5e81-510bec45a805','campaignlog_created_opportunities','CampaignLog','campaign_log','related_id','Opportunities','opportunities','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5df6fa36-18b1-73fb-928f-510bec8161aa','campaignlog_targeted_users','CampaignLog','campaign_log','target_id','Users','users','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5e1865cc-9c00-7cf4-b0ba-510bec058bbe','campaignlog_sent_emails','CampaignLog','campaign_log','related_id','Emails','emails','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('5ea8ee0f-1448-fd2a-4990-510bec5ca88b','contacts_bugs','Contacts','contacts','id','Bugs','bugs','id','contacts_bugs','contact_id','bug_id','many-to-many',NULL,NULL,0,0),('617b04a0-a546-2c86-062d-510becff5711','contacts_cases','Contacts','contacts','id','Cases','cases','id','contacts_cases','contact_id','case_id','many-to-many',NULL,NULL,0,0),('63d4f7ec-5bba-6d38-1801-510becaec034','team_memberships','Teams','teams','id','Users','users','id','team_memberships','team_id','user_id','many-to-many',NULL,NULL,0,0),('63f555db-603c-6592-ba54-510becb345ab','project_team_count_relationship','Teams','team_sets','id','Project','project','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('641c9a0f-bde0-1579-9257-510becc0ba4e','project_teams','Project','project','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('64406108-60a7-5c8c-8e32-510bec02e9c9','project_team','Teams','teams','id','Project','project','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6460aae0-3454-fcc7-0a78-510beca1811d','projects_notes','Project','project','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Project',0,0),('647813b9-a924-57aa-00bf-510bec94375f','contacts_users','Contacts','contacts','id','Users','users','id','contacts_users','contact_id','user_id','many-to-many',NULL,NULL,0,0),('6491fb49-182c-faaa-db8c-510bec0ccdda','projects_tasks','Project','project','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Project',0,0),('64b52fb4-cb4d-0925-3a38-510becbb81d7','projects_meetings','Project','project','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Project',0,0),('64d7d3f3-cf10-91ca-386e-510bec0790f1','projects_calls','Project','project','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Project',0,0),('64f7cd2d-05d3-6f6f-0125-510becb8ab54','projects_emails','Project','project','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Project',0,0),('6516bc32-ece7-bf85-504f-510becae0260','projects_project_tasks','Project','project','id','ProjectTask','project_task','project_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('653938f1-af54-1bb7-eb3b-510bec8f1e16','projects_assigned_user','Users','users','id','Project','project','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('656f42bb-e98d-202e-ebf1-510bec057abf','projects_modified_user','Users','users','id','Project','project','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('65a4da0c-4344-2b1d-eba2-510bec8fad0d','projects_created_by','Users','users','id','Project','project','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('65c3c397-45f7-d03b-4458-510bec56f14e','projects_users_resources','Project','project','id','Users','users','id','project_resources','project_id','resource_id','many-to-many','resource_type','Users',0,0),('65e3c796-9e0a-cf67-13b2-510becfca4be','projects_contacts_resources','Project','project','id','Contacts','contacts','id','project_resources','project_id','resource_id','many-to-many','resource_type','Contacts',0,0),('660501ab-5378-0651-c727-510bec9fd4c4','projects_holidays','Project','project','id','Holidays','holidays','related_module_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6756093f-ba93-1ecf-b30f-510bec15ff32','contracts_contacts','Contracts','contracts','id','Contacts','contacts','id','contracts_contacts','contract_id','contact_id','many-to-many',NULL,NULL,0,0),('69ea3e23-33e2-2293-d1c7-510bec87535f','contracts_opportunities','Contracts','contracts','id','Opportunities','opportunities','id','contracts_opportunities','contract_id','opportunity_id','many-to-many',NULL,NULL,0,0),('6c93ed35-1744-9e02-b745-510becb7ccba','contracts_products','Contracts','contracts','id','Products','products','id','contracts_products','contract_id','product_id','many-to-many',NULL,NULL,0,0),('6d08e761-50bd-6e6d-955f-510becd19692','teamnotices_team_count_relationship','Teams','team_sets','id','TeamNotices','team_notices','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6d38e7b5-d060-0895-3598-510becf9ba84','teamnotices_teams','TeamNotices','team_notices','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('6d7ecd21-16d1-e82f-c95a-510becdaad17','teamnotices_team','Teams','teams','id','TeamNotices','team_notices','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6e8adb02-59bd-f52a-95ef-510bec04ce61','projecttask_team_count_relationship','Teams','team_sets','id','ProjectTask','project_task','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6eb66adb-2610-d40a-b5c4-510bec62e967','projecttask_teams','ProjectTask','project_task','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('6eddf6a5-07a5-1f4f-ad4e-510bec645332','projecttask_team','Teams','teams','id','ProjectTask','project_task','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6f0c86d2-ad3a-c0e5-63c1-510bec3e246d','contracts_quotes','Contracts','contracts','id','Quotes','quotes','id','contracts_quotes','contract_id','quote_id','many-to-many',NULL,NULL,0,0),('6f122a74-ee70-9ba3-212e-510bec217602','project_tasks_notes','ProjectTask','project_task','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','ProjectTask',0,0),('6f35f551-cc80-b9c7-33b9-510bec2ce27e','project_tasks_tasks','ProjectTask','project_task','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','ProjectTask',0,0),('6f59f0ed-35a2-fe7b-d691-510bec1547a2','project_tasks_meetings','ProjectTask','project_task','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','ProjectTask',0,0),('6f7b6646-fdc4-b57f-f704-510bec2e91cf','project_tasks_calls','ProjectTask','project_task','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','ProjectTask',0,0),('6f9cf55b-c6de-ef43-fb01-510becf6f22a','project_tasks_emails','ProjectTask','project_task','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','ProjectTask',0,0),('6fc006db-7cd1-a9de-9b07-510becdad142','project_tasks_assigned_user','Users','users','id','ProjectTask','project_task','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('6fe2dc49-60f7-b1c3-2235-510becdcaa57','project_tasks_modified_user','Users','users','id','ProjectTask','project_task','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('70113b17-1f7c-56b5-3913-510bec058230','project_tasks_created_by','Users','users','id','ProjectTask','project_task','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('71295464-8215-0573-7d13-510bec0adc40','product_templates_product_categories','ProductCategories','product_categories','id','ProductTemplates','product_templates','category_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('715d5692-273a-d524-728a-510becdd6f9f','product_templates_product_types','ProductTypes','product_types','id','ProductTemplates','product_templates','type_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('71863806-e7ea-8a2d-2f38-510beca187ec','product_templates_manufacturers','Manufacturers','manufacturers','id','ProductTemplates','product_templates','manufacturer_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('71acd21c-b165-f543-799b-510bec54f9db','product_templates_modified_user','Users','users','id','ProductTemplates','product_templates','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('71db4535-91e3-097f-2e8c-510bec8045ef','product_templates_created_by','Users','users','id','ProductTemplates','product_templates','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('74693725-28a2-dc79-218a-510becb2f01e','documents_accounts','Documents','documents','id','Accounts','accounts','id','documents_accounts','document_id','account_id','many-to-many',NULL,NULL,0,0),('77441220-942d-a4f1-29e6-510becab6ac0','documents_bugs','Documents','documents','id','Bugs','bugs','id','documents_bugs','document_id','bug_id','many-to-many',NULL,NULL,0,0),('78213c98-cb93-f5bd-8d2f-510bec7384ca','member_categories','ProductCategories','product_categories','id','ProductCategories','product_categories','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('790c460c-b0f9-652e-6daa-510bece88bbc','campaigns_modified_user','Users','users','id','Campaigns','campaigns','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7957b7f4-7cff-3daa-5db6-510bec9839a4','campaigns_created_by','Users','users','id','Campaigns','campaigns','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('797d2bf7-fd5f-2d8d-59ff-510becbc9023','campaigns_assigned_user','Users','users','id','Campaigns','campaigns','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('799c08a0-5587-00b9-3144-510bec669296','campaigns_team_count_relationship','Teams','team_sets','id','Campaigns','campaigns','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('79a176a8-994b-15ce-3c9e-510bec1440d7','documents_cases','Documents','documents','id','Cases','cases','id','documents_cases','document_id','case_id','many-to-many',NULL,NULL,0,0),('79cdd3fb-4bb4-ed96-c1d7-510bec62c1e7','campaigns_teams','Campaigns','campaigns','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('79ef5c80-319f-601f-94c5-510beca30d55','campaigns_team','Teams','teams','id','Campaigns','campaigns','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7a125371-ade9-b78e-cc60-510bec2a3c34','campaign_accounts','Campaigns','campaigns','id','Accounts','accounts','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7a36115e-86d1-7692-0414-510becc61450','campaign_contacts','Campaigns','campaigns','id','Contacts','contacts','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7a5521c4-2b73-80da-229a-510bec64637d','campaign_leads','Campaigns','campaigns','id','Leads','leads','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7a75295b-8c09-6e1c-80df-510bece5854a','campaign_prospects','Campaigns','campaigns','id','Prospects','prospects','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7a92f6de-9d15-c691-9e20-510becf576dc','campaign_opportunities','Campaigns','campaigns','id','Opportunities','opportunities','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7ab5e1fa-b88e-390e-cd79-510bec56f0bf','campaign_email_marketing','Campaigns','campaigns','id','EmailMarketing','email_marketing','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7adfabf3-5cab-0edf-fd11-510beca0d30c','campaign_emailman','Campaigns','campaigns','id','EmailMan','emailman','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7b05b907-7b47-ad79-e41f-510bec890d5e','campaign_campaignlog','Campaigns','campaigns','id','CampaignLog','campaign_log','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7b3f8fa9-4e0c-97c9-9411-510bece9217a','campaign_assigned_user','Users','users','id','Campaigns','campaigns','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7b62b630-13d1-66a2-a486-510bec6cd242','campaign_modified_user','Users','users','id','Campaigns','campaigns','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('7c449fdd-d812-da2e-0b43-510bec35eedf','documents_contacts','Documents','documents','id','Contacts','contacts','id','documents_contacts','document_id','contact_id','many-to-many',NULL,NULL,0,0),('7f4c4980-b1eb-260e-70ff-510bec715678','documents_opportunities','Documents','documents','id','Opportunities','opportunities','id','documents_opportunities','document_id','opportunity_id','many-to-many',NULL,NULL,0,0),('819e1460-b2b0-5728-45fc-510bec131238','prospectlists_assigned_user','Users','users','id','prospectlists','prospect_lists','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('81c945d9-5f01-5400-8da3-510becac547a','prospectlists_team_count_relationship','Teams','team_sets','id','ProspectLists','prospect_lists','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('81de20cf-8532-dff2-ba51-510bec7e6050','documents_products','Documents','documents','id','Products','products','id','documents_products','document_id','product_id','many-to-many',NULL,NULL,0,0),('81ea6b92-0d61-ce9c-70f8-510beca6cc88','prospectlists_teams','ProspectLists','prospect_lists','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('820a55f4-e20e-ae4d-d56e-510bec27e8c0','prospectlists_team','Teams','teams','id','ProspectLists','prospect_lists','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('844077cb-d7d0-8e13-a73f-510bec2b4a4d','quotes_modified_user','Users','users','id','Quotes','quotes','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('8471bd0a-4e85-435b-6026-510beca26999','quotes_created_by','Users','users','id','Quotes','quotes','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('8474070d-771a-0b87-3569-510bec6b13c4','documents_quotes','Documents','documents','id','Quotes','quotes','id','documents_quotes','document_id','quote_id','many-to-many',NULL,NULL,0,0),('84990589-9797-7624-ab13-510bec60aa5e','quotes_assigned_user','Users','users','id','Quotes','quotes','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('84bf2022-b3e5-a725-a8f7-510bece9c822','quotes_team_count_relationship','Teams','team_sets','id','Quotes','quotes','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('84e0e0db-d6c6-94a0-575e-510bec9bc8fb','quotes_teams','Quotes','quotes','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('85110935-6313-10f4-66ab-510bece6a8d8','quotes_team','Teams','teams','id','Quotes','quotes','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('85363564-7069-1ce8-e867-510bec28dbc6','quote_tasks','Quotes','quotes','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Quotes',0,0),('87f31bf0-c2e7-2d5c-8a61-510bec6992f2','prospects_modified_user','Users','users','id','Prospects','prospects','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('8822f64b-142d-595b-b97b-510bec82efc8','prospects_created_by','Users','users','id','Prospects','prospects','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('884c2edc-c143-86cf-ab70-510bec3e1d8f','prospects_assigned_user','Users','users','id','Prospects','prospects','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('88703699-1623-428d-7e1c-510bec644fb0','prospects_team_count_relationship','Teams','team_sets','id','Prospects','prospects','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('88b7a207-3364-bd27-0b4a-510bec91d26e','prospects_teams','Prospects','prospects','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('89071cc4-fb08-d758-aeb9-510becf21dd1','prospects_team','Teams','teams','id','Prospects','prospects','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('89580b28-b8e7-371a-4b20-510bece5ca00','prospects_email_addresses','Prospects','prospects','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','bean_module','Prospects',0,0),('897bff66-2a1c-87d6-8fea-510beccd7ff3','prospects_email_addresses_primary','Prospects','prospects','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','primary_address','1',0,0),('899ef612-7e5e-2f39-0612-510bec0d6c55','prospect_tasks','Prospects','prospects','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Prospects',0,0),('89c2e0bc-f9b5-ad9f-0e1a-510bec7b58c7','prospect_notes','Prospects','prospects','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Prospects',0,0),('89ec8795-d709-fafb-92aa-510bec6f0f7f','prospect_meetings','Prospects','prospects','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Prospects',0,0),('8a100767-5620-6d0a-8aab-510becd58113','prospect_calls','Prospects','prospects','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Prospects',0,0),('8a35c842-886f-0c38-e586-510becc03887','prospect_emails','Prospects','prospects','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Prospects',0,0),('8a5a0196-85f0-7051-72b3-510bec6bd354','prospect_campaign_log','Prospects','prospects','id','CampaignLog','campaign_log','target_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('8bfa56de-19e0-2d6e-467b-510becd783e7','quote_notes','Quotes','quotes','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Quotes',0,0),('8c2278f0-ca84-791e-6c18-510bec5bc3bf','quote_meetings','Quotes','quotes','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Quotes',0,0),('8c468eba-48ba-c6a1-c6c0-510bec8e04ae','quote_calls','Quotes','quotes','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Quotes',0,0),('8c69410c-e0fd-417d-b834-510becaf8b26','quote_emails','Quotes','quotes','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Quotes',0,0),('8c886acc-106d-ce64-bf35-510bec3dd2b4','quote_products','Quotes','quotes','id','Products','products','quote_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('8fce0db2-9cbb-502a-6566-510becd2adf8','email_marketing_prospect_lists','EmailMarketing','email_marketing','id','ProspectLists','prospect_lists','id','email_marketing_prospect_lists','email_marketing_id','prospect_list_id','many-to-many',NULL,NULL,0,0),('9062cbdf-aa93-7eaa-e77d-510bec4ecf93','email_template_email_marketings','EmailTemplates','email_templates','id','EmailMarketing','email_marketing','template_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('92c4d197-192f-c0d1-ff54-510bec213a96','emails_bugs_rel','Emails','emails','id','Bugs','bugs','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Bugs',0,0),('92ef5f5e-a8d6-9871-dce7-510bec61d8be','emails_cases_rel','Emails','emails','id','Cases','cases','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Cases',0,0),('9337c6fe-34c0-d255-10b0-510becbad182','emails_opportunities_rel','Emails','emails','id','Opportunities','opportunities','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Opportunities',0,0),('935c7e8e-09d2-2897-09f9-510becdc7d5a','emails_tasks_rel','Emails','emails','id','Tasks','tasks','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Tasks',0,0),('938213c6-8018-4c47-befe-510bec352627','emails_users_rel','Emails','emails','id','Users','users','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Users',0,0),('938a32f9-1413-00de-63b2-510bec49cea4','campaign_campaigntrakers','Campaigns','campaigns','id','CampaignTrackers','campaign_trkrs','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('93a2f060-4e3e-d646-1601-510bec1a12d3','emails_project_task_rel','Emails','emails','id','ProjectTask','project_task','id','emails_beans','email_id','bean_id','many-to-many','bean_module','ProjectTask',0,0),('93c7ad0d-d05c-2262-993d-510bec3a18e8','emails_projects_rel','Emails','emails','id','Project','project','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Project',0,0),('93ea5753-827a-994e-8429-510bec77280c','emails_prospects_rel','Emails','emails','id','Prospects','prospects','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Prospects',0,0),('9422ecb0-2290-ed62-d8bb-510bec15cf12','emails_quotes','Emails','emails','id','Quotes','quotes','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Quotes',0,0),('9a46ec8e-47d2-1254-02c0-510bec83ae4b','products_modified_user','Users','users','id','Products','products','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9a782184-f534-f920-dfe9-510bec9176f0','products_created_by','Users','users','id','Products','products','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9aa446cd-1e9d-6a24-4c8a-510becf402dd','products_team_count_relationship','Teams','team_sets','id','Products','products','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9ac8ed43-16b7-80e3-eb6c-510becf72b3c','products_teams','Products','products','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('9aee4dee-eda7-7bf4-c78d-510bec90dc7d','products_team','Teams','teams','id','Products','products','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9b0efadc-6d3c-81f3-5e7a-510bec89bdb7','product_notes','Products','products','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Products',0,0),('9b406f4d-82ee-3f4a-e3b8-510bec40d8d1','products_accounts','Accounts','accounts','id','Products','products','account_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9b649984-bffb-cef1-36cf-510becb65265','product_categories','ProductCategories','product_categories','id','Products','products','category_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9b865410-cfc5-3607-bfbd-510becfea544','product_types','ProductTypes','product_types','id','Products','products','type_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9c871d48-ca84-e48a-683b-510becc3ceeb','schedulers_created_by_rel','Users','users','id','Schedulers','schedulers','created_by',NULL,NULL,NULL,'one-to-one',NULL,NULL,0,0),('9cb33d62-8567-95ea-5c88-510bec91df82','schedulers_modified_user_id_rel','Users','users','id','Schedulers','schedulers','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9ce614ba-3912-19f6-aab6-510bec91b1db','schedulers_jobs_rel','Schedulers','schedulers','id','SchedulersJobs','job_queue','scheduler_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9f3b24b5-3c71-899f-d30e-510becfa42d2','productbundles_team_count_relationship','Teams','team_sets','id','ProductBundles','product_bundles','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9f65f99e-0ea8-3abf-2696-510bec7d3fb9','productbundles_teams','ProductBundles','product_bundles','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('9f8f3bc9-23c7-46f7-82c0-510becad6c61','productbundles_team','Teams','teams','id','ProductBundles','product_bundles','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('9fe917bc-fc93-55ec-08ef-510bec530bff','schedulersjobs_assigned_user','Users','users','id','SchedulersJobs','schedulersjobs','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a332282d-2667-aa10-4b51-510bec9c17f8','shipper_quotes','Shippers','shippers','id','Quotes','quotes','shipper_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a894e011-5f63-03a1-36f1-510becbb156d','timeperiod_forecast_schedules','TimePeriods','timeperiods','id','Forecasts','forecast_schedule','timeperiod_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a8971e09-93c0-bf29-e9ee-510becb90f42','contracts_documents','Contracts','contracts','id','Documents','documents','id','linked_documents','parent_id','document_id','many-to-many','parent_type','Contracts',0,0),('a8be93df-2e60-aecc-5668-510beca2f383','related_timeperiods','TimePeriods','timeperiods','id','TimePeriods','timeperiods','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a8c8a67f-24a6-0bda-6f99-510bec2fadb4','leads_documents','Leads','leads','id','Documents','documents','id','linked_documents','parent_id','document_id','many-to-many','parent_type','Leads',0,0),('a8db2423-da9c-27ec-f405-510becea9593','contacts_modified_user','Users','users','id','Contacts','contacts','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a8eb704e-9930-fb61-a960-510bec0d23a9','contracttype_documents','ContractTypes','contract_types','id','Documents','documents','id','linked_documents','parent_id','document_id','many-to-many','parent_type','ContracTemplates',0,0),('a9068f22-390b-cfda-b8a8-510becb807ca','contacts_created_by','Users','users','id','Contacts','contacts','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a9295943-fff8-c7a8-5534-510becf36bff','contacts_assigned_user','Users','users','id','Contacts','contacts','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a959c6b2-2fac-df19-bac8-510beccc4560','contacts_team_count_relationship','Teams','team_sets','id','Contacts','contacts','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a9836a24-b4a7-d15d-6a03-510bec49c037','contacts_teams','Contacts','contacts','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('a9a7aba1-7aab-25e8-c8f1-510bec54c2ac','contacts_team','Teams','teams','id','Contacts','contacts','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('a9cc4c90-f7c7-1c0a-a5ad-510becf9bff7','contacts_email_addresses','Contacts','contacts','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','bean_module','Contacts',0,0),('a9ec4f38-3a60-5ff0-6439-510becb83805','contacts_email_addresses_primary','Contacts','contacts','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','primary_address','1',0,0),('aa0e9c43-d6d1-a9e5-87cc-510bec5f9866','contact_direct_reports','Contacts','contacts','id','Contacts','contacts','reports_to_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('aa2ed59e-dbf7-812b-15d4-510bec00f184','contact_leads','Contacts','contacts','id','Leads','leads','contact_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('aa51cd6e-2992-fbeb-cac3-510bec64fcc8','contact_notes','Contacts','contacts','id','Notes','notes','contact_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('aa735545-7e5c-58bc-7ea0-510bec53152e','contact_tasks','Contacts','contacts','id','Tasks','tasks','contact_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('aa93a3f4-d24f-fd36-a5f5-510bec99dff0','contact_tasks_parent','Contacts','contacts','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Contacts',0,0),('aac6d989-3f8a-59ed-5e6d-510bec05622a','contact_products','Contacts','contacts','id','Products','products','contact_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('aae9f5d7-ef31-0372-6d01-510bec6de251','contact_campaign_log','Contacts','contacts','id','CampaignLog','campaign_log','target_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('abfffc1e-d8f6-4112-cf7f-510bec071039','meetings_contacts','Meetings','meetings','id','Contacts','contacts','id','meetings_contacts','meeting_id','contact_id','many-to-many',NULL,NULL,0,0),('adef0429-772a-6da9-50f2-510bec29cd13','sugarfeed_modified_user','Users','users','id','SugarFeed','sugarfeed','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ae910c19-e092-e4e3-97ca-510bec7478a6','meetings_leads','Meetings','meetings','id','Leads','leads','id','meetings_leads','meeting_id','lead_id','many-to-many',NULL,NULL,0,0),('af5902c1-9917-7a56-2221-510bec549e26','forecasts_created_by','Users','users','id','Forecasts','forecasts','user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b10c0d10-5bc6-7e3e-6dab-510bec0ce277','sugarfeed_created_by','Users','users','id','SugarFeed','sugarfeed','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b1956a88-d149-2377-bf18-510bec5188b7','meetings_users','Meetings','meetings','id','Users','users','id','meetings_users','meeting_id','user_id','many-to-many',NULL,NULL,0,0),('b2de80df-0dde-39d1-94b4-510beca7009b','accounts_modified_user','Users','users','id','Accounts','accounts','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b306c370-ccda-97e1-5665-510bec1a75ac','accounts_created_by','Users','users','id','Accounts','accounts','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b32943bc-e5ed-b48a-e88f-510beced85bf','accounts_assigned_user','Users','users','id','Accounts','accounts','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b34aaf87-e890-cd0b-9d8b-510bec44ee9d','accounts_team_count_relationship','Teams','team_sets','id','Accounts','accounts','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b356057b-7110-aa38-c4b0-510bece063e1','sugarfeed_team_count_relationship','Teams','team_sets','id','SugarFeed','sugarfeed','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b36de7df-d534-13d3-9ae9-510bec7a2e52','accounts_teams','Accounts','accounts','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('b38dc998-5ab9-f427-8504-510bec8306bc','accounts_team','Teams','teams','id','Accounts','accounts','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b3acfd34-81f9-b1ef-c040-510becfbf9d4','accounts_email_addresses','Accounts','accounts','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','bean_module','Accounts',0,0),('b3dd1070-7fdc-811d-4e35-510becde53f7','accounts_email_addresses_primary','Accounts','accounts','id','EmailAddresses','email_addresses','id','email_addr_bean_rel','bean_id','email_address_id','many-to-many','primary_address','1',0,0),('b3fcc572-01f8-3e63-034e-510bec8296c5','member_accounts','Accounts','accounts','id','Accounts','accounts','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b420ddbd-a234-8f29-8654-510bec45ef66','account_cases','Accounts','accounts','id','Cases','cases','account_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b4486ffd-063f-91df-8c07-510bec4bc875','account_tasks','Accounts','accounts','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Accounts',0,0),('b4680a5b-54da-d6bd-7cf0-510becd2926c','account_notes','Accounts','accounts','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Accounts',0,0),('b48c6a7e-294a-57b6-1712-510bec5d218b','account_meetings','Accounts','accounts','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Accounts',0,0),('b4ae488e-d737-6138-27ef-510bec2cbf3b','account_calls','Accounts','accounts','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Accounts',0,0),('b4d3f505-625c-4d57-5bc6-510bec946b36','account_emails','Accounts','accounts','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Accounts',0,0),('b4fbed5f-bdac-3605-b062-510bec8e0389','account_leads','Accounts','accounts','id','Leads','leads','account_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b523533d-f44b-4c8d-ca8f-510beceee7cf','account_campaign_log','Accounts','accounts','id','CampaignLog','campaign_log','target_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b587002e-bd43-b995-4e8b-510becc0ff57','sugarfeed_teams','SugarFeed','sugarfeed','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('b6f19e4d-8ca0-a725-3cbd-510bec203c51','opportunities_contacts','Opportunities','opportunities','id','Contacts','contacts','id','opportunities_contacts','opportunity_id','contact_id','many-to-many',NULL,NULL,0,0),('b7f70728-65ee-50b8-c14d-510becd063f7','sugarfeed_team','Teams','teams','id','SugarFeed','sugarfeed','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('b99ae0c8-deb7-e1cc-d5b0-510becb18f2b','product_bundle_note','ProductBundles','product_bundles','id','ProductBundleNotes','product_bundle_note','id','product_bundle_note','bundle_id','note_id','many-to-many',NULL,NULL,0,0),('ba0d047c-896d-6f97-d786-510bece1cbd5','sugarfeed_assigned_user','Users','users','id','SugarFeed','sugarfeed','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('bd8f48c5-6567-cc07-596f-510bec0cc320','product_bundle_product','ProductBundles','product_bundles','id','Products','products','id','product_bundle_product','bundle_id','product_id','many-to-many',NULL,NULL,0,0),('c0588a7d-99f5-ea65-04e1-510bec61b7e5','workflow_triggers','WorkFlow','workflow','id','WorkFlowTriggerShells','workflow_triggershells','parent_id',NULL,NULL,NULL,'one-to-many','frame_type','Primary',0,0),('c08bace0-430a-e158-c323-510becf42c43','workflow_trigger_filters','WorkFlow','workflow','id','WorkFlowTriggerShells','workflow_triggershells','parent_id',NULL,NULL,NULL,'one-to-many','frame_type','Secondary',0,0),('c0b274aa-9476-154c-c9aa-510bec9a4e67','workflow_alerts','WorkFlow','workflow','id','WorkFlowAlertShells','workflow_alertshells','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c0d23a1c-fe70-8f0f-c925-510becf49a30','workflow_actions','WorkFlow','workflow','id','WorkFlowActionShells','workflow_actionshells','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c0d695a0-4e94-c875-3bbd-510becf1f95b','product_bundle_quote','ProductBundles','product_bundles','id','Quotes','quotes','id','product_bundle_quote','bundle_id','quote_id','many-to-many',NULL,NULL,0,0),('c391cda9-3164-7fb1-57f3-510becfa3371','product_product','Products','products','id','Products','products','id','product_product','parent_id','child_id','many-to-many',NULL,NULL,1,0),('c3fc6b99-1647-7587-f10f-510beccb5b1f','past_triggers','WorkFlowTriggerShells','workflow_triggershells','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','past_trigger',0,0),('c4308afe-b8f4-2f6d-d763-510beca691f8','future_triggers','WorkFlowTriggerShells','workflow_triggershells','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','future_trigger',0,0),('c45c4197-8535-b6ac-9fe5-510becbe7c0d','trigger_expressions','WorkFlowTriggerShells','workflow_triggershells','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','expression',0,0),('c52f1269-d1d4-4ced-958c-510bec763a88','opportunities_modified_user','Users','users','id','Opportunities','opportunities','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c5569ef5-7a4d-1be3-aaa0-510bece0268e','opportunities_created_by','Users','users','id','Opportunities','opportunities','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c5791a09-a420-cb2a-7bd1-510bec60e7d8','opportunities_assigned_user','Users','users','id','Opportunities','opportunities','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c5ab91bf-9c74-d6d2-3677-510bece1c849','opportunities_team_count_relationship','Teams','team_sets','id','Opportunities','opportunities','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c5ce4434-e5d3-54c3-3110-510bec390666','opportunities_teams','Opportunities','opportunities','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('c5f150fa-7cab-1da0-1bbf-510bec50fec6','opportunities_team','Teams','teams','id','Opportunities','opportunities','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c6703b90-971c-56ce-a60f-510bec2536cb','opportunity_calls','Opportunities','opportunities','id','Calls','calls','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Opportunities',0,0),('c6962eab-b309-4165-c366-510becd94470','opportunity_meetings','Opportunities','opportunities','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Opportunities',0,0),('c6cdc503-72be-0e6a-0dfc-510bec2fc1d6','opportunity_tasks','Opportunities','opportunities','id','Tasks','tasks','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Opportunities',0,0),('c6f7457c-01eb-9a42-2eb7-510bec508ff6','opportunity_notes','Opportunities','opportunities','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Opportunities',0,0),('c71d3c77-2b52-b4f5-0117-510becc55f65','opportunity_emails','Opportunities','opportunities','id','Emails','emails','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Opportunities',0,0),('c744e10d-87dc-5dcf-cbe7-510becff8fb3','opportunity_leads','Opportunities','opportunities','id','Leads','leads','opportunity_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c7860532-605f-d300-b3ec-510bec35e22b','tracker_monitor_id','TrackerPerfs','tracker_perf','monitor_id','Trackers','tracker','monitor_id',NULL,NULL,NULL,'one-to-one',NULL,NULL,0,0),('c790b99a-c592-b45a-fef9-510bec27d2cd','opportunity_currencies','Opportunities','opportunities','currency_id','Currencies','currencies','id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c7a54dc5-6993-a5ad-9cbe-510bec232c62','alert_components','WorkFlowAlertShells','workflow_alertshells','id','WorkFlowAlerts','workflow_alerts','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c7b235a3-3861-1673-fabb-510bec379bb0','opportunities_campaign','Campaigns','campaigns','id','Opportunities','opportunities','campaign_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('c998c32b-364d-2059-988e-510beccf9b32','projects_accounts','Project','project','id','Accounts','accounts','id','projects_accounts','project_id','account_id','many-to-many',NULL,NULL,0,0),('cacb7936-97d9-0a4d-cb46-510bec0f6087','expressions','WorkFlowAlerts','workflow_alerts','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','filter',0,0),('caf6db53-6478-e84e-5f0e-510becf99c5c','rel1_alert_fil','WorkFlowAlerts','workflow_alerts','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','rel1_alert_fil',0,0),('cb20ab64-ccd9-6a2c-5f2e-510bec5eab35','rel2_alert_fil','WorkFlowAlerts','workflow_alerts','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','rel2_alert_fil',0,0),('cc1da691-ffac-d706-efb2-510becac25be','projects_bugs','Project','project','id','Bugs','bugs','id','projects_bugs','project_id','bug_id','many-to-many',NULL,NULL,0,0),('cd970dba-4780-6618-d18f-510bec8974b0','emailtemplates_team_count_relationship','Teams','team_sets','id','EmailTemplates','email_templates','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('cdc2bd7c-0c16-8418-2c3b-510bece22d3d','emailtemplates_teams','EmailTemplates','email_templates','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('cdec2d1a-faa0-28fa-91ba-510bec623dd6','emailtemplates_team','Teams','teams','id','EmailTemplates','email_templates','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ce15a70f-57e6-8245-dbc7-510becc9d9ed','emailtemplates_assigned_user','Users','users','id','EmailTemplates','email_templates','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ce2ed1d6-f941-2a01-37e2-510becd6cc4e','actions','WorkFlowActionShells','workflow_actionshells','id','WorkFlowActions','workflow_actions','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ce57d79e-0d41-f1dc-63be-510bec74852b','action_bridge','WorkFlowActionShells','workflow_actionshells','id','WorkFlow','workflow','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ce7e800e-16fc-639c-1af0-510beceb6777','rel1_action_fil','WorkFlowActionShells','workflow_actionshells','id','Expressions','expressions','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','rel1_action_fil',0,0),('cee41160-a186-fc13-6940-510bec7145c8','projects_cases','Project','project','id','Cases','cases','id','projects_cases','project_id','case_id','many-to-many',NULL,NULL,0,0),('d1e1cc7b-4ed2-3fa9-4e08-510bec1d93cf','projects_contacts','Project','project','id','Contacts','contacts','id','projects_contacts','project_id','contact_id','many-to-many',NULL,NULL,0,0),('d3e5437d-4804-9b95-eef7-510becba2746','notes_assigned_user','Users','users','id','Notes','notes','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('d40872c0-b518-54e3-af0d-510bec9b99f9','member_expressions','Expressions','expressions','id','Expressions','expressions','parent_exp_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('d40ec1a8-6333-7299-5000-510bec06c02c','notes_team_count_relationship','Teams','team_sets','id','Notes','notes','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('d4336af4-caf8-c43e-231e-510bec2d4dfd','notes_teams','Notes','notes','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('d456e8dc-8a53-403c-ab28-510becb0a6cd','notes_team','Teams','teams','id','Notes','notes','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('d46c55a2-4095-d150-7a96-510bec407efa','projects_opportunities','Project','project','id','Opportunities','opportunities','id','projects_opportunities','project_id','opportunity_id','many-to-many',NULL,NULL,0,0),('d4857482-358e-da97-8c3e-510bec8d7fb6','notes_modified_user','Users','users','id','Notes','notes','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('d4a75507-c56a-c6b5-a18d-510bec5a0797','notes_created_by','Users','users','id','Notes','notes','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('d75fdf93-88d1-100a-98e4-510bec67061b','projects_products','Project','project','id','Products','products','id','projects_products','project_id','product_id','many-to-many',NULL,NULL,0,0),('da0b49a6-91e0-ab16-7108-510bec3a3b56','projects_quotes','Project','project','id','Quotes','quotes','id','projects_quotes','project_id','quote_id','many-to-many',NULL,NULL,0,0),('da9f8d41-a586-e3a4-02e9-510becd37e82','calls_modified_user','Users','users','id','Calls','calls','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('dacaa476-ab93-6621-d924-510bec3d7a9f','calls_created_by','Users','users','id','Calls','calls','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('daedd8a0-3b6f-7756-591a-510becc6fff6','calls_assigned_user','Users','users','id','Calls','calls','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('db1fcbb4-9d4d-ff2b-5701-510bec66e98d','calls_team_count_relationship','Teams','team_sets','id','Calls','calls','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('db3e0ad9-5f52-5394-0915-510becde3b75','calls_teams','Calls','calls','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('db5c1936-24ef-57c8-df42-510bec429938','calls_team','Teams','teams','id','Calls','calls','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('db7979cc-3163-6b56-98d0-510becbfab84','calls_notes','Calls','calls','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Calls',0,0),('dc97c575-a16d-0e59-dcc4-510bec52aa2e','prospect_list_campaigns','ProspectLists','prospect_lists','id','Campaigns','campaigns','id','prospect_list_campaigns','prospect_list_id','campaign_id','many-to-many',NULL,NULL,0,0),('df6b5673-6438-2ef3-6a68-510becec7bff','prospect_list_contacts','ProspectLists','prospect_lists','id','Contacts','contacts','id','prospect_lists_prospects','prospect_list_id','related_id','many-to-many','related_type','Contacts',0,0),('dfac8ad9-45e2-d5e2-baa7-510bec1dd2bb','prospect_list_prospects','ProspectLists','prospect_lists','id','Prospects','prospects','id','prospect_lists_prospects','prospect_list_id','related_id','many-to-many','related_type','Prospects',0,0),('dff1a803-edbc-2fdb-2973-510bec44a741','prospect_list_leads','ProspectLists','prospect_lists','id','Leads','leads','id','prospect_lists_prospects','prospect_list_id','related_id','many-to-many','related_type','Leads',0,0),('e01c1dad-2f67-5a37-dff9-510bec3e2ff9','prospect_list_users','ProspectLists','prospect_lists','id','Users','users','id','prospect_lists_prospects','prospect_list_id','related_id','many-to-many','related_type','Users',0,0),('e0434569-53c9-562d-f412-510becea75a1','prospect_list_accounts','ProspectLists','prospect_lists','id','Accounts','accounts','id','prospect_lists_prospects','prospect_list_id','related_id','many-to-many','related_type','Accounts',0,0),('e126fa0f-647b-9d0d-9243-510bec048ccb','emails_team_count_relationship','Teams','team_sets','id','Emails','emails','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e14fb29b-219a-b055-6494-510bec1c504f','emails_teams','Emails','emails','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('e15a9f4b-2d20-a335-34a2-510becb2bfc4','kbdocuments_team_count_relationship','Teams','team_sets','id','KBDocuments','kbdocuments','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e1742364-3e20-43eb-b56a-510bec5c9e16','emails_team','Teams','teams','id','Emails','emails','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e19073dc-e018-a687-a668-510becac4fa2','kbdocuments_teams','KBDocuments','kbdocuments','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('e194cde6-70c1-352f-95e3-510bec92ea00','emails_assigned_user','Users','users','id','Emails','emails','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e1b5b4d6-6c0b-c016-efae-510bec7a0dfb','emails_modified_user','Users','users','id','Emails','emails','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e1bc7082-a7d1-513d-efab-510becc38c78','kbdocuments_team','Teams','teams','id','KBDocuments','kbdocuments','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e1d6fe9e-670a-20a5-0a05-510bec793371','emails_created_by','Users','users','id','Emails','emails','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e1f3f827-77db-2c67-5e1a-510becfa8566','kbdocument_revisions','KBDocuments','kbdocuments','id','KBDocumentRevisions','kbdocument_revisions','kbdocument_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e1f6d4f1-1d83-3633-a468-510bec2bd681','emails_notes_rel','Emails','emails','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e218693b-f3f7-2785-20cf-510bec665ca2','emails_contacts_rel','Emails','emails','id','Contacts','contacts','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Contacts',0,0),('e22cb0e8-837c-c7a6-2616-510beca9a53b','kbdocuments_modified_user','Users','users','id','KBDocuments','kbdocuments','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e2401526-e1eb-ba29-277e-510bec860342','emails_accounts_rel','Emails','emails','id','Accounts','accounts','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Accounts',0,0),('e24efd4f-377c-1733-9bfe-510bec23f434','kbdocuments_created_by','Users','users','id','KBDocuments','kbdocuments','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e26f0595-8240-2d54-6ab7-510becd8c843','kb_assigned_user','Users','users','id','KBDocuments','kbdocuments','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e271480d-b12f-d717-3363-510bec354465','emails_leads_rel','Emails','emails','id','Leads','leads','id','emails_beans','email_id','bean_id','many-to-many','bean_module','Leads',0,0),('e28fd6f5-9ace-b5cb-d545-510bec1956c5','kbdoc_approver_user','Users','users','id','KBDocuments','kbdocuments','kbdoc_approver_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e29150a4-d445-46c3-ac78-510bec9cc3a6','emails_meetings_rel','Emails','emails','id','Meetings','meetings','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e2a62717-2930-a08e-2977-510bec881395','quotes_billto_accounts','Accounts','accounts','id','Quotes','quotes','id','quotes_accounts','account_id','quote_id','many-to-many','account_role','Bill To',0,0),('e2b4b2f7-d8b3-6378-cc2c-510bec72315d','case_kbdocuments','Cases','cases','id','KBDocuments','kbdocuments','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Cases',0,0),('e2d4757f-4642-01f5-c008-510becd9f6f1','email_kbdocuments','Emails','emails','id','KBDocuments','kbdocuments','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Emails',0,0),('e2dc448b-8c5c-7f86-ee50-510bec76096a','quotes_shipto_accounts','Accounts','accounts','id','Quotes','quotes','id','quotes_accounts','account_id','quote_id','many-to-many','account_role','Ship To',0,0),('e5a436d0-949f-24f2-4244-510beca8f9e0','quotes_contacts_shipto','Contacts','contacts','id','Quotes','quotes','id','quotes_contacts','contact_id','quote_id','many-to-many','contact_role','Ship To',0,0),('e5cfd14c-2abf-2513-9623-510bec32afba','quotes_contacts_billto','Contacts','contacts','id','Quotes','quotes','id','quotes_contacts','contact_id','quote_id','many-to-many','contact_role','Bill To',0,0),('e5d78f04-fe22-9360-0347-510bece3654c','kbrev_revisions_created_by','Users','users','id','KBDocumentRevisions','kbdocument_revisions','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e8552e3e-50c2-dca3-49a8-510bec8e62c7','quotes_opportunities','Quotes','quotes','id','Opportunities','opportunities','id','quotes_opportunities','quote_id','opportunity_id','many-to-many',NULL,NULL,0,0),('e8be021b-906c-5f84-4f02-510becce8276','kbtags_team_count_relationship','Teams','team_sets','id','KBTags','kbtags','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e8c2e448-47a3-4040-06e2-510becd7e587','meetings_modified_user','Users','users','id','Meetings','meetings','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e8eccf4d-9872-ee47-4e78-510bec87bf76','meetings_created_by','Users','users','id','Meetings','meetings','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e8edaaf3-e35e-0e18-eec4-510bec808333','kbtags_teams','KBTags','kbtags','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('e911ba0a-c6bf-b7ee-a405-510bec3a5083','meetings_assigned_user','Users','users','id','Meetings','meetings','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e91abeb1-3c3f-a98d-56df-510becdb5a51','kbtags_team','Teams','teams','id','KBTags','kbtags','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e9322d08-bece-e339-6856-510bec819982','meetings_team_count_relationship','Teams','team_sets','id','Meetings','meetings','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e96dcef5-a4b1-d9ba-b1a9-510bec335956','meetings_teams','Meetings','meetings','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('e991f23c-f633-ead1-fb33-510becc312df','meetings_team','Teams','teams','id','Meetings','meetings','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('e9b69bfa-e978-5843-19ae-510becf9297e','meetings_notes','Meetings','meetings','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many','parent_type','Meetings',0,0),('ec942bab-0bb3-ecc8-40f1-510bec7f2bcd','kbdocumentkbtags_team_count_relationship','Teams','team_sets','id','KBDocumentKBTags','kbdocuments_kbtags','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ecc0bfbb-5058-4d93-23df-510bec1f9044','kbdocumentkbtags_teams','KBDocumentKBTags','kbdocuments_kbtags','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('ecf35ee9-1c21-b95d-47a0-510becab45f4','kbdocumentkbtags_team','Teams','teams','id','KBDocumentKBTags','kbdocuments_kbtags','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('ed1847bb-bee5-a45e-7f37-510becd33f76','kbrevisions_created_by','Users','users','id','KBDocumentKBTags','kbdocuments_kbtags','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('efa2c3bc-9bfe-15ec-6d7e-510bec97c18d','tasks_modified_user','Users','users','id','Tasks','tasks','modified_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('efcd27f3-76fa-96ad-8fef-510beca0000f','tasks_created_by','Users','users','id','Tasks','tasks','created_by',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('efec3b34-8d49-5658-f0a3-510becf7616d','tasks_assigned_user','Users','users','id','Tasks','tasks','assigned_user_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('f00a0cd2-f094-19ab-e738-510bec365cb5','tasks_team_count_relationship','Teams','team_sets','id','Tasks','tasks','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('f02877c4-8b63-e77f-779b-510becda5229','tasks_teams','Tasks','tasks','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('f058482a-c918-7e5e-549a-510bec54b9c5','tasks_team','Teams','teams','id','Tasks','tasks','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('f07bfa78-df9d-80e6-e189-510bec12f445','tasks_notes','Tasks','tasks','id','Notes','notes','parent_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('f27a1ec4-c4ed-df55-3a50-510bec2336d5','roles_users','Roles','roles','id','Users','users','id','roles_users','role_id','user_id','many-to-many',NULL,NULL,0,0),('f27d5763-1540-4175-28bd-510bec2a757b','kbcontents_team_count_relationship','Teams','team_sets','id','KBContents','kbcontents','team_set_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('f2aa9cdd-d9d0-c585-b4a4-510bec03de13','kbcontents_teams','KBContents','kbcontents','team_set_id','Teams','teams','id','team_sets_teams','team_set_id','team_id','many-to-many',NULL,NULL,0,0),('f2d3445b-b302-a00a-a4fd-510bec6c94a1','kbcontents_team','Teams','teams','id','KBContents','kbcontents','team_id',NULL,NULL,NULL,'one-to-many',NULL,NULL,0,0),('f4460415-63f6-90bf-4a16-510bececdf29','tracker_tracker_queries','Trackers','tracker','monitor_id','TrackerQueries','tracker_queries','query_id','tracker_tracker_queries','monitor_id','query_id','many-to-many',NULL,NULL,0,0);
/*!40000 ALTER TABLE `relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `releases`
--

DROP TABLE IF EXISTS `releases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `releases` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `list_order` int(4) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_releases` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `releases`
--

LOCK TABLES `releases` WRITE;
/*!40000 ALTER TABLE `releases` DISABLE KEYS */;
/*!40000 ALTER TABLE `releases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report_cache`
--

DROP TABLE IF EXISTS `report_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_cache` (
  `id` char(36) NOT NULL,
  `assigned_user_id` char(36) NOT NULL,
  `contents` text,
  `report_options` text,
  `deleted` varchar(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report_cache`
--

LOCK TABLES `report_cache` WRITE;
/*!40000 ALTER TABLE `report_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `report_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report_schedules`
--

DROP TABLE IF EXISTS `report_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_schedules` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `report_id` char(36) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `next_run` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `time_interval` int(11) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `schedule_type` varchar(3) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report_schedules`
--

LOCK TABLES `report_schedules` WRITE;
/*!40000 ALTER TABLE `report_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `report_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `description` text,
  `modules` text,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_role_id_del` (`id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_modules`
--

DROP TABLE IF EXISTS `roles_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_modules` (
  `id` varchar(36) NOT NULL,
  `role_id` varchar(36) DEFAULT NULL,
  `module_id` varchar(36) DEFAULT NULL,
  `allow` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_role_id` (`role_id`),
  KEY `idx_module_id` (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_modules`
--

LOCK TABLES `roles_modules` WRITE;
/*!40000 ALTER TABLE `roles_modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `id` varchar(36) NOT NULL,
  `role_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_ru_role_id` (`role_id`),
  KEY `idx_ru_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saved_reports`
--

DROP TABLE IF EXISTS `saved_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saved_reports` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `module` varchar(36) DEFAULT NULL,
  `report_type` varchar(36) DEFAULT NULL,
  `content` longtext,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT '0',
  `chart_type` varchar(36) DEFAULT 'none',
  `schedule_type` varchar(3) DEFAULT 'pro',
  `favorite` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_saved_reports_tmst_id` (`team_set_id`),
  KEY `idx_rep_owner_module_name` (`assigned_user_id`,`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_reports`
--

LOCK TABLES `saved_reports` WRITE;
/*!40000 ALTER TABLE `saved_reports` DISABLE KEYS */;
INSERT INTO `saved_reports` VALUES ('1','1','38353272-e7e3-25f0-443f-510bec03437a','Current Quarter Forecast','Opportunities','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Name\",\"table_key\":\"Opportunities:accounts\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"},{\"name\":\"probability\",\"label\":\"Probability (%)\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\"}],\"module\":\"Opportunities\",\"group_defs\":[],\"summary_columns\":[],\"report_name\":\"Current Quarter Forecast\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:accounts\":{\"name\":\"Opportunities  >  Accounts\",\"parent\":\"self\",\"link_def\":{\"name\":\"accounts\",\"relationship_name\":\"accounts_opportunities\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Accounts\",\"table_key\":\"Opportunities:accounts\"},\"dependents\":[\"display_cols_row_2\"],\"module\":\"Accounts\",\"label\":\"Accounts\"},\"Opportunities:assigned_user_link\":{\"name\":\"Opportunities  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Opportunities:assigned_user_link\"},\"dependents\":[\"display_cols_row_6\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"date_closed\",\"table_key\":\"self\",\"qualifier_name\":\"between_dates\",\"runtime\":1,\"input_name0\":\"2009-10-01\",\"input_name1\":\"2009-12-31\"}}},\"chart_type\":\"none\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','394420fd-ad53-ea08-4792-510bec04720d','Detailed Forecast','Opportunities','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"accounts\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"description\",\"label\":\"Description\",\"table_key\":\"self\"},{\"name\":\"next_step\",\"label\":\"Next Step\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"},{\"name\":\"probability\",\"label\":\"Probability (%)\",\"table_key\":\"self\"}],\"summary_columns\":[],\"order_by\":[{\"name\":\"probability\",\"label\":\"Probability (%)\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"filters_def\":[],\"group_defs\":[],\"links_def\":[\"accounts\",\"team_link\",\"created_by_link\",\"modified_user_link\",\"assigned_user_link\"],\"module\":\"Opportunities\",\"report_name\":\"Detailed Forecast\",\"report_type\":\"tabular\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','39dc48d5-3c3d-06ed-7b7d-510bec63df61','Partner Account List','Accounts','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"self\"},{\"name\":\"phone_office\",\"label\":\"Phone Office\",\"table_key\":\"self\"},{\"name\":\"description\",\"label\":\"Description\",\"table_key\":\"self\"},{\"name\":\"annual_revenue\",\"label\":\"Annual Revenue\",\"table_key\":\"self\"},{\"name\":\"account_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"full_name\",\"label\":\"Assigned to\",\"table_key\":\"assigned_user_link\"}],\"summary_columns\":[],\"filters_def\":[{\"name\":\"account_type\",\"table_key\":\"self\",\"qualifier_name\":\"is\",\"input_name0\":\"Partner\"}],\"group_defs\":[],\"links_def\":[\"member_of\",\"team_link\",\"created_by_link\",\"modified_user_link\",\"assigned_user_link\"],\"module\":\"Accounts\",\"report_name\":\"Partner Account List\",\"order_by\":[],\"report_type\":\"tabular\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','3a8a8ebf-9e92-f049-c20e-510bec321fe5','Customer Account List','Accounts','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"self\"},{\"name\":\"website\",\"label\":\"Website\",\"table_key\":\"self\"},{\"name\":\"phone_office\",\"label\":\"Phone Office\",\"table_key\":\"self\"},{\"name\":\"description\",\"label\":\"Description\",\"table_key\":\"self\"},{\"name\":\"account_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"full_name\",\"label\":\"Assigned to\",\"table_key\":\"assigned_user_link\"}],\"summary_columns\":[],\"filters_def\":[{\"name\":\"account_type\",\"table_key\":\"self\",\"qualifier_name\":\"is\",\"input_name0\":\"Customer\"}],\"group_defs\":[],\"links_def\":[\"member_of\",\"team_link\",\"created_by_link\",\"modified_user_link\",\"assigned_user_link\"],\"module\":\"Accounts\",\"report_name\":\"Customer Account List\",\"order_by\":[],\"report_type\":\"tabular\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','3b22405b-697c-eb12-03b3-510bec69f341','Call List By Last Date Contacted','Contacts','tabular','{\"display_columns\":[{\"name\":\"date_modified\",\"label\":\"Last Modified\",\"table_key\":\"self\"},{\"name\":\"full_name\",\"label\":\"Contact Name\",\"table_key\":\"self\"},{\"name\":\"phone_work\",\"label\":\"Office Phone\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"accounts\"},{\"name\":\"alt_address_country\",\"label\":\"Alternate Address Country\",\"table_key\":\"self\"},{\"name\":\"full_name\",\"label\":\"Assigned to\",\"table_key\":\"assigned_user_link\"}],\"summary_columns\":[],\"filters_def\":[{\"name\":\"do_not_call\",\"table_key\":\"self\",\"qualifier_name\":\"equals\",\"input_name0\":[\"no\"]}],\"group_defs\":[],\"links_def\":[\"accounts\",\"reports_to_link\",\"team_link\",\"created_by_link\",\"modified_user_link\",\"assigned_user_link\"],\"order_by\":[],\"module\":\"Contacts\",\"report_name\":\"Call List By Last Date Contacted\",\"report_type\":\"tabular\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','3bb64ef6-2bf2-42ef-2b7d-510bec1f2988','Opportunities By Lead Source','Opportunities','detailed_summary','{\"report_type\":\"summary\",\"display_columns\":[{\"name\":\"lead_source\",\"label\":\"Lead Source\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"accounts\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\"},{\"name\":\"probability\",\"label\":\"Probability (%)\",\"table_key\":\"self\"},{\"name\":\"full_name\",\"label\":\"Assigned to\",\"table_key\":\"assigned_user_link\"}],\"summary_columns\":[{\"name\":\"lead_source\",\"label\":\"Opportunities: Lead Source\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"order_by\":[{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\",\"sort_dir\":\"d\"}],\"filters_def\":[],\"group_defs\":[{\"name\":\"lead_source\",\"label\":\"Lead Source\",\"table_key\":\"self\"}],\"links_def\":[\"accounts\",\"team_link\",\"created_by_link\",\"modified_user_link\",\"assigned_user_link\"],\"module\":\"Opportunities\",\"report_name\":\"Opportunities By Lead Source\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','3c5f81a7-19c3-d83f-78e4-510bec22ea9e','Open Cases By User By Status','Cases','detailed_summary','{\"report_type\":\"summary\",\"display_columns\":[{\"name\":\"case_number\",\"label\":\"Cases: Number\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Cases: Subject\",\"table_key\":\"self\"},{\"name\":\"date_entered\",\"label\":\"Cases: Date Created\",\"table_key\":\"self\"}],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"status\",\"label\":\"Cases: Status\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"}],\"filters_def\":[{\"name\":\"status\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"input_name0\":[\"New\",\"Assigned\",\"Pending Input\"]}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_0\"},{\"name\":\"status\",\"label\":\"Status\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Cases\",\"module\":\"Cases\",\"label\":\"Cases\",\"children\":{\"self_link_0\":\"self_link_0\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"cases_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_0\"},\"module\":\"Users\"}},\"module\":\"Cases\",\"report_name\":\"Open Cases By User By Status\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','3cf10093-6d61-0529-2d42-510beca7308f','Open Cases By Month By User','Cases','detailed_summary','{\"report_type\":\"summary\",\"display_columns\":[{\"name\":\"case_number\",\"label\":\"Cases: Number\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Cases: Subject\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Account: Name\",\"table_key\":\"self_link_1\"}],\"summary_columns\":[{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\",\"qualifier\":\"month\",\"is_group_by\":\"hidden\",\"column_function\":\"month\"},{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"date_entered\",\"label\":\"Cases: Month: Date Created\",\"column_function\":\"month\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"}],\"filters_def\":[{\"name\":\"status\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"input_name0\":[\"New\",\"Assigned\",\"Pending Input\"]}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\",\"qualifier\":\"month\",\"is_group_by\":\"hidden\",\"column_function\":\"month\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_0\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Cases\",\"module\":\"Cases\",\"label\":\"Cases\",\"children\":{\"self_link_0\":\"self_link_0\",\"self_link_1\":\"self_link_1\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"cases_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_0\"},\"module\":\"Users\"},\"self_link_1\":{\"parent\":\"self\",\"children\":[],\"value\":\"account\",\"label\":\"Account\",\"link_def\":{\"name\":\"account\",\"relationship_name\":\"account_cases\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Account\",\"table_key\":\"self_link_1\"},\"module\":\"Accounts\"}},\"module\":\"Cases\",\"report_name\":\"Open Cases By Month By User\",\"chart_type\":\"vBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'vBarF','pro',NULL),('1','1','3d9ee15d-2abf-ee58-dd52-510bec654df7','Open Cases By Priority By User','Cases','detailed_summary','{\"report_type\":\"summary\",\"display_columns\":[{\"name\":\"case_number\",\"label\":\"Cases: Number\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Cases: Subject\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Account: Name\",\"table_key\":\"self_link_1\"}],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"priority\",\"label\":\"Cases: Priority\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"}],\"filters_def\":[{\"name\":\"status\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"input_name0\":[\"New\",\"Assigned\",\"Pending Input\"]}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_0\"},{\"name\":\"priority\",\"label\":\"Priority\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Cases\",\"module\":\"Cases\",\"label\":\"Cases\",\"children\":{\"self_link_0\":\"self_link_0\",\"self_link_1\":\"self_link_1\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"cases_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_0\"},\"module\":\"Users\"},\"self_link_1\":{\"parent\":\"self\",\"children\":[],\"value\":\"account\",\"label\":\"Account\",\"link_def\":{\"name\":\"account\",\"relationship_name\":\"account_cases\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Account\",\"table_key\":\"self_link_1\"},\"module\":\"Accounts\"}},\"module\":\"Cases\",\"report_name\":\"Open Cases By Priority By User\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','3e42ec4d-8388-2b1a-ee8a-510becea561c','New Cases By Month','Cases','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\",\"qualifier\":\"month\",\"is_group_by\":\"hidden\",\"column_function\":\"month\"},{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"date_entered\",\"label\":\"Cases: Month: Date Created\",\"column_function\":\"month\",\"table_key\":\"self\"}],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\",\"qualifier\":\"month\",\"is_group_by\":\"hidden\",\"column_function\":\"month\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Cases\",\"module\":\"Cases\",\"label\":\"Cases\",\"children\":[]}},\"module\":\"Cases\",\"report_name\":\"New Cases By Month\",\"chart_type\":\"vBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'vBarF','pro',NULL),('1','1','3ed82a94-7c45-afc6-4ff9-510bec083615','Pipeline By Type By Team','Opportunities','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"amount_usdollar\",\"label\":\"Opportunities: SUM: Amount\",\"group_function\":\"sum\",\"table_key\":\"self\"},{\"name\":\"opportunity_type\",\"label\":\"Opportunities: Type\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"name\",\"label\":\"Team: Team Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"}],\"filters_def\":[{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"input_name0\":[\"Prospecting\",\"Qualification\",\"Needs Analysis\",\"Value Proposition\",\"Id. Decision Makers\",\"Perception Analysis\",\"Proposal\\/Price Quote\",\"Negotiation\\/Review\"]}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"name\",\"label\":\"Team Name\",\"table_key\":\"self_link_0\"},{\"name\":\"opportunity_type\",\"label\":\"Type\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\",\"children\":{\"self_link_0\":\"self_link_0\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"team_link\",\"label\":\"Team\",\"link_def\":{\"name\":\"team_link\",\"relationship_name\":\"opportunities_team\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Team\",\"table_key\":\"self_link_0\"},\"module\":\"Teams\"}},\"module\":\"Opportunities\",\"report_name\":\"Pipeline By Type By Team\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"self:amount_usdollar:sum\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','3f8c94e2-cd31-f0f9-ebe8-510bece9122b','Pipeline By Team By User','Opportunities','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"amount_usdollar\",\"label\":\"Opportunities: SUM: Amount\",\"group_function\":\"sum\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Team: Team Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_1\",\"is_group_by\":\"visible\"}],\"filters_def\":[{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"input_name0\":[\"Prospecting\",\"Qualification\",\"Needs Analysis\",\"Value Proposition\",\"Id. Decision Makers\",\"Perception Analysis\",\"Proposal\\/Price Quote\",\"Negotiation\\/Review\"]}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"name\",\"label\":\"Team Name\",\"table_key\":\"self_link_0\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_1\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\",\"children\":{\"self_link_0\":\"self_link_0\",\"self_link_1\":\"self_link_1\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"team_link\",\"label\":\"Team\",\"link_def\":{\"name\":\"team_link\",\"relationship_name\":\"opportunities_team\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Team\",\"table_key\":\"self_link_0\"},\"module\":\"Teams\"},\"self_link_1\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_1\"},\"module\":\"Users\"}},\"module\":\"Opportunities\",\"report_name\":\"Pipeline By Team By User\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"self:amount_usdollar:sum\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','402a7d25-abcd-e617-12fa-510beceeffd0','Opportunities Won By Lead Source','Opportunities','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"amount_usdollar\",\"label\":\"Opportunities: SUM: Amount\",\"group_function\":\"sum\",\"table_key\":\"self\"},{\"name\":\"lead_source\",\"label\":\"Opportunities: Lead Source\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"filters_def\":[{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"is\",\"input_name0\":[\"Closed Won\"]}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"lead_source\",\"label\":\"Lead Source\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\",\"children\":[]}},\"module\":\"Opportunities\",\"report_name\":\"Opportunities Won By Lead Source\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"self:amount_usdollar:sum\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','40cf4bdf-3f2f-fcd7-c980-510becb9420d','Tasks By Team By User','Tasks','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Team: Team Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_1\",\"is_group_by\":\"visible\"}],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"name\",\"label\":\"Team Name\",\"table_key\":\"self_link_0\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_1\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Tasks\",\"module\":\"Tasks\",\"label\":\"Tasks\",\"children\":{\"self_link_0\":\"self_link_0\",\"self_link_1\":\"self_link_1\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"team_link\",\"label\":\"Team\",\"link_def\":{\"name\":\"team_link\",\"relationship_name\":\"tasks_team\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Team\",\"table_key\":\"self_link_0\"},\"module\":\"Teams\"},\"self_link_1\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tasks_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_1\"},\"module\":\"Users\"}},\"module\":\"Tasks\",\"report_name\":\"Tasks By Team By User\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','4176defe-0fa6-d2c3-d40c-510bec15b84a','Meetings By Team By User','Meetings','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Team: Team Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_1\",\"is_group_by\":\"visible\"}],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"name\",\"label\":\"Team Name\",\"table_key\":\"self_link_0\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_1\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Meetings\",\"module\":\"Meetings\",\"label\":\"Meetings\",\"children\":{\"self_link_0\":\"self_link_0\",\"self_link_1\":\"self_link_1\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"team_link\",\"label\":\"Team\",\"link_def\":{\"name\":\"team_link\",\"relationship_name\":\"meetings_team\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Team\",\"table_key\":\"self_link_0\"},\"module\":\"Teams\"},\"self_link_1\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"meetings_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_1\"},\"module\":\"Users\"}},\"module\":\"Meetings\",\"report_name\":\"Meetings By Team By User\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','421a9a2a-f029-d4de-d58c-510bec96cd15','Calls By Team By User','Calls','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Team: Team Name\",\"table_key\":\"self_link_0\",\"is_group_by\":\"visible\"},{\"name\":\"user_name\",\"label\":\"Assigned to User: User Name\",\"table_key\":\"self_link_1\",\"is_group_by\":\"visible\"}],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"name\",\"label\":\"Team Name\",\"table_key\":\"self_link_0\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"self_link_1\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Calls\",\"module\":\"Calls\",\"label\":\"Calls\",\"children\":{\"self_link_0\":\"self_link_0\",\"self_link_1\":\"self_link_1\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"team_link\",\"label\":\"Team\",\"link_def\":{\"name\":\"team_link\",\"relationship_name\":\"calls_team\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Team\",\"table_key\":\"self_link_0\"},\"module\":\"Teams\"},\"self_link_1\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned to User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"calls_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"self_link_1\"},\"module\":\"Users\"}},\"module\":\"Calls\",\"report_name\":\"Calls By Team By User\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','42a91d45-2193-89cb-5940-510becae65e4','Accounts By Type By Industry','Accounts','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"account_type\",\"label\":\"Accounts: Type\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"industry\",\"label\":\"Accounts: Industry\",\"table_key\":\"self\",\"is_group_by\":\"visible\"}],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"account_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"industry\",\"label\":\"Industry\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Accounts\",\"module\":\"Accounts\",\"label\":\"Accounts\",\"children\":[]}},\"module\":\"Accounts\",\"report_name\":\"Accounts By Type By Industry\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','433d8736-12dc-5c19-449c-510bec4fe7f4','Leads By Lead Source','Leads','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"count\",\"label\":\"Count\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"lead_source\",\"label\":\"Leads: Lead Source\",\"table_key\":\"self\",\"is_group_by\":\"visible\"}],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"lead_source\",\"label\":\"Lead Source\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Leads\",\"module\":\"Leads\",\"label\":\"Leads\",\"children\":{\"self_link_0\":\"self_link_0\"}},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"assigned_user_link\",\"label\":\"Assigned To User\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"leads_assigned_user\",\"bean_is_lhs\":\"\",\"link_type\":\"one\",\"label\":\"Assigned To User\",\"table_key\":\"self_link_0\"},\"module\":\"Users\"}},\"module\":\"Leads\",\"report_name\":\"Leads By Lead Source\",\"chart_type\":\"vBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'vBarF','pro',NULL),('1','1','43e93527-72d8-712e-8bf8-510bec215ee0','Customer Account Owners','Accounts','summary','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Name\",\"table_key\":\"self\"},{\"name\":\"website\",\"label\":\"Website\",\"table_key\":\"self\"},{\"name\":\"phone_office\",\"label\":\"Phone Office\",\"table_key\":\"self\"},{\"name\":\"billing_address_city\",\"label\":\"Billing City\",\"table_key\":\"self\"},{\"name\":\"billing_address_country\",\"label\":\"Billing Country\",\"table_key\":\"self\"}],\"module\":\"Accounts\",\"group_defs\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Accounts:assigned_user_link\",\"type\":\"user_name\"}],\"summary_columns\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Accounts:assigned_user_link\"},{\"name\":\"count\",\"label\":\"Count\",\"field_type\":\"\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"order_by\":[{\"name\":\"name\",\"type\":\"name\",\"dbType\":\"varchar\",\"vname\":\"Name\",\"len\":\"150\",\"unified_search\":\"1\",\"audited\":\"1\",\"required\":\"1\",\"importable\":\"required\",\"merge_filter\":\"selected\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"Customer Account Owners\",\"chart_type\":\"none\",\"do_round\":1,\"chart_description\":\"Customer Account Owners\",\"numerical_chart_column\":\"self:count\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Accounts\",\"module\":\"Accounts\",\"label\":\"Accounts\"},\"Accounts:assigned_user_link\":{\"name\":\"Accounts > Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"accounts_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Accounts:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_1\",\"group_by_row_1\",\"display_summaries_row_group_by_row_1\",\"Filter.1_table_filter_row_1\",\"group_by_row_1\",\"display_summaries_row_group_by_row_1\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Accounts:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Current User\"]}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','448718fc-1ce3-eb95-9c33-510becc69f93','My New Customer Accounts','Accounts','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Name\",\"table_key\":\"self\"},{\"name\":\"website\",\"label\":\"Website\",\"table_key\":\"self\"},{\"name\":\"phone_office\",\"label\":\"Phone Office\",\"table_key\":\"self\"},{\"name\":\"billing_address_city\",\"label\":\"Billing City\",\"table_key\":\"self\"},{\"name\":\"billing_address_country\",\"label\":\"Billing Country\",\"table_key\":\"self\"}],\"module\":\"Accounts\",\"group_defs\":[],\"summary_columns\":[],\"report_name\":\"My New Customer Accounts\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Accounts\",\"module\":\"Accounts\",\"label\":\"Accounts\"},\"Accounts:assigned_user_link\":{\"name\":\"Accounts  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"accounts_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Accounts:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_2\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"account_type\",\"table_key\":\"self\",\"qualifier_name\":\"is\",\"input_name0\":[\"Customer\"]},\"1\":{\"name\":\"user_name\",\"table_key\":\"Accounts:assigned_user_link\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"2\":{\"name\":\"date_entered\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"}}},\"chart_type\":\"none\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','4529b61f-fbd8-4107-01a8-510beccd4ce7','Opportunities By Sales Stage','Opportunities','summary','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"},{\"name\":\"description\",\"label\":\"Description\",\"table_key\":\"self\"},{\"name\":\"opportunity_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"probability\",\"label\":\"Probability (%)\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\"}],\"module\":\"Opportunities\",\"group_defs\":[{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\",\"type\":\"enum\"}],\"summary_columns\":[{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Count\",\"field_type\":\"\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"AVG: Amount\",\"field_type\":\"currency\",\"group_function\":\"avg\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"SUM: Amount\",\"field_type\":\"currency\",\"group_function\":\"sum\",\"table_key\":\"self\"}],\"order_by\":[{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"Opportunities By Sales Stage\",\"chart_type\":\"none\",\"do_round\":1,\"chart_description\":\"Opportunities By Stage\",\"numerical_chart_column\":\"self:count\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:assigned_user_link\":{\"name\":\"Opportunities  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Opportunities:assigned_user_link\"},\"dependents\":[\"display_cols_row_11\",\"Filter.1_table_filter_row_2\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Prospecting\",\"Qualification\",\"Needs Analysis\",\"Value Proposition\",\"Id. Decision Makers\",\"Perception Analysis\",\"Proposal\\/Price Quote\",\"Negotiation\\/Review\",\"Closed Won\",\"Closed Lost\"],\"column_name\":\"self:sales_stage\",\"id\":\"rowid0\"},\"1\":{\"name\":\"user_name\",\"table_key\":\"Opportunities:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"1\",\"seed_chris_id\",\"seed_jim_id\",\"seed_max_id\",\"seed_sally_id\",\"seed_sarah_id\",\"seed_will_id\"],\"column_name\":\"Opportunities:assigned_user_link:user_name\",\"id\":\"rowid1\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','45e7fe82-c576-af2f-4dd7-510bec030b67','Opportunities By Type','Opportunities','summary','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"},{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\"},{\"name\":\"description\",\"label\":\"Description\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\"}],\"module\":\"Opportunities\",\"group_defs\":[{\"name\":\"opportunity_type\",\"label\":\"Type\",\"table_key\":\"self\",\"type\":\"enum\"},{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\",\"type\":\"enum\"}],\"summary_columns\":[{\"name\":\"opportunity_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Count\",\"field_type\":\"\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"AVG: Amount\",\"field_type\":\"currency\",\"group_function\":\"avg\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"SUM: Amount\",\"field_type\":\"currency\",\"group_function\":\"sum\",\"table_key\":\"self\"}],\"report_name\":\"Opportunities By Type\",\"chart_type\":\"none\",\"do_round\":1,\"chart_description\":\"Opportunities By Type\",\"numerical_chart_column\":\"self:count\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:assigned_user_link\":{\"name\":\"Opportunities  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Opportunities:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_3\",\"display_cols_row_12\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"opportunity_type\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Existing Business\",\"New Business\"]},\"1\":{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Prospecting\",\"Qualification\",\"Needs Analysis\",\"Value Proposition\",\"Id. Decision Makers\",\"Perception Analysis\",\"Proposal\\/Price Quote\",\"Negotiation\\/Review\",\"Closed Won\",\"Closed Lost\"]},\"2\":{\"name\":\"user_name\",\"table_key\":\"Opportunities:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Current User\",\"1\",\"seed_chris_id\",\"seed_jim_id\",\"seed_max_id\",\"seed_sally_id\",\"seed_sarah_id\",\"seed_will_id\"]}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','4d488a85-0010-e614-7563-510bec71180b','Open Calls','Calls','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Subject\",\"table_key\":\"self\"},{\"name\":\"status\",\"label\":\"Status\",\"table_key\":\"self\"},{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Calls:assigned_user_link\"}],\"module\":\"Calls\",\"group_defs\":[],\"summary_columns\":[],\"order_by\":[{\"name\":\"date_entered\",\"vname\":\"Date Created\",\"type\":\"datetime\",\"group\":\"created_by_name\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"Open Calls\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Calls\",\"module\":\"Calls\",\"label\":\"Calls\"},\"Calls:assigned_user_link\":{\"name\":\"Calls  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"calls_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Calls:assigned_user_link\"},\"dependents\":[\"display_cols_row_4\",\"Filter.1_table_filter_row_3\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"status\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Planned\",\"Not Held\"]},\"1\":{\"name\":\"date_start\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"},\"2\":{\"name\":\"user_name\",\"table_key\":\"Calls:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Current User\"]}}},\"chart_type\":\"none\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','4ddede95-3290-7c79-f9e5-510bec78cdf4','Open Meetings','Meetings','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Subject\",\"table_key\":\"self\"},{\"name\":\"description\",\"label\":\"Description\",\"table_key\":\"self\"},{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Meetings:assigned_user_link\"}],\"module\":\"Meetings\",\"group_defs\":[],\"summary_columns\":[],\"order_by\":[{\"name\":\"date_entered\",\"vname\":\"Date Created\",\"type\":\"datetime\",\"group\":\"created_by_name\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"Open Meetings\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Meetings\",\"module\":\"Meetings\",\"label\":\"Meetings\"},\"Meetings:assigned_user_link\":{\"name\":\"Meetings  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"meetings_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Meetings:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_3\",\"display_cols_row_4\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"status\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Planned\",\"Not Held\"]},\"1\":{\"name\":\"date_start\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"},\"2\":{\"name\":\"user_name\",\"table_key\":\"Meetings:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Current User\"]}}},\"chart_type\":\"none\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','4e8c5866-c8ea-30c0-7257-510bec2f8353','Open Tasks','Tasks','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Subject\",\"table_key\":\"self\"},{\"name\":\"priority\",\"label\":\"Priority\",\"table_key\":\"self\"},{\"name\":\"status\",\"label\":\"Status\",\"table_key\":\"self\"},{\"name\":\"date_entered\",\"label\":\"Date Created\",\"table_key\":\"self\"},{\"name\":\"date_due\",\"label\":\"Due Date\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Tasks:assigned_user_link\"}],\"module\":\"Tasks\",\"group_defs\":[],\"summary_columns\":[],\"order_by\":[{\"name\":\"date_due\",\"vname\":\"Due Date\",\"type\":\"datetime\",\"group\":\"date_due\",\"table_key\":\"self\",\"sort_dir\":\"d\"}],\"report_name\":\"Open Tasks\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Tasks\",\"module\":\"Tasks\",\"label\":\"Tasks\"},\"Tasks:assigned_user_link\":{\"name\":\"Tasks  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tasks_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Tasks:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_4\",\"display_cols_row_6\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"status\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Not Started\",\"In Progress\",\"Pending Input\"]},\"1\":{\"name\":\"date_entered\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"},\"2\":{\"name\":\"user_name\",\"table_key\":\"Tasks:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Current User\"]}}},\"chart_type\":\"none\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','4f2c593b-d0fc-7d09-b286-510bec3fdfb5','Opportunities Won By Account','Opportunities','detailed_summary','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"Opportunities:accounts\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"}],\"module\":\"Opportunities\",\"group_defs\":[{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"Opportunities:accounts\",\"type\":\"name\"}],\"summary_columns\":[{\"name\":\"name\",\"label\":\"Account Name\",\"table_key\":\"Opportunities:accounts\"}],\"report_name\":\"Opportunities Won By Account\",\"chart_type\":\"none\",\"do_round\":1,\"chart_description\":\"Opportunities Won By Account\",\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"order_by\":[{\"name\":\"date_closed\",\"vname\":\"Expected Close Date\",\"type\":\"date\",\"audited\":\"1\",\"importable\":\"required\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:accounts\":{\"name\":\"Opportunities  >  Accounts\",\"parent\":\"self\",\"link_def\":{\"name\":\"accounts\",\"relationship_name\":\"accounts_opportunities\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Accounts\",\"table_key\":\"Opportunities:accounts\"},\"dependents\":[\"group_by_row_1\",\"display_summaries_row_group_by_row_1\",\"display_cols_row_3\",\"group_by_row_1\",\"display_summaries_row_group_by_row_1\",\"display_cols_row_3\",\"group_by_row_1\",\"display_summaries_row_group_by_row_1\",\"display_cols_row_3\",\"Filter.1_table_filter_row_4\",\"Filter.1_table_filter_row_2\",\"group_by_row_1\",\"display_summaries_row_group_by_row_1\",\"display_cols_row_3\"],\"module\":\"Accounts\",\"label\":\"Accounts\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"is\",\"runtime\":1,\"input_name0\":[\"Closed Won\"]},\"1\":{\"name\":\"name\",\"table_key\":\"Opportunities:accounts\",\"qualifier_name\":\"not_empty\",\"runtime\":1,\"input_name0\":\"not_empty\",\"input_name1\":\"on\"},\"2\":{\"name\":\"date_closed\",\"table_key\":\"self\",\"qualifier_name\":\"not_empty\",\"runtime\":1,\"input_name0\":\"not_empty\",\"input_name1\":\"on\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','4fda8928-e211-f342-8977-510becb91053','Opportunities Won By User','Opportunities','detailed_summary','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"}],\"module\":\"Opportunities\",\"group_defs\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\",\"type\":\"user_name\"}],\"summary_columns\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\"}],\"order_by\":[{\"name\":\"date_closed\",\"vname\":\"Expected Close Date\",\"type\":\"date\",\"audited\":\"1\",\"importable\":\"required\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"Opportunities Won By User\",\"chart_type\":\"none\",\"do_round\":1,\"chart_description\":\"\",\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:assigned_user_link\":{\"name\":\"Opportunities  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Opportunities:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_2\",\"group_by_row_1\",\"display_summaries_row_group_by_row_1\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"is\",\"input_name0\":[\"Closed Won\"]},\"1\":{\"name\":\"user_name\",\"table_key\":\"Opportunities:assigned_user_link\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Current User\",\"1\",\"seed_chris_id\",\"seed_jim_id\",\"seed_max_id\",\"seed_sally_id\",\"seed_sarah_id\",\"seed_will_id\"]},\"2\":{\"name\":\"date_closed\",\"table_key\":\"self\",\"qualifier_name\":\"not_empty\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','5082e6f8-c22d-7ef4-812b-510bec39922f','All Open Opportunities','Opportunities','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"opportunity_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\"}],\"module\":\"Opportunities\",\"group_defs\":[],\"summary_columns\":[],\"order_by\":[{\"name\":\"date_closed\",\"vname\":\"Expected Close Date\",\"type\":\"date\",\"audited\":\"1\",\"importable\":\"required\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"All Open Opportunities\",\"chart_type\":\"none\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:assigned_user_link\":{\"name\":\"Opportunities  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Opportunities:assigned_user_link\"},\"dependents\":[\"display_cols_row_6\",\"display_cols_row_6\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Prospecting\",\"Qualification\",\"Needs Analysis\",\"Value Proposition\",\"Id. Decision Makers\",\"Perception Analysis\",\"Proposal\\/Price Quote\",\"Negotiation\\/Review\"]},\"1\":{\"name\":\"date_closed\",\"table_key\":\"self\",\"qualifier_name\":\"not_empty\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','51249fed-3ee6-5f7f-7fe1-510bec951d56','All Closed Opportunities','Opportunities','tabular','{\"display_columns\":[{\"name\":\"name\",\"label\":\"Opportunity Name\",\"table_key\":\"self\"},{\"name\":\"opportunity_type\",\"label\":\"Type\",\"table_key\":\"self\"},{\"name\":\"sales_stage\",\"label\":\"Sales Stage\",\"table_key\":\"self\"},{\"name\":\"date_closed\",\"label\":\"Expected Close Date\",\"table_key\":\"self\"},{\"name\":\"amount_usdollar\",\"label\":\"Amount\",\"table_key\":\"self\"},{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"Opportunities:assigned_user_link\"}],\"module\":\"Opportunities\",\"group_defs\":[],\"summary_columns\":[],\"order_by\":[{\"name\":\"date_closed\",\"vname\":\"Expected Close Date\",\"type\":\"date\",\"audited\":\"1\",\"importable\":\"required\",\"table_key\":\"self\",\"sort_dir\":\"a\"}],\"report_name\":\"All Closed Opportunities\",\"do_round\":1,\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Opportunities\",\"module\":\"Opportunities\",\"label\":\"Opportunities\"},\"Opportunities:assigned_user_link\":{\"name\":\"Opportunities  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"opportunities_assigned_user\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Opportunities:assigned_user_link\"},\"dependents\":[\"display_cols_row_8\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"sales_stage\",\"table_key\":\"self\",\"qualifier_name\":\"one_of\",\"runtime\":1,\"input_name0\":[\"Closed Won\",\"Closed Lost\"]},\"1\":{\"name\":\"date_closed\",\"table_key\":\"self\",\"qualifier_name\":\"not_empty\",\"runtime\":1,\"input_name0\":\"undefined\",\"input_name1\":\"on\"}}},\"chart_type\":\"none\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','51d0f9a8-2694-49d5-5ed3-510bec31a638','My Usage Metrics (Today)','TrackerPerfs','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"report_name\":\"My Usage Metrics (Today)\",\"group_defs\":[],\"summary_columns\":[{\"name\":\"server_response_time\",\"label\":\"Total Server Response Time (secs)\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"},{\"name\":\"db_round_trips\",\"label\":\"Total Database Roundtrips\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"},{\"name\":\"files_opened\",\"label\":\"Total Files Accessed\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"}],\"chart_type\":\"none\",\"chart_description\":\"My Usage Metrics (Today)\",\"numerical_chart_column\":\"Trackers>tracker_monitor_id->server_response_time\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"},\"Trackers:tracker_monitor_id\":{\"name\":\"Trackers  >  Monitor Id\",\"label\":\"TrackerPerfs\",\"parent\":\"self\",\"link_def\":{\"name\":\"monitor_id_link\",\"relationship_name\":\"tracker_monitor_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Monitor Id\",\"table_key\":\"Trackers:tracker_monitor_id\"},\"dependents\":[\"display_summaries_row_1\",\"display_summaries_row_2\",\"display_summaries_row_3\"],\"module\":\"TrackerPerfs\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_today\",\"input_name0\":\"tp_today\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','52724e01-1f18-69bf-0fcf-510bec0bf569','My Usage Metrics (Last 7 Days)','TrackerPerfs','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"report_name\":\"My Usage Metrics (Last 7 Days)\",\"group_defs\":[],\"summary_columns\":[{\"name\":\"server_response_time\",\"label\":\"Total Server Response Time (secs)\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"},{\"name\":\"db_round_trips\",\"label\":\"Total Database Roundtrips\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"},{\"name\":\"files_opened\",\"label\":\"Total Files Accessed\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"}],\"chart_type\":\"none\",\"chart_description\":\"My Usage Metrics (Last 7 Days)\",\"numerical_chart_column\":\"Trackers>tracker_monitor_id->server_response_time\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"},\"Trackers:tracker_monitor_id\":{\"name\":\"Trackers  >  Monitor Id\",\"label\":\"TrackerPerfs\",\"parent\":\"self\",\"link_def\":{\"name\":\"monitor_id_link\",\"relationship_name\":\"tracker_monitor_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Monitor Id\",\"table_key\":\"Trackers:tracker_monitor_id\"},\"dependents\":[\"display_summaries_row_1\",\"display_summaries_row_2\",\"display_summaries_row_3\"],\"module\":\"TrackerPerfs\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"input_name0\":\"tp_last_7_days\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','532dd1bd-5e97-c449-6a2d-510bec3e8ace','My Usage Metrics (Last 30 Days)','TrackerPerfs','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"report_name\":\"My Usage Metrics (Last 30 Days)\",\"group_defs\":[],\"summary_columns\":[{\"name\":\"server_response_time\",\"label\":\"Total Server Response Time (secs)\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"},{\"name\":\"db_round_trips\",\"label\":\"Total Database Roundtrips\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"},{\"name\":\"files_opened\",\"label\":\"Total Files Accessed\",\"group_function\":\"sum\",\"table_key\":\"Trackers:tracker_monitor_id\"}],\"chart_type\":\"none\",\"chart_description\":\"My Usage Metrics (Last 30 Days)\",\"numerical_chart_column\":\"Trackers>tracker_monitor_id->server_response_time\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"},\"Trackers:tracker_monitor_id\":{\"name\":\"Trackers  >  Monitor Id\",\"label\":\"TrackerPerfs\",\"parent\":\"self\",\"link_def\":{\"name\":\"monitor_id_link\",\"relationship_name\":\"tracker_monitor_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Monitor Id\",\"table_key\":\"Trackers:tracker_monitor_id\"},\"dependents\":[\"display_summaries_row_1\",\"display_summaries_row_2\",\"display_summaries_row_3\"],\"module\":\"TrackerPerfs\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_30_days\",\"input_name0\":\"tp_last_30_days\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','53cc7caf-4c2c-804e-dd94-510becae425a','My Module Usage (Today)','Trackers','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"report_name\":\"My Module Usage (Today)\",\"group_defs\":[{\"name\":\"module_name\",\"label\":\"Module Name\",\"table_key\":\"self\"}],\"summary_columns\":[{\"name\":\"module_name\",\"label\":\"Trackers > Module Name\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Trackers > Count\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"chart_type\":\"hBarF\",\"chart_description\":\"My Module Usage (Today)\",\"numerical_chart_column\":\"count\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_today\",\"input_name0\":\"tp_today\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','5461466a-32cb-139f-f858-510bec760979','My Module Usage (Last 7 Days)','Trackers','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"report_name\":\"My Module Usage (Last 7 Days)\",\"group_defs\":[{\"name\":\"module_name\",\"label\":\"Module Name\",\"table_key\":\"self\"}],\"summary_columns\":[{\"name\":\"module_name\",\"label\":\"Trackers > Module Name\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Trackers > Count\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"chart_type\":\"hBarF\",\"chart_description\":\"My Module Usage (Last 7 Days)\",\"numerical_chart_column\":\"count\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"input_name0\":\"tp_last_7_days\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','550edc0b-0fd5-1d50-794f-510bec26b1c9','My Module Usage (Last 30 Days)','Trackers','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"report_name\":\"My Module Usage (Last 30 Days)\",\"group_defs\":[{\"name\":\"module_name\",\"label\":\"Module Name\",\"table_key\":\"self\"}],\"summary_columns\":[{\"name\":\"module_name\",\"label\":\"Trackers > Module Name\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Trackers > Count\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"chart_type\":\"hBarF\",\"chart_description\":\"My Module Usage (Last 30 Days)\",\"numerical_chart_column\":\"count\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_30_days\",\"input_name0\":\"tp_last_30_days\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','55a1c788-10d3-6f98-530d-510bec946124','Users Usage Metrics (Last 7 Days)','TrackerPerfs','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"server_response_time\",\"label\":\"Total Server Response Time (secs)\",\"group_function\":\"sum\",\"table_key\":\"self_link_0\"},{\"name\":\"db_round_trips\",\"label\":\"Total Database Roundtrips\",\"group_function\":\"sum\",\"table_key\":\"self_link_0\"},{\"name\":\"files_opened\",\"label\":\"Total Files Accessed\",\"group_function\":\"sum\",\"table_key\":\"self_link_0\"}],\"filters_def\":[{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"input_name0\":\"tp_last_7_days\"}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Tracker\",\"children\":[]},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"monitor_id_link\",\"label\":\"Monitor Id\",\"link_def\":{\"name\":\"monitor_id_link\",\"relationship_name\":\"tracker_monitor_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Monitor Id\",\"table_key\":\"self_link_0\"},\"module\":\"TrackerPerfs\"}},\"module\":\"Trackers\",\"report_name\":\"Users Usage Metrics (Last 7 Days)\",\"chart_type\":\"none\",\"chart_description\":\"Users Usage Metrics (Last 7 Days)\",\"numerical_chart_column\":\"self_link_0:server_response_time:sum\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','564e6c39-89cf-cee3-efd8-510bec62c70f','Users Usage Metrics (Last 30 Days)','TrackerPerfs','summary','{\"report_type\":\"summary\",\"display_columns\":[],\"summary_columns\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\",\"is_group_by\":\"visible\"},{\"name\":\"server_response_time\",\"label\":\"Total Server Response Time (secs)\",\"group_function\":\"sum\",\"table_key\":\"self_link_0\"},{\"name\":\"db_round_trips\",\"label\":\"Total Database Roundtrips\",\"group_function\":\"sum\",\"table_key\":\"self_link_0\"},{\"name\":\"files_opened\",\"label\":\"Total Files Accessed\",\"group_function\":\"sum\",\"table_key\":\"self_link_0\"}],\"filters_def\":[{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_30_days\",\"input_name0\":\"tp_last_30_days\"}],\"filters_combiner\":\"AND\",\"group_defs\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\"}],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Tracker\",\"children\":[]},\"self_link_0\":{\"parent\":\"self\",\"children\":[],\"value\":\"monitor_id_link\",\"label\":\"Monitor Id\",\"link_def\":{\"name\":\"monitor_id_link\",\"relationship_name\":\"tracker_monitor_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Monitor Id\",\"table_key\":\"self_link_0\"},\"module\":\"TrackerPerfs\"}},\"module\":\"Trackers\",\"report_name\":\"Users Usage Metrics (Last 30 Days)\",\"chart_type\":\"none\",\"chart_description\":\"Users Usage Metrics (Last 30 Days)\",\"numerical_chart_column\":\"self_link_0:server_response_time:sum\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','56eb65d5-918f-a232-70ae-510becf1f7d4','Modules Used By My Direct Reports (Last 30 Days)','Trackers','summary','{\"display_columns\":[],\"module\":\"Trackers\",\"group_defs\":[{\"name\":\"module_name\",\"label\":\"Module Name\",\"table_key\":\"self\",\"type\":\"varchar\"}],\"summary_columns\":[{\"name\":\"module_name\",\"label\":\"Module Name\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Count\",\"field_type\":\"\",\"group_function\":\"count\",\"table_key\":\"self\"}],\"report_name\":\"Modules Used By My Direct Reports (Last 30 Days)\",\"chart_type\":\"hBarF\",\"chart_description\":\"\",\"numerical_chart_column\":\"self:count\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:assigned_user_link\":{\"name\":\"Trackers  >  Assigned to User \",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_3\"],\"module\":\"Users\",\"label\":\"Assigned to User\"},\"Trackers:assigned_user_link:reports_to_link\":{\"name\":\"Trackers  >  Assigned to User  >  Reports To\",\"parent\":\"Trackers:assigned_user_link\",\"link_def\":{\"name\":\"reports_to_link\",\"relationship_name\":\"user_direct_reports\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Reports to\",\"table_key\":\"Trackers:assigned_user_link:reports_to_link\"},\"dependents\":[\"Filter.1_table_filter_row_3\"],\"module\":\"Users\",\"label\":\"Reports to\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"module_name\",\"table_key\":\"self\",\"qualifier_name\":\"not_equals_str\",\"input_name0\":\"UserPreferences\",\"input_name1\":\"on\"},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_30_days\",\"input_name0\":\"undefined\",\"input_name1\":\"on\"},\"2\":{\"name\":\"user_name\",\"table_key\":\"Trackers:assigned_user_link:reports_to_link\",\"qualifier_name\":\"one_of\",\"input_name0\":[\"Current User\"]}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'hBarF','pro',NULL),('1','1','57a0f199-138b-0a45-2fd6-510becb4f22a','Slow Queries','TrackerQueries','tabular','{\"report_type\":\"tabular\",\"display_columns\":[{\"name\":\"text\",\"label\":\"SQL STATEMENT\",\"table_key\":\"self\"},{\"name\":\"sec_avg\",\"label\":\"Average Seconds\",\"table_key\":\"self\"},{\"name\":\"sec_total\",\"label\":\"Seconds Total\",\"table_key\":\"self\"},{\"name\":\"run_count\",\"label\":\"Execution Count\",\"table_key\":\"self\"}],\"summary_columns\":[],\"filters_def\":[],\"filters_combiner\":\"AND\",\"group_defs\":[],\"full_table_list\":{\"self\":{\"parent\":\"\",\"value\":\"TrackerQueries\",\"module\":\"TrackerQueries\",\"label\":\"Tracker Queries\",\"children\":[]}},\"module\":\"TrackerQueries\",\"report_name\":\"Slow Queries\",\"chart_type\":\"none\",\"chart_description\":\"\",\"numerical_chart_column\":\"count\",\"assigned_user_id\":\"1\"}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','583f69da-fe77-c2e5-4d40-510bec7e28a9','My Records Modified (Last 7 Days)','Trackers','tabular','{\"display_columns\":[{\"name\":\"item_id\",\"label\":\"Trackers > Item Id\",\"table_key\":\"self\"},{\"name\":\"item_summary\",\"label\":\"Trackers > Item Summary\",\"table_key\":\"self\"},{\"name\":\"module_name\",\"label\":\"Trackers > Module Name\",\"table_key\":\"self\"},{\"name\":\"action\",\"label\":\"Trackers > Action\",\"table_key\":\"self\"},{\"name\":\"date_modified\",\"label\":\"Trackers > Last Modified\",\"table_key\":\"self\"}],\"module\":\"Trackers\",\"report_name\":\"My Records Modified (Last 7 Days)\",\"group_defs\":[],\"summary_columns\":[],\"chart_type\":\"none\",\"numerical_chart_column\":\"\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"action\",\"table_key\":\"self\",\"qualifier_name\":\"equals\",\"input_name0\":\"save\",\"input_name1\":\"on\"},\"2\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"input_name0\":\"tp_last_7_days\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','58f71b39-e254-368b-3771-510becf2d3f6','My Recently Modified Records (Last 30 Days)','Trackers','tabular','{\"display_columns\":[{\"name\":\"item_id\",\"label\":\"Trackers > Item Id\",\"table_key\":\"self\"},{\"name\":\"item_summary\",\"label\":\"Trackers > Item Summary\",\"table_key\":\"self\"},{\"name\":\"module_name\",\"label\":\"Trackers > Module Name\",\"table_key\":\"self\"},{\"name\":\"action\",\"label\":\"Trackers > Action\",\"table_key\":\"self\"},{\"name\":\"date_modified\",\"label\":\"Trackers > Last Modified\",\"table_key\":\"self\"}],\"module\":\"Trackers\",\"report_name\":\"My Recently Modified Records (Last 30 Days)\",\"group_defs\":[],\"summary_columns\":[],\"chart_type\":\"none\",\"numerical_chart_column\":\"\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:tracker_user_id\":{\"name\":\"Trackers  >  Assigned to User\",\"label\":\"Users\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:tracker_user_id\"},\"dependents\":[\"Filter_1_table_filter_row_1\"],\"module\":\"Users\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"user_name\",\"table_key\":\"Trackers:tracker_user_id\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]},\"1\":{\"name\":\"action\",\"table_key\":\"self\",\"qualifier_name\":\"equals\",\"input_name0\":\"save\",\"input_name1\":\"on\"},\"2\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_30_days\",\"input_name0\":\"tp_last_30_days\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','59997472-5ed4-327c-4ef5-510bec6e2f4c','Records Modified By My Direct Reports (Last 30 Days)','Trackers','tabular','{\"display_columns\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\"},{\"name\":\"item_id\",\"label\":\"Item Id\",\"table_key\":\"self\"},{\"name\":\"item_summary\",\"label\":\"Item Summary\",\"table_key\":\"self\"},{\"name\":\"module_name\",\"label\":\"Module Name\",\"table_key\":\"self\"},{\"name\":\"date_modified\",\"label\":\"Last Modified\",\"table_key\":\"self\"}],\"module\":\"Trackers\",\"group_defs\":[],\"summary_columns\":[],\"report_name\":\"Records Modified By My Direct Reports (Last 30 Days)\",\"chart_type\":\"none\",\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"Trackers\",\"module\":\"Trackers\",\"label\":\"Trackers\"},\"Trackers:assigned_user_link\":{\"name\":\"Trackers  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"Trackers:assigned_user_link\"},\"dependents\":[\"Filter.1_table_filter_row_4\",\"Filter.1_table_filter_row_5\",\"Filter.1_table_filter_row_4\",\"Filter.1_table_filter_row_4\"],\"module\":\"Users\",\"label\":\"Assigned to User\",\"optional\":false},\"Trackers:assigned_user_link:reports_to_link\":{\"name\":\"Trackers  >  Assigned to User  >  Reports To\",\"parent\":\"Trackers:assigned_user_link\",\"link_def\":{\"name\":\"reports_to_link\",\"relationship_name\":\"user_direct_reports\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Reports to\",\"table_key\":\"Trackers:assigned_user_link:reports_to_link\"},\"dependents\":[\"Filter.1_table_filter_row_5\",\"Filter.1_table_filter_row_4\",\"Filter.1_table_filter_row_4\"],\"module\":\"Users\",\"label\":\"Reports to\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"action\",\"table_key\":\"self\",\"qualifier_name\":\"equals\",\"input_name0\":\"save\",\"input_name1\":\"on\"},\"1\":{\"name\":\"date_modified\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_30_days\",\"input_name0\":\"tp_last_30_days\",\"input_name1\":\"on\"},\"2\":{\"name\":\"module_name\",\"table_key\":\"self\",\"qualifier_name\":\"not_equals_str\",\"input_name0\":\"UserPreferences\",\"input_name1\":\"on\"},\"3\":{\"name\":\"user_name\",\"table_key\":\"Trackers:assigned_user_link:reports_to_link\",\"qualifier_name\":\"is\",\"input_name0\":[\"Current User\"]}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','5a3ef6c3-00b1-7c7a-2849-510becb2e358','Active User Sessions (Last 7 Days)','TrackerSessions','tabular','{\"display_columns\":[{\"name\":\"user_name\",\"label\":\"User Name\",\"table_key\":\"TrackerSessions:assigned_user_link\"},{\"name\":\"first_name\",\"label\":\"First Name\",\"table_key\":\"TrackerSessions:assigned_user_link\"},{\"name\":\"last_name\",\"label\":\"Last Name\",\"table_key\":\"TrackerSessions:assigned_user_link\"},{\"name\":\"round_trips\",\"label\":\"Session Roundtrips\",\"table_key\":\"self\"},{\"name\":\"seconds\",\"label\":\"Seconds\",\"table_key\":\"self\"}],\"module\":\"TrackerSessions\",\"group_defs\":[],\"summary_columns\":[],\"report_name\":\"Active User Sessions (Last 7 Days)\",\"chart_type\":\"none\",\"numerical_chart_column\":\"\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"tabular\",\"full_table_list\":{\"self\":{\"value\":\"TrackerSessions\",\"module\":\"TrackerSessions\",\"label\":\"TrackerSessions\"},\"TrackerSessions:assigned_user_link\":{\"name\":\"TrackerSessions  >  Assigned to User\",\"parent\":\"self\",\"link_def\":{\"name\":\"assigned_user_link\",\"relationship_name\":\"tracker_user_id\",\"bean_is_lhs\":false,\"link_type\":\"one\",\"label\":\"Assigned to User\",\"table_key\":\"TrackerSessions:assigned_user_link\"},\"dependents\":[\"display_cols_row_1\",\"display_cols_row_2\",\"display_cols_row_3\",\"display_cols_row_1\",\"display_cols_row_2\",\"display_cols_row_3\"],\"module\":\"Users\",\"label\":\"Assigned to User\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"date_end\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"input_name0\":\"tp_last_7_days\",\"input_name1\":\"on\"},\"1\":{\"name\":\"active\",\"table_key\":\"self\",\"qualifier_name\":\"equals\",\"input_name0\":[\"1\"]}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL),('1','1','5adcd57f-01a2-3fc2-6c3d-510bec399563','User Sessions Summary (Last 7 Days)','TrackerSessions','summary','{\"display_columns\":[],\"module\":\"TrackerSessions\",\"group_defs\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\",\"type\":\"varchar\"}],\"summary_columns\":[{\"name\":\"user_id\",\"label\":\"User Id\",\"table_key\":\"self\"},{\"name\":\"count\",\"label\":\"Count\",\"field_type\":\"\",\"group_function\":\"count\",\"table_key\":\"self\"},{\"name\":\"round_trips\",\"label\":\"SUM: Session Roundtrips\",\"field_type\":\"int\",\"group_function\":\"sum\",\"table_key\":\"self\"},{\"name\":\"seconds\",\"label\":\"SUM: Seconds\",\"field_type\":\"int\",\"group_function\":\"sum\",\"table_key\":\"self\"}],\"report_name\":\"User Sessions Summary (Last 7 Days)\",\"chart_type\":\"none\",\"chart_description\":\"\",\"numerical_chart_column\":\"self:round_trips:sum\",\"numerical_chart_column_type\":\"\",\"assigned_user_id\":\"1\",\"report_type\":\"summary\",\"full_table_list\":{\"self\":{\"value\":\"TrackerSessions\",\"module\":\"TrackerSessions\",\"label\":\"TrackerSessions\"}},\"filters_def\":{\"Filter_1\":{\"operator\":\"AND\",\"0\":{\"name\":\"date_end\",\"table_key\":\"self\",\"qualifier_name\":\"tp_last_7_days\",\"input_name0\":\"tp_last_7_days\",\"input_name1\":\"on\"}}}}',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','1',1,'none','pro',NULL);
/*!40000 ALTER TABLE `saved_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saved_search`
--

DROP TABLE IF EXISTS `saved_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saved_search` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `search_module` varchar(150) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `contents` text,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `idx_saved_search_tmst_id` (`team_set_id`),
  KEY `idx_desc` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_search`
--

LOCK TABLES `saved_search` WRITE;
/*!40000 ALTER TABLE `saved_search` DISABLE KEYS */;
/*!40000 ALTER TABLE `saved_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedulers`
--

DROP TABLE IF EXISTS `schedulers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedulers` (
  `id` varchar(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `date_time_start` datetime DEFAULT NULL,
  `date_time_end` datetime DEFAULT NULL,
  `job_interval` varchar(100) DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `last_run` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `catch_up` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_schedule` (`date_time_start`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulers`
--

LOCK TABLES `schedulers` WRITE;
/*!40000 ALTER TABLE `schedulers` DISABLE KEYS */;
INSERT INTO `schedulers` VALUES ('5bca0346-ab54-06f1-773b-510bec86c71b',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Process Workflow Tasks','function::processWorkflow','2005-01-01 07:45:01','2020-12-31 23:59:59','*::*::*::*::*',NULL,NULL,NULL,'Active',0),('5c5140f7-5629-e027-99b9-510bec059350',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Run Report Generation Scheduled Tasks','function::processQueue','2005-01-01 06:15:01','2020-12-31 23:59:59','0::6::*::*::*',NULL,NULL,NULL,'Inactive',1),('5cdc1ed4-c03a-44fa-8c16-510becc6884e',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Prune Tracker Tables','function::trimTracker','2005-01-01 11:15:01','2020-12-31 23:59:59','0::2::1::*::*',NULL,NULL,NULL,'Active',1),('5d6868ed-858c-971e-aa94-510bec415c30',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Check Inbound Mailboxes','function::pollMonitoredInboxes','2005-01-01 09:00:01','2020-12-31 23:59:59','*::*::*::*::*',NULL,NULL,NULL,'Active',0),('5e06e053-45e8-a58d-35cb-510beca3c9b7',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Run Nightly Process Bounced Campaign Emails','function::pollMonitoredInboxesForBouncedCampaignEmails','2005-01-01 12:30:01','2020-12-31 23:59:59','0::2-6::*::*::*',NULL,NULL,NULL,'Active',1),('5eb6c283-2590-7860-c973-510bec192e5a',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Run Nightly Mass Email Campaigns','function::runMassEmailCampaign','2005-01-01 11:00:01','2020-12-31 23:59:59','0::2-6::*::*::*',NULL,NULL,NULL,'Active',1),('5f3869a5-cf1b-7025-4a35-510bec2df161',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Prune Database on 1st of Month','function::pruneDatabase','2005-01-01 19:30:01','2020-12-31 23:59:59','0::4::1::*::*',NULL,NULL,NULL,'Inactive',0),('5fbe5283-8ae7-5f82-336a-510bece8b6ed',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Update tracker_sessions Table','function::updateTrackerSessions','2005-01-01 12:15:01','2020-12-31 23:59:59','*::*::*::*::*',NULL,NULL,NULL,'Active',1),('6049eaa4-710a-7383-811f-510bec40b912',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Run Email Reminder Notifications','function::sendEmailReminders','2008-01-01 07:30:01','2020-12-31 23:59:59','*::*::*::*::*',NULL,NULL,NULL,'Active',0),('60ef3f44-ce9c-21a1-4952-510bec9d56d7',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Clean Jobs Queue','function::cleanJobQueue','2012-01-01 13:00:01','2030-12-31 23:59:59','0::5::*::*::*',NULL,NULL,NULL,'Active',0);
/*!40000 ALTER TABLE `schedulers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedulers_times`
--

DROP TABLE IF EXISTS `schedulers_times`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedulers_times` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `scheduler_id` varchar(36) NOT NULL,
  `execute_time` datetime DEFAULT NULL,
  `status` varchar(25) DEFAULT 'ready',
  PRIMARY KEY (`id`),
  KEY `idx_scheduler_id` (`scheduler_id`,`execute_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulers_times`
--

LOCK TABLES `schedulers_times` WRITE;
/*!40000 ALTER TABLE `schedulers_times` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedulers_times` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_active`
--

DROP TABLE IF EXISTS `session_active`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_active` (
  `id` char(36) NOT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `last_request_time` datetime DEFAULT NULL,
  `session_type` varchar(100) DEFAULT NULL,
  `is_violation` tinyint(1) DEFAULT '0',
  `num_active_sessions` int(11) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_active`
--

LOCK TABLES `session_active` WRITE;
/*!40000 ALTER TABLE `session_active` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_active` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_history`
--

DROP TABLE IF EXISTS `session_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_history` (
  `id` char(36) NOT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `last_request_time` datetime DEFAULT NULL,
  `session_type` varchar(100) DEFAULT NULL,
  `is_violation` tinyint(1) DEFAULT '0',
  `num_active_sessions` int(11) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_history`
--

LOCK TABLES `session_history` WRITE;
/*!40000 ALTER TABLE `session_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shippers`
--

DROP TABLE IF EXISTS `shippers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shippers` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) NOT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `list_order` int(4) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_shippers` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shippers`
--

LOCK TABLES `shippers` WRITE;
/*!40000 ALTER TABLE `shippers` DISABLE KEYS */;
/*!40000 ALTER TABLE `shippers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sugarfavorites`
--

DROP TABLE IF EXISTS `sugarfavorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sugarfavorites` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL,
  `record_id` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_favs_date_entered` (`date_entered`,`deleted`),
  KEY `idx_favs_user_module` (`modified_user_id`,`module`,`deleted`),
  KEY `idx_favs_module_record_deleted` (`module`,`record_id`,`deleted`),
  KEY `idx_favs_id_record_id` (`record_id`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sugarfavorites`
--

LOCK TABLES `sugarfavorites` WRITE;
/*!40000 ALTER TABLE `sugarfavorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `sugarfavorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sugarfeed`
--

DROP TABLE IF EXISTS `sugarfeed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sugarfeed` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `related_module` varchar(100) DEFAULT NULL,
  `related_id` char(36) DEFAULT NULL,
  `link_url` varchar(255) DEFAULT NULL,
  `link_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_sugarfeed_tmst_id` (`team_set_id`),
  KEY `sgrfeed_date` (`date_entered`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sugarfeed`
--

LOCK TABLES `sugarfeed` WRITE;
/*!40000 ALTER TABLE `sugarfeed` DISABLE KEYS */;
/*!40000 ALTER TABLE `sugarfeed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `systems`
--

DROP TABLE IF EXISTS `systems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `systems` (
  `id` char(36) NOT NULL,
  `system_id` int(11) NOT NULL AUTO_INCREMENT,
  `system_key` varchar(36) DEFAULT NULL,
  `user_id` char(36) DEFAULT NULL,
  `last_connect_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `num_syncs` int(11) DEFAULT '0',
  `system_name` varchar(100) DEFAULT NULL,
  `install_method` varchar(100) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `systems`
--

LOCK TABLES `systems` WRITE;
/*!40000 ALTER TABLE `systems` DISABLE KEYS */;
INSERT INTO `systems` VALUES ('18cf0fef-4592-6bb4-7700-510bece1c1fc',1,'e9c3762944048a96df0d026269c82918','1','2013-02-01 16:23:38','Active',0,'','web','2013-02-01 16:23:38','2013-02-01 16:23:38',0);
/*!40000 ALTER TABLE `systems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` char(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Not Started',
  `date_due_flag` tinyint(1) DEFAULT '0',
  `date_due` datetime DEFAULT NULL,
  `date_start_flag` tinyint(1) DEFAULT '0',
  `date_start` datetime DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `contact_id` char(36) DEFAULT NULL,
  `priority` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_tasks_tmst_id` (`team_set_id`),
  KEY `idx_tsk_name` (`name`),
  KEY `idx_task_con_del` (`contact_id`,`deleted`),
  KEY `idx_task_par_del` (`parent_id`,`parent_type`,`deleted`),
  KEY `idx_task_assigned` (`assigned_user_id`),
  KEY `idx_task_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxrates`
--

DROP TABLE IF EXISTS `taxrates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taxrates` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` decimal(7,5) DEFAULT NULL,
  `list_order` int(4) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_taxrates` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxrates`
--

LOCK TABLES `taxrates` WRITE;
/*!40000 ALTER TABLE `taxrates` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxrates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_memberships`
--

DROP TABLE IF EXISTS `team_memberships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_memberships` (
  `id` char(36) NOT NULL,
  `team_id` char(36) DEFAULT NULL,
  `user_id` char(36) DEFAULT NULL,
  `explicit_assign` tinyint(1) DEFAULT '0',
  `implicit_assign` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_team_membership` (`user_id`,`team_id`),
  KEY `idx_teammemb_team_user` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_memberships`
--

LOCK TABLES `team_memberships` WRITE;
/*!40000 ALTER TABLE `team_memberships` DISABLE KEYS */;
INSERT INTO `team_memberships` VALUES ('2a4f0080-579e-5a77-67e1-510bec2c0958','1','1',1,0,'2013-02-01 16:23:38',0),('2d23d613-8a6c-6fd4-320d-510bec6452a4','2c742790-0147-af73-cdee-510becee5efc','1',1,0,'2013-02-01 16:23:38',0);
/*!40000 ALTER TABLE `team_memberships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_notices`
--

DROP TABLE IF EXISTS `team_notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_notices` (
  `team_id` char(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `status` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_team_notices_tmst_id` (`team_set_id`),
  KEY `idx_team_notice` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_notices`
--

LOCK TABLES `team_notices` WRITE;
/*!40000 ALTER TABLE `team_notices` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_sets`
--

DROP TABLE IF EXISTS `team_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_sets` (
  `id` char(36) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `team_md5` varchar(32) DEFAULT NULL,
  `team_count` int(11) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `created_by` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_team_sets_md5` (`team_md5`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_sets`
--

LOCK TABLES `team_sets` WRITE;
/*!40000 ALTER TABLE `team_sets` DISABLE KEYS */;
INSERT INTO `team_sets` VALUES ('1','c4ca4238a0b923820dcc509a6f75849b','c4ca4238a0b923820dcc509a6f75849b',1,'2013-02-01 16:23:38',0,''),('275110d4-ec1f-1eb1-5ac4-510bec39b710','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e',0,'2013-02-01 16:23:38',0,''),('2c742790-0147-af73-cdee-510becee5efc','4082d5525a9f304835892e93eb9bc460','4082d5525a9f304835892e93eb9bc460',1,'2013-02-01 16:23:38',0,'1');
/*!40000 ALTER TABLE `team_sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_sets_modules`
--

DROP TABLE IF EXISTS `team_sets_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_sets_modules` (
  `id` char(36) NOT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `module_table_name` varchar(128) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_team_sets_modules` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_sets_modules`
--

LOCK TABLES `team_sets_modules` WRITE;
/*!40000 ALTER TABLE `team_sets_modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_sets_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_sets_teams`
--

DROP TABLE IF EXISTS `team_sets_teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_sets_teams` (
  `id` char(36) NOT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `team_id` char(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_ud_set_id` (`team_set_id`,`team_id`),
  KEY `idx_ud_team_id` (`team_id`),
  KEY `idx_ud_team_set_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_sets_teams`
--

LOCK TABLES `team_sets_teams` WRITE;
/*!40000 ALTER TABLE `team_sets_teams` DISABLE KEYS */;
INSERT INTO `team_sets_teams` VALUES ('3043ec2d-dc0f-1f55-8aa2-510bece206e7','1','1','2013-02-01 16:23:38',0),('8354fccd-82f1-3d75-f09e-510bec044f96','2c742790-0147-af73-cdee-510becee5efc','2c742790-0147-af73-cdee-510becee5efc','2013-02-01 16:23:38',0);
/*!40000 ALTER TABLE `team_sets_teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` char(36) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `name_2` varchar(128) DEFAULT NULL,
  `associated_user_id` char(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `private` tinyint(1) DEFAULT '0',
  `description` text,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_team_del` (`name`),
  KEY `idx_team_del_name` (`deleted`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES ('1','Global','',NULL,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','',0,'Globally Visible',0),('2c742790-0147-af73-cdee-510becee5efc','Administrator',NULL,'1','2013-02-01 16:23:38','2013-02-01 16:24:07','1','',1,'Private team for admin',0);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timeperiods`
--

DROP TABLE IF EXISTS `timeperiods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timeperiods` (
  `id` varchar(36) NOT NULL,
  `name` varchar(36) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `is_fiscal_year` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timeperiods`
--

LOCK TABLES `timeperiods` WRITE;
/*!40000 ALTER TABLE `timeperiods` DISABLE KEYS */;
/*!40000 ALTER TABLE `timeperiods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracker`
--

DROP TABLE IF EXISTS `tracker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monitor_id` char(36) NOT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `module_name` varchar(255) DEFAULT NULL,
  `item_id` varchar(36) DEFAULT NULL,
  `item_summary` varchar(255) DEFAULT NULL,
  `team_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `session_id` varchar(36) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_tracker_iid` (`item_id`),
  KEY `idx_tracker_userid_vis_id` (`user_id`,`visible`,`id`),
  KEY `idx_tracker_userid_itemid_vis` (`user_id`,`item_id`,`visible`),
  KEY `idx_tracker_monitor_id` (`monitor_id`),
  KEY `idx_tracker_date_modified` (`date_modified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracker`
--

LOCK TABLES `tracker` WRITE;
/*!40000 ALTER TABLE `tracker` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracker_perf`
--

DROP TABLE IF EXISTS `tracker_perf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracker_perf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monitor_id` char(36) NOT NULL,
  `server_response_time` double DEFAULT NULL,
  `db_round_trips` int(6) DEFAULT NULL,
  `files_opened` int(6) DEFAULT NULL,
  `memory_usage` int(12) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_tracker_perf_mon_id` (`monitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracker_perf`
--

LOCK TABLES `tracker_perf` WRITE;
/*!40000 ALTER TABLE `tracker_perf` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracker_perf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracker_queries`
--

DROP TABLE IF EXISTS `tracker_queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracker_queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_id` char(36) NOT NULL,
  `text` text,
  `query_hash` varchar(36) DEFAULT NULL,
  `sec_total` double DEFAULT NULL,
  `sec_avg` double DEFAULT NULL,
  `run_count` int(6) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_tracker_queries_query_hash` (`query_hash`),
  KEY `idx_tracker_queries_query_id` (`query_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracker_queries`
--

LOCK TABLES `tracker_queries` WRITE;
/*!40000 ALTER TABLE `tracker_queries` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracker_queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracker_sessions`
--

DROP TABLE IF EXISTS `tracker_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracker_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(36) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `seconds` int(9) DEFAULT '0',
  `client_ip` varchar(45) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `round_trips` int(5) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_tracker_sessions_s_id` (`session_id`),
  KEY `idx_tracker_sessions_uas_id` (`user_id`,`active`,`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracker_sessions`
--

LOCK TABLES `tracker_sessions` WRITE;
/*!40000 ALTER TABLE `tracker_sessions` DISABLE KEYS */;
INSERT INTO `tracker_sessions` VALUES (1,'gtk51f38gdis1r005qhtt642q7','2013-02-01 16:23:57','2013-02-01 16:24:27',30,'::1','1',1,8,0);
/*!40000 ALTER TABLE `tracker_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracker_tracker_queries`
--

DROP TABLE IF EXISTS `tracker_tracker_queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracker_tracker_queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monitor_id` varchar(36) DEFAULT NULL,
  `query_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_tracker_tq_monitor` (`monitor_id`),
  KEY `idx_tracker_tq_query` (`query_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracker_tracker_queries`
--

LOCK TABLES `tracker_tracker_queries` WRITE;
/*!40000 ALTER TABLE `tracker_tracker_queries` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracker_tracker_queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upgrade_history`
--

DROP TABLE IF EXISTS `upgrade_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upgrade_history` (
  `id` char(36) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `md5sum` varchar(32) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `version` varchar(64) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `id_name` varchar(255) DEFAULT NULL,
  `manifest` longtext,
  `date_entered` datetime DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `upgrade_history_md5_uk` (`md5sum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upgrade_history`
--

LOCK TABLES `upgrade_history` WRITE;
/*!40000 ALTER TABLE `upgrade_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `upgrade_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_preferences`
--

DROP TABLE IF EXISTS `user_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_preferences` (
  `id` char(36) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `contents` longtext,
  PRIMARY KEY (`id`),
  KEY `idx_userprefnamecat` (`assigned_user_id`,`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_preferences`
--

LOCK TABLES `user_preferences` WRITE;
/*!40000 ALTER TABLE `user_preferences` DISABLE KEYS */;
INSERT INTO `user_preferences` VALUES ('3281547e-ca18-4a16-cb12-510becf4fb81','global',0,'2013-02-01 16:23:38','2013-02-01 16:24:24','1','YToyODp7czoyMDoiY2FsZW5kYXJfcHVibGlzaF9rZXkiO3M6MzY6IjMyYzY2ZDE5LWUyYzMtZWU5Mi0xNmJjLTUxMGJlY2M1MjdkNiI7czoxMDoidXNlcl90aGVtZSI7czo1OiJTdWdhciI7czoxMzoicmVtaW5kZXJfdGltZSI7aToxODAwO3M6MTI6Im1haWxtZXJnZV9vbiI7czoyOiJvbiI7czo4OiJ0aW1lem9uZSI7czoxNToiQW1lcmljYS9DaGljYWdvIjtzOjE2OiJzd2FwX2xhc3Rfdmlld2VkIjtzOjA6IiI7czoxNDoic3dhcF9zaG9ydGN1dHMiO3M6MDoiIjtzOjE5OiJuYXZpZ2F0aW9uX3BhcmFkaWdtIjtzOjI6ImdtIjtzOjEzOiJzdWJwYW5lbF90YWJzIjtzOjA6IiI7czoxNDoibW9kdWxlX2Zhdmljb24iO3M6MDoiIjtzOjk6ImhpZGVfdGFicyI7YTowOnt9czoxMToicmVtb3ZlX3RhYnMiO2E6MDp7fXM6Nzoibm9fb3BwcyI7czozOiJvZmYiO3M6MTk6ImVtYWlsX3JlbWluZGVyX3RpbWUiO2k6LTE7czoyOiJ1dCI7czoxOiIxIjtzOjg6ImN1cnJlbmN5IjtzOjM6Ii05OSI7czozNToiZGVmYXVsdF9jdXJyZW5jeV9zaWduaWZpY2FudF9kaWdpdHMiO3M6MToiMiI7czoxMToibnVtX2dycF9zZXAiO3M6MToiLCI7czo3OiJkZWNfc2VwIjtzOjE6Ii4iO3M6NToiZGF0ZWYiO3M6NToibS9kL1kiO3M6NToidGltZWYiO3M6NDoiaDppYSI7czoyNjoiZGVmYXVsdF9sb2NhbGVfbmFtZV9mb3JtYXQiO3M6NToicyBmIGwiO3M6MTQ6InVzZV9yZWFsX25hbWVzIjtzOjI6Im9uIjtzOjE3OiJtYWlsX3NtdHBhdXRoX3JlcSI7czowOiIiO3M6MTI6Im1haWxfc210cHNzbCI7aTowO3M6MTc6ImVtYWlsX3Nob3dfY291bnRzIjtpOjA7czoxOToidGhlbWVfY3VycmVudF9ncm91cCI7czozOiJBbGwiO3M6MTE6InZpZXdlZF90b3VyIjtzOjQ6InRydWUiO30='),('773475ed-a1c5-af70-b92d-510bec169631','global',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','7630be13-8cf2-0397-bbce-510bec040c07','YToxOntzOjIwOiJjYWxlbmRhcl9wdWJsaXNoX2tleSI7czozNjoiNzcxNGY5ZDQtZWUxZC04M2I0LTJlYjEtNTEwYmVjOGQzZmUyIjt9'),('87a137eb-7cac-b52b-6c0b-510bec44438d','ETag',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEyOiJtYWluTWVudUVUYWciO2k6MTt9'),('c3382103-e3f4-59fc-0e9a-510becc3d1a7','Home',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToyOntzOjg6ImRhc2hsZXRzIjthOjI1OntzOjM2OiJmMWYwNjM1Yy05YzYwLTQ4NjYtYjA0NS01MTBiZWM0ZjBkNWUiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MTY6IlN1Z2FyRmVlZERhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjk6IlN1Z2FyRmVlZCI7czoxMToiZm9yY2VDb2x1bW4iO2k6MTtzOjEyOiJmaWxlTG9jYXRpb24iO3M6NjQ6Im1vZHVsZXMvU3VnYXJGZWVkL0Rhc2hsZXRzL1N1Z2FyRmVlZERhc2hsZXQvU3VnYXJGZWVkRGFzaGxldC5waHAiO31zOjM2OiJmMWYzYjE5Ni0xNjFlLTM1NTQtMGNiNy01MTBiZWMzODRiYWMiO2E6NTp7czo5OiJjbGFzc05hbWUiO3M6MTM6ImlGcmFtZURhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjQ6IkhvbWUiO3M6MTE6ImZvcmNlQ29sdW1uIjtpOjE7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjUzOiJtb2R1bGVzL0hvbWUvRGFzaGxldHMvaUZyYW1lRGFzaGxldC9pRnJhbWVEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjM6e3M6MTA6InRpdGxlTGFiZWwiO3M6MjI6IkxCTF9EQVNITEVUX1NVR0FSX05FV1MiO3M6MzoidXJsIjtzOjQwOiJodHRwOi8vd3d3LnN1Z2FyY3JtLmNvbS9jcm0vcHJvZHVjdC9uZXdzIjtzOjY6ImhlaWdodCI7aTozMTU7fX1zOjM2OiIxMTJlMDgzNy1lOWY1LTNhYjAtYmIzMC01MTBiZWMwNGUzY2YiO2E6NTp7czo5OiJjbGFzc05hbWUiO3M6MTQ6Ik15Q2FsbHNEYXNobGV0IjtzOjY6Im1vZHVsZSI7czo1OiJDYWxscyI7czoxMToiZm9yY2VDb2x1bW4iO2k6MDtzOjEyOiJmaWxlTG9jYXRpb24iO3M6NTY6Im1vZHVsZXMvQ2FsbHMvRGFzaGxldHMvTXlDYWxsc0Rhc2hsZXQvTXlDYWxsc0Rhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiIyODlmMGQ5MS0zYjRlLTliNWItNzQ1MC01MTBiZWNlY2QxYjIiO2E6NTp7czo5OiJjbGFzc05hbWUiO3M6MTc6Ik15TWVldGluZ3NEYXNobGV0IjtzOjY6Im1vZHVsZSI7czo4OiJNZWV0aW5ncyI7czoxMToiZm9yY2VDb2x1bW4iO2k6MDtzOjEyOiJmaWxlTG9jYXRpb24iO3M6NjU6Im1vZHVsZXMvTWVldGluZ3MvRGFzaGxldHMvTXlNZWV0aW5nc0Rhc2hsZXQvTXlNZWV0aW5nc0Rhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiIzZTg0MGQ4OS0wNTVjLTMxNzgtZDY5Ni01MTBiZWM1ZDFmNjUiO2E6NTp7czo5OiJjbGFzc05hbWUiO3M6MjI6Ik15T3Bwb3J0dW5pdGllc0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjEzOiJPcHBvcnR1bml0aWVzIjtzOjExOiJmb3JjZUNvbHVtbiI7aTowO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo4MDoibW9kdWxlcy9PcHBvcnR1bml0aWVzL0Rhc2hsZXRzL015T3Bwb3J0dW5pdGllc0Rhc2hsZXQvTXlPcHBvcnR1bml0aWVzRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6IjU1NDUwZTI3LTQwZjAtNmY5Ny1mMDhhLTUxMGJlY2ZjODg0NSI7YTo1OntzOjk6ImNsYXNzTmFtZSI7czoxNzoiTXlBY2NvdW50c0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjg6IkFjY291bnRzIjtzOjExOiJmb3JjZUNvbHVtbiI7aTowO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo2NToibW9kdWxlcy9BY2NvdW50cy9EYXNobGV0cy9NeUFjY291bnRzRGFzaGxldC9NeUFjY291bnRzRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6IjcwYzQwNzMzLTJjZTctMTI3OS1kMjNhLTUxMGJlYzFkMTk1NCI7YTo1OntzOjk6ImNsYXNzTmFtZSI7czoxNDoiTXlMZWFkc0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjU6IkxlYWRzIjtzOjExOiJmb3JjZUNvbHVtbiI7aTowO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo1NjoibW9kdWxlcy9MZWFkcy9EYXNobGV0cy9NeUxlYWRzRGFzaGxldC9NeUxlYWRzRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6IjcxYjMwYzc1LWEzOGUtNGRkNC1lNzk1LTUxMGJlYzMzZmZhZCI7YTo0OntzOjk6ImNsYXNzTmFtZSI7czoyOToiTXlQaXBlbGluZUJ5U2FsZXNTdGFnZURhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjEzOiJPcHBvcnR1bml0aWVzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6ODc6Im1vZHVsZXMvQ2hhcnRzL0Rhc2hsZXRzL015UGlwZWxpbmVCeVNhbGVzU3RhZ2VEYXNobGV0L015UGlwZWxpbmVCeVNhbGVzU3RhZ2VEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjQ6e3M6MTc6Im15cGJzc19kYXRlX3N0YXJ0IjtOO3M6MTU6Im15cGJzc19kYXRlX2VuZCI7TjtzOjE5OiJteXBic3Nfc2FsZXNfc3RhZ2VzIjtOO3M6MTc6Im15cGJzc19jaGFydF90eXBlIjtOO319czozNjoiNzIzNDA0OTMtNDg4ZS00NWNlLTU0Y2MtNTEwYmVjNmQ0MmM0IjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjI3OiJNeU9wcG9ydHVuaXRpZXNHYXVnZURhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjEzOiJPcHBvcnR1bml0aWVzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6ODM6Im1vZHVsZXMvQ2hhcnRzL0Rhc2hsZXRzL015T3Bwb3J0dW5pdGllc0dhdWdlRGFzaGxldC9NeU9wcG9ydHVuaXRpZXNHYXVnZURhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiI3MjkyMDVjOS0yNDcxLWZhOWUtZTJmZS01MTBiZWNjYjM1OTEiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MjI6Ik15T3Bwb3J0dW5pdGllc0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjEzOiJPcHBvcnR1bml0aWVzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6ODA6Im1vZHVsZXMvT3Bwb3J0dW5pdGllcy9EYXNobGV0cy9NeU9wcG9ydHVuaXRpZXNEYXNobGV0L015T3Bwb3J0dW5pdGllc0Rhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiI3MmVlMDc0YS01OWQyLTI4ZmMtYzExYS01MTBiZWMxY2YxYzEiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6Mjg6Ik15Q2xvc2VkT3Bwb3J0dW5pdGllc0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjEzOiJPcHBvcnR1bml0aWVzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6OTI6Im1vZHVsZXMvT3Bwb3J0dW5pdGllcy9EYXNobGV0cy9NeUNsb3NlZE9wcG9ydHVuaXRpZXNEYXNobGV0L015Q2xvc2VkT3Bwb3J0dW5pdGllc0Rhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiI4MWZlMDEwZi1mN2YzLWRmZjYtYmVmNy01MTBiZWM0OWM2NDkiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MTM6IkNoYXJ0c0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjEzOiJPcHBvcnR1bml0aWVzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6NTM6Im1vZHVsZXMvSG9tZS9EYXNobGV0cy9DaGFydHNEYXNobGV0L0NoYXJ0c0Rhc2hsZXQucGhwIjtzOjg6InJlcG9ydElkIjtzOjM2OiIzYmI2NGVmNi0yYmYyLTQyZWYtMmI3ZC01MTBiZWMxZjI5ODgiO31zOjM2OiI4OWUzMGZiMi02MmYyLTJjNWEtZDMyOC01MTBiZWM5YWFlZjgiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MjU6Ik15Rm9yZWNhc3RpbmdDaGFydERhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjk6IkZvcmVjYXN0cyI7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjc5OiJtb2R1bGVzL0NoYXJ0cy9EYXNobGV0cy9NeUZvcmVjYXN0aW5nQ2hhcnREYXNobGV0L015Rm9yZWNhc3RpbmdDaGFydERhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiI4ZDRmMGRhMi0wYjViLTQyNjctNmJiYS01MTBiZWNkOTQyMGYiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MTM6IkNoYXJ0c0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjU6IkxlYWRzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6NTM6Im1vZHVsZXMvSG9tZS9EYXNobGV0cy9DaGFydHNEYXNobGV0L0NoYXJ0c0Rhc2hsZXQucGhwIjtzOjg6InJlcG9ydElkIjtzOjM2OiI0MzNkODczNi0xMmRjLTVjMTktNDQ5Yy01MTBiZWM0ZmU3ZjQiO31zOjM2OiJhMDZmMGIwNi1hNzcwLTVkZGMtNzdlZS01MTBiZWMzNWI0MTAiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkNhbXBhaWduUk9JQ2hhcnREYXNobGV0IjtzOjY6Im1vZHVsZSI7czo5OiJDYW1wYWlnbnMiO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo3NToibW9kdWxlcy9DaGFydHMvRGFzaGxldHMvQ2FtcGFpZ25ST0lDaGFydERhc2hsZXQvQ2FtcGFpZ25ST0lDaGFydERhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiJhMTY4MGY0NS0wNGQ2LWY2NWItOWRiZi01MTBiZWMwZTZkNmIiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MTQ6Ik15TGVhZHNEYXNobGV0IjtzOjY6Im1vZHVsZSI7czo1OiJMZWFkcyI7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjU2OiJtb2R1bGVzL0xlYWRzL0Rhc2hsZXRzL015TGVhZHNEYXNobGV0L015TGVhZHNEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319czozNjoiYTFkZDA4N2UtN2MyOC05ODk1LTk4NWUtNTEwYmVjOGZmMmNjIjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjE5OiJUb3BDYW1wYWlnbnNEYXNobGV0IjtzOjY6Im1vZHVsZSI7czo5OiJDYW1wYWlnbnMiO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo3MDoibW9kdWxlcy9DYW1wYWlnbnMvRGFzaGxldHMvVG9wQ2FtcGFpZ25zRGFzaGxldC9Ub3BDYW1wYWlnbnNEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319czozNjoiYjNkMjAyNzEtYzEyMi1mN2E1LWU2NDItNTEwYmVjZGQ1NTIxIjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjEzOiJDaGFydHNEYXNobGV0IjtzOjY6Im1vZHVsZSI7czo1OiJDYXNlcyI7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjUzOiJtb2R1bGVzL0hvbWUvRGFzaGxldHMvQ2hhcnRzRGFzaGxldC9DaGFydHNEYXNobGV0LnBocCI7czo4OiJyZXBvcnRJZCI7czozNjoiM2M1ZjgxYTctMTljMy1kODNmLTc4ZTQtNTEwYmVjMjJlYTllIjt9czozNjoiYjU4OTA1ZTItMGJjYS01MjFlLTgwYzAtNTEwYmVjNmViOTgyIjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjEzOiJDaGFydHNEYXNobGV0IjtzOjY6Im1vZHVsZSI7czo1OiJDYXNlcyI7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjUzOiJtb2R1bGVzL0hvbWUvRGFzaGxldHMvQ2hhcnRzRGFzaGxldC9DaGFydHNEYXNobGV0LnBocCI7czo4OiJyZXBvcnRJZCI7czozNjoiM2NmMTAwOTMtNmQ2MS0wNTI5LTJkNDItNTEwYmVjYTczMDhmIjt9czozNjoiYjVmZDA0YjEtYTgwOS04NzJkLWZhZWUtNTEwYmVjNDQ1ODgxIjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjE0OiJNeUNhc2VzRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6NToiQ2FzZXMiO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo1NjoibW9kdWxlcy9DYXNlcy9EYXNobGV0cy9NeUNhc2VzRGFzaGxldC9NeUNhc2VzRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6ImNiODUwODhiLWVhZjktMTI1MS02NGU0LTUxMGJlYzIyYmEzMyI7YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxMzoiTXlCdWdzRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6NDoiQnVncyI7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjUzOiJtb2R1bGVzL0J1Z3MvRGFzaGxldHMvTXlCdWdzRGFzaGxldC9NeUJ1Z3NEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319czozNjoiY2M5NDAyMzItMmI2Ni1hMjlkLWM4ODctNTEwYmVjMTc1YjYyIjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjE0OiJUcmFja2VyRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6ODoiVHJhY2tlcnMiO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo1OToibW9kdWxlcy9UcmFja2Vycy9EYXNobGV0cy9UcmFja2VyRGFzaGxldC9UcmFja2VyRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6ImNkMTUwY2Q2LTY1MDAtMDIxYi05NzkwLTUxMGJlY2FhZDVlYyI7YTo0OntzOjk6ImNsYXNzTmFtZSI7czoyNToiTXlNb2R1bGVzVXNlZENoYXJ0RGFzaGxldCI7czo2OiJtb2R1bGUiO3M6ODoiVHJhY2tlcnMiO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo3OToibW9kdWxlcy9DaGFydHMvRGFzaGxldHMvTXlNb2R1bGVzVXNlZENoYXJ0RGFzaGxldC9NeU1vZHVsZXNVc2VkQ2hhcnREYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319czozNjoiY2Q5MTAyZGMtMDlmZC03ODVlLWVhZDUtNTEwYmVjZTQxNTU4IjthOjQ6e3M6OToiY2xhc3NOYW1lIjtzOjI5OiJNeVRlYW1Nb2R1bGVzVXNlZENoYXJ0RGFzaGxldCI7czo2OiJtb2R1bGUiO3M6ODoiVHJhY2tlcnMiO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo4NzoibW9kdWxlcy9DaGFydHMvRGFzaGxldHMvTXlUZWFtTW9kdWxlc1VzZWRDaGFydERhc2hsZXQvTXlUZWFtTW9kdWxlc1VzZWRDaGFydERhc2hsZXQucGhwIjtzOjc6Im9wdGlvbnMiO2E6MDp7fX1zOjM2OiJkMDQ5MGY0My02ZjMwLWQ0MDAtNjExNy01MTBiZWM5MTBiNzMiO2E6NDp7czo5OiJjbGFzc05hbWUiO3M6MTM6IkNoYXJ0c0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjg6IlRyYWNrZXJzIjtzOjEyOiJmaWxlTG9jYXRpb24iO3M6NTM6Im1vZHVsZXMvSG9tZS9EYXNobGV0cy9DaGFydHNEYXNobGV0L0NoYXJ0c0Rhc2hsZXQucGhwIjtzOjg6InJlcG9ydElkIjtzOjM2OiI1NmViNjVkNS05MThmLWEyMzItNzBhZS01MTBiZWNmMWY3ZDQiO319czo1OiJwYWdlcyI7YTo1OntpOjA7YTozOntzOjc6ImNvbHVtbnMiO2E6Mjp7aTowO2E6Mjp7czo1OiJ3aWR0aCI7czozOiI2MCUiO3M6ODoiZGFzaGxldHMiO2E6NTp7aTowO3M6MzY6IjExMmUwODM3LWU5ZjUtM2FiMC1iYjMwLTUxMGJlYzA0ZTNjZiI7aToxO3M6MzY6IjI4OWYwZDkxLTNiNGUtOWI1Yi03NDUwLTUxMGJlY2VjZDFiMiI7aToyO3M6MzY6IjNlODQwZDg5LTA1NWMtMzE3OC1kNjk2LTUxMGJlYzVkMWY2NSI7aTozO3M6MzY6IjU1NDUwZTI3LTQwZjAtNmY5Ny1mMDhhLTUxMGJlY2ZjODg0NSI7aTo0O3M6MzY6IjcwYzQwNzMzLTJjZTctMTI3OS1kMjNhLTUxMGJlYzFkMTk1NCI7fX1pOjE7YToyOntzOjU6IndpZHRoIjtzOjM6IjQwJSI7czo4OiJkYXNobGV0cyI7YToyOntpOjA7czozNjoiZjFmMDYzNWMtOWM2MC00ODY2LWIwNDUtNTEwYmVjNGYwZDVlIjtpOjE7czozNjoiZjFmM2IxOTYtMTYxZS0zNTU0LTBjYjctNTEwYmVjMzg0YmFjIjt9fX1zOjEwOiJudW1Db2x1bW5zIjtzOjE6IjIiO3M6MTQ6InBhZ2VUaXRsZUxhYmVsIjtzOjIwOiJMQkxfSE9NRV9QQUdFXzFfTkFNRSI7fWk6MTthOjM6e3M6NzoiY29sdW1ucyI7YToyOntpOjA7YToyOntzOjU6IndpZHRoIjtzOjM6IjYwJSI7czo4OiJkYXNobGV0cyI7YTozOntpOjA7czozNjoiNzFiMzBjNzUtYTM4ZS00ZGQ0LWU3OTUtNTEwYmVjMzNmZmFkIjtpOjE7czozNjoiNzI5MjA1YzktMjQ3MS1mYTllLWUyZmUtNTEwYmVjY2IzNTkxIjtpOjI7czozNjoiODFmZTAxMGYtZjdmMy1kZmY2LWJlZjctNTEwYmVjNDljNjQ5Ijt9fWk6MTthOjI6e3M6NToid2lkdGgiO3M6MzoiNDAlIjtzOjg6ImRhc2hsZXRzIjthOjM6e2k6MDtzOjM2OiI3MjM0MDQ5My00ODhlLTQ1Y2UtNTRjYy01MTBiZWM2ZDQyYzQiO2k6MTtzOjM2OiI3MmVlMDc0YS01OWQyLTI4ZmMtYzExYS01MTBiZWMxY2YxYzEiO2k6MjtzOjM2OiI4OWUzMGZiMi02MmYyLTJjNWEtZDMyOC01MTBiZWM5YWFlZjgiO319fXM6MTA6Im51bUNvbHVtbnMiO3M6MToiMiI7czoxNDoicGFnZVRpdGxlTGFiZWwiO3M6MjA6IkxCTF9IT01FX1BBR0VfMl9OQU1FIjt9aToyO2E6Mzp7czo3OiJjb2x1bW5zIjthOjI6e2k6MDthOjI6e3M6NToid2lkdGgiO3M6MzoiNjAlIjtzOjg6ImRhc2hsZXRzIjthOjI6e2k6MDtzOjM2OiI4ZDRmMGRhMi0wYjViLTQyNjctNmJiYS01MTBiZWNkOTQyMGYiO2k6MTtzOjM2OiJhMTY4MGY0NS0wNGQ2LWY2NWItOWRiZi01MTBiZWMwZTZkNmIiO319aToxO2E6Mjp7czo1OiJ3aWR0aCI7czozOiI0MCUiO3M6ODoiZGFzaGxldHMiO2E6Mjp7aTowO3M6MzY6ImEwNmYwYjA2LWE3NzAtNWRkYy03N2VlLTUxMGJlYzM1YjQxMCI7aToxO3M6MzY6ImExZGQwODdlLTdjMjgtOTg5NS05ODVlLTUxMGJlYzhmZjJjYyI7fX19czoxMDoibnVtQ29sdW1ucyI7czoxOiIyIjtzOjE0OiJwYWdlVGl0bGVMYWJlbCI7czoyMDoiTEJMX0hPTUVfUEFHRV82X05BTUUiO31pOjM7YTozOntzOjc6ImNvbHVtbnMiO2E6Mjp7aTowO2E6Mjp7czo1OiJ3aWR0aCI7czozOiI1MCUiO3M6ODoiZGFzaGxldHMiO2E6Mjp7aTowO3M6MzY6ImIzZDIwMjcxLWMxMjItZjdhNS1lNjQyLTUxMGJlY2RkNTUyMSI7aToxO3M6MzY6ImI1ZmQwNGIxLWE4MDktODcyZC1mYWVlLTUxMGJlYzQ0NTg4MSI7fX1pOjE7YToyOntzOjU6IndpZHRoIjtzOjM6IjUwJSI7czo4OiJkYXNobGV0cyI7YToyOntpOjA7czozNjoiYjU4OTA1ZTItMGJjYS01MjFlLTgwYzAtNTEwYmVjNmViOTgyIjtpOjE7czozNjoiY2I4NTA4OGItZWFmOS0xMjUxLTY0ZTQtNTEwYmVjMjJiYTMzIjt9fX1zOjEwOiJudW1Db2x1bW5zIjtzOjE6IjIiO3M6MTQ6InBhZ2VUaXRsZUxhYmVsIjtzOjIwOiJMQkxfSE9NRV9QQUdFXzNfTkFNRSI7fWk6NDthOjM6e3M6NzoiY29sdW1ucyI7YToyOntpOjA7YToyOntzOjU6IndpZHRoIjtzOjM6IjUwJSI7czo4OiJkYXNobGV0cyI7YToyOntpOjA7czozNjoiY2M5NDAyMzItMmI2Ni1hMjlkLWM4ODctNTEwYmVjMTc1YjYyIjtpOjE7czozNjoiY2Q5MTAyZGMtMDlmZC03ODVlLWVhZDUtNTEwYmVjZTQxNTU4Ijt9fWk6MTthOjI6e3M6NToid2lkdGgiO3M6MzoiNTAlIjtzOjg6ImRhc2hsZXRzIjthOjI6e2k6MDtzOjM2OiJjZDE1MGNkNi02NTAwLTAyMWItOTc5MC01MTBiZWNhYWQ1ZWMiO2k6MTtzOjM2OiJkMDQ5MGY0My02ZjMwLWQ0MDAtNjExNy01MTBiZWM5MTBiNzMiO319fXM6MTA6Im51bUNvbHVtbnMiO3M6MToiMiI7czoxNDoicGFnZVRpdGxlTGFiZWwiO3M6MjA6IkxCTF9IT01FX1BBR0VfNF9OQU1FIjt9fX0='),('c475114a-a229-3800-0fa5-510bec18a283','Home2_CALL',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),('c4fe5ee0-67a6-a574-3610-510bec134eab','Home2_MEETING',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),('c576a90f-015a-9301-f95e-510beccb805e','Home2_OPPORTUNITY',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),('c5e5717d-71ee-1f28-7001-510bec1b889e','Home2_ACCOUNT',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),('c652071c-2888-9acb-cfa5-510becd9bd88','Home2_LEAD',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),('c6cca8c6-1eec-e41f-3804-510bec85d3c8','Home2_SUGARFEED',0,'2013-02-01 16:24:07','2013-02-01 16:24:07','1','YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ==');
/*!40000 ALTER TABLE `user_preferences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `user_hash` varchar(255) DEFAULT NULL,
  `system_generated_password` tinyint(1) DEFAULT NULL,
  `pwd_last_changed` datetime DEFAULT NULL,
  `authenticate_id` varchar(100) DEFAULT NULL,
  `sugar_login` tinyint(1) DEFAULT '1',
  `picture` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `external_auth_only` tinyint(1) DEFAULT '0',
  `receive_notifications` tinyint(1) DEFAULT '1',
  `description` text,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `phone_home` varchar(50) DEFAULT NULL,
  `phone_mobile` varchar(50) DEFAULT NULL,
  `phone_work` varchar(50) DEFAULT NULL,
  `phone_other` varchar(50) DEFAULT NULL,
  `phone_fax` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `address_street` varchar(150) DEFAULT NULL,
  `address_city` varchar(100) DEFAULT NULL,
  `address_state` varchar(100) DEFAULT NULL,
  `address_country` varchar(100) DEFAULT NULL,
  `address_postalcode` varchar(20) DEFAULT NULL,
  `default_team` varchar(36) DEFAULT NULL,
  `team_set_id` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `portal_only` tinyint(1) DEFAULT '0',
  `show_on_employees` tinyint(1) DEFAULT '1',
  `employee_status` varchar(100) DEFAULT NULL,
  `messenger_id` varchar(100) DEFAULT NULL,
  `messenger_type` varchar(100) DEFAULT NULL,
  `reports_to_id` char(36) DEFAULT NULL,
  `is_group` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_name` (`user_name`,`is_group`,`status`,`last_name`,`first_name`,`id`),
  KEY `idx_users_tmst_id` (`team_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('1','admin','$1$NA.kcVaR$xlC0vNOQO6Wwj1PEi/eMP.',0,NULL,NULL,1,'1a61022a-9d7b-9899-cd8c-510beca376ee',NULL,'Administrator',1,0,1,NULL,'2013-02-01 16:23:38','2013-02-01 16:24:07','1','','Administrator',NULL,NULL,NULL,NULL,NULL,NULL,'Active',NULL,NULL,NULL,NULL,NULL,'1','1',0,0,1,'Active',NULL,NULL,'',0),('7630be13-8cf2-0397-bbce-510bec040c07','SNIPuser','$1$CsijcvnR$Q/u8wxNZNByrns3sEVolH0',0,NULL,'911b89ff73e9',1,NULL,NULL,'Email Archiving user',0,1,0,'Email Archiving user','2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Email Archiving user',NULL,NULL,NULL,NULL,NULL,NULL,'Reserved',NULL,NULL,NULL,NULL,NULL,'1','275110d4-ec1f-1eb1-5ac4-510bec39b710',0,0,1,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_feeds`
--

DROP TABLE IF EXISTS `users_feeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_feeds` (
  `user_id` varchar(36) DEFAULT NULL,
  `feed_id` varchar(36) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  KEY `idx_ud_user_id` (`user_id`,`feed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_feeds`
--

LOCK TABLES `users_feeds` WRITE;
/*!40000 ALTER TABLE `users_feeds` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_feeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_holidays`
--

DROP TABLE IF EXISTS `users_holidays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_holidays` (
  `id` varchar(36) NOT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `holiday_id` varchar(36) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_user_holi_user` (`user_id`),
  KEY `idx_user_holi_holi` (`holiday_id`),
  KEY `users_quotes_alt` (`user_id`,`holiday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_holidays`
--

LOCK TABLES `users_holidays` WRITE;
/*!40000 ALTER TABLE `users_holidays` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_holidays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_last_import`
--

DROP TABLE IF EXISTS `users_last_import`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_last_import` (
  `id` char(36) NOT NULL,
  `assigned_user_id` char(36) DEFAULT NULL,
  `import_module` varchar(36) DEFAULT NULL,
  `bean_type` varchar(36) DEFAULT NULL,
  `bean_id` char(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`assigned_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_last_import`
--

LOCK TABLES `users_last_import` WRITE;
/*!40000 ALTER TABLE `users_last_import` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_last_import` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_password_link`
--

DROP TABLE IF EXISTS `users_password_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_password_link` (
  `id` char(36) NOT NULL,
  `username` varchar(36) DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_password_link`
--

LOCK TABLES `users_password_link` WRITE;
/*!40000 ALTER TABLE `users_password_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_password_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_signatures`
--

DROP TABLE IF EXISTS `users_signatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_signatures` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `signature` text,
  `signature_html` text,
  PRIMARY KEY (`id`),
  KEY `idx_usersig_uid` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_signatures`
--

LOCK TABLES `users_signatures` WRITE;
/*!40000 ALTER TABLE `users_signatures` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_signatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vcals`
--

DROP TABLE IF EXISTS `vcals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vcals` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_id` char(36) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `idx_vcal` (`type`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vcals`
--

LOCK TABLES `vcals` WRITE;
/*!40000 ALTER TABLE `vcals` DISABLE KEYS */;
/*!40000 ALTER TABLE `vcals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versions`
--

DROP TABLE IF EXISTS `versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versions` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file_version` varchar(255) DEFAULT NULL,
  `db_version` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_version` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versions`
--

LOCK TABLES `versions` WRITE;
/*!40000 ALTER TABLE `versions` DISABLE KEYS */;
INSERT INTO `versions` VALUES ('7b175ebc-836a-1b0f-1062-510bec7f03b1',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Chart Data Cache','3.5.1','3.5.1'),('7b91780b-f746-550c-7648-510bec92e5ca',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','htaccess','3.5.1','3.5.1'),('7c010a5a-fcbd-aa4c-d40b-510bec861777',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Rebuild Relationships','4.0.0','4.0.0'),('7c6c2c68-b211-488a-b32d-510bec83b49e',0,'2013-02-01 16:23:38','2013-02-01 16:23:38','1','1','Rebuild Extensions','4.0.0','4.0.0');
/*!40000 ALTER TABLE `versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow`
--

DROP TABLE IF EXISTS `workflow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `base_module` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `description` text,
  `type` varchar(100) DEFAULT NULL,
  `fire_order` varchar(100) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `record_type` varchar(100) DEFAULT NULL,
  `list_order_y` int(3) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_workflow` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow`
--

LOCK TABLES `workflow` WRITE;
/*!40000 ALTER TABLE `workflow` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow_actions`
--

DROP TABLE IF EXISTS `workflow_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow_actions` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  `value` text,
  `set_type` varchar(10) DEFAULT NULL,
  `adv_type` varchar(10) DEFAULT NULL,
  `parent_id` char(36) NOT NULL,
  `ext1` varchar(50) DEFAULT NULL,
  `ext2` varchar(50) DEFAULT NULL,
  `ext3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_action` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow_actions`
--

LOCK TABLES `workflow_actions` WRITE;
/*!40000 ALTER TABLE `workflow_actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow_actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow_actionshells`
--

DROP TABLE IF EXISTS `workflow_actionshells`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow_actionshells` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `action_type` varchar(100) DEFAULT NULL,
  `parent_id` char(36) NOT NULL,
  `parameters` varchar(255) DEFAULT NULL,
  `rel_module` varchar(50) DEFAULT NULL,
  `rel_module_type` varchar(10) DEFAULT NULL,
  `action_module` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_actionshell` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow_actionshells`
--

LOCK TABLES `workflow_actionshells` WRITE;
/*!40000 ALTER TABLE `workflow_actionshells` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow_actionshells` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow_alerts`
--

DROP TABLE IF EXISTS `workflow_alerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow_alerts` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `field_value` varchar(50) DEFAULT NULL,
  `rel_email_value` varchar(50) DEFAULT NULL,
  `rel_module1` varchar(255) DEFAULT NULL,
  `rel_module2` varchar(255) DEFAULT NULL,
  `rel_module1_type` varchar(10) DEFAULT NULL,
  `rel_module2_type` varchar(10) DEFAULT NULL,
  `where_filter` tinyint(1) DEFAULT '0',
  `user_type` varchar(100) DEFAULT NULL,
  `array_type` varchar(100) DEFAULT NULL,
  `relate_type` varchar(100) DEFAULT NULL,
  `address_type` varchar(100) DEFAULT NULL,
  `parent_id` char(36) NOT NULL,
  `user_display_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_workflowalerts` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow_alerts`
--

LOCK TABLES `workflow_alerts` WRITE;
/*!40000 ALTER TABLE `workflow_alerts` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow_alerts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow_alertshells`
--

DROP TABLE IF EXISTS `workflow_alertshells`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow_alertshells` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `alert_text` text,
  `alert_type` varchar(100) DEFAULT NULL,
  `source_type` varchar(100) DEFAULT NULL,
  `parent_id` char(36) NOT NULL,
  `custom_template_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_workflowalertshell` (`name`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow_alertshells`
--

LOCK TABLES `workflow_alertshells` WRITE;
/*!40000 ALTER TABLE `workflow_alertshells` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow_alertshells` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow_schedules`
--

DROP TABLE IF EXISTS `workflow_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow_schedules` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `date_expired` datetime DEFAULT NULL,
  `workflow_id` char(36) DEFAULT NULL,
  `target_module` varchar(50) DEFAULT NULL,
  `bean_id` char(36) DEFAULT NULL,
  `parameters` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_wkfl_schedule` (`workflow_id`,`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow_schedules`
--

LOCK TABLES `workflow_schedules` WRITE;
/*!40000 ALTER TABLE `workflow_schedules` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow_triggershells`
--

DROP TABLE IF EXISTS `workflow_triggershells`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow_triggershells` (
  `id` char(36) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `field` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `frame_type` varchar(15) DEFAULT NULL,
  `eval` text,
  `parent_id` char(36) NOT NULL,
  `show_past` tinyint(1) DEFAULT '0',
  `rel_module` varchar(255) DEFAULT NULL,
  `rel_module_type` varchar(10) DEFAULT NULL,
  `parameters` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow_triggershells`
--

LOCK TABLES `workflow_triggershells` WRITE;
/*!40000 ALTER TABLE `workflow_triggershells` DISABLE KEYS */;
/*!40000 ALTER TABLE `workflow_triggershells` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worksheet`
--

DROP TABLE IF EXISTS `worksheet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worksheet` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `timeperiod_id` char(36) DEFAULT NULL,
  `forecast_type` varchar(100) DEFAULT NULL,
  `related_id` char(36) DEFAULT NULL,
  `related_forecast_type` varchar(100) DEFAULT NULL,
  `best_case` bigint(20) DEFAULT NULL,
  `likely_case` bigint(20) DEFAULT NULL,
  `worst_case` bigint(20) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worksheet`
--

LOCK TABLES `worksheet` WRITE;
/*!40000 ALTER TABLE `worksheet` DISABLE KEYS */;
/*!40000 ALTER TABLE `worksheet` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-01 10:30:26
