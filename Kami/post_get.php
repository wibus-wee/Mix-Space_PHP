<?php
//需要注意的是，POST方法与GET方法有不一样的用法！
//❌此处只能GET，不允许POST！
$name = $_GET['name'];
$slug = $_GET['slug'];
//debug使用
// $name = 'pwa-add';
// $slug = 'code';

$post_get = ''.$api.'"/posts/'.$slug.'/'.$name.'';
$Details = file_get_contents($post_get);
if (empty($Details)) {
    exit('抱歉,文章找不到了😩');
}
$Details_json = json_decode($Details);
//JSON变量
$ok = $Details_json->{'ok'}; //状态码
$_id = $Details_json->{'data'}->{'_id'}; //后台编写时候需要的_id (⚠️必须是主人才能知道&进入)
$copyright = $Details_json->{'data'}->{'copyright'}; //Cpoyright true/false
$allowComment = $Details_json->{'data'}->{'allowComment'}; //是否允许评论 true/false
$commentsIndex = $Details_json->{'data'}->{'commentsIndex'}; //评论数
$hide = $Details_json->{'data'}->{'hide'}; //是否隐藏文章 false/ture
$tags = $Details_json->{'data'}->{'tags'}; //标签 string
$content = $Details_json->{'data'}->{'text'}; //文章内容
$read = $Details_json->{'data'}->{'count'}->{'read'}; //📖阅读数
$like = $Details_json->{'data'}->{'count'}->{'like'}; //👍点赞数
$title = $Details_json->{'data'}->{'title'}; //文章标题
$slug = $Details_json->{'data'}->{'slug'}; //🔗文章链接后缀slug -> $kami = 'http://localhost:2323'
$cateId = $Details_json->{'data'}->{'categoryId'}; //文章分类Id
$cateSlug = $Details_json->{'data'}->{'category'}->{'slug'}; //文章分类缩略名
$cateName = $Details_json->{'data'}->{'category'}->{'name'}; //文章分类名
$created = $Details_json->{'data'}->{'created'}; //文章创建时间
$modified = $Details_json->{'data'}->{'modified'}; //文章最后修改日期
if (empty($content)) {
    exit('主人没有写内容在这里哦😯'); //其实这个一般没什么可能
}
