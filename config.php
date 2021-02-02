<?php

/**
 * config.php
 * 存放配置的文件
 * REQUIRED!!
*/


$ENV_type = 'debug'; //debug为开发者模式，build为生产模式
$server = 'http://localhost:2333'; //Server端地址
$admin = 'http://localhost:2233'; //admin端地址
$kami = 'http://localhost:2323'; //kami端地址
if ($ENV_type == 'debug') {
    $api = $server; //无需修改
}else{
    $api = 'http://localhost:2333/api/v1';   //Server端地址+/api/v1
}