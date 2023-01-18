-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 14:10:19
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emlak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `altkategori`
--

CREATE TABLE `altkategori` (
  `altkat_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `alt_baslik` varchar(200) NOT NULL,
  `alt_sira` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `altkategori`
--

INSERT INTO `altkategori` (`altkat_id`, `kategori_id`, `alt_baslik`, `alt_sira`) VALUES
(1, 1, 'Satılık Daireler', 1),
(2, 4, 'Kiralık Daireler', 2),
(3, 4, 'Kiralık Dükkanlar', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(10) NOT NULL,
  `ayar_baslik` varchar(200) NOT NULL,
  `ayar_aciklama` varchar(350) NOT NULL,
  `ayar_key` varchar(350) NOT NULL,
  `ayar_telefon` int(13) NOT NULL,
  `ayar_email` varchar(120) NOT NULL,
  `ayar_facebook` varchar(150) NOT NULL,
  `ayar_instagram` varchar(150) NOT NULL,
  `ayar_logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_key`, `ayar_telefon`, `ayar_email`, `ayar_facebook`, `ayar_instagram`, `ayar_logo`) VALUES
(0, '', 'merhaba dunya', '', 0, '', '', '', '2498923604brand_logo_02.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cokluresim`
--

CREATE TABLE `cokluresim` (
  `cokluresim_id` int(11) NOT NULL,
  `resim` varchar(300) NOT NULL,
  `ilan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `danismanlar`
--

CREATE TABLE `danismanlar` (
  `danisman_id` int(11) NOT NULL,
  `danisman_isim` varchar(250) NOT NULL,
  `danisman_gorev` varchar(250) NOT NULL,
  `danisman_telefon` varchar(25) NOT NULL,
  `danisman_mail` varchar(100) NOT NULL,
  `danisman_resim` varchar(200) NOT NULL,
  `danisman_sifre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `danismanlar`
--

INSERT INTO `danismanlar` (`danisman_id`, `danisman_isim`, `danisman_gorev`, `danisman_telefon`, `danisman_mail`, `danisman_resim`, `danisman_sifre`) VALUES
(6, 'Ahmet', 'Emlak Danışmanı', '05438552189', 'ahmet@gmail.com', '22997210131.jpg', '123456'),
(7, 'Mehmet', 'Reklam Yöneticisi', '05448223752', 'mehmet@gmail.com', '2363528016agent-03.jpg', '123456'),
(8, 'Abdullah', 'Emlak Danışmanı', '05464342182', 'abdullah@hotmail.com', '2074320489agent-06.jpg', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(10) NOT NULL,
  `hakkimizda_baslik` varchar(250) NOT NULL,
  `hakkimizda_aciklama` text NOT NULL,
  `hakkimizda_resim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_aciklama`, `hakkimizda_resim`) VALUES
(0, 'Emlak Sitesi final odevi hazırlanmaya başlamıştır.123', '<p>Emlak sitesi yapımı.</p>\r\n\r\n<p>butunleme i&ccedil;in yapıldı&nbsp;</p>\r\n', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

CREATE TABLE `ilanlar` (
  `ilan_id` int(10) NOT NULL,
  `altkategori_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `ilan_baslik` varchar(200) NOT NULL,
  `ilan_aciklama` text NOT NULL,
  `ilan_sira` int(10) NOT NULL,
  `ilan_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ilan_anahtarkelime` varchar(250) NOT NULL,
  `ilan_metrekare` int(4) NOT NULL,
  `ilan_odasayisi` int(10) NOT NULL,
  `ilan_binayas` int(10) NOT NULL,
  `ilan_bkat` int(10) NOT NULL,
  `ilan_isitma` varchar(300) NOT NULL,
  `ilan_takas` varchar(300) NOT NULL,
  `ilan_aidat` int(10) NOT NULL,
  `danisman_id` int(10) NOT NULL,
  `ilan_adres` varchar(250) NOT NULL,
  `ilan_resim` varchar(250) NOT NULL,
  `ilan_fiyat` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilanlar`
--

INSERT INTO `ilanlar` (`ilan_id`, `altkategori_id`, `kategori_id`, `ilan_baslik`, `ilan_aciklama`, `ilan_sira`, `ilan_tarih`, `ilan_anahtarkelime`, `ilan_metrekare`, `ilan_odasayisi`, `ilan_binayas`, `ilan_bkat`, `ilan_isitma`, `ilan_takas`, `ilan_aidat`, `danisman_id`, `ilan_adres`, `ilan_resim`, `ilan_fiyat`) VALUES
(2, 0, 0, 'ev', 'ev', 0, '2023-01-18 08:21:34', '', 0, 0, 0, 0, '', '', 0, 0, '', '', 0.00),
(5, 2, 4, 'Kiralık Villa', '&lt;p&gt;Temiz Villa&lt;/p&gt;\r\n', 1, '2023-01-18 05:40:18', 'villa', 200, 5, 4, 1, 'Doğalgaz', 'Evet', 500, 0, 'Antalya Merkez', '2638227100indir (1).jpg', 20000.00),
(7, 2, 4, 'Kutahya Villa', '<p>Merkezdedir&nbsp;</p>\r\n\r\n<p>Nezih ve B&uuml;y&uuml;kt&uuml;r</p>\r\n', 1, '2023-01-18 06:48:10', 'kutahya,villa', 250, 5, 1, 1, 'Doğalgaz', 'Hayır', 1000, 0, 'Kütahya Merkez Evliya Çelebi Mahallesi', '2276322525indir.jpg', 12000.00),
(8, 2, 4, 'Luks Villa', '<p>Kutahyada Luks Ucuz Villa</p>\r\n', 2, '2023-01-18 08:23:14', 'villa', 150, 3, 2, 1, 'Doğalgaz', 'evet', 200, 0, 'Kütahya Merkez', '2636628246blog-post-04.jpg', 3000.00),
(9, 2, 4, 'Kiralık Villa', '&lt;p&gt;Temiz Villa&lt;/p&gt;\r\n', 1, '2023-01-18 05:40:18', 'villa', 200, 5, 4, 1, 'Doğalgaz', 'Evet', 500, 0, 'Antalya Merkez', '2638227100indir (1).jpg', 20000.00),
(10, 2, 4, 'Kutahya Villa', '<p>Merkezdedir&nbsp;</p>\r\n\r\n<p>Nezih ve B&uuml;y&uuml;kt&uuml;r</p>\r\n', 1, '2023-01-18 06:48:10', 'kutahya,villa', 250, 5, 1, 1, 'Doğalgaz', 'Hayır', 1000, 0, 'Kütahya Merkez Evliya Çelebi Mahallesi', '2276322525indir.jpg', 12000.00),
(11, 2, 4, 'Luks Villa', '<p>Kutahyada Luks Ucuz Villa</p>\r\n', 2, '2023-01-18 08:23:14', 'villa', 150, 3, 2, 1, 'Doğalgaz', 'evet', 200, 0, 'Kütahya Merkez', '2636628246blog-post-04.jpg', 3000.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `kategori_baslik` varchar(200) NOT NULL,
  `kategori_sira` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_baslik`, `kategori_sira`) VALUES
(1, 'Satılık İlanlar', 1),
(4, 'Kiralık İlanlar', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `altkategori`
--
ALTER TABLE `altkategori`
  ADD PRIMARY KEY (`altkat_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `cokluresim`
--
ALTER TABLE `cokluresim`
  ADD PRIMARY KEY (`cokluresim_id`);

--
-- Tablo için indeksler `danismanlar`
--
ALTER TABLE `danismanlar`
  ADD PRIMARY KEY (`danisman_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`ilan_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `altkategori`
--
ALTER TABLE `altkategori`
  MODIFY `altkat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `cokluresim`
--
ALTER TABLE `cokluresim`
  MODIFY `cokluresim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `danismanlar`
--
ALTER TABLE `danismanlar`
  MODIFY `danisman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `ilan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
