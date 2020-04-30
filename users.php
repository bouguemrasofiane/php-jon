<?php

$arr = [
    [
        'titre' => "La vie secrète des animaux",
        'Nombre de pages :' => "335 pages",
        'Descriptif' => "Les animaux ressentent-ils de l'injustice, de la compassion, du regret ou ..... ?"
    ],
    [
        'titre' => "Mammifères d'Europe, d'Afrique du Nord et du Moyen-Orient",
        'Nombre de pages :' => "271 pages",
        'Descriptif' => "Cet ouvrage présente toutes les espèces de mammifères vivant dans l'ouest de la région du Paléarctique Occidental....."
    ],
    [
        'titre' => '440 oiseaux',
        'Nombre de pages :' => "256 pages",
        'Descriptif' => "440 espèces d'Europe décrites et illustrées. Des textes simples et accessibles. Des précisions systématiques sur l'habitat et.."
    ],
    [
        'titre' => "Guide Delachaux des traces d'animaux",
        'Nombre de pages :' => "272 pages",
        'Descriptif' => 'Si la majorité des oiseaux sont diurnes et facilement observables, les mammifères sont plus discrets ......'
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/users.css">
    <title>Listing de livre</title>
</head>
<body>
    <?php require_once 'templates/header.php' ?>
    <main>
     <h2 id="titre">Nouveautés :</h2>
     <p>la livraison chez vous  ou en magasin avec -5% de réduction.</p>
    </main>
    <div class="taille">
        <img src="images/la vie.jpg" alt="">
        <img src="images/mammiferes.jpg" alt="">
        <img src="images/oiseaux.jpg" alt="">
        <img src="images/guide.jpg" alt="">
    </div>
     <table>
        <div class="">
        <?php foreach ($arr as $livre): ?>
            <tr>
                <td><?= $livre['titre'] ?></td>
                <td><?= $livre['Nombre de pages :'] ?></td>
                <td><?= $livre['Descriptif'] ?></td>
            </tr>
        <?php endforeach ?>
        </div>
    </table>
    <?php require_once 'templates/footer.php' ?>
</body>
</html>
