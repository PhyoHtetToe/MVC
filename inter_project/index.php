<?php
$className = "Home";
$methodName = "Index";
$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : "";

$url = explode("/",$url);
if(!empty($url[0])){
    $className = $url[1];
}
if (!empty($url[1])) {
    $methodName = $url[1];
}


echo $methodName;
echo "<br><br><hr><pre>" . print_r($url,true) . "</pre>";