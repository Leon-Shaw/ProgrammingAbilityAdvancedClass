<?php
/**
 * Created by PhpStorm.
 * User: LeonShaw
 * Date: 2019/1/4
 * Time: 0:51:05
 */
header('Access-Control-Allow-Headers:Content-Type');
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:http://localhost:63341');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT');
//session_start();
//$_SESSION['resave']=true;
//$_SESSION['saveUninitialized']=false;
//$_SESSION['secret']= '111';
//$_SESSION['name']='sessionid';
$data = json_decode(file_get_contents("php://input"), true);
$name = $data["userName"];
$psd = $data["passWord"];
if ($name == "123" && $psd =="123") {
    setcookie('username',$name);
    $arr = array('message' => "success");
} else {
    $arr = array('message' => "error");
}
echo json_encode($arr);