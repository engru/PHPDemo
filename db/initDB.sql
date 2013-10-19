/**/
/* 建立数据库，并进入数据库 */

/* 建表 */

use test;

CREATE TABLE pre_users (
	user_id int NOT NULL auto_increment PRIMARY KEY,
	user_name varchar(60) NOT NULL,
	password varchar(60) NOT NULL
)default charset=utf8;

create table pre_activity (
        id int NOT NULL auto_increment PRIMARY KEY,
        user_id int,
        title varchar(60) NOT NULL,
        content text NOT NULL,
        comment boolean default false
)default charset=utf8;

insert into pre_activity (title,content) values ('open fouces','new world hello to us,we should hold this opportunity');

create table pre_comment (
        id int NOT NULL auto_increment PRIMARY KEY,
        activity_id int NOT NULL,
        user_id int NOT NULL default '0',
        comment text NOT NULL
);
insert into pre_comment (activity_id,user_id,comment) values ('6','','new world hello to us,we should hold this opportunity');


/* 建表——项目
项目编号
项目名
基本信息
*/
create table pre_proj (
        p_id int NOT NULL auto_increment PRIMARY KEY,
        p_name varchar(60) NOT NULL
)default charset=utf8;

create table pre_proj_base (
        base_id int NOT NULL auto_increment PRIMARY KEY,
        p_id int,
        detail text
)default charset=utf8;

create table pre_proj_intro(
        intro_id int NOT NULL auto_increment PRIMARY KEY,
        p_id int,
        uid int,
        title varchar(60) NOT NULL,
        content text NOT NULL,
        comment boolean default false
)default charset=utf8;

create table pre_proj_attach(
        fid int NOT NULL auto_increment PRIMARY KEY,
        p_id int,
        uid int,
        f_name varchar(30) NOT NULL,
        f_type varchar(20) NOT NULL,
        f_size varchar(60),
        f_mkdate varchar(60),
        f_modate varchar(60),
        f_path varchar(60) NOT NULL
)default charset=utf8;

create table pre_proj_info(
        info_id int NOT NULL auto_increment PRIMARY KEY,
        p_id int,
        uid int,
        title varchar(60) NOT NULL,
        content text NOT NULL,
        comment boolean default false
)default charset=utf8;

create table pre_proj_group(
        g_id int NOT NULL auto_increment PRIMARY KEY,
        p_id int,
        g_owner int,
        g_name varchar(60),
        g_intro text

)default charset=utf8;

create table pre_proj_team(
        t_id int NOT NULL auto_increment PRIMARY KEY,
        uid int,
        g_id int,
        t_pos int
)default charset=utf8;

create table pre_proj_sch(
)default charset=utf8;

create table pre_proj_acti(
        a_id int NOT NULL auto_increment PRIMARY KEY,
        p_id int,
        uid int,
        title varchar(60) NOT NULL,
        content text NOT NULL,
        comment boolean default false
)default charset=utf8;



insert into pre_proj (p_name) values ("EX_ROM");
insert into pre_proj (p_name) values ("13055");
insert into pre_proj (p_name) values ("FIND5");


insert into pre_proj_base (p_id,detail) values (1,"外销COLOR ROM系统，基于内销系统");
insert into pre_proj_base (p_id,detail) values (2,"火爆N1的外销版本，超酷旋转摄像头");
insert into pre_proj_base (p_id,detail) values (3,"高端霸气上档次，成功打入全球市场");

insert into pre_proj_intro (p_id,title,content) values (1,"COLOR ROM简介","外销COLOR ROM系统，基于内销系统。===========");
insert into pre_proj_intro (p_id,title,content) values (2,"N1简介","火爆N1的外销版本，超酷旋转摄像头。===========");
insert into pre_proj_intro (p_id,title,content) values (3,"FIND5简介","高端霸气上档次，成功打入全球市场。===========");

insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (1,1,"项目INFO","xls","--","ROM");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (1,1,"版本定义规范","doc","--","ROM");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (1,1,"项目规划迭代进度表","pdf","--","ROM");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (1,1,"外销ROM模块接口人","xls","--","ROM");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (1,1,"代码添加规范","doc","--","ROM");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (1,1,"项目自检表","xls","--","ROM");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (2,1,"外销ROM模块接口人","xls","--","13055");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (2,1,"代码添加规范","doc","--","13055");
insert into pre_proj_attach (p_id,uid,f_name,f_type,f_size,f_path) values (2,1,"项目自检表","xls","--","13055");

insert into pre_proj_info (p_id,uid,title,content) values (1,1,"Ex_ROM项目例会","Hi all:<br>我们ROMapk的存放路径已经有了http://172.16.101.50/svn/oppo_ex/apk/  毛宗剑(毛宗剑) 14:33:52有几个模块没有自动编译出来，请各模块负责人看一下是什么原因<br>livewallpapers.apk  calendar.apk  oppocompass.apk  trafficmonitor.apk");
insert into pre_proj_info (p_id,uid,title,content) values (1,1,"Ex_ROM路径更换通知","外销COLOR ROM系统，基于内销系统。===========");
insert into pre_proj_info (p_id,uid,title,content) values (2,2,"13055项目开工会","3、软件：----吴庆松
   ■ Modem射频联调：最新版的modem有问题，目前还在调试，项目组要求尽早把问题解决；     ------吴义盛
   ■ 云相册需求跟进：在N1项目第一次试用， 定于今天下午澄清云相册需求；     ------颜伟、吴晓雅、吴庆松
   ■ 印尼认证：定于9月6号发布印尼认证软件，计划9月15号送测；
     前期各个项目送测的软件都会遇到一些问题，导致认证周期长，后续要求N1这款机器在软件送测前，QT要做好把关，把每日测试的新问题及时反馈给软件PM确认； ------吴庆松、马俊杰
   ■ 项目增加软件支付功能，会下跟进内销解决方案（了解银行合作要求、如何测试等等）；
");
insert into pre_proj_info (p_id,uid,title,content) values (3,3,"FIND5简介","高端霸气上档次，成功打入全球市场。===========");


insert into pre_proj_group (p_id,g_owner,g_name,g_intro) values (1,1,"ROM团队","");
insert into pre_proj_group (p_id,g_owner,g_name,g_intro) values (2,2,"N1团队","");
insert into pre_proj_group (p_id,g_owner,g_name,g_intro) values (3,3,"FIND5团队","");


insert into pre_proj_team (uid,g_id,t_pos) values (1,1,"1");
insert into pre_proj_team (uid,g_id,t_pos) values (2,1,"2");
insert into pre_proj_team (uid,g_id,t_pos) values (3,1,"3");
insert into pre_proj_team (uid,g_id,t_pos) values (4,1,"4");
insert into pre_proj_team (uid,g_id,t_pos) values (5,1,"4");
insert into pre_proj_team (uid,g_id,t_pos) values (6,1,"4");
insert into pre_proj_team (uid,g_id,t_pos) values (7,1,"4");
insert into pre_proj_team (uid,g_id,t_pos) values (8,1,"4");
insert into pre_proj_team (uid,g_id,t_pos) values (9,1,"4");
insert into pre_proj_team (uid,g_id,t_pos) values (10,1,"4");




insert into pre_proj_acti (p_id,uid,title,content) values (1,1,"2012.10.12周五活动：该吃吃吃、该喝喝喝、该乐乐乐"," 本周主题：吃<br>夫子有言，不会睡觉，就不会工作；不会思考，就不会成长；不会吃喝玩乐，就缺乏创新的动力。<br>
    一周已过，还有N周，把握当下，该吃吃吃、该喝喝喝、该乐乐乐。<br>
    2012.10.12，周五，下午下班后，迅速集合，快速开发，绝不拖泥带水，以最快的速度抢占吃喝玩乐根据地，以农村包围城市，以地铁为主要机动主干道，全力发挥出敏捷开发享乐管理流程。<br>
    快速需求分析：没有不想乐呵的人，直接pass ，进入用户故事<br>
    快速用户故事：我们的故事就是如何吃，何时吃，哪里吃，吃什么？<br>
    基于故事的开发，放在今天的迭代里面，同志们PVT版本下班前就要出来啊。<br>");

insert into pre_proj_acti (p_id,uid,title,content) values (1,1,"创新活动：无尽的悲从心中来"," 话说狄仁杰、元芳搞基甚久，今日狄仁杰良心发现，觉得暴虐元芳过久，良心不安。应该找个机会让元芳放松放松，于是乎，RTX线上直呼，我们都是男淫，我们都有需求，但身体要紧，房事再忙也要懂得休息，本周六我们搞完基后创新，遍游名山大川，美其名曰，创新活动。 随后，歪着嘴角扭向瞌睡眼的元芳：元芳，你怎么看？");

insert into pre_proj_acti (p_id,uid,title,content) values (1,1,"自己动手，丰衣足食","人有三急，吃喝拉撒，万恶淫为首，百急吃为先。为了响应党中央关于全面贯彻落实科学发展观的发展要求，也为了践行可持续发展路线的指导方针，管理部决定充分发挥人的主观能动性，自己动手，丰衣足食。<br>响应环保要求以减少吃急对当今全球能源和资本的消耗，同时锻炼码农网管理团队未来伺候媳妇的伟大能力，并借以展示团队超强的吃喝拉撒的健康体魄。董事会组织部连夜拟制决定，于公元2012年10月21日在深圳市某两室一厅内举行，磨练体脏，执行吃喝，展示能力的代号《God在召唤》的实战演练。届时，欢迎社会各界人士、媒体记者同志莅临观摩，团队会奉上一场饕餮盛宴展示表演。
    <br>此次活动是管理部本周重要工作，也是对团队快速决策、指挥、执行系统化协同能力的考验，而且是团队对外营销推广、提升形象、扩大影响的一次重要练兵，对整个团队有着极其重要意义。团队务必高度重视，在组织保障前提下，各司其职协调统筹，确保活动质量和成功。");

insert into pre_proj_acti (p_id,uid,title,content) values (1,1,"今夜万圣节","只要心中有鬼，天天都是万圣节；吾辈良善，哎哎哎哎。<br>
    奇幻魔方，应有尽有；<br>
    妖狐鬼魅，尽在今夜；<br>
    白天奴隶，晚上魔鬼；<br>
    茹毛饮血，噬尽精元；<br>
    尖齿獠牙，嗑磨天地；<br>
    妖王们，魔君们，鬼子们，怪兄们，今夜，红米饭，南瓜汤，世界之窗，划开天之痕。<br>");

insert into pre_proj_acti (p_id,uid,title,content) values (1,1,"发展规划","  目前虽然我们的网站论坛处于初创阶段，但我们抱着高昂的激情和做伟大产品的信念，一步步将我们的网站推向全世界。<br>
    虽然我们清楚前进道路上的荆棘、了解随后会遇到各种未知的风险；虽然目前我们人力、技术、资金、资源以及管理团队素质等都存在先天不足。但我们坚信，世间的幻想取决于你的心相，而我们都是有思想、有激情、有抱负的，超越常人的有志才俊。未来的道路不属于我们，难道还让他继续沉沦吗！<br><br>
    当今，世界全球化一体化，已经发展到一定程度，也开始遇到发展、资源的瓶颈。世间万物成也萧何败萧何，旧时大厦的独眼已然摇摇欲坠，他们熊市天下的基础已然腐朽；而思想开阔、见识卓越、拘于细节而不拘于小结的我们，当今的天下已经铺就我们的道路，此时，我们还不跳出来，更待何时，这是历史对我们的抉择。<br><br>
    虽然，我们目前已论坛为载体，但要相信这并不是我们最终的目标，我们需要是开创出一种全新的经济模式，有别于现有的货币经济模式，构建只属于天道的人道。<br>");


insert into pre_proj_acti (p_id,uid,title,content) values (2,2,"2012.10.12周五活动：该吃吃吃、该喝喝喝、该乐乐乐"," 本周主题：吃<br>夫子有言，不会睡觉，就不会工作；不会思考，就不会成长；不会吃喝玩乐，就缺乏创新的动力。<br>
    一周已过，还有N周，把握当下，该吃吃吃、该喝喝喝、该乐乐乐。<br>
    2012.10.12，周五，下午下班后，迅速集合，快速开发，绝不拖泥带水，以最快的速度抢占吃喝玩乐根据地，以农村包围城市，以地铁为主要机动主干道，全力发挥出敏捷开发享乐管理流程。<br>
    快速需求分析：没有不想乐呵的人，直接pass ，进入用户故事<br>
    快速用户故事：我们的故事就是如何吃，何时吃，哪里吃，吃什么？<br>
    基于故事的开发，放在今天的迭代里面，同志们PVT版本下班前就要出来啊。<br>");

insert into pre_proj_acti (p_id,uid,title,content) values (2,2,"创新活动：无尽的悲从心中来"," 话说狄仁杰、元芳搞基甚久，今日狄仁杰良心发现，觉得暴虐元芳过久，良心不安。应该找个机会让元芳放松放松，于是乎，RTX线上直呼，我们都是男淫，我们都有需求，但身体要紧，房事再忙也要懂得休息，本周六我们搞完基后创新，遍游名山大川，美其名曰，创新活动。 随后，歪着嘴角扭向瞌睡眼的元芳：元芳，你怎么看？");

insert into pre_proj_acti (p_id,uid,title,content) values (2,2,"自己动手，丰衣足食","人有三急，吃喝拉撒，万恶淫为首，百急吃为先。为了响应党中央关于全面贯彻落实科学发展观的发展要求，也为了践行可持续发展路线的指导方针，管理部决定充分发挥人的主观能动性，自己动手，丰衣足食。<br>响应环保要求以减少吃急对当今全球能源和资本的消耗，同时锻炼码农网管理团队未来伺候媳妇的伟大能力，并借以展示团队超强的吃喝拉撒的健康体魄。董事会组织部连夜拟制决定，于公元2012年10月21日在深圳市某两室一厅内举行，磨练体脏，执行吃喝，展示能力的代号《God在召唤》的实战演练。届时，欢迎社会各界人士、媒体记者同志莅临观摩，团队会奉上一场饕餮盛宴展示表演。
    <br>此次活动是管理部本周重要工作，也是对团队快速决策、指挥、执行系统化协同能力的考验，而且是团队对外营销推广、提升形象、扩大影响的一次重要练兵，对整个团队有着极其重要意义。团队务必高度重视，在组织保障前提下，各司其职协调统筹，确保活动质量和成功。");

insert into pre_proj_acti (p_id,uid,title,content) values (2,2,"今夜万圣节","只要心中有鬼，天天都是万圣节；吾辈良善，哎哎哎哎。<br>
    奇幻魔方，应有尽有；<br>
    妖狐鬼魅，尽在今夜；<br>
    白天奴隶，晚上魔鬼；<br>
    茹毛饮血，噬尽精元；<br>
    尖齿獠牙，嗑磨天地；<br>
    妖王们，魔君们，鬼子们，怪兄们，今夜，红米饭，南瓜汤，世界之窗，划开天之痕。<br>");

insert into pre_proj_acti (p_id,uid,title,content) values (2,2,"发展规划","  目前虽然我们的网站论坛处于初创阶段，但我们抱着高昂的激情和做伟大产品的信念，一步步将我们的网站推向全世界。<br>
    虽然我们清楚前进道路上的荆棘、了解随后会遇到各种未知的风险；虽然目前我们人力、技术、资金、资源以及管理团队素质等都存在先天不足。但我们坚信，世间的幻想取决于你的心相，而我们都是有思想、有激情、有抱负的，超越常人的有志才俊。未来的道路不属于我们，难道还让他继续沉沦吗！<br><br>
    当今，世界全球化一体化，已经发展到一定程度，也开始遇到发展、资源的瓶颈。世间万物成也萧何败萧何，旧时大厦的独眼已然摇摇欲坠，他们熊市天下的基础已然腐朽；而思想开阔、见识卓越、拘于细节而不拘于小结的我们，当今的天下已经铺就我们的道路，此时，我们还不跳出来，更待何时，这是历史对我们的抉择。<br><br>
    虽然，我们目前已论坛为载体，但要相信这并不是我们最终的目标，我们需要是开创出一种全新的经济模式，有别于现有的货币经济模式，构建只属于天道的人道。<br>");
