create table pre_site (
    sid int NOT NULL auto_increment PRIMARY KEY,
    site_name varchar(60) NOT NULL,
    site_entry varchar(256) NOT NULL,
    p_sid int,
    url_reg varchar(256) NOT NULL,
    url_link varchar(256) NOT NULL,
    url_title varchar(256) NOT NULL,
    url_img varchar(256),
    url_intro varchar(256),
    arti_title_label varchar(60),
    arti_attri_label varchar(60),
    arti_contn_label varchar(60)
)default charset=utf8;

create table pre_article (
    aid int NOT NULL auto_increment PRIMARY KEY,
    attr varchar(60),
    title varchar(100) NOT NULL,
    content text,

    orgin_url varchar(200),
    sid int,
    intro text,
    thumbnail varchar(255),
    comment int,
    appendix varchar(255),
    date int(11)
)default charset=utf8;

create table pre_user (
    uid int NOT NULL auto_increment PRIMARY KEY,
    username varchar(32) NOT NULL,
    password varchar(32) NOT NULL,
    gid int comment '所属组，空为未加入组'
)default charset=utf8;

create table pre_group (
    gid int NOT NULL auto_increment PRIMARY KEY,
    g_name varchar(32) NOT NULL,
    g_type int comment '群组，个人组',
    uid int comment '组主 创建者'
)default charset=utf8;

create table pre_subs (
    su_id int NOT NULL auto_increment PRIMARY KEY,
    uid int,
    type int comment '订阅类型，站点、群组，空则默认为站点类型',
    sid int comment '订阅站点、群组'
)default charset=utf8;

/**我的收藏、喜欢、分享、评论、社交、踩赞*/
create table pre_favor (
    su_id int NOT NULL auto_increment PRIMARY KEY,
    uid int,
    type int comment '收藏类型，站点、群组，空则默认为站点类型',
    aid int comment '订阅站点、群组'
)default charset=utf8;


/**所属组别*/


/**组内容*/
create table pre_issues (
    id int NOT NULL auto_increment PRIMARY KEY,
    gid int comment '组id',
    type int comment '文章类型，抓取转载、原创、转载',
    aid int comment '文章id，站点、群组',
    time int(11) comment '时间日期'
)default charset=utf8;

create table pre_article_platform (
    aid int NOT NULL auto_increment PRIMARY KEY,
    attr varchar(60),
    title varchar(100) NOT NULL,
    content text,

    orgin_url varchar(200) comment '置空',
    sid int comment '所属用户群组',
    type int comment '类型',
    status int comment '文章状态，编辑、保存、发布、审核、通过等',

    intro text,
    thumbnail varchar(255),
    comment int,
    appendix varchar(255),
    date int(11)
)default charset=utf8;

/** 组关注表 */
create table pre_group_follows (
    fid int NOT NULL auto_increment PRIMARY KEY,
    uid int,
    gid int
)default charset=utf8;

select type,a.pid,'' from A a,B b where a.type=1 and a.pid=b.pid
union
select type,a.pid,c.prop from A a,C c where a.type=2 and a.pid=c.pid;

select gid,a.type,a.aid,b.title from pre_issues a,pre_article_platform b where (a.type=0 or a.type=1) and a.aid=b.aid
union
select gid,a.type,a.aid,b.title from pre_issues a,pre_article b where a.type=2 and a.aid=b.aid;

select * from pre_issues a,pre_article_platform b where (a.type=0 or a.type=1) and a.aid=b.aid
union
select *,'','' from pre_issues a,pre_article b where a.type=2 and a.aid=b.aid;


alter table pre_user add column gid int;
alter table pre_subs add type int;
alter table pre_favor add type int;

增加：
pre_group pre_issues pre_article_platform



