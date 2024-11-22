<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1> <?php echo "Les Variables"; ?></h1>
        <?php

        $nom= "Anthony";
        $age= 30;
        $isPremium = True;

        echo "<p>" . $nom . "</p>";
        echo "<p>" . $age . "</p>";
        echo "<p>Ton nom est $nom";

        $age++;
        $age += 5;
        $age = $age + 4;

        echo "<p> Tu as $age ans";

        $tab = [1, 2, 4, 12];
        $tab [4] = 16;
        array_push($tab, 88);
        
        var_dump($tab);
        echo count($tab);
        sort($tab);

        ?>
    </body>
</html>

<?php   

?>