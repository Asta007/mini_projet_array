<?php
$error1 = " ";
$allgreat = false ;

if(isset($_POST['submit_search'])){
    $quant = $_POST['quant'];
    $pmin = $_POST['pmin'];
    $pmax = $_POST['pmax'];
    if(($quant == "") and ($pmin == "") and ($pmax == "")){
        $error1 = " /!\ vous devez remplir au moin 1 des 3 chapms !";
        
    }

    else{
        $allgreat = true;
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
                <a class="survole" href="recherche.php"> Recherche</a>
                <a href="ajout.php"> Ajout</a>
                <a href="modif.php"> Modification</a>
                <a href="supp.php"> Suppression</a>
            </div>
        </div>

        <div id="content_recherche">
            <form action="#" method="POST">
                <label for="quant"> Quantité </label> <br>
                <input type="number" name="quant"> <br>

                <label for="pmin"> Prix minimal </label> <br>
                <input type="number" name="pmin"> <br>

                <label for="pmax"> Prix maximale </label> <br>
                <input type="number" name="pmax"> <br>

                <input type="submit" value="Chercher" name="submit_search"> <br> 
                <p class="error"> <?php echo($error1) ?></p>
                <div class="clear"></div>
            </form>
<!-- =========================================================================================== -->

            <div id="array_search">
                <!-- <table> 
                    <tr class="header_table">
                        <td> Id </td>
                        <td>  Quantité </td>
                        <td> Prix </td>
                        <td> Montant </td>
                    </tr>
                </table> -->
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

                if($allgreat == true){
                    if(($quant != "") and ($pmin == "") and ($pmax == "")){
                        $cmpt = 0;
                        foreach ($myarray as $line){
                            if($line[2] < $quant){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }
//===========================================================================================
                    else if(($quant == "") and ($pmin != "") and ($pmax == "")){
                        $cmpt = 0;
                        foreach ($myarray as $line){
                            if($line[3] < $pmin){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }
                    
//===========================================================================================
                    else if(($quant == "") and ($pmin == "") and ($pmax != "")){
                        $cmpt = 0;
                        foreach ($myarray as $line){
                            if($line[3] > $pmax){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }
//===========================================================================================
                    else if(($quant == "") and ($pmin != "") and ($pmax != "")){
                        $cmpt = 0;
                        foreach ($myarray as $line){
                            if(($line[3] < $pmin) or ($line[3] > $pmax) ){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }
//===========================================================================================
                    else if(($quant != "") and ($pmin != "") and ($pmax != "")){
                        $cmpt = 0;
                        foreach ($myarray as $line){
                            if(($line[3] < $pmin) or ($line[3] > $pmax) or ($line[2] < $quant) ){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }

//===========================================================================================
                    else if(($quant != "") and ($pmin != "") and ($pmax = "")){
                        $cmpt = 0;
                        foreach ($myarray as $line){
                            if(($line[3] < $pmin) or ($line[2] < $quant)){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }
//===========================================================================================
                    else if(($quant != "") and ($pmin == "") and ($pmax != "")){
                         $cmpt = 0;
                        foreach ($myarray as $line){
                            if(($line[3] > $pmax) or ($line[2] < $quant) ){
                                if($cmpt != 0){
                                    unset($myarray[$cmpt]);
                                }
                            }
                            $cmpt++;
                        }

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
                    }

                }
//===========================================================================================
            ?>
            </div>
        </div>

</body>
</html>