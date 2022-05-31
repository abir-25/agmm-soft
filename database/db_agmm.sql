-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 08:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `overview1` text NOT NULL,
  `overview2` text NOT NULL,
  `overview3` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `overview1`, `overview2`, `overview3`, `image`, `mission`, `vision`) VALUES
(1, 'AGMM SOFT started its\' glorious journey in 2018, established as a software development house, which is now one of the Customer Friendly software firms in the country. From the beginning of its outset, AGMM SOFT has taken up bold and innovative assignments in Database programming and the creation of multimedia programming. The company has emerged as a system integrator with a vision to develop customized and tailored software and also to create product basis development jobs for the domestic and international markets.                            ', 'AGMM SOFT focuses to incorporate Advanced Level Computer Education & Training with an intention to make the company instrumental in reducing the existing wide gap between huge demand and very low supply of the IT Professionals by creating skilled manpower in the IT field of the country. It bridges the gap between performance and corporate vision. Since its inception in Bangladesh in 2018, AGMM SOFT has achieved a very positive response from the market in providing a business solution to renowned business houses.                                                ', 'WE are one of the leading IT companies in Bangladesh. We provide Secure, Scalable, On-Demand Application Systems and Data Solutions to help customers improve their business performance. It is also an IT Enabled Service (ITES) provider in the domain of Healthcare, Textiles, and Manufacturing as well as an e-Commerce Portal business. As a provider of outstanding technology solutions and management consultancy through Information Technology.                                          ', 'upload/about/6592e9e6a8.jpg', 'Our mission is to enhance the business growth of our customers with creative Design and Development to deliver market-defining high-quality solutions that create value and reliable competitive advantage for our clients around the world. We ensure in providing end-to-end solution to our clients.\r\nWe also emphasize to deliver optimal solutions with quality and services at reasonable prices. For us, customer satisfaction is given highest priority. We maintain a cordial relationship with our customers in order to retain existing clients and expand customer circle.\r\n                                                                                    ', 'Our vision is to develop in a constant manner and grow as a major IT service provider to become a leading performer, in providing quality Software Development solutions in the competitive global marketplace. Our professional, flexible and integrated process reflects in what we do. We invariably try to improve the quality of our products by exploring innovative ideas.                                                                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basic_info`
--

CREATE TABLE `tbl_basic_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `copyright` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_basic_info`
--

INSERT INTO `tbl_basic_info` (`id`, `name`, `slogan`, `logo`, `favicon`, `copyright`) VALUES
(1, 'AGMM SOFT', 'New Thinkings, New Possibilities', 'upload/bio/favicon.png', 'upload/bio/favicon.png', '© Copyright AGMM SOFT. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_benefit`
--

CREATE TABLE `tbl_benefit` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_benefit`
--

INSERT INTO `tbl_benefit` (`id`, `title`, `description`, `p_id`) VALUES
(8, 'Cost-effective', 'Our hospital management system software did lots of work done automated in just a click so, if it implements, well it cuts off so many manual works. It helps to reduce manpower like this system automatically manages the things which human beings use to manage earlier.', 7),
(9, 'Quality and Compliance', 'Every hospital should send a report of birth, and death that occurred, to the NABH (National Accreditation Board for Hospitals & Healthcare Providers) authorization monthly. It’s hard to arrange them manually so, Medisoft’s HMS helps you to arrange these reports faster within the right time. Every report is observed and accomplished in the Hospital Information Management System carefully and resourcefully for the exact results.', 7),
(10, 'Reduces Scope of Errors', 'Traditional records systems with folders and paper are hard to keep track of-papers have a tendency of getting lost. This can make the doctors not know what tests or medications have been administrated. The worse thing is, when a new doctor or nurse comes on shift, they may not have an exact picture of what has been done and if the chart plan isn’t right in front of them, may dispute a new order based upon lacking information. Our HMSincludes access to previous orders and prescription administration records, meaning that there won’t be any duplication errors.', 7),
(11, 'Data Security', 'Ensuring data safety is the top priority, as patients’ data and other hospital documents are highly confidential. Every slight of information from the full-fledged hospital management system needs to secure from unauthorized access. Any leak of information, as well as data loss or corruption, may lead to potentially shocking outcomes, including lawsuits and other financial consequences, in addition to ruined reputation, all of which can make the hospital close.', 7),
(12, 'Processing Speed and Results', 'With the application of our HMS in your labs or hospitals, you will be capable to treat patients in a better way and get into their real-time reports and other information regarding the patients, and their past clinical data and more can be done to get quick outcomes. The hospital management system makes staff work more accessible and expands the speed of the complete procedures for better results.', 7),
(13, 'Interactions with stuff', 'Teamwork is a good resolution for success in every type of work/job. It is vital to engage all of your representatives for better coordination and cooperation. Our HMS keeps all detailed information and qualification of your staff or employees so that your hospital authority could easily analyze their work.', 7),
(14, 'Better Patient’s Experience', 'Knowing patients’ experience is the best way to grow the hospital business. For a better patient experience, Agmmsoft’s HMS is the best solution for your hospital. Our reliable and suitable HMS system will boost patients’ trust in the hospital services, it will help to attract more clients and enhance the reputation of the hospital.', 7),
(15, 'Information About Doctors', 'With our HMS system, Patients can learn about doctors before scheduling an appointment. It will display a list of available doctors along with information about their experience, expertise, and achievements and also can manage to know the doctors’ schedules and choose a convenient appointment time.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `logo`) VALUES
(3, 'upload/client/1996cd26cb.png'),
(4, 'upload/client/2af0b6b6c5.png'),
(5, 'upload/client/28ce5a7a72.png'),
(6, 'upload/client/92d4f3b3b1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `count1` int(11) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `count2` int(11) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `count3` int(11) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `count4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dashboard`
--

CREATE TABLE `tbl_dashboard` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dashboard`
--

INSERT INTO `tbl_dashboard` (`id`, `image`) VALUES
(1, 'upload/3f0b7a3fdd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `role`, `name`, `email`, `password`) VALUES
(1, 0, 'admin', 'agmmsoft@gmail.com', '12345'),
(2, 1, 'Abir', 'abir@gmail.com', '12345'),
(3, 1, 'mizan', 'mizan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module`
--

CREATE TABLE `tbl_module` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_module`
--

INSERT INTO `tbl_module` (`id`, `title`, `image`, `p_id`) VALUES
(11, 'Patient management', 'upload/module/4111b7284b.jpg', 7),
(12, 'Records Medical Database', 'upload/module/0d64e75fc3.jpg', 7),
(13, 'Billing System', 'upload/module/7fe18da264.jpg', 7),
(14, 'Appointment & Scheduling', 'upload/module/c4afa93aa5.jpg', 7),
(15, 'Doctor Management', 'upload/module/c513f31560.jpg', 7),
(16, 'Electronic Medical Record (EMR)', 'upload/module/67092256fa.jpg', 7),
(17, 'Lab Management', 'upload/module/17fd32c863.png', 7),
(18, 'Pharmacy Management', 'upload/module/b6c4b746ef.jpg', 7),
(19, 'HRM', 'upload/module/b6e9333210.jpg', 7),
(20, 'IPD & OPD System', 'upload/module/4054f847d7.png', 7),
(21, 'Emergency / Casualty Management', 'upload/module/932a6c15ee.jpg', 7),
(22, 'Managing Imaging and Diagnostics', 'upload/module/5f336699eb.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_point`
--

CREATE TABLE `tbl_module_point` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `m_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_module_point`
--

INSERT INTO `tbl_module_point` (`id`, `title`, `m_id`, `p_id`) VALUES
(29, 'Our hospital management system database includes a reliable availability of patients’ information or data.', 11, 7),
(30, 'The disease history, test results, prescribed treatment can be accessed by doctors without much delay to make an accurate analysis and monitor the patient’s health.', 11, 7),
(31, 'It allows lower risks of mistakes.', 11, 7),
(32, 'Our Hospital management system (HMS) includes all the necessary records and keeps all patient’s data.', 12, 7),
(33, 'Doctors can easily access the test result, patient’s history, and prescribed treatment without making much delay to taking exact conclusion and screening the patient’s health.', 12, 7),
(34, 'It allows fewer dangers of errors.', 12, 7),
(35, 'Our hospital is a business company that includes all corresponding financial interfaces between a service provider, executives, customers, suppliers, insurance companies, etc.', 13, 7),
(36, 'While a patient experiences treatment, the staff inputs charges.', 13, 7),
(37, 'Before a patient got discharged it will generate a bill.', 13, 7),
(38, 'The hospital management system should allow different types of payment methods and systems for their services and products.', 13, 7),
(39, 'Mediasoft’s HMS software enables you reception to fix an appointment for patients with the doctors they want as per specialization required by checking the doctor’s availability.', 14, 7),
(40, 'Patients can take schedule online and offline both ways.', 14, 7),
(41, 'Effective scheduling technique makes proper utilization of Doctor’s time and reduces waiting time of patients.', 14, 7),
(42, 'This option is mostly an entry point for your hospital’s doctors/consultants to analyze patients, dispense test and treatment processes and generate prescriptions for them.', 15, 7),
(43, 'A doctor can also record patient symptoms, allergies and suggest medication information everything by this.', 15, 7),
(44, 'Our EMR is a real-time, protected, point of care and patient-related platform for doctors.', 16, 7),
(45, 'It will support your hospitals’ doctor by providing access to patient\'s health condition information and keeping evidence for taking better decisions & support.', 16, 7),
(46, 'Our integrated Lab Management module records and considers all your pathological necessities.', 17, 7),
(47, 'We record medical, commercial, and special laboratory activities under check always. Both inpatients and outpatients can effortlessly use & bill his portal.', 17, 7),
(48, 'So there is no chance of error.', 17, 7),
(49, 'Our hospital management system can manage your hospital\'s pharmacy also very seamlessly.', 18, 7),
(50, 'You can also directly bill with the inpatient’s main billing system & you can collect medicine as your patient collected their medicine. ', 18, 7),
(51, 'This module also maintains all drugs or medicine stock and automates your system which makes your task effortless.', 18, 7),
(52, 'As a hospital is a service provider business, it is thought to manage your HRM system. ', 19, 7),
(53, 'Our system makes it easy for you to manage your workforce, you can also make a different id for every staff and employee and generate their performance too.', 19, 7),
(54, 'Our HMS enables this feature to manage the in-patient & out-patients entering details in addition to the patient’s others info like admission details, room, consultants, surgeon, diet preference, etc. Every patient has a unique admission number to make your data stable. ', 20, 7),
(55, 'This also enables bed transfers, shift ward, discharge summary so on.', 20, 7),
(56, 'All the daily services, like the room rent, operations, delivery, consulting to nursing, etc. also generate by these modules.', 20, 7),
(57, 'To take emergency treatment our hospital management system has a small patient registration form which is very quick and easy to fill up', 21, 7),
(58, 'This module helps to take patients under treatment with minimal information and saves time.', 21, 7),
(59, 'With our advanced system, you can easily check your patient’s reports.', 22, 7),
(60, 'You can also simplify organ diagnosis procedures. Radiology, pathology.', 22, 7),
(61, 'Oncology will be better under stable by this module.', 22, 7),
(62, 'You can easily check your all patient’s data, reports, and analysis their condition too. This module simplified your all critical process.', 22, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing`
--

CREATE TABLE `tbl_pricing` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `period` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `description`, `image`, `status`) VALUES
(7, 'Hospital Management Software', '<p>A Hospital Management system includes services that integrate and simplify the work of healthcare professionals and their collaboration with patients. Without a proper healthcare facility management system, a hospital would not able to commendably keep good staff, care for patients, or make good revenue. AGMMSOFT&nbsp; Data systems limited has been designed and developed a Hospital Management System Software for Hospitals, to provide them with the finest way of managing their business. Our Hospital Management System handles different guidelines of a hospital or clinic&rsquo;s workflows. It maintains the perfect healthcare performance along with an administrative, medical, legal, and financial regulator. Our Hospital ERP solution focuses on excellent coordination between Healthcare organizations like Hospitals, pharmacies, Polyclinics &amp; Clinics, and patients, making e-health a very successful and effective approach. Our HMS software simplifies the work of healthcare professionals and their behavior with patients. Today&rsquo;s upgrade technology is controlling all businesses but the hospital or healthcare business is the most sensitive business because this is related to people&rsquo;s health and life. So you have to choose your software wisely. Mediasoft provides you with all the elements that make your work easier.</p>', 'upload/product/b09391a827.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role`, `status`) VALUES
(1, 'Admin', 0),
(2, 'Moderator', 0),
(3, 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_feature`
--

CREATE TABLE `tbl_service_feature` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `reddit` varchar(255) NOT NULL,
  `tumblr` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `twitch` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `vimeo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `facebook`, `youtube`, `instagram`, `linkedin`, `twitter`, `github`, `website`, `pinterest`, `reddit`, `tumblr`, `google_plus`, `twitch`, `discord`, `vimeo`) VALUES
(3, 'https://www.facebook.com/AbirMahmud101/', 'https://www.youtube.com/channel/UCtl8kJmRv19z8SDZ-7JpTiA', 'https://www.instagram.com/_abir_mahmud_/', 'https://www.linkedin.com/in/abirmahmud25/', 'https://twitter.com/TheAbirMahmud', 'https://github.com/abir-25', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `li` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `designation`, `image`, `type`, `fb`, `ins`, `tw`, `li`, `git`) VALUES
(1, 'Abir Mahmud', 'Software Engineer', 'upload/team/606da873e7.jpg', 0, 'https://www.facebook.com/AbirMahmud101/', 'https://www.instagram.com/_abir_mahmud_/', 'https://twitter.com/TheAbirMahmud', 'https://www.linkedin.com/in/abirmahmud25/', 'https://github.com/abir-25'),
(2, 'MS. Alina', 'Web Designer and Developer', 'upload/team/05ae77d392.jpg', 1, 'https://www.facebook.com/AbirMahmud101/', 'https://www.instagram.com/_abir_mahmud_/', 'https://twitter.com/TheAbirMahmud', 'https://www.linkedin.com/in/abirmahmud25/', 'https://github.com/abir-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

CREATE TABLE `tbl_technology` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`id`, `title`, `image`, `short`, `description`) VALUES
(3, 'Oracle Database', 'upload/tech/2f79d0be69.jpg', 'The Oracle Database (commonly referred to as Oracle RDBMS or simply as Oracle) is an object-relational database management system                                                 ', '<p>Oracle database products offer customers cost-optimized and high-performance versions of Oracle Database, the world\'s leading converged, multi-model database management system, as well as in-memory, NoSQL and MySQL databases. Oracle Autonomous Database, available on premises via Oracle Cloud@Customer or in the Oracle Cloud Infrastructure, enables customers to simplify relational database environments and reduce management workloads.</p>\r\n<p><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 15px;\"><strong>Products:</strong> BERYL, CLYDE, DANA, DATASECURE, e-Services, FLOCK GROUND, HOSTALK BIOMETRIC, HOSTALK CLINICAL, JADE, KONA, ONKO, PRESCRIPTA, QUARTZ lite, QUARTZ pro, RADIUS lite, RUBY lite, RUBY pro .</span></p>'),
(4, 'Oracle Forms & Reports', 'upload/tech/7c7fec00a5.jpg', 'Oracle Forms is a software product for creating screens that interact with an Oracle database. It has an IDE including an object navigator               ', '<p style=\"box-sizing: border-box; margin: 10px 0px 0px; line-height: 25px; width: 705px; height: auto; font-size: 15px; float: left; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;It has an IDE including an object navigator, property sheet and code editor that uses PL/SQL. It was originally developed to run server-side in character mode terminal sessions. It was ported to other platforms, including Windows, to function in a clientserver environment. Later versions were ported to Java where it runs in a Java EE container and can integrate with Java and web services.</p>\r\n<p style=\"box-sizing: border-box; margin: 10px 0px 0px; line-height: 25px; width: 705px; height: auto; font-size: 15px; float: left; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><label style=\"box-sizing: border-box; margin: 0px; display: inline-block; font-weight: bold; width: 705px;\">Products:</label>&nbsp;CLYDE, e-Services, KONA, ONKO, QUARTZ lite, QUARTZ pro, RADIUS lite, RUBY lite, RUBY pro. 1.0.0.2</p>'),
(5, 'MySQL', 'upload/tech/5da7233a10.jpg', 'MySQL is the world’s most popular open source database widely used as back-end database of websites and portals.', '<p><span style=\"color: #555555; font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 14.4px;\">MySQL Enterprise Edition includes the most comprehensive set of advanced features, management tools and technical support to achieve the highest levels of MySQL scalability, security, reliability, and uptime. It reduces the risk, cost, and complexity in developing, deploying, and managing business-critical MySQL applications.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #555555; font-family: \'Open Sans\', Arial, Helvetica, sans-serif;\"><span style=\"font-size: 14.4px;\"><strong>Products:</strong> Bangladesh Healthcare, BD Travel Info, e-Services, RUBY pro</span></span></p>'),
(6, 'Microsoft SQL Server', 'upload/tech/95b0f24fcf.jpg', 'Benefit from a consistent, unified experience across your entire SQL portfolio and a full range of deployment options from edge to cloud. ', '<p>Drive insights in near real-time by breaking the wall between operational and analytical stores, enabling you to analyze all your data using both Spark and SQL runtimes in the cloud with Azure Synapse Link.Ensure uptime with fully-managed disaster recovery in the cloud through the link feature in Azure SQL Managed Instance.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `service`, `product`, `logo`, `client`, `address`) VALUES
(2, 'Application Development', 'Customized Application Development', 'upload/testimonial/c1157cb452.jpg', 'Armed Forces Institute', 'Dhanmondi, Dhaka'),
(3, 'System Integration and Product Implementation', 'Integration System Development', 'upload/testimonial/773f319fb0.jpg', 'Labaid Diagonostic Center', 'New Market, Dhaka'),
(4, 'App Development', 'Attendance Mobile Application', 'upload/testimonial/fceca9e777.jpg', 'Department of Hemathology', 'Shershah, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_track`
--

CREATE TABLE `tbl_track` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_track`
--

INSERT INTO `tbl_track` (`id`, `p_id`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_what`
--

CREATE TABLE `tbl_what` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why`
--

CREATE TABLE `tbl_why` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `point1_title` varchar(255) NOT NULL,
  `point1_desc` text NOT NULL,
  `point2_title` varchar(255) NOT NULL,
  `point2_desc` text NOT NULL,
  `point3_title` varchar(255) NOT NULL,
  `point3_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_basic_info`
--
ALTER TABLE `tbl_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_benefit`
--
ALTER TABLE `tbl_benefit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_module`
--
ALTER TABLE `tbl_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_module_point`
--
ALTER TABLE `tbl_module_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_feature`
--
ALTER TABLE `tbl_service_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_technology`
--
ALTER TABLE `tbl_technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_track`
--
ALTER TABLE `tbl_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_what`
--
ALTER TABLE `tbl_what`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_why`
--
ALTER TABLE `tbl_why`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_basic_info`
--
ALTER TABLE `tbl_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_benefit`
--
ALTER TABLE `tbl_benefit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_module`
--
ALTER TABLE `tbl_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_module_point`
--
ALTER TABLE `tbl_module_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_feature`
--
ALTER TABLE `tbl_service_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_technology`
--
ALTER TABLE `tbl_technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_track`
--
ALTER TABLE `tbl_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_what`
--
ALTER TABLE `tbl_what`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_why`
--
ALTER TABLE `tbl_why`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
