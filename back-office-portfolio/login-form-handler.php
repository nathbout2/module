<?php

require_once("db-connect.php");
// cherche une entrée dans la base de données (username) qui correspond avec ce que l'utilisateur a renseigné dans le forumlaire.
$sql = 'SELECT id,username,password FROM users WHERE username=:username';
$query = $db->prepare($sql);
$query->execute (array('username'=>$_POST['username']));
$result = $query->fetch();

if(!$result){
    echo 'l\'identifiant est différent';
}else{
    echo 'C\'est ok';
}