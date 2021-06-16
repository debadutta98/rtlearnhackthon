<?php
include "connect.php";
$url=$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$email=$params['email'];
$sql="DELETE FROM user WHERE email='{$email}'";
if($conn->query($sql)==TRUE)
{
    echo "we miss you";
}
else
{
    echo "User not exit";
}
?>