<?php
$error = " ";
$allowadd = "false";

$myarray = array(
    array("id", "nom", "Quantité", "Prix","Montant"),
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

if(isset($_POST['submit_ajout'])){
    $id = ($_POST['id']);
    $nom = strtolower($_POST['nom']);
    $prix = ($_POST['prix']);
    $quant = ($_POST['quant']);

    if(($id == "") or ($nom == "") or ($prix == "") or ($quant == "")){
        $error = " /!\ Veillez remplir tout les champs";
    }
    else{
        // $error = " ** vos champs sont bien remplis ** ";
        foreach ($myarray as $line){
            //  foreach($line as $keys){
                 if($line[0] == $id){
                     $error = " /!\ deux produits ne peuvent avoir le meme id ";
                     $allowadd = "false";
                     break;
                 }
                 else if($line[1] == $nom){
                     $error = " /!\ deux produits ne peuvent avoir pareil nom ";
                     $allowadd = "false";
                     break;
                 }
                 else{
                     $allowadd = "true";
                     $error = "! Liste probablement ajoutée avec succes";
                 }
            //  }
            // if($line[0] == $id){
            //     $allowadd = "false";
            //     $error="up ".$allowadd." ";
            //     break;

            // }
            // else{
            //     $allowadd = "true";
            //     $error= $line[0]." down ".$allowadd." ";
            // }
         }
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
    
    <div id="content_all">
    <div id="barre_rouge">
            <div id="nav_link">
                <a href="home.php"> Accueil</a>
                <a href="list.php"> Liste</a>
                <a href="recherche.php"> Recherche</a>
                <a class="survole" href="ajout.php"> Ajout</a>
                <a href="modif.php"> Modification</a>
                <a href="supp.php"> Suppression</a>
            </div>
    </div>
    <div id="form_ajout">
        <p class="Titre"> Ajout de Produits </p>
        <form action="#" method="POST">
            <label for="id"> Id </label> <br>
            <input type="number" name="id"> <br>

            <label for="nom"> Nom </label> <br>
            <input type="text" name="nom"> <br>

            <label for="prix"> Prix </label> <br>
            <input type="number" name="prix" min="100"> <br>

            <label for="quant"> Quantité </label> <br>
            <input type="number" name="quant" min="0"> <br>

            <input type="submit" name="submit_ajout" value="Ajouter">
            <div class="clear"></div>
            
        </form>
        <p class="error"> <?php echo($error); ?> </p>
    </div>

    <div id="array_list">
        <p class="Titre"> Liste des Produits</p>
        <table>
        
        <?php
        if($allowadd == "true"){
            $montant = ($prix * $quant);
            $myarray2 = array(
                array("id", "Nom", "Quantité", "Prix","Montant"),
                array("1", "xbox_One", "18", "75000",""),
                array("2", "nitendo_3ds", "29", "45000",""),
                array("3", "Psp", "20", "32000",""),
                array("4", "wii", "7", "90000",""),
                array("5", "gamboy", "18", "25000",""),
                array("6", "asus_rog", "4", "60000",""),
                array("7", "ps3", "5", "75000",""),
                array("8", "nintendo_switch", "11", "82000",""),
                array("9", "ps2", "9", "43000",""),
                array("10", "ps4", "13", "90000",""),
                array($id,$nom,$quant,$prix,""),

            );
            
        }
        else if($allowadd == "false"){
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

</body>
</html>