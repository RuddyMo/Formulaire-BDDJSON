<?php

$bdd_name = "bdd.json";

//crée la base de donnée si elle existe pas
if (file_exists($bdd_name)) {
} else {
    fopen($bdd_name, "w");
}

// Vérifiez si l'utilisateur existe déjà dans la base de données
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {
    $jsonData = json_decode(file_get_contents($bdd_name), true);
    $userExists = false;

    // Récupère les données    
    foreach ($jsonData as $user) {
        if ($user['pseudo'] === $_POST['pseudo'] || $user['email'] === $_POST['email']) {
            $userExists = true;
            break;
        }
    }

    // Envoi les données
    if (!$userExists) {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            header('Location: inscription.php');
        } else {
            $data = [];
            $data['email'] = $_POST['email'];
            $data['pseudo'] = $_POST['pseudo'];
            $plainpassword = $_POST['password'];
            $data['password'] = password_hash($plainpassword, PASSWORD_DEFAULT);
            $jsonData[] = $data;
            $jsonData = json_encode($jsonData);
            file_put_contents($bdd_name, $jsonData);
            session_start();
            $_SESSION['register'] = true;
            header('Location: index.php');
        }
    } else {
        session_start();
        $_SESSION['useralreadyexist'] = true;
        header('Location: inscription.php');
    }
}