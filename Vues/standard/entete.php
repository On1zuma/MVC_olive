<?php
 echo '<header> <h1>Titre</h1></header>';

 $tableau = [
    "Base de donnée" => "database",
    "Un bateau" => "boat",
    "Notre exemple" => "exemple",
    "Form" => "testform",
    "Hello world" => "defaut",
 ]

?>
<strong>
    <ul>
        <?php 
            foreach ($tableau as $key => $value){
                echo '<li>
                        <a href="/index.php?url=helloworld/' . $value . '">' . $key . '</a>
                    </li>';
            }
        ?>


    </ul>
</strong>
<br>