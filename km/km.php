<?php
$type = $_GET["type"];
if($type == "notice"){
    echo "notice test";
    exit();
}else if($type == "land"){
    echo "��½�ɹ�������ʱ�䣺2020-04-20 10:51:19";
    exit;
}else{
    echo "index";
    exit;
}