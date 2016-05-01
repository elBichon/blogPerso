create database if not exists sitePerso character set utf8 collate utf8_unicode_ci;
use sitePerso;

grant all privileges on sitePerso.* to 'sitePerso_user'@'localhost' identified by 'secret';
