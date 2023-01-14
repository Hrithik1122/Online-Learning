-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.byetcluster.com
-- Generation Time: Jan 10, 2023 at 09:55 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31940227_vlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutimg`
--

CREATE TABLE `aboutimg` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutimg`
--

INSERT INTO `aboutimg` (`id`, `image`) VALUES
(22, 'main dark.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `content`) VALUES
(5, '<h1>ABOUT US</h1>\r\n\r\n<blockquote>\r\n<p>A place for learning, discovery, innovation, expression and discourse</p>\r\n</blockquote>\r\n'),
(6, '<p><img alt=\"\" src=\"https://raw.githubusercontent.com/ankit5999/workforwin-images/main/map%20dark.png\" style=\"height:281px; width:500px\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `first_name`, `last_name`, `password`) VALUES
(1, 'admin@admin.com', 'hrithik', 'bansal', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `apply1`
--

CREATE TABLE `apply1` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply1`
--

INSERT INTO `apply1` (`id`, `content`) VALUES
(1, '<h1><a href=\"#\">What We Offer</a><br />\r\n&nbsp;</h1>\r\n\r\n<p><big>It is a platform where students can learn new technology every day.<br />\r\nCourses offered by workforwin are free everyone can learn at any time.<br />\r\nIf you have any issue in any subject or topic then you can contact us we will answer your query within 24 hours.<br />\r\nTo get a job as a computer science engineer you don&#39;t need any degree,<br />\r\nonly one thing is required and that is knowledge, we provide you that real knowledge.</big></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `apply3`
--

CREATE TABLE `apply3` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply3`
--

INSERT INTO `apply3` (`id`, `content`) VALUES
(1, '<h1><strong>Learner&#39;s Feedback</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><big>Being a non-CS student I hadn&#39;t any idea about data structure and algorithm designing</big><br />\r\n	<big>but I wanted to learn them. After searching a lot I found a good place to learn these all</big><br />\r\n	<big>under one roof that is workforwin. If you want to save your time then you can</big><br />\r\n	<big>directly go under workforwin courses and improve your technical skills.</big><br />\r\n	<big>-&nbsp;<a href=\"#\">Nitika Rao</a></big></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><big>Learning never ends in life till we are alive. This thing I learn when I pass out from my college and</big><br />\r\n	<big>was working for a tech company. It was necessary for me to keep improving my technical skills</big><br />\r\n	<big>and I use workforwin to be updated in the tech industry.</big><br />\r\n	<big>- <a href=\"#\">Deepak Kumar</a></big></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `content`) VALUES
(1, ''),
(2, '<p><a href=\"http://d-vlog.epizy.com/services.php\"><small><img alt=\"\" src=\"https://raw.githubusercontent.com/ankit5999/workforwin-images/main/blog/How%20To%20Become%20Great%20Front%20End%20Developer.png?auto=format&amp;fit=max&amp;w=1920\" style=\"height:60%; width:70%\" /></small></a></p>\r\n\r\n<p><big><a href=\"http://d-vlog.epizy.com/services.php\">How to become a great front-end developer in 2022</a></big></p>\r\n\r\n<blockquote>\r\n<p><small>I am a full stack developer and have 3+ years of experience in frontend development.<br />\r\nHere I have shared the best, fast and easy way to become a frontend developer.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `collap2`
--

CREATE TABLE `collap2` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collap2`
--

INSERT INTO `collap2` (`id`, `content`) VALUES
(1, '<p>Based in India&rsquo;s Silicon Valley, Right to MBBS in Bangalore boast an impressive team of foreign education consultants who take pride in ensuring that students willing to study abroad receive expert educational guidance.</p>\r\n\r\n<p>With our free initial consultation with friendly&nbsp;<a href=\"#\">Overseas Education MBBS in Bangalore,</a> you will be making the right moves from the beginning.</p>\r\n\r\n<p>Our offices situated in Jayanagar and Malleshwaram boast of an expensive wealth of information to help you secure admission to the university of your choice.</p>\r\n'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `collap4`
--

CREATE TABLE `collap4` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collap4`
--

INSERT INTO `collap4` (`id`, `content`) VALUES
(1, '<p>Our expert team of&nbsp;<a href=\"http://consultingservices.epizy.com/#\">Overseas MBBS Education in </a><a href=\"#\">Chennai</a>&nbsp;is readily available to help students who have dreamed of studying abroad make that dream a reality. With precise education guidance, students can easily understand the admission processes through pleasant interactions with our top overseas educational consultants.</p>\r\n'),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `collap6`
--

CREATE TABLE `collap6` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collap6`
--

INSERT INTO `collap6` (`id`, `content`) VALUES
(1, '<p>Right to MBBS can assist you with admission to universities of 20+ countries. It includes some of the popular study abroad destinations such as the USA, UK, Australia, Germany, Canada, New Zealand and&nbsp;<a href=\"#\">many more.</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `comment`) VALUES
(1, 'Hrithik', 'hrithik@gmail.com', '123987', '7979'),
(2, 'Hrithik', 'hri@gmail.com', '123', 'd'),
(3, 'Hrithikk', 'hrithikkbansal@gmail.com', '123123', 'hahaha'),
(4, 'hrithik', 'hri@g.com', '123', 'qwq'),
(5, 'qwe', 'i@gmail.com', '1223', 'eee'),
(6, 'Hrithik Bansal', '191b298@juetguna.in', '09516667979', 'hehehehe'),
(7, 'haha', 'ha@g.com', '12121', 'hahah'),
(8, 'hrithik', 'hrithik12@g.com', 'q11221', 'haha'),
(9, 'Hrithik Bansal', 'test@gmail.com', '1231231231', 'This is test message.'),
(10, 'hrithik', 'ha@gmail.com', '123', '1233hshshs'),
(11, 'hrithik', 'h12@g.c', '12', '122'),
(12, 'hri', '12@pp.com', '12', '21\r\n'),
(13, 'zzz', '198@juetguna.in', '09', 'gif');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `content`) VALUES
(1, '<h1>CONTACT US</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `content1`
--

CREATE TABLE `content1` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content1`
--

INSERT INTO `content1` (`id`, `content`) VALUES
(1, '<p>Master The Interview With&nbsp;JavaScript</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `content2`
--

CREATE TABLE `content2` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content2`
--

INSERT INTO `content2` (`id`, `content`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `content3`
--

CREATE TABLE `content3` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content3`
--

INSERT INTO `content3` (`id`, `content`) VALUES
(1, '<p>Welcome to the course&nbsp;Master The Interview With JavaScript&nbsp;The journey of learning<br />\r\nData Structure and Algorithm Designing is going to be very exciting.<br />\r\nMost people want to learn the art of writing clean and optimal coding solutions but get<br />\r\nfrustrated after writing their first program no matter which programming language<br />\r\nthey are using.&nbsp;Well, I have a cup of coffee for you, after taking a chip of that you will<br />\r\nbecome a good programmer.&nbsp;Just joking, this is never going to be happening but<br />\r\ndont worry you are here and reading&nbsp;my book so I guarantee you that if you follow<br />\r\nall steps I have written in this book and&nbsp;implement all the topics<br />\r\nI have written, you will become a good programmer, no doubt.<br />\r\n<br />\r\nEvery year hundreds of thousands of international students worldwide, flock to study<br />\r\nabroad in India.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `content`) VALUES
(1, '<h1>EVENTS</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `faq1`
--

CREATE TABLE `faq1` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq1`
--

INSERT INTO `faq1` (`id`, `content`) VALUES
(1, '<p>It provides courses related to software development, front-end development, and back-end development.&nbsp;<br />\r\nLearn more about these courses:<br />\r\n<a href=\"#\" target=\"_blank\">Data structure using javascript<br />\r\nReact js</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `faq2`
--

CREATE TABLE `faq2` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq2`
--

INSERT INTO `faq2` (`id`, `content`) VALUES
(2, '<p>It&#39;s very simple to connect with our team. We have provided&nbsp;contact us&nbsp;page on our website where you can put necessary information along with your message.</p>\r\n'),
(3, ''),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `faq3`
--

CREATE TABLE `faq3` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq3`
--

INSERT INTO `faq3` (`id`, `content`) VALUES
(3, '<p>Yes, we provide internship opportunities to our students. During internship, we take care of how we are training, what they are learning, and what they are building. Our internships are completely based on learning and gaining real industry experience.</p>\r\n'),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, '');

-- --------------------------------------------------------

--
-- Table structure for table `fundingimg`
--

CREATE TABLE `fundingimg` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fundingimg`
--

INSERT INTO `fundingimg` (`id`, `image`) VALUES
(6, 'Middlesex-University.png'),
(7, 'University-of-Texas-Arlington.png'),
(8, 'University-of-Essex.png'),
(9, 'University-of-Houston-at-Clearlake.png'),
(10, 'Rochester-Institute-of-technology.png'),
(11, 'Queens-University-Belfast.png'),
(12, 'Univ-of-South-Florida.png'),
(13, 'University-of-Essex.png'),
(14, 'University-of-Houston-at-Clearlake.png');

-- --------------------------------------------------------

--
-- Table structure for table `general_partnership`
--

CREATE TABLE `general_partnership` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_partnership`
--

INSERT INTO `general_partnership` (`id`, `content`) VALUES
(1, ''),
(2, '<h1>PARTNERS / General Partnership</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `headerpara`
--

CREATE TABLE `headerpara` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `headerpara`
--

INSERT INTO `headerpara` (`id`, `content`) VALUES
(1, '<h1>Become&nbsp;<a href=\"#\">Engineer</a></h1>\r\n'),
(2, '<p><big><small>( Computer Science And Engineering )</small></big></p>\r\n'),
(3, '<p><small>It an online platform for computer science engineering students.<br />\r\nHere you will get the world&#39;s best online study material.</small></p>\r\n\r\n<p><small>We help students in pursuing their dream by providing them right study material<br />\r\nand career guidance using the latest technology.</small></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `menu_id`, `page`) VALUES
(21, 'HOME', NULL, 'index.php'),
(22, 'ABOUT US', NULL, 'about-us.php'),
(33, 'BLOG', NULL, 'blog.php'),
(37, 'CONTACT', NULL, 'book_free_consultancy.php'),
(38, 'ADMIN', NULL, 'admin.php');

-- --------------------------------------------------------

--
-- Table structure for table `sec1img`
--

CREATE TABLE `sec1img` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sec1img`
--

INSERT INTO `sec1img` (`id`, `image`) VALUES
(11, 'javaScript Book.png');

-- --------------------------------------------------------

--
-- Table structure for table `sec4img`
--

CREATE TABLE `sec4img` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sec4img`
--

INSERT INTO `sec4img` (`id`, `image`) VALUES
(14, 'ceo.webp');

-- --------------------------------------------------------

--
-- Table structure for table `sec6img`
--

CREATE TABLE `sec6img` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sec6img`
--

INSERT INTO `sec6img` (`id`, `image`) VALUES
(5, 'tech3.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_us`
--

CREATE TABLE `services_us` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_us`
--

INSERT INTO `services_us` (`id`, `content`) VALUES
(1, '<blockquote>\r\n<h3>How To Become A Great <a href=\"#\">Frontend Developer</a></h3>\r\n</blockquote>\r\n\r\n<p><small>I am a full stack developer and have 1.5+ years of experience in frontend development.<br />\r\nHere I have shared the best, fast and easy way to become a frontend developer.</small></p>\r\n\r\n<p><small>Before starting learning about development we should understand what are the main components or skills needed to be a good developer. We know the front end is what we see on our browser or application screen and there are many technologies available to do that. The first thing that comes on the path is learning programming or scripting language that tells computers what to do and how to do.</small></p>\r\n\r\n<p><small>In our case, we want to be a front-end developer. Then there are many ways of building a frontend of any website or application. Let&#39;s see step by step what they are -</small></p>\r\n\r\n<p><small><a href=\"#\">Learn the Basics - HTML</a></small></p>\r\n\r\n<p><small>Learning HTML is our first step in the journey of becoming a front-end developer. In simple words, this defines the skeleton of the website.</small></p>\r\n\r\n<p><small>- Learn Basics of HTML<br />\r\n- Understand the Structure and Tags<br />\r\n- Learn about Forms<br />\r\n- Semantic HTML<br />\r\n- SEO ( Search Engine Optimization )</small></p>\r\n\r\n<p><small><a href=\"#\">Learn the Basics - CSS</a></small></p>\r\n\r\n<p><small>After learning HTML the next step is learning CSS ( Cascading Style Sheets ). This will beautify the skeleton of the website which we have designed using HTML. I am sharing some important topics to learn -</small></p>\r\n\r\n<p><small>- FlexBox<br />\r\n- Grid<br />\r\n- Media Queries<br />\r\n- Pseudo Elements<br />\r\nPseudo Classes</small></p>\r\n\r\n<p><small><a href=\"#\">Learn the Basics - javaScript</a></small></p>\r\n\r\n<p><small>Now you can build basic or static websites. To add functionality that we will learn JavaScript. If you want to be a good front-end developer this language will be your good friend. Since I started working in javaScript I fall in love with it. It has a lot to learn but here are a few important topics with which you can start jour journey -</small></p>\r\n\r\n<p><small>- Learn Basic Syntax<br />\r\n- DOM Manipulation<br />\r\n- Fetch API / Ajax<br />\r\n- Async Await<br />\r\n- Event Listeners<br />\r\n- ES6+ JavaScript<br />\r\n- Promises<br />\r\n- Classes<br />\r\n- Array Methods<br />\r\n- Scoping<br />\r\n- Hoisting<br />\r\n- Closures</small></p>\r\n\r\n<p><small>Hurry !! you have became a front-end developer and you can build amazing websites using the skills you have learned so far.</small></p>\r\n\r\n<p><small>Now you can stop your journey here or you can continue learning some amazing stuff that will improve your development. I am sharing the steps you can follow if you want to continue your journey toward learning more advanced tech skills.</small></p>\r\n\r\n<p><small><a href=\"#\">Learn any CSS Framework</a></small></p>\r\n\r\n<p><small>CSS is enough for styling but if you want to make your development fast then you can use the CSS frameworks -</small></p>\r\n\r\n<p><small>- Bootstrap<br />\r\n- Tailwind<br />\r\n- Materialize<br />\r\n- Bulma<br />\r\n- Semantic UI<br />\r\n- Foundation</small></p>\r\n\r\n<p><small><a href=\"#\">Learn any CSS Preprocessor mostly SASS and SCSS</a></small></p>\r\n\r\n<p><small>- SASS / SCSS<br />\r\n- Postcss<br />\r\n- Less<br />\r\n- Stylus<br />\r\n- Stylecow</small></p>\r\n\r\n<p><small>Now you are good with styling libraries or frameworks. Before moving forward in our learning journey learn some additional stuff that will improve your development skills and will save you a lot of time during development.</small></p>\r\n\r\n<p><small><a href=\"#\">Learn basic usage of Version Control System</a></small></p>\r\n\r\n<p><small>- Git<br />\r\n- GitHub</small></p>\r\n\r\n<p><small><a href=\"#\">Pick a JavaScript Framework / Library</a></small></p>\r\n\r\n<p><small>The most popular ones:</small></p>\r\n\r\n<p><small>- React<br />\r\n- Vue<br />\r\n- Angular<br />\r\n- Svelte<br />\r\n- Meteor<br />\r\n- Remix</small></p>\r\n\r\n<p><small><a href=\"#\">Basic things to learn in React</a></small></p>\r\n\r\n<p><small>- Components<br />\r\n- Vue<br />\r\n- JSX<br />\r\n- State<br />\r\n- Events<br />\r\n- Conditional Rendering<br />\r\n- useState<br />\r\n- useEffect<br />\r\n- useRef<br />\r\n- useContext<br />\r\n- useReducer<br />\r\n- useMemo<br />\r\n- useCallback</small></p>\r\n\r\n<p><small><a href=\"#\">Learn some of the React UI Frameworks</a></small></p>\r\n\r\n<p><small>- Material UI<br />\r\n- Ant Design<br />\r\n- Chakra UI<br />\r\n- React Bootstrap<br />\r\n- Rebass<br />\r\n- Blueprint<br />\r\n- Semantic UI React</small></p>\r\n\r\n<p><small><a href=\"#\">Learn to use popular React packages</a></small></p>\r\n\r\n<p><small>- React Router<br />\r\n- React Query<br />\r\n- Axios<br />\r\n- React Hook Form<br />\r\n- Styled Components<br />\r\n- Storybook<br />\r\n- Framer Motion</small></p>\r\n\r\n<p><small><a href=\"#\">Learn how to manage state in React with state management tools</a></small></p>\r\n\r\n<p><small>- Redux<br />\r\n- MobX<br />\r\n- Hookstate<br />\r\n- Recoil<br />\r\n- Akita</small></p>\r\n\r\n<p><small><a href=\"#\">Things to learn after learning React</a></small></p>\r\n\r\n<p><small>- Next JS<br />\r\n- Gatsby<br />\r\n- TypeScript<br />\r\n- React Native<br />\r\n- Electron</small></p>\r\n\r\n<p><small><a href=\"#\">Important things to learn in Next JS</a></small></p>\r\n\r\n<p><small>- Static Site Generation<br />\r\n- Server Side Rendering<br />\r\n- Incremental Static Regeneration<br />\r\n- Dynamic Pages<br />\r\n- CSS / SASS Modules<br />\r\n- Lazy loading Modules<br />\r\n- API Routes</small></p>\r\n\r\n<p><small><a href=\"#\">Learn to test your apps with some of these libraries/frameworks</a></small></p>\r\n\r\n<p><small>- Jest<br />\r\n- Testing Library<br />\r\n- Cypress<br />\r\n- Enzyme<br />\r\n- Jasmine<br />\r\n- Mocha</small></p>\r\n\r\n<p><small><a href=\"#\">Learn to deploy your websites</a></small></p>\r\n\r\n<p><small>- Netlify<br />\r\n- Vercel<br />\r\n- Firebase<br />\r\n- GitHub Pages<br />\r\n- Heroku<br />\r\n- Render</small></p>\r\n\r\n<p><small><a href=\"#\">Other important topics you should know</a></small></p>\r\n\r\n<p><small>- PWA<br />\r\n- Web Sockets<br />\r\n- CORS<br />\r\n- JSON<br />\r\n- RESTful APIs<br />\r\n- GraphQL APIs<br />\r\n- Basic Security<br />\r\n- Web Accessibility</small></p>\r\n\r\n<p><small><a href=\"#\">Some tools to help lint and format code</a></small></p>\r\n\r\n<p><small>- ES Lint<br />\r\n- Standard<br />\r\n- Prettier</small></p>\r\n\r\n<p><small><a href=\"#\">Optional Things to learn</a></small></p>\r\n\r\n<p><small>- Webpack<br />\r\n- Parcel<br />\r\n- SnowPack<br />\r\n- Rollup.js<br />\r\n- Gulp</small></p>\r\n\r\n<p><small><a href=\"#\">Project Ideas</a></small></p>\r\n\r\n<p><small>- E-commerce Website<br />\r\n- Personal Blog App<br />\r\n- Portfolio App<br />\r\n- Business Website<br />\r\n- Google Clone<br />\r\n- Amazon Clone<br />\r\n- Netflix Clone<br />\r\n- Youtube Clone<br />\r\n- Google Drive Clone<br />\r\n- Food Delivery App<br />\r\n- Whatsapp Clone<br />\r\n- Facebook Clone</small></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `study_in_canada`
--

CREATE TABLE `study_in_canada` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `study_in_canada`
--

INSERT INTO `study_in_canada` (`id`, `content`) VALUES
(1, '<h1>COUNTRIES / STUDY IN CANADA</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `study_in_germany`
--

CREATE TABLE `study_in_germany` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `study_in_germany`
--

INSERT INTO `study_in_germany` (`id`, `content`) VALUES
(1, '<h1>COUNTRIES / STUDY IN GERMANY</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `study_in_usa`
--

CREATE TABLE `study_in_usa` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `study_in_usa`
--

INSERT INTO `study_in_usa` (`id`, `content`) VALUES
(1, '<h1>COUNTRIES / STUDY IN USA</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `content`) VALUES
(1, '<h1>SUCCESS STORIES</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `university_partnership`
--

CREATE TABLE `university_partnership` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university_partnership`
--

INSERT INTO `university_partnership` (`id`, `content`) VALUES
(1, '<h1>PARTNERS / University Partnership</h1>\r\n\r\n<blockquote>\r\n<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp;tempor incididunt ut labore et dolore magna aliqua.</small></p>\r\n</blockquote>\r\n'),
(2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutimg`
--
ALTER TABLE `aboutimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply1`
--
ALTER TABLE `apply1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply3`
--
ALTER TABLE `apply3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collap2`
--
ALTER TABLE `collap2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collap4`
--
ALTER TABLE `collap4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collap6`
--
ALTER TABLE `collap6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content1`
--
ALTER TABLE `content1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content2`
--
ALTER TABLE `content2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content3`
--
ALTER TABLE `content3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq1`
--
ALTER TABLE `faq1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq2`
--
ALTER TABLE `faq2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq3`
--
ALTER TABLE `faq3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundingimg`
--
ALTER TABLE `fundingimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_partnership`
--
ALTER TABLE `general_partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headerpara`
--
ALTER TABLE `headerpara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `sec1img`
--
ALTER TABLE `sec1img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec4img`
--
ALTER TABLE `sec4img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec6img`
--
ALTER TABLE `sec6img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_us`
--
ALTER TABLE `services_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_in_canada`
--
ALTER TABLE `study_in_canada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_in_germany`
--
ALTER TABLE `study_in_germany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_in_usa`
--
ALTER TABLE `study_in_usa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_partnership`
--
ALTER TABLE `university_partnership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutimg`
--
ALTER TABLE `aboutimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply1`
--
ALTER TABLE `apply1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply3`
--
ALTER TABLE `apply3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collap2`
--
ALTER TABLE `collap2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collap4`
--
ALTER TABLE `collap4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collap6`
--
ALTER TABLE `collap6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content1`
--
ALTER TABLE `content1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content2`
--
ALTER TABLE `content2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content3`
--
ALTER TABLE `content3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq1`
--
ALTER TABLE `faq1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq2`
--
ALTER TABLE `faq2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq3`
--
ALTER TABLE `faq3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fundingimg`
--
ALTER TABLE `fundingimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `general_partnership`
--
ALTER TABLE `general_partnership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headerpara`
--
ALTER TABLE `headerpara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sec1img`
--
ALTER TABLE `sec1img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sec4img`
--
ALTER TABLE `sec4img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sec6img`
--
ALTER TABLE `sec6img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_us`
--
ALTER TABLE `services_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_in_canada`
--
ALTER TABLE `study_in_canada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_in_germany`
--
ALTER TABLE `study_in_germany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_in_usa`
--
ALTER TABLE `study_in_usa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `university_partnership`
--
ALTER TABLE `university_partnership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
