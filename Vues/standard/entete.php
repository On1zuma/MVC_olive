<?php
 echo '<header> <h1>Titre</h1></header>';

 $tableau = [
    //name and link
    "Base de donnée" => "database",
    "Un bateau" => "boat",
    "Notre exemple" => "exemple",
    "Form" => "testform",
    "Hello world" => "defaut",
    "Students" => "student",

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