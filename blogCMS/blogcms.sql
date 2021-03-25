-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 05:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `text`) VALUES
(1, 'Internet'),
(2, 'General'),
(3, 'PHP'),
(4, 'PYTHON');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `date`, `body`, `img`, `author`, `keywords`) VALUES
(1, 'Simple Ethernet post', 2, 'Mart, 15, 2021', 'Ethernet kao protokol je popularan način povezivanja različitih tipova računara u lokalnu mrežu standardnim kablom. Razvijen je od strane “Xerox”-a i nalazi se gotovo na svakom računaru. Definisan je IEEE 802.3 standardima na fizičkom sloju veze OSI (eng: Open Systems Interconnection) referentnog modela. Ethernet je širokopojasni upotrebni standardizovani model za LAN i WAN mreže. MAC interfejs od 48 bita ima jedinstven identifikacioni model za primaoca i pošiljaoca.', 'pictures/bg3.jpg', 'Milutin Gavrilovic', 'PHP, Vezbe'),
(2, 'Simple HTTPS post', 1, 'Mart, 16, 2021', 'HTTPS (eng: Hypertext Transfer Protocol Secure) je kombinacija HTTP-a sa SSL/TSL protokolom. HTTPs obezbeđuje enkripciju i sigurnu identifikaciju servera, koristeći port 443. Glavna ideja HTTPS protokola je da se kreira bezbedni kanal preko nezaštićene mreže. Sertifikat se izdaje od strane proverenog i poverljivog izdavača (Certificate Authority), a to je preduslov da server bude zaštićen od napada. Kod pristupanja web stranicama koje koriste neispravne (nevalidne) sertifikate, noviji pregrledači ispisuju pitanje preko čitavog ekrana. Takođe u adresnom baru postoji precrtani https:// crvene boje koji govori da sertifikat nije validan.', 'pictures/bg4.jpg', 'Milutin Gavrilovic', 'https, internet, secure'),
(3, 'PHP Programiranje', 3, 'Mart, 25, 2021', 'Programiranje ili računarsko programiranje (engl. programming) jeste veština pomoću koje korisnik stvara i izvršava algoritme koristeći određene programske jezike da bi napravio računarski program. Programiranje sadrži elemente umetnosti, nauke, matematike i inžinjerstva. Izvor: Wikipedia.', 'pictures/bg1.jpg', 'Milutin Gavrilovic', 'PHP, Programiranje, Development'),
(4, 'Python programiranje', 4, 'Mart, 25, 2021', 'Moj Python elektro prvenac (Keep It Simple Stupid) - Simulacija semafora na RPI i breadbordu. Semafor funkcionise samo ako je input time 1, za 2 se poziva samo jedna funkcija, a za sve ostalo druga (Sto daje mogucnost za vise scenarija ...). 3 diode, crvena, zuta i zelena na razlicite GPIO, jedan GND za sve tri i otpornici odgovarajuci led diodama. Ako nekoga zanima detaljnije, mogu poslati i semu za bb.\r\n\r\n', 'pictures/bg2.jpg', 'Milutin Gavrilovic', 'Python, Programiranje, Development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
