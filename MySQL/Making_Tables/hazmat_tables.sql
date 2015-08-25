drop database hazmat;
create database hazmat;
use hazmat;

create table client (
    id int auto_increment primary key,
    name varchar(255),
    address varchar(255),
    phone varchar(255),
    email varchar(255)
);

insert into client 
    (name, address, phone, email)
    values
    ("Bob's place", "123 some street", "123-456-7890", "bob@place.net");

insert into client 
    (name, address, phone, email)
    values
    ("Guy's dump", "12 e west street", "222-222-2222", "guy@inthedumps.com");

insert into client 
    (name, address, phone, email)
    values
    ("Chan's chinese", "10 gray street", "111-111-1111", "Chan@chinese.hulu");

insert into client 
    (name, address, phone, email)
    values
    ("Nan's chemicals", "10 street street", "321-654-0987", "This@email.com");

create table chemical (
    id int auto_increment primary key,
    name varchar(255),
    toxicity varchar(255),
    epa_reg varchar(255),
    msds_num varchar(255)
);

insert into chemical 
    (name, toxicity, epa_reg, msds_num)
    values
    ("dieseloxide", "very", "yes", "12wdhjsfbw1342352");

insert into chemical 
    (name, toxicity, epa_reg, msds_num)
    values
    ("sodium Chloride", "no", "maybe", "21746qigvjsh");

insert into chemical 
    (name, toxicity, epa_reg, msds_num)
    values
    ("Nitrous Oxide", "Quite Possibly", "probably", "This is a number");

insert into chemical 
    (name, toxicity, epa_reg, msds_num)
    values
    ("Chemical", "yes", "yes", "98426956");


create table location (
    id int auto_increment primary key,
    client_id int,
    name varchar(255)
);

insert into location 
    (client_id, name)
    values
    (1, "shed");

insert into location 
    (client_id, name) 
    values 
    (2, "barrel of monkeys");

insert into location 
    (client_id, name)
    values
    (3, "gas tank");

insert into location
    (client_id, name)
    values
    (4, "barrel");

create table chem_location (
    id int auto_increment primary key,
    location_id int,
    chemical_id int,
    quantity varchar(255)
);

insert into chem_location
    (location_id, chemical_id, quantity)
    values
    (1, 1, "10 gal");

insert into chem_location
    (location_id, chemical_id, quantity)
    values
    (2, 2, "5 g");

insert into chem_location
    (location_id, chemical_id, quantity)
    values
    (3, 3, "1 mg");

insert into chem_location
    (location_id, chemical_id, quantity)
    values
    (4, 4, "60 liters");