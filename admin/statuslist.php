<?php
session_start();
include 'connection.php';
$showstatus = $pdo->query("SELECT statuses FROM status")->fetchAll();
$i=0;
$countstatus = count($showstatus);
while ($i < $countstatus) {
$status = $showstatus[$i][statuses];
echo "<option value='$status'>$status</option>";
$i++;
}
?>