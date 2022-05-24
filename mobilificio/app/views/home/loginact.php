<?php
session_start();
global $data;
$username = $_POST['username'];
$password = $_POST['password'];
$data['username']=$username;
echo($username);
//$postusername = $data['username'];
//$postpassword = $data['password']; //metti isset
$cliente=$data['cliente'];

var_dump($data['cliente']);
if($cliente && password_verify($password, $cliente[5]))
{
    $_SESSION['username'] = $postusername;
    $_SESSION['password'] = $postpassword;
    $_SESSION['cliente_id'] = $cliente[0];
    $path = $data['base_path'] + "/home/index";
    echo("ok");
    //header("location: ".$path);
}
else{
    $path = $data['base_path'] + "/home/login";
    echo("not ok");
    //header("location: ".$path);
}   

?>