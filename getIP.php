<?php
header('Content-Type: text/plain; charset=utf-8');
include_once('IP4datx.class.php');
    $ip="";
    header('Content-Type: text/plain; charset=utf-8');
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['X-Real-IP'])) {
        $ip=$_SERVER['X-Real-IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    echo $ip=preg_replace("/^::ffff:/", "", $ip);
    echo "\n";
    echo 'IPIP.net 数据：'.join('',IP::find($ip));