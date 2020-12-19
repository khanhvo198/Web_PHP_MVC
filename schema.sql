drop database if exists BKAcademy;
create database BKAcademy;

use BKAcademy;

create table User (
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Phone int,
    Password varchar(255),
    primary key (Email)
);

create table Course (
    Code varchar(255),
    Name varchar(255),
    Price int unsigned,
    StartDate date,
    EndDate date,
    LearningDay enum('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'),
    StartHour time,
    EndHour time,
    Description varchar(1000),
    primary key (Code)
);

create table Learn (
    Email varchar(255),
    Code varchar(255),
    foreign key (Email) references User(Email),
    foreign key (Code) references Course(Code),
    primary key (Email, Code)
);