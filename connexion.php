<?php 
      $server="localhost";
      $user="root";
      $password="mouza";
      $database="formulaire";
        
      $conn=mysqli_connect($server,$user,$password,$database);

      if($conn)
      {
//       echo "Connexion réussie";
      }
      else
      {
       die(mysqli_connect_error());
      }
?>
