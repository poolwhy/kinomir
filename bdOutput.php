<?php
require_once "connect.php";

$login = $_POST["login"];
$password = $_POST["password"];
$pochta = $_POST["pochta"];
$sql = "INSERT INTO testregist (login, password, pochta) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($connect, $sql);
$stmt->bind_param("sss", $login, $password, $pochta);
$stmt->execute();
header("Location: profile.php");
?>