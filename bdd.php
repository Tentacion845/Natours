<?php

// Information de connexion à la base de données
$host = "localhost"; // adresse du serveur de base de données
$user = "root"; // nom d'utilisateur de la base de données
$password = ""; // mot de passe de la base de données
$database = "natours"; // nom de la base de données

// Connexion à la base de données
$connexion = mysqli_connect($host, $user, $password, $database);

// Vérification de la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// echo "Connexion réussie !";
