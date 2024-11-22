<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1> <?php echo "Les Conditions"; ?></h1>
        <?php

        $isPremium = True;
        $age = 8;

        if($isPremium)
        {
            echo("Vous etes Premium");
        }
        else
        {
            echo"<h2>Crée votre compte</h2><button>S'inscrire</button>";
        }

        if ($age > 18);
        {
            echo "+18";
        }

        switch ($age) {
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            default: "default";

        }
        ?>
    </body>
</html>

<?php   

?>