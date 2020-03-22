<?php

// permet de ce connecter à la base de donner
$bdd = new PDO('mysql:host=localhost; dbname=mythic;charset=utf8', 'root', '0000');

// prépare et exectue la requette sql 
$sth = $bdd -> prepare("SELECT * FROM users ");
$sth->execute();

// permet de recupe les infos pour les mettre dans un tableau
$users = $sth->fetchall(PDO::FETCH_ASSOC);


?>