-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2022 at 08:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `INDIAN_JUDICIARY`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADVOCATES`
--

CREATE TABLE `ADVOCATES` (
  `Lawyer_ID` varchar(255) NOT NULL,
  `AORCode` int(11) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Aadhaar_ID` bigint(12) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` enum('Active','Retired','Suspended') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ADVOCATES`
--

INSERT INTO `ADVOCATES` (`Lawyer_ID`, `AORCode`, `Experience`, `Aadhaar_ID`, `Password`, `Status`) VALUES
('L1137', 8029, 15, 970334000000, '11378029', 'Active'),
('L1173', 1943, 9, 750580000000, '11731943', 'Active'),
('L1219', 7948, 11, 803188000000, '12197948', 'Active'),
('L1380', 9638, 13, 875870000000, '13809638', 'Active'),
('L1472', 7709, 15, 809326000000, '14727709', 'Active'),
('L1644', 2452, 14, 840893000000, '16442452', 'Active'),
('L1828', 1424, 5, 840129000000, '18281424', 'Active'),
('L1905', 8359, 4, 901426000000, '19058359', 'Active'),
('L2020', 1041, 13, 957407000000, '20201041', 'Active'),
('L2036', 8128, 7, 732320000000, '20368128', 'Active'),
('L2109', 3177, 12, 826489000000, '21093177', 'Active'),
('L2273', 6439, 13, 799224000000, '22736439', 'Active'),
('L2415', 2836, 12, 771929000000, '24152836', 'Active'),
('L2475', 2424, 7, 798384000000, '24752424', 'Active'),
('L2484', 4878, 4, 814405000000, '24844878', 'Active'),
('L2529', 1614, 5, 785108000000, '25291614', 'Active'),
('L2636', 1433, 6, 853583000000, '26361433', 'Active'),
('L2649', 7176, 11, 735396000000, '26497176', 'Active'),
('L2717', 1998, 13, 903309000000, '27171998', 'Active'),
('L2779', 3965, 7, 741184000000, '27793965', 'Active'),
('L3048', 3999, 10, 942144000000, '30483999', 'Active'),
('L3103', 8488, 11, 923266000000, '31038488', 'Active'),
('L3113', 2688, 4, 877831000000, '31132688', 'Active'),
('L3387', 1021, 15, 798649000000, '33871021', 'Active'),
('L3493', 9371, 5, 808850000000, '34939371', 'Active'),
('L3622', 3426, 5, 774991000000, '36223426', 'Active'),
('L3744', 7685, 8, 915438000000, '37447685', 'Active'),
('L3762', 8672, 10, 910747000000, '37628672', 'Active'),
('L3805', 2461, 6, 964183000000, '38052461', 'Active'),
('L3861', 6710, 12, 941684000000, '38616710', 'Active'),
('L3868', 6831, 4, 804052000000, '38686831', 'Active'),
('L3902', 3111, 9, 890426000000, '39023111', 'Active'),
('L3937', 5303, 11, 817791000000, '39375303', 'Active'),
('L4033', 5039, 4, 762735000000, '40335039', 'Active'),
('L4035', 8941, 8, 684988000000, '40358941', 'Active'),
('L4163', 3347, 12, 990223000000, '41633347', 'Active'),
('L4220', 8551, 4, 776927000000, '42208551', 'Active'),
('L4228', 8712, 10, 780725000000, '42288712', 'Active'),
('L4318', 6332, 8, 751540000000, '43186332', 'Active'),
('L4410', 2110, 13, 931448000000, '44102110', 'Active'),
('L4473', 6997, 4, 732239000000, '44736997', 'Active'),
('L4512', 2111, 15, 932963000000, '45122111', 'Active'),
('L4518', 1454, 13, 729732000000, '45181454', 'Active'),
('L4704', 7303, 6, 923497000000, '47047303', 'Active'),
('L4867', 2455, 13, 711554000000, '48672455', 'Active'),
('L4925', 5184, 10, 707941000000, '49255184', 'Active'),
('L5052', 7810, 7, 889389000000, '50527810', 'Active'),
('L5080', 9450, 10, 692226000000, '50809450', 'Active'),
('L5326', 7875, 5, 682620000000, '53267875', 'Active'),
('L5426', 1112, 4, 878285000000, '54261112', 'Active'),
('L5444', 5127, 12, 780592000000, '54445127', 'Active'),
('L5757', 5546, 14, 756809000000, '57575546', 'Active'),
('L5786', 8124, 10, 685655000000, '57868124', 'Active'),
('L6016', 4808, 9, 750293000000, '60164808', 'Active'),
('L6082', 9769, 7, 904024000000, '60829769', 'Active'),
('L6176', 8104, 14, 960492000000, '61768104', 'Active'),
('L6235', 9546, 5, 966850000000, '62359546', 'Active'),
('L6303', 3090, 6, 735391000000, '63033090', 'Active'),
('L6387', 9549, 8, 767350000000, '63879549', 'Active'),
('L6409', 2192, 6, 729654000000, '64092192', 'Active'),
('L6410', 3594, 12, 885885000000, '64103594', 'Active'),
('L6472', 8655, 14, 791346000000, '64728655', 'Active'),
('L6506', 8342, 12, 848961000000, '65068342', 'Active'),
('L6514', 5255, 8, 683153000000, '65145255', 'Active'),
('L6583', 6406, 12, 739476000000, '65836406', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `BIODATA`
--

CREATE TABLE `BIODATA` (
  `Aadhaar_ID` bigint(12) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile_Number` bigint(20) NOT NULL,
  `Email_ID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL DEFAULT 'pass'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BIODATA`
--

INSERT INTO `BIODATA` (`Aadhaar_ID`, `Full_Name`, `Date_Of_Birth`, `Address`, `Mobile_Number`, `Email_ID`, `Password`) VALUES
(111111111111, 'Client1', '2022-05-20', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 8296399994, 'client1@gmail.com', '1'),
(123456789123, 'Ajay Vikram', '2022-04-08', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 8296399994, 'ajayvikramp@gmail.com', 'ajay'),
(222222222222, 'Client2', '2022-05-14', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 8296399994, 'client2@gmail.com', '2'),
(333333333333, 'Naga Tarun', '2022-04-15', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 9739093646, 'nagatarun2002@gmail.com', 'tarun'),
(555555555555, 'Rishi', '2022-04-18', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 9686854806, 'mrrishi@gmail.com', 'rishi'),
(672014000000, 'G.S. Ramesh Kumar', '1966-12-15', 'GT Road,Nellore,Andhra Pradesh 524001', 7280417591, 'g.s.rameshkumar@gmail.com', 'pass'),
(677873000000, 'Aruna Sarika', '1970-10-09', 'Prenderghast Road, near Paradise Circle,Ananthpur,Andhra Pradesh 510051', 7315117452, 'arunasarika@gmail.com', 'pass'),
(678260000000, 'B.Vishwanath ', '1962-03-14', 'Yadavagiri, Mysuru, Karnataka 570001', 7383651962, 'b.vishwanath@gmail.com', 'pass'),
(681563000000, 'Uday Umesh Lalit', '1957-11-09', 'Block E, Sudarshan Park,New Delhi 110015', 8843146270, 'udayumesh@gmail.com', 'pass'),
(681941000000, 'S.Sujatha', '1960-05-20', 'New BEL Rd, Devasandra,Bangalore,Karnataka,560054', 9009540865, 's.sujatha@gmail.com', 'pass'),
(682620000000, 'Keyur Subramanium', '1989-04-15', 'Litora Rd.,Gaban,Punjab,739338', 9065731584, 'keyursubramanium@gmail.com', 'pass'),
(683153000000, ' Hans Manchanda', '1989-03-03', 'Curae Av.,Burnpur,Himachal Pradesh,490859', 7916781296, 'hansmanchanda@gmail.com', 'pass'),
(684988000000, 'Sugouri Kaul', '1986-05-08', '2586 Cras Ave,Kasargod,Kerala,676585', 6750329621, 'sugourikaul@gmail.com', 'pass'),
(685655000000, 'Praval Shingane', '1984-07-08', 'Mi, Rd.,Imphal,Uttarakhand,598068', 9330029312, 'pravalshingane@gmail.com', 'pass'),
(692226000000, 'Mukulita Sulabha Chandak', '1985-05-21', 'Interdum. Rd.,Thrissur,Kerala,349633', 9642881405, 'mukulitasulabhachandak@gmail.com', 'pass'),
(696070000000, 'Ch. Manavendranath Roy', '1966-08-06', 'Lakshmipuram Main Rd,Ananthpur,Andhra Pradesh 510051', 7575429917, 'ch.manavendranathroy@gmail.com', 'pass'),
(699693000000, 'S. VENKATANARAYANA', '1962-05-06', 'Airport Entry Rd, Chacka,Kochi,Kerala 682001', 8101861564, 's.venkatanarayana@gmail.com', 'pass'),
(705353000000, 'A.M. Khanwilkar', '1957-11-19', '2B Block, Paschim Vihar,New Delhi 110063', 9972463628, 'amkhanwilkar@gmail.com', 'pass'),
(707117000000, 'Rajakumara M', '1966-07-12', 'Konnakkad-Coorg Interstate Rd,Wayanad,Kerala 673579', 6874218158, 'rajakumaram@gmail.com', 'pass'),
(707941000000, 'Sai Srinivas', '1982-11-28', 'Sampige Road,Bangalore,Karnataka,792283', 7302635315, 'saisrinivas@gmail.com', 'pass'),
(708871000000, 'C.Purushottam Kumar', '1962-10-12', 'Corperative Colony,YSR Cuddapah,Kadapa,Andhra Pradesh 516001', 9465761325, 'c.purushottamkumar@gmail.com', 'pass'),
(710138000000, 'A.A.Sayed', '1961-01-21', 'Subhash Nagar, Parsodi,Mumbai,Maharashtra 400028', 7691008982, 'a.a.sayed@gmail.com', 'pass'),
(711554000000, 'Marisa Chandanika Chella', '1982-04-24', 'Ravidra Ave,Amravati,Andhra Pradesh,511462', 7592416205, 'marisachandanikachella@gmail.com', 'pass'),
(714490000000, 'K.Somashekar', '1963-09-15', 'Bajal Jalligudi,Mangaluru,Dakshina Kannada 575007', 7826895390, 'k.somashekar@gmail.com', 'pass'),
(722260000000, 'P.B.Varale', '1960-08-02', 'Tulsi Pipe Rd, Priyadarshini Society,Mumbai,Maharashtra 400028', 7518728597, 'p.b.varale@gmail.com', 'pass'),
(729654000000, 'Sarvesh Saxena', '1983-09-07', 'Pellentesque Road,Panaji,Goa,751132', 8584867921, 'sarveshsaxena@gmail.com', 'pass'),
(729732000000, 'Rajesh Mukundagiri', '1982-08-24', '742 Convallis, Av.,Chennai,Tamil Nadu,873660', 7748413464, 'rajeshmukundagiri@gmail.com', 'pass'),
(732239000000, 'Mubarak Yeshonath', '1990-07-12', '7770 Nulla. Avenue,Dehradun,Gujarat,274525', 8710128766, 'mubarakyeshonath@gmail.com', 'pass'),
(732320000000, 'Urvashi Sury', '1991-08-30', '9839 Nisi. Rd.,Patna,Bihar,895176', 7077730042, 'urvashisury@gmail.com', 'pass'),
(735391000000, 'Shobhita Nadhamuni', '1989-09-27', 'Tincidunt Rd.,Nanded,Rajasthan,616632', 7638269959, 'shobhitanadhamuni@gmail.com', 'pass'),
(735396000000, 'Siya Darshwana Rangnekar', '1985-03-07', 'Aliquam Ave,Trivendram,Kerala,718778', 7735431444, 'siyadarshwanarangnekar@gmail.com', 'pass'),
(738757000000, 'V.D.Kedar', '1967-02-21', 'Bhagyanagar Road, Uday Nagar,Chandrapur,Maharashtra 442401', 7156818640, 'v.d.kedar@gmail.com', 'pass'),
(739476000000, 'Satyajit Moulik Jafferbhoy', '1983-05-27', '4860 Et, Ave,Bengaluru,Karnataka,414406', 8388578095, 'satyajitmoulikjafferbhoy@gmail.com', 'pass'),
(740467000000, 'B.Murugesan', '1965-10-17', 'Parthasarathy Puram, Thiyagaraya Nagar,Erode,Tamil Nadu 638001', 9690076348, 'b.murugesan@gmail.com', 'pass'),
(741184000000, 'Shevanti Chandna', '1989-11-13', '901 A,Mendi Street,Delhi,,633713', 7322058741, 'shevantichandna@gmail.com', 'pass'),
(747336000000, 'V. Padmanabhan', '1966-11-14', 'Velachery Main Rd, Medavakkam,Madurai,Tamil Nadu 625001', 7496784805, 'v.padmanabhan@gmail.com', 'pass'),
(750293000000, 'Sapna Anuhya Navarathna', '1988-06-30', 'Donec Street,Dibrugarh,Rajasthan,743674', 8533681791, 'sapnaanuhyanavarathna@gmail.com', 'pass'),
(750580000000, 'Aishani Nilufar', '1987-07-19', 'Nonummy St.,Dibrugarh,Punjab,211125', 6931543466, 'aishaninilufar@gmail.com', 'pass'),
(751256000000, 'M.R Suthar', '1966-09-25', 'Eklingji,Nathdwara,Pali,Rajasthan 306401', 6952814350, 'm.rsuthar@gmail.com', 'pass'),
(751540000000, 'Sadguna Pranati Vasudha', '1990-10-09', 'Facilisis Av.,Jaipur,Rajasthan,770830', 7618288953, 'sadgunapranativasudha@gmail.com', 'pass'),
(755313000000, 'P.Dhana Lakshmi', '1960-09-20', 'Manikyamma Colony, Rajendra Nagar,Amaravathi,Andhra Pradesh 501401', 6774650561, 'p.dhanalakshmi@gmail.com', 'pass'),
(755878000000, 'Muralidhara Pai B', '1975-06-22', 'Balmatta Circle,Mangaluru,Dakshina Kannada 574142', 8330746237, 'muralidharapaib@gmail.com', 'pass'),
(756809000000, 'Periyar Swamy', '1979-03-27', 'Mauris Av.,Salem,Tamil Nadu,538448', 9287263274, 'periyarswamy@gmail.com', 'pass'),
(762735000000, 'Mohit Soundar', '1993-06-17', 'Rutrum Road,Farrukhabad,Maharastra,233782', 9089850825, 'mohitsoundar@gmail.com', 'pass'),
(767350000000, 'Subhan Cherukuri', '1983-04-29', 'Orci, Rd.,Itanagar,Himachal Pradesh,617572', 9713527009, 'subhancherukuri@gmail.com', 'pass'),
(769647000000, 'RAVI NATH TILHARI', '1965-04-23', 'New Rtc Bus Stand Road,YSR Cuddapah,Kadapa,Andhra Pradesh 516001', 6843701858, 'ravinathtilhari@gmail.com', 'pass'),
(771929000000, 'Naga Tarun', '1984-07-26', 'Pharetra Ave,KanyaKumari,Tamil Nadu,674888', 7154594233, 'nagatarun@gmail.com', 'pass'),
(772859000000, 'UNNIKRISHNAN A V', '1968-11-12', 'Kanyakumari Hwy, Edappally,Kasargod,Kerala 671121', 7870576547, 'unnikrishnanav@gmail.com', 'pass'),
(774991000000, 'Suhrita Basanti Konduru', '1991-10-23', 'Amet Av.,Bilaspur,Maharashtra,628454', 8582862861, 'suhritabasantikonduru@gmail.com', 'pass'),
(775030000000, 'Prashant Kumar Mishra', '1964-08-29', 'Gowdavelly, Medchal,Amaravathi,Andhra Pradesh 501401', 7051458098, 'prashantkumarmishra@gmail.com', 'pass'),
(775369000000, 'Vishwa Bandhu', '1962-08-07', 'Near Birla Mandir, Jln Marg, Bapu Nagar,Pali,Rajasthan 306401', 7567503966, 'vishwabandhu@gmail.com', 'pass'),
(776927000000, 'Srijan Ponnekanti', '1992-11-30', 'Lorem St.,Dibrugarh,Sikkim,752443', 8391844293, 'srijanponnekanti@gmail.com', 'pass'),
(777777777777, 'Aniketh', '2022-05-10', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 8296399994, 'anikethnarayan@gmail.com', 'aniketh'),
(780592000000, 'Padmini Tripuri Nagarajan', '1984-07-09', 'Aracu. Ave,Anantapur,Andhra Pradesh,564963', 6971255968, 'padminitripurinagarajan@gmail.com', 'pass'),
(780725000000, 'Ramashray Venugopalan', '1983-12-06', 'Sulah St.,Malah,Mizoram,254677', 9613081864, 'ramashrayvenugopalan@gmail.com', 'pass'),
(785108000000, 'Savar Chande', '1988-02-23', 'Elementum Avenue,Haridwar,Jharkhand,561886', 9149672020, 'savarchande@gmail.com', 'pass'),
(785382000000, 'R.Sakthivel', '1968-07-28', 'Rajaji St, Swarnapuri,Coimbatore,Tamil Nadu 641041', 7054821910, 'r.sakthivel@gmail.com', 'pass'),
(787666000000, 'Devendra Dixit', '1968-11-12', 'Plot No. 34, Ajmer,Bikaner,Rajasthan 334001', 9393949319, 'devendradixit@gmail.com', 'pass'),
(791346000000, 'Sunanda Arghya Mehendale', '1978-05-10', 'Dictum Rd.,Dhanbad,Gujarat,913617', 7678466604, 'sunandaarghyamehendale@gmail.com', 'pass'),
(795056000000, 'Kavita B Agrawal', '1970-08-08', ' NIBM Undri Road, Kondhwa,Chandrapur,Maharashtra 442401', 8580286166, 'kavitabagrawal@gmail.com', 'pass'),
(795202000000, 'R Devdas', '1969-05-15', 'CowlBazaar,Ballari,Karnataka 583202', 7031422671, 'rdevdas@gmail.com', 'pass'),
(798335000000, 'Manindra Mohan Shrivastava', '1964-03-06', 'Jhalana, Malviya Nagar,Jodhpur,Rajasthan 112001', 8670127701, 'manindramohanshrivastava@gmail.com', 'pass'),
(798384000000, 'Bhavana Udaya', '1993-06-22', 'Sed St.,Davangere,Karnataka,235982', 7755981614, 'bhavanaudaya@gmail.com', 'pass'),
(798649000000, 'Dhatri Shefali', '1981-06-07', 'MJ Nagar,Hospet,Karnataka128100', 8505143362, 'dhatrishefali@gmail.com', 'pass'),
(799224000000, 'Sahila Hima Vanita', '1981-09-17', '303 Mi. St.,Ahmedabad,Maharashtra,514622', 7251749502, 'sahilahimavanita@gmail.com', 'pass'),
(803188000000, 'Satyavrata Chandrak Rishi', '1981-12-02', '236 Imperdiet St.,Kavaratti,Pondicherry,556382', 9354243178, 'satyavratachandrakrishi@gmail.com', 'pass'),
(804052000000, 'Ajay Vikram', '1990-03-23', 'Ultrices Rd.,Ooty,Tamil Nadu,547376', 8595913259, 'ajayvikram@gmail.com', 'pass'),
(804839000000, 'S. MANIKUMAR', '1961-04-24', 'Kollam-Tirumangalam Rd,Kochi,Kerala 682001', 7680674386, 's.manikumar@gmail.com', 'pass'),
(805359000000, 'N.Muralidharan', '1971-02-09', 'New Market, Tambaram,Erode,Tamil Nadu 638001', 9676741873, 'n.muralidharan@gmail.com', 'pass'),
(807014000000, 'D.Y. Chandrachud', '1958-11-09', 'Derawal Nagar, Gujranwala Town,New Delhi 110033', 9080171176, 'dychandrachud@gmail.com', 'pass'),
(808850000000, 'Sandhya Nidra', '1993-06-25', '6078 Subhan Road,Gukki,Haryana,365849', 7197789141, 'sandhyanidra@gmail.com', 'pass'),
(809326000000, 'Karabi Baruni Manjanatha', '1979-02-18', 'Neque. Road,Ambala,Tamil Nadu,857326', 9000481823, 'karabibarunimanjanatha@gmail.com', 'pass'),
(810474000000, 'V.Sudhakar ', '1964-06-26', 'Sector-19, Kharghar,Ahmednagar,Maharashtra 414001', 8552115457, 'v.sudhakar@gmail.com', 'pass'),
(814405000000, 'Rupesh Pujar', '1993-12-12', 'Lacus Street,Puttur,Andhra Pradesh,253956', 7128235632, 'rupeshpujar@gmail.com', 'pass'),
(815146000000, 'L. Nageswara Rao', '1957-06-08', 'A15, New Barakhamba Road,New Delhi 110015', 9180087068, 'lnageswararao@gmail.com', 'pass'),
(816013000000, 'P J Vincent', '1964-09-05', 'YPMC Colony,Mims Rd,Thrissur,Kerala 620680', 7614834275, 'pjvincent@gmail.com', 'pass'),
(817791000000, 'Asavari Keshaw', '1982-05-11', 'Eros. Rd.,Hyderabad,Telangana,715534', 7832372283, 'asavarikeshaw@gmail.com', 'pass'),
(826489000000, 'Kusum Mukunda', '1983-03-03', 'Donec Street,Bikaner,Rajasthan545112', 7207758876, 'kusummukunda@gmail.com', 'pass'),
(828715000000, 'B.L Bugalia', '1962-04-22', 'Jawaharlal Nehru Marg,Dungarpur,Rajasthan 314001', 9442743992, 'b.lbugalia@gmail.com', 'pass'),
(830942000000, 'P. Vadamalai', '1963-07-21', 'Arcot Rd, Vadapalani,Madurai,Tamil Nadu 625001', 7262405216, 'p.vadamalai@gmail.com', 'pass'),
(839429000000, 'S H Pushpanjali', '1969-08-19', 'Daroji-Kamlapura Road,Ballari,Karnataka 583201', 7081690551, 'shpushpanjali@gmail.com', 'pass'),
(840129000000, 'Debashis Murty', '1989-10-13', 'Mus. Rd.,Aizwal,Arunachal Pradesh,607794', 7048368346, 'debashismurty@gmail.com', 'pass'),
(840893000000, 'Shankha Parthiban', '1981-04-07', '8473 Elit St.,Jalandhar,Punjab,520936', 7873761502, 'shankhaparthiban@gmail.com', 'pass'),
(848961000000, 'Arulchelvan Suryanarayan', '1982-09-21', '9306 Vivamus Street,Pawara,Orissa,341949', 7475652982, 'arulchelvansuryanarayan@gmail.com', 'pass'),
(851234000000, 'M.L.Raghunath', '1972-05-28', 'Jayalakhmipuram,Mysuru,Karnataka,570006', 7758263982, 'm.l.raghunath@gmail.com', 'pass'),
(853583000000, 'Trinetra Shradhdha', '1992-09-04', '8228 Luctus St.\",Mangalore,Karnataka,856680', 7523949444, 'trinetrashradhdha@gmail.com', 'pass'),
(856112000000, 'N.V.Ramana', '1957-08-29', 'Balbir Nagar, Shahdara,New Delhi 110032', 9225992507, 'nvramana@gmail.com', 'pass'),
(862661000000, 'Dipankar Datta', '1962-07-17', ' Mahim, Shivaji Park,Mumbai,Maharashtra  400028', 9127945526, 'dipankardatta@gmail.com', 'pass'),
(872168000000, 'B.Veerappa', '1961-06-01', '100 Feet Rd, Domlur,Bangalore,Karnataka 560055', 7673373809, 'b.veerappa@gmail.com', 'pass'),
(874065000000, 'Ahsanuddin Amanullah', '1963-05-11', 'Raheem bagh,Amaravathi,Andhra Pradesh 501401', 9604400709, 'ahsanuddinamanullah@gmail.com', 'pass'),
(875870000000, 'Praveen Raghuram', '1979-05-31', 'Facilisis St.,Delhi,512837', 7798860493, 'praveenraghuram@gmail.com', 'pass'),
(877831000000, 'Shakeel Shamir', '1994-04-27', 'Eu Avenue,Madurai,Tamil Nadu,457436', 9953519014, 'shakeelshamir@gmail.com', 'pass'),
(878285000000, 'Pulak Thakur', '1983-11-03', 'Convallis Rd.,Daman and Diu,247979', 7932189996, 'pulakthakur@gmail.com', 'pass'),
(885885000000, 'Benazir Mayur', '1981-02-06', 'Nisi Road,Vijayawada,Andhra Pradesh,352836', 7360590663, 'benazirmayur@gmail.com', 'pass'),
(889389000000, 'M R Rishi', '1990-06-28', 'Odio St.,Mandya,Karnataka,346716', 8897818319, 'mrrishi@gmail.com', 'pass'),
(890426000000, 'Pralay Sita', '1984-12-25', 'Justo Rd.,Gangtok,Rajasthan,617833', 6859441135, 'pralaysita@gmail.com', 'pass'),
(896845000000, 'K. VINOD CHANDRAN', '1963-04-25', 'Madurai-Tondi Point Hwy,Kochi,Kerala 682001', 9810568807, 'k.vinodchandran@gmail.com', 'pass'),
(901426000000, 'Bhairavi Maruthi', '1992-01-30', 'Wahid St.,Hisar,Manipur,293112', 8134663910, 'bhairavimaruthi@gmail.com', 'pass'),
(903203000000, 'S.B.Agrawal', '1962-08-22', 'Great Nag Road, Nandanvan,Nagpur,Maharashtra 440009', 8139290492, 's.b.agrawal@gmail.com', 'pass'),
(903309000000, 'Vasant Kittur', '1990-02-27', 'Nulla Road,Amipur,Madhya Pradesh,564841', 8655683677, 'vasantkittur@gmail.com', 'pass'),
(904024000000, 'Upendra Kasturirangan', '1989-02-16', 'Vel, Ave,Thanjavur,Kerala,587956', 7742574891, 'upendrakasturirangan@gmail.com', 'pass'),
(909881000000, 'Sandeep Mehta', '1963-01-11', 'J.L.N Marg, Malviya Nagar,Jodhpur,Rajasthan 112001', 9570995852, 'sandeepmehta@gmail.com', 'pass'),
(910747000000, 'Vatsala Samidha Velusamy', '1988-11-18', 'Primis St.,Hubli,Karnataka,243734', 8875736374, 'vatsalasamidhavelusamy@gmail.com', 'pass'),
(915438000000, 'Seema Gordha', '1988-03-02', '1496 Fames Street,Pondicherry,718766', 8679464510, 'seemagordha@gmail.com', 'pass'),
(920801000000, 'T. Raja', '1961-05-25', 'Royapettah High Road,Chennai,Tamil Nadu 600041', 8413684491, 't.raja@gmail.com', 'pass'),
(923266000000, 'Anirudh Vedmohan Prisha', '1980-03-31', 'Lectus, Avenue,Nellore,Andhra Pradesh,218505', 8699588202, 'anirudhvedmohanprisha@gmail.com', 'pass'),
(923497000000, 'Palashkusum Ghei', '1991-04-08', '4558 Fermentum Av.,Daman,Punjab,813742', 9713948677, 'palashkusumghei@gmail.com', 'pass'),
(924913000000, 'Munishwar Nath Bhandari', '1960-09-13', 'MGR Salai,Palavakkam,Chennai,Tamil Nadu 600041', 8648558553, 'munishwarnathbhandari@gmail.com', 'pass'),
(926777000000, 'Kurtadikar.M.V', '1965-10-19', 'Dayaneswar Rd, MADHA Colony,Ahmednagar,Maharashtra 414001', 7380290005, 'kurtadikar.m.v@gmail.com', 'pass'),
(926908000000, 'K.Vijaya Lakshmi', '1969-10-16', 'Konda Reddy Circle,Nellore,Andhra Pradesh 524001', 8983588898, 'k.vijayalakshmi@gmail.com', 'pass'),
(931448000000, 'Suvan Teerth Sugriva', '1981-06-08', 'Donec St.,Simra,Tripura,363026', 8489626788, 'suvanteerthsugriva@gmail.com', 'pass'),
(932963000000, 'Aniketh Bellala', '1976-01-08', 'Libero. Av.,Jammu,Jammu and Kashmir,736208', 8840420594, 'anikethbellala@gmail.com', 'pass'),
(938025000000, 'A Haris', '1964-02-26', 'Amaravathy, Fort Road,Wayanad,Kerala 673579', 7641972181, 'aharis@gmail.com', 'pass'),
(941684000000, 'Krishnendu Mahapatra', '1979-11-24', '3637 Aliquet, Ave,Pundi,Assam,577670', 7069561212, 'krishnendumahapatra@gmail.com', 'pass'),
(942144000000, 'Naresh Pedapudi', '1980-09-30', 'Ultrices Street,Imphal,Meghalaya,842463', 8673410326, 'nareshpedapudi@gmail.com', 'pass'),
(948511000000, 'M.S Azmi', '1968-02-05', 'Shanti Nagar,Nagpur,Maharashtra 440009', 8541752356, 'm.sazmi@gmail.com', 'pass'),
(951869000000, 'P N Vinod', '1966-12-09', 'Vikramapuram Hill Rd, Kuravankonam,Thrissur,Kerala 620680', 7996204341, 'pnvinod@gmail.com', 'pass'),
(957407000000, 'Rijuta Nirav', '1981-09-18', '4001 Non Rd.,Singhad,Uttar Pradesh,467465', 9666481979, 'rijutanirav@gmail.com', 'pass'),
(960492000000, 'Naina Maya', '1980-07-06', 'Fusce Rd.,Nagpur,Maharashtra,936067', 7455013593, 'nainamaya@gmail.com', 'pass'),
(960896000000, 'C.KRISHNAKUMAR', '1965-10-17', 'aristo junction,tampanoor,Kasargod,Kerala 671121', 9416575391, 'c.krishnakumar@gmail.com', 'pass'),
(964102000000, 'N. Logeswaran', '1965-11-25', 'V.N.R.Nagar, Vadavalli,Coimbatore,Tamil Nadu 641041', 9831189148, 'n.logeswaran@gmail.com', 'pass'),
(964183000000, 'Amba Arasaratnam', '1989-08-06', 'Mahaan Nagar,Munnar,Kerala,434077', 9328514480, 'ambaarasaratnam@gmail.com', 'pass'),
(966850000000, 'Tarakeshwari Panyala', '1993-02-05', 'Eget, St.,Palakkad,Kerala,752283', 7160358182, 'tarakeshwaripanyala@gmail.com', 'pass'),
(968497000000, 'Ajithab Acharya', '1965-10-16', 'Station Rd, Jail Well Mohalla,Dungarpur,Rajasthan 314001', 7565115802, 'ajithabacharya@gmail.com', 'pass'),
(970334000000, 'Arshia Venkatadri', '1977-10-20', '7131 Nec St.,Srinagar,Jammu and Kashmir,375544', 8884850888, 'arshiavenkatadri@gmail.com', 'pass'),
(976547000000, 'Vijay Bishnoi', '1964-03-26', '594-A, By Pass Rd, Talwandi,Jodhpur,Rajasthan 112001', 7278683665, 'vijaybishnoi@gmail.com', 'pass'),
(984186000000, 'Pramil Kumar Mathur', '1965-10-17', 'Barodia Scheme, Bani Park,Bikaner,Rajasthan 334001', 8554089142, 'pramilkumarmathur@gmail.com', 'pass'),
(984484000000, 'M. Duraiswamy', '1960-09-22', 'Linemedu, Gugai,Chennai,Tamil Nadu 600041', 9192878388, 'm.duraiswamy@gmail.com', 'pass'),
(990223000000, 'Jograj Rohitasva Kurupath', '1979-04-14', 'Nisi Ave,Delhi,598520', 7067453599, 'jograjrohitasvakurupath@gmail.com', 'pass'),
(999999999999, 'srinivas', '2022-06-10', '1622 6th Main Road, E Block, AECS Layout ITPL main road,Kundalahalli', 8296399994, 'ajayvikramp@gmail.com', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `CASE_DETAILS`
--

CREATE TABLE `CASE_DETAILS` (
  `Case_ID` varchar(255) NOT NULL,
  `Prosecutor` varchar(255) NOT NULL,
  `Prosecutor_Client` varchar(255) NOT NULL,
  `Accussor` varchar(255) NOT NULL,
  `Accussor_Client` varchar(255) NOT NULL,
  `Statement` varchar(255) NOT NULL,
  `Request_Pros` varchar(255) NOT NULL DEFAULT 'NULL',
  `Request_Accs` varchar(255) NOT NULL DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CASE_DETAILS`
--

INSERT INTO `CASE_DETAILS` (`Case_ID`, `Prosecutor`, `Prosecutor_Client`, `Accussor`, `Accussor_Client`, `Statement`, `Request_Pros`, `Request_Accs`) VALUES
('F101', 'L4033', 'C001', 'L3902', 'C011', 'NULL', 'L4033', 'L3902'),
('F111', 'L6409', 'C001', 'L3048', 'C002', 'NULL', 'L6409', 'L3048'),
('F112', '-', 'C001', '-', 'C002', 'NULL', 'L1137', 'NULL'),
('F113', 'L1137', 'C103', 'L4033', 'C104', 'given', 'L1137', 'L4033');

-- --------------------------------------------------------

--
-- Table structure for table `CASE_RECORDS`
--

CREATE TABLE `CASE_RECORDS` (
  `Case_ID` varchar(255) NOT NULL,
  `Section_Division` varchar(255) NOT NULL,
  `Hearing_By` varchar(255) NOT NULL,
  `Final_Verdict` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CASE_RECORDS`
--

INSERT INTO `CASE_RECORDS` (`Case_ID`, `Section_Division`, `Hearing_By`, `Final_Verdict`) VALUES
('F101', '120B', 'J035', 'Scheduled'),
('F111', '100', 'J053', 'Judgement Given'),
('F112', '100', 'J0010', 'Pending'),
('F113', '100', 'J0010', 'Judgement Given');

-- --------------------------------------------------------

--
-- Table structure for table `CLIENTS`
--

CREATE TABLE `CLIENTS` (
  `Client_ID` varchar(255) NOT NULL,
  `Aadhaar_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CLIENTS`
--

INSERT INTO `CLIENTS` (`Client_ID`, `Aadhaar_ID`) VALUES
('C001', '123456789123'),
('C002', '555555555555'),
('C011', '333333333333'),
('C101', '777777777777'),
('C102', '999999999999'),
('C103', '111111111111'),
('C104', '222222222222');

-- --------------------------------------------------------

--
-- Table structure for table `COURTS`
--

CREATE TABLE `COURTS` (
  `Court_ID` varchar(255) NOT NULL,
  `Court_Type` varchar(255) NOT NULL,
  `Year_Established` int(4) NOT NULL,
  `Act_Of_Establishment` varchar(255) NOT NULL,
  `Jurisdiction` varchar(255) NOT NULL,
  `Bench` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `COURTS`
--

INSERT INTO `COURTS` (`Court_ID`, `Court_Type`, `Year_Established`, `Act_Of_Establishment`, `Jurisdiction`, `Bench`) VALUES
('APDC41', 'DC', 1948, 'Andhra Civil Courts Act, 1989', 'Kadapa District', 'YSR Cuddapah bench'),
('APDC43', 'DC', 1920, 'Andhra Civil Courts Act, 1989', 'Anathpuram District', 'Ananthpur bench'),
('APDC48', 'DC', 1942, 'Andhra Civil Courts Act, 1989', 'Nellore District', 'Nellore bench'),
('APHC', 'HC', 2016, 'Andhra Pradesh reorganisation act 2016', 'Andhra Pradesh State', 'Amaravati bench'),
('KADC34', 'DC', 1892, 'Mysore Civil Courts Act, 1964', 'Dakshina Kannada District', 'Mangaluru bench'),
('KADC38', 'DC', 1873, 'Mysore Civil Courts Act, 1964', 'Mysuru District', 'Mysore bench'),
('KADC39', 'DC', 1901, 'Mysore Civil Courts Act, 1964', 'Ballari District', 'Vijaynagara bench'),
('KAHC', 'HC', 1884, 'Mysore high court act 1884', 'Karnataka State', 'Bangalore,\'Kalburgi,\'Dharwad'),
('KDC64', 'DC', 1983, 'Kerala Civil Courts Act, 1957', 'Thrissur District', 'Thrissur bench'),
('KDC66', 'DC', 1984, 'Kerala Civil Courts Act, 1957', 'Kasargod District', 'Kasargod bench'),
('KDC69', 'DC', 1980, 'Kerala Civil Courts Act, 1957', 'Waynad District', 'Kalpetta bench'),
('KHC', 'HC', 1956, 'States Reorganisation Act, 1956', 'Kerala State,Lakshdweep', 'Kochi Bench '),
('MHDC20', 'DC', 1957, 'Bombay Civil Courts Act, 1896', 'Nagpur District', 'Nagpur bench'),
('MHDC25', 'DC', 1867, 'Bombay Civil Courts Act, 1896', 'Ahmednagar District', 'Ahmednagar bench'),
('MHDC27', 'DC', 1960, 'Bombay Civil Courts Act, 1896', 'Chandrapur District', 'Wayar bench'),
('MHHC', 'HC', 1862, 'Indian High Courts Act 1861', 'Maharashtra state,DNH,Daman and Diu', 'Mumbai,\'Nagpur'),
('RJDC90', 'DC', 1944, 'Rajasthan Ministrial Establishment Rules, 1986', 'Pali District', 'Siroha bench'),
('RJDC91', 'DC', 1940, 'Rajasthan Ministrial Establishment Rules, 1986', 'Bikaner District', 'Dungagarh bench'),
('RJDC97', 'DC', 1977, 'Rajasthan Ministrial Establishment Rules, 1986', 'Dungarpur District', 'Dungarpur bench'),
('RJHC', 'HC', 1949, 'Rajasthan high Court Ordinance,1949', 'Rajasthan State', 'Jodhpur,\'Jaipur'),
('SC01', 'SC', 1950, 'Regulating Act of 1773', 'Indian State', 'Constitutional Bench Delhi'),
('TNDC51', 'DC', 1975, 'Tamil Nadu Civil Courts Act, 1873', 'Coimbatore District', 'Coimbatore bench'),
('TNDC52', 'DC', 1920, 'Tamil Nadu Civil Courts Act, 1873', 'Erode District', 'Bhavani bench'),
('TNDC55', 'DC', 1883, 'Tamil Nadu Civil Courts Act, 1873', 'Madurai District', 'Madurai bench'),
('TNHC', 'HC', 1862, 'Indian High Courts Act 1861', 'Tamil Nadu State', 'Chennai,\'Madurai');

-- --------------------------------------------------------

--
-- Table structure for table `COURT_SCHEDULE`
--

CREATE TABLE `COURT_SCHEDULE` (
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Court_Hall_Number` int(11) NOT NULL,
  `Case_ID` varchar(255) NOT NULL,
  `Hearing_By` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `COURT_SCHEDULE`
--

INSERT INTO `COURT_SCHEDULE` (`Date`, `Time`, `Court_Hall_Number`, `Case_ID`, `Hearing_By`) VALUES
('2022-03-28', '11:29:00', 1, 'F101', 'J035'),
('2022-05-10', '15:30:30', 2, 'F111', 'J053'),
('2022-05-11', '13:11:00', 3, 'F113', 'J0010'),
('2022-05-14', '12:11:00', 5, 'F110', 'J0019');

-- --------------------------------------------------------

--
-- Table structure for table `JUDGES`
--

CREATE TABLE `JUDGES` (
  `Judge_ID` varchar(255) NOT NULL,
  `Date_Of_Appointment` date NOT NULL,
  `Date_Of_Resignation` date NOT NULL,
  `Aadhaar_ID` bigint(20) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Court_ID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` enum('Active','Retired','Suspended') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `JUDGES`
--

INSERT INTO `JUDGES` (`Judge_ID`, `Date_Of_Appointment`, `Date_Of_Resignation`, `Aadhaar_ID`, `Experience`, `Court_ID`, `Password`, `Status`) VALUES
('J0010', '2014-02-17', '2022-08-28', 681563000000, 8, 'SC01', 'SC010010', 'Active'),
('J0011', '2016-05-13', '2024-11-10', 815146000000, 6, 'SC01', 'SC010011', 'Active'),
('J0014', '2014-08-13', '2022-11-08', 705353000000, 8, 'SC01', 'SC010014', 'Active'),
('J0016', '2016-05-13', '2022-11-08', 807014000000, 6, 'SC01', 'SC010016', 'Active'),
('J0019', '2016-05-13', '2022-06-07', 856112000000, 6, 'SC01', 'SC010019', 'Active'),
('J021', '2010-06-22', '2027-07-16', 862661000000, 12, 'MHHC', 'MHHC021', 'Active'),
('J025', '2007-04-11', '2026-01-20', 710138000000, 15, 'MHHC', 'MHHC025', 'Active'),
('J026', '2007-04-11', '2025-08-01', 722260000000, 15, 'MHHC', 'MHHC026', 'Active'),
('J032', '2015-01-02', '2025-05-19', 681941000000, 7, 'KAHC', 'KAHC032', 'Active'),
('J035', '2015-01-02', '2026-12-31', 872168000000, 7, 'KAHC', 'KAHC035', 'Active'),
('J042', '2022-05-05', '2028-05-10', 874065000000, 11, 'SC01', 'SC01042', 'Active'),
('J046', '2010-12-10', '2029-08-28', 775030000000, 12, 'APHC', 'APHC046', 'Active'),
('J048', '2017-09-21', '2024-09-19', 755313000000, 5, 'APHC', 'APHC048', 'Active'),
('J051', '2019-04-15', '2025-09-12', 924913000000, 3, 'TNHC', 'TNHC051', 'Active'),
('J053', '2011-03-29', '2025-09-21', 984484000000, 11, 'TNHC', 'TNHC053', 'Active'),
('J056', '2009-03-31', '2026-05-25', 920801000000, 13, 'TNHC', 'TNHC056', 'Active'),
('J060', '2014-04-12', '2027-05-05', 699693000000, 8, 'KHC', 'KHC060', 'Active'),
('J062', '2013-06-24', '2028-04-24', 896845000000, 9, 'KHC', 'KHC062', 'Active'),
('J064', '2009-11-09', '2026-04-23', 804839000000, 13, 'KHC', 'KHC064', 'Active'),
('J091', '2009-12-10', '2029-03-05', 798335000000, 13, 'RJHC', 'RJHC091', 'Active'),
('J095', '2011-05-30', '2028-01-10', 909881000000, 11, 'RJHC', 'RJHC095', 'Active'),
('J097', '2013-01-08', '2029-03-25', 976547000000, 9, 'RJHC', 'RJHC097', 'Active'),
('J132', '2018-12-04', '2027-03-13', 678260000000, 4, 'KADC38', 'KADC38132', 'Active'),
('J133', '2014-07-10', '2034-05-14', 795202000000, 8, 'KADC39', 'KADC39133', 'Active'),
('J134', '2019-05-04', '2040-06-21', 755878000000, 3, 'KADC34', 'KADC34134', 'Active'),
('J137', '2016-11-14', '2028-09-14', 714490000000, 6, 'KADC34', 'KADC34137', 'Active'),
('J138', '2018-06-12', '2037-05-27', 851234000000, 4, 'KADC38', 'KADC38138', 'Active'),
('J139', '2020-02-21', '2034-08-18', 839429000000, 2, 'KADC39', 'KADC39139', 'Active'),
('J140', '2020-09-14', '2031-12-14', 672014000000, 2, 'APDC48', 'APDC48140', 'Active'),
('J141', '2018-03-13', '2030-04-22', 769647000000, 4, 'APDC41', 'APDC41141', 'Active'),
('J143', '2017-07-25', '2031-08-05', 696070000000, 5, 'APDC43', 'APDC43143', 'Active'),
('J144', '2020-09-03', '2027-10-11', 708871000000, 2, 'APDC41', 'APDC41144', 'Active'),
('J148', '2019-04-11', '2034-10-15', 926908000000, 3, 'APDC48', 'APDC48148', 'Active'),
('J149', '2019-07-11', '2035-10-08', 677873000000, 3, 'APDC43', 'APDC43149', 'Active'),
('J251', '2018-05-17', '2033-07-27', 785382000000, 4, 'TNDC51', 'TNDC51251', 'Active'),
('J252', '2018-06-22', '2030-10-16', 740467000000, 4, 'TNDC52', 'TNDC52252', 'Active'),
('J253', '2019-01-15', '2030-11-24', 964102000000, 3, 'TNDC51', 'TNDC51253', 'Active'),
('J255', '2016-01-21', '2028-07-20', 830942000000, 6, 'TNDC55', 'TNDC55255', 'Active'),
('J256', '2019-04-14', '2036-02-08', 805359000000, 3, 'TNDC52', 'TNDC52256', 'Active'),
('J258', '2019-04-13', '2031-11-13', 747336000000, 3, 'TNDC55', 'TNDC55258', 'Active'),
('J261', '2018-07-13', '2033-11-11', 772859000000, 4, 'KDC66', 'KDC66261', 'Active'),
('J262', '2018-06-22', '2030-10-16', 960896000000, 4, 'KDC66', 'KDC66262', 'Active'),
('J264', '2015-12-03', '2029-09-04', 816013000000, 7, 'KDC64', 'KDC64264', 'Active'),
('J266', '2020-01-11', '2031-07-11', 707117000000, 2, 'KDC69', 'KDC69266', 'Active'),
('J268', '2016-05-28', '2031-12-08', 951869000000, 6, 'KDC64', 'KDC64268', 'Active'),
('J269', '2017-11-22', '2029-02-25', 938025000000, 5, 'KDC69', 'KDC69269', 'Active'),
('J320', '2011-07-30', '2027-10-16', 903203000000, 11, 'MHDC20', 'MHDC20320', 'Active'),
('J322', '2014-05-13', '2033-02-04', 948511000000, 8, 'MHDC20', 'MHDC20322', 'Active'),
('J325', '2015-10-07', '2029-06-25', 810474000000, 7, 'MHDC25', 'MHDC25325', 'Active'),
('J327', '2018-06-25', '2035-08-07', 795056000000, 4, 'MHDC27', 'MHDC27327', 'Active'),
('J328', '2013-03-12', '2031-10-18', 926777000000, 9, 'MHDC25', 'MHDC25328', 'Active'),
('J329', '2020-02-17', '2032-02-20', 738757000000, 2, 'MHDC27', 'MHDC27329', 'Active'),
('J390', '2012-06-04', '2031-09-04', 751256000000, 10, 'RJDC90', 'RJDC90390', 'Active'),
('J391', '2018-06-22', '2030-10-16', 984186000000, 4, 'RJDC91', 'RJDC91391', 'Active'),
('J393', '2018-07-13', '2033-11-11', 787666000000, 4, 'RJDC91', 'RJDC91393', 'Active'),
('J397', '2012-06-18', '2027-04-21', 828715000000, 10, 'RJDC97', 'RJDC97397', 'Active'),
('J398', '2014-05-31', '2027-08-06', 775369000000, 8, 'RJDC90', 'RJDC90398', 'Active'),
('J399', '2016-11-11', '2030-10-15', 968497000000, 6, 'RJDC97', 'RJDC97399', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `LAWS`
--

CREATE TABLE `LAWS` (
  `Chapter` int(11) NOT NULL,
  `Section_Division` varchar(255) NOT NULL,
  `Clause` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `LAWS`
--

INSERT INTO `LAWS` (`Chapter`, `Section_Division`, `Clause`) VALUES
(2, '10', '“Man”. “Woman”.'),
(4, '100', 'When the right of private defence of the body extends to causing death.'),
(4, '101', 'When such right extends to causing any harm other than death.'),
(4, '102', 'Commencement and continuance of the right of private defence of the body.'),
(4, '103', 'When the right of private defence of property extends to causing death.'),
(4, '104', 'When such right extends to causing any harm other than death.'),
(4, '105', 'Commencement and continuance of the right of private defence of property.'),
(4, '106', 'Right of private defence against deadly assault when there is risk of harm to innocent person.'),
(5, '107', 'Abetment of a thing.'),
(5, '108', 'Abettor.'),
(5, '108A', 'Abetment in Indian of offences outside India.'),
(5, '109', 'Punishment of a abetment if the act abetted is committed in consequence and when no express provision is made for its punishment.'),
(2, '11', '“Person”.'),
(5, '110', 'Punishment of abetment if person abetted does act with different intention from that of abettor.'),
(5, '111', 'Liability of abettor when one act abetted and different act done.'),
(5, '112', 'Abettor when liable to cumulative punishment for act abetted and for act done.'),
(5, '113', 'Liability of abettor for an effect caused by the act abetted different from that intended by the abettor.'),
(5, '114', 'Abettor present when offence is committed.'),
(5, '115', 'Abetment of offence punishable with death or imprisonment for life.-if offence not committed.'),
(5, '116', 'Abetment of offence punishable with imprisonment.-if offence be not committed.'),
(5, '117', 'Abetting commission of offence by the public or by more than ten persons.'),
(5, '118', 'Concealing design to commit offence punishable with death or imprisonment for life.'),
(5, '119', 'Public servant concealing design to commit offence which it is his duty to prevent.'),
(2, '12', 'Public.'),
(5, '120', 'Concealing design to commit offence punishable with imprisonment.'),
(5, '120A', 'Definition of criminal conspiracy.'),
(5, '120B', 'Punishment of criminal conspiracy.'),
(2, '14', '“Servant of Government”.'),
(2, '17', '“Government”.'),
(2, '18', '“India”.'),
(2, '19', '“Judge”.'),
(1, '2', 'Punishment of offences committed within India.'),
(2, '20', '“Court of Justice”.'),
(2, '21', '“Public servant”.'),
(2, '22', '“Moveable property”.'),
(2, '23', '“Wrongful gain”. “Wrongful loss”.'),
(2, '24', '“Dishonestly”.'),
(2, '25', '“Fraudulently”.'),
(2, '26', '“Reason to believe”.'),
(2, '27', 'Property in possession of wife, clerk or servant.'),
(2, '28', '“Counterfeit”.'),
(2, '29', '“Document”.'),
(2, '29A', '“Electronic record”.'),
(1, '3', 'Punishment of offences committed beyond, but which by law may be tried within, India.'),
(2, '30', '“Valuable security”.'),
(2, '31', '“A will”.'),
(2, '32', 'Words referring to acts include illegal omissions.'),
(2, '33', '“Act”.'),
(2, '34', 'Acts done by several persons in furtherance of common intention.'),
(2, '35', 'When such an act is criminal by reason of its being done with a criminal knowledge or intention.'),
(2, '36', 'Effect caused partly by act and partly by omission.'),
(2, '37', 'Co-operation by doing one of several acts constituting an offence.'),
(2, '38', 'Persons concerned in criminal act may be guilty of different offences.'),
(2, '39', '“Voluntarily”.'),
(1, '4', 'Extension of Code to extra-territorial offences.'),
(2, '40', '“Offence”.'),
(2, '41', '“Special law”.'),
(2, '42', '“Local law”.'),
(2, '43', '“Illegal”. “Legally bound to do”.'),
(2, '44', '“Injury”.'),
(2, '45', '“Life”.'),
(2, '46', '“Death”.'),
(2, '47', '“Animal”.'),
(2, '48', '“Vessel”.'),
(2, '49', '“Year”.'),
(1, '5', 'Certain laws not to be affected by this Act.'),
(2, '50', '“Section”.'),
(2, '51', '“Oath”.'),
(2, '52', '“Good faith”. 52A. “Harbour-“.'),
(3, '53', 'Punishments. 53A. Construction of reference to transportation.'),
(3, '54', 'Commutation of sentence of death.'),
(3, '55', 'Commutation of sentence of imprisonment for life.'),
(3, '55A', 'Definition of appropriate Government.'),
(3, '57', 'Fractions of terms of punishment.'),
(2, '6', 'Definitions in the Code to be understood subject to exceptions.'),
(3, '60', 'Sentence may be (in certain cases of imprisonment) wholly or partly rigorous of simple.'),
(3, '63', 'Amount of fine.'),
(3, '64', 'Sentence of imprisonment for non-payment of fine.'),
(3, '65', 'Limit to imprisonment for non-payment of fine, when imprisonment and fine awardable.'),
(3, '66', 'Description of imprisonment for non-payment of fine.'),
(3, '67', 'Imprisonment for non-payment of fine, when offence punishable with fine only.'),
(3, '68', 'Imprisonment to terminate on payment of fine.'),
(3, '69', 'Termination of imprisonment on payment of proportional part of fine.'),
(2, '7', 'Sense of expression once explained.'),
(3, '70', 'Fine leviable within six years, of during imprisonment. Death not to discharge property from liability.'),
(3, '71', 'Limit of punishment of offence made up of several offences.'),
(3, '72', 'Punishment of person guilty of one of several offences, the judgment stating that is doubtful of which.'),
(3, '73', 'Solitary confinement.'),
(3, '74', 'Limit of solitary confinement.'),
(3, '75', 'Enhanced punishment for certain offences under Chapter XII or Chapter XVII after previous conviction.'),
(4, '76', 'Act done by a person bound, or by mistake of fact believing himself bound, by law.'),
(4, '77', 'Act of Judge when acting judicially.'),
(4, '78', 'Act done pursuant to the judgment or order of Court.'),
(4, '79', 'Act done by a person justified, or by mistake of fact believing himself justified, by law.'),
(2, '8', 'Gender.'),
(4, '80', 'Accident in doing a lawful act.'),
(4, '81', 'Act likely to cause harm, but done without criminal intent, and to prevent other harm.'),
(4, '82', 'Act of a child under seven years of age.'),
(4, '83', 'Act of a child above seven and under twelve of immature understanding.'),
(4, '84', 'Act of a person of unsound mind.'),
(4, '85', 'Act of a person incapable of judgment by reason of intoxication caused against his will.'),
(4, '86', 'Offence requiring a particular intent or knowledge committed by one who is intoxicated.'),
(4, '87', 'Act not intended and not known to be likely to cause death or grievous hurt, done by consent.'),
(4, '88', 'Act not intended to cause death, done by consent in good faith for person\'s benefit.'),
(4, '89', 'Act done in good faith for benefit of child or insane person, by or by consent of guardian. Provisos.'),
(2, '9', 'Number.'),
(4, '90', 'Consent known to be given under fear or misconception.'),
(4, '91', 'Exclusion of acts which are offences independently of harm caused.'),
(4, '92', 'Act done in good faith for benefit of a person without consent.'),
(4, '93', 'Communication made in good faith.'),
(4, '94', 'Act to which a person is compelled by threats.'),
(4, '95', 'Act causing slight harm.'),
(4, '96', 'Things done in private defence.'),
(4, '97', 'Right of private defence of the body and of property.'),
(4, '98', 'Right of private defence against the act of a person of unsound mind. etc.'),
(4, '99', 'Acts against which there is no right of private defence.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADVOCATES`
--
ALTER TABLE `ADVOCATES`
  ADD PRIMARY KEY (`Lawyer_ID`);

--
-- Indexes for table `BIODATA`
--
ALTER TABLE `BIODATA`
  ADD PRIMARY KEY (`Aadhaar_ID`);

--
-- Indexes for table `CASE_DETAILS`
--
ALTER TABLE `CASE_DETAILS`
  ADD PRIMARY KEY (`Case_ID`);

--
-- Indexes for table `CASE_RECORDS`
--
ALTER TABLE `CASE_RECORDS`
  ADD PRIMARY KEY (`Case_ID`),
  ADD KEY `Section_Division` (`Section_Division`);

--
-- Indexes for table `CLIENTS`
--
ALTER TABLE `CLIENTS`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Indexes for table `COURTS`
--
ALTER TABLE `COURTS`
  ADD PRIMARY KEY (`Court_ID`);

--
-- Indexes for table `COURT_SCHEDULE`
--
ALTER TABLE `COURT_SCHEDULE`
  ADD PRIMARY KEY (`Date`,`Time`,`Court_Hall_Number`);

--
-- Indexes for table `JUDGES`
--
ALTER TABLE `JUDGES`
  ADD PRIMARY KEY (`Judge_ID`),
  ADD KEY `Court` (`Court_ID`);

--
-- Indexes for table `LAWS`
--
ALTER TABLE `LAWS`
  ADD PRIMARY KEY (`Section_Division`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CASE_RECORDS`
--
ALTER TABLE `CASE_RECORDS`
  ADD CONSTRAINT `case_records_ibfk_1` FOREIGN KEY (`Section_Division`) REFERENCES `LAWS` (`Section_Division`);

--
-- Constraints for table `JUDGES`
--
ALTER TABLE `JUDGES`
  ADD CONSTRAINT `Court` FOREIGN KEY (`Court_ID`) REFERENCES `COURTS` (`Court_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
