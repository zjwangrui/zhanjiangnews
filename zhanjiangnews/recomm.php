<?php
	header('Access-Control-Allow-Origin:*');
	//$_GET['num'];
	//$_GET['page'];
	//echo '请求多少行新闻'.$_GET['num'].'页数'.$_GET['page'];
    $ch = curl_init();
    //$url = 'http://apis.baidu.com/txapi/social/social?num=10&page=1';
	$url = 'http://apis.baidu.com/3023/news/channel?id=recomm';
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