<?php
require('config.php');
$get_url = "{$api}/aggregate/top ";
$Details = file_get_contents($get_url);
//判断是否成功获取
if (empty($Details)) {
    echo "<script>document.body.innerHTML = '<h1>抱歉,电波无法到达🤖</h1>';</script>"; //使用JavaScript进行刷新，清除body中的warning
    //但是建议要exit防止继续
    exit;
}
echo $Details;
$Details_json = json_decode($Details); //解析json
//JSON变量
$ok = $Details_json->{'ok'}; //状态码
// $_id = $Details_json->{'data'}->{'_id'}; 不能这样子获取_id,因为不止一个对象
