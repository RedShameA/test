<?php
$type = $_GET["type"];
if($type == "notice"){
    echo "notice test";
    exit();
}else if($type == "land"){
    echo "登陆成功，到期时间：2020-04-20 10:51:19";
    exit;
}else{
    echo "index";
    exit;
}