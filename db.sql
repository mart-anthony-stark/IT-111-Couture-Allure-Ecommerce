-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: couture_allure
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `_prisma_migrations`
--

DROP TABLE IF EXISTS `_prisma_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `_prisma_migrations` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checksum` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finished_at` datetime(3) DEFAULT NULL,
  `migration_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rolled_back_at` datetime(3) DEFAULT NULL,
  `started_at` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `applied_steps_count` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `_prisma_migrations`
--

LOCK TABLES `_prisma_migrations` WRITE;
/*!40000 ALTER TABLE `_prisma_migrations` DISABLE KEYS */;
INSERT INTO `_prisma_migrations` VALUES ('1a9bcd7c-4975-418a-9176-539f1815412e','4daee66cb4a9acbb097bc0d2a77b0bfe1978b1c148ee65435feac8ed65f7fea6','2022-05-03 11:58:53.352','20220430135254_init',NULL,NULL,'2022-05-03 11:58:53.210',1),('959605c6-807a-4c8c-a75a-06c0b06005d6','6455968269630f0a4f7c9f033f980144d12d370883bf3544ef2415ee6d3768ff','2022-05-03 11:58:53.488','20220501122220_copy_rating',NULL,NULL,'2022-05-03 11:58:53.471',1),('b1b313fe-9f50-4b64-8fb1-58628840f6fc','4d43912dd8fc9cb553ba9fcaa149cf40b8596527411b0fab4c1fae338d0f004f','2022-05-03 12:20:50.277','20220503115853_',NULL,NULL,'2022-05-03 12:20:50.259',1),('beeff013-5f44-4973-8cba-71622364af0a','36cbadd61c069d949bce8de4bb990e197574f95751d5c35e069693d40d24d5ea','2022-05-03 11:58:53.417','20220430135823_uniquemail',NULL,NULL,'2022-05-03 11:58:53.359',1),('ca493eb7-f6a6-4469-9aef-5500e79f6a5d','c00ca038b55a6d30574976ef787105bc24003918e93ffbe13043077619ef1729','2022-05-03 11:58:53.446','20220430142629_uniquemail',NULL,NULL,'2022-05-03 11:58:53.424',1),('dfd672a6-5280-4afc-872c-75991c9e7c9e','a008f7038b8f20b0ed993cb64a0f87bf22b113febaeda32c97b791bc5d18095a','2022-05-03 11:58:53.466','20220501122144_copy_rating',NULL,NULL,'2022-05-03 11:58:53.451',1);
/*!40000 ALTER TABLE `_prisma_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `product` (`product`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (11,9,1,6);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 4,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Rib-knit Puff Sleeve Sexy Dress','Ditsy Floral Puff Sleeve Flounce Hem Shirred Waist Dress. Made with Linen chiffon cloth, soft and comfy','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/1.jpg?raw=true',1200,'dresses',4),(2,'Sexy korean plain dress','The latest design, cut simple and generous Stylish and elegant, capable and comfortable Suitable for fashion ladies wear','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/2.jpg?raw=true',700,'dresses',3),(3,'Off shoulder maxi korean elegant dress','The Bell Sleeve. This full sleeved variation of the off-shoulder top is perfect for summer as they are simple in their appeal but trendy at the same time.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/3.jpg?raw=true',1300,'dresses',4),(4,'ANNIKA Bangkok Floral Ribbon Dress','An elegantly hand beaded bodice makes this floral ribbon dress a dazzling event-ready look.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/4.jpg?raw=true',999,'dresses',5),(5,'Perfect Lash Magnifying Mascara','Designed for mature skin, infused with Conditioning Serum and Jojoba Oil.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/H69b3e38b23ce4f5f9bcf8ab825caf86fo%201.svg',550,'cosmetics',4),(6,'O.TWO.O Eyebrow Styling Soap','Eyebrow shaping soap, colorless, odorless, waterproof and sweatproof.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/H849d90bc908949a0a6ad8119762c2ad56%201.svg',100,'cosmetics',4),(7,'Amuse Bouche Fall Lipstick Shade in Pepper','The dusty rose shade is formulated with edible oils to look and taste stunning.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/H8ba07055384044d68dcbb3326a7f4b85p%201.svg',400,'cosmetics',5),(8,'Loose Highlighter in Snowflake','Beautifully fine and soft, most wearable white highlighter for people with warm skin.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/H964592ab97054002a263e0562b66078eX%201.svg',600,'cosmetics',4),(9,'Matte Nude Lip Gloss','Get it with weightless and free as air with soft elastic brush head and smudge-proof formula.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/Hb05885e4e25b471a870dfc3510f961d4B%201.svg',500,'cosmetics',5),(10,'Fine Powder 15-color Star Eyeshadow Pallete','A pallete consist of nude colors formulated for long-wearing.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/Hdd24dc92a57947db92dbf1e53a2451ffN%201.svg',1000,'cosmetics',5),(11,'Base Liquid Foundation','Formulated with powerful moisture layers, it provides full of moisture at skin.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/Hecbdb498040e408189d9346998a2bc2an%201.svg',700,'cosmetics',4),(12,'Waterproof Matte Lipstick','Creates beautiful lip with advanced velvet mist.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/10f4e7752fbddb2a6b4be6cbc056c8ff08ed8de4/Cosmetics/Hf75dedacbc044941a926d49950474a86p%201.svg',200,'cosmetics',4),(13,'Black dress women\'s summer','Perfect for almost any occasion, this square-neck dress features sheer puff sleeves and a flowy tiered skirt.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/16073967351bc7e8763e3e6a3393824611c7e5db19_thumbnail_600x%201.svg',1299,'dresses',5),(14,'Ruffle Puff Ruched Dresses','Sweet and lightweight, this square-neck sundress features contrasting straps and a shaping smocked bodice.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/1615865022841dea753bc01df5c8cd51807d689752_thumbnail_600x%201.svg',899,'dresses',4),(15,'Selena Tiered Smocked Dress','The prettiest way to be comfy, Madewell\'s best-selling smocked midi dress is updated with delicate eyelet on its swingy flutter sleeves.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/f%201.svg',999,'dresses',5),(16,'Luca Puff Sleeve Casual Dress','A graceful floral print and frilly ruffles create an enchanting aesthetic on a flowy dress styled with a smocked bodice and flounce hem.','https://raw.githubusercontent.com/mart-anthony-stark/Couture-Allure-Assets/3b9524db136fcfbb8f0a2a5337e5aa06807e5cdb/Dresses/g%201.svg',1200,'dresses',4),(17,'Chain fashion Lady crossbody bag','A more traditional style, so you can get away a wilder print, a more off-kilter shape, or a trendy color and have good faith that your bag will feel cool to you for a long time.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/5.jpg?raw=true',2500,'bags',3),(18,'Korean Fashion Leather Sling Bag','An unstructured fabric shoulder bag that can either be worn parallel to your body, or across it.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/6.jpg?raw=true',1999,'bags',5),(19,'YZ Korean fashion Canvas sling bag','Looking for a new bag to add to your collection? Get your hands on the hottest Korean bag brands including MARHEN.J, Pleats Mama and RAWROW!','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/7.jpg?raw=true',1299,'bags',4),(20,'Flagship Korean Fashion Shoulder Leather Bag','Woman bag Flagship Korean Fashion Shoulder Cute Leather Ladies Women bag sling L101 ; Brand.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/8.jpg?raw=true',1999,'bags',4),(21,'Classy and fashionable topsider for women','Leather, comfy, easy to wear and perfectly matched to your ideal fashion.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/16280076214641b0a220cdb129e290bf2879655b71_thumbnail_600x%201.png?raw=true',340,'shoes',4),(22,'Famous leather/rubber shoe for spring and autumn days','Rounded toe, leather/rubber and in low heels height (1cm-3cm)','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/1629452190e2015d648977620a13d814e773b15314_thumbnail_600x%201.png?raw=true',450,'shoes',3),(23,'Thick soled high heeled short boots','Best partner on your casual dress, pointed toe and comfortable to wear.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/16308365813277fab2e69f91c480ebd7e19b8d7bc0_thumbnail_600x%201.png?raw=true',600,'shoes',4),(24,'Thick botton ankle boots','Leather/rubber, can wear during spring and autumn days and washable','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/163193308183978677a1107e778ffa648101908b91_thumbnail_600x%201.png?raw=true',400,'shoes',4),(25,'Pointed Strip Strap high heels','A gladiator shoes style and perfectly match to your sexy dresses.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/16338535417c5d12556da0609a208e19baae70952c_thumbnail_600x%201.png?raw=true',600,'shoes',5),(26,'Open toe chunky sandal for womens fashion','Design for all women, classy and romantic type of shoe','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/16414355537b207334eeb19ebabdbb8e180ff17373_thumbnail_600x%201.png?raw=true',1000,'shoes',4),(27,'saged slide square toe  sandal ','Crossing delicate skinny straps, fierce and feminine.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/16419653441cfc4c5614051e6ca2c40da909266dae_thumbnail_600x%201.png?raw=true',1500,'shoes',4),(28,'Korean Pointed Brown heels','slip on tile, pointed toe and design with perfect color for womens fashion.','https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/9.jpg?raw=true',800,'shoes',4);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `User_email_key` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (8,'Mart Anthony','mart@gmail.com','$2y$10$VEdwnUaFvLEhY4tqdm113eeEZ/qcdxx6R8p8Jn3HiNKXZecuBKkQG','09123456789'),(9,'mart','martsalazar@gmail.com','$2y$10$Vq6WEqBtlTHi/HoSGmEqa.bsLbyjVA5NqLPMhXyQDaANc2HTafV12','09123456789'),(10,'John Doe','johndoe@gmail.com','$2y$10$HL.dCSRxDHIidhAv0xYH/.T2/i6tPswTc7XYHC8g3.ABM8BesG2n.','09123456789');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-28 18:15:51
