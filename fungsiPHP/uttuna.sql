-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 08.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uttuna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi` varchar(40) NOT NULL,
  `desk_destinasi` varchar(2000) NOT NULL,
  `foto_destinasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `desk_destinasi`, `foto_destinasi`) VALUES
(1, 'Pantai Berakit', 'Pantai Berakit memukau dengan panorama alamnya yang menakjubkan. Pohon kelapa yang menjulang tinggi di sepanjang pantai menciptakan bayangan sejuk, sementara air laut yang biru dan tenang mengundang para pengunjung untuk berenang atau sekadar bersantai di tepi pantai. Hamparan pasir putih yang bersih dan lembut membuatnya menjadi tempat yang sempurna untuk bersantai atau berjalan-jalan.', 'img/gbr7.jpg'),
(2, 'Pulau Penyengat', 'Pulau Penyengat dikelilingi oleh air laut yang tenang dan jernih dengan pantai berpasir putih yang menyejukkan. Hijaunya pepohonan dan kebun kelapa memberikan bayangan alami yang nyaman bagi para pengunjung yang ingin bersantai di tepi pantai. Pemandangan matahari terbenam di Pulau Penyengat juga menciptakan momen magis yang tak terlupakan.', 'img/gbr19.jpg'),
(3, 'Teluk Selatpanjang', 'Teluk Selatpanjang terkenal dengan keberagaman hayati lautnya yang kaya. Para penyelam dan snorkeler dapat menemukan terumbu karang yang indah, ikan-ikan warna-warni, dan berbagai spesies laut lainnya. Keindahan bawah lautnya menjadikan Teluk Selatpanjang sebagai destinasi unggulan bagi para penggemar aktivitas menyelam.', 'img/gbr20.jpg'),
(4, 'Air Terjun Putri Puyu', 'Air Terjun Putri Puyu terletak di lingkungan pegunungan yang hijau dan sejuk. Pepohonan yang rimbun dan suara gemericik air yang mengalir menciptakan atmosfer yang menenangkan dan menyegarkan. Perjalanan menuju air terjun membawa pengunjung melewati pemandangan alam yang memukau.', 'img/gbr21.jpg'),
(5, 'Pulau Banyak', 'Pulau Banyak terkenal dengan keberagaman hayati lautnya yang kaya. Para penyelam dan snorkeler dapat mengeksplorasi terumbu karang yang indah, yang menjadi rumah bagi berbagai spesies ikan, teripang, dan makhluk laut lainnya. Keindahan bawah laut Pulau Banyak membuatnya menjadi destinasi favorit bagi pecinta aktivitas selam.', 'img/gbr22.jpg'),
(6, 'Pantai Tanjung', 'Pantai Tanjung Natuna adalah tempat wisata pantai yang paling sering dikunjungi masyarakat di wilayah Ranai. Bentuk pantai ini berbelok ke ujung, sehingga dari pantai terlihat Gunung Ranai yang puncaknya kerap ditutupi awan dengan pemandangan pantai yang indah. ', 'img/gbr1.jpg'),
(7, 'Teluk Buton', 'Butuh pemandangan pantai dari tebing tinggi nan indah? Teluk Buton adalah jawabannya, sebuah bukit yang mengarah langsung ke laut lepas yang indah. Teluk Buton memiliki pesisir yang menakjubkan dengan pasir putih dan lembut. Keindahan pantai ini bisa menjadi daya tarik utama untuk bersantai atau berbagai aktivitas pantai. Teluk ini mungkin menjadi rumah bagi keberagaman hayati laut, termasuk terumbu karang yang indah dan berbagai spesies ikan warna-warni. Aktivitas seperti snorkeling dan menyelam bisa menjadi cara yang fantastis untuk menjelajahi keindahan bawah laut.', 'img/gbr2.jpg'),
(8, 'Pantai Selo', 'Pantai Selo bukan hanya sebuah nama pantai biasa, nama selo diambil dari bahasa \"Selow\" sangat cocok buat kamu yang butuh selow and chill. Pantai Selo di Natuna adalah sebuah surga tropis yang memukau pengunjung dengan kecantikan alamnya yang luar biasa. Terletak di tengah-tengah keindahan Kepulauan Natuna, pantai ini menawarkan pengalaman liburan yang unik dan tak terlupakan.', 'img/gbr3.jpg'),
(9, 'Adiwana Resort', 'Adiwana Resort Natuna adalah tempat pelarian yang memesona di tengah gemerlap alam Pulau Natuna. Terletak tepat di tepi pantai dengan hamparan pasir putih yang lembut, resor ini menyajikan pengalaman yang tak terlupakan bagi para tamu yang mencari ketenangan dan keindahan alam yang masih alami. Dengan arsitektur yang harmonis, bangunan-bangunan resor ini menyatu dengan alam sekitarnya. Setiap sudutnya memancarkan aura kemewahan tropis dengan sentuhan tradisional yang khas. Kamar-kamar yang elegan dan nyaman menyediakan pemandangan spektakuler ke samudera biru yang tak berujung atau ke taman-taman hijau yang dikelilingi oleh pepohonan rindang.', 'img/gbr13.jpg'),
(10, 'Pelabuhan Penagi', 'Pelabuhan Penagi, sebuah dermaga yang tersembunyi di antara bukit-bukit yang megah dan hutan yang rimbun, menciptakan gambaran tentang keindahan alam dan misteri yang melingkupinya. Terletak di tepian Teluk Harmoni, pelabuhan ini menyambut kedatangan kapal-kapal dengan dermaga kayu yang mengelilingi air tenang yang cermin. Pemandangan Pelabuhan Penagi dihiasi dengan perahu nelayan berwarna-warni yang terapung di atas permukaan air, menambahkan sentuhan kehidupan pada lanskap yang tenang. Suasana pelabuhan di pagi hari dipenuhi dengan aroma asin angin laut dan cahaya matahari pagi yang memeluk pantai. Beberapa rumah nelayan tradisional dengan atap rumbia menambahkan pesona khas daerah tersebut, menciptakan pemandangan yang memukau.', 'img/gbr14.jpg'),
(11, 'Teluk Depeh', 'Teluk Depeh, suatu keajaiban alam yang tersembunyi di tepian pulau yang eksotis, menggambarkan keindahan tak tergoyahkan dan ketenangan yang menyentuh hati. Dikelilingi oleh pegunungan hijau yang menjulang tinggi dan dikelapisi oleh hutan lebat, teluk ini menjadi persembunyian alam yang sangat berharga. Air laut di Teluk Depeh bersih dan jernih, memberikan tampilan pesona kehidupan bawah laut yang beragam. Terumbu karang yang memukau dan ikan-ikan yang berkilauan bergerak melalui air, menciptakan pemandangan yang memukau bagi yang berani menjelajah kedalaman. Pantai pasir putih yang lembut memeluk bibir teluk, menciptakan tempat ideal untuk bersantai, berjemur di bawah sinar matahari, atau menikmati keindahan matahari terbenam yang luar biasa.', 'img/gbr8.jpg'),
(12, 'Pulau Sahi', 'Sebuah surgawi yang tersembunyi di lautan biru yang tenang, adalah perpaduan sempurna antara keindahan alam tropis dan ketenangan spiritual. Pulau ini muncul di cakrawala seperti permata hijau yang menyala, dikelilingi oleh air laut yang jernih dan dihiasi oleh pantai pasir putih yang bersih. Pohon-pohon kelapa yang menjulang tinggi memberikan naungan yang menyegarkan di sepanjang pantai, menciptakan oase yang ideal untuk bersantai dan melupakan hiruk-pikuk dunia luar. Keberadaan Pulau Sahi dihiasi oleh kehidupan laut yang mempesona, dengan terumbu karang warna-warni dan ikan-ikan eksotis yang menari di bawah permukaan air yang tenang.', 'img/gbr9.jpg'),
(13, 'Natuna Dive Resort', 'Natuna Dive Resort adalah surga bagi para penyelam dan pecinta keindahan bawah laut. Terletak di tepi pantai yang menakjubkan di Pulau Natuna, resort ini menggabungkan kenyamanan dan kemewahan dengan akses mudah ke situs penyelaman yang spektakuler. Kamar-kamar yang elegan dan nyaman menawarkan pemandangan langsung ke laut biru yang memikat, membiarkan para tamu terbangun dengan suasana alam yang menyejukkan. Resort ini tidak hanya menjadi basis ideal untuk penyelaman, tetapi juga menawarkan fasilitas dan layanan yang tak tertandingi. Pusat penyelaman yang profesional menyediakan peralatan lengkap dan panduan ahli untuk memastikan pengalaman penyelaman yang aman dan mengesankan. Setelah sehari penuh berpetualang di bawah laut, para tamu dapat bersantai di tepi kolam renang infinity yang menawarkan pemandangan matahari terbenam yang memukau.', 'img/gbr6.jpg'),
(14, 'Pulau Senoa', 'Pulau Senoa, sebuah surga tersembunyi di tengah-tengah samudra yang tenang, mempesona dengan keindahan alamnya yang menakjubkan dan pesona yang memikat hati. Pulau ini terletak jauh dari hiruk-pikuk perkotaan, menciptakan tempat yang sempurna untuk melarikan diri dari rutinitas sehari-hari. Pesisir pantai Pulau Senoa dihiasi oleh pasir putih yang lembut, sementara air lautnya yang jernih memperlihatkan kekayaan terumbu karang dan kehidupan laut yang berwarna-warni. Hutan hijau yang menjulang di tengah pulau menawarkan petualangan bagi para penjelajah alam. Jalan setapak yang meliuk-liuk membawa pengunjung ke sumber air tawar yang segar dan air terjun yang menyejukkan, menciptakan tempat yang ideal untuk bersantai dan menikmati keindahan alam. Satu-satunya suara yang terdengar adalah nyanyian burung dan desiran angin, memberikan suasana damai yang langka di era modern ini.', 'img/gbr5.jpg'),
(15, 'Batu Kasah', 'Batu Kasah, sebuah pantai yang menakjubkan dengan batu-batu indah yang tersebar di sepanjang garis pantainya, mengundang pengunjung untuk merasakan keajaiban alam yang memukau. Terletak di tepi Samudra Biru yang tenang, pantai ini menampilkan batu-batu besar yang menjulang di antara pasir putih lembut, menciptakan pemandangan yang luar biasa. Batu-batu tersebut memiliki bentuk-bentuk yang unik dan menarik, seperti patung alam yang diciptakan oleh tangan alam. Beberapa batu mungkin memiliki pola-pola alami yang indah, sementara yang lain membentuk gapura-gapura alami yang memberikan kesan mistis. Pantulan sinar matahari yang memantul dari permukaan batu-batu tersebut menciptakan kilauan magis di sepanjang pantai, menciptakan suasana yang menenangkan dan memikat.', 'img/gbr4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` int(4) NOT NULL,
  `jumlah_hari` int(2) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `destinasi1` int(4) DEFAULT NULL,
  `destinasi2` int(4) DEFAULT NULL,
  `destinasi3` int(4) DEFAULT NULL,
  `destinasi4` int(4) DEFAULT NULL,
  `destinasi5` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `jumlah_hari`, `harga_paket`, `destinasi1`, `destinasi2`, `destinasi3`, `destinasi4`, `destinasi5`) VALUES
(1, 3, 4000000, 1, 2, 3, 4, NULL),
(2, 2, 3000000, 4, 5, 6, NULL, NULL),
(3, 5, 5500000, 7, 8, 9, 10, 11),
(4, 4, 4500000, 12, 13, 14, 15, 7),
(5, 3, 2800000, 3, 6, 9, NULL, NULL),
(6, 6, 7800000, 2, 4, 8, 10, 12),
(7, 7, 8000000, 1, 3, 5, 7, 9),
(8, 4, 3700000, 4, 8, 12, 1, NULL),
(9, 5, 4600000, 2, 3, 5, 7, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `fotoprofil_pengguna` varchar(100) NOT NULL,
  `notelp_pengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `email`, `password`, `fotoprofil_pengguna`, `notelp_pengguna`) VALUES
(10, 'admin', 'admin@email.com', '$2y$10$8qA5ZPe8HSWtWGPxrwuFgu.dtv.3Cuiiln27wNJzsncACnBnzqjN2', '', '0812345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `destinasi1` (`destinasi1`),
  ADD KEY `destinasi2` (`destinasi2`),
  ADD KEY `destinasi3` (`destinasi3`),
  ADD KEY `destinasi4` (`destinasi4`),
  ADD KEY `destinasi5` (`destinasi5`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD CONSTRAINT `paket_wisata_ibfk_1` FOREIGN KEY (`destinasi1`) REFERENCES `destinasi` (`id_destinasi`),
  ADD CONSTRAINT `paket_wisata_ibfk_2` FOREIGN KEY (`destinasi2`) REFERENCES `destinasi` (`id_destinasi`),
  ADD CONSTRAINT `paket_wisata_ibfk_3` FOREIGN KEY (`destinasi3`) REFERENCES `destinasi` (`id_destinasi`),
  ADD CONSTRAINT `paket_wisata_ibfk_4` FOREIGN KEY (`destinasi4`) REFERENCES `destinasi` (`id_destinasi`),
  ADD CONSTRAINT `paket_wisata_ibfk_5` FOREIGN KEY (`destinasi5`) REFERENCES `destinasi` (`id_destinasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
