<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Livre | Connexion</title>
    </head>
    <body>
        <?php require_once 'templates/header.php' ?>
        <?php if (isset($_SESSION['tow'])): ?>
            <div>
                <p class="">Mauvais login ou mot de passe</p>
            </div>
        <?php endif ?>
            <form id="cnx" action="controllers/connection.php" method="POST" >
                <div >
                    <label for="name">nom:</label>
                    <input type="text"  placeholder="mon nom" name="name" value="<?= isset($_SESSION['tow']) ? $_SESSION['tow'] : '' ?>">
                </div>
                <div >
                    <label for="password"> mot de passe:</label>
                    <input type="password" name="password" value="">
                </div>
                <input type="submit" value="connection" >
            </form>
        <?php require_once 'templates/footer.php' ?>
    </body>
</html>
