<?php
    echo "Merci, bien recu ! <br>";
   $nom = strip_tags($_POST["nom"]);
   if($nom != "")
   {
    echo " Nom = " . $nom;
   }
?>