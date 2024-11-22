<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1> <?php echo "Les Boucles"; ?></h1>
        <?php
        
        $tab = [8, 12, 9, 14, 26, 72];
        var_dump($tab);

        for($i=0; $i<count($tab) ; $i++)
        {
            echo $i . " = " . $tab[$i] . "<br>";
        }

        foreach ($tab as $nb) {
            echo $nb . "<br>";
        }

        $cpt = 0;
        while ($cpt <=10) {
            $cpt++;
            echo "test";
        }

        ?>
    </body>
</html>

<?php   

?>