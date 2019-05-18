<?php
/*
 * xinger4.0 2019年5月11日
 * config.inc.php  全局配置文件
 * Copyright 2019 高宇恒 <gaoyuheng@19420071.pcs.andaxinzu.club>
 * 
 */
//0.项目开发的欢迎信息（像齐宏宇脸上的豆一样没用）
$welcome='Welcome To Visit ';
$welcome_cn='欢迎访问';

//1.数据库信息
@$xinger=array(//xinger主数据库信息（放@是屏蔽错误）
		server=>'localhost',
		username=>'xinger',
		password=>'eMFvWWslJiaoERw9',
		dbname=>'xinger'
		);
@$user=array(//xinger用户数据库信息（放@是屏蔽错误）
		server=>'localhost',
		username=>'xuser',
		password=>'B5wwUKlj0zizdh6v',
		dbname=>'xuser'
		);
		
//2.网站配置信息
define('Root_Path',dirname(__FILE__));//定义网站运行目录（也称根目录）
define('Website_Name','Xinger Dev. Project');
define('Website_Name_cn','Xinger开发项目');

?>
