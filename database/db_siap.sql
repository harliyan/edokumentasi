-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2019 at 10:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siap`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_doc_file`
--

CREATE TABLE `tb_doc_file` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gambar_tumbnail` varchar(255) NOT NULL,
  `path_file` varchar(255) NOT NULL,
  `ekstensi_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doc_file`
--

INSERT INTO `tb_doc_file` (`id`, `date`, `judul`, `caption`, `gambar_tumbnail`, `path_file`, `ekstensi_file`) VALUES
(13, '2019-07-19 01:23:31', 'Desain untuk kecamatan', 'Desain untuk kecamatan', '1.jpeg', 'print.pdf', 'pdf'),
(14, '2019-07-25 01:21:30', 'Desain untuk puskesmas', 'Desain untuk puskesmas', 'foto1.jpeg', 'aa.pdf', 'ai'),
(15, '2019-07-19 01:19:33', 'Desain untuk kecamatan Barat', 'Desain untuk kecamatan Barat', '21.jpeg', '2.jpeg', 'jpeg'),
(16, '2019-07-25 01:21:35', 'Desain untuk kecamatan Selatan', 'Desain untuk kecamatan Selatan', 'foto13.jpeg', 'foto12.jpeg', 'cdr'),
(17, '2019-07-25 01:21:39', 'Desain untuk kecamatan', 'Desain untuk kecamatan', '1.jpeg', 'print.pdf', 'png'),
(18, '2019-07-25 01:21:44', 'Desain untuk kecamatan', 'Desain untuk kecamatan', '1.jpeg', 'print.pdf', 'doc'),
(19, '2019-07-29 01:05:41', '1', '1', '1.jpg', 'art.jpg', 'jpg'),
(21, '2019-07-29 01:08:36', '2', '3', '2.jpeg', 'foto1.jpeg', 'cdr'),
(23, '2019-07-29 01:16:25', '22', '22', '21.jpeg', 'Format_Permohonan_Rekomendasi_Pelaksanaan_Investasi_TIK.doc', 'jpg'),
(24, '2019-07-29 01:18:57', '321', '321', 'isian-Kueioner-2-PeGI_Kota_Pekalongan2012.odt', 'List_of_ICT_Regulation.ods', 'raw'),
(25, '2019-07-29 01:19:58', '555', '555', '22.jpeg', '', 'cat'),
(26, '2019-07-29 01:21:40', '777', '777', 'IMG_8163.jpg', '', 'jpg'),
(27, '2019-07-29 01:24:09', 'rr', 'rr', '23.jpeg', 'lightbox2-master.zip', 'jpg'),
(28, '2019-07-29 01:50:20', 'dd', 'dd', 'OLO2ED0.jpg', 'OLO2ED1.psd', 'psd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doc_foto`
--

CREATE TABLE `tb_doc_foto` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_type` varchar(255) NOT NULL,
  `image_size_str` varchar(255) NOT NULL,
  `google_photo_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doc_foto`
--

INSERT INTO `tb_doc_foto` (`id`, `date`, `judul`, `caption`, `image_name`, `image_type`, `image_size_str`, `google_photo_link`) VALUES
(3, '2019-08-12 06:34:22', '1. Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'berita3.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(4, '2019-08-12 07:49:36', '2. Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita4.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(6, '2019-08-12 07:49:41', '3. Peraturan Walikota Tentang PK5 Bakal Direvisi', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita5.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(9, '2019-08-12 07:49:46', '4. Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'berita1.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(17, '2019-08-12 07:49:53', '5. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(18, '2019-08-12 06:34:33', '6. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(19, '2019-08-12 07:14:41', '7. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(20, '2019-08-12 07:50:00', '8. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(21, '2019-09-24 02:16:49', 'Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(22, '2019-08-12 07:50:12', '10. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(23, '2019-08-12 07:50:17', '11. kfhsje', '2', '1.jpg', 'jpeg', 'width=\"1600\" height=\"1119\"', '3'),
(24, '2019-08-12 07:14:48', '12. harusnya ini yang pertama', '132', 'berita_201907240105411.jpeg', 'jpeg', 'width=\"1280\" height=\"960\"', '12333'),
(25, '2019-08-12 06:34:22', '1. Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'berita3.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(26, '2019-08-12 07:49:36', '2. Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita4.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(27, '2019-08-12 07:49:41', '3. Peraturan Walikota Tentang PK5 Bakal Direvisi', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita5.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(28, '2019-08-12 07:49:46', '4. Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'berita1.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(29, '2019-08-12 07:49:53', '5. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(30, '2019-08-12 06:34:33', '6. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(31, '2019-08-12 07:14:41', '7. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(32, '2019-08-12 07:50:00', '8. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(33, '2019-09-24 02:16:34', 'Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(37, '2019-08-12 06:34:22', '1. Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'berita3.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(38, '2019-08-12 07:49:36', '2. Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita4.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(39, '2019-08-12 07:49:41', '3. Peraturan Walikota Tentang PK5 Bakal Direvisi', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita5.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(40, '2019-08-12 07:49:46', '4. Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'berita1.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(41, '2019-08-12 07:49:53', '5. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(42, '2019-08-12 06:34:33', '6. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(43, '2019-08-12 07:14:41', '7. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(44, '2019-08-12 07:50:00', '8. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(45, '2019-08-12 07:50:06', '9. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(46, '2019-08-12 07:50:12', '10. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(47, '2019-08-12 07:50:17', '11. kfhsje', '2', '1.jpg', 'jpeg', 'width=\"1600\" height=\"1119\"', '3'),
(48, '2019-08-12 07:14:48', '12. harusnya ini yang pertama', '132', 'berita_201907240105411.jpeg', 'jpeg', 'width=\"1280\" height=\"960\"', '12333'),
(49, '2019-08-12 06:34:22', '1. Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong\r\n', 'berita3.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(50, '2019-08-12 07:49:36', '2. Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita4.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(51, '2019-08-12 07:49:41', '3. Peraturan Walikota Tentang PK5 Bakal Direvisi', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'berita5.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(52, '2019-08-12 07:49:46', '4. Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'berita1.jpeg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(53, '2019-08-12 07:49:53', '5. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(54, '2019-08-12 06:34:33', '6. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(55, '2019-08-12 07:14:41', '7. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(56, '2019-08-12 07:50:00', '8. H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021. ', '22.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB'),
(57, '2019-10-29 01:29:59', '9. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa ', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto12.jpeg', 'jpeg', 'width=\"1280\" height=\"853\"', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doc_sambutan`
--

CREATE TABLE `tb_doc_sambutan` (
  `id` int(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `judul` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `path_sambutan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doc_sambutan`
--

INSERT INTO `tb_doc_sambutan` (`id`, `date`, `judul`, `caption`, `path_sambutan`) VALUES
(2, '2019-07-19 01:11:54.461766', 'Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'aa.pdf'),
(4, '2019-07-19 01:12:11.959452', 'H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021.', 'sambutan.pdf'),
(5, '2019-07-19 01:16:04.059149', 'Jaring Aspirasi Untuk Pembangunan, Pemkot Gelar Dialog Keumatan', 'Kota Pekalongan- Guna Pembangunan Kota yang lebih baik, Pemerintah Kota Pekalongan menggelar \"Dialog Keumatan\" yang dihadiri dari lintas tokoh agama, Sabtu (6/4) di Guest House.', 'print.pdf'),
(6, '2019-07-19 01:13:32.085284', 'Wakil Wali Kota Silaturahmi dengan Pegawai Sekretariat', 'Pekalongan – Setelah resmi dilantik menjadi Wakil Walikota Pekalongan sisa masa jabatan 2016-2021, H. Achmad Afzan Arslan Djunaid mengunjungi sejumlah unit kerja di lingkungan Sekretariat Daerah Kota Pekalongan, Senin (15/4).', 'sambutan1.pdf'),
(7, '2019-07-19 01:14:55.397509', 'Lomba Tumpeng Mini & Fashion Show Meriahkan Hari Kartini', 'Kota Pekalongan- Dalam rangka memperingati hari kartini ke 140, Dharma Wanita Persatuan (DWP) Sekretariat Daerah (Setda) Kota Pekalongan menggelar lomba tumpeng mini dan fashion show,', 'aa1.pdf'),
(8, '2019-07-19 01:15:14.064824', 'Wakil Wali Kota Silaturahmi dengan Pegawai Sekretariat', 'Pekalongan – Setelah resmi dilantik menjadi Wakil Walikota Pekalongan sisa masa jabatan 2016-2021, H. Achmad Afzan Arslan Djunaid mengunjungi sejumlah unit kerja di lingkungan Sekretariat Daerah Kota Pekalongan, Senin (15/4).', 'aa2.pdf'),
(9, '2019-07-25 01:18:21.296267', 'Wakil Wali Kota Silaturahmi dengan Pegawai Sekretariat', 'Pekalongan – Setelah resmi dilantik menjadi Wakil Walikota Pekalongan sisa masa jabatan 2016-2021, H. Achmad Afzan Arslan Djunaid mengunjungi sejumlah unit kerja di lingkungan Sekretariat Daerah Kota Pekalongan, Senin (15/4).', 'sambutan1.pdf'),
(10, '2019-07-25 01:18:22.390003', 'Wakil Wali Kota Silaturahmi dengan Pegawai Sekretariat', 'Pekalongan – Setelah resmi dilantik menjadi Wakil Walikota Pekalongan sisa masa jabatan 2016-2021, H. Achmad Afzan Arslan Djunaid mengunjungi sejumlah unit kerja di lingkungan Sekretariat Daerah Kota Pekalongan, Senin (15/4).', 'sambutan1.pdf'),
(11, '2019-07-25 01:19:48.616435', 'Lomba Tumpeng Mini & Fashion Show Meriahkan Hari Kartini', 'Kota Pekalongan- Dalam rangka memperingati hari kartini ke 140, Dharma Wanita Persatuan (DWP) Sekretariat Daerah (Setda) Kota Pekalongan menggelar lomba tumpeng mini dan fashion show,', 'aa1.pdf'),
(12, '2019-07-25 01:19:50.562479', 'Lomba Tumpeng Mini & Fashion Show Meriahkan Hari Kartini', 'Kota Pekalongan- Dalam rangka memperingati hari kartini ke 140, Dharma Wanita Persatuan (DWP) Sekretariat Daerah (Setda) Kota Pekalongan menggelar lomba tumpeng mini dan fashion show,', 'aa1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doc_video`
--

CREATE TABLE `tb_doc_video` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gambar_tumbnail` varchar(255) NOT NULL,
  `link_youtube` text NOT NULL,
  `embed_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doc_video`
--

INSERT INTO `tb_doc_video` (`id`, `date`, `judul`, `caption`, `gambar_tumbnail`, `link_youtube`, `embed_link`) VALUES
(1, '2019-08-02 01:02:14', 'Presiden RI Ir. Joko Widodo Belanja Batik di Grosir Setono Pekalongan', 'Walikota Pekalongan H.M Saelany Machfudz, SE dampingi Presiden RI Ir. Joko Widodo berkunjung dan belanja batik di Pasar Grosir Batik Setono, kamis (22/11) kemarin.', 'yt1.png', 'https://www.youtube.com/watch?v=Mgb-Kyb8wO8', 'https://www.youtube.com/embed/Mgb-Kyb8wO8'),
(2, '2019-08-02 01:04:18', 'Walikota Pekalongan Tinjau Proyek Program \"KOTAKU\" di Kelurahan Krapyak', 'Walikota Pekalongan Tinjau Proyek Program \"KOTAKU\"\r\ndi Kelurahan Krapyak', 'yt3.png', 'https://www.youtube.com/watch?v=EvTuRxjwUdA', 'https://www.youtube.com/embed/EvTuRxjwUdA'),
(3, '2019-08-07 02:49:59', 'Walikota Pekalongan SIDAK Keliling Kantor Dinas Usai Lubur Panjang Lebaran', 'Walikota Pekalongan SIDAK Keliling Kantor Dinas Usai Lubur Panjang Lebaran', 'yt2.png', 'https://www.youtube.com/watch?v=-MzVTn1G8hg', 'https://www.youtube.com/embed/-MzVTn1G8hg'),
(4, '2019-07-15 01:34:48', 'Presiden RI Ir. Joko Widodo Belanja Batik di Grosir Setono Pekalongan', 'Walikota Pekalongan H.M Saelany Machfudz, SE dampingi Presiden RI Ir. Joko Widodo berkunjung dan belanja batik di Pasar Grosir Batik Setono, kamis (22/11) kemarin.', 'yt1.png', 'https://www.youtube.com/watch?v=-MzVTn1G8hg', ''),
(6, '2019-07-19 01:07:43', 'Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto11.jpeg', 'https://www.youtube.com/channel/UCfs4U9SM6I8HLUb9zK1RmpQ', ''),
(7, '2019-07-19 01:08:52', 'H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021.', '21.jpeg', 'https://www.youtube.com/watch?v=Mgb-Kyb8wO8', ''),
(8, '2019-07-25 01:12:53', 'H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021.', '21.jpeg', 'https://www.youtube.com/watch?v=Mgb-Kyb8wO8', ''),
(9, '2019-07-25 01:12:54', 'H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'Kota Pekalongan - H. Achmad Afzan Arslan Djunaid resmi dilantik gubernur Jawa Tengah menjadi Wakil Walikota terpilih sisa masa jabatan 2016-2021.', '21.jpeg', 'https://www.youtube.com/watch?v=Mgb-Kyb8wO8', ''),
(10, '2019-07-25 01:13:45', 'Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'Pekalongan- Pemerintah Kota Pekalongan menggelar Apel luar biasa di hari pertama masuk kerja Wakil Walikota Pekalongan H. Achmad Afzan Arslan Djunaid, Senin (15/4) Di lapangan Setda Setempat.', 'foto11.jpeg', 'https://www.youtube.com/channel/UCfs4U9SM6I8HLUb9zK1RmpQ', ''),
(11, '2019-07-25 09:23:27', '111', '111', 'berita_20190724010541.jpeg', '111', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_record_file`
--

CREATE TABLE `tb_record_file` (
  `id_record` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `path_file` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_record_file`
--

INSERT INTO `tb_record_file` (`id_record`, `id`, `judul`, `path_file`, `nik`) VALUES
(31, '13', 'Desain untuk kecamatan', 'print.pdf', '335685645686565');

-- --------------------------------------------------------

--
-- Table structure for table `tb_record_foto`
--

CREATE TABLE `tb_record_foto` (
  `id_record` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `google_photo_link` text NOT NULL,
  `nik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_record_foto`
--

INSERT INTO `tb_record_foto` (`id_record`, `id`, `judul`, `google_photo_link`, `nik`) VALUES
(44, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '3356556826545666'),
(45, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '123123'),
(46, '19', 'H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', 'aaaa'),
(47, '19', 'H. Achmad Afzan Arslan Djunaid Resmi Dilantik Menjadi Wakil Walikota', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '1'),
(48, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '444444444444444444444444'),
(49, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '444444444444444444444444'),
(50, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '12333'),
(51, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '44'),
(52, '3', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '66'),
(53, '57', '9. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '111111'),
(54, '57', '9. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '1111111111111111'),
(55, '57', '9. Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'https://photos.google.com/share/AF1QipM31G2h6U0dzrZhWuhHocJOeYsHJw37UPnB--V-DbhaW6eNJEMvfK8uePN5DWYIow?key=LXViY1NmYUtWZllsaGlWQmxXMFNFYVV6SU54bXFB', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_record_sambutan`
--

CREATE TABLE `tb_record_sambutan` (
  `id_record` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `path_sambutan` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_record_sambutan`
--

INSERT INTO `tb_record_sambutan` (`id_record`, `id`, `judul`, `path_sambutan`, `nik`) VALUES
(8, '2', 'Hari Pertama Wakil Walikota Kerja, Pemkot Gelar Apel Luar Biasa', 'aa.pdf', '335685645686565');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `privilege`, `bagian`) VALUES
(1, 'super', '8451ba8a14d79753d34cb33b51ba46b4b025eb81', 'superadmin', 'superadmin'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin'),
(11, 'ojo', '2db9e0c6245289507aa81e344d0c23dc798eb26f', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_doc_file`
--
ALTER TABLE `tb_doc_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_doc_foto`
--
ALTER TABLE `tb_doc_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_doc_sambutan`
--
ALTER TABLE `tb_doc_sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_doc_video`
--
ALTER TABLE `tb_doc_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_record_file`
--
ALTER TABLE `tb_record_file`
  ADD PRIMARY KEY (`id_record`);

--
-- Indexes for table `tb_record_foto`
--
ALTER TABLE `tb_record_foto`
  ADD PRIMARY KEY (`id_record`);

--
-- Indexes for table `tb_record_sambutan`
--
ALTER TABLE `tb_record_sambutan`
  ADD PRIMARY KEY (`id_record`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_doc_file`
--
ALTER TABLE `tb_doc_file`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_doc_foto`
--
ALTER TABLE `tb_doc_foto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_doc_sambutan`
--
ALTER TABLE `tb_doc_sambutan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_doc_video`
--
ALTER TABLE `tb_doc_video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_record_file`
--
ALTER TABLE `tb_record_file`
  MODIFY `id_record` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_record_foto`
--
ALTER TABLE `tb_record_foto`
  MODIFY `id_record` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_record_sambutan`
--
ALTER TABLE `tb_record_sambutan`
  MODIFY `id_record` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
