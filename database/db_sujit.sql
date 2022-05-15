-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 11:11 AM
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
-- Database: `db_sujit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basic_info`
--

CREATE TABLE `tbl_basic_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_basic_info`
--

INSERT INTO `tbl_basic_info` (`id`, `name`, `nickname`, `logo`, `favicon`, `copyright`) VALUES
(4, 'Sujit Barua Arnob', 'Sujit', 'upload/bio/87c3577b1e.jpg', 'upload/bio/87c3577b1e.jpg', '© 2021. All rights reserved by Sujit Barua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bio`
--

CREATE TABLE `tbl_bio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bio`
--

INSERT INTO `tbl_bio` (`id`, `name`, `image`, `intro`, `phone`, `email`) VALUES
(2, 'Mr. Sujit Barua', 'upload/bio/a252051cb4.png', 'Hello there. This is Sujit Barua Arnob. I am a designer. Basically, I have designed Logo, Banner, Modern Website. I have a specialization in WordPress and Bootstrap CSS framework. I have completed many projects.', '01846774488', 'sujitbarua@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `read_time` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `cat_id`, `title`, `image`, `keyword`, `read_time`, `post_date`, `description`) VALUES
(3, 2, 'MERN Stack Development', 'upload/blog/fee51da06e.png', 'mern, development, js', '10 Minutes', '2022-04-08 21:01:24', '<h3 style=\"margin: 15px 0px; padding: 0px; font-size: 14px; font-family: \'Open Sans\', Arial, sans-serif;\"><strong>1914 translation by H. Rackham</strong></h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">&nbsp;</p>\r\n<h3 style=\"margin: 15px 0px; padding: 0px; font-size: 14px; font-family: \'Open Sans\', Arial, sans-serif;\"><strong>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</strong></h3>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>'),
(4, 2, 'MEAN Stack Development', 'upload/blog/eb6335ecbe.jpg', 'mean, development', '5 Minutes', '2022-04-08 21:33:24', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(5, 2, 'Application Development', 'upload/blog/622dfc8d7d.jpg', 'mean, development, mern', '5 Minutes', '2022-04-08 21:20:28', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>'),
(6, 2, 'WordPress Theme Development', 'upload/blog/2113ff0399.jpg', 'theme forest, theme development, wordpress theme', '10 Minutes', '2022-04-08 21:33:04', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">&nbsp;</p>\r\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`) VALUES
(2, 'Development'),
(3, 'HTML'),
(4, 'CSS'),
(5, 'Bootstrap'),
(6, 'Javascript'),
(7, 'Wordpress'),
(8, 'Graphics Design');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `topic_id`, `name`, `logo`) VALUES
(3, 2, 'Allu Abir', 'upload/client/887031f5bd.png'),
(4, 2, 'Didarul Isalm', 'upload/client/9cfa5b0705.png'),
(5, 1, 'Pritom Barua', 'upload/client/ab9d893900.png'),
(6, 3, 'Abir Mahmud ', 'upload/client/ff4eea49fa.png'),
(7, 2, 'Cherry Bonds', 'upload/client/e4f895ef9d.png'),
(8, 4, 'Sukumar Ray', 'upload/client/6f9a0c3190.png'),
(9, 5, 'Robindronath Thagor', 'upload/client/b559bd3fe7.png'),
(10, 1, 'Allu Robindronath', 'upload/client/4554a30447.png'),
(11, 4, 'Abir Mahmud', 'upload/client/c6b74b0f19.png'),
(12, 5, 'Abir Mahmud', 'upload/client/104a10a5ef.png'),
(13, 4, 'Sumon Reza', 'upload/client/7b9bf54fc3.png'),
(14, 1, 'Raiyan Khan', 'upload/client/e4b1effac8.png'),
(15, 3, 'Allu Abir', 'upload/client/1087b10727.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`) VALUES
(1, 'Abir Mahmud', 'abir@bgctub.ac.bd', '01828448101', 'fsdf dsf dsf ', 'f sdf sdf dsf ds fdsfdf sdf', 1),
(2, 'Abir Mahmud', 'abir@bgctub.ac.bd', '01828448101', ' asdsd sa', 'dsa dsadsadsa dsadadadasda', 0);

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
(3, 'upload/2606995da4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education`
--

CREATE TABLE `tbl_education` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `achievement` text NOT NULL,
  `gpa` varchar(50) NOT NULL,
  `gpa_outof` int(11) NOT NULL,
  `year_in` int(11) NOT NULL,
  `year_out` int(11) NOT NULL,
  `countt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_education`
--

INSERT INTO `tbl_education` (`id`, `title`, `degree`, `achievement`, `gpa`, `gpa_outof`, `year_in`, `year_out`, `countt`) VALUES
(3, 'Bon Gobeshonagar High School', 'SSC', 'I have learned many things from this school. I have to know the meaning of discipline from this school. I knew How to keep my surroundings neat and clean. I have learned how to get better day by day.', '4.81', 5, 2008, 2010, 1),
(4, 'Chittagong Laboratory College', 'HSC', 'Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '4.30', 5, 2010, 2012, 2),
(5, 'BGC Trust University Bangladesh', 'BSc (Hons.) in CSE', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.', '3.62', 4, 2013, 2017, 3),
(6, 'International Islamic University Chittagong', 'MSC. in CSE', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', 4, 2019, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feature`
--

CREATE TABLE `tbl_feature` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `work_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feature`
--

INSERT INTO `tbl_feature` (`id`, `title`, `description`, `icon`, `work_link`) VALUES
(1, 'WordPress Theme Development', 'Lorem Ipsum is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'upload/feature/cea137a866.png', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616'),
(3, 'Article Writing', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.                             ', 'upload/feature/d1626d6810.png', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616'),
(4, 'Graphics Designer', 'It is a long-established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.', 'upload/feature/637e9d215b.png', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616'),
(5, 'Video Editing', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,                            ', 'upload/feature/00a226e467.png', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_exp`
--

CREATE TABLE `tbl_job_exp` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `responsibility` text NOT NULL,
  `year_in` int(11) NOT NULL,
  `year_out` int(11) NOT NULL,
  `countt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_exp`
--

INSERT INTO `tbl_job_exp` (`id`, `designation`, `company`, `responsibility`, `year_in`, `year_out`, `countt`) VALUES
(2, 'Web Designer and Developer', 'Axiom Software Ltd.', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 2017, 2018, 1),
(3, 'Assistant Instructor', 'National Institute of Technology', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure', 2018, 2019, 2),
(4, 'Lecturer', 'BGC Trust University Bangladesh', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod                            ', 2019, 2021, 3),
(6, 'Software Engineer', 'Jijoty Bd (Ltd)', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 2021, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `status`) VALUES
(1, 'sujit@gmail.com', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `long_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `work_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `title`, `long_title`, `image`, `description`, `work_link`) VALUES
(1, 'App Design', 'Mobile Application Design', 'upload/portfolio/4b91623310.png', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.                            ', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616'),
(3, 'Development', 'MERN Stack Development', 'upload/portfolio/34a9cfb58b.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.                                                        ', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616'),
(4, 'Video Editing', 'Professional Documentary Editing', 'upload/portfolio/3b525be3bf.jpg', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.                            ', 'https://themeforest.net/item/drile-furniture-woocommerce-wordpress-theme/27472616');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price_format`
--

CREATE TABLE `tbl_price_format` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_price_format`
--

INSERT INTO `tbl_price_format` (`id`, `type`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing`
--

CREATE TABLE `tbl_pricing` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pricing`
--

INSERT INTO `tbl_pricing` (`id`, `type`, `title`, `subtitle`, `price`, `description`, `duration`) VALUES
(1, '1', 'Responsive Website Design (WordPress, HTML5, Bootstrap)', 'Website Design', 15000, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat                                                        ', 2),
(2, '2', 'Professional Logo and Banner Design', 'Graphics Design', 8000, 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure                                                     ', 4),
(4, '3', 'Professional MERN Stack Website Development', 'Website Development', 40000, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.                                    ', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_point`
--

CREATE TABLE `tbl_pricing_point` (
  `id` int(11) NOT NULL,
  `type_1` int(11) NOT NULL DEFAULT 0,
  `type_2` int(11) NOT NULL DEFAULT 0,
  `type_3` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pricing_point`
--

INSERT INTO `tbl_pricing_point` (`id`, `type_1`, `type_2`, `type_3`, `title`) VALUES
(1, 0, 1, 0, 'Design Customization'),
(2, 0, 1, 1, 'Responsive Design'),
(3, 1, 1, 0, 'Content Upload and Update'),
(4, 0, 1, 1, '2 Plugins/Extensions'),
(5, 1, 1, 1, 'multipage Elementor'),
(6, 1, 1, 0, 'Design Figma'),
(7, 0, 1, 1, 'Maintaine Design'),
(8, 0, 1, 0, 'Content Upload'),
(9, 1, 0, 1, '8 Plugins/Extensions'),
(10, 1, 0, 1, 'Design With XD'),
(13, 1, 1, 0, 'Testing purpose applicable');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profession`
--

CREATE TABLE `tbl_profession` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profession`
--

INSERT INTO `tbl_profession` (`id`, `title`) VALUES
(1, 'Web Designer'),
(2, 'Graphics Designer'),
(3, 'WordPress Theme Developer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prof_skills`
--

CREATE TABLE `tbl_prof_skills` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prof_skills`
--

INSERT INTO `tbl_prof_skills` (`id`, `title`, `type`, `percentage`) VALUES
(2, 'Photoshop', 1, 95),
(5, 'HTML', 2, 100),
(6, 'Illustrator', 1, 90),
(7, 'Filmora Video Editing', 1, 100),
(8, 'CSS', 2, 100),
(9, 'Javascript', 2, 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply`
--

CREATE TABLE `tbl_reply` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section_title`
--

CREATE TABLE `tbl_section_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_section_title`
--

INSERT INTO `tbl_section_title` (`id`, `title`, `subtitle`) VALUES
(1, 'What I Do', 'FEATURES'),
(2, 'My Portfolio', 'VISIT MY PORTFOLIO AND KEEP YOUR FEEDBACK'),
(3, 'My Resume', '5+ YEARS OF EXPERIENCE'),
(4, 'Testimonial', 'WHAT CLIENTS SAY'),
(5, 'Awesome Clients', 'POPULAR CLIENTS'),
(6, 'My Pricing', 'PRICING'),
(7, 'My Blog', 'VISIT MY BLOG AND KEEP YOUR FEEDBACK'),
(8, 'Contact With Me', 'CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills`
--

CREATE TABLE `tbl_skills` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_skills`
--

INSERT INTO `tbl_skills` (`id`, `icon`) VALUES
(4, 'upload/skill/d14935bf74.png'),
(5, 'upload/skill/6c21cc68b6.png'),
(6, 'upload/skill/5713de36fc.png'),
(7, 'upload/skill/d6420d4130.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill_type`
--

CREATE TABLE `tbl_skill_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_skill_type`
--

INSERT INTO `tbl_skill_type` (`id`, `title`) VALUES
(1, 'Design'),
(2, 'Development');

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
(3, 'https://www.facebook.com/AbirMahmud101/', 'https://www.youtube.com/channel/UCtl8kJmRv19z8SDZ-7JpTiA', 'https://www.instagram.com/_abir_mahmud_/', 'https://www.linkedin.com/in/mohammad-...', 'https://twitter.com/TheAbirMahmud', 'https://github.com/abir-25', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `market` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `image`, `company`, `designation`, `subject`, `point`, `market`, `description`, `review_date`, `status`) VALUES
(3, 'Abir Mahmud', 'admin/upload/testimonial/e44e668d38.jpg', 'Jijoty Bd (Ltd)', 'Team Lead', 'Website Design', 4, 'Fiberr', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will', '2022-04-02 21:35:31', 1),
(4, 'Didarul Alom', 'admin/upload/testimonial/34b43f2e8e.jpg', 'Axiom Software Ltd.', 'Top Software Engineer', 'Website Development', 5, 'Upwork', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself', '2022-04-02 21:36:32', 1),
(5, 'Sumon Reza', 'admin/upload/testimonial/282305ae67.jpg', 'TLC Soft Tech BD', 'Software Engineer', 'Graphics Design', 4, 'Fiberr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur                            ', '2022-04-02 21:37:21', 1),
(11, 'Abir', 'admin/upload/testimonial/1edc20e71e.jpg', 'Axiom Software Ltd.', 'Lecturer', 'sfsd fdsfre r', 3, ' dsf fdsf', 'dsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsaddsad asdsadsad', '2022-04-05 17:55:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topic`
--

CREATE TABLE `tbl_topic` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_topic`
--

INSERT INTO `tbl_topic` (`id`, `title`) VALUES
(1, 'Javascript'),
(2, 'HTML'),
(3, 'PHP'),
(4, 'Product Design'),
(5, 'Wordpress'),
(6, 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `achievement` text NOT NULL,
  `year_out` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `countt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`id`, `title`, `institute`, `achievement`, `year_out`, `duration`, `countt`) VALUES
(7, 'Cisco Certified Network Associate (CCNA)', 'New Horizons', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', 2019, 75, 1),
(8, 'Subject Based Pedagogical Training on Cyber Security and Ethics', 'Islamic University of Technology  (IUT)', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise', 2018, 20, 2),
(9, 'LICT TOP-UP IT Training for Java', 'BCC, Govt. of Bangladesh', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will', 2017, 36, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_basic_info`
--
ALTER TABLE `tbl_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bio`
--
ALTER TABLE `tbl_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
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
-- Indexes for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_education`
--
ALTER TABLE `tbl_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_exp`
--
ALTER TABLE `tbl_job_exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_price_format`
--
ALTER TABLE `tbl_price_format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pricing_point`
--
ALTER TABLE `tbl_pricing_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profession`
--
ALTER TABLE `tbl_profession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prof_skills`
--
ALTER TABLE `tbl_prof_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_section_title`
--
ALTER TABLE `tbl_section_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_skill_type`
--
ALTER TABLE `tbl_skill_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_topic`
--
ALTER TABLE `tbl_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_basic_info`
--
ALTER TABLE `tbl_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bio`
--
ALTER TABLE `tbl_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_education`
--
ALTER TABLE `tbl_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_job_exp`
--
ALTER TABLE `tbl_job_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_price_format`
--
ALTER TABLE `tbl_price_format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pricing_point`
--
ALTER TABLE `tbl_pricing_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_profession`
--
ALTER TABLE `tbl_profession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_prof_skills`
--
ALTER TABLE `tbl_prof_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_section_title`
--
ALTER TABLE `tbl_section_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_skill_type`
--
ALTER TABLE `tbl_skill_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_topic`
--
ALTER TABLE `tbl_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
