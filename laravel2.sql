-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2022 lúc 08:37 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `adminID` varchar(30) NOT NULL,
  `adminName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `billID` varchar(30) NOT NULL,
  `billDate` datetime DEFAULT NULL,
  `billName` varchar(50) NOT NULL,
  `customerID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdatail`
--

CREATE TABLE `billdatail` (
  `billID` varchar(30) NOT NULL,
  `productID` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customerID` varchar(30) NOT NULL,
  `customerPass` varchar(200) NOT NULL,
  `customerFullname` varchar(50) NOT NULL,
  `customerAddress` varchar(50) NOT NULL,
  `customerEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customerID`, `customerPass`, `customerFullname`, `customerAddress`, `customerEmail`) VALUES
('user01', '$2y$10$2qKvYVtT1bWU6nthsVCAZeMia/gUCK65bzIuQLMah/21n3TqDrPAq', 'Hung Hung', 'Tp HCM', 'bondaiken@gmail.com'),
('user05', '$2y$10$3iiQyXpOpfXhJf0qjLO8TOnJypdS3hNGv7I3VJ34N.z4EFcIDcMMq', '123456', 'Tp HCM', 'timifav583@mahazai.com'),
('user06', '$2y$10$.ej/LUBl8ZYFmrNWwqvMT.nyUb879/ZfWPNbd/a7kukVSIw4nGOai', 'akhi', 'Tp HCM', 'minhtqgcs200819@fpt.edu.vn'),
('user07', '$2y$10$5LAvGaEvXGfZHQcJ7n2Qp.lgQoxkrLFu.oaJ8lSefCKsF8yfgul3O', 'Kianha', 'Tp HCM', 'ken052@gmail.com'),
('user08', '$2y$10$Qh1yWL2UhtHvZJzpdAuRhOWCVlbsC2MEeDB.8xjL6wI5.LRENh6Ti', 'Koi caa', 'Tp HCM', 'timifav583@mahazai.com'),
('user11', '$2y$10$DPnfYc6EwOEQn9tkNdFoHeDpQZC9Ygh1lDZL8rvSku0E6rUG90Taa', 'Kimna', 'Tp HCM', 'minhtqgcs200819@fpt.edu.vn'),
('user15', '$2y$10$s.ZGmkS1Py3XMWe8SuqxK.juSrxC.yOWxZlFSqLV/p4Uhyr5ZcVdq', 'Hina', 'TP. Da Lat', 'bondaiken52@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producers`
--

CREATE TABLE `producers` (
  `producerID` int(11) NOT NULL,
  `producerName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `producers`
--

INSERT INTO `producers` (`producerID`, `producerName`) VALUES
(2, 'Apple'),
(3, 'LG'),
(4, 'Nokia'),
(6, 'Oppo'),
(1, 'Samsung'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` varchar(30) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetails` varchar(3000) NOT NULL,
  `productImage1` varchar(30) NOT NULL,
  `producerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `productName`, `productPrice`, `productDetails`, `productImage1`, `producerID`) VALUES
('111', 'Oppo ken', 454, '2', 'Oppo 52.jpg', 4),
('123', 'Samsung fold 3', 456, 'Ken', 'product01.jpg', 1),
('128', 'Oppo kik', 762, 'kkk', 'product12.jpg', 6),
('23', 'Xiaomi 12', 562, 'dd', 'product14.jpg', 5),
('25', 'LG Wing', 320, 'da', 'product17.jpg', 3),
('251', 'Sam Sung fold3', 1253, '3455', 'product01.jpg', 1),
('49', 'Nokia', 895, 'asd', 'product13.jpg', 4),
('544', 'Samsungs21', 454, 'qw', 'product05.jpg', 2),
('62', 'kon', 558, 'kkk', 'product14.jpg', 1),
('75', 'Oppo A5', 340, 'dsd', 'product08.jpg', 6),
('89', 'Oppo A52', 852, 'k', 'Oppo 52.jpg', 6),
('P120', 'iPhone 12', 1200, 'ow', 'product03.jpg', 2),
('P23', 'Samsungs21', 454, '12', 'product03.jpg', 2),
('P25', 'Sam Sung fold3', 454, '2', 'product08.jpg', 2),
('P29', 'Samsungs21', 454, '12', 'product05.jpg', 2),
('P30', 'Oppo ken', 123, '12', 'product05.jpg', 2),
('P8', 'Samsung', 500, '2', 'product12.jpg', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billID`),
  ADD KEY `customerID` (`customerID`);

--
-- Chỉ mục cho bảng `billdatail`
--
ALTER TABLE `billdatail`
  ADD KEY `billID` (`billID`),
  ADD KEY `productID` (`productID`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Chỉ mục cho bảng `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`producerID`),
  ADD UNIQUE KEY `producerName` (`producerName`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `producerID` (`producerID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `producers`
--
ALTER TABLE `producers`
  MODIFY `producerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);

--
-- Các ràng buộc cho bảng `billdatail`
--
ALTER TABLE `billdatail`
  ADD CONSTRAINT `billdatail_ibfk_1` FOREIGN KEY (`billID`) REFERENCES `bill` (`billID`),
  ADD CONSTRAINT `billdatail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`producerID`) REFERENCES `producers` (`producerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
