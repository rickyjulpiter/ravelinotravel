-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 05:48 AM
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
(12, 'North Sumatra', '					                                ', '                                                    ', NULL),
(13, 'West Sumatra', '					                                ', '                                                    ', NULL),
(14, 'South Sumatra', '					                                ', '                                                    ', NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi_area`
--

INSERT INTO `destinasi_area` (`id_area`, `nama_area`, `deskripsi_area`, `deskripsi_area_singkat`, `gambar_area`, `destinasi_id`) VALUES
(17, 'Brastagi', '                                                    ', '                                                    ', NULL, 12),
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
(43, 'Asmat Tribe', '                                                    ', '                                                    ', NULL, 21);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id`, `nama`, `deskripsi`, `peta`, `timeline`) VALUES
(1, '07 DAYS / 06 NIGHTS MEDAN - BUKIT LAWANG TRACKING AND RAFTING - A', '<div class="description-content">\r\n                                <p>Brazils view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentinaï¿½s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories youï¿½ll cherish for life.</p>\r\n                                <table>\r\n                                    <thead>\r\n                                    </thead>\r\n                                    <tbody>\r\n                                        <tr>\r\n                                            <td class="title">Departure</td>\r\n                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> San Francisco International Airport</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class="title">Departure Time</td>\r\n                                            <td><i class="fa fa-clock-o" aria-hidden="true"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class="title">Maximum travellers</td>\r\n                                            <td><i class="fa fa-user-o" aria-hidden="true"></i> 23</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class="title">Languages</td>\r\n                                            <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> English, Thai, Malayt</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class="title">Includes</td>\r\n                                            <td>\r\n                                                <ul>\r\n                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Airfare</li>\r\n                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Transportation</li>\r\n                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Professional Guide</li>\r\n                                                </ul>\r\n                                            </td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class="title">Excludes</td>\r\n                                            <td class="excludes">\r\n                                                <ul>\r\n                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Departure Taxes</li>\r\n                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Entry Fees</li>\r\n                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Insurance</li>\r\n                                                </ul>\r\n                                            </td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class="title">Popular Places</td>\r\n                                            <td>\r\n                                                <ul>\r\n                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>\r\n                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>\r\n                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>\r\n                                                </ul>\r\n                                            </td>\r\n                                        </tr>\r\n                                    </tbody>\r\n                                </table>\r\n                            </div>					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28185.510535377554!2d86.90746548742861!3d27.98811904127681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2z4KS44KSX4KSw4KSu4KS-4KSl4KS-!5e0!3m2!1sne!2snp!4v1544516755007" style="border:0" allowfullscreen></iframe>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '<ul class="timeline">\r\n                                    <!-- Item 1 -->\r\n                                    <li>\r\n                                        <div class="direction-r">\r\n                                            <div class="day-wrapper">\r\n                                                <span>1</span>\r\n                                            </div>\r\n                                            <div class="flag-wrapper">\r\n                                                <span class="flag">Day 1 - 2 : Flights to Kathmandu.</span>\r\n                                            </div>\r\n                                            <div class="desc">\r\n                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <!-- Item 2 -->\r\n                                    <li>\r\n                                        <div class="direction-r">\r\n                                            <div class="day-wrapper">\r\n                                                <span>3</span>\r\n                                            </div>\r\n                                            <div class="flag-wrapper">\r\n                                                <span class="flag">Day 3 : Arrive Kathmandu</span>\r\n                                            </div>\r\n                                            <div class="desc">\r\n                                                <p>Arrive in Kathmandu and relax while enjoying the color and energy of Nepalï¿½s capital city. Duffels of personal climbing gear and high-altitude clothing will be collected for the cargo flights to Lukla and will be waiting for you at Base Camp. </p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <!-- Item 3 -->\r\n                                    <li>\r\n                                        <div class="direction-r">\r\n                                            <div class="day-wrapper">\r\n                                                <span>4</span>\r\n                                            </div>\r\n                                            <div class="flag-wrapper">\r\n                                                <span class="flag">Day 4 - 5 : Enjoy Kathmandu</span>\r\n                                            </div>\r\n                                            <div class="desc">\r\n                                                <p>Enjoy Kathmandu with a city tour and attend any governmental and media affairs involving team members.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <!-- Item 4 -->\r\n                                    <li>\r\n                                        <div class="direction-r">\r\n                                            <div class="day-wrapper">\r\n                                                <span>6</span>\r\n                                            </div>\r\n                                            <div class="flag-wrapper">\r\n                                                <span class="flag">Day 6 : Fly to Lukla</span>\r\n                                            </div>\r\n                                            <div class="desc">\r\n                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <li>\r\n                                        <div class="direction-r">\r\n                                            <div class="day-wrapper">\r\n                                                <span>7</span>\r\n                                            </div>\r\n                                            <div class="flag-wrapper">\r\n                                                <span class="flag">Day 7 - 15 : Trek to Base Camp</span>\r\n                                            </div>\r\n                                            <div class="desc">\r\n                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. Additional acclimatization days are scheduled at Namche (11,400ft/3,475m) and Pheriche (14,000ft/4,267m).</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                '),
(2, '05 Days Wonders Medan - "Leuser National Park Tracking"', '					                                ', '                                                    ', '<ul class="timeline"><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">1</span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 1: Medan - Bukit Lawang (Bukit Lawang Cottage)</span></div><div class="desc"><p style="margin-bottom: 0px;">Arrival at Kuala Namu Int Airport Medan drive to Bukit Lawang with a stop at Crocodile farm, and several Plantations for rubber and Palm oil arrival at Bukit Lawang check in to the hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">2</span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 2: Bukit Lawang - Tracking Leuser Park (Overnight Tent or Shelter) B.L.D</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast at the hotel then walking trough the bank of the river and crossing the river by traditional canoe and walking up the jungle to see the Orang Utan on their feeding time. After feeding the Orang Utan tracking through the Leuser National Park, walking around Leuser National Park is the time to experience many kinds of flora and fauna as well as enjoy the song of birds and Siamang? The Black Gibbon? and overnight in a tent or shelter.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">3</span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 3: Continue Tracking - Return to Hotel (B.L)</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast at the hotel then walking trough the bank of the river and crossing the river by traditional canoe and walking up the jungle to see the Orang Utan on their feeding time. After feeding the Orang Utan tracking through the Leuser National Park, walking around Leuser National Park is the time to experience many kinds of flora and fauna as well as enjoy the song of birds and Siamang? The Black Gibbon? and overnight in a tent or shelter.</p><p style="margin-bottom: 0px;"><br></p><p style="margin-bottom: 0px;">After breakfast prepared by tour guide continue tracking, today is full day walking and explore the rain tropical forest with their wildlife living in their natural habitat. Afternoon return to the hotel.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 139px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">4</span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 4: Bukit Lawang - Medan (Emerald Garden Htl / Asean Int Htl) B</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast free at own leisure for swimming or walking and then drive to Medan arrival in Medan, city tour by visiting Great Mosque, Sultan Palace and Chinese Temple.</p></div></div></li><li style="position: relative; margin-bottom: 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px 15px 15px 110px; border: 1px solid rgb(241, 241, 241);"><div class="direction-r"><div class="day-wrapper" style="position: absolute; height: 115px; width: 60px; background: rgb(241, 241, 241); left: 0px; z-index: 1; text-align: center; transition: all 0.3s ease-in-out 0s; top: 0px;"><span style="color: rgb(0, 148, 54); font-weight: 600; font-size: 32px; line-height: 2; background: rgb(255, 255, 255); width: 60px; display: inline-block;">5</span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</div><div class="flag-wrapper" style="margin-bottom: 10px; margin-top: 15px;"><span class="flag" style="font-size: 18px; color: rgb(51, 51, 51); font-weight: 600; transition: all 0.3s ease-in-out 0s;">Day 5: Hotel - Airport.B.</span></div><div class="desc"><p style="margin-bottom: 0px;">After breakfast transfer to Airport for your flight to the next destination.</p></div></div></li></ul>                                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_detail`
--

CREATE TABLE IF NOT EXISTS `paket_wisata_detail` (
`id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `destinasi_area_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata_detail`
--

INSERT INTO `paket_wisata_detail` (`id`, `paket_wisata_id`, `destinasi_area_id`) VALUES
(99, 1, 11),
(100, 1, 16),
(101, 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_gambar`
--

CREATE TABLE IF NOT EXISTS `paket_wisata_gambar` (
`id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Ticket Mickey Holidayasd', 'Description Goes Hereasd                                                                                                        ', 'images/author.jpg'),
(4, 'asdasd', 'asdasd', 'images/Add a heading (1).png');

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
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Ticket Mickey Holiday', 'Description Goes Here                                                    ', 'images/at3.jpg'),
(2, 'asdasd', 'asdasd', 'images/ASITA-300x239.png');

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
MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paket_wisata_detail`
--
ALTER TABLE `paket_wisata_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `paket_wisata_gambar`
--
ALTER TABLE `paket_wisata_gambar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
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
