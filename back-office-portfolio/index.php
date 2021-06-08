<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
   <link rel="stylesheet" href="style.css"> 
</head>
<body>
    

<a href="register-form.php" class="btn"><span>S'inscrire</span></a>
<a href="login-form.php" class="btn"><span>Se connecter</span></a>


<script>

const btn = document.getElementsByClassName('btn');

    btn[0].onmousemove = function(e){
        const x = e.pageX - btn[0].offsetLeft;
        const y = e.pageY - btn[0].offsetTop;
        btn[0].style.setProperty('--x', x +'px');
        btn[0].style.setProperty('--y', y +'px');
    }

    btn[1].onmousemove = function(e){
        const x = e.pageX - btn[1].offsetLeft;
        const y = e.pageY - btn[1].offsetTop;

        btn[1].style.setProperty('--x', x +'px');
        btn[1].style.setProperty('--y', y +'px');
    }


</script>

</body>
</html>

