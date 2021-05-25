<?php
if (isset($_POST['user_mail'])&&!empty($_POST['user_mail']))/* permet de ne pas envoyer de message si tout les champs ne sont pas remplis */  {
    $sujet=$_POST['user_sujet'];
    $mail=$_POST['user_mail'];
    $msg=$_POST['user_message'];

    $recipient = "wchazal26@gmail.com";
    $subject = "Formulaire";

    $message=$mail.'<br>'.$msg;
    mail($recipient, $sujet, $message);

    echo 'Votre message a bien été transmis. Nous vous contacterons sous peu <br>';
    echo '<button> <a href="index.php">retour</a> </button>';
} else{
    echo 'Votre message n\'a pas été envoyé <br>';
    echo '<button> <a href="index.php">retour</a> </button>';
} 


