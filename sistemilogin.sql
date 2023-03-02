-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Mar 02, 2023 at 01:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemilogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `lajmi`
--

CREATE TABLE `lajmi` (
  `lajmi_id` int(11) NOT NULL,
  `lajmi_titull` varchar(255) NOT NULL,
  `lajmi_permbajtja` text NOT NULL,
  `autori` varchar(120) NOT NULL,
  `datapostimit` datetime NOT NULL,
  `lajmi_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lajmi`
--

INSERT INTO `lajmi` (`lajmi_id`, `lajmi_titull`, `lajmi_permbajtja`, `autori`, `datapostimit`, `lajmi_foto`) VALUES
(6, 'Messi fiton çmimin \"The Best\"', ' FIFA në një ceremoni në Paris është duke zgjedhur më të mirët në Botë.\r\n\r\nLionel Messi është zgjedhur futbollisti më i mirë në Botë. Kjo është hera e dytë që ky çmim është në dorë të argjentinasit.', 'erjonahmeti', '2023-02-28 18:05:12', 'Photos/messi-the_best.jpg'),
(7, 'Shansi i fundit për Mbappen që t’i bashkohet Real Madridit – rrjedhë skenari', ' Kylian Mbappe thuhet se ka vetëm katër muaj për të shfrytëzuar opsionin për të vazhduar kontratën e tij për një vit shtesë me Paris Saint-Germain.\r\n<br><br>\r\nYlli i PSG thuhet se nënshkroi një kontratë trevjeçare përpara sezonit 2022-23, por sipas L’Equipe  është një kontratë dyvjeçare me opsionin e një sezoni shtesë.\r\n<br><br>\r\nKjo do të thotë se në fund të këtij sezoni, sulmuesi do të hyjë në 12 muajt e fundit të marrëveshjes së tij, dhe PSG do të jetë përsëri në pozicionin e vendosjes nëse do të përpiqet të zgjasë kontratën e tij apo ta shesë atë për të shmangur humbjen e tij falas në fund të kontratës.\r\n<br><br>\r\nKjo do të thotë gjithashtu se 24-vjeçari mund të largohet falas janarin e ardhshëm nëse nuk arrihet një marrëveshje mes dy palëve.\r\n<br><br>\r\nNëse fituesi i Këpucës së Artë të Kupës së Botës nuk pranon të rinovojë kontratën me PSG-në në afatin katër mujor, atëherë klubit parisien mund t’i duhet të arkëtojë para në verë nga ai. ', 'erjonahmeti', '2023-02-28 18:38:13', 'Photos/wp9745188.webp'),
(8, 'Ronaldo zgjidhet futbollist i “muajit” në Arabinë Saudite', ' Cristiano Ronaldo është zgjedhur futbollisti i “muajit” i Pro Ligës Saudite për muajin shkurt pasi që shënoi tetë gola në katër ndeshje për Al – Nassr\r\n<br><br>\r\nPasi që nuk shënoi asnjë gol apo bëri një asist gjatë tërë janarit, superylli portugez me në fund ka zgjedhur që zgjedhe një klub të ri, duke regjistruar dy asiste në tetë sulme të tij. Përpjekjet e Ronaldos kanë ndihmuar që ai të çimentojë në vendin e parë në tabelë dhe paraqitjet e tij janë shpërblyer me çmimin individual, që më parë i ishte dhënë futbollistit të Al – Hilal, Salem Al-Dawsari.', 'irinadolli', '2023-02-28 18:52:58', 'Photos/wp11885078.jpg'),
(9, 'Napoli po e blindon Rrahmanin, kontratë afatgjate dhe rritje e pagës për mbrojtësin', ' Amir Rrahmani është padyshim lideri i mbrojtjes së Napolit dhe njëri nga më meritorët që kjo skuadër ka marshuar drejt titullit kampion në Seria A.\r\n<br<>br>\r\nQendërmbrojtësi kosovar është rritur shumë nga ardhja e Luciano Spallettit dhe tani është një nga pikat kyçe të Napolit.\r\n<br<>br>\r\n29-vjeçari ka kontratë me Napolin deri në verën e vitit 2024, por klubi po mundohet ta blindojë atë me një kontratë të re.\r\n<br<>br>\r\nTuttomercatoweb ka raportuar se palët janë në bisedime dhe janë në rrugën e duhur për të gjetur marrëveshjen për të nënshkruar.\r\nDrejtuesit e klubit italian i kanë ofruar zgjatjen e kontratës deri në verën e vitit 2027 dhe këtë vlerësim të klubit e ka mirëpritur kapiteni i Kosovës.\r\n<br<>br>\r\nAktualisht Rrahmani ka një pagë prej 1,8 milionë eurove neto në sezon, por sipas mediave italiane pritet të ketë rritje të ndjeshme të pagës pasi kosovari konsiderohet si një nga mbrojtësit më të mirë në Serie A.\r\nPalët pritet të ulen për të nënshkruar kontratën e re gjatë muajit mars, derisa Rrahmani do të mbetet në Napoli së paku deri në moshën 33 vjeçare.\r\n<br<>br>\r\nKujtojmë që prishtinasi është pjesë e Napolit që nga janari i vitit 2020, teksa këtë edicion ka zhvilluar 17 ndeshje ku ka shënuar një gol e ka asistuar në një tjetër.', 'irinadolli', '2023-02-28 18:58:21', 'Photos/amir-rrahmani.jpg'),
(10, 'Skuadra e Muriqit merr dënimin për ofendimet ndaj Vinicius', ' Skuadra e Muriqit merr dënimin për ofendimet ndaj Vinicius \r\nPas disa javësh hetime, Komisioni i Përhershëm i Komisionit Shtetëror kundër dhunës, racizmit, ksenofobisë dhe intolerancës në sport ka marrë vendim ndaj tifozit që shprehu fyerje raciste ndaj Vini Jr në ndeshjen e La Liga-s mes Mallorca dhe Real Madrid.\r\n<br><br>\r\n“Gjobë prej 4000 euro dhe ndalim i hyrjes në ambiente sportive për një periudhë 12 mujore , ndaj një individi që u identifikua si autori i fyerjeve raciste të bëra ndaj lojtarit të Real Madrid Vinícius Junior në ndeshjen RCD Malllorca-Real Madrid CF. , mbajtur më 5 shkurt” është dënimi i marrë ndaj Mallorcës.', 'erjonahmeti', '2023-02-28 19:00:57', 'Photos/vinimallorca.jpg'),
(11, 'Di Maria mund të marr ofertë fantastike nga MLS', ' Reprezentuesi argjentinas Angel Di Maria mund të marrë një ofertë fantastike nga Inter Miami.\r\n<br><br>\r\nPasi ndihmoi Argjentinën të fitonte Kupën e Botës në Katar, Angel Di Maria shënoi një het-trik kundër Nantes për ta çuar Juventusin në mesin e 16 ekipeve më të mira të Ligës së Evropës.\r\n<br><br>\r\nMegjithatë, argjentinasi ka qenë i lidhur me një lëvizje në MLS të SHBA-së, me kontratën e tij me Juventusin që skadon këtë verë.\r\nEdhe pse Di Maria raportohet se dëshiron të qëndrojë në Evropë, La Gazzetta dello Sport shkruan se ai është në radarin e Inter Miami.\r\n<br><br>\r\nJuventusi mund t’i ofrojë futbollistit argjentinas një pagë më të ulët, ndërsa Inter Miami është gati të “hap thesin ” dhe të tërheqë 35-vjeçarin me një ofertë tërheqëse.\r\nInter Miami është në bashkëpronësi të David Beckham, i cili është gjithmonë në kërkim të nënshkrimeve të klasit botëror. Klubi është i interesuar edhe për Lionel Messin dhe Sergio Busquets, kontratat e të cilëve skadon në fund të sezonit.\r\n“Ne duam të sjellim lojtarët më të mirë në botë në këtë klub. Messi dhe Busquets kanë spikatur vitet e fundit. Ata janë lojtarë të mëdhenj që do të japin një kontribut të madh për klubin. Do të ishte një punë e madhe për MLS”, kishte thënë më herët trajneri i Miamit, Phil Neville.', 'irinadolli', '2023-02-28 19:01:10', 'Photos/dimaria.jpg'),
(12, 'Goditje e radhës për Chelsean, konfirmohet lëndimi serioz për Thiago Silvan', ' Chelsea edhe zyrtarisht ka njoftuar lëndimin e Thiago Silvas. Mbrojtësi brazilian do të jetë jashtë fushave për 5-6 javë.\r\n<br><br>\r\n“Ai ka pësuar një dëmtim në gju dhe i është nënshtruar vlerësimit të mëtejshëm. Skanimi i konfirmuar tregon dëmtimet në ligamentet e gjurit të Thiago” thuhet në njoftimin e Chelseat.\r\n<br><br>\r\nMbrojtësi brazilian do të humbas edhe ndeshjen me Borusia Dortmundin si dhe disa ndeshje të rëndësishme në Premierligë.', 'irinadolli', '2023-02-28 19:02:44', 'Photos/thiagoinjury.jpg'),
(13, 'Zgjidhet goli më i bukur në botë, e ka shënuar një futbollistë me nevoja të veçanta', ' FIFA në një ceremoni në Paris është duke zgjedhur më të mirët në Botë.\r\n<br><br>\r\nGoli më i mirë në botë u zgjodh ai i futbollistit të Marcin Olesky për skuadrën e Warta Poznan kundër Stal Rzeszow.\r\n<br><br>\r\nMarcin Olesky është pjesë e futbollit për persona me nevoja të veçanta.\r\n<br><br>\r\nCmimi i golit më të mirë u nda nga legjenda Alessandro Del Piero.\r\n<br><br>\r\nShiko këtu: https://www.youtube.com/watch?v=XNJhcsMfWeg', 'irinadolli', '2023-02-28 19:04:30', 'Photos/oo-1.jpg'),
(14, 'Në krizë të rëndë ekonomike, Dembele shpëton klubin e tij të parë nga falimentimi', ' Ousmane Dembele e ka treguar se është nga ata lojtarë që nuk e harron asnjëherë origjinën dhe pikënisjen e karrierës së tij si futbollist.\r\n<br><br>\r\nSulmuesi i Barcelonës ka bërë një gjest shumë të bukur, duke ndihmuar klubin e tij të parë të kalojë një krizë të rëndë ekonomike.\r\n<br><br>\r\nEvreux Football Club 27, një klub në të cilin u rritën edhe Mandanda dhe Upamecano dhe aktualisht renditen në vendin e 9-të në National 2, janë në gjendje të vështirë dhe francezi ka dhuruar 100,000 euro për të shmangur falimentimin.\r\n<br><br>\r\n“Presidenti i Evreux Football Club 27, Samuel Brigantino dhe Guy Lefrand, kryebashkiaku i Evreux, dëshirojnë të falënderojnë Ousmane Dembele për bujarinë dhe mbështetjen e tij financiare të dhënë për klubin gjatë kësaj periudhe të vështirë. Ousmane, djali i klubit dhe krenaria e qytetit të Evreux, ka mbështetur gjithmonë klubin.”-thuhej në reagimin e klubit francez.', 'irinadolli', '2023-02-28 19:05:31', 'Photos/dembele.jpg'),
(15, 'Scaloni zgjidhet trajneri më i mirë në Botë', ' FIFA në një ceremoni në Paris është duke zgjedhur më të mirët në Botë.\r\n<br><br>\r\nLionel Scaloni është zgjedhur trajneri më i mirë në botë.\r\n<br><br>\r\nAi këtë çmim e fitoi pas triumfit në Kupën e Botës me Argjentinën.\r\nNë konkurencën e femrave, trajnerja më e mirë u zgjodh Sarina wiegman e Anglisë.', 'irinadolli', '2023-02-28 19:08:09', 'Photos/scaloni.jpg'),
(16, 'Ylli i PSG humb sezonin pad lëndimit të sotëm ', ' Presnel Kimpembe nuk do të luaj më këtë sezon.\r\n<br><br>\r\nYlli francez pësoi një lëndim të rëndë në ndeshjen e PSG-së kumdër Marseille.\r\n<br><br>\r\nAi u zëvendësua në minutën e 16-të të ndeshjes.\r\n<br><br>\r\nNdërkohë, pas ndeshjes trajneri bëri të ditur se lëndimi është serioz dhe Kimpembe ka humbur sezonin.', 'irinadolli', '2023-02-28 19:10:16', 'Photos/kimpembeinjury.jpg'),
(17, 'Emiliano Martinez është portieri i vitit nga FIFA', ' Emiliano Martinez është shpallur portieri më i mirë i vitit nga FIFA.\r\n<br><br>\r\nPortieri argjentinas ka fituar çmimin “The Best” nga shtëpia e futbollit botëror.\r\n<br><br>\r\nPortieri i Aston Villas ka mposhtur konkurrencën nga Thibaut Courtois i Real Madridit dhe Bono i Sevillas, për të marrë trofeun në duar.\r\n<br><br>\r\nTriumfin  tij e përcaktoi rrugëtimi i tij në Kampionatin Botëror, kur me Argjentinën ia doli ta fitonin trofeun e madh. ', 'irinadolli', '2023-02-28 19:16:00', 'Photos/martinez.avif');

-- --------------------------------------------------------

--
-- Table structure for table `rezultatet`
--

CREATE TABLE `rezultatet` (
  `rez_id` int(11) NOT NULL,
  `ekipi_vendas` varchar(255) NOT NULL,
  `ekipi_mysafir` varchar(255) NOT NULL,
  `orari` datetime NOT NULL,
  `rezultati` varchar(10) DEFAULT NULL,
  `liga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezultatet`
--

INSERT INTO `rezultatet` (`rez_id`, `ekipi_vendas`, `ekipi_mysafir`, `orari`, `rezultati`, `liga`) VALUES
(1, 'Arsenal', 'Everton', '2023-03-01 20:45:00', '4 - 0', 'Premier League'),
(3, 'Liverpool', 'Wolves', '2023-03-01 21:00:00', '2 - 0', 'Premier League'),
(4, 'Real Sociedad', 'Cadiz', '2023-03-03 21:00:00', '', 'LaLiga'),
(5, 'Cremonese', 'Roma', '2023-02-28 18:30:00', '2 - 1', 'Serie A'),
(6, 'Juventus', 'Torino', '2023-02-28 20:45:00', '4 - 2', 'Serie A'),
(7, 'Villarreal', 'Getafe', '2023-02-27 21:00:00', '2 - 1', 'LaLiga'),
(8, 'Man City', 'Newcastle', '2023-03-04 13:30:00', '', 'Premier League'),
(9, 'Liverpool', 'Man United', '2023-03-05 17:30:00', '', 'Premier League'),
(10, 'Barcelona', 'Valencia', '2023-03-05 16:15:00', '', 'LaLiga'),
(11, 'Napoli', 'Lazio', '2023-03-03 20:45:00', '', 'Serie A'),
(12, 'Arsenal', 'Bournemouth', '2023-03-04 16:00:00', '', 'Premier League'),
(13, 'Aston Villa', 'Crystal Palace', '2023-03-04 16:00:00', '', 'Premier League'),
(14, 'Brighton', 'West Ham', '2023-03-04 16:00:00', '', 'Premier League'),
(15, 'Chelsea', 'Leeds', '2023-03-04 16:00:00', '', 'Premier League'),
(16, 'Wolves', 'Tottenham', '2023-03-04 16:00:00', '', 'Premier League'),
(17, 'Southampton', 'Leicester', '2023-03-04 18:30:00', '', 'Premier League'),
(18, 'Getafe', 'Girona', '2023-03-04 14:00:00', '', 'LaLiga'),
(19, 'Almeria', 'Villarreal', '2023-03-04 16:15:00', '', 'LaLiga'),
(20, 'Mallorca', 'Elche', '2023-03-04 18:30:00', '', 'LaLiga'),
(21, 'Atletico Madrid', 'Sevilla', '2023-03-04 21:00:00', '', 'LaLiga'),
(22, 'Monza', 'Empoli', '2023-03-04 15:00:00', '', 'Serie A'),
(23, 'Atalanta', 'Udinese', '2023-03-04 18:00:00', '', 'Serie A'),
(24, 'Fiorentina', 'Milan', '2023-03-04 20:45:00', '', 'Serie A'),
(25, 'Nottingham Forest', 'Everton', '2023-03-05 15:00:00', '', 'Premier League'),
(26, 'Real Valladolid', 'Espanyol', '2023-03-05 14:00:00', '', 'LaLiga'),
(27, 'Rayo Vallecano', 'Athletic Club', '2023-03-05 18:30:00', '', 'LaLiga'),
(28, 'Real Betis', 'Real Madrid', '2023-03-05 21:00:00', '', 'LaLiga'),
(29, 'Spezia', 'Hellas Verona', '2023-03-05 00:30:00', '', 'Serie A'),
(30, 'Sampdoria', 'Salernitana', '2023-03-05 15:00:00', '', 'Serie A'),
(31, 'Inter', 'Lecce', '2023-03-05 18:00:00', '', 'Serie A'),
(32, 'Roma', 'Juventus', '2023-03-05 20:45:00', '', 'Serie A'),
(33, 'Osasuna', 'Celta Vigo', '2023-03-06 21:00:00', '', 'LaLiga'),
(34, 'Brentford', 'Fulham', '2023-03-06 21:00:00', '', 'Premier League'),
(35, 'Sassuolo', 'Cremonese', '2023-03-06 18:30:00', '', 'Serie A'),
(36, 'Torino', 'Bologna', '2023-03-06 20:45:00', '', 'Serie A'),
(37, 'Drita', 'Llapi', '2023-03-04 13:00:00', '', 'Superliga'),
(38, 'Drenica', 'Ferizaj', '2023-03-04 13:00:00', '', 'Superliga'),
(39, 'Dukagjini', 'Gjilani', '2023-03-04 13:00:00', '', 'Superliga'),
(40, 'Prishtina', 'Ballkani', '2023-03-05 13:00:00', '', 'Superliga'),
(41, 'Trepça\'89', 'Malisheva', '2023-03-05 13:00:00', '', 'Superliga');

-- --------------------------------------------------------

--
-- Table structure for table `userat`
--

CREATE TABLE `userat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `datakrijimit` datetime NOT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userat`
--

INSERT INTO `userat` (`id`, `username`, `email`, `password`, `datakrijimit`, `admin`) VALUES
(1, 'erjonahmeti', 'erjonahmeti@gmail.com', '74ac76eb340c86903989dd72c5975eff', '2023-02-26 04:23:24', 1),
(77, 'irinadolli', 'irinadolli@gmail.com', 'f6864c9a464eb879230f2dae65ab05e9', '2023-02-28 18:47:39', 1),
(78, 'erjonfake', 'erjonfake@gmail.com', '74ac76eb340c86903989dd72c5975eff', '2023-03-01 22:15:37', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lajmi`
--
ALTER TABLE `lajmi`
  ADD PRIMARY KEY (`lajmi_id`);

--
-- Indexes for table `rezultatet`
--
ALTER TABLE `rezultatet`
  ADD PRIMARY KEY (`rez_id`);

--
-- Indexes for table `userat`
--
ALTER TABLE `userat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lajmi`
--
ALTER TABLE `lajmi`
  MODIFY `lajmi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rezultatet`
--
ALTER TABLE `rezultatet`
  MODIFY `rez_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `userat`
--
ALTER TABLE `userat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
