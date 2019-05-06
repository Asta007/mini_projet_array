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
        <div id="barre_rouge"> </div>

        <div id="array_identif">
        <p class="Titre"> Users Disponible</p>
        <table>
        
        <?php
            $myarray = array(
            'User'=>'password', 'root'=>'mypass',
            'public'=>'public_pass', 'public2'=>'random32',
            );
            $cmpt = 0;
            
            foreach($myarray as $a_user=>$a_pass){
              if($cmpt == 0){
                echo '<tr class="header_table">';
                    ?>
                        <td> <?php echo $a_user; ?> </td>
                        <td> <?php echo $a_pass; ?> </td>
                    <?php
                echo '</tr>';
              
                $cmpt++;
                }
              else{

                echo '<tr>';
                    ?>
                        <td> <?php echo $a_user; ?> </td>
                        <td> <?php echo $a_pass; ?> </td>
                    <?php
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

                foreach($myarray as $a_user=>$a_pass){
                    if(($a_user == $his_user) and ($a_pass == $his_pass)){
                        header("location:home.php");
                    }
                    else{
                        $indentif = "false";
                    }


                }

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
            //echo($indentif);
              //  echo " ".$a_user." ";
                //echo $a_pass.'<br>';
               // echo(" |===========| ");
                //echo($his_user)." ";
                //echo($his_pass);
              //  foreach($myarray as $a_user=>$a_pass){
                //    echo ($a_user)." ";
                  //  echo ($a_pass)." ";
                //}
            ?>
        </p> <div class="clear"> </div>
        

        </div>
    </div>
</body>
</html>