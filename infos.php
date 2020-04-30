<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mes informations</title>
    </head>
    <body>
        <?php require_once 'templates/header.php' ?>
        <?php if (isset($_SESSION['name'])): ?>
            <main>
                <div class="">
                <?php if ($_SESSION['myname']): ?>
                <h2>Sofiane BOUGUEMRA </h2>
                <p> Ma vie, ma passion et une grande admiration pour les animaux....</p>
                <?php endif ?>
                <?php if ($_SESSION['img']): ?>
                <img src="images/guide.jpg" alt="">
                <?php endif ?>
                <?php if ($_SESSION['guide']): ?>
                <p>recherche d'animaux</p>
                <p>Date sortie / parution :	10/01/2013</p>
                <?php endif ?>
                </div>
            </main>
        <?php else: ?>
                    <main>
                        <p>Vous devez être connecté pour accéder à cette page . </p>
                    </main>
        <?php endif ; ?>
        <?php require_once 'templates/footer.php' ?>
    </body>
</html>
