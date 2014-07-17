CREATE DATABASE healthy CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';
use healthy;
CREATE TABLE user (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  real_name varchar(50) NOT NULL default '',
  sex ENUM('M', 'F') NOT NULL default 'M',
  cell varchar(20) NOT NULL default '',
  telephone varchar(20) NOT NULL default '',
  address varchar(100) NOT NULL default '',
  height varchar(10) NOT NULL default '0',
  weight varchar(10) NOT NULL default '0',
  disease_list varchar(100) NOT NULL default ''
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE disease (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(50) NOT NULL default '',
	operation ENUM('Y', 'N') NOT NULL default 'N'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE pressure (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_id int NOT NULL,
	systolic varchar(10) NOT NULL default '0',
	diastolic varchar(10) NOT NULL default '0',
	heart_rate varchar(10) NOT NULL default '0',
	time TIMESTAMP NOT NULL default CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;