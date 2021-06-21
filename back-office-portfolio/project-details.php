<?php
session_start();

if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projet` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
    } else {
        echo 'id manquant';
    }
} else {
    echo 'identifiez-vous';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1><?= $result['project_tittle'] ?></h1>
    
    <?= $result['project_context'] ?>
    <?= $result['project_specs'] ?>
    <img src="pictures/<?= $result['project_picture'] ?>" alt="">


    <a href="project-delete.php?id=<?= $result['id'] ?>">Supprimer <?= $result['project_tittle'] ?></a>
    <a href="project-edit.php?id=<?= $result['id'] ?>">Modifier <?= $result['project_tittle'] ?></a>
    
<a href="home.php">retour</a>
</body>

</html>