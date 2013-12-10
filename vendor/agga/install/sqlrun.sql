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
    appendix varchar(255)
)default charset=utf8;

create table pre_user (
    uid int NOT NULL auto_increment PRIMARY KEY,
    username varchar(32) NOT NULL,
    password varchar(32) NOT NULL,
)default charset=utf8;

//我的收藏、喜欢、分享、评论、社交、踩赞
//所属组别
