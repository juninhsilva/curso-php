create database aula_php;
use aula_php;
create table produtos(
    id int(11) not null auto_increment,
    descricao varchar(100) default null, 
    primary key(id)
);