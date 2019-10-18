-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2019 pada 11.40
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravelinotravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `deskripsi_singkat` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `deskripsi`, `deskripsi_singkat`, `gambar`) VALUES
(3, 'North Sumatra', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>					                                					                                					                                ', 'Planning for the perfect family trip', 'images/bali.jpg'),
(4, 'West Sumatra', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(5, 'South Sumatra', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(6, 'Java Island', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(7, 'Bali', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(8, 'East Nusa Tenggara', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(9, 'Sulawesi', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(10, 'Kalimantan', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg'),
(11, 'Maluku', '<p class=\"articlepara\" style=\"text-align: justify;\">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>', 'Planning for the perfect family trip', 'images/bali.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi_area`
--

CREATE TABLE `destinasi_area` (
  `id_area` int(10) NOT NULL,
  `nama_area` varchar(100) DEFAULT NULL,
  `deskripsi_area` text DEFAULT NULL,
  `deskripsi_area_singkat` text DEFAULT NULL,
  `gambar_area` varchar(100) DEFAULT NULL,
  `destinasi_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi_area`
--

INSERT INTO `destinasi_area` (`id_area`, `nama_area`, `deskripsi_area`, `deskripsi_area_singkat`, `gambar_area`, `destinasi_id`) VALUES
(10, 'Brastagi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.					                                					                                ', 'Planning for the perfect family trip                                                                                                        ', 'images/destination-fw1.jpg', 3),
(11, 'Dua Island', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.					                                					                                					                                					                                					                                					                                ', 'Planning for the perfect family trip                                                                                                                                                                                                                                                                                                                        ', 'images/destination-fw1.jpg', 4),
(16, 'Kolonwulu', 'asdasd', 'asdasd', 'images/bali.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id` int(10) NOT NULL,
  `nama` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `peta` text DEFAULT NULL,
  `timeline` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id`, `nama`, `deskripsi`, `peta`, `timeline`) VALUES
(1, '07 DAYS / 06 NIGHTS MEDAN - BUKIT LAWANG TRACKING AND RAFTING - A', '<div class=\"description-content\">\r\n                                <p>Brazilï¿½s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentinaï¿½s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories youï¿½ll cherish for life.</p>\r\n                                <table>\r\n                                    <thead>\r\n                                    </thead>\r\n                                    <tbody>\r\n                                        <tr>\r\n                                            <td class=\"title\">Departure</td>\r\n                                            <td><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> San Francisco International Airport</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class=\"title\">Departure Time</td>\r\n                                            <td><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class=\"title\">Maximum travellers</td>\r\n                                            <td><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> 23</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class=\"title\">Languages</td>\r\n                                            <td><i class=\"fa fa-file-audio-o\" aria-hidden=\"true\"></i> English, Thai, Malayt</td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class=\"title\">Includes</td>\r\n                                            <td>\r\n                                                <ul>\r\n                                                    <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i> Airfare</li>\r\n                                                    <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i> Transportation</li>\r\n                                                    <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i> Professional Guide</li>\r\n                                                </ul>\r\n                                            </td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class=\"title\">Excludes</td>\r\n                                            <td class=\"excludes\">\r\n                                                <ul>\r\n                                                    <li><i class=\"fa fa-times\" aria-hidden=\"true\"></i> Departure Taxes</li>\r\n                                                    <li><i class=\"fa fa-times\" aria-hidden=\"true\"></i> Entry Fees</li>\r\n                                                    <li><i class=\"fa fa-times\" aria-hidden=\"true\"></i> Insurance</li>\r\n                                                </ul>\r\n                                            </td>\r\n                                        </tr>\r\n                                        <tr>\r\n                                            <td class=\"title\">Popular Places</td>\r\n                                            <td>\r\n                                                <ul>\r\n                                                    <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Eiffel Tower</li>\r\n                                                    <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Eiffel Tower</li>\r\n                                                    <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Eiffel Tower</li>\r\n                                                </ul>\r\n                                            </td>\r\n                                        </tr>\r\n                                    </tbody>\r\n                                </table>\r\n                            </div>					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                					                                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28185.510535377554!2d86.90746548742861!3d27.98811904127681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2z4KS44KSX4KSw4KSu4KS-4KSl4KS-!5e0!3m2!1sne!2snp!4v1544516755007\" style=\"border:0\" allowfullscreen></iframe>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ', '<ul class=\"timeline\">\r\n                                    <!-- Item 1 -->\r\n                                    <li>\r\n                                        <div class=\"direction-r\">\r\n                                            <div class=\"day-wrapper\">\r\n                                                <span>1</span>\r\n                                            </div>\r\n                                            <div class=\"flag-wrapper\">\r\n                                                <span class=\"flag\">Day 1 - 2 : Flights to Kathmandu.</span>\r\n                                            </div>\r\n                                            <div class=\"desc\">\r\n                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <!-- Item 2 -->\r\n                                    <li>\r\n                                        <div class=\"direction-r\">\r\n                                            <div class=\"day-wrapper\">\r\n                                                <span>3</span>\r\n                                            </div>\r\n                                            <div class=\"flag-wrapper\">\r\n                                                <span class=\"flag\">Day 3 : Arrive Kathmandu</span>\r\n                                            </div>\r\n                                            <div class=\"desc\">\r\n                                                <p>Arrive in Kathmandu and relax while enjoying the color and energy of Nepalï¿½s capital city. Duffels of personal climbing gear and high-altitude clothing will be collected for the cargo flights to Lukla and will be waiting for you at Base Camp. </p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <!-- Item 3 -->\r\n                                    <li>\r\n                                        <div class=\"direction-r\">\r\n                                            <div class=\"day-wrapper\">\r\n                                                <span>4</span>\r\n                                            </div>\r\n                                            <div class=\"flag-wrapper\">\r\n                                                <span class=\"flag\">Day 4 - 5 : Enjoy Kathmandu</span>\r\n                                            </div>\r\n                                            <div class=\"desc\">\r\n                                                <p>Enjoy Kathmandu with a city tour and attend any governmental and media affairs involving team members.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <!-- Item 4 -->\r\n                                    <li>\r\n                                        <div class=\"direction-r\">\r\n                                            <div class=\"day-wrapper\">\r\n                                                <span>6</span>\r\n                                            </div>\r\n                                            <div class=\"flag-wrapper\">\r\n                                                <span class=\"flag\">Day 6 : Fly to Lukla</span>\r\n                                            </div>\r\n                                            <div class=\"desc\">\r\n                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                    <li>\r\n                                        <div class=\"direction-r\">\r\n                                            <div class=\"day-wrapper\">\r\n                                                <span>7</span>\r\n                                            </div>\r\n                                            <div class=\"flag-wrapper\">\r\n                                                <span class=\"flag\">Day 7 - 15 : Trek to Base Camp</span>\r\n                                            </div>\r\n                                            <div class=\"desc\">\r\n                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. Additional acclimatization days are scheduled at Namche (11,400ft/3,475m) and Pheriche (14,000ft/4,267m).</p>\r\n                                            </div>\r\n                                        </div>\r\n                                    </li>\r\n                                </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata_detail`
--

CREATE TABLE `paket_wisata_detail` (
  `id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `destinasi_area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_wisata_detail`
--

INSERT INTO `paket_wisata_detail` (`id`, `paket_wisata_id`, `destinasi_area_id`) VALUES
(48, 1, 11),
(49, 1, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata_gambar`
--

CREATE TABLE `paket_wisata_gambar` (
  `id` int(11) NOT NULL,
  `paket_wisata_id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_wisata_gambar`
--

INSERT INTO `paket_wisata_gambar` (`id`, `paket_wisata_id`, `gambar`) VALUES
(12, 1, 'images/tour1-0-barcode.jpeg'),
(13, 1, 'images/tour1-1-barcode.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rent`
--

CREATE TABLE `rent` (
  `id` int(10) NOT NULL,
  `nama` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rent`
--

INSERT INTO `rent` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Ticket Mickey Holidayasd', 'Description Goes Hereasd                                                                                                        ', 'images/author.jpg'),
(4, 'asdasd', 'asdasd', 'images/Add a heading (1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `nama`, `deskripsi`, `alamat`, `telepon`, `email`, `facebook`, `twitter`, `instagram`, `youtube`, `logo`) VALUES
(1, 'Synergi Ravelino Tours & Travel', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p><p><b>					                                					                                </b>					                                </p>					                                					                                					                                					                                					                                					                                					                                					                                					                                ', 'Jalan A.R hakim 175 A medan', '62811651399', 'ravelino@ravelinotravel.com', '#', '#', '#', '#', 'images/Yatra-01.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testi` int(10) NOT NULL,
  `nama_testi` varchar(100) NOT NULL,
  `deskripsi_testi` text NOT NULL,
  `gambar_testi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id_testi`, `nama_testi`, `deskripsi_testi`, `gambar_testi`) VALUES
(1, 'Julpiter Sipayung', 'Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.', 'images/danautoba.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL,
  `nama` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Ticket Mickey Holiday', 'Description Goes Here                                                    ', 'images/at3.jpg'),
(2, 'asdasd', 'asdasd', 'images/ASITA-300x239.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `destinasi_area`
--
ALTER TABLE `destinasi_area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_wisata_detail`
--
ALTER TABLE `paket_wisata_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_wisata_gambar`
--
ALTER TABLE `paket_wisata_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `destinasi_area`
--
ALTER TABLE `destinasi_area`
  MODIFY `id_area` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `paket_wisata_detail`
--
ALTER TABLE `paket_wisata_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `paket_wisata_gambar`
--
ALTER TABLE `paket_wisata_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
