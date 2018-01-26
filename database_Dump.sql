-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 Oca 2018, 13:01:56
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `oyunlistesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

DROP TABLE IF EXISTS `bilgiler`;
CREATE TABLE IF NOT EXISTS `bilgiler` (
  `oyun_id` int(11) NOT NULL AUTO_INCREMENT,
  `kayit_kodu` int(11) NOT NULL,
  `oyun_adi` varchar(50) NOT NULL,
  `yapimci` varchar(50) NOT NULL,
  `turu` varchar(50) NOT NULL,
  `cikis_tarihi` varchar(50) NOT NULL,
  PRIMARY KEY (`oyun_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`oyun_id`, `kayit_kodu`, `oyun_adi`, `yapimci`, `turu`, `cikis_tarihi`) VALUES
(6, 1112, 'FIFA 18', 'EA Games', 'Spor', '2017'),
(5, 1111, 'Call of Duty WW II', 'Activision', 'FPS', '2017'),
(7, 1113, 'PUBG', 'Bluehole', 'Battle Royal', '2017'),
(8, 1114, 'Mount & Blade', 'Taleworlds', 'RPG-Strateji', '2015'),
(9, 1115, 'Need for Speed Payback', 'EA Games', 'YarÄ±ÅŸ', '2017');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
