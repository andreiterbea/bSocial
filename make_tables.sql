SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE bsocial_chosen_groups (
  chosen_groups_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  group_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

CREATE TABLE bsocial_comments (
  comment_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  group_id int(11) NOT NULL,
  comment_body text COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

CREATE TABLE bsocial_groups (
  group_id int(11) NOT NULL,
  group_name varchar(200) COLLATE latin1_danish_ci NOT NULL,
  owner_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

CREATE TABLE bsocial_notifications (
  notification_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  notification_body text COLLATE latin1_danish_ci NOT NULL,
  is_read tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

CREATE TABLE bsocial_users (
  id int(11) NOT NULL,
  `name` varchar(200) COLLATE latin1_danish_ci NOT NULL,
  `password` text COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;


ALTER TABLE bsocial_chosen_groups
  ADD PRIMARY KEY (chosen_groups_id);

ALTER TABLE bsocial_comments
  ADD PRIMARY KEY (comment_id);

ALTER TABLE bsocial_groups
  ADD PRIMARY KEY (group_id);

ALTER TABLE bsocial_notifications
  ADD PRIMARY KEY (notification_id);

ALTER TABLE bsocial_users
  ADD PRIMARY KEY (id);


ALTER TABLE bsocial_chosen_groups
  MODIFY chosen_groups_id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE bsocial_comments
  MODIFY comment_id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE bsocial_groups
  MODIFY group_id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE bsocial_notifications
  MODIFY notification_id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE bsocial_users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;