-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 07:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `kode_baju` varchar(100) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` char(100) NOT NULL,
  `k_id` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`kode_baju`, `paket`, `deskripsi`, `file`, `k_id`, `harga`) VALUES
('1', 'Naruto Kyuubi v325', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna  : Hitam<br>\r\nLengan : Pendek\r\n', 'naruto1.jpg', 1, 110000),
('10', 'Bleach v60', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Putih<br>\r\nLengan : Pendek', 'bleach3.jpg', 3, 110000),
('11', 'Naruto Kyuubi Mode', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Kuning<br>\r\nLengan : Panjang', 'jn1.jpg', 4, 150000),
('12', 'Sasuke Uchiha', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Abu-Abu, Biru<br>\r\nLengan : Panjang', 'jn2.jpg', 4, 150000),
('13', 'Uzumaki Sage Mode', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Abu-abu<br>\r\nLengan : Panjang', 'jn3.png', 4, 150000),
('14', 'Luffy Mad', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Panjang', 'jo1.jpg', 5, 150000),
('15', 'Trafalgar Law', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Kuning<br>\r\nLengan : Panjang', 'jo2.jpg', 5, 150000),
('16', 'Marinir v12', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Biru, Putih<br>\r\nLengan : Panjang', 'jo3.jpg', 5, 150000),
('17', 'Kemeja Modern v19', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Pendek', 'k1.jpg', 6, 130000),
('18', 'Kemeja v17', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam, Putih<br>\r\nLengan : Pendek', 'k2.jpg', 6, 130000),
('2', 'Sasuke Uchiha vRinnegan', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna  : Hitam, dan Coklat<br>\r\nLengan : Pendek', 'naruto2.jpg', 1, 115000),
('3', 'Orochimaru vWar', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam <br>\r\nLengan : Pendek', 'naruto3.png', 1, 115000),
('4', 'Uchiha Itachi vMangekyu', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Panjang', 'naruto4.jpg', 1, 120000),
('5', 'One Peace v23', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Panjang', 'op1.jpg', 2, 120000),
('6', 'Sanji vCigarette', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Pendek', 'op2.jpg', 2, 115000),
('7', 'Luffy vLuccy', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Pendek', 'op3.jpg', 2, 115000),
('8', 'Bleach v44', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Hitam<br>\r\nLengan : Pendek', 'bleach1.jpg', 3, 110000),
('9', 'Bleach v51', 'Ukuran : S,L,XL,dan XXL<br>\r\nWarna : Putih<br>\r\nLengan : Pendek', 'bleach2.jpg', 3, 110000);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `content`, `menu`) VALUES
('1', 'Selamat Datang di tokoAnime.com', '<table width="650" border="0" cellspacing="10" class=''isi''>\r\n  <tr>\r\n    <td width="281"><p><img src="baru/toko.jpg" width="270" height="238"></p>    </td>\r\n    <td width="364" valign="top"> <div align="justify">\r\n      <p>Selamat datang di Toko Jual Beli Baju Anime Online. Kami Menyediakan berbagai baju dengan tokoh anime favorite Anda dengan berbagai jenis dan ukuran, yang sesuai dengan kebutuhan anda. Dengan harga terjangkau dan layanan pesan-antar yang Cepat dan Mudah.</p>\r\n      <p>Produk baju  yang kami sediakan dengan beberapa jenis dan semua bentuk ukuran, memiliki kualitas  dan mutu terbaik. Dibuat langsung dari tokoAnime production yang tidak perlu lagi diragukan ketangguhannya. </p>\r\n      <p>Kunjungi Kantor Pemasaran Kami, di jalan H.E.A Mokodompit no. 74 Kendari. Anda akan mendapatkan kualitas baju yang terbaik dengan harga bersaing. </p>\r\n    </div></td>\r\n  </tr>\r\n</table>\r\n\r\n', 'home'),
('2', 'About Us', '<br>\r\n<table width="600" border="0" cellspacing="10" class=''isi''>\r\n  <tr>\r\n    <td width="272" valign="top"><img src="baru/maxresdefault.jpg" width="272" height="200"></td>\r\n    <td width="373" valign="top"> <div align="justify">\r\n      <p>Design dan karakter Anime yang kami sediakan dapat disesuaikan dengan keinginan anda. Nampak pada gambar disamping ini adalah design jaket keren dan modern dengan ukuran L. Bentuk dan ukuran yang sesuai akan memastikan kenyamanan Anda saat mengenakannya. Hal ini disebabkan karena kain yang digunakan sangat lembut dan halus serta memiliki kualitas terbaik dikelasnya dengan harga bersaing. </p>\r\n    </div></td>\r\n  </tr>\r\n  <tr>\r\n    <td valign="top"><div align="justify">Temukan baju dengan karakter anime favorite Anda, sesuai dengan anggaran keuangan anda. Anda bisa tentukan sendiri design baju dan warna yang Anda inginkan. Kami yang akan wujudkan sesuai dengan impian anda. Kenyamanan dan kepuasan anda itulah tujuan kami.</div></td>\r\n    <td valign="top"><img src="baru/qwerty.png" width="300" height="200"></td>\r\n  </tr>\r\n</table>\r\n', 'about'),
('3', 'How To Buy', '<table width="620" border="0" cellspacing="10" class=''isi''>\r\n  <tr>\r\n    <td height="156"><p><img src="12140189_809191142533831_6985044772658801292_o.jpg" width="620" height="199"></p>     </td>\r\n  </tr>\r\n  <tr>\r\n    <td><p>Di bawah ini kami jelaskan cara pemesan baju anime yang anda inginkan.</p>\r\n      <ul>\r\n        <li>Anda bisa menghubungi kami, setelah melakukan pemesanan atau order secara online </li>\r\n        <li>Setelah anda terdaftar di data customer kami, maka anda akan kami hubungi melalui telpon, mengenai kelengkapan data yang harus anda siapkan. Seperti alamat rumah lengkap, nomor telepon dll.</li>\r\n        <li>Selanjutnya anda dapat membayar uang terlebih dahulu, selanjutnya kami akan langsung antarkan pesanan Anda ke alamat yang telah Anda daftarkan. </li>\r\n        <li>Selain cara di atas, Anda juga bisa membayar biayanya 2x, yaitu uang muka 30% dari harga nominal lalu setelah pesanan Anda di antarkan barulah Anda harus membayar sisanya sebesar 70%. Hal ini kami lakukan untuk menjaga kepercayaan Anda terhadap toko kami. </li>\r\n    </ul></td>\r\n  </tr>\r\n</table>\r\n', 'how');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kode_cust` int(11) NOT NULL,
  `nama_cust` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `kota` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `telpon` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `via` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kode_cust`, `nama_cust`, `alamat`, `email`, `kota`, `telpon`, `via`) VALUES
(8, 'muazharin alfan', 'St. H.E.A Mokodompit,Kambu', 'alfanmuazharin@gmail.com', 'Kendari', '+6282243309590', 'JNE'),
(9, 'muazharin alfan', 'St. H.E.A Mokodompit,Kambu', 'alfanmuazharin@gmail.com', 'Kendari', '+6282243309590', 'JNE'),
(10, 'muazharin alfan', 'St. H.E.A Mokodompit,Kambu', 'alfanmuazharin@gmail.com', 'Kendari', '+6282243309590', 'TIKI');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `nama` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`nama`, `perusahaan`, `email`, `alamat`) VALUES
('xxx', 'xxx', 'xxx', 'xxx'),
('qwe', 'qwe', 'qwe', 'qweqweqwe'),
('qwe', 'qwe', 'qwe', 'qweqweqwe'),
('Muazharin Alfan', 'tokoAnime.azurewebsites.com', 'Muazharin.Alfan@studentpartner.com', 'Jl. H.E.A Mokodompit, lr. Anawai, Asrama Cigarillos Kamar no.2'),
('Muazharin Alfan', 'tokoAnime.azurewebsites.com', 'Muazharin.Alfan@studentpartner.com', 'Jl. H.E.A Mokodompit, lr. Anawai, Asrama Cigarillos Kamar no.2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('1', 'Kaos Naruto'),
('2', 'Kaos One Peace'),
('3', 'Kaos Bleach'),
('4', 'Jaket Naruto'),
('5', 'Jaket One Peace'),
('6', 'Kemeja');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id_temp` bigint(11) DEFAULT NULL,
  `kode_baju` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id_temp`, `kode_baju`, `jumlah`) VALUES
(123, 1, 2),
(161211153737, 1, 1),
(161212001719, 2, 1),
(161212001719, 3, 1),
(161212172745, 1, 1),
(161213045000, 1, 1),
(161213084749, 1, 1),
(161214061607, 1, 1),
(161214071014, 1, 1),
(161214165255, 1, 1),
(161215091714, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `kode_baju` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kode_cust` int(11) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'belum lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_baju`, `jumlah`, `kode_cust`, `status`) VALUES
(161212001719, 14, 1, 8, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'muazharin', '31b4a664e66092f7f6d8a5e3efe35327');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`kode_baju`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_cust`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `kode_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
