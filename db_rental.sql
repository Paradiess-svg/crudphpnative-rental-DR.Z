-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 02:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `merek_mobil` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `foto_mobil` varchar(30) NOT NULL,
  `alamat_pool` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `plat_nomor`, `merek_mobil`, `status`, `foto_mobil`, `alamat_pool`) VALUES
(2, 'B 2344 SAF', 'Mercedes-Benz V-Class', 'Tak Beroprasi', 'B 2344.png', 'Jl. Udayana I A, Cililitan Besar-Halim, RT.8/RW.6, Pulo Gebang, Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13910'),
(3, 'B 2983 TSS', 'Mercedes-Benz E-Class 280', 'Tak Beroprasi', 'B 2983 TSS.png', 'Jl. Gempol 1B No.53, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820'),
(4, 'B 2901 TJA', 'Toyota Fortuner 2.4 V', 'Tak Beroprasi', 'B 2901 TJA.png', 'MVRJ+6XH, Jl. Tanah Merdeka, RT.9/RW.3, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830'),
(5, 'B 2345 TJJ', 'Mitsubishi Pajero Sport Exceed', 'Tak Beroprasi', 'B 2345 TJJ.png', 'MVRJ+6XH, Jl. Tanah Merdeka, RT.9/RW.3, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830'),
(6, 'B 2134 PRH', 'Toyota Innova Zenix Hybrid G', 'Tak Beroprasi', 'B 2134 PRH.png', 'Jl. Raya Mabes Hankam No.45, RT.7/RW.2, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820'),
(7, 'B 2344 SSA', 'Toyota Innova Reborn 2.4 G', 'Tak Beroprasi', 'B 2344 SSA.png', 'Jl. Raya Mabes Hankam No.45, RT.7/RW.2, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
