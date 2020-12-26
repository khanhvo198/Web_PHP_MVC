CREATE USER 'BKAcademy'@'localhost' IDENTIFIED BY '123456';

GRANT INSERT, SELECT, DELETE, UPDATE ON BKAcademy.* TO 'BKAcademy'@'localhost';
