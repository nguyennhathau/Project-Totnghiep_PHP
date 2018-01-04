<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "zone";
$ErrorMessage = "";
if(!empty($DBport)) $DBhost .= ":$vDBport";
$Conn = mysql_connect($host, $user, $pass);
if(!$Conn) {
    $ErrorMessage = "Không thể kết nối đến Cơ sở dữ liệu!";
} 
else {
    $SelectedDB = mysql_select_db($name, $Conn);  
    if(!$SelectedDB) $ErrorMessage = "Cơ sở dữ liệu '$name' không tồn tại!";   
    mysql_query("SET NAMES 'utf8'");
}
?>