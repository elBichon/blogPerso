drop table if exists note;

create table note (
id integer not null primary key auto_increment,
article_id integer not null,
likes integer not null,
unlikes integer not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
