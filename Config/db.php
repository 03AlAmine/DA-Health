<?php
$servername = "localhost";
$username = "DA-HEALTH";
$password = "2468";
$dbname = "register";
$message = ""; // Initialisez la variable $message avec une chaîne vide

try {
    // Connexion au serveur MySQL
    $bdd = new PDO("mysql:host=$servername", $username, $password);
    // Définir le mode d'erreur PDO sur Exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données si elle n'existe pas
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $bdd->exec($sql);

    // Connexion à la base de données nouvellement créée
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la table si elle n'existe pas
    $table = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50),
        email VARCHAR(50),
        mdp VARCHAR(50),
        confirm VARCHAR(50),
        date DATE
    )";
    $bdd->exec($table);

    // $message = "Database and table created and connected successfully.";
} catch (PDOException $e) {
    $message = "Database connection error: " . $e->getMessage();
}

//echo $message;
