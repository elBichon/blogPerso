drop table if exists liens;

create table liens (
id integer not null primary key auto_increment,
nomLien varchar(40) not null,
categories varchar(40) not null,
url text not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
