-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 05:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spen_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `Advert_id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`Advert_id`, `Type`, `Company_Name`, `Logo`, `Photo`, `user_id`) VALUES
(3, 'event', 'etsalat', 'dsdvdvs', 'event-we.jpg', 13),
(5, 'event', 'we', 'wee.png', 'event2-we.jpg', 13),
(6, 'event', 'we', 'ojunuj', 'event3-we.jpg', 13),
(8, 'sport', 'we', 'download.png', 'event2-we.jpg', 13),
(9, 'event', 'cocacola', 'coca.png', 'sddsvdsv', 13);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `player_position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `player_name`, `birth`, `address`, `nationality`, `phone`, `player_position`) VALUES
(1, 'mahmoud salah', '2001-12-12', 'gvhgcgtrdtdrtr', 'iicsdi', 1141220028, 'k cmlkmclkmcskdmc'),
(3, 'ahmed rafat', '2005-05-12', 'idvdfhvdfhbbbbbbbbbb', 'dnf vdf vihdfv', 1121638983, 'lkfmldknfnvdojfnvolfnveoirgergre');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ContactUs_id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Massage` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ContactUs_id`, `UserName`, `Phone`, `Email`, `Massage`, `user_id`) VALUES
(15, 'ahmed', 1121638983, 'aasd@gmail.com', 'nc skdjv ksjdvnsdnvs', 14),
(18, 'mahmoud salah', 1141220028, 'e@gmail.com', 'jdsniusdbivduivdufvidfuvd', 17),
(19, 'mahmoud salah', 1141220028, 'e@gmail.com', 'dmhcbwydcuwydbce iwbiweycwoijwciouwicue\r\njwibuhiuev', 17);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Brief` varchar(200) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `New` varchar(1000) NOT NULL,
  `Name_Author` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_id`, `Type`, `Title`, `Brief`, `Photo`, `New`, `Name_Author`, `user_id`) VALUES
(15, 'event', 'Fire at the top of Egypt Language School in Fayoum Road', 'The official of the Civil Protection Operations Room in Giza received a signal from the Police Department .....', 'event-harik.jpg', 'The official of the Civil Protection Operations Room in Giza received a signal from the Rescue Police Department that thick fumes and flames rose from an educational facility on Misr-Fayoum Road.\r\nMajor General Jaber Bahaa, Director of the General Administration of Civil Protection in Giza, sent fire trucks, led by his deputy, in coordination with the department\'s warden.\r\nExamination and inspection revealed that a fire had broken out at the top of the Misr Language School building in front of the recruitment center in Al-Haram, and the Civil Defense forces put out the fire.', 'ahmed yasser', 13),
(16, 'event', 'Terror on the Ring Road.. A driver endangers the lives of citizens.. What is the story?', 'The security services at the Ministry of Interior revealed the circumstances of the circulation of a video clip on one of the pages', 'event-polis.jpg', 'The security services at the Ministry of Interior revealed the circumstances of circulating a video clip on a page on the social networking site \"Facebook\", which included a bus stopping in the left lane at the top of the ring road in the Al-Marj Police Department, and allowing passengers to disembark from it without taking the necessary measures for their safety and security, which caused the injury of one of them. Car accidents and damage.\r\nBy conducting investigations and collecting information through the use of modern technical techniques, it was possible to identify and seize the aforementioned bus and its driver (driver, resident of Qalyubia Governorate), and by confronting him, he confessed to committing the incident in the manner referred to.', 'mohamed hassan', 13),
(17, 'event', '6 killed in a coal mine explosion in Pakistan', 'An explosion caused by methane gas led to the collapse of part of a coal mine in southwestern Pakistan', 'event-bacstan.jpg', 'A methane gas explosion has led to the collapse of part of a coal mine in southwestern Pakistan, killing six miners and injuring five, officials said Friday.\r\nThe explosion occurred Thursday in the Harnai district of Balochistan province, southwest of the country.\r\nThe mines inspector, Muhammad Akram, said that it took the rescuers 24 hours to extract the stranded workers and recover the bodies of the deceased.\r\nMiners in Pakistan often complain that mine owners have not taken any safety measures or installed required equipment.\r\nA methane gas explosion has led to the collapse of part of a coal mine in southwestern Pakistan, killing six miners and injuring five, officials said Friday.\r\nThe explosion occurred Thursday in the Harnai district of Balochistan province, southwest of the country.', 'omar mohamed', 13),
(18, 'event', 'There is no cancellation in the branching of science and sports in high school', 'The Ministry of Education and Technical Education confirmed that there is no cancellation of branching....', 'event-eltalym.jpg', 'The Ministry of Education and Technical Education confirmed that there is no cancellation of branching in high school, stressing that branching into scientific or mathematical sciences in the scientific section continues.\r\n \r\nOn June 12, the students will take the religious education and national education exams, and on Tuesday, June 13, the subjects of economics and statistics, and Sunday, June 18, the Arabic language, and next Tuesday, June 20, the second foreign language, and next Sunday, June 25, chemistry for students of the scientific section, and geography for students of the literary section.', 'Mahmoud Taha Hussein', 13),
(19, 'event', 'New Valley Culture celebrates International Women\'s Day for a week..', 'The Directorate of Culture in the New Valley celebrated International Women\'s Day....', 'event-ahtfal.jpg', 'The Directorate of Culture in the New Valley celebrated International Women\'s Day with a number of events over the course of a week, as part of the various activities provided by the General Authority for Culture Palaces, headed by director Hisham Atwa, within the plan of the Central Upper Egypt region.\r\n \r\nThe Libraries Department organized a cultural lecture at the Technical Secondary School for Girls entitled International Women\'s Day, which falls on the eighth of March, in order to enhance the role of women in society and grant them their right to equality and overcome the provision of a decent life. Instead of the effective role that women play in society, how the mother is a sound role model for her children, and how man honors the woman.', 'Maher El Bahnasawy', 13),
(20, 'event', 'A teacher drowned in a canal in Menoufia due to a diabetic coma', 'A teacher in the village of Mansheyet Seif of the Bagour Center in the Menoufia Governorate...', 'event-gthh.jpg', 'A teacher in the village of Manshiyet Seif, affiliated with the Bagour Center in the Menoufia Governorate, was killed by drowning in a canal. A report of the incident was drawn up, and the Public Prosecution Office archived the investigations report.\r\n\r\nThe Director of Menoufia Security received a notification from the warden of the El-Bagour Center, stating the death of a 53-year-old teacher in the village of Mansheyat Seif of the El-Bagour Center in the Menoufia Governorate. By moving and examining, the deceased was found to have been in a coma, and he denied the suspicion for trial, as a report of the incident was issued, and the Public Prosecution Office traveled to conduct investigations.', 'ahmed fathy', 13),
(21, 'event', 'The Sohag endowment will open 5 mosques today.', 'Today, Friday, the Awqaf Directorate in Sohag Governorate opened under the supervision of Dr. Mohamed Hosni Abdel Rahim', 'event-masaged.jpg', 'Today, Friday, the Directorate of Endowments in Sohag Governorate, under the supervision of Dr. Mohamed Hosni Abdel Rahim, Undersecretary of the Directorate of Endowments in Sohag, inaugurated the Buffalo Mosque in the new estate in the village of Salam, affiliated to the Endowments Administration in Tama, north of Sohag Governorate, as part of the state’s plan for the reconstruction of mosques, which highlights the great interest of the political leadership in the governorates of Upper Egypt. in general and Sohag Governorate in particular through the development and reconstruction of mosques.', 'Mahmoud Maqbool', 13),
(22, 'event', 'Removal of 4 counting cases and issuance of 17 reports for various violations in Aswan.', 'Officials of local units in the various cities and centers of Aswan governorate continue their efforts to intensify the immediate removal of encroachments and occupations', 'event-aswan.jpg', 'Officials of local units in the various cities and centers of Aswan governorate continue their efforts to intensify the immediate removal of encroachments and occupations, general hygiene and removal of waste, accumulations and dust, while organizing large-scale campaigns to control the markets, in implementation of the instructions of the Aswan governor.\r\n\r\nIn this context, the local unit of the Kom Ombo Center and City, led by Shawky Mustafa, carried out the immediate removal of 3 cases considered in the cradle, which are white brick buildings on agricultural lands in the district of Hijaza village with an area of ​​​​525 square meters, in cooperation with land protection officials in the agrarian reform.', 'Abdullah Salah Al-Sabi', 13),
(23, 'sport', 'The expected formation of Al-Ahly to face Sundowns in the African Champions League', 'Al-Ahly’s expected formation to face Sundowns in the African Champions LeagueAl-Ahly and SundownsFollow ', 'sport-ahly.jpg', 'Al-Ahly’s expected formation to face Sundowns in the African Champions LeagueAl-Ahly and SundownsFollow our page on Google NewsFollow our page on Google NewsFollow our page on FacebookFollow our page on FacebookFollow our page on YouTubeFollow our page on YouTubeRelated news\r\nToday\'s match schedule.. Salah faces Bournemouth.. Al-Ahly and Sundowns in Africa\r\nToday\'s match schedule.. Salah faces Bournemouth.. Al-Ahly and Sundowns in Africa\r\nsports\r\n Masrawy reveals .. How does Koller think of a match to face Sundowns in the Champions League?\r\nMasrawy reveals .. How does Koller think of a match to face Sundowns in the Champions League?\r\nsports\r\nKohler responds to criticism: Al-Ahly has improved a lot under my leadership\r\nKohler responds to criticism: Al-Ahly has improved a lot under my leadership\r\nsports', 'osama halmy', 13),
(24, 'sport', 'Today\'s match schedule.. Salah faces Bournemouth.. Al-Ahly and Sundowns in Africa', 'Today, Saturday, several strong matches will be held in various football competitions around the world.', 'sport-mo.jpg', 'Today, Saturday, several strong matches will be held in various football competitions around the world.\r\n\r\nAl-Ahly club is facing an important confrontation against its South African counterpart, Mamelodi Sundowns, in the fourth round of the group stage in the African Champions League.\r\n\r\nThe Egyptian professional, Mohamed Salah, is in a strong confrontation with his team, Liverpool, against Bournemouth, in the 27th round of the English Premier League.\r\n\r\nThe final match of the African Youth Championship will also be held between Senegal and Gambia.\r\n\r\nWe review for you the most prominent matches today, Saturday:', 'rafael attia', 13),
(25, 'sport', 'How did Moamen Zakaria comment on his photo with President Abdel Fattah El-Sisi?', 'Former Al-Ahly and Zamalek player, Moamen Zakaria, shared a picture he collected with ...', 'spory-sisi.jpg', 'Former Al-Ahly and Zamalek player, Moamen Zakaria, shared a picture he collected with President Abdel Fattah El-Sisi, from the activities of the final match of the “Capitano” program to discover talents.\r\n\r\nMoamen Zakaria commented on the photo through his Twitter account, with the \"heart\" and \"challenge\" emojis.\r\n\r\nPresident Sisi was received by the Minister of Youth and Sports, Dr. Ashraf Sobhi, and Captain Ali Abu Greisha, in addition to Dr. Magi Al-Halawani, former dean of the Faculty of Information.', 'Wael Tawfik', 13),
(26, 'economy', 'Increasing the local component and accessing new markets.. The Prime Minister confirms the support and development of exports', 'Dr. Mustafa Madbouly, Prime Minister, held a meeting today; To follow up on efforts to support and develop the Egyptian export ', 'economy-1.jpg', 'Dr. Mustafa Madbouly, Prime Minister, held a meeting today; To follow up on efforts to support and develop the Egyptian export sector, in the presence of Dr. Mohamed Maait, Minister of Finance, Eng. Ahmed Samir, Minister of Trade and Industry, Sherine El Sharkawy, First Assistant Minister of Finance for Economic Affairs, Dr. Amani El Wasal, Executive Director of the Export Development Fund, and officials of a number of ministries. and stakeholders.\r\n\r\nIn this infographic, we highlight the highlights of the meeting.', 'mostafa mahmoud', 13),
(28, 'policy', 'Deputy Coordinator Ghada Ali\'s draft text to amend the Capital Market Law', 'The Economic Committee, chaired by Dr. Mohamed Suleiman, approved during a meeting today, Tuesday', 'policy1.jpg', 'The Economic Committee, chaired by Dr. Mohamed Suleiman, approved during a meeting today, Tuesday, in principle, a draft law submitted by Representative Ghada Ali regarding amending some provisions of the Capital Market Law. The meeting was attended by Dr. Yasmine Fouad, Minister of Environment.\r\n \r\nThe following is the text of the draft law submitted by Representative Ghada Ali regarding amending the provisions of the Capital Market Law...\r\n\r\nBased on the provisions of Article 122 of the Constitution and Article 159 of the internal regulations of the Council, I submit to you a draft law regarding the amendment of some provisions of Law No. 95 of 1992 related to the capital market. Your Excellency is kindly requested to consider, present and refer to the competent committees for examination and to submit a report thereon to the Council.\r\n \r\n(First Article) The tabulation of Article 15 of Part Two (Securities Exchanges) is changed to Article 16 and the tabulation of Article 16 is change', 'Amen Saleh', 13),
(29, 'policy', 'The law prohibits transactions in the pre-tax exempt all fees .. Find out the details', 'The Customs Law prohibits disposing of exempted goods, whether the exemption ..', 'policy2.jpg', 'The Customs Law prohibits disposing of exempted goods, whether the exemption is complete or partial, or with reductions in the customs tariff, with any type of disposal that transfers ownership to non-persons or entities that enjoy the same exemption, or using them for purposes other than those for which the exemption or reduction is decided, except after the approval of the Department. Payment of the customs tax and all other taxes and fees, if due, in accordance with the conditions specified by the executive regulations of the law.', 'Amen Saleh', 13),
(30, 'policy', 'The Agriculture and Irrigation Committee of the House of Representatives discussed ', 'The Agriculture and Irrigation Committee of the House of Representatives discussed, ', 'policy3.jpg', 'The Agriculture and Irrigation Committee of the House of Representatives discussed, during its meeting today, chaired by Representative Hisham Al-Hosary, Chairman of the Committee, a request for briefing submitted by Representative Hisham Al-Jahel regarding the exaggeration in determining the consideration for usufruct for the occupancy of utilities for the purposes of planting gardens on the shores of the Nile River located outside the cordon of buildings.\r\n \r\nRepresentative Hisham Al-Jahel reviewed the briefing request, criticizing the exaggerated claims made by real estate taxes to citizens, amounting to 250,000 pounds in value for the right to usufruct per feddan within the urban cordon annually, and 100 thousand pounds per feddan outside the cordon annually.', 'Kamel Kamel', 13),
(31, 'policy', 'Ignorance of the law implicates a family in renting their furnished apartment for 48 years..about a \"parliamentarian\"', 'The \"Parliamentary\" website, which specializes in legislative affairs and ', 'policy4.jpg', 'The \"Parliamentary\" website, which specializes in legislative affairs and representatives, monitored in a report titled \"The End of Ignorance of the Law... The Heirs Discover that Their Inheritor\'s Apartment is Rented and Furnished\", in which it reviewed a court ruling revealing the seriousness of ignorance of the law, as the apartment rent lasted for 48 years at a value of 10 pounds. per month, and after that the heirs of the owner discover that the apartment was rented furnished and that the furnished rent may not be extended, and the court decides to expel the heirs of the tenant, and establishes a judicial principle that furnished apartments are not subject to the rules for extending lease contracts, and here are the full details:\r\n\r\n\r\n\"The end of ignorance of the law\"... An apartment is the right of the heirs to be rented \"furnished\"... and they receive 10 pounds per month for a period of 48 years.', 'Alaa Radwan', 13),
(32, 'policy', 'To support the citizen.. \"Nation\'s Future\" opens a new headquarters, launches a youth sports marathon, and provides mobile food convoys at a discount in the governorates', 'The Nation\'s Future Party organized a number of activities and service events', 'policy5.jpg', 'The Nation\'s Future Party organized a number of activities and service events for members and citizens in the governorates of the republic, today, Thursday, within the framework of the party\'s plan for the state\'s participation in providing means of aid to citizens and fighting high prices, and also within the party\'s ongoing campaigns to communicate with the Egyptian street and citizens, believing in its important and effective role in the necessity of presence and cohesion with the citizens.\r\n \r\nin Menoufia Governorate,\r\n \r\n\r\nThe Youth Secretariat at Al-Bajour Center organized a free medical convoy, including a number of medical specialties, in the partisan unit in the village of Bir Shams, and it included various specialties, free medicines and analyses. Serve the free service.', 'mohamed hassan', 13),
(33, 'policy', 'The “Representatives’ Plan” will discuss the final account of the Agricultural Research Center next Monday', 'The Parliament’s Plan and Budget Committee will hold two meetings ', 'policy6.jpg', 'The Parliament’s Plan and Budget Committee will hold two meetings next Monday, the first to discuss the final account of my budget (Diwan General of the Ministry of Agriculture and Land Reclamation - Public Authority for Construction Projects and Agricultural Development) for the fiscal year 2021/2022.\r\n \r\nIn the second meeting, the committee will discuss the final accounts of my budget (the Agricultural Research Center - the Public Authority for Agrarian Reform) for the fiscal year 2021/2022.\r\n \r\nThe Plan Committee in the House of Representatives discussed, in its last meeting, the closing budget of the Office of the Ministry of Transport - the Public Transport Authority in Cairo for the fiscal year 2021/2022, as well as the closing of the budget of the National Authority for Egyptian Railways for the fiscal year 2021/2022, and the committee also discussed in its meeting on Tuesday, January 17, the final The budget of the Public Authority for Roads, Bridges and Land Transport - the Na', 'Amen Saleh', 13),
(34, 'policy', 'The Speaker to his Indian counterpart: The relations between the two countries are historic and we look forward to enhancing cooperation', 'Counselor Dr. Hanafi Jabali, Speaker of the House of Representatives, met with his ...', 'policy7.jpg', 'Counselor Dr. Hanafi Jabali, Speaker of the House of Representatives, met with his Indian counterpart on the sidelines of his participation in the work of the 146th Assembly of the Inter-Parliamentary Union, which is currently being held in the Kingdom of Bahrain.\r\n\r\n \r\n\r\nCounselor Dr. Hanafi Jabali, Speaker of the House of Representatives, affirmed Egypt\'s pride in the historical relations it has with India, referring in this regard to President Abdel Fattah El-Sisi\'s recent visit to India, which is a clear reflection of the specificity of Egyptian-Indian relations, as it resulted in raising the level of relations to one level. The level of strategic partnership, Counselor Dr. Hanafi Jabali stressed the aspiration to enhance the Egyptian-Indian parliamentary cooperation.\r\n\r\n \r\n\r\nDuring the meeting, Counselor Dr. Hanafi Jabali, Speaker of the House of Representatives, expressed his full appreciation for the cooperation', 'Amen Saleh', 13),
(35, 'policy', 'A decent life for farmers.. Representative Nader Mustafa calls for discussing a mechanism to provide the \"farmer\'s pension\"', 'The Agriculture Committee in the House of Representatives discussed, during its', 'policy8.jpg', 'The Agriculture Committee in the House of Representatives discussed, during its meeting today, Sunday, headed by Representative Hisham Al-Hosary, a request for briefing submitted by Representative Nader Mustafa, a member of the Coordination of Youth Parties and Politicians, regarding changing the procedures governing obtaining the farmer’s pension in order to achieve a decent life for them.\r\n \r\nRepresentative Nader Mostafa said, \"The farmer\'s pension is the mainstay of the Egyptian economy, and it is going through difficult circumstances that oblige each of us to support it.\"', ' Kamel Kamel', 13),
(36, 'economy', 'Economic news today.. EGAS announces a new gas discovery in the Mediterranean', 'The Egyptian Natural Gas Holding Company (EGAS) announced the achievement of a new discovery of natural gas in the Narges....', 'ecnomy2.jpg', 'The Egyptian Natural Gas Holding Company (EGAS) announced the achievement of a new discovery of natural gas in the Narges offshore concession area in the Mediterranean, after its efforts in cooperation with Chevron (operating in the Narges offshore concession area in the Mediterranean) and the Egyptian companies Eni and Tharwa announced a new and important gas discovery. In the exploration well Nargis-1.\r\n\r\n \r\n\r\nThe discovery is located about 60 km north of the Sinai Peninsula, where the well Nargis-1 was drilled by the Stena Forth drilling rig at a water depth of 309 meters, and a reservoir thickness of about 61 meters was found among 140 meters of sandstone with good properties in the Miocene era. Lower and Oligocene era, at a total depth of the well exceeding 5,000 meters in the concession area in which Chevron operates.', 'Abdul Halim Salem', 13),
(37, 'economy', 'Economy news.. Communication aims to increase foreign investments for emerging companies', 'Today, Sunday 10-30-2022, the news of the Egyptian economy varied today, the most ', 'ecnomy3.jpg', 'Today, Sunday 10-30-2022, the news of the Egyptian economy varied today, the most prominent of which was Dr. Amr Talaat, Minister of Communications and Information Technology, who said that Egyptian startups have succeeded in attracting capital from abroad, thanks to the state’s efforts to create an investment climate for these companies.\r\n\r\n \r\n\r\nMinister of Communications: We aim to increase the volume of foreign investment flowing to start-up companies\r\nDr. Amr Talaat, Minister of Communications and Information Technology, said that Egyptian start-up companies have succeeded in attracting capital from abroad, thanks to the state’s efforts to create an investment climate for these companies, which made Egypt take the lead in attracting capital for startups in North Africa and the Middle East. And the second in terms of the volume of investment in the region.', 'Abdul Halim Salem', 13),
(38, 'economy', 'Economic news today: 169% increase in UAE investments in Egypt in the first half', 'Today, Sunday, the news of the Egyptian economy varied, the most prominent of which is the data ', 'economy4.jpg', 'Today, Sunday, the news of the Egyptian economy varied, the most prominent of which is the data of the Central Agency for Public Mobilization and Statistics. Today, Sunday, 8/2022, the data of the Central Agency for Public Mobilization and Statistics revealed an increase in the value of Emirati investments in Egypt, reaching $1.9 billion during the first half of the fiscal year.\r\nThe data of the Central Agency for Public Mobilization and Statistics revealed today, Sunday, 8/2022, that the value of Emirati investments in Egypt increased to reach $1.9 billion during the first half of the fiscal year 2021/2022, compared to $712.6 million during the same period of the year 2020/2021, with an increase of . 169.1%.', 'Abdul Halim Salem', 13),
(39, 'economy', 'Economy News Today: 1.1 billion pounds in the budget to complete the construction of 13 industrial complexes', 'Today, Tuesday 7-12-2022, the news of the Egyptian economy varied today', 'economy5.jpg', 'Today, Tuesday 7-12-2022, the news of the Egyptian economy varied today, the most prominent of which is the confirmation of Dr. Mohamed Maait, Minister of Finance, that 1.1 billion pounds have been allocated in the new budget to complete the annexation of 13 industrial complexes in the governorates.\r\nDr. Mohamed Maait, Minister of Finance, confirmed that, in implementation of the presidential mandates, we continue to support the industry in all possible ways to transform the current global crises into development opportunities that support the Egyptian economy, in a way that contributes to strengthening our productive capabilities.', 'Abdul Halim Salem', 13),
(40, 'economy', 'Economic news today: 40 billion pounds to finance small projects over 8 years', 'Today, Sunday 6-26-2022, the news of the Egyptian economy today varied, the most prominent', 'economy6.jpg', 'Today, Sunday 6-26-2022, the news of the Egyptian economy today varied, the most prominent of which is the pumping of funds for the small projects sector and work to facilitate the availability of financing to clients and beneficiaries, as it amounted to 40 billion pounds during the period from July 1, 2014 to May 30, 2022 (8 years).\r\nNevin Gamea, Minister of Trade and Industry and CEO of the Enterprise Development Agency, confirmed that the past eight years witnessed an unprecedented boom in financing and services provided to the small enterprise sector, noting that President Abdel Fattah El-Sisi paid great attention to the sector.', 'Abdul Halim Salem', 13),
(41, 'economy', 'Economy News Today.. An initiative to develop urban agglomerations within a decent life 2023/22', 'Today, Sunday 4-17-2022, the news of the Egyptian economy today varied, most notably: The Ministry ....', 'economy7.jpg', 'Today, Sunday 4-17-2022, the news of the Egyptian economy today varied, most notably: The Ministry of Planning and Economic Development launched the “Urban Agglomeration Development” initiative, which targets the cities of the centers and its affiliated sheikhdoms, within the first phase of the national project to develop the Egyptian countryside, “a decent life.” .The Ministry of Planning and Economic Development launched the \"Urban Agglomeration Development\" initiative, which targets the cities of the centers and its affiliated sheikhdoms, as part of the first phase of the national project to develop the Egyptian countryside, \"A Decent Life\".\r\n\r\n \r\n\r\nDr. Hala Al-Saeed, Minister of Planning and Economic Development, confirmed that the \"urban agglomeration development\" initiative aims to achieve integration between the development efforts undertaken by the state in rural and urban areas. In a way that enhances the sense of societal satisfaction, and is consistent with the state\'s direc', 'Abdul Halim Salem', 13),
(42, 'economy', 'Economy News Today.. 66.7 billion meters, the total quantities transported from gas 20/21', 'Today, Saturday 12-18-2021, the news of the Egyptian economy today varied, most notably', 'economy9.jpg', 'Today, Saturday 12-18-2021, the news of the Egyptian economy today varied, most notably. The total quantities transported by means of transporting petroleum products amounted to 91.2 million metric tons in 2020/2021, compared to 86.4 million metric tons in 2019/2020, with an increase of 5.6% after excluding the general Sumed line. 2019/2020, which amounted to 64.1 million metric tons.\r\n66.7 billion cubic meters, the total quantities transported from natural gas in 2020/2021\r\nToday, Saturday, the Central Agency for Public Mobilization and Statistics issued the annual bulletin for means of transporting petroleum materials and natural gas in Egypt in the year 2020/2021, and its most important indicators are that the total quantities transported by means of transporting petroleum materials amounted to 91.2 million metric tons in 2020/2021, compared to 86.4 million metric tons in 2019/ 2020, with an increase of 5.6%, after excluding the Sumed line in 2019/2020', 'Abdul Halim Salem', 13),
(43, 'sport', 'A session that includes senior Al-Ahly leaders to overcome the crisis of defeating Sun Downs...', 'The senior players of Al-Ahly team were keen to hold a session with the rest of the players to talk ', 'sport5.jpg', 'The senior players of Al-Ahly team were keen to hold a session with the rest of the players to talk about the need to overcome the Sun Downs match crisis, in which the red team lost 2/5 in the fourth round of the group stage of the CAF Champions League.\r\n\r\nAnd each of: Muhammad Al-Shennawi, Rami Rabia, and Amr Al-Suleya were keen to talk with the rest of their colleagues about the need to overcome the crisis as soon as possible, and they also demanded that they bear criticism from Al-Ahly fans, and we must reconcile the fans in the cotton match and achieve victory in order to revive Al-Ahly’s chances of ascending to the quarter-finals of Africa. .\r\n\r\nA state of sadness has dominated the atmosphere inside the residence of the Al-Ahly delegation in South Africa since the end of the Sun Downs match, and the technical staff is working to overcome the crisis and start preparing for the Cameroonian cotton match.\r\n\r\nThe technical staff of the Al-Ahly club’s first football team, led by Marcel ', 'Solomon Click', 13),
(44, 'sport', 'Sun Downs: Our goal is to win the African title...', 'Khaled Ali, coordinator of the South African Sun Downs team, believes that his team is making ', 'sport6.jpg', 'Khaled Ali, coordinator of the South African Sun Downs team, believes that his team is making strong performances, and the team\'s goal in the current season is to crown the African Champions League, adding that all players are the same and there is no difference between a main player and a reserve player, and the technical director sees who suits him.\r\n \r\nKhaled Ali said, during statements to the “Ontime Stadium” program with the journalist Saif Zahir, that all matches for Sun Downs are played by winning, whether inside or outside South Africa, and what is reported about missing the match against Al Hilal of Sudan offends the team and the aspirations of going up first in the group to avoid the team. Strong in the quarter-finals of the African Champions League, and there is no room to talk about missing out against Al-Hilal.\r\n \r\nHe explained that Percy Tao is a graduate of Mamelodi Sundowns School, and Mokoena was the one who trained him before, and Tao is a South African player and kno', 'Solomon Click', 13),
(45, 'sport', 'Ahmed Abu Muslim enters the circle of candidates for the new technical staff of the 2005 team', 'Ahmed Abu Muslim, the star of Al-Ahly and the former Egyptian national team, entered the circle ', 'sport7.jpg', 'Ahmed Abu Muslim, the star of Al-Ahly and the former Egyptian national team, entered the circle of candidates to be part of the new technical staff for the national team born in 2005, which is scheduled to be formed within days in preparation for the African Nations and the U-20 World Cup, scheduled for 2025.\r\n \r\nThe Football Association obtained the biography of Abu Muslim in the past hours, in order to study it, especially since all the specific conditions apply to him, which makes it likely that all of him will be present within the formation of the new technical staff.\r\n \r\nAnd now the formation of the technical staff of the Egyptian youth team, born in 2005, which will start preparing and equipping it for the African Cup of Nations and the World Youth Cup in the world 2025', 'Ahmed Tarek', 13),
(46, 'sport', 'Medical examinations for Shikabala, and the technical staff reassures him of his health', 'The medical staff of the first football team at Zamalek Club, led by Dr. Muhammad Osama....', 'sport8.jpg', 'The medical staff of the first football team at Zamalek Club, led by Dr. Muhammad Osama, is keen to conduct continuous medical examinations for Mahmoud Abdel Razek “Shikabala”, a playmaker and team leader, in light of his suffering from a strong cold for days.\r\n \r\nZamalek\'s technical staff reassured the player, wished him a quick recovery and return to training, and asked him to take enough rest and treatment to recover quickly.\r\n \r\nThe coaching staff of the team, led by Portuguese Josevaldo Ferreira, granted the player a rest from participating in training until he finally recovered from the cold he was suffering from.', 'Hossam Hajj', 13),
(47, 'sport', 'Pyramids is a heavy guest on Togolese Askou Kara in the Confederation', 'The first football team of the Pyramids Club will be at six in the evening today, Wednesday....', 'sport9.jpg', 'The first football team of the Pyramids Club will be at six in the evening today, Wednesday, as a guest of Isco Kara Togolese at the Kegui Stadium in the city of Lomé, the Togolese capital, within the framework of the fourth round of the group stage of the Confederation Cup Championship, in a match that will witness strength and rivalry between the two parties, especially since the heavenly team He aspires to collect the three points to secure his position and ensure qualification for the quarter-finals.\r\n \r\nPyramids enters the match, occupying second place in the table of its group standings, with 5 points, the Royal Army in the lead with 7 points, Future in third place with two points, and Isco Cara in last place with one point.\r\n \r\nThe Portuguese coach Jaime Pacheco, coach of Pyramids, warned his team players from the field of the Asco Car match, especially since it is an artificial turf stadium.', 'Ahmed Tarek', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT 'to identify user',
  `name` varchar(100) NOT NULL COMMENT 'Username to login ',
  `password` varchar(100) NOT NULL COMMENT 'password to login',
  `date` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT 0 COMMENT 'Identify User Group'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `password`, `date`, `Email`, `FullName`, `GroupID`) VALUES
(1, 'mohamed hassan ', 'eaf2180723fbdb9a165a3bebe568ff32e44f6668', '2002-11-20', 'ma@gmail.com', 'mohamed hassan mohamed', 0),
(13, 'mahmoud salah', '601f1889667efaebb33b8c12572835da3f027f78', '2001-12-12', 'elt@gmail.com', 'mahmoud salah', 1),
(14, 'MohabYasserElsayeed', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-04-05', 'a@gmail.com', 'sadsdas', 0),
(15, 'ahmed mostafa', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2001-09-15', 'ahmed@gmail.com', 'ahmed mostafaa', 0),
(17, 'ayman', '049424183ea34242092eecc8deb41ea06b8b66cf', '0000-00-00', 'mohamed@gmail.com', 'Mohamed Ayman', 0),
(18, 'mostafa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1999-03-27', 'mostafa12@gmail.com', 'Mostafa Mahmoud', 0),
(19, 'ASMAA ESSAM', 'fae172d17d583905e328ad057865ce8d0ddcd969', '2001-09-15', 'asnkjhilg@gmail.com', 'Asmaa Essam', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`Advert_id`),
  ADD KEY `fk_advert_user1_idx` (`user_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ContactUs_id`),
  ADD KEY `fk_contact_us_user1_idx` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_id`),
  ADD KEY `fk_news_user_idx` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `Advert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ContactUs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to identify user', AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `fk_advert_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `fk_contact_us_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
