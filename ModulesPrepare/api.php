<?php


$hand = curl_init();

curl_setopt($hand, CURLOPT_URL, "localhost/ModulesCurl/index.php?action=post");
curl_setopt($hand, CURLOPT_RETURNTRANSFER,1);
$result =curl_exec($hand);
curl_close($hand);

echo $result;
die;
