<?php
include 'commun.inc.php';
$id_auteur = filter_input(INPUT_GET, 'id');

$this_timestamp = time();

$_SESSION['visite'][$id_auteur] = $this_timestamp;

header('Location:accueil.php');
