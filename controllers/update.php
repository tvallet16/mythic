<?php


$bdd = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');
    
$id=$_POST['id'];
$name = strtolower($_POST['name']);
$skill = strtolower($_POST['skill']);


$sth = $bdd -> prepare("UPDATE users SET name = :name, description= :skill WHERE id='$id'");
$sth-> bindParam(':name', $name);
$sth-> bindParam(':skill', $skill);
$sth->execute();


header('Location: /users.php');
