<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Profil</title>
    </head>
    <body>
        <?php require_once 'templates/header.php' ?>
        <main>
            <form  action="controllers/preferences.php" method="post">
                <p> Qui suis-je? </p>
                <label for="">oui</label>
                <input type="radio" name="myname" value="1" <?= $_SESSION['myname'] ? 'checked' : ''?> >
                <label for="">non</label>
                <input type="radio" name="myname" value="0"<?= !$_SESSION['myname'] ? 'checked' : ''?>> <br>
                <p> à découvrir ! </p>
                <label for="">oui</label>
                <input type="radio" name="image" value="1" <?= $_SESSION['img'] ? 'checked' : ''?> >
                <label for="">non</label>
                <input type="radio" name="image" value="0" <?= !$_SESSION['img'] ? 'checked' : ''?>> <br>
                <p> plus*</p>
                <label for="">oui</label>
                <input type="radio" name="guide" value="1" <?= $_SESSION['guide'] ? 'checked' : ''?> >
                <label for="">non</label>
                <input type="radio" name="guide" value="0" <?= !$_SESSION['guide'] ? 'checked' : ''?>> <br>
                <input type="submit" value="envoyer!">

            </form>
        </main>
        <?php require_once 'templates/footer.php' ?>
    </body>
</html>
