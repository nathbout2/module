<?php
session_start();

if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projet` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        $sql = 'DELETE FROM `projet` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        /*  header('Location:home.php'); */
        echo 'projet supprimé<br> <a href="home.php"><button>Retour</button></a>';
    } else {
        echo 'id manquant';
    }
} else {
    echo 'identifiez-vous';
}
