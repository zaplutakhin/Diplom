<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$newuser = $pdo->query("SELECT username FROM users") -> fetchAll();
foreach ($newuser as $user) {
    //print_r($user[username]); exit;
    if ($user[username] == $_POST['username']) {
    echo'Пользователь с таким именем уже существует!<p><a href="index.php">Назад</a></p>';
    exit;
    }
} 
if ($password1 == $password2) {
    $newuser = $pdo->query("INSERT INTO users(username,password) VALUES('$username','$password1')");
    header("location:index.php");
}
else {
   echo'Пароли не совпадают!<p><a href="index.php">Назад</a></p>';
}
?>