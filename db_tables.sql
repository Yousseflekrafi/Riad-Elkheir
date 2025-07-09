-- create database gestion_fathelkheir;

-- use gestion_fathelkheir;

/*
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) not null ,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);

create table feedback(
     id int primary key auto_increment,
     name varchar(30) not null,
     profession varchar(80) not null,
     message longtext,
     created_at timestamp default current_timestamp
);

create table professor(
   id int primary key auto_increment,
   full_name varchar(60) not null,
   email varchar(70) not null,
   phone varchar(20) not null,
   cin varchar(10) not null,
   job varchar(50) not null,
   date_join date ,
   date_left date,
   salary varchar(20) not null
);
create table administration_member(
   id int primary key auto_increment,
   full_name varchar(60) not null,
   email varchar(70) not null,
   phone varchar(20) not null,
   cin varchar(10) not null,
   job varchar(50) not null,
   date_join date ,
   date_left date,
   salary varchar(20) not null
);
create table students (
   id int primary key auto_increment,
   full_name varchar(60) not null,
   date_birth date,
   date_join date ,
   date_left date,
   parent_name varchar(50) not null,
   parent_contact varchar(50) not null,
   parent2_name varchar(50) not null,
   parent2_contact varchar(50) not null,
   amount_payed varchar(20) not null
);

CREATE TABLE images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(255),
    image_data LONGBLOB
);


create table jobApply(
    id int primary key auto_increment,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    cin varchar(20) ,
    phone varchar(20) not null,
    email varchar(50) 
);
