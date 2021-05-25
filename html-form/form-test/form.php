<?php //indique que je commence à écrire du php

$name=$_POST['user_name'];
$mail=$_POST['user_mail'];
$msg=$_POST['user_message'];

echo 'Je m\'appelle <span style="color:red">' .$name . "</span>", "<br>" ,'Mon adresse mail est ' . $mail . "<br>" . $msg . ' ';
$current_date = date('Y'); //permet de donner l'année actuelle ('y') indique l'année actuelle.
$birth_date = $_POST['user_age'];
$age =$current_date - $birth_date;
echo '<br> j\'ai ' . $age . ' ans. ';

$humeur = 'bien';
if($humeur== 'bien'){
        echo '&#128523';
}else {
        echo '&#128532';
}

/* echo $name . ' ';
echo $mail . ' ';
echo $msg  . ' '; */