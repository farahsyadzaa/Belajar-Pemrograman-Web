-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 01:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thisismyserum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_serum`
--

CREATE TABLE `tb_serum` (
  `id_srm` int(11) NOT NULL,
  `nama_srm` varchar(255) NOT NULL,
  `merk_srm` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_serum`
--

INSERT INTO `tb_serum` (`id_srm`, `nama_srm`, `merk_srm`, `keterangan`, `kategori`, `gambar`) VALUES
(2, 'Snail Truecica\r\nMiracle Repair Serum', 'Some by Mi', 'Benefits:\r\nA dual functional product: Whitening + Anti-wrinkle.\r\nContains 890,000ppm of Snail Truecica™ which consists of Black Snail Extract and Truecica™.\r\n\r\nHelps for skin regeneration to repair skin damage with Black Snail Extract.\r\n\r\nSoothes skin and reinforces skin barrier with Truecica™.\r\nRemoves blemishes and scar with a non-sticky finish.\r\nFree of 20 harmful ingredients. Passes skin irritation test', 'Oily Skin', 'somebymi.jpg'),
(3, 'Vitamin C-Serum', 'Votre Peau', 'Hydrate , Protect , Brighten , Tighten', 'Dry Skin', 'votrepeau.jpeg'),
(4, 'Salicylic Acid 2% Solution', 'The Ordinary', 'The Ordinary Salicylic Acid 2% Solution dapat membantu membersihkan pori-pori yang dapat menghambat pertumbuhan jerawat. Memiliki fungsi exfoliation sehingga kulit menjadi lebih bersih dan cerah apabila digunakan secara berkelanjutan. Dapat digunakan pada pagi dan malam hari. Tidak dianjurkan untuk kulit yang sensitif atau sedang dalam proses peeling.\r\n\r\nHow to Use:\r\nAplikasikan pada bagian wajah yang berjerawat atau dapat juga digunakan pada seluruh wajah secara merata. Hindari penggunaan pada area sekitar mata.\r\n\r\nSuitable for:\r\nBlemish-Prone Skin\r\n\r\nIngredients\r\nAqua (Water), Hamamelis Virginiana Leaf Water, Cocamidopropyl Dimethylamine, Salicylic Acid, Dimethyl Isosorbide, Trisodium Ethylenediamine Disuccinate, Citric Acid, Polysorbate 20, Hydroxyethylcellulose, Ethoxydiglycol, Potassium Sorbate, Sodium Benzoate, 1,2-hexanediol, Caprylyl Glycol.', 'Combination Skin', 'theordinary.jpg'),
(13, 'Green Tea Seed Serum', 'Innisfree', 'New Formulation  Serum kaya nutrisi dari perasan daun dan biji teh hijau Jeju untuk kulit wajah yang terjaga kelembapannya dari dalam.  1. Energi green tea memberikan kelembapan dan nutrisi mendalam dengan 100% perasaan green tea segar. Kaya akan mineral dan amino acids dari 100% ekstrak perasan daun green tea Jeju yang memberikan kelembapan pada kulit  2. Teknologi moisturizer ganda dari perasan green tea segar dan green tea seed oil Green tea seed oil yang memberikan kelembapan mendalam bagi kulit juga membentuk lapisan pelembap ganda yang menjaga dan melindungi kadar kelembapan kulit yang lebih tahan lama.  3. Serum tahap pertama setelah membersihkan wajah untuk menjaga kelembapan kulit. Serum tahap pertama setelah mencuci muka untuk mengembalikan kelembapan kulit yang hilang akibat penggunaan cleansing foam.  Cara penggunaan:  Aplikasikan produk ke seluruh wajah dan leher dengan pijatan lembut untuk membantu proses penyerapan.  Komposisi: Beauty Green Tea from Jeju hanya untuk kulit  innisfree No.1 Green ', 'Dry Skin', 'innisfree1.jpg'),
(14, 'Niacinamide + Moisture Beet Serum', 'Somethinc', 'Somethinc Niacinamide + Moisture Beet Serum merupakan serum yang diformulasikan untuk mengatasi kulit kusam dan lelah. Mengandung Niacinamide yang dapat memperkuat lapisan perlindungan kulit dengan memproduksi Ceramide, Beetroot yang dapat menangkal radikal bebas dan melembapkan kulit. Selain itu, juga berfungsi untuk mencerahkan dan menyamarkan noda hitam pada kulit, meningkatkan tekstur kulit, mengatasi kemerahan, dan mencegah jerawat.  How to Use: Tuangkan 5-10 tetes serum pada telapak tangan. Aplikasikan pada seluruh wajah secara merata.  Suitable for: Kulit lelah, kulit kusam  Ingredients: Aqua, Allantoin, edta, Niacinamide, hydroxyethylcellulose, glycerin, butylene glycol, fructooligosaccharides, Beta Vulgaris Toot Extract(beet) , Phenoxyethanol.', 'Oily Skin', 'somethinc1.jpg'),
(15, 'Fresh Herb Origin Serum', 'NACIFIC', 'Natural Pacific Fresh Herb Origin Serum mengandung berbagai bahan alami yang dapat memberikan banyak manfaat pada kulit. Diperkaya dengan antioksidan, serum ini dapat meningkatkan elastisitas kulit, mencegah munculnya keriput, menyeimbangkan produksi minyak, memberikan kelembapan dan meratakan warna kulit. Dilengkapi dengan Aloe Vera yang dapat memberikan efek menenangkan bagi kulit. Memiliki formula yang mudah menyerap dan meninggalkan tingling sensation setelah diaplikasikan.  How to Use: Kocok produk sebelum digunakan. Usapkan produk secukupnya ke seluruh wajah secara merata. Gunakan pada pagi dan malam hari untuk hasil yang optimal.  Suitable for: Semua jenis kulit  Ingredients: Aloe Barbadensis Leaf Water, Aspalathus Linearis Extract, Glycerin, Helianthus Annuus Seed Oil, Hydrogenated palm oil,Simmondsia Chinensis Seed Oil, Punica Granatum Fruit Extract, Ficus Carica Fruit Extract, Morus Alba Fruit Extract, Ginkgo Biloba Nut Extract, Hippophae Rhamnoides Oil, Argania spinosa Kernel Oil, Camellia Sinensis Leaf Extract, Vitis Vinifera Fruit Extract, Citrus Aurantium Dulcis Fruit Extract, Pyrus Malus Fruit Extract, Lemon Fruit Extract, Citrus Aurantifolia Fruit Extract, Citric Acid, Aminobutyric acid, Zanthoxylum Piperitum Fruit Extract, Pulsatilla Koreana Extract, Usnea Barbata Extract, Sodium chloride, Tocopheryl Acetate, Adenosine', 'Combination Skin', 'nacific1.jpg'),
(16, 'Radiant Skin Serum', 'ElsheSkin', 'Serum yang mengandung Whitening Agent yang dapat mengurangi produksi melanin, membantu mencerahkan, dan mengurangi noda hitam pada kulit', 'Oily Skin', 'elsheskin4.jpg'),
(17, 'Lightening Facial Serum', 'Wardah', 'Wardah Lightening Facial Serum adalah serum wajah dengan kandungan Vitamin B3 untuk mencerahkan kulit kusam dan menghilangkan noda hitam pada wajah. Diperkaya dengan kandungan Vitamin E sebagai antioksidan untuk memperbaiki kerusakan kulit akibat radikal bebas. Kandungan Vitamin E, ekstra lidah buaya dan Hyaluronic Acid untuk menjaga kelembaban kulit.  How To Use: Aplikasikan pada wajah yang telah bersih, gunakan setiap pagi dan malam hari sebelum menggunakan pelembab  Suitable For: Semua jenis kulit  Ingredients: -', 'Combination Skin', 'wardah1.jpg'),
(18, 'Miraculous Refining Serum', 'AVOSKIN', 'Miraculous Refining Serum mengandung 10% AHA, 3% BHA, 2% Niacinamide, dan Ceramide. Serum ini juga dilengkapi dengan Hyaluronic Acid Crosspolymer, Vitamin B5, Black Carrot, dan Tasmanian Raspberry. Kombinasi bahan-bahan ini bekerja secara efektif sebagai eksfoliator untuk membuat kulit lebih bersih dan cerah.  How to Use : Aplikasikan secara merata pada kulit wajah dan leher menggunakan ujung jari, hindari daerah dekat mata. Hindari terjadi kontak pada mata saat pemakaian. Bila terjadi iritasi maka hentikan penggunaan sementara dan disarankan untuk berkonsultasi dengan ahlinya. Gunakan produk sesuai dengan yang disarankan. Mencoba menggunakan produk terlebih dulu pada bagian tertentu di wajah disarankan untuk pemilik kulit sensitif.  Ingredients : Water, Propylene Glycol, Glycolic Acid, Niacinamide, Salicylic Acid, Butylene Glycol, Amylopectin, Xanthan gum, Dextrin, Chamomilla Recutita (Matricaria) Flower Extract, Aloe Barbadensis Leaf Juice, Fucus Vesiculosus Extract, Rubus Idaeus (Raspberry) Fruit Extract, Acer saccharum (Sugar Maple) Extract, Portulaca Oleracea Extract, Hydroxypropyl Bisstearamide MEA, Polyglutamic Acid, Tetrasodium EDTA, Sodium Hydroxymethylglycinate, Triethanolamine, Dipropylene Glycol, Behenyl Alcohol, Ceteareth-20, Cholesteryl Isostearate, Tricaprylin, Cetearyl Alcohol, Squalane, Cholesterol, Stearic Acid, Dimethicone, Phenoxyethanol.', 'Dry Skin', 'avoskin1.jpg'),
(19, 'Sakura White Pinkish Radiance Ultimate Serum', 'Garnier', 'Garnier Sakura White Pinkish Radiance Ultimate Serum merupakan serum yang diformulasikan khusus untuk mencerahkan dan menutrisi kulit. Mengandung ekstrak Sakura dan 5,000 kapsul pencerah yang dapat menjadikan kulit lebih cerah, halus, elastis, lembut, dan meratakan warna kulit.  How to Use: Aplikasikan pada wajah dan leher secara merata. Dapat digunakan pada pagi dan malam hari.  Suitable for: Kulit kusam  Ingredients: -', 'Combination Skin', 'garnier1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `nohp` int(50) NOT NULL,
  `jeniskulit` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `email`, `tanggallahir`, `jeniskelamin`, `nohp`, `jeniskulit`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 'admin@gmail.com', '2001-02-25', 'perempuan', 88, 'Dry Skin', 1),
(2, 'user', 'user', '123', 'user@gmail.com', '2000-07-17', 'perempuan', 81, 'Oily Skin', 2),
(3, 'farah', 'farah', '123', 'farah.syadza@gmail.com', '2001-02-25', '', 0, 'Combination Skin', 2),
(4, 'ririn', 'ririn', '123', 'farahsyadzaa@gmail.com', '2005-05-25', '', 0, 'Combination Skin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_serum`
--
ALTER TABLE `tb_serum`
  ADD PRIMARY KEY (`id_srm`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_serum`
--
ALTER TABLE `tb_serum`
  MODIFY `id_srm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
