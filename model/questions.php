<?php
session_start();
include 'admin/connection.php';
$showall = $pdo->query("SELECT * FROM faq")->fetchAll();
//print_r($showall);
$i = 0;
$id = count($showall);
//echo $id;
while ($i < $id) {
    $status = $showall[$i][status];
    $questiondate = $showall[$i][date];
    $questiontheme = $showall[$i][theme];
    $questionautor = $showall[$i][autor];
    $question = $showall[$i][question];
    $answer = $showall[$i][answer];
    if ($status != 'Скрыт') {
        echo "<p><table width='100%' border='1'><tr><td>$questiondate</td></tr><tr><td>Тема: <b>$questiontheme</b> Автор: <b>$questionautor</b></td></tr><tr><td width='100%'>$question</td></tr><tr><td width='100%'>$answer</td></tr></table></p>";  
    }  

$i++;
}



?>