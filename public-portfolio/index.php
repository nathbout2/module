<?php
    require_once('db-connect.php');
    $sql = 'SELECT * FROM `projet`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($result); */

?>
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
    <div class="cursor">
        <div class="cursor--small"></div>
        <div class="cursor--large"></div>
        <div class="cursor--text">
            <div class="CLICK ON! CLICK ON! CLICK ON!"></div>
        </div>
    </div>
    <header>
        <img src="../public-portfolio/pictures/Plastic-Wrap-Texture-Mockup-2.jpg" class="banner" alt="" srcset="">
        <a href="#"class="logo">Brand.</a>
        <div class="toggle"></div>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">A propos</a></li>
        </ul>
        </nav>
    </header>
<section>
        <h2>Hi__</h2>
        <h2>I'm Nathan,</h2>
        <h2>i'm Web designer,</h2>
        <h2>designer UI/UX.</h2>
    
<?php

foreach ($result as $project) {
?>
    <a href="project-details.php?id=<?= $project['id'] ?>"><?= $project['project_tittle'] ?></a>
    <img src="pictures/<?= $project['project_thumbnail'] ?>" alt="">
<?php
}
?>



<script >
    /*menu*/
    window.addEventListener("scroll",function(){
    const header = document.querySelector('header');
    header.classList.toggle('sticky',window.scrollY > 0);
    });
    const navigation = document.querySelector('nav');
    document.querySelector('.toggle').onclick = function(){
        this.classList.toggle('active');
        navigation.classList.toggle('active');
    }
    /*fin menu*/
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<!-- <script src="circletype.min.js"></script> -->
  <!--circletype.min.js cdn link(you don't need this)-->
  <script src="https://circletype.labwire.ca/dist/circletype.min.js"></script>

  <!--circletype.min.js file path-->
  <script src="circletype.min.js"></script>
    <!--your external js file path-->
    <script src="script.js"></script>
<script src="../public-portfolio/main.js"></script>
</body>
</html>




</body>
</html>