<?php
// Tout cela à des fin de test uniquement
    echo var_dump($A_vue['salut']);

    
    echo '<h2>Your favorite game</h2>';
    echo '<form action="/index.php?url=helloworld/postdata" method="post">';
    echo  '<input type="text" name="dbtest" id="dbtest">';
    echo  '<input type="submit" value="tester">';
    echo '</form>';

if (array_key_exists("ourdata", $A_vue)) {
    echo  "<h2>games</h2>";
    foreach ($A_vue['ourdata'] as $key) {
        echo "<p>". $key->label."</p>";
    }
}