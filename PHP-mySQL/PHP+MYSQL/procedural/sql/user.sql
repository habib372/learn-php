drop table if exists user;
create table user(
    id int(20) primary key auto_increment,
    name varchar(20),
    password varchar(50)
);
insert into user(name,password)values('rana',md5('12345'));
insert into user(name,password)values('aziz',md5('12345'));
insert into user(name,password)values('mustakim',md5('12345'));