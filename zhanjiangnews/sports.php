<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/3023/news/channel?id=sports&page=1';
    $header = array(
        'apikey: f3c8308837161bfe61381fafd49a0183',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    //var_dump(json_decode($res));
	echo $res;
?>