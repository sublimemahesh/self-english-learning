<?php

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'stu00001' && $password == 123456) {
        header('Location: ../index.php?message=1');
        exit();
    }else{
        header('Location:../login.php?message=2');
    }
}
?> 