<?php 
include_once('connexpdo.php');
$bdd = connex_pdo('sport');

// 1. Enregistrement des coordonnées
$req1 = $bdd->prepare(
    'INSERT INTO Personne (prenom, nom, email, depart) VALUES (:prenom, :nom, :email, :depart)'
);
$req1->execute([
    'prenom' => $_POST['prenom'], 
    'nom'    => $_POST['nom'], 
    'email'  => $_POST['email'], 
    'depart' => $_POST['date']
]);

$id_personne = $bdd->lastInsertId();

// 2. Détermination du sport
$id_sport = null;

if (!empty($_POST['ajouter'])) {
    // Nouveau sport
    $req3 = $bdd->prepare('INSERT INTO sport (design) VALUES (:design)');
    $req3->execute(['design' => $_POST['ajouter']]);
    $id_sport = $bdd->lastInsertId();
} elseif (!empty($_POST['sport'])) {
    $req3 = $bdd->prepare('INSERT INTO sport (design) VALUES (:design)');
    $req3->execute(['design' => $_POST['sport']]);
           
    $id_sport = $bdd->lastInsertId();
    
} else {
    // Aucun sport choisi → stop
    echo "<script>alert('Choisissez un sport');</script>";
    exit();
}

// 3. Insertion dans la table pratique (seulement si on a bien un sport)
$req2 = $bdd->prepare(
    'INSERT INTO pratique (id_personne, id_sport, niveau) VALUES (:id_personne, :id_sport, :niveau)'
);
$req2->execute([
    'id_personne' => $id_personne,
    'id_sport'    => $id_sport,
    'niveau'      => $_POST['niveau']
]);

// 4. Redirection
header('Location:index.php');
exit();

