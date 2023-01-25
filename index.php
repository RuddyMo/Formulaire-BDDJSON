<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="css/stylepageconnexion.css" />
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['popup']) && $_SESSION['popup'] == true) {
        echo '<script>alert("Vous n\'êtes pas connecté")</script>';
        unset($_SESSION['popup']);
    }
    if (isset($_SESSION['register']) && $_SESSION['register'] == true) {
        echo '<script>alert("Inscription réussi !")</script>';
        unset($_SESSION['register']);
    }
    ?>
    <!-- Background -->
    <div class="container">
        <div class="bubbles">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
        </div>
    </div>
    <!-- Background -->

    <!-- Main -->
    <div class="container-form" id="container">
        <form action="connexion_traitement.php" method="post">
            <img src="img/entreprise.png" alt="">
            <h1>Bienvenue</h1>
            <input type="email" name="email" placeholder="Email" required="required" autocomplete="off"><br>
            <input type="password" name="password" placeholder="Mot de passe" required="required"
                autocomplete="off"><br>
            <input type="submit" name="submit" value="Connexion" onclick=clearForm()><br>
            <a href="inscription.php">Inscription</a>
        </form>
        <div class="cu cube1"></div>
        <div class="cu cube2"></div>
        <div class="cu cube3"></div>
        <div class="cu cube4"></div>
        <div class="cu cube5"></div>
    </div>
    <!-- Main -->
    <script>
    function clearForm() {
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
    }
    </script>

</body>

</html>