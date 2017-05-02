# studyProjects

create a development folder in the config folder, (as default environment is development)
and place a copy of both config.php and database.php taken from either the application\config\local\ folder or the application\config\production\ folder
then adjust the $config['base_url'] = '' to its respective url in config.php
as well as setting up your database info in the database.php

database should include these two tables currently.

db table 
posts

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

db table
categories

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;