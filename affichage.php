<?php

include "connexion.php";

   $affiche="SELECT * FROM client";
 
   if($soustraction = mysqli_query($conn, $affiche))
 {
   if(mysqli_num_rows($soustraction) > 0)
 {
     echo "<table>";
     echo "<tr>";
     echo "<th>Civilite :</th>";
     echo "<th>Nom :</th>";
     echo "<th>Prenom :</th>";
     echo "<th>Tel :</th>";
     echo "<th>Email :</th>";
     echo "</tr>";

   while($row = mysqli_fetch_array($soustraction))
 {
     echo "<tr>";
     echo "<td>" . $row['civilite'] . "</td>";
     echo "<td>" . $row['nom']. "</td>";
     echo "<td>" . $row['prenom']. "</td>";
     echo "<td>" . $row['tel']. "</td>";
     echo "<td>" . $row['email']. "</td>";
     echo "</tr>";
 }
     echo "</table>";
 } 
  else
 {
     echo "<h2> <font color=red>Aucune résultat !</font> </h2>";
 }
 }
 
?>
