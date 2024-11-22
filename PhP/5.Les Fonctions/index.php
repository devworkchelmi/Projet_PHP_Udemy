<?php require "./math.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1> <?php echo "Les Fonctions"; ?></h1>
        <?php
        
        $res = add(5,5); //10
        $res2 = add(8,12);//20
        $res3 = add($res, $res2); //30

        echo $res . "<br>";
        echo $res2 . "<br>";
        echo $res3 . "<br>";

        $noms = "anthony, toto, tutu, tata";
        $list_noms = explode(",", $noms);
        var_dump($list_noms);

        echo $list_noms[0];

        $file = "fichier-test.jpg";
        echo substr($file, 0, -4);

        $file2 = "fichiertest.jpg";
        echo str_replace(" ","-", $file2);

        ?>
    </body>
</html>

<?php   

?>