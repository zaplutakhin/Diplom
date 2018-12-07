<?php
session_start();
include 'connection.php';
include 'functions.php';
checksession();
?>
<html lang="ru">
  <head>
    <title>Админка</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/admin.css" type="text/css"/>
  </head>
<body>
<div class="panel">
<h3>Панель администратора</h3>
<p><a href="../index.php">Перейти на главную страницу</a></p>
<?php echo $_SESSION["username"]?>&nbsp<a href="logout.php">выйти</a>
<hr>
<p><b>Пользователи (всего:<?php countusers()?>):</b></p>
<table>
<p><?php include 'showusers.php';?></p>
</table>
<form action="createuser.php" method="post">
<input required placeholder="имя" type="text" name="username">
<input required placeholder="пароль" type="password" name="password1">
<input required placeholder="подтверждение пароля" type="password" name="password2">
<button>Создать пользователя</button></form><hr>

<form action="createquestion.php" method="post">
<p><b>Создать вопрос:</b></p>
<textarea cols="36" rows="4" maxlight="100" required placeholder="вопрос" type="text" name="newquestion"></textarea>

<textarea cols="36" rows="4" maxlight="100" required placeholder="ответ" type="text" name="newanswer"></textarea>
<p>Тема вопроса:
<select name="selecttheme">
<?php include 'themelist.php'?>
</select>

Статус:
<select name="selectstatus">
<?php include 'statuslist.php'?>
</select>

<button>Создать вопрос</button></p>
</form>
<hr>

<p><h4>Список тем (<?php countthemes()?> ) с вопросами:</h4></p>

<?php include 'showtheme.php'?>

<form action="createtheme.php" method="post">
<input required placeholder="новая тема" type="text" name="newtheme">
<button>Создать тему</button></form>
<hr>

<p><b>Все вопросы (всего <?php countquestions();?>):</b></p>
<table border="1" width="100%">
  <tr>
    <td>
      ID
    </td>
    <td>
      Дата
    </td>
    <td>
      Тема
    </td>
    <td>
      Автор
    </td>
    <td>
      Вопрос
    </td>
    <td>
      Ответ
    </td>
    <td>
      Статус
    </td>
  </tr>
<?php include 'questions.php'?>
</div>
</body>
