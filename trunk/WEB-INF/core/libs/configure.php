<?php
   
$config = "WEB-INF/config.xml";
$xmlreader = new xmlreader ($config);
$xml = $xmlreader->parse();
$dbsetting = $xml["config"]["#"]["database"][0]["#"];
$dsn = "{$dbsetting['type'][0]['#']}://{$dbsetting['usr'][0]['#']}:{$dbsetting['pass'][0]['#']}@{$dbsetting['host'][0]['#']}/{$dbsetting['name'][0]['#']}";

$db =  NewADOConnection($dsn);
if (!$db) ErrorHandler("Can not connet to {$dbsetting['type'][0]['#']} server",__FILE__,__LINE__);


$_SERVER['Magix_DB']=$db;
//add other configuer



?>
