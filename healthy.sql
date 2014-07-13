CREATE TABLE user (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  real_name varchar(50) NOT NULL default '',
  sex ENUM('M', 'F') NOT NULL default 'M',
  cell varchar(20) NOT NULL default '',
  telephone varchar(20) NOT NULL default '',
  address varchar(100) NOT NULL default ''
);