<?php
session_start();
include 'connection.php';
$data = $pdo->query('SELECT username FROM users')->fetchAll(PDO::FETCH_COLUMN); 
$i=0;
$countusers = count($data);
while ($i < $countusers) {
    $user = $data[$i];
    echo "<tr><td>$user</td><td>";
    if ($user != 'admin') {
        echo "<a href='deluser.php?user=$user'>Удалить</a></td><td><a href='changepass.php?user=$user'>Изменить пароль</a></td></tr>";
    }
    $i++;
}
?>