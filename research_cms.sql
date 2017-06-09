-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 12:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `icon` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `action`, `title`, `description`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Account Created', '{{key-userName-key}} Created an Account.', '<p><li><br />                  <i class="fa fa-user bg-aqua"></i><br />                    <div class="timeline-item"><br />                      <span class="time"><i class="fa fa-clock-o"></i> {{key-created_at-key}} </span><br />                      <h3 class="timeline-header no-border"><a href="{{key-profileLink-key}}">{{key-userName-key}}</a> created account.<br />                      </h3><br />                    </div><br />                  </li></p>', 'envelope', 1, 1496943104, 1496946918),
(6, 'Profile Updated', '{{key-userName-key}} updated profile.', '<p><li><br />                  <i class="fa fa-user bg-aqua"></i><br />                    <div class="timeline-item"><br />                      <span class="time"><i class="fa fa-clock-o"></i> {{key-created_at-key}} </span><br />                      <h3 class="timeline-header no-border"><a href="{{key-profileLink-key}}">{{key-userName-key}}</a> updated profile.<br />                      </h3><br />                    </div><br />                  </li></p>', 'envelope', 1, 1496943104, 1496946918),
(2, 'Uploaded Photos', '{{key-userName-key}} Uploaded Photos', '<p>&lt;li&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;i class=&quot;fa fa-camera bg-purple&quot;&gt;&lt;/i&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-item&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=&quot;time&quot;&gt;&lt;i class=&quot;fa fa-clock-o&quot;&gt;&lt;/i&gt; 2 days ago&lt;/span&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3 class=&quot;timeline-header&quot;&gt;&lt;a href=&quot;#&quot;&gt;Mina Lee&lt;/a&gt; uploaded new photos&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-body&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;img src=&quot;http://placehold.it/150x100&quot; alt=&quot;...&quot; class=&quot;margin&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;img src=&quot;http://placehold.it/150x100&quot; alt=&quot;...&quot; class=&quot;margin&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;img src=&quot;http://placehold.it/150x100&quot; alt=&quot;...&quot; class=&quot;margin&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;img src=&quot;http://placehold.it/150x100&quot; alt=&quot;...&quot; class=&quot;margin&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p>', 'camera', 1, 1496945516, 1496945516),
(3, 'Commented On Your Status', 'Commented On Your Status', '<p>&lt;li&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;i class=&quot;fa fa-comments bg-yellow&quot;&gt;&lt;/i&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-item&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=&quot;time&quot;&gt;&lt;i class=&quot;fa fa-clock-o&quot;&gt;&lt;/i&gt; 27 mins ago&lt;/span&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3 class=&quot;timeline-header&quot;&gt;&lt;a href=&quot;#&quot;&gt;Jay White&lt;/a&gt; commented on your post&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-body&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Take me to your leader!<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Switzerland is small and neutral!<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; We are more like Germany, ambitious and misunderstood!<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-footer&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a class=&quot;btn btn-warning btn-flat btn-xs&quot;&gt;View comment&lt;/a&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p>', 'comment', 1, 1496945590, 1496945590),
(4, 'Accepted Friend Request', '{{key-userName-key}} Accepted Your Friend Request', '<p>&lt;li&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;i class=&quot;fa fa-user bg-aqua&quot;&gt;&lt;/i&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-item&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=&quot;time&quot;&gt;&lt;i class=&quot;fa fa-clock-o&quot;&gt;&lt;/i&gt; 5 mins ago&lt;/span&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3 class=&quot;timeline-header no-border&quot;&gt;&lt;a href=&quot;#&quot;&gt;Sarah Young&lt;/a&gt; accepted your friend request<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/h3&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p>', 'friend', 1, 1496945675, 1496945675),
(5, 'You have an email', '{{key-userName-key}} Sent you an Email', '<p>&lt;li&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;i class=&quot;fa fa-envelope bg-blue&quot;&gt;&lt;/i&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-item&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;span class=&quot;time&quot;&gt;&lt;i class=&quot;fa fa-clock-o&quot;&gt;&lt;/i&gt; 12:05&lt;/span&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3 class=&quot;timeline-header&quot;&gt;&lt;a href=&quot;#&quot;&gt;Support Team&lt;/a&gt; sent you an email&lt;/h3&gt;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-body&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; weebly ning heekya handango imeem plugg dopplr jibjab, movity<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quora plaxo ideeli hulu weebly balihoo...<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;timeline-footer&quot;&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a class=&quot;btn btn-primary btn-xs&quot;&gt;Read more&lt;/a&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a class=&quot;btn btn-danger btn-xs&quot;&gt;Delete&lt;/a&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/li&gt;</p>', 'envelope', 1, 1496945763, 1496945763);

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `directory` varchar(255) NOT NULL DEFAULT 'assets/media/',
  `type` varchar(100) DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `module_name` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `module_id`, `directory`, `type`, `extension`, `module_name`, `title`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 'assets/galleries', 'data:image/jpeg', '.jpeg', 'galleries', 'ain_image-1496910133.jpeg', 1, 1496910133, 1496910133);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_users'),
('app', 'default', '002_create_posts');

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `embed` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `user_id`, `facebook`, `twitter`, `linkedin`, `googleplus`, `skype`, `embed`, `website`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `parameters` text,
  `status` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `action_id`, `parameters`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'a:3:{s:8:"userName";s:19:"Ishwor Prasad Rijal";s:11:"profileLink";s:20:"http://cms/profile/1";s:10:"created_at";i:1496947850;}', 0, NULL, NULL),
(2, 1, 6, 'a:3:{s:8:"userName";s:19:"Ishwor Prasad Rijal";s:11:"profileLink";s:20:"http://cms/profile/1";s:10:"created_at";i:1496947850;}', NULL, 1496947850, 1496947850);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `paypal_email` varchar(100) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `education` text,
  `experience` text,
  `skills` text,
  `background` text,
  `status` int(11) DEFAULT '0' COMMENT '0=>registered, 1=>active',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_id`, `designation`, `street`, `city`, `state`, `country`, `postal_code`, `zip_code`, `paypal_email`, `profile_picture`, `cover_photo`, `education`, `experience`, `skills`, `background`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Developer', 'Kumarigal', 'Chabahil', 'Kathmandu', 'Nepal', '00977', '00977', NULL, 'assets/users/ain_image-1496910133.jpeg', NULL, 'Bachelor in Computer Engineering from National College of Engineering, Talchhikhel, Lalitpur.', 'Sr. Software Developer at Mantraideas Solutions Pvt. Ltd., Shankhamul and Surya Web Solutions Pvt. Ltd. since 26th May 2015.', 'PHP, FuelPHP, CakePHP, Javascript, AJAX, JQuery, Coding, Laravel, CI', 'A Desciple of Kamal Yogi, Sr. Software Developer, Flute Player, Spiritual, Curious, Industrious and a Fast Learner.', NULL, 1496884137, 1496936137);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender` varchar(8) DEFAULT 'Male',
  `password` varchar(255) NOT NULL,
  `group` int(11) DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `middle_name`, `last_name`, `gender`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Ishwor', 'Prasad', 'Rijal', 'Male', 'iretOFwz90i7sftM/7QhH4yVP8uBk91nwcaoLA9Oe44=', 100, 'ishworsws@gmail.com', 1496966565, 'ae6dedf1d997ec1233657dd6362a3f74a69d35e3', 'a:4:{s:10:"first_name";s:0:"";s:11:"middle_name";s:0:"";s:9:"last_name";s:0:"";s:6:"gender";s:4:"Male";}', 1496884137, 1496884137);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
