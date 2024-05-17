drop database if exists wd_afl2;
CREATE DATABASE wd_afl2;
use wd_afl2;

drop user 'user'@'localhost';
create user 'user'@'localhost' identified by 'user';
grant all privileges on *.* to 'user'@'localhost';
flush privileges;

drop table if exists `profile`;
CREATE TABLE `profile` (
	fullname varchar(255),
    birthday DATE,
    phone VARCHAR(20),
    email VARCHAR(255)
);

insert into `profile` (fullname, birthday, phone, email) values 
('Valencia Melita Christy', '2004-06-05', '+62 8223 4567 204', 'valenciamelitaa@gmail.com');

SELECT * FROM wd_afl2.profile;

drop table kirim;
SELECT * FROM wd_afl2.kirim;