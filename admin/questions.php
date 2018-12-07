<?php
session_start();
include 'connection.php';
$showall = $pdo->query("SELECT * FROM faq")->fetchAll();
//print_r($showall);
$i = 0;
$id = count($showall);
//echo $id;
while ($i < $id) {
    echo '<tr>';
foreach ($showall[$i] as $field => $key){
echo "<td>$key</td>";
}
echo '</tr>';
$i++;
}
?>