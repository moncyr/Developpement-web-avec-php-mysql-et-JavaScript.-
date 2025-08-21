<?php session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Acceuil</title>
        <div id="header"><?php include('header.php'); ?></div>
    <style>
     ul{min-width:50%; height: 10em;  display:grid; 
        grid-template-columns: repeat(5, 1fr); margin-right: 3em;
    }
     div{margin-left: 1em;} 
     input{margin: 1em;}
    
    </style>
    </head>
    <body>
    <div id="sport">
    <p><h2>Liste des Sports Disponibles</h2></p>
    <?php 
    include_once('connexpdo.php');
    $bdd=connex_pdo('sport');
    
    ?>
    <ul> <?php
    $reponse=$bdd->query("SELECT DISTINCT design FROM sport WHERE 1 ORDER BY design ASC");
    $sport=$reponse->fetchAll();
    foreach($sport as $donnees) {
     echo "<li style=text-transform:capitalize;>". $donnees['design']."</li>" ;  
    }
    
    $_SESSION['sport']=$sport;
    ?>
    </ul>
    </div>
    <div id="visiteur">
    <form method="post" action="authentification.php">
        <label for="email"><input type="email" name="email" placeholder="Votre Email" required autocomplete="off"/></label>
        <input type="submit" value="Connexion">
    </form>
    </div>
    <div>
        <?php 
        if(!empty($_SESSION['email'])){ ?>    
        <p> <h2> Bienvenue <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']."</h1>"?></p>
        <?php
        echo "<p><a href=\"ajout.php\"> Enregistrement un nouveau sport </a></p>";
        echo "<p><a href=\"recherche.php\"> Effectuer une Recherche  </a></p>";?>
        <!--<style>form{visibility:hidden;} </style>   --> 
        <?php    
    }
        ?>      
        
        
    </div>
    </body>
</html>