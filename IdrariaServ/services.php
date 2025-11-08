<?php
// Vérifie si les paramètres existent avant de les utiliser
if (isset($_GET['search'])) {
    $search = $_GET['search'];   // récupère la valeur du paramètre "nom"
} else {

}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDRARIA SMP</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between; /* espace entre liens et recherche */
            background-color: #333;
            padding: 10px 20px;
        }

        .navbar .nav-links a {
            color: #f2f2f2;
            text-decoration: none;
            padding: 12px 16px;
            transition: background-color 0.3s;
        }

        .navbar .nav-links a:hover {
            background-color: #575757;
        }

        /* Barre de recherche */
        .navbar .search-container {
            display: flex;
            align-items: center;
        }

        .navbar input[type="text"] {
            padding: 6px;
            font-size: 16px;
            border: none;
            border-radius: 4px 0 0 4px;
            outline: none;
        }

        .navbar button {
            padding: 6px 10px;
            font-size: 16px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
        }

        .navbar button:hover {
            background-color: #45a049;
        }

        /* Responsive simple */
        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar .search-container {
                width: 100%;
                margin-top: 10px;
            }
            .navbar input[type="text"] {
                flex: 1;
                width: 80%;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="nav-links">
            <a href="index.php">Accueil</a>
            <a href="about.php">À propos</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
        </div>
        <form class="search-container" >
            <input type="text" placeholder="<?php echo $search; ?>" name="search">
            <button type="submit">🔍</button>
        </form>
    </div>

    <div style="padding:20px;">
        <h1 style="text-align: center;">Bienvenue dans la partie Services</h1>
        <p style="text-align: center;"> IDRARIA serveur Minecraft Bedrock et Java </p>
    </div>

</body>
</html>
