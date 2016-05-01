drop table if exists commentaires;

create table commentaires (
id integer not null primary key auto_increment,
date_envoi datetime not null,
pseudo varchar(40) not null,
titreCommentaires integer not null,
message text not null
)