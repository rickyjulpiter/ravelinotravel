-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 08:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ravelinotravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE IF NOT EXISTS `destinasi` (
`id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `deskripsi_singkat` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `deskripsi`, `deskripsi_singkat`, `gambar`) VALUES
(12, 'North Sumatra', '<div style="text-align: justify;"><span style="font-size: 24px;">ï»¿</span><span style="font-size: 24px;">ï»¿</span><span style="font-size: 24px;">Sumatra&nbsp;is one of Indonesias large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers.</span></div><div style="text-align: justify;"><span style="font-size: 24px;"><br></span></div><div style="text-align: justify;"><span style="font-size: 24px;">Visiting Sumatra can mean never ending action. It has both unique and adventurous activities, starting from the Orangutan sanctuary in Bukit Lawang, some world-class diving sites in Pulau Weh and surfing in the wild Mentawai Islands. You can also enjoy spicy Padang Cuisines, relax on the shore of Lake Toba, bag the top of Mount Kerinci of Jambi, stop by the granite beaches of Belitung, and see dolphins at Kiluan, Lampung. The land is also filled with a humongous variety of unique as well as common rainforest fauna. You can spot not only red-haired orangutans, but also all sorts of monkeys that swing on treetops, in addition to Sumatran tigers, rhinoceroses and elephants.</span></div><div style="text-align: justify;"><span style="font-size: 24px;"><br></span></div><div style="text-align: justify;"><div style=""><span style="font-size: 24px;">With almost 40 million inhabitants on this island, the varieties of cultures in Sumatra will also give you non-stop thrills. From the devout Muslims of Aceh, outspoken and friendly Batak people, matrilineal Minangkabau of Padang, sizable Chinese communities of Bangka-Belitung, to semi-primitive tribesmen of Nias; all of them, with their own distinct cultures and languages, living on one island, united by mutual respect for centuries.</span></div><div style=""><span style="font-size: 24px;"><br></span></div><div style=""><span style="font-size: 24px;">To visit Sumatra, you can use both air and sea lines to reach the capital. As for reaching small villages or remote islands such as the Mentawai Islands, you have to travel overland from the capital before boarding a boat with a local guide inside.</span></div></div>					                                					                                					                                					                                ', '<span style="font-size: 24px;">SumatraÂ is one of Indonesias large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers.</span>                                                                                                                                                                                                                                                                                                                        ', 'images/Ravelino Travel.png'),
(13, 'West Sumatra', 'Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.					                                					                                					                                ', 'Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.                                                                                                                                                            ', 'images/2.png'),
(14, 'South Sumatra', 'Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.					                                					                                					                                ', 'Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.                                                                                                                                                            ', 'images/3.png'),
(15, 'Java Island', '					                                ', '                                                    ', NULL),
(16, 'Bali', '					                                ', '                                                    ', NULL),
(17, 'West Nusa Tenggara', '					                                ', '                                                    ', NULL),
(18, 'Sulawesi', '					                                ', '                                                    ', NULL),
(19, 'Kalimantan', '					                                ', '                                                    ', NULL),
(20, 'Maluku', '					                                ', '                                                    ', NULL),
(21, 'Papua', '					                                ', '                                                    ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi_area`
--

CREATE TABLE IF NOT EXISTS `destinasi_area` (
`id_area` int(10) NOT NULL,
  `nama_area` varchar(100) DEFAULT NULL,
  `deskripsi_area` text,
  `deskripsi_area_singkat` text,
  `gambar_area` varchar(100) DEFAULT NULL,
  `destinasi_id` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi_area`
--

INSERT INTO `destinasi_area` (`id_area`, `nama_area`, `deskripsi_area`, `deskripsi_area_singkat`, `gambar_area`, `destinasi_id`) VALUES
(17, 'Brastagi', '', 'asdasd                                                    ', NULL, 12),
(18, 'Dua Island Aceh', '                                                    ', '                                                    ', NULL, 12),
(19, 'Asok Island', '                                                    ', '                                                    ', NULL, 12),
(20, 'Sipiso-piso', '                                                    ', '                                                    ', NULL, 12),
(21, 'Subang Island', '                                                    ', '                                                    ', NULL, 12),
(22, 'Bukit Tinggi', '                                                    ', '                                                    ', NULL, 13),
(23, 'Anai Waterfall', '                                                    					                                ', '                                                                                                        ', NULL, 13),
(24, 'Harau Valley', '                                                    ', '                                                    ', NULL, 13),
(25, 'Maninjau Lake', '                                                    ', '                                                    ', NULL, 13),
(26, 'Bengkulu', '                                                    ', '                                                    ', NULL, 14),
(27, 'Kerinci Seblat', '                                                    ', '                                                    ', NULL, 14),
(28, 'Bogor', '                                                    ', '                                                    ', NULL, 15),
(29, 'Bandung', '                                                    ', '                                                    ', NULL, 15),
(30, 'Borobudur Temple', '                                                    ', '                                                    ', NULL, 15),
(31, 'Yogyakarta', '                                                    ', '                                                    ', NULL, 15),
(32, 'Denpasar', '                                                    ', '                                                    ', NULL, 16),
(33, 'Klungkung', '                                                    ', '                                                    ', NULL, 16),
(34, 'Kupang', '                                                    ', '                                                    ', NULL, 17),
(35, 'Lasiana Beach', '                                                    ', '                                                    ', NULL, 17),
(36, 'Samalona Island', '                                                    ', '                                                    ', NULL, 18),
(37, 'Bantimurung', '                                                    ', '                                                    ', NULL, 18),
(38, 'Pontianak', '                                                    ', '                                                    ', NULL, 19),
(39, 'Samarinda', '                                                    ', '                                                    ', NULL, 19),
(40, 'Ambon', '                                                    ', '                                                    ', NULL, 20),
(41, 'Seram', '                                                    ', '                                                    ', NULL, 20),
(42, 'Jayapura', '                                                    ', '                                                    ', NULL, 21),
(43, 'Asmat Tribe', '                                                    ', '                                                    ', NULL, 21),
(44, 'Medan', '<div style="text-align: justify; "><span style="font-size: 24px;">There are many tourist attractions in Medan, North Sumatra that you can visit when the holidays arrive. Medan is the 3rd largest city in Indonesia after Jakarta and Surabaya with ethnic, ethnic and cultural diversity in it such as the Batak, Malay, Javanese, Chinese, and other ethnic groups.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 24px;">The capital of North Sumatra is not only rich in cultural diversity but also holds quite a diverse tourism potential.&nbsp;</span><span style="font-size: 24px;">One of the tourism icons in Medan, North Sumatra, which is interesting to visit is Lake Toba which was once named the largest volcanic lake in the world.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 24px;">With a variety of charms, Lake Toba is one of the most reliable and most popular natural attractions in North Sumatra. Even famous to the corners of the world.&nbsp;</span><span style="font-size: 24px;">Clearwater with a beautiful view of the verdant mountains further adds to its appeal.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 24px;">Not to mention the existence of Samosir Island in the middle of the lake which is so iconic with the legendary stories that accompany it.&nbsp;</span><span style="font-size: 24px;">Now, besides visiting Lake Toba and traveling to Samosir Island, you can also explore other beautiful places in Medan that are no less interesting.</span></div>                                                    					                                					                                ', '<div style="text-align: justify;"><span style="font-size: 24px;">There are many tourist attractions in Medan, North Sumatra that you can visit when the holidays arrive. Medan is the 3rd largest city in Indonesia after Jakarta and Surabaya with ethnic, ethnic and cultural diversity in it such as the Batak, Malay, Javanese, Chinese, and other ethnic groups.</span></div>', 'images/Medan-medan.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE IF NOT EXISTS `paket_wisata` (
`id` int(10) NOT NULL,
  `nama` text,
  `deskripsi` text,
  `peta` text,
  `timeline` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id`, `nama`, `deskripsi`, `peta`, `timeline`) VALUES
(2, '05 Days Wonders Medan - Leuser National Park Tracking', 'This is a full trip that will allow you to see many aspects of Sumatra Island. You will start this tour by visiting the famous Tangkahan & Bukit Lawang area to meet with two special wild animals: Elephant and Orangutans. You will continue to Brestagi and Lake Toba which offersÂ  grandiose landscape with its largest lake in the world . The other part of the trip focuses more on meeting the local people and discovering their daily life. End of the trip will end relaxing on the Cubadak Island .					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.9883114096!2d97.1648601371933!3d3.756304067929982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3039842ba946e1c5%3A0xced7dc8e0b1717b3!2sGn.%20Leuser!5e0!3m2!1sid!2sid!4v1571641775213!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '<ul class="timeline"><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">1</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 1: Medan - Bukit Lawang (Bukit Lawang Cottage)</span></div><div class="desc"><p style="margin-bottom: 0px;">Arrival at Kuala Namu Int Airport Medan drive to Bukit Lawang with a stop at Crocodile farm, and several Plantations for rubber and Palm oil arrival at Bukit Lawang check in to the hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">2</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 2: Bukit Lawang - Tracking Leuser Park (Overnight Tent or Shelter) B.L.D</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast at the hotel then walking trough the bank of the river and crossing the river by traditional canoe and walking up the jungle to see the Orang Utan on their feeding time. After feeding the Orang Utan tracking through the Leuser National Park, walking around Leuser National Park is the time to experience many kinds of flora and fauna as well as enjoy the song of birds and Siamang? The Black Gibbon? and overnight in a tent or shelter.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">3</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 3: Continue Tracking - Return to Hotel (B.L)</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast at the hotel then walking trough the bank of the river and crossing the river by traditional canoe and walking up the jungle to see the Orang Utan on their feeding time. After feeding the Orang Utan tracking through the Leuser National Park, walking around Leuser National Park is the time to experience many kinds of flora and fauna as well as enjoy the song of birds and Siamang? The Black Gibbon? and overnight in a tent or shelter.</p><p style="margin-bottom: 0px;"><br></p><p style="margin-bottom: 0px;">After breakfast prepared by tour guide continue tracking, today is full day walking and explore the rain tropical forest with their wildlife living in their natural habitat. Afternoon return to the hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">4</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 4: Bukit Lawang - Medan (Emerald Garden Htl / Asean Int Htl) B</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast free at own leisure for swimming or walking and then drive to Medan arrival in Medan, city tour by visiting Great Mosque, Sultan Palace and Chinese Temple.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">5</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 5: Hotel - Airport.B.</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast transfer to Airport for your flight to the next destination.</p></div></div></li></ul>                                                                                                                                                                                                                                                                                                                        '),
(6, '05 Days / 04 Nights Padang - Harau Valley Wonders Tracking', '<div>The Harau Valley is sometimes known as the Yosemite of Indonesia. Here, gibbons and macaques and a variety of wildlife still roam freely as this area in the Lima Puluh Kota district has actually been designated a nature conservation, covering some 669 acres. Its beautiful landscape, its peaceful serenity interrupted only by the calls of the macaques and the chirping of birds, make the Harau Valley the perfect holiday getaway.</div><div><br></div><div>The steep rock walls here are not only a natural invitation to photographers, but they also attract rock climbers who consider climbing these steep walls a significant challenge. There are 300 spots from where to climb. Looking up, the clear blue sky above is the ultimate finish line as you grab the belay devices, carabiners, and necessary ropes to reach the heights of the Harau Valley. This valley is infrequently visited so that you may have the whole valley all to yourself.</div><div><br></div><div>Relaxing is one of the best time-elapsing activities here. Order a cup of coffee and local delicacies and setlle down to write the last chapter of your travels and the extraordinary experiences you had in wonderful Indonesia. Take time for a short walk around the village and watch how people live. Some of the women here work in the rice fields while men plough the fields behind water buffalos, providing the perfect shot for you to take.</div><div><br></div><div>Public transportation is available for those wishing to spend the entire vacation time in and around Bukittinggi. Else, renting a minivan or a motorbike will guarantee the time well spent for day trippers to these Minangkabau highlands.</div>					                                					                                					                                					                                					                                					                                					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.92283494485!2d100.61899011727311!3d-0.1163877468062893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2aae8062d23863%3A0x4039d80b220d9c0!2sKec.%20Harau%2C%20Kabupaten%20Lima%20Puluh%20Kota%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1571653763742!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '<ul class="timeline"><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">1</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 1: Airport / Padang - Bukit Tinggi - Harau (Abdi Homestay)</span></div><div class="desc"><p style="margin-bottom: 0px;">Upon arrival at Minangkabau International Airport Padang pick up by our Tour guide and then drive to Payakumbuh, via Bukittinggi, on the way stop at Anay Valley waterfall, afternoon arrival at Harau Valley check in to simple guest house Lembah Echo.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">2</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 2: Harau Jungle Tracking. B.L.D</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast start tracking up to the jungle with a fantastic view of the rice field and villages can be enjoyed, on the tracking experience wildlife with its flora and fauna. Will see several types of birds, monkeys like black gibbons, long tale Macaca, the footstep of wild deer, tapir, several kinds of the butterfly, orchids and will enjoy several waterfalls and overnight in a tent near a cave. (Lunch and Dinner provided by the tour guide)</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">3</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 3: Harau Tracking - Hotel B.L</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast continues tracking in the jungle and experiences a different side of the jungle with it natures and again the several kinds of the wild animal will be found in the rain tropical forest, afternoon return back to the hotel walking via several small villages to see the daily life of local people. (Lunch provided by Tour Guide)</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">4</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 4: Minangkabau Tour - Bukittinggi (Royal Denai Htl / Similar) B</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast, drive to Batusangkar to see the old Palace of Minangkabau Kingdom at Pagaruyung and then continue to drive to Singkarak Lake and arrival at Bukittinggi city tour visiting Sianok Canyon, Fort de Kock, museum and market. Afternoon checks in to the hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">5</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 5: Bukittinggi - Padang / Airport. B</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast drive to Padang and arrival at Padang transfer directly to the Airport.</p></div></div></li></ul>                                                                                                                                                                                                                                                                                                                                                                            '),
(8, '05 Days Bugis Toraja Tour', 'Tana Toraja is indeed famous for its unique culture. One of them is the funeral ceremony called Rambu Solo. Rambu Solo is a funeral procession of Torajan people, which is different from common funeral ceremony.</div><div><br></div><div>By this Rambu Solo funeral ceremony, you can see that Tana Torajan people respect their ancestors very well.Â  The funeral procession consists of several show lists, wherein each of the show, you will able to see the cultural values that still highly maintained by the people of Tana Toraja.</div><div><br></div><div><b><span style="font-size: 24px;">Funeral Ceremony Procession</span></b></div><div>Mainly, the funeral ceremony is divided into 2 processions, which are Funeral procession (rante), and Art Show. These processions arenâ€™t performed separately but completing each other into a full funeral ceremony.</div><div><br></div><div>The funeral Procession / rante consists of sequenced shows. It is held in an open space located in the middle of the Tongkonan Traditional House complex. Those shows are:</div><div><br></div><div>- Maâ€™Tudan Mebalun is a corpse wrapping process.</div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Maâ€™Roto, that is the process of decorating the coffin with gold and silver string.</div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Maâ€™Popengkalo Alang is a process of parading the wrapped corpse to a barn until its ready to be buried.</div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Maâ€™Palao or Maâ€™Pasonglo is a process of parading the corpse from Tongkonan House to a cemetery complex called Lakkian.</div><div><br></div><div>The second procession is the Art Show. This process held not only to celebrate but also a form of respect and pray for the dead. In this procession, you can watch:</div><div><br></div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Buffalo parade which will be sacrificed.</div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Some local music show which are Paâ€™Pompan, Paâ€™Dali-dali, and Unnosong.</div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Some traditional dancing shows such as Paâ€™Badong, Paâ€™Dondi, Paâ€™Randing, Paâ€™katia,Â <span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span><span style="font-size: 1rem;">Paâ€™Papanggan, Passailo and Paâ€™Silaga Tedong.</span></div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Buffalo fighting show, before those buffaloes, are sacrificed.</div><div><span style="font-size: 1rem;">-</span><span style="font-size: 1rem;">Â </span>Buffalo slaughtering as a sacrifice animal.				                                					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510043.4637670382!2d119.60015972164896!3d-2.898361046769332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93c15594bf5fe7%3A0x3bd5d554371f59fa!2sKabupaten%20Toraja%20Utara%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1571655753618!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '<ul class="timeline"><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">1</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 1: Airport / Makassar - Sengkang</span></div><div class="desc"><p style="margin-bottom: 0px;">Upon arrival at Hasanuddin Airport Makassar, transfer to Sengkang a small village located in the center of the former Bugis kingdom on Lake Tempe. On the way, we will visit Bantimurung located 42 km east-north Makassar, in a steep limestone valley with tropical vegetation and a 15-meter high waterfall. lunch en route. In the afternoon we will try to catch the beautiful views of the sunset over the Lake Tempe we will cross the lake by motorized canoe and visit the fishermen families living on the floating villages Dinner and overnight at a guesthouse in Sengkang.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">2</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 2: Sengkang - Rantepao</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast, we visit a traditional silk factory, where women hand spin and weave silk cloth. Then transfer to Tana Toraja via Palopo, passing through spectacular view along the road to Toraja. Lunch en route. In the afternoon arrive in Rantepao. Dinner and overnight in Hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">3</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 3: Explore Toraja</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast, a full day exploring Toraja. First, we will visit Lemo to see rows of Tau Tau statues and the hanging graves. Onwards to Suaya to discover the secret of the Baby Tree, Also visiting today Londa, to see an ancient grave where the deceased are entombed. At Kete Kesu, one of the oldest Torajan villages we can see Tongkonans, and old rice barns, also famous for its traditional colorful woodcarving. Lunch in Rantepao. Dinner and overnight at Hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">4</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 4:Â </span><span style="color: rgb(51, 51, 51); font-size: 18px; font-weight: 600;">Explore Toraja</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast, drive to Batusangkar to see the old Palace of Minangkabau Kingdom at Pagaruyung and then continue to drive to Singkarak Lake and arrival at Bukittinggi city tour visiting Sianok Canyon, Fort de Kock, museum and market. Afternoon checks in to the hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">5</span>Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â Â  Â </div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 5: Rantepao - Airport</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast, transfer back to Makassar. Lunch will be served in a seafood restaurant in Pare-Pare. Afterwards, transfer directly to Hasanuddin Airport Makassar to catch your flight to your next destination.</p></div></div></li></ul>                                                                                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_detail`
--

CREATE TABLE IF NOT EXISTS `paket_wisata_detail` (
`id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `destinasi_area_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata_detail`
--

INSERT INTO `paket_wisata_detail` (`id`, `paket_wisata_id`, `destinasi_area_id`) VALUES
(108, 2, 17),
(121, 6, 22),
(122, 6, 24);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_gambar`
--

CREATE TABLE IF NOT EXISTS `paket_wisata_gambar` (
`id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata_gambar`
--

INSERT INTO `paket_wisata_gambar` (`id`, `paket_wisata_id`, `gambar`) VALUES
(22, 2, 'images/tour2-0-1.jpg'),
(23, 2, 'images/tour2-1-2.jpg'),
(24, 2, 'images/tour2-2-3.jpg'),
(25, 2, 'images/tour2-3-4.jpg'),
(26, 6, 'images/tour6-0-1.jpg'),
(27, 6, 'images/tour6-1-2.jpg'),
(28, 6, 'images/tour6-2-3.jpg'),
(30, 8, 'images/tour8-1-2.jpg'),
(31, 8, 'images/tour8-2-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
`id` int(10) NOT NULL,
  `nama` text,
  `deskripsi` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(10) NOT NULL,
  `nama` text,
  `deskripsi` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'North Sumatra', 'Sumatra is one of Indonesias large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers.', 'images/tour2-0-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
`id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `slogan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `nama`, `slogan`, `deskripsi`, `alamat`, `telepon`, `email`, `facebook`, `twitter`, `instagram`, `youtube`, `logo`) VALUES
(1, 'Synergi Ravelino Tours & Travel', 'Your Link To The Best Traveling', '<p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">Synergi Ravelino Tours &amp; Travel (1998) is a leading Dutch-Indonesian travel agency and tour operator. We offer a wide and varied choice of fascinating flexible programs that ensure fresh and lively ways to see Sumatra and other parts of Indonesia.</span></font></p><p style="line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><b><span style="font-size: 18px;">Our services cover:</span></b></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Ticketing: Domestic and international.</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Package Tours: Inbound (adventure, culture, leisure &amp; eco) and outbound tours.</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Ferry tickets</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Multi-lingual tour guide services</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Car &amp; tourist coach rental</span></font></p><p style="line-height: 1.2;"><span style="color: rgb(3, 83, 106); font-size: 18px;">-</span><span style="color: rgb(3, 83, 106); font-size: 18px;">&nbsp;</span><font color="#03536a"><span style="font-size: 18px;">Minibus tours for 2 up to 6 persons (on request)</span></font></p><p style="line-height: 1.2;"><span style="color: rgb(3, 83, 106); font-size: 18px;">-</span><span style="color: rgb(3, 83, 106); font-size: 18px;">&nbsp;</span><font color="#03536a"><span style="font-size: 18px;">Hotel vouchers</span></font></p><p style="line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;"><i>We are committed to providing excellence and quality to our clients.</i></span></font></p><p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">For the out- and incoming clients, we specialize in tailor-made itineraries for groups and individuals without forgetting competitive prices or compromising our high level of service. Every client is important to us and we are happy to offer the most competitive rates whether it is for the individual client or for groups in their hundreds. All our itineraries are subject to change to suit the interests of the individual or group.</span></font></p><p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">Our guides are experienced, multi-lingual licensed professionals, with extensive knowledge of geography, history, religion, and local customs. We provide our guides with comprehensive information about their groups so that their holiday will be remembered as "the Indonesia experience" and not just as another run-of-the-mill sightseeing tour.</span></font></p><p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">The management of Synergi Ravelino Tours &amp; Travel is one of the pioneers of leisure travel to Sumatra. Therefore we also provide personalized study tours for our professional counterparts from abroad. References can be provided upon request.</span></font></p>					                                					                                					                                					                                					                                					                                					                                					                                					                                ', 'Jalan A.R Hakim 174 A Medan', '+62-61 7352981', 'ravelino@ravelinotravel.com', '#', '#', '#', '#', 'images/1 (YG DIKARTU NAMA) - Copy.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
`id_testi` int(10) NOT NULL,
  `nama_testi` varchar(100) NOT NULL,
  `deskripsi_testi` text NOT NULL,
  `gambar_testi` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testi`, `nama_testi`, `deskripsi_testi`, `gambar_testi`) VALUES
(1, 'Julpiter Sipayung', 'Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.', 'images/danautoba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
`id` int(10) NOT NULL,
  `nama` text,
  `deskripsi` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi_area`
--
ALTER TABLE `destinasi_area`
 ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_wisata_detail`
--
ALTER TABLE `paket_wisata_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_wisata_gambar`
--
ALTER TABLE `paket_wisata_gambar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
 ADD PRIMARY KEY (`id_testi`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `destinasi_area`
--
ALTER TABLE `destinasi_area`
MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `paket_wisata_detail`
--
ALTER TABLE `paket_wisata_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `paket_wisata_gambar`
--
ALTER TABLE `paket_wisata_gambar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
MODIFY `id_testi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
