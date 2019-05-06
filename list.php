<?php
$error = " ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div id="content_all">
    <div id="barre_rouge">
            <div id="nav_link">
                <a href="home.php"> Accueil</a>
                <a class="survole" href="list.php"> Liste</a>
                <a href="recherche.php"> Recherche</a>
                <a href="ajout.php"> Ajout</a>
                <a href="modif.php"> Modification</a>
                <a href="supp.php"> Suppression</a>
            </div>
        </div>

        <div id="array_list">
        <p class="Titre"> Liste des Produits Dispos</p>
        <table>
        
        <?php
            $myarray = array(
                array("id", "Nom", "Quantité", "Prix","Montant"),
                array("1", "Xbox_One", "18", "75000",""),
                array("2", "Nitendo_3DS", "29", "45000",""),
                array("3", "Psp", "20", "32000",""),
                array("4", "Wii", "7", "90000",""),
                array("5", "Gamboy", "18", "25000",""),
                array("6", "Asus ROG", "4", "60000",""),
                array("7", "Ps3", "5", "75000",""),
                array("8", "Nintendo_Switch", "11", "82000",""),
                array("9", "Ps2", "9", "43000",""),
                array("10", "Ps4", "13", "90000",""),
            );
            $cmpt =0;
            echo '<table>';
                foreach($myarray as $line){
                    if($cmpt==0){
                        echo ('<tr class="header_table">');
                        foreach($line as $key){
                            echo ('<td>');
                            if (($key == $ine[4]) and ($key == "")){
                                $mnt =  ($line[2] * $line[3]);
                                 echo ($mnt);
                            }
                            else{
                                echo ($key);
                            }
                        
                            echo ('</td>');
                        }
                    echo ('</tr>');
                    }
                    else if ($line[2] < 10){
                        echo ('<tr class="under_ten">');
                        foreach($line as $key){
                            echo ('<td>');
                            if (($key == $ine[4]) and ($key == "")){
                                $mnt =  ($line[2] * $line[3]);
                                 echo ($mnt);
                            }
                            else{
                                echo ($key);
                            }
                        
                            echo ('</td>');
                        }
                    }
                    else{
                        echo ('<tr>');
                        foreach($line as $key){
                            echo ('<td>');
                            if (($key == $ine[4]) and ($key == "")){
                                $mnt =  ($line[2] * $line[3]);
                                echo ($mnt);
                            }
                            else{
                                echo ($key);
                            }
                        
                            echo ('</td>');
                        }
                    echo ('</tr>');
                    }
                    $cmpt++;
                }
            echo '</table>';
        ?>
        </div>
    </div>
</body>
</html>