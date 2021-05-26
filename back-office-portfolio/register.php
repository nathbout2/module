<?php
$servername ='localhost';
$dbname ='back-office';
$username ='root';
$password ='';
try{
    $db= new PDO("mysql:host=$servername; db=$dbname",$username;$password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Success'
} catch (PDOException $e){
    echo 'Error Connection : ' .$e->getMessage();
}

$username=$_POST['username']; /* Prendre le "name" */
$email=$_POST['email'];
$password=$_POST['password'];
$confirmation=$_POST['confirmation'];

if($password=== $confirmation){
    echo $username.'<br>' .$email. '<br>'.$password.'<br>'. $confirmation;
}else{
    echo 'Les mots de passe ne sont pas identiques';
}