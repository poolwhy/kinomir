<?php
$host = 'MySQL-8.0';
$user = 'root';
$password = '';
$database = 'test';

$connect = mysqli_connect($host, $user, $password, $database);

if(!$connect){
    die("error");
}
?>