<?php
// Entrer la liste d'étudiants
echo var_dump($A_vue['ourStudents']);
    echo '<h2>Students</h2>';
    echo '<form action="/index.php?url=helloworld/poststudent" method="post" style="display:flex; flex-direction: column; margin-left:20vw; margin-right:20vw;">';
    echo  '<input type="text" name="nom" placeholder="Nom">';
    echo  '<input type="text" name="prenom" placeholder="Prenom">';
    echo  '<input type="number" name="groupe" placeholder="Groupe">';
    echo  '<input type="submit" value="envoyer">';
    echo '</form>';
?>

<h2 style="margin-top: 1.5cm;">Nos differents étudiants</h2>

<?php
if (array_key_exists("ourStudents", $A_vue)){
    echo "<h3>Student</h3>";
    foreach($A_vue['ourStudents'] as $key){
        echo "<p><strong>Prenom:</strong> $key->prenom </p>";
        echo "<p><strong>Nom:</strong> $key->nom </p>";
        echo "<p><strong>Groupe:</strong> $key->groupe </p>";
        echo "<br>";
    }
}
?>
