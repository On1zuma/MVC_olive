<?php

require('db.php');
final class Helloworld
{
    private $_S_message = "Hello World";

    public function donneMessage()
    {
        return $this->_S_message ;
    }

    // lien avec la bdd pour la lire : GET
    public function getConnection($xzr)
    {
        $db = new DB();
        if($xzr ===1){
            $requestUser = $db->queryDB("SELECT * FROM user");
        }
        else if($xzr === 2){
            $requestUser = $db->queryDB("SELECT * FROM student ORDER BY id DESC");
        }
        $nbUser = $requestUser->fetchAll();

        return $nbUser;
    }

    // lien avec la bdd pour la lire : GET
    public function getStudent()
    {
        $db = new DB();
        $requestUser = $db->queryDB("SELECT * FROM student ORDER BY id DESC");
        $nbUser = $requestUser->fetchAll();

        return $nbUser;
    }

    // lien avec la bdd pour POST la data
    public function postStudent()
    {
        $db = new DB();
        $groupe =$_POST['groupe'];
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];

        // var_dump($label);
        $db->execDB("INSERT INTO student (groupe,nom,prenom) VALUES ('$groupe', '$nom', '$prenom')"); // insert data into database using POST syntax for validation  

        //redirect
        return header('Location: /index.php?url=helloworld/student');

    }

    // lien avec la bdd pour POST la data
    public function postData()
    {
        $db = new DB();
        $label =$_POST['dbtest'];
        
        var_dump($label);
        $db->execDB("INSERT INTO student (label) VALUES ('$label')"); // insert data into database using POST syntax for validation  
        //redirect
        return header('Location: /index.php?url=helloworld/testform');

    }
}