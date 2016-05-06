-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: May 06, 2016 at 06:15 PM
=======
-- Generation Time: May 06, 2016 at 01:53 PM
>>>>>>> 06e4df39c548b8bfaf2d2cb549231d570853ecb6
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okb     `
--
CREATE DATABASE IF NOT EXISTS `okb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `okb`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `JUDUL`, `META_TAG`, `META_DESC`, `META_KEYWORD`, `ISI`, `ID_KATEGORI`, `ID_TAG`, `FILE`, `DATE_CREATED`, `CREATED_BY`) VALUES
(1, 'Game Pachinko “Suisei no Gargantia” Ditampilkan Dalam Video', 'Game Pachinko', 'Game Pachinko', 'Game Pachinko', 'Anime yang bertemakan science-fiction adventure ini diproduksi oleh Production I.G. Cerita Suisei no Gargantia dimulai dari masa depan, di mana Human Galactic Alliance terus menerus berperang melawan alien. Dalam peperangan tersebut, seorang anak muda bernama Ledo dan unitnya yang diberi nama Chamber tiba-tiba tersedot ke dalam distorsi ruang dan waktu.  Dari distorsi tersebut, Ledo sampai ke Bumi, sebuah planet yang telah lama dilupakan. Planet Bumi sepenuhnya tertutup air, orang-orang tinggal di atas kapal, dan mengambil relik dari bawah laut sebagai mata pencaharian utama.  Ledo tiba di sebuah kota kapal raksasa bernama Gargantia. Dengan ditemani seorang gadis berumur 15 tahun yang bernama Amy, perlahan Ledo mulai membuka diri karena Ledo tidak mengetahui apa-apa kecuali berperang. Perlahan tapi pasti, Ledo menemukan hal-hal yang mengejutkannya dari yang selama ini dijalaninya.', 2, 1, 'contoh1.jpg', '2016-04-01', 'yazid'),
(2, 'Serunya Berburu Mainan Dalam The Jakarta Toys & Comics Fair 2016', 'Jakarta Toys & Comic', 'Jakarta Toys & Comics Fair 2016', 'Jakarta Toys & Comic', 'Tidak ada event yang lebih ditunggu oleh para kolektor mainan di Jakarta atau bahkan Indonesia selain acara yang satu ini. Menjadi salah satu acara pagelaran mainan terbesar di Indonesia, ribuan kolektor sukses memadati Balai Kartini di akhir minggu kemarin untuk berburu mainan-mainan incaran mereka.   THE JAKARTA TOYS & COMICS FAIR 2016 kembali hadir di tahun ke-12nya. Setelah sukses menarik lebih dari 24 ribu orang pengunjung di tahun 2015 lalu. Kini, ajang berkumpulnya para peminat mainan dan komik yang diadakan di Balai Kartini Jakarta tanggal 5-6 Maret 2016 tersebut yakin dapat menembus angka kunjungan higga 25 ribu orang.Tahun ini, acara yang diselenggarakan oleh SACCA Production akan menyuguhkan 250 gerai peserta pameran mulai dari para kolektor, komunitas hobi, distributor, games retails, hingga supplier skala internasional. Tak hanya menyuguhkan koleksi dan aksi cosplay, THE JAKARTA 12th TOYS & COMICS FAIR 2016 juga akan dipadati oleh area LEGO untuk dunia BRICKS-nya yang menyajikan diorama LEGO dari beragam versi dan tipe yang mendapat dukungan dari LEGOLAND Malaysia.  Promotor dari acara ini, SACCA Production, Riza Satyagraha mengatakan bahwa ajang ini selalu berupaya memberikan kesegaran dan kebaruan industri kreatif mainan dan komik di Indonesia. “Acara yang bertaraf internasional ini menjadi pemicu semangat kreator-kreator lokal agar berani tampil menuangkan karya mereka sehingga industri kreatif anak negeri bisa terus bersaing secara kualitas di skala internasional.”Ratusan cosplay bernuansa Resident Evil 6, Star Wars, Bima-X, Gundam, Zaku, Final Fantasy tak pernah sepi dari peminat dan bahkan jumlahnya kian bertambah tiap tahunnya. Belum lagi, kehadiran tamu spesial Miss Kiara Kirameki, bintang cosplay dari Australia yang akan beraksi di atas panggung. Tidak lupa mampirnya bintang laga terkenal Indonesia yang sukses di layar teater dunia dalam film Star Wars Episode VII: The Force Awakens dan The Raid, Yayan Ruhiyan di acara Meet & Greet.  Serta lelang mainan langka dari Zerotoys yang dipastikan mampu mencuri perhatian ribuan pengunjung selama dua hari pameran. Peluang hobi inilah yang melandasi Riza untuk terus konsisten mengadakan ajang tahunan ini hingga penyelenggaraan ke 12 kalinya.  “Partisipan kami pun kian bertambah tiap tahunnya. Untuk saat ini kami kedatangan partisipan mancanegara dari Amerika, Eropa, Filipina, Jepang, Malaysia, Singapura, Thailand, dan juga dari dalam negeri yang tidak kalah bagusnya seperti Jakarta, Bandung, Yogyakarta, Semarang, Surabaya, Bali, Makassar, Medan. Mereka bersemangat mengikuti ragam arena games untuk merebut hadiah spesial.”“Ajang ini jadi arena bagi produsen dan distributor untuk memperkenalkan produk baru, baik yang masih dalam bentuk prototype maupun yang baru dirilis di pasaran. Para pemburu harga spesial dari cuci gudang atau lelang juga menjadi sasaran kami,” tutup Riza yang juga penghobi Star Wars ini.', 2, 2, 'contoh2.jpg', '2016-04-14', 'yazid'),
(3, 'Toko Bento di Tokyo Mulai Menjual Bento Halal', 'Toko Bento', 'Toko Bento', 'Toko Bento', 'Seperti yang sudah diberitakan sebelumnya, pemerintah Jepang memang sedang menggalakkan standar halal untuk mengantisipasi lonjakan turis muslim yang datang ke Jepang. Karena itu kamu dapat menemui beberapa restoran yang saat ini menyediakan makanan halal, seperti misalnya ramen halal ini. Namun tidak terbatas kepada makanan, entah kenapa mereka juga menyediakan kosmetik dengan sertifikasi halal.Namun bagaimana bila kamu adalah seseorang yang sedang bekerja, perlu makanan cepat saji, dan tidak punya waktu untuk makan di restoran? Jawabannya adalah bento halal yang disediakan oleh toko bento Zenmai cabang Minamitsuro di Tokyo Station ini.Toko ini sebenarnya sudah buka sejak jam 6 pagi, namun sayang mereka baru mulai menjual bento halal pada pukul 10 pagi. Sayang kamu tidak bisa membeli bento saat sedang pergi ke kantor dan harus minta izin bos bila kamu benar-benar kebelet ingin memakan bento halal tersebut.', 5, 3, 'contoh3.jpg', '2016-04-17', 'yazid'),
(4, 'Belajar Coding Jadi Lebih Moe Dengan ‘Code Girl Collection’', 'game', 'game', 'game', 'Hari ini, mari kita tambah lagi daftar moefikasi dari Jepang yang sudah sangat panjang. Namun, moefikasi kali ini sepertinya jauh lebih bermanfaat. Berikut ini adalah Code Girl Collection, sebuah browser game moe yang menggabungkan pelajaran coding bersama dengan gadis-gadis moe. Game ini mengajarkan para pemain dasar-dasar dari Ruby dan PHP, dan berencana memasukkan kurikulum Phyton pada para pemain di bulan Juni 2016.\r\n\r\nBrowser game ini dibuat oleh sebuah perusahaan bernama Paiza. Dalam game ini, pemain menjadi seseorang yang hilang ingatan dan terdampar di dunia virtual. Dibantu oleh Lilia, pemain mencoba untuk kembali ke dunia asli. Dengan menyelesaikan pelajaran-pelajaran programming yang diberikan, pemain dapat membuka bonus-bonus menarik seperti kartu “Code Girl” yang didapat dari Gachapon. Duh gacha lagi. Tingkat kesulitan game ini juga akan bertambah seiring dengan masalah-masalah yang kamu pecahkan.\r\n\r\nJadi, kapan lagi kamu dapat bermain game moe sambil belajar tentang coding? Saya yakin kalau kamu bermain game yang satu ini kamu tidak akan dimarahi oleh orang tua, hitung-hitung sekalian belajar programming kan?', 2, 0, '69380791b0c75a21e3db662686eeba12.jpg', '2016-04-30', ''),
(5, 'Baju Renang Yang Terinspirasi Pakaian Dalam, Fashion Baru di Jepang', 'unique', 'unique', 'unique', 'Tentu, hanya di Jepang yang fashion-nya terus berubah-ubah seperti ingin selalu yang terdepan dalam segala hal. Tidak terkecuali dalam hal baju renang yang kali ini diinspirasi oleh pakaian dalam! Apalagi di Jepang, musim panas sudah hampir tiba, jadi sudah sepantasnya mereka menyiapkan baju renang untuk bersiap-siap mendinginkan tubuh di kolam renang atau pantai.\r\n\r\nPerusahaan pakaian Jepang, Yume Tenbo, baru saja memperlihatkan koleksi pakaian renang baru mereka. Disebut dengan nama Dear My Love Collection, koleksi terbaru tersebut memperlihatkan desain pakaian renang yang terinspirasi dari pakaian dalam dan camisole.\r\nBanyak kaum Adam yang suka kebingungan mengapa wanita malu memakai pakaian dalam, tapi bangga saat memakai pakaian renang. Mungkin pakaian renang baru ini dapat menghapus batas antara pakaian dalam dan pakaian renang.\r\n\r\nSetiap set akan dihargai 5.900 Yen atau sekitar 720 ribu Rupiah, dan terdapat dalam ukuran medium dan large. Yume Tenbo berkata, para pemakainya akan merasa “seperti putri raja dari kisah dongeng yang cantik dan dicintai selamanya.”\r\n\r\nSaya sendiri tidak tahu apakah benar pakaian renang ini akan terlihat seperti itu bagi para pemakainya. Kalaupun jadi putri kerajaan, rasanya putri-putri kerajaan yang saya lihat bajunya lebih rapi daripada ini. Tapi mungkin, menurutmu pakaian renang ini cocok dikenakan putri kerajaan? Who knows.', 4, 0, 'f6e8b4556307793a320766a5860eb606.jpg', '2016-04-30', 'yazid'),
(6, 'Drama Live-Action ‘The Idolm@ster’ Korea Akan Ditayangkan ke Seluruh Dunia', 'event', 'event', 'event', 'Seperti yang sudah kamu ketahui, seri iDOLM@STER akan mendapatkan sebuah drama adaptasi live-action di Korea, dan untuk sementara akan bertajuk iDOLM@STER.Kr. Baru saja, drama tersebut menguak lebih banyak detil mengenai serinya kepada publik.\r\n\r\nDalam sebuah wawancara dengan situs berita Korea Selatan, Hankyung, seorang juru bicara untuk seri tersebut yang bernama Son Il Hyeong mengumumkan kalau iDOLM@STER Korea tersebut mencari 15 orang idol. Pelamar harus seorang wanita, berumur antara 16-26 tahun, dan memiliki bakat di bidang tarian, tarik suara, akting, dan masih banyak lagi. Bagi para pelamar dari luar negeri, setidaknya mereka harus bisa berkomunikasi dan berakting seperti orang Korea.\r\n\r\nIl Hyeong juga menyatakan keterkejutan para staf saat menerima banyaknya lamaran dari calon idol internasional. Dalam seri iDOLM@STER memang ada beberapa idol dari luar negeri, seperti Anastasia dalam seri Cinderella Girls. Dia juga mengatakan kalau mereka menggelar audisi di Jepang, tempat lahirnya iDOLM@STER. Juga karena iDOLM@STER adalah sebuah franchise global, dia menyatakan kalau drama ini akan ditayangkan secara global.\r\n\r\nMereka yang berhasil melewati seleksi akan maju ke tahap pertama voting oleh publik, yang akan digelar pada tanggal 29 April sampai 4 Mei 2016. Setelah itu akan diadakan sebuah ronde audisi lagi sebelum akhirnya mencapai audisi final yang akan dilaksanakan pada bulan Juni. Mereka yang terpilih akan kemudian menjalani pelatihan intensif selama 3 bulan, dengan shooting yang pada rencananya akan dimulai bulan September. Drama ini ditargetkan untuk ditayangkan pada paruh pertama tahun 2017.\r\n\r\nSayangnya, karakter dari game dan anime Cinderella Girls tidak akan menjadi bagian dari proyek Korea Selatan ini. Jadi saya tidak bisa melihat Fumika versi live-action, sayang sekali.\r\n\r\nSumber: Sgcafe', 3, 0, '9c9753f59144261c0ddf97d972697888.jpg', '2016-04-29', 'yazid'),
(7, 'Anime Under The Dog Menunjukkan Tanggal Main Melalui Promo Video', 'anime', 'anime', 'anime', 'Situs resmi untuk proyek anime yang dilakukan penggalangan dana melalui Kickstarter, Under The Dog, mulai menampilkan video promosi untuk anime tersebut pada hari Kamis lalu. Video tersebut menunjukkan tanggal rilis digitalnya untuk para backers proyek Kickstarter anime ini. Berikut adalah cuplikan klipnya.\r\n\r\nWalau para staf berupaya untuk merilisnya pada bulan Mei, Kinema Citrus berkata “perlu sedikit waktu lebih untuk menciptakan sebuah episode yang ingin dilihat oleh para backers di Under The Dog“. Para staf akan memberikan informasi lebih lanjut tentang jadwal pemberian hadiah kepada yang telah berpartisipasi di kemudian hari.\r\n\r\nPara staf juga memberitahu bahwa mereka akan menghadiri acara Otakon Convention yang akan diadakan di Baltimore pada tanggal 12 sampai 14 Agustus mendatang.\r\n\r\n\r\nProyek ini berupaya untuk membawa tradisi anime bertemakan science-fiction zaman dahulu seperti Akira dan Ghost In The Shell. Tim produksi menggunakan platform Kickstarter untuk menghindari pembiayaan dari komite produksi sehingga dapat mempertahankan kontrol kreativitas anime tersebut. Proyek tersebut telah memenuhi persyaratan minimal sebesar 580 ribu Dolar Amerika pada September 2014 lalu dan akhirnya mendapatkan 878,028 Dolar Amerika.\r\n\r\nMasahiro Ando (Hana-Saku Iroha) akan meyutradarai anime yang terinspirasi dari cerita karya Jirou Ishii (produser Nine Hours, Nine Person, Nine Doors). Yuusuke Kozaki (Fire Emblem: Awakening) akan melakukan desain karakter, Kinema Citrus akan bertanggung jawab di animasi, dan Orange Co. (Ghost in the Shell Arise) akan bertanggung jawab untuk 3D CGI.\r\n\r\nKinema Citrus juga akan menangani proyek ini setelah kepergian pendiri dan CEO dari Creative Intelligence Arts (CIA), Hiroaki Yura, sang sutradara awal.', 1, 0, 'c7845c61a37c5c195d1f05f37009c9d9.jpg', '2016-04-30', 'yazid');

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

INSERT INTO `kategori` (`ID_KATEGORI`, `NAMA`, `DESC`) VALUES
(1, 'Anime', 'Anime, Cosplay dan Manga'),
(2, 'Game', 'Game'),
(3, 'Event', 'Event'),
(4, 'Movie & Unique', 'Movie & Unique'),
(5, 'Food', 'food');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ID_ROLE` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_ROLE`),
  KEY `ID_ROLE` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID_ROLE`, `NAME`, `DESCRIPTION`) VALUES
(1, 'super admin', ''),
(2, 'admin', 'Update Artikel'),
(3, 'user', 'Login, comment, subscribe');

=======
>>>>>>> 06e4df39c548b8bfaf2d2cb549231d570853ecb6
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
  `ID_BERLANGGANAN` int(11) DEFAULT NULL,
  `DATA_CREATED` date NOT NULL,
  `CREATED_BY` varchar(20) NOT NULL,
  `ID_ROLE` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`ID_USER`),
  KEY `ID_BERLANGGANAN` (`ID_BERLANGGANAN`),
  KEY `ID_ROLE` (`ID_ROLE`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
<<<<<<< HEAD
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID_BERLANGGANAN`) REFERENCES `tabel_berlangganan` (`ID_BERLANGGANAN`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID_BERLANGGANAN`) REFERENCES `tabel_berlangganan` (`ID_BERLANGGANAN`);
>>>>>>> 06e4df39c548b8bfaf2d2cb549231d570853ecb6

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
