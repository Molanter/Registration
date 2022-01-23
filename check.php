<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 4 || mb_strlen($login) > 25){
        echo "Rewrite your LOGIN";
        exit();
    }else if(mb_strlen($name) < 4 || mb_strlen($name) > 25){
        echo "Rewrite your NAME";
        exit();
    }else if(mb_strlen($pass) < 4 || mb_strlen($pass) > 20){
        echo "Rewrite your PASWORD";
        exit();
    }
    $mysql = new mysqli('localhost', 'edgars', '12345', 'test');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
    
    $mysql->close();
    echo "Hi, Dana.<br/>Your NikName is _danayarmolatiy_<br/> Followers - 1180<br/>Subscribes - 3770"
?>