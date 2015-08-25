dump database laravel_crud;
create database laravel_crud;
use laravel_crud;

create table user (
    id int auto_increment primary key,
    name varchar(255),
    username varchar(255),
    birthday date
);

insert into user 
    (name, username, birthday)
    values
    ('Jmac McGizzle', "Jmacthe6th", '1996-07-24');

insert into user 
    (name, username, birthday)
    values
    ('Low Rida', "Logan", '1995-05-11');

insert into user
    (name, username, birthday)
    values
    ('Fish', "JFizzle", '1994-03-20');

insert into user 
    (name, username, birthday)
    values
    ('Jory', "Jory", '1995-07-24');

insert into user 
    (name, username, birthday)
    values
    ('Yancey', "Smokey C", '1997-08-14');

insert into user
    (name, username, birthday)
    values
    ('Duncan', "KingD", '1995-04-14');
  
insert into user
    (name, username, birthday)
    values
    ('Bryan', "Wood", '1995-10-28');
  