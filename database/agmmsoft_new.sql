-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2022 at 09:14 AM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agmmsoft_new`
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
(1, 'AGMM SOFT', 'New Thinkings, New Possibilities', 'upload/bio/e4ef32b8ae.png', 'upload/bio/cbb1fd1cb4.png', 'Â© Copyright AGMM SOFT. All Rights Reserved');

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
(9, 'Quality and Compliance', 'Every hospital should send a report of birth, and death that occurred, to the NABH (National Accreditation Board for Hospitals & Healthcare Providers) authorization monthly. It\'s hard to arrange them manually so, Medisoft\'s HMS helps you to arrange these reports faster within the right time. Every report is observed and accomplished in the Hospital Information Management System carefully and resourcefully for the exact results.', 7),
(10, 'Reduces Scope of Errors', 'Traditional records systems with folders and paper are hard to keep track of-papers have a tendency of getting lost. This can make the doctors not know what tests or medications have been administrated. The worse thing is, when a new doctor or nurse comes on shift, they may not have an exact picture of what has been done and if the chart plan isn\'t right in front of them, may dispute a new order based upon lacking information. Our HMSincludes access to previous orders and prescription administration records, meaning that there won\'t be any duplication errors.', 7),
(11, 'Data Security', 'Ensuring data safety is the top priority, as patients\' data and other hospital documents are highly confidential. Every slight of information from the full-fledged hospital management system needs to secure from unauthorized access. Any leak of information, as well as data loss or corruption, may lead to potentially shocking outcomes, including lawsuits and other financial consequences, in addition to ruined reputation, all of which can make the hospital close.', 7),
(12, 'Processing Speed and Results', 'With the application of our HMS in your labs or hospitals, you will be capable to treat patients in a better way and get into their real-time reports and other information regarding the patients, and their past clinical data and more can be done to get quick outcomes. The hospital management system makes staff work more accessible and expands the speed of the complete procedures for better results.', 7),
(13, 'Interactions with stuff', 'Teamwork is a good resolution for success in every type of work/job. It is vital to engage all of your representatives for better coordination and cooperation. Our HMS keeps all detailed information and qualification of your staff or employees so that your hospital authority could easily analyze their work.', 7),
(14, 'Better Patient\'s Experience', 'Knowing patients\' experiences is the best way to grow the hospital business. For a better patient experience, Agmmsoft\'s HMS is the best solution for your hospital. Our reliable and suitable HMS system will boost patients\' trust in the hospital services, it will help to attract more clients and enhance the reputation of the hospital.', 7),
(15, 'Information About Doctors', 'With our HMS system, Patients can learn about doctors before scheduling an appointment. It will display a list of available doctors along with information about their experience, expertise, and achievements and also can manage to know the doctors\' schedules and choose a convenient appointment time.', 7);

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
(4, 'upload/client/9c22955844.jpg'),
(5, 'upload/client/3d9f00baa2.jpg'),
(7, 'upload/client/9eca3f9d4b.png'),
(8, 'upload/client/9572d5bf5e.png'),
(9, 'upload/client/bf52f007b7.jpg'),
(11, 'upload/client/a008e4adc6.jpg'),
(12, 'upload/client/bf51fd15b1.jpg'),
(13, 'upload/client/864e5f5364.jpg'),
(14, 'upload/client/db101188f8.jpg'),
(15, 'upload/client/fd1f3d48e2.jpg'),
(16, 'upload/client/3a0a339e47.jpg'),
(17, 'upload/client/00d54aee3d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Abir', 'alluabir25@gmail.com', 'test', 'Test msz', 1);

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

--
-- Dumping data for table `tbl_counter`
--

INSERT INTO `tbl_counter` (`id`, `title1`, `count1`, `title2`, `count2`, `title3`, `count3`, `title4`, `count4`) VALUES
(1, 'Clients', 50, 'Products', 10, 'Hours of Support', 24, 'Hard Workers', 12);

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
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `image`, `title`) VALUES
(12, 'upload/gallery/f31a4bbc6f.jpg', 'Asian specialized hospital &amp; diagnostic center RT-PCR  is a specialized Diagnostic  with serve with healthcare innovation recently signed agreement with AGMM SOFT  Diagnostic  compete Laboratory  information system.'),
(13, 'upload/gallery/1b42123105.jpg', '&quot;Lulu Super Shop&quot;  with serve with POS innovation and recently signed an agreement with AGMM SOFT  POS  compete Sales Management system.'),
(14, 'upload/gallery/46b8221684.jpg', 'N.N Pathology (Lalpath) is a specialized Diagnostic with healthcare innovation that recently signed an agreement with AGM SOFT Diagnostic compete Laboratory  management information system'),
(15, 'upload/gallery/d70bdea6ed.jpg', 'Unity Health Care is a specialized Diagnostic service with healthcare innovation that recently signed an agreement with AGMM SOFT Diagnostic  compete Laboratory  management information system'),
(18, 'upload/gallery/4b8b76cdb5.jpeg', 'Work time in Laboratory information system.');

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
(1, 0, 'admin', 'agmmsoft@gmail.com', 'AgmmS0ft@@17'),
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
(29, 'Our hospital management system database includes a reliable availability of patients\' information or data.', 11, 7),
(30, 'The disease history, test results, prescribed treatment can be accessed by doctors without much delay to make an accurate analysis and monitor the patient\'s health.', 11, 7),
(31, 'It allows lower risks of mistakes.', 11, 7),
(32, 'Our Hospital management system (HMS) includes all the necessary records and keeps all patient\'s data.', 12, 7),
(33, 'Doctors can easily access the test result, patient\'s history, and prescribed treatment without making much delay in taking exact conclusions and screening the patient\'s health.', 12, 7),
(34, 'It allows fewer dangers of errors.', 12, 7),
(35, 'Our hospital is a business company that includes all corresponding financial interfaces between a service provider, executives, customers, suppliers, insurance companies, etc.', 13, 7),
(36, 'While a patient experiences treatment, the staff inputs charges.', 13, 7),
(37, 'Before a patient got discharged it will generate a bill.', 13, 7),
(38, 'The hospital management system should allow different types of payment methods and systems for their services and products.', 13, 7),
(39, 'Mediasoft\'s HMS software enables you reception to fix an appointment for patients with the doctors they want as per specialization required by checking the doctor\'s availability.', 14, 7),
(40, 'Patients can take schedule online and offline both ways.', 14, 7),
(41, 'Effective scheduling technique makes proper utilization of Doctor\'s time and reduces waiting time of patients.', 14, 7),
(42, 'This option is mostly an entry point for your hospital\'s doctors/consultants to analyze patients, dispense test and treatment processes and generate prescriptions for them.', 15, 7),
(43, 'A doctor can also record patient symptoms, allergies and suggest medication information everything by this.', 15, 7),
(44, 'Our EMR is a real-time, protected, point of care and patient-related platform for doctors.', 16, 7),
(45, 'It will support your hospitals\' doctor by providing access to patient\'s health condition information and keeping evidence for taking better decisions & support.', 16, 7),
(46, 'Our integrated Lab Management module records and considers all your pathological necessities.', 17, 7),
(47, 'We record medical, commercial, and special laboratory activities under check always. Both inpatients and outpatients can effortlessly use & bill his portal.', 17, 7),
(48, 'So there is no chance of error.', 17, 7),
(49, 'Our hospital management system can manage your hospital\'s pharmacy also very seamlessly.', 18, 7),
(50, 'You can also directly bill with the inpatient\'s main billing system & you can collect medicine as your patient collected their medicine. ', 18, 7),
(51, 'This module also maintains all drugs or medicine stock and automates your system which makes your task effortless.', 18, 7),
(52, 'As a hospital is a service provider business, it is thought to manage your HRM system. ', 19, 7),
(53, 'Our system makes it easy for you to manage your workforce, you can also make a different id for every staff and employee and generate their performance too.', 19, 7),
(54, 'Our HMS enables this feature to manage the in-patient & out-patients entering details in addition to the patient\'s others info like admission details, room, consultants, surgeon, diet preference, etc. Every patient has a unique admission number to make your data stable. ', 20, 7),
(55, 'This also enables bed transfers, shift ward, discharge summary so on.', 20, 7),
(56, 'All the daily services, like the room rent, operations, delivery, consulting to nursing, etc. also generate by these modules.', 20, 7),
(57, 'To take emergency treatment our hospital management system has a small patient registration form which is very quick and easy to fill up', 21, 7),
(58, 'This module helps to take patients under treatment with minimal information and saves time.', 21, 7),
(59, 'With our advanced system, you can easily check your patient\'s reports.', 22, 7),
(60, 'You can also simplify organ diagnosis procedures. Radiology, pathology.', 22, 7),
(61, 'Oncology will be better under stable by this module.', 22, 7),
(62, 'You can easily check your all patient\'s data, reports, and analysis their condition too. This module simplified your all critical process.', 22, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`) VALUES
(1, 'AGMMSOFT recently signed an agreement with the Unity health care of Laboratory Management System(LMS)');

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
  `status` int(11) NOT NULL DEFAULT '0'
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
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `title`, `description`, `image`) VALUES
(2, 'Software Development', 'We provide a full range of web application services, from requirement gathering until the application is successfully deployed on the client end. Considering the strategic importance of web design, AGMMSOFT engages extensive effort and creativity to build you the site that will stand out from the rest and contribute to the success of your business.\r\nWe develop and provide customized solutions based on your need, we are the right choice for you if you are here for cost-effective solutions to the digitalization of your business. AGMM SOFT is one of the leading IT companies in Bangladesh. We at AGMM SOFT have our own Digital Creative Lab, where our highly skilled team generates ideas, makes designs, and develops the final products.', 'upload/service/6a101fef59.jpg'),
(3, 'Customized ERP', 'AGMMSOFT ERP Solution is a suite of applications that manage core business processes such as sales, purchasing, human resources, customer support, CRM, and inventory. The purpose of the solution is to provide the best solution to the customer through increasing efficiency, streamlining processes, and promoting a culture of collaboration in the organization. We try to provide an integrated system as opposed to individual software designed specifically for a business process.\r\nWe stick to a profound Discovery process and thoroughly study the environment around your future products\' competitors, audience, market, trends, potential investors, and your own business ecosystem. It helps us offer reasonable and forward-looking feature prioritization and make sure the ERP we build evolves in the right direction.', 'upload/service/304cd897d8.jpg'),
(4, 'Web Development', 'Well-built software thinks about users and their needs. Web Sites require one thing, and that is functionality. Without it most websites are useless. We can develop advanced systems that can handle mass amounts of data and transactions. It does not matter how small or big your company is, we have solutions for any budget.\r\nA web application often denoted as a web app, is an interactive computer program built with web skills (HTML, CSS, JS), which stores (Database, Files) and manipulates data (CRUD), and is used by a team or a single user to accomplish tasks over the internet. CRUD is a popular shortening and is at the core of web app development. It stands for Create, Read, Update, and Delete. Web apps are accessed via a web browser such as Google Chrome and often include a login/signup mechanism. Anyone wishes to experience the best of web development to certify a growth-centric digital revolution for business, the Best option would be our full-stack web application development services which are seamless for everyone.', 'upload/service/3ddf51bd35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_feature`
--

CREATE TABLE `tbl_service_feature` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_feature`
--

INSERT INTO `tbl_service_feature` (`id`, `s_id`, `title`) VALUES
(3, 2, 'Core and continuous activity of Designing and Developing Applications and Software Solutions since its commencement.'),
(4, 2, 'Encompasses in providing a wide range of own products, tools, and platforms.'),
(5, 2, 'In-house competency and training centers to apply new technologies and innovations.'),
(6, 2, 'Follow well-proven and professional working methodologies for the implementation of a software solution.'),
(7, 2, 'Processes are constantly revised to embrace world-class, state-of-the-art techniques.'),
(8, 2, 'Project-specific metrics are defined and applied to ensure consistent results of high standard.'),
(9, 3, 'Our end-to-end ERP services and solutions provide assistance in automating, computerizing, and speeding up transactions throughout the organization.'),
(10, 3, 'Our ERP Solutions eliminate most of the business problems like Material shortages, Productivity enhancements, Customer service, Cash Management, Inventory problems, Quality problems, Prompt delivery, Billing, etc.'),
(11, 3, 'With our vertically integrated solutions approach, experienced project teams, offshore delivery, and strong technology practices we help your organization derive maximum value from ERP projects.'),
(12, 3, 'Our ERP systems are designed to be flexible, helping meet the need of the companies or businesses that use them.'),
(13, 3, 'AGMMSOFT ERP Modules are designed with a dedicated motive of delivering products or services that meet customers\' expectations.'),
(14, 3, 'With customized ERP software, you don\'t need to change the business flows which means ERP software.'),
(15, 3, 'Profound research around your business idea and market environment helps build the foundation for your future ERP. For this purpose, we offer technology and business consulting services and the Discovery project.'),
(16, 3, 'As your technology partner, we keep your business goals and strategy first. Just like you, we see an ERP project as the starting point for your successful digital product.'),
(17, 4, 'Our ability to build dynamic, personalized user-centric experiences enables your brand to explore innovative opportunities to reach audience.'),
(18, 4, 'Our web development includes a mobile-responsive website.'),
(19, 4, 'A fully integrated team enables rapid decision-making about direction and feasibility during the planning and design phases.'),
(20, 4, 'We do more with less; we can build your company a custom web application that meets your business need.'),
(21, 4, 'Performance-oriented fully focused application.'),
(22, 4, 'Assurance of Quality Control Process.'),
(23, 4, 'Application Maintenance highly efficiently.'),
(24, 4, 'Performance-oriented fully focused application.');

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
(5, 'Gias Uddin', 'Software Developer', 'upload/team/5f6b65752e.jpeg', 0, 'https://www.facebook.com/gias.uddin.1213', '', '', '', ''),
(6, 'Mizanur Rahaman', 'Software Developer', 'upload/team/792dd228e0.jpg', 0, 'https://www.facebook.com/mizanrrahaman12', '', '', '', ''),
(7, 'Monir Uddin', 'Director Operation', 'upload/team/52d7badeb9.jpg', 0, 'https://www.facebook.com/moniruddin.monir', '', '', '', ''),
(8, 'Abdula Ar Rakib', 'Trainee', 'upload/team/b7dd01c5f5.jpg', 1, '', '', '', '', ''),
(9, 'Erfanul Hoque', 'Business Analyst', 'upload/team/5017a19e83.png', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

CREATE TABLE `tbl_technology` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `description` text NOT NULL,
  `product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`id`, `title`, `image`, `short`, `description`, `product`) VALUES
(3, 'Oracle Database', 'upload/tech/2f79d0be69.jpg', 'The Oracle Database (commonly referred to as Oracle RDBMS or simply as Oracle) is an object-relational database management system                                                 ', 'Oracle database products offer customers cost-optimized and high-performance versions of Oracle Database, the world\'s leading converged, multi-model database management system, as well as in-memory, NoSQL and MySQL databases. Oracle Autonomous Database, available on premises via Oracle Cloud@Customer or in the Oracle Cloud Infrastructure, enables customers to simplify relational database environments and reduce management workloads.', 'BERYL, CLYDE, DANA, DATASECURE, e-Services, FLOCK GROUND, HOSTALK BIOMETRIC, HOSTALK CLINICAL, JADE, KONA, ONKO, PRESCRIPTA, QUARTZ lite, QUARTZ pro, RADIUS lite, RUBY lite, RUBY pro .'),
(4, 'Oracle Forms & Reports', 'upload/tech/8e75193e2c.jpg', 'Oracle Forms is a software product for creating screens that interact with an Oracle database. It has an IDE including an object navigator                                           ', 'It has an IDE including an object navigator, property sheet and code editor that uses PL/SQL. It was originally developed to run server-side in character mode terminal sessions. It was ported to other platforms, including Windows, to function in a client?server environment. Later versions were ported to Java where it runs in a Java EE container and can integrate with Java and web services.', 'CLYDE, e-Services, KONA, ONKO, QUARTZ lite, QUARTZ pro, RADIUS lite, RUBY lite, RUBY pro. 1.0.0.2'),
(5, 'MySQL', 'upload/tech/5da7233a10.jpg', 'MySQL is the world\'s most popular open-source database widely used as a back-end database of websites and portals.', 'MySQL Enterprise Edition includes the most comprehensive set of advanced features, management tools and technical support to achieve the highest levels of MySQL scalability, security, reliability, and uptime. It reduces the risk, cost, and complexity in developing, deploying, and managing business-critical MySQL applications.', 'Bangladesh Healthcare, BD Travel Info, e-Services, RUBY pro'),
(6, 'Oracle APEX', 'upload/tech/79f2c47e5a.jpg', 'Oracle APEX is a low-code development platform that enables you to build scalable, secure enterprise apps, with world-class features, that can be deployed anywhere.                                  ', '<p><span style=\"color: #ffffff;  background-color: #14282f;\">Using APEX, developers can quickly develop and deploy compelling apps that solve real problems and provide immediate value. You won\'t need to be an expert in a vast array of technologies to deliver sophisticated solutions. Focus on solving the problem and let APEX take care of the rest.</p>', '');

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
(3, 'HR & Payroll System', 'Attendance Application System', 'upload/testimonial/60d2897706.jpg', 'chevron clinical laboratory (pvt.) ltd. Anowara Branch', 'chowmuhani,Anowara,Ctg'),
(4, 'HR & Payroll System', 'Attendance Application System', 'upload/testimonial/249adcafc4.png', 'Qrex Diagnostic & Consultation Centre (Pvt.) Ltd', 'Plot 9/A, Road -O1, Lane 02, Block - G, Chattogram'),
(5, 'LIS', 'laboratory information system', 'upload/testimonial/6f4b6dc237.jpg', 'ASIAN SPECIALIZED RT-PCR LAB & DIAGNOSTIC CENTER', '282 AH Paragon Tower, CDA Ave,Muradpur, Chattogram 4000');

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
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_what`
--

INSERT INTO `tbl_what` (`id`, `description1`, `description2`, `image`) VALUES
(1, 'AGMM SOFT is one of the leading IT companies in Bangladesh. We provide Secure, Scalable, On-Demand Application Systems and Data Solutions to help customers improve their business performance. Our first step is to discover more about you, and your company\'s vision, and to build a strong relationship. Following the initial meetup, we will outline your project, create milestones, and agree on priorities.', 'Once the outline is finished, visual concepts of the custom project will be created. Then we test our product to ensure its quality of the product. Quality assurance is one of the most important steps to building a perfect quality product.', 'upload/what/791e2d847e.jpg');

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
  `point1_image` varchar(255) NOT NULL,
  `point2_title` varchar(255) NOT NULL,
  `point2_desc` text NOT NULL,
  `point2_image` varchar(255) NOT NULL,
  `point3_title` varchar(255) NOT NULL,
  `point3_desc` text NOT NULL,
  `point3_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_why`
--

INSERT INTO `tbl_why` (`id`, `title`, `image`, `description`, `point1_title`, `point1_desc`, `point1_image`, `point2_title`, `point2_desc`, `point2_image`, `point3_title`, `point3_desc`, `point3_image`) VALUES
(1, 'AGMM SOFT is a full facility of IT system provider who values our associations with clients, merchants, corporate allies, and co-workers', 'upload/why/66872d5225.png', 'We\'re Passionate &amp; Friendly People. It\'s our attention to the small stuff, scheduling of timelines, and keen project management that makes us stand out from the rest. We are creative while keeping a close eye on the calendar and your budget. We know that our customers are important to us and hence we do not leave any stone unturned in helping, guiding, and providing the best possible solutions &amp; after-sales services and support to our clients.\r\nFor each project, we work with our clients to identify business objectives and goals.', 'Creativity', 'We bring our diverse background in advertising, design, branding, public relations, research, and strategic planning to work for your company. Not only will your materials look great but they will get results.', 'upload/why/22004e1b78.png', 'Pricing', 'Our prices are competitive and fair. There are no surprise bills. Any unexpected or additional expenses must be pre-approved by you. That\'s how we would like to be treated, and that is how our clients are treated.', 'upload/why/0ad40ee154.png', 'We Listen', 'We can only deliver results if we know what your success looks like. We listen, find out what you want to achieve, and plan how we get you there. Things work better when we do it together.', 'upload/why/5de425fee1.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_service_feature`
--
ALTER TABLE `tbl_service_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_why`
--
ALTER TABLE `tbl_why`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
