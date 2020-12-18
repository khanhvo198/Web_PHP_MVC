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