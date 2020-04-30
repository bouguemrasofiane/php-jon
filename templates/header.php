<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/style.css">
        <title> Header</title>
    </head>
    <body>
        <div >
        <header>
            <nav>
                <ul class="flex">
                    <li class="flex"><a href="/"> Accueil </a></li>
                    <li class="flex"><a href="users.php"> Livres</a></li>
                    <li class="flex"><a href="infos.php"> infos </a></li>
                <?php if (isset($_SESSION['name'])): ?>
                    <li class="flex"><p> <?= $_SESSION['name']  ?>
                        <li class="flex"><a href="profil.php"> profil</a></li>
                        <li class="flex"><a href="controllers/logout.php"> deconnection </a></li>
                      </p>
                    </li>
                <?php else : ?>
                    <li class="flex"><a href="form.php">connexion  </a></li>
                <?php endif ; ?>
                </ul>
            </nav>
        </header>
        </div>
    </body>
</html>
