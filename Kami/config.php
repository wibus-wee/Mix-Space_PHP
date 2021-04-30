<?php

/**
 * config.php
 * 存放配置的文件
 * REQUIRED!!
*/

error_reporting(0);
ini_set('display_errors', 0);

//如果需要显示php错误打开这两行注释
//error_reporting(E_ALL);
//ini_set("display_errors", 1);


$ENV_type = 'build'; //debug为开发者模式，build为生产模式
$server = 'http://localhost:2333'; //Server端地址+/api/v1
$admin = 'http://localhost:2233'; //admin端地址
$kami = 'http://localhost:2323'; //kami端地址

//以下全部无需修改
if ($ENV_type == 'build') {
    $api = $server; //无需修改
}else{
    $api = 'http://localhost:2333'; //无需修改
}