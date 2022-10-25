create database if not exists evidence;
use evidence;

drop table if exists manufacturer;
create table manufacturer(
    id int(20) primary key auto_increment,
    company_name varchar(50),
    contact text
);
insert into manufacturer(company_name,contact)values('Pran','Dhaka');
insert into manufacturer(company_name,contact)values('sajjeb','Dhaka');
insert into manufacturer(company_name,contact)values('RFL','Dhaka');
insert into manufacturer(company_name,contact)values('US Software Ltd','Dhaka');
insert into manufacturer(company_name,contact)values('Intellect Software Ltd','Dhaka');




drop table if exists products;
create table products(
    id int(20) primary key auto_increment,
    product_name varchar(30),
    price float,
    manufacturer_id float
);
insert into products(product_name,price,manufacturer_id)values('potato',10,1);
insert into products(product_name,price,manufacturer_id)values('sanitizer',100,2);
insert into products(product_name,price,manufacturer_id)values('juice',20,3);
insert into products(product_name,price,manufacturer_id)values('POS',10000,4);
insert into products(product_name,price,manufacturer_id)values('ERP',20000,3);
insert into products(product_name,price,manufacturer_id)values('juice',20,6);
insert into products(product_name,price,manufacturer_id)values('POS',10000,4);
insert into products(product_name,price,manufacturer_id)values('ERP',20000,8);

        delimiter //
        drop trigger if exists ad_manufacturer//
        create trigger ad_manufacturer after delete on manufacturer
        for each row
        begin 
        delete from products where manufacturer_id=old.id;
        end 
        //
        delimiter ;




drop table if exists users;
create table users(
    id int(10) primary key auto_increment,
    name varchar(20),
    password varchar(50)
);
insert into users(name,password)values('habib',md5('111111'));
insert into users(name,password)values('jahid',md5('111111'));
insert into users(name,password)values('admin',md5('333333'));
insert into users(name,password)values('tamim',md5('444444'));
insert into users(name,password)values('sakib',md5('555555'));

        delimiter //
        drop procedure if exists add_newUser//
        create procedure add_newUser(name varchar(20),password varchar(50))
        begin 
        insert into user(name,password)values(name,md5(password));
        end 
        //
        delimiter ;



drop table if exists courses;
create table courses(
	id int(10) primary key auto_increment,
	course_title varchar(50) not null,
	course_price float,
);
insert into courses(course_title,course_price)values('Web Application Development',15000);
insert into courses(course_title,course_price)values('Asp.net Development',12000);
insert into courses(course_title,course_price)values('Web Design',8000);
insert into courses(course_title,course_price)values('Android App Development',10000);
insert into courses(course_title,course_price)values('C# Development',14000);
insert into courses(course_title,course_price)values('Python Development',12000);



drop table if exists students;
create table students(
	id int(10) primary key auto_increment,
	name varchar(50) not null,
	mobile varchar(13),
	email varchar(15),
	created_at timestamp
);
insert into students(name,mobile,email)values('habib','01721000420','habib@gmail.com');
insert into students(name,mobile,email)values('robi','017212228425','robi@gmail.com');
insert into students(name,mobile,email)values('sakib','017212215487','sakib@gmail.com');