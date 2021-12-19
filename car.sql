-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 12:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bayu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `harga_mobil` int(11) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `penumpang` int(11) NOT NULL,
  `transmisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `harga_mobil`, `des`, `image`, `penumpang`, `transmisi`) VALUES
(1, 'TOYOTA AVANZA', 350, 'Our favourite ! very practical and comfortable car. Hire favourite car in Bali like “Toyota Avanza” car make your journeys safer with increased visibility and wider illumination. A comfortable journey awaits your family including a dual blower air-conditioner , enhanced sound insulation and spacious storage areas. Toyota Avanza provide a secure ride for your family. We recommend it to all visitors planning long journey.\r\n\r\n', 'image/avanza-small.jpg', 6, 'Otomatis'),
(2, 'TOYOTA ALPHARD', 1500, 'The Alphard was produced by Toyota with full electrical component features and complete comfort and safety features. The Alphard is Toyota’s best selling MPV in Japan , it’s a luxury car. Really comfort car and fix max 8 people . The 2.4 litre gasoline engine has been developed specifically for use in Toyota’s.', 'image/alphard-small.jpg', 7, 'Otomatis'),
(3, 'DAIHATSU AYLA', 250, 'Ayla is a common feminine given name in Turkish, in that language it means \"halo of light around the moon\". The car was announced and showed at the 2012 Indonesia International Motor Show as Toyota and Daihatsu\'s answer to the Indonesia government\'s plan for the LCGC . Daihatsu Ayla has dual airbags and available with a choice of an automatic or 5 speed manual transmission.\r\n\r\n', 'image/ayla-small.jpg', 5, 'Otomatis'),
(4, 'HONDA BRIO', 300, 'The Honda Brio is a city car produced by Honda and sold in India, Thailand, south Africa , Indonesia and the Philippines. The car was introduced in 2011. It has 1.2 liter engine means had enough power in their class of city car and got 5 doors hatchback car.\r\n\r\n', 'image/brio-small.jpg', 5, 'Otomatis'),
(5, 'TOYOTA CALYA', 300, 'Toyota calya also called Daihatsu Sigra, is a Mpv type car designed by Daihatsu and jointly produced by Astra Daihatsu Motor and Toyota Astra Motor in Indonesia since 2016. This car uses 1.2 liter engine and both had the same condition in their performs. Twins Bali Cheap Cars will allowed you to make reservation for Toyota Calya as they had smooth suspension and really comfort for your travelling in Bali.\r\n\r\n', 'image/calya-small.jpg', 6, 'Otomatis'),
(6, 'SUZUKI ERTIGA', 350, 'Designed to carry 7 people maximum, in 3 row seats layout. The best car to rent family trip . Suzuki Ertiga ensures no one is left behind, the smart design of Ertiga enables the creation of a cabin which offers comfort and space in every row. The versatility provided by different passenger and luggage combinations make the Ertiga ideal for everythings from a shopping spree t a family road trip.\r\n\r\n', 'image/ertiga-small.jpg', 7, 'Otomatis'),
(7, 'SUZUKI APV', 250, 'Suzuki APV is a family car type has become the main choice of most big city in Indonesia, because it’s safe in fuel consumptions. Suzuki APV family cars type has capacity of 7 passengers , supported with 1.500 cc engine design minimalist interior that makes the cabin has more bigger than Toyota Avanza space. The Suzuki APV may be moderately sized but thanks to some innovative design its big on storage space.\r\n\r\n', 'image/apv.jpg', 7, 'Otomatis'),
(8, 'TOYOTA INNOVA', 450, 'Toyota Innova is best seller car rental in Bali since Innova is ultimately complete , luxury , power , comfort & driving safety, VVT-I engine tech for optimum performance, fuel efficiency & euro-2, door child safety lock, double blower AC.\r\n\r\n', 'image/innova-small.jpg', 7, 'Otomatis'),
(9, 'HONDA JAZZ ', 450, 'Jazz was first imported from Japan , after the released the Jazz was an instant success and became the best selling car in Indonesia. It was offered in only one trim with the 1.5 i-DSI engine mated to either a 5-speed manual or a CVT transmission. The fuel efficiency of the station wagon and its hybrid variant was enhanced to be the same as that reducing engine friction. Continously variable transmission is the only transmission available for FWD models. Its a city car and quiped for max 5 people and really comfortable car ever. The Honda Jazz is manufactured completely knocked down ( CKD ).', 'image/jazz-small.jpg', 5, 'Otomatis'),
(13, 'TOYOTA GR SUPRA', 2500, 'mobil keren', 'image/bea10193f0f0a300ee8658c016ba9cf2.png', 2, 'Otomatis');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`username`, `password`, `nama`, `no_hp`, `email`, `alamat`) VALUES
('bayu', '123', 'bayu', '085678', 'bayu@tirta.com', 'samping upn'),
('putra', '123', 'putra bagas', '08888888', 'putra@bagas.com', 'deket jogja');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pem` int(11) NOT NULL,
  `useremail` varchar(30) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pem`, `useremail`, `id_mobil`, `fromdate`, `todate`, `message`, `status`, `username`) VALUES
(1, 'baa@gmail.com', 1, '2019-11-18', '2019-11-19', 'yayayayya', 2, 'bayu'),
(5, 'kasdkmasd', 2, '2019-11-28', '2019-11-29', 'naskmd', 1, 'bayu'),
(6, 'putrabagas261@gmail.com', 1, '2019-11-27', '2019-11-28', 'minjam dulu bro', 1, 'bayu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
