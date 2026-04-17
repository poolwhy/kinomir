<?php
require_once "connect.php";

$loginvx = $_POST["loginvx"];
$passwordvx = $_POST["passwordvx"];
$sqls = "SELECT * FROM testregist WHERE login ='$loginvx' and password ='$passwordvx'";
$result = $connect->query($sqls);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header("Location: profile.php");
    }
} else {
    echo "неверный логин или пароль";
}
?>