DROP DATABASE IF EXISTS Orthopedic_surgeon;
create database Orthopedic_surgeon;
use Orthopedic_surgeon;
create table users(
user_id int(11) auto_increment,
username varchar(250)not null,
password varchar(250)not null,
status varchar(50) default 'Active',
date timestamp,
primary key(user_id)
);


create table patient(
patient_id int(11)not null auto_increment,
first_name varchar(250)not null,
last_name varchar(250)not null,
phone varchar(30) NOT NULL,  
adress varchar(30) NOT NULL,  
state varchar(30) NOT NULL,  
status varchar(50) default 'unbooking',
date timestamp,
primary key(patient_id)
);

-- insert into patient (first_name,last_name, phone,adress,state,date)values ('abdi', 'ali',2525,'hodan', 'bandir','2002-2-2');
-- insert into patient (first_name,last_name, phone,adress,state,date)values ('maxamed', 'muqtaar',2525,'warta nabada', 'bandir','2002-2-2');
-- insert into patient (first_name,last_name, phone,adress,state,date)values ('moha', 'muqtaar',2525,'warta nabada', 'bandir','2002-2-2');


--  select * from patient;

create table specialist(
specialist_id int(11)not null auto_increment,
specialist_name varchar(250)not null,
primary key(specialist_id)

);

-- insert into specialist (name)values ('lafaha');
--  select * from specialist;

create table doctor(
doctor_id int(11)not null auto_increment,
full_Name varchar(250),
specialist_id int,
age int(30)not null,
phone varchar(30),  
adress varchar(30),  
date timestamp,
primary key(doctor_id),
FOREIGN KEY (specialist_id) REFERENCES specialist(specialist_id) on update cascade
);

 -- insert into doctor (full_Name,specialist_id, age,phone,adress,date)values ('abdi',1,21,2111, 'hodan','2002-2-2');
-- select * from doctor;

create table shift(
shift_id int(11)not null auto_increment,
name varchar(30) NOT NULL,  
primary key(shift_id)
);
-- insert into shift (name)values ('subax');
-- insert into shift (name)values ('galab');
--  select * from shift;

create table booking(
booking_id int(11)not null auto_increment,
patient_id int(11)not null,
booking_number varchar(30) NOT NULL,  
doctor_id int(11) NOT NULL, 
amount decimal(9,2), 
shift_id int(11)not null,
info text,
status varchar(50) default 'pending',
booking_date timestamp,
time time,
primary key(booking_id),
FOREIGN KEY (patient_id) REFERENCES patient(patient_id) on update cascade,
FOREIGN KEY (doctor_id) REFERENCES doctor(doctor_id) on update cascade,
FOREIGN KEY (shift_id) REFERENCES shift(shift_id) on update cascade

);
-- insert into booking (patient_id,booking_number,doctor_id, booking_date,time)values (1,'A004', 1,'2002-2-2','23:59:59');
-- select * from booking;
-- select * from patient;



create table information(
info_id int(11)not null auto_increment,
patient_id int(11)not null,
type varchar(50),
date date,
status varchar(50) default 'process',
primary key(info_id),
FOREIGN KEY (patient_id) REFERENCES patient(patient_id) on update cascade
);

create table xray(
xray_id int(11) auto_increment,
patient_id int(11)not null,
date timestamp,
primary key(xray_id),
FOREIGN KEY (patient_id) REFERENCES patient(patient_id) on update cascade
);

create table result(
result_id int(11) auto_increment,
patient_id int(11)not null,
result varchar(250)not null,
date timestamp,
primary key(result_id),
FOREIGN KEY (patient_id) REFERENCES patient(patient_id) on update cascade
);


create table apointment(
apointment_id int(11)not null auto_increment,
patient_id int(11)not null,
description text,
start_date date,
return_date date,
primary key(apointment_id),
FOREIGN KEY (patient_id) REFERENCES patient(patient_id) on update cascade
);
-- insert into apointment (apointment_id,patient_id,doctor_id, shift_id,start_date,return_date,issue_id)values (1,'2', 1, 1,'2002-2-2','2002-2-9',1);
-- select * from apointment;
-- select * from booking;



create table payment_method(
p_method_id int(11)not null auto_increment,
name varchar(30) NOT NULL,  
primary key(p_method_id)
);
drop table account;
create table account(
accoun_id int(11)not null auto_increment,
bank_name varchar(250) NOT NULL,  
holder_name varchar(250) NOT NULL,  
number varchar(30) NOT NULL,  
date date,
primary key(accoun_id)
);

create table payment(
payment_id int(11) auto_increment,
patient_id int(11),
amount decimal(9,2),
accoun_id int,
p_method_id int(11),
status varchar(50) default 'paid',
date date,
primary key(payment_id),
FOREIGN KEY (patient_id) REFERENCES patient(patient_id) on update cascade,
FOREIGN KEY (accoun_id) REFERENCES account(accoun_id) on update cascade,
FOREIGN KEY (p_method_id) REFERENCES payment_method(p_method_id) on update cascade

);
create table employe_type(
em_type_id int(11)not null auto_increment,
name varchar(50),  
primary key(em_type_id)
);

create table employee(
employe_id int(11)not null auto_increment,
full_name varchar(250),  
phone varchar(30),  
adress varchar(30),  
em_type_id int(11),
date date,
primary key(employe_id),
FOREIGN KEY (em_type_id) REFERENCES employe_type(em_type_id) on update cascade
);

create table Bills(
bill_id int(11)not null auto_increment,
doctor_id int(11), 
employe_id int(11),   
amount decimal(9,2),
p_method_id int(11),
date date,
primary key(bill_id),
FOREIGN KEY (doctor_id) REFERENCES doctor(doctor_id) on update cascade,
FOREIGN KEY (p_method_id) REFERENCES payment_method(p_method_id) on update cascade,
FOREIGN KEY (employe_id) REFERENCES employee(employe_id) on update cascade

);