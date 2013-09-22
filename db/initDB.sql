/**/
/* 建立数据库，并进入数据库 */

/* 建表 */

use test;

CREATE TABLE pre_users (
	user_id int NOT NULL auto_increment PRIMARY KEY,
	user_name varchar(60) NOT NULL,
	password varchar(60) NOT NULL
);

create table pre_activity (
        id int NOT NULL auto_increment PRIMARY KEY,
        user_id int,
        title varchar(60) NOT NULL,
        content text NOT NULL,
        comment boolean default false
);

insert into pre_activity (title,content) values ('open fouces','new world hello to us,we should hold this opportunity');

create table pre_comment (
        id int NOT NULL auto_increment PRIMARY KEY,
        activity_id int NOT NULL,
        user_id int NOT NULL default '0',
        comment text NOT NULL
);
insert into pre_comment (activity_id,user_id,comment) values ('6','','new world hello to us,we should hold this opportunity');