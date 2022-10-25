use test;
drop table if exists courses;
create table courses(
	id int(10) primary key auto_increment,
	course_name varchar(50) not null,
	course_price float,
);
insert into courses(course_name,course_price)values('Web Application Development',15000);
insert into courses(course_name,course_price)values('Asp.net Development',12000);
insert into courses(course_name,course_price)values('Web Design',11000);
insert into courses(course_name,course_price)values('Android App Development',14000);




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



drop table if exists admission;
create table admission(
	id int(10) primary key auto_increment,
	student_id int(10),
	course_id int(10),
	created_at timestamp
);
insert into admission(student_id,course_id)values(1,1);
insert into admission(student_id,course_id)values(2,1);
insert into admission(student_id,course_id)values(1,2);



drop table if exists payment;
create table payment(
	id int(10) primary key auto_increment,
	student_id int(10),
	amount float,
	discount float,
	remark varchar(20),
	created_at timestamp,
	method varchar(20)
);
insert into payment(student_id,amount,discount,remark,method)values(1,10000,5000,'txt31605','Bkash');
insert into payment(student_id,amount,discount,remark,method)values(2,10000,5000,'txt31104','Bkash');
insert into payment(student_id,amount,discount,remark,method)values(1,12000,5000,'txt31275','DBBL');




drop table if exists roles;
create table roles(
	id int(10) primary key auto_increment,
	name varchar(50) not null
);

insert into roles(name)values('Admin');
insert into roles(name)values('Editor');
insert into roles(name)values('Member');



drop table if exists users;
create table users(
	id int(10) primary key auto_increment,
	username varchar(20) not null,
	role_id int(10),
	password varchar(50)


);

insert into users(username,password,role_id)values('Yasin',md5('111111'),1);
insert into users(username,password,role_id)values('Habib',md5('222222'),2);
