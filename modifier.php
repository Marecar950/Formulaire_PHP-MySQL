<?php

include "connexion.php";

if (empty($_POST['Nom']) || empty($_POST['Prenom']) || empty($_POST['modifier_phone']) )
  {
    echo "<h2> <font color=red>Erreur : tous les champs ne sont pas renseignés !</font> </h2>";
  }
 else
  {    
  $Nom= $_POST['Nom'];
  $Prenom= $_POST['Prenom'];
  $modif_phone= $_POST['modifier_phone'];
 
  $requet="UPDATE client SET tel = '$modif_phone' WHERE nom='$Nom' AND prenom='$Prenom'";
 
    mysqli_query($conn,$requet);
 
  if(mysqli_affected_rows($conn) == 1)
 {
     echo "<h2>Modification réussie</h2>";
 }
 
  else
 {
     echo "<h2> <font color=red>Erreur lors de modification !</font> </h2>";
 }
 }

?>






