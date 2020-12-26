drop database if exists BKAcademy;
create database BKAcademy;

use BKAcademy;

create table `User` (
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Phone int,
    Password varchar(255),
    Role varchar(255),
    avatar text,
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
    foreign key (Email) references User(Email) on delete cascade,
    foreign key (Name) references Course(Name) ON delete cascade,
    primary key (Email, Name)
);


create table Comments (
    Id int  AUTO_INCREMENT,
    Email varchar(255),
    Name varchar(255),
    Comment text,
    foreign key (Email) references User(Email) on delete cascade,
    foreign key (Name) references Course(Name) ON delete cascade,
    primary key (Id)
)

-- create table Role (
--     Email varchar(255),
--     Role varchar(255),
--     foreign key (Email) references User(Email) on delete cascade,
--     primary key (Email)
-- );


drop trigger if exists auto_insert;
-- create trigger auto_insert
--     AFTER insert on User
--     for each row
-- insert into Role
-- values (new.Email,"user");


-- Role = "user",
--     Email = User(Email);
