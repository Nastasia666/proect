<!-- Прописано для личного кб. Кнопка выхода из личного кб и выход на главную страницу -->
<?php 
setcookie('id_user', $user['id_user'], time() - 3600, '/');
setcookie('login', $user['login'], time() - 3600, '/');
setcookie('role', $user['role'], time() - 3600, '/');
header('Location: /');
?>