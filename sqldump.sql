-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2015 at 01:16 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `second_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `second_caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `third_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `third_caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `first_title`, `first_caption`, `second_title`, `second_caption`, `third_title`, `third_caption`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'Changing one', 'two', 'three', 'four', 'five', 'six', NULL, 'DBLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua.', 'DBLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua.', '2015-06-20 05:00:00', '2015-06-24 02:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `second_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `second_caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `first_title`, `first_caption`, `second_title`, `second_caption`, `email`, `phone`, `address`, `latitude`, `longitude`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'epa', 'le', 'fas', 'lkmlk', 'DBemail@email.com', 'klmlkm', 'klm', '54.6789', '43.5678', NULL, 'kmlklk', 'lkijohbn', '2015-06-20 05:00:00', '2015-06-21 22:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo_id` int(11) NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_slogan` longtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dribble` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `behance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `github` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entity`
--

INSERT INTO `entity` (`id`, `user_id`, `website`, `logo_id`, `company_name`, `company_slogan`, `facebook`, `linkedin`, `dribble`, `twitter`, `instagram`, `behance`, `email`, `github`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'www.lunadeveloper.com', 1, 'Luna Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. ', 'facebook.com/something', 'third', 'second', 'fourth', 'fifth', 'seven', 'five@nine.com', 'six', NULL, 'eight', '', '2015-06-20 05:00:00', '2015-06-21 22:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `video_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `user_id`, `title`, `caption`, `image_id`, `video_url`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'edit on the go', 'the caption', NULL, 'https://www.youtube.com/watch?v=8VFNjUyAR_U', NULL, 'lorem something something', 'lorem something something', '2015-06-21 05:00:00', '2015-06-24 02:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_20_050007_create_entity', 1),
('2015_06_20_050018_create_about', 1),
('2015_06_20_051955_create_home', 1),
('2015_06_20_052016_create_home_slider', 1),
('2015_06_20_052029_create_quote', 1),
('2015_06_20_052044_create_contact', 1),
('2015_06_20_052051_create_skill', 1),
('2015_06_20_052059_create_skill_slider', 1),
('2015_06_20_052130_create_portfolio_piece', 1),
('2015_06_20_052139_create_portfolio_category', 1),
('2015_06_20_052156_create_piece_category', 1),
('2015_06_20_054132_create_skill_list', 1),
('2015_06_20_054144_create_resume', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piece_category`
--

CREATE TABLE `piece_category` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  `piece_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `extra_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `user_id`, `name`, `extra_1`) VALUES
(1, 1, 'Branding', ''),
(2, 1, 'Visual Design', ''),
(3, 1, 'Interactive', ''),
(4, 1, 'Mobile', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_piece`
--

CREATE TABLE `portfolio_piece` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_title_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content_text_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_title_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content_text_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_title_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content_text_3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_title_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content_text_4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `info_title_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `info_caption_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `info_title_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `info_caption_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `view_on_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolio_piece`
--

INSERT INTO `portfolio_piece` (`id`, `user_id`, `title`, `caption`, `content_title_1`, `content_text_1`, `content_title_2`, `content_text_2`, `content_title_3`, `content_text_3`, `content_title_4`, `content_text_4`, `info_title_1`, `info_caption_1`, `info_title_2`, `info_caption_2`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `deleted_at`, `view_on_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'First piece', 'Doing this is right', 'Tab1', 'This is the text for tab 1', 'tab2', 'something something something something', 'Third Tab', 'category 3 hurricanes are scary please avoid at all cost', 'fourth tab', 'lorem lorem lorem lorem ipsum', 'Categories', 'Trees Birds etc', 'Randomness', 'is random', 'This is the extra field', 'This is the second extra field', 'this is the third extra field', 'this is the fourth extra field', NULL, 'www.lunadeveloper.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Hey this is the new piece', 'something something', 'title 1 ', 'section1', 'title2', 'section2', 'title3', 'section3', '', '', 'Categories_', 'Cheese doritos', '', '', '', '', '', '', NULL, '', '2015-06-23 19:28:27', '2015-06-23 19:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `user_id`, `author`, `text`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andrew Rodriguez', 'This is freaking awesome', NULL, '', '', '2015-06-21 05:00:00', '2015-06-21 05:00:00'),
(2, 1, 'Someone else', 'I agree with the dude in the first quote', NULL, '', '', '2015-06-21 05:00:00', '2015-06-21 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_present` tinyint(4) NOT NULL DEFAULT '0',
  `from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `extra_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `user_id`, `image_id`, `icon`, `title`, `caption`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'fa fa-file-powerpoint-o', 'second', 'chaing the caption', NULL, '', '', '2015-06-21 05:00:00', '2015-06-24 02:44:18'),
(2, 1, 0, 'fa fa-headphones', 'The second skill is changing', 'New caption for the second skill', NULL, '', '', '2015-06-21 05:00:00', '2015-06-22 04:29:28'),
(3, 1, 0, 'fa fa-flag-o', 'DB Skill 3', 'This is the caption for skill 3', NULL, '', '', '2015-06-21 05:00:00', '2015-06-21 05:00:00'),
(4, 1, 0, 'fa fa-gamepad', 'DB Skill 4', 'long descirpption about the skil and the information related to ti.', NULL, '', '', '2015-06-21 05:00:00', '2015-06-21 05:00:00'),
(6, 1, 0, 'fa fa-globe', 'New title', 'something', NULL, '', '', '2015-06-24 02:44:59', '2015-06-24 02:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `skill_list`
--

CREATE TABLE `skill_list` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill_parent` int(11) NOT NULL,
  `skill` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill_slider`
--

CREATE TABLE `skill_slider` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skill_caption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extra_1` longtext COLLATE utf8_unicode_ci,
  `extra_2` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill_slider`
--

INSERT INTO `skill_slider` (`id`, `user_id`, `skill_title`, `skill_caption`, `value`, `deleted_at`, `extra_1`, `extra_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'Testing skill update', '', '99', NULL, NULL, NULL, '0000-00-00 00:00:00', '2015-06-24 02:43:10'),
(2, 1, 'Second Skill Slider', '', '50', NULL, NULL, NULL, '2015-06-21 05:00:00', '2015-06-21 05:00:00'),
(3, 1, 'third Skill Slider', '', '75', NULL, NULL, NULL, '2015-06-21 05:00:00', '2015-06-21 05:00:00'),
(4, 1, 'Fourth', '', '100', NULL, NULL, NULL, '2015-06-21 05:00:00', '2015-06-21 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Andrew Rodriguez', 'demo@demo.com', '$2y$10$sezlN9gS62fUot0sdCpl.unnfZVWr3MS1apM9v28ZxjT3mkbxNNuS', 'wPsLXthV1MnQVe72sSKxY8YMjgNN5flNeGdH4e4zy4sDe9iC9VLRlEOJTW3Q', '2015-06-21 00:48:19', '2015-06-21 02:44:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `piece_category`
--
ALTER TABLE `piece_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_piece`
--
ALTER TABLE `portfolio_piece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_list`
--
ALTER TABLE `skill_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_slider`
--
ALTER TABLE `skill_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `entity`
--
ALTER TABLE `entity`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `piece_category`
--
ALTER TABLE `piece_category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolio_piece`
--
ALTER TABLE `portfolio_piece`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `skill_list`
--
ALTER TABLE `skill_list`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skill_slider`
--
ALTER TABLE `skill_slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;