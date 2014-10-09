create database joinus
character set 'utf8'
collate 'utf8_general_ci';

use joinus

create table submits (
subid int unsigned not null auto_increment primary key,
subtime int unsigned not null default 0,
stunum int unsigned not null default 0,
stuname varchar(20) not null default '',
stumajor varchar(30) not null default '',
stuphone int unsigned not null default 0,
stuemail varchar(30) not null default '',
dptA bool not null default 0,
dptB bool not null default 0,
selfdesc varchar(100) not null default ''
) engine myisam charset utf8;

insert into submits (stunum,stuname) 
values (3130000123,'ÕÅÈı');
