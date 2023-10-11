DROP DATABASE IF EXISTS mydb;
CREATE DATABASE mydb;
USE mydb;
CREATE TABLE players (
  id int not null auto_increment,
  name varchar(255) NOT NULL,
  age int(3) NOT NULL,
  email varchar(255) NOT NULL,
  primary key (id)
);