<?php

$bdd_name = "bdd.json";

//crée la base de donnée si elle existe pas
if (file_exists($bdd_name)) {
} else {
    fopen($bdd_name, "w");
}

// Récupération des données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Chargement de la base de données JSON
$json = file_get_contents($bdd_name);
$datas = json_decode($json, true);

// Vérification de l'existence de l'utilisateur
$exists = false;
foreach ($datas as $data) {
    if ($data['email'] == $email && password_verify($password, $data['password'])) {
        $exists = true;
    }
}

// Redirection vers la page appropriée
if ($exists) {
    session_start();
    $_SESSION['connected'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: dashboard.php');
} else {
    header('Location: index.php');
}
?>
















/*
$json = file_get_contents($bdd_name);
$data = json_decode($json, true);
$found = false;/*

/*if (isset($bdd_name['email'])) {
if ($person['email'] == 'John') {
$found = true;
break;
}
}

if ($found) {
header('Location: connexion.php');
}*/
/*$json = file_get_contents($bdd_name);
$data = json_decode($json, true);
$newData = array("name" => "Chloe", "age" => 19, "city" => "Valence");
$data[] = $newData;
$json = json_encode($data);
file_put_contents($bdd_name, $json);*/

/*$data = array(
array("pseudo" => "Steph", "email" => "test1@gmail.com", "password" => "test1"),
array("pseudo" => "Mark", "email" => "test2@gmail.com", "password" => "test2"),
);
$json = json_encode($data);
file_put_contents($bdd_name, $json);*/


/*echo "<table>";
    echo "<tr>
        <th>username</th>
        <th>email</th>
        <th>password</th>
    </tr>";
    foreach ($data as $row) {
    echo "<tr>";
        echo "<td>" . $row->username . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->password . "</td>";
        echo "</tr>";
    }
    echo "</table>";*/

//$input = fopen($bdd_name, "r");
//var_dump($input);