CREATE DATABASE IF NOT EXISTS `syrie_think` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `syrie_think`;

-- Table for categories
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table for articles
CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`article_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table for gallery items
CREATE TABLE `gallery_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` enum("image","video") COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table for users (admin panel)
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum("admin","editor") COLLATE utf8mb4_unicode_ci DEFAULT "editor",
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table for cities and provinces
CREATE TABLE `cities_provinces` (
  `city_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `hero_image` VARCHAR(255),
  `tagline` VARCHAR(255),
  `content_file` VARCHAR(255) NOT NULL UNIQUE,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Sample data for syrie_think database
USE syrie_think;

-- Add categories
INSERT INTO categories (category_name, description) VALUES
("History", "Articles about the rich history of Syria"),
("Culture", "Cultural traditions, art, and heritage"),
("Geography", "Landscapes, cities, and natural features"),
("Economy", "Economic sectors and developments"),
("Tourism", "Attractions and travel destinations"),
("Current Affairs", "Recent developments and news"),
("Cities & Provinces", "Detailed information about Syrian cities and provinces");

-- Add an admin user (password: admin123)
INSERT INTO users (username, password, email, role) VALUES
("admin", "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", "admin@syria-website.local", "admin");

-- Add sample articles
INSERT INTO articles (category_id, title, content, image_url, created_at) VALUES
(1, "The Old City of Damascus", "Damascus, the capital of Syria, is often referred to as one of the oldest continuously inhabited cities in the world. The Old City of Damascus is a UNESCO World Heritage site and contains numerous historical monuments.\n\nThe city has a history dating back to the 3rd millennium BC. Throughout the centuries, Damascus has been an important center for trade, culture, and religion. The Umayyad Mosque, built in the 8th century, is one of the most important Islamic monuments in the world.\n\nThe Old City is surrounded by Roman walls and contains a labyrinth of narrow streets, traditional houses, and historic buildings. The famous Straight Street, mentioned in the Bible, still runs through the heart of the Old City.", "images/damascus-old-city.jpg", "2025-07-07 10:00:00"),

(1, "Palmyra: Pearl of the Desert", "Palmyra, located in the Syrian desert, was one of the wealthiest cities of the ancient world. This oasis city was situated at the crossroads of important trade routes between East and West.\n\nThe city reached its peak in the 3rd century AD under Queen Zenobia. Palmyra had a unique culture that combined Greek, Roman, and Persian influences. Its spectacular ruins bear witness to this rich history.\n\nThe site includes a large colonnade, a theater, temples, and tombs. It is a UNESCO World Heritage site, although it has unfortunately suffered damage in recent years.", "images/palmyra-ruins.jpg", "2025-07-07 14:30:00"),

(2, "Syrian Cuisine: A Culinary Journey", "Syrian cuisine is considered one of the richest and most diverse in the Middle East. It combines influences from Levantine, Turkish, and Persian cuisines.\n\nKey ingredients include olive oil, garlic, lemon juice, and various spices such as sumac, za'atar, and baharat. Mezze is an important part of Syrian food culture - small dishes that are shared.\n\nWell-known dishes include hummus, baba ganoush, tabbouleh, kibbeh, and various types of kebab. Desserts such as baklava and ma'amoul are also popular.", NULL, "2025-07-07 16:45:00"),

(3, "The Geography of Syria", "Syria has a diverse geography ranging from the Mediterranean coast to desert areas in the east. The country covers an area of 185,180 square kilometers.\n\nThe western part is dominated by mountain ranges, including the Alawite Mountains and the Anti-Lebanon. Between these mountains lie fertile plains important for agriculture.\n\nThe Euphrates and Orontes are the main rivers. The climate varies from Mediterranean along the coast to desert climate in the east.", NULL, "2025-07-07 11:20:00"),

(2, "Traditional Crafts in Syria", "Syria has a rich tradition of artisanal arts that are centuries old. Damascus is world-renowned for its steelwork and wood inlay.\n\nDamascene steel was famous for its quality and was used for the finest swords. Although the original technique has been lost, the tradition continues in modern crafts.\n\nWood inlay (marquetry) is another specialty, where wood is inlaid with mother-of-pearl, ivory, and various types of wood. This technique is used for furniture, boxes, and decorative objects.\n\nAleppo soap, made from olive oil and laurel oil, has been produced for over 1000 years using traditional methods.", NULL, "2025-07-07 09:15:00");

-- Add sample gallery items
INSERT INTO gallery_items (title, description, media_url, media_type, uploaded_at) VALUES
("Umayyad Mosque Damascus", "The magnificent Umayyad Mosque in Damascus, a masterpiece of Islamic architecture", "images/umayyad-mosque.jpg", "image", "2025-07-07 12:00:00"),
("Citadel of Aleppo", "The imposing Citadel of Aleppo, one of the largest and oldest castles in the world", "images/aleppo-citadel.jpg", "image", "2025-07-07 15:30:00"),
("Ruins of Palmyra", "The spectacular ruins of ancient Palmyra in the Syrian desert", "images/palmyra-ruins.jpg", "image", "2025-07-07 10:45:00"),
("Old City Damascus", "Street view from the historic Old City of Damascus", "images/damascus-old-city.jpg", "image", "2025-07-07 14:20:00"),
("Syrian Flag", "The national flag of Syria waving in the wind", "images/syria-new-flag.jpg", "image", "2025-07-07 16:10:00");

-- Add sample cities and provinces data
INSERT INTO cities_provinces (name, description, hero_image, tagline, content_file) VALUES
("Damascus", "The capital and one of the oldest continuously inhabited cities in the world.", "images/damascus-old-city.jpg", "The Ancient Capital, A City of Jasmine", "damascus.php"),
("Aleppo", "A historic commercial center, known for its ancient citadel and souks.", "images/aleppo-citadel.jpg", "The Ancient Citadel, A City of Resilience", "aleppo.php"),
("Homs", "A central city and industrial hub, strategically located.", "images/homs-city.jpg", "The Central Hub, A City Rebuilding", "homs.php"),
("Idlib", "A province in northwestern Syria, currently a major center for displaced persons.", "images/idlib-city.jpg", "The Northwestern Province, A Humanitarian Challenge", "idlib.php"),
("Latakia", "Syria's main port city on the Mediterranean coast.", "images/latakia-city.jpg", "The Coastal Gateway, Syria's Port City", "latakia.php"),
("Deir ez-Zor", "A city in eastern Syria, located on the Euphrates River, known for its oil industry.", "images/deir-ez-zor-city.jpg", "The Pearl of the Euphrates, Eastern Syria's Hub", "deirez-zor.php"),
("Hama", "Famous for its ancient norias (waterwheels) on the Orontes River.", "images/hama-city.jpg", "City of Norias, Ancient Waterwheels", "hama.php"),
("Raqqa", "A city in northern Syria, historically significant and located on the Euphrates.", "images/raqqa-city.jpg", "The Euphrates City, A Historical Crossroads", "raqqa.php"),
("Palmyra", "An ancient city in the Syrian Desert, a UNESCO World Heritage site.", "images/palmyra-ruins.jpg", "The Ancient Oasis, A UNESCO World Heritage Site", "palmyra.php");


-- Table for visitors (front-end users)
CREATE TABLE `visitors` (
  `visitor_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table for visitors' liked content
CREATE TABLE `visitors_likes` (
  `like_id` INT(11) NOT NULL AUTO_INCREMENT,
  `visitor_id` INT(11) NOT NULL,
  `article_id` INT(11) DEFAULT NULL,
  `gallery_item_id` INT(11) DEFAULT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`like_id`),
  FOREIGN KEY (`visitor_id`) REFERENCES `visitors`(`visitor_id`) ON DELETE CASCADE,
  FOREIGN KEY (`article_id`) REFERENCES `articles`(`article_id`) ON DELETE CASCADE,
  FOREIGN KEY (`gallery_item_id`) REFERENCES `gallery_items`(`item_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table for visitors' saved content
CREATE TABLE `visitors_saved` (
  `save_id` INT(11) NOT NULL AUTO_INCREMENT,
  `visitor_id` INT(11) NOT NULL,
  `article_id` INT(11) DEFAULT NULL,
  `gallery_item_id` INT(11) DEFAULT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`save_id`),
  FOREIGN KEY (`visitor_id`) REFERENCES `visitors`(`visitor_id`) ON DELETE CASCADE,
  FOREIGN KEY (`article_id`) REFERENCES `articles`(`article_id`) ON DELETE CASCADE,
  FOREIGN KEY (`gallery_item_id`) REFERENCES `gallery_items`(`item_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
