-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 05:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carmanufacturingcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'bernd@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `chassisNo` varchar(15) NOT NULL,
  `modelCode` varchar(15) NOT NULL,
  `colour` varchar(15) NOT NULL DEFAULT 'Black',
  `manufacturingDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`chassisNo`, `modelCode`, `colour`, `manufacturingDate`) VALUES
('032JKSDF', '5MDJD', 'White', '2022-03-12'),
('03UDDNDJ', '5MDJD', 'Black', '12-12-2022'),
('12KNDKDM', '7GFCD', 'Black', '12-12-2022'),
('23CNSDKFF', '7GFCD', 'Black', '12-12-2022'),
('34JFCJCJ', '1YHDN', 'Black', '12-12-2022'),
('34PLMIFN', '8KLED', 'Black', '12-12-2022'),
('35MSDNDSN', '8KLED', 'Black', '12-12-2022'),
('45KFOMFPS', '1YHDN', 'Black', '12-12-2022'),
('56BDHSSB', '8KLED', 'Black', '12-12-2022'),
('76JSNDKD', '1YHDN', 'Black', '12-12-2022'),
('78NUHDKJ', '5MDJD', 'Black', '12-12-2022'),
('93MDJSND', '5MDJD', 'Black', '12-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `carpacking`
--

CREATE TABLE `carpacking` (
  `chassisNo` varchar(15) NOT NULL,
  `packingID` int(11) NOT NULL,
  `parkinglot` int(11) NOT NULL CHECK (`parkinglot` > 0 and `parkinglot` < 500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carpacking`
--

INSERT INTO `carpacking` (`chassisNo`, `packingID`, `parkinglot`) VALUES
('78NUHDKJ', 1342, 1),
('56BDHSSB', 1342, 2),
('76JSNDKD', 3490, 1),
('12KNDKDM', 3490, 2),
('35MSDNDSN', 3490, 3),
('34PLMIFN', 5467, 1),
('03UDDNDJ', 5467, 2),
('45KFOMFPS', 5692, 1),
('23CNSDKFF', 8751, 1),
('34JFCJCJ', 8751, 2);

-- --------------------------------------------------------

--
-- Table structure for table `carsupplierparts`
--

CREATE TABLE `carsupplierparts` (
  `empid` int(11) NOT NULL,
  `supplierPartID` int(11) NOT NULL,
  `chassisNo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carsupplierparts`
--

INSERT INTO `carsupplierparts` (`empid`, `supplierPartID`, `chassisNo`) VALUES
(81032022, 2, '35MSDNDSN'),
(23412022, 1, '12KNDKDM'),
(45572022, 3, '03UDDNDJ'),
(30302022, 5, '35MSDNDSN'),
(21452022, 3, '56BDHSSB'),
(23412022, 1, '34PLMIFN'),
(21452022, 1, '78NUHDKJ'),
(45572022, 4, '23CNSDKFF'),
(81032022, 5, '93MDJSND'),
(30302022, 2, '45KFOMFPS');

-- --------------------------------------------------------

--
-- Table structure for table `companystorage`
--

CREATE TABLE `companystorage` (
  `storageID` int(11) NOT NULL,
  `warehouseID` int(11) DEFAULT NULL,
  `storageArea` varchar(20) NOT NULL,
  `shelf` int(11) NOT NULL,
  `rack` int(11) NOT NULL,
  `storageBin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companystorage`
--

INSERT INTO `companystorage` (`storageID`, `warehouseID`, `storageArea`, `shelf`, `rack`, `storageBin`) VALUES
(1854, 4581, 'areaA', 1, 1, 'binA'),
(2356, 4581, 'areaB', 3, 3, 'binB'),
(4325, 9875, 'areaC', 2, 2, 'binC'),
(4456, 3278, 'areaB', 2, 2, 'binB'),
(4567, 9875, 'areaA', 1, 1, 'binA'),
(5432, 2345, 'areaA', 1, 1, 'binA'),
(5678, 8765, 'areaA', 1, 1, 'binA'),
(8723, 3278, 'areaA', 1, 1, 'binA');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `tel` char(15) NOT NULL,
  `address` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `fname`, `lname`, `tel`, `address`, `email`) VALUES
(1, 'Rodney', 'Ngoh', '0243653345', '12 Nii Ago Street', 'eddiena@gmail.com'),
(2, 'Samuel', 'Mensah', '0242234514', 'Katamanto East', 'SammyM2@gmail.com'),
(3, 'George', 'Akonteh', '0556789012', '34 Kaneshi West', 'ggAnimaux@yahoo.com'),
(4, 'Joseph', 'Boadi', '0544558712', 'Lakeside 22 Street', 'josephboadi21@gmail.com'),
(5, 'Laila', 'Ayawoa', '0234225491', 'Madina', 'lookingcute1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customercar`
--

CREATE TABLE `customercar` (
  `chassisNo` varchar(15) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `receiptID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customercar`
--

INSERT INTO `customercar` (`chassisNo`, `customerID`, `receiptID`) VALUES
('78NUHDKJ', 1, 858),
('23CNSDKFF', 2, 858),
('34PLMIFN', 3, 906),
('45KFOMFPS', 4, 917),
('76JSNDKD', 5, 906),
('93MDJSND', 4, 917),
('34JFCJCJ', 5, 945),
('03UDDNDJ', 3, 874),
('56BDHSSB', 5, 945),
('35MSDNDSN', 4, 858);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` int(11) NOT NULL,
  `address` varchar(35) NOT NULL,
  `tel` char(15) NOT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `address`, `tel`, `email`) VALUES
(21452022, '669 Jones Nelson Rd', '0205793200', 'maybell30@gmail.com'),
(23412022, 'American House East Legon', '0204567239', 'dumsor99@gmail.com'),
(30302022, '1022 Awudome Estates', '0352027072', 'elyssa55@yahoo.com'),
(45572022, 'Adabraka Str.', '0548971248', 'revamp2day@gmail.com'),
(81032022, 'West Legon 22 Str.', '0552425672', 'robertlao@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `makeID` varchar(30) NOT NULL,
  `makeName` varchar(30) NOT NULL,
  `vehicleClass` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`makeID`, `makeName`, `vehicleClass`) VALUES
('2TFG3', 'ELANTRA', 'A'),
('3XVR9', 'Corolla', 'C'),
('4ISH5', 'VITZ', 'A'),
('7HNI9', 'AVENSIS', 'A'),
('8OLP7', 'RAV4', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `modelCode` varchar(15) NOT NULL,
  `makeID` varchar(30) DEFAULT NULL,
  `series` varchar(15) NOT NULL,
  `modelYear` year(4) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `fuelType` varchar(30) NOT NULL,
  `mileage` int(11) NOT NULL DEFAULT 25,
  `weight` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`modelCode`, `makeID`, `series`, `modelYear`, `transmission`, `fuelType`, `mileage`, `weight`, `price`) VALUES
('1YHDN', '3XVR9', 'RTHA', 2016, 'Manual transmission', 'Gasoline', 24, 1200, 13000),
('2JNST', '4ISH5', 'MKND', 2016, 'Automatic transmission', 'Petrol', 23, 1200, 30000),
('2SWDX', '4ISH5', 'ZXFH', 2016, 'Automatic transmission', 'Petrol', 25, 1300, 19000),
('3HTSA', '4ISH5', 'WDQA', 2016, 'Automatic transmission', 'Petrol', 25, 1100, 10000),
('4LIKD', '8OLP7', 'MKAL', 2016, 'Continuously variable transmission (CVT)', 'Desiel', 25, 1300, 20000),
('4NMAJ', '4ISH5', 'NAVS', 2016, 'Automatic transmission', 'Petrol', 28, 1200, 50000),
('5HTNS', '8OLP7', 'LAOS', 2016, 'Continuously variable transmission (CVT)', 'Desiel', 25, 2400, 40000),
('5MDJD', '3XVR9', 'CTH4', 2016, 'Manual transmission', 'Gasoline', 26, 1200, 20000),
('6OLPWE', '8OLP7', 'POIU', 2019, 'Continuously variable transmission (CVT)', 'Desiel', 25, 6700, 60000),
('6THWS', '4ISH5', 'MKLS', 2019, 'Automatic transmission', 'Petrol', 25, 1300, 34000),
('7GFCD', '4ISH5', 'NGHS', 2016, 'Automatic transmission', 'Petrol', 25, 1300, 20000),
('8IOPU', '8OLP7', 'NBVC', 2016, 'Continuously variable transmission (CVT)', 'Desiel', 25, 1300, 20000),
('8KLED', '3XVR9', 'THW', 2016, 'Manual transmission', 'Gasoline', 26, 1100, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `packingID` int(11) NOT NULL,
  `warehouseID` int(11) DEFAULT NULL,
  `packingArea` varchar(20) NOT NULL,
  `packingZone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`packingID`, `warehouseID`, `packingArea`, `packingZone`) VALUES
(123, 2345, 'areaA', 'lower zone'),
(1342, 9875, 'areaA', 'upper zone'),
(3490, 3278, 'areaA', 'lower zone'),
(5467, 8765, 'areaA', 'lower zone'),
(5692, 2345, 'areaA', 'upper zone'),
(8751, 4581, 'areaA', 'middle zone');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `lotID` int(11) NOT NULL,
  `materialType` varchar(25) NOT NULL,
  `partName` varchar(30) NOT NULL,
  `cost` float NOT NULL,
  `quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`lotID`, `materialType`, `partName`, `cost`, `quantity`) VALUES
(1, 'Glass', 'window', 900000, 50),
(2, 'Copper', 'engine', 1000000, 25),
(3, 'Cotton', 'chair', 500000, 60),
(4, 'Steel', 'fans', 6900000, 100),
(5, 'Aluminium', 'fans', 500000, 50),
(6, 'Leather', 'seats', 6900000, 100),
(7, 'Leather', 'wheels', 6900000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `receiptID` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `paymentDate` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`receiptID`, `amount`, `paymentDate`) VALUES
(858, 217000, '22-05-2022'),
(874, 990000, '02-05-2022'),
(906, 102000000, '13-09-2022'),
(917, 2000000, '10-06-2022'),
(945, 450000, '03-06-2022');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `company` varchar(25) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierID`, `company`, `address`, `email`, `contact`) VALUES
(1111, 'Alfa', 'US', 'alfamanufactures@gmail.com', '+1(800)235-7890'),
(2222, 'Bugatti', 'US', 'bugattimanufactures@gmail.com', '+1(800)235-5090'),
(3333, 'Alfa', 'Dogte', 'dogtemanufactures@gmail.com', '+1(800)235-0945'),
(4444, 'Nissan', 'US', 'nissamanufactures@gmail.com', '+1(800)294-7330'),
(5555, 'Toyota', 'US', 'toyotamanufactures1@gmail.com', '+1(800)235-7890');

-- --------------------------------------------------------

--
-- Table structure for table `supplierparts`
--

CREATE TABLE `supplierparts` (
  `supplierPartID` int(11) NOT NULL,
  `supplyDate` date DEFAULT NULL,
  `lotID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplierparts`
--

INSERT INTO `supplierparts` (`supplierPartID`, `supplyDate`, `lotID`, `supplierID`) VALUES
(1, '2000-12-20', 1, 1111),
(2, '2000-12-13', 2, 1111),
(3, '2019-11-23', 3, 3333),
(4, '2018-02-19', 4, 5555),
(5, '2019-01-20', 5, 2222),
(6, '2002-06-27', 6, 2222),
(7, '2020-08-16', 7, 4444);

-- --------------------------------------------------------

--
-- Table structure for table `supplierpartsstorage`
--

CREATE TABLE `supplierpartsstorage` (
  `supplierPartID` int(11) NOT NULL,
  `storageID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplierpartsstorage`
--

INSERT INTO `supplierpartsstorage` (`supplierPartID`, `storageID`) VALUES
(4, 1854),
(7, 2356),
(6, 4456),
(1, 4567),
(3, 5432),
(2, 5678),
(5, 8723);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouseID` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `emailAddress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouseID`, `location`, `emailAddress`) VALUES
(2345, 'Accra-Kaneshie', 'Dzaglico.65@gmail.com'),
(3278, 'Accra-Legon', 'Dzaglico.78@gmail.com'),
(4581, 'Central-Kasoa', 'Dzaglico.42@gmail.com'),
(8765, 'Central-Assin', 'Dzaglico.75@gmail.com'),
(9875, 'Eastern-Berekuso', 'Dzaglico.1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD UNIQUE KEY `chassisNo` (`chassisNo`),
  ADD KEY `modelCode` (`modelCode`);

--
-- Indexes for table `carpacking`
--
ALTER TABLE `carpacking`
  ADD UNIQUE KEY `chassisNo` (`chassisNo`),
  ADD UNIQUE KEY `packingID` (`packingID`,`parkinglot`);

--
-- Indexes for table `carsupplierparts`
--
ALTER TABLE `carsupplierparts`
  ADD KEY `empid` (`empid`),
  ADD KEY `supplierPartID` (`supplierPartID`),
  ADD KEY `chassisNo` (`chassisNo`);

--
-- Indexes for table `companystorage`
--
ALTER TABLE `companystorage`
  ADD UNIQUE KEY `storageID` (`storageID`),
  ADD KEY `warehouseID` (`warehouseID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customercar`
--
ALTER TABLE `customercar`
  ADD KEY `chassisNo` (`chassisNo`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `receiptID` (`receiptID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`makeID`),
  ADD UNIQUE KEY `makeName` (`makeName`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD UNIQUE KEY `modelCode` (`modelCode`),
  ADD UNIQUE KEY `series` (`series`),
  ADD KEY `makeID` (`makeID`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD UNIQUE KEY `packingID` (`packingID`),
  ADD KEY `warehouseID` (`warehouseID`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`lotID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`receiptID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `supplierparts`
--
ALTER TABLE `supplierparts`
  ADD UNIQUE KEY `supplierPartID` (`supplierPartID`),
  ADD UNIQUE KEY `lotID` (`lotID`),
  ADD KEY `supplierID` (`supplierID`);

--
-- Indexes for table `supplierpartsstorage`
--
ALTER TABLE `supplierpartsstorage`
  ADD UNIQUE KEY `supplierPartID` (`supplierPartID`),
  ADD KEY `storageID` (`storageID`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouseID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `lotID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supplierparts`
--
ALTER TABLE `supplierparts`
  MODIFY `supplierPartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`modelCode`) REFERENCES `model` (`modelCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carpacking`
--
ALTER TABLE `carpacking`
  ADD CONSTRAINT `carpacking_ibfk_1` FOREIGN KEY (`chassisNo`) REFERENCES `car` (`chassisNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carpacking_ibfk_2` FOREIGN KEY (`packingID`) REFERENCES `packing` (`packingID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carsupplierparts`
--
ALTER TABLE `carsupplierparts`
  ADD CONSTRAINT `carsupplierparts_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carsupplierparts_ibfk_2` FOREIGN KEY (`supplierPartID`) REFERENCES `supplierparts` (`supplierPartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carsupplierparts_ibfk_3` FOREIGN KEY (`chassisNo`) REFERENCES `car` (`chassisNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `companystorage`
--
ALTER TABLE `companystorage`
  ADD CONSTRAINT `companystorage_ibfk_1` FOREIGN KEY (`warehouseID`) REFERENCES `warehouse` (`warehouseID`);

--
-- Constraints for table `customercar`
--
ALTER TABLE `customercar`
  ADD CONSTRAINT `customercar_ibfk_1` FOREIGN KEY (`chassisNo`) REFERENCES `car` (`chassisNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customercar_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customercar_ibfk_3` FOREIGN KEY (`receiptID`) REFERENCES `payment` (`receiptID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`makeID`) REFERENCES `make` (`makeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `packing`
--
ALTER TABLE `packing`
  ADD CONSTRAINT `packing_ibfk_1` FOREIGN KEY (`warehouseID`) REFERENCES `warehouse` (`warehouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplierparts`
--
ALTER TABLE `supplierparts`
  ADD CONSTRAINT `supplierparts_ibfk_1` FOREIGN KEY (`lotID`) REFERENCES `parts` (`lotID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplierparts_ibfk_2` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplierpartsstorage`
--
ALTER TABLE `supplierpartsstorage`
  ADD CONSTRAINT `supplierpartsstorage_ibfk_1` FOREIGN KEY (`supplierPartID`) REFERENCES `supplierparts` (`supplierPartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplierpartsstorage_ibfk_2` FOREIGN KEY (`storageID`) REFERENCES `companystorage` (`storageID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
