CREATE TABLE `training` (
  `training_id` int(4) NOT NULL AUTO_INCREMENT,
  `status` int NOT NULL DEFAULT 1, -- 1 pending 2 accepted 0 canceled
  `trainer_note` text DEFAULT NULL,

  `trainer_user_id` int(4) DEFAULT NULL,
  `customer_user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (training_id)
);

CREATE TABLE `appeal` (
  `appeal_id` int(4) NOT NULL AUTO_INCREMENT,
  `appeal_type` int(40) DEFAULT NULL,
  `appeal_detail` varchar(255) DEFAULT NULL,
  `appeal_status` tinyint(1) DEFAULT NULL,

  `reporter_user_id` int(4) DEFAULT NULL,
  `reported_user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (appeal_id)
);

CREATE TABLE `coaching` (
  `coaching_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL,
  `practicerecord_id` int(4) NOT NULL,
  `effectrecord_id` int(4) NOT NULL,
  `payment_id` int(4) NOT NULL,
  `coaching_datetime` date DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (coaching_id)
);

CREATE TABLE `comment` (
  `comment_id` int(4) NOT NULL AUTO_INCREMENT,
  `comment_type` varchar(40) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `comment_datetime` date DEFAULT NULL,
  
  `comment_user_id` int(4) DEFAULT NULL,
  `trainer_user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (comment_id)
);

CREATE TABLE `post` (
  `post_id` int(4) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (post_id)
);

CREATE TABLE `course` (
  `course_id` int(4) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `course_datetime` date DEFAULT NULL,
  `img_path` varchar(100) NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  
  PRIMARY KEY (course_id)
);

CREATE TABLE `practicerecord` (
  `practicerecord_id` int(4) NOT NULL AUTO_INCREMENT,
  `practicerecord_name` varchar(50) DEFAULT NULL,
  `practicerecord_detail` varchar(255) DEFAULT NULL,
  `effect` varchar(255) DEFAULT NULL,
  `weight` varchar(3) DEFAULT NULL,
  `height` varchar(3) DEFAULT NULL,
  `practiced_at` varchar(255) DEFAULT NULL,
  
  `training_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (practicerecord_id)
);

CREATE TABLE `linkvideo` (
  `linkvideo_id` int(4) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(30) NOT NULL,
  `video_detail` varchar(255) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (linkvideo_id)
);

CREATE TABLE `nutrition` (
  `nutrition_id` int(4) NOT NULL AUTO_INCREMENT,
  `nutrition_detail` text DEFAULT NULL,

  `training_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (nutrition_id)
);

CREATE TABLE `photo` (
  `photo_id` int(4) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(30) DEFAULT NULL,
  `location_detail` varchar(255) DEFAULT NULL,
  `photo_quote` varchar(255) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (photo_id)
);

CREATE TABLE `posture` (
  `posture_id` int(4) NOT NULL AUTO_INCREMENT,
  `posture_name` varchar(30) DEFAULT NULL,
  `posture_detail` varchar(255) DEFAULT NULL,
  `posture_quote` varchar(255) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (posture_id)
);

CREATE TABLE `recommend` (
  `recommend_id` int(4) NOT NULL AUTO_INCREMENT,
  `posture_id` int(4) DEFAULT NULL,
  `photo_id` int(4) DEFAULT NULL,
  `linkvideo_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (recommend_id)
);

CREATE TABLE `tabletraining` (
  `tabletraining_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  
  `training_id` int(4) DEFAULT NULL,

  `meeting_at` datetime DEFAULT NULL,
  `ending_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (tabletraining_id)
);

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `status` int NOT NULL DEFAULT 1, -- 1 active 0 banned
  `user_name` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `weight` varchar(3) DEFAULT NULL,
  `height` varchar(3) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `facebook_id` varchar(20) DEFAULT NULL,
  `line_id` varchar(20) DEFAULT NULL,
  `payment_detail` text DEFAULT NULL,
  `paypal_email` varchar(100) DEFAULT NULL,
  `user_type` varchar(10) NOT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (user_id)
);

CREATE TABLE `payment` (
  `payment_id` int(4) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(20),
  `status` int DEFAULT 1, -- 1 pending, 2 replied, 3 completed, 0 canceled
  `amount` decimal(15, 2) DEFAULT 0,
  `trainer_note` text DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `customer_note` text DEFAULT NULL,

  `trainer_user_id` int(4) DEFAULT NULL,
  `customer_user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (payment_id)
);

INSERT INTO `user` (`user_id`, `user_name`, `password`, `id_card`, `address`, `birthday`, `email`, `phone_number`, `weight`, `height`, `facebook_id`, `line_id`, `user_type`) VALUES
  (2, 'admin', '1234', NULL, NULL, NULL, 'kietzaza@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ADMIN'),
  (3, 'user', '1234', NULL, NULL, NULL, 'tangk1995@gmail.com', NULL, NULL, NULL, NULL, NULL, 'USER'),
  (4, 'kietzaza', '1234', NULL, NULL, NULL, 'tangk1995@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ADMIN'),
  (5, 'trainer', '1234', NULL, NULL, NULL, 'asdasd@asd.com', NULL, NULL, NULL, NULL, NULL, 'TRAINER');

INSERT INTO `posture` (`posture_id`, `posture_name`, `posture_detail`, `posture_quote`) VALUES
  (1, 'eiei', 'eieiei', 'eieiei'),
  (2, 'Squat', '??????????????????????????????????????????????', ''),
  (3, '???????', '???????51??', 'google');
