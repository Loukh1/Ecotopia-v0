-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 01:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecotopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `post_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `descr` varchar(300) NOT NULL,
  `img` varchar(150) NOT NULL,
  `likes` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`post_id`, `title`, `body`, `descr`, `img`, `likes`, `author`, `datep`) VALUES
(9, 'First Article!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit.</p>\r\n<p><img src=\"https://www.pharmacieposte.fr/img/nosspecialites/1.jpg\" alt=\"\" /></p>\r\n<p>Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. </p>', 'lorem', 'https://i.ibb.co/thbLQYy/a.jpg', 34, 'admin', '2021-11-14'),
(10, 'Second Article', '<p><em><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra</strong></em></p>\r\n<p><em><strong><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"99\" height=\"128\" />dvbdfbdbbbbbbbbbbbbbbb</strong></em></p>\r\n<p>agna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu. Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl purus in. Nisi quis eleifend quam adipiscing. Libero id faucibus nisl tincidunt eget nullam. Magna sit amet purus gravida quis blandit. Id aliquet risus feugiat in ante metus dictum. Tincidunt praesent semper feugiat nibh sed pulvinar. Diam vulputate ut pharetra sit amet aliquam id diam. Semper risus in hendrerit gravida rutrum quisque. Tellus id interdum velit laoreet id donec. Id donec ultrices tincidunt arcu non sodales neque sodales ut. Sed odio morbi quis commodo. Tristique senectus et netus et malesuada fames ac turpis egestas. Sed risus pretium quam vulputate dignissim. Diam in arcu cursus euismod quis viverra nibh. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Et tortor consequat id porta nibh venenatis cras. Viverra suspendisse potenti nullam ac tortor. Quis varius quam quisque id diam vel quam elementum.</p>', 'kais ', 'https://i.ibb.co/tpBzLDk/c.jpg', 20, 'admin', '2021-11-14'),
(11, 'Third Article', '<p style=\"text-align: center;\"><em><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus</strong></em></p>\r\n<p style=\"text-align: center;\"><em><strong><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"225\" height=\"225\" /></strong></em></p>\r\n<p style=\"text-align: center;\"><em><strong> vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu. Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl purus in. Nisi quis eleifend quam adipiscing. Libero id faucibus nisl tincidunt eget nullam. Magna sit amet purus gravida quis blandit. Id aliquet risus feugiat in ante metus dictum. Tincidunt praesent semper feugiat nibh sed pulvinar. Diam vulputate ut pharetra sit amet aliquam id diam. Semper risus in hendrerit gravida rutrum quisque. Tellus id interdum velit laoreet id donec. Id donec ultrices tincidunt arcu non sodales neque sodales ut. Sed odio morbi quis commodo. Tristique senectus et netus et malesuada fames ac turpis egestas. Sed risus pretium quam vulputate dignissim. Diam in arcu cursus euismod quis viverra nibh. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Et tortor consequat id porta nibh venenatis cras. Viverra suspendisse potenti nullam ac tortor. Quis varius quam quisque id diam vel quam elementum.</strong></em></p>', 'cat', 'https://i.ibb.co/86TSbqN/d.jpg', 11, 'admin', '2021-11-14'),
(12, 'Fourth Article', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam&nbsp; Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl <img src=\"https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/164719801/original/419251e95b26ea2594bcee9b61aa215bad7e8c8f/paint-your-pet-as-the-cryig-cat-meme.jpg\" alt=\"\" width=\"1118\" height=\"717\" /></p>\r\n<p>sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu.</p>', 'sad cat', 'https://i.ibb.co/MCwbJ74/grandma.jpg', 56, 'admin', '2021-11-14'),
(13, 'Fifth article', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.</p>\r\n<p><img src=\"https://s.keepmeme.com/files/en_posts/20200908/blurred-surprised-cat-meme-5b734a45210ef3b6657bcbe2831715fa.jpg\" alt=\"\" width=\"663\" height=\"663\" /></p>\r\n<p>Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu. Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl purus in. Nisi quis eleifend quam adipiscing. Libero id faucibus nisl tincidunt eget nullam. Magna sit amet purus gravida quis blandit. Id aliquet risus feugiat in ante metus dictum. Tincidunt praesent semper&nbsp;</p>', 'surprised cat', 'https://i.ibb.co/rd53gkW/w.jpg', 0, 'admin', '2021-11-14'),
(14, 'Sixth article', '<h1>haha</h1>\r\n<h3>hrhzr</h3>\r\n<h6><span style=\"font-size: 10.72px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget.</span></h6>\r\n<h6><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"225\" height=\"225\" /></h6>\r\n<h6><span style=\"font-size: 10.72px;\">Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu. Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl purus in. Nisi quis eleifend quam adipiscing. Libero id faucibus nisl tincidunt eget nullam. Magna sit amet purus gravida quis blandit. Id aliquet risus feugiat in ante metus dictum. Tincidunt praesent semper feugiat nibh sed pulvinar. Diam vulputate ut pharetra sit amet aliquam id diam. Semper risus in hendrerit gravida rutrum quisque. Tellus id interdum velit laoreet id donec. Id donec ultrices tincidunt arcu non sodales neque sodales ut. Sed odio morbi quis commodo. Tristique senectus et netus et malesuada fames ac turpis egestas. Sed risus pretium quam vulputate dignissim. Diam in arcu cursus euismod quis viverra nibh. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Et tortor consequat id porta nibh venenatis cras. Viverra suspendisse potenti nullam ac tortor. Quis varius quam quisque id diam vel quam elementum.</span></h6>', 'ha', 'https://i.ibb.co/6NFxcm3/b.jpg', 0, 'admin', '2021-11-14'),
(16, 'espriiiit', '<p>vvvvv</p>', 'se former autrement', 'https://i.ibb.co/q7cRD3P/n.jpg', 1, 'admin', '2021-11-14'),
(17, 'projet el web', '<p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>', 'clean the enviroment', 'https://i.ibb.co/vYdDPJ0/j.jpg', 2, 'admin', '2021-11-14');
INSERT INTO `articles` (`post_id`, `title`, `body`, `descr`, `img`, `likes`, `author`, `datep`) VALUES
(45, 'AZZ', '<p>SDFGTHYJUKHILJM<strong>FDGHFJKLM<em>FDVBGFHNJ?</em></strong></p>', 'FG', 'https://i.ibb.co/HgzP4S8/p.jpg', 0, 'admin', '2021-11-30'),
(46, 'hehe', '<p>zertg</p>', 'fghjfghj', 'https://i.ibb.co/HgzP4S8/p.jpg', 0, 'admin', '2021-12-05'),
(48, 'tesst', '<p>eftrsgfsgs</p>', 'sfdgsgf', 'https://i.ibb.co/C8ybLnv/v.jpg', 0, 'admin', '2021-12-05'),
(51, 'The Grump', '<p><em><strong>THE GRUMP</strong></em></p>\r\n<p><em><strong><img src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"300\" height=\"168\" /></strong></em></p>', 'BEWARE THE GRUMP', 'https://i.ibb.co/C8ybLnv/v.jpg', 0, 'admin', '2021-12-05'),
(52, 'intresting article titleee', '<p>ryjrs</p>', 'ee', 'https://i.ibb.co/8YgVGds/h.jpg', 19, 'admin', '2021-12-05'),
(53, 'test cycy', '<p>gdh</p>', 'dgh', 'https://i.ibb.co/HgzP4S8/p.jpg', 0, 'admin', '2021-12-05'),
(56, 'new article ', '<div class=\"container\" style=\"padding: 0px 15px; margin: 0px auto; font-family: var(--Quicksand); box-sizing: border-box; max-width: 1140px; width: 1140px; color: #212529; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"row\" style=\"padding: 0px; margin: 0px -15px; font-family: var(--Quicksand); box-sizing: border-box; display: flex; flex-wrap: wrap;\">\r\n<div class=\"col-12\" style=\"padding: 0px 15px; margin: 0px; font-family: var(--Quicksand); box-sizing: border-box; position: relative; width: 1140px; flex: 0 0 100%; max-width: 100%;\">\r\n<div class=\"comments\" style=\"padding: 0px; margin: 0px; font-family: var(--Quicksand); box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<center style=\"padding: 0px; margin: 0px; font-family: var(--Quicksand); box-sizing: border-box; color: #212529; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"eee\" style=\"padding: 0px; margin: 0px; font-family: var(--Quicksand); box-sizing: border-box; height: auto; width: 944.297px; background-color: #f0f0f0;\">\r\n<p style=\"padding: 0px; margin: 0px 0px 1rem; font-family: var(--Quicksand); box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam&nbsp; Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl<img style=\"padding: 0px; margin: 0px; font-family: var(--Quicksand); box-sizing: border-box; width: 944.297px; display: block; vertical-align: middle; border-style: none;\" src=\"https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/164719801/original/419251e95b26ea2594bcee9b61aa215bad7e8c8f/paint-your-pet-as-the-cryig-cat-meme.jpg\" alt=\"\" width=\"1118\" height=\"717\" /></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1rem; font-family: var(--Quicksand); box-sizing: border-box;\">sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu.</p>\r\n</div>\r\n</center>', 'crying grump!', 'https://i.ibb.co/C8ybLnv/v.jpg', 0, 'admin', '2021-12-06'),
(59, 'another test', '<p style=\"padding: 0px; margin: 0px 0px 1rem; font-family: Quicksand, sans-serif; box-sizing: border-box; color: #212529; font-size: 16px; text-align: -webkit-center;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Id venenatis a condimentum vitae sapien. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Venenatis cras sed felis eget. Auctor urna nunc id cursus. Sem viverra aliquet eget sit amet tellus. At consectetur lorem donec massa sapien faucibus. Nibh tortor id aliquet lectus. Aenean pharetra magna ac placerat vestibulum lectus. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Phasellus vestibulum lorem sed risus ultricies. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Senectus et netus et malesuada fames ac turpis egestas integer. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Est ante in nibh mauris cursus mattis molestie a iaculis. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Eget felis eget nunc lobortis mattis aliquam faucibus. Arcu cursus vitae congue mauris rhoncus aenean. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Eget est lorem ipsum dolor sit amet. Senectus et netus et malesuada fames ac turpis. Morbi quis commodo odio aenean sed adipiscing diam donec adipiscing. Tincidunt dui ut ornare lectus. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Magna sit amet purus gravida quis blandit turpis. Pharetra vel turpis nunc eget lorem. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Id leo in vitae turpis massa sed elementum tempus egestas. Elementum curabitur vitae nunc sed velit dignissim. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Euismod quis viverra nibh cras pulvinar. Scelerisque in dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam&nbsp; Massa vitae tortor condimentum lacinia quis. Non consectetur a erat nam at lectus urna duis. Vulputate enim nulla aliquet porttitor lacus. Pretium lectus quam id leo in vitae turpis massa sed. Volutpat ac tincidunt vitae semper quis lectus. Lacinia quis vel eros donec ac odio tempor orci. Dapibus ultrices in iaculis nunc sed augue lacus. Velit aliquet sagittis id consectetur purus ut faucibus. Etiam sit amet nisl<img style=\"padding: 0px; margin: 0px; font-family: var(--Quicksand); box-sizing: border-box; width: 944.297px; display: block; vertical-align: middle; border-style: none;\" src=\"https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/164719801/original/419251e95b26ea2594bcee9b61aa215bad7e8c8f/paint-your-pet-as-the-cryig-cat-meme.jpg\" alt=\"\" width=\"1118\" height=\"717\" /></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1rem; font-family: Quicksand, sans-serif; box-sizing: border-box; color: #212529; font-size: 16px; text-align: -webkit-center;\">sem et. Ut pharetra sit amet aliquam id diam maecenas ultricies mi. Nisi quis eleifend quam adipiscing vitae proin. Feugiat nisl pretium fusce id. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Pulvinar etiam non quam lacus suspendisse. Sed cras ornare arcu dui vivamus. Lectus quam id leo in vitae turpis. Sed vulputate mi sit amet. Dignissim suspendisse in est ante. Vel fringilla est ullamcorper eget. Pellentesque dignissim enim sit amet. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nunc non blandit massa enim nec dui nunc mattis. Semper viverra nam libero justo laoreet sit. Morbi tempus iaculis urna id volutpat lacus laoreet. Laoreet non curabitur gravida arcu ac tortor. Libero justo laoreet sit amet cursus sit amet. Malesuada bibendum arcu vitae elementum curabitur vitae. Vitae tempus quam pellentesque nec nam aliquam sem et. Egestas diam in arcu cursus. Ut morbi tincidunt augue interdum velit. Ac turpis egestas maecenas pharetra convallis posuere morbi leo. Magna fermentum iaculis eu non diam phasellus. Morbi leo urna molestie at elementum eu facilisis. Et egestas quis ipsum suspendisse ultrices gravida. Magna etiam tempor orci eu. Ipsum suspendisse ultrices gravida dictum fusce ut. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Eget mi proin sed libero enim. Elementum facilisis leo vel fringilla est ullamcorper eget. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Dictum sit amet justo donec enim diam vulputate ut pharetra. Risus nec feugiat in fermentum posuere urna nec. Quis auctor elit sed vulputate. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vel turpis nunc eget lorem dolor sed viverra ipsum. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut sem viverra aliquet eget. Arcu felis bibendum ut tristique et egestas quis. Nullam non nisi est sit. Pharetra convallis posuere morbi leo urna molestie. Dolor purus non enim praesent elementum facilisis leo vel. Eget aliquet nibh praesent tristique. Proin nibh nisl condimentum id venenatis a. Orci sagittis eu volutpat odio facilisis. Accumsan tortor posuere ac ut. Id eu nisl nunc mi ipsum faucibus vitae aliquet nec. Aenean euismod elementum nisi quis eleifend quam adipiscing. Cursus sit amet dictum sit amet. Lacus laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat lacus laoreet non curabitur gravida arcu.</p>', 'teest', 'https://i.ibb.co/HgzP4S8/p.jpg', 0, 'admin', '2021-12-06'),
(60, 'xdcfghj', '<p>cvbn,</p>', 'xdfgh', 'https://i.ibb.co/8YgVGds/h.jpg', 0, 'admin', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'eco-friendly product'),
(2, 'decoration product');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `quantite_total` int(11) NOT NULL,
  `numCommande` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `state` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_client`, `email`, `quantite_total`, `numCommande`, `date`, `state`) VALUES
(207, 36, '', 2, 1901950993, '2021-12-11 16:36:18', 'pending'),
(208, 36, '', 2, 1965344232, '2021-12-11 16:36:33', 'pending'),
(209, 36, '', 1, 873287553, '2021-12-12 21:08:29', 'delivering'),
(210, 36, '', 2, 993200883, '2021-12-12 23:00:34', 'pending'),
(211, 36, '', 1, 1750871714, '2021-12-12 23:35:26', 'delivered'),
(212, 36, 'louay.kahlawi1@gmail.com', 1, 1497618815, '2021-12-13 00:03:24', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `name`, `comment`, `date`) VALUES
(11, 9, 1, 'admin', 'hola', '2021-11-28'),
(12, 9, 1, 'admin', 'efzretrytuiy', '2021-11-28'),
(14, 14, 1, 'admin ', 'DFGHJK', '2021-11-29'),
(15, 13, 2, 'lou', 'AAAA', '2021-11-30'),
(19, 10, 36, 'louayy', 'test', '2021-12-12'),
(20, 11, 36, 'louayy', 'test', '2021-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `detailcommande`
--

CREATE TABLE `detailcommande` (
  `id_detailcommande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `idcommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailcommande`
--

INSERT INTO `detailcommande` (`id_detailcommande`, `id_produit`, `qty`, `idcommande`) VALUES
(167, 36, 1, 207),
(168, 37, 1, 207),
(169, 39, 1, 208),
(170, 40, 1, 208),
(171, 39, 1, 209),
(172, 36, 1, 210),
(173, 39, 1, 210),
(174, 40, 1, 211),
(175, 36, 1, 212);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_e` int(30) NOT NULL,
  `nom_e` varchar(30) NOT NULL,
  `img_e` blob NOT NULL,
  `dated_e` date NOT NULL,
  `datef_e` date NOT NULL,
  `gov_e` varchar(50) NOT NULL,
  `lieu_e` varchar(50) NOT NULL,
  `adresse_e` varchar(50) NOT NULL,
  `cp_e` int(11) NOT NULL,
  `ville_e` varchar(50) NOT NULL,
  `desc_e` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_e`, `nom_e`, `img_e`, `dated_e`, `datef_e`, `gov_e`, `lieu_e`, `adresse_e`, `cp_e`, `ville_e`, `desc_e`) VALUES
(75, 'fdgfdgfdgfdg', 0x3436393630302d77616c6c70617065722e6a7067, '0000-00-00', '0000-00-00', 'Sousse', 'fghgfjgf', 'hgfhgfh', 0, 'hgfh', 'dscsdc'),
(76, 'fdgfdgfdgfdg', 0x3436393630302d77616c6c70617065722e6a7067, '0000-00-00', '0000-00-00', 'Kasserine', 'hanini', 'dcscdsdscdsdsc', 3310, 'fdgfdg', 'dscsdc'),
(77, 'mehdi', 0x3436393630302d77616c6c70617065722e6a7067, '0000-00-00', '0000-00-00', 'Kbeli', 'fghgfjgf', 'dcscdsdscdsdsc', 3310, 'hgfh', 'gfhgfh'),
(78, 'bbbb', '', '2021-01-01', '2021-01-01', 'vv', 'xcv', 'azer', 2, 'aze', 'vv');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_id`, `post_id`) VALUES
(3, 17),
(2, 16),
(2, 17),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `urlimage` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idcategorie` int(11) NOT NULL,
  `Type_sous_Cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `quantite`, `urlimage`, `description`, `idcategorie`, `Type_sous_Cat`) VALUES
(36, 'Arche de jardin', 300, 3, 'dash/uploads/Arche_de_jardin_arrondie_en_acier_plein.png', 'Arche de jardin arrondie en acier plein', 2, 'decoration jardin'),
(37, 'Savon noir écologique', 18, 40, 'dash/uploads/Savon_noir_écologique_1L_Produit_d\'entretien.png', 'Savon noir écologique 1L Produit d\'entretien', 1, 'produits de menage'),
(39, 'Coffret Maquillage zéro déchet', 45, 12, 'dash/uploads/Coffret_Maquillage_zéro_déchet.png', 'Coffret_Maquillage_zéro_déchet', 1, 'cosmetique'),
(40, 'Encre à lèvres', 20, 25, 'dash/uploads/Encre_à_lèvres_rechargeable_bio.png', 'Encre à lèvres rechargeable bio', 1, 'cosmetique'),
(41, 'Cisailles de jardin', 35, 12, 'dash/uploads/Cisailles_de_jardin.png', 'Cisailles_de_jardin', 2, 'outils de jardinage'),
(42, 'Terre végétale', 60, 20, 'dash/uploads/VILMORIN_Terre_végétale_40_L.png', 'VILMORIN Terre végétale 40L', 2, 'outils de jardinage'),
(44, 'Étagère Echelle en Bois', 150, 2, 'dash/uploads/Étagère_Echelle_en_Bois_Pour_Plantes_de_6_Niveaux_Étagère_à_Fleurs_Décoration_Extérieur_Intérieur_pour_Maison_Jardin.png', 'Étagère_Echelle_en_Bois_Pour_Plantes_de_6_Niveaux_Étagère_à_Fleurs_Décoration_Extérieur_Intérieur_pour_Maison_Jardin', 2, 'decoration jardin');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `email` varchar(50) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm` varchar(255) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `adressee` varchar(50) NOT NULL,
  `codee` varchar(4) NOT NULL,
  `telephonee` varchar(12) NOT NULL,
  `question` enum('o','n') NOT NULL,
  `questionn` enum('x','y') NOT NULL,
  `id_role` varchar(11) DEFAULT 'user',
  `status` int(200) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `fname`, `lname`, `email`, `user`, `password`, `confirm`, `birthday`, `ville`, `adressee`, `codee`, `telephonee`, `question`, `questionn`, `id_role`, `status`) VALUES
(29, 'romdhani', 'yassine', 'yassine.romdhani@gmail.com', 'yassinos98', 'dc7e95b8c635589fa68b0ac731ab56c71714819215eb0f3b9b663513133d6e47', 'dc7e95b8c635589fa68b0ac731ab56c71714819215eb0f3b9b663513133d6e47', '1998-06-20', 'Ben arous', 'mourouj 1 ', '2074', '', 'o', 'x', 'admin', 0),
(36, 'louayYY', 'ka', 'louay.kahlawi1@gmail.com', 'louayy', 'd4b3dfbf113cc8b2f6fd71bcb24b761d04b47c04a59b22a2a7db91b275542892', 'd4b3dfbf113cc8b2f6fd71bcb24b761d04b47c04a59b22a2a7db91b275542892', '2021-01-01', 'Kasserine', 'k', '111', '+21622997398', 'n', 'y', 'user', 0),
(37, 'lou', 'lou', 'louay.kh123@gmail.com', 'louayyy', 'd1b658829c2dd41a6ec0a779d1eb14b5f3af38fb450c548d01537bc5a8f3378e', 'd1b658829c2dd41a6ec0a779d1eb14b5f3af38fb450c548d01537bc5a8f3378e', '2021-01-01', 'Medenine', 'l', '2', '', 'n', 'x', 'user', 0),
(38, 'eco', 'eco', 'ecotopia.tn@gmail.com', 'ecotopia', 'd4b3dfbf113cc8b2f6fd71bcb24b761d04b47c04a59b22a2a7db91b275542892', 'd1b658829c2dd41a6ec0a779d1eb14b5f3af38fb450c548d01537bc5a8f3378e', '2021-01-01', 'Kef', 'a', '1', '', 'n', 'y', 'admin', 0),
(39, 'khadija', 'chaari', 'khadija.chaari@esprit.tn', 'khadija', 'c8ac1e2a278ddca7a78ee02aa91f843fae34138406935dd68610c32f2e8b906f', 'c8ac1e2a278ddca7a78ee02aa91f843fae34138406935dd68610c32f2e8b906f', '2021-01-01', 'Sidi bouzid', 'zer', '1', '1', 'n', 'y', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_art` (`article_id`),
  ADD KEY `fk_usr` (`user_id`);

--
-- Indexes for table `detailcommande`
--
ALTER TABLE `detailcommande`
  ADD PRIMARY KEY (`id_detailcommande`),
  ADD KEY `fk_com` (`idcommande`),
  ADD KEY `fk_prod1` (`id_produit`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_e`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `fk_usr1` (`id_client`),
  ADD KEY `fk_prod` (`id_produit`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fak_cat` (`idcategorie`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `detailcommande`
--
ALTER TABLE `detailcommande`
  MODIFY `id_detailcommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_e` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailcommande`
--
ALTER TABLE `detailcommande`
  ADD CONSTRAINT `fk_com` FOREIGN KEY (`idcommande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prod1` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`);

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_prod` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usr1` FOREIGN KEY (`id_client`) REFERENCES `utilisateurs` (`id`);

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fak_cat` FOREIGN KEY (`idcategorie`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
