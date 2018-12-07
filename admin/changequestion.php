<?php
session_start();
include 'connection.php';

$questionid = $_GET['questionid'];

$questions = $pdo->query("SELECT theme, question, answer, status FROM faq WHERE id = '$questionid'")->fetchAll();

$question = $questions[0][question];
$answer = $questions[0][answer];
$status = $questions[0][status];
$theme = $questions[0][theme];
$newstatus = $_POST['status'];
$newtheme = $_POST['theme'];

if ($newstatus != '') {
    $status = $newstatus;
    $changestatus = $pdo->query("UPDATE faq SET status = '$newstatus' WHERE id = '$questionid'");
    $message = 'Вопрос изменен';
}
if ($newtheme != '') {
    $theme = $newtheme;
    $changetheme = $pdo->query("UPDATE faq SET theme = '$newtheme' WHERE id = '$questionid'");
    $message = 'Вопрос изменен';
}
if (isset($_POST[question])) {
    $question = $_POST[question];
    $changequestion = $pdo->query("UPDATE faq SET question = '$question' WHERE id = '$questionid'");
    $message = 'Вопрос изменен';
}
if (isset($_POST[answer])) {
    $answer = $_POST[answer];
    $changequestion = $pdo->query("UPDATE faq SET answer = '$answer' WHERE id = '$questionid'");
    $message = 'Вопрос изменен';
}
?>

<html lang="ru">
  <head>
    <title>Вопросы</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/admin.css" type="text/css"/>
  </head>
<body>

<div class="panel">
<p>Статус: <b><?php echo $status ?></b><p><p> Тема: <b><?php echo $theme ?></b></p>
<form action="changequestion.php?questionid=<?php echo $questionid?>" method = "POST">
<p><b>Изменить вопрос/ответ :</b></p>
<textarea cols="36" rows="4" maxlight="100"  placeholder="ответ" type="text" name="question"><?php echo $question ?></textarea>
<textarea cols="36" rows="4" maxlight="100"  placeholder="ответ" type="text" name="answer"><?php echo $answer ?></textarea>
<p>Изменить тему на:
<select name="theme">
<option value='' selected>Выбрать</option>
<?php include 'themelist.php'?>
</select>
Изменить статус на:
<select name="status">
<option value='' selected >Выбрать</option>
<?php include 'statuslist.php'?>
</select></p>
<p><button>Изменить</button> </p>
</form>
<a href="index.php">Назад</a>
<?php echo $message ?>

</div>
</body>
</html>