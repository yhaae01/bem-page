-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2021 at 11:59 AM
-- Server version: 10.5.9-MariaDB-log
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bph`
--

CREATE TABLE `tb_bph` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bph`
--

INSERT INTO `tb_bph` (`id`, `name`, `image`, `position`) VALUES
(1, 'surya', 'bph_1614859033.jpg', 'ketua'),
(2, 'aldi', 'bph_1614859053.jpg', 'wakil'),
(3, 'ahmad', 'bph_1614859071.jpg', 'anggota 1'),
(4, 'eka', 'bph_1614859080.jpg', 'anggota 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(20) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'surya', 'surya123', 'logo.jpg', '$2y$10$IK4ayWnaKps7kkwz9Y.HTeMBpFIGjoF9mOW2NiywSwKamfNUsR3CW', 1, 1, 1609276647),
(4, 'ahmad maulana', 'ahmad123', 'default.png', '$2y$10$6UwyAiOBBr9nm4EpGQoHzOGLfMlF/TNAGr82dZFCrJ3T4r2ylO5Kq', 2, 1, 1609291118),
(6, 'eka wardana', 'eka123', 'default.png', '$2y$10$O0LoeHKzBEFtHu.5lmxdje0HFAK2MzM9TCfC9T7bzJy0ZyM9HD7Vu', 2, 1, 1613467140);

-- --------------------------------------------------------

--
-- Table structure for table `user_accessmenu`
--

CREATE TABLE `user_accessmenu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accessmenu`
--

INSERT INTO `user_accessmenu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Susunan Kepengurusan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Pengelolaan Menu', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Pengelolaan Submenu', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Kelola User', 'admin/manageUser', 'fas fa-fw fa-users', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Ubah Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 0, 'Badan Pengurus Harian', 'home/bph', 'fas fa-fw fa-check', 1),
(12, 0, 'Badan Pengurus Harian', 'content/bph', 'fas fa-fw fa-folder', 1),
(13, 4, 'Badan Pengurus Harian', 'content/bph', 'fas fa-fw fa-folder', 1),
(14, 4, 'Kementrian Ekonomi', 'content/kemenko', 'fas fa-fw fa-folder', 1),
(15, 4, 'Kementrian Agama', 'content/kemenag', 'fas fa-fw fa-folder', 1),
(16, 4, 'Kementrian Olahraga', 'content/kemenor', 'fas fa-fw fa-folder', 1),
(17, 4, 'Kementrian Dalam Negeri', 'content/kemendagri', 'fas fa-fw fa-folder', 1),
(18, 4, 'Kementrian Pendidikan & Budaya', 'content/kemendikbud', 'fas fa-fw fa-folder', 1),
(19, 4, 'Kementrian Luar Negeri', 'content/kemenlu', 'fas fa-fw fa-folder', 1),
(20, 4, 'Kementrian Komunikasi & Informatika', 'content/kemenkominfo', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bph`
--
ALTER TABLE `tb_bph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accessmenu`
--
ALTER TABLE `user_accessmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bph`
--
ALTER TABLE `tb_bph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_accessmenu`
--
ALTER TABLE `user_accessmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
