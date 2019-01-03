<?php
/**
 * Created by PhpStorm.
 * User: LeonShaw
 * Date: 2019/1/4
 * Time: 1:56:08
 */
header('Access-Control-Allow-Headers:Content-Type');
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:http://localhost:63341');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT');
setcookie('username','');
$arr = array('message' => "success");
echo json_encode($arr);