CREATE DATABASE db_boxcontrol;

USE db_boxcontrol;

CREATE TABLE tb_user (
    id SMALLINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    code_user INT(10) NOT NULL,
    name VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(50) NOT NULL,
    date_change DATETIME
);

CREATE TABLE tb_log (
	id SMALLINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	email VARCHAR(250) NOT NULL,
	action VARCHAR(250) NOT NULL,
	date_inclusion DATETIME NOT NULL
);

CREATE TABLE tb_titlereceived (
    id SMALLINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codetitle INT(10) NOT NULL,
    description VARCHAR(250) NOT NULL,
    value VARCHAR(250) NOT NULL,
    date_inclusion DATETIME NOT NULL,
    code_user INT(10) NOT NULL
);

CREATE TABLE tb_titlepaid (
    id SMALLINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codetitle INT(10) NOT NULL,
    description VARCHAR(250) NOT NULL,
    value VARCHAR(250) NOT NULL,
    date_inclusion DATETIME NOT NULL,
    code_user INT(10) NOT NULL
);

CREATE TABLE tb_increment (
    id SMALLINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codefunction VARCHAR(2) NOT NULL,
    sequence INT(10) NOT NULL,
    date_change DATETIME
);