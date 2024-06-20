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
<?php include("./modules/header.php")?>
    <main>



      <!-- Прописано для личного кб, администрация это 2, прописывали бд. При авторизации админа, он видет 2, то открывает личный кабинет админа -->
      <?php if ($_COOKIE['role'] == 2):?>



        <h2>Личный кабинет администатора</h2>
        <div class="container ">
  <div class="row">
    <div class="col-sm photo">
    <img src="/img/avatarka.jpg" alt="" class="ava">
    </div>
    <div class="col-sm personal_data">
    <p class="data">
        Имя: Админ <br>
        Фамилия: Админ <br>
        Почта: <a href="mailto:admin@mail.ru">admin@mail.ru</a><br>
        Логин: admin <br>
        Пароль: admin <br>
        Роль: Администратор
    </p>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Почта</th>
      <th scope="col">Логин</th>
      <th scope="col">Пароль</th>
      <th scope="col">Роль</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>mark</td>
      <td>1234</td>
      <td>пользователь</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>jacob</td>
      <td>1234</td>
      <td>пользователь</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tom</td>
      <td>Popi</td>
      <td>@tom</td>
      <td>popitom</td>
      <td>1234</td>
      <td>пользователь</td>
    </tr>
  </tbody>
</table>


<!-- Прописано для личного кб ниже личного кб админа мы прописываем личный кб пользователя. Если при авторизации не 2, то он открывает личный кб пользователя -->
<?php else:?>
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
<?php endif;?>


    </main>
<footer><?php include("./modules/footer.php")?></footer>

<script defer src="./script/script.js"></script>
</body>
</html>