<?php
$username=$_POST['username']; /* Prendre le "name" */
$email=$_POST['email'];
$password=$_POST['password'];
$confirmation=$_POST['confirmation'];

if($password=== $confirmation){
    $password_encrypt= password_hash ($password, PASSWORD_DEFAULT);
    $confirmation_encrypt= password_hash ($confirmation, PASSWORD_DEFAULT);
    echo $username.'<br>' .$email. '<br>'.$password_encrypt.'<br>'. $confirmation_encrypt;
}else{
    echo 'Les mots de passe ne sont pas identiques';
}

