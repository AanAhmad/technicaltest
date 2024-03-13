-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 02:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `distance` int(55) NOT NULL,
  `cost` int(55) NOT NULL,
  `aprv1_id` int(11) DEFAULT NULL,
  `aprv2_id` int(11) DEFAULT NULL,
  `aprv1_status` varchar(55) DEFAULT NULL,
  `aprv2_status` varchar(55) DEFAULT NULL,
  `aprv1_note` varchar(255) DEFAULT NULL,
  `aprv2_note` varchar(255) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL,
  `booking_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `vehicle_id`, `driver_id`, `distance`, `cost`, `aprv1_id`, `aprv2_id`, `aprv1_status`, `aprv2_status`, `aprv1_note`, `aprv2_note`, `status`, `booking_created`) VALUES
(1, 4, 3, 250, 1000000, 8, 9, 'Ditolak', 'Setuju', 'Saya tolak', 'Saya setuju', 'Ditolak', '2024-03-12 00:52:52'),
(2, 2, 2, 120, 300000, 9, 7, 'Setuju', 'Setuju', 'Saya setuju', 'Saya setuju', 'Disetujui', '2024-03-12 00:53:30'),
(3, 7, 9, 350, 1300000, 10, 8, 'Setuju', 'Setuju', 'Saya setuju', 'Saya setuju', 'Disetujui', '2024-03-12 00:53:59'),
(4, 3, 5, 570, 2900000, 10, 6, 'Setuju', 'Setuju', 'Saya setuju', 'Saya setuju', 'Disetujui', '2024-03-12 00:54:45'),
(5, 1, 1, 40, 200000, 6, 7, 'Setuju', 'Setuju', 'Saya setuju', 'Saya setuju', 'Disetujui', '2024-03-12 00:55:50'),
(6, 6, 8, 340, 1200000, 7, 6, 'Ditolak', 'Setuju', 'Saya tolak', 'Saya setuju', 'Ditolak', '2024-03-12 00:57:09'),
(7, 8, 4, 235, 1260000, 10, 9, 'Setuju', 'Ditolak', 'Saya setuju', 'Saya tolak', 'Ditolak', '2024-03-12 00:57:53'),
(8, 2, 8, 329, 1300000, 8, 7, 'Ditolak', 'Setuju', 'Saya tolak', 'Saya setuju', 'Ditolak', '2024-03-12 00:58:54'),
(9, 5, 1, 35, 100000, 9, 7, 'Setuju', 'Ditolak', 'Saya setuju', 'Saya tolak', 'Ditolak', '2024-03-12 01:03:15'),
(10, 2, 7, 240, 800000, 6, 10, 'Ditolak', 'Setuju', 'Saya tolak', 'Saya setuju', 'Ditolak', '2024-03-12 01:03:52'),
(11, 4, 6, 120, 500000, 8, 9, 'Setuju', 'Setuju', 'Saya setuju', 'Saya setuju', 'Disetujui', '2024-03-12 01:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `driver_name` varchar(55) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `license_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `phone`, `email`, `license_number`) VALUES
(1, 'Maman Waluyo', '(+62) 670 9868 3861', 'samosir.luis@gmail.co.id', 2147483647),
(2, 'Samsul Pradipta', '(+62) 546 9395 653', 'lailasari.bakda@yahoo.com', 2147483647),
(3, 'Empluk Waskita', '025 6307 8244', 'aurora61@gmail.co.id', 2147483647),
(4, 'Nyana Hidayat', '(+62) 201 2296 9063', 'titi.yulianti@salahudin.net', 2147483647),
(5, 'Ian Widodo', '0413 7452 995', 'devi76@yuliarti.in', 2147483647),
(6, 'Kenari Saefullah', '(+62) 221 6112 2803', 'padmasari.lutfan@gmail.co.id', 2147483647),
(7, 'Asmuni Mahendra', '0513 2837 5067', 'wahyu28@gmail.com', 2147483647),
(8, 'Purwadi Firmansyah ', '0312 9217 8433', 'johan66@gmail.co.id', 2147483647),
(9, 'Gilang Marpaung', '(+62) 787 4424 5116', 'iyolanda@yahoo.com', 2147483647),
(10, 'Slamet Wibowo', '0665 8286 4869', 'yuniar.nadine@yahoo.co.id', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fuel_id` int(11) NOT NULL,
  `fuel_name` varchar(255) NOT NULL,
  `fuel_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuel_id`, `fuel_name`, `fuel_price`) VALUES
(1, 'Pertalite', 10000),
(2, 'Pertamina Dex', 15100),
(3, 'Pertamax', 12950);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `department`, `username`, `password`, `role`) VALUES
(5, 'Oskar Prasetya', 'Administrasi', 'admin', 'admin', 'admin'),
(6, 'Raharja Anggriawan', 'Direktur Operasional', 'rahaan', 'rahaan', 'user'),
(7, 'Genta Hassanah', 'Manajer Logistik', 'gentah', 'gentah', 'user'),
(8, 'Wardi Manullang', 'Kepala Transportasi', 'wardimang', 'wardimang', 'user'),
(9, 'Rama Mansur', 'Petugas Pengadaan Kendaraan', 'ramamasur', 'ramamasur', 'user'),
(10, 'Lasmanto Kurniawan', 'Kepala Teknisi', 'lasmanan', 'lasmanan', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fuel_id` int(11) DEFAULT NULL,
  `fuel_consumption` int(55) NOT NULL,
  `last_service` date NOT NULL,
  `next_service` date NOT NULL,
  `owner` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_name`, `manufacturer`, `type`, `fuel_id`, `fuel_consumption`, `last_service`, `next_service`, `owner`) VALUES
(1, 'Hino Dutro Dump 130 HD X-Power', 'Hino Motors', 'Truck', 1, 9, '2024-03-08', '2024-03-13', 'Perusahaan'),
(2, 'Mitsubishi Colt FE SHD', 'Mitsubishi Motors', 'Truck', 1, 8, '2024-03-09', '2024-03-18', 'Perusahaan'),
(3, 'Isuzu ELF (N Series) 6 Wheel', 'Isuzu Motors', 'Truck', 1, 11, '2024-03-01', '2024-03-12', 'Rental'),
(4, 'Mitsubishi Xpander', 'Mitsubishi Motors', 'MPV', 1, 12, '2024-03-01', '2024-03-12', 'Perusahaan'),
(5, 'Toyota Avanza', 'Toyota Motor', 'MPV', 1, 11, '2024-03-02', '2024-03-13', 'Perusahaan'),
(6, 'Suzuki Ertiga', 'Suzuki Motor', 'MPV', 3, 18, '2024-03-09', '2024-03-22', 'Perusahaan'),
(7, 'Mercedes Benz A-Class Sedan', 'Mercedes-Benz', 'Sedan', 3, 14, '2024-03-08', '2024-03-16', 'Perusahaan'),
(8, 'Honda BRV', 'Honda Motor', 'SUV', 1, 16, '2024-03-06', '2024-03-17', 'Perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `vehicle_id` (`vehicle_id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `approve_1` (`aprv1_id`,`aprv2_id`),
  ADD KEY `aprv2_id` (`aprv2_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `fuel_id` (`fuel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fuel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`aprv1_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`aprv2_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`fuel_id`) REFERENCES `fuel` (`fuel_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
