drop database pets;
create database pets;
use pets;

create table pet (
    id int auto_increment primary key,
    type varchar(255),
    name varchar(255),
    age int,
    gender varchar(255),
    owner varchar(255) 
);

insert into pet
    (type, name, age, gender, owner)
    values
    ('cat', 'Dexter', 3, 'male', 'Tori');

insert into pet
    (type, name, age, gender, owner)
    values
    ('mouse', 'Snow', 1, 'female', 'Bryan');

insert into pet
    (type, name, age, gender, owner)
    values
    ('mouse', 'Dink', 1, 'female', 'Bryan & Tori');

insert into pet
    (type, name, age, gender, owner)
    values
    ('mouse', 'Fray', 1, 'female', 'Tori');

insert into pet
    (type, name, age, gender, owner)
    values
    ('dog', 'Daxter', 5, 'male', 'Bryan');

insert into pet
    (type, name, age, gender, owner)
    values
    ('dog', 'Taz', 13, 'male', 'Bryan');

insert into pet
    (type, name, age, gender, owner)
    values
    ('crab', 'Mr. Crabz', 45, 'male', 'are you feeling it now');

insert into pet
    (type, name, age, gender, owner)
    values
    ('snail', 'Gary', 4, 'male', 'Spongebob');


create table owner (
    id int auto_increment primary key,
    name varchar(255),
    phone varchar(255)
);

insert into owner 
    (name, phone)
    values
    ("Tori", "720-840-5343");

insert into owner 
    (name, phone)
    values
    ("Bryan", "720-840-5343");

insert into owner 
    (name, phone)
    values
    ("Are You feeling it now", "000-867-5309");

insert into owner 
    (name, phone)
    values
    ("Spongebob", "123-456-7890");
    