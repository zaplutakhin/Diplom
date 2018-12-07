<?php
session_start();
include 'connection.php';
$showtheme = $pdo->query("SELECT theme FROM themes")->fetchAll();
$i=0;
$countthemes = count($showtheme);
while ($i < $countthemes) {
$theme = $showtheme[$i][theme];
echo "<option value='$theme'>$theme</option>";
$i++;
}
?>