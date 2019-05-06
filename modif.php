<?php
$error1 = " ";
$error2 = " ";

if(isset($_POST['submit_modif'])){ 

    if((($_POST['id']) == "") or (($_POST['nom']) == "") or (($_POST['prix']) == "") or (($_POST['quant']) == "")){
        $error1 = "Veillez remplir tout vos champs";
    }
    else{
        $id = ($_POST['id']);
        $nom = ($_POST['nom']);
        $prix = ($_POST['prix']);
        $quant = ($_POST['quant']);
        $error1 = "";
    }
}
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
<div id="deconect">
    <a href="index.php">
        decon.
    </a>
</div>
    
    <div id="content_all">
    <div id="barre_rouge">
            <div id="nav_link">
                <a href="home.php"> Accueil</a>
                <a href="list.php"> Liste</a>
                <a href="recherche.php"> Recherche</a>
                <a href="ajout.php"> Ajout</a>
                <a class="survole" href="modif.php"> Modification</a>
                <a href="supp.php"> Suppression</a>
            </div>
    </div>
    <div id="content_modif">
       <div id="form_modif">
       <form action="#" method="POST">
           <p class="Titre"> Modification</p>
        <label for="id"> Id </label> <br>
            <input type="number" name="id"> <br>

            <label for="nom"> Nom </label> <br>
            <input type="text" name="nom"> <br>

            <label for="prix"> Prix </label> <br>
            <input type="number" name="prix" min="100"> <br>

            <label for="quant"> Quantité </label> <br>
            <input type="number" name="quant" min="0"> <br>

            <input type="submit" name="submit_modif" value="Modifier">
            <div class="clear"></div>
            <p class="error"> <?php echo($error1) ?> </p>
        </form>
        
       </div>

        <div id="modif_tab">
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
            
            $cmpt =0;
            echo '<table>';
                foreach($myarray2 as $line2){
                   if ($line2[0] == $id){
                       $line2[1] = $nom;
                       $line2[2] = $quant;
                       $line2[3] = $prix;
                       $error2 = "Modification effectuée avec succes";
                   }
                   else{
                   // $error2 = " /!\ une Erreur est survenu au cour de la modification ".'<br>'."verifiez vos entrés.";
                   }
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
        <p class="error"> <?php echo($error2) ?> </p>
        </div>
    </div>

</body>
</html>