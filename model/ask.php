<?php
session_start();
include 'connection.php';
$question = $_POST['ask'];
$theme = $_POST['selecttheme'];
$author = $_POST['guestname'];
$status = 'Ожидает ответа';
$date = date("Y/m/d H/i");

$id = $pdo->query("SELECT id FROM faq WHERE id=(SELECT max(ID) FROM faq)") -> fetchAll();
$newid = $id[0][id] + 1;
$data = $pdo->prepare("INSERT INTO faq(ID,date,theme,autor,question,answer,status) VALUES ('$newid','$date','$theme','$author','$question','','$status')");
$data -> execute();
header('location:../index.php');
?>

