# studyProjects

create a development folder in the config folder, (as default environment is development)
and place a copy of both config.php and database.php taken from either the application\config\local\ folder or the application\config\production\ folder
then adjust the $config['base_url'] = '' to its respective url in config.php
as well as setting up your database info in the database.php

If you get an error regarding session, please change line  352 of your config.php file to say:
$config['sess_save_path'] = sys_get_temp_dir();
instead of
$config['sess_save_path'] = NULL;

database should include these tables currently.

Tables in the database as of 28-5-2017


#db table answers

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` varchar(2000) NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#db table questions

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `subsection_id` int(11) NOT NULL,
  `question_text` varchar(2000) NOT NULL,
  `question_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#db table question_types

CREATE TABLE `question_types` (
  `question_type_id` int(11) NOT NULL,
  `question_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#db table tests

CREATE TABLE `tests` (
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#db table test_subsection

CREATE TABLE `test_subsection` (
  `test_subsection_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `subsection_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#db table users

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;