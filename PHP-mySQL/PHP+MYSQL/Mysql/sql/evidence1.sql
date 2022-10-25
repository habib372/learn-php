create database if not exists evidence1;
use evidence1;

drop table if exists manufacturer;
create table manufacturer(
    id int(10) primary key auto_increment,
    name varchar(50) not null,
    address varchar(100) not null,
    contact_no varchar(50)
);
insert into manufacturer(name,address,contact_no)values('HP','USA',+3254265412);
insert into manufacturer(name,address,contact_no)values('Samsung','KORIA',+51545234);
insert into manufacturer(name,address,contact_no)values('Samsung','UK',+51545234);
insert into manufacturer(name,address,contact_no)values('HP','USA',+51545234);


drop table if exists product;
create table product(
    id int(10) primary key auto_increment,
    name varchar(50) not null,
    price varchar(5) not null,
    manufacturer_id int(10) 
);
insert into product(name,price,manufacturer_id)values('Monitor','4000',1);
insert into product(name,price,manufacturer_id)values('Monitor','5000',2);
insert into product(name,price,manufacturer_id)values('Speaker','4000',3);
insert into product(name,price,manufacturer_id)values('Keyboard','500',4);



        delimiter //
        drop procedure if exists add_manufacturer//
        create procedure add_manufacturer(name varchar(50),address varchar(100),contact_no varchar(50))
        begin 
        insert into manufacturer(name,address,contact_no)values(name,address,contact_no);
        end 
        //
        delimiter ;


        delimiter //
        drop trigger if exists del_manufacturer//
        create trigger del_manufacturer after delete on manufacturer
        for each row
        begin 
        delete from product where manufacturer_id=old.id;
        end
        //
        delimiter ;

        drop view if exists all_product;
        create view all_product as
        select id,name,price,manufacturer_id from product where price>3000;

