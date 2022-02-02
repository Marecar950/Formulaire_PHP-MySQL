<?php

include "connexion.php";

 if (empty($_POST['suppression_nom']) || empty($_POST['suppression_prenom']) )
  {
    echo "<h2> <font color= red>Erreur : tous les champs ne sont pas renseignés !</font> </h2>";
  }
 else
  {
 $suppr_nom = $_POST['suppression_nom']; 
 $suppr_prenom = $_POST['suppression_prenom'];

 $requete="DELETE FROM client WHERE nom = '$suppr_nom' AND prenom = '$suppr_prenom'";

 $resultat=mysqli_query($conn,$requete);

 if(mysqli_affected_rows($conn) == 1) 
 {
     echo "<h2>Suppression réussie</h2>";
 }
 else
 {
     echo "<h2> <font color= red>Erreur lors de suppression</font> </h2>";
 } 
}

?>
