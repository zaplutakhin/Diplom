<?php
session_start();
include 'connection.php';
$user = $_GET['user'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
if (isset($_POST['password1']) and isset($_POST['password2'])) {
    if ($password1 == $password2) {
        $data = $pdo->query("UPDATE users SET password = '$password1' WHERE username = '$user'");
        $message = 'Пароль успешно изменен';
        } else {
        $message = 'Пароли не совпадают!';
        }
} else $message = '';
?>
<html lang="ru">
  <head>
    <title>Пароль</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/admin.css" type="text/css"/>
  </head>
<body>

<div class="changepass">
<p>Пользователь: <?php echo $user?></p>
<form action="changepass.php?user=<?php echo $user ?>" method="POST">
<p><input required placeholder="новый пароль" type="password" name="password1"><p>
<input required placeholder="подтверждение пароля" type="password" name="password2">
<p><button>Изменить пароль</button></form></p>
<?php
echo $message;
if ($message != 'Пароль успешно изменен') {
    echo '<p><a href="index.php">Отмена</a></p>';
} else {
    echo '<p><a href="index.php">Назад</a></p>';
}
?>
</div>
</body>
</html>