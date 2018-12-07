<?php
session_start();
include 'connection.php';

function countthemes() {
    include 'connection.php';
    $query = $pdo->query("SELECT theme FROM themes");
    $countthemes = $query->rowCount();
    echo $countthemes;
}

function countquestions() {
    include 'connection.php';
    $query = $pdo->query("SELECT question FROM faq");
    $countquestions = $query->rowCount();
    echo $countquestions;
}

function countusers() {
    include 'connection.php';
    $query = $pdo->query("SELECT username FROM users");
    $countusers = $query->rowCount();
    echo $countusers;
}

function checksession() { 
    if(!isset($_SESSION['username'])) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');
    exit('<h1>403 Forbidden</h1><p>Перейти к <a href="login.php">форме авторизации</a></p>');
    }
}