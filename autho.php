<?php
    $login2 = filter_var(trim($_POST['login2']));
    $password2 = filter_var(trim($_POST['password2']));

    $password2 = md5($password2."test");

    include './db.php';
    
    $result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login2' AND `password` = '$password2'");
    $user = $result->fetch_assoc();

//   Прописано для личного кб, убрала 2 строчку из старого кода

    setcookie('id_user', $user['id_user'], time() + 3600, '/');
    setcookie('role', $user['role'], time() + 3600, '/');

    $mysql->close();

    //Прописано для личного кб. Переход на страницу где прописан личный кабинет админа и пользователя
    header('Location: /admin.php');

?>