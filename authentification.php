<?php
session_start(); 
include_once('connexpdo.php') ;

$bdd=connex_pdo('sport');
$email=htmlspecialchars($_POST['email']);

$reponse=$bdd->prepare("SELECT * FROM personne WHERE email=:email");
$reponse->execute(array('email'=>$email));
$donnees=$reponse->fetch();
if(!$donnees){
$_SESSION['email']=htmlspecialchars($_POST['email']);    
header('Location:ajout.php');
exit;
}
else{ 
    $_SESSION['email']=htmlspecialchars($_POST['email']);
    $_SESSION['nom']=$donnees['nom'];
    $_SESSION['prenom']=$donnees['prenom'];
    header("Location:index.php");
exit;
}

/* evec la methode get on fait :
else{ 
    header("Location:index.php?email=$email");
exit;
} 
*/
