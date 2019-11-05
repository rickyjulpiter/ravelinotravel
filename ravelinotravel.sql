-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 04:44 AM
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
(12, 'Northern Sumatra', '<div style="text-align: justify;"><span style="font-size: 24px;">ï»¿</span><span style="font-size: 24px;">ï»¿</span><span style="font-size: 24px;">SumatraÂ is one of Indonesias large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers.</span></div><div style="text-align: justify;"><span style="font-size: 24px;"><br></span></div><div style="text-align: justify;"><span style="font-size: 24px;">Visiting Sumatra can mean never ending action. It has both unique and adventurous activities, starting from the Orangutan sanctuary in Bukit Lawang, some world-class diving sites in Pulau Weh and surfing in the wild Mentawai Islands. You can also enjoy spicy Padang Cuisines, relax on the shore of Lake Toba, bag the top of Mount Kerinci of Jambi, stop by the granite beaches of Belitung, and see dolphins at Kiluan, Lampung. The land is also filled with a humongous variety of unique as well as common rainforest fauna. You can spot not only red-haired orangutans, but also all sorts of monkeys that swing on treetops, in addition to Sumatran tigers, rhinoceroses and elephants.</span></div><div style="text-align: justify;"><span style="font-size: 24px;"><br></span></div><div style="text-align: justify;"><div style=""><span style="font-size: 24px;">With almost 40 million inhabitants on this island, the varieties of cultures in Sumatra will also give you non-stop thrills. From the devout Muslims of Aceh, outspoken and friendly Batak people, matrilineal Minangkabau of Padang, sizable Chinese communities of Bangka-Belitung, to semi-primitive tribesmen of Nias; all of them, with their own distinct cultures and languages, living on one island, united by mutual respect for centuries.</span></div><div style=""><span style="font-size: 24px;"><br></span></div><div style=""><span style="font-size: 24px;">To visit Sumatra, you can use both air and sea lines to reach the capital. As for reaching small villages or remote islands such as the Mentawai Islands, you have to travel overland from the capital before boarding a boat with a local guide inside.</span></div></div>					                                					                                					                                					                                					                                					                                ', '<span style="font-size: 24px;">SumatraÂ is one of Indonesias large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers.</span>                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'images/1.png'),
(13, 'West Sumatra', '<div style="text-align: justify;"><span style="font-size: 24px;">Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.</span></div>', '<div style="text-align: justify;"><span style="font-size: 24px;">Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.</span></div>', 'images/2.png'),
(14, 'South Sumatra', '<div style="text-align: justify;"><span style="font-size: 24px;">Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.</span></div>', '<div style="text-align: justify;"><span style="font-size: 24px;">Sumatra&nbsp;is one of Indonesiaâ€™s large island and the sixth largest island in the world. Wild and rugged, Sumatra is a blend of mother nature extremes, blessed with natural wealth as well as proneness to natural disasters. An island of extraordinary beauty, it bubbles with life and vibrates under the power of nature. Eruptions, earthquakes and tsunamis are Sumatran headline grabbers. Steaming volcanoes brew and bluster while standing guard over lakes that sleepily lap the edges of craters. Orangutan-filled jungles host not only our red-haired cousins, but also tigers, rhinos and elephants. And down at sea level, idyllic deserted beaches are bombarded by clear barrels of surf.</span></div>', 'images/3.png'),
(15, 'Java Island', 'Java is an island of the Greater Sunda Islands chain, bordered by the Indian Ocean on the south and the Java Sea on the north. It is administered by Indonesia. With a population of over 141 million (Java only) or 145 million (including the inhabitants of its surrounding islands), Java has 56.7 percent of the Indonesian population and is the world''s most populous island. The Indonesian capital city, Jakarta, is located on its northwestern coast. Much of Indonesian history took place on Java. It was the center of powerful Hindu-Buddhist empires, the Islamic sultanates, and the core of the colonial Dutch East Indies. Java was also the center of the Indonesian struggle for independence during the 1930s and 1940s. Java dominates Indonesia politically, economically and culturally. Four of Indonesia''s eight UNESCO world heritage sites are located in Java: Ujung Kulon National Park, Borobudur Temple, Prambanan Temple, and Sangiran Early Man Site.\r\n\r\nFormed mostly as the result of volcanic eruptions from geologic subduction between Sunda Plate and Australian Plate, Java is the 13th largest island in the world and the fifth-largest in Indonesia by landmass at about 138,800 square kilometers (53,600 sq mi). A chain of volcanic mountains forms an east-west spine along the island. Three main languages are spoken on the island: Javanese, Sundanese, and Madurese, where Javanese is the most spoken; it is the native language of about 60 million Javanese people in Indonesia, most of whom live on Java. Furthermore, most residents are bilingual, speaking Indonesian (the official language of Indonesia) as their first or second language. While the majority of the people of Java are Muslim, Java''s population comprises people of diverse religious beliefs, ethnicities, and cultures.				                                					                                ', '                                                                                                        ', 'images/4.png'),
(16, 'Bali & Nusa Tenggara', '					                                					                                					                                					                                ', '                                                                                                                                                                                                                ', 'images/5.png'),
(17, 'East Indonesia', '					                                					                                					                                ', '                                                                                                                                                            ', 'images/6.png'),
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi_area`
--

INSERT INTO `destinasi_area` (`id_area`, `nama_area`, `deskripsi_area`, `deskripsi_area_singkat`, `gambar_area`, `destinasi_id`) VALUES
(17, 'Brastagi', '<div style="text-align: justify; "><span style="font-size: 18px;">Berastagi (Dutch: Brastagi), meaning "rice store", is a town and district of Karo Regency situated on a crossroads on the main route linking the Karo highlands of Northern Sumatra to the coastal city of Medan. Berastagi town is located around 66 kilometers (41 miles) south of Medan and about 1,300 meters (4300 feet) above sea level. The village rose to significance when Dutch settlers in Sumatra opened a boarding school there in the 1920s.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Located in the Barisan Mountains area, the mean annual temperature of the district is 18 Â°C (64 Â°F). During the day the temperature rises over 25 Â°C (77 Â°F) but at night to early morning it could drop to as low as 12 to 16 Â°C (53 to 61 Â°), it could also reach 9 Â°C (48 Â°F) during the rainy season. The weather can be fair and sunny during the day but may become foggy around dusk to night.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">The main economic activities in Berastagi centers on the colorful fruit and vegetable market, as well as tourism. Berastagi is famous for its passion fruit. The main attractions of the town are the two active volcanoes; Mount Sibayak, with its hot springs, and Mount Sinabung. Each mountain can be climbed in one day, but a guide is needed.[1]</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><b><span style="font-size: 18px;">Berastagi Fruit Market</span></b></div><div style="text-align: justify; "><span style="font-size: 18px;">The town is also a stop on the way to Lake Toba. The dominant ethnic and linguistic group is Karo Batak.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Berastagi is 11 km from the capital Karo Regency government in Kabanjahe. Airport bus from Kabanjahe directly to the new Kuala Namu International Airport v.v. is available.</span></div>					                                					                                					                                ', '<div style="text-align: justify;"><span style="font-size: 24px;">The picturesque town of Berastagi in the beautiful Karo highlands, is 70 km from Medan on the way to Lake Toba. Situated at an altitude of 1,300 meters, the town has a cool climate, ranging between 17-20 degrees Centigrade, making a refreshing break from the heat of the city. Days are extremely pleasant while nights can be quite cool.</span></div>                                                    ', 'images/1558126680331-2e9eef9edbe2f1d23244e78df6f026b2.jpeg', 12),
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
(31, 'Yogyakarta', '<div><div style="text-align: justify; "><span style="font-size: 18px;">This city is one of the foremost cultural centers of Indonesia. From strolling through the living museum of The Kraton or The Keraton (Sultanâ€™s Palace), to hanging out at the famous Alun Alun, to watching silversmiths produce amazing jewelry at Kotagede and maybe try a splurge shopping up at Malioboro road.</span></div><div style="text-align: justify; "><span style="font-size: 18px;">Chasing sunrise in famous temples like Prambanan and Borobudur in the neighboring town of Magelang, are only some of the many more ways to never get bored in this relatively small yet bustling city.&nbsp;</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">The Wonders of the Ancient Heritage</span></div><div style="text-align: justify; "><span style="font-size: 18px;">You can experience all five wonders in this artsy city. Starting from indulging in the natural wonders, by visiting scenic beaches and photogenic landscape. Parangtritis, Indrayanti, Pok Tunggal, Siung, Krakal, and Jogan are some of the famous beaches in town.</span></div><div style="text-align: justify; "><span style="font-size: 18px;">Breathtaking points such as Puncak Becici, Pinus Pengger, and Jurang Tembelan are only several of plenty more exciting back-to-nature destinations in Yogyakarta!</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">For culinary wonders, donâ€™t forget to try the Gudeg first, special cooking of traditional Javanese recipe that is iconic to this city. The Bakpia is a traditional snack with many enticing flavors that are popular for souvenirs. For a beverage, you can try the Jammu, a natural herb mix beverage based on ancient tradition used for natural remedies.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Batik is the national treasure based on Javanese word of â€œambaâ€ and â€œtitikâ€, meaning to write the dots. It is an art of decorating fabric using wax and dyeing process. Yogyakarta has a signature batik pattern that is usually made with a bright white basic. Some of the motifs are namely The Parang Kusumo, Kawung and Truntum, each was created with the special philosophy behind its every dots.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">There are Batik Tulis, Batik Cap, Batik Print and the mixed result of the techniques. The most expensive is the Batik Tulis, which are made of 100% hand paint ornaments. It will become even more expensive if it is made from precious silk fabric. Making a fine quality Batik Tulis can range from a day of production to a meticulous months-long process, depend on the size and sheer complicated details of the design.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Wayang is also an amazing art heritage known from Yogyakarta. There are the Wayang Kulit or leather puppet, played on a shadow puppet show by the dalang or puppet master through a screen lit by lights. Wayang Orang is the life-size performances depicting the same philosophical messages from ancient stories and is presented by men and women in elaborate traditional costumes.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">You can discover the Recreation wonders, by visiting the tourism villages in Yogyakarta. Tembi, Pentingsari, and Nglanggeran are three of the places that you can start with. Experience the authentic daily life of the locals, and learn some new skills, such as playing the gamelan, weaving janur and perform a Javanese traditional dance!</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Adventure wonders are also aplenty in Yogyakarta. Starting with exploring Mount Merapi National Park, riding the thrilling jeep ride and hiking Mount Nglanggeran, an ancient volcano located in a beautiful village.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Rock climbing can be done in Siung beach, while cave tubing is a major attraction in Goa Pindul, and you can try to visit Jomblang cave for an extraordinary caving experience.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Yogyakarta is indeed a city with numerous attractions to enjoy. All of this and many more to explore have brought Yogyakarta as the second most visited destination in Indonesia after Bali.</span></div><div style="text-align: justify; "><br></div></div>                                                    					                                					                                					                                ', '<div style="text-align: justify; "><span style="font-size: 24px;">Yogyakarta, together with its twin city Surakarta (Solo), is the cradle of civilization on Java. This city was the seat of power that produced the magnificent temples of Borobudur and Prambanan in the 8th and 9th centuries and the new powerful Mataram kingdom of the 16th and 17th centuries.</span></div><div style="text-align: justify; "><span style="font-size: 24px;">Yogyakarta was known with the slogan of â€œJogja The Neverending Asiaâ€œ for its endless appeals. Today, it is also renowned as â€œ Jogja Istimewa â€œ, a tagline that elaborates its special values.</span></div>                                                                                                                                                                                                                ', 'images/image11.jpg', 15),
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
(44, 'Medan', '<div style="text-align: justify; "><span style="font-size: 24px;">There are many tourist attractions in Medan, North Sumatra that you can visit when the holidays arrive. Medan is the 3rd largest city in Indonesia after Jakarta and Surabaya with ethnic, ethnic and cultural diversity in it such as the Batak, Malay, Javanese, Chinese, and other ethnic groups.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 24px;">The capital of North Sumatra is not only rich in cultural diversity but also holds quite a diverse tourism potential.&nbsp;</span><span style="font-size: 24px;">One of the tourism icons in Medan, North Sumatra, which is interesting to visit is Lake Toba which was once named the largest volcanic lake in the world.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 24px;">With a variety of charms, Lake Toba is one of the most reliable and most popular natural attractions in North Sumatra. Even famous to the corners of the world.&nbsp;</span><span style="font-size: 24px;">Clearwater with a beautiful view of the verdant mountains further adds to its appeal.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 24px;">Not to mention the existence of Samosir Island in the middle of the lake which is so iconic with the legendary stories that accompany it.&nbsp;</span><span style="font-size: 24px;">Now, besides visiting Lake Toba and traveling to Samosir Island, you can also explore other beautiful places in Medan that are no less interesting.</span></div>                                                    					                                					                                ', '<div style="text-align: justify;"><span style="font-size: 24px;">There are many tourist attractions in Medan, North Sumatra that you can visit when the holidays arrive. Medan is the 3rd largest city in Indonesia after Jakarta and Surabaya with ethnic, ethnic and cultural diversity in it such as the Batak, Malay, Javanese, Chinese, and other ethnic groups.</span></div>', 'images/Medan-medan.jpg', 12),
(45, 'Bukit Lawang', '<div>Bukit Lawang is a small tourist village on the bank of Bahorok River in North Sumatra province of Indonesia. Situated approximately 86 km northwest of the city of Medan, Bukit Lawang is known for the largest animal sanctuary of Sumatran orangutan (around 5,000 orangutans occupying the area) and also the main access point to the Gunung Leuser National Park from the east side.</div><div>The park is named after one of its highest points, the 3,381m Mount Leuser (Gunung Leuser). The Gunung Leuser National Park was originally created as a wildlife reserve.&nbsp;</div><div>Along with the two other National Parks (Kerinci Seblat and Bukit Barisan Selatan) on the island, it comprises the UNESCO World Heritage site of ''The Tropical Rainforest Heritage of Sumatra'' (status since 2004).&nbsp;</div><div>In 1973 a Swiss organization set up an orangutan rehabilitation centre in Bukit Lawang (Bukit Lawang literally means "door to the hills"). The purpose of the centre was to rehabilitate orangutans released from captivity. The rangers at the centre teach the orangutan all the necessary skills to survive in the wild. After an intense period of quarantine, readjustment to the natural habitat and reintegration into the (semi-)wild population, the orangutan is released back into the jungle. All orangutans released are still monitored by the rangers though the feeding platform not exist anymore due to orang utan is getting more and more wild.</div><div>Seeing the orangutans is a magical experience. About 10,000 live in this area. In Bukit Lawang, you can usually see them near the rehabilitation centre and at the feeding platform during the morning and afternoon feeding sessions. In Ketambe, you can go to 1-7 days treks into the jungle.&nbsp;</div><div>The best experience is an encounter in the jungle where there are many semi-wild and wild animals. The wild orangutan can be difficult to spot unless you go deep into the jungle. There are also white and black gibbons that make an amazing noise calling out to each other, and Thomas Leaf monkeys. If you are lucky, you may be able to see hornbills, toucans, moon snakes, monitor lizards.&nbsp;</div><div>Since there are very few (hundreds) still alive, it is very improbable that either the Sumatran Tiger or the Sumatran Rhinoceros will be encountered, although footprints and droppings have been reported. If you really want to see a tiger, you have to go deep, and be patient (waiting for weeks).&nbsp;</div><div>A jungle trek is a must. Seeing the orangutan in the wild may be one of the best experiences you will have in your life.&nbsp;</div><div>Everyone who is planning to go on a jungle trek is asked to refrain from any physical contact with the orangutans. Getting too close to an orangutan increases the risk of passing on disease and viral infection, which jeopardizes the orangutan''s chances of survival and in turn the health and survival of the wild orangutan population in the entire area. All guests should keep at least 10 meters away and move away if an orangutan approaches. The motto of any jungle adventure should be take only pictures, leave only footprints.</div>                                                    ', 'To explore the nature of Bukit Lawang, we provide you short 3 hours jungle trekking, fulldays jungle trekking, 2 days jungle trekking or longer trekking for 4 to 6 days jungle trekking accompanied by our experienced and skill full tour guide.                                                    ', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Danau Toba', 'Pemandangan Danau Toba', 'images/Danau Toba-tongging-ok.webp'),
(3, 'Bali', 'Pemandangan Bali', 'images/Bali-bali.jfif');

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
(2, '05 Days Wonders Medan - Leuser National Park Tracking', '<div style="text-align: justify;"><span style="font-size: 16px;">This is a full trip that will allow you to see many aspects of Sumatra Island. You will start this tour by visiting the famous Tangkahan &amp; Bukit Lawang area to meet with two special wild animals: Elephant and Orangutans. You will continue to Brestagi and Lake Toba which offers grandiose landscape with its largest lake in the world. The other part of the trip focuses more on meeting the local people and discovering their daily life. End of the trip will end relaxing on Cubadak Island.</span></div>					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15924.9883114096!2d97.1648601371933!3d3.756304067929982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3039842ba946e1c5%3A0xced7dc8e0b1717b3!2sGn.%20Leuser!5e0!3m2!1sid!2sid!4v1571641775213!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '<div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 1: Medan - Bukit Lawang (Bukit Lawang Cottage)</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">Arrival at Kuala Namu Int Airport Medan drive to Bukit Lawang with a stop at Crocodile farm, and several Plantations for rubber and Palm oil arrival at Bukit Lawang check in to the hotel.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 2: Bukit Lawang - Tracking Leuser Park (Overnight Tent or Shelter) B.L.D</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast at the hotel then walking trough the bank of the river and crossing the river by traditional canoe and walking up the jungle to see the Orang Utan on their feeding time. After feeding the Orang Utan tracking through the Leuser National Park, walking around Leuser National Park is the time to experience many kinds of flora and fauna as well as enjoy the song of birds and Siamang? The Black Gibbon? and overnight in a tent or shelter.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 3: Continue Tracking - Return to Hotel (B.L)</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast at the hotel then walking trough the bank of the river and crossing the river by traditional canoe and walking up the jungle to see the Orang Utan on their feeding time. After feeding the Orang Utan tracking through the Leuser National Park, walking around Leuser National Park is the time to experience many kinds of flora and fauna as well as enjoy the song of birds and Siamang? The Black Gibbon? and overnight in a tent or shelter.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast prepared by tour guide continue tracking, today is full day walking and explore the rain tropical forest with their wildlife living in their natural habitat. Afternoon return to the hotel.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 4: Bukit Lawang - Medan (Emerald Garden Htl / Asean Int Htl) B</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast free at own leisure for swimming or walking and then drive to Medan arrival in Medan, city tour by visiting Great Mosque, Sultan Palace and Chinese Temple.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 5: Hotel - Airport.B.</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast transfer to Airport for your flight to the next destination.</span></div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             '),
(6, '05 Days / 04 Nights Padang - Harau Valley Wonders Tracking', '<div style="text-align: justify; "><span style="font-size: 16px;">The Harau Valley is sometimes known as the Yosemite of Indonesia. Here, gibbons and macaques and a variety of wildlife still roam freely as this area in the Lima Puluh Kota district has actually been designated nature conservation, covering some 669 acres. Its beautiful landscape, its peaceful serenity interrupted only by the calls of the macaques and the chirping of birds, make the Harau Valley the perfect holiday getaway.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">The steep rock walls here are not only a natural invitation to photographers, but they also attract rock climbers who consider climbing these steep walls a significant challenge. There are 300 spots from where to climb. Looking up, the clear blue sky above is the ultimate finish line as you grab the belay devices, carabiners, and necessary ropes to reach the heights of the Harau Valley. This valley is infrequently visited so that you may have the whole valley all to yourself.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">Relaxing is one of the best time-elapsing activities here. Order a cup of coffee and local delicacies and settle down to write the last chapter of your travels and the extraordinary experiences you had in wonderful Indonesia. Take time for a short walk around the village and watch how people live. Some of the women here work in the rice fields while men plow the fields behind water buffalos, providing the perfect shot for you to take.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">Public transportation is available for those wishing to spend the entire vacation time in and around Bukittinggi. Else, renting a minivan or a motorbike will guarantee the time well spent for day-trippers to these Minangkabau highlands.</span></div>					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.92283494485!2d100.61899011727311!3d-0.1163877468062893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2aae8062d23863%3A0x4039d80b220d9c0!2sKec.%20Harau%2C%20Kabupaten%20Lima%20Puluh%20Kota%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1571653763742!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '<div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 1: Airport / Padang - Bukit Tinggi - Harau (Abdi Homestay)</b></span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">Upon arrival at Minangkabau International Airport Padang pick up by our Tour guide and then drive to Payakumbuh, via Bukittinggi, on the way stop at Anay Valley waterfall, afternoon arrival at Harau Valley check in to simple guest house Lembah Echo.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 2: Harau Jungle Tracking. B.L.D</b></span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast start tracking up to the jungle with a fantastic view of the rice field and villages can be enjoyed, on the tracking experience wildlife with its flora and fauna. Will see several types of birds, monkeys like black gibbons, long tale Macaca, the footstep of wild deer, tapir, several kinds of the butterfly, orchids and will enjoy several waterfalls and overnight in a tent near a cave. (Lunch and Dinner provided by the tour guide).</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 3: Harau Tracking - Hotel B.L</b></span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast continues tracking in the jungle and experiences a different side of the jungle with it natures and again the several kinds of the wild animal will be found in the rain tropical forest, afternoon return back to the hotel walking via several small villages to see the daily life of local people. (Lunch provided by Tour Guide).</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 4: Minangkabau Tour - Bukittinggi (Royal Denai Htl / Similar) B</b></span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast, drive to Batusangkar to see the old Palace of Minangkabau Kingdom at Pagaruyung and then continue to drive to Singkarak Lake and arrival at Bukittinggi city tour visiting Sianok Canyon, Fort de Kock, museum and market. Afternoon checks in to the hotel.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 5: Bukittinggi - Padang / Airport. B</b></span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast drive to Padang and arrival at Padang transfer directly to the Airport.</span></div>                                                                                                                                                                                                                '),
(8, '05 Days Bugis Toraja Tour', '<div style="text-align: justify;"><span style="font-size: 16px;">Tana Toraja is indeed famous for its unique culture. One of them is the funeral ceremony called Rambu Solo. Rambu Solo is a funeral procession of Torajan people, which is different from common funeral ceremony.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">By this Rambu Solo funeral ceremony, you can see that Tana Torajan people respect their ancestors very well.&nbsp; The funeral procession consists of several show lists, wherein each of the show, you will able to see the cultural values that still highly maintained by the people of Tana Toraja.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><b><span style="font-size: 16px;">Funeral Ceremony Procession</span></b></div><div style="text-align: justify; "><span style="font-size: 16px;">Mainly, the funeral ceremony is divided into 2 processions, which are Funeral procession (rante), and Art Show. These processions arenâ€™t performed separately but completing each other into a full funeral ceremony.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">The funeral Procession / rante consists of sequenced shows. It is held in an open space located in the middle of the Tongkonan Traditional House complex. Those shows are:</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">- Maâ€™Tudan Mebalun is a corpse wrapping process.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Maâ€™Roto, that is the process of decorating the coffin with gold and silver string.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Maâ€™Popengkalo Alang is a process of parading the wrapped corpse to a barn until its ready to be buried.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Maâ€™Palao or Maâ€™Pasonglo is a process of parading the corpse from Tongkonan House to a cemetery complex called Lakkian.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">The second procession is the Art Show. This process held not only to celebrate but also a form of respect and pray for the dead. In this procession, you can watch:</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Buffalo parade which will be sacrificed.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Some local music show which are Paâ€™Pompan, Paâ€™Dali-dali, and Unnosong.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Some traditional dancing shows such as Paâ€™Badong, Paâ€™Dondi, Paâ€™Randing, Paâ€™katia,&nbsp;</span><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Paâ€™Papanggan, Passailo and Paâ€™Silaga Tedong.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Buffalo fighting shows, before those buffaloes, are sacrificed.</span></div><div style="text-align: justify; "><span style="font-size: 16px;">-</span><span style="font-size: 16px;">&nbsp;</span><span style="font-size: 16px;">Buffalo slaughtering as a sacrificed animal.</span></div><div>				                                					                                					                                					                                </div>					                                					                                					                                					                                					                                ', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510043.4637670382!2d119.60015972164896!3d-2.898361046769332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93c15594bf5fe7%3A0x3bd5d554371f59fa!2sKabupaten%20Toraja%20Utara%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1571655753618!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '<div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 1: Airport / Makassar - Sengkang</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;"><b><br></b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">Upon arrival at Hasanuddin Airport Makassar, transfer to Sengkang a small village located in the center of the former Bugis kingdom on Lake Tempe. On the way, we will visit Bantimurung located 42 km east-north Makassar, in a steep limestone valley with tropical vegetation and a 15-meter high waterfall. lunch en route. In the afternoon we will try to catch the beautiful views of the sunset over the Lake Tempe we will cross the lake by motorized canoe and visit the fishermen families living on the floating villages Dinner and overnight at a guesthouse in Sengkang.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 2: Sengkang - Rantepao</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;"><b><br></b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast, we visit a traditional silk factory, where women hand spin and weave silk cloth. Then transfer to Tana Toraja via Palopo, passing through spectacular view along the road to Toraja. Lunch en route. In the afternoon arrive in Rantepao. Dinner and overnight in Hotel.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 3: Explore Toraja</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;"><b><br></b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast, a full day exploring Toraja. First, we will visit Lemo to see rows of Tau Tau statues and the hanging graves. Onwards to Suaya to discover the secret of the Baby Tree, Also visiting today Londa, to see an ancient grave where the deceased are entombed. At Kete Kesu, one of the oldest Torajan villages we can see Tongkonans, and old rice barns, also famous for its traditional colorful woodcarving. Lunch in Rantepao. Dinner and overnight at Hotel.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 4: Explore Toraja</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;"><b><br></b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast, drive to Batusangkar to see the old Palace of Minangkabau Kingdom at Pagaruyung and then continue to drive to Singkarak Lake and arrival at Bukittinggi city tour visiting Sianok Canyon, Fort de Kock, museum and market. Afternoon checks in to the hotel.</span></div><div style="text-align: justify; "><br></div><div style="text-align: justify; "><span style="font-size: 18px;"><b>Day 5: Rantepao - Airport</b></span></div><div style="text-align: justify; "><span style="font-size: 18px;"><b><br></b></span></div><div style="text-align: justify; "><span style="font-size: 18px;">After breakfast, transfer back to Makassar. Lunch will be served in a seafood restaurant in Pare-Pare. Afterward, transfer directly to Hasanuddin Airport Makassar to catch your flight to your next destination.</span></div>                                                                                                                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata_detail`
--

CREATE TABLE IF NOT EXISTS `paket_wisata_detail` (
`id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `destinasi_area_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata_detail`
--

INSERT INTO `paket_wisata_detail` (`id`, `paket_wisata_id`, `destinasi_area_id`) VALUES
(138, 2, 17),
(139, 6, 22),
(140, 6, 24),
(141, 8, 36);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `telepon`, `pesan`) VALUES
(6, 'Ricky Julpiter Sipayung', 'rickyjulpiter14@gmail.com', '082274660962', 'esdijk');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
`id` int(10) NOT NULL,
  `nama` text,
  `deskripsi` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'New Avanza 2019', '                                                    ', 'images/download.jfif'),
(2, 'New Innova Reborn 2019', '                                                    ', 'images/0000453461.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  `wa` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `subject` text NOT NULL,
  `pesan` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `nama`, `email`, `telepon`, `wa`, `alamat`, `subject`, `pesan`) VALUES
(3, 'Ricky Julpiter Sipayung', 'rickyjulpiter14@gmail.com', '082274660962', '', '', '', 'qwedasdasda'),
(4, 'Ricky Julpiter Sipayung', 'rickyjulpiter14@gmail.com', '082274660962', '082274660962', 'Jl. Abdul Haris Nasution Gg Karya April no.12', 'adasdasdasd', 'asdasdasd'),
(8, 'Ricky Julpiter Sipayung', 'rickyjulpiter14@gmail.com', '082274660962', '12312312', 'Jl. Abdul Haris Nasution Gg Karya April no.12', 'asdasd', 'asdasdasd');

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
(1, 'Synergi Ravelino Tours & Travel', 'Your Link To The Best Traveling', '<p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">Synergi Ravelino Tours & Travel (1998) is a leading Dutch-Indonesian travel agency and tour operator. We offer a wide and varied choice of fascinating flexible programs that ensure fresh and lively ways to see Sumatra and other parts of Indonesia.</span></font></p><p style="line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><b><span style="font-size: 18px;">Our services cover:</span></b></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Ticketing: Domestic and international.</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Package Tours: Inbound (adventure, culture, leisure & eco) and outbound tours.</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Ferry tickets</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Multi-lingual tour guide services</span></font></p><p style="line-height: 1.2;"><font color="#03536a"><span style="font-size: 18px;">- Car & tourist coach rental</span></font></p><p style="line-height: 1.2;"><span style="color: rgb(3, 83, 106); font-size: 18px;">-</span><span style="color: rgb(3, 83, 106); font-size: 18px;">Â </span><font color="#03536a"><span style="font-size: 18px;">Minibus tours for 2 up to 6 persons (on request)</span></font></p><p style="line-height: 1.2;"><span style="color: rgb(3, 83, 106); font-size: 18px;">-</span><span style="color: rgb(3, 83, 106); font-size: 18px;">Â </span><font color="#03536a"><span style="font-size: 18px;">Hotel vouchers</span></font></p><p style="line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;"><i>We are committed to providing excellence and quality to our clients.</i></span></font></p><p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">For the out- and incoming clients, we specialize in tailor-made itineraries for groups and individuals without forgetting competitive prices or compromising our high level of service. Every client is important to us and we are happy to offer the most competitive rates whether it is for the individual client or for groups in their hundreds. All our itineraries are subject to change to suit the interests of the individual or group.</span></font></p><p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">Our guides are experienced, multi-lingual licensed professionals, with extensive knowledge of geography, history, religion, and local customs. We provide our guides with comprehensive information about their groups so that their holiday will be remembered as "the Indonesia experience" and not just as another run-of-the-mill sightseeing tour.</span></font></p><p style="text-align: justify; line-height: 1.4;" trebuchet="" ms",="" tahoma;="" font-size:="" 13px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><font color="#03536a"><span style="font-size: 18px;">The management of Synergi Ravelino Tours & Travel is one of the pioneers of leisure travel to Sumatra. Therefore we also provide personalized study tours for our professional counterparts from abroad. References can be provided upon request.</span></font></p>					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                ', 'Jalan A.R Hakim 174 A Medan', '+62-61 7352981', 'ravelino@ravelinotravel.com', '#', '#', '#', '#', 'images/sdsd.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Mickey Holiday Ticket', '<div>Funland started to attend as one of Mikie Holiday Resort facilities since October 10, 2000, to serve visitors who stay at Mikie Holiday Resort and guests that are not staying. Located on the edge of the highway Berastagi Medan, Funland becomes one of the major tourist attractions in the country for Berastagi city that had cool air and altitude above 1,400 meters above sea level. Funland is also a place for a family holidays with the first outdoor concept in North Sumatra.</div><div><br></div><div>A busy life and living in the city every day have made people become stress and forget about the fun and entertainment. Free time with your family, loved ones, friends become difficult to obtain. To refresh your day with family you need a place of recreation in a relaxed atmosphere, comfortable and harmonious.</div><div><br></div><div>Funland offers choices of over 30 kinds of attractions that can be played only by using 1 ticket in the middle of nature that can rebuild your harmony and joy with family.</div><div><br></div><div>To pamper and add a relaxing family fun time, Funland provides an outlet selling a variety of delicious and tasteful dishes at the Frisbee, more than Fried Chicken, Snack Bar, Jungle Resto, Dome, and Bumper Bonanza.</div><div><br></div><div>With the motto "We Give You The Best in Family Entertainment" we will always provide the best for your family.</div>                                                    ', 'images/mickey.jpg');

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
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id`);

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
MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `paket_wisata_detail`
--
ALTER TABLE `paket_wisata_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `paket_wisata_gambar`
--
ALTER TABLE `paket_wisata_gambar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
