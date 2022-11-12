<?php
// Tout cela à des fin de test uniquement ici on retourne les données de notre base de données

// echo "<p>" . $A_vue['database']  . "</p>";
if(array_key_exists("database", $A_vue)){
    echo  "<h2>Email</h2>";
    foreach ($A_vue['database'] as $key) {
        echo "<p>". $key->email."</p>";
    }

    echo"<br>";
    echo  "<h2>Prenom</h2>";

    foreach ($A_vue['database'] as $key) {
        echo "<p>". $key->prenom."</p>";
    }

    echo"<br>";
    echo  "<h2>Nom</h2>";

    foreach ($A_vue['database'] as $key) {
        echo "<p>". $key->nom."</p>";
    }

    echo"<br>";
    echo  "<h2>Last connexion</h2>";

    foreach ($A_vue['database'] as $key) {
        echo "<p>". $key->last_connexion."</p>";
    }
}

?>

<h2>nage nage sur l'eau le petit bateau</h2>