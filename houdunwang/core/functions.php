<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2017/7/31
 * Time: 23:00
 */
//创建一个P函数完成一些测试和查看的操作
function p($var){
//    原样输出要查看的内容，容易看清才所对应的数据
	echo "<pre style='background: #CCCCCC'>";
//    打印查看的数据内容
	print_r($var);
	echo "</pre>";
}
//创建一个c函数用来连接数据库的操作
function c($path){
//    将调用函数C时传过来的参数转换为数组，完成引入存在数据库参数的文件的操作，并将对应的参数返回给调用的对象
	$arr=explode('.',$path);
//    引入数据库参数所在的文件，并将文件内容复制给$config，
	$config = include "../system/config/" . $arr[0] . ".php";
//    判断返回的数组对应的键值存不存在，如果存在就直接使用，如果不存在就默认为NULL
	return isset($config[$arr[1]]) ? $config[$arr[1]] : NULL;
}
//封装一个方法，用来实现登录后台的唯一地址跳转
function go($url){
	header("Location:".$url);
	exit;

}



