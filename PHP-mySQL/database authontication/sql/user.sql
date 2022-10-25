use evidence;
drop table if exists user;
create table user(
  id int(20) primary key auto_increment,
  name varchar(30),
  password varchar(50)
);
insert into user(name,password)values('habib','111111');
insert into user(name,password)values('admin','222222');
insert into user(name,password)values('tamim','333333');
