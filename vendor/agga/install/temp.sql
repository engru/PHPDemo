create table pre_site (
    sid int NOT NULL auto_increment PRIMARY KEY,
    site_name varchar(60) NOT NULL,
    site_entry varchar(256) NOT NULL,
    p_sid int,
    url_reg varchar(256) NOT NULL,
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
    thumbnail varchar(255),
    comment int,
    appendix varchar(255)
)default charset=utf8;
