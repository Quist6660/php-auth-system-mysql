<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5 || mb_strlen($login) > 90){
    echo "Error len login";
    exit();
}else if(mb_strlen($name)<3 || mb_strlen($name) > 50){
    echo "Error name len";
    exit();
}else if(mb_strlen($pass)<6 || mb_strlen($pass) > 100){
    echo "Error pass len";
    exit();
}

$pass = md5($pass."woieujfwe34562");

$mysql = new mysqli('localhost','root','root','users-bd');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: /auth');
?>