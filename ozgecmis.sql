-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Mar 2015, 18:59:02
-- Sunucu sürümü: 5.6.20
-- PHP Sürümü: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ozgecmis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

CREATE TABLE IF NOT EXISTS `bilgiler` (
`id` int(10) unsigned NOT NULL,
  `katid` int(11) NOT NULL,
  `yil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `derece` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baslik` text COLLATE utf8_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `katid`, `yil`, `derece`, `baslik`, `aciklama`, `created_at`, `updated_at`) VALUES
(1, 1, '2008', '0.25', 'İstanbul Üniversitesi', '<p>&nbsp;İşletme Bölümü 2004-2008 Lisans Derecesi: (3,65/4)&nbsp;</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, '2015', '0.25', 'Autocad', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, '', '0.75', 'HTML', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 3, '2015', '0.50', 'Windows Office', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, '', '0.25', 'İngilizce', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 5, '2015', '0.25', 'Spor', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, '2004', '0.50', 'Atatürk Anadolu Lisesi', '<p>Atatürk Anadolu Lisesi 2000-2004</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, '2000', 'Hiçbiri', 'Mustafa Kemal İlköğretim Okulu', '<p>İlköğretim: Mustafa Kemal İlköğretim Okulu 1992-2000</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, '1992-1994', '0.50', 'Sağmalcılar Devlet Hastanesi', '<p>Mecburi hizmetimi Bayrampaşa cezaevi hastanesinde yaptım. Bakırköy''deki arkadaşlarımla depresyonla ilgili birçok çalışma yürüttüm. 1994 yılında Bakırköy''deki mesaime ek olarak Acıbadem Hastanesine bağlı Bağdat caddesi polikliniğinde de çalışmaya başladım.</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, '1994-1995', '0.25', 'Bakırköy Ruh ve Sinir Hastalıkları', '<p>Bakırköy Ruh ve Sinir Hastalıkları Hastanesi 1. Psikiyatri Birimi&nbsp;Motivasyonel görüşme Tekniği ve Farkındalık terapisi ile yakından ilgilendim ve ilgileniyorum. Bu arada okul terki ve devamsızlık sorunu içimi çok acıttı. Şimdi ilgi alanım haline geldi...</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, '1995-2000', 'Hiçbiri', 'Bakırköy Ruh ve Sinir Hastalıkları Hastanesi', '<p>Bakırköy Ruh ve Sinir Hastalıkları Hastanesi, Alkol Madde Araştırma ve Tedavi Merkezi (AMATEM)&nbsp;2006 yılında&nbsp; Bakırköy Ruh ve Sinir Hastalıkları Hastanesinden ayrıldım. Çünkü Boğaziçi Üniversitesinde verdiğim Bağımlılık dersini vermem yasaklandı. Yasaklanma gerekçesi haftada yarım günümü bugüne kadar Türkiye''de ilk kez verilmeye başlanan bu ders için harcamamdı. Ben de ders vermeyi seçtim...</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, '2009', '0.25', 'Acıbadem Üniversitesi Tıp Fakültesi', '<p>2009-Acıbadem Üniversitesi Tıp Fakültesi&nbsp;Acıbadem hastanelerinde psikiyatri ve psikoloji grubunun kuruluşunu Cem İncesu ile birlikte üstlendik. Hala uğraşıyoruz. Bu arada Acıbadem Üniversitesinde öğretim üyesi oldum.</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 3, '', '1.00', 'PHP', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 3, '', '0.75', 'Ağ ve Donanım', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 4, '', 'Hiçbiri', 'Fransızca', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 4, '', 'Hiçbiri', 'İtalyanca', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 5, '', 'Hiçbiri', 'Müzik', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 5, '', 'Hiçbiri', 'Kitap okumak', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 5, '', 'Hiçbiri', 'Televizyon izlemek', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 5, '', 'Hiçbiri', 'Bilgisayar', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 6, '2000', '0.25', 'Microsoft', '<p>Microsoft Certificated Proffesionel 1 Yıl</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 6, '2005', 'Hiçbiri', 'MEB', '<p>MEB Bilgisayar İşletmenliği Sertifikası 5 Ay</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
`id` int(10) unsigned NOT NULL,
  `katadi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sira` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `katadi`, `sira`, `created_at`, `updated_at`) VALUES
(1, 'EĞİTİM BİLGİLERİ', '1', '2015-03-09 19:00:20', '2015-03-14 16:19:16'),
(2, 'MESLEKİ DENEYİM', '2', '2015-03-09 19:00:26', '2015-03-15 07:30:51'),
(3, 'BİLGİSAYAR BİLGİSİ', '3', '2015-03-13 19:50:38', '2015-03-15 07:45:32'),
(4, 'YABANCI DİLLER', '4', '2015-03-13 20:16:37', '2015-03-15 08:23:05'),
(5, 'HOBİLER', '5', '2015-03-13 20:16:47', '2015-03-15 08:27:34'),
(6, 'SERTİFİKALAR', '6', '2015-03-15 08:33:26', '2015-03-15 08:34:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_02_17_224133_siteayar', 1),
('2015_03_04_184305_bilgiler', 1),
('2015_03_05_213549_kategoriler', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteayar`
--

CREATE TABLE IF NOT EXISTS `siteayar` (
`id` int(10) unsigned NOT NULL,
  `baslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etiket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hakkimda` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resim` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sosyal` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `siteayar`
--

INSERT INTO `siteayar` (`id`, `baslik`, `etiket`, `aciklama`, `mail`, `keyword`, `hakkimda`, `tel`, `resim`, `sosyal`, `created_at`, `updated_at`) VALUES
(1, 'Özgeçmiş Sitesi', 'PHP,HTML,LARAVEL,CSS,XHTML', 'Bu Bir Özgeçmiş sitesidir', 'info@keykubad.com', 'ozgeçmiş,site,laravel,özgeçmiş sitesi', 'Lisans eğitimim süresince edindiğim bilgi ve becerilerimi, insan kaynakları yüksek lisans programında edineceğim bilgi ve birikimle geliştirerek hizmet edeceğim kurumlara, edindiğim bilgi birikimi ile olumlu yönde katkılarda bulunup insan kaynakları yönetiminin tüm süreçlerinde söz sahibi olabilmek.', '0232 999 96 88', 'avatarjpgfhntl.jpg', 'http://www.twitter.com,http://www.facebook.com,instagram\r\n', '2015-03-09 18:58:54', '2015-03-13 20:23:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gürkan Ersan', 'info@keykubad.com', '$2y$10$XEC5qRDlBq4IYRjOxg7f6O5tZkjIpIcgwQTPWClzWLOSKjsgNCque', NULL, '2015-03-09 18:58:46', '2015-03-12 18:48:49');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilgiler`
--
ALTER TABLE `bilgiler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Tablo için indeksler `siteayar`
--
ALTER TABLE `siteayar`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilgiler`
--
ALTER TABLE `bilgiler`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `siteayar`
--
ALTER TABLE `siteayar`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
