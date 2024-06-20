<?php
$name = filter_var(trim($_POST['name']));
$surname = filter_var(trim($_POST['surname']));
$login = filter_var(trim($_POST['login']));
$password1 = filter_var(trim($_POST['password']));

$password1 = md5($password1."test");

include './db.php';

$mysql->query("INSERT INTO `user` (`name`, `surname`, `login`, `password`, `role`) VALUES ('$name', '$surname', '$login', '$password1', 1);");
$mysql->close();
header('Location: /');
?>