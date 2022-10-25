create database if not exists practice;
use practice;

drop table if exists manufactur;
create table manufactur(
    id int(10) primary key auto_increment,
    company_name varchar(20) not null,
    address varchar(30) not null
);
insert into manufactur(company_name,address)values('Apple','USA');
insert into manufactur(company_name,address)values('Amazone','USA');
insert into manufactur(company_name,address)values('HP','UK');
insert into manufactur(company_name,address)values('DEll','DUBAI');
insert into manufactur(company_name,address)values('SAMSUNG','KORIA');


drop table if exists products;
create table products(
    id int(10) primary key auto_increment,
    product_name varchar(20) not null,
    price float,
    manufactur_id int(10) not null
);
insert into products(product_name,price,manufactur_id)values('Computer',120000,1);
insert into products(product_name,price,manufactur_id)values('Monitor',30000,5);
insert into products(product_name,price,manufactur_id)values('Speaker',70000,2);
insert into products(product_name,price,manufactur_id)values('Laptop',70000,3);
insert into products(product_name,price,manufactur_id)values('Monitor',10000,4);
insert into products(product_name,price,manufactur_id)values('Mobile',30000,5);


delimiter //
drop procedure if exists add_manufactur//
create procedure add_manufactur(company_name varchar(20),Address varchar(30))
begin
insert into manufactur(company_name,address)values(company_name,address);
end
//
delimiter ;


delimiter //
drop trigger if exists delmanufactur//
create trigger delmanufactur after delete on manufactur
for each row
begin
delete from products where manufactur_id=old.id;
end
//
delimiter ;



