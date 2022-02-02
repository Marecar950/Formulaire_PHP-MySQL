<?php

include "connexion.php";

if (empty($_POST['recherche_nom']) || empty($_POST['recherche_prenom']) )
  {
    echo "<h2> <font color=red>Erreur : tous les champs ne sont pas renseignés !</font> </h2>";
  }
 else
  {    
  $Recherche_nom= $_POST['recherche_nom'];
  $Recherche_prenom= $_POST['recherche_prenom'];
 
  $recher="SELECT civilite,nom,prenom,tel,email FROM client WHERE nom='$Recherche_nom' AND prenom='$Recherche_prenom'";
 
   $addition=mysqli_query($conn,$recher);

  if($addition->num_rows > 0)
 {
  while($row = $addition->fetch_assoc()) {
     echo "Civilité : " . $row['civilite'] . "<br>";
     echo "Nom : " . $row['nom']. "<br>";
     echo "Prenom : " . $row['prenom']. "<br>";
     echo "Tel : " . $row['tel']. "<br>";
     echo "Email : " . $row['email']. "<br>";
 }
 }
  else
 {
     echo "<h2> <font color=red>Aucune résultat !</font> </h2>";
 }
}

?>

