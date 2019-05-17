<?php
/*
 * xinger4.0  2019年5月12日，祝天下母亲节日快乐
 * /system/class/class.php  函数入口文件
 * Copyright 2019 高宇恒 <gaoyuheng@19420071.pcs.andaxinzu.club>
 * 
 */
define('Class_Path',dirname(__FILE__));//定义函数目录
include Class_Path.'/../../config.inc.php';//引入配置文件

//引入全部文件夹下的所有文件
$handle = opendir(Class_Path.'/');
$dir = array();
while($file = readdir($handle)){
$newpath=Class_Path."/".$file;
if(is_dir($newpath)) $dir[] = $newpath ;
}
for ($y=0; $y<=count($dir)-3; $y++) {
	$dir=$dir[$y].'/';
	$file = scandir($dir);
	for ($x=2; $x<=count($file)-1; $x++) {
	include $dir.$file[$x];
	} 
} 

?>
