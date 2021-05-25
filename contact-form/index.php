<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
        <div>
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="user_sujet">
        </div>

        <div>
            <label for="mail">Votre mail :</label>
            <input type="email" id="mail" name="user_mail" >
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