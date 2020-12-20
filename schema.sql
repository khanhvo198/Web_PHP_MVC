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
    Name varchar(255),
    Price int unsigned,
    StartDate date,
    EndDate date,
    LearningDay enum('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'),
    StartHour time,
    EndHour time,
    Image varchar(255),
    Description varchar(1000),
    primary key (Name)
);

create table Learn (
    Email varchar(255),
    Name varchar(255),
    foreign key (Email) references User(Email),
    foreign key (Name) references Course(Name),
    primary key (Email, Name)
);