
CREATE DATABASE IF NOT EXISTS Appex_Real_Estate_db
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE sellers(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
    sellerName VARCHAR(50) NOT NULL,
    sellerPhone VARCHAR(20) NOT NULL,
    sellerEmail VARCHAR(100),
    sellerLocation VARCHAR(100) NOT NULL,
    sellerID INT(16),
    sellerAddedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE customers(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
    customerName VARCHAR(50) NOT NULL,
    customerPhone VARCHAR(20) NOT NULL,
    customerEmail VARCHAR(100),
    customerLocation VARCHAR(100) NOT NULL,
    customerID INT(16),
    customerAddedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE lands(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    landType VARCHAR(50) NOT NULL,
    landSeller VARCHAR(100) NOT NULL,
    landSize VARCHAR(100) NOT NULL,
    landLocation VARCHAR(100) NOT NULL,
    landImage TEXT NOT NULL,
    landMapAddress TEXT NOT NULL,
    landCost float,
    landStatus VARCHAR(20) NOT NULL,
    landOptions TEXT,
    landVisibility boolean,
    landAddedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE houses(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    houseType VARCHAR(50) NOT NULL,
    houseSeller VARCHAR(100) NOT NULL,
    houseSize VARCHAR(100) NOT NULL,
    houseLocation VARCHAR(100) NOT NULL,
    houseImage TEXT NOT NULL,
    houseMapAddress TEXT NOT NULL,
    houseCost float,
    houseStatus VARCHAR(20) NOT NULL,
    houseOptions TEXT,
    houseRooms INT(10) NOT NULL,
    houseParkings INT(10) NOT NULL,
    houseVisibility boolean,
    houseAddedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE comments(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    commenter VARCHAR(50) NOT NULL,
    commenterEmail VARCHAR(100) NOT NULL,
    commentedAbout VARCHAR(100) not NULL,
    comment TEXT NOT NULL,
    commentedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE subscribers(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    subscriberName VARCHAR(50) NOT NULL,
    subscriberEmail VARCHAR(100) NOT NULL,
    subscriberLocation VARCHAR(100) not NULL,
    subscribedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE deals(
     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     dealFor VARCHAR(20) NOT NULL,
     dealItemId INT(11) NOT NULL,
     dealCustomerId INT(11) NOT NULL,
     dealStatus boolean,
     dealAddedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE users(
     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     userName VARCHAR(50) NOT NULL,
     userEmail VARCHAR(100) NOT NULL,
     userPassword VARCHAR(1000) NOT NULL,
     userCategory boolean NOT NULL
)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER TABLE `deals` ADD FOREIGN KEY (`dealCustomerId`) REFERENCES `customers`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;