<?php
    require_once('db-connect.php');
    $sql = 'SELECT * FROM `projet`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($result); */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>JaimeJ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

</div>
        <div class="container">
            <div class="block block-1">
            <a href="works.php">
                <h1>My works</h1>
                </a>
            </div>
            <div class="block block-2">
            <ul><a href="about-me.php"><h1>About me</h1></a></ul>
            </div>
            <div class="block block-3">
                <ul><a href="contact.php"><h1>Contact</h1></a></ul>
            </div>
        </div>
        <div class="cursor"></div>
        <script src="main.js"></script>
        <script>
            var blocks = document.getElementsByClassName("block");
            var container = document.getElementsByClassName("container");
            var hs = new HorizontalScroll.default({
                blocks: blocks,
                container: container,
                isAnimated: true,
                springEffect: 0.8,
            });
            const cursor =document.querySelector('.cursor');
            document.addEventListener('mousemove', (e)=>{
                cursor.style.left = e.pageX +'px';
                cursor.style.top =e.pageY +'px';
            })

        </script>
    </body>
</html>
