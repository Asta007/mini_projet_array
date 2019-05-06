<?php
$error = " ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    
    <div id="content_all">
        <div id="barre_rouge"> </div>

        <div id="array_identif">
        <p class="Titre"> Users Disponible</p>
        <table>
        
        <?php
            $myarray = array(
                array('User','password'),
                array('root','mypass'),
                array('public','public_pass'),
                array('public2','random32'),
            );
            $cmpt = 0;
            
            foreach($myarray as $line){
              if($cmpt == 0){
                echo '<tr class="header_table">';
                foreach($line as $key){
                    ?>
                    <td> <?php echo $key. " "; ?> </td>
                    <?php
                }
                echo '</tr>';
              
                $cmpt++;
                }
              else{
                echo '<tr>';

                foreach($line as $key){
                    ?>
                    <td> <?php echo $key. " "; ?> </td>
                    <?php
                }
            echo '</tr>';
              }
            }
        ?>
        </table>
            
        </div>

        <div id="connecting_side">
        <p class="Titre"> Connexion </p>
        <form action="#" method="POST">
            <label for="user"> User </label> <br>
            <input type="text" name="user"> <br>
            <label for="user"> password </label> <br>
            <input type="password" name="pass"> <br>
            <input type="submit" name="submit">
            <div class="clear"></div>
        </form>

        <?php

        if(isset($_POST['submit'])){
            $his_user = ($_POST['user']);
            $his_pass = ($_POST['pass']);

            if(($his_pass == "") or ($his_user == "")){
                $error = "Vous devez remplir tout les champs";
            }
            else{

               if( $indentif == "true"){
                   header("location:home.php");
               }
                else{
                    $error = "Vous identification est invalid";
               }
            }
        }

        ?>

        <p class="error">
            <?php
            echo($error).'<br>';
            echo($indentif);
                //echo($line[0])." ";
                //echo($line[1]);
                //echo(" |===========| ");
                //echo($his_user)." ";
                //echo($his_pass);
            ?>
        </p> <div class="clear"> </div>
        

        </div>
    </div>
</body>
</html>