<?php
session_start();
include 'admin/connection.php';
include 'admin/functions.php';

?>
<html lang="ru">
  <head>
    <title>FAQ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin/css/admin.css" type="text/css"/>
  </head>
<body>

<div class="panel">
<?php
if (empty($_SESSION["username"])) {
  echo '<a href="admin/login.php">Авторизация</a>';
  } else {
    $username = $_SESSION ["username"];
    echo "$username <a href='admin/logout.php'>выйти</a>";
    echo '<p><a href="admin">Перейти в панель управления</a></p>';
  } 
?>

<hr>
<p><h2>FAQ</h2></p>
<hr>
<form action="model/ask.php" method="POST">
<textarea cols="68" rows="4" maxlight="100" required placeholder="вопрос" type="text" name="ask"></textarea>
<p>Тема вопроса:
<select name="selecttheme">
<?php include 'admin/themelist.php'?>
</select>
<input required type="text" name="guestname" placeholder="ваше имя"></input>
<button>Задать вопрос</button>
</form>

<p><b>Все вопросы (всего <?php countquestions();?>):</b></p>
<?php include 'model/questions.php'?>
</body>
</html>
