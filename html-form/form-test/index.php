<?php
  if(isset($_POST['user_name'])){
      $name=$_POST['user_name'];
      $mail=$_POST['user_mail'];
      $msg=$_POST['user_message'];
      $humeur=$_POST['user_humeur'];
      echo 'Je m\'appelle <span style="color:red">' .$name . "</span>", "<br>" ,'Mon adresse mail est ' . $mail . "<br>" . $msg . ' ';
      $current_date = date('Y'); //permet de donner l'année actuelle ('y') indique l'année actuelle.
      $birth_date = $_POST['user_age'];
      $age =$current_date - $birth_date;
      echo '<br> j\'ai ' . $age . ' ans. ';
  };

  
 if ($humeur == 'bien'){
        echo '&#128523';
}else {
        echo '&#128532';
};
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <div>
            <label for="name">Name :</label>
            <input type="text" id="name" name="user_name" value="Veuiller renseignez votre nom içi">
        </div>
        <div>
        <div>
            <label for="age">Date de naissance</label>
            <input type="text" id="age" name="user_age" value="Veuiller renseignez votre année de naissance içi">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail" value="Veuiller renseignez votre e-mail">
        </div>
        <div>
            <label for="humeur">humeur :</label>
            <input type="text" id="humeur" name="user_humeur" value="">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message">Rédiger votre message dans ce champs</textarea>
        </div>
        <div class="button">
        <button type="submit">Envoyer le message</button>
        </div>
    
    </form>



 



</body>
</html>