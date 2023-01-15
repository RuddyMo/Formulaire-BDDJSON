<?php
session_start();
if ($_SESSION['connected'] != true) {
    $_SESSION['popup'] = true;
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="css/styledashboard.css">
</head>

<body>
    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
                <p>Connecté en tant que <?php
                                        echo ($_SESSION['email']);
                                        ?></p>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined">account_circle</span>
            </div>
        </header>
        <!-- Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <img class="sidebar-logo" src="img/entreprise.png" alt="logo">
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="dashboard.php">
                        <span class="material-icons-outlined">dashboard</span> Dashboard
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="page1.php">
                        <span class="material-icons-outlined">groups</span> Team
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="page2.php">
                        <span class="material-icons-outlined">poll</span> Rapports
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="page3.php">
                        <span class="material-icons-outlined">settings</span> Paramètres
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="deconnexion.php">
                        <span class="material-icons-outlined">logout</span> Déconnexion
                    </a>
                </li>
            </ul>
        </aside>
        <!-- Sidebar -->

        <!-- Main -->
        <main class="main-container">
            <div class="main-title">
                <h2>TEAM</h2>
            </div>

            <div class="charts-card">
                <div class="card-inner">
                    <h3>Capucine</h3>
                    <img src="img/people1.jpeg" class="people-card">
                </div>
            </div>
            <div class="charts-card">
                <div class="card-inner">
                    <h3>Gabriel</h3>
                    <img src="img/people2.jpg" class="people-card">
                </div>
            </div>
            <div class="charts-card">
                <div class="card-inner">
                    <h3>Anna</h3>
                    <img src="img/people3.jpeg" class="people-card">
                </div>
            </div>
            <div class="charts-card">
                <div class="card-inner">
                    <h3>Lucas</h3>
                    <img src="img/people4.jpg" class="people-card">
                </div>
            </div>
        </main>
        <!-- Main -->
    </div>
</body>

</html>