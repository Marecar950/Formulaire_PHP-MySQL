<?php

include "connexion.php";

 if (empty($_POST['gender']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['phone']) || empty($_POST['mail']) )
  {
    echo "<h2> <font color= red>Erreur : tous les champs ne sont pas renseignés !</font> </h2>";
  }
 else
  {    
  $civilite= $_POST['gender'];
  $nom= $_POST['nom'];
  $prenom= $_POST['prenom'];
  $phone= $_POST['phone'];
  $mail = $_POST['mail'];
  
 
  $req="INSERT INTO client(civilite,nom,prenom,tel,email) values ('$civilite','$nom','$prenom','$phone','$mail')";
 
  $res=mysqli_query($conn,$req);

  if(mysqli_affected_rows($conn) == 1)
 {
     echo "<h2>insertion réussie<h2>";
 }
  else
 {
     echo "<h2> <font color=red>Erreur lors de l'insertion</font> </h2>";
 }
}

?>
