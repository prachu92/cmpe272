<?php

$curl =curl_init();
$url="http://samruddhilandge66.000webhostapp.com/service.php";
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
echo $result;

curl_close($curl);
?>