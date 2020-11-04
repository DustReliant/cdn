<?php

//接收前台传递的参数
$value = $_POST['param1'];

// 提供 vue 通过axios 请求的接口数据
$res = array(
'status'=>200,
'data'=>array(
    'message'=>"hello {$value} ，I am php in Welcome :) " ,
),
);


$send = json_encode($res);


echo $send;