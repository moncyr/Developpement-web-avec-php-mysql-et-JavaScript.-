<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <?php include_once('header.php') ?>
     <link rel="stylesheet" href="style.css"/>
    <style>
        th{text-align: left;}
        table{width: 50%;}
    </style>
    </head>
    <body>
       <div>
        <p><h2>Page de Recherche</h2></p>
        <form method="post" action="recherche.php">
            <fieldset>
                <legend> Recherche Des Partenaires</legend>
                <table>
                    <tr>
                        <th>Sport Pratique : </th><td>
                            <select name="sport">
                                <?php 
                                $sport=$_SESSION['sport'];                                         
                                foreach($sport as $cle){
                                echo "<option value=\"".$cle['design']."\">".$cle['design']."</option>";}
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Niveau : </th><td>
                            <select name="niveau">
                                <option value="Debutant">Debutant</option>
                                <option value="Confirme">Confirme</option>
                                <option value="Pro">Pro</option>        
                            </select>
                        </td>                                      
                    </tr>
                    <tr>

                    </tr>
                
               <tr>
                <th></th><td> <input type="submit" value="Recherche"/></td>
               </tr>
            </fieldset>
            </table>
            
        </form>
       </div> 
       <div>
        <?php 
        include_once('connexpdo.php');
        $bdd=connex_pdo('sport');
        $reponse=$bdd->prepare('SELECT nom, prenom, niveau, design FROM personne per, sport s,pratique pra
        WHERE per.id_personne=pra.id_personne AND s.id_sport=pra.id_sport AND s.design=:design
        AND pra.niveau=:niveau');
        $reponse->execute(array('design'=>htmlspecialchars($_POST['sport']),'niveau'=>htmlspecialchars($_POST['niveau'])));
        $donnees=$reponse->fetchAll(PDO::FETCH_ASSOC);
                                 
        ?>   
        <p>
            <table>
                <tr>
                <?php 

            if($reponse->rowCount()==0){
                echo"<p> Il n' y a pas de resultats qui correspond a votre recherche </p>";
            }
                                 
            else{
                     $key=array_keys($donnees[0]) ;               
                    echo "<tr id=head style=text-transform:capitalize;>";
                    foreach($key as $cle){
                    echo "<th>$cle</th>";
                    }
                    echo "</tr>"
                ?>

                </tr>
                <?php 
                foreach($donnees as $cle ){
                    echo"<tr><td>".$cle['nom']."</td>
                    <td>".$cle['prenom']."</td>
                    <td>".$cle['niveau']."</td>
                    <td>".$cle['design']."</td></tr>";
                }
            }
                ?>
                
            </table>
        </p>                         
       </div>
       <p>
        <a href="index.php" style="font-size: large;font-weight: bold; ">Acceuil</a>
        
       </p>                            
    </body>
</html>