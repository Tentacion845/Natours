<?php
require "index.php";
require "bdd.php";

// Vérification des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données
    $name = $_POST["name"];
    $email = $_POST["email"];
    $radio = $_POST["tour"];

    var_dump($radio);


    // var_dump($radioSmall);
    // var_dump($radioLarge);

    // Validation du champ name
    if (empty($name)) {
        $erreur_name = "Le champ name est requis";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $erreur_name = "Seuls les lettres et les espaces sont autorisés";
    }


    // Validation du champ email
    if (empty($email)) {
        $erreur_email = "Le champ email est requis";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur_email = "L'adresse email n'est pas valide";
    }
}


switch ($radio) {
    case "large":
        $radio = 1;
        break;
    case "small":
        $radio = 0;
        break;
    default:
        echo "Veuillez selectionner un type de tour";
}


if (empty($erreur_name) && empty($erreur_email) && empty($erreur_radio)) {

    $sql = "INSERT INTO natours (name, email, tour_type) VALUES ('$name', '$email', '$radio')";

    mysqli_query($connexion, $sql);

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);

    exit();
}
