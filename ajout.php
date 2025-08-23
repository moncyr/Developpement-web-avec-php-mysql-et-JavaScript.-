<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <title> Enregistrement </title>
    <?php include_once('header.php') ;?>
    <h2 >Enregistrement</h2>
    <link rel="stylesheet" href="style.css"/>
    <style>
        th{text-align: left;margin-left: 2px;}
        
    </style>
    </head>
    <body>
    <div>
        <form method="post" action="enregistrement.php">
            <fieldset>
                <legend>Vos Coordonnees</legend>
                <table>
                    <tr><th>Prenom : </th><td><input type="text"
                         value="<?php if(isset($_SESSION['nom'])) echo $_SESSION['prenom'] ?>"
                          placeholder="Votre Prenom" name="prenom"
                           required autocomplete="off"/></td></tr>
                    <tr><th>Nom (s) : </th><td><input type="text" value="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom']; ?>"
                         placeholder="Votre Nom" name="nom" 
                         required autocomplete="off"/></td></tr>
                    <tr><th>Email : </th><td><input type="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>"
                     placeholder="Votre Email"
                      name="email" required autocomplete="off"/></td></tr>
                    <tr><th>Date : </th><th><input type="date" name="date" required autocomplete="off"/></th></tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Vos Pratiques Sportives : </legend>
                <table>
                <tr><th>Sport Pratique : </th><td><select name="sport">                    
                <?php 
                $sport=$_SESSION['sport'];                                         
                foreach($sport as $cle){
                echo "<option value=\"".$cle['design']."\">".$cle['design']."</option>";    
                }
                ?>
                </select> </td>
                <td> OU: Ajouter un Sport a la liste : <input type=text name="ajouter" placeholder="Ajouter un Sport"/> </td>
            </tr>
               <tr>
                <th>Niveau : </th>
                <td><select name="niveau">
                    <option value="Debutant">Debutant</option>
                    <option value="Confirme">Confirme</option>
                    <option value="Pro">Pro</option>
                </select> </td>
               </tr>
               <tr><th></th><td><input type="submit" value="Enregistrer"></td></tr>
                </table>
            </fieldset>
                
        </form>
    </div>
    <p>
        <a href="index.php" style="font-size: large;font-weight: bold; ">Acceuil</a>
        
    </p>  
    </body>
</html>