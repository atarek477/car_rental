create database Car_Rental_System;
use Car_Rental_System;

create table car(
    `name` varchar(50),
     model varchar(50),
     year  date,
     plate_id varchar(10),
     vin   varchar(20) primary key,
     color varchar(10),
     mileage integer ,
     city varchar(15),
     country varchar(15),
     pricePerDay decimal(5, 2),
     img_url varchar(50)
);

create table reservation(
    reservation_id integer auto_increment,
    vin varchar(20),
    Pickup_date date,
    Return_date date,
    customer_id integer,
    rental_office_id integer,
    total_payment float,
    primary key(reservation_id,Pickup_date,return_date, vin),
    FOREIGN KEY (vin) REFERENCES car(vin)
);

create table car_status(
   vin varchar(20),
   Pickup_date date,
   Return_date date,
   reservation_id integer,
  primary key(vin,Pickup_date,Return_date)
);

create table customer(
    fname varchar(10),
    lname varchar(10),
    customer_id integer primary key auto_increment,
    email varchar(20),
    `password` varchar(30),
    sex varchar(1),
    driver_license varchar(20),
    phonenumber varchar(20),
    city varchar(15),
    country varchar(15)
);



CREATE TABLE rental_office_location (
    rental_office_id int PRIMARY key auto_increment,
    street_address varchar(50),
    city varchar(15)
);


CREATE TABLE employee (
    employee_id int PRIMARY key auto_increment,
    employee_fname varchar(20) ,
    employee_lname varchar(20) ,
    email varchar(50),
    `password` varchar(50) ,
    title varchar(10) ,
    ssn varchar(20),
    sex varchar(1)
);



CREATE TABLE works_in (
    employee_id int ,
    rental_office_id int ,
    PRIMARY key (employee_id,rental_office_id)
);

CREATE TABLE review(
    vin varchar(20),
    customer_id int ,
    comment varchar(100),
    rate int,
    PRIMARY key(vin, customer_id)
);

ALTER TABLE car_status ADD FOREIGN KEY (vin)
REFERENCES car(vin) on delete restrict on update restrict;

ALTER TABLE car_status ADD FOREIGN KEY (reservation_id,Pickup_date,Return_date)
REFERENCES reservation(reservation_id,Pickup_date,Return_date) on delete restrict on update restrict;

ALTER TABLE reservation ADD FOREIGN KEY (customer_id)
REFERENCES customer(customer_id) on delete restrict on update restrict;

ALTER TABLE reservation ADD FOREIGN KEY (rental_office_id)
REFERENCES rental_office_location(rental_office_id) on delete restrict on update restrict;

ALTER TABLE works_in ADD FOREIGN KEY (employee_id)
REFERENCES employee(employee_id) on delete restrict on update restrict;

ALTER TABLE works_in ADD FOREIGN KEY (rental_office_id)
REFERENCES rental_office_location(rental_office_id) on delete restrict on update restrict;

ALTER TABLE review ADD FOREIGN KEY (vin)
REFERENCES car(vin) on delete restrict on update restrict;

ALTER TABLE review ADD FOREIGN KEY (customer_id)
REFERENCES customer(customer_id) on delete restrict on update restrict;
