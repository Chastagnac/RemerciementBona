<?php

// Autochargement des dépendances
require_once '../vendor/autoload.php';

try {
    // Requête SQL
    $cnx = new PDO('mysql:host=127.0.0.1;dbname=remerciementsbona', 'root', '');
    $req = 'SELECT * FROM images INNER JOIN type ON images.type=type.id';
    $req .= ' WHERE libelle="' . substr($pageActuelle, 0, -4) . '"';

    $res = $cnx->prepare($req);
    $res->execute();
    $res->fetch(PDO::FETCH_OBJ);

    // Fermeture connexion
    unset($cnx);

    // Définition du répertoire vers les templates
    $loader = new Twig\Loader\FilesystemLoader('../twig');

    // Initialisation de l'environnement Twig
    $twig = new Twig\Environment($loader, array(
        'cache' => '../cache'
    ));

    // Chargemement du template
    $template = $twig->load('images.twig');

    // Affectation des variables du template
    echo $template->render(array(
        'images' => $res
    ));
} catch (PDOException $e) {
    echo 'Erreur: ' . $e->getMessage();
}