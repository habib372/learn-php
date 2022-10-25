create database if not exists manufacture;
use manufacture;

drop table if exists info;
create table info(
	id int(10) primary key auto_increment,
	name varchar(20) not null,
	contact varchar(50) not null
);
insert into info(name,contact)values('habib','bangladesh');
insert into info(name,contact)values('Robi','Australia');


delimiter //
create procedure add_info(name varchar(20),contact varchar(50))
begin
insert into info(name,contact)values(name,contact);
end//
delimiter ;
