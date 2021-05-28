<?php
require_once('db-connect.php');

$username=$_POST['username']; /* Prendre le "name" */
$email=$_POST['email'];
$password=$_POST['password'];
$confirmation=$_POST['confirmation'];

if($password=== $confirmation){
    $password_encrypt= password_hash ($password, PASSWORD_DEFAULT);
//faire requete SQL 
    $sql ="INSERT INTO users(username,email,password) VALUES(:username, :email, :password)";
    $query = $db ->prepare($sql);
    $query->bindValue(':username', $username, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':password', $password_encrypt, PDO::PARAM_STR);
    $query->execute();
    echo 'Sucess';
    
}else{
    echo 'Les mots de passe ne sont pas identiques';
}

