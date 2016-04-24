-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2016 at 12:25 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL AUTO_INCREMENT,
  `JUDUL` varchar(200) NOT NULL,
  `META_TAG` varchar(20) NOT NULL,
  `META_DESC` varchar(200) NOT NULL,
  `META_KEYWORD` varchar(20) NOT NULL,
  `ISI` varchar(5000) NOT NULL,
  `ID_KATEGORI` int(10) NOT NULL,
  `ID_TAG` int(10) NOT NULL,
  `FILE` varchar(50) NOT NULL,
  `DATE_CREATED` date NOT NULL,
  `CREATED_BY` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_ARTIKEL`),
  KEY `ID_KATEGORI` (`ID_KATEGORI`),
  KEY `ID_TAG` (`ID_TAG`),
  KEY `ID_ARTIKEL` (`ID_ARTIKEL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `JUDUL`, `META_TAG`, `META_DESC`, `META_KEYWORD`, `ISI`, `ID_KATEGORI`, `ID_TAG`, `FILE`, `DATE_CREATED`, `CREATED_BY`) VALUES
(1, 'Game Pachinko “Suisei no Gargantia” Ditampilkan Dalam Video', 'Game Pachinko', 'Game Pachinko', 'Game Pachinko', 'Anime yang bertemakan science-fiction adventure ini diproduksi oleh Production I.G. Cerita Suisei no Gargantia dimulai dari masa depan, di mana Human Galactic Alliance terus menerus berperang melawan alien. Dalam peperangan tersebut, seorang anak muda bernama Ledo dan unitnya yang diberi nama Chamber tiba-tiba tersedot ke dalam distorsi ruang dan waktu.  Dari distorsi tersebut, Ledo sampai ke Bumi, sebuah planet yang telah lama dilupakan. Planet Bumi sepenuhnya tertutup air, orang-orang tinggal di atas kapal, dan mengambil relik dari bawah laut sebagai mata pencaharian utama.  Ledo tiba di sebuah kota kapal raksasa bernama Gargantia. Dengan ditemani seorang gadis berumur 15 tahun yang bernama Amy, perlahan Ledo mulai membuka diri karena Ledo tidak mengetahui apa-apa kecuali berperang. Perlahan tapi pasti, Ledo menemukan hal-hal yang mengejutkannya dari yang selama ini dijalaninya.', 1, 1, 'contoh1.jpg', '2016-04-01', 'yazid'),
(2, 'Serunya Berburu Mainan Dalam The Jakarta Toys & Comics Fair 2016', 'Jakarta Toys & Comic', 'Jakarta Toys & Comics Fair 2016', 'Jakarta Toys & Comic', 'Tidak ada event yang lebih ditunggu oleh para kolektor mainan di Jakarta atau bahkan Indonesia selain acara yang satu ini. Menjadi salah satu acara pagelaran mainan terbesar di Indonesia, ribuan kolektor sukses memadati Balai Kartini di akhir minggu kemarin untuk berburu mainan-mainan incaran mereka.   THE JAKARTA TOYS & COMICS FAIR 2016 kembali hadir di tahun ke-12nya. Setelah sukses menarik lebih dari 24 ribu orang pengunjung di tahun 2015 lalu. Kini, ajang berkumpulnya para peminat mainan dan komik yang diadakan di Balai Kartini Jakarta tanggal 5-6 Maret 2016 tersebut yakin dapat menembus angka kunjungan higga 25 ribu orang.Tahun ini, acara yang diselenggarakan oleh SACCA Production akan menyuguhkan 250 gerai peserta pameran mulai dari para kolektor, komunitas hobi, distributor, games retails, hingga supplier skala internasional. Tak hanya menyuguhkan koleksi dan aksi cosplay, THE JAKARTA 12th TOYS & COMICS FAIR 2016 juga akan dipadati oleh area LEGO untuk dunia BRICKS-nya yang menyajikan diorama LEGO dari beragam versi dan tipe yang mendapat dukungan dari LEGOLAND Malaysia.  Promotor dari acara ini, SACCA Production, Riza Satyagraha mengatakan bahwa ajang ini selalu berupaya memberikan kesegaran dan kebaruan industri kreatif mainan dan komik di Indonesia. “Acara yang bertaraf internasional ini menjadi pemicu semangat kreator-kreator lokal agar berani tampil menuangkan karya mereka sehingga industri kreatif anak negeri bisa terus bersaing secara kualitas di skala internasional.”Ratusan cosplay bernuansa Resident Evil 6, Star Wars, Bima-X, Gundam, Zaku, Final Fantasy tak pernah sepi dari peminat dan bahkan jumlahnya kian bertambah tiap tahunnya. Belum lagi, kehadiran tamu spesial Miss Kiara Kirameki, bintang cosplay dari Australia yang akan beraksi di atas panggung. Tidak lupa mampirnya bintang laga terkenal Indonesia yang sukses di layar teater dunia dalam film Star Wars Episode VII: The Force Awakens dan The Raid, Yayan Ruhiyan di acara Meet & Greet.  Serta lelang mainan langka dari Zerotoys yang dipastikan mampu mencuri perhatian ribuan pengunjung selama dua hari pameran. Peluang hobi inilah yang melandasi Riza untuk terus konsisten mengadakan ajang tahunan ini hingga penyelenggaraan ke 12 kalinya.  “Partisipan kami pun kian bertambah tiap tahunnya. Untuk saat ini kami kedatangan partisipan mancanegara dari Amerika, Eropa, Filipina, Jepang, Malaysia, Singapura, Thailand, dan juga dari dalam negeri yang tidak kalah bagusnya seperti Jakarta, Bandung, Yogyakarta, Semarang, Surabaya, Bali, Makassar, Medan. Mereka bersemangat mengikuti ragam arena games untuk merebut hadiah spesial.”“Ajang ini jadi arena bagi produsen dan distributor untuk memperkenalkan produk baru, baik yang masih dalam bentuk prototype maupun yang baru dirilis di pasaran. Para pemburu harga spesial dari cuci gudang atau lelang juga menjadi sasaran kami,” tutup Riza yang juga penghobi Star Wars ini.', 2, 2, 'contoh2.jpg', '2016-04-14', 'yazid'),
(3, 'Toko Bento di Tokyo Mulai Menjual Bento Halal', 'Toko Bento', 'Toko Bento', 'Toko Bento', 'Seperti yang sudah diberitakan sebelumnya, pemerintah Jepang memang sedang menggalakkan standar halal untuk mengantisipasi lonjakan turis muslim yang datang ke Jepang. Karena itu kamu dapat menemui beberapa restoran yang saat ini menyediakan makanan halal, seperti misalnya ramen halal ini. Namun tidak terbatas kepada makanan, entah kenapa mereka juga menyediakan kosmetik dengan sertifikasi halal.Namun bagaimana bila kamu adalah seseorang yang sedang bekerja, perlu makanan cepat saji, dan tidak punya waktu untuk makan di restoran? Jawabannya adalah bento halal yang disediakan oleh toko bento Zenmai cabang Minamitsuro di Tokyo Station ini.Toko ini sebenarnya sudah buka sejak jam 6 pagi, namun sayang mereka baru mulai menjual bento halal pada pukul 10 pagi. Sayang kamu tidak bisa membeli bento saat sedang pergi ke kantor dan harus minta izin bos bila kamu benar-benar kebelet ingin memakan bento halal tersebut.', 1, 3, 'contoh3.jpg', '2016-04-17', 'yazid');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_kategori`
--

CREATE TABLE IF NOT EXISTS `artikel_kategori` (
  `ID_ARTIKEL_KATEGORI` int(11) NOT NULL,
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_KATEGORI` int(11) NOT NULL,
  PRIMARY KEY (`ID_ARTIKEL_KATEGORI`),
  KEY `ID_ARTIKEL` (`ID_ARTIKEL`),
  KEY `ID_KATEGORI` (`ID_KATEGORI`),
  KEY `ID_ARTIKEL_KATEGORI` (`ID_ARTIKEL_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel_kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `artikel_tag`
--

CREATE TABLE IF NOT EXISTS `artikel_tag` (
  `ID_ARTIKEL_TAG` int(11) NOT NULL,
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_TAG` int(11) NOT NULL,
  PRIMARY KEY (`ID_ARTIKEL_TAG`),
  KEY `ID_ARTIKEL_TAG` (`ID_ARTIKEL_TAG`),
  KEY `ID_ARTIKEL` (`ID_ARTIKEL`),
  KEY `ID_TAG` (`ID_TAG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel_tag`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `DESC` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_KATEGORI`),
  KEY `ID_KATEGORI` (`ID_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ID_ROLE` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DESC` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_ROLE`),
  KEY `ID_ROLE` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_berlangganan`
--

CREATE TABLE IF NOT EXISTS `tabel_berlangganan` (
  `ID_BERLANGGANAN` int(10) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(50) NOT NULL,
  `DATA_CREATED` date NOT NULL,
  `CREATED_BY` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_BERLANGGANAN`),
  KEY `ID_BERLANGGANAN` (`ID_BERLANGGANAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tabel_berlangganan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `ID_TAG` int(11) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `DESC` int(200) NOT NULL,
  PRIMARY KEY (`ID_TAG`),
  KEY `ID_TAG` (`ID_TAG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(10) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `ID_BERLANGGANAN` int(11) NOT NULL,
  `DATA_CREATED` date NOT NULL,
  `CREATED_BY` varchar(20) NOT NULL,
  `ID_ROLE` int(11) NOT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `ID_BERLANGGANAN` (`ID_BERLANGGANAN`),
  KEY `ID_ROLE` (`ID_ROLE`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `ID_USER_ROLE` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_ROLE` int(11) NOT NULL,
  PRIMARY KEY (`ID_USER_ROLE`),
  KEY `ID_USER_ROLE` (`ID_USER_ROLE`),
  KEY `ID_USER` (`ID_USER`),
  KEY `ID_ROLE` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  ADD CONSTRAINT `artikel_kategori_ibfk_1` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_kategori_ibfk_2` FOREIGN KEY (`ID_ARTIKEL`) REFERENCES `artikel` (`ID_ARTIKEL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artikel_tag`
--
ALTER TABLE `artikel_tag`
  ADD CONSTRAINT `artikel_tag_ibfk_1` FOREIGN KEY (`ID_TAG`) REFERENCES `tag` (`ID_TAG`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_tag_ibfk_2` FOREIGN KEY (`ID_ARTIKEL`) REFERENCES `artikel` (`ID_ARTIKEL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID_BERLANGGANAN`) REFERENCES `tabel_berlangganan` (`ID_BERLANGGANAN`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`) ON DELETE CASCADE ON UPDATE CASCADE;
