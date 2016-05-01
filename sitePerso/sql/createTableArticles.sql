drop table if exists textes;

create table articles (
id integer not null primary key auto_increment,
texte text not null,
premierParagraphe text not null,
deuxiemeParagraphe text not null,
troisiemeParagraphe text not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

