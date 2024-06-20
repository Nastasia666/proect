<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
<?php include("header.php")?>
    <main>
        <h2>Личный кабинет</h2>
        <div class="container">
  <div class="row">
    <div class="col-sm photo">
    <img src="/img/images.png" alt="Ваша аватарка" class="ava">
    </div>
    <div class="col-sm personal_data">
    <p class="data">
        Имя:  <br>
        Фамилия:  <br>
        Почта: <a href="mailto:"></a><br>
        Логин:  <br>
        Пароль:  <br>
        Роль:
    </p>
    </div>
  </div>
</div>
    </main>
<script defer src="./script/script.js"></script>
<?php include("footer.php")?>
</body>
</html>