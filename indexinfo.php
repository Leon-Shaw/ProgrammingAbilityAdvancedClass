<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2019/1/4
 * Time: 0:46:58
 */
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:http://localhost:63341');
header('Access-Control-Allow-Credentials: true');
$username=$_COOKIE['username'];
$arr = array('userName' => $username);
$arr += array('WeatherInfo' => "<iframe scrolling='no' src='https://tianqiapi.com/api.php?style=tp&skin=durian&city=温州' frameborder='0' width='160' height='260' allowtransparency='true'></iframe>");
echo json_encode($arr);