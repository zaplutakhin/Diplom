<?php
session_start();  
if (empty($_POST['username'])) {
    $message = 1;
} else {
    include 'connection.php';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
        $statement = $pdo->prepare($query);  
        $statement->execute(  
            array(  
                'username'     =>     $_POST["username"],  
                'password'     =>     $_POST["password"]  
                )  
        );  
            $count = $statement->rowCount();  
            
            if($count > 0)  
                {  
                $_SESSION["username"] = $_POST["username"];
                $message = 1;
                header("location:index.php");  
                }  else  {  
                    $message = 0;  
                }  
    }
?>  
<!DOCTYPE html>  
<html>  
     <head>  
     <link rel="stylesheet" href="css/admin.css" type="text/css"/>    
     </head>  
     <body>  
     <div class="login-page">
        <div class="form">
            <form class="login-form" action="login.php" method="POST">
                <input required type="text" placeholder="имя" name="username"/>
                <input required type="password" placeholder="пароль" name="password"/>
                <p><button>Войти</button></p>
                <?php if ($message != 1) echo 'Неправильный логин или пароль';?>
                <p><a href="../index.php">На главную</a></p>
            </form>
        </div>
     </div>    
     </body>  
</html>


