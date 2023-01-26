<?php
include 'commun.inc.php';
if(isset($_SESSION['visite']))
{   
    // récupère les timestamp des auteurs visités
    $timestamp_auteurs = $_SESSION['visite'];
    // trie les timestamp dans l'ordre décroissant sans changer les clés
    arsort($timestamp_auteurs);
    // var_dump($timestamp_auteurs);
    echo '<br>';
    // sélectionne les 3 premiers éléments du tableau de l'ordre des auteurs $ordre_auteurs
    // important : true pour preserve_keys permet de garder l'odre du tri, 
    // sinon PHP réorganise les index et on perd l'ordre
    $ordre_auteurs = array_slice($timestamp_auteurs, 0, 3, true);
    // var_dump($ordre_auteurs);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteurs</title>
</head>
<body>
    <table border="">
        <br>
        <thead>
            <tr>Auteurs</tr>
        </thead>
<?php 
foreach ($auteurs as $id => $nom):?>

    <tr>
        <td><a href="auteurs.php?id=<?= $id?>"><?=$nom?></a></td>
    </tr>
    <?php endforeach ?>
    </table>
    <br>

    Derniers auteurs consultés : 
    <ul>
    <?php if(isset($ordre_auteurs))
    {
    foreach($ordre_auteurs as $id => $time): ?>
    <li><?= $auteurs[$id] ?></li>
    <?php endforeach;
    } 
    ?>
    </ul>
    
</body>
</html>
