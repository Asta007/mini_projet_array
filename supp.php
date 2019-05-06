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
                <a href="list.php"> Liste</a>
                <a href="recherche.php"> Recherche</a>
                <a href="ajout.php"> Ajout</a>
                <a href="modif.php"> Modification</a>
                <a class="survole" href="supp.php"> Suppression</a>
            </div>
        </div>
    <div id="content_supp">
        <div id="form_supp">
        <p class="Titre"> Suppression </p>
            <form action="#" method="POST">
                <label for="id_supp"> ID </label> <br>
                <input type="number" name="id_supp" min="0">
                <input type="submit" name="submit_supp" value="supprimer">
            </form>
        </div>

        <div id="supp_table">
        <?php
            $myarray2 = array(
                array("id", "Nom", "Quantité", "Prix","Montant"),
                array("1", "xbox_One", "18", "75000",""),
                array("2", "nitendo_3ds", "29", "45000",""),
                array("3", "psp", "20", "32000",""),
                array("4", "wii", "7", "90000",""),
                array("5", "gamboy", "18", "25000",""),
                array("6", "asus_rog", "4", "60000",""),
                array("7", "ps3", "5", "75000",""),
                array("8", "nintendo_switch", "11", "82000",""),
                array("9", "ps2", "9", "43000",""),
                array("10", "ps4", "13", "90000",""),
            );
            if(isset($_POST['submit_supp'])){
                $id_supp = ($_POST['id_supp']);
                foreach ($myarray2 as $line2 ){
                    if($line2[0] == $id_supp){
                        unset($myarray2[$id_supp]);
                        $error = "ID".$id_supp." a éte Supprime avec Succes";
                        break;
                    }
                    else{
                        $error = "ID".$id_supp." n'existe pas dans le tableau";
                    }
                }
            
            }

            $cmpt =0;
            echo '<table>';
                foreach($myarray2 as $line2){
                    if($cmpt==0){
                        echo ('<tr class="header_table">');
                        foreach($line2 as $key2){
                            echo ('<td>');
                            if (($key2 == $ine2[4]) and ($key2 == "")){
                                $mnt =  ($line2[2] * $line2[3]);
                                 echo ($mnt);
                            }
                            else{
                                echo ($key2);
                            }
                        
                            echo ('</td>');
                        }
                    echo ('</tr>');
                    }
                    else if ($line2[2] < 10){
                        echo ('<tr class="under_ten">');
                        foreach($line2 as $key2){
                            echo ('<td>');
                            if (($key2 == $ine2[4]) and ($key2 == "")){
                                $mnt =  ($line2[2] * $line2[3]);
                                 echo ($mnt);
                            }
                            else{
                                echo ($key2);
                            }
                        
                            echo ('</td>');
                        }
                    }
                    else{
                        echo ('<tr>');
                        foreach($line2 as $key2){
                            echo ('<td>');
                            if (($key2 == $ine2[4]) and ($key2 == "")){
                                $mnt =  ($line2[2] * $line2[3]);
                                echo ($mnt);
                            }
                            else{
                                echo ($key2);
                            }
                        
                            echo ('</td>');
                        }
                    echo ('</tr>');
                    }
                    $cmpt++;
                }
            echo '</table>';

            
        ?>
        <p class="error"> <?php echo($error) ?> </p>
        </div>
    </div>

</body>
</html>