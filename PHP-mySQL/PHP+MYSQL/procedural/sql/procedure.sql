use evidence;
delimiter /
drop procedure if exists add_manufacturer/
create procedure add_manufacturer(IN name varchar(20),IN contact varchar(40))
begin 
insert into manufacturer(company_name,contact)values(name,contact);
end 
/
delimiter ;