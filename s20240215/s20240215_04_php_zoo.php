<?php 
// 加入這個可以用liveserver 允許其他網域近來這裡才打得開
// 而前端的網址目標網只要絕對路徑寫位於主機的哪其他網域才打得開 let url = 'http://localhost/s20240215/s20240215_04_php_zoo.php';
header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://data.taipei/api/v1/dataset/1ad65a1e-3e4b-4749-8d02-9a9bdc120e95?scope=resourceAquire");
//設定AGENT
curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回
$result = curl_exec($ch);
//關閉連線
curl_close($ch);
?>