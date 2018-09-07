<?php
error_reporting(E_ALL & ~E_NOTICE);
$sname=$_REQUEST["nme"];
$semail=$_REQUEST["eml"];
$snumber=$_REQUEST["num"];
$scourse=$_REQUEST["crs"];
$sdescription=$_REQUEST["dsc"];
echo "Name : $sname, Email : $semail, Number : $snumber, Course : $scourse, Desription : $sdescription";
?>