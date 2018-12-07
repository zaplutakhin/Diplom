<?php
session_start();
include 'connection.php';
$showtheme = $pdo->query("SELECT theme FROM themes")->fetchAll();
$i=0;
$count = count($showtheme);
while ($i < $count) {
    $currenttheme = $showtheme[$i][theme];
    $showquestions = $pdo->query("SELECT ID,question, status FROM faq WHERE theme='$currenttheme'")->fetchAll(); 
    $q=count($showquestions);
    echo "<p><details><summary>$currenttheme (вопросов: $q)</summary><table>";
    $w=0;
    while ($w < $q) {
        $question = $showquestions[$w][question];
        $status = $showquestions[$w][status];
        $id = $showquestions[$w][ID];
        echo "<tr><td width='200px'>$question</td><td width='200px'>$status</td><td width='200px'><a href='changequestion.php?questionid=$id'>Изменить/ответить</a></td>
        <td width='200px'><a href='delquestion.php?questionid=$id''>Удалить</a></td></tr>";
        $w++;
    }
    echo "</table></details></p>"; 
    $i++;
}
?>
