<?php
header('Content-Type: text/plain; charset=utf-8');
include_once('cz88.class.php');
    $ip="";
    header('Content-Type: text/plain; charset=utf-8');
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['X-Real-IP'])) {
        $ip=$_SERVER['X-Real-IP'];
    } elseif (!empty($_SERVER['CF-Connecting-IP'])) {
        $ip=$_SERVER['CF-Connecting-IP'];
    } else {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    echo $ip=preg_replace("/^::ffff:/", "", $ip);
    echo "\n";
    echo '纯真IP 数据：';echo convertip($ip);